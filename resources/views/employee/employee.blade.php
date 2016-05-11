@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Employees</div>

                <div class="panel-body">
                  	
					<table class="table table-striped">
						<tr>
							<td>Emp_id</td>
							<td>Username</td>
							<td>First</td>
							<td>Middle</td>
							<td>Last</td>
							<td>Address</td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						@foreach ($employees as $emp)
						    <tr>
						    	<td>{{ $emp->id }}</td>
						    	<td>{{ $emp->username }}</td>
						    	<td>{{ $emp->fname }}</td>
						    	<td>{{ $emp->lname }}</td>
						    	<td>{{ $emp->mname }}</td>
						    	<td>{{ $emp->address }}</td>
						    	<td>
						    	<a href="#">{!! Html::image('uploads/'.$emp->photo, 'alt', array( 'class'=>'img_thumbnail','data-toggle'=>'modal','data-target'=>'#photoModal'.$emp->id)) !!}</a>
						    	</td>
						    	<td>						    		
						    		{{ Form::open(array('route' => array('employee.edit', $emp->id), 'method' => 'get')) }}
								        <button type="submit"><i class="fa fa-btn fa-edit"></i>Edit</button>
								    {{ Form::close() }}						    		
						    	</td>
						    	<td>						    		
						    		{{ Form::open(array('route' => array('employee.destroy', $emp->id), 'method' => 'delete')) }}
								        <button type="submit"><i class="fa fa-btn fa-remove"></i>Delete</button>
								    {{ Form::close() }}						    		
						    	</td>
						    </tr>
						@endforeach
					</table>

					


					<!-- modal start -->
					@foreach ($employees as $fac)
					
					<div id="photoModal{!! $fac->id !!}" class="modal fade" role="dialog">
						<div class="modal-dialog">

						<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">{!! $fac->fname.' '.$fac->mname.' '.$fac->lname !!}</h4>
								</div>
								<div class="modal-body">
									{!! Html::image('uploads/'.$fac->photo, 'alt', array('class'=>'img' )) !!}
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							</div>

						</div>
					</div>
					@endforeach
					<!-- modal -->
					
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
