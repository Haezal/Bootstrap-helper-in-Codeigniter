Bootstrap-helper-in-Codeigniter
===============================
<code>
// in view file

<?php echo tbs_horizontal_form_open() ?>




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
</code>
