@extends('layouts.admin')

@section('main')

<h1>Show User</h1>

<p>{{ link_to_route('admin.users.index', 'Return to all users') }}</p>

<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th>email</th>
        <th>name</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <td>{{{ $user->email }}}</td>
          <td>{{{ $user->name }}}</td>
                    <td>{{ link_to_route('admin.users.edit', 'Edit', array($user->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('admin.users.destroy', $user->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
    </tr>
  </tbody>
</table>

@stop
