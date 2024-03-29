@extends('template/main')
@section('judul', 'Daftar Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col">
        
            <h1>Daftar Mahasiswa</h1>

            <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">NRP</th>
      <th scope="col">Email</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($mahasiswa as $mhs)
    <tr>
      <th scope="row">1</th>
      <td>{{$mhs->nama}}</td>
      <td>{{$mhs->nrp}}</td>
      <td>{{$mhs->email}}</td>
      <td>{{$mhs->jurusan}}</td>
      <td>
        <a href="" class="badge badge-success">Edit</a>
        <a href="" class="badge badge-danger">Hapus</a>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>

        </div>
    </div>
</div>
@endsection