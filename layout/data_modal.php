<div id="add_data_mahasiswa" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Mahasiswa</h5>
            </div>
            <div class="modal-body">
                <form role="form" action="#" method="POST" enctype="multipart/form-data" id="data-form">
                    <div class="form-group">
                        <label>NPM</label>
                        <input type="text" name="npm" id="npm" class="form-control" required />
                    </div>
                    <div class="form-gorup mb-4">
                        <label>Nama Mahasiswa</label>
                        <input type="text" name="nama_mahasiswa" id="nama_mahasiswa" class="form-control" required />
                    </div>
                    <div class="form-group">
                        <label>Peminatan</label>
                        <select name="peminatan" id="peminatan" class="form-control">
                            <option value="Mobile">Mobile</option>
                            <option value="AI">AI</option>
                            <option value="Multimedia">Multimedia</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="Aktif">Aktif</option>
                            <option value="DO">DO</option>
                            <option value="Cuti">Cuti</option>
                            <option value="Resign">Resign</option>
                        </select>
                    </div>
                    <div class="form-gorup mb-4">
                        <label>IPK</label>
                        <input type="text" name="ipk" id="ipk" class="form-control" required />
                    </div>
                    <input type="submit" name="add_mahasiswa" id="add_mahasiswa" value="Simpan Data" class="btn btn-primary" />
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div id="add_data_mahasiswa_kp" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Mahasiswa KP</h5>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div id="add_data_mahasiswa_pkpm" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Mahasiswa PKPM</h5>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>