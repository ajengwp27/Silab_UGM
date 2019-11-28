<?php
include APPPATH . 'views/Form_report/laporan.php';

?>
<div>
    <div align="center">
        <img style="display: block;margin-left: auto;margin-right: auto;width: 100px;" src="<?php echo base_url() ?>assets/img/logo.png">
        <div>
            <h2 align="center">
                Ijin Penggunaan Laboraturium <br>
            </h2>
            <h3 align="center">
                Nomor : <?= $data->id_peminjaman ?><br>
                Waktu Penggunaan : <small><?= $data->tanggal_penggunaan ?> sampai <?= $data->tanggal_selesai ?> </small>
            </h3>
        </div>
    </div>
</div>
<hr>
<hr>
<!-- /. ROW  -->
<div>
    <div>
        <table style="width: 75%">
            <tbody>
                <tr class="gradeU">
                    <td style="width: 25%">Nama Lengkap</td>
                    <td style="width:3%">:</td>
                    <td align="left"> <?= $data->Name ?>
                </tr>
                <tr class="gradeU">
                    <td style="width: 25%">NIM/ID</td>
                    <td style="width:3%">:</td>
                    <td align="left"> <?= $data->Nim ?>
                </tr>
            </tbody>
        </table>
    </div>
    <br>
    <table>
        <tr class="gradeU">
            <td style="width: 50%">Analisis yang dikerjakan</td>
        </tr>
    </table>
    <?php $dataanalisis = explode('#', $data->analisa) ; 
     foreach($dataanalisis as $a)
     {
         $datas[$a]= $a;
     }
    ?>
    <table style="width: 100%">
        <tr>
            <td>
                <input type="checkbox" <?php if(isset($datas['Air'])) {echo 'checked=true';}?> value="Air"> Air
            </td>
            <td>
                <input type="checkbox" <?php if(isset($datas['Abu'])) {echo 'checked=true';}?> name="analisis[]" value="Abu"> Abu
            </td>
            <td>
                <input type="checkbox" <?php if(isset($datas['Protein kasar'])) {echo 'checked=true';}?>  name="analisis[]" value="Protein kasar"> Protein kasar
            </td>
        </tr>
        <tr>
            <td>
                <input type="checkbox"  <?php if(isset($datas['Serat kasar'])) {echo 'checked=true';}?>  name="analisis[]" value="Serat kasar"> Serat kasar
            </td>
            <td>
                <input type="checkbox"  <?php if(isset($datas['Lemak kasar'])) {echo 'checked=true';}?>  name="analisis[]" value="Lemak kasar"> Lemak kasar
            </td>
            <td>
                <input type="checkbox"  <?php if(isset($datas['Kalsium'])) {echo 'checked=true';}?>  name="analisis[]" value="Kalsium"> Kalsium
            </td>
        </tr>
        <tr>
            <td>
                <input type="checkbox" <?php if(isset($datas['Fosfor'])) {echo 'checked=true';}?>  name="analisis[]" value="Fosfor"> Fosfor
            </td>
            <td>
                <input type="checkbox" <?php if(isset($datas['Aminia (Nh³)'])) {echo 'checked=true';}?> name="analisis[]" value="Aminia (Nh³)"> Aminia (Nh³)
            </td>
            <td>
                <input type="checkbox" <?php if(isset($datas['NDF'])) {echo 'checked=true';}?> name="analisis[]" value="NDF"> NDF
            </td>
        </tr>
        <tr>
            <td>
                <input type="checkbox"  <?php if(isset($datas['ADF'])) {echo 'checked=true';}?>  name="analisis[]" value="ADF"> ADF
            </td>
            <td>
                <input type="checkbox"  <?php if(isset($datas['Selulosa'])) {echo 'checked=true';}?> name="analisis[]" value="Selulosa"> Selulosa
            </td>
            <td>
                <input type="checkbox"  <?php if(isset($datas['Lignin'])) {echo 'checked=true';}?> name="analisis[]" value="Lignin"> Lignin
            </td>
        </tr>
        <tr>
            <td>
                <input type="checkbox" <?php if(isset($datas['Energi brutto'])) {echo 'checked=true';}?>  name="analisis[]" value="Energi brutto"> Energi brutto
            </td>
            <td>
                <input type="checkbox" <?php if(isset($datas['Kec. In-Vitro'])) {echo 'checked=true';}?>  name="analisis[]" value="Kec. In-Vitro"> Kec. In-Vitro
            </td>
            <td>
                <input type="checkbox" <?php if(isset($datas['Kec. In-Vivo'])) {echo 'checked=true';}?>  name="analisis[]" value="Kec. In-Vivo"> Kec. In-Vivo
            </td>
        </tr>
        <tr>
            <td>
                <input type="checkbox" <?php if(isset($datas['Kec. In-Sacco'])) {echo 'checked=true';}?> name="analisis[]" value="Energi brutto"> Kec. In-Sacco
            </td>
            <td>
                <input type="checkbox" <?php if(isset($datas['Mikrobiologi'])) {echo 'checked=true';}?> name="analisis[]" value="Kec. In-Vitro"> Mikrobiologi
            </td>
            <td>
                <input type="checkbox" <?php if(isset($datas['Derivat Purin'])) {echo 'checked=true';}?> name="analisis[]" value="Kec. In-Vivo"> Derivat Purin
            </td>
        </tr>
    </table>
    <br>
    <br>
    <div>
        <table style="width: 75%">
            <tbody>
                <tr class="gradeU">
                    <td style="width: 25%">Paket yang dipilih</td>
                    <td style="width:3%">:</td>
                    <td align="left"> <?= $data->nama_paket ?>
                </tr>
            </tbody>
        </table>
    </div>

    <div>
    <table style="width: 75%">
    <?php $databahan =explode("-",$data->bahan); ?>
            <tbody>
                <tr class="gradeU">
                    <td style="width: 25%">Bahan </td>
                    <td style="width:3%">:</td>
                    <td align="left"> <?= $databahan[0]?> 
                </tr>
            </tbody>
        </table>
    </div>
    <div>
        <br><br><br><br>
        <table style="width: 100%; margin-left: 75%;">
            <tbody>
                <tr class="gradeU">
                    <td align="center">Yogyakarta, <?= date('d-M-Y'); ?></td>
                </tr>
                <tr class="gradeU">

                    <td align="center"> ttd</td>
                </tr>
                <tr class="gradeU">

                    <td align="center"> <br></td>
                </tr>
                <tr class="gradeU">
                    <td align="center"> <?= $data->Name ?></td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- /. TABLE  -->
</div>
<!-- /. ROW  -->