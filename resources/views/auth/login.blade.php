<x-guest-layout>
    <form action="{{route('login')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="type your name"/><br/>
        <input type="password" name="password" placeholder="type your password, it's secret"/><br/>

        <button type=submit>Login</button>
    </form>
</x-guest-layout>