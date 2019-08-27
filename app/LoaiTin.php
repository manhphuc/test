<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiTin extends Model
{
    protected $table = 'LoaiTin';

    // Muốn biết loại tin thuộc thể loại nào
    public function theloai() {
    	// Muốn biết 1 lọai tin thuộc 1 thể loại nào đó ('App\TheLoai'//Thuộc model thể loại, khóa phụ, khóa chính )
    	return $this->belongsTo('App\TheLoai', 'idTheLoai', 'id');
    }

    // Trong loại tin uốn biết trong loại tin có bao nhiêu tin
    public function tintuc() {
    	// Loại tin có nhiều tin tức dùng hasMany(Thuộc model thể loại nào, khóa ngoại , khóa chính )
    	return $this->hasMany( 'App\TinTuc', 'idLoaiTin', 'id' );
    }

}
