<!DOCTYPE html>

<html lang="en">
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
	<!--<link href="<?=base_url()?>assetsAdmin/plugins/font-awesome/5.0/css/fontawesome-all.min.css" rel="stylesheet" />-->
	<link href="<?=base_url()?>assetsAdmin/plugins/animate/animate.min.css" rel="stylesheet" />
	<link href="<?=base_url()?>assetsAdmin/css/transparent/style.min.css" rel="stylesheet" />
	<link href="<?=base_url()?>assetsAdmin/css/transparent/style-responsive.min.css" rel="stylesheet" />
	<link href="<?=base_url()?>assetsAdmin/css/transparent/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="<?=base_url()?>assetsAdmin/plugins/parsley/src/parsley.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?=base_url()?>assetsAdmin/plugins/pace/pace.min.js"></script>
	
	<link href="<?=base_url()?>assetsAdmin/plugins/dropzone/min/dropzone.min.css" rel="stylesheet" />
         <script type="application/javascript" src="<?= base_url()?>assets/sweet.js"></script>
	<!-- ================== END BASE JS ================== -->
        <script type="text/javascript"> 
         $(document).ready(function() {
 $(function(){
    $('#add').trigger('change'); //This event will fire the change event. 
    $('#add').change(function(){
      var sec= $('#add').val();
      if(sec === "others"){
  
     $('#file').prop('disabled', true); 
     $("#file").attr('title', 'Signature is not Required');
  }else{
      $('#file').prop('disabled', false);
      $("#file").attr('title', 'Signature is Required');
  }
  });
 });
         });
      
      
      
      </script>
        <script type="text/javascript"> 
             $(document).ready(function() {
 $(function(){
          // $("#sign").css("display", "none");
       });
             });
            </script>
<?php// include'include/header.php';?>
		<!-- end #sidebar -->
		
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
				<li class="breadcrumb-item"><a href="javascript:;">Employee Management</a></li>
				<li class="breadcrumb-item active">Manage Employee..</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Employee Management <small>Manage Employee...</small></h1>
			<!-- end page-header -->
			
			<!-- begin row -->
			<div class="row">
				
				<div class="col-lg-2"></div>
                <!-- begin col-6 -->
			    <div class="col-lg-8">
			        <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="form-validation-1">
                        <!-- begin panel-heading -->
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Employee Management</h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
                            <form action="<?= base_url()?>AdminSideController/employeeSubmit" method="post" enctype="multipart/form-data" class="form-horizontal" data-parsley-validate="true" name="demo-form">
								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="fullname">Name :</label>
									<div class="col-md-8 col-sm-8">
                                                                            <input class="form-control" placeholder="Enter name" type="text" id="fullname" name="name" value="<?=$name?>" data-parsley-required="true"  />
									</div>
								</div>
                                                                <div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="fullname">Phone no. :</label>
									<div class="col-md-8 col-sm-8">
                                                                            <input class="form-control" placeholder="Enter Phone umber" type="text" id="fullname" name="phone" value="<?=$name?>" data-parsley-required="true"  />
									</div>
								</div>
                                                                <div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="fullname">Adress :</label>
									<div class="col-md-8 col-sm-8">
                                                                            <input class="form-control" type="text" placeholder="Enter Adress" id="fullname" name="adress" value="<?=$name?>" data-parsley-required="true"  />
									</div>
								</div>
                                                                <div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="fullname">Salary :</label>
									<div class="col-md-8 col-sm-8">
                                                                            <input class="form-control" type="text" placeholder="Enter salary" id="fullname" name="salary" value="<?=$name?>" data-parsley-required="true"  />
									</div>
								</div>
                                                               
                                                                <div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="fullname">Occupation type :</label>
									<div class="col-md-8 col-sm-8">
										<select id='add' name='type' class='form-control' style='background-color:#626263'required>
                                                                               <option>---Select Occupation---</option> 
                                                                               <option id="teacher" value="teacher">teacher</option> 
                                                                               <option id="principal" value="principal">Principal</option> 
                                                                               <option id="others" value="others">others</option> 
                                                                            </select>
									</div>
								</div>
<!--                                <div id="sign" class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="fullname">Username :</label>
									<div class="col-md-8 col-sm-8">
                                                                            <input class="form-control" id="file" type="file" id="fullname" name="image"   />
									</div>
								</div>-->
								
								
								
								
								
								<div class="form-group row m-b-0">
									<label class="col-md-4 col-sm-4 col-form-label">&nbsp;</label>
									<div class="col-md-8 col-sm-8">
										<button type="submit" class="btn btn-primary btn-success btn-block">Submit</button>
										
									</div>
									
								</div>
                            </form>
                        </div>
                        <!-- end panel-body -->
                        <!-- begin hljs-wrapper -->
                       <!-- <div class="hljs-wrapper">
                        <pre><code class="html">&lt;form data-parsley-validate="true"&gt;
  &lt;!-- required --&gt;
  &lt;input type="text" data-parsley-required="true" /&gt;

  &lt;!-- email --&gt;
  &lt;input type="email" data-parsley-type="email" /&gt;

  &lt;!-- url --&gt;
  &lt;input type="url" data-parsley-type="url" /&gt;

  &lt;!-- digits --&gt;
  &lt;input type="text" data-parsley-type="digits" /&gt;

  &lt;!-- number --&gt;
  &lt;input type="text" data-parsley-type="number" /&gt;

  &lt;!-- textarea range --&gt;
  &lt;textarea rows="4" data-parsley-range="[20,200]"&gt;&lt;/textarea&gt;
&lt;/form&gt;</code></pre>
						</div>-->
                        <!-- end hljs-wrapper -->
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-6 -->
				<div class="col-lg-2"></div>
            </div>
            <!-- end row -->
		</div>
		<!-- end #content -->
		
        <!-- begin theme-panel -->
<?php// include'include/footer.php';?>
	<!-- end page container -->
	
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
	<script src="<?=base_url()?>assetsAdmin/plugins/parsley/dist/parsley.js"></script>
	<script src="<?=base_url()?>assetsAdmin/plugins/highlight/highlight.common.js"></script>
	<script src="<?=base_url()?>assetsAdmin/js/demo/render.highlight.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	
        <?php

    if($this->session->flashdata('item')){
        $item=$this->session->flashdata('item');
    if($item == "yes"){ ?>
         <script> swal("Successfully added!!!", "Browse to add more..", "success");</script>
    <?php }else if ($item == "no"){ ?>
        <script>swal("opps something went wrong!!!", "Please try again...", "error");</script>
   <?php     
    }
    }

?>
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="<?=base_url()?>assetsAdmin/plugins/dropzone/min/dropzone.min.js"></script>

	<!-- ================== END PAGE LEVEL JS ================== -->
	<script>
		$(document).ready(function() {
			App.init();
			Highlight.init();
		});
	</script>
<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-53034621-1', 'auto');
	  ga('send', 'pageview');

	</script>
</body>

</html>

