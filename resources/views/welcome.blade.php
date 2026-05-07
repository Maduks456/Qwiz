<x-layout>
    @auth
    <div class="main">
        <div class="box">
            <div class="box_title" >
                <p class="Title">Choose a Theme</p>
            </div>
            <form  action="/main">
                @csrf
                <div class="box_list">
                    <select name="theme"id="list" required>
                        <option value="none">Pick an option</option>
                        @foreach($themes as $theme)
                            <option value="{{$theme->id}}">{{$theme->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="box_button">
                    <button >Go</button>
                </div>
            </form> 
        </div>
        <div class="box">
            
            <form action="/history">
            @csrf
            <div class="box_button">
                <button>
                    History
                </button>
            </div>
        </form>
        @if (Auth::user()->role == "Admin")
            <div>
                <a href="/themes" class="box_button">
                    <button>Creating themes</button>
                </a>
            </div>
        @endif
        <form action="/logout" method="POST">
            @csrf
            <div class="box_button">
                <button>Log out</button>
            </div>
        </form>
        </div>
        

    @endauth

    @guest
    <div class="button_box">
        <div class="buttons">
            <div  class="small">
                <a href="/login">
                    <button class="button">Login</button>
                </a><br>
            </div>

            <div class="small">
            <a href="/register">
                    <button class="button">Register</button>
                </a>
            </div>
        </div>
    </div>
    @endguest
    </div>
</x-layout>