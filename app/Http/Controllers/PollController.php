<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Poll;

class PollController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $poll = new Poll();
        $poll->question = $request->question;
        $poll->end_date = $request->end_date;
        $poll->is_published = $request->is_published;
        $poll->is_multiple_choice = $request->is_multiple_choice;
        $poll->save();

        if ($poll) {
            return response()->json([
                'success' => true,
                'message' => 'Poll Created',
                'data' => $poll
            ], 201);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Poll Failed to Save',
                'data' => ''
            ], 400);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
