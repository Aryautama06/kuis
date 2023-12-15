@extends('layouts.app')

@section('content')

<style>
    body {
        background-color: #ffffff;
        font-family: 'Arial', sans-serif;
    }

    h2 {
        color: #092635;
    }

    .btn-primary {
        background-color: #1B4242;
        border: none;
        border-radius: 5px;
    }

    .btn-primary:hover {
        background-color: #092635;
    }

    .table {
        margin-top: 20px;
    }

    .table th, .table td {
        border: 1px solid #1B4242;
    }

    .table th {
        background-color: #092635;
        color: #9EC8B9;
    }

    .table td {
        background-color: #9EC8B9;
        color: #092635;
    }

    .btn-warning {
        background-color: #FFD700;
        border: none;
        border-radius: 5px;
    }

    .btn-warning:hover {
        background-color: #B8860B;
    }

    .btn-danger {
        background-color: #DC143C;
        border: none;
        border-radius: 5px;
    }

    .btn-danger:hover {
        background-color: #8B0000;
    }
</style>
    <h2>Add Pelanggan</h2>

    <form action="{{ url('pelanggan') }}" method="post">
        @csrf
        <div class="form-group mb-3">
              <label for="pel_id_gol" class="form-label">Golongan*</label>
              <select class="form-control @error('pel_id_gol') is-invalid @enderror" name="pel_id_gol" id="pel_id_gol">
                @foreach($golongans as $golongan)
                <option value="{{ $golongan->id }}">{{ $golongan->gol_nama }}</option>
                @endforeach
              </select>
              @error('pel_id_gol')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
        </div>
        <div class="mb-3">
            <label for="">NO PELANGGAN</label>
            <input type="text" name="pel_no" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">NAMA</label>
            <input type="text" name="pel_nama" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">ALAMAT</label>
            <input type="text" name="pel_alamat" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">HP</label>
            <input type="text" name="pel_hp" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">KTP</label>
            <input type="text" name="pel_ktp" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">SERI</label>
            <input type="text" name="pel_seri" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">METERAN</label>
            <input type="text" name="pel_meteran" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="pel_aktif">STATUS</label>
            <select name="pel_aktif" id="pel_aktif" class="form-control">
                <option value="Aktif">Aktif</option>
                <option value="Tidak Aktif">Tidak Aktif</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="pel_id_user">ID USER</label>
            <input type="text" name="pel_id_user" id="pel_id_user" class="form-control" value="{{ auth()->id() }}" readonly>
        </div>

        <div class="mb-3">
            <input type="submit" value="SAVE" class="btn btn-primary">
        </div>
    </form>
@endsection
