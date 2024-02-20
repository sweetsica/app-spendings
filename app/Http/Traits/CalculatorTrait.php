<?php

namespace App\Http\Traits;

trait CalculatorTrait{
    public function calc_note($first,$calculation,$amount)
    {
        return $calculation === '+' ? $first + $amount : ($calculation === '-' ? $first - $amount : "Tính toán không thành công! CT-08");

//        return $result = ($first.$calculation.$amount);
    }
}
