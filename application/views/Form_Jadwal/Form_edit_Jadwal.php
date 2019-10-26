<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Edit mahasiswa</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Edit</h2>
            </div>
            <div class="box-content">
                <form name="fromeditmahasiswa"
                    action="<?= base_url('editJadwal') ?>" method="post">
                    <div class="form-group">
                        <label>Kegiatan</label>
                        <input required type="Text" id="Kegiatan" name="Kegiatan" class="form-control required" value="<?= $jadwal->Kegiatan?>">
                    </div>
                    <div class="form-group">
                        <label>Jam</label>
                        <input required type="time" id="Jam" name="Jam" class="form-control" value="<?= $jadwal->jam?>" >
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
                    <button type="submit" name="submitid" value="<?= $jadwal->id_jadwal ?>"
                        class="btn btn-default">Update</button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div>
<!--/row-->