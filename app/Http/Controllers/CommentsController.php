<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TheLoai;
use App\LoaiTin;
use App\TinTuc;
use App\Comment;

class CommentsController extends Controller
{

    public function getXoa( $id, $idTinTuc ) {

    	$comments = Comment::find($id);
    	$comments->delete();
    	return redirect('admin/tintuc/sua/'.$idTinTuc)->with('thongbao', 'Xóa thành công!');
    }

}
