@extends('layouts.main')
@section('menu', 'active')
@section('container')

    <div class="row">
        <div class="col-lg">
            <div class="card">
                <div class="card-header">
                    Tambahkan Data
                </div>
                <div class="card-body">
                    <form action="{{ route('data-judul.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label>Dosen</label>
                            <select name="dosen_id" class="form-control">
                                <option value="" selected>Pilih Dosen</option>
                                @foreach ($dosens as $data)
                                    <option value="{{ $data->id }}">{{ $data->user->nama }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label>Mata Kuliah</label>
                            <select name="mata_kuliah_id" class="form-control">
                                <option value="" selected>Pilih Mata Kuliah</option>
                                @foreach ($matakuliahs as $data)
                                    <option value="{{ $data->id }}">{{ $data->matkul}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label>Nama Judul</label>
                            <input type="text" name="nama_judul" class="form-control" placeholder="Masukan nama judul">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Simpan Data</button>
                            <a href="{{ route('data-judul.index') }}" class="btn btn-danger">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection