<?php

namespace App\Models;

use CodeIgniter\Model;

class ReviewModel extends Model
{
    protected $table = "Review";
    protected $allowedFields = ['username', 'isi', 'bintang', 'id_produk'];

    public function getReview($id)
    {
        return $this->where(['id_produk' => $id])->get();
    }

    public function myReview($username)
    {
        return $this->where(['username' => $username])->get()->getResult();
    }

    public function bintang($id)
    {
        return $this->db->query("SELECT AVG(`bintang`) AS `bintang` FROM review WHERE id_produk = $id ")->getRow();
    }
}
