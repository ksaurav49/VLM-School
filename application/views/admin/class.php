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
	<!--<link href="<?=base_url()?>assetsAdmin/plugins/font-awesome/5.0/css/fontawesome-all.min.css" rel="stylesheet" />-->
	<link href="<?=base_url()?>assetsAdmin/plugins/animate/animate.min.css" rel="stylesheet" />
	<link href="<?=base_url()?>assetsAdmin/css/transparent/style.min.css" rel="stylesheet" />
	<link href="<?=base_url()?>assetsAdmin/css/transparent/style-responsive.min.css" rel="stylesheet" />
	<link href="<?=base_url()?>assetsAdmin/css/transparent/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?=base_url()?>assetsAdmin/plugins/pace/pace.min.js"></script>
        <script type="application/javascript" src="assets/sweet.js"></script>
       
    
     
      <script type="text/javascript">
    $(document).ready(function() {
        $('#ajax').click(function() {  
    var fname = $("#class").val();
    var fee = $("#fee").val();
    //alert("jkghgf");
    if(fname === "" || fee === ""){
        if(fname === "" && fee === ""){
            $("#class").css("borderColor", "red");
        $("#class").focus();
   
         $("#fee").css("borderColor", "red");
        $("#fee").focus();
        }else if(fname === ""){
            $("#class").css("borderColor", "red");
        $("#class").focus();
        }else{
             $("#fee").css("borderColor", "red");
        $("#fee").focus();
        }
    }else{
               jQuery.ajax({
type: "POST",
url: "<?php echo base_url(); ?>" + "AdminSideController/class_submit",
dataType: 'json',
data: {class: fname,fee: fee},
 error: function(res) {
              alert('Something is wrong');
           },
success: function(res) {
if (res)
{   
    swal("New Class Added!", "Manage sections now!!!", "success");
}
}
});
        
    }
    });
    });

 </script>
 
       <script type="text/javascript">
    $(document).ready(function() {
        $('#sectionSubmit').click(function() {  
    var fname = $("#selectClass").val();
    var fee = $("#section").val();
    if(fname === "" || fee === ""){
        if(fname === "" && fee === ""){
            $("#selectClass").css("borderColor", "red");
        $("#selectClass").focus();
   
         $("#section").css("borderColor", "red");
        $("#section").focus();
        }else if(fname === ""){
            $("#selectClass").css("borderColor", "red");
        $("#selectClass").focus();
        }else{
             $("#section").css("borderColor", "red");
        $("#section").focus();
        }
    }else{
               jQuery.ajax({
type: "POST",
url: "<?php echo base_url(); ?>" + "AdminSideController/section_submit",
dataType: 'json',
data: {class: fname,fee: fee},
 error: function(res) {
              alert('Something is wrong');
           },
success: function(res) {
if (res)
{   
    swal("New Section Added to class!", "Manage now!!!", "success");
}
}
});
        
    }
    });
    });

 </script>
 <script type="text/javascript">
     $(document).ready(function() {
 $(function(){
    $('#secClass').trigger('change'); //This event will fire the change event. 
    $('#secClass').change(function(){
      
      var id= $('#secClass').val();
      var sec= $('#add').val();
      
      var displayResources = $('#display-resources');
      jQuery.ajax({
type: "POST",
url: "<?php echo base_url(); ?>" + "AdminSideController/ajClass",
//dataType: 'json',
data: {class: id},
 error: function(res) {
              alert('Something is wrong');
           },
success: function(res) {
if (res)
{   
     
                                                                                        
   var obj = $.parseJSON(res);      
					var result = "<option>---Select Section---</option>"
        
        $.each(obj, function() {
				    	result = result + "<option value='"+this['section']+"'>" + this['section']  + "</option>";
				    });
                                    //result = result + "</select>"
                                    $("#add").html(result);
        
        
       
       // document.getElementById("k").innerHTML = txt;
    //$( '#k' ).html(e);
   // swal("New Class Added!", "Manage sections now!!!", "success");
}
}
});
      
    });
});
     });
 
 </script>
 <!-- ================== class teacher submit ================== -->
        <script type="text/javascript">
    $(document).ready(function() {
        $('#teacherSubmit').click(function() {  
            //alert("hello");
    var fname = $("#secClass").val();
    var fee = $("#add").val();
    var teacher = $("#classTeacher").val();
    alert(teacher);
     if(teacher === ""){
            $("#classTeacher").css("borderColor", "red");
        $("#classTeacher").focus();
        
    }else{
               jQuery.ajax({
type: "POST",
url: "<?php echo base_url(); ?>" + "AdminSideController/teacher_submit",
dataType: 'json',
data: {class: fname,fee: fee,teacher: teacher},
 error: function(res) {
              alert('Something is wrong');
           },
success: function(res) {
if (res)
{   
    swal("Class Teacher assinged", "Manage sections now!!!", "success");
}
}
});
        
    }
    });
    });
    </script>
    
    
    
    
    
    <!-- ================== class subject submit ================== -->
        <script type="text/javascript">
    $(document).ready(function() {
        $('#subjectSubmit').click(function() {  
            //alert("hello");
    var fname = $("#subjectClass").val();
    var fee = $("#subject").val();
   // var teacher = $("#classTeacher").val();
    
     if(fee === ""){
            $("#subject").css("borderColor", "red");
        $("#subject").focus();
        
    }else{
               jQuery.ajax({
type: "POST",
url: "<?php echo base_url(); ?>" + "AdminSideController/subject_submit",
dataType: 'json',
data: {class: fname,fee: fee},
 error: function(res) {
              alert('Something is wrong');
           },
success: function(res) {
if (res)
{   
    swal("Subject added to class", "Manage now!!!", "success");
}
}
});
        
    }
    });
    });
    </script>

    
    <script type="text/javascript">
    $(document).ready(function() {
        $('#sessionSubmit').click(function() {  
            //alert("hello");
    var fname = $("#session").val();
   
   // var teacher = $("#classTeacher").val();
    
     if(fname === ""){
            $("#session").css("borderColor", "red");
        $("#session").focus();
        
    }else{
               jQuery.ajax({
type: "POST",
url: "<?php echo base_url(); ?>" + "AdminSideController/session_submit",
dataType: 'json',
data: {class: fname},
 error: function(res) {
              alert('Something is wrong');
           },
success: function(res) {
if (res)
{   
    swal("Session assinged", "Manage sections now!!!", "success");
}
}
});
        
    }
    });
    });
    </script>
	<!-- ================== END BASE JS ================== -->
<?php// include'include/header.php';?>
		<!-- end #sidebar -->
		
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item" ><a href="javascript:;">Home</a></li>
				<li class="breadcrumb-item"><a href="javascript:;">Class Desk</a></li>
				<li class="breadcrumb-item active">Class Managment...</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
                        <h1 class="page-header">Class Desk <small></small></h1>
			<!-- end page-header -->
			
			<!-- begin row -->
			<div class="row">
			    <!-- begin col-6 -->
				<div class="col-lg-6">
			     
			        <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="table-basic-6">
                    	<!-- begin panel-heading -->
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Add New Class</h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
                            								
                              
								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="fullname">New Class * :</label>
									<div class="col-md-8 col-sm-8">
										<input class="form-control" type="text" id="class"  name="category"  placeholder="Enter New Category Name" data-parsley-required="true" />
                                                                                
									</div>
                                                                    </div>
                                                                <div class="form-group row m-b-15" >
									<label  class="col-md-4 col-sm-4 col-form-label" for="fullname">Enter Fee</label>
									<div class="col-md-8 col-sm-8">
                                                                            <input class="form-control" type="text" id="fee"  name="category"  placeholder="Enter Fee" data-parsley-required="true" />
									</div>
								</div>
                              
                                                                
								
								<div class="form-group row m-b-0">
									<label class="col-md-4 col-sm-4 col-form-label">&nbsp;</label>
									<div class="col-md-8 col-sm-8">
                                                                            <button id="ajax" class="btn btn-primary btn-block">Submit</button>
										<!--<button id="btn1"  class="btn btn-primary btn-block">Submit</button>-->
									</div>
								</div>
                               
                           
                        </div>
                        <!-- end panel-body -->

                        <!-- end hljs-wrapper -->
                    </div>
                    <!-- end panel -->
				</div>
			    <!-- begin col-6 -->
				<div class="col-lg-6">
			     
			        <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="table-basic-6">
                    	<!-- begin panel-heading -->
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Add Sections </h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
                            
								
								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="fullname">Select Class * :</label>
									<div class="col-md-8 col-sm-8">
										
										<select id="selectClass" class="form-control" style="background-color:#626263;"required>
											<option>---Select Class---</option>
                                                                                        <?php
                                                                                        $query=$this->db->query("select * from class where section='child'");
                                                                                        foreach ($query->result() as $row) {

                                                                                        ?>
                                                                                        <option  value="<?=$row->class_id?>"><?=$row->class?></option>
                                                                                        <?php } ?>
										
										</select>
									</div>
								</div>
								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="fullname">New Section * :</label>
									<div class="col-md-8 col-sm-8">
										<input class="form-control" id="section" type="text" id="fullname" name="category" placeholder="Enter New Section" data-parsley-required="true" />
									</div>
								</div>
								
								<div class="form-group row m-b-0">
									<label class="col-md-4 col-sm-4 col-form-label">&nbsp;</label>
									<div class="col-md-8 col-sm-8">
										<button id="sectionSubmit" class="btn btn-primary btn-block">Submit</button>
									</div>
								</div>
          
                        </div>
                        <!-- end panel-body -->

                        <!-- end hljs-wrapper -->
                    </div>
                    <!-- end panel -->
				</div>
                        </div>
                            <!-- class teacher -->
                            
                            <div class="row">
                                <!--<div class="col-lg-2"></div>-->
                            <div class="col-md-6">
			     
			        <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="table-basic-6">
                    	<!-- begin panel-heading -->
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Add/update class teacher </h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
                            
								
								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="fullname">Select Class * :</label>
									<div class="col-md-8 col-sm-8">
										
										<select id="secClass" class="form-control" style="background-color:#626263;"required>
											<option>---Select Class---</option>
                                                                                        <?php
                                                                                        $query=$this->db->query("select * from class where section='child'");
                                                                                        foreach ($query->result() as $row) {

                                                                                        ?>
                                                                                        <option  value="<?=$row->class_id?>"><?=$row->class?></option>
                                                                                        <?php } ?>
										
										</select>
									</div>
								</div>
                            
                            <div class="form-group row m-b-15">
									<label id="k" class="col-md-4 col-sm-4 col-form-label" for="fullname">Select Section * :</label>
                                                                        <div class="col-md-8 col-sm-8" >
                                                                            <select id='add' class='form-control' style='background-color:#626263'required>
                                                                               <option>---Select Section---</option> 
                                                                            </select>	
										
									</div>
								</div>
                            
                            
								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="fullname">Add/update class teaxcher * :</label>
									<div class="col-md-8 col-sm-8">
										<select id='classTeacher' class='form-control' style='background-color:#626263'required>
                                                                               <option>---Select Class teacher---</option> 
                                                                               <?php
                                                                               $r=$this->db->query("select * from employee where type='teacher'");
                                                                               foreach($r->result() as $row){
                                                                               
                                                                               ?>
                                                                               <option value="<?=$row->id?>
                                                                                       "><?=$row->name?></option> 
                                                                               <?php } ?>
                                                                            </select>
									</div>
								</div>
								
								<div class="form-group row m-b-0">
									<label class="col-md-4 col-sm-4 col-form-label">&nbsp;</label>
									<div class="col-md-8 col-sm-8">
										<button id="teacherSubmit" class="btn btn-primary btn-block">Submit</button>
									</div>
								</div>
          
                        </div>
                        <!-- end panel-body -->

                        <!-- end hljs-wrapper -->
                    </div>
                    <!-- end panel -->
				</div>
                                <!--now subject-->
                            <div class="col-lg-6">
			     
			        <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="table-basic-6">
                    	<!-- begin panel-heading -->
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Add Subjects For particular classes</h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
                            
								
								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="fullname">Select Class * :</label>
									<div class="col-md-8 col-sm-8">
										
										<select id="subjectClass" class="form-control" style="background-color:#626263;"required>
											<option>---Select Class---</option>
                                                                                        <?php
                                                                                        $query=$this->db->query("select * from class where section='child'");
                                                                                        foreach ($query->result() as $row) {

                                                                                        ?>
                                                                                        <option  value="<?=$row->class_id?>"><?=$row->class?></option>
                                                                                        <?php } ?>
										
										</select>
									</div>
								</div>
								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="fullname">Add New Subject * :</label>
									<div class="col-md-8 col-sm-8">
										<input class="form-control" id="subject" type="text" id="fullname" name="category" placeholder="Enter New Subject" data-parsley-required="true" />
									</div>
								</div>
								
								<div class="form-group row m-b-0">
									<label class="col-md-4 col-sm-4 col-form-label">&nbsp;</label>
									<div class="col-md-8 col-sm-8">
										<button id="subjectSubmit" class="btn btn-primary btn-block">Submit</button>
									</div>
								</div>
          
                        </div>
                        <!-- end panel-body -->

                        <!-- end hljs-wrapper -->
                    </div>
                    <!-- end panel -->
				</div>
                                
                            
                            </div>
                            <div class="row">
                                <div class="col-md-6">
			     
			        <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="table-basic-6">
                    	<!-- begin panel-heading -->
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Add/Update Seesion </h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
                            
								
								
                            
                            
                            
								<div class="form-group row m-b-15">
									<label class="col-md-4 col-sm-4 col-form-label" for="fullname">New Session * :</label>
									<div class="col-md-8 col-sm-8">
										<input class="form-control" id="session" type="text" id="fullname" name="category" placeholder="Enter New Session" data-parsley-required="true" />
									</div>
								</div>
								
								<div class="form-group row m-b-0">
									<label class="col-md-4 col-sm-4 col-form-label">&nbsp;</label>
									<div class="col-md-8 col-sm-8">
										<button id="sessionSubmit" class="btn btn-primary btn-block">Submit</button>
									</div>
								</div>
          
                        </div>
                        <!-- end panel-body -->

                        <!-- end hljs-wrapper -->
                    </div>
                    <!-- end panel -->
				</div>
                            </div>
                            
                            
                            
			</div>
	
	
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
	<script src="<?=base_url()?>assetsAdmin/plugins/highlight/highlight.common.js"></script>
	<script src="<?=base_url()?>assetsAdmin/js/demo/render.highlight.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	<script>
		$(document).ready(function() {
			App.init();
			Highlight.init();
		});
	</script>
       
	
</body>


</html>

