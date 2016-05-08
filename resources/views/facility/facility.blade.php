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
							<td>Floor</td>		
							<td>Building</td>				
							<td>Floor plan</td>
							<td>Photo</td>	
							<td></td>
							<td></td>
						</tr>
						@foreach ($facilities as $fac)
						    <tr>
						    	<td>{!! $fac->id !!}</td>
						    	<td>{!! $fac->name !!}</td>
						    	<td>{!! $fac->floor !!}</td>
						    	<td>{!! $fac->building_name !!}</td>
						    	<td>
						    	<a href="#">{!! Html::image('uploads/'.$fac->floor_plan, 'alt', array( 'class'=>'img_thumbnail','data-toggle'=>'modal','data-target'=>'#floorPlanModal'.$fac->id)) !!}</a>
						    	</td>
						    	<td>
						    	<a href="#">{!! Html::image('uploads/'.$fac->photo, 'alt', array( 'class'=>'img_thumbnail','data-toggle'=>'modal','data-target'=>'#photoModal'.$fac->id)) !!}</a>
						    	</td>
						    	<td>						    		
						    		{!! Form::open(array('route' => array('facility.edit', $fac->id), 'method' => 'get')) !!}
								        <button type="submit"><i class="fa fa-btn fa-edit"></i>Edit</button>
								    {!! Form::close() !!}						    		
						    	</td>
						    	<td>						    		
						    		{!! Form::open(array('route' => array('facility.destroy', $fac->id), 'method' => 'delete')) !!}
								        <button type="submit"><i class="fa fa-btn fa-remove"></i>Delete</button>
								    {!! Form::close() !!}						    		
						    	</td>
						    </tr>
						@endforeach
					</table>

					


					<!-- modal start -->
					@foreach ($facilities as $fac)
					<div id="floorPlanModal{!! $fac->id !!}" class="modal fade" role="dialog">
						<div class="modal-dialog">

						<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">{!! $fac->floor_plan !!}</h4>
								</div>
								<div class="modal-body">
									{!! Html::image('uploads/'.$fac->floor_plan, 'alt', array('class'=>'img' )) !!}
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							</div>

						</div>
					</div>


					<div id="photoModal{!! $fac->id !!}" class="modal fade" role="dialog">
						<div class="modal-dialog">

						<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">{!! $fac->photo !!}</h4>
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
