<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminSideController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        
                if (!$this->session->userdata('is_logged_in')){
                redirect('adminLogin'); 
            }
  
    }
    public function dashLoad(){
         $page['data'] = $this->uri->segment(1);
        $this->load->view('admin/include/header',$page);
		$this->load->view('admin/index');
                $this->load->view('admin/include/footer');
    }
     public function logout(){
        $this->session->sess_destroy();
           redirect('adminLogin');
    }
     public function payg(){
            $page['data'] = $this->uri->segment(1);
            
        $this->load->view('admin/include/header',$page);
		$this->load->view('admin/class');
                $this->load->view('admin/include/footer');

    }
    public function class_submit(){
        $s1=$this->input->post("class");
        $s2=$this->input->post("fee");
        
        $a=$this->db->query("insert into class (class,fee) values('$s1','$s2')");
        //$a=$this->db->query("select * from class");
            echo $a;  
        }
         public function session_submit(){
        $s1=$this->input->post("class");
        $r=$this->db->query("select * from session");
        if($r->num_rows()>0){
            $a=$this->db->query("update session set year='$s1'");
        }else{
        
        $a=$this->db->query("insert into session (year) values('$s1')");
        }
        //$a=$this->db->query("select * from class");
            echo $a;  
        }
        
         public function section_submit(){
        $s1=$this->input->post("class");
        $s2=$this->input->post("fee");
        
        $a=$this->db->query("insert into class (class,section) values('$s1','$s2')");
        //$a=$this->db->query("select * from class");
            echo $a;  
        }
       
         public function  teacher_submit(){
        $s1=$this->input->post("class");
        $s2=$this->input->post("fee");
        $s3=$this->input->post("teacher");
        
        $a=$this->db->query("update class set classTeacher='$s3' where class='$s1' && section='$s2'");
        //$a=$this->db->query("select * from class");
            echo $a;  
        }
        
        
         public function  subject_submit(){
        $s1=$this->input->post("class");
            // $s1=49;
        $s2=$this->input->post("fee");
       $rs=$this->db->query("select * from class where class_id='$s1'");
       foreach ($rs->result() as $row){
           $data=$row->subject;
           $data=trim($data);
       }
       if(strcmp($data, "nothing") != 0){
           $s2 = $data."/".$s2;
       }
        $a=$this->db->query("update class set subject='$s2' where class_id='$s1'");
        //$a=$this->db->query("select * from class");
            echo $a;  
        }
        
        
         public function ajClass(){
        $s1=$this->input->post("class");
        //$s1="50";
        //$a=$this->db->query("insert into class (class,section) values('$s1','$s2')");
        //$a=$this->db->query("select * from class");
        
      
            
        $a=$this->db->query("select * from class where class='$s1'");
        //$a=$this->db->query("select * from class");
        if($a->num_rows()>0){
        foreach ($a->result() as $row) {
            $z[]=$row;
            
        }
        }else{
            $a=array('section'=>"Nothing to show");
            $z[]=$a;
        }
          echo json_encode($z);  
        
            
        }
        public function employee(){
         $page['data'] = $this->uri->segment(1);
        $this->load->view('admin/include/header',$page);
		$this->load->view('admin/employee');
                $this->load->view('admin/include/footer');
    }
    public function employeeSubmit(){
//        
//                        $postedfile=$_FILES['image']['name'];
//                if (isset($postedfile))
//                {
//                    $file = './uploads/'.$postedfile;
//                     if (file_exists($file)) {
//                        unlink($file);
//                    }
//                    $fileconfig['upload_path']   = './uploads/';
//                    $fileconfig['allowed_types'] = 'gif|jpg|png|jpeg'; 
//                    $fileconfig['max_size']      =0; 
//                    $fileconfig['max_width']     = 0; 
//                    $fileconfig['overwrite']     = FALSE; 
//                    $fileconfig['max_height']    = 0;  
//                    $this->load->library('upload', $fileconfig);
//                    $ret=$this->upload->do_upload('image');  // true or false
//                    if($ret){
//                    $upload_data = $this->upload->data();
//                    $msg=$this->upload->display_errors();
//                        if($upload_data)
//                        {
//
//                                                    $fname=$upload_data['file_name'];
//                                                    //echo "File uploaded with the name:".$fname."<br><br>";
//                                                    $data['upload_data'] = $this->upload->data();
//                                                    
//                                                    foreach ($data['upload_data'] as $value) 
//                                                        {
//                                                            //echo $value;
//                                                        }
//
//                        }
//                        
//                }
               
                
        
        
        
        
        //yhi
             
             
             $data= array('name' => $this->input->post('name'),
                 'phone' => $this->input->post('phone'),
                 'adress' => $this->input->post('adress'),
                 'type' => $this->input->post('type'),
                 'salary' => $this->input->post('salary'),
                 'sign' => "test");
                 
                 //'sign' => $upload_data['file_name']);
             if($this->input->post('type') == "principal"){
                 $res=$this->db->query("select * from employee where type='principal'");
                 if($res->num_rows()>0){
                     $this->db->where('type',$this->input->post('type'));
                     $a=$this->db->update('employee', $data);
                 }else{
                     $a=$this->db->insert('employee', $data);
                 }
             }else{
             $a=$this->db->insert('employee', $data);
             }
            if($a){
                $this->session->set_flashdata('item', "yes");
                  redirect('emp','refresh');
                
            }else{
                $this->session->set_flashdata('item', "no");
                  redirect('emp','refresh');
            }
                }
    
    
    public function employeeView(){
         $page['data'] = $this->uri->segment(1);
        $this->load->view('admin/include/header',$page);
		$this->load->view('admin/employeeView');
                $this->load->view('admin/include/footer');
    }
    public function empdl(){
        $id=$this->uri->segment(3);
        $a=$this->db->query("delete from employee where id='$id'");
        if($a){
                $this->session->set_flashdata('item', "yes");
                  redirect('empv','refresh');
                
            }else{
                $this->session->set_flashdata('item', "no");
                  redirect('empv','refresh');
            }
    }
    public function empup(){
         $page['data'] = $this->uri->segment(1);
         $id=$this->uri->segment(2);
        $this->load->view('admin/include/header',$page);
		$this->load->view('admin/employeeup');
                $this->load->view('admin/include/footer');
    }
    public function salaryupem(){
        $id=$this->uri->segment(3);
        $salary=$this->input->post('salary');
        $a=$this->db->query("update employee set salary='$salary' where id='$id'");
        if($a){
                $this->session->set_flashdata('item', "up");
                  redirect('empv','refresh');
                
            }else{
                $this->session->set_flashdata('item', "no");
                  redirect('empv','refresh');
            }
    }
    public function studentEntry(){ 
                $page['data'] = $this->uri->segment(1);
                $this->load->view('admin/include/header',$page);
		$this->load->view('admin/admission_form');
                $this->load->view('admin/include/footer');

    }
    public function delete(){ 
                $s1=$page['data'] = $this->uri->segment(2);
               $a=$this->db->query("delete from student where admissionno='$s1'");
               if($a){
            //echo $a;
                $this->session->set_flashdata('item', "up");
                  redirect('adminDash','refresh');
                
            }else{
                //echo $a;
                $this->session->set_flashdata('item', "no");
                  redirect('adminDash','refresh');
            }

    }
    
    public function evaluate(){ 
                $page['data'] = $this->uri->segment(1);
                $this->load->view('admin/include/header',$page);
		$this->load->view('admin/evaluate');
                $this->load->view('admin/include/footer');

    }
        public function evalSubmit(){
        $id=$this->uri->segment(1);
        $term=$this->input->post('term');
         $name=$this->input->post('name');
          $weight=$this->input->post('weight');
          $e=$name."/".$weight;
          if($term == "TERM1"){
        $a=$this->db->query("insert into evaluation (term1) values('$e')");
          }else{
              $a=$this->db->query("insert into evaluation (term2) values('$e')");
          }
        if($a){
                $this->session->set_flashdata('item', "up");
                  redirect('evmn','refresh');
                
            }else{
                $this->session->set_flashdata('item', "no");
                  redirect('evmn','refresh');
            }
    }
     public function studentSubmit(){
        $id=$this->uri->segment(1);
         $s1=$this->input->post('year');
          $s2=$this->input->post('month');
           $s3=$this->input->post('day');
           $s4=$s1."/".$s2."/".$s3;
           
       $data= array(//'admissionno' => $this->input->post('admissionno'),
                 //'formno' => $this->input->post('formno'),
           'formno' => $this->input->post('admissionno'),
                 'class' => $this->input->post('sclass'),
                 'section' => $this->input->post('section'),
                 'session' => $this->input->post('session'),
                 'name' => $this->input->post('name'),
                   'fname' => $this->input->post('fname'),
                 'mname' => $this->input->post('mname'),
                 'oc' => $this->input->post('oc'),
                 'mobile' => $this->input->post('mobile'),
                    'dob' => $this->input->post('dob'),
                 'pob' => $this->input->post('pob'),
                 'gender' => $this->input->post('gender'),
                 'padress' => $this->input->post('padress'),
                   'pdist' => $this->input->post('pdist'),
                 'pcity' => $this->input->post('pcity'),
                 'ppost' => $this->input->post('ppost'),
                 'ppin' => $this->input->post('ppin'),
                    'ladress' => $this->input->post('ladress'),
                 'ldist' => $this->input->post('ldist'),
                 'lcity' => $this->input->post('lcity'),
                 'lpost' => $this->input->post('lpost'),
                   'lpin' => $this->input->post('lpin'),
                 'ageon' => $s4,
                 'cat' => $this->input->post('cat'),
                 'religion' => $this->input->post('religion'),
                    'lschool' => $this->input->post('school'),
                 'lmedium' => $this->input->post('medium'),
                 'lclass' => $this->input->post('class'),
                 'lboard' => $this->input->post('board'),
           	
                   'linstituion' => $this->input->post('institution'),
                 'lyear' => $this->input->post('year'),
                 'lpercentage' => $this->input->post('percentage')
                 );
      
              $a=$this->db->insert('student', $data);
          
        if($a){
            //echo $a;
                $this->session->set_flashdata('item', "up");
                  redirect('se','refresh');
                
            }else{
                //echo $a;
                $this->session->set_flashdata('item', "no");
                  redirect('se','refresh');
            }
    }
    public function marks(){
        $page['data'] = $this->uri->segment(1);
                $this->load->view('admin/include/header',$page);
		$this->load->view('admin/marks');
                $this->load->view('admin/include/footer');
    }
    
    public function ajterm(){
        $s1=$this->input->post("class");
        //$s1="TERM1";
        if(strcmp($s1,"TERM1")==0){
            $a=$this->db->query("select term1 from evaluation");
            $array=array();
            foreach ($a->result() as $row) {
                if ($row->term1 != NULL){
                    $rs=explode('/', $row->term1,-1);
                    $q=array("term" => $rs[0]);
                    array_push($array, $q);
                }  
        }
        }else{
            $a=$this->db->query("select term2 from evaluation");
            $array=array();
            foreach ($a->result() as $row) {
                if ($row->term2 != NULL){
                    $rs=explode('/', $row->term2,-1);
                    $q=array("term" => $rs[0]);
                    array_push($array, $q);
                }  
        }
        }
        echo json_encode($array);
        
            
        }

     public function marksSubmit(){
            
         $id=$this->uri->segment(1);
         $name=$this->input->post('name');
         $adno=$this->input->post('adno');
         $class=$this->input->post('class');
         $section=$this->input->post('section');
          $term=$this->input->post('term');
          $type=$this->input->post('type');
          $subject=$this->input->post('subject');
          $r=$this->db->query("select * from session");
          foreach ($r->result() as $value) {
              $y=$value->year;
          }
          $fm=100;
            $results= $this->db->query("select * from class where class='$class'");
                                   foreach ($results->result() as $roww)
                                    {
                                       $sub=$roww->subject;
                                       $sub=trim($sub);
                                    }
                                    $rs=explode('/', $sub);
                             $si=sizeof($rs);
                             for($i=0; $i<$si;$i=$i+1){
                                 $e=$rs[$i];
                                 $sm=$this->input->post($e);
                                 $a=$this->db->query("insert into marks (name,adno,class ,section,term,type,subject,fm,sm,session) values('$name','$adno','$class','$section','$term','$type','$e','$fm','$sm','$y')");
                             }
       
//          $fm=$this->input->post('fm');
//          $sm=$this->input->post('sm');
          
          
         
         
        
          
        if($a){
                $this->session->set_flashdata('item', "yes");
                  redirect('adminDash','refresh');
                
            }else{
                $this->session->set_flashdata('item', "no");
                  redirect('adminDash','refresh');
            }
    }
  
    public function marksSheet(){
        $page['data'] = $this->uri->segment(1);
                //$this->load->view('admin/include/header',$page);
		$this->load->view('admin/extra_invoice');
                //$this->load->view('admin/include/footer');
    }
    public function extra(){
        $page['data'] = $this->uri->segment(1);
                $this->load->view('admin/include/header',$page);
		$this->load->view('admin/');
                $this->load->view('admin/include/footer');
    }
    
    


















































    public function sliderSubmit(){
            $upload_path = "assets/image/slider";
            $config['upload_path'] = $upload_path;

            $config['allowed_types'] = '*';
        
            $image_data = array();
             $this->load->library('upload', $config);
             
             if($this->upload->do_upload('image')){
                 $image_data=$this->upload->data();
                 $config['image_library'] = 'gd2';
                    $config['source_image'] = $image_data['full_path']; //get original image
                    $config['maintain_ratio'] = TRUE;
                    $config['width'] = 1920;
                    $config['height'] = 989;
                    $config['allowed_types']        = 'gif|jpg|png';
                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize();
                    $file = $upload_path . $image_data['file_name'];
                    if (file_exists($file)) {
                        unlink($file);
                    }
             }
             $data= array('name' => $this->input->post('name'),
                 'image' => $image_data['file_name']);
             $this->load->model('adminModel');
             $a=$this->adminModel->slider($data);
            if($a){
                $this->session->set_flashdata('item', "yes");
                  //redirect('adminSlide','refresh');
                
            }else{
                $this->session->set_flashdata('item', "no");
                  //redirect('adminSlide','refresh');
            }

        }
        
        public function deleteSlider(){
      
            
            $page['data'] = $this->uri->segment(1);
        $this->load->view('admin/include/header',$page);
		$this->load->view('admin/delS');
                $this->load->view('admin/include/footer');

    }
    public function delSlides(){
        $image=$this->uri->segment(4);
        
        $r="/chana/assets/image/slider/".$image;
      
        unlink($_SERVER['DOCUMENT_ROOT'].$r);
        $this->load->model('adminModel');
        $w=$this->adminModel->delSlide();
         if($w == 1){
              $this->session->set_flashdata('item', "yes");
             redirect('delSlider','refresh');
         } else {
             $this->session->set_flashdata('item', "no");
                  redirect('adminSlide','refresh');
         }
    }
    
    

     
   
   
   
   
    
    
}