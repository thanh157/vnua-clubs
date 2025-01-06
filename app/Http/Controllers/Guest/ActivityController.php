<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActivityController extends Controller
{
    /**
     * Hiển thị danh sách các hoạt động.
     */
    public function index()
    {
        $activities = Activity::all();
        return view('client/pages/actives/actives', compact('activities'));
    }

    /**
     * Hiển thị chi tiết một hoạt động.
     */
    public function show($id)
    {
        $activity = Activity::findOrFail($id);
        return view('client.pages.actives.show', compact('activity'));
    }

    /**
     * Hiển thị form tạo mới hoạt động.
     */
    public function create()
    {
        return view('client.pages.actives.create');
    }

    /**
     * Lưu trữ hoạt động mới.
     */
    public function store(Request $request)
    {
        $user = Auth::user();

        if (!in_array($user->role, ['A', 'B'])) {
            return redirect()->route('activities.index')->with('error', 'You do not have permission to update this activity.');
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'location' => 'required|string|max:255',
            'status' => 'required|integer',
            'club_id' => 'nullable|exists:clubs,id',
            'budget' => 'required|integer',
        ]);

        Activity::create($validated);

        return redirect()->route('activities.index')->with('success', 'Activity created successfully.');
    }

    /**
     * Hiển thị form chỉnh sửa hoạt động.
     */
    public function edit($id)
    {
        $activity = Activity::findOrFail($id);
        return view('client.pages.actives.edit', compact('activity'));
    }

    /**
     * Cập nhật hoạt động.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'location' => 'required|string|max:255',
            'status' => 'required|integer',
            'club_id' => 'nullable|exists:clubs,id',
            'budget' => 'required|integer',
        ]);

        $activity = Activity::findOrFail($id);
        $activity->update($validated);

        return redirect()->route('activities.index')->with('success', 'Activity updated successfully.');
    }

    /**
     * Xóa hoạt động.
     */
    public function destroy($id)
    {
        $activity = Activity::findOrFail($id);
        $activity->delete();

        return redirect()->route('activities.index')->with('success', 'Activity deleted successfully.');
    }
}