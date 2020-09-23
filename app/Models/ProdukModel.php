<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table = 'produk';
    protected $allowedFields = ['judul', 'media', 'deskripsi_produk', 'kategori', 'username', 'harga','jumlah_revisi'];

    public function getProduk($id = false){
        if($id == false){
            return $this->findAll();
        }
        return $this->where(['id'=>$id])->first();
    }

    public function getRataBintang($username, $judul){
        return $this->query("select username_penjual, judul, avg(bintang) as rata_bintang, count(judul) as jumlah_review from review where username_penjual = '$username' and judul = '$judul'")->getFirstRow();
    }

    public function search($keyword){
        return $this->table('produk')->like('judul',$keyword)->orlike('kategori',$keyword);
    }
}
