<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\User;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;

class staffController extends Controller
{
    public function index()
    {
        return view('Pages.staff');
    }
    public function create()
    {
        return view('Pages.manage_staff');
    }
    public function datatables()
    {
            $User = User::where('users.status', '!=', 3)
            ->where('users.role', '=', 3)
            ->select(['users.id', 'users.name', 'users.status']);
        return Datatables::of($User)
            ->addColumn('DT_RowIndex', function ($User) {
                static $index = 0;
                $index++;
                return '<span class="badge rounded-pill bg-label-primary">' . $index . '</span>';
            })
            ->addColumn('actions', function ($User) {
                return '<button class="btn btn-icon me-2 btn-outline-primary edit-User" data-id="' . $User->id . '" title="Edit">
                        <i class="mdi mdi-pen"></i>
                    </button>
                    <button class="btn btn-icon me-2 btn-outline-danger delete-User" data-id="' . $User->id . '" title="Delete">
                        <i class="mdi mdi-delete"></i>
                    </button>';
            })
            ->addColumn('status', function ($User) {
                // You can customize the display based on the value of UN_Status
                if ($User->status == 1) {
                    return '<span class="badge rounded-pill bg-label-success">Active</span>';
                } elseif ($User->status == 2) {
                    return '<span class="badge rounded-pill bg-label-danger">Inactive</span>';
                } else {
                    return '<span class="badge rounded-pill bg-label-secondary">Unknown</span>';
                }
            })

            ->rawColumns(['DT_RowIndex', 'actions', 'status'])
            ->make(true);
    }
    public function update(Request $request, $id)
    {
        // dd($request->all()); // Add this line for debugging
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $id,

        ]);


        // Update the user
        $User = User::find($id);

        $updateData = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'branch' => 1,
            'role' => 3,
            'status' => $request->input('status') ? 1 : 2,
        ];

        if ($request->filled('password')) {
            $updateData['password'] = bcrypt($request->input('password'));
        }

        $User->update($updateData);

        return response()->json(['message' => 'User updated successfully', 'User' => $User]);
    }
    public function edit($id)
    {
        $user = User::find($id);
        // $branches = Branch::where('BN_Status', 1)->get();
        // if (!$user) {
        //     abort(404);
        // }

        return view('Pages.manage_staff', ['user' => $user]);
    }
    public function delete($id)
    {
        $User = User::find($id);

        if (!$User) {
            abort(404, 'Staff not found');
        }
        $User->update(['status' => 3]);
        $toastrMessage = [
            'message' => 'User successfully soft deleted.',
            'type' => 'success',
        ];
        return redirect()->route('staffs.index')->with('toastr', $toastrMessage);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|string|max:255',


        ]);

        // Create a new job
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'password' => bcrypt($request->input('password')),
            'branch' => 1,
            'role' => 3,
            'status' => $request->input('status') ? 1 : 2,
        ]);

        return response()->json(['message' => 'User created successfully', 'user' => $user]);
    }
}
