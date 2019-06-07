<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>


    <!-- Bootstrap -->
    <link href="<?=$webroot?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?=$webroot?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?=$webroot?>vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="<?=$webroot?>vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="<?=$webroot?>vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <link href="<?=$webroot?>vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?=$webroot?>vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?=$webroot?>vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?=$webroot?>vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?=$webroot?>vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <!-- Custom styling plus plugins -->
    <link href="<?=$webroot?>build/css/custom.css" rel="stylesheet">
</head>
<body class="nav-md">
<!-- jQuery -->
<script src="<?=$webroot?>vendors/jquery/dist/jquery.min.js"></script>
<div class="container body">
    <div class="main_container">
        <?= $this->element('sidebar')?>
        <?= $this->element('top_bar')?>
        <?= $this->element('content')?>
        <?= $this->element('footer')?>
    </div>
</div>

<!-- Bootstrap -->
<script src="<?=$webroot?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?=$webroot?>vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="<?=$webroot?>vendors/nprogress/nprogress.js"></script>
<!-- bootstrap-wysiwyg -->
<script src="<?=$webroot?>vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
<script src="<?=$webroot?>vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
<script src="<?=$webroot?>vendors/google-code-prettify/src/prettify.js"></script>



<!-- Custom Theme Scripts -->
<script src="<?=$webroot?>build/js/custom.min.js"></script>
</body>

</html>
