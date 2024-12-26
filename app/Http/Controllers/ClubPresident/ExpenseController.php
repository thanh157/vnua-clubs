<?php

namespace App\Http\Controllers\ClubPresident;

use App\Http\Controllers\Controller;
use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function index()
    {
        $expenses = Expense::where('club_id', auth()->user()->club_id)->get();
        return view('clubpresident.expenses.index', compact('expenses'));
    }

    public function store(Request $request)
    {
        $expense = new Expense($request->all());
        $expense->club_id = auth()->user()->club_id;
        $expense->save();

        return redirect()->route('clubpresident.expenses.index');
    }
}
