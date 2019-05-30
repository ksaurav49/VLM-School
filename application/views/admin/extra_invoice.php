<!DOCTYPE html>

<html lang="en">
	
<head>
	<meta charset="utf-8" />
	
	<title>MINI EDRP</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN PAGE LEVEL CSS STYLE ================== -->
	<link href="<?=base_url()?>mar/css/default/invoice-print.min.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL CSS STYLE ================== -->
	
	<link href="<?=base_url()?>mar/plugins/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" />
	<style type="text/css" media="print">
    .page
    {
		margin-top: 90mm;
     -webkit-transform: rotate(-270deg); 
     -moz-transform:rotate(-270deg);
     filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
		
    }
body {
  background: white; 
}
page {
  background: white;
  display: block;
  margin: 0 auto;
  margin-bottom: 0.5cm;
  box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
}

page[size="A4"][layout="portrait"] {
  width: 29.7cm;
  height: 32cm;  
}
@media print {
  body, page {
    margin: 0;
    box-shadow: 0;
  }
}

			
::-webkit-scrollbar {
    width: 7px;
}

/* Track */
::-webkit-scrollbar-track {
    box-shadow: inset 0 0 0 ; 
    border-radius: 10px;
	margin-left: 5px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
    background: transparent; 
    border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
    background: #3A3B3D; 
}
</style>
	</head>
	<body>	
		<div class="container-fluid">
			<span class="pull-right hidden-print">
						<a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-primary m-b-10 p-l-5"><i class="fa fa-print t-plus-1 fa-fw fa-lg"></i> Print</a>
						</span>
		<page size="A4" layout="portrait" style="margin-top:120mm;" >	
		<div class="row page" width="290mm" height="210mm">
			<div width="140mm" style="background-color:#FFFF99;  border:15px solid #FF000D; border-radius:10px 0px 0px 10px; padding:3px; padding-bottom:12px;">
				
						<h6 align="center" style="color:purple; margin-top:15px;">STUDENTS ARE ASSESSED ACCORDING TO THE FOLLOWING GRADES:</h6>
                    
						 
				<h2 align="center" style="color:white; background-color:red; margin:0 -5px 10px -5px; padding:10px;">GRADING SYSTEM</h2>
				
								<table  border="1" style="border-color:purple; margin:80px 30px;float:right;">
									<thead align="center" style="color:white; background-color:red; font-size:16px;">
										<tr>
											<th style="width:220px;font-size:20px;font-weight:bold;">PART -I & II</th>
										</tr>
										<tr>
											<th >CO-CURRICULAR AND<br> PERSONALITY DEVELOPMENT</th>
										</tr>
										<tr>
											<th style="width:80px;background-color:#000033; height:30px;"></th>
											
										</tr>
										<tr>
											<th style="width:130px;background-color:#FFFF99; color:black;">A+</th>
										</tr>
										<tr>
                                                                                    <th style="width:130px;background-color:#FFFF99;color:black;">A&nbsp;&nbsp;&nbsp;</th>
										</tr>
										<tr>
											<th style="width:130px;background-color:#FFFF99;color:black;">B+&nbsp;</th>
										</tr>
									</thead>
								</table>
				
				<h3 align="center" style="color:white; width:189px; background-color:red; margin:50px 0px 0px 30px; font-weight:bold;">PART - I</h3>
								<table  border="1" style="border-color:purple; margin:0 30px;">
									<thead align="center" style="color:white; background-color:red; font-size:14px;">
										<tr>
											<th style="width:130px;">MARKS RANGE</th>
											<th style="width:80px;">GRADE</th>
											
										</tr>
									</thead>
									<tbody align="center" style="color:black; font-weight:500; font-size:16px;">
										<tr>
											<td>91 - 100</td>
											<td>A1</td>
											
										</tr>
										<tr>
											<td>81 - 90</td>
											<td>A2</td>
											
										</tr>
										<tr>
											<td>71 - 80</td>
											<td>B1</td>
											
										</tr>
										<tr>
											<td>61 - 70</td>
											<td>B2</td>
											
										</tr>
										<tr>
											<td>51 - 60</td>
											<td>C1</td>
											
										</tr>
										<tr>
											<td>41 - 50</td>
											<td>C2</td>
											
										</tr>
										<tr>
											<td>33 - 40</td>
											<td>D</td>
											
										</tr>
										<tr>
											<td>21 - 32</td>
											<td>E1</td>
											
										</tr>
										<tr>
											<td>00 - 20</td>
											<td>E2</td>
											
										</tr>
										
										
									</tbody>
								</table>
							
								<table class="table-vertical" align="center" border="1" width="300" style="border-color:red;">
									<thead align="center" style="color:purple; font-size:16px;">
										<tr>
											<th style="color:white;background-color:red; font-weight:500">STUDENT PROFILE</th>
										</tr>
										<tr>
											<th style="font-size:12px;">Promotion is based on the day to day<br>work of the student throughout the year<br>all student will get only grades on the<br>basis of performance in formative and<br>summative assesment.</th>
										</tr>
										
										
									</thead>
							
								</table>
											
					<?php
                                $res=$this->db->query("select * from employee where type='principal'");
                                foreach ($res->result() as $va) {
                                    
                                $p=$va->sign;
                                
                                ?>						
				<p style="color:red;font-size:14px;font-weight:bold;margin-right:20px;" >
				<br>
                                
					<span style="height:35px;margin-left:395px;margin-top:20px;">PRINCIPAL</span><br>
					<span style="height:35px;font-size:16px;margin-left:342px;color:purple;margin-top:20px;"><?=$va->name?></span>
				
                                
				</p>
                                <?php  } ?>
                            </div>
			
			
			<div width="140mm" style="background-color:#FFFF99;  border:15px solid #FF000D; border-radius:0px 10px 10px 0px; padding:3px; padding-bottom:12px;">
				
				<h6 align="center" style="color:white;background-color:red; width:280px; border-radius:10px; margin-top:15px;margin-left:120px; padding:5px;">BOARD REGISTRATION NO. 10003</h6>
				
				
				<img src="<?=base_url()?>mar/img/Capture.PNG" align="center"  style="margin:5mm;"><br>
				
				<img src="<?=base_url()?>mar/img/logo/logo.png" align="center"  style="margin:-10mm 50mm 0 60mm; width:80px;"><br>
                                <img src="<?=base_url()?>mar/img/logo/PROGRESS CARD PIC.jpg" align="center" style="width:133mm; margin:2mm 0 0 5mm; ">
<!--				<img src="<?=base_url()?>mar/img/logo/PROGRESS CARD PIC.jpg" style="width:60mm; margin:-2mm 0 0 5mm; border-radius:0 50%;">
				
				<img src="<?=base_url()?>mar/img/logo/PROGRESS CARD PIC.jpg" style="width:60mm; margin:-2mm 5mm 0 0mm; float:right; border-radius:50% 0;">
				-->
				
				
				<h6 align="center" style="color:white;background-color:red; margin-top:15px;margin-left:-5px;margin-right:-5px; padding:5px 23px;">LAXMI MATA EDUCATIONAL SOCIETY, SUNDAR NAGAR, RAIPUR (C.G.)</h6>
						
				<img src="<?=base_url()?>mar/img/Untitled-1.png" align="center"  style="width:52mm;height:8mm;margin:0mm 0mm 0 45mm;background-color:red;border-radius:5px;box-shadow:.5px 1px .5px 1px;padding:1px;"><br>
                                <?php
                                 $sess= $this->db->query("select * from session");
                                   foreach ($sess->result() as $sessi)
                                    {
                                       $session=$sessi->year;
                                    }
                                
                                ?>
                                <h5 align="center" style="color:red; margin-top:5px; font-weight:700">SESSION&nbsp;&nbsp;<?=$session?></h5>
				
									<div class="row-md-4" style="background-color:white; font-style:verdana; border-radius:10px; height:60mm; margin:15px 3px 10px 10px; border:2px solid purple; width:139mm;">
										<div class="container-fluid">
											
										<h6 style="color:red;font-weight:700;">STUDENT PROFILE</h6>
                                                                                <?php
                                                                                  $id=$this->uri->segment(2);
                                   $i=1;
                                   $r= $this->db->query("select * from student where admissionno='$id'");
                                   foreach ($r->result() as $row)
                                    {
                                       $cla=$row->class;
                                       $claa=$row->section;
                                     $rs= $this->db->query("select * from class where class_id='$cla'");
                                   foreach ($rs->result() as $ro)
                                    {  
                                       $id=$ro->class_id;
//                                       $ct=$ro->classTeacher;
                                      $rss= $this->db->query("select * from class where class='$id' && section='$claa'");
                                   foreach ($rss->result() as $roo){
                                       $ct=$roo->classTeacher;
                                   }
                                      
                                        
                                    ?>
                                                                                
                                                                                
											
											
							<table style="float:right;">
									<thead style="color:purple; font-size:12px;">
										<tr>
											<th >FATHER'S NAME:</th>
											<th >&nbsp;MR. <?=$row->fname?></th>
											
											
										</tr>
										<tr>
											<th >SECTION:</th>
											<th >&nbsp;<?=$row->section?></th>
											
											
										</tr>
										<tr>
											<th >ADMISSION NO:</th>
											<th >&nbsp;<?=$row->formno?></th>
											
											
										</tr>
									</thead>
									
								</table>
												<table>
									<thead style="color:purple; font-size:12px;">
										<tr>
											<th >NAME OF STUDENT:</th>
											<th >&nbsp;<?=$row->name?></th>
											
											
										</tr>
										<tr>
                                                                                    <?php
                                                                                    $classs=$ro->class;
                                                                                    
                                                                                    ?>
											<th >CLASS:</th>
											<th >&nbsp;<?=$ro->class?></th>
											
											
										</tr>
										<tr>
											<th >DATE OF BIRTH:</th>
											<th >&nbsp;<?=$row->dob?></th>
											
											
										</tr>
									</thead>
									
								</table>
												<table>
									<thead style="color:purple; font-size:12px;">
										<tr>
											<th >RESIDENTIAL ADDRESS:</th>
											<th >&nbsp;<?=$row->padress?> , Pin-code: <?=$row->lpin?></th>
											
											
										</tr>
										<tr>
											<th >TELEPHONE/MOBILE NO. :</th>
											<th >&nbsp;<?=$row->mobile?></th>
											
											
										</tr>
									</thead>
									
								</table>
											
										<h6 style="color:red;font-weight:600;">ATTENDANCE</h6>
											
								<table style="float:right;">
									<thead style="color:purple; font-size:12px;">
										<tr>
											<th >WORKING DAYS:</th>
											<th >&nbsp;<input type="text" style=" width: 25px; border: none; background: transparent; align: center"></th>
										
									</thead>
									
								</table>
								<table>
									<thead style="color:purple; font-size:12px;">
										<tr>
											<th >TOTAL ATTENDENCE OF THE STUDENT:</th>
											<th >&nbsp;<input type="text" style=" width: 25px; border: none; background: transparent; align: center"></th>
											
											
										</tr>
										
									</thead>
									
								</table>
                                    <?php } }?>
											<p style="color:purple;font-size:12px;font-weight:bold;margin-top:20px;">
												SPECIMEN SIGNATURE OF PARENTS/GURDIAN : ___________________________________________
											</p>
											
										</div>
									
								

					</div>
				</div>
			</div>
	
         </page>
<page size="A4" layout="portrait" style="margin-top:120mm;" >
		<div class="row page" width="290mm" height="210mm">
			<div width="140mm" style="background-color:#FFFF99;  border:15px solid #FF000D; border-radius:10px 0px 0px 10px; padding:3px; padding-bottom:12px;">
				
						<h4 align="center" style="color:red; font-weight:bold;"> ACADEMIC PERFORMANCE:<br>SCHOLASTIC AREAS FINAL ASSESSMENT</h4>
                    
						 <br>
						<table  border="1" style="border-color:yellow" border="1">
									<thead align="center" style="background-color:red;color:#FFFF99; font-size:11px;">
										<tr>
											<th width="89">TERM</th>
											<th width="177">EVALUATION-I</th>
											<th width="177">EVALUATION-II</th>
											<th width="88">EVALUATION-III</th>
										</tr>
									</thead>
								</table>
						<ul style="list-style: none outside none; margin-top:-40px; font-size:12px; font-weight:bold">
							<li style="float: left;display: block;width: 120px;height: 40px;"></li>
							<li style="float: left;display: block;width: 80px;height: 40px;">TERM - I</li>
							<li style="float: left;display: block;width: 100px;height: 40px;"></li>
							<li style="float: left;display: block;width: 120px;height: 40px;">TERM - II</li>
							<li style="float: left;display: block;width: 80px;height: 40px;">TERM - III</li>
						</ul>
								<table  border="1" style="border-color:red">
									<thead align="center" style="color:red; font-size:10px;">
										<tr>
                                                                                    <th >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SUBJECT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                                                                        <?php
                                                                                           $a=$this->db->query("select term1 from evaluation");
                                                                                           
                                                                                            foreach ($a->result() as $row) {
                                                                                                if ($row->term1 != NULL){
                                                                                                    $rs=explode('/', $row->term1,2);
                                                                                                    $q=array("term" => $rs[0]);
                                                                                                    
                                                                                                  
                                                                                        
                                                                                        ?>
                                                                                    <th >&nbsp;<?=$rs[0]?>&nbsp;<br><?=$rs[1]?>%</th>
											
                                                                                            <?php  } } ?>
											<th >TOTAL<br>(F.A)<br>20%</th>
											
											<th >TOTAL<br>(F.A.+S.A.)<br>50%</th>
											
                                                                                        <?php
                                                                                           $a=$this->db->query("select term2 from evaluation");
                                                                                           
                                                                                            foreach ($a->result() as $row) {
                                                                                                if ($row->term2 != NULL){
                                                                                                    $rs=explode('/', $row->term2,2);
                                                                                                    $q=array("term" => $rs[0]);
                                                                                                    
                                                                                                  
                                                                                        
                                                                                        ?>
                                                                                        <th >&nbsp;<?=$rs[0]?>&nbsp;<br><?=$rs[1]?>%</th>
											
                                                                                            <?php  } } ?>
											<th >TOTAL<br>(F.A.)<br>20%</th>
											
											<th >TOTAL<br>(F.A.+S.A.)<br>50%</th>
											
											<th >GRAND<br>TOTAL<br>TERM I+II<br>100%</th>
											<th >GRADE</th>
											
										</tr>
									</thead>
									<tbody align="center" style="color:black; font-size:9px;">
                                                                            <?php
                                                                            $id=$this->uri->segment(2);
                                   $i=1;
                                   $r= $this->db->query("select * from student where admissionno='$id'");
                                   foreach ($r->result() as $row)
                                    {
                                       $name=$row->name;
                                       
                                        $cla=$row->class;
                                    }
                                        $s= $this->db->query("select * from class where class_id='$cla'");
                                   foreach ($s->result() as $ro)
                                    {
                                   $class=$ro->class;
                                   $subject=$ro->subject;
                                    
                                    }
                                    $array=array();
                                    $rs=explode('/', $subject);
                                    $q=array("term" => $rs[0]);
                    array_push($array, $q);
                                                                                        
                                                                                        $si=sizeof($rs);
                                                                                        for($i=0; $i<$si;$i=$i+1){
                                    
                                                                            
                                                                            ?>
										<tr>
											<td style="font-weight:bold;color:purple;"><?=$rs[$i]?></td>
                                                                                        <?php
                                                                                        $t=$this->db->query("select * from marks where term='TERM1' && adno='$id' && subject='$rs[$i]'");
                                                                                        foreach ($t->result() as $value) {
                                                                                            ?>
                                                                                        <td><?=$value->sm?></td>
                                                                                        
                                                                                      
                                                                                      <?php  }
                                                                                        $t=$this->db->query("select * from marks where term='TERM1' && adno='$id' && subject='$rs[$i]'");
                                                                                        foreach ($t->result() as $value) {
                                                                                      
                                                                                      
                                                                                       
                                                                                        if(strcmp($value->type,"FA-1")==0){
                                                                                            $e=$value->sm;
                                                                                        }if(strcmp($value->type,"FA-2")==0){
                                                                                            $f=$value->sm;
                                                                                        }else{
                                                                                            $g=$value->sm;
                                                                                        }
                                                                                        
                                                                                        
                                                                                     
                                                                                        }
                                                                                        
                                                                                        $per=(20/20)*($e+$f);
                                                                                        $pe=(30/30)*($g);
                                                                                        ?>
                                                                                        <td><?=$per?></td>
                                                                                        
                                                                                        
                                                                                        <td><?=$per+$pe?></td>
                                                                                        
                                                                                        <?php
                                                                                        $t=$this->db->query("select * from marks where term='TERM2' && adno='$id' && subject='$rs[$i]'");
                                                                                        foreach ($t->result() as $value) {
                                                                                            ?>
                                                                                        <td><?=$value->sm?></td>
                                                                                        
                                                                                        <?php
                                                                                        }
                                                                                        $t=$this->db->query("select * from marks where term='TERM2' && adno='$id' && subject='$rs[$i]'");
                                                                                        foreach ($t->result() as $value) {
                                                                                      
                                                                                      
                                                                                       
                                                                                        if(strcmp($value->type,"FA-3")==0){
                                                                                            $e=$value->sm;
                                                                                        }if(strcmp($value->type,"FA-4")==0){
                                                                                            $f=$value->sm;
                                                                                        }else{
                                                                                            $g=$value->sm;
                                                                                        }
                                                                                        
                                                                                        
                                                                                     
                                                                                        }
                                                                                        
                                                                                        $perce=(20/20)*($e+$f);
                                                                                        $pec=(30/30)*($g);
                                                                                        $t=$per+$pe+$perce+$pec;
                                                                                        ?>
                                                                                        <td><?=$perce?></td>
                                                                                        <td><?=$perce+$pec?></td>
											<td><?=$t?></td>
                                                                                        <?php
                                                                                        if($t>= 91){
                                                                                            $grade="A1";
                                                                                        }else if($t >=80.001 && $t <= 90){
                                                                                            $grade="A2";
                                                                                        }else if($t >=70.001 && $t <= 80){
                                                                                            $grade="B1";
                                                                                        }else if($t >=60.001 && $t <= 70){
                                                                                            $grade="B2";
                                                                                        }else if($t >=50.001 && $t <= 60){
                                                                                            $grade="C1";
                                                                                        }
                                                                                        else if($t >=40.001 && $t <= 50){
                                                                                            $grade="C2";
                                                                                        }else if($t >=33 && $t <= 40){
                                                                                            $grade="D";
                                                                                        }else if($t >=21 && $t <= 32.999){
                                                                                            $grade="E1";
                                                                                        }else if($t >=0 && $t <= 20.999){
                                                                                            $grade="E2";
                                                                                        }
                                                                                        ?>
                                                                                        <td><?=$grade?></td>
											
										</tr>
										
										
                                                                                        <?php } ?>			
										
										
										
										
										
										
										
									</tbody>
								</table>
							
								<table class="table-vertical"  border="1" style="border-color:red; margin-left:41px;margin-top:-1px;">
								
								<tbody align="center" style="color:black; font-size:9px;">
										<tr>
											<td style="font-weight:bold;color:purple; font-size:8px;" width="35" height="30">GAMES</td>
                                                                                        <td width="31"><input type="text" style=" width: 20px;  border: none; background: transparent; align: center"></td>
											<td width="30"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="31"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="32"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="53"><input type="text" style=" width: 45px; border: none; background: transparent; align: center"></td>
											<td width="31"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="30"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="33"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
                                                                                        <td width="33"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="53"><input type="text" style=" width: 45px; border: none; background: transparent; align: center"></td>
											<td width="50"><input type="text" style=" width: 45px; border: none; background: transparent; align: center"></td>
											<td width="30"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
										</tr>
									<tr>
											<td style="font-weight:bold;color:purple; font-size:8px;" width="35" height="30">ART</td>
											<td width="30"><input type="text" style=" width: 20px; border: none; background: transparent; align: center"></td>
											<td width="30"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="33"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="31"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="53"><input type="text" style=" width: 45px; border: none; background: transparent; align: center"></td>
											<td width="30"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="30"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="33"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
                                                                                        <td width="31"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="53"><input type="text" style=" width: 45px; border: none; background: transparent; align: center"></td>
											<td width="50"><input type="text" style=" width: 45px; border: none; background: transparent; align: center"></td>
											<td width="30"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
										</tr>
									<tr>
											<td style="font-weight:bold;color:purple; font-size:8px;" width="35" height="30">MUSIC</td>
											<td width="30"><input type="text" style=" width: 20px; border: none; background: transparent; align: center"></td>
											<td width="30"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="33"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="31"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="53"><input type="text" style=" width: 45px; border: none; background: transparent; align: center"></td>
											<td width="30"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="30"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="33"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
                                                                                        <td width="31"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="53"><input type="text" style=" width: 45px; border: none; background: transparent; align: center"></td>
											<td width="50"><input type="text" style=" width: 45px; border: none; background: transparent; align: center"></td>
											<td width="30"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
										</tr>
									<tr>
											<td style="font-weight:bold;color:purple; font-size:8px;" width="35" height="30">PARTICIP<br>ATION<br>IN <br>ACTIVITIES</td>
											<td width="30"><input type="text" style=" width: 20px; border: none; background: transparent; align: center"></td>
											<td width="30"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="33"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="31"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="53"><input type="text" style=" width: 45px; border: none; background: transparent; align: center"></td>
											<td width="30"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="30"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="33"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
                                                                                        <td width="31"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="53"><input type="text" style=" width: 45px; border: none; background: transparent; align: center"></td>
											<td width="50"><input type="text" style=" width: 45px; border: none; background: transparent; align: center"></td>
											<td width="30"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
										</tr>
									<tr>
											<td style="font-weight:bold;color:purple; font-size:8px;" width="35" height="30">CARE OF<br>BELONINGS</td>
											<td width="30"><input type="text" style=" width: 20px; border: none; background: transparent; align: center"></td>
											<td width="30"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="33"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="31"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="53"><input type="text" style=" width: 45px; border: none; background: transparent; align: center"></td>
											<td width="30"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="30"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="33"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
                                                                                        <td width="31"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="53"><input type="text" style=" width: 45px; border: none; background: transparent; align: center"></td>
											<td width="50"><input type="text" style=" width: 45px; border: none; background: transparent; align: center"></td>
											<td width="30"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
										</tr>
									<tr>
											<td style="font-weight:bold;color:purple; font-size:8px;" width="35" height="30">NEATNESS</td>
											<td width="30"><input type="text" style=" width: 20px; border: none; background: transparent; align: center"></td>
											<td width="30"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="33"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="31"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="53"><input type="text" style=" width: 45px; border: none; background: transparent; align: center"></td>
											<td width="30"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="30"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="33"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
                                                                                        <td width="31"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="53"><input type="text" style=" width: 45px; border: none; background: transparent; align: center"></td>
											<td width="50"><input type="text" style=" width: 45px; border: none; background: transparent; align: center"></td>
											<td width="30"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
										</tr>
									<tr>
											<td style="font-weight:bold;color:purple; font-size:8px;" width="35" height="30">RESPECT<br>OF ELDERS</td>
											<td width="30"><input type="text" style=" width: 20px; border: none; background: transparent; align: center"></td>
											<td width="30"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="33"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="31"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="53"><input type="text" style=" width: 45px; border: none; background: transparent; align: center"></td>
											<td width="30"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="30"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="33"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
                                                                                        <td width="31"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="53"><input type="text" style=" width: 45px; border: none; background: transparent; align: center"></td>
											<td width="50"><input type="text" style=" width: 45px; border: none; background: transparent; align: center"></td>
											<td width="30"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
										</tr>
									<tr>
											<td style="font-weight:bold;color:purple; font-size:8px;" width="35" height="30">REGULA<br>RITY &<br>PUNCTUA<br>LITY</td>
											<td width="30"><input type="text" style=" width: 20px; border: none; background: transparent; align: center"></td>
											<td width="30"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="33"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="31"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="53"><input type="text" style=" width: 45px; border: none; background: transparent; align: center"></td>
											<td width="30"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="30"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="33"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
                                                                                        <td width="31"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="53"><input type="text" style=" width: 45px; border: none; background: transparent; align: center"></td>
											<td width="50"><input type="text" style=" width: 45px; border: none; background: transparent; align: center"></td>
											<td width="30"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
										</tr>
									<tr>
											<td style="font-weight:bold;color:purple; font-size:8px;" width="35" height="30">BEHAVIOR</td>
											<td width="30"><input type="text" style=" width: 20px; border: none; background: transparent; align: center"></td>
											<td width="30"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="33"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="31"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="53"><input type="text" style=" width: 45px; border: none; background: transparent; align: center"></td>
											<td width="30"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="30"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="33"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
                                                                                        <td width="31"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="53"><input type="text" style=" width: 45px; border: none; background: transparent; align: center"></td>
											<td width="50"><input type="text" style=" width: 45px; border: none; background: transparent; align: center"></td>
											<td width="30"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
										</tr>
<!--									<tr>
											<td style="font-weight:bold;color:purple; font-size:8px;" width="35" height="30">HEIGHT<br>(C.M.)</td>
											<td width="30"><input type="text" style=" width: 20px; border: none; background: transparent; align: center"></td>
											<td width="30"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="33"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="31"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="53"><input type="text" style=" width: 45px; border: none; background: transparent; align: center"></td>
											<td width="30"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="30"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="33"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
                                                                                        <td width="31"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="53"><input type="text" style=" width: 45px; border: none; background: transparent; align: center"></td>
											<td width="50"><input type="text" style=" width: 45px; border: none; background: transparent; align: center"></td>
											<td width="30"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
										</tr>-->
<!--									<tr>
											<td style="font-weight:bold;color:purple; font-size:8px;" width="35" height="30">WEIGHT<br>(K.G.)</td>
											<td width="30"><input type="text" style=" width: 20px; border: none; background: transparent; align: center"></td>
											<td width="30"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="33"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="31"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="53"><input type="text" style=" width: 45px; border: none; background: transparent; align: center"></td>
											<td width="30"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="30"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="33"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
                                                                                        <td width="31"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
											<td width="53"><input type="text" style=" width: 45px; border: none; background: transparent; align: center"></td>
											<td width="50"><input type="text" style=" width: 45px; border: none; background: transparent; align: center"></td>
											<td width="30"><input type="text" style=" width: 25px; border: none; background: transparent; align: center"></td>
										</tr>-->
									
								</tbody>
								</table>
								<table class="table-vertical"  border="1" style="border-color:red; margin-top:-314px">
									<thead align="center" style="color:red; font-size:7px;">
										<tr>
											<th width="41" height="90">CO-CURRI<br>CULAR<br>ACTIVITIES</th>
										</tr>
										<tr>
											<th width="41" height="222">PERSONA<br>LITY<br>DEVELOP<br>MENT</th>
										</tr>
<!--										<tr>
											<th width="41" height="60">HEALTH</th>
										</tr>-->
										
									</thead>
							
								</table>
                            </div>
			<?php
                        
                        $ress=$this->db->query("select * from employee where id='$ct'");
                        foreach ($ress->result() as $valll) {
                        $s=$valll->sign;
                       
                        
                        }
                        
                        
                        ?>
			
			<div width="140mm" style="background-color:#FFFF99;  border:15px solid #FF000D; border-radius:0px 10px 10px 0px; padding:3px; padding-bottom:12px;">
				
							<div class="row">
							
								<div class="col-md-12">
								
									<div class="row-md-4" style="background-color:white; font-style:verdana; border-radius:10px; height:50mm; margin:15px 3px 10px 10px;  width:139mm;">
										<div class="container-fluid">
											<h6 align="center" style="color:orangered">TERM-I<br>GENERAL</h6>
											<p style="color:purple;font-size:12px;font-weight:bold;">
												REMARKS:<span style="font-size:13px; margin-left:5px;"><input type="text" style=" width: 200px; border: none; background: transparent; align: center; text-align: center"></span>
												
											</p>
											<hr style="margin-top:-15px;">
											<p style="color:purple;font-size:12px;font-weight:bold; float:right;">
												TOTAL WORKING DAYS:<span style="font-size:14px;  margin-left:5px;"><input type="text" style=" width: 80px; border: none; background: transparent; align: center; text-align: center"></span>
												
											</p>
											<p style="color:purple;font-size:12px;font-weight:bold;">
												ATTENDANCE:<span style="font-size:14px;  margin-left:5px;"><input type="text" style=" width: 80px; border: none; background: transparent; align: center; text-align: center"></span>
												
											</p>
											<hr style="margin-top:-15px;margin-left:0px; width:150px;">
											<hr style="margin-top:-15px;width:180px; float:right;">
											<img src="<?=base_url()?>mar/img/product/blank.png" style="width:110px;height:30px">
											
											<img src="<?=base_url()?>mar/img/product/blank.png" style="width:110px;height:30px; margin-left:60px;">
											
											<img src="<?=base_url()?>mar/img/product/blank.png" style="width:110px;height:30px;margin-left:370px;margin-top:-60px;">
											
											<p style="color:purple;font-size:12px;font-weight:bold;margin-left:15px;margin-top:-20px;">
												CLASS TEACHER
												
											</p>
											
											<hr style="margin-top:-15px;margin-left:14px; width:100px;">
											<hr style="margin-top:-17px;width:100px; float:right;">
											<p style="color:purple;font-size:12px;font-weight:bold;margin-top:-36px;" align="center">
												PRINCIPAL
												
											</p>
											<p style="color:purple;font-size:12px;font-weight:bold;margin-top:-36px; float:right;margin-right:20px;" >
												PARENTS
												
											</p>
											<hr style="margin-top:-15px; width:100px;">
											
											
										</div>
									</div>
									<div class="row-md-4" style="background-color:white; font-style:verdana; border-radius:10px; height:50mm; margin:15px 3px 10px 10px;  width:139mm;">
										<div class="container-fluid">
											<h6 align="center" style="color:orangered">TERM-II<br>GENERAL</h6>
											<p style="color:purple;font-size:12px;font-weight:bold;">
												REMARKS:<span style="font-size:13px; margin-left:40px;"><input type="text" style=" width: 200px; border: none; background: transparent; align: center; text-align: center"></span>
												
											</p>
											<hr style="margin-top:-15px;">
											<p style="color:purple;font-size:12px;font-weight:bold; float:right;">
												TOTAL WORKING DAYS:<span style="font-size:14px;  margin-left:5px;"><input type="text" style=" width: 80px; border: none; background: transparent; align: center; text-align: center"></span>
												
											</p>
											<p style="color:purple;font-size:12px;font-weight:bold;">
												ATTENDANCE:<span style="font-size:14px;  margin-left:5px;"><input type="text" style=" width: 80px; border: none; background: transparent; align: center; text-align: center"></span>
												
											</p>
											<hr style="margin-top:-15px;margin-left:0px; width:150px;">
											<hr style="margin-top:-15px;width:180px; float:right;">
											<img src="<?=base_url()?>mar/img/product/blank.png" style="width:110px;height:30px">
											
											<img src="<?=base_url()?>mar/img/product/blank.png" style="width:110px;height:30px; margin-left:60px;">
											
											<img src="<?=base_url()?>mar/img/product/blank.png" style="width:110px;height:30px;margin-left:370px;margin-top:-60px;">
											
											<p style="color:purple;font-size:12px;font-weight:bold;margin-left:15px;margin-top:-20px;">
												CLASS TEACHER
												
											</p>
											
											<hr style="margin-top:-15px;margin-left:14px; width:100px;">
											<hr style="margin-top:-17px;width:100px; float:right;">
											<p style="color:purple;font-size:12px;font-weight:bold;margin-top:-36px;" align="center">
												PRINCIPAL
												
											</p>
											<p style="color:purple;font-size:12px;font-weight:bold;margin-top:-36px; float:right;margin-right:20px;" >
												PARENTS
												
											</p>
											<hr style="margin-top:-15px; width:100px;">
											
											
										</div>
									</div>
									<div class="row-md-4" style="background-color:white; font-style:verdana; border-radius:10px; height:52mm; margin:15px 3px 10px 10px;  width:139mm;">
										<div class="container-fluid">
											<h6 align="center" style="color:orangered">OVER ALL ACHIVEMENT GRADE</h6>
											<p style="color:purple;font-size:12px;font-weight:bold;">
												FINAL ASSESSMENT GRADE:<span style="font-size:13px; margin-left:5px;"><input type="text" style=" width: 80px; border: none; background: transparent; align: center; text-align: center"></span>
												
											</p>
											<hr style="margin-top:-15px;">
											<p style="color:purple;font-size:12px;font-weight:bold; float:right; ">
												PROMOTED TO CLASS:<span style="font-size:14px;  margin-left:2px;"><input type="text" style=" width: 50px; border: none; background: transparent; align: center"></span>
												
											</p><br>
											<p style="color:purple;font-size:12px;font-weight:bold; margin-right:-170px; float:right;">
												DETAINED IN CLASS:<span style="font-size:14px;  margin-left:2px;"><input type="text" style=" width: 50px; border: none; background: transparent; align: center"></span>
												
											</p>
											<p style="color:purple;font-size:12px;font-weight:bold;">
												DATE:<span style="font-size:14px;  margin-left:5px;"><input type="text" style=" width: 80px; border: none; background: transparent; align: center; text-align: center"></span>
												
											</p>
											<hr style="margin-top:-15px;margin-left:0px; width:150px;">
											<hr style="margin-top:-15px;width:180px; float:right;">
											<img src="<?=base_url()?>mar/img/product/blank.png" style="width:110px;height:30px">
											
											<img src="<?=base_url()?>mar/img/product/blank.png" style="width:110px;height:30px; margin-left:60px;">
											
											<img src="<?=base_url()?>mar/img/product/blank.png" style="width:110px;height:30px;margin-left:370px;margin-top:-60px;">
											
											<p style="color:purple;font-size:12px;font-weight:bold;margin-left:15px;margin-top:-20px;">
												CLASS TEACHER
												
											</p>
											
											<hr style="margin-top:-15px;margin-left:14px; width:100px;">
											<hr style="margin-top:-17px;width:100px; float:right;">
											<p style="color:purple;font-size:12px;font-weight:bold;margin-top:-36px;" align="center">
												PRINCIPAL
												
											</p>
											<p style="color:purple;font-size:12px;font-weight:bold;margin-top:-36px; float:right;margin-right:20px;" >
												PARENTS
												
											</p>
											
											
											<p style="color:RED;font-weight:bold;margin-right:20px;" >
												
												NEW SESSION BEGINS ON :<span style=" color:purple; margin-left:22px;"><input type="text" style=" width: 100px; border: none; background: transparent; align: center"></span>
												
											</p>
                                                                                        
											<hr style="margin-top:-15px;">
											
											
										</div>
									</div>
								
								</div>
								
							</div>
							
				</div>
			</div>
	
			</page>
		</div>		

</body>

	
</html>

