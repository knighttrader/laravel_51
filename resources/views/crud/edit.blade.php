@extends('layout.crud_layout')
@section('title', 'Form Edit')

@section('content')
  <div class="container">
    @if(Session::has('message'))
      <span class="label label-success">{{ Session::get('message') }}</span>
    @endif
    <p></p>
    <div class="panel panel-default">
      <div class="panel-heading">
        Form Edit Data
      </div>
      <div class="panel-body">
        {!! Form::open(['url' => 'crud/update']) !!}

          {!! Form::hidden('id', $siswa->id, ['class' => 'form-control']) !!}
          <div class="form-group">
            Nama:
            @if($errors->has())
              <span class="text-danger">
                {!! $errors->first('nama') !!}
              </span>
            @endif
            {!! Form::text('nama', $siswa->nama, ['class' => 'form-control']) !!}
          </div>
          <div class="form-group">
            Alamat:
            @if($errors->has())
              <span class="text-danger">
                {!! $errors->first('alamat') !!}
              </span>
            @endif
            {!! Form::text('alamat', $siswa->alamat, ['class' => 'form-control']) !!}
          </div>
          <div class="form-group">
            Kelas:
            @if($errors->has())
              <span class="text-danger">
                {!! $errors->first('kelas') !!}
              </span>
            @endif
            {!! Form::text('kelas', $siswa->kelas, ['class' => 'form-control']) !!}
          </div>
          <div class="form-group">
            No. HP:
            @if($errors->has())
              <span class="text-danger">
                {!! $errors->first('no_hp') !!}
              </span>
            @endif
            {!! Form::text('no_hp', $siswa->no_hp, ['class' => 'form-control']) !!}
          </div>
          <div class="form-group">
            Email:
            @if($errors->has())
              <span class="text-danger">
                {!! $errors->first('email') !!}
              </span>
            @endif
            {!! Form::text('email', $siswa->email, ['class' => 'form-control']) !!}
          </div>
          {!! Form::submit('Ubah Data', ['class' => 'form-control btn btn-danger']) !!}

        {!! Form::close() !!}
      </div>
    </div>
  </div>
@stop
