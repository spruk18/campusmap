@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Departments</div>

                <div class="panel-body">
                  	
					<table class="table table-striped">
						<tr>
							<td>Dept_id</td>
							<td>Department Name</td>
							<td></td>
							<td></td>
						</tr>
						@foreach ($departments as $dept)
						    <tr>
						    	<td>{{ $dept->id }}</td>
						    	<td><a href="department/{!! $dept->id !!}">{{ $dept->name }}</a></td>
						    	<td>						    		
						    		{{ Form::open(array('route' => array('department.edit', $dept->id), 'method' => 'get')) }}
								        <button type="submit"><i class="fa fa-btn fa-edit"></i>Edit</button>
								    {{ Form::close() }}						    		
						    	</td>
						    	<td>						    		
						    		{{ Form::open(array('route' => array('department.destroy', $dept->id), 'method' => 'delete')) }}
								        <button type="submit"><i class="fa fa-btn fa-remove"></i>Delete</button>
								    {{ Form::close() }}						    		
						    	</td>
						    </tr>
						@endforeach
					</table>

					


					<!-- modal start -->
					
					<!-- modal -->
					
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
