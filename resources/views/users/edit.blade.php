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
    <h2>Edit Users</h2>

    <form action="{{ url('users/' . $row->id) }}" method="post">
        <input type="hidden" name="_method" value="PATCH">
        @csrf
        <div class="mb-3">
            <label for="">ALAMAT</label>
            <input type="text" name="user_alamat" id="" class="form-control" value="{{ $row->user_alamat }}">
        </div>
        <div class="mb-3">
            <label for="">HP</label>
            <input type="text" name="user_hp" id="" class="form-control" value="{{ $row->user_hp }}">
        </div>
        <div class="mb-3">
            <label for="">POS</label>
            <input type="text" name="user_pos" id="" class="form-control" value="{{ $row->user_pos }}">
        </div>
        <div class="mb-3">
            <label for="">ROLE</label>
            <input type="text" name="user_role" id="" class="form-control" value="{{ $row->user_role }}">
        </div>
        <div class="mb-3">
        <div class="mb-3">
            <label for="user_aktif">STATUS</label>
            <select name="user_aktif" id="user_aktif" class="form-control">
                <option value="aktif" @if($row->user_aktif == 'aktif') selected @endif>Aktif</option>
                <option value="tidak aktif" @if($row->user_aktif == 'tidak_aktif') selected @endif>Tidak Aktif</option>
            </select>
        </div>
        <div class="mb-3">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>
    </form>
@endsection
