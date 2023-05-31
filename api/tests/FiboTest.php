<?php

namespace Tests;

use App\Http\Controllers\Fibonacci;

class FiboTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_fibo()
    {
        $fibo = new Fibonacci();
        for($count_value=0; $count_value < 15; $count_value++){
            $fibonacci_original=$fibo->fibonacci($count_value);
            $fibonacci_iteractive=$fibo->fibonacci_iterative($count_value);
            print($count_value." original is ".$fibonacci_original." ");
            print($count_value." itera is ".$fibonacci_iteractive);
            print("\n");
            $this->assertEquals($fibonacci_original, $fibonacci_iteractive);
        }
    }
}