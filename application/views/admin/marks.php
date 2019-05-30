
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
    $('#term').trigger('change'); //This event will fire the change event. 
    $('#term').change(function(){
      
      var id= $('#term').val();
      var sec= $('#add').val();
      
      var displayResources = $('#display-resources');
      jQuery.ajax({
type: "POST",
url: "<?php echo base_url(); ?>" + "AdminSideController/ajterm",
//dataType: 'json',
data: {class: id},
 error: function(res) {
              alert('Something is wrong');
           },
success: function(res) {
if (res)
{   
     
                                                                                        
   var obj = $.parseJSON(res);      
					var result = "<option>---Examination Type---</option>"
        
        $.each(obj, function() {
				    	result = result + "<option value='"+this['term']+"'>" + this['term']  + "</option>";
				    });
                                    //result = result + "</select>"
                                    $("#examType").html(result);
}
}
});
      
    });
});
     });
 
 </script>
        
        
<?php// include'include/header.php';?>
		<!-- end #sidebar -->
		
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="javascript:;">VLM</a></li>
				<li class="breadcrumb-item"><a href="javascript:;">Marks Management</a></li>
				<li class="breadcrumb-item active">Manage Marks</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Marks Managment <small>Manage Marks...</small></h1>
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
                            <h4 class="panel-title">Manage Marks..</h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
                           
                            <form action="<?= base_url()?>AdminSideController/marksSubmit" method="post" enctype="multipart/form-data" class="form-horizontal" data-parsley-validate="true" name="demo-form">
                                
								
                               <?php
                               $id=$this->uri->segment(2);
                                   $i=1;
                                   $r= $this->db->query("select * from student where admissionno='$id'");
                                   foreach ($r->result() as $row)
                                    {
                                       $name=$row->name;
                                       $status=$row->status;
                                        $cla=$row->class;
                                        $section=$row->section;
                                        $s= $this->db->query("select * from class where class_id='$cla'");
                                   foreach ($s->result() as $ro)
                                    {
                                   $class=$ro->class;
                                   $subject=$ro->subject;
                                    }
                                   
                                    $rs= $this->db->query("select * from class where class='$cla'");
                                   foreach ($rs->result() as $rows)
                                    {
                                   
                                    }
                                   ?>
                                
                                                                <div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="fullname">Name :</label>
									<div class="col-md-8 col-sm-8">
                                                                            <input class="form-control" type="text" value="<?=$name?>"  id="fullname" name="name"  data-parsley-required="true" readonly  />
									</div>
								</div>
                                
									
									
                                                                            <input class="form-control" type="hidden" value="<?=$id?>"  id="fullname" name="adno"  data-parsley-required="true"   />
									
								
                                
                                                                <div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="fullname">Class :</label>
									<div class="col-md-8 col-sm-8">
                                                                            <input class="form-control" type="text" value="<?=$class?>" id="fullname" name="class"  data-parsley-required="true" readonly  />
									</div>
								</div>
                                                                <div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="fullname">Section :</label>
									<div class="col-md-8 col-sm-8">
                                                                            <input class="form-control" type="text" value="<?=$section?>" id="fullname" name="section"  data-parsley-required="true" readonly  />
									</div>
								</div>
                                <?php } ?>     
                                
                                
                                <div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="fullname">Select Term :</label>
									<div class="col-md-8 col-sm-8">
                                                                            <select id="term" name="term" class="form-control" style="background-color:#626263;"required>
											<option>---Select Term---</option>
                                                                                        <option value="TERM1">TERM - |</option>
                                                                                        <option value="TERM2">TERM - ||</option>
                                                                            </select>
									</div>
								</div>
                                                                            
                                                                <div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="fullname">Examination Type. :</label>
									<div class="col-md-8 col-sm-8">
                                                                            <select id="examType" name="type" class="form-control" style="background-color:#626263;"required>
											<option>---Examination Type---</option>
                                                                                        
                                                                            </select>
									</div>
								</div>
                                                                         
                                                                            <?php
                                                                                        $rs=explode('/', $subject);
                                                                                        
                                                                                        $si=sizeof($rs);
                                                                                        for($i=0; $i<$si;$i=$i+1){
                                                                                        
                                                                                        ?>
                                                                <div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="fullname">Enter marks of <?=$rs[$i]?> :</label>
									<div class="col-md-8 col-sm-8">
                                                                            <input class="form-control" type="number" placeholder="Scored Marks" id="fullname" name="<?=$rs[$i]?>"  data-parsley-required="true"  />
									</div>
								</div>
                                                                             <?php
                                                                                        }
                                                                                        ?>
                                                                
                                                                
                                
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

