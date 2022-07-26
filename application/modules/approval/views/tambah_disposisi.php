<div class="col-12">
                <div class="card" >
                  <div class="card-body">
                    <h4>Lembar Disposisi </h4>

                    <?php echo form_open('Approval/Disposisi/AksiTambahDispo/'); ?>
                    <div class="form-group col-lg-4">
                    <label>Sifat </label>
                    <select class="form-control" name="sifat">
                       <option selected>Pilih</option>
                        <option value="rahasia">Rahasia</option>
                        <option value="terbatas">Terbatas </option>
                        <option value="biasa">Biasa</option>
                        <option value="segera">Segera</option>
                        <option value="sangatsegera">Sangat Segera</option>
                    </select>
                    </div>

                    <div class="form-group col-lg-4">
                    <label>No. Agenda</label>
                    <input class=" form-control name_list" id="input33" type = "text" placeholder="" class="form-control" name="agenda" value="<?= set_value('agenda');?>">
                    </div>

                    <div class="form-group col-lg-4">
                    <label>No. Surat</label>
                    <input class=" form-control name_list" id="input33" type = "text" placeholder="" class="form-control" name="nosurat" value="<?= set_value('nosurat');?>">
                    </div>

                    <div class="form-group col-lg-4">
                    <label>Tanggal Surat</label>
                    <input class=" form-control name_list" id="input33" type = "text" placeholder="" class="form-control" name="tglsurat" value="<?= set_value('tglsurat');?>">
                    </div>

                    <div class="form-group col-lg-4">
                    <label>Asal Surat</label>
                    <input class=" form-control name_list" id="input33" type = "text" placeholder="" class="form-control" name="asalsurat" value="<?= set_value('asalsurat');?>">
                    </div>

                    <div class="form-group col-lg-4">
                    <label>Perihal</label>
                    <input class=" form-control name_list" id="input33" type = "text" placeholder="" class="form-control" name="perihal" value="<?= set_value('perihal');?>">
                    </div>

                    <div class="form-group col-lg-4">
                    <label>Diteruskan Kepada :</label>
                    <select class="form-control" name="diteruskan">
                        <option selected></option>
                        <option value="direktur">Direktur</option>
                        <option value="ppspm">Wadir II </option>
                        <option value="ppk">Pejabat Pembuat Komitmen</option>
                        <option value="Bagkeuangan">Bag Keuangan</option>
                        <option value="kajur">Ketua Jurusan</option>
                    </select>
                    </div>

                    <div class="form-group col-lg-4">
                    <label>Instruksi / Informasi</label>
                    <textarea row="5" class=" form-control name_list" id="input33" type = "text" placeholder="" class="form-control" name="informasi" value="<?= set_value('informasi');?>"></textarea>
                    </div>
                    <input type="hidden" name="id_pengajuan" value="<?= $id;?>">
                    <button class="btn btn-primary" type="submit" name="button"> Kirim</button>
                  </form>
                </div>
              </div>
</div>
