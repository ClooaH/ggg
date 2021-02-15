<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Game;
use App\Models\Question;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{
    //

    public function show()
    {
        $game = Auth::getUser()->game()->get()->first();

        if ($game == null) {

            $game = Game::create([
                'user_id' => Auth()->user()->id,
                'question_id' => Question::first()->id
            ]);

        }

        $question = Question::find($game->question_id);

        return view('dashboard', ['question' => $question]);
    }

    public function store(User $user)
    {
        Game::create([
            'user_id' => auth()->id(),
            'question_id' => 0
        ]);
    }

    public function check(Request $request)
    {   
        $id = $request->question_id;
        $question = Question::find($id);
        $answer = $question->answer;
        $user = auth()->user();

        $questionsCount = Question::count();

        if($id < $questionsCount) {
            if($request->answer == $answer) {
                $newId = $id + 1;

                $game = $user->game()->first();
                $game->question_id = $newId;
                $game->save();
                $question = Question::find($newId);

                return view('dashboard', ['question' => $question]);
            } else {
                $errors = $question->errorCodes()->pluck('errorCode');
                return view('dashboard', ['question' => $question, 'errorCodes' => $errors]);
            }
        } else {
            dd("epic gamer win");
        }
    }
}
