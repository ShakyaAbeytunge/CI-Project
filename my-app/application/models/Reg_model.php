<?php
    class Reg_model extends CI_Model{
        public function saverecords($name, $email, $mobile){
            $query="insert into student values('','$name','$email','$mobile')";
            $this->db->query($query);
        }

        public function display_students(){
            $query=$this->db->query('select * from student');
            return $query->result();
        }

        public function delete_student($id){
            $this->db->query("delete from student where Id='".$id."'");
        }

        public function displayrecord($id){
            $query=$this->db->query("select * from student where Id='".$id."'");
            return $query->result();
        }

        public function update_student($id,$name,$email,$mobile){
            $query=$this->db->query("update student set Name='$name', Email='$email', Mobile='$mobile' where Id='".$id."'");
        }
    }
?>