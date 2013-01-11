Bootstrap-helper-in-Codeigniter
===============================

// in view file

<?php echo tbs_horizontal_form_open() ?>


/*
below code will create 
<div class="control-group">
  <label>Any Name</label>
  <div class="controls">
    <?php echo form_input('name') ?>
  </div>
</div>
*/

<?php echo tbs_horizontal_input(
    array(
        'name'=>'any_name', 
        'class'=>'span6'
    ), 
    array(
        'label'=>'Put your label text here...', 
        'desc'=>form_error('any_name')
    )
)?>

<?php echo tbs_form_close() ?>
