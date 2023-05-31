<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Fibonacci;

class FibonacciController extends Controller{

    /**
     * @OA\Get(
     *     path="/latest_covid_data",
     *     operationId="/latest_covid_data",
     *     tags={"Covid Data"},
     *     @OA\Parameter(
     *         name="country_name",
     *         in="query",
     *         description="Country name you want to get the data, you can see the list with accessing /get_countries",
     *         required=false,
     *         @OA\Schema(type="string", default="USA")
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Returns latest COVID-19 data based on country inputted",
     *         @OA\JsonContent(
     *             @OA\Property(type="object", ref="#/components/schemas/CovidData")
     *         ),
     *     ),
     * )
     */
    public function get_fibonacci_original(Request $request){
        $count_value = $request->input('count');
        $fibo = new Fibonacci();
        $fibonacci=$fibo->fibonacci($count_value);
        return ["fibonacci"=>$fibonacci];
    }

    public function get_fibonacci_iterative(Request $request){
        $count_value = $request->input('count');
        $fibo = new Fibonacci();
        $fibonacci=$fibo->fibonacci_iterative($count_value);
        return ["fibonacci"=>$fibonacci];
    }

    
}