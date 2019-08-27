@extends('admin.layouts.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Slide
                    <small>{{ $slide->Ten }}</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                @if ( count( $errors ) > 0 )
                    <div class="alert alert-danger">
                        @foreach( $errors->all() as $error )
                            {{ $error }}<br>
                        @endforeach
                    </div>
                @endif
                @if ( session( 'thongbao' ) )
                    <div class="alert alert-success">
                        {{ session( 'thongbao' ) }}
                    </div>
                @endif
                <form action="admin/slide/sua/{{ $slide->id }}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    
                    <div class="form-group">
                        <label>Tên</label>
                        <input class="form-control" value="{{ $slide->Ten }}" name="Ten" placeholder="Nhập tên slide..." />
                    </div>
                    <div class="form-group">
                        <label>Nội dung</label>
                        <textarea id="demo" value="{{ $slide->NoiDung }}" class="ckeditor form-control" rows="3" name="NoiDung"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Link</label>
                        <input class="form-control" value="{{ $slide->link }}" name="link" placeholder="Nhập tên slide..." />
                    </div>
                    <div class="form-group">
                        <label>Hình ảnh</label>
                        <p><img width="386px" src="upload/slide/{{ $slide->Hinh }}"></p>
                        <input type="file" name="Hinh" class="form-control" />
                    </div>
                    <button type="submit" class="btn btn-default">Sửa</button>
                    <button type="reset" class="btn btn-default">Làm mới</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection