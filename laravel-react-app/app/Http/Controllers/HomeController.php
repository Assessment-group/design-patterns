<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::query();
        $user = auth()->user();

        $profile = $user->customer;
        return view::make('home')
            ->with('users', $users);
    }
    public function projects()
    {
        $projects = Project::all();

        return view::make('projects')
            ->with('project', $projects);
    }
}
