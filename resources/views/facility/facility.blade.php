@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Facilities</div>

                <div class="panel-body">
                  	
					<table class="table table-striped">
						<tr>
							<td>id</td>
							<td>Facility Name</td>							
							<td></td>
							<td></td>
						</tr>
						@foreach ($facilities as $fac)
						    <tr>
						    	<td>{{ $fac->id }}</td>
						    	<td>{{ $fac->name }}</td>
						    	<td>						    		
						    		{{ Form::open(array('route' => array('facility.edit', $fac->id), 'method' => 'get')) }}
								        <button type="submit"><i class="fa fa-btn fa-edit"></i>Edit</button>
								    {{ Form::close() }}						    		
						    	</td>
						    	<td>						    		
						    		{{ Form::open(array('route' => array('facility.destroy', $fac->id), 'method' => 'delete')) }}
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
