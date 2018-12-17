@extends('index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">SinhVien
                    <small>List</small>
                </h1>
                <div>
                    <a href="sinhvien/danhsach/them" class="btn btn-primary pull-right" style="margin: 0px 5px 20px 5px; padding: 10px 50px;">Add</a>
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
                        <th>MSV</th>
                        <th>HoTen</th>
                        <th>VNU_email</th>
                        <th>KhoaHoc</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($sinhvien as $sv)
                        <tr class="odd gradeX" align="center">
                                <td>{{$sv->msv}}</td>
                                <td>{{$sv->ho_ten}}</td>
                                <td>{{$sv->vnu_email}}</td>
                                <td>{{$sv->khoa_hoc}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="sinhvien/danhsach/xoa/{{$sv->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="sinhvien/danhsach/sua/{{$sv->id}}">Edit</a></td>
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