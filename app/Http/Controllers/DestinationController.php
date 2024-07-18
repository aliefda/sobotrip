<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function index()
    {
        $destinations = Destination::all();
        return view('destination.index', compact('destinations'));
    }

    public function create()
    {
        return view('destination.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'title_1' => 'required',
            'description_1' => 'required',
            'description_2' => 'required',
            'image' => 'required|image',
            'thumbnail_1' => 'required|image',
            'thumbnail_2' => 'required|image',
            'thumbnail_3' => 'required|image',
            'maps_embed' => 'required'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }

        if ($thumbnail1 = $request->file('thumbnail_1')) {
            $thumbnailPath = 'image/';
            $thumbnailName1 = $thumbnail1->getClientOriginalName();
            $thumbnail1->move($thumbnailPath, $thumbnailName1);
            $input['thumbnail_1'] = $thumbnailName1;
        }

        if ($thumbnail2 = $request->file('thumbnail_2')) {
            $thumbnailPath = 'image/';
            $thumbnailName2 = $thumbnail2->getClientOriginalName();
            $thumbnail2->move($thumbnailPath, $thumbnailName2);
            $input['thumbnail_2'] = $thumbnailName2;
        }

        if ($thumbnail3 = $request->file('thumbnail_3')) {
            $thumbnailPath = 'image/';
            $thumbnailName3 = $thumbnail3->getClientOriginalName();
            $thumbnail3->move($thumbnailPath, $thumbnailName3);
            $input['thumbnail_3'] = $thumbnailName3;
        }

        Destination::create($input);

        return redirect('/destinations')->with(['message', 'Data Berhasil Ditambahkan']);
    }

    public function edit(Destination $destination)
    {
        return view('destination.edit', compact('destination'));
    }

    public function update(Request $request, Destination $destination)
    {
        $request->validate([
            'title' => 'required',
            'title_1' => 'required',
            'description_1' => 'required',
            'description_2' => 'required',
            'image' => 'required|image',
            'thumbnail_1' => 'required|image',
            'thumbnail_2' => 'required|image',
            'thumbnail_3' => 'required|image',
            'maps_embed' => 'required'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        } else {
            unset($input['image']);
        }

        if ($thumbnail1 = $request->file('thumbnail_1')) {
            $thumbnailPath = 'image/';
            $thumbnailName1 = $thumbnail1->getClientOriginalName();
            $thumbnail1->move($thumbnailPath, $thumbnailName1);
            $input['thumbnail_1'] = $thumbnailName1;
        } else {
            unset($input['thumbnail_1']);
        }

        if ($thumbnail2 = $request->file('thumbnail_2')) {
            $thumbnailPath = 'image/';
            $thumbnailName2 = $thumbnail2->getClientOriginalName();
            $thumbnail2->move($thumbnailPath, $thumbnailName2);
            $input['thumbnail_2'] = $thumbnailName2;
        } else {
            unset($input['thumbnail_2']);
        }

        if ($thumbnail3 = $request->file('thumbnail_3')) {
            $thumbnailPath = 'image/';
            $thumbnailName3 = $thumbnail3->getClientOriginalName();
            $thumbnail3->move($thumbnailPath, $thumbnailName3);
            $input['thumbnail_3'] = $thumbnailName3;
        } else {
            unset($input['thumbnail_3']);
        }

        $destination->update($input);

        return redirect('/destinations')->with(['message', 'Data Berhasil Diupdate']);
    }

    public function destroy(Destination $destination)
    {
        $destination->delete();

        return redirect('/destinations')->with('message', 'Data Berhasil Dihapus');
    }

    public function show($id)
    {
        $destination = Destination::findOrFail($id);
        return view('home.show', compact('destination'));
    }
}

