@extends('layouts.app')

@section('title', 'Data Slider')

@section('content')

<div class="container">
    <a href="/sliders" class="btn btn-primary">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('sliders.update', $slider->id)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                @error('description')
                    <small style="color: red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <input type="text" class="form-control" name="description" placeholder="Deskripsi" >
                </div>
                @error('image')
                    <small style="color: red">{{$message}}</small>
                @enderror
                <img src="/image/{{$slider->image}}" alt="" class="img-fluid">
                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control" name="image">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection