<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Fibonacci;
/** @OA\Info(title="Fibonacci API", version="0.1") */
class FibonacciController extends Controller{

    /**
     * @OA\Get(
     *     path="/fibo",
     *     operationId="/fibo",
     *     tags={"Fibonacci"},
     *     @OA\Parameter(
     *         name="count",
     *         in="query",
     *         description="Number to be calculated",
     *         required=false,
     *         @OA\Schema(type="int", default="0")
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Returns lthe calculated Fibonacci using the recursive method",
     *     ),
     * )
     */
    public function get_fibonacci_original(Request $request){
        $count_value = $request->input('count');
        $fibo = new Fibonacci();
        $fibonacci=$fibo->fibonacci($count_value);
        return ["fibonacci"=>$fibonacci];
    }

    /**
     * @OA\Get(
     *     path="/fibofast",
     *     operationId="/fibo",
     *     tags={"Fibonacci"},
     *     @OA\Parameter(
     *         name="count",
     *         in="query",
     *         description="Number to be calculated",
     *         required=false,
     *         @OA\Schema(type="int", default="0")
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Returns lthe calculated Fibonacci using the iterative method",
     *     ),
     * )
     */
    public function get_fibonacci_iterative(Request $request){
        $count_value = $request->input('count');
        $fibo = new Fibonacci();
        $fibonacci=$fibo->fibonacci_iterative($count_value);
        return ["fibonacci"=>$fibonacci];
    }

    
}