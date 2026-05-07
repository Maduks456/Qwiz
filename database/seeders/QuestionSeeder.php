<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Theme;
use App\Models\Question;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //MATEMATIKA
        $math = Theme::where('name', "Math")->first();

        Question::create([
            'question' => 'What is 2 + 2',
            'theme_id'=> $math->id
        ]);
        Question::create([
            'question' => 'What is 7 × 8?',
            'theme_id'=> $math->id
        ]);
        Question::create([
            'question' => 'What is the square root of 144?',
            'theme_id'=> $math->id
        ]);
        Question::create([
            'question' => 'What is 15% of 200?',
            'theme_id'=> $math->id
        ]);
        Question::create([
            'question' => 'Solve: 9²',
            'theme_id'=> $math->id
        ]);
        Question::create([
            'question' => 'How much is π?',
            'theme_id'=> $math->id
        ]);
        Question::create([
            'question' => 'What is the derivative of x²?',
            'theme_id'=> $math->id
        ]);
        Question::create([
            'question' => 'What is the perimeter of a square with side being 5?',
            'theme_id'=> $math->id
        ]);
        Question::create([
            'question' => 'What is 2⁵?',
            'theme_id'=> $math->id
        ]);
        Question::create([
            'question' => 'What is 3/5 as a decimal?',
            'theme_id'=> $math->id
        ]);
        Question::create([
            'question' => 'What is 11²?',
            'theme_id'=> $math->id
        ]);
        Question::create([
            'question' => 'What is 50% of 90?',
            'theme_id'=> $math->id
        ]);
        Question::create([
            'question' => 'Solve x: 2x + 5 = 17',
            'theme_id'=> $math->id
        ]);
        Question::create([
            'question' => 'Solve x: x² − 9 = 0',
            'theme_id'=> $math->id
        ]);
        Question::create([
            'question' => 'What is the sum of angles in a triangle?',
            'theme_id'=> $math->id
        ]);


        //SPORTS
        $sport = Theme::where('name', "Sport")->first();

        Question::create([
            'question' => 'How many players are on a football team on the field?',
            'theme_id'=> $sport->id
        ]);
        Question::create([
            'question' => 'How long is a standard football match?',
            'theme_id'=> $sport->id
        ]);
        Question::create([
            'question' => 'In basketball, how many points is a free throw worth?',
            'theme_id'=> $sport->id
        ]);
        Question::create([
            'question' => 'How many players are on a basketball team on the court?',
            'theme_id'=> $sport->id
        ]);
        Question::create([
            'question' => 'Which country won the FIFA World Cup in 2018?',
            'theme_id'=> $sport->id
        ]);
        Question::create([
            'question' => 'In tennis, what does "love" mean?',
            'theme_id'=> $sport->id
        ]);
        Question::create([
            'question' => 'How many rings are on the Olympic flag?',
            'theme_id'=> $sport->id
        ]);
        Question::create([
            'question' => 'In which sport is a slam dunk performed?',
            'theme_id'=> $sport->id
        ]);
        Question::create([
            'question' => 'How many holes are in a standard round of golf?',
            'theme_id'=> $sport->id
        ]);
        Question::create([
            'question' => 'How many players are on the court per team in volleyball?',
            'theme_id'=> $sport->id
        ]);
        Question::create([
            'question' => 'Which sport uses a shuttlecock?',
            'theme_id'=> $sport->id
        ]);
        Question::create([
            'question' => 'In which sport can you score a hat-trick?',
            'theme_id'=> $sport->id
        ]);
        Question::create([
            'question' => 'What is the maximum score in ten-pin bowling?',
            'theme_id'=> $sport->id
        ]);
        Question::create([
            'question' => 'Which sport is known as the "king of sports"?',
            'theme_id'=> $sport->id
        ]);
        Question::create([
            'question' => 'How many sets are needed to win a men Grand Slam tennis match?',
            'theme_id'=> $sport->id
        ]);


        //VESTURE
        $history = Theme::where('name', "History")->first();

        Question::create([
            'question' => 'Who was the first President of the United States?',
            'theme_id'=> $history->id
        ]);
        Question::create([
            'question' => 'In which year did World War II end?',
            'theme_id'=> $history->id
        ]);
        Question::create([
            'question' => 'Who discovered America in 1492?',
            'theme_id'=> $history->id
        ]);
        Question::create([
            'question' => 'Which ancient civilization built the pyramids?',
            'theme_id'=> $history->id
        ]);
        Question::create([
            'question' => 'Who was known as the "Iron Lady"?',
            'theme_id'=> $history->id
        ]);
        Question::create([
            'question' => 'In which year did the Titanic sink?',
            'theme_id'=> $history->id
        ]);
        Question::create([
            'question' => 'Who was the first man to walk on the Moon?',
            'theme_id'=> $history->id
        ]);
        Question::create([
            'question' => 'Which war was fought between the North and South regions in the United States?',
            'theme_id'=> $history->id
        ]);
        Question::create([
            'question' => 'Who was the leader of Nazi Germany during World War II?',
            'theme_id'=> $history->id
        ]);
        Question::create([
            'question' => 'In which year did the Berlin Wall fall?',
            'theme_id'=> $history->id
        ]);
        Question::create([
            'question' => 'Who was the first Emperor of Rome?',
            'theme_id'=> $history->id
        ]);
        Question::create([
            'question' => 'Which country was ruled by Genghis Khan?',
            'theme_id'=> $history->id
        ]);
        Question::create([
            'question' => 'What was the name of the ship that carried the Pilgrims to America in 1620?',
            'theme_id'=> $history->id
        ]);
        Question::create([
            'question' => 'Who was assassinated in 1963 in Dallas, Texas?',
            'theme_id'=> $history->id
        ]);
        Question::create([
            'question' => 'Which ancient city was buried by the eruption of Mount Vesuvius?',
            'theme_id'=> $history->id
        ]);


        //PROGRAMMESANA
        $programming = Theme::where('name', "Programming")->first();

        Question::create([
            'question' => 'What does HTML stand for?',
            'theme_id'=> $programming->id
        ]);
        Question::create([
            'question' => 'Which language is primarily used for web styling?',
            'theme_id'=> $programming->id
        ]);
        Question::create([
            'question' => 'What does CSS stand for?',
            'theme_id'=> $programming->id
        ]);
        Question::create([
            'question' => 'Which language runs in the browser?',
            'theme_id'=> $programming->id
        ]);
        Question::create([
            'question' => 'What symbol is used to end a statement in PHP?',
            'theme_id'=> $programming->id
        ]);
        Question::create([
            'question' => 'What does SQL stand for?',
            'theme_id'=> $programming->id
        ]);
        Question::create([
            'question' => 'Which company developed Java?',
            'theme_id'=> $programming->id
        ]);
        Question::create([
            'question' => 'What is the correct file extension for Python files?',
            'theme_id'=> $programming->id
        ]);
        Question::create([
            'question' => 'Which keyword is used to define a function in JavaScript?',
            'theme_id'=> $programming->id
        ]);
        Question::create([
            'question' => 'Which symbol is used for comments in single-line JavaScript?',
            'theme_id'=> $programming->id
        ]);
        Question::create([
            'question' => 'What does API stand for?',
            'theme_id'=> $programming->id
        ]);
        Question::create([
            'question' => 'Which data type is used to store true/false values?',
            'theme_id'=> $programming->id
        ]);
        Question::create([
            'question' => 'What does IDE stand for?',
            'theme_id'=> $programming->id
        ]);
        Question::create([
            'question' => 'Which loop is guaranteed to run at least once?',
            'theme_id'=> $programming->id
        ]);
        Question::create([
            'question' => 'Which keyword is used to create a class in Java?',
            'theme_id'=> $programming->id
        ]);


        //COMPUTER SCIENCE
        $cs = Theme::where('name', "Computer Science")->first();

        Question::create([
            'question' => 'What does CPU stand for?',
            'theme_id'=> $cs->id
        ]);
        Question::create([
            'question' => 'What does RAM stand for?',
            'theme_id'=> $cs->id
        ]);
        Question::create([
            'question' => 'What does GPU primarily do?',
            'theme_id'=> $cs->id
        ]);
        Question::create([
            'question' => 'What is the binary number system base?',
            'theme_id'=> $cs->id
        ]);
        Question::create([
            'question' => 'What does HTTP stand for?',
            'theme_id'=> $cs->id
        ]);
        Question::create([
            'question' => 'What is an algorithm?',
            'theme_id'=> $cs->id
        ]);
        Question::create([
            'question' => 'What does IP stand for?',
            'theme_id'=> $cs->id
        ]);
        Question::create([
            'question' => 'What is the main function of an operating system?',
            'theme_id'=> $cs->id
        ]);
        Question::create([
            'question' => 'What does SSD stand for?',
            'theme_id'=> $cs->id
        ]);
        Question::create([
            'question' => 'What does URL stand for?',
            'theme_id'=> $cs->id
        ]);
        Question::create([
            'question' => 'What is phishing?',
            'theme_id'=> $cs->id
        ]);
        Question::create([
            'question' => 'What does DNS stand for?',
            'theme_id'=> $cs->id
        ]);
        Question::create([
            'question' => 'What is cloud computing?',
            'theme_id'=> $cs->id
        ]);
        Question::create([
            'question' => 'What is the smallest unit of data in computing?',
            'theme_id'=> $cs->id
        ]);
        Question::create([
            'question' => 'What does AI stand for?',
            'theme_id'=> $cs->id
        ]);

    }
}
