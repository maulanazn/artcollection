<x-guest-layout>
    <form action="{{route('register')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="type your name"/><br/>
        <input type="email" name="email" placeholder="type your email, example = lajsdlf@plk.org"/><br/>
        <input type="password" name="password" placeholder="type your password, it's secret"/><br/>

        <button type=submit>Register</button>
    </form>
</x-guest-layout>