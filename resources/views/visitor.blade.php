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
        <div class="card">
            <div class="card-header">
                <button type="button" style="background-color: #B9FF8E" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Tambah Data
                </button>
                <div class="card-body" id="exampleModal">
                    <form class="form">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="first-name-column">First Name</label>
                                    <input type="text" id="first-name-column" class="form-control"
                                        placeholder="First Name" name="fname-column">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="last-name-column">Last Name</label>
                                    <input type="text" id="last-name-column" class="form-control" placeholder="Last Name"
                                        name="lname-column">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="city-column">City</label>
                                    <input type="text" id="city-column" class="form-control" placeholder="City"
                                        name="city-column">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="country-floating">Country</label>
                                    <input type="text" id="country-floating" class="form-control" name="country-floating"
                                        placeholder="Country">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="company-column">Company</label>
                                    <input type="text" id="company-column" class="form-control" name="company-column"
                                        placeholder="Company">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="email-id-column">Email</label>
                                    <input type="email" id="email-id-column" class="form-control" name="email-id-column"
                                        placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group col-12">
                                <div class='form-check'>
                                    <div class="checkbox">
                                        <input type="checkbox" id="checkbox5" class='form-check-input' checked>
                                        <label for="checkbox5">Remember Me</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card-body">
                <div class="dataTable-top">
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
                </div>
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>City</th>
                            <th>Status</th>
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
                            <td>Harding</td>
                            <td>Lorem.ipsum.dolor@etnetuset.com</td>
                            <td>0800 1111</td>
                            <td>Obaix</td>
                            <td>
                                <span class="badge bg-success">Active</span>
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
    </div>
@endsection
