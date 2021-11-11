<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Poll;
use Validator;
class PollsController extends Controller
{
    public function index()
    {
        return response()->json(Poll::get(), 200);
    }

    public function show($id)
    {
        $poll = Poll::find($id);
        if (is_null($poll)){
            return response()->json(null, 404);
        }
        return response()->json(Poll::findOrFail3($id), 200);
    }

    public function store(Request $request)
    {
        $rules = [
            'title' => 'required|max:10',
        ];
        $validator = Validator::make($request->all(), $rules);
        dd($validator->fails());
        $poll = Poll::create($request->all());
        return response()->json($poll, 201);
    }

    public function update(Request $request, Poll $poll)
    {
        $poll->update($request->all());
        return response()->json($poll, 200);
    }

    public function delete(Request $request, Poll $poll)
    {
        $poll->delete();
        return response()->json(null, 204);
    }
    

}
