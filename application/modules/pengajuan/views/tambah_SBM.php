<div class="col-12">
                <div class="card" >
                  <div class="card-body">
                    <div class="section-title mt-0">Text</div>

                    <?php
                    echo form_open_multipart("Pengajuan/PengajuanPP/save_pengajuan") ;
                    ?>
                        <button type="button" id="btn_add_license" class="btn btn-primary add-btn-head mt-5"
                            title="Add More" style="float:right; margin-top: 20px; margin-bottom: 20px;">Add
                            More</button>
                        <div class="row">
                            <div class="form-group col-lg-12 mb-2">
                                <div id="dynamic_field">
                                    <div class="row" id="first_row">
                                        <div class="form-group col-lg-3">
                                          <label> Kategori</label>
                                          <select id="id_kategori" name="id_kategori" class="form-control">
                                            <?php foreach ($datakategori as $row) : ?>
                                            <option value="<?= $row->kategori ?>"> <?= $row->kategori ?></option>
                                            <?php endforeach; ?>
                                          </select>
                                        </div>
                                        <div class="form-group col-lg-3">
                                          <label> Nama Akun</label>
                                          <select class="form-control" id="nama_akun" name="nama_akun"></select>
                                        </div>
                                        <div class="form-group col-lg-4">
                                          <label> Nominal</label>
                                          <input class="form-control" type="text" name="nominal" value="">
                                        </div>
                                        </div>

                    <div class="row">
                        <div class="card-footer">
                            <button type="submit" id="update_provider_btn" class="btn btn-success"
                                title="Submit">Submit</button>
                        </div>
                    </div>
                    <?php
                      echo form_close();
                    ?>
                    </div>
</div>
