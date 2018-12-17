@extends('index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">LopMonHoc
                        <small>Edit</small>
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

                    <form action="lopmonhoc/danhsach/sua/{{$lopmonhoc->id}}" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}" />
                        <div class="form-group">
                            <label>ID_Canbo</label>
                            <input class="form-control" name="idcanbo" placeholder="Please Enter ID_Canbo" value="{{$lopmonhoc->idcanbo}}" />
                        </div>
                        <div class="form-group">
                            <label>MaLop</label>
                            <input class="form-control" name="malop" placeholder="Please Enter MaLop" value="{{$lopmonhoc->malop}}" />
                        </div>
                        <div class="form-group">
                            <label>MonHoc</label>
                            <input class="form-control" name="monhoc" placeholder="Please Enter MonHoc" value="{{$lopmonhoc->monhoc}}" />
                        </div>
                        <div class="form-group">
                            <label>ThoiGian</label>
                            <input class="form-control" name="thoigian" placeholder="Please Enter ThoiGian" value="{{$lopmonhoc->thoigian}}" />
                        </div>
                        <div class="form-group">
                            <label>GiangDuong</label>
                            <input class="form-control" name="giangduong" placeholder="Please Enter GiangDuong" value="{{$lopmonhoc->giangduong}}" />
                        </div>
                        <button type="submit" class="btn btn-default">User Edit</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
</div>
<!-- /#wrapper -->
@endsection