<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Registration extends CI_Controller{
        public function __construct(){
            parent::__construct();

            $this->load->model('Reg_model');            
        }

        public function savedata(){
            $this->load->view('registration_form');

            if($this->input->post('save')){
                $name=$this->input->post('name');
                $email=$this->input->post('email');
                $mobile=$this->input->post('mobile');

                $this->Reg_model->saverecords($name,$email,$mobile);
                echo '<script>alert("Successfully added a new student!");</script>';
            }
        }

        public function displaydata(){
            $result['data']=$this->Reg_model->display_students();
            $this->load->view('display_students',$result);
        }

        public function deletedata(){
            $id=$this->input->get('id');
            $this->Reg_model->delete_student($id);
            redirect('Registration/displaydata');
        }

        public function updatedata(){
            $id=$this->input->get('id');
            $result['data']=$this->Reg_model->displayrecord($id);
            $this->load->view('update_student',$result);

            if($this->input->post('update')){
                $id=$this->input->get('id');
                $name=$this->input->post('name');
                $email=$this->input->post('email');
                $mobile=$this->input->post('mobile');
                $this->Reg_model->update_student($id,$name,$email,$mobile);
                echo '<script>alert("Successfully updated record!");</script>';
                
            }
        }

        public function generate_pdf() {
            
            $this->load->library('Pdf');
            
            $pdf = new Pdf(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
            
            $pdf->SetCreator(PDF_CREATOR);
            $pdf->SetAuthor('https://www.roytuts.com');
            $pdf->SetTitle('Registered Student Details');
            $pdf->SetSubject('Report generated using Codeigniter and TCPDF');
            $pdf->SetKeywords('TCPDF, PDF, MySQL, Codeigniter');
        
            $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
            $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
        
            $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
            $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
            $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
            $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

            $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
            $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
            $pdf->SetFont('times', '', 12);

            $template = array(
                'table_open' => '<table border="1" cellpadding="2" cellspacing="1">'
            );
        
            $this->table->set_template($template);
        
            $this->table->set_heading('Student Id', 'Name', 'Email Address', 'Mobile Number');
            
            $data = $this->Reg_model->display_students();
                
            foreach ($data as $row):
                $this->table->add_row($row->Id, $row->Name, $row->Email, $row->Mobile);
            endforeach;
            
            $html = $this->table->generate();
            $pdf->AddPage();
            $pdf->writeHTML($html, true, false, true, false, '');
            $pdf->lastPage();
            $pdf->Output('student_info.pdf', 'D');
        }
    }
?>