<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todoitem;

class TodoitemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todoitem = Todoitem::all();
        return view ('pages.index', compact('todoitem'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $todoitem = new Todoitem;
        $todoitem->name = $request->input('name');
        // $todoitem->status = $request->input('status');
        $todoitem->save();

        return redirect('/')->with('status', 'Todo item added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $todoitem = Todoitem::find($id);
        return view('pages.edit', compact('todoitem'));
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
        $todoitem = Todoitem::find($id);
        $todoitem->name = $request->input('name');
        $todoitem->status = $request->input('status');
        $todoitem->update();

        return redirect('/')->with('status', 'Todo item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function delete($id)
    {
        $todoitem = Todoitem::find($id);
        $todoitem->delete();
        return redirect('/')->with('status', 'Todo item deleted successfully');
        
    }

    public function about()
    {
        return view ('pages.about');
    }

    public function contact()
    {
        return view ('pages.contact');
    }

}
