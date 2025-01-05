<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SpendingController extends Controller
{
    public function income()
    {
        return view('admin.spending.income');
    }

    public function expense()
    {
        return view('admin.spending.expense');
    }

    public function report()
    {
        return view('admin.spending.report');
    }
}