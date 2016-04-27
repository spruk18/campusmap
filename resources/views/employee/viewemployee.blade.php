@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Employee</div>
                @foreach ($employee as $emp)	
	                <div class="panel-body">
	     
	                    {{ Form::open(array('url' => '/employee/'.$emp->id, 'method' => 'put')) }}									
						<div class="controls">
						{{ Form::label('username', 'Username') }}	
						{{ Form::text('username',$emp->username,array('class'=>'form-control span6','placeholder' => 'Username','readonly' => 'true')) }}
						<p class="errors">{{$errors->first('username')}}</p>
						</div>
						
						<br/>
						<!-- informations -->
						<div class="controls">
						{{ Form::label('fname', 'First Name') }}
						{{ Form::text('fname',$emp->fname,array('class'=>'form-control span6', 'placeholder' => 'First Name')) }}
						<p class="errors">{{$errors->first('fname')}}</p>
						</div>
						<div class="controls">
						{{ Form::label('mname', 'Middle Name') }}
						{{ Form::text('mname',$emp->mname,array('class'=>'form-control span6', 'placeholder' => 'Middle Name')) }}
						<p class="errors">{{$errors->first('mname')}}</p>
						</div>
						<div class="controls">
						{{ Form::label('lname', 'Last Name') }}
						{{ Form::text('lname',$emp->lname,array('class'=>'form-control span6', 'placeholder' => 'Last Name')) }}
						<p class="errors">{{$errors->first('lname')}}</p>
						</div>

						<div class="controls">
						{{ Form::label('address', 'Address') }}	
						{{ Form::text('address',$emp->address,array('class'=>'form-control span6', 'placeholder' => 'Address')) }}
						<p class="errors">{{$errors->first('address')}}</p>
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
