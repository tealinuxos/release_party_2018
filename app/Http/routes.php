<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', function(){
  return view('home');
});

Route::get('/zax/tamu',function(){
    $title = "Tamu Undangan";
    return view('form-tamu',compact('title'));
});


$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
    $api->get('/', function() {
        return ['test' => true];
    });
    $api->get('/peserta-tlos', 'App\Http\Controllers\api\cekController@index');
    $api->get('/peserta-tlos/{id}', 'App\Http\Controllers\api\cekController@show');

    // cek status


    $api->post('/peserta-tlos/cek', 'App\Http\Controllers\api\cekController@store');

    // sudah masuk
    $api->post('/peserta-tlos/masuk', 'App\Http\Controllers\api\cekController@masuk');
    $api->post('/peserta-tlos/batalmasuk', 'App\Http\Controllers\api\cekController@batalmasuk');
});

Route::post('terimakasih','PesertaController@store');
Route::post('terimakasihTamu','PesertaController@storeTamu');

// konfirmasi
//Route::get('konfirmasi', 'PesertaController@show_konfirmasi');
//Route::post('konfirmasi', 'PesertaController@konfirmasi');

Route::get('konfirmasi', 'KonfirmasiController@create');
Route::post('konfirmasi', 'KonfirmasiController@store');

Route::post('cek-kode', 'PesertaController@cek_kode');

Route::get('tiket', 'PesertaController@tiket');

Route::post('tiket', 'PesertaController@get_tiket');

// list peserta

Route::get('daftar-peserta', 'PesertaController@list_peserta');

Route::get('test-terimakasih', function(){
    $nama = 'Diky Test';
    $email = "diky@test.com";
    $kode_tiket = "XYZ";
   return view('terimakasih')->withNamapeserta($nama)->withEmail($email)->withKode_tiket($kode_tiket);
});

Route::get('test-qr-code', function(){
    $nama = 'Diky Test';
    $email = "diky@test.com";
    $kode_tiket = "XYZ";
    return view('test.qrcode')->withNamapeserta($nama)->withEmail($email)->withKode_tiket($kode_tiket);
});



//Route::get('send-email', function(){
//  Mail::send('emails.test',
//   ['testVar' => 'Namamu, iya kamu'],
//   function($message) {
//             $message->to('sekretariat@doscom.org')
//                     ->subject('Test email dari Laravel');
//   });
//});

Route::get('test-view-email', function(){
  $nama = "diky arga";
  $email = "dikyarga.id@gmail.com";
  $kode_tiket = "code";
  $no_hp = "08317373617";
  $status = "mahasiswa";
  $dvd = "64";
  return view('emails.after-register')->withNama($nama)->withKode_tiket($kode_tiket)->withNo_hp($no_hp)->withEmail($email)->withStatus($status)->withDvd($dvd);
});



Route::get('test-view-email-lunas', function(){
    $nama = "diky arga";
    $email = "dikyarga.id@gmail.com";
    $kode_tiket = "code";
    $no_hp = "08317373617";
    $status = "mahasiswa";
    $kunci_rahasia = "RHS";
    $dvd = "64";
    return view('emails.lunas')->withNama($nama)->withKode_tiket($kode_tiket)->withNo_hp($no_hp)->withEmail($email)->withStatus($status)->withDvd($dvd)->withKunci_rahasia($kunci_rahasia);
});
//
//Route::get('contact', 'ContactController@showForm');
//Route::post('contact', 'ContactController@sendContactInfo');
//Route::get('/','PostController@index');
Route::get('/home',['as' => 'home', 'uses' => 'PostController@index']);

//authentication
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
// check for logged in user
Route::group(['middleware' => ['auth']], function()
{
    Route::get('/daftar-internal', function(){
        return view('home-internal');
    });
    //peserta all
    Route::get('/peserta/all','PesertaController@index');
    Route::get('/peserta/delete/{id}','PesertaController@destroy');
    Route::get('/peserta/edit/{id}','PesertaController@edit');
    Route::post('/peserta/edit','PesertaController@update');
    Route::get('/peserta/report','PesertaController@report');

    Route::get('test-chart', 'PesertaController@chart');
    // kirim email
    Route::get('/peserta/kirim-email-lunas/{id}', 'PesertaController@kirim_email_lunas');

    // kirim sms

    Route::get('/peserta/kirim-sms-lunas/{id}', 'PesertaController@kirim_sms_lunas');

    Route::get('all-peserta-nomer-hp', 'PesertaController@nomerhp');

    // konfirmasi
    Route::get('/peserta/konfirmasi', 'KonfirmasiController@index');
    Route::get('/peserta/konfirmasi/edit/{id}', 'KonfirmasiController@edit');
    Route::post('/peserta/konfirmasi/edit', 'KonfirmasiController@update');
    Route::get('/peserta/konfirmasi/delete/{id}', 'KonfirmasiController@destroy');
    // show new post form
    Route::get('new-post','PostController@create');
    // save new post
    Route::post('new-post','PostController@store');
    // edit post form
    Route::get('edit/{slug}','PostController@edit');
    // update post
    Route::post('update','PostController@update');
    // delete post
    Route::get('delete/{id}','PostController@destroy');
    // display user's all posts
    Route::get('my-all-posts','UserController@user_posts_all');
    // display user's drafts
    Route::get('my-drafts','UserController@user_posts_draft');
    // add comment
    Route::post('comment/add','CommentController@store');
    // delete comment
    Route::post('comment/delete/{id}','CommentController@distroy');

    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

    //peserta----------------------------

});
////users profile
//Route::get('user/{id}','UserController@profile')->where('id', '[0-9]+');
//// display list of posts
//Route::get('user/{id}/posts','UserController@user_posts')->where('id', '[0-9]+');
//// display single post
//Route::get('/{slug}',['as' => 'post', 'uses' => 'PostController@show'])->where('slug', '[A-Za-z0-9-_]+');

// Login dan Logut
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Daftar
// Route::post('auth/register', 'Auth\AuthController@postRegister');
Route::get('auth/register', 'Auth\AuthController@getRegister');
// Route::get('auth/register', function(){
//     return ":P";
// });

// ADmin
Route::get('/admin/login',function(){
    return view('auth.login');
});

Route::get('cekhalam',function(){
    return view('emails.lunas');
});


Route::get('/tea-nomor-peserta',function(){
    $pesertas = \App\Peserta::all();
    $phone_number = [];
    echo "============================<br>";
    echo "| dear humas ku tersayaang~<br>";
    echo "| pastekan list nomor beriku di colom pesan | <br>";
    echo "============================<br><br>";
    foreach ($pesertas as $data) {
        // array_push($phone_number,$data->no_hp);
        echo $data->no_hp.',';
    }
});

Route::get('/tea-export-data/peserta',function(){
    $peserta = \App\Peserta::where('status','!=','komunitas')
                            ->where('status','!=','delegasi')
                            ->get();
                            
    $file="tea-data-peserta-2018.xls";
    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=$file");
    echo "<table>
            <tr>
                <td>Nama</td>
                <td>Alamat</td>
                <td>Instansi</td>
                <td>Tanda Tangan</td>
            </tr>";
    foreach($peserta as $data){
      echo "<tr>";
        echo "<td>".$data->nama."</td>";
        echo "<td>".$data->email."</td>";
        echo "<td>".$data->instansi."</td>";
        echo "<td>. . . . .</td>";
      echo "</tr>";
    }
    echo "</table>";
});
Route::get('/tea-export-data/delegasi',function(){
    $peserta = \App\Peserta::where('status','=','delegasi')
                            ->get();
                            
    $file="tea-data-delegasi-2018.xls";
    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=$file");
    echo "<table>
            <tr>
                <td>Nama</td>
                <td>Alamat</td>
                <td>Instansi</td>
                <td>Tanda Tangan</td>
            </tr>";
    foreach($peserta as $data){
      echo "<tr>";
        echo "<td>".$data->nama."</td>";
        echo "<td>".$data->email."</td>";
        echo "<td>".$data->instansi."</td>";
        echo "<td>. . . . .</td>";
      echo "</tr>";
    }
    echo "</table>";
});
Route::get('/tea-export-data/komunitas',function(){
    $peserta = \App\Peserta::where('status','=','komunitas')
                            ->get();
                            
    $file="tea-data-komunitas-2018.xls";
    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=$file");
    echo "<table>
            <tr>
                <td>Nama</td>
                <td>Alamat</td>
                <td>Instansi</td>
                <td>Tanda Tangan</td>
            </tr>";
    foreach($peserta as $data){
      echo "<tr>";
        echo "<td>".$data->nama."</td>";
        echo "<td>".$data->email."</td>";
        echo "<td>".$data->instansi."</td>";
        echo "<td>. . . . .</td>";
      echo "</tr>";
    }
    echo "</table>";
});

Route::get('tea-get-unicode',function(){
    $peserta = \App\Peserta::all();
    foreach ($peserta as $data) {
        echo $data->kode_tiket."<br>";
    }
});