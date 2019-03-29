@extends('layout.crud_layout')
@section('title', 'User Page')

@section('content')
  <div class="container">
    <br><br>
    
    {{-- Table View --}}
    <div class="row">
      <div class="col-md-12">
        <div class="table-responsive">
          <table border="1" class="table table-bordered" width="100%">
            <tr>
              <th class="text-center">No</th>
              <th class="text-center">Nama</th>
              <th class="text-center">Alamat</th>
              <th class="text-center">Kelas</th>
              <th class="text-center">No. HP</th>
              <th class="text-center">Email</th>
            </tr>

            <?php $no=1; ?>
            
            @foreach ($data_siswa as $siswa)
            <tr>
              <td class="text-center">{{ $no++ }}</td>
              <td>{{ $siswa->nama }}</td>
              <td>{{ $siswa->alamat }}</td>
              <td>{{ $siswa->kelas }}</td>
              <td>{{ $siswa->no_hp }}</td>
              <td>{{ $siswa->email }}</td>
            </tr>
            @endforeach   
          </table><br>
        </div>
      </div>
    </div>    
  </div>
@stop