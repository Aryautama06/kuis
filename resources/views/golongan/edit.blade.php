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
    <h2>Edit Golongan</h2>

    <form action="{{ url('golongan/' . $row->id) }}" method="post">
        <input type="hidden" name="_method" value="PATCH">
        @csrf
        <div class="mb-3">
            <label for="">KODE</label>
            <input type="text" name="gol_kode" id="" class="form-control" value="{{ $row->gol_kode }}">
        </div>
        <div class="mb-3">
            <label for="">NAMA</label>
            <input type="text" name="gol_nama" id="" class="form-control" value="{{ $row->gol_nama }}">
        </div>
        <div class="mb-3">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>
    </form>
@endsection
