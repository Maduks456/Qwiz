<x-layout>
<div class="main">
    <x-slot:title>
        History
    </x-slot:title>
    
    @if ($history->isEmpty())
        <div class="title_box">
             <h1>You haven't done any quizes</h1>
        </div>
    @else
        <div class="title_box">
            <h1 >History</h1>
        </div>
        @foreach ($history as $his)
            <div class="history_box">
                {{ $his->theme }} quiz got {{$his->correct_answers}} correct.
            </div>
        @endforeach
    @endif
</div>
</x-layout>