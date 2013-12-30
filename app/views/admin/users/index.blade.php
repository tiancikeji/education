@extends('layouts.admin')

@section('main')

<h1>All Users</h1>

<p>{{ link_to_route('admin.users.create', 'Add new user') }}</p>


@stop
