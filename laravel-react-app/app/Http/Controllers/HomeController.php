<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Role;
use App\Models\User;
use App\Repositories\Repository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{

    // space that we can use the repository from
    protected $model;
    protected $role;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(User $user, Role $role)
    {
        $this->middleware('auth');
        $this->model = new Repository($user);
        $this->role = new Repository($role);

    }
    public function isAdministrator() {
        return $this->role->all()->where('name', Role::ADMIN)->exists();
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $users = $this->model->with('role')->select('*')
            ->join('roles', 'users.role_id', '=', 'roles.id')
            ->where('roles.name', '=', Role::DEVELOPER)
            ->get();

//        $role = $this->model->with('role')->getRelation();
        dump($users);

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
