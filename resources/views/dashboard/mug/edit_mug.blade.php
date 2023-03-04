<x-app-layout>
    <h1>Edit Mug</h1>
    <form action="{{route('mug.update', $mug->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="file" name="image" value="{{old('image', $mug->image)}}"/><br/>
        <input type="text" name="item_name" placeholder="Item name:" value="{{old('item_name', $mug->item_name)}}" /><br/>
        <input type="number" name="price" placeholder="Price:" value="{{old('price', $mug->price)}}" /><br/>
        <textarea name="detail" cols="30" rows="100">{{old('detail', $mug->detail)}}</textarea><br/>
        <textarea name="important_information" cols="30" rows="100">{{old('important_information', $mug->important_information)}}</textarea><br/>

        <button type="submit">Update Mug</button>
    </form>
</x-app-layout>
