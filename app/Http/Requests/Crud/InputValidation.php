<?php

namespace App\Http\Requests\Crud;

use App\Http\Requests\Request;

class InputValidation extends Request
{
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
      return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules()
  {
    return [ 
      'nama'   => 'required', 
      'alamat' => 'required',
      'kelas'  => 'required',
      'no_hp'  => 'required|numeric',
      'email'  => 'required|email' 
    ];
  }

  public function messages() 
  { 
    return [ 
      'nama.required'   => 'Maaf, Nama harap diisi', 
      'alamat.required' => 'Maaf, Alamat harap diisi', 
      'kelas.required'  => 'Maaf, Kelas harap diisi',
      'no_hp.required'  => 'Maaf, No Telp tidak boleh kosong',
      'no_hp.numeric'   => 'Maaf, masukkan data berupa angka 0-9',
      'email.required'  => 'Maaf, Email tidak boleh kosong',
      'email.email'     => 'Maaf, format Email yang Anda masukkan salah'
    ];
  }
}