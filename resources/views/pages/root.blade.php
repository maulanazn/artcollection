<x-guest-layout>
    <nav>
        @guest
        <a href="{{route('register.view')}}">Register</a>
        <a href="{{route('login.view')}}">Login</a>
        @else
        <a href="{{route('dashboard')}}">Dashboard</a>
        @endguest
    </nav>
    <h1>hello user</h1>
</x-guest-layout>
