<!DOCTYPE html>
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>VLM | Admin</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="<?=base_url()?>assetsAdmin/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
	<link href="<?=base_url()?>assetsAdmin/plugins/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?=base_url()?>assetsAdmin/plugins/animate/animate.min.css" rel="stylesheet" />
	<link href="<?=base_url()?>assetsAdmin/css/transparent/style.min.css" rel="stylesheet" />
	<link href="<?=base_url()?>assetsAdmin/css/transparent/style-responsive.min.css" rel="stylesheet" />
	<link href="<?=base_url()?>assetsAdmin/css/transparent/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="<?=base_url()?>assetsAdmin/plugins/jquery-jvectormap/jquery-jvectormap.css" rel="stylesheet" />
	<link href="<?=base_url()?>assetsAdmin/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />
    <link href="<?=base_url()?>assetsAdmin/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="<?=base_url()?>assetsAdmin/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
	<link href="<?=base_url()?>assetsAdmin/plugins/DataTables/extensions/ColReorder/css/colReorder.bootstrap.min.css" rel="stylesheet" />
	<link href="<?=base_url()?>assetsAdmin/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?=base_url()?>assetsAdmin/plugins/pace/pace.min.js"></script>
        <script type="application/javascript" src="<?= base_url()?>assets/sweet.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	
	<?php// include'include/header.php';?>
		<!-- end #sidebar -->
		
		<!-- begin #content -->
		
	
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="javascript:;">VLM</a></li>
				<li class="breadcrumb-item"><a href="javascript:;">Employee Management</a></li>
				<li class="breadcrumb-item active">Employee...</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Employee Table <small>Manage Employee...</small></h1>
			<!-- end page-header -->
			
			<!-- end page-header -->
			
			<!-- begin row -->
			<div class="row">
			    <!-- begin col-10 -->
			    <div class="col-lg-12">
			        <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <!-- begin panel-heading -->
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">VLM - Employee Management <span class="label label-success m-l-5 t-minus-1">NEW</span></h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
                            <table id="data-table-colreorder" class="table table-striped table-bordered m-b-0">
                                <thead>
                                    <tr>
                                    	<th width="9%">S.no</th>
                                        <th class="text-nowrap">Name</th>
                                        <!--<th class="text-nowrap">Email</th>-->
                                        
                                        <th class="text-nowrap">Phone</th>
                                        
                                        <th class="text-nowrap">Salary</th>
                                        
                                        <th class="text-nowrap">type</th>
                                        <th class="text-nowrap">Update</th>
                                        <th class="text-nowrap">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php
                                   $i=1;
                                   $r= $this->db->query("select * from employee");
                                   foreach ($r->result() as $row)
                                    {
                                       $name=$row->name;
                                       $status=$row->status;
        
                                   
                                   
                                   ?>
									<tr>
                                    	<td width="9%" class="f-s-600"><?=$i?></td>
                                        <td><?=$row->name?></td>
                                        
                                        <td><?=$row->phone?></td>
                                         
                                         <td><?=$row->type?></td>
                                         <td><?=$row->salary?></td>
                                        
										
                                                                                
                                                                                <td class="with-btn" nowrap>
                                                                                    <a href="<?= base_url()?>empup/<?=$row->id?>" class="btn btn-sm btn-primary width-60 m-r-2">Update</a>
                                                                                    
										</td>
                                                                                <td class="with-btn" nowrap>
                                                                                    <a href="<?= base_url()?>AdminSideController/empdl/<?=$row->id?>" class="btn btn-sm btn-primary width-60 m-r-2">Delete</a>
                                                                                    
										</td>
                                                                                
                                    </tr>
<?php $i++; } ?>
                                   
                                </tbody>
                            </table>
                        </div>
                        <!-- end panel-body -->
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-10 -->
            </div>
            <!-- end row -->
		</div>
		<!-- end #content -->
		<!-- end #content -->
<?php// include'include/footer.php';?>
	
		<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?=base_url()?>assetsAdmin/plugins/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?=base_url()?>assetsAdmin/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="<?=base_url()?>assetsAdmin/plugins/bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
	<!--[if lt IE 9]>
		<script src="<?=base_url()?>assetsAdmin/crossbrowserjs/html5shiv.js"></script>
		<script src="<?=base_url()?>assetsAdmin/crossbrowserjs/respond.min.js"></script>
		<script src="<?=base_url()?>assetsAdmin/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="<?=base_url()?>assetsAdmin/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?=base_url()?>assetsAdmin/plugins/js-cookie/js.cookie.js"></script>
	<script src="<?=base_url()?>assetsAdmin/js/theme/transparent.min.js"></script>
	<script src="<?=base_url()?>assetsAdmin/js/apps.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="<?=base_url()?>assetsAdmin/plugins/gritter/js/jquery.gritter.js"></script>
	<script src="<?=base_url()?>assetsAdmin/plugins/flot/jquery.flot.min.js"></script>
	<script src="<?=base_url()?>assetsAdmin/plugins/flot/jquery.flot.time.min.js"></script>
	<script src="<?=base_url()?>assetsAdmin/plugins/flot/jquery.flot.resize.min.js"></script>
	<script src="<?=base_url()?>assetsAdmin/plugins/flot/jquery.flot.pie.min.js"></script>
	<script src="<?=base_url()?>assetsAdmin/plugins/sparkline/jquery.sparkline.js"></script>
	<script src="<?=base_url()?>assetsAdmin/plugins/jquery-jvectormap/jquery-jvectormap.min.js"></script>
	<script src="<?=base_url()?>assetsAdmin/plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="<?=base_url()?>assetsAdmin/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script src="<?=base_url()?>assetsAdmin/js/demo/dashboard.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="<?=base_url()?>assetsAdmin/plugins/DataTables/media/js/jquery.dataTables.js"></script>
	<script src="<?=base_url()?>assetsAdmin/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
	<script src="<?=base_url()?>assetsAdmin/plugins/DataTables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
	<script src="<?=base_url()?>assetsAdmin/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
	<script src="<?=base_url()?>assetsAdmin/js/demo/table-manage-colreorder.demo.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="<?=base_url()?>assetsAdmin/plugins/isotope/jquery.isotope.min.js"></script>
  	<script src="<?=base_url()?>assetsAdmin/plugins/lightbox/js/lightbox.min.js"></script>
	<script src="<?=base_url()?>assetsAdmin/js/demo/gallery.demo.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
         <?php

    if($this->session->flashdata('item')){
        $item=$this->session->flashdata('item');
    if($item == "yes"){ ?>
         <script> swal("Successfully Deleted!!!", "Browse to add more..", "success");</script>
    <?php }else if ($item == "no"){ ?>
        <script>swal("opps something went wrong!!!", "Please try again...", "error");</script>
   <?php     
    }else{ ?>
        <script> swal("Successfully Updated!!!", "Browse to add more..", "success");</script>
  <?php  }
    }

?>
	
	<script>
		$(document).ready(function() {
			COLOR_BLACK_TRANSPARENT_2 = 'rgba(255,255,255,0.15)';
			COLOR_WHITE = '#333';
			App.init();
			Dashboard.init();
			
			
			TableManageColReorder.init();
		});
	</script>


 </body>

</html>

