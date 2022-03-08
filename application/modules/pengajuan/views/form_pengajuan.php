<div class="col-12">
                <div class="card" >
                  <div class="card-body">
                    <div class="section-title mt-0">Text</div>
                    <?php
                    echo form_open_multipart("Pengajuan/PengajuanPP/save_detail") ;
                    ?>
                        <button type="button" id="btn_add_license" class="btn btn-primary add-btn-head mt-5"
                            title="Add More" style="float:right; margin-top: 20px; margin-bottom: 20px;">Add
                            More</button>
                        <div class="row">
                            <div class="form-group col-lg-12 mb-2">
                                <div id="dynamic_field">
                                    <div class="row" id="first_row">
                                        <div class="form-group col-lg-5">
                                            <input type="text" name="nama_akun" class="form-control" maxlength="35"
                                                placeholder="Enter name" class="form-control name_list" />
                                        </div>
                                        <div class="form-group col-lg-5">
                                            <input type="text" name="nominal" class="form-control" maxlength="35"
                                                placeholder="Enter Email" class="form-control name_list" />
                                        </div>
                                    </div>
                                    <!-- <input type="hidden" name="update_lic_count" id="update_lic_count"
                                        value="<?=!empty($user->lic_arr) ? count($user->lic_arr) : "1"?>"> -->
                                </div>
                            </div>
                            <input type="hidden" name="license_count" id="license_count" value="1">
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
              </div>
</div>
