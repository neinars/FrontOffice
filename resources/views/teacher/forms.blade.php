{{-- modal add data --}}
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
                    <label for="formGroupExampleInput" class="form-label">Hari</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder=""
                        name="days_id" required>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label"> Nama Guru</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder=""
                        name="name" required>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Jam Awal</label>
                    <input type="time" class="form-control" placeholder="" name="hour_start"
                        autocomplete="off" required>
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Jam Akhir</label>
                    <input type="time" class="form-control" placeholder="" name="hour_end"
                        autocomplete="off" required>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Mapel</label>
                    <input type="text" class="form-control" placeholder="" name="subject"
                        autocomplete="off" required>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Ruangan</label>
                    <input type="text" class="form-control" placeholder="" name="rooms_id"
                        autocomplete="off" required>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Jurusan</label>
                    <input type="text" class="form-control" placeholder="" name="majors_id"
                        autocomplete="off" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                    data-bs-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-primary">Edit Guru </button>
            </div>
        </form>
    </div>
</div>
</div>