@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Add Employee</div>

                <div class="panel-body" ng-app="campusApp" ng-controller="AddEmployeeController">
                    {{ Form::open(array('url' => 'employee', 'method' => 'store','files'=>true)) }}									
					<div class="controls">
					{{ Form::text('username','',array('class'=>'form-control span6','placeholder' => 'Username')) }}
					<p class="errors">{{$errors->first('username')}}</p>
					</div>
					<div class="controls">
					{{ Form::password('password',array('class'=>'form-control span6', 'placeholder' => 'Password')) }}
					<p class="errors">{{$errors->first('password')}}</p>
					</div>
					<div class="controls">
					{{ Form::password('repeat_password',array('class'=>'form-control span6', 'placeholder' => 'Repeat Password')) }}
					<p class="errors">{{$errors->first('repeat_password')}}</p>
					</div>
					<br/>

					<!-- informations -->
					<div class="controls">
					{{ Form::select('employee_type', array('teaching' => 'Teaching', 'non-teaching' => 'Non-Teaching'), 'teaching',
					array('class'=>'form-control span6','ng-model'=>'emp_type')) }}
					<p class="errors">{{$errors->first('employee_type')}}</p>
					</div>
					
					<div id="department" class="controls" ng-if="emp_type == 'teaching'">
					{{ Form::select('department_id', App\Department::lists('name', 'id') , null,array('class'=>'form-control span6')) }}
					<p class="errors">{{$errors->first('department')}}</p>
					</div>

					<div class="controls">
					{{ Form::text('fname','',array('class'=>'form-control span6', 'placeholder' => 'First Name')) }}
					<p class="errors">{{$errors->first('fname')}}</p>
					</div>
					<div class="controls">
					{{ Form::text('mname','',array('class'=>'form-control span6', 'placeholder' => 'Middle Name')) }}
					<p class="errors">{{$errors->first('mname')}}</p>
					</div>
					<div class="controls">
					{{ Form::text('lname','',array('class'=>'form-control span6', 'placeholder' => 'Last Name')) }}
					<p class="errors">{{$errors->first('lname')}}</p>
					</div>

					<div class="controls">
					{{ Form::text('address','',array('class'=>'form-control span6', 'placeholder' => 'Address')) }}
					<p class="errors">{{$errors->first('address')}}</p>
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
