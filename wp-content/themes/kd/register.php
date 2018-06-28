<div id="registerArea">
    <div id="hand"></div>
    <?php echo do_shortcode('[contact-form-7 id="26" title="Contact form 1"]'); ?>
    
</div>
<?php
    if(isset($_REQUEST['btnRegister'])){
        $email = htmlspecialchars($_REQUEST['txtEmail']);
        $name =  htmlspecialchars($_REQUEST['txtName']);
        $phone =  htmlspecialchars($_REQUEST['txtPhone']);
        die($email);
        $db->queryNoResult('INSERT INTO k_register(email, name, phone, date) VALUES("'.$email.'", "'.$name.'", "'.$phone.'", "'.date('H:i:s d/m/Y').'")');
    }
?>