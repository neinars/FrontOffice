@extends('layouts.master')

@section('main')
    <div id="main" style="background-color: #BAC9FF;">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Data Tamu</h3>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">DataTable</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            
            <section class="section">
                {{-- @include('visitor.forms') --}}
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                                        <button class="btn shadow btn-outline-success btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $t->id }}"><i class="bi bi-eye-fill"></i></button>
                                        <a class="btn shadow btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete-visitor{{ $t->id }}"><i class="bi bi-trash-fill"></i></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
        
            </section>
            {{-- MODAL SHOW --}}
@foreach ($tdata as $t)
    
<div class="modal fade" id="exampleModal{{ $t->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Informations</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $t->created_at }}</td>
                    <td>{{ $t->name }}</td>
                    <td>{{ $t->address }}</td>
                    <td>{{ $t->instance }}</td>
                    <td>{{ $t->phone_number }}</td>
                    <td>{{ $t->meet->meet_with }}</td>
                    <td>{{ $t->utility->utilities }}</td>
                    <td>{{ $t->desc }}</td>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary">Simpan Perubahan</button>
            </div>
        </div>
    </div>
</div>
@endforeach

{{-- Modal Delete --}}
        @foreach ($tdata as $t)
        <div class="modal fade" id="delete-visitor{{ $t->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action={{ url('/visitor/delete/' . $t->id) }} method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('DELETE')
                                    <div class="modal-body">
                                        <center class="mt-3">
                                            <h5>
                                                apakah anda yakin ingin menghapus data ini?
                                            </h5>
                                        </center>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                        <button type="submit" class="btn btn-danger">Hapus!</button>
                                    </div>
                        </form>
                    </div>
                </div>
        </div>
</div>
</div>
        @endforeach

{{-- MODAL ADD --}}
<div class="modal fade modal-borderless" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Data Pengunjung</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action={{ route('visitor.store') }} method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <p style="color:red">*Beri tanda (-) bila tidak diisi</p>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" id="formGroupExampleInput2" placeholder=""
                        name="tanggal" required>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder=""
                    name="name" required>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder=""
                    name="address" required>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Instansi (Jika berasal dari Instansi)</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder=""
                    name="instance" required>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Nomor Telepon</label>
                    <input type="number" min="1" class="form-control" placeholder="" name="phone_number"
                    autocomplete="off" required>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Ingin bertemu dengan</label>
                    <select name="meet_id" class="dataTable-selector form-select" required>
                        <option value="" selected="" disabled>-- Pilih --</option>
                        @foreach ($meet as $m)
                        <option value="{{ $m->id }}">{{ $m->meet_with }}</option>
                        @endforeach
                </select>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Kepentingan</label>
                <select name="utility_id" class="dataTable-selector form-select" required></
                    <option value="" selected="" disabled>-- Pilih --</option>
                    @foreach ($utility as $ut)
                    <option value="{{ $ut->id }}">{{ $ut->utilities }}</option>
                    @endforeach
                </select>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Keterangan</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder=""
                    name="desc" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
        </form>
    </div>
</div>
</div>
        </div>
    </div>
@endsection