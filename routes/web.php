<?php

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KasController;
use App\Http\Controllers\PosController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\UMKMController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IuranController;
use App\Http\Controllers\PasarController;
use App\Http\Controllers\RumahController;
use App\Http\Controllers\WargaController;
use Illuminate\Auth\Events\PasswordReset;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HunianController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\PindahController;
use App\Http\Controllers\PusherController;
use App\Http\Controllers\SatpamController;
use App\Http\Controllers\VotingController;
use App\Http\Controllers\DiskusiController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PeriodeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PromosiController;
use App\Http\Controllers\BukuTamuController;
use App\Http\Controllers\Diskusi2Controller;
use App\Http\Controllers\KeluargaController;
use App\Http\Controllers\PengurusController;
use App\Http\Controllers\RekeningController;
use App\Http\Controllers\PengingatController;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\KepemilikanController;
use App\Http\Controllers\TerimaIuranController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['guest'])->group(function(){
    Route::get('/',[SesiController::class,'index'])->name('login');
    Route::post('/',[SesiController::class,'login']);
    Route::get('/register',[SesiController::class,'register']);
    Route::post('/create',[SesiController::class,'create']);
});

Route::get('/home',function(){
return redirect('/logout');
});


Route::middleware(['auth'])->group(function(){
    Route::get('/search', [KeluargaController::class, 'search'])->name('search');
    Route::get('/dashboardPengurus/DataKeluarga/autocomplete', [KeluargaController::class, 'autocomplete']);

//DashboardPengurus
Route::get('/dashboardPengurus/UMKM/show', [UMKMController::class, 'showAll']);
Route::get('/dashboardPengurus/DataKeluarga/{id}/show', [KeluargaController::class, 'showKeluarga'])->name('showKeluarga');
Route::delete('/dashboardPengurus/DataKeluarga/{id}', [KeluargaController::class, 'destroy']);
Route::resource('/dashboardPengurus/Role',RoleController::class)->middleware('userAkses:Pengurus');
Route::resource('/dashboardPengurus/UMKM',UMKMController::class)->middleware('userAkses:Pengurus');
Route::resource('/dashboardPengurus/Users',UserController::class)->middleware('userAkses:Pengurus');
Route::resource('/dashboardPengurus/Iuran',IuranController::class)->middleware('userAkses:Pengurus');
Route::resource('/dashboardPengurus/DataKas',KasController::class)->middleware('userAkses:Pengurus');
Route::resource('/dashboardPengurus/PosBiaya',PosController::class)->middleware('userAkses:Pengurus');
Route::resource('/dashboardPengurus/Voting',VotingController::class)->middleware('userAkses:Pengurus');
Route::get('/dashboardPengurus',[AdminController::class,'Pengurus'])->middleware('userAkses:Pengurus');
Route::resource('/dashboardPengurus/DataBank',BankController::class)->middleware('userAkses:Pengurus');
Route::resource('/dashboardPengurus/Berita',BeritaController::class)->middleware('userAkses:Pengurus');
Route::delete('/dashboardPengurus/DataKeluarga/nkk/{nkk}', [KeluargaController::class, 'destroyByNKK']);
Route::resource('/dashboardPengurus/DataWarga',WargaController::class)->middleware('userAkses:Pengurus');
Route::resource('/dashboardPengurus/Diskusi',DiskusiController::class)->middleware('userAkses:Pengurus');
Route::resource('/dashboardPengurus/Jabatan',JabatanController::class)->middleware('userAkses:Pengurus');
Route::resource('/dashboardPengurus/Laporan',LaporanController::class)->middleware('userAkses:Pengurus');
Route::resource('/dashboardPengurus/Pengurus',PengurusController::class)->middleware('userAkses:Pengurus');
Route::resource('/dashboardPengurus/TamuMenginap',TamuController::class)->middleware('userAkses:Pengurus');
Route::resource('/dashboardPengurus/DataHunian',HunianController::class)->middleware('userAkses:Pengurus');
Route::resource('/dashboardPengurus/DataPindah',PindahController::class)->middleware('userAkses:Pengurus');
Route::resource('/dashboardPengurus/RumahKosong',RumahController::class)->middleware('userAkses:Pengurus');
Route::resource('/dashboardPengurus/DataSatpam',SatpamController::class)->middleware('userAkses:Pengurus');
Route::resource('/dashboardPengurus/DataJadwal',JadwalController::class)->middleware('userAkses:Pengurus');
Route::resource('/dashboardPengurus/DataKeluarga',KeluargaController::class)->middleware('userAkses:Pengurus');
Route::resource('/dashboardPengurus/Pengumuman',PengumumanController::class)->middleware('userAkses:Pengurus');
Route::resource('/dashboardPengurus/RekeningBank',RekeningController::class)->middleware('userAkses:Pengurus');
Route::resource('/dashboardPengurus/TerimaIuran',TerimaIuranController::class)->middleware('userAkses:Pengurus');
Route::resource('/dashboardPengurus/PeriodeKepengurusan',PeriodeController::class)->middleware('userAkses:Pengurus');
Route::resource('/dashboardPengurus/KepemilikanHunian',KepemilikanController::class)->middleware('userAkses:Pengurus');
Route::resource('/dashboardPengurus/PengingatPembayaran',PengingatController::class)->middleware('userAkses:Pengurus');
Route::get('/dashboardPengurus/Diskusi/{id}/chat', [DiskusiController::class, 'showChat']);
Route::get('/dashboardPengurus/ChatDiskusi','App\Http\Controllers\PusherController@index');
Route::post('/dashboardPengurus/broadcast','App\Http\Controllers\PusherController@broadcast');
Route::post('/dashboardPengurus/receive','App\Http\Controllers\PusherController@receive');

//DashboardWarga
Route::get('/dashboardWarga',[AdminController::class,'Warga'])->middleware('userAkses:Warga');
Route::get('/dashboardWarga/E-Voting', [VotingController::class, 'evotingIndex'])->name('evoting.index');
Route::get('/dashboardWarga/E-Voting/{id}', [VotingController::class, 'evotingView'])->name('evoting.view');
Route::post('/dashboardWarga/E-Voting/{id}/vote', [VotingController::class, 'vote'])->name('evoting.vote');
Route::resource('/dashboardWarga/Diskusi',Diskusi2Controller::class)->middleware('userAkses:Warga');
Route::resource('/dashboardWarga/Profile', ProfileController::class)->middleware('userAkses:Warga');
Route::resource('/dashboardWarga/Pembayaran', PembayaranController::class)->middleware('userAkses:Warga');
Route::get('/dashboardWarga/Diskusi/{id}/chat', [Diskusi2Controller::class, 'showChat']);
Route::get('/dashboardWarga/Profile/{id}/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::get('/dashboardWarga/ChatDiskusi','App\Http\Controllers\PusherController@index1');
Route::post('/dashboardWarga/broadcast','App\Http\Controllers\PusherController@broadcast');
Route::post('/dashboardWarga/receive','App\Http\Controllers\PusherController@receive');
Route::get('/dashboardWarga/Pengumuman',[PengumumanController::class, 'index1'])->middleware('userAkses:Warga');
Route::get('/dashboardWarga/Verify', [SesiController::class, 'verify'])->name('verify')->middleware('userAkses:Warga');
Route::post('/dashboardWarga/Update', [SesiController::class, 'update'])->name('update')->middleware('userAkses:Warga');
Route::get('/dashboardWarga/Pembayaran/create', [PembayaranController::class, 'create'])->name('pembayaran.create');
Route::get('/dashboardWarga/Tagihan', [PembayaranController::class, 'show'])->name('pembayaran.show');
Route::post('/dashboardWarga/Pembayaran', [PembayaranController::class, 'store'])->name('pembayaran.store');
Route::get('/dashboardWarga/TagihanPengingat/{id}', [PengingatController::class, 'show'])->name('pengingat.show');


//DashboardPetugas
Route::get('/dashboardPetugas',[AdminController::class,'Petugas'])->middleware('userAkses:Petugas');
Route::get('/dashboardPetugas/LaporanIuran/{id}', [LaporanController::class, 'show'])->name('laporan.show');
Route::resource('/dashboardPetugas/BukuTamu',BukuTamuController::class)->middleware('userAkses:Petugas');

//DashboardUMKM
Route::get('/dashboardUMKM',[AdminController::class,'UMKM'])->middleware('userAkses:UMKM');
Route::resource('/dashboardUMKM/Transaksi',TransaksiController::class)->middleware('userAkses:UMKM');
Route::resource('/dashboardUMKM/Promosi',PromosiController::class)->middleware('userAkses:UMKM');
Route::resource('/dashboardUMKM/Pasar',PasarController::class)->middleware('userAkses:UMKM');
Route::get('/dashboardUMKM/Pasar/{id}/show', [PasarController::class, 'showDetailPasar'])->name('showDetailPasar');
Route::get('/dashboardUMKM/Transaksi/{id}/show', [TransaksiController::class, 'showDetailTransaksi'])->name('showDetailTransaksi');
Route::get('/dashboardUMKM/Promosi/{id}/show', [PromosiController::class, 'showDetailPromosi'])->name('showDetailPromosi');


Route::get('/logout',[SesiController::class,'logout']);
});

Route::get('send-email', [SendEmailController::class,'index']);

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');

Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
        ? back()->with(['status' => __($status)])
        : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

Route::get('/reset-password/{token}', function (string $token) {
    return view('auth.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('/reset-password', function (Request $request) {

    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function (User $user, string $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));

            $user->save();

            event(new PasswordReset($user));
        }
    );

    return $status === Password::PASSWORD_RESET
        ? redirect()->route('login')->with('status', __($status))
        : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');
Route::get('/dashboardWarga/UMKM',[UMKMController::class, 'showCatalog'])->middleware('userAkses:Warga');
