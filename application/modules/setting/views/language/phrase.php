<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd ">
            <div class="panel-heading">
                <div class="btn-group">  
                    <a class="btn btn-primary" href="<?php echo base_url("setting/language") ?>"> <i class="fa fa-list"></i>  <?php echo display('language') ?> List </a> 
                </div> 
            </div>


            <div class="panel-body"> 

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td></td>
                            <td><?php echo $links; ?></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <?php echo  form_open('setting/language/addPhrase', ' class="form-inline" ') ?> 
                                    <div class="form-group">
                                        <label class="sr-only" for="addphrase"> Phrase Name</label>
                                        <input name="phrase[]" type="text" class="form-control" id="addphrase" placeholder="Phrase Name">
                                    </div>
                                      
                                    <button type="submit" class="btn btn-primary">Save</button>
                                <?php echo  form_close(); ?>
                            </td>
                        </tr>
                        <tr>
                            <th><i class="fa fa-th-list"></i></th>
                            <th>Phrase</th> 
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($phrases)) {?>
                            <?php $sl = 1 ?>
                            <?php foreach ($phrases as $value) {?>
                            <tr>
                                <td><?php echo  $sl++ ?></td>
                                <td><?php echo  $value->phrase ?></td>
                            </tr>
                            <?php } ?>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td></td>
                            <td><?php echo $links; ?></td>
                        </tr>
                    </tfoot>
                  </table>  
            </div>
         

        </div>
    </div>
</div>