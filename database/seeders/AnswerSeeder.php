<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Answer;
use App\Models\Question;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        //MATEMATIKA
        $MathQ1 = Question::where('question', "What is 2 + 2")->first();
        Answer::create([
            "answer" =>"4",
            "is_correct" =>true,
            "question_id" =>$MathQ1->id
        ]);
        Answer::create([
            "answer" =>"6",
            "is_correct" =>false,
            "question_id" =>$MathQ1->id
        ]);
        Answer::create([
            "answer" =>"8",
            "is_correct" =>false,
            "question_id" =>$MathQ1->id
        ]);
        Answer::create([
            "answer" =>"20",
            "is_correct" =>false,
            "question_id" =>$MathQ1->id
        ]);

        $MathQ2 = Question::where('question', "What is 7 × 8?")->first();
        Answer::create([
            "answer" =>"54",
            "is_correct" =>false,
            "question_id" =>$MathQ2->id
        ]);
        Answer::create([
            "answer" =>"56",
            "is_correct" =>true,
            "question_id" =>$MathQ2->id
        ]);
        Answer::create([
            "answer" =>"58",
            "is_correct" =>false,
            "question_id" =>$MathQ2->id
        ]);
        Answer::create([
            "answer" =>"64",
            "is_correct" =>false,
            "question_id" =>$MathQ2->id
        ]);

        $MathQ3 = Question::where('question', "What is the square root of 144?")->first();
        Answer::create([
            "answer" =>"10",
            "is_correct" =>false,
            "question_id" =>$MathQ3->id
        ]);
        Answer::create([
            "answer" =>"11",
            "is_correct" =>false,
            "question_id" =>$MathQ3->id
        ]);
        Answer::create([
            "answer" =>"14",
            "is_correct" =>true,
            "question_id" =>$MathQ3->id
        ]);
        Answer::create([
            "answer" =>"12",
            "is_correct" =>false,
            "question_id" =>$MathQ3->id
        ]);

        $MathQ4 = Question::where('question', "What is 15% of 200?")->first();
        Answer::create([
            "answer" =>"20",
            "is_correct" =>false,
            "question_id" =>$MathQ4->id
        ]);
        Answer::create([
            "answer" =>"30",
            "is_correct" =>true,
            "question_id" =>$MathQ4->id
        ]);
        Answer::create([
            "answer" =>"25",
            "is_correct" =>false,
            "question_id" =>$MathQ4->id
        ]);
        Answer::create([
            "answer" =>"35",
            "is_correct" =>false,
            "question_id" =>$MathQ4->id
        ]);

        $MathQ5 = Question::where('question', "Solve: 9²")->first();
        Answer::create([
            "answer" =>"72",
            "is_correct" =>false,
            "question_id" =>$MathQ5->id
        ]);
        Answer::create([
            "answer" =>"64",
            "is_correct" =>false,
            "question_id" =>$MathQ5->id
        ]);
        Answer::create([
            "answer" =>"81",
            "is_correct" =>true,
            "question_id" =>$MathQ5->id
        ]);
        Answer::create([
            "answer" =>"99",
            "is_correct" =>false,
            "question_id" =>$MathQ5->id
        ]);

        $MathQ6 = Question::where('question', "How much is π?")->first();
        Answer::create([
            "answer" =>"2.14",
            "is_correct" =>false,
            "question_id" =>$MathQ6->id
        ]);
        Answer::create([
            "answer" =>"3.14",
            "is_correct" =>true,
            "question_id" =>$MathQ6->id
        ]);
        Answer::create([
            "answer" =>"4.13",
            "is_correct" =>false,
            "question_id" =>$MathQ6->id
        ]);
        Answer::create([
            "answer" =>"3.41",
            "is_correct" =>false,
            "question_id" =>$MathQ6->id
        ]);

        $MathQ7 = Question::where('question', "What is the derivative of x²?")->first();
        Answer::create([
            "answer" =>"x",
            "is_correct" =>false,
            "question_id" =>$MathQ7->id
        ]);
        Answer::create([
            "answer" =>"x²",
            "is_correct" =>false,
            "question_id" =>$MathQ7->id
        ]);
        Answer::create([
            "answer" =>"2",
            "is_correct" =>false,
            "question_id" =>$MathQ7->id
        ]);
        Answer::create([
            "answer" =>"2x",
            "is_correct" =>true,
            "question_id" =>$MathQ7->id
        ]);

        $MathQ8 = Question::where('question', "What is the perimeter of a square with side being 5?")->first();
        Answer::create([
            "answer" =>"10",
            "is_correct" =>false,
            "question_id" =>$MathQ8->id
        ]);
        Answer::create([
            "answer" =>"15",
            "is_correct" =>false,
            "question_id" =>$MathQ8->id
        ]);
        Answer::create([
            "answer" =>"20",
            "is_correct" =>true,
            "question_id" =>$MathQ8->id
        ]);
        Answer::create([
            "answer" =>"25",
            "is_correct" =>false,
            "question_id" =>$MathQ8->id
        ]);
     
        $MathQ9 = Question::where('question', "What is 2⁵?")->first();
        Answer::create([
            "answer" =>"16",
            "is_correct" =>false,
            "question_id" =>$MathQ9->id
        ]);
        Answer::create([
            "answer" =>"32",
            "is_correct" =>true,
            "question_id" =>$MathQ9->id
        ]);
        Answer::create([
            "answer" =>"64",
            "is_correct" =>false,
            "question_id" =>$MathQ9->id
        ]);
        Answer::create([
            "answer" =>"25",
            "is_correct" =>false,
            "question_id" =>$MathQ9->id

        ]);
                        
        $MathQ10 = Question::where('question', "What is 3/5 as a decimal?")->first();
        Answer::create([
            "answer" =>"0.5",
            "is_correct" =>false,
            "question_id" =>$MathQ10->id
        ]);
        Answer::create([
            "answer" =>"0.6",
            "is_correct" =>true,
            "question_id" =>$MathQ10->id
        ]);
        Answer::create([
            "answer" =>"0.8",
            "is_correct" =>false,
            "question_id" =>$MathQ10->id
        ]);
        Answer::create([
            "answer" =>"0.3",
            "is_correct" =>false,
            "question_id" =>$MathQ10->id

        ]);
                                
        $MathQ11 = Question::where('question', "What is 11²?")->first();
        Answer::create([
            "answer" =>"111",
            "is_correct" =>false,
            "question_id" =>$MathQ11->id
        ]);
        Answer::create([
            "answer" =>"131",
            "is_correct" =>false,
            "question_id" =>$MathQ11->id
        ]);
        Answer::create([
            "answer" =>"121",
            "is_correct" =>true,
            "question_id" =>$MathQ11->id
        ]);
        Answer::create([
            "answer" =>"131",
            "is_correct" =>false,
            "question_id" =>$MathQ11->id

        ]);
                                        
        $MathQ12 = Question::where('question', "What is 50% of 90?")->first();
        Answer::create([
            "answer" =>"45",
            "is_correct" =>true,
            "question_id" =>$MathQ12->id
        ]);
        Answer::create([
            "answer" =>"40",
            "is_correct" =>false,
            "question_id" =>$MathQ12->id
        ]);
        Answer::create([
            "answer" =>"50",
            "is_correct" =>false,
            "question_id" =>$MathQ12->id
        ]);
        Answer::create([
            "answer" =>"55",
            "is_correct" =>false,
            "question_id" =>$MathQ12->id

        ]);
                                                
        $MathQ13 = Question::where('question', "Solve x: 2x + 5 = 17")->first();
        Answer::create([
            "answer" =>"5",
            "is_correct" =>false,
            "question_id" =>$MathQ13->id
        ]);
        Answer::create([
            "answer" =>"6",
            "is_correct" =>true,
            "question_id" =>$MathQ13->id
        ]);
        Answer::create([
            "answer" =>"7",
            "is_correct" =>false,
            "question_id" =>$MathQ13->id
        ]);
        Answer::create([
            "answer" =>"8",
            "is_correct" =>false,
            "question_id" =>$MathQ13->id

        ]);
                                                        
        $MathQ14 = Question::where('question', "Solve x: x² − 9 = 0")->first();
        Answer::create([
            "answer" =>"3",
            "is_correct" =>false,
            "question_id" =>$MathQ14->id
        ]);
        Answer::create([
            "answer" =>"-3",
            "is_correct" =>false,
            "question_id" =>$MathQ14->id
        ]);
        Answer::create([
            "answer" =>"0",
            "is_correct" =>false,
            "question_id" =>$MathQ14->id
        ]);
        Answer::create([
            "answer" =>"±3",
            "is_correct" =>true,
            "question_id" =>$MathQ14->id

        ]);
                                                                
        $MathQ15 = Question::where('question', "What is the sum of angles in a triangle?")->first();
        Answer::create([
            "answer" =>"90°",
            "is_correct" =>false,
            "question_id" =>$MathQ15->id
        ]);
        Answer::create([
            "answer" =>"150°",
            "is_correct" =>false,
            "question_id" =>$MathQ15->id
        ]);
        Answer::create([
            "answer" =>"180°",
            "is_correct" =>true,
            "question_id" =>$MathQ15->id
        ]);
        Answer::create([
            "answer" =>"360°",
            "is_correct" =>false,
            "question_id" =>$MathQ15->id

        ]);


        //SPORTS                                                          
        $SportQ1 = Question::where('question', "How many players are on a football team on the field?")->first();
        Answer::create([
            "answer" =>"11",
            "is_correct" =>true,
            "question_id" =>$SportQ1->id
        ]);
        Answer::create([
            "answer" =>"9",
            "is_correct" =>false,
            "question_id" =>$SportQ1->id
        ]);
        Answer::create([
            "answer" =>"12",
            "is_correct" =>false,
            "question_id" =>$SportQ1->id
        ]);
        Answer::create([
            "answer" =>"10",
            "is_correct" =>false,
            "question_id" =>$SportQ1->id
        ]);

        $SportQ2 = Question::where('question', "How long is a standard football match?")->first();
        Answer::create([
            "answer" =>"120 minutes",
            "is_correct" =>false,
            "question_id" =>$SportQ2->id
        ]);
        Answer::create([
            "answer" =>"80 minutes",
            "is_correct" =>false,
            "question_id" =>$SportQ2->id
        ]);
        Answer::create([
            "answer" =>"90 minutes",
            "is_correct" =>true,
            "question_id" =>$SportQ2->id
        ]);
        Answer::create([
            "answer" =>"100 minutes",
            "is_correct" =>false,
            "question_id" =>$SportQ2->id
        ]);

        $SportQ3 = Question::where('question', "In basketball, how many points is a free throw worth?")->first();
        Answer::create([
            "answer" =>"3",
            "is_correct" =>false,
            "question_id" =>$SportQ3->id
        ]);
        Answer::create([
            "answer" =>"1",
            "is_correct" =>true,
            "question_id" =>$SportQ3->id
        ]);
        Answer::create([
            "answer" =>"4",
            "is_correct" =>false,
            "question_id" =>$SportQ3->id
        ]);
        Answer::create([
            "answer" =>"2",
            "is_correct" =>false,
            "question_id" =>$SportQ3->id
        ]);

        $SportQ4 = Question::where('question', "How many players are on a basketball team on the court?")->first();
        Answer::create([
            "answer" =>"6",
            "is_correct" =>false,
            "question_id" =>$SportQ4->id
        ]);
        Answer::create([
            "answer" =>"5",
            "is_correct" =>true,
            "question_id" =>$SportQ4->id
        ]);
        Answer::create([
            "answer" =>"7",
            "is_correct" =>false,
            "question_id" =>$SportQ4->id
        ]);
        Answer::create([
            "answer" =>"4",
            "is_correct" =>false,
            "question_id" =>$SportQ4->id
        ]);

        $SportQ5 = Question::where('question', "Which country won the FIFA World Cup in 2018?")->first();
        Answer::create([
            "answer" =>"Brazil",
            "is_correct" =>false,
            "question_id" =>$SportQ5->id
        ]);
        Answer::create([
            "answer" =>"France",
            "is_correct" =>true,
            "question_id" =>$SportQ5->id
        ]);
        Answer::create([
            "answer" =>"Argentina",
            "is_correct" =>false,
            "question_id" =>$SportQ5->id
        ]);
        Answer::create([
            "answer" =>"Germany",
            "is_correct" =>false,
            "question_id" =>$SportQ5->id
        ]);

        $SportQ6 = Question::where('question', 'In tennis, what does "love" mean?')->first();
        Answer::create([
            "answer" =>"Advantage",
            "is_correct" =>false,
            "question_id" =>$SportQ6->id
        ]);
        Answer::create([
            "answer" =>"Zero",
            "is_correct" =>true,
            "question_id" =>$SportQ6->id
        ]);
        Answer::create([
            "answer" =>"Draw",
            "is_correct" =>false,
            "question_id" =>$SportQ6->id
        ]);
        Answer::create([
            "answer" =>"Win",
            "is_correct" =>false,
            "question_id" =>$SportQ6->id
        ]);

        $SportQ7 = Question::where('question', "How many rings are on the Olympic flag?")->first();
        Answer::create([
            "answer" =>"7",
            "is_correct" =>false,
            "question_id" =>$SportQ7->id
        ]);
        Answer::create([
            "answer" =>"5",
            "is_correct" =>true,
            "question_id" =>$SportQ7->id
        ]);
        Answer::create([
            "answer" =>"4",
            "is_correct" =>false,
            "question_id" =>$SportQ7->id
        ]);
        Answer::create([
            "answer" =>"6",
            "is_correct" =>false,
            "question_id" =>$SportQ7->id
        ]);

        $SportQ8 = Question::where('question', "In which sport is a slam dunk performed?")->first();
        Answer::create([
            "answer" =>"Tennis",
            "is_correct" =>false,
            "question_id" =>$SportQ8->id
        ]);
        Answer::create([
            "answer" =>"Basketball",
            "is_correct" =>true,
            "question_id" =>$SportQ8->id
        ]);
        Answer::create([
            "answer" =>"Baseball",
            "is_correct" =>false,
            "question_id" =>$SportQ8->id
        ]);
        Answer::create([
            "answer" =>"Football",
            "is_correct" =>false,
            "question_id" =>$SportQ8->id
        ]);

        $SportQ9 = Question::where('question', "How many holes are in a standard round of golf?")->first();

        Answer::create([
            "answer" =>"20",
            "is_correct" =>false,
            "question_id" =>$SportQ9->id
        ]);
        Answer::create([
            "answer" =>"18",
            "is_correct" =>true,
            "question_id" =>$SportQ9->id
        ]);
        Answer::create([
            "answer" =>"9",
            "is_correct" =>false,
            "question_id" =>$SportQ9->id
        ]);
        Answer::create([
            "answer" =>"12",
            "is_correct" =>false,
            "question_id" =>$SportQ9->id
        ]);

        $SportQ10 = Question::where('question', "How many players are on the court per team in volleyball?")->first();
        Answer::create([
            "answer" =>"8",
            "is_correct" =>false,
            "question_id" =>$SportQ10->id
        ]);
        Answer::create([
            "answer" =>"6",
            "is_correct" =>true,
            "question_id" =>$SportQ10->id
        ]);
        Answer::create([
            "answer" =>"7",
            "is_correct" =>false,
            "question_id" =>$SportQ10->id
        ]);
        Answer::create([
            "answer" =>"5",
            "is_correct" =>false,
            "question_id" =>$SportQ10->id
        ]);

        $SportQ11 = Question::where('question', "Which sport uses a shuttlecock?")->first();
        Answer::create([
            "answer" =>"Squash",
            "is_correct" =>false,
            "question_id" =>$SportQ11->id
        ]);
        Answer::create([
            "answer" =>"Badminton",
            "is_correct" =>true,
            "question_id" =>$SportQ11->id
        ]);
        Answer::create([
            "answer" =>"Tennis",
            "is_correct" =>false,
            "question_id" =>$SportQ11->id
        ]);
        Answer::create([
            "answer" =>"Table Tennis",
            "is_correct" =>false,
            "question_id" =>$SportQ11->id
        ]);

        $SportQ12 = Question::where('question', "In which sport can you score a hat-trick?")->first();
        Answer::create([
            "answer" =>"Cricket",
            "is_correct" =>false,
            "question_id" =>$SportQ12->id
        ]);
        Answer::create([
            "answer" =>"Both",
            "is_correct" =>true,
            "question_id" =>$SportQ12->id
        ]);
        Answer::create([
            "answer" =>"Football",
            "is_correct" =>false,
            "question_id" =>$SportQ12->id
        ]);
        Answer::create([
            "answer" =>"None",
            "is_correct" =>false,
            "question_id" =>$SportQ12->id
        ]);

        $SportQ13 = Question::where('question', "What is the maximum score in ten-pin bowling?")->first();
        Answer::create([
            "answer" =>"300",
            "is_correct" =>true,
            "question_id" =>$SportQ13->id
        ]);
        Answer::create([
            "answer" =>"250",
            "is_correct" =>false,
            "question_id" =>$SportQ13->id
        ]);
        Answer::create([
            "answer" =>"200",
            "is_correct" =>false,
            "question_id" =>$SportQ13->id
        ]);
        Answer::create([
            "answer" =>"350",
            "is_correct" =>false,
            "question_id" =>$SportQ13->id
        ]);

        $SportQ14 = Question::where('question', 'Which sport is known as the "king of sports"?')->first();
        Answer::create([
            "answer" =>"Tennis",
            "is_correct" =>false,
            "question_id" =>$SportQ14->id
        ]);
        Answer::create([
            "answer" =>"Football (Soccer)",
            "is_correct" =>true,
            "question_id" =>$SportQ14->id
        ]);
        Answer::create([
            "answer" =>"Basketball",
            "is_correct" =>false,
            "question_id" =>$SportQ14->id
        ]);
        Answer::create([
            "answer" =>"Cricket",
            "is_correct" =>false,
            "question_id" =>$SportQ14->id
        ]);

        $SportQ15 = Question::where('question', "How many sets are needed to win a men Grand Slam tennis match?")->first();
        Answer::create([
            "answer" =>"4",
            "is_correct" =>false,
            "question_id" =>$SportQ15->id
        ]);
        Answer::create([
            "answer" =>"3",
            "is_correct" =>true,
            "question_id" =>$SportQ15->id
        ]);
        Answer::create([
            "answer" =>"2",
            "is_correct" =>false,
            "question_id" =>$SportQ15->id
        ]);
        Answer::create([
            "answer" =>"5",
            "is_correct" =>false,
            "question_id" =>$SportQ15->id
        ]);


        //VESTURE
        $HistoryQ1 = Question::where('question', "Who was the first President of the United States?")->first();
        Answer::create([
            "answer" =>"John Adams",
            "is_correct" =>false,
            "question_id" =>$HistoryQ1->id
        ]);
        Answer::create([
            "answer" =>"Thomas Jefferson",
            "is_correct" =>false,
            "question_id" =>$HistoryQ1->id
        ]);
        Answer::create([
            "answer" =>"George Washington",
            "is_correct" =>true,
            "question_id" =>$HistoryQ1->id
        ]);
        Answer::create([
            "answer" =>"Abraham Lincoln",
            "is_correct" =>false,
            "question_id" =>$HistoryQ1->id
        ]);

        $HistoryQ2 = Question::where('question', "In which year did World War II end?")->first();
        Answer::create([
            "answer" =>"1947",
            "is_correct" =>false,
            "question_id" =>$HistoryQ2->id
        ]);
        Answer::create([
            "answer" =>"1950",
            "is_correct" =>false,
            "question_id" =>$HistoryQ2->id
        ]);
        Answer::create([
            "answer" =>"1945",
            "is_correct" =>true,
            "question_id" =>$HistoryQ2->id
        ]);
        Answer::create([
            "answer" =>"1943",
            "is_correct" =>false,
            "question_id" =>$HistoryQ2->id
        ]);

        $HistoryQ3 = Question::where('question', "Who discovered America in 1492?")->first();
        Answer::create([
            "answer" =>"Vasco da Gama",
            "is_correct" =>false,
            "question_id" =>$HistoryQ3->id
        ]);
        Answer::create([
            "answer" =>"Ferdinand Magellan",
            "is_correct" =>false,
            "question_id" =>$HistoryQ3->id
        ]);
        Answer::create([
            "answer" =>"Marco Polo",
            "is_correct" =>false,
            "question_id" =>$HistoryQ3->id
        ]);
        Answer::create([
            "answer" =>"Christopher Columbus",
            "is_correct" =>true,
            "question_id" =>$HistoryQ3->id
        ]);

        $HistoryQ4 = Question::where('question', "Which ancient civilization built the pyramids?")->first();
        Answer::create([
            "answer" =>"Greeks",
            "is_correct" =>false,
            "question_id" =>$HistoryQ4->id
        ]);
        Answer::create([
            "answer" =>"Romans",
            "is_correct" =>false,
            "question_id" =>$HistoryQ4->id
        ]);
        Answer::create([
            "answer" =>"Egyptians",
            "is_correct" =>true,
            "question_id" =>$HistoryQ4->id
        ]);
        Answer::create([
            "answer" =>"Persians",
            "is_correct" =>false,
            "question_id" =>$HistoryQ4->id
        ]);

        $HistoryQ5 = Question::where('question', "Who was known as the \"Iron Lady\"?")->first();
        Answer::create([
            "answer" =>"Indira Gandhi",
            "is_correct" =>false,
            "question_id" =>$HistoryQ5->id
        ]);
        Answer::create([
            "answer" =>"Angela Merkel",
            "is_correct" =>false,
            "question_id" =>$HistoryQ5->id
        ]);
        Answer::create([
            "answer" =>"Margaret Thatcher",
            "is_correct" =>true,
            "question_id" =>$HistoryQ5->id
        ]);
        Answer::create([
            "answer" =>"Queen Elizabeth II",
            "is_correct" =>false,
            "question_id" =>$HistoryQ5->id
        ]);

        $HistoryQ6 = Question::where('question', "In which year did the Titanic sink?")->first();
        Answer::create([
            "answer" =>"1914",
            "is_correct" =>false,
            "question_id" =>$HistoryQ6->id
        ]);
        Answer::create([
            "answer" =>"1920",
            "is_correct" =>false,
            "question_id" =>$HistoryQ6->id
        ]);
        Answer::create([
            "answer" =>"1910",
            "is_correct" =>false,
            "question_id" =>$HistoryQ6->id
        ]);
        Answer::create([
            "answer" =>"1912",
            "is_correct" =>true,
            "question_id" =>$HistoryQ6->id
        ]);

        $HistoryQ7 = Question::where('question', "Who was the first man to walk on the Moon?")->first();
        Answer::create([
            "answer" =>"Michael Collins",
            "is_correct" =>false,
            "question_id" =>$HistoryQ7->id
        ]);
        Answer::create([
            "answer" =>"Yuri Gagarin",
            "is_correct" =>false,
            "question_id" =>$HistoryQ7->id
        ]);
        Answer::create([
            "answer" =>"Neil Armstrong",
            "is_correct" =>true,
            "question_id" =>$HistoryQ7->id
        ]);
        Answer::create([
            "answer" =>"Buzz Aldrin",
            "is_correct" =>false,
            "question_id" =>$HistoryQ7->id
        ]);

        $HistoryQ8 = Question::where('question', "Which war was fought between the North and South regions in the United States?")->first();
        Answer::create([
            "answer" =>"Cold War",
            "is_correct" =>false,
            "question_id" =>$HistoryQ8->id
        ]);
        Answer::create([
            "answer" =>"World War I",
            "is_correct" =>false,
            "question_id" =>$HistoryQ8->id
        ]);
        Answer::create([
            "answer" =>"American Civil War",
            "is_correct" =>true,
            "question_id" =>$HistoryQ8->id
        ]);
        Answer::create([
            "answer" =>"Revolutionary War",
            "is_correct" =>false,
            "question_id" =>$HistoryQ8->id
        ]);

        $HistoryQ9 = Question::where('question', "Who was the leader of Nazi Germany during World War II?")->first();
        Answer::create([
            "answer" =>"Benito Mussolini",
            "is_correct" =>false,
            "question_id" =>$HistoryQ9->id
        ]);
        Answer::create([
            "answer" =>"Winston Churchill",
            "is_correct" =>false,
            "question_id" =>$HistoryQ9->id
        ]);
        Answer::create([
            "answer" =>"Adolf Hitler",
            "is_correct" =>true,
            "question_id" =>$HistoryQ9->id
        ]);
        Answer::create([
            "answer" =>"Joseph Stalin",
            "is_correct" =>false,
            "question_id" =>$HistoryQ9->id
        ]);

        $HistoryQ10 = Question::where('question', "In which year did the Berlin Wall fall?")->first();
        Answer::create([
            "answer" =>"1993",
            "is_correct" =>false,
            "question_id" =>$HistoryQ10->id
        ]);
        Answer::create([
            "answer" =>"1987",
            "is_correct" =>false,
            "question_id" =>$HistoryQ10->id
        ]);
        Answer::create([
            "answer" =>"1989",
            "is_correct" =>true,
            "question_id" =>$HistoryQ10->id
        ]);
        Answer::create([
            "answer" =>"1991",
            "is_correct" =>false,
            "question_id" =>$HistoryQ10->id
        ]);

        $HistoryQ11 = Question::where('question', "Who was the first Emperor of Rome?")->first();
        Answer::create([
            "answer" =>"Nero",
            "is_correct" =>false,
            "question_id" =>$HistoryQ11->id
        ]);
        Answer::create([
            "answer" =>"Caligula",
            "is_correct" =>false,
            "question_id" =>$HistoryQ11->id
        ]);
        Answer::create([
            "answer" =>"Augustus",
            "is_correct" =>true,
            "question_id" =>$HistoryQ11->id
        ]);
        Answer::create([
            "answer" =>"Julius Caesar",
            "is_correct" =>false,
            "question_id" =>$HistoryQ11->id
        ]);

        $HistoryQ12 = Question::where('question', "Which country was ruled by Genghis Khan?")->first();
        Answer::create([
            "answer" =>"India",
            "is_correct" =>false,
            "question_id" =>$HistoryQ12->id
        ]);
        Answer::create([
            "answer" =>"China",
            "is_correct" =>false,
            "question_id" =>$HistoryQ12->id
        ]);
        Answer::create([
            "answer" =>"Mongolia",
            "is_correct" =>true,
            "question_id" =>$HistoryQ12->id
        ]);
        Answer::create([
            "answer" =>"Russia",
            "is_correct" =>false,
            "question_id" =>$HistoryQ12->id
        ]);

        $HistoryQ13 = Question::where('question', "What was the name of the ship that carried the Pilgrims to America in 1620?")->first();
        Answer::create([
            "answer" =>"Beagle",
            "is_correct" =>false,
            "question_id" =>$HistoryQ13->id
        ]);
        Answer::create([
            "answer" =>"Santa Maria",
            "is_correct" =>false,
            "question_id" =>$HistoryQ13->id
        ]);
        Answer::create([
            "answer" =>"Mayflower",
            "is_correct" =>true,
            "question_id" =>$HistoryQ13->id
        ]);
        Answer::create([
            "answer" =>"Endeavour",
            "is_correct" =>false,
            "question_id" =>$HistoryQ13->id
        ]);

        $HistoryQ14 = Question::where('question', "Who was assassinated in 1963 in Dallas, Texas?")->first();
        Answer::create([
            "answer" =>"Robert Kennedy",
            "is_correct" =>false,
            "question_id" =>$HistoryQ14->id
        ]);
        Answer::create([
            "answer" =>"Malcolm X",
            "is_correct" =>false,
            "question_id" =>$HistoryQ14->id
        ]);
        Answer::create([
            "answer" =>"John F. Kennedy",
            "is_correct" =>true,
            "question_id" =>$HistoryQ14->id
        ]);
        Answer::create([
            "answer" =>"Martin Luther King Jr.",
            "is_correct" =>false,
            "question_id" =>$HistoryQ14->id
        ]);

        $HistoryQ15 = Question::where('question', "Which ancient city was buried by the eruption of Mount Vesuvius?")->first();
        Answer::create([
            "answer" =>"Sparta",
            "is_correct" =>false,
            "question_id" =>$HistoryQ15->id
        ]);
        Answer::create([
            "answer" =>"Rome",
            "is_correct" =>false,
            "question_id" =>$HistoryQ15->id
        ]);
        Answer::create([
            "answer" =>"Pompeii",
            "is_correct" =>true,
            "question_id" =>$HistoryQ15->id
        ]);
        Answer::create([
            "answer" =>"Athens",
            "is_correct" =>false,
            "question_id" =>$HistoryQ15->id
        ]);


        //PROGRAMMESANA
        $ProgrammingQ1 = Question::where('question', "What does HTML stand for?")->first();
        Answer::create([
            "answer" =>"Hyper Text Markup Language",
            "is_correct" =>true,
            "question_id" =>$ProgrammingQ1->id
        ]);
        Answer::create([
            "answer" =>"High Tech Modern Language",
            "is_correct" =>false,
            "question_id" =>$ProgrammingQ1->id
        ]);
        Answer::create([
            "answer" =>"Hyperlinks and Text Management Language",
            "is_correct" =>false,
            "question_id" =>$ProgrammingQ1->id
        ]);
        Answer::create([
            "answer" =>"Home Tool Markup Language",
            "is_correct" =>false,
            "question_id" =>$ProgrammingQ1->id
        ]);

        $ProgrammingQ2 = Question::where('question', "Which language is primarily used for web styling?")->first();
        Answer::create([
            "answer" =>"HTML",
            "is_correct" =>false,
            "question_id" =>$ProgrammingQ2->id
        ]);
        Answer::create([
            "answer" =>"CSS",
            "is_correct" =>true,
            "question_id" =>$ProgrammingQ2->id
        ]);
        Answer::create([
            "answer" =>"Java",
            "is_correct" =>false,
            "question_id" =>$ProgrammingQ2->id
        ]);
        Answer::create([
            "answer" =>"Python",
            "is_correct" =>false,
            "question_id" =>$ProgrammingQ2->id
        ]);

        $ProgrammingQ3 = Question::where('question', "What does CSS stand for?")->first();
        Answer::create([
            "answer" =>"Creative Style Sheets",
            "is_correct" =>false,
            "question_id" =>$ProgrammingQ3->id
        ]);
        Answer::create([
            "answer" =>"Cascading Style Sheets",
            "is_correct" =>true,
            "question_id" =>$ProgrammingQ3->id
        ]);
        Answer::create([
            "answer" =>"Computer Style Sheets",
            "is_correct" =>false,
            "question_id" =>$ProgrammingQ3->id
        ]);
        Answer::create([
            "answer" =>"Colorful Style Sheets",
            "is_correct" =>false,
            "question_id" =>$ProgrammingQ3->id
        ]);

        $ProgrammingQ4 = Question::where('question', "Which language runs in the browser?")->first();
        Answer::create([
            "answer" =>"C++",
            "is_correct" =>false,
            "question_id" =>$ProgrammingQ4->id
        ]);
        Answer::create([
            "answer" =>"Java",
            "is_correct" =>false,
            "question_id" =>$ProgrammingQ4->id
        ]);
        Answer::create([
            "answer" =>"JavaScript",
            "is_correct" =>true,
            "question_id" =>$ProgrammingQ4->id
        ]);
        Answer::create([
            "answer" =>"Python",
            "is_correct" =>false,
            "question_id" =>$ProgrammingQ4->id
        ]);

        $ProgrammingQ5 = Question::where('question', "What symbol is used to end a statement in PHP?")->first();
        Answer::create([
            "answer" =>":",
            "is_correct" =>false,
            "question_id" =>$ProgrammingQ5->id
        ]);
        Answer::create([
            "answer" =>";",
            "is_correct" =>true,
            "question_id" =>$ProgrammingQ5->id
        ]);
        Answer::create([
            "answer" =>".",
            "is_correct" =>false,
            "question_id" =>$ProgrammingQ5->id
        ]);
        Answer::create([
            "answer" =>",",
            "is_correct" =>false,
            "question_id" =>$ProgrammingQ5->id
        ]);

        $ProgrammingQ6 = Question::where('question', "What does SQL stand for?")->first();
        Answer::create([
            "answer" =>"Structured Query Language",
            "is_correct" =>true,
            "question_id" =>$ProgrammingQ6->id
        ]);
        Answer::create([
            "answer" =>"Simple Query Language",
            "is_correct" =>false,
            "question_id" =>$ProgrammingQ6->id
        ]);
        Answer::create([
            "answer" =>"Standard Question Language",
            "is_correct" =>false,
            "question_id" =>$ProgrammingQ6->id
        ]);
        Answer::create([
            "answer" =>"System Query Logic",
            "is_correct" =>false,
            "question_id" =>$ProgrammingQ6->id
        ]);

        $ProgrammingQ7 = Question::where('question', "Which company developed Java?")->first();
        Answer::create([
            "answer" =>"Microsoft",
            "is_correct" =>false,
            "question_id" =>$ProgrammingQ7->id
        ]);
        Answer::create([
            "answer" =>"Sun Microsystems",
            "is_correct" =>true,
            "question_id" =>$ProgrammingQ7->id
        ]);
        Answer::create([
            "answer" =>"Google",
            "is_correct" =>false,
            "question_id" =>$ProgrammingQ7->id
        ]);
        Answer::create([
            "answer" =>"Apple",
            "is_correct" =>false,
            "question_id" =>$ProgrammingQ7->id
        ]);

        $ProgrammingQ8 = Question::where('question', "What is the correct file extension for Python files?")->first();
        Answer::create([
            "answer" =>".py",
            "is_correct" =>true,
            "question_id" =>$ProgrammingQ8->id
        ]);
        Answer::create([
            "answer" =>".pt",
            "is_correct" =>false,
            "question_id" =>$ProgrammingQ8->id
        ]);
        Answer::create([
            "answer" =>".python",
            "is_correct" =>false,
            "question_id" =>$ProgrammingQ8->id
        ]);
        Answer::create([
            "answer" =>".pyt",
            "is_correct" =>false,
            "question_id" =>$ProgrammingQ8->id
        ]);

        $ProgrammingQ9 = Question::where('question', "Which keyword is used to define a function in JavaScript?")->first();
        Answer::create([
            "answer" =>"func",
            "is_correct" =>false,
            "question_id" =>$ProgrammingQ9->id
        ]);
        Answer::create([
            "answer" =>"function",
            "is_correct" =>true,
            "question_id" =>$ProgrammingQ9->id
        ]);
        Answer::create([
            "answer" =>"def",
            "is_correct" =>false,
            "question_id" =>$ProgrammingQ9->id
        ]);
        Answer::create([
            "answer" =>"define",
            "is_correct" =>false,
            "question_id" =>$ProgrammingQ9->id
        ]);

        $ProgrammingQ10 = Question::where('question', 'Which symbol is used for comments in single-line JavaScript?')->first();
        Answer::create([
            "answer" =>"//",
            "is_correct" =>true,
            "question_id" =>$ProgrammingQ10->id
        ]);
        Answer::create([
            "answer" =>"/* */",
            "is_correct" =>false,
            "question_id" =>$ProgrammingQ10->id
        ]);
        Answer::create([
            "answer" =>"#",
            "is_correct" =>false,
            "question_id" =>$ProgrammingQ10->id
        ]);
        Answer::create([
            "answer" =>"--",
            "is_correct" =>false,
            "question_id" =>$ProgrammingQ10->id
        ]);

        $ProgrammingQ11 = Question::where('question', "What does API stand for?")->first();
        Answer::create([
            "answer" =>"Application Programming Interface",
            "is_correct" =>true,
            "question_id" =>$ProgrammingQ11->id
        ]);
        Answer::create([
            "answer" =>"Advanced Programming Input",
            "is_correct" =>false,
            "question_id" =>$ProgrammingQ11->id
        ]);
        Answer::create([
            "answer" =>"Application Process Integration",
            "is_correct" =>false,
            "question_id" =>$ProgrammingQ11->id
        ]);
        Answer::create([
            "answer" =>"Automated Program Interaction",
            "is_correct" =>false,
            "question_id" =>$ProgrammingQ11->id
        ]);

        $ProgrammingQ12 = Question::where('question', "Which data type is used to store true/false values?")->first();
        Answer::create([
            "answer" =>"String",
            "is_correct" =>false,
            "question_id" =>$ProgrammingQ12->id
        ]);
        Answer::create([
            "answer" =>"Integer",
            "is_correct" =>false,
            "question_id" =>$ProgrammingQ12->id
        ]);
        Answer::create([
            "answer" =>"Boolean",
            "is_correct" =>true,
            "question_id" =>$ProgrammingQ12->id
        ]);
        Answer::create([
            "answer" =>"Float",
            "is_correct" =>false,
            "question_id" =>$ProgrammingQ12->id
        ]);

        $ProgrammingQ13 = Question::where('question', "What does IDE stand for?")->first();
        Answer::create([
            "answer" =>"Integrated Development Environment",
            "is_correct" =>true,
            "question_id" =>$ProgrammingQ13->id
        ]);
        Answer::create([
            "answer" =>"Internal Data Engine",
            "is_correct" =>false,
            "question_id" =>$ProgrammingQ13->id
        ]);
        Answer::create([
            "answer" =>"Interactive Design Editor",
            "is_correct" =>false,
            "question_id" =>$ProgrammingQ13->id
        ]);
        Answer::create([
            "answer" =>"Input Development Element",
            "is_correct" =>false,
            "question_id" =>$ProgrammingQ13->id
        ]);

        $ProgrammingQ14 = Question::where('question', "Which loop is guaranteed to run at least once?")->first();
        Answer::create([
            "answer" =>"for loop",
            "is_correct" =>false,
            "question_id" =>$ProgrammingQ14->id
        ]);
        Answer::create([
            "answer" =>"while loop",
            "is_correct" =>false,
            "question_id" =>$ProgrammingQ14->id
        ]);
        Answer::create([
            "answer" =>"do...while loop",
            "is_correct" =>true,
            "question_id" =>$ProgrammingQ14->id
        ]);
        Answer::create([
            "answer" =>"foreach loop",
            "is_correct" =>false,
            "question_id" =>$ProgrammingQ14->id
        ]);

        $ProgrammingQ15 = Question::where('question', "Which keyword is used to create a class in Java?")->first();
        Answer::create([
            "answer" =>"class",
            "is_correct" =>true,
            "question_id" =>$ProgrammingQ15->id
        ]);
        Answer::create([
            "answer" =>"object",
            "is_correct" =>false,
            "question_id" =>$ProgrammingQ15->id
        ]);
        Answer::create([
            "answer" =>"struct",
            "is_correct" =>false,
            "question_id" =>$ProgrammingQ15->id
        ]);
        Answer::create([
            "answer" =>"define",
            "is_correct" =>false,
            "question_id" =>$ProgrammingQ15->id
        ]);


        // COMPUTER SCIENCE
        $CSQ1 = Question::where('question', "What does CPU stand for?")->first();
        Answer::create([
            "answer" => "Computer Personal Unit",
            "is_correct" => false,
            "question_id" => $CSQ1->id
        ]);
        Answer::create([
            "answer" => "Central Processing Unit",
            "is_correct" => true,
            "question_id" => $CSQ1->id
        ]);
        Answer::create([
            "answer" => "Control Processing Unit",
            "is_correct" => false,
            "question_id" => $CSQ1->id
        ]);
        Answer::create([
            "answer" => "Central Program Utility",
            "is_correct" => false,
            "question_id" => $CSQ1->id
        ]);

        $CSQ2 = Question::where('question', "What does RAM stand for?")->first();
        Answer::create([
            "answer" => "Run Active Memory",
            "is_correct" => false,
            "question_id" => $CSQ2->id
        ]);
        Answer::create([
            "answer" => "Random Access Memory",
            "is_correct" => true,
            "question_id" => $CSQ2->id
        ]);
        Answer::create([
            "answer" => "Random Application Machine",
            "is_correct" => false,
            "question_id" => $CSQ2->id
        ]);
        Answer::create([
            "answer" => "Read Access Memory",
            "is_correct" => false,
            "question_id" => $CSQ2->id
        ]);

        $CSQ3 = Question::where('question', "What does GPU primarily do?")->first();
        Answer::create([
            "answer" => "Runs operating system",
            "is_correct" => false,
            "question_id" => $CSQ3->id
        ]);
        Answer::create([
            "answer" => "Processes graphics",
            "is_correct" => true,
            "question_id" => $CSQ3->id
        ]);
        Answer::create([
            "answer" => "Manages network traffic",
            "is_correct" => false,
            "question_id" => $CSQ3->id
        ]);
        Answer::create([
            "answer" => "Stores files",
            "is_correct" => false,
            "question_id" => $CSQ3->id
        ]);

        $CSQ4 = Question::where('question', "What is the binary number system base?")->first();
        Answer::create([
            "answer" => "10",
            "is_correct" => false,
            "question_id" => $CSQ4->id
        ]);
        Answer::create([
            "answer" => "2",
            "is_correct" => true,
            "question_id" => $CSQ4->id
        ]);
        Answer::create([
            "answer" => "16",
            "is_correct" => false,
            "question_id" => $CSQ4->id
        ]);
        Answer::create([
            "answer" => "8",
            "is_correct" => false,
            "question_id" => $CSQ4->id
        ]);

        $CSQ5 = Question::where('question', "What does HTTP stand for?")->first();
        Answer::create([
            "answer" => "High Transfer Text Protocol",
            "is_correct" => false,
            "question_id" => $CSQ5->id
        ]);
        Answer::create([
            "answer" => "HyperText Transfer Protocol",
            "is_correct" => true,
            "question_id" => $CSQ5->id
        ]);
        Answer::create([
            "answer" => "Home Tool Transfer Protocol",
            "is_correct" => false,
            "question_id" => $CSQ5->id
        ]);
        Answer::create([
            "answer" => "HyperText Transmission Program",
            "is_correct" => false,
            "question_id" => $CSQ5->id
        ]);

        $CSQ6 = Question::where('question', "What is an algorithm?")->first();
        Answer::create([
            "answer" => "A programming language",
            "is_correct" => false,
            "question_id" => $CSQ6->id
        ]);
        Answer::create([
            "answer" => "A step-by-step solution to a problem",
            "is_correct" => true,
            "question_id" => $CSQ6->id
        ]);
        Answer::create([
            "answer" => "A type of hardware",
            "is_correct" => false,
            "question_id" => $CSQ6->id
        ]);
        Answer::create([
            "answer" => "A computer virus",
            "is_correct" => false,
            "question_id" => $CSQ6->id
        ]);

        $CSQ7 = Question::where('question', "What does IP stand for?")->first();
        Answer::create([
            "answer" => "Input Protocol",
            "is_correct" => false,
            "question_id" => $CSQ7->id
        ]);
        Answer::create([
            "answer" => "Internet Protocol",
            "is_correct" => true,
            "question_id" => $CSQ7->id
        ]);
        Answer::create([
            "answer" => "Internal Program",
            "is_correct" => false,
            "question_id" => $CSQ7->id
        ]);
        Answer::create([
            "answer" => "Internet Process",
            "is_correct" => false,
            "question_id" => $CSQ7->id
        ]);

        $CSQ8 = Question::where('question', "What is the main function of an operating system?")->first();
        Answer::create([
            "answer" => "Compile code",
            "is_correct" => false,
            "question_id" => $CSQ8->id
        ]);
        Answer::create([
            "answer" => "Manage hardware and software resources",
            "is_correct" => true,
            "question_id" => $CSQ8->id
        ]);
        Answer::create([
            "answer" => "Browse the internet",
            "is_correct" => false,
            "question_id" => $CSQ8->id
        ]);
        Answer::create([
            "answer" => "Create games",
            "is_correct" => false,
            "question_id" => $CSQ8->id
        ]);

        $CSQ9 = Question::where('question', "What does SSD stand for?")->first();
        Answer::create([
            "answer" => "Secure System Drive",
            "is_correct" => false,
            "question_id" => $CSQ9->id
        ]);
        Answer::create([
            "answer" => "Solid State Drive",
            "is_correct" => true,
            "question_id" => $CSQ9->id
        ]);
        Answer::create([
            "answer" => "System Storage Device",
            "is_correct" => false,
            "question_id" => $CSQ9->id
        ]);
        Answer::create([
            "answer" => "Super Storage Disk",
            "is_correct" => false,
            "question_id" => $CSQ9->id
        ]);

        $CSQ10 = Question::where('question', "What does URL stand for?")->first();
        Answer::create([
            "answer" => "Unified Routing Language",
            "is_correct" => false,
            "question_id" => $CSQ10->id
        ]);
        Answer::create([
            "answer" => "Uniform Resource Locator",
            "is_correct" => true,
            "question_id" => $CSQ10->id
        ]);
        Answer::create([
            "answer" => "User Reference Link",
            "is_correct" => false,
            "question_id" => $CSQ10->id
        ]);
        Answer::create([
            "answer" => "Universal Resource Link",
            "is_correct" => false,
            "question_id" => $CSQ10->id
        ]);

        $CSQ11 = Question::where('question', "What is phishing?")->first();
        Answer::create([
            "answer" => "A database system",
            "is_correct" => false,
            "question_id" => $CSQ11->id
        ]);
        Answer::create([
            "answer" => "A cyber attack to steal data",
            "is_correct" => true,
            "question_id" => $CSQ11->id
        ]);
        Answer::create([
            "answer" => "A programming language",
            "is_correct" => false,
            "question_id" => $CSQ11->id
        ]);
        Answer::create([
            "answer" => "A type of firewall",
            "is_correct" => false,
            "question_id" => $CSQ11->id
        ]);

        $CSQ12 = Question::where('question', "What does DNS stand for?")->first();
        Answer::create([
            "answer" => "Digital Name Server",
            "is_correct" => false,
            "question_id" => $CSQ12->id
        ]);
        Answer::create([
            "answer" => "Domain Name System",
            "is_correct" => true,
            "question_id" => $CSQ12->id
        ]);
        Answer::create([
            "answer" => "Data Network System",
            "is_correct" => false,
            "question_id" => $CSQ12->id
        ]);
        Answer::create([
            "answer" => "Domain Network Service",
            "is_correct" => false,
            "question_id" => $CSQ12->id
        ]);

        $CSQ13 = Question::where('question', "What is cloud computing?")->first();
        Answer::create([
            "answer" => "A programming language",
            "is_correct" => false,
            "question_id" => $CSQ13->id
        ]);
        Answer::create([
            "answer" => "Storing and accessing data over the internet",
            "is_correct" => true,
            "question_id" => $CSQ13->id
        ]);
        Answer::create([
            "answer" => "Offline data storage",
            "is_correct" => false,
            "question_id" => $CSQ13->id
        ]);
        Answer::create([
            "answer" => "A type of computer virus",
            "is_correct" => false,
            "question_id" => $CSQ13->id
        ]);

        $CSQ14 = Question::where('question', "What is the smallest unit of data in computing?")->first();
        Answer::create([
            "answer" => "Byte",
            "is_correct" => false,
            "question_id" => $CSQ14->id
        ]);
        Answer::create([
            "answer" => "Bit",
            "is_correct" => true,
            "question_id" => $CSQ14->id
        ]);
        Answer::create([
            "answer" => "Kilobyte",
            "is_correct" => false,
            "question_id" => $CSQ14->id
        ]);
        Answer::create([
            "answer" => "Nibble",
            "is_correct" => false,
            "question_id" => $CSQ14->id
        ]);

        $CSQ15 = Question::where('question', "What does AI stand for?")->first();
        Answer::create([
            "answer" => "Applied Internet",
            "is_correct" => false,
            "question_id" => $CSQ15->id
        ]);
        Answer::create([
            "answer" => "Artificial Intelligence",
            "is_correct" => true,
            "question_id" => $CSQ15->id
        ]);
        Answer::create([
            "answer" => "Automated Input",
            "is_correct" => false,
            "question_id" => $CSQ15->id
        ]);
        Answer::create([
            "answer" => "Advanced Interface",
            "is_correct" => false,
            "question_id" => $CSQ15->id
        ]);
    }
}
