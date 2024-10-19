<?php

use Illuminate\Pagination\Paginator;

Paginator::useBootstrap();

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mainController;
use App\Models\sanpham;
use App\Models\loaisp;
use App\Http\Controllers\AdminLoaiController;
use App\Http\Controllers\AdminSPController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;



Route::get("/timkiem", function (Request $request) {
    $tukhoa = ($request->has('tukhoa')) ? $request->query('tukhoa') : "";
    $tukhoa = trim(strip_tags($tukhoa));
    $listsp = [];
    $perPage = 6;
    if ($tukhoa != "") {
        $listsp = DB::table("dienthoai")->where("tenDT", "like", "%$tukhoa%")
            ->paginate($perPage)
            ->withQueryString();
    }
    return view('timkiem', ['tukhoa' => $tukhoa, 'listsp' => $listsp]);
});

Route::get(
    '/',
    function () {
        $query = DB::table('dienthoai')
            ->select('id', 'tenDT', 'ngayCapNhat', 'gia', 'urlHinh')
            ->orderby('ngayCapNhat', 'desc')
            ->limit(6);
        $data = $query->get();
        return view('index', ['data' => $data]);
    }
);
Route::get('/', [mainController::class, 'index']);
Route::get('/loaisp/{id}', [mainController::class, 'loaisp']);

Route::get('/admin/danhsach', [AdminController::class, 'danhsach']);
Route::get('/admin/xoa/{id}', [AdminController::class, 'xoa']);
Route::get('/admin/them', [AdminController::class, 'them']);
Route::post('/admin/them', [AdminController::class, 'them_']);
Route::get('/admin/update/{id}', [AdminController::class, 'update']);
Route::post('/admin/update/{id}', [AdminController::class, 'update_']);

Route::get('/chitiet/{id}', [mainController::class, 'chitiet']);
Route::get('/layout', [mainController::class, 'layout']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

use App\Http\Controllers\UserController;

Route::get('/dangnhap', [UserController::class, 'dangnhap'])->name('login');
Route::post('/dangnhap', [UserController::class, 'dangnhap_']);
Route::get('/thoat', [UserController::class, 'thoat']);
Route::get('/download', [SanPhamController::class, 'download'])->middleware('auth');
Route::get('/dangky', [UserController::class, 'dangky']);
Route::post('/dangky', [UserController::class, 'dangky_']);


require __DIR__ . '/auth.php';
