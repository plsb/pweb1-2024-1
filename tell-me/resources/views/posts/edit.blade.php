@extends('layout.app')

@section('content')
    <h1>Atualizar Post</h1>
    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="content">Content</label>
        <textarea name="content" id="content" required>{{$post->content}}</textarea>

        <button type="submit">Atualizar post</button>
    </form>

@endsection
