<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>

    @page {
      size: A4;
      margin: 25.4mm;
    }
    @media print {
  html, body {
    width: 210mm;
    height: 297mm;
    margin-bottom: 25.4mm;
  }
  /* ... the rest of the rules ... */
}
      /* ... the rest of the rules ... */
    }
    * {
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    }

    .page {
    width: 21cm;
    max-height: 27.5cm;
    padding: 2cm;
    margin: 1cm auto;
    border: 1px #D3D3D3 solid;
    border-radius: 5px;
    background: white;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }

    .subpage {
    padding: 1cm;
    border: 5px red solid;
    height: 256mm;
    outline: 2cm #FFEAEA solid;
    }
    }
    </style>
  </head>
  <body style="max-height:27.2cm; margin-bottom:25.4mm;">
    <section >
       <h3 align="center">KERANGKA ACUAN KERJA/TERM OF REFERENCE </br>KELUARAN (OUTPUT) KEGIATAN TAHUN 2022
       </h3>
     </br>
     <br><br><br><br><br><br><br><br>
     <div class="tabel1" style="width:70%">
         <table class="table-borderless" >
             <thead>
                 <tr>

                 </tr>
             </thead>
             <tbody>
                 <tr>

                     <td>Kementrian</td>
                     <td>: <?= $kementrian; ?></td>
                 </tr>
                 <tr>

                     <td>Unit Eselon I/II</td>
                     <td>: <?= $uniteselon; ?></td>
                 </tr>
                 <tr>

                     <td>Program</td>
                     <td>: </td>
                 </tr>
                 <tr>

                     <td>Hasil (<i>Outcome</i>)</td>
                     <td>: <?= $hasil; ?></td>
                 </tr>
                 <tr>

                     <td>Kegiatan</td>
                     <td>: <?= $kegiatan_tor; ?></td>
                 </tr>
                 <tr>

                     <td>Indikator Kinerja Kegiatan</td>
                     <td>: <?= $indikator; ?></td>
                 </tr>
                 <tr>

                     <td>Keluaran (<i>Output</i>)</td>
                     <td>: <?= $keluaran; ?></td>
                 </tr>
                 <tr>

                     <td>Volume</td>
                     <td><?= $volume; ?></td>
                 </tr>
                 <tr>

                     <td>Satuan Ukur</td>
                     <td><?= $kegiatanpembelajaran; ?></td>
                 </tr>

             </tbody>
         </table>
       </div>
    </br></br><br>

     <div class="tabel2" >
         <table class="table-borderless"  >
             <thead>
                 <tr>

                 </tr>
             </thead>
             <tbody>
                 <tr>

                     <td colspan="2"><b>A. Latar Belakang</b></td>

                 </tr>
                 <tr>

                     <td><br></td>
                     <td><br></td>
                 </tr>
                 <tr>

                     <td colspan="2" style="padding-left:25px;"><?= $latarbelakang_tor; ?></td>

                 </tr>
                 <tr>

                     <td><br></td>
                     <td><br></td>
                 </tr>
                 <tr>

                     <td colspan="2" style="padding-left:10px;"><b>1. Dasar Hukum</b></td>

                 </tr>
                 <tr>

                     <td colspan="2" style="padding-left:46px;"><?= $dasarhukum;?></td>

                 </tr>
                 <tr>

                     <td><br></td>
                     <td><br></td>
                 </tr>
                 <tr>

                     <td colspan="2" style="padding-left:10px;"><b>2. Gambaran Umum</b></td>

                 </tr>
                 <tr>

                     <td colspan="2" style="padding-left:46px;"><?= $gambaranumum;?></td>

                 </tr>
                 <tr>

                     <td><br></td>
                     <td><br></td>
                 </tr>
                 <tr>

                     <td colspan="2"><b>B. Penerima Manfaat</b></td>

                 </tr>
                 <tr>

                     <td colspan="2" style="padding-left:25px;"><?= $penerimamanfaat; ?> </td>

                 </tr>
                 <tr>

                     <td><br></td>
                     <td><br></td>
                 </tr>
                 <tr>

                     <td><br></td>
                     <td><br></td>
                 </tr>
                 <tr>

                     <td colspan="2"><b>C. Strategi Pencapaian Keluaran</b></td>

                 </tr>
                 <tr>

                     <td colspan="2" style="padding-left:25px;"><?= $pencapaian; ?> </td>

                 </tr>
                 <tr>

                     <td><br></td>
                     <td><br></td>
                 </tr>
                 <tr>

                     <td><br></td>
                     <td><br></td>
                 </tr>
                 <tr>

                     <td colspan="2"><b>D. Tahapan, Waktu dan Tempat Pelaksanaan</b></td>

                 </tr>
                 <tr>

                     <td colspan="2" style="padding-left:25px;"><?= $tahapan; ?> </td>

                 </tr>
                 <tr>

                     <td><br></td>
                     <td><br></td>
                 </tr>
                 <tr>

                     <td><br></td>
                     <td><br></td>
                 </tr>
                 <tr>

                     <td colspan="2"><b>E. Kurun Waktu Pencapaian Keluaran</b></td>

                 </tr>
                 <tr>

                     <td colspan="2" style="padding-left:25px;"><?= $waktu_tor; ?> teesss</td>

                 </tr>
                 <?php foreach($pdf_aktivitas as $row){ ?>

                 <?php}?>
                 <tr>
                   <th>No</th>
                   <th>Rencana</th>
                   <th>Bulan</th>
                 </tr>
                 <tr>

                     <td><br></td>
                     <td><br></td>
                 </tr>
                 <tr>

                     <td><br></td>
                     <td><br></td>
                 </tr>
                 <tr>

                     <td colspan="2"><b>F. Biaya Yang Diperlukan</b></td>

                 </tr>
                 <tr>

                     <td colspan="2" style="padding-left:25px;"><?= $biayator; ?> </td>

                 </tr>
                 <tr>

                     <td><br></td>
                     <td><br></td>
                 </tr>
                 <tr>

                     <td><br></td>
                     <td><br></td>
                 </tr>
                 <tr>


                     <td colspan="2" align="right">Subang 22 Juli 2022&emsp;&emsp;&emsp;</td>
                 </tr>
                 <tr>


                     <td colspan="2" align="right" >Wakil Direktur I &emsp;&emsp;&emsp;&emsp;</td>
                 </tr>
                 <tr>

                     <td><br></td>
                     <td><br></td>
                 </tr>
                 <tr>

                     <td><br></td>
                     <td><br></td>
                 </tr>
                 <tr>

                     <td><br></td>
                     <td><br></td>
                 </tr>
                 <tr>


                     <td colspan="2" align="right">Oyok Yudiyanto, ST., MT. &emsp;</td>
                 </tr>
                 <tr>


                     <td colspan="2" align="right">NIP. 197105281999031002 &nbsp;&nbsp;</td>
                 </tr>
             </tbody>
         </table>
     </div>
     </section>
  </body>
</html>
<script>
  window.print();
</script>
