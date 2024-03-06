<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use App\Models\GarageWorkDetail;
use Carbon\Carbon;
use App\Models\GarageWork;
use App\Models\GarageWorkProduct;
use Illuminate\Http\Request;
use illuminate\support\Facades\Hash;

class ApiController
{
    public function logIn()
    // {
    //     $user = User::where('email', request('email'))
    //         ->where('role', '3')
    //         ->first();
    //     if ($user && password_verify(request('password'), $user->password)) {
    //         $token = $user->createToken('garage-app')->plainTextToken;
    //         return response()->json([
    //             'email' => request('email'),
    //             'password' => request('password'),
    //             'data' => $user,
    //             'token' => $token,
    //             'status' => 200,
    //             'message' => 'The user has logged in succesfully'
    //         ]);
    //     } else {
    //         return response()->json([
    //             'status' => 422,
    //             'message' => 'Invalid Credentials'
    //         ]);
    //     }
    // }
    {
        $user = User::where('role', '3')->first();
        if ($user && password_verify(request('password'), $user->password)) {
            $token = $user->createToken('ph_residency')->plainTextToken;
            return response()->json([
                'user' => $user,
                'token' => $token,
                'status' => 200,
                'message' => 'The user has logged in successfully'
            ]);
        } else {
            return response()->json([
                'status' => 422,
                'message' => 'Invalid Credentials'
            ]);
        }
    }
    public function logOut()
    {
        $userId = auth()->user()->id;
        $user = User::find($userId);
        $user->tokens()->delete();
        return response()->json([
            'status' => 200,
            'message' => 'User logged out successfully'
        ]);
    }
    public function getBranchCustomer()
    {
        $userId = auth()->user()->id;
        $user = User::find($userId);
        if ($user) {
            $branch = $user->branch;
            $customerList = GarageWork::where('BN_Id', $branch)
                ->with('vehicle.customer:CS_Id,CS_Name')
                ->get();
            return response()->json([
                'status' => 200,
                'message' => 'Retrieving customer details of a branch',
                'customers' => $customerList
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'Customer Details not found'
            ]);
        }
    }
    public function addNewCustomer(Request $request)
    {
        $customer = new Customer();
        $customer->CS_Name = $request->input('customer_name');
        $customer->CS_Phone = $request->input('customer_phone');
        $customer->CS_DL_No = $request->input('license_number');
        $customer->CS_Location = $request->input('customer_location');
        $customer->CS_Img = $request->input('customer_image', '');
        $customer->CS_License_Image = $request->input('license_image', '');
        $customer->save();

        return response()->json([
            'status' => 200,
            'message' => 'Customer saved successfully',
            'customer' => $customer,
        ]);
    }
    public function saveWork(Request $request)
    {
        $currentDateTime = Carbon::now();

        $currentDate = Carbon::now()->format('Y-m-d');
        $tokenCount = GarageWork::whereDate('created_at', $currentDate)->count() + 1;

        $garageWork = new GarageWork();
        $garageWork->ST_Id = $request->input('ST_Id');
        $garageWork->VH_Id = $request->input('VH_Id');
        $garageWork->BN_Id = $request->input('BN_Id');
        $garageWork->WK_Token = $tokenCount;
        $garageWork->WK_Status = $request->input('WK_Status');
        $garageWork->save();
        $wkId = $garageWork->WK_Id;
        $details = $request->input('details', []);  //array param should be 'datails'
        foreach ($details as $detail) {
            $garageWorkDetail = new GarageWorkDetail();
            $garageWorkDetail->WK_Id = $wkId;
            $garageWorkDetail->JB_Id = $detail['job_id'];
            $garageWorkDetail->WK_DT_Status = 1;
            $garageWorkDetail->WK_DT_Start_Time = $currentDateTime;
            $garageWorkDetail->WK_DT_End_Time = '';
            $garageWorkDetail->save();
        }
        //to store product details used
        // foreach ($details as $detail) {
        //     $garageWorkDetail = new GarageWorkDetail();
        //     $garageWorkDetail->WK_Id = $wkId;
        //     $garageWorkDetail->JB_Id = $detail['JB_Id'];
        //     $garageWorkDetail->WK_DT_Status = $detail['WK_DT_Status'];
        //     $garageWorkDetail->WK_DT_Start_Time = $currentDateTime;
        //     $garageWorkDetail->WK_DT_End_Time = $detail['WK_DT_End_Time'];
        //     $garageWorkDetail->save();
        //     $wkDtId = $garageWorkDetail->WK_DT_Id;
        //     $products = $detail['products'] ?? [];
        //     foreach ($products as $product) {
        //         $garageWorkProduct = new GarageWorkProduct();
        //         $garageWorkProduct->WK_DT_Id = $wkDtId;
        //         $garageWorkProduct->PD_Id = $product['PD_Id'];
        //         $garageWorkProduct->WK_PD_Qty = $product['WK_PD_Qty'];
        //         $garageWorkProduct->save();
        //     }
        // }
        return response()->json([
            'status' => 200,
            'message' => ' Work details saved successfully',
            'garage_work' => $garageWork,
            'garage_work_details' => GarageWorkDetail::where('WK_Id', $wkId)->get(),
        ]);
    }
    public function getbranchhistory()
    {
        $branch = request('branch_id');
        $startDate = Carbon::parse(request('from_Date'))->startOfDay()->format('Y-m-d H:i:s');
        $endDate = Carbon::parse(request('to_Date'))->endOfDay()->format('Y-m-d H:i:s');
    
        $garageWorkDetails = GarageWork::where('BN_Id', $branch)
            ->whereBetween('created_at', [$startDate, $endDate])
            ->with(['user', 'vehicle', 'garageWorkDetails'])
            ->get();
    
        return response()->json([
            'status' => 200,
            'message' => 'Details fetched successfully',
            'garage_work_details' => $garageWorkDetails,
        ]);
    }
}
