<?php

namespace App\Models;

use CodeIgniter\Model;

class ReviewModel extends Model
{
    protected $table = "review";
    protected $allowedFields = ['username_pembeli', 'username_penjual', 'isi', 'bintang', 'id_produk', 'judul'];

    public function myReview($username)
    {
        return $this->where(['username' => $username])->get()->getResult();
    }

    public function bintang($id)
    {
        return $this->db->query("SELECT AVG(`bintang`) AS `bintang` FROM review WHERE id_produk = $id ")->getRow();
    }
    public function getReview($id)
    {
        return $this->where(['id_produk' => $id])->get()->getResultArray();
    }

    public function kondisiReview($id)
    {
        $username = session('username');
        return $this->where(['id_produk' => $id, 'username_pembeli' => $username])->get()->getRow();
    }
}
