<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Destiny_AdminController extends CI_Controller {
    
public function __construct() {
        parent::__construct();
        
    }
    
    public function dashboard() {
        if($this->session->userdata('id'))
        {
            $data['shop']=  $this->Destiny_AdminModel->total_shop_fetch_model();
            $data['category']=  $this->Destiny_AdminModel->total_category_fetch_model();
            $data['user']=  $this->Destiny_AdminModel->total_user_fetch_model();
            $data['city']=  $this->Destiny_AdminModel->total_city_fetch_model();
            $data['product']=  $this->Destiny_AdminModel->total_product_fetch_model();
            $this->load->view('admin/dashboard',$data);
        }
        else{
            redirect(base_url('admin-logout'));
        }
    }
    
    
    public function admin_login() {
        $this->load->view('admin/logout');
    }
    
    
    public function login_check() {
        $user= $this->input->post("user");
        $pwd= $this->input->post("pwd");
        //echo $user,$pwd;
        $ret= $this->Destiny_AdminModel->login_check_model($user,$pwd);
        if($ret)
        {
            $this->session->set_userdata('id',$ret->id);
            $this->session->set_userdata('email',$ret->email);
            $this->session->set_userdata('role',$ret->role);
            $this->session->set_userdata('status',$ret->status);
            redirect(base_url('dashboard'));
        }
        else{
            $this->session->set_flashdata('msg','Unable To Login: Invalid Email Or Password');
            redirect(base_url('admin-login'));
        }
    }
    
    public function admin_logout() {
        $role=  $this->uri->segment(2);
        echo $role;
//        $this->session->unset_userdata('id');
//        $this->session->sess_destroy();
//        $this->session->set_flashdata('msg','Your Are Successfuly Logout');
//        if($role=='admin'){
//            redirect(base_url('admin-login'));
//        }else{
//            redirect(base_url('shop-login'));
//        }
    }
    
    //--------------------------Products Management Functions-------------------
    
    public function add_product_form() {
        if($this->session->userdata('id'))
            {
        
                $this->load->view('admin/add_product_form');
            }else {
                $this->session->set_flashdata('msg','Your Session Is Expired...! Please Login First.....');
                redirect(base_url('admin-login'));
            }
    }
    
    
    public function add_product_data_upload() {
        if($this->session->userdata('id'))
            {
                $name= $this->input->post('name');
                $AdminProduct['upload_path']='Adminassets/upload/AdminProducts/';
                $AdminProduct['allowed_types']='*';
                $this->load->library('upload',$AdminProduct);
                $this->upload->do_upload('file_name');
                $file_name=$this->upload->data();
                $data=array('name'=>$name,'image'=>$AdminProduct['upload_path'].$file_name['file_name']);
                $qry=$this->Destiny_AdminModel->add_product_data_upload_model($data);
                if($qry)
                {
                    $this->session->set_flashdata('msg','Your Product has Been Successfuly Uploaded with Image....');
                    redirect(base_url('add-product-form'));
                }else{
                    $this->session->set_flashdata('msg','Some Error is Occured During Uploading Of Data....!');
                    redirect(base_url('add-product-form'));
                }
            }else {
                redirect(base_url('admin-logout'));
            }

    }
    
    public function product_list() {
        if($this->session->userdata('id'))
        {
            $data['udata']= $this->Destiny_AdminModel->product_list_model();
            $this->load->view('admin/product_list',$data);
        }else{
            redirect(base_url('admin-logout'));
        }
    }
    
    public function product_success_delete() {
        if($this->session->userdata('adid'))
        {
        $id= $this->uri->segment(2);
        $check['slider'] = $this->Destiny_AdminModel->one_slider_select_model($id);
        foreach ($check['slider'] as $key) {
            if(!($key->active))
            {
               $data= $this->Destiny_AdminModel->slider_success_delete_model($id);
               if($data){
                    $this->session->set_flashdata('msg','Data Has Been Successfuly Deleted To The Database');
                }
            }else{
                    $this->session->set_flashdata('msg','Data Can Not Deleted Due To Some Condition Mentioned Here');
                }
        }
        redirect(base_url('slider-view'));
        }else {
                redirect(base_url('admin-logout'));
            }
    }
    
    
    //--------------------Slider Management Function----------------------------
    
    public function slider_form() {
        if($this->session->userdata('id'))
            {
        
                $this->load->view('admin/slider_form');
            }else {
                redirect(base_url('admin-logout'));
            }
    }
    
    public function slider_upload_form()
	{
		//echo $slider, $role, $file_name;
		   if($this->session->userdata('id'))
            {
			    $role=$this->input->post('role');

                if(!empty($_FILES['file_name']['name']))
					{
						$config['upload_path']   = base_url().'Adminassets/upload/Slider/';
						$config['allowed_types'] = 'jpg|jpeg|png|gif';
						$config['file_name']     = $_FILES['file_name']['name'];

						//echo $config['file_name'];
						
						//Load upload library and initialize configuration
						$this->load->library('upload',$config);
						
						$this->upload->initialize($config);

						if($this->upload->do_upload('file_name')){
							$uploadData = $this->upload->data();
 							$image  = $config['upload_path'].$uploadData['file_name'];
							$config['image_library'] = 'gd2';
							$config['source_image']  = $uploadData['full_path'];
							$config['maintain_ratio']= TRUE;
							$config['height']		 = 400;
							$config['width']		 = 400;

							$this->load->library('image_lib', $config); 

							$this->image_lib->clear();

							$this->image_lib->initialize($config);

							$this->image_lib->resize();

					}
						
					else{
                    		$image = '';
                	}
				
            }
		
			else{
                $image = '';
            }
                $qry=$this->Destiny_AdminModel->slider_upload_form_model($image,$role);
                if($qry)
                {
                    $this->session->set_flashdata('msg','Your Product has Been Successfuly Uploaded with Image....');
                    redirect(base_url('slider-form'));
                }else{
                    $this->session->set_flashdata('msg','Some Error is Occured During Uploading Of Data....!');
                    redirect(base_url('slider-form'));
                }
            }else {
                redirect(base_url('admin-logout'));
            }

    }
	

    public function slider_list() {
        if($this->session->userdata('id'))
            {
        $data['udata']= $this->Destiny_AdminModel->slider_list_model();
        $this->load->view('admin/slider_view',$data);
            }else {
                redirect(base_url('admin-logout'));
            }
    }
    
    public function slider_success_delete() {
        if($this->session->userdata('id'))
        {
        $id= $this->uri->segment(2);
        $check['slider'] = $this->Destiny_AdminModel->one_slider_select_model($id);
        foreach ($check['slider'] as $key) {
            if(!($key->active))
            {
               $data= $this->Destiny_AdminModel->slider_success_delete_model($id);
               if($data){
                    $this->session->set_flashdata('msg','Data Has Been Successfuly Deleted To The Database');
                }
            }else{
                    $this->session->set_flashdata('msg','Data Can Not Deleted Due To Some Condition Mentioned Here');
                }
        }
        redirect(base_url('slider-view'));
        }else {
                redirect(base_url('admin-logout'));
            }
    }
    
    public function slider_checked() {
        if($this->session->userdata('id'))
            {
                $id= $this->uri->segment(2);
                $data=array('status'=>'true');
                $data= $this->Destiny_AdminModel->slider_checked_model($data,$id);
                if($data){
                    $this->session->set_flashdata('msg','Photo Has Been Set As A Slider');
                    redirect(base_url('slider-view'));
                }
            }else{
                redirect(base_url('admin-logout'));
            }
    }
    
    public function slider_unchecked() {
        if($this->session->userdata('id'))
            {
                $id= $this->uri->segment(2);
                $data=array('status'=>'false');
                $data= $this->Destiny_AdminModel->slider_unchecked_model($data,$id);
                if($data){
                    $this->session->set_flashdata('msg','Photo Has Been Uncheked to Slider');
                    redirect(base_url('slider-view'));
                }
            }else{
                redirect(base_url('admin-logout'));
            }
    }
    
    
    //Shop Registration Function For Admin
    
    public function shop_registration() {
        if($this->session->userdata('id')){
            $data=  $this->Destiny_AdminModel->total_city_fetch_model();
            $this->load->view('admin/shop_registration_form',$data);
        }else{
            redirect(base_url('admin-logout'));
        }
    }
    
    public function shop_form_data_upload() {
      
    }

   
//-----------------------Completely Working Function------------------------------------

	

    
}
?>