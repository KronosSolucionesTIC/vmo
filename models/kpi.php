<?php
//include dirname(__file__, 2) . "/config/conexion.php";
/**
 *
 */
class Kpi
{
    private $conn;
    private $link;

    public function __construct()
    {
        $this->conn = new Conexion();
        $this->link = $this->conn->conectarse();
    }

    //Trae la pregunta UNO
    public function getPreguntas()
    {
        $query  = "SELECT * FROM tb_type_kpi";
        $result = mysqli_query($this->link, $query);
        $data   = array();
        while ($data[] = mysqli_fetch_assoc($result));
        array_pop($data);
        return $data;
    }

    //Trae las respuestas
    public function getResp()
    {
        $query  = "SELECT * FROM tb_val_answ_sect WHERE id_tblistsection=5";
        $result = mysqli_query($this->link, $query);
        $data   = array();
        while ($data[] = mysqli_fetch_assoc($result));
        array_pop($data);
        return $data;
    }
}
