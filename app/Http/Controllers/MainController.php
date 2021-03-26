<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $result = null;
        if (isset($_GET["num1"]) and isset($_GET["sign"]) and isset($_GET["sign"])) {
            $result = (string) $this->calculate($_GET["num1"], $_GET['sign'], $_GET["num2"]);
        }
            return view('index', ['result' => $result]);
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
        }
    }
}
