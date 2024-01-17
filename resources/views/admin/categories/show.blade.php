@extends('layouts.app')
@section('content')
    <section class="container" id='projects_index'>
        <h1>{{$category->name}}</h1>
        <ul>
            @forelse ($category->projects as $project)
                <li>{{$project->title}}</li>
            @empty
                <li>No posts</li>
            @endforelse
        </ul>
        
    </section>
@endsection