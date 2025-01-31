<link href="<?php echo base_url('application/modules/hrm/assets/css/update_canIfo_style.css') ?>" rel="stylesheet"
    type="text/css" />

<ul class="nav nav-tabs">
    <li class="active"><a href="#tab1" data-toggle="tab">Basic</a></li>
    <li><a href="#tab2" data-toggle="tab">Educaition</a></li>
    <li><a href="#tab3" data-toggle="tab">Working Experience</a></li>
</ul>
<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel">

            <div class="panel-body">
                <?php echo  form_open_multipart('hrm/Candidate/update_canifo_form/' . $basinfo->can_id) ?>
                <div class="tab-content">



                    <div class="tab-pane active" id="tab1">
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <?php echo img($basinfo->picture); ?>

                            </div>
                            <label for="your_id" class="col-sm-2 col-form-label"><?php echo display('your_id') ?>
                                *</label>
                            <div class="col-sm-4">
                                <input name="can_id" type="text" class="form-control" value="<?php $canid = $basinfo->can_id;
                                                                                                $id = $this->uri->segment(4);
                                                                                                if (!empty($canid)) {
                                                                                                    echo $canid;
                                                                                                } else {
                                                                                                    echo $id;
                                                                                                } ?>" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="first_name" class="col-sm-2 col-form-label"><?php echo display('first_name') ?>
                                *</label>
                            <div class="col-sm-4">
                                <input name="first_name" class="form-control" type="text"
                                    value="<?php echo $basinfo->first_name; ?>" id="first_name">
                            </div>
                            <label for="last_name" class="col-sm-2 col-form-label"><?php echo display('last_name') ?>
                            </label>
                            <div class="col-sm-4">
                                <input type="text" name="last_name" class="form-control" id="last_name"
                                    value="<?php echo $basinfo->last_name ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label"><?php echo display('email') ?> *</label>
                            <div class="col-sm-4">
                                <input name="email" class="form-control" type="email"
                                    value="<?php echo $basinfo->email; ?>" id="email">
                            </div>
                            <label for="phone" class="col-sm-2 col-form-label"><?php echo display('phone') ?> *</label>
                            <div class="col-sm-4">
                                <input type="text" name="phone" class="form-control" id="phone"
                                    value="<?php echo $basinfo->phone ?>">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="alter_phone"
                                class="col-sm-2 col-form-label"><?php echo display('alter_phone') ?></label>
                            <div class="col-sm-4">
                                <input name="alter_phone" class="form-control" type="text"
                                    value="<?php echo $basinfo->alter_phone; ?>" id="alter_phone">
                            </div>
                            <div class="form-group row">
                                <label for="ssn" class="col-sm-2 col-form-label"><?php echo display('ssn') ?> </label>
                                <div class="col-sm-4">
                                    <input name="ssn" class="form-control" type="text"
                                        value="<?php echo $basinfo->ssn; ?>" id="ssn">
                                </div>
                            </div>
                            <label for="present_address"
                                class="col-sm-2 col-form-label"><?php echo display('present_address') ?> </label>
                            <div class="col-sm-4">
                                <textarea name="present_address" class="form-control"
                                    id="present_address"><?php echo $basinfo->present_address ?></textarea>
                            </div>
                            <label for="parmanent_address"
                                class="col-sm-2 col-form-label"><?php echo display('parmanent_address') ?></label>
                            <div class="col-sm-4">
                                <textarea name="parmanent_address" class="form-control"
                                    id="parmanent_address"><?php echo $basinfo->parmanent_address ?></textarea>
                            </div>
                        </div>
                        <div class="form-group row">

                            <label for="state" class="col-sm-2 col-form-label"><?php echo display('state') ?> </label>
                            <div class="col-sm-4">
                                <?php echo form_dropdown('state', $country_list, (!empty($basinfo->state) ? $basinfo->state : ""), ' class="form-control"') ?>
                            </div>

                            <label for="city" class="col-sm-2 col-form-label"><?php echo display('city') ?> </label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="city" value="<?php echo $basinfo->city ?>"
                                    name="city" placeholder="City">
                            </div>
                        </div>

                        <div class="form-group row">

                            <label for="zip_code" class="col-sm-2 col-form-label"><?php echo display('zip_code') ?>
                            </label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" value="<?php echo $basinfo->zip ?>"
                                    id="zip_code" name="zip_code" placeholder="<?php echo display('zip_code') ?>">
                            </div>

                            <label for="change_image"
                                class="col-sm-2 col-form-label"><?php echo display('change_image') ?></label>
                            <div class="col-sm-4">
                                <input type="file" name=" picture" class="form-control"
                                    placeholder="<?php echo display('picture') ?>" id="picture">
                            </div>
                        </div>


                        <input type="hidden" name="picture" value="<?php echo $basinfo->picture ?>">
                        <div class="form-group text-right">
                            <a class="btn btn-primary btnNext"><?php echo display('next'); ?></a>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab2">


                        <input type="hidden" name="can_id" class="form-control" placeholder="<?php $canid = $basinfo->can_id;
                                                                                                $id = $this->uri->segment(4);
                                                                                                if (!empty($canid)) {
                                                                                                    echo $canid;
                                                                                                } else {
                                                                                                    echo $id;
                                                                                                } ?>">


                        <?php if (!empty($edu)) { ?>
                        <?php
                            foreach ($edu as $upedu) { ?>
                        <div class="form-group row">
                            <label for="degree_name"
                                class="col-sm-3 col-form-label"><?php echo display('degree_name') ?> *</label>
                            <div class="col-sm-9">
                                <input type="text" name="degree_name[]" class="form-control"
                                    placeholder="<?php echo display('degree_name') ?>" id="degree_name"
                                    value="<?php echo $upedu['degree_name'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="university_name"
                                class="col-sm-3 col-form-label"><?php echo display('university_name') ?> *</label>
                            <div class="col-sm-9">
                                <input type="text" name="university_name[]" class="form-control"
                                    placeholder="<?php echo display('university_name') ?>" id="university_name"
                                    value="<?php echo $upedu['university_name'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cgp" class="col-sm-3 col-form-label"><?php echo display('cgp') ?> *</label>
                            <div class="col-sm-9">
                                <input type="text" name="cgp[]" class="form-control"
                                    placeholder="<?php echo display('cgp') ?>" id="cgp"
                                    value="<?php echo $upedu['cgp'] ?>">
                            </div>
                        </div>

                        <?php
                            } ?>
                        <?php
                        } ?>

                        <div class="form-group row">
                            <label for="comments" class="col-sm-3 col-form-label"><?php echo display('comments') ?>
                            </label>
                            <div class="col-sm-9">
                                <textarea name="comments" class="form-control"
                                    placeholder="<?php echo display('comments') ?>"
                                    id="comments"><?php echo $basinfo->comments ?></textarea>
                            </div>
                        </div>
                        <div class="form-group text-right">
                            <a class="btn btn-primary btnPrevious"><?php echo display('previous'); ?></a>
                            <a class="btn btn-primary btnNext"><?php echo display('next'); ?></a>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab3">

                        <input type="hidden" name="can_id" value="<?php $canid = $basinfo->can_id;
                                                                    $id = $this->uri->segment(4);
                                                                    if (!empty($canid)) {
                                                                        echo $canid;
                                                                    } else {
                                                                        echo $id;
                                                                    } ?>">


                        <?php if (!empty($work)) { ?>
                        <?php
                            foreach ($work as $wrk) { ?>

                        <div class="form-group row">
                            <label for="company_name"
                                class="col-sm-3 col-form-label"><?php echo display('company_name') ?> *</label>
                            <div class="col-sm-9">
                                <input type="text" name="company_name[]" class="form-control"
                                    placeholder="<?php echo display('company_name') ?>" id="company_name"
                                    value="<?php echo $wrk->company_name ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="working_period"
                                class="col-sm-3 col-form-label"><?php echo display('working_period') ?> *</label>
                            <div class="col-sm-9">

                                <input type="text" name="working_period[]" class="  daterange form-control"
                                    placeholder="<?php echo display('working_period') ?>" id="working_period"
                                    value="<?php echo $wrk->working_period ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="duties" class="col-sm-3 col-form-label"><?php echo display('duties') ?>
                                *</label>
                            <div class="col-sm-9">
                                <input type="text" name="duties[]" class="form-control"
                                    placeholder="<?php echo display('duties') ?>" id="duties"
                                    value="<?php echo $wrk->duties ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="supervisor" class="col-sm-3 col-form-label"><?php echo display('supervisor') ?>
                                *</label>
                            <div class="col-sm-9">
                                <input type="text" name="supervisor[]" class="form-control"
                                    placeholder="<?php echo display('supervisor') ?>" id="supervisor"
                                    value="<?php echo $wrk->supervisor ?>">
                            </div>
                        </div>

                        <?php
                            } ?>
                        <?php
                        } ?>

                        <div class="form-group text-right">
                            <a class="btn btn-primary btnPrevious"><?php echo display('previous'); ?></a>
                            <button type="submit" class="btn btn-success"><?php echo display('update') ?></button>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>
<?php echo form_close() ?>
<script src="<?php echo base_url('application/modules/hrm/assets/js/caninfo.js'); ?>" type="text/javascript"></script>