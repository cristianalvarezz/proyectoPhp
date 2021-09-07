<?php
class ModelsUsers extends CI_Model{
    public function __construct(){
        $this->load->database();
    }
    public function save($user,$user_info){
        $this->db->trans_start();
            $this->db->insert('usuarios',$user); 
            $user_info['id_usuario'] = $this->db->insert_id();   
            $this->db->insert('adviser',$user_info);
        $this->db->trans_complete();
        return !$this->db->trans_status() ? false : true;
    }
    public function getUsers(){
        $sql = $this->db->order_by('id','DESC')->get('usuarios'); 
        return $sql->result();
    }
    public function getPaginate($limit,$offset){
        $sql = $this->db->order_by('id','DESC')->get('usuarios',$limit,$offset);
        return $sql->result();
    }
    public function updateUser($id,$data){
        $this->db->where('id',$id);
        $this->db->update('adviser',$data);
    }
    public function getUser($id){
        $this->db->join('adviser','usuarios.id = adviser.id_usuario');
        $user = $this->db->get_where('usuarios',array('usuarios.id' => $id),1);
        return $user->row_array();
    }
    public function deleteUser($id){
        $this->db->where('id',$id);
        $this->db->delete('usuarios');
    }
}