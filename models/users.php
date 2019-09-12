<?php
include dirname(__file__, 2) . "/config/conexion.php";
/**
 *
 */
class Users
{
    private $conn;
    private $link;

    public function __construct()
    {
        $this->conn = new Conexion();
        $this->link = $this->conn->conectarse();
    }

    //Trae todos los usuario registrados
    public function getUsers()
    {
        $query = "SELECT *,nombreDepartamento,nombreCiudad,nombreArea FROM usuario
                LEFT JOIN departamento ON departamento.idDepartamento = usuario.fkID_departamento
                LEFT JOIN ciudad ON ciudad.idCiudad = usuario.fkID_ciudad
                LEFT JOIN area ON area.idArea = usuario.fkID_area";
        $result = mysqli_query($this->link, $query);
        $data   = array();
        while ($data[] = mysqli_fetch_assoc($result));
        array_pop($data);
        return $data;
    }

    //Trae todos CIUU
    public function getCiudad()
    {
        $query  = "SELECT * FROM ciudad";
        $result = mysqli_query($this->link, $query);
        $data   = array();
        while ($data[] = mysqli_fetch_assoc($result));
        array_pop($data);
        return $data;
    }

    //Trae todos sectores
    public function getArea()
    {
        $query  = "SELECT * FROM area";
        $result = mysqli_query($this->link, $query);
        $data   = array();
        while ($data[] = mysqli_fetch_assoc($result));
        array_pop($data);
        return $data;
    }

    //Trae todos los tamaños
    public function getTamano()
    {
        $query  = "SELECT * FROM tb_typecomp";
        $result = mysqli_query($this->link, $query);
        $data   = array();
        while ($data[] = mysqli_fetch_assoc($result));
        array_pop($data);
        return $data;
    }

    //Trae todos los departamentos
    public function getDpto()
    {
        $query  = "SELECT * FROM departamento";
        $result = mysqli_query($this->link, $query);
        $data   = array();
        while ($data[] = mysqli_fetch_assoc($result));
        array_pop($data);
        return $data;
    }

    //Trae todos los municipios
    public function getMuni()
    {
        $query  = "SELECT * FROM tb_municip";
        $result = mysqli_query($this->link, $query);
        $data   = array();
        while ($data[] = mysqli_fetch_assoc($result));
        array_pop($data);
        return $data;
    }

    //Crea un nuevo cliente
    public function newClient($data)
    {
        $query  = "INSERT INTO tb_client (business_name,subscriber,department,municipality) VALUES ('" . $data['business_name'] . "','" . $data['subscriber'] . "','" . $data['department'] . "','" . $data['municipality'] . "')";
        $result = mysqli_query($this->link, $query);
        if (mysqli_affected_rows($this->link) > 0) {
            return true;
        } else {
            return false;
        }
    }

    //Crea un nuevo usuario
    public function newUser($data)
    {
        $query  = "INSERT INTO usuario (nombre,email,fkID_departamento,fkID_ciudad,fkID_area) VALUES ('" . $data['nombre'] . "','" . $data['email'] . "','" . $data['fkID_departamento'] . "','" . $data['fkID_ciudad'] . "','" . $data['fkID_area'] . "')";
        $result = mysqli_query($this->link, $query);
        if (mysqli_affected_rows($this->link) > 0) {
            return true;
        } else {
            return false;
        }
    }

    //Crea un nuevo usuario
    public function newContact($data)
    {
        $query  = "INSERT INTO tb_contact (name) VALUES ('" . $data['nomContacto'] . "')";
        $result = mysqli_query($this->link, $query);
        if (mysqli_affected_rows($this->link) > 0) {
            return true;
        } else {
            return false;
        }
    }

    //Obtiene el usuario por id
    public function getUserById($usuarioNombre = null)
    {
        if (!empty($usuarioNombre)) {
            $query  = "SELECT * FROM usuario WHERE nombre = '" . $usuarioNombre . "'";
            $result = mysqli_query($this->link, $query);
            $data   = array();
            while ($data[] = mysqli_fetch_assoc($result));
            array_pop($data);
            return $data;
        } else {
            return false;
        }
    }

    //Verifica contraseña
    public function getPass($usuarioNombre = null, $password = null)
    {
        if (!empty($usuarioNombre)) {
            if (!empty($password)) {
                $query  = "SELECT * FROM usuario WHERE nombre ='" . $usuarioNombre . "' AND password='" . $password . "'";
                $result = mysqli_query($this->link, $query);
                $data   = array();
                while ($data[] = mysqli_fetch_assoc($result));
                array_pop($data);
                return $data;
            }
        } else {
            return false;
        }
    }

    //Obtiene el usuario por id
    public function getID($id = null)
    {
        if (!empty($id)) {
            $query  = "SELECT * FROM tb_client WHERE subscriber=" . $id;
            $result = mysqli_query($this->link, $query);
            $data   = array();
            while ($data[] = mysqli_fetch_assoc($result));
            array_pop($data);
            return $data;
        } else {
            return false;
        }
    }

    //Obtiene el usuario por id
    public function setEditUser($data)
    {
        if (!empty($data['id'])) {
            $query  = "UPDATE users SET name='" . $data['name'] . "',last_name='" . $data['last_name'] . "', email='" . $data['email'] . "' WHERE id=" . $data['id'];
            $result = mysqli_query($this->link, $query);
            if ($result) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    //Borra el usuario por id
    public function deleteUser($id = null)
    {
        if (!empty($id)) {
            $query  = "DELETE FROM users WHERE id=" . $id;
            $result = mysqli_query($this->link, $query);
            if (mysqli_affected_rows($this->link) > 0) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    //Filtro de busqueda
    public function getUsersBySearch($data = null)
    {
        if (!empty($data)) {
            $query  = "SELECT * FROM users WHERE name LIKE'%" . $data . "%' OR last_name LIKE'%" . $data . "%' OR email LIKE'%" . $data . "%'";
            $result = mysqli_query($this->link, $query);
            $data   = array();
            while ($data[] = mysqli_fetch_assoc($result));
            array_pop($data);
            return $data;
        } else {
            return false;
        }
    }

    //Envia mail
    public function enviarMail($email, $subject, $message)
    {
        if (mail($email, $subject, $message)) {
            return true;
        } else {
            return false;
        }
    }

    //Crea un nuevo cliente
    /*public function getLog($usuarioNombre)
{
$query  = "INSERT INTO tb_client (business_name,subscriber,department,municipality) VALUES ('" . $data['business_name'] . "','" . $data['subscriber'] . "','" . $data['department'] . "','" . $data['municipality'] . "')";
$result = mysqli_query($this->link, $query);
if (mysqli_affected_rows($this->link) > 0) {
return true;
} else {
return false;
}
}*/
}
