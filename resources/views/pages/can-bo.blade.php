@extends('index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Canbo
                    <small>List</small>
                </h1>
                <div>
                    <a href="canbo/danhsach/them" class="btn btn-primary pull-right" style="margin: 0px 5px 20px 5px; padding: 10px 50px;">Add</a>
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
                        <th>STT</th>
                        <th>TenDangNhap</th>
                        <th>HoTen</th>
                        <th>VNU_Email</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($canbo as $cb)
                        <tr class="odd gradeX" align="center">
                                <td>{{$cb->id}}</td>
                                <td>{{$cb->ten_dang_nhap}}</td>
                                <td>{{$cb->ho_ten}}</td>
                                <td>{{$cb->vnu_email}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="canbo/danhsach/xoa/{{$cb->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="canbo/danhsach/sua/{{$cb->id}}">Edit</a></td>
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