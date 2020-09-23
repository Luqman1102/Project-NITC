<?php

namespace App\Controllers;

use App\Models\ReviewModel;

class Review extends BaseController
{
    private $ReviewModel;
    public function __construct()
    {
        $this->ReviewModel = new ReviewModel();
    }

    public function Tambahulasan()
    {
        $id_produk = $this->request->getPost('id_produk');
        $num = (int) $id_produk;
        if (!$this->validate([
            'isi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',

                ]
            ],
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('produk/' . $num)->withInput()->with('validation', $validation);
        }
        $judul = $this->request->getPost('judul');
        $username_pembeli = $this->request->getPost('username_pembeli');
        $username_penjual = $this->request->getPost('username_penjual');
        $stars = $this->request->getPost('stars');
        if ($stars == null) {
            $bintang = 0;
        } else {
            $bintang = $stars;
        }
        $isi = $this->request->getPost('isi');
        $this->ReviewModel->save([
            'judul' => $judul,
            'username_pembeli' => $username_pembeli,
            'username_penjual' => $username_penjual,
            'bintang' => $bintang,
            'isi' => $isi,
            'id_produk' => $id_produk,
        ]);
        return redirect()->to('/');
    }
}
