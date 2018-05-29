<hr>
    <div id="global">
      <div class="container-fluid">
        <div class="row cm-fix-height">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Tambah Pengguna</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="post" action="<?=base_url('admin/user/create') ?>">
                        <input type="hidden" name="<?=$csrf['name'] ?>" value="<?=$csrf['hash'] ?>">
                        <div class="form-group <?php if(!empty(form_error('surname')))echo "has-error"; ?>">
                            <label for="surname" class="col-sm-2 control-label">NAMA LENGKAP</label>
                            <div class="col-sm-10">
                                <input type="text" maxlength="100" minlength="1" class="form-control" required id="surname" name="surname" placeholder="namalengkap" value="<?php echo set_value('surname'); ?>">
                                <span class="help-block has-error"><?php echo form_error('surname'); ?></span>
                            </div>
                        </div>
                        <div class="form-group <?php if(!empty(form_error('username')))echo "has-error"; ?>">
                            <label for="username" class="col-sm-2 control-label">Username</label>
                            <div class="col-sm-10">
                                <input type="text" maxlength="100" minlength="1" class="form-control" required id="username" name="username" placeholder="username" value="<?php echo set_value('username'); ?>">
                                <span class="help-block has-error"><?php echo form_error('username'); ?></span>
                            </div>
                        </div>
                        <div class="form-group <?php if(!empty(form_error('email')))echo "has-error"; ?>">
                            <label for="email" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" maxlength="150" minlength="1" class="form-control" required id="email" name="email" placeholder="Email" value="<?php echo set_value('email'); ?>">
                                <span class="help-block has-error"><?php echo form_error('email'); ?></span>
                            </div>
                        </div>
                        <div class="form-group <?php if(!empty(form_error('password')))echo "has-error"; ?>">
                            <label for="password" class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" required id="password" name="password" placeholder="password" value="<?php echo set_value('password'); ?>">
                                <span class="help-block has-error"><?php echo form_error('password'); ?></span>
                            </div>
                        </div>
                        <div class="form-group <?php if(!empty(form_error('is_admin')))echo "has-error"; ?>">
                            <label for="is_admin" class="col-sm-2 control-label">Administrator</label>
                            <div class="col-sm-10">
                                <input type="checkbox" name="is_admin" id="is_admin" value=1>
                                <span class="help-block has-error"><?php echo form_error('is_admin'); ?></span>
                            </div>
                        </div>  
                        <div class="panel panel-default">
                            <div class="panel-heading">Akses</div>
                            <table class="table">
                                <thead>
                                    <tr class="success">
                                        <th><input type="checkbox" id="checkallaccess"></th>
                                        <th>Akses</th>
                                        <th>Menu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($dataakses as $akses) {
                                        # code...
                                    ?>
                                    <tr class="active">
                                        <th scope="row"><input type="checkbox" name="access[]" class="access" value="<?=$akses['access']?>"></th>
                                        <td><?=$akses['access']?></td>
                                        <td><?=$akses['TITLE']?></td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>                                              
                        <div class="form-group" style="margin-bottom:0">
                            <div class="col-sm-offset-2 col-sm-10 text-right">
                                <button type="reset" class="btn btn-default">Cancel</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
      <footer class="cm-footer"><span class="pull-right">&copy;</span></footer>
    </div>
    </div>
<script type="text/javascript">
    $('#checkallaccess').click(function(){
        if($('#checkallaccess').is(':checked')){
            $('.access').prop('checked', 'checked');
        }else{
            $('.access').prop('checked', '');
        }
    });
</script>
