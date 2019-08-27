<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TinTuc extends Model
{
    protected $table = 'TinTuc';

    // Muốn liên kết sang bảng loaitin
    public function loaitin() {
    	// liên quan tới bảng loại tin
    	// Một tin tức thuộc 1 loại tin
    	return $this->belongsTo( 'App\LoaiTin', 'idLoaiTin', 'id' );
    }
    // Ở dưới có thể khai báo fun theloai tuy nhien ta da trỏ sang loaitin roi khi co loaitin rôi ta có thể trỏ tiếp sang thể loại để lấy thể loại ra.

    // Trong tin tức có thể lấy ra các comment
    // muốn biêt trong tin tức có bao nhiêu cái comment
    public function comment() {
    	//Trong tin tức có nhiều comment dùng hasMayny
    	return $this->hasMany( 'App\Comment', 'idTinTuc', 'id' );
    }
}
