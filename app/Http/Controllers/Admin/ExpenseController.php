<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Expense; // Đổi từ Expense sang ClubExpense
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    /**
     * Hiển thị danh sách chi tiêu.
     */
    public function index()
    {
        $expenses = Expense::all();
        return view('admin.expenses.index', compact('expenses'));
    }

    /**
     * Hiển thị chi tiết một khoản chi tiêu.
     */
    public function show($id)
    {
        $expense = Expense::findOrFail($id); // Tìm khoản chi tiêu theo ID, lỗi nếu không tìm thấy
        return view('admin.expenses.show', compact('expense'));
    }

    /**
     * Hiển thị form tạo chi tiêu mới.
     */
    public function create()
    {
        return view('admin.expenses.create');
    }

    /**
     * Lưu khoản chi tiêu mới vào database.
     */
    public function store(Request $request)
    {
        // Validate dữ liệu
        $validated = $request->validate([
            'club_id' => 'required|exists:clubs,id', // club_id phải tồn tại trong bảng clubs
            'amount' => 'required|numeric|min:0', // Số tiền không âm
            'description' => 'required|string|max:255',
            'date' => 'required|date',
        ]);

        // Tạo khoản chi tiêu
        Expense::create($validated);

        return redirect()->route('admin.expenses.index')->with('success', 'Chi tiêu đã được tạo thành công!');
    }

    /**
     * Hiển thị form chỉnh sửa khoản chi tiêu.
     */
    public function edit($id)
    {
        $expense = Expense::findOrFail($id); // Tìm khoản chi tiêu theo ID
        return view('admin.expenses.edit', compact('expense'));
    }

    /**
     * Cập nhật khoản chi tiêu trong database.
     */
    public function update(Request $request, $id)
    {
        // Validate dữ liệu
        $validated = $request->validate([
            'club_id' => 'required|exists:clubs,id', // club_id phải tồn tại trong bảng clubs
            'amount' => 'required|numeric|min:0',
            'description' => 'required|string|max:255',
            'date' => 'required|date',
        ]);

        $expense = Expense::findOrFail($id); // Tìm khoản chi tiêu
        $expense->update($validated); // Cập nhật dữ liệu

        return redirect()->route('admin.expenses.index')->with('success', 'Chi tiêu đã được cập nhật thành công!');
    }

    /**
     * Xóa khoản chi tiêu.
     */
    public function destroy($id)
    {
        $expense = Expense::findOrFail($id); // Tìm khoản chi tiêu theo ID
        $expense->delete(); // Xóa khoản chi tiêu

        return redirect()->route('admin.expenses.index')->with('success', 'Chi tiêu đã được xóa thành công!');
    }
}
