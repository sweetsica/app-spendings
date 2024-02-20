<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Traits\CalculatorTrait;
use App\Http\Traits\LogTrait;
use App\Models\Category;
use App\Models\History;
use App\Models\Log;
use App\Models\Source;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AccountantController extends Controller
{
    use CalculatorTrait,LogTrait;
    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
                $transaction_data = $request->all();//Nhận dữ liệu giao dịch

                $transaction_user = User::query()->where('id','=',$transaction_data['user_id'])->first();//Tìm thông tin người dùng
                $transaction_source = Source::query()->where('user_id','=',$transaction_data['user_id'])->where('id','=',$transaction_data['source_id'])->first();//Lấy thông tin nguồn tiền - amount

                $transaction_amount = $transaction_data['amount'];//Số lượng

                $transaction_type = $transaction_data['type'] == 0 ? "+" : "-";//Add - Minus

//                dd($transaction_source,$transaction_type,$transaction_amount);
                $transaction_source_change = $this->calc_note($transaction_source['total'],$transaction_type,$transaction_amount);
                $transaction_source['total'] = $transaction_source_change;

                $transaction_source->save() ? $transaction_source['log_id'] = $this->saveLogs($request,1) : $transaction_source['log_id'] = $this->saveLogs($request,0);

            DB::commit();
//                return response()->json($transaction_source,200);
                return redirect()->back();

        }catch (\Exception $error){
            DB::rollback();
            throw $error;
        }
    }

    public function searchTransactionId(Request $request)
    {
        $log_data = Log::query()->where('id','=',$request['id'])->first();
        $transaction_data['username'] = User::query()->findOrFail($log_data['user_id'])->name;
        $transaction_data['type'] = ($log_data['type'] == 0 ? "-" : "+");
        $transaction_data['amount'] = $log_data['amount'];
        $transaction_data['category_id'] = Category::query()->findOrFail($log_data['category_id'])->name;
        $transaction_data['source_id'] = Source::query()->findOrFail($log_data['source_id'])->name;

        return response()->json($transaction_data,200);
    }

    public function searchTransactionUserId(Request $request)
    {
        $log_data = Log::query()->where('user_id','=',$request['id'])->orderBy('id', 'DESC')->take(30)->get();
        return response()->json($log_data,200);
    }
}
