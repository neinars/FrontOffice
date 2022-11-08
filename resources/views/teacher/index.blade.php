@extends('layouts.master')

@section('main')
    <div id="main" style="background-color: #D4DDFF;">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Data Guru / Senin</h3>
                    </div>
                </div>
            </div>
            <section class="section">
                <div class="modal fade modal-borderless" id="exampleModal" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action={{ route('teacher.store') }} method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="mb-3">
<<<<<<< HEAD
                                        <label for="formGroupExampleInput" class="form-label"> Nama Guru</label>
=======
                                        <label for="formGroupExampleInput" class="form-label">Hari</label>
>>>>>>> 6e350e95a1b3d7a87d2f9dc554caeb13e073da92
                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder=""
                                            name="days_id" required>
                                    </div>
                                    <div class="mb-3">
<<<<<<< HEAD
                                        <label for="formGroupExampleInput2" class="form-label">Jam</label>
                                        <input type="number" min="1" class="form-control" placeholder=""
                                            name="kas" autocomplete="off" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput2" class="form-label">Mapel</label>
                                        <input type="number" min="1" class="form-control" placeholder=""
                                            name="kas" autocomplete="off" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput2" class="form-label">Ruangan</label>
                                        <input type="number" min="1" class="form-control" placeholder=""
                                            name="kas" autocomplete="off" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput2" class="form-label">Jurusan</label>
                                        <input type="number" min="1" class="form-control" placeholder=""
                                            name="kas" autocomplete="off" required>
=======
                                        <label for="formGroupExampleInput" class="form-label"> Nama Guru</label>
                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder=""
                                            name="name" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput2" class="form-label">Jam Awal</label>
                                        <input type="time" class="form-control" placeholder=""
                                            name="hour_start" autocomplete="off" required>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput2" class="form-label">Jam Akhir</label>
                                        <input type="time" class="form-control" placeholder=""
                                            name="hour_end" autocomplete="off" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput2" class="form-label">Mapel</label>
                                        <input type="text" class="form-control" placeholder=""
                                            name="subject" autocomplete="off" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput2" class="form-label">Ruangan</label>
                                        <input type="text" class="form-control" placeholder=""
                                            name="rooms_id" autocomplete="off" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput2" class="form-label">Jurusan</label>
                                        <input type="text" class="form-control" placeholder=""
                                            name="majors_id" autocomplete="off" required>
>>>>>>> 6e350e95a1b3d7a87d2f9dc554caeb13e073da92
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                                    <button type="submit" class="btn btn-primary">Edit Guru </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                                <tr>
                                    <td>Graiden</td>
                                    <td>vehicula.aliquet@semconsequat.co.uk</td>
                                    <td>076 4820 8838</td>
                                    <td>Offenburg</td>
                                    <td>
                                        <span class="badge bg-success">Active</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Dale</td>
                                    <td>fringilla.euismod.enim@quam.ca</td>
                                    <td>0500 527693</td>
                                    <td>New Quay</td>
                                    <td>
                                        <span class="badge bg-success">Active</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nathaniel</td>
                                    <td>mi.Duis@diam.edu</td>
                                    <td>(012165) 76278</td>
                                    <td>Grumo Appula</td>
                                    <td>
                                        <span class="badge bg-danger">Inactive</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Emmanuel</td>
                                    <td>eget.lacus.Mauris@feugiatSednec.org</td>
                                    <td>(016977) 8208</td>
                                    <td>Saint-Remy-Geest</td>
                                    <td>
                                        <span class="badge bg-success">Active</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </section>
        </div>
    </div>
@endsection
