<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class query extends CI_Model{

		public function getPost(){
			$query = $this->db->query('SELECT * FROM tbl_article INNER JOIN tbl_user ON tbl_article.IDuser = tbl_user.ID');
			if($query->num_rows() > 0){
				return $query->result();
			}
		}


		public function insertPost($data){
			return $this->db->insert('tbl_article',$data);
		}

		public function getOnePost($id){
			$query = $this->db->get_where('tbl_article',['ID' => $id]);
			if($query->num_rows() > 0){
				return $query->row();
			}
		}

		public function updatePost($data,$id){
			return $this->db->where('ID',$id)->update('tbl_article', $data);
		}

		public function deletePost($id){
			return $this->db->delete('tbl_article', ['id' => $id]);
		}

		public function loginCheck($data){
			$query =  $this->db->get_where('tbl_user', ['username' => $data]);
			if($query->num_rows() > 0){
				return $query->row();
			}
		}
	}
?>