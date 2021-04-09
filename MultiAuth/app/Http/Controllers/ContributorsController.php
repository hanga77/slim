<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contributor;

class ContributorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contributors = Contributor::Paginate(7);

        return view('contributors.index', compact('contributors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contributors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Contributor::create($request->all());

        return redirect()->route('contributors.index');
        //return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contributor = Contributor::findOrfail($id);
        return view('contributors.show', compact('contributor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contributor = Contributor::findOrfail($id);
        return view('contributors.edit', compact('contributor'));
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
        
        Contributor::where('id', $id)->update($request->except(['_token','_method']));

        return redirect()->route('contributors.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Contributor::destroy($id);

        return redirect()->route('contributors.index');
    }
}
