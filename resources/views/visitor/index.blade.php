@extends('layouts.master')

@section('main')
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
                            <td>{{ $t->meet->meet_with }}</td>
                            <td>{{ $t->utility->utilities }}</td>
                            {{-- @dd($t->meet->meet_with) --}}
                            <td style="width: 100px;">
                                <!-- Button trigger modal -->
                                <button class="btn btn-outline-success" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal1"><i class="bi bi-eye-fill"></i></button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                            ...
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                <button class="btn btn-outline-danger"><i class="bi bi-trash-fill"></i></button>
x                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
