<?php

namespace App\Http\Controllers;

use App\Models\Notepad;
use Illuminate\Http\Request;

class NotepadController extends Controller
{
    public function index()
    {
        $notepads = Notepad::with('user')->latest()->simplePaginate(3);
        
        return view('notepad.index', [
            'notepads' => $notepads,
        ]);
    }

    public function create()
    {
        //
    }

    public function show()
    {
        //
    }

    public function store()
    {
        //
    }

    public function edit()
    {
        //
    }

    public function update()
    {
        //
    }

    public function destroy()
    {
        //
    }
}
