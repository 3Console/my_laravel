@extends('index')
@section('content')

<style>
td, th {
	margin: 10px ;
	border-bottom: 1px solid #dddddd;
	line-height: 2;

}
th.col-sm-1, td.col-sm-1 {
	text-align: center;
}
td.col-sm-1 {
	margin: 5px 0px;
}
</style>
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Enable/Disable Tiêu chí
					<a href="{{route('mks')}}" class="btn btn-success pull-right btn-save-msk">Mẫu khảo sát</a>
				</h1>
			</div>
			@foreach($phantieuchi as $key => $ptc)	
			<h4>{{$key+1}}. * {{$ptc->loaitieuchi}}</h4>
			<table class="col-sm-12" style="  border-collapse: collapse; margin-bottom: 30px;">	
				<tr style="height: 100%; display: table-row;">
					<th class="col-sm-8"></th>	
					<th class="col-sm-3 col-sm-offset-1 text-center" align="center">Enable/Disable</th>			
				</tr>
				@foreach($ptc ->tieuchi as $keytc => $tc)
				<tr>	
					<td class="col-sm-7">{{$tc->tentieuchi}}</td>
					<td class="col-sm-3 col-sm-offset-1 text-center">
						<input type="checkbox" 
						<?php 
						if($tc->active ==1)
							echo "checked";
						?>
						data-toggle="toggle" data-onstyle="primary" name="tc-{{$tc->id}}" data-active="{{$tc->active}}" data-id="{{$tc->id}}">
						<span class="spinner-{{$tc->id}}"></span>
					</td>
				</tr>
				@endforeach
			</table>
			@endforeach
		</div>
	</div>
</div>
@endsection
@section('script')
<script>
	$(document).ready(function() {
		$('body').delegate('input[type=checkbox]', 'change', function(event) {
				let tc_id = $(this).data('id');
				let tc_active = $(this).data('active');
				let btn = $(this);
				$.ajaxSetup({
					headers : {
						'X-CSRF-TOKEN' : $('meta[name="csrf-token').attr('content')
					}
				});
				let spinner = '.spinner-' + tc_id;
				$(document).ajaxStart(function () {
					$(spinner).html('<img src="{{asset('images/loading/ajax-loader.gif')}}"></img>');
				});
				$.ajax({
					url: '/changestatus',
					type: 'POST',
					data: {"id": tc_id, "active": tc_active},
				})
				.done(function() {
					$(spinner).html('<i class="fa fa-check"></i>').fadeIn('fast').fadeOut('slow');
				})
				.fail(function() {
					$(spinner).html('<i class="fa fa-times"></i>').fadeIn('fast').fadeOut(2000);
				});
				
			});
	});
</script>
@endsection
