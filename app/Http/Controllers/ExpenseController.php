<?php

namespace App\Http\Controllers;

use App\Expense;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use phpDocumentor\Reflection\Types\Integer;

class ExpenseController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expenses = Expense::all();

        return new Response($expenses,
            200, [
                'Content-Type' => 'application/json',
                'Date' => Carbon::now()
            ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $expense = Expense::create($request->all());

        $expense->save();

        return new Response($expense, 200, []);

    }

    /**
     * Display the specified resource.
     *
     * @param  integer        $id
     * @return Response
     */
    public function show($id)
    {
        $expense = Expense::find($id);

        return response()->json($expense, 200);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  integer                   $id
     * @return Response
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
     * @param  integer  $id
     * @return Response
     */
    public function destroy($id)
    {
        Expense::find($id)->delete();

        return response()->with('status', 200);
    }
}
