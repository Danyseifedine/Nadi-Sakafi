<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\User;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index()
    {
        $activities = Activity::all();
        $users = User::all();
        return view('dashboard.activity.index', compact('activities', 'users'));
    }

    public function add_activity()
    {
        $users = User::all();
        return view('dashboard.activity.add_activity', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('activities'), $imageName);
            $data['image'] = 'activities/' . $imageName;
        }

        Activity::create($data);
        return redirect()->route('dashboard.activity.index')->with('success', 'تم إنشاء النشاط بنجاح');
    }

    public function edit(Activity $activity)
    {
        return view('dashboard.activity.edit_activity', compact('activity'));
    }

    public function update(Request $request, Activity $activity)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'new_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->only(['title', 'description']);

        if ($request->hasFile('new_image')) {
            $image = $request->file('new_image');
            $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('activities'), $imageName);
            $data['image'] = 'activities/' . $imageName;

            // Delete the old image if it exists
            if ($activity->image && file_exists(public_path($activity->image))) {
                unlink(public_path($activity->image));
            }
        }

        $activity->update($data);
        return redirect()->route('dashboard.activity.index')->with('success', 'تم تحديث النشاط بنجاح');
    }

    public function destroy(Activity $activity)
    {
        $activity->delete();
        return redirect()->route('dashboard.activity.index')->with('success', 'تم حذف النشاط بنجاح');
    }
}
