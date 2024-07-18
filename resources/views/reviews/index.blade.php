@extends('layouts.app')

@section('title', 'Data Review')

@section('content')

<div class="container">
    <div class="table-responsive">
        <table class="table table table-bordered table-hover table-stiped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Destination</th>
                    <th>Rating</th>
                    <th>Comment</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reviews as $review)
                    <tr>
                        <td>{{ $review->id }}</td>
                        <td>{{ $review->user->name }}</td>
                        <td>{{ $review->destination->title }}</td>
                        <td>{{ $review->rating }}</td>
                        <td>{{ $review->comment }}</td>
                        <td>
                            <form action="{{route('reviews.destroy', $review->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection