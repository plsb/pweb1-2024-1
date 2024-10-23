@extends('layout.app')

@section('content')
    <h1>Posts</h1>
    <a href="{{ route('posts.create') }}">Criar novo post</a>

    <ul>
    @foreach($posts as $post)
        <li>
            <strong>{{ $post->user->name }}</strong>{{ $post->post_date }}
            {{ $post->content }}
            <a href="{{ route('posts.edit', $post->id) }}}">Editar</a>
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Deletar</button>
            </form>

        </li>
    @endforeach
    </ul>

@endsection
