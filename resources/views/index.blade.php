@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
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

					
					<!--

					<div ng-app="loginApp">
						<form ng-submit="submitLogin()">    
					        <div class="form-group">
					            <input type="text" class="form-control input-lg" name="username" ng-model="loginData.username" placeholder="username">
					        </div>
					        <div class="form-group">
					            <input type="password" class="form-control input-lg" name="password" ng-model="loginData.password" placeholder="password">
					        </div>				    
					        <div class="form-group text-right">   
					            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
					        </div>
				   		</form>

					</div>
					
					{{-- <div class="comment" ng-hide="loading" ng-repeat="comment in comments">
				     	<p class="text-center" ng-show="loading"><span class="fa fa-meh-o fa-5x fa-spin"></span></p>
				    		        
				    </div> --}}
-->
					
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
