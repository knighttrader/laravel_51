<?php

namespace App\Http\Controllers\Crud;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\Crud\AccountValidation;
use App\Http\Requests\Crud\InputValidation;

use Input;
use DB;
use Redirect;
use View;
use Auth;

class CrudController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    
  }

  public function add_data(InputValidation $data)
  {
    $data = array(
      'nama'   => Input::get('nama'),
      'alamat' => Input::get('alamat'),
      'kelas'  => Input::get('kelas'),
      'no_hp'  => Input::get('no_hp'),
      'email'  => Input::get('email')
    );

    DB::table('crud_siswa')->insert($data);
    return Redirect::to('crud/read')->with('message', 'Berhasil menambah data !..');
  }

  public function read_data() 
  {
    if(Auth::user()) {
      if (Auth::user()->access_rights=='admin') {
        $data = DB::table('crud_siswa')->get();
        return View::make('crud.read')->with('data_siswa', $data);
      } else {
        return Redirect::to('crud/user_view');
      }  
    }

    return view('crud.login');
  }

  public function delete_data($id)
  {
    DB::table('crud_siswa')->where('id', '=', $id)->delete();

    return Redirect::to('crud/read')->with('message', 'Berhasil menghapus data !..');
  }

  public function edit_data($id)
  {
    $data = DB::table('crud_siswa')->where('id', '=', $id)->first();

    return View::make('crud.edit')->with('siswa', $data);
  }

  public function update_data(InputValidation $data) 
  {
    $data = array(
      'nama'   => Input::get('nama'),
      'alamat' => Input::get('alamat'),
      'kelas'  => Input::get('kelas'),
      'no_hp'  => Input::get('no_hp'),
      'email'  => Input::get('email')
    );

    DB::table('crud_siswa')->where('id', '=', Input::get('id'))->update($data);

    return Redirect::to('crud/read')->with('message', 'Berhasil mengedit data !..');
  }

  public function add_user(AccountValidation $data)
  {
    $data = array(
      'username'      => Input::get('username'),
      'password'      => bcrypt(Input::get('password')),
      'access_rights' => 'user'
    );

    DB::table('crud_login')->insert($data);

    return Redirect::to('crud/login')->with('message', 'Anda berhasil mendaftar sebagai User Baru');
  }

  public function login(AccountValidation $data)
  {
    if (Auth::attempt(['username' => Input::get('username'), 'password' => Input::get('password')])) 
    {
      if (Auth::user()->access_rights=='admin') {
        return Redirect::to('crud/read');
      } else {
        return Redirect::to('crud/user_view');
      }
    } else {
      return Redirect::to('crud/login')->with('message', 'Username tidak dikenal');;
    }
  }

  public function logout()
  {
    Auth::logout();

    return Redirect::to('crud/login')->with('message', 'Berhasil Logout');
  }

  public function user_view() 
  {
    $data = DB::table('crud_siswa')->get();

    return View::make('crud.user')->with('data_siswa', $data);
  }

}
