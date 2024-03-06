<?php

namespace App\Http\Controllers;
use App\Models\Branch;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;

class branchController extends Controller
{
    public function index()
    {
        return view('Pages.branch');
    }
    public function create()
    {
        return view('Pages.manage_branch');
    }
    public function datatables()
    {
        $branch = Branch::where('BN_Status', '!=', 3)
            ->select(['BN_Id', 'BN_Name', 'BN_Status','BN_Place','BN_Email','BN_Phone']);
        return Datatables::of($branch)
            ->addColumn('DT_RowIndex', function ($branch) {
                static $index = 0;
                $index++;
                return '<span class="badge rounded-pill bg-label-primary">' . $index . '</span>';
            })
            ->addColumn('actions', function ($branch) {
                return '<button class="btn btn-icon me-2 btn-outline-primary edit-branch" data-id="' . $branch->BN_Id . '" title="Edit">
                        <i class="mdi mdi-pen"></i>
                    </button>
                    <button class="btn btn-icon me-2 btn-outline-danger delete-branch" data-id="' . $branch->BN_Id . '" title="Delete">
                        <i class="mdi mdi-delete"></i>
                    </button>';
            })
            ->addColumn('BN_Status', function ($branch) {
                // You can customize the display based on the value of UN_Status
                if ($branch->BN_Status == 1) {
                    return '<span class="badge rounded-pill bg-label-success">Active</span>';
                } elseif ($branch->BN_Status == 2) {
                    return '<span class="badge rounded-pill bg-label-danger">Inactive</span>';
                } else {
                    return '<span class="badge rounded-pill bg-label-secondary">Unknown</span>';
                }
            })

            ->rawColumns(['DT_RowIndex', 'actions', 'BN_Status'])
            ->make(true);
    }
    public function update(Request $request, $id)
    {
        // dd($request->all()); // Add this line for debugging
        $request->validate([
            'branch_name' => 'required',
            'place' => 'nullable',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|regex:/^[0-9]{10}$/',
            'active' => 'nullable|boolean',
        ]);


        // Update the job
        $branch = Branch::find($id);
        $branch->update([
            'BN_Name' => $request->input('branch_name'),
            'BN_Place' => $request->input('place'),
            'BN_Phone' => $request->input('phone'),
            'BN_Email' => $request->input('email'),
            'BN_Status' => $request->input('active') ? 1 : 2,
        ]);

        return response()->json(['message' => 'Unit updated successfully', 'branch' => $branch]);
    }
    public function edit($id)
    {
     
        $branch = Branch::find($id);
        // var_dump($branch);
        if (!$branch) {
            abort(404);
        }

        return view('Pages.manage_branch', ['branch' => $branch]);
    }
    public function delete($id)
    {
        $branch = Branch::find($id);

        if (!$branch) {
            abort(404, 'Job not found');
        }

        // Update the JB_Status to 3 (soft delete)
        $branch->update(['BN_Status' => 3]);
        // Add a Toastr success message
        $toastrMessage = [
            'message' => 'Unit successfully soft deleted.',
            'type' => 'success',
        ];
        return redirect()->route('branches.index')->with('toastr', $toastrMessage);
    }
    public function store(Request $request)
    {
        // dd($request->all());

         $request->validate([
            'branch_name' => 'required',
            'place' => 'nullable',
            'email' => 'required|email|max:255',
            'phone' => 'nullable',
            'active' => 'nullable|boolean',
        ]);
    
        // $data['BN_Status'] = $request->has('active') ? 1 : 0;
        // $branch = Branch::create($data);
        $branch = Branch::create([
            'BN_Name' => $request->input('branch_name'),
            'BN_Place' => $request->input('place'),
            'BN_Phone' => $request->input('phone'),
            'BN_Email' => $request->input('email'),
            'BN_Status' => $request->input('active') ? 1 : 2,
        ]);
    
        return response()->json(['message' => 'Branch created successfully', 'branch' => $branch]);
    }
}
