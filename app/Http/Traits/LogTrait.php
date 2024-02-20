<?php

namespace App\Http\Traits;

use App\Models\Log;

trait LogTrait{
    public function saveLogs($request,$status)
    {
        if($request['type'] == 0){
            $log_data = Log::create([
                'user_id' => $request['user_id'],
                'type' => $request['type'],
                'amount' => $request['amount'],
                'source_id' => $request['source_id'],
                'note' => (isset($request['note'])? $request['note'] : 'Nạp tiền vào tài khoản'),
                'category_id' => $request['category_id'],
                'status' => $status
            ]);
//            dd($log_data);
            $log_data->save();
        }else{
            $log_data = Log::create([
                'user_id' => $request['user_id'],
                'type' => $request['type'],
                'amount' => $request['amount'],
                'source_id' => $request['source_id'],
                'note' => (isset($request['note'])? $request['note'] : 'Khoản chi không xác định'),
                'category_id' => $request['category_id'],
                'status' => $status
            ]);
//            dd($log_data);
            $log_data->save();
        }
        return $log_data->id;
    }
}
