@extends('base')

@section('title', 'Редагування поста')

@section('base_menu')
    <h1>Редагування поста</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('post.update', $post->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="user_name">Ім'я користувача</label>
            <input type="text" class="form-control" id="user_name" name="user_name" value="{{ $post->user_name }}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $post->email }}">
        </div>
        <div class="form-group">
            <label for="comment">Коментар</label>
            <textarea class="form-control" id="comment" name="comment">{{ $post->comment }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Зберегти зміни</button>
    </form>
@endsection
