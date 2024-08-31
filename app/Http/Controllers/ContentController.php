<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\User;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function about_us()
    {
        return view('pages.about_us');
    }

    public function medical_center()
    {
        $doctors = User::jsonDoctors();
        return view('pages.medical_center', compact('doctors'));
    }

    public function activities()
    {
        $activities = Activity::all();
        return view('pages.activities', compact('activities'));
    }
}
