<!DOCTYPE html>
<html lang="fr">
<head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/fr/admin.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/fr/uniform.default.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/fr/validationEngine.jquery.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/fr/jquery-ui-1.8.13.custom.css" />
        <script type="text/javascript" src="<?php echo base_url() ?>js/jquery-1.5.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>js/jquery-ui-1.8.11.custom.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>js/validation.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>js/validation-fr.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>js/jquery.uniform.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>js/admin.js"></script>
	<title>SwissTv admin</title>
</head>
<body>

    <div id="container">
        <?php echo $this->load->view('admin/partials/top'); ?>
        <?php echo $this->load->view('admin/partials/menu'); ?>
        <div id="content">
            <div id="infos_admin">
                <div id="infos_title">> Ajouter une annonce</div>
                <div id="infos_action"></div>
            </div>
            <?php if(isset($message)){?><div id="message_info"><?php echo $message; ?></div><?php } ?>
            <div id="form_add_admin">
                <?php
                $attributes = array('id' => 'add_annonce');
                echo form_open('admin/annonce', $attributes);?>
                

                    <label>Titre:</label><br/>
                    <input type="text" name="title" value="" id="title" class="validate[required]"/><br/><br/>
                    <label>Annonce FR:</label><br/>
                    <textarea name="annonce_fr" cols="80"></textarea><br/>
                    <label>Annonce DE:</label><br/>
                    <textarea name="annonce_de" cols="80"></textarea>

                <div id="submit_form"><input type="submit" name="add" id="add" value="Ajouter"/></div>
                <!--<div id="submit_form"><a href="#submit_form" id="add" >test</a></div>-->

                </form>
            </div>

        </div>
    </div>

</body>
</html>
