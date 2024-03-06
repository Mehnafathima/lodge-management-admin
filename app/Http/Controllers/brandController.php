<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;

class brandController extends Controller
{
    public function index()
    {
        return view('Pages.brand');
    }
    public function create()
    {
        return view('Pages.manage_brand');
    }
    public function datatables()
    {
        $brand = Brand::where('BR_Status', '!=', 3)
            ->select(['BR_Id', 'BR_Name', 'BR_Status']);
        return Datatables::of($brand)
            ->addColumn('DT_RowIndex', function ($brand) {
                static $index = 0;
                $index++;
                return '<span class="badge rounded-pill bg-label-primary">' . $index . '</span>';
            })
            ->addColumn('actions', function ($unit) {
                return '<button class="btn btn-icon me-2 btn-outline-primary edit-brand" data-id="' . $unit->BR_Id . '" title="Edit">
                        <i class="mdi mdi-pen"></i>
                    </button>
                    <button class="btn btn-icon me-2 btn-outline-danger delete-brand" data-id="' . $unit->BR_Id . '" title="Delete">
                        <i class="mdi mdi-delete"></i>
                    </button>';
            })
            ->addColumn('BR_Status', function ($brand) {
                // You can customize the display based on the value of UN_Status
                if ($brand->BR_Status == 1) {
                    return '<span class="badge rounded-pill bg-label-success">Active</span>';
                } elseif ($brand->BR_Status == 2) {
                    return '<span class="badge rounded-pill bg-label-danger">Inactive</span>';
                } else {
                    return '<span class="badge rounded-pill bg-label-secondary">Unknown</span>';
                }
            })

            ->rawColumns(['DT_RowIndex', 'actions', 'BR_Status'])
            ->make(true);
    }
    public function update(Request $request, $id)
    {
        // dd($request->all()); // Add this line for debugging
        $request->validate([
            'brand_name' => 'required|string|max:255',
            'active' => 'nullable|boolean',
        ]);


        // Update the job
        $brand = Brand::find($id);
        $brand->update([
            'BR_Name' => $request->input('brand_name'),
            'BR_Status' => $request->has('active') ? 1 : 2,
        ]);

        return response()->json(['message' => 'Brand updated successfully', 'brand' => $brand]);
    }
    public function edit($id)
    {
        $brand = Brand::find($id);

        if (!$brand) {
            abort(404);
        }

        return view('Pages.manage_brand', ['brand' => $brand]);
    }
    public function delete($id)
    {
        $brand = Brand::find($id);

        if (!$brand) {
            abort(404, 'Job not found');
        }

        // Update the JB_Status to 3 (soft delete)
        $brand->update(['BR_Status' => 3]);
        // Add a Toastr success message
        $toastrMessage = [
            'message' => 'Unit successfully soft deleted.',
            'type' => 'success',
        ];
        return redirect()->route('brands.index')->with('toastr', $toastrMessage);
    }
    public function store(Request $request)
    {
        $request->validate([
            'brand_name' => 'required|string|max:255',
            'active' => 'nullable|boolean',
        ]);

        // Create a new job
        $brand = Brand::create([
            'BR_Name' => $request->input('brand_name'),
            'BR_Status' => $request->input('active') ? 1 : 2,
        ]);

        return response()->json(['message' => 'Unit created successfully', 'brand' => $brand]);
    }
}
