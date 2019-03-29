<?php

namespace App\Http\Requests\Crud;

use App\Http\Requests\Request;

class AccountValidation extends Request
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
        'username' => 'email|required', 
        'password' => 'required' 
    ];
  }

  public function messages() 
  { 
    return [ 
        'username.required' => 'Maaf, Username harap diisi', 
        'username.email'    => 'Maaf, format Username salah, gunakan Email sebagai Username', 
        'password.required' => 'Maaf, Password belum dimasukkan' 
    ]; 
  }
}