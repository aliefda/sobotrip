@extends('layouts.app')

@section('title', 'Data Wisata')

@section('content')

<div class="container">
    <a href="/destinations" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('destinations.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @error('title')
                    <small style="color: red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="title" placeholder="Judul" >
                </div>
                @error('title_1')
                    <small style="color: red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="title_1" placeholder="Judul" >
                </div>
                @error('description_1')
                    <small style="color: red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Deskripsi 1</label>
                    <textarea name="description_1" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi"></textarea>
                </div>
                @error('description_2')
                    <small style="color: red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Deskripsi 2</label>
                    <textarea name="description_2" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi"></textarea>
                </div>                     
                @error('image')
                    <small style="color: red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control" name="image">
                </div>
                @error('thumbnail_1')
                    <small style="color: red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Thumbnail 1</label>
                    <input type="file" class="form-control" name="thumbnail_1">
                </div>
                @error('thumbnail_2')
                    <small style="color: red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Thumbnail 2</label>
                    <input type="file" class="form-control" name="thumbnail_2">
                </div>
                @error('thumbnail_3')
                    <small style="color: red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Thumbnail 3</label>
                    <input type="file" class="form-control" name="thumbnail_3">
                </div>
                @error('maps_embed')
                    <small style="color: red">{{$message}}</small>
                @enderror
                <div class="form-group">
                    <label for="">Maps Embed</label>
                    <textarea name="maps_embed" id="" cols="30" rows="10" class="form-control" placeholder="Maps Embed"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection