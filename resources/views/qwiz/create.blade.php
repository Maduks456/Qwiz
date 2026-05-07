<x-layout>
    <x-slot:title>
        Theme create
    </x-slot:title>
    <x-slot:style>
        qwizstyle.css
    </x-slot:style>
    @auth
    @if (Auth::user()->role == "Admin")
        <div class="main">
            <div class="title_box">
                <h1> Create themes</h1>
            </div>
            <div>
                <form method="POST" action="/themes">
                    <input class="theme" type="text" name="theme" placeholder="Theme">
                    <div id="questions-container">
                        <div class="question-box">
                            @csrf
                            <input class="answ " type="text" name="questions[0][question]" placeholder="Question"><br>
                            <input type="radio" name="questions[0][correct]" value="0">
                            <input class="answ" type="text" name="questions[0][answers][]" placeholder="Answer 1"><br>
                            <input type="radio" name="questions[0][correct]" value="1">
                            <input class="answ" type="text" name="questions[0][answers][]" placeholder="Answer 2"><br>
                            <input type="radio" name="questions[0][correct]" value="2">
                            <input class="answ" type="text" name="questions[0][answers][]" placeholder="Answer 3"><br>
                            <input type="radio" name="questions[0][correct]" value="3">
                            <input class="answ" type="text" name="questions[0][answers][]" placeholder="Answer 4"> 
                        </div>
                    </div>
                    <div class="form-actions">
                        <button class="jautpog" type="button" id="addQuestion">Add Question</button>
                        <button class="jautpog" type="submit">Create</button>
                    </div>

                    
                </form>
            </div>
        </div>
        @endif
        @if (Auth::user()->role !== "Admin")
           <h1>You shouldn't be here</h1>           
        @endif
    @endauth
    @guest
        <h1>You shouldn't be here</h1>
    @endguest
</x-layout>