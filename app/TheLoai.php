<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TheLoai extends Model
{
    protected $table = 'TheLoai';

    // Lấy ra tất cả các loại tin của thể loại
    public function loaitin() {
    	// Thể loại có nhiều loại tin dùng hasMany
    	return $this->hasMany( 'App\LoaiTin', 'idTheLoai', 'id' ); //( PathToModel, ForeignKey in LoaiTin table, PrimaryKey )
    }

    // Trung gian Tin tức truy vấn sang loại tin
    // Muốn biết trong thể loại có bao nhiêu tin tức muốn lấy hết các tin tức trong thể loại
    public function tintuc() {
    	// Liên kế từ tin tức thông qua loại tin và thể loại
    	// Bảng loaitin có idTheLoai( khóa phụ của loại tin ), bảng tintuc có idLoaiTin( Khóa phụ từ bảng tin tức ), id là khóa chính từ bảng theloai
    	return $this->hayManyThrough( 'App\TinTuc', 'App\LoaiTin', 'idTheLoai', 'idLoaiTin', 'id' ); // idTheLoai ForeignKey of LoaiTin
    }
}
