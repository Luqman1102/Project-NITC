<?php

namespace App\Models;

use CodeIgniter\Model;

class PesananModel extends Model
{
    protected $table = 'pesanan';
    protected $allowedFields = ['judul', 'username_pembeli', 'username_penjual', 'tanggal', 'status','jumlah_revisi', 'harga', 'gambar_asli', 'gambar_watermark', 'nama_rekening', 'no_rekening', 'bukti_pembayaran'];

    public function getPesanan($id = false){
        if($id == false){
            return $this->findAll();
        }
        return $this->where(['id'=>$id])->first();
    }
    public function getLastId(){
        return $this->query("select max(id) as id from pesanan")->getFirstRow();
    }
}
