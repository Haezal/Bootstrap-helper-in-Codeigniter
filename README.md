Bootstrap-helper-in-Codeigniter
===============================


Muat turun fail MY_form_helper.php dan MY_html_helper.php dan masukkan ke dalam folder application/helpers/

Ianya akan di load secara auto oleh CodeIgniter


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
