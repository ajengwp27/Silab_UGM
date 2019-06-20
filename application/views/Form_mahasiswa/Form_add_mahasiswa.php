<div class="modal fade" id="addmahasiswa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h3>Tambah Data Mahasiswa</h3>
            </div>
            <div class="modal-body">
            <!-- start body -->
                <div class="row">
                    <div class="box col-md-12">
                            <div class="box-content">
                                <form name="fromaddmahasiswa" id="formvaliditas" action="<?= base_url('ControllerMahasiswa/Controller_mahasiswa/addmahasiswa')?>"  method="post">
                                    <div class="form-group">
                                        <label>NIM</label>
                                        <input required type="Text" onclick='validasi("NIM","NIM")'  id="NIM" name="nim" class="form-control required" placeholder="Enter NIM" pattern="^([0])([0-2])([0-9])([0])([1])([2])([0-9])([0-9])([0-9])([0-9])$" >
                                    </div>
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input required type="Text" onclick='validasi("NAMA","NAMA")' id="NAMA" name="name" class="form-control" placeholder="Enter Name"  >
                                    </div>
                                    <div class="form-group">
                                        <label>Nomer Telepon</label>
                                        <input required type="Text" onclick='validasi("PHONE","NOMER TELEPON")'  id="PHONE" name="phone" class="form-control" placeholder="Enter Number">
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select name="gender" class="form-control selectpicker">
                                            <option value="L">Laki-Laki</option>
                                            <option value="P">Perempuan</option>
                                        </select>    
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input required type="Text" onclick='validasi("ALAMAT","ALAMAT")' id="ALAMAT" name="address" class="form-control" placeholder="Enter Address">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input required type="Email" onclick='validasi("EMAIL","EMAIL")'id="EMAIL" name="email" class="form-control" placeholder="Enter Email">
                                    </div>
                            </div>
                    </div>
                    <!--/span-->
                </div><!--/row-->
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

 $('#NIM').keypress(function(event){

if(event.which != 8 && isNaN(String.fromCharCode(event.which))){
    event.preventDefault(); //stop character from entering input
}

});

var form = document.querySelector("#formvaliditas");


function validasi(textbox,text)
{
    var input = document.getElementById(textbox);
  
    var cek = form.checkValidity()
    if(cek == false)
    {
        input.oninvalid = function(e) 
        {
            if(e.target.validity.valueMissing)
            {
                e.target.setCustomValidity(text+" WAJIB DIISI");
                return;
            }
        }
        input.oninput = function(e) 
        {
             e.target.setCustomValidity("")
        }
        form.reportValidity();
        console.log(cek);
    }

}

</script>
