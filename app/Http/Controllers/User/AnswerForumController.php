<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Admin\ForumController;
use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\Forum;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AnswerForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $forums = Forum::all();
        return view('user.index' , compact('fourms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('user.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all() , [
            // 'answer' => ['required'],
            // 'user_id' => ['required',],
            // 'fourm_id' => ['required'],
            // 'status' => ['required'],
            // 'rate' => ['required'],
        ]);
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }else{
            
            // $answer = Answer::create([
            //     'answer' => $request->input('answer'),
            //     'user_id' => Auth()->user() ? Auth()->user()->id : null,
            //     'forum_id' => $request->input('forum_id'),
            //     'status' => $request->input('status'),
            //     'rate' => $request->input('rate'),
            // ]);
            $answer = new Answer();
            $answer->answer = $request->input('answer');
            $answer->forum_id = $request->input('forum_id');
            $answer->user_id = Auth()->user()->id;
            $answer->status = $request->input('status');
            $answer->rate = $request->input('rate');
            $answer->save();
        }
            return redirect()->back()->with(['success' => 'You Answered This Forum']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function ShowAnswer(){
    //     $forums = Forum::paginate(5);
    //     $answers = Answer::all();
    //     return view('user.answers.showAnswer' , compact('forums' , 'answers'));
    // }

    public function show($id)
    {
        //
        $answer = Answer::findOrFail($id);
        return view('user.answers.showAnswer' , compact('answer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $answer = Answer::findOrFail($id);
        return view('user.index' , compact($answer));
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
        //
        $answer = Answer::findOrFail($id);
        $answer->update([
            'rate' => $request->rate
        ]);
        return redirect();
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
}
