<?php

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('events', compact('events'));
    }   
    
    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'begin' => 'required',
            'finish' => 'required',
        ]);

        $events = Event::create([
            'title' => $request->title,
            'begin' => $request->date('begin'),
            'finish' => $request->date('finish'),
        ]);

        return $this->index();
    }

    public function show($id)
    {
        $event= Event::find($id);
    }

    public function edit($id)
    {

    }

    public function update(Request $request)
    {

    }

    public function destroy($id)
    {

    }

}