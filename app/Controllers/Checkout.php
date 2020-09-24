<?php

namespace App\Controllers;

use App\Models\PesananModel;

class Checkout extends BaseController
{
	private $pesananModel;
    public function __construct()
    {
        $this->pesananModel = new PesananModel();
	}
	
	public function index($id)
	{
		$produk = $this->produkModel->getProduk($id);
		$username = $produk['username'];
		$judul = $produk['judul'];
		$rataBintang = $this->produkModel->getRataBintang($username, $judul);

		if($rataBintang->rata_bintang>=0&&$rataBintang->rata_bintang<=0.2){
			$rate = 'rate-0';
		}elseif($rataBintang->rata_bintang>=0.3&&$rataBintang->rata_bintang<=0.7){
			$rate ='rate-1';
		}elseif($rataBintang->rata_bintang>=0.8&&$rataBintang->rata_bintang<=1.2){
			$rate ='rate-2';
		}elseif($rataBintang->rata_bintang>=1.3&&$rataBintang->rata_bintang<=1.7){
			$rate ='rate-3';
		}elseif($rataBintang->rata_bintang>=1.8&&$rataBintang->rata_bintang<=2.2){
			$rate ='rate-4';
		}elseif($rataBintang->rata_bintang>=2.3&&$rataBintang->rata_bintang<=2.7){
			$rate ='rate-5';
		}elseif($rataBintang->rata_bintang>=2.8&&$rataBintang->rata_bintang<=3.2){
			$rate ='rate-6';
		}elseif($rataBintang->rata_bintang>=3.3&&$rataBintang->rata_bintang<=3.7){
			$rate ='rate-7';
		}elseif($rataBintang->rata_bintang>=3.8&&$rataBintang->rata_bintang<=4.2){
			$rate ='rate-8';
		}elseif($rataBintang->rata_bintang>=4.3&&$rataBintang->rata_bintang<=4.7){
			$rate ='rate-9';
		}elseif($rataBintang->rata_bintang>=4.8&&$rataBintang->rata_bintang<=5){
			$rate ='rate-10';
		}

		$data= [
			'title' => 'Checkout '.$produk['username'].' | Jasain',
			'validation' => \Config\Services::validation(),
			'produk' =>$produk,
			'bintang' => $rataBintang,
			'rate' => $rate
		];

		return view('checkout/index', $data);
	}
	
	public function pesan()
	{
		if(!$this->validate([
			'judul' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} produk harus diisi.'
				]
			],
			'username' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} produk harus diisi.'
				]
			],
			'jumlah_revisi' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} produk harus diisi.'
				]
			],
			'harga' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} produk harus diisi.'
				]
			],
			'no_rekening' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} produk harus diisi.'
				]
			],
			'nama_rekening' => [
				'rules' => 'required',
				'errors' => [
					'required' => '{field} produk harus diisi.'
				]
			]
		])){
			$validation = \Config\Services::validation();
			return redirect()->to('/produk/detailProduk')->withInput()->with('validation', $validation);
        }
        
		date_default_timezone_set('Asia/Jakarta');
		
		$this->pesananModel->save([
			'judul' => $this->request->getVar('judul'),
			'username_pembeli' => "session_username",
			'username_penjual' => $this->request->getVar('username'),
			'tanggal' => date("Y-m-d H:i:s"),
			'status' => "dipesan",
			'jumlah_revisi' => $this->request->getVar('jumlah_revisi'),
			'harga' => $this->request->getVar('harga'),
			'gambar_asli' => "-",
			'gambar_watermark' => "-",
			'nama_rekening' => $this->request->getVar('nama_rekening'),
			'no_rekening' => $this->request->getVar('no_rekening'),
			'bukti_pembayaran' => "-"
		]);
		session()->setFlashData('pesan', 'Data berhasil ditambahkan.');
		return redirect()->to('/checkout/upload/'.$this->pesananModel->getLastId()->id);
	}

	public function upload($id)
	{
		$data = [
			'title' => "Upload Bukti Pembayaran | Jasain",
			'validation' => \Config\Services::validation(),
			'id' => $id
		];
		
		return view('checkout/upload', $data);
	}

	public function save()
	{
		if(!$this->validate([
			'bukti_pembayaran' => [
				'rules' => 'uploaded[bukti_pembayaran]|max_size[bukti_pembayaran,5120]|is_image[bukti_pembayaran]|mime_in[bukti_pembayaran,image/jpg,image/jpeg,image/png]',
				'errors' => [
					'uploaded' => '{field} produk harus diisi.',
					'max_size' => 'Ukuran gambar melebihi 5MB',
					'is_image' => 'Mohon masukkan gambar',
					'mime_in' => 'Mohon masukkan gambar'
				]
			]
		])){
			$validation = \Config\Services::validation();
			return redirect()->to('/checkout/upload/'.$this->request->getVar('id'))->withInput()->with('validation', $validation);
		}
		// ambil gambar
		$fileMedia = $this->request->getFile('bukti_pembayaran');
		// pindahkan gambar ke folder images
		$fileMedia->move('assets/images/bukti-pembayaran');
		// ambil nama Gambar
		$namaMedia = $fileMedia->getName();

		$this->pesananModel->save([
			'id' => $this->request->getVar('id'),
			'bukti_pembayaran' => $namaMedia
		]);
		session()->setFlashData('pesan', 'Pesanan berhasil dikonfirmasi.');
		return redirect()->to('/');
	}

}
