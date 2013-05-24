<?php echo doctype('xhtml1-trans'); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title><?php echo $titulo; ?></title>
        <link href="<?php echo base_url() . 'css/admin-styles.css'; ?>" type="text/css" rel="stylesheet" media="screen"/>
    </head>
    <body>
        <div id="container-login">
            <div id="form-login">
                <div id="errors">
                    <?php echo $error; ?>
                    <?php echo validation_errors(); ?>
                </div><!-- #errors -->
                <?php echo form_open(base_url() . 'restrito/home/login'); ?>
                <?php echo form_fieldset('Efetuar Login'); ?>

                <label for="login">Informe o seu Login:</label>
                <input type="text" name="login" id="login" value="<?php set_value('login'); ?>"/>

                <label for="senha">Informe a sua Senha:</label>
                <input type="password" name="senha" id="senha" value="<?php set_value('senha'); ?>"/>

                <input type="submit" name="logar" value="Logar"/>

                <?php echo form_fieldset_close(); ?>
                <?php echo form_close(); ?>
            </div><!-- #form-login -->
        </div><!-- #container -->
    </body>
</html>