<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index(Request $request)
    {
        $items = Todo::all();
        return view('index', ['items' => $items]);
    }
    public function create(Request $request)
    {
        $this->validate($request, Todo::$rules);
        $todo = new Todo;
        $forms = $request->all();
        unset($forms['_token_']);
        $todo->fill($forms)->save();
        return redirect('/');
    }
    public function update(Request $request)
    {
        $this->validate($request, Todo::$rules);
        $forms = $request->except(['_token']);
        Todo::where('id', $request -> id)->update($forms);
        return redirect('/');
    }
}
