{{-- 2022253084 --}}
@extends('layouts.main')
@section('container')

<h1 class="mb-5">
    {{$posts['title']}}
</h1>
{!!$posts['body']!!} <br>
<a href="/blog">Back to posts</a>

    @endsection                             