
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Admin Dashboard</h1>
    <div class="container bg-white p-4">
        <h3>Links</h3>
        <ul>
            <li><a href="{{ route('admin.posts.index') }}">Posts</a></li>
            <li><a href="{{ route('admin.users.index') }}">Users</a></li>
        </ul>
    </div>
</div>
@endsection

