
<div class="row">
<div class="col-xs-6 col-xs-offset-3">
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title"><?php echo __('Login'); ?></h3>
        </div>
        <div class="box-body table-responsive">
    
        <?php echo $this->Form->create('User', array('role' => 'form')); ?>

            <fieldset>

                <div class="form-group">
                    <?php echo $this->Form->input('username', array('class' => 'form-control')); ?>
                </div><!-- .form-group -->
                <div class="form-group">
                    <?php echo $this->Form->input('password', array('class' => 'form-control')); ?>
                </div><!-- .form-group -->

                <?php echo $this->Form->submit('Login', array('class' => 'btn btn-large btn-primary')); ?>

            </fieldset>

        <?php echo $this->Form->end(); ?>

    </div><!-- /.form -->
        
</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->