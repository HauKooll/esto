@extends('admin.layout.index')
@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="admin/baihoc/"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="admin/baihoc/">Quản Lý Bài Học</a></li>
                            <li class="breadcrumb-item"><a href="admin/baihoc/them">Thêm Bài Học</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col-xl-8 order-xl-1">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Thêm bài học</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="admin/baihoc/" class="btn btn-sm btn-primary">Quay lại</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="admin/baihoc/them" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h6 class="heading-small text-muted mb-4">Thông tin bài học</h6>
                        @if (session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                        @endif
                        <div class="pl-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-first-name">Khóa học</label></br>
                                <select id="MAKH" name="MAKH">
                                    <option value="">--------------------Khóa học--------------------</option>
                                    @foreach($khoahoc as $kh)
                                    <option value="{{ $kh->MAKH }}">{{ $kh->TENKH }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="pl-lg-4" id="dlophoc" name="dlophoc">
                        </div>
                        <div class="pl-lg-4" id="dchuonghoc" name="dchuonghoc">
                        </div>
                        <div class="pl-lg-4" id="dqlchuonghoc" name="dqlchuonghoc" style="display:none">
                            <a href="admin/chuonghoc/" class="btn btn-sm btn-primary">Chương học</a>
                        </div>
                        <div id="dtenbai" class="pl-lg-4" style="display:none">
                            <div class="form-group">
                                <label class="form-control-label" for="input-username">Tên bài học</label>
                                <input type="text" name="TENBH" class="form-control">
                            </div>
                        </div>
                        <div id="dvideo" style="display:none">
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Video</label>
                                            <input type="file" id="VIDEO" name="VIDEO" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-username">Học thử</label></br>
                                            <input name="HOCTHU" type="radio" id="co" value="1" style="vertical-align:middle; cursor: pointer;">
                                            <label>Có</label><br>
                                            <input name="HOCTHU" type="radio" id="khong" value="0" style="vertical-align:middle; cursor: pointer;" checked>
                                            <label>Không</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="dtructuyen" style="display:none">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Link lớp học</label>
                                    <input type="text" placeholder="https://meet.google.com/gwr-fkvv-jjj" id="LINK" name="LINK" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Thời gian bắt đầu</label>
                                    <input type="datetime-local" name="TGBD" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Thời gian kết thúc</label>
                                    <input type="datetime-local" name="TGKT" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <button type="submit" class="btn btn-default">Thêm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection