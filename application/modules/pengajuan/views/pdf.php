
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>KERANGKA ACUAN KERJA/TERM OF REFERENCE KELUARAN (OUTPUT) KEGIATAN TAHUN 2022</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<style>
    @page :blank {
      size: A4;
      margin: 0;

      margin-bottom: 25.4mm;
    }
    @media print {
    html, body {
    width: 210mm;
    height: 297mm;
    margin-bottom: 25.4mm;

    }
    /* ... the rest of the rules ... */
    }

    h1 {
        font-weight: bold;
        font-size: 20pt;
        text-align: center;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    .table th {
        padding: 8px 8px;
        border:1px solid #000000;
        text-align: center;
    }

    .table td {
        padding: 3px 3px;
        border:1px solid #000000;
    }

    .text-center {
        text-align: center;
    }
    td {
      padding-bottom: 5px;
    }


.sheet {
  margin: 0;
  overflow: hidden;
  position: relative;
  box-sizing: border-box;
  page-break-after: always;
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
/** Paper sizes **/
body.A3               .sheet { width: 297mm; height: 419mm }
body.A3.landscape     .sheet { width: 420mm; height: 296mm }
body.A4               .sheet {width: 210mm;height: 297mm;}
body.A4.landscape     .sheet { width: 297mm; height: 209mm }
body.A5               .sheet { width: 148mm; height: 209mm }
body.A5.landscape     .sheet { width: 210mm; height: 147mm }
body.letter           .sheet { width: 216mm; height: 279mm }
body.letter.landscape .sheet { width: 280mm; height: 215mm }
body.legal            .sheet { width: 216mm; height: 356mm }
body.legal.landscape  .sheet { width: 357mm; height: 215mm }

/** Padding area **/
.sheet.padding-10mm {padding: 25.4mm;}
.sheet.padding-15mm { padding: 15mm }
.sheet.padding-20mm { padding: 20mm }
.sheet.padding-25mm { padding: 25mm }

/** For screen preview **/
@media screen {
  body { background: #fffff }
  .sheet {
    background: white;
    box-shadow: 0 .5mm 2mm rgba(0,0,0,.3);
    margin: 5mm auto;


  }
}

/** Fix for Chrome issue #273306 **/
@media print {
           body.A3.landscape { width: 420mm }
  body.A3, body.A4.landscape { width: 297mm }
  body.A4, body.A5.landscape { width: 210mm }
  body.A5                    { width: 148mm }
  body.letter, body.legal    { width: 216mm }
  body.letter.landscape      { width: 280mm }
  body.legal.landscape       { width: 357mm }
}

</style>
</head>
<body class="A4">
    <section style="margin:25.4mm">
      <h3 align="center">KERANGKA ACUAN KERJA/TERM OF REFERENCE </br>KELUARAN (OUTPUT) KEGIATAN TAHUN 2022
      </h3>
    </br>
    <div class="tabel1" style="width:100%">
        <table class="table-borderless" >
            <thead>
                <tr>

                </tr>
            </thead>
            <tbody>
                <tr >

                    <td style="width:30%">Kementrian</td>
                    <td>: <?= $data_tor['kementrian']; ?></td>
                </tr>
                <tr>

                    <td style="width:30%">Unit Eselon I/II</td>
                    <td>: <?= $data_tor['uniteselon']; ?></td>
                </tr>
                <tr>

                    <td style="width:30%">Program</td>
                    <td>:<?= $data_tor['program'];?> </td>
                </tr>
                <tr>

                    <td style="width:30%">Hasil (<i>Outcome</i>)</td>
                    <td>: <?= $data_tor['hasil']; ?></td>
                </tr>
                <tr>

                    <td style="width:30%">Kegiatan</td>
                    <td>: <?= $data_tor['kegiatan_tor']; ?></td>
                </tr>
                <tr>

                    <td style="width:30%;">Indikator Kinerja Kegiatan</td>
                    <td>: <?= $data_tor['indikator']; ?></td>
                </tr>
                <tr>

                    <td style="width:30%">Keluaran (<i>Output</i>)</td>
                    <td>: <?= $data_tor['keluaran']; ?></td>
                </tr>
                <tr>

                    <td style="width:30%">Volume</td>
                    <td>:<?= $data_tor['volume']; ?></td>
                </tr>
                <tr>

                    <td style="width:30%">Satuan Ukur</td>
                    <td>:<?= $data_tor['kegiatanpembelajaran']; ?></td>
                </tr>

            </tbody>
        </table>
      </div>
</br></br><br>
<style>
  .tabel2 {
    width: 100%;
    padding-bottom: 25.4mm;
  }
</style>
    <div class="tabel2" >
        <table>
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

                    <td colspan="2" style="padding-left:25px;"><?= $data_tor['latarbelakang_tor']; ?></td>

                </tr>
                <tr>

                    <td><br></td>
                    <td><br></td>
                </tr>
                <tr>

                    <td colspan="2" style="padding-left:10px;"><b>1. Dasar Hukum</b></td>

                </tr>
                <tr>

                    <td colspan="2" style="padding-left:46px;"><?= $data_tor['dasarhukum'];?></td>

                </tr>
                <tr>

                    <td><br></td>
                    <td><br></td>
                </tr>
                <tr>

                    <td colspan="2" style="padding-left:10px;"><b>2. Gambaran Umum</b></td>

                </tr>
                <tr>

                    <td colspan="2" style="padding-left:46px;"><?= $data_tor['gambaranumum'];?></td>

                </tr>
                <tr>

                    <td><br></td>
                    <td><br></td>
                </tr>
                <tr>

                    <td colspan="2"><b>B. Penerima Manfaat</b></td>

                </tr>
                <tr>

                    <td colspan="2" style="padding-left:25px;"><?= $data_tor['penerimamanfaat']; ?> </td>

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

                    <td colspan="2" style="padding-left:25px;"><?= $data_tor['pencapaian']; ?> </td>

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

                    <td colspan="2" style="padding-left:25px;"><?= $data_tor['tahapan']; ?> </td>

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

                    <td colspan="2" style="padding-left:25px;"><?= $data_tor['tahapan']; ?></td>

                </tr>
              </tbody>
            </table>

            <table class="table table-bordered">
              <thead>
                <tr>

                </tr>
              </thead>
              <tbody>
                <tr>
                  <th width="5%" rowspan="2">No</th>
                  <th width="25%" rowspan="2">Rencana</th>
                  <th colspan="12">Bulan</th>

                </tr>
                <tr>

                  <td >1</td>
                  <td>2</td>
                  <td>3</td>
                  <td>4</td>
                  <td>5</td>
                  <td>6</td>
                  <td>7</td>
                  <td>8</td>
                  <td>9</td>
                  <td>10</td>
                  <td>11</td>
                  <td>12</td>
                </tr>

                <?php for ($i=1; $i <=$count ; $i++) { ?>
                  <tr>
                  <td><?= $i;?></td>

                  <td><?= $pdf_aktivitas['aktivitas'.$i]; ?> <?= $pdf_bulan['bulan'.$i]; ?></td>
                  <?php
                    if($pdf_bulan['bulan'.$i] == 1){ ?>
                    <td style="background-color:grey !important;"></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                  <?php  }else if($pdf_bulan['bulan'.$i] == 2){ ?>
                    <td></td><td style="background-color:grey !important;"></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                  <?php  }else if($pdf_bulan['bulan'.$i] == 3){ ?>
                    <td></td></td><td><td style="background-color:grey !important;"></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                  <?php  }else if($pdf_bulan['bulan'.$i] == 4){ ?>
                    <td></td><td></td><td></td><td style="background-color:grey !important;"></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                  <?php  }else if($pdf_bulan['bulan'.$i] == 5){ ?>
                    <td></td><td></td><td></td><td></td><td style="background-color:grey !important;"></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                  <?php  }else if($pdf_bulan['bulan'.$i] == 6){ ?>
                    <td></td><td></td><td></td><td></td><td></td><td style="background-color:grey !important;"></td><td></td><td></td><td></td><td></td><td></td><td></td>
                  <?php  }else if($pdf_bulan['bulan'.$i] == 7){ ?>
                    <td></td><td></td><td></td><td></td><td></td><td></td><td style="background-color:grey !important;"></td><td></td><td></td><td></td><td></td><td></td>
                  <?php  }else if($pdf_bulan['bulan'.$i] == 8){ ?>
                    <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td style="background-color:grey !important;"></td><td></td><td></td><td></td><td></td>
                  <?php  }else if($pdf_bulan['bulan'.$i] == 9){ ?>
                    <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td style="background-color:grey !important;"></td><td></td><td></td><td></td>
                  <?php  }else if($pdf_bulan['bulan'.$i] == 10){ ?>
                    <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td style="background-color:grey !important;"></td><td></td><td></td>
                  <?php  }else if($pdf_bulan['bulan'.$i] == 11){ ?>
                    <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td style="background-color:grey !important;"></td><td></td>
                  <?php  }else if($pdf_bulan['bulan'.$i] == 12){ ?>
                    <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td style="background-color:grey !important;"></td>
                  <?php  }
                  ?>



                </tr>
              <?php  } ?>

              </tbody>
            </table>
            <table>
              <thead>
                <tr>

                </tr>
              </thead>
              <tbody>
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

                    <td colspan="2" style="padding-left:25px;"><?= $data_tor['biayator']; ?> </td>

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
