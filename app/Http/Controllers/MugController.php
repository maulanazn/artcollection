<?php

namespace App\Http\Controllers;

use App\Http\Requests\MugRequest;
use App\Models\Mug;
use Illuminate\Http\Request;

class MugController extends Controller
{
    public function index()
    {
        $mug = Mug::all();

        return view('dashboard.mug.all_mug', [
            'mug' => $mug
        ]);
    }

    public function create()
    {
        return view('dashboard.mug.add_mug');
    }

    public function store(MugRequest $request)
    {
        $request->validated($request->all());

        Mug::create([
            'image' => $request->image,
            'item_name' => $request->item_name,
            'price' => $request->price,
            'detail' => $request->detail,
            'important_information' => $request->important_information
        ]);

        $image = $request->file('image');
        $image->storeAs('public/posts/', $image->hashName());

        return redirect(route('show.mugs'));
    }

    public function show($id)
    {
        $mug = Mug::find($id);

        return view('dashboard.mug.show_mug', compact('mug'));
    }

    public function edit(Mug $mug)
    {
        return view('dashboard.mug.edit_mug', compact('mug'));
    }
    
    public function update(Request $request, Mug $mug)
    {
        $request->validate([
            'image' => 'image|mimes:png,jpg,jpeg,svg,webp',
            'item_name' => 'max:1000',
            'price' => 'numeric|max:10',
            'detail' => 'max:1000',
            'important_information' => 'max:10000'
        ]);
                
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->storeAs('public/posts', $image->hashName());
            
            \Storage::delete('public/posts/'.$mug->image);
            
            $mug->update([
                'image' => $mug->image,
                'item_name' => $mug->item_name,
                'price' => $mug->price,
                'detail' => $mug->detail,
                'important_information' => $mug->important_information
            ]);
        } else {
            $mug->update([
                'item_name' => $mug->item_name,
                'price' => $mug->price,
                'detail' => $mug->detail,
                'important_information' => $mug->important_information
            ]);
        }
    
        return redirect(route('show.mug'));
    }

    public function destroy(Mug $mug)
    {
        \Storage::delete('public/posts'.$mug->image);

        $mug->delete();

        return redirect(route('show.mugs'));
    }
}
