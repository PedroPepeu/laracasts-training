<?php

namespace App\Http\Controllers;

use App\Models\Notepad;
use Illuminate\Http\Request;

class NotepadController extends Controller
{
    public function index()
    {
        $notepads = Notepad::with('user:id,name')->latest()->paginate(7);
        
        return view('notepad.index', [
            'notepads' => $notepads,
        ]);
    }

    public function create()
    {
        return view('notepad.create');
    }

    public function show($id)
    {
        $notepad = Notepad::findOrFail($id);

        return view('notepad.show', ['notepad' => $notepad]);
    }

    public function store()
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'content' => ['required'],
        ]);

        Notepad::create([
            'title' => request('title'),
            'content' => request('content'),
            'user_id' => 1, // auth()->id(),
        ]);

        return redirect('/jobs');
    }

    public function edit()
    {
        //
    }

    public function update()
    {
        //
    }

    public function destroy($id)
    {
        $notepad = Notepad::findOrFail($id);

        $notepad->delete();

        return redirect('/notepad');
    }
}
