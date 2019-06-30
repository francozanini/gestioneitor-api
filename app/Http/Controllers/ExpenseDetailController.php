<?php

namespace App\Http\Controllers;

use App\Expense;
use App\ExpenseDetail;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ExpenseDetailController extends Controller
{

    /*Route::get('/expenses/{expense}/details', 'ExpenseDetailsController@index');
Route::get('/expenses/{expense}/details/{detail}', 'ExpenseDetailsController@show');
Route::post('/expenses/{expense}/details}', 'ExpenseDetailsController@store');
Route::delete('/expenses/{expense}/details/{detail}', 'ExpenseDetailsController@destroy');
Route::put('/expenses/{expense}/details/{detail}', 'ExpenseDetailsController@update');*/

    /**
     * Display a listing of the resource.
     *  @param integer  $id
     * @return Response
     */
    public function index($id)
    {
        $details = Expense::find($id)->details()->get();

        return new Response($details, 200, []);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $detail = new ExpenseDetail($request->all());

        $detail->save();

        return new Response($detail, 201, []);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  integer  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $detail = ExpenseDetail::find($id);

        if (!$detail)
        {
            return new Response(["error" => "Detail not found"], 400);
        }

        $detail->title = $request->input('title');
        $detail->amount = $request->input('amount');
        $detail->description = $request->input('description');

        $detail->save();

        return new Response([], 200, []);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  integer  $id
     * @return Response
     */
    public function destroy($id)
    {
        $detail = ExpenseDetail::find($id);

        if (!$detail)
        {
            return response()->with('status', 204);
        }

        $detail->delete();

        return new Response('', 20);
    }
}
