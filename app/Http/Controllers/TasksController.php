<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index() {
        // return 'Hello world!';
        return view('welcome')->with('test', 'Testiram');
    }

    public function store() {
        Task::create(request()->only(['title', 'description']));

        return redirect('tasks');
    }

    public function show(Conference $conference) {
        return view('conferences.show')->with('conference', $conference);
    }
}
