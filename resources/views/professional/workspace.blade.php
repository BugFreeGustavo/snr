@extends('layouts.app')

@section('title', 'Workspace')

@section('content')
    <h1 class="font-display text-3xl text-foreground">{{ $professional->name }}</h1>
    <p class="mt-2 text-foreground-muted">
        This is your workspace — Client, Project and Deliverable management arrive in the next increments.
    </p>
@endsection
