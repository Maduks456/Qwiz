<x-layout>
    <x-slot:title>
        Sign Up
    </x-slot:title>
    <x-slot:style>
        logstyle.css
    </x-slot:style>
<div class="main">
    <div class="box">
        <h1 >Sign Up</h1>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <form method="POST">
            @csrf
            <div class="box_smallbox">
                    <div class="box_smallbox_lable">
                         <label for="name">Username</label>
                    </div>
                    <div class="box_smallbox_input">
                        <input type="text" name="name" required>
                    </div>
                </div>
                <div class="box_smallbox">
                    <div class="box_smallbox_lable">
                         <label for="role">Role</label>
                    </div>
                    <div class="box_smallbox_input">
                        <input class="inp" type="text" name="role" value="User" required>
                    </div>
                </div>
                <div class="box_smallbox">
                    <div class="box_smallbox_lable">
                        <label for="password">Password</label>
                    </div>
                    <div class="box_smallbox_input">
                        <input type="password" name="password" required>
                    </div>
                </div>
            <button>Sign up</button>
        </form>
    </div>
</div>
</x-layout>