<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PollOption;
use App\Models\PollVote;
use App\Models\Poll;

use App\Http\Resources\viewResultResorce;

class PollOptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pollOptions = PollOption::all();
        return viewResultResorce::collection($pollOptions, 200)->
        additional([
            'success' => true,
            'message' => 'Poll Options Retrieved',
        ]);
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
        $option_order = PollOption::where('poll_id', $request->poll_id)->max('option_order') + 1;
        $request->votes = 0;

        $pollOption = new PollOption();
        $pollOption->poll_id = $request->poll_id;
        $pollOption->option_text = $request->option_text;
        $pollOption->option_order = $option_order;
        $pollOption->votes = $request->votes;
        $pollOption->save();

        if ($pollOption) {
            return response()->json([
                'success' => true,
                'message' => 'Poll Option Created',
                'data' => $pollOption
            ], 201);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Poll Option Failed to Save',
                'data' => ''
            ], 400);
        }
    }

    public function letsVote(Request $request, string $id)
    {
        $pollOption = PollOption::find($id);
        // $pollVote = PollVote::where('poll_id', $pollOption->poll_id)->where('user_id', $request->user_id)->first();
        $pollVote = PollVote::where('poll_id', $pollOption->poll_id)->where('user_id', $request->user_id)->where('poll_option_id', $pollOption->id)->first();

        if ($pollVote) {
            return response()->json([
                'success' => false,
                'message' => 'You have already voted',
                'data' => ''
            ], 400);
        } else {
            $pollOption->votes = $pollOption->votes + 1;
            $pollOption->save();

            $pollVote = new PollVote();
            $pollVote->poll_id = $pollOption->poll_id;
            $pollVote->poll_option_id = $pollOption->id;
            $pollVote->user_id = $request->user_id;
            $pollVote->save();

            if ($pollVote) {
                return response()->json([
                    'success' => true,
                    'message' => 'Poll Vote Created',
                    'data' => $pollVote
                ], 201);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Poll Vote Failed to Save',
                    'data' => ''
                ], 400);
            }
        }
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pollOptions = PollOption::where('poll_id', $id)->get();
        return viewResultResorce::collection($pollOptions, 200)->
        additional([
            'success' => true,
            'message' => 'Poll Options Retrieved',
        ]);
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
