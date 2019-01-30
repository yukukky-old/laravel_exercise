<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Folder;

class TaskController extends Controller
{
    //
    public function index()
    {
        $folders = Folder::all();

        return view('tasks/index', [
            'folders' => $folders,
        ]);
    }
}
