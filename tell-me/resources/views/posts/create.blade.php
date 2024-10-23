@extends('layout.app')

@section('content')
    <h1>Posts</h1>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label for="content">Content</label>
        <textarea name="content" id="content" required></textarea>

        <button type="submit">Salvar post</button>
    </form>

@endsection
