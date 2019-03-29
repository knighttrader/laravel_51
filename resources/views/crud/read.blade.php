@extends('layout.crud_layout')
@section('title', 'Data View')

@section('content')
	<div class="container">
		{{-- Message --}}
		<br>
		<div class="row">
			<div class="col-md-8">
				@if(Session::has('message'))
					<p class="label label-success"><i class="fa fa-check"></i>{{ Session::get('message') }}</p>
				@endif
			</div>
			<div class="col-md-4 text-right">
				<button type="button" class="btn btn-default" onclick="window.location='{{ url("crud/add_data") }}'">
					<i class="fa fa-plus"></i> Tambah
				</button>
				<button type="button" class="btn btn-default" onclick="window.location='{{ url("/") }}'">
					<i class="fa fa-plus"></i> Kembali
				</button>
			</div>		
		</div><br>

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
							<th class="text-center">Action</th>
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
							<td class="text-center">
								<a href="delete/{{ $siswa->id }}">Hapus</a> || 
								<a href="edit/{{ $siswa->id }}">Ubah</a>
							</td>
						</tr>
						@endforeach		
					</table><br>
				</div>
			</div>
		</div>		
	</div>
@stop