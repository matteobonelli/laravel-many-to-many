@extends('layouts.app')
@section('content')
    <section class="container" id='projects_index'>
        <h1>{{$technology->name}}</h1>
        <ul>
            @if($technology->projects)
            @foreach ($technology->projects as $project)
                <li>{{$project->title}}</li>
                <li>No posts</li>
            @endforeach
            @endif
        </ul>
    </section>
@endsection