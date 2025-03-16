<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sepatu extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Sepatu_model');
		$this->load->library('form_validation');
		$this->load->helper('url');


	}

	public function index()
	{
		$this->load->view('partials/header');
		$this->load->view('sepatu');
		$this->load->view('partials/footer');
	}

	public function submit()
	{
		$this->form_validation->set_rules('name', 'Nama Pembeli', 'required', [
			'required' => 'Nama Pembeli harus diisi.'
		]);

		$this->form_validation->set_rules('phone', 'No Telp/HP', 'required|numeric', [
			'required' => 'No Telp/HP harus diisi.',
			'numeric' => 'No Telp/HP hanya boleh berisi angka.'
		]);

		$this->form_validation->set_rules('brand', 'Merk Sepatu', 'required|in_list[Nike,Adidas,Kickers,Eiger,Bucherri]', [
			'required' => 'Merk Sepatu harus dipilih.',
			'in_list' => 'Merk Sepatu yang dipilih tidak valid.'
		]);

		$this->form_validation->set_rules('size', 'Ukuran Sepatu', 'required|numeric|greater_than_equal_to[32]|less_than_equal_to[44]', [
			'required' => 'Ukuran Sepatu harus dipilih.',
			'numeric' => 'Ukuran Sepatu hanya boleh berisi angka.',
			'greater_than_equal_to' => 'Ukuran Sepatu minimal 32.',
			'less_than_equal_to' => 'Ukuran Sepatu maksimal 44.'
		]);

		$this->form_validation->set_rules('quantity', 'Jumlah Beli', 'required|numeric|greater_than[0]', [
			'required' => 'Jumlah Beli harus diisi.',
			'numeric' => 'Jumlah Beli hanya boleh berisi angka.',
			'greater_than' => 'Jumlah Beli harus lebih besar dari 0.'
		]);

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('partials/header');
			$this->load->view('sepatu');
			$this->load->view('partials/footer');
		} else {
			$name = $this->input->post('name');
			$phone = $this->input->post('phone');
			$brand = $this->input->post('brand');
			$size = $this->input->post('size');
			$quantity = $this->input->post('quantity');

			$price = $this->Sepatu_model->get_price_by_brand($brand);

			$total_price = $price * $quantity;

			$data = [
				'name' => $name,
				'phone' => $phone,
				'brand' => $brand,
				'size' => $size,
				'price' => $price,
				'quantity' => $quantity,
				'total_price' => $total_price
			];

			$this->load->view('partials/header');
			$this->load->view('hasil', $data);
			$this->load->view('partials/footer');
		}
	}
}