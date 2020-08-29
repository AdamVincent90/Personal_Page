<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository;

class RepositoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $repos = Repository::all();
        return view('repo.index')->with('repos', $repos);
    }

    public function manage() {
        $repos = Repository::all();
        return view('repo.manage')->with('repos', $repos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('repo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Repository::create($request->all());
        return redirect('/repositories');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $repos = Repository::where('repository_id', $id)->get();
        return view('repo.index', compact('repos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $repo = Repository::where('repository_id', $id)->get();

        return view('repo.edit', compact('repo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $repo = Repository::where('repository_id', $id)->first();
        $repo->update($request->all());

        return redirect('repositories/manage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Repository::destroy($id);
        return redirect('repositories/manage');
    }
}
