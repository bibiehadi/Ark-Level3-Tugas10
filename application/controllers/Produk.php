<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Produk_Model',"produk");
        
    }
    
    public function index()
    {
        $data['produk'] = $this->produk->getData();
        $this->load->view('produk_view', $data);
        
    }

    function tambah(){
        $this->load->view('tambah_produk_view'); 
    }

    function tambah_produk(){
		$nama_produk = $this->input->post('nama_produk');
		$keterangan = $this->input->post('keterangan');
		$harga = $this->input->post('harga');
		$jumlah = $this->input->post('jumlah');
 
		$data = array(
			'nama_produk' => $nama_produk,
			'keterangan' => $keterangan,
			'harga' => $harga,
			'jumlah' => $jumlah
			);
		$this->produk->addData($data,'produk');
		redirect('produk/index');
    }

    function edit($id){
        $where = array('id' => $id);
        $data['produk'] = $this->produk->getDataBy($where,'produk');
        $this->load->view('edit_produk_view',$data);
    }

    function update(){
        $id = $this->input->post('id');
        $nama_produk = $this->input->post('nama_produk');
        $keterangan = $this->input->post('keterangan');
        $harga = $this->input->post('harga');
        $jumlah = $this->input->post('jumlah');
     
        $data = array(
            'nama_produk' => $nama_produk,
            'keterangan' => $keterangan,
            'harga' => $harga,
            'jumlah' => $jumlah
        );
    
        $this->produk->updateData(array('id' => $id),$data,'produk');
        redirect('produk/index');
    }
    
    function hapus($id){
		$where = array('id' => $id);
		$this->produk->deleteData($where,'produk');
		redirect('produk/index');
	}
}

/* End of file Produk.php */

