<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{

    public function recieveData(Request $request){
        $num1 = $request->input('num1');
        $sign = $request->input('sign');
        $num2 = $request->input('num2');
        $res = (string) $this->calculate($num1, $sign, $num2);
        return response()->json(['answer' => $res], 200);
    }

    public function calculate($num1, $sign, $num2){
        if($sign == '+') {
            return (float)$num1 + (float)$num2;
        } elseif($sign == '-'){
            return (float)$num1 - (float)$num2;
        } elseif($sign == '*'){
            return (float)$num1 * (float)$num2;
        } elseif($sign == '/'){
            return (float)$num1 / (float)$num2;
        } elseif($sign == '%'){
            return (float)$num1 % (float)$num2;
        } else {
            return "Ошибка, проверьте вводимые данные!";
        }
    }
}
