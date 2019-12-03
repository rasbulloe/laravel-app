  @extends('template/main')
@section('judul', 'Daftar Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col">
        
            <h1>List Students</h1>

            <a href="/students/create" class="btn btn-primary">Tambah Data Mahasiswa</a>

            <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($students as $student)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$student->nama}}</td>
      <td>
        <a href="{{url('students/' . $student->id )}}" class="badge badge-info">Show Detail</a>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>

        </div>
    </div>
</div>
@endsection