<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\agency;

class AgencyController extends Controller
{
    public function index()
    {
        $tasks = response()->json(agency::all());
        return $tasks;
    }

    public function show($id)
    {
        //az azonosító alapján megkeresi
        $task = response()->json(agency::find($id));
        return $task;
    }

    public function destroy($id)
    {
        //az azonosító alapján megkeresi
        agency::find($id)->delete;
        return redirect('/task/list');
    }

    public function store(Request $request)
    {
        $task = new agency();
        $task->name = $request->string;
        $task->country = $request->string;
        $task->type = $request->string;
        $task->save();
        return redirect('/task/list');
    }

    public function update(Request $request, $id)
    {
        $task = agency::find($id);
        $task->name = $request->string;
        $task->country = $request->string;
        $task->type = $request->string;
        $task->save();
        return redirect('/task/list');
    }
    public function get(Request $request, $id)
    {
        $task = agency::find($id);
        $task->name = $request->string;
        $task->country = $request->string;
        $task->type = $request->string;
        $task->save();
        return redirect('/task/list');
    }

    //view file-ok
    public function listView()
    {
        $tasks = agency::all();
        return view('agency.list', ['tasks' => $tasks]);
    }

    public function newView()
    {
        //új rekord rögzítése
        $users = agency::all();
        return view('agency.new', ['users' => $users]);
    }

    public function editView($id)
    {
        $users = agency::all();
        $task = agency::find($id);
        return view('agency.edit', ['users' => $users, 'task' => $task]);
    }
}
