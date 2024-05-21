<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\String_;
use PhpParser\Node\Stmt\Return_;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Project::all();
        return view('project.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'password' => 'required',
            'c_password' => 'required',
        ]);
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'contact' => $request->contact,
            'password' => $request->password,
            'c_password' => $request->c_password,
        ];

        Project::create($data);
        return redirect('project');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {

        $data = Project::find($id);
        return view('project.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        $update = Project::find($id);
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'contact' => $request->contact,
            'password' => $request->password,
            'c_password' => $request->c_password,
        ];

        $update->update($data);
        return redirect('project');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {


        Project::destroy($id);

        return redirect('project');
    }
}
