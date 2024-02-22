<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Bank;
use Illuminate\Http\Request;

class ApiBankController extends Controller
{
    public function index()
    {
        $data = Bank::all();
        return response()->json('data',200);
    }

    public function searchBankbyID(Request $request)
    {
        $data = Bank::where('bank_id','=',$request['bank_id']);
        return response()->json('data',200);
    }
}
