@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Facility</div>
                @foreach ($facility as $fac)	
	                <div class="panel-body">
	     
	                    {{ Form::open(array('url' => '/facility/'.$fac->id, 'method' => 'put')) }}									
						
						<div class="controls">
						{{ Form::label('name', 'Facility Name') }}
						{{ Form::text('name',$fac->name,array('class'=>'form-control span6', 'placeholder' => 'Facility Name')) }}
						<p class="errors">{{$errors->first('name')}}</p>
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
