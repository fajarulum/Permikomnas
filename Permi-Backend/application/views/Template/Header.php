<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Permikomnas Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url();?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url();?>assets/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="<?= base_url();?>assets/costum/css/style.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/js/pace/pace.min.css">
  <script src="<?= base_url();?>assets/js/pace/pace.min.js"></script>
  <script src="<?= base_url();?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url();?>assets/js/bootbox.min.js"></script>
  <script src="<?= base_url();?>assets/js/bootbox.locales.min.js"></script>

<script type="text/javascript">
  const BASE_URL = "<?= base_url();?>";
  const UUID = "<?= base64_encode($this->session->userdata('login')->ID_User."#".date('Y-m-d'));?>";
  function AlertShow(title,message){
    var dialog = bootbox.dialog({
    title: title,
    message: message
    });
                
    dialog.init(function(){
        setTimeout(function(){
            dialog.find('.bootbox-body').html(message);
        }, 3000);
    });
  }
</script>
</head>
<body id="page-top">

  <div id="wrapper">
