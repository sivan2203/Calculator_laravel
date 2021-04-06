<?php

namespace App\Http\Controllers;

use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{

    public function recieveData(Request $request){
        $result = $request->input('result');
        $date = date('l jS \of F Y h:i:s A');
        if($this->writeLog($result, $date)) {
            return response()->json(['answer' => $date], 200);
        }
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

    public function writeLog($result, $date){
        $file = fopen('/Applications/MAMP/htdocs/homework_2_laravel/public/log/log.txt', 'a');
        $logData = $result. " - " . $date. "\n";
        file_put_contents('/Applications/MAMP/htdocs/homework_2_laravel/public/log/log.txt', $logData, FILE_APPEND);
        return 1;
    }
}
