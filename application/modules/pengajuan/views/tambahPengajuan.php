
<div class="col-12">
                <div class="card" >
                  <div class="card-body">

                                          <h2 >PENGAJUAN KEGIATAN <?= $nama_kegiatan->nama_kegiatan;?></h2>

                      <div align="center">
                        <span class="step" id = "step-1">1</span>
                        <span class="step" id = "step-2">2</span>
                        <span class="step" id = "step-3">3</span>
                        <span class="step" id = "step-4">4</span>
                      </div>
                      <?= $this->session->flashdata('message');?>


                      <div class="tab" id = "tab-1">
                        <h3>TOR / Rancangan Acuan Kerja</h3>
                        <!-- <input type="text" name="" value="<?php //$nama_kegiatan->kode; ?>"> -->
                        <?php echo form_open('pengajuan/pengajuan/pengajuan_pdf/'); ?>
                        <div id="cek-pdf">
                          <input type="hidden" name="kementrian" id="input2" value="tes<?= set_value('kementrian');?>">
                          <input type="hidden" name="uniteselon" id="input4"value="tes <?= set_value('uniteselon');?>">
                          <input type="hidden" name="program" id="input36"value="tes <?= set_value('program');?>">
                          <input type="hidden" name="hasil" id="input6"value="tes <?= set_value('hasil');?>">
                          <input type="hidden" name="kegiatan_tor" id="input8"value="tes <?= set_value('kegiatan_tor');?>">
                          <input type="hidden" name="indikator" id="input10"value="tes <?= set_value('indikator');?>">
                          <input type="hidden" name="keluaran" id="input12"value="tes <?= set_value('keluaran');?>">
                          <input type="hidden" name="volume" id="input14"value="tes <?= set_value('volume');?>">
                          <input type="hidden" name="kegiatanpembelajaran" id="input16"value="tes <?= set_value('kegiatanpembelajaran');?>">
                          <input type="hidden" name="latarbelakang_tor" id="input18"value="tes <?= set_value('latarbelakang_tor');?>">
                          <input type="hidden" name="dasarhukum" id="input20"value="tes <?= set_value('dasarhukum');?>">
                          <input type="hidden" name="gambaranumum" id="input22"value="tes <?= set_value('gambaranumum');?>">
                          <input type="hidden" name="penerimamanfaat" id="input24"value="tes <?= set_value('penerimamanfaat');?>">
                          <input type="hidden" name="pencapaian" id="input26"value="tes <?= set_value('pencapaian');?>">
                          <input type="hidden" name="tahapan" id="input28"value="tes <?= set_value('tahapan');?>">

                          <input type="hidden" name="biayator" id="input34"value="tes <?= set_value('biayator');?>">
                          <input type="hidden" name="rencana_aktivitas1" id="rencanaA1"value="tes <?= set_value('rencana_aktivitas1');?>">
                          <input type="hidden" name="bulan1" id="bulanA1" value="tes <?= set_value('bulan1');?>">
                          <input type="hidden" name="count" id="count" value="1">
                          <button type="submit" class="btn btn-sm btn-info" name="button" align="right">Cek PDF</button>

                        </div>
                          <?php echo form_close(); ?>

                        <?php
    echo form_open_multipart('pengajuan/pengajuan/aksiPengajuan/'.$kode, "enctype='multipart/form-data' id='edit_user'");
    ?>
                        <div class="form-group">
                        <label> Kementrian</label>
                        <input class=" form-control name_list" type = "text" placeholder="" id="input1" class="form-control" name="kementrian" value="<?= set_value('kementrian');?> tes">
                        <script type="text/javascript">
                        $(document).ready(function () { $("#input1").keyup(function () { var value = $(this).val(); $("#input2").val(value); }); }); </script>
                      </div>
                       <div class="form-group">
                      <label> Unit Eselon I/II</label>
                      <input class=" form-control name_list" type = "text" id="input3" placeholder="" class="form-control" name="uniteselon" value="<?= set_value('uniteselon');?>tes">
                      <script type="text/javascript">
                      $(document).ready(function () { $("#input3").keyup(function () { var value = $(this).val(); $("#input4").val(value); }); }); </script>
                    </div>
                      <div class="form-group">
                     <label> Program</label>
                     <input class=" form-control name_list" type = "text" id="input35" placeholder="" class="form-control" name="program" value="<?= set_value('uniteselon');?>tes">
                     <script type="text/javascript">
                     $(document).ready(function () { $("#input35").keyup(function () { var value = $(this).val(); $("#input36").val(value); }); }); </script>
                      </div>
                        <div class="form-group">
                        <label> Hasil (Outcome)</label>
                        <input class=" form-control name_list" type = "text" placeholder="" id="input5" class="form-control" name="hasil" value="<?= set_value('hasil');?>tes">
                        <script type="text/javascript">
                        $(document).ready(function () { $("#input5").keyup(function () { var value = $(this).val(); $("#input6").val(value); }); }); </script>
                      </div>
                        <div class="form-group">
                        <label> Kegiatan</label>
                        <input class=" form-control name_list" type = "text" placeholder="" id="input7" class="form-control" name="kegiatan_tor" value="<?= set_value('kegiatan_tor');?> tes">
                        <script type="text/javascript">
                        $(document).ready(function () { $("#input7").keyup(function () { var value = $(this).val(); $("#input8").val(value); }); }); </script>
                      </div>
                        <div class="form-group">
                        <label>Indikator Kinerja Kegiatan</label>
                        <textarea class=" form-control name_list" type = "text" placeholder="" id="input9" class="form-control"  rows="6" cols="6" name="indikator" value="<?= set_value('indikator');?>tes"></textarea>
                        <script type="text/javascript">
                        $(document).ready(function () { $("#input9").keyup(function () { var value = $(this).val(); $("#input10").val(value); }); }); </script>
                        </div>
                        <div class="form-group">
                        <label> Keluaran (Output)</label>
                        <input class=" form-control name_list" type = "text" placeholder="" id="input11" class="form-control" name="keluaran" value="<?= set_value('keluaran');?>tes">
                        <script type="text/javascript">
                        $(document).ready(function () { $("#input11").keyup(function () { var value = $(this).val(); $("#input12").val(value); }); }); </script>
                      </div>
                        <div class="form-group">
                        <label> Volume</label>
                        <input class=" form-control name_list" type="text" placeholder="" id="input13" class="form-control" name="volume" value="<?= set_value('volume');?>tes">
                        <script type="text/javascript">
                        $(document).ready(function () { $("#input13").keyup(function () { var value = $(this).val(); $("#input14").val(value); }); }); </script>
                      </div>
                        <div class="form-group">
                        <label> Kegiatan Pembelajaran</label>
                        <input class=" form-control name_list" type = "text" placeholder="" id="input15" class="form-control" name="kegiatanpembelajaran" value="<?= set_value('kegiatanpembelajaran');?>tes">
                        <script type="text/javascript">
                        $(document).ready(function () { $("#input15").keyup(function () { var value = $(this).val(); $("#input16").val(value); }); }); </script>
                      </div>
                        <div class="form-group">
                        <label> Latar Belakang</label>
                        <input class=" form-control name_list" type = "text" placeholder="" id="input17" class="form-control" name="latarbelakang_tor" value="<?= set_value('latarbelakang_tor');?>tes">
                        <script type="text/javascript">
                        $(document).ready(function () { $("#input17").keyup(function () { var value = $(this).val(); $("#input18").val(value); }); }); </script>
                      </div>
                      <div class="form-group">
                      <label> Dasar Hukum</label>
                      <input class=" form-control name_list" type = "text" placeholder="" id="input19" class="form-control" name="dasarhukum" value="<?= set_value('dasarhukum');?>tes">
                      <script type="text/javascript">
                      $(document).ready(function () { $("#input19").keyup(function () { var value = $(this).val(); $("#input20").val(value); }); }); </script>
                    </div>
                        <div class="form-group">
                        <label> Gambaran Umum</label>
                        <input class=" form-control name_list" type = "text" placeholder="" id="input21" class="form-control" name="gambaranumum" value="<?= set_value('gambaranumum');?>tes">
                        <script type="text/javascript">
                        $(document).ready(function () { $("#input21").keyup(function () { var value = $(this).val(); $("#input22").val(value); }); }); </script>
                      </div>
                      <div class="form-group">
                      <label> Penerima Manfaat</label>
                      <input class=" form-control name_list" type = "text" placeholder="" id="input23" class="form-control" name="penerimamanfaat" value="<?= set_value('penerimamanfaat');?>tes">
                      <script type="text/javascript">
                      $(document).ready(function () { $("#input23").keyup(function () { var value = $(this).val(); $("#input24").val(value); }); }); </script>
                      </div>
                      <div class="form-group">
                      <label> Strategi Pencapaian Keluaran</label>
                      <input class=" form-control name_list" type = "text" id="input25" placeholder="" class="form-control" name="pencapaian" value="<?= set_value('pencapaian');?>tes">
                      <script type="text/javascript">
                      $(document).ready(function () { $("#input25").keyup(function () { var value = $(this).val(); $("#input26").val(value); }); }); </script>
                      </div>

                      <div class="form-group">
                      <label> Tahapan</label>
                      <input class=" form-control name_list" id="input27" type = "text" placeholder="" class="form-control" name="tahapan" value="<?= set_value('tahapan');?>tes">
                      <script type="text/javascript">
                      $(document).ready(function () { $("#input27").keyup(function () { var value = $(this).val(); $("#input28").val(value); }); }); </script>
                      </div>
                      <hr>
                      <h4>Kurun Waktu Pencapaian Keluaran</h4>

                      <button type="button" id="btn_add_tor" class="btn btn-primary "
                          title="Add More" >Add
                          More</button>
                          <div class="row">
                      <div class="form-group col-lg-12 mb-2">
                      <div id="dynamic_field_tor">
                      <div class="row" id="first_row">
                      <div class="form-group">
                      <label> Rencana Aktivitas </label>
                      <input class=" form-control name_list" id="rencana1" type = "text" placeholder="" class="form-control" name="rencana_aktivitas1" value="">
                      <script>
                      $(document).ready(function () { $("#rencana1").keyup(function () { var value = $(this).val(); $("#rencanaA1").val(value); }); }); </script>
                      </script>
                      </div>
                      <div class="form-group">
                      <label> Bulan Pelaksanaan</label>
                      <input class="form-control name_list" type="number" max="12" id="bulan1" name="bulan1" value="">

                      <script>
                      $(document).ready(function () { $("#bulan1").keyup(function () { var value = $(this).val(); $("#bulanA1").val(value); console.log(value); }); }); </script>
                      </script>
                      </div>
                      <!-- <input type="hidden" name="update_lic_count" id="update_lic_count"
                          value="<?=!empty($user->lic_arr) ? count($user->lic_arr) : "1"?>"> -->
                    </div>

                    <input type="hidden" name="count_aktivitas" id="count_aktivitas" value="1">
                  </div>
                </div>

              </div>



                      <div class="form-group ">
                      <label> Biaya Yang Diperlukan</label>
                      <input class=" form-control name_list" id="input33" type = "text" placeholder="" class="form-control" name="biayator" value="<?= set_value('biayator');?>tes">
                      <script type="text/javascript">
                      $(document).ready(function () { $("#input33").keyup(function () { var value = $(this).val(); $("#input34").val(value); }); }); </script>
                    </div>

                        <div class="index-btn-wrapper">
                          <div id="ke1"class="index-btn" onclick="run(1, 2);">Next</div>
                        </div>
                    </div>

                      <div class="tab" id = "tab-2">
                        <h3>Rancangan Anggaran Biaya</h3>
                        <button type="button" id="btn_add_license" class="btn btn-primary add-btn-head mt-5"
                            title="Add More" style="float:right; margin-top: 20px; margin-bottom: 20px;">Add
                            More</button>
                            <div class="row">
                                <div class="form-group col-lg-12 mb-2">
                                    <div id="dynamic_field">
                                      <div class="row" id="first_row">

                                        <div class="form-group col-lg-2">
                                        <label> Kode/MAK </label>
                                        <select  name="kode1" class="form-control" value="<?= set_value('kode1');?>">
                                          <option selected>pilih</option>
                                          <?php foreach ($datkod as $row) : ?>
                                          <option value="<?= $row->kode_mak ?>"> <?= $row->kode_mak ?></option>
                                          <?php endforeach;       ?>
                                        </select>
                                        </div>
                                        <div class="form-group col-lg-4">
                                        <label> Rincian Komponen Biaya </label>
                                        <select id="rincian" name="rincian1" class="form-control">
                                          <option selected>pilih</option>
                                          <?php foreach ($datasbm as $row) : ?>
                                          <option value="<?= $row->nama_sbm ?>"> <?= $row->nama_sbm ?></option>
                                          <?php endforeach;       ?>
                                        </select>
                                        </div>
                                        <div class="form-group col-lg-2">
                                        <label> volume </label>
                                        <input id="volume1" class=" form-control name_list" type = "text" placeholder="" class="form-control" name="volume1" value="<?= set_value('volume1');?>">
                                        </div>
                                        <div class="form-group col-lg-3">
                                        <label> Satuan </label>
                                        <select id="satuan1" name="satuan1" class="form-control">
                                          <option selected>pilih</option>
                                          <?php foreach ($datasingkatan as $row) : ?>
                                          <option value="<?= $row->singkatan ?>"> <?= $row->singkatan ?></option>
                                          <?php endforeach;       ?>
                                        </select>
                                        </div>
                                        <div class="form-group col-lg-2">
                                        <label> Jumlah</label>
                                        <input id="jumlah1" class=" form-control name_list" type = "text"  class="form-control" name="jumlah1" value="<?= set_value('jumlah');?>">
                                        </div>
                                        <div class="form-group col-lg-3">
                                        <label> Satuan</label>
                                        <select id="satuandua1" name="satuandua1" class="form-control">
                                          <option selected>pilih</option>
                                          <?php foreach ($datasingkatan as $row) : ?>
                                          <option value="<?= $row->singkatan ?>"> <?= $row->singkatan ?></option>
                                          <?php endforeach;       ?>
                                        </select>
                                        </div>
                                        <div class="form-group col-lg-2">
                                        <label> Total</label>
                                        <input id="totalsatu1" class=" form-control name_list" type = "text" placeholder="" class="form-control" name="total1">
                                        </div>

                                        <div class="form-group col-lg-3">
                                        <label> Satuan Ukur</label>
                                        <select id="satukur1" name="satukur1" class="form-control">
                                          <option selected>pilih</option>
                                          <?php foreach ($datasingkatan as $row) : ?>
                                          <option value="<?= $row->singkatan ?>"> <?= $row->singkatan ?></option>
                                          <?php endforeach;       ?>
                                        </select>
                                        </div>
                                        <div class="form-group col-lg-2">
                                        <label> Biaya Satuan</label>
                                        <input id="nominal" class="form-control name_list" type = "number" placeholder="" class="form-control" name="biaya_satuan1">
                                        </div>
                                        <div class="form-group col-lg-4">
                                        <label> Total</label>
                                        <input id="hasilp" class=" form-control name_list" type = "text" placeholder="" class="form-control" name="totaldua1">
                                        </div>
                                    </div>
                                        <!-- <input type="hidden" name="update_lic_count" id="update_lic_count"
                                            value="<?=!empty($user->lic_arr) ? count($user->lic_arr) : "1"?>"> -->
                                    </div>
                                </div>
                                <input type="hidden" name="license_count" id="license_count" value="1">
                            </div>
                          <div class="index-btn-wrapper">
                            <div class="index-btn" onclick="run(2, 1);">Previous</div>
                            <div id="ke2" class="index-btn" onclick="run(2, 3);">Next</div>
                          </div>
                        </div>


                      <div class="tab" id = "tab-3">
                        <h3>File Pendukung</h3>

                        <div class="form-group">
                          <label>File TOR</label>
                          <input type="file" name="file_tor">
                          <?php if($this->session->flashdata('errortor')){ ?>
                            <small class=text-danger pl-3> <?php echo $this->session->flashdata('errortor');}?></small>
                        </div>

                      <div class="form-group">
                        <label>File RAB</label>
                        <input type="file" name="file_rab">
                        <?php if($this->session->flashdata('errorrab')){ ?>
                          <small class=text-danger pl-3> <?php echo $this->session->flashdata('errorrab');}?></small>
                      </div>

                      <div class="form-group">
                       <label>File Lainnya </label>
                       <input type="file" name="file_proposal">
                       <?php if($this->session->flashdata('errorlains')){ ?>
                         <small class=text-danger pl-3> <?php echo $this->session->flashdata('errorrab');}?></small>
                     </div>
                        <div class="index-btn-wrapper">
                          <div class="index-btn" onclick="run(3, 2);">Previous</div>
                          <div class="index-btn" onclick="run(3, 4);">Next</div>
                        </div>
                      </div>

                      <div class="tab" id = "tab-4">
                        <h3>Ditujukan Kepada</h3>

                        <label>Jenis Pengajuan</label>
                        <select class="form-control" name="jenis_pengajuan" id="jenis_pengajuan">
                          <option value="akademik">Akademik</option>
                          <option value="non-akademik"> Non-Akademik</option>
                        </select>

                        <div class="form-group col-lg-4" id="kemahasiswaan" style="display:none">
                        <label> kemahasiswaan </label>

                        <select id="" name="kemahasiswaan" class="form-control">
                          <option selected>pilih</option>
                          <?php foreach ($kemahasiswaan as $row) : ?>
                          <option value="<?= $row->name ?>"> <?= $row->name ?></option>
                          <?php endforeach;       ?>
                        </select>

                        </div>
                        <div class="form-group col-lg-4" id="kajur" style="display:none">
                        <label> Ketua Jurusan </label>
                        <select id="" name="kajur" class="form-control">
                          <option selected>pilih</option>
                          <?php foreach ($kajur as $row) : ?>
                          <option value="<?= $row->name ?>"> <?= $row->name ?></option>
                          <?php endforeach;       ?>
                        </select>
                        </div>
                        <div class="form-group col-lg-4" id="ppspm" >
                        <label> PPSPM </label>
                        <select id="" name="kemahasiswaan" class="form-control">
                          <option selected>pilih</option>
                          <?php foreach ($ppspm as $row) : ?>
                          <option value="<?= $row->name ?>"> <?= $row->name ?></option>
                          <?php endforeach;       ?>
                        </select>
                        </div>
                        <div class="form-group col-lg-4" id="ppk" >
                        <label> PPK </label>
                        <select id="" name="ppk" class="form-control">
                          <option selected>pilih</option>
                          <?php foreach ($ppk as $row) : ?>
                          <option value="<?= $row->name ?>"> <?= $row->name ?></option>
                          <?php endforeach;       ?>
                        </select>
                        </div>
                        <div class="index-btn-wrapper">
                          <div class="index-btn" onclick="run(4, 3);">Previous</div>
                          <button class = "index-btn" type="submit" name="submit" style = "background: blue;">Submit</button>
                        </div>
                        <?php
                          if(isset($id)){
                            $ta = $id->id_pengajuan;
                            $ta = $ta + 1; ?>
                            <input type="hidden" name="id_pengajuan" value="<?= $ta?>">
                        <?php  }
                          ?>
                        <?php echo form_close();?>

                      </div>


                </div>
              </div>
            </div>
