<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Illuminate\Pagination\Paginator;
Paginator::useBootstrap();
class mainController extends Controller
{
  public function __construct() {
    $loai_arr = \DB::table('loaisp')->where('anHien','=',1 )->orderBy('thuTu')->get();
    \View::share( 'loai_arr', $loai_arr );
 }
function index(){
  $query = DB::table('dienthoai')
 ->select('id','tenDT','ngayCapNhat','gia','urlHinh')
 ->orderby('ngayCapNhat','desc')
  ->limit(6);
 $data =$query->get();
 return view('index',['data'=>$data]);
}

    function chitiet($id=0){
        $chitiet = DB::table('dienthoai')
        -> where ('id',$id)
        ->first();
        // ->get();
        $chitiet2 = ['id'=>$id];
        $list =DB::table('dienthoai')
        ->select('tenDT','id','gia','urlHinh')
        ->limit(4)
        ->get();        
        $data=['chitiet'=>$chitiet,$chitiet2,'list'=>$list];
        return view('chitiet',$data);
     }
     function loaisp($idL=0){
        $tenloai = DB::table('loaisp')
        ->where('id',$idL)
        ->value('tenLoai');
        $listsp=DB::table('dienthoai')
        ->select('tenDT','gia','urlHinh','id')
        ->orderby('ngayCapNhat','desc')
        ->where('idLoai',$idL)
        ->paginate(6)->withQueryString();
        // tai sao lai phai co get ma trong cac lab truoc bai lap trc lai khong co
        $data= ['idLoai'=>$idL,'tenloai'=>$tenloai, 'listsp'=>$listsp];
        return view('loaisp', $data);
      }

}
