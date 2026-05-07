<x-layout>
     <x-slot:title>
        {{$Theme->name}} quiz results
    </x-slot:title>
    <x-slot:style>
        qwizstyle.css
    </x-slot:style>
    <div  class="main">
        <div class="title_box">
             <h1>Your quiz results</h1>
        </div>
        <div class="box">
            <p>{{ auth()->user()->name }} you answered {{session('score')}} out of {{$totalQuestions}} correctly!</p>
            <form action="/result" method="POST">
                @csrf
                <input type="hidden" name="theme_id" value="{{$Theme->id}}">
                <div class="box_button">
                    <button name="action" value="retake">
                        Retake quiz
                    </button>
                </div>
                <div class="box_button">
                    <button name="action" value="another">
                        Choose another topic
                    </button>
                </div>
            </form>
        </div>
    </div>
   
    

</x-layout>