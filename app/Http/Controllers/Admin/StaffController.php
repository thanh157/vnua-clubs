<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function update(Request $request, $id)
    {
        $staff = Staff::findOrFail($id);
        $staff->position = $request->input('position');
        $staff->save();

        return redirect()->route('admin.staff.index')->with('success', 'Chức vụ đã được cập nhật thành công.');
    }
}