@extends('layout.crud_layout')
@section('title', 'CRUD Add Data')

@section('content')
  <div class="container">
    <br><br><br>
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="panel panel-info">
          <div class="panel-heading">
            <h4>Form Input Data</h4>
          </div>
          <div class="panel-body">
            {!! Form::open(['url' => 'crud/add'])  !!}
            <div class="form-group">
              Nama:
              @if($errors->has())
                <span class="text-danger">
                  {!! $errors->first('nama') !!}
                </span>
              @endif
              {!! Form::text('nama', '', [
                'class'       => 'form-control',  
                'placeholder' => 'Masukkan Nama Anda'
              ]) !!}
            </div>  
            <div class="form-group">
              Alamat:
              @if($errors->has())
                <span class="text-danger">
                  {!! $errors->first('alamat') !!}
                </span>
              @endif
              {!! Form::text('alamat', '', [
                'class'       => 'form-control',
                'placeholder' => 'Masukkan Alamat Anda'
              ]) !!}
            </div> 
            <div class="form-group">
              Kelas:
              @if($errors->has())
                <span class="text-danger">
                  {!! $errors->first('kelas') !!}
                </span>
              @endif
              {!! Form::text('kelas', '', [
                'class'       => 'form-control',
                'placeholder' => 'Masukkan Kelas Anda'
              ]) !!}
            </div>  
            <div class="form-group">
              No. HP:
              @if($errors->has())
                <span class="text-danger">
                  {!! $errors->first('no_hp') !!}
                </span>
              @endif
              {!! Form::text('no_hp', '', [
                'class' => 'form-control',
                'placeholder' => 'Masukkan No. HP Anda'
              ]) !!}
            </div>
            <div class="form-group">
              Email:
              @if($errors->has())
                <span class="text-danger">
                  {!! $errors->first('email') !!}
                </span>
              @endif
              {!! Form::text('email', '', [
                'class' => 'form-control',
                'placeholder' => 'Masukkan Email Anda'
              ]) !!}
            </div>
            <div class="form-group">
              {!! Form::submit('Tambah Data', [
                'class' => 'form-control btn btn-success'
              ]) !!}
            </div>
            <div class="form-group">
              <a href="{{ URL("crud/read") }}" class="form-control btn btn-primary">Kembali ke Tampilkan Data</a>
            </div>
            {!! Form::close() !!}
          </div>
        </div>
      </div>
      <div class="col-md-2"></div>
    </div>
  </div>
@stop
