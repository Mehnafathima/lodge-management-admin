<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;

class unitController extends Controller
{
    public function index()
    {
        return view('Pages.unit');
    }
    public function create()
    {
        return view('Pages.manage_unit');
    }
    public function datatables()
    {
        $unit = Room::where('RM_Status', '!=', 3)
            ->select(['RM_Id', 'RM_Name', 'RM_Status']);
        return Datatables::of($unit)
            ->addColumn('DT_RowIndex', function ($unit) {
                static $index = 0;
                $index++;
                return '<span class="badge rounded-pill bg-label-primary">' . $index . '</span>';
            })
            ->addColumn('actions', function ($unit) {
                return '<button class="btn btn-icon me-2 btn-outline-primary edit-unit" data-id="' . $unit->RM_Id . '" title="Edit">
                        <i class="mdi mdi-pen"></i>
                    </button>
                    <button class="btn btn-icon me-2 btn-outline-danger delete-unit" data-id="' . $unit->RM_Id . '" title="Delete">
                        <i class="mdi mdi-delete"></i>
                    </button>';
            })
            ->addColumn('RM_Status', function ($unit) {
                // You can customize the display based on the value of RM_Status
                if ($unit->RM_Status == 1) {
                    return '<span class="badge rounded-pill bg-label-success">Active</span>';
                } elseif ($unit->RM_Status == 2) {
                    return '<span class="badge rounded-pill bg-label-danger">Inactive</span>';
                } else {
                    return '<span class="badge rounded-pill bg-label-secondary">Unknown</span>';
                }
            })

            ->rawColumns(['DT_RowIndex', 'actions', 'RM_Status'])
            ->make(true);
    }
    public function update(Request $request, $id)
    {
        // dd($request->all()); // Add this line for debugging
        $request->validate([
            'unit_name' => 'required|string|max:255',
            'active' => 'nullable|boolean',
        ]);


        // Update the job
        $unit = Room::find($id);
        $unit->update([
            'RM_Name' => $request->input('unit_name'),
            'RM_Status' => $request->has('active') ? 1 : 2,
        ]);

        return response()->json(['message' => 'Room updated successfully', 'unit' => $unit]);
    }
    public function edit($id)
    {
        $unit = Room::find($id);

        if (!$unit) {
            abort(404);
        }

        return view('Pages.manage_unit', ['unit' => $unit]);
    }
    public function delete($id)
    {
        $unit = Room::find($id);

        if (!$unit) {
            abort(404, 'Job not found');
        }

        // Update the JB_Status to 3 (soft delete)
        $unit->update(['RM_Status' => 3]);
        // Add a Toastr success message
        $toastrMessage = [
            'message' => 'Unit successfully soft deleted.',
            'type' => 'success',
        ];
        return redirect()->route('units.index')->with('toastr', $toastrMessage);
    }
    public function store(Request $request)
    {
        $request->validate([
            'unit_name' => 'required|string|max:255',
            'active' => 'nullable|boolean',
        ]);

        // Create a new job
        $unit = Room::create([
            'RM_Name' => $request->input('unit_name'),
            'RM_Status' => $request->input('active') ? 1 : 2,
        ]);

        return response()->json(['message' => 'Room created successfully', 'unit' => $unit]);
    }
}
