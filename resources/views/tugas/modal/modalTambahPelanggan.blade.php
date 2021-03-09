<!-- Modal Tambah Pelanggan -->
<div class="modal fade" id="modal-tambah-pelanggan" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Pelanggan</h5>
                <button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form-tambah-pelanggan" accept-charset="utf-8" enctype="multipart/form-data">
                    <input type="hidden" value="{{ csrf_token() }}" id="token">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" required>
                    </div>
                    <div class="form-group">
                        <label for="ttl">Tempat, tanggal lahir</label>
                        <input type="text" class="form-control" id="ttl" required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="label-ktp">Foto KTP</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="ktp" aria-describedby="label-ktp"
                                accept="image/x-png,image/gif,image/jpeg" required>
                            <label class="custom-file-label" for="ktp">Choose file</label>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="label-selfie">Foto Selfie</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="selfie" aria-describedby="label-selfie"
                                accept="image/x-png,image/gif,image/jpeg" required>
                            <label class="custom-file-label" for="selfie">Choose file</label>
                        </div>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Pria"
                            require>
                        <label class="form-check-label" for="inlineRadio1">Pria</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Wanita"
                            require>
                        <label class="form-check-label" for="inlineRadio2">Wanita</label>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="btn-simpan">Simpan</button>
                <button class="btn btn-primary btn-loading" type="button" style="display: none;" disabled>
                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    Loading...
                </button>
            </div>
            </form>
        </div>
    </div>
</div>
