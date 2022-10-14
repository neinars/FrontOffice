@extends('layouts.master')

@section('visitor')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Buku Tamu</h3>
        </div>

        @include('visitor.forms')

        <div class="card">
            <div class="card-header">
                <button class="btn" type="button" style="background-color: #B9FF8E; color:black" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    Tambah Data
                </button>

            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Asal Instansi</th>
                            <th>Nomor HP</th>
                            <th>Bertemu dengan</th>
                            <th>Kepentingan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tdata as $t)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $t->created_at }}</td>
                            <td>{{ $t->name }}</td>
                            <td>{{ $t->address }}</td>
                            <td>{{ $t->instance }}</td>
                            <td>{{ $t->phone_number }}</td>
                            <td>{{ $t->meet_with }}</td>
                            <td>{{ $t->utilities }}</td>
                            <td style="width: 100px;">
                                <button class="badge bg-success "><i class="bi bi-eye-fill"></i></button>
                                <button class="badge bg-danger"><i class="bi bi-trash-fill"></i></button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
