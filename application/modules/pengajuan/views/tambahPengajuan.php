<div class="col-12">
                <div class="card" >
                  <div class="card-body">
                    <?php
echo form_open_multipart('pengajuan/pengajuan/aksiPengajuan/', "enctype='multipart/form-data' id='edit_user'");
?>
                                          <h2 >PENGAJUAN KEGIATAN</h2>

                      <div align="center">
                        <span class="step" id = "step-1">1</span>
                        <span class="step" id = "step-2">2</span>
                        <span class="step" id = "step-3">3</span>
                        <span class="step" id = "step-4">4</span>
                        <span class="step" id = "step-5">5</span>
                      </div>

                      <div class="tab" id = "tab-1">
                        <h3>TOR / Rancangan Acuan Kerja</h3>
                        <div class="form-group">
                        <label> Kementrian</label>
                        <input class=" form-control name_list" type = "text" placeholder="" class="form-control" name="kementrian" value="<?= set_value('kementrian');?>">
                      </div>
                       <div class="form-group">
                      <label> Unit Eselon I/II</label>
                      <input class=" form-control name_list" type = "text" placeholder="" class="form-control" name="uniteselon" value="<?= set_value('uniteselon');?>">
                    </div>
                        <div class="form-group">
                        <label> Hasil (Outcome)</label>
                        <input class=" form-control name_list" type = "text" placeholder="" class="form-control" name="hasil" value="<?= set_value('hasil');?>">
                      </div>
                        <div class="form-group">
                        <label> Kegiatan</label>
                        <input class=" form-control name_list" type = "text" placeholder="" class="form-control" name="kegiatan_tor" value="<?= set_value('kegiatan_tor');?>">
                      </div>
                        <div class="form-group">
                        <label>Indikator Kinerja Kegiatan</label>
                        <input class=" form-control name_list" type = "text" placeholder="" class="form-control" name="indikator" value="<?= set_value('indikator');?>">
                        </div>
                        <div class="form-group">
                        <label> Keluaran (Output)</label>
                        <input class=" form-control name_list" type = "text" placeholder="" class="form-control" name="keluaran" value="<?= set_value('keluaran');?>">
                      </div>
                        <div class="form-group">
                        <label> Volume</label>
                        <input class=" form-control name_list" type = "text" placeholder="" class="form-control" name="volume" value="<?= set_value('volume');?>">
                      </div>
                        <div class="form-group">
                        <label> Kegiatan Pembelajaran</label>
                        <input class=" form-control name_list" type = "text" placeholder="" class="form-control" name="kegiatanpembelajaran" value="<?= set_value('kegiatanpembelajaran');?>">
                      </div>
                        <div class="form-group">
                        <label> Latar Belakang</label>
                        <input class=" form-control name_list" type = "text" placeholder="" class="form-control" name="latarbelakang_tor" value="<?= set_value('latarbelakang_tor');?>">
                      </div>
                      <div class="form-group">
                      <label> Dasar Hukum</label>
                      <input class=" form-control name_list" type = "text" placeholder="" class="form-control" name="dasarhukum" value="<?= set_value('dasarhukum');?>">
                    </div>
                        <div class="form-group">
                        <label> Gambaran Umum</label>
                        <input class=" form-control name_list" type = "text" placeholder="" class="form-control" name="gambaranumum" value="<?= set_value('gambaranumum');?>">
                      </div>
                      <div class="form-group">
                      <label> Penerima Manfaat</label>
                      <input class=" form-control name_list" type = "text" placeholder="" class="form-control" name="penerimamanfaat" value="<?= set_value('penerimamanfaat');?>">
                      </div>
                      <div class="form-group">
                      <label> Strategi Pencapaian Keluaran</label>
                      <input class=" form-control name_list" type = "text" placeholder="" class="form-control" name="pencapaian" value="<?= set_value('pencapaian');?>">
                      </div>
                      <h4>Tahapan, Waktu dan Tempat Pelaksanaan</h4>
                      <div class="form-group">
                      <label> Tahapan</label>
                      <input class=" form-control name_list" type = "text" placeholder="" class="form-control" name="tahapan" value="<?= set_value('tahapan');?>">
                      </div>
                      <div class="form-group">
                      <label> Waktu</label>
                      <input class=" form-control name_list" type = "text" placeholder="" class="form-control" name="waktutor" value="<?= set_value('waktutor');?>">
                      </div>
                      <div class="form-group">
                      <label> Tempat Pelaksanaan</label>
                      <input class=" form-control name_list" type = "text" placeholder="" class="form-control" name="tempat_pelaksanaan" value="<?= set_value('tempat_pelaksanaan');?>">
                      </div>
                      <hr>
                      <div class="form-group ">
                      <label> Biaya Yang Diperlukan</label>
                      <input class=" form-control name_list" type = "text" placeholder="" class="form-control" name="biayator" value="<?= set_value('biayator');?>">
                    </div>
                        <div class="index-btn-wrapper">
                          <div class="index-btn" onclick="run(1, 2);">Next</div>
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
                                        <input class=" form-control name_list" type = "text" class="form-control" name="kode1" value="<?= set_value('kode1');?>">
                                        </div>
                                        <div class="form-group col-lg-4">
                                        <label> Rincian Komponen Biaya</label>
                                        <input class=" form-control name_list" type = "text" placeholder="" class="form-control" name="rincian1" value="<?= set_value('rincian1');?>">
                                        </div>
                                        <div class="form-group col-lg-3">
                                        <label> Nominal</label>
                                        <input class=" form-control name_list" type = "text" placeholder="" class="form-control" name="nominal1" value="<?= set_value('nominal1');?>">
                                        </div>

                                        <div class="form-group col-lg-2">
                                        <label> volume </label>
                                        <input class=" form-control name_list" type = "text" placeholder="" class="form-control" name="volume1" value="<?= set_value('volume1');?>">
                                        </div>
                                        <div class="form-group col-lg-3">
                                        <label> Satuan </label>
                                        <select id="" name="satuan1" class="form-control">
                                          <option selected>pilih</option>
                                          <?php foreach ($datasingkatan as $row) : ?>
                                          <option value="<?= $row->singkatan ?>"> <?= $row->singkatan ?></option>
                                          <?php endforeach;       ?>
                                        </select>
                                        </div>
                                        <div class="form-group col-lg-2">
                                        <label> Jumlah</label>
                                        <input class=" form-control name_list" type = "text"  class="form-control" name="jumlah1" value="<?= set_value('jumlah');?>">
                                        </div>
                                        <div class="form-group col-lg-3">
                                        <label> Satuan</label>
                                        <select id="" name="satuandua1" class="form-control">
                                          <option selected>pilih</option>
                                          <?php foreach ($datasingkatan as $row) : ?>
                                          <option value="<?= $row->singkatan ?>"> <?= $row->singkatan ?></option>
                                          <?php endforeach;       ?>
                                        </select>
                                        </div>
                                        <div class="form-group col-lg-2">
                                        <label> Total</label>
                                        <input class=" form-control name_list" type = "text" placeholder="" class="form-control" name="total1">
                                        </div>

                                        <div class="form-group col-lg-3">
                                        <label> Satuan Ukur</label>
                                        <select id="" name="satukur1" class="form-control">
                                          <option selected>pilih</option>
                                          <?php foreach ($datasingkatan as $row) : ?>
                                          <option value="<?= $row->singkatan ?>"> <?= $row->singkatan ?></option>
                                          <?php endforeach;       ?>
                                        </select>
                                        </div>
                                        <div class="form-group col-lg-4">
                                        <label> Total</label>
                                        <input class=" form-control name_list" type = "text" placeholder="" class="form-control" name="totaldua1">
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
                            <div class="index-btn" onclick="run(2, 3);">Next</div>
                          </div>
                        </div>


                      <div class="tab" id = "tab-3">
                        <h3>File Pendukung</h3>

                         <div class="form-group">
                          <label>File Proposal</label>
                          <input type="file" name="file_proposal">
                        </div>

                      <div class="form-group">
                        <label>File RAB</label>
                        <input type="file" name="file_rab">
                      </div>

                      <div class="form-group">
                        <label>File TOR</label>
                        <input type="file" name="file_tor">
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
                        <input class=" form-control name_list" type = "text" placeholder="" class="form-control" name="kemahasiswaan">
                        </div>
                        <div class="form-group col-lg-4" id="kajur" style="display:none">
                        <label> Ketua Jurusan </label>
                        <input class=" form-control name_list" type = "text" placeholder="" class="form-control" name="kajur">
                        </div>
                        <div class="form-group col-lg-4" id="ppspm" >
                        <label> PPSPM </label>
                        <input class=" form-control name_list" type = "text" placeholder="" class="form-control" name="ppspm">
                        </div>
                        <div class="form-group col-lg-4" id="ppk" >
                        <label> PPK </label>
                        <input class=" form-control name_list" max="4000"type = "number" placeholder="" class="form-control" name="ppk">
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
