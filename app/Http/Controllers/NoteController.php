<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note; // Make sure to import your Note model
use Illuminate\Support\Facades\Storage;

class NoteController extends Controller
{
    /**
     * Show the form for creating a new note.
     */
    public function create()
    {
        // This just shows the view file you created
        return view('notes.create');
    }

    /**
     * Store the newly created note in the database.
     */
    public function store(Request $request)
    {
        // 1. Validate the input
        $request->validate([
            'title' => 'required|string|max:255',
            'file' => 'required|file|mimes:pdf,jpg,png,html,txt' // Add file types
        ]);

        // 2. Store the file
        // This saves the file in 'storage/app/public/notes'
        // and gives you the path.
        $path = $request->file('file')->store('public/notes');

        // 3. Save the data to your 'notes' table
        $note = new Note();
        $note->title = $request->title;
        $note->file_path = $path; // Store the file path
        
        // --- Fill in other details ---
        // $note->topic_id = $request->topic_id; 
        // $note->created_by = auth()->id(); // Gets the logged-in user's ID
        // $note->visibility = true; 
        
        $note->save();

        // 4. Redirect the user back with a success message
        return redirect()->route('notes.create')->with('success', 'Note uploaded successfully!');
    }
}