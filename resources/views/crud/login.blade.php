@extends('layout.crud_layout')
@section('title', 'Login Page')

@section('content')
  <div class="container">
    <br><br><br><br>
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <div class="panel panel-info">
          <div class="panel-heading">
            <h4><span class="glyphicon glyphicon-user"></span> Login</h4>
            @if(Session::has('message'))
              <span class="label label-success">{{ Session::get('message') }}</span>
            @endif
          </div>
          <div class="panel-body">
            {!! Form::open(['url' => 'crud/login']) !!}
            <div class="form-group">
              Username: 
              @if($errors->has())
                <span class="text-danger">
                  {!! $errors->first('username') !!}
                </span>
              @endif
              {!! Form::text('username', '', [
                'class'       => 'form-control',  
                'placeholder' => 'Masukkan Username Anda, gunakan Email sebagai Username'
              ]) !!} 
            </div>
            <div class="form-group">
              Password:
              @if($errors->has())
                <span class="text-danger">
                  {!! $errors->first('password') !!}
                </span>
              @endif
              {!! Form::password('password', [
                'class'       => 'form-control',
                'placeholder' => 'Masukkan Password Anda'
              ]) !!}
            </div>
            <div class="form-group">
              {!! Form::submit('Login', [
                'class'       => 'form-control btn btn-primary'
              ]) !!}
            </div>
            <div class="form-group">
              <a href="{{ URL("crud/register") }}" class="form-control btn btn-success">Register</a>
            </div>           
            {!! Form::close() !!}
          </div>
        </div>
      </div>
      <div class="col-md-3"></div>
    </div>
  </div>
@endsection