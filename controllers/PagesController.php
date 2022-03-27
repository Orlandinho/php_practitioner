<?php

class PagesController
{
    public function index()
    {
        $tasks = App::get('database')->selectAll('todos');

        return view('index', [
            'tasks' => $tasks
        ]);
    }

    public function store()
    {
        App::get('database')->insert('todos', [
            'description' => $_POST['description'],
            'completed' => 0
        ]);

        return redirect('');
    }

    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}