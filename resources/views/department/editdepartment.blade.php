@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Department</div>
                @foreach ($department as $dept)	
	                <div class="panel-body">
	     
	                    {{ Form::open(array('url' => '/department/'.$dept->id, 'method' => 'put')) }}									
						
						<div class="controls">
						{{ Form::label('name', 'Department Name') }}
						{{ Form::text('name',$dept->name,array('class'=>'form-control span6', 'placeholder' => 'Department Name')) }}
						<p class="errors">{{$errors->first('name')}}</p>
						</div>
						<div class="controls">
	                    {{ Form::select('dept_type', array('teaching' => 'Teaching', 'non-teaching' => 'Non-Teaching'), 'teaching',
	                    array('class'=>'form-control span6','ng-model'=>'dept_type')) }}
	                    <p class="errors">{{$errors->first('dept_type')}}</p>
	                    </div>

						
					
						{{ Form::submit('Submit', array('class'=>'btn btn-primary')) }}
					
						{{ Form::close() }}
					</div>
				@endforeach				
                
            </div>
        </div>
    </div>
</div>
@endsection
