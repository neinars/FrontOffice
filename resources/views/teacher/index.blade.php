@extends('layouts.master')

@section('main')
    @include('teacher.forms')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Data Guru / {{ $day->name }}</h3>
                    </div>
                </div>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Tambah Data
                        </button>
                    </div>
                    <div class="card-body">
                        {{-- <div class="dataTable-top">
                            <div class="dataTable-dropdown">
                                <select class="dataTable-selector form-select">
                                    <option value="5">5</option>
                                    <option value="10" selected="">10</option>
                                    <option value="15">15</option>
                                    <option value="20">20</option>
                                    <option value="25">25</option>
                                </select>
                                <label> entries per page</label>
                            </div>
                        </div> --}}
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Jam</th>
                                    <th>Mapel</th>
                                    <th>Ruangan</th>
                                    <th>Jurusan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($teach as $t)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $t->name }}</td>
                                        <td>{{ $t->hour_start }} - {{ $t->hour_end }}</td>
                                        <td>{{ $t->subject }}</td>
                                        <td>{{ $t->rooms_id }}</td>
                                        <td>{{ $t->majors_id }}</td>
                                        <td style="width: 100px;">
                                            <!-- Button trigger modal -->
                                            <button class="btn btn-outline-success btn-sm" type="button"
                                                data-bs-toggle="modal"
                                                data-bs-target="#modalEditTeach{{ $t->id }}"><i
                                                    class="bi bi-eye-fill"></i></button>
                                            <a class="btn shadow btn-outline-danger btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#modalDeleteTeach{{ $t->id }}"><i
                                                    class="bi bi-trash-fill"></i></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </section>
        </div>
    </div>
@endsection
