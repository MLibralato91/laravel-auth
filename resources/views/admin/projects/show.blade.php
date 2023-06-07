@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>{{ $project->title }}</h1>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <img class="w-50" src="{{ $project->image }}" alt="{{ $project->title }}">
        <p>{!! $project->description !!}</p>

    </div>
@endsection
