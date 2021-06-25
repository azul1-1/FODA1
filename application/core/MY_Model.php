<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Model extends CI_Model
{
    /**
     * Ejecuta la consulta SQL retornando un arreglo, objeto o booleano según la necesidad del usuario.
     * @param string $sentenciaSQL Consulta a ser ejecutada.
     * @param string $tipoResultado Escriba 'arreglo' o 'array' para devolver un arreglo, 'objeto' u 'object' para devolver un objeto.
     * @param string $modoRetorno Escriba 'arreglo-nulo' o 'array-null' para devolver un arreglo si se ejecuta bien y nulo si no, 'verdadero-falso' o 'true-false' para devolver verdadero si encuentra algún registro y falso si no encuentra nada, 'primer-registro' o 'first-row' para devolver la primera fila encontrada.
     * @param [type] $modoTransaccion Escriba 'iniciar transaccion' o 'trans_start' para iniciar una transacción, 'terminar transaccion' o 'trans_complete' para terminarla.
     * @param [type] $cerrarDB Escriba 'cerrar conexion' o 'close' para cerrar la conexión.
     * @return void
     */
    public function ejecutarConsulta($sentenciaSQL, $tipoResultado = "arreglo", $modoRetorno = "arreglo-nulo", $modoTransaccion = null, $cerrarDB = null)
    {
        $resultado = array();

        #Abre transacción
        if ($modoTransaccion == "iniciar transaccion" || $modoTransaccion == "trans_start") $this->db->trans_start();

        #Convierte la sentencia a query
        $query = $this->db->query($sentenciaSQL);

        #Ejecuta la query
        if ($tipoResultado == "arreglo" || $tipoResultado == "array") $resultado = $query->result_array();
        elseif ($tipoResultado == "objeto" || $tipoResultado == "object") $resultado = $query->result();
        else die("Error de capa 8.");

        #Verificar el modo de retorno
        if ($resultado != null) {
            switch ($modoRetorno) {
                case 'arreglo-nulo':
                case 'array-null':
                    $resultado;
                    break;
                case 'verdadero-falso':
                case 'true-false':
                    $resultado = true;
                    break;
                case 'primer-registro':
                case 'first-row':
                    $resultado[0];
                    break;
            }
        } else {
            switch ($modoRetorno) {
                case 'arreglo-nulo':
                case 'array-null':
                    $resultado = null;
                    break;
                case 'verdadero-falso':
                case 'true-false':
                    $resultado = false;
                    break;
                case 'primer-registro':
                case 'first-row':
                    $resultado = null;
                    break;
            }
        }

        #Cierra transacción
        if ($modoTransaccion == "terminar transaccion" || $modoTransaccion == "trans_complete") $this->db->trans_complete();
        #Limpia memoria y cierra conexión
        if ($cerrarDB == "cerrar conexion") {
            $this->db->free_result();
            $this->db->close();
        }

        return $resultado;
    }
}
