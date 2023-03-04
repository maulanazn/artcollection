<x-app-layout>
    <h1>Add Mug</h1>
    <form action="{{route('mug.create')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image"/><br/>
        <input type="text" name="item_name" placeholder="Item name:"/><br/>
        <input type="number" name="price" placeholder="Price:" /><br/>
        <textarea name="detail" cols="100" rows="20"></textarea><br/>
        <textarea name="important_information" cols="100" rows="20"></textarea><br/>

        <button type="submit">Add Mug</button>
    </form>
</x-app-layout>