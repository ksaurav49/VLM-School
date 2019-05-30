<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>HTML to PDF - techumber</title>
	
	<link href="../assets/plugins/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" />
	<style type="text/css" media="print">

		.form{
			-webkit-transform: rotate(90deg);
-moz-transform: rotate(90deg);   
-o-transform: rotate(90deg);
		}.page
    {
		margin-top: 90mm;
       -ms-filter: "progid:DXImageTransform.Microsoft.Matrix(M11=0.00000000, M12=-1.00000000, M21=1.00000000, M22=0.00000000,sizingMethod='auto expand')";
   filter: progid:DXImageTransform.Microsoft.Matrix(M11=0.00000000, M12=-1.00000000, M21=1.00000000, M22=0.00000000,sizingMethod='auto expand');
  transform: rotate(90deg);
  -o-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  -webkit-transform: rotate(90deg);
  -moz-transform: rotate(90deg);
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

	</style>
</head>
<body>
 <!-- scripts -->
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.rawgit.com/MrRio/jsPDF/master/dist/jspdf.min.js"></script> 
	
	
	<div class="ui segment">
 <div class="ui button aligned center teal" id="create_pdf">Create PDF</div>
 <div class="ui divider"></div>
	
<page size="A4" layout="portrait" style="margin-top:120mm;" >	
		<div class="row form" width="290mm" height="210mm">
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
											<th >SUBJECT</th>
											<th >F.A.-1<br>10%</th>
											<th >F.A.-2<br>10%</th>
											<th >TOTAL<br>(F.A.)<br>20%</th>
											<th >S.A.-1<br>30%</th>
											<th >TOTAL<br>(F.A.+S.A.)<br>50%</th>
											
											<th >F.A.-3<br>10%</th>
											<th >F.A.-4<br>10%</th>
											<th >TOTAL<br>(F.A.)<br>20%</th>
											<th >S.A.-2<br>30%</th>
											<th >TOTAL<br>(F.A.+S.A.)<br>50%</th>
											
											<th >GRAND<br>TOTAL<br>TERM I+II<br>100%</th>
											<th >GRADE</th>
											
										</tr>
									</thead>
									<tbody align="center" style="color:black; font-size:9px;">
										<tr>
											<td style="font-weight:bold;color:purple;">ENGLISH</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>A</td>
										</tr>
										<tr>
											<td style="font-weight:bold;color:purple;">HINDI</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>A</td>
										</tr>
										<tr>
											<td style="font-weight:bold;color:purple;">MATHEMATICS</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>A</td>
										</tr>
										<tr>
											<td style="font-weight:bold;color:purple;">SCIENCE/EVS</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>A</td>
										</tr>
										<tr>
											<td style="font-weight:bold;color:purple;">SOCIAL SCIENCE</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>A</td>
										</tr>
										<tr>
											<td style="font-weight:bold;color:purple;">MORAL SCIENCE</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>A</td>
										</tr>
										<tr>
											<td style="font-weight:bold;color:purple;">GK/CONVERSATION</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>A</td>
										</tr>
										<tr>
											<td style="font-weight:bold;color:purple;">SANSKRIT</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>A</td>
										</tr>
										<tr>
											<td style="font-weight:bold;color:purple;">COMPUTER</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>10</td>
											<td>A</td>
										</tr>
										
										
									</tbody>
								</table>
							
								<table class="table-vertical"  border="1" style="border-color:red; margin-left:41px;margin-top:-1px;">
								
								<tbody align="center" style="color:black; font-size:9px;">
										<tr>
											<td style="font-weight:bold;color:purple; font-size:8px;" width="35" height="30">GAMES</td>
											<td width="30">10</td>
											<td width="30">10</td>
											<td width="33">10</td>
											<td width="31">10</td>
											<td width="53">10</td>
											<td width="30">10</td>
											<td width="30">10</td>
											<td width="33">10</td>
											<td width="31">10</td>
											<td width="53">10</td>
											<td width="50">10</td>
											<td width="37">A+</td>
										</tr>
									<tr>
											<td style="font-weight:bold;color:purple; font-size:8px;" width="35" height="30">ART</td>
											<td width="30">10</td>
											<td width="30">10</td>
											<td width="33">10</td>
											<td width="31">10</td>
											<td width="53">10</td>
											<td width="30">10</td>
											<td width="30">10</td>
											<td width="33">10</td>
											<td width="31">10</td>
											<td width="53">10</td>
											<td width="50">10</td>
											<td width="37">A+</td>
										</tr>
									<tr>
											<td style="font-weight:bold;color:purple; font-size:8px;" width="35" height="30">MUSIC</td>
											<td width="30">10</td>
											<td width="30">10</td>
											<td width="33">10</td>
											<td width="31">10</td>
											<td width="53">10</td>
											<td width="30">10</td>
											<td width="30">10</td>
											<td width="33">10</td>
											<td width="31">10</td>
											<td width="53">10</td>
											<td width="50">10</td>
											<td width="37">A+</td>
										</tr>
									<tr>
											<td style="font-weight:bold;color:purple; font-size:8px;" width="35" height="30">PARTICIP<br>ATION<br>IN <br>ACTIVITIES</td>
											<td width="30">10</td>
											<td width="30">10</td>
											<td width="33">10</td>
											<td width="31">10</td>
											<td width="53">10</td>
											<td width="30">10</td>
											<td width="30">10</td>
											<td width="33">10</td>
											<td width="31">10</td>
											<td width="53">10</td>
											<td width="50">10</td>
											<td width="37">A+</td>
										</tr>
									<tr>
											<td style="font-weight:bold;color:purple; font-size:8px;" width="35" height="30">CARE OF<br>BELONINGS</td>
											<td width="30">10</td>
											<td width="30">10</td>
											<td width="33">10</td>
											<td width="31">10</td>
											<td width="53">10</td>
											<td width="30">10</td>
											<td width="30">10</td>
											<td width="33">10</td>
											<td width="31">10</td>
											<td width="53">10</td>
											<td width="50">10</td>
											<td width="37">A+</td>
										</tr>
									<tr>
											<td style="font-weight:bold;color:purple; font-size:8px;" width="35" height="30">NEATNESS</td>
											<td width="30">10</td>
											<td width="30">10</td>
											<td width="33">10</td>
											<td width="31">10</td>
											<td width="53">10</td>
											<td width="30">10</td>
											<td width="30">10</td>
											<td width="33">10</td>
											<td width="31">10</td>
											<td width="53">10</td>
											<td width="50">10</td>
											<td width="37">A+</td>
										</tr>
									<tr>
											<td style="font-weight:bold;color:purple; font-size:8px;" width="35" height="30">RESPECT<br>OF ELDERS</td>
											<td width="30">10</td>
											<td width="30">10</td>
											<td width="33">10</td>
											<td width="31">10</td>
											<td width="53">10</td>
											<td width="30">10</td>
											<td width="30">10</td>
											<td width="33">10</td>
											<td width="31">10</td>
											<td width="53">10</td>
											<td width="50">10</td>
											<td width="37">A+</td>
										</tr>
									<tr>
											<td style="font-weight:bold;color:purple; font-size:8px;" width="35" height="30">REGULA<br>RITY &<br>PUNCTUA<br>LITY</td>
											<td width="30">10</td>
											<td width="30">10</td>
											<td width="33">10</td>
											<td width="31">10</td>
											<td width="53">10</td>
											<td width="30">10</td>
											<td width="30">10</td>
											<td width="33">10</td>
											<td width="31">10</td>
											<td width="53">10</td>
											<td width="50">10</td>
											<td width="37">A+</td>
										</tr>
									<tr>
											<td style="font-weight:bold;color:purple; font-size:8px;" width="35" height="30">BEHAVIOR</td>
											<td width="30">10</td>
											<td width="30">10</td>
											<td width="33">10</td>
											<td width="31">10</td>
											<td width="53">10</td>
											<td width="30">10</td>
											<td width="30">10</td>
											<td width="33">10</td>
											<td width="31">10</td>
											<td width="53">10</td>
											<td width="50">10</td>
											<td width="37">A+</td>
										</tr>
									<tr>
											<td style="font-weight:bold;color:purple; font-size:8px;" width="35" height="30">HEIGHT<br>(C.M.)</td>
											<td width="30">10</td>
											<td width="30">10</td>
											<td width="33">10</td>
											<td width="31">10</td>
											<td width="53">10</td>
											<td width="30">10</td>
											<td width="30">10</td>
											<td width="33">10</td>
											<td width="31">10</td>
											<td width="53">10</td>
											<td width="50">10</td>
											<td width="37">A+</td>
										</tr>
									<tr>
											<td style="font-weight:bold;color:purple; font-size:8px;" width="35" height="30">WEIGHT<br>(K.G.)</td>
											<td width="30">10</td>
											<td width="30">10</td>
											<td width="33">10</td>
											<td width="31">10</td>
											<td width="53">10</td>
											<td width="30">10</td>
											<td width="30">10</td>
											<td width="33">10</td>
											<td width="31">10</td>
											<td width="53">10</td>
											<td width="50">10</td>
											<td width="37">A+</td>
										</tr>
									
								</tbody>
								</table>
								<table class="table-vertical"  border="1" style="border-color:red; margin-top:-373px">
									<thead align="center" style="color:red; font-size:7px;">
										<tr>
											<th width="41" height="90">CO-CURRI<br>CULAR<br>ACTIVITIES</th>
										</tr>
										<tr>
											<th width="41" height="222">PERSONA<br>LITY<br>DEVELOP<br>MENT</th>
										</tr>
										<tr>
											<th width="41" height="60">HEALTH</th>
										</tr>
										
									</thead>
							
								</table>
                            </div>
			
			
			<div width="140mm" style="background-color:#FFFF99;  border:15px solid #FF000D; border-radius:0px 10px 10px 0px; padding:3px; padding-bottom:12px;">
				
							<div class="row">
							
								<div class="col-md-12">
								
									<div class="row-md-4" style="background-color:white; font-style:verdana; border-radius:10px; height:50mm; margin:15px 3px 10px 10px;  width:139mm;">
										<div class="container-fluid">
											<h6 align="center" style="color:orangered">TERM-I<br>GENERAL</h6>
											<p style="color:purple;font-size:12px;font-weight:bold;">
												REMARKS:<span style="font-size:13px; margin-left:40px;">OUT STANDING</span>
												
											</p>
											<hr style="margin-top:-15px;">
											<p style="color:purple;font-size:12px;font-weight:bold; float:right;">
												TOTAL WORKING DAYS:<span style="font-size:14px;  margin-left:22px;">113</span>
												
											</p>
											<p style="color:purple;font-size:12px;font-weight:bold;">
												ATTENDANCE:<span style="font-size:14px;  margin-left:20px;">95</span>
												
											</p>
											<hr style="margin-top:-15px;margin-left:0px; width:150px;">
											<hr style="margin-top:-15px;width:180px; float:right;">
											<img src="../assets/img/product/product-1.png" style="width:120px;height:35px">
											
											<img src="../assets/img/product/product-1.png" style="width:120px;height:35px; margin-left:60px;">
											
											<img src="../assets/img/product/blank.png" style="width:120px;height:35px;margin-left:370px;margin-top:-60px;">
											
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
												REMARKS:<span style="font-size:13px; margin-left:40px;">OUT STANDING</span>
												
											</p>
											<hr style="margin-top:-15px;">
											<p style="color:purple;font-size:12px;font-weight:bold; float:right;">
												TOTAL WORKING DAYS:<span style="font-size:14px;  margin-left:22px;">86</span>
												
											</p>
											<p style="color:purple;font-size:12px;font-weight:bold;">
												ATTENDANCE:<span style="font-size:14px;  margin-left:20px;">72</span>
												
											</p>
											<hr style="margin-top:-15px;margin-left:0px; width:150px;">
											<hr style="margin-top:-15px;width:180px; float:right;">
											<img src="../assets/img/product/product-1.png" style="width:120px;height:35px">
											
											<img src="../assets/img/product/product-1.png" style="width:120px;height:35px; margin-left:60px;">
											
											<img src="../assets/img/product/blank.png" style="width:120px;height:35px;margin-left:370px;margin-top:-60px;">
											
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
												FINAL ASSESSMENT GRADE:<span style="font-size:13px; margin-left:40px;">A1</span>
												
											</p>
											<hr style="margin-top:-15px;">
											<p style="color:purple;font-size:12px;font-weight:bold; float:right;">
												PROMOTED TO CLASS:<span style="font-size:14px;  margin-left:22px;">PP-II</span>
												
											</p><br>
											<p style="color:purple;font-size:12px;font-weight:bold; margin-right:-140px; float:right;">
												DETAINED IN CLASS:<span style="font-size:14px;  margin-left:22px;"></span>
												
											</p>
											<p style="color:purple;font-size:12px;font-weight:bold;">
												DATE:<span style="font-size:14px;  margin-left:20px;">15 MARCH 2018</span>
												
											</p>
											<hr style="margin-top:-15px;margin-left:0px; width:150px;">
											<hr style="margin-top:-15px;width:180px; float:right;">
											<img src="../assets/img/product/product-1.png" style="width:120px;height:35px">
											
											<img src="../assets/img/product/product-1.png" style="width:120px;height:35px; margin-left:60px;">
											
											<img src="../assets/img/product/blank.png" style="width:120px;height:35px;margin-left:370px;margin-top:-60px;">
											
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
											<br>
											<p style="color:RED;font-weight:bold;margin-right:20px;" >
												
												NEW SESSION BEGINS ON :<span style=" color:purple; margin-left:22px;">1 APRIL 2018</span>
												
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
	
	
 <script type="text/javascript" src="app.js"></script>
</body>
</html>