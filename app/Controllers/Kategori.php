<?php

namespace App\Controllers;

class Kategori extends BaseController
{
	public function index()
	{
        $data = [
            'title' => "Kategori | Jasain"
        ];
        return view('kategori/kategori', $data);
    }
    
    public function layanan($kategori)
	{
        $keyword = strtr($kategori,"-"," ");
        
        $produk1 = $this->produkModel->search($keyword)->findAll();
        $produk = $this->produkModel->search($keyword);
        foreach($produk1 as $p){
            $bintang[] = $this->produkModel->getRataBintang($p['username'],$p['judul']);
        }
        $data = [
            'title' => "".ucwords($keyword)." - Kategori | Jasain",
            'produk' => $produk->paginate(12, 'produk'),
            'pager' => $this->produkModel->pager,
            'bintang' => $bintang,
            'keyword' => $keyword
        ];
        return view('kategori/daftar_layanan_kategori', $data);
    }

}