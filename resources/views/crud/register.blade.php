@extends('layout.crud_layout')
@section('title', 'Register User')

@section('content')
  <div class="container">
    <br><br>
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="panel panel-info">
          <div class="panel-heading">
            <h4><span class="glyphicon glyphicon-user"></span> Register</h4>
            @if(Session::has('message'))
              <span class="label label-success">{{ Session::get('message') }}</span>
            @endif
          </div>
          <div class="panel-body">
            {!! Form::open(['url' => 'crud/add_user']) !!}
            <div class="form-group">
              Username: 
              @if($errors->has())
                <span class="text-danger">
                  {!! $errors->first('username') !!}
                </span>
              @endif
              {!! Form::text('username', '', [
                'class'       => 'form-control',
                'placeholder' => 'Masukkan Username Account Baru, gunakan Email sebagai Username' 
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
                'placeholder' => 'Masukkan Password Account Baru'
              ]) !!}  
            </div>
            <div class="form-group">
              {!! Form::submit('Register', [
                'class'       => 'form-control btn btn-success'
              ]) !!}  
            </div>
            <div class="form-group">
              <a href="{{ URL("crud/login") }}" class="form-control btn btn-primary">Kembali ke Login</a>
            </div> 
            {!! Form::close() !!}
          </div>
        </div>
      <div class="col-md-2"></div>
    </div>
  </div>
@stop