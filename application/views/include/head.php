<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url() ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $title; ?></title>
    <link rel="icon" type="icon/png" alt="Logo Bangunan" title="Bangunan" href="<?php echo base_url('assets/images/.png'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style1.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-datepicker3.min.css'); ?>">
    <link href="https://cdn.datatables.net/1.10.8/css/dataTables.bootstrap.min.css" rel="stylesheet" />
</head>
<div class="main-panel">
    <div class="col-md-12">
        <?php if ($this->session->flashdata('gagal')) { ?>
            <div id="error" class="card-panel" style="background: #3D4242;color:#FFF;margin:20px 0;">
                <div  class="card-content">
                    <script type="text/javascript" charset="utf-8" >
                        $.toast({
                            heading: 'Warning',
                            text: "<?=$this->session->flashdata('gagal')?>",
                            position: 'top-right',
                            stack: false,
                            hideAfter: 5000, 
                            icon: 'warning'
                        });
                    </script>
                </div>
            </div>
        <?php }elseif($this->session->flashdata('sukses')){ ?>
            <div id="error" class="card-panel" style="background: #4CAF50;color:#FFF;margin:20px 0;">
                <div  class="card-content">
                    <script type="text/javascript" charset="utf-8" >
                        $.toast({
                            heading: 'Success',
                            text: "<?=$this->session->flashdata('sukses')?>",
                            position: 'top-right',
                            stack: false,
                            hideAfter: 5000, 
                            icon: 'success'
                        });
                    </script>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>