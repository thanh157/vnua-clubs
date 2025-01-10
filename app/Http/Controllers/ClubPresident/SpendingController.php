<?php

namespace App\Http\Controllers\ClubPresident;

use App\Http\Controllers\Controller;
use App\Models\Spending;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SpendingController extends Controller
{
    /**
     * Hiển thị danh sách các khoản chi tiêu.
     */
    public function index()
    {
        $spendings = Spending::all();
        return view('admin.pages.admin-club.admin-spending', compact('spendings'));
    }

    /**
     * Lưu khoản chi tiêu mới.
     */
    public function store(Request $request)
    {
        $request->validate([
            'expense_name' => 'required|string|max:255',
            'type' => 'required|in:income,expense',
            'amount' => 'required|numeric',
            'category' => 'required|string|max:255',
            'date' => 'required|date',
            'description' => 'nullable|string',
        ]);

        Spending::create($request->all());

        return redirect()->route('club-president-spending.index')->with('success', 'Khoản chi tiêu đã được tạo.');
    }

    /**
     * Hiển thị form chỉnh sửa khoản chi tiêu.
     */
    public function edit($id)
    {
        $spending = Spending::findOrFail($id);
        return view('client.pages.spending.edit', compact('spending'));
    }

    /**
     * Cập nhật khoản chi tiêu.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'expense_name' => 'required|string|max:255',
            'type' => 'required|in:income,expense',
            'amount' => 'required|numeric',
            'category' => 'required|string|max:255',
            'date' => 'required|date',
            'description' => 'nullable|string',
        ]);

        $spending = Spending::findOrFail($id);
        $spending->update($request->all());

        return redirect()->route('admin-club.spendings')->with('success', 'Khoản chi tiêu đã được cập nhật.');
    }

    /**
     * Xóa khoản chi tiêu.
     */
    public function destroy($id)
    {
        $spending = Spending::findOrFail($id);
        $spending->delete();

        return redirect()->route('club-president-spending.index')->with('success', 'Khoản chi tiêu đã được xóa.');
    }
}
