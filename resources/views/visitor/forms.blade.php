{{-- MODAL ADD --}}
<div class="modal fade modal-borderless" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Data Pengunjung</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        {{-- "name"
"address"
"instance"
"phone_number"
"meet_with"
"utilities"
        Kedinasan', 'Kesiswaan', 'BP', 'TU', 'Dan lain-lain--}}
        <form action={{ route('visitor.store') }} method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
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
                    name="instance">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Nomor Telepon</label>
                    <input type="number" min="1" class="form-control" placeholder="" name="phone_number"
                        autocomplete="off">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Ingin bertemu dengan</label>
                <select name="meet_with" class="dataTable-selector form-select" required>
                    <option value="" selected="" disabled>-- Pilih --</option>
                    <option value="Kepala Sekolah">Kepala Sekolah</option>
                    <option value="TU">TU</option>
                    <option value="BP">BP</option>
                    <option value="Staff Management">Staff Management</option>
                    <option value="Staff TU">Staff TU</option>
                    <option value="Guru">Guru</option>
                    <option value="Guru Piket">Guru Piket</option>
                    <option value="Dan lain-lain">Dan lain-lain</option>
                </select>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Kepentingan</label>
                <select name="utilities" class="dataTable-selector form-select" required>
                    <option value="" selected="" disabled>-- Pilih --</option>
                    <option value="Kedinasan">Kedinasan</option>
                    <option value="Kesiswaan">Kesiswaan</option>
                    <option value="BP">BP</option>
                    <option value="TU">TU</option>
                    <option value="Dan lain-lain">Dan lain-lain</option> 
                </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
        </form>
    </div>
</div>
</div>