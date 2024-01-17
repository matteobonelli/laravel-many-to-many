@extends('layouts.app')
@section('content')
    <section class="container" id='projects_index'>
        <h1>{{$project->title}}</h1>
        <p>{{$project->description}}</p>
        <span>{{$project->category ? $project->category->name : 'Non catalogato'}}</span>
        {{-- $post->category?->name --}}
    </section>
@endsection