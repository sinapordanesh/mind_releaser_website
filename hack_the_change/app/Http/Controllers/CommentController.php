<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

        $inputs = request()->validate(
            [
                'text' => 'required|min:4|max:50',
                'topic_id' => '',

            ]
        );

        Comment::create($inputs);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }

    public function positive_feedback(Comment $comment)
    {
        $pf = $comment->positive_feedback + 1;
        $comment->update(['positive_feedback'=> $pf]);
        toastr()->success('It seems you have a nice feeling :), keep going to read more positive comments.', 'Perfect friend');
        return back();
    }

    public function negative_feedback(Comment $comment)
    {
        $nf = $comment->negative_feedback + 1;
        $comment->update(['negative_feedback'=> $nf]);
        toastr()->success('Sorry for this filling, Make your own nice feedback', 'You have a better idea');
        return back();
    }
}
