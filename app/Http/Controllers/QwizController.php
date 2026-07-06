<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Theme;
use App\Models\Question;
use App\Models\Answer;
use App\Models\History;
class QwizController extends Controller
{
    public function view(Request  $request)
    {
        $request->validate([
           "theme" => 'required|numeric'
        ]);

        if (!$request->has('currentQuestion')) {
            session(['score' => 0]);
        }
        
        $index = $request->input('currentQuestion', 0);
        $theme_id =$request->input('theme');
        $currentQuestion = $request->input('currentQuestion', 0);
        $totalQuestions = Question::where('theme_id', $theme_id)->count();
        $Theme = Theme::find($theme_id);

        if (!$Theme) {
            return redirect('/');
        }

        if (!$request->has('currentQuestion')) {
    $questions = Question::where('theme_id', $theme_id)
        ->orderBy('id')
        ->pluck('id')
        ->toArray();

    session(['questions' => $questions]);
    $index = 0;
}

        $questionIds = session('questions');
        $questionId = $questionIds[$index] ?? null;

        if (!$questionId) {
            History::create([
                'theme' => $Theme->name,
                'correct_answers' => session('score', 0),
                'user_id' => auth()->id()
            ]);
            return redirect('/result?theme=' . $theme_id);
        }

        $Question = Question::find($questionId);
        $Answers = Answer::where('question_id', $Question->id)
            ->inRandomOrder()
            ->get();
        return view("qwiz.main", compact("Theme", "Question", "Answers", 'currentQuestion', 'totalQuestions'));
    }


    public function nextQuestion(Request $request){
        $request->validate([
            "theme_id" => "required|exists:themes,id",
            "answer_id" => "required|exists:answers,id"
        ]);
        $currentQuestion = $request->input('currentQuestion', 1) + 1;
        $Answer = Answer::where('id', $request->answer_id)
            ->firstOrFail();
            
        $correctAnswers = session('score', 0);
        if ($Answer->is_correct) {
            $correctAnswers++;
            session(['score' => $correctAnswers]);
        }
        
        $theme = Theme::where('id', $request->theme_id)->first(); 
        $questions = session('questions');

        if (!isset($questions[$currentQuestion])) {

            $theme = Theme::find($request->theme_id);

            History::create([
                'theme' => $theme->name,
                'correct_answers' => session('score', 0),
                'user_id' => auth()->id(),
            ]);

            return redirect('/result?theme=' . $request->theme_id);
        }

        return redirect('/main?theme=' . $request->theme_id . '&currentQuestion=' . $currentQuestion);
    }



    public function viewResult(Request $request){
        $request->validate([
            'theme' => 'required|exists:themes,id'
        ]);
        $Themeid = $request->input('theme');
        $Theme = Theme::find($Themeid);
        $totalQuestions = Question::where('theme_id', $Themeid)->count();
        return view("qwiz.result", compact('Theme', "totalQuestions"));
    }


    public function ResultButtons(Request $request){
         $request->validate([
        'action' => 'required|string',
        'theme_id' =>'required|numeric'
        ]);
        session()->forget(['score', 'questions']);
         if ($request->action ==='retake') {
            $themeId = $request->theme_id;
            return redirect('/main?theme=' . $themeId);
         }else{
            return redirect('/');
         }

    }
}
