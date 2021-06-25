
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuario_model extends MY_Model
{
    /**
     * Permission constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }




    /**
     * Update de ejemplo
     */
    /*
    public function update($data){
        $query = "UPDATE apoderado SET fecha_email = now() WHERE codigo = '{$data['codigo']}' AND fecha_email >= NOW() - INTERVAL 1 DAY"; //Este código es único, por lo tanto sirve para seleccionar a un apoderado
        $this->db->query($query);
        $this->db->close();
    }*/

    /**
     * Select de ejemplo
     * @return void
     */
    /*
    public function select(){
        $datos = array();
        $sql = "SELECT fecha_email, codigo FROM apoderado";
        $query = $this->db->query($sql);
        $datos = $query->result_array();
        $this->db->close();
        return $datos;
    }
    */

    public function getUsuario($nombre, $clave)
    {
        $sql = "SELECT nombre, clave FROM usuario WHERE nombre = '$nombre' AND clave = '$clave'";
        return $this->ejecutarConsulta($sql, "array", "primer-registro");
    }


    /**
     * Insert de ejemplo
     * @return void
     */
    /*
    public function insert($nombre,$clave,$correo,$codigo,$activo){
        $query = "INSERT INTO `usuarios`(`idUsuario`, `nombre`, `clave`, `correo`, `fecha_correo`, `codigo`, `fecha_creacion`, `activo`) VALUES (NULL,'$nombre','$clave','$correo','$fecha_correo','$codigo')";
        $this->db->query($query);
        $this->db->close();
    }
    */

    /**
     * Delete de ejemplo
     */
    /*
    public function delete($id_postulante)
    {
        $sql = "DELETE FROM postulante_jardin WHERE id_postulante = " . $id_postulante;
        $this->db->query($sql);
        $this->db->close();
    }
    */
}
