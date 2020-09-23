<?php

namespace App\Controllers;

class Layanan extends BaseController
{
	public function index()
	{
        $keyword =  $this->request->getVar('keyword');
        
        if($keyword){
            $produk1 = $this->produkModel->search($keyword)->findAll();
            $produk = $this->produkModel->search($keyword);
            
        }else{
            $produk = $this->produkModel;
            $produk1 = $this->produkModel->getProduk(); 
        }

        if(!$produk1 && $keyword){
            $bintang = null;
            $h3 = 'Maaf, tidak ada hasil untuk ​"'.$keyword.'"';
            
        }elseif($produk1 && $keyword){
            foreach($produk1 as $p){
                $bintang[] = $this->produkModel->getRataBintang($p['username'],$p['judul']);
            }
            $h3 = 'Hasil Pencarian untuk "'.$keyword.'"';
        }elseif($produk1){
            foreach($produk1 as $p){
                $bintang[] = $this->produkModel->getRataBintang($p['username'],$p['judul']);
            }
            $h3 = 'Apa yang anda butuhkan?​';
        }
        
		$data = [
            'title' => "Layanan | Jasain",
            'produk' => $produk->paginate(12, 'produk'),
            'pager' => $this->produkModel->pager,
            'bintang' => $bintang,
            'keyword' => $keyword,
            'h3' => $h3
		];
		return view('layanan/layanan', $data);
	}
}
