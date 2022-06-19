<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Repositories\Repository;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // space that we can use the repository from
    protected $model;

    public function __construct(Task $task)
    {
        // set the model
        $this->model = new Repository($task);
    }


    public function index(Request $request)
    {
        $givenUser = $this->model->all();

        dd($givenUser);
    }
}
