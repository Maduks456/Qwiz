<x-layout>
    <x-slot:title>
        {{$Theme->name}} quiz
    </x-slot:title>
    <x-slot:style>
        qwizstyle.css
    </x-slot:style>
    @auth
    <div class="main">
        <div class="title_box">
            <h1>{{$Theme->name}}</h1>
        </div>
        <div class="box">
            <div class="question_count">
                <div class="question_count_text">
                    <p>Question {{$currentQuestion+1}} of {{$totalQuestions}}</p>
                </div>
                <div style="width:100%; background-color: #332f2f; border-radius: 10px">
                        <div style="width: {{ (($currentQuestion + 1) / $totalQuestions) * 100 }}%; background:lightblue; height:10px; border-radius: 10px"></div>
                </div>
            </div>
            <div class="Answers">
                <form method="POST" action="/main">
                    @csrf
                    <input type="hidden" name="theme_id" value="{{ $Theme->id }}">
                    <input type="hidden" name="currentQuestion" value="{{ $currentQuestion }}">
                    <input type="hidden" name="total" value="{{ $totalQuestions }}">
                    <h2><b>Question:</b>{{$Question->question}}</h2>
                    @foreach($Answers as $answer)
                        <div>
                            <label>
                                <input 
                                    type="radio" 
                                    name="answer_id" 
                                    value="{{ $answer->id }}"
                                    required
                                >
                                {{ $answer->answer }}
                            </label>
                        </div>
                    @endforeach
                    <div class="box_button">
                        <button type="submit">Next</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endauth
</x-layout>
