<?php if ( ! defined('BASEPATH')) exit('No direct script accessallowed');

class SiswaModel extends CI_Model {
  public function view(){
    $this->load->library('pagination'); // Load libraripaginationnya
    $query = "SELECT * FROM siswa"; // Query untuk menampilkansemua data siswa
    $config['base_url'] = base_url('index.php/siswa/lists');
    $config['total_rows'] = $this->db->query($query)->num_rows();
    $config['per_page'] = 5;
    $config['uri_segment'] = 3;
    $config['num_links'] = 3;
    // Style Pagination
    // Agar bisa mengganti stylenya sesuai class2 yg ada dibootstrap
  $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        // End style pagination
    
    $this->pagination->initialize($config); // Set konfigurasipaginationnya
    $page = ($this->uri->segment($config['uri_segment'])) ?$this->uri->segment($config['uri_segment']) : 0;
    $query .= " LIMIT ".$page.", ".$config['per_page'];
    $data['limit'] = $config['per_page'];
    $data['total_rows'] = $config['total_rows'];
    $data['pagination'] = $this->pagination->create_links(); //Generate link pagination nyasesuai config diatas
    $data['siswa'] = $this->db->query($query)->result();
    return $data;
  } 
} 