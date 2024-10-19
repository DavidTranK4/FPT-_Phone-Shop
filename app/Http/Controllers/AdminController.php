<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\sanpham;
use Illuminate\Pagination\Paginator;

Paginator::useBootstrap();
class AdminController extends Controller
{

    function danhsach()
    {
        $data = sanpham::orderby('id', 'desc')
            ->paginate(6)->withQueryString();
        return view('admin/danhsach', ['data' => $data]);
    }
    function xoa($id)
    {
        $t = sanpham::find($id);
        if ($t == null) return redirect('/thongbao');
        $t->delete();
        return redirect('admin/danhsach');
    }

    function them()
    {
        return view('admin/them');
    }
    function them_()
    {
        $t = new sanpham;
        $t->tenDT = $_POST['tenDT'];
        $t->gia = $_POST['gia'];
        $t->baiViet = $_POST['baiViet'];
        $t->urlHinh = $_POST['urlHinh'];
        $t->idLoai = $_POST['idLoai'];
        $t->save();
        return redirect('admin/danhsach');
    }
    function update($id)
    {
        $t = sanpham::find($id);
        $loaitin_arr =  \App\Models\loaisp::all();

        if ($t == null) return redirect('/thongbao');
        return view('admin/capnhat', ['t' => $t], ['loaitin_arr' => $loaitin_arr]);
    }
    function update_($id)
    {
        $t =  sanpham::find($id);
        if ($t == null) return redirect('/thongbao');
        $t->tenDT = $_POST['tenDT'];
        $t->gia = $_POST['gia'];
        $t->urlHinh = $_POST['urlHinh'];
        $t->idLoai = $_POST['idLoai'];
        $t->baiViet = $_POST['baiViet'];
        $t->save();
        return redirect('/admin/danhsach');
    }
}
