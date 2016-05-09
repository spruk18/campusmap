@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Faculties under {!! $dept_name !!}</div>

                <div class="panel-body">
                  	
					<table class="table table-striped">
						<tr>
							<td>ID</td>
							<td>First Name</td>
							<td>Middle Name</td>
							<td>Last Name</td>
						</tr>
						@foreach ($employees as $emp)
						    <tr>
						    	<td>{{ $emp->information_id }}</td>
						    	<td>{{ $emp->fname }}</td>
						    	<td>{{ $emp->mname }}</td>
						    	<td>{{ $emp->lname }}</td>

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
