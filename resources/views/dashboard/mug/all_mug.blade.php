<x-app-layout>
    <h1>data</h1>

    @foreach ($mug as $mg)
    <img src="{{asset('storage/posts/'.$mg->image)}}" alt="{{$mg->item_name}}" /><br/>
    <a href="{{route('show.mug', $mg->id)}}">{{$mg->item_name}}</a>
    <p>{{$mg->price}}</p>
    <p>{{$mg->detail}}</p>
    <p>{{$mg->important_information}}</p>
    @endforeach
</x-app-layout>