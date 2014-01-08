@extends('layouts.admin')

@section('main')

<h1>All Exercises</h1>

<p>{{ link_to_route('admin.exercises.create', 'Add new exercise') }}</p>

@if ($exercises->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Description</th>
<th>answers</th>
				<th>Paer_id</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($exercises as $exercise)
				<tr>
					<td>{{{ $exercise->no }}}</td>
					<td>{{{ $exercise->description }}}</td>
          <td>
              @foreach (Answer::where('exercises_id','=',$exercise->id)->get() as $answer) 
                {{{$answer->description}}}
              @endforeach
          </td>
					<td>{{{ $exercise->paper_id }}}</td>
                    <td>{{ link_to_route('admin.exercises.edit', 'Edit', array($exercise->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('admin.exercises.destroy', $exercise->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no exercises
@endif

@stop
