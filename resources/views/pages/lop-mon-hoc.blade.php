@extends('index')
@section('content')
<div id="page-wrapper">
        <div class="container-fluid">
                <div class="row">
                        <div class="col-lg-12">
                        <h1 class="page-header">LopMonHoc
                                <small>List</small>
                        </h1>
                        <div>
                                <a href="lopmonhoc/danhsach/them" class="btn btn-primary pull-right" style="margin: 0px 5px 20px 5px; padding: 10px 50px;">Add</a>
                                <button class="btn btn-primary pull-right" style="margin: 0px 5px 20px 5px; padding: 10px 50px;">Import</button>
                        </div>
                        </div>
                        <!-- /.col-lg-12 -->
                        @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                        @endif
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                                <tr align="center">
                                <th>MaLop</th>
                                <th>MonHoc</th>
                                <th>ThoiGian</th>
                                <th>GiangDuong</th>
                                <th>Delete</th>
                                <th>Edit</th>
                                </tr>
                        </thead>
                        <tbody>
                                @foreach($lopmonhoc as $lmh)
                                <tr class="odd gradeX" align="center">
                                        <td>{{$lmh->ma_lop}}</td>
                                        <td>{{$lmh->mon_hoc}}</td>
                                        <td>{{$lmh->thoi_gian}}</td>
                                        <td>{{$lmh->giang_duong}}</td>
                                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="lopmonhoc/danhsach/xoa/{{$lmh->id}}"> Delete</a></td>
                                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="lopmonhoc/danhsach/sua/{{$lmh->id}}">Edit</a></td>
                                </tr>
                                @endforeach
                        </tbody>
                        </table>
                </div>
                <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
</div>
<!-- /#wrapper -->
@endsection