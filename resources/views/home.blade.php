@extends('baseplate')

@section('title', 'Message Board')

@section('content')

<h2>Message Board</h2>

<p>Post your message</p>
<form action="/create" method="POST">
    <input type="text" name="title" placeholder="Title of Message" />
    <input type="text" name="content" placeholder="Your message" />
    {{ csrf_field() }}
    <button type="submit">Send message</button>
</form>

<p> Recent Messages: </p>

<ul>
    @foreach($messages as $message)
    <li><strong>{{$message->title}}:</strong>
        <br /> 
        {{$message->content}}
        <br />
        {{$message->created_at->diffForHumans()}}
        <br />
        <a href="/message/{{$message->id}}">View</a>
    </li>
    @endforeach
</ul>

@endsection     