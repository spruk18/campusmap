@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Add Facility</div>

                <div class="panel-body">
                    {{ Form::open(array('url' => 'facility', 'method' => 'store','files'=>true)) }}									
					<div class="controls">
					{{ Form::text('name','',array('class'=>'form-control span6','placeholder' => 'Facility Name')) }}
					<p class="errors">{{$errors->first('name')}}</p>
					</div>

                    <div class="controls">
                    {{ Form::text('building','',array('class'=>'form-control span6','placeholder' => 'Building')) }}
                    <p class="errors">{{$errors->first('building')}}</p>
                    </div>

                    <div class="controls">
                    {{ Form::number('floor','',array('class'=>'form-control span6','placeholder' => 'Floor','min' => 1)) }}
                    <p class="errors">{{$errors->first('floor')}}</p>
                    </div>  

                    <div class="controls">
                    <span>floor plan</span> {!! Form::file('floor_plan') !!}
                    <p class="errors">{{$errors->first('floor_plan')}}</p>
                    </div>  
                    <div class="controls">
                    <span>photo</span> {!! Form::file('photo') !!}
                    <p class="errors">{{$errors->first('photo')}}</p>
                    </div>  

				
					{{ Form::submit('Submit', array('class'=>'btn btn-primary')) }}
				
					{{ Form::close() }}
										
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
