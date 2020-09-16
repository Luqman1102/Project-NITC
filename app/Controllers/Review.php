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

    public function index($id)
    {
        $username = session('username');
        $bintang = $this->ReviewModel->bintang($id);
        $data = [
            'title' => 'Review Page',
            'review' => $this->ReviewModel->getReview($id)->getResult(),
            'reviewku' => $this->ReviewModel->myReview($username),
            'bintang' => $bintang,
            'hasil' => ceil($bintang->bintang),
        ];
        return view('Review', $data);
    }

    public function TambahData($id)
    {
        $username = session('username');
        $review = $this->ReviewModel->getReview($id)->getResult();
        foreach ($review as $r) {
            $user = $r->username;
        }
        if ($user == $username) {
            echo ("sudahAda");
        } elseif ($user != $username) {
            echo ("Belum ada");
        }
    }
}
