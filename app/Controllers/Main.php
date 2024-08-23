<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Controllers\Main;
use App\Models\Main_model;
use App\Views\pages\main_view;
use App\Views\pages\esku_view;
use CodeIgniter\Exceptions\PageNotFoundException;
use \CodeIgniter\View\Table;
use CodeIgniter\public\assets;


class Main extends Controller
{
    public function index1()
    {
        $data = [
            'title' => "Hasiera",
            'header' => "Corpus arakatzailea",
        ];
 

        echo view ("/pages/main_view", $data);
       
    }
    public function index()
    {
        return view('pages/konkordantzia');
    }

    public function bilatu()
    {
        $palabra = $this->request->getPost('palabra');
        $palabraConEspacio = ' ' . $palabra. ' ';
        $model = new Main_model();
        $resultados = $model->buscarConcordancia($palabraConEspacio);

        echo view('pages/konkordantzia', ['resultados' => $resultados, 'palabra' => $palabra]);
    }
    public function bizitza()
    {
        $data = [
            'title' => "Bizitza",
            'header' => "Joakin Lizarragaren bizitzari buruzkoak",
        ];
       
        echo view ("/pages/bizitza", $data);
    }

    public function euskalkia()
    {
        $data = [
            'title' => "Euskalkia",
            'header' => "Hego-nafarrera",
        ];
       
        echo view ("/pages/euskalkia", $data);
    }
    
    public function eskuizkribuak()
    {
        $eskuModel = new Main_Model();
        $datu = [
            'eskuizkribu' => $eskuModel->getEsku(),
            'title' => "Eskuizkribuak",
            'header' => "Eskuizkribuen zerrenda",
        ];
        
        echo view("/pages/esku_view", $datu);
    }
    
    public function edizioak()
    {
        $edizModel = new Main_Model();
        $datu = [
            'edizioa' => $edizModel->getEdiz(),
            'title' => "Edizioak",
            'header' => "Edizioen zerrenda",
        ];
        
        echo view("/pages/ediz_view", $datu);

    }
   
    public function eskuizkribuxehetasunak()
    {
    
        $eskuModel = new Main_Model();
        $datu = [
            'eskuizkribu' => $eskuModel->getEskuX(),
            'title' => "Eskuizkribu xehetasunak",
            'header' => "Eskuizkribuaren xehetasunak",
            'edizio' => $eskuModel ->getErl(),
            'eskat' => $eskuModel ->getEsAt(),
            
        ];
        
        echo view("/pages/eskuxehe_view", $datu);

    }

    public function edizioxehetasunak()
    {

        $edizModel = new Main_model();
        $datu = [
            'edizio' => $edizModel->getEdizX(),
            'esku' => $edizModel->getErlaz(),
            'title' => "Edizio xehetasunak",
            'header' => "Edizioaren xehetasunak",
            'edat' => $edizModel->getEdAt(),
        ];
        
        echo view("/pages/edizxehe_view", $datu);
    }

    public function eskuatal()
    {
    
        $eskuModel = new Main_Model();
        $datu = [
            'eskuizkribua' => $eskuModel->getEsA(),
            'title' => "Atalaren edizioak",
            'header' => "Atalaren edizioak",
            'edizio' => $eskuModel ->getEsAtX(),
            'eskat' => $eskuModel ->getAtala(),
            
        ];
        echo view("/pages/eskuatal", $datu);

    }

    public function ediatal()
    {
    
        $edizModel = new Main_Model();
        $datu = [
            'eskuizkribua' => $edizModel->getEdAtX(),
            'title' => "Edizioak atalak",
            'header' => "Edizioaren atalak",
            'edizio' => $edizModel ->getEdA(),
            'edat' => $edizModel ->getEdAtala(),
            
        ];
        
        echo view("/pages/ediatal", $datu);
    }

    
  
}