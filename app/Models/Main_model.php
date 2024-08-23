<?php

namespace App\Models;

use CodeIgniter\Model;

class Main_model extends Model
{
    protected $table = 'eskuizkribuak';

    public function getEsku()
    {
        $db = \Config\Database::connect();
        $query = $db->query("select * from eskuizkribuak");
        $result = $query->getResult();
        if(count($result)>0){
            return $result;
        }
        else{
            return false;
        }
    }
    public function getEdiz()
    {
        $db = \Config\Database::connect();
        $query = $db->query("select * from edizioak");
        $result = $query->getResult();
        if(count($result)>0){
            return $result;
        }
        else{
            return false;
        }
    }
    public function getEskuX()
    {
        $a=$_GET['zka'];
        $db = \Config\Database::connect();
        $query = $db->query("select * from eskuizkribuak where Zk = $a");
        $result = $query->getResult();
        
        if(count($result)>0){
            return $result;
        }
        else{
            return false;
        }
    }
    public function getErl()
    {
        $a=$_GET['zka'];
        $db = \Config\Database::connect();
        $query = $db->query("select * from eskuizkribuak, Erlazioa, Edizioak where Eskuizkribuak.Zk = $a and Erlazioa.EskZk = $a and Erlazioa.EdZk = Edizioak.Zenbakia");
        $result = $query->getResult();
        
        if(count($result)>0){
            return $result;
        }
        else{
            return false;
        }
    }
    public function getEdizX()
    {
        $a=$_GET['zka'];
        $db = \Config\Database::connect();
        $query = $db->query("select * from edizioak where Zenbakia = $a");
        $result = $query->getResult();
        
        if(count($result)>0){
            return $result;
        }
        else{
            return false;
        }
    }
    public function getErlaz()
    {
        $a=$_GET['zka'];
        $db = \Config\Database::connect();
        $query1 = $db->query("select * from edizioak, erlazioa, eskuizkribuak where Edizioak.Zenbakia = $a and Erlazioa.EdZk = $a and Erlazioa.EskZk = Eskuizkribuak.zk");
        $result1 = $query1->getResult();
        
        if(count($result1)>0){
            return $result1;
        }
        else{
            return false;
        }
    }
    public function getEsAt()
    {
        $a=$_GET['zka'];
        $db = \Config\Database::connect();
        $query2 = $db->query("select * from eskuizkribu_atalak where eskuizkribua = $a");
        $result2 = $query2->getResult();
        if(count($result2)>0){
            return $result2;
        }
        else{
            return false;
        }
    }
    public function getEsAtX()
    {
        $a=$_GET['zka'];
        $db = \Config\Database::connect();
        $query3 = $db->query("select * from eskuizkribuak, Erlazioa, eskuizkribu_atalak, edizioak where eskuizkribu_atalak.zenbaki_globala = $a and Erlazioa.zenbaki_globala = $a and Erlazioa.EdZk = Edizioak.Zenbakia");
        $result3 = $query3->getResult();
        
        if(count($result3)>0){
            return $result3;
        }
        else{
            return false;
        }
}
public function getEsA()
{
    $a=$_GET['zka'];
    $db = \Config\Database::connect();
    $query4 = $db->query("select * from eskuizkribu_atalak, eskuizkribuak where eskuizkribu_atalak.zenbaki_globala = $a and eskuizkribu_atalak.eskuizkribua = eskuizkribuak.zk");
    $result4 = $query4->getResult();
    if(count($result4)>0){
        return $result4;
    }
    else{
        return false;
    }
}
public function getAtala()
    {
        $a=$_GET['zka'];
        $db = \Config\Database::connect();
        $query2 = $db->query("select * from eskuizkribu_atalak where zenbaki_globala = $a");
        $result2 = $query2->getResult();
        if(count($result2)>0){
            return $result2;
        }
        else{
            return false;
        }
    }
    public function getEdAt()
    {
        $a=$_GET['zka'];
        $db = \Config\Database::connect();
        $query2 = $db->query("select * from edizio_atalak where Edizio_Zenbakia = $a");
        $result2 = $query2->getResult();
        if(count($result2)>0){
            return $result2;
        }
        else{
            return false;
        }
    }
    public function getEdAtX()
    {
        $a=$_GET['zka'];
        $db = \Config\Database::connect();
        $query3 = $db->query("select * from eskuizkribuak, Erlazioa, edizio_atalak, edizioak where edizio_atalak.Ed_Zk_Globala = $a and Erlazioa.Ed_Zk_Globala = $a and Erlazioa.EskZk = Eskuizkribuak.zk");
        $result3 = $query3->getResult();
        
        if(count($result3)>0){
            return $result3;
        }
        else{
            return false;
        }
}
public function getEdA()
{
    $a=$_GET['zka'];
    $db = \Config\Database::connect();
    $query4 = $db->query("select * from edizio_atalak, edizioak where edizio_atalak.Ed_Zk_Globala = $a and edizio_atalak.Edizio_zenbakia = Edizioak.Zenbakia");
    $result4 = $query4->getResult();
    if(count($result4)>0){
        return $result4;
    }
    else{
        return false;
    }
}
public function getEdAtala()
    {
        $a=$_GET['zka'];
        $db = \Config\Database::connect();
        $query2 = $db->query("select * from edizio_atalak where Ed_Zk_Globala = $a");
        $result2 = $query2->getResult();
        if(count($result2)>0){
            return $result2;
        }
        else{
            return false;
        }
    }
    public function buscarConcordancia($palabra)
    {
        $filePath = WRITEPATH . 'uploads/LizarragaGuztiak.txt';

        if (!file_exists($filePath)) {
            return [];
        }

        $contenido = file_get_contents($filePath);
        $lineas = explode("\n", $contenido);

        $resultados = [];

        foreach ($lineas as $linea) {
            if (stripos($linea, $palabra) !== false) {
                $lineaResaltada = str_ireplace($palabra, $palabra, $linea);
// Solo agregamos la línea si contiene la palabra
$resultados[] = trim($lineaResaltada);
            }
        }

        return $resultados;
    }
}
