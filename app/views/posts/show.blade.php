@extends('templates.default')

@section('title')
{{$post->title}}
@stop
@section('content')
<article>
			<h2>{{$post->title}}</h2>
			<p>{{Markdown::parse($post->body,300)}}</p> 
			<small>Published on {{$post->created_at->format('l jS \\of F Y')}}</small><br>
			</article>
@stop
