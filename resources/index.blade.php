@extends('layouts.app')

@section('content')
    <ul>
        @foreach($posts as $post)
        <li>{{ $post->user_id }}: {{ $post->body }}</li>
        @endforeach
    </ul>
@endsection