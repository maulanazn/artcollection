<x-app-layout>
    <img src="{{ asset('storage/posts/'.$mug->image)}}" width="200"/>
    <p>{{$mug->item_name}}</p>
    <p>{{$mug->price}}</p>
    <p>{{$mug->detail}}</p>
    <p>{{$mug->important_information}}</p>

    <a href="{{route('mug.update.view', $mug)}}">Edit</a>
</x-app-layout>
