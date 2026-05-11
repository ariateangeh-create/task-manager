<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // kunin lahat ng tasks ng logged-in user
        $tasks = auth()->user()->tasks;

        return view('dashboard', compact('tasks'));
    }
}