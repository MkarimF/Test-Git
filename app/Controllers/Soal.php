<?php

namespace App\Controllers;

use App\Models\SoalModel;

class Soal extends BaseController
{
    protected $objSoalModel;

    public function __construct()
    {
        $this->objSoalModel = new SoalModel();
    }

    public function latihan1()
    {
        return view('soal/latihan1');
    }

    public function latihan2()
    {
        return view('soal/latihan2');
    }

    public function latihan3()
    {
        return view('soal/latihan3');
    }

    public function latihan4()
    {
        return view('soal/latihan4');
    }

    public function latihan5()
    {
        return view('soal/latihan5');
    }

    public function latihan6()
    {
        return view('soal/latihan6');
    }

    public function latihan7()
    {
        return view('soal/latihan7');
    }

    public function latihan8()
    {
        return view('soal/latihan8');
    }

    public function latihan9()
    {
        return view('soal/latihan9');
    }
}
