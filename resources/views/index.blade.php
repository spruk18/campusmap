@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
					<div class="login" ng-app="campusApp" ng-controller="LoginController">
						<form name="loginForm" ng-submit="submitLogin()">
					        <div class="form-group">
					            <input type="text" class="form-control input-lg" name="username" ng-model="loginData.username" placeholder="username" ng-minlength=4 ng-maxlength=30 required>
					            <p class="errors">{{$errors->first('username')}}</p>
					            <div ng-show="loginForm.username.$dirty && loginForm.username.$invalid">
									<div ng-show="loginForm.username.$error.required"> Username is required</div>
									<div ng-show="loginForm.username.$error.minlength"> Username must be atleast 4 characters</div>
									<div ng-show="loginForm.username.$error.maxlength"> Username must be below 30 characters</div>
								</div>
					        </div>
					        <div class="form-group">
					            <input type="password" class="form-control input-lg" name="password" ng-model="loginData.password" placeholder="password"required>
					            <p class="errors">{{$errors->first('password')}}</p>
					        </div>				    
					        <div class="form-group text-right">   
					            <button type="submit" class="btn btn-primary btn-lg" ng-disabled="loginForm.$dirty && loginForm.$invalid">Submit</button>
					        </div>
				   		</form>
				   		
						<div class="alert alert-danger" ng-show="invalidLogin">Wrong Username/Password</div>

					</div>
					

					<!-- laravel login

					@if(Session::has('flash_message'))
						<div class="alert alert-success">{{Session::get('flash_message')}}</div>
					@endif

					
					
					{{ Form::open(array('url' => 'auth/login')) }}
						<h1>Login</h1>
						@if(Session::has('error'))
						<div class="alert-box success">
						  <h2>{{ Session::get('error') }}</h2>
						</div>
						@endif
						<div class="controls">
						{{ Form::text('username','',array('class'=>'form-control span6','placeholder' => 'Please Enter your Email')) }}
						<p class="errors">{{$errors->first('username')}}</p>
						</div>
						<div class="controls">
						{{ Form::password('password',array('class'=>'form-control span6', 'placeholder' => 'Please Enter your Password')) }}
						<p class="errors">{{$errors->first('password')}}</p>
						</div>
						<p>{{ Form::submit('Login', array('class'=>'btn btn-primary')) }}</p>
					{{ Form::close() }}
					@if(Session::has('flash_error'))
						<div class="alert alert-danger">{{Session::get('flash_error')}}</div>
					@endif
					-->			

					
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
