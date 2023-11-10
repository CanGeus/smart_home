<?php

namespace App\Controllers;

use App\Models\ModelRelay1;
use App\Models\ModelRelay2;
use App\Models\ModelStatus;

class Pages extends BaseController
{
    protected $modelrelay1, $modelrelay2, $modelstatus;
    public function __construct()
    {
        $this->modelrelay1 = new ModelRelay1;
        $this->modelrelay2 = new ModelRelay2;
        $this->modelstatus = new ModelStatus;
    }

    public function index(): string
    {
        $data = [
            "relay1" => $this->modelrelay1->orderBy('id', 'DESC')->limit(1)->find(),
            "relay2" => $this->modelrelay2->orderBy('id', 'DESC')->limit(1)->find(),
            "status" => $this->modelstatus->orderBy('id', 'DESC')->limit(1)->find()
        ];
        return view('index', $data);
    }
    public function report()
    {
        return view('report');
    }


    // api
    public function insertRelay1()
    {
        date_default_timezone_set("Asia/Jakarta");
        $date = date("Y-m-d H:i:s");

        try {
            $this->modelrelay1->insert([
                "kondisi" => $this->request->getVar("kondisi"),
                "date" => $date
            ]);

            // Penyisipan berhasil, kembalikan respons dengan kode status 200 OK
            return $this->response->setStatusCode(200);
        } catch (\Exception $e) {
            // Penyisipan gagal, kembalikan respons dengan kode status 400 Bad Request
            return $this->response->setStatusCode(400);
        }
    }

    public function insertRelay2()
    {
        date_default_timezone_set("Asia/Jakarta");
        $date = date("Y-m-d H:i:s");

        try {
            $this->modelrelay2->insert([
                "kondisi" => $this->request->getVar("kondisi"),
                "date" => $date
            ]);

            // Penyisipan berhasil, kembalikan respons dengan kode status 200 OK
            return $this->response->setStatusCode(200);
        } catch (\Exception $e) {
            // Penyisipan gagal, kembalikan respons dengan kode status 400 Bad Request
            return $this->response->setStatusCode(400);
        }
    }

    public function insertStatus()
    {
        date_default_timezone_set("Asia/Jakarta");
        $date = date("Y-m-d H:i:s");

        try {
            $this->modelstatus->insert([
                "kondisi" => $this->request->getVar("kondisi"),
                "date" => $date
            ]);

            // Penyisipan berhasil, kembalikan respons dengan kode status 200 OK
            return $this->response->setStatusCode(200);
        } catch (\Exception $e) {
            // Penyisipan gagal, kembalikan respons dengan kode status 400 Bad Request
            return $this->response->setStatusCode(400);
        }
    }
    public function readRelay1()
    {
        $data = $this->modelrelay1->orderBy('id', 'DESC')->first(['kondisi']);
        return $this->response->setJSON($data);
    }
    public function readRelay2()
    {
        $data = $this->modelrelay2->orderBy('id', 'DESC')->first(['kondisi']);
        return $this->response->setJSON($data);
    }
    public function readStatus()
    {
        $data = $this->modelstatus->orderBy('id', 'DESC')->first(['kondisi']);
        return $this->response->setJSON($data);
    }
}
