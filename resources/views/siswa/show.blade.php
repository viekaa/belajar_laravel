@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __(' Show Data Siswa') }}</div>

                <div class="card-body">
                <form action="{{ route('siswa.show',$siswa->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
  <div class="form-group">
    <label>NIS</label>
    <input type="number" class="form-control" value="{{ $siswa->nis }}" name="nis" disabled><br>
  </div>
  <div class="form-group">
    <label>Nama</label>
    <input type="text" class="form-control" value="{{ $siswa->nama }}"name="nama" disabled><br>
  </div>
  <div class="form-group">
    <label>Jenis Kelamin</label> <br><br>
    <input type="radio" class="form-check-input" name="jenis_kelamin" value="Laki-laki"disabled>Laki-laki &nbsp;
    <input type="radio" class="form-check-input" name="jenis_kelamin" value="Perempuan"disabled>Perempuan <br><br>
  </div>
  <div class="form-group">
    <label>Kelas</label> <br>
    <select class="form-control" value="{{ $siswa->kelas }}"name="kelas" selected disabled>
        <option value="XI RPL 1">XI RPL 1</option>
        <option value="XI RPL 2">XI RPL 2</option>
        <option value="XI RPL 3">XI RPL 3</option>
    </select>
  </div>
  <br>
  <a href="{{ route('siswa.index') }}" class="btn btn-primary">Back</a>
</form>


            </div>
        </div>
    </div>
</div>
@endsection
