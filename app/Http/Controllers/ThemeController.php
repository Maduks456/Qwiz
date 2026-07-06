<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Theme;
use App\Models\Question;
use App\Models\Answer;
use Illuminate\Support\Facades\DB;
class ThemeController extends Controller
{
    public function create()
    {
        return view("qwiz.create");
    }
    public function store(Request $request){
        DB::transaction(function () use ($request) {
            $request->validate([
                'theme' => 'required|string',
                'questions' => 'required|array',
                'questions.*.question' => 'required|string',

                'questions.*.answers' => 'required|array|min:2',
                'questions.*.answers.*' => 'required|string',

                'questions.*.correct' => 'required|numeric',

            ]);
            
            $theme = Theme::create([
                'name' => $request->theme
            ]);
            foreach ($request->questions as $qData){
                if(empty($qData['question'])){
                        continue;
                }
                $question = $theme->questions()->create([
                'question' => $qData['question']
                ]);
                foreach ($qData['answers'] as $index => $answer){
                    if(empty($answer)){
                        continue;
                    }
                    $question->answers()-> create([
                        'answer' => $answer,
                        'is_correct' => $index == $qData['correct']
                    ]);
                }
            }
           
        });
        return redirect('/');
    }
}
