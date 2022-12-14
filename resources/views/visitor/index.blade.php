@extends('layouts.master')

@section('main')
    @include('visitor.forms')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Buku Tamu</h3>
        </div>


        <div class="card">
            <div class="card-header">
                <button class="btn" type="button" style="background-color: #435ebe; color: white" data-bs-toggle="modal"
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
                            <th>Keterangan</th>
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
                                <td>{{ $t->meet->meet_with }}</td>
                                <td>{{ $t->utility->utilities }}</td>
                                {{-- @dd($t->id) --}}
                                <td style="width: 100px;">
                                    <!-- Button trigger modal -->
                                    <button class="btn btn-outline-success btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $t->id }}"><i class="bi bi-eye-fill"></i></button>
                                    <a class="btn shadow btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete-visitor{{ $t->id }}"><i class="bi bi-trash-fill"></i></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
