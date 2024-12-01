{{-- 2022253084 --}}
@extends('layouts.main')
@section('container')


    @foreach($posts as $key => $Post)
    <article class="mb-5">
        <h2>
            <a href="/posts/{{$Post->id}}">{{$Post->title}}</a>
        </h2>
        <p><strong>Author :</strong>{{$Post['author']}}</p>
        <h5>{{$Post->excerpt}}</h5>
    </article>

    @endforeach

    @endsection                             