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

<h2>users</h2>

<table class="table table-bordered">
      <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
            <th>ALAMAT</th>
            <th>HP</th>
            <th>POS</th>
            <th>ROLE</th>
            <th>AKTIF</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      @php
            $counter =1;
      @endphp

      @foreach ($rows as $row)
            <tr>
                  <td>{{ $counter++ }}</td>
                  <td>{{ $row->name }}</td>
                  <td>{{ $row->email }}</td>
                  <td>{{ $row->password }}</td>
                  <td>{{ $row->user_alamat }}</td>
                  <td>{{ $row->user_hp }}</td>
                  <td>{{ $row->user_pos }}</td>
                  <td>{{ $row->user_role }}</td>
                  <td>{{ $row->user_aktif }}</td>

                  <td><a href="{{ url('users/edit/' . $row->id) }}" class="btn btn-warning">Edit</a></td>
                  <td>
                        <form action="{{ url('users/' . $row->id) }}" method="post">
                              <input type="hidden" name="_method" value="DELETE">
                              @csrf
                              <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                        </form>
                  </td>
            </tr>
      @endforeach

</table>

@endsection