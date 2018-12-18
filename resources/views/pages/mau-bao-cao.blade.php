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
				<h1 class="page-header">Mẫu báo cáo
					<a href="{{route('edit')}}" class="btn btn-success pull-right">Edit</a>
				</h1>
			</div>
			@foreach($phantieuchi as $key => $ptc)	
			<h4>{{$key+1}}. * {{$ptc->loaitieuchi}}</h4>
			<table class="col-sm-12" style="  border-collapse: collapse; margin-bottom: 30px;">	
				<tr style="height: 100%; display: table-row;">
					<th class="col-sm-7"></th>	
					<th class="col-sm-1">1</th>
					<th class="col-sm-1">2</th>
					<th class="col-sm-1">3</th>
					<th class="col-sm-1">4</th>
					<th class="col-sm-1">5</th>		
				</tr>
				@foreach($ptc ->tieuchi as $keytc => $tc)
				@if($tc->active == 1)
				<tr>	
					<td class="col-sm-7">{{$tc->tentieuchi}}</td>
					<td class="col-sm-1">
						<input type="radio" class="" name="tc-{{$tc->id}}">
					</td>
					<td class="col-sm-1">
						<input type="radio" class="" name="tc-{{$tc->id}}">
					</td>
					<td class="col-sm-1">
						<input type="radio" class="" name="tc-{{$tc->id}}">
					</td>
					<td class="col-sm-1">
						<input type="radio" class="" name="tc-{{$tc->id}}">
					</td>
					<td class="col-sm-1">
						<input type="radio" class="" name="tc-{{$tc->id}}">
					</td>
				</tr>
				@endif
				@endforeach
			</table>
			@endforeach
		</div>
	</div>
</div>
@endsection
{{-- 		
									
		<td class="col-sm-1">
					<input type="radio" class="" name="tc-{{$tc->id}}">
				</td>
				<td class="col-sm-1">
					<input type="radio" class="" name="tc-{{$tc->id}}">
				</td>
				<td class="col-sm-1">
					<input type="radio" class="" name="tc-{{$tc->id}}">
				</td>
				<td class="col-sm-1">
					<input type="radio" class="" name="tc-{{$tc->id}}">
				</td>
				<td class="col-sm-1">
					<input type="radio" class="" name="tc-{{$tc->id}}">
				</td> --}}