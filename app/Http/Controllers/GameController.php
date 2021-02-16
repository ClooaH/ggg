<?php

namespace App\Http\Controllers;

use App\Models\BsText;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Game;
use App\Models\Question;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

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
        $leads = $question->leads()->get()->pluck('lead');
        $fillerText = BsText::all();
        $randomNumbers = array(rand(0, 4), rand(0, 4), rand(0, 4), rand(0, 4), rand(0, 4));

        return view('dashboard', [
            'question' => $question,
            'leads' => $leads,
            'texts' => $fillerText,
            'randNums' => $randomNumbers
        ]);
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

        $guess = $request->answer;
        $guess = Str::lower($guess);

        $fillerText = BsText::all();
        $randomNumbers = array(rand(0, 4), rand(0, 4), rand(0, 4), rand(0, 4), rand(0, 4));

        $user = auth()->user();

        $questionsCount = Question::count();

        if($id <= $questionsCount) {
            $leads = $question->leads()->get()->pluck('lead');
            if($guess == $answer) {
                $newId = $id + 1;
                if($newId > $questionsCount) {
                    dd('Epic win');
                }

                $game = $user->game()->first();
                $game->question_id = $newId;
                $game->save();
                $question = Question::find($newId);
                $leads = $question->leads()->get()->pluck('lead');

                return view('dashboard', [
                    'question' => $question,
                    'leads' => $leads,
                    'texts' => $fillerText,
                    'randNums' => $randomNumbers
                ]);
            } else {
                $errors = $question->errorCodes()->pluck('errorCode');
                return view('dashboard', [
                    'question' => $question, 
                    'errorCodes' => $errors, 
                    'leads' => $leads,
                    'texts' => $fillerText,
                    'randNums' => $randomNumbers
                ]);
            }
        }
    }
}
