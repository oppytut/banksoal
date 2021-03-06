<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    
    <?php $this->load->view('admin/h-script') ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      
      <?php $this->load->view('admin/head') ?>
      
      <?php $this->load->view('admin/sidebar') ?>

      <?php $this->load->view('admin/content') ?>
      
      <?php $this->load->view('admin/foot') ?>

      <?php $this->load->view('admin/control-sidebar') ?>
      
    </div><!-- ./wrapper -->

    <?php $this->load->view('admin/b-script') ?>

  </body>
</html>
 
