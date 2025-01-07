@extends('layouts.main')
@section('menu', 'active')
@section('container')

    <div class="row">
        <div class="col-lg">
            <div class="card">
                <div class="card-header">
                    Edit Data
                </div>
                <div class="card-body">
                    <form action="{{ route('data-kajian.update', $kajians->id) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label>Dosen</label>
                            <select name="dosen_id" class="form-control">
                                <option value="" selected>Pilih Dosen</option>
                                @foreach ($dosens as $data)
                                    <option value="{{ $data->id }}"
                                        {{ $data->id == $kajians->dosen_id ? 'selected' : '' }}>{{ $data->user->nama  }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>Minggu</label>
                            <select name="target_id" class="form-control">
                                <option value="" selected>Pilih Minggu</option>
                                @foreach ($targets as $data)
                                    <option value="{{ $data->id }}"
                                        {{ $data->id == $kajians->target_id ? 'selected' : '' }}>
                                        {{ $data->minggu }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>Isi Kajian</label>
                            <input type="text" name="isi_kajian" class="form-control" placeholder="Masukan nama kajian"
                                value="{{ $kajians->isi_kajian }}">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Simpan Data</button>
                            <a href="{{ route('data-kajian.index') }}" class="btn btn-danger">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection