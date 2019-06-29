<?php

namespace App\Http\Controllers;

use App\Expense;
use Carbon\Carbon;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Integer;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expenses = Expense::all();
        return response()->json($expenses)
            ->header('Content-Type', 'application/json')
            ->header('Date', Carbon::now());
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $expense = Expense::create($request->all());
        $expense->save();

        return response()
            ->json($expense);

    }

    /**
     * Display the specified resource.
     *
     * @param  integer        $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $expense = Expense::find($id);

        return response()->json($expense, 200);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  integer                   $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Expense::where('id', $id)
            ->update($request->all());

        return response()
            ->with('status', 204);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Expense::find($id)->delete();

        return response()->with('status', 200);
    }
}
