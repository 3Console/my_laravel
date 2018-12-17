@extends('index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">SinhVien
                        <small>Add</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                                {{$err}}<br>
                            @endforeach
                        </div>
                    @endif

                    @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                    @endif

                    <form action="sinhvien/danhsach/them" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}" />
                        <div class="form-group">
                            <label>MSV</label>
                            <input class="form-control" name="msv" placeholder="Please Enter MSV" />
                        </div>
                        <div class="form-group">
                            <label>MatKhau</label>
                            <input type="password" class="form-control" name="password" placeholder="Please Enter Password" />
                        </div>
                        <div class="form-group">
                            <label>NhapLaiMatKhau</label>
                            <input type="password" class="form-control" name="repassword" placeholder="Please Enter RePassword" />
                        </div>
                        <div class="form-group">
                                <label>HoTen</label>
                                <input class="form-control" name="hoten" placeholder="Please Enter Ho va ten" />
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Please Enter Email" />
                        </div>
                        <div class="form-group">
                                <label>KhoaHoc</label>
                                <input class="form-control" name="khoahoc" placeholder="Please Enter Khoa hoc" />
                            </div>
                        <button type="submit" class="btn btn-default">User Add</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                    <form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
</div>
<!-- /#wrapper -->
@endsection