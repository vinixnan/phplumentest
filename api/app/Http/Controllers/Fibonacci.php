<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Fibonacci {
    public function __construct(){}

    public function fibonacci($count){
        if($count == 0 || $count == 1){
          return 1;
        } else {
          return $this->fibonacci($count - 1) + $this->fibonacci($count - 2);
        }
    }

    public function fibonacci_iterative($count){
        if($count == 0 || $count == 1){
            return 1;
        } else {
            $fib = [0,1];
            for($i=1;$i<$count;$i++) {
                $fib[] = $fib[$i]+$fib[$i-1];
            }
            return $fib[$count] + $fib[$count-1];
        }
    }
}
