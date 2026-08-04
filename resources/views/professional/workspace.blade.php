@extends('layouts.app')

@section('title', 'Workspace')

@section('content')
    <h1 class="text-2xl font-bold text-text-primary">{{ $professional->name }}</h1>
    <p class="mt-2 text-text-secondary">
        This is your workspace — Client, Project and Deliverable management arrive in the next increments.
    </p>
@endsection
