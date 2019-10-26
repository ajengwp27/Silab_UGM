<div class="modal fade" id="addjadwal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h3>Tambah Data jadwal</h3>
            </div>
            <div class="modal-body">
                <!-- start body -->
                <div class="row">
                    <div class="box col-md-12">
                        <div class="box-content">
                            <form name="fromaddjadwal" id="formvaliditas" action="<?= base_url('addJadwal') ?>" method="post">
                                <div class="form-group">
                                    <label>Kegiatan</label>
                                    <input required type="Text" id="Kegiatan" name="Kegiatan" class="form-control required" placeholder="Enter Kegiatan" >
                                </div>
                                <div class="form-group">
                                    <label>Jam</label>
                                    <input required type="time" id="Jam" name="Jam" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Hari</label>
                                    <select name="Hari" class="form-control selectpicker">
                                        <option value="1">Senin</option>
                                        <option value="2">Selasa</option>
                                        <option value="3">Rabu</option>
                                        <option value="4">Kamis</option>
                                        <option value="5">Jumat</option>
                                        <option value="6">Sabtu</option>
                                    </select>
                                </div>
                        </div>
                    </div>
                    <!--/span-->
                </div>
                <!--/row-->
                <!-- end body -->
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Tambah data</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    var form = document.querySelector("#formvaliditas");


    function validasi(textbox, text) {
        var input = document.getElementById(textbox);

        var cek = form.checkValidity()
        if (cek == false) {
            input.oninvalid = function(e) {
                if (e.target.validity.valueMissing) {
                    e.target.setCustomValidity(text + " WAJIB DIISI");
                    return;
                }
            }
            input.oninput = function(e) {
                e.target.setCustomValidity("")
            }
            form.reportValidity();
            console.log(cek);
        }

    }
</script>