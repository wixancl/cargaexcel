@extends('layouts.app')

@section('content')


<?php

    $cons_usuario="root";
    $cons_contra="";
    $cons_base_datos="sistemavisor";
    $cons_equipo="localhost";
    $obj_conexion = 
    mysqli_connect($cons_equipo,$cons_usuario,$cons_contra,$cons_base_datos);
    if(!$obj_conexion)
    {
        echo "<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>";
    }
    else
    {
        echo " <!-- <h3>Conexion Exitosa PHP - MySQL</h3><hr><br> -->";
    }
    
    /* N° DE CONSULTA DE URGENCIA ACTUAL*/
    $var_consulta= "SELECT * FROM pass_urgencia24_total ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_000 = $var_fila["dato"];
      }
    }
    else
    {
      echo "No hay Registros";
    }












































/*****************************************************************************************************************************************************/
/*****************************************************************************************************************************************************/
/** SAN JUAN DE DIOS                                                                                                                                **/
/*****************************************************************************************************************************************************/
/*****************************************************************************************************************************************************/

    /******************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL SAN JUAN DE DIOS */
    /******************************************************************************/    
    $var_consulta= "SELECT * FROM pass_urgencia24_total_hsj ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_pass_urgencia24_total_hsj = $var_fila["dato"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /****************************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL SAN JUAN DE DIOS PEDIATRICO */
    /****************************************************************************************/    
    $var_consulta= "SELECT * FROM pass_urgencia24_pediatrico_hsj ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_pass_urgencia24_pediatrico_hsj = $var_fila["dato"];
      }
    }
    else
    {
      echo "No hay Registros";
    }    
    /************************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL SAN JUAN DE DIOS ADULTO */
    /************************************************************************************/    
    $var_consulta= "SELECT * FROM pass_urgencia24_adulto_hsj ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_pass_urgencia24_adulto_hsj = $var_fila["dato"];
      }
    }
    else
    {
      echo "No hay Registros";
    } 

    /**************************************************************************************/    
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL SAN JUAN DE DIOS TOTAL C1 */
    /**************************************************************************************/    
    $var_consulta= "SELECT * FROM pass_urgencia24_total_c1_hsj ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_to_c1_hsj = $var_fila["dato"];
        $var_urgencia24_to_c1_fecha_hsj = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /*******************************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL SAN JUAN DE DIOS PEDIATRICO C1 */
    /*******************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_pediatrico_c1_hsj ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_pe_c1_hsj = $var_fila["dato"];
        $var_urgencia24_pe_c1_fecha_hsj = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /***************************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL SAN JUAN DE DIOS ADULTO C1 */
    /***************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_adulto_c1_hsj ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_ad_c1_hsj = $var_fila["dato"];
        $var_urgencia24_ad_c1_fecha_hsj = $var_fila["fecha"];        
      }
    }
    else
    {
      echo "No hay Registros";
    }
    
    /**************************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL SAN JUAN DE DIOS TOTAL C2 */
    /**************************************************************************************/    
    $var_consulta= "SELECT * FROM pass_urgencia24_total_c2_hsj ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_to_c2_hsj = $var_fila["dato"];
        $var_urgencia24_to_c2_fecha_hsj = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /*******************************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL SAN JUAN DE DIOS PEDIATRICO C2 */
    /*******************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_pediatrico_c2_hsj ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_pe_c2_hsj = $var_fila["dato"];
        $var_urgencia24_pe_c2_fecha_hsj = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /***************************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL SAN JUAN DE DIOS ADULTO C2 */
    /***************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_adulto_c2_hsj ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_ad_c2_hsj = $var_fila["dato"];
        $var_urgencia24_ad_c2_fecha_hsj = $var_fila["fecha"];        
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /**************************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL SAN JUAN DE DIOS TOTAL C3 */
    /**************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_total_c3_hsj ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_to_c3_hsj = $var_fila["dato"];
        $var_urgencia24_to_c3_fecha_hsj = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /*******************************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL SAN JUAN DE DIOS PEDIATRICO C3 */
    /*******************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_pediatrico_c3_hsj ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_pe_c3_hsj = $var_fila["dato"];
        $var_urgencia24_pe_c3_fecha_hsj = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /***************************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL SAN JUAN DE DIOS ADULTO C3 */
    /***************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_adulto_c3_hsj ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_ad_c3_hsj = $var_fila["dato"];
        $var_urgencia24_ad_c3_fecha_hsj = $var_fila["fecha"];        
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /**************************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL SAN JUAN DE DIOS TOTAL C4 */
    /**************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_total_c4_hsj ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_to_c4_hsj = $var_fila["dato"];
        $var_urgencia24_to_c4_fecha_hsj = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /*******************************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL SAN JUAN DE DIOS PEDIATRICO C4 */
    /*******************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_pediatrico_c4_hsj ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_pe_c4_hsj = $var_fila["dato"];
        $var_urgencia24_pe_c4_fecha_hsj = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /***************************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL SAN JUAN DE DIOS ADULTO C4 */
    /***************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_adulto_c4_hsj ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_ad_c4_hsj = $var_fila["dato"];
        $var_urgencia24_ad_c4_fecha_hsj = $var_fila["fecha"];        
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /**************************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL SAN JUAN DE DIOS TOTAL C5 */
    /**************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_total_c5_hsj ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_to_c5_hsj = $var_fila["dato"];
        $var_urgencia24_to_c5_fecha_hsj = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /*******************************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL SAN JUAN DE DIOS PEDIATRICO C5 */
    /*******************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_pediatrico_c5_hsj ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_pe_c5_hsj = $var_fila["dato"];
        $var_urgencia24_pe_c5_fecha_hsj = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /***************************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL SAN JUAN DE DIOS ADULTO C5 */
    /***************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_adulto_c5_hsj ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_ad_c5_hsj = $var_fila["dato"];
        $var_urgencia24_ad_c5_fecha_hsj = $var_fila["fecha"];        
      }
    }
    else
    {
      echo "No hay Registros";
    }

/************************************************************************************************************************************************************/
/************************************************************************************************************************************************************/


    /**************************************************************************************/    
    /* MAX TIEMPO DE CATEGORIZACION DE URGENCIA ACTUALHOSPITAL SAN JUAN DE DIOS TOTAL C1 */
    /**************************************************************************************/    
    $var_consulta= "SELECT * FROM pass_urgencia24_maxtiempo_total_c1_hsj ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_maxtiempo_to_c1_hsj = $var_fila["dato"];
        $var_urgencia24_maxtiempo_to_c1_fecha_hsj = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /*******************************************************************************************/
    /* MAX TIEMPO DE CATEGORIZACION DE URGENCIA ACTUALHOSPITAL SAN JUAN DE DIOS PEDIATRICO C1 */
    /*******************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_maxtiempo_pediatrico_c1_hsj ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_maxtiempo_pe_c1_hsj = $var_fila["dato"];
        $var_urgencia24_maxtiempo_pe_c1_fecha_hsj = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /***************************************************************************************/
    /* MAX TIEMPO DE CATEGORIZACION DE URGENCIA ACTUALHOSPITAL SAN JUAN DE DIOS ADULTO C1 */
    /***************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_maxtiempo_adulto_c1_hsj ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_maxtiempo_ad_c1_hsj = $var_fila["dato"];
        $var_urgencia24_maxtiempo_ad_c1_fecha_hsj = $var_fila["fecha"];        
      }
    }
    else
    {
      echo "No hay Registros";
    }
    
    /**************************************************************************************/
    /* MAX TIEMPO DE CATEGORIZACION DE URGENCIA ACTUALHOSPITAL SAN JUAN DE DIOS TOTAL C2 */
    /**************************************************************************************/    
    $var_consulta= "SELECT * FROM pass_urgencia24_maxtiempo_total_c2_hsj ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_maxtiempo_to_c2_hsj = $var_fila["dato"];
        $var_urgencia24_maxtiempo_to_c2_fecha_hsj = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /*******************************************************************************************/
    /* MAX TIEMPO DE CATEGORIZACION DE URGENCIA ACTUALHOSPITAL SAN JUAN DE DIOS PEDIATRICO C2 */
    /*******************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_maxtiempo_pediatrico_c2_hsj ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_maxtiempo_pe_c2_hsj = $var_fila["dato"];
        $var_urgencia24_maxtiempo_pe_c2_fecha_hsj = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /***************************************************************************************/
    /* MAX TIEMPO DE CATEGORIZACION DE URGENCIA ACTUALHOSPITAL SAN JUAN DE DIOS ADULTO C2 */
    /***************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_maxtiempo_adulto_c2_hsj ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_maxtiempo_ad_c2_hsj = $var_fila["dato"];
        $var_urgencia24_maxtiempo_ad_c2_fecha_hsj = $var_fila["fecha"];        
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /**************************************************************************************/
    /* MAX TIEMPO DE CATEGORIZACION DE URGENCIA ACTUALHOSPITAL SAN JUAN DE DIOS TOTAL C3 */
    /**************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_maxtiempo_total_c3_hsj ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_maxtiempo_to_c3_hsj = $var_fila["dato"];
        $var_urgencia24_maxtiempo_to_c3_fecha_hsj = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /*******************************************************************************************/
    /* MAX TIEMPO DE CATEGORIZACION DE URGENCIA ACTUALHOSPITAL SAN JUAN DE DIOS PEDIATRICO C3 */
    /*******************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_maxtiempo_pediatrico_c3_hsj ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_maxtiempo_pe_c3_hsj = $var_fila["dato"];
        $var_urgencia24_maxtiempo_pe_c3_fecha_hsj = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /***************************************************************************************/
    /* MAX TIEMPO DE CATEGORIZACION DE URGENCIA ACTUALHOSPITAL SAN JUAN DE DIOS ADULTO C3 */
    /***************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_maxtiempo_adulto_c3_hsj ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_maxtiempo_ad_c3_hsj = $var_fila["dato"];
        $var_urgencia24_maxtiempo_ad_c3_fecha_hsj = $var_fila["fecha"];        
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /**************************************************************************************/
    /* MAX TIEMPO DE CATEGORIZACION DE URGENCIA ACTUALHOSPITAL SAN JUAN DE DIOS TOTAL C4 */
    /**************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_maxtiempo_total_c4_hsj ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_maxtiempo_to_c4_hsj = $var_fila["dato"];
        $var_urgencia24_maxtiempo_to_c4_fecha_hsj = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /*******************************************************************************************/
    /* MAX TIEMPO DE CATEGORIZACION DE URGENCIA ACTUALHOSPITAL SAN JUAN DE DIOS PEDIATRICO C4 */
    /*******************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_maxtiempo_pediatrico_c4_hsj ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_maxtiempo_pe_c4_hsj = $var_fila["dato"];
        $var_urgencia24_maxtiempo_pe_c4_fecha_hsj = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /***************************************************************************************/
    /* MAX TIEMPO DE CATEGORIZACION DE URGENCIA ACTUALHOSPITAL SAN JUAN DE DIOS ADULTO C4 */
    /***************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_maxtiempo_adulto_c4_hsj ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_maxtiempo_ad_c4_hsj = $var_fila["dato"];
        $var_urgencia24_maxtiempo_ad_c4_fecha_hsj = $var_fila["fecha"];        
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /**************************************************************************************/
    /* MAX TIEMPO DE CATEGORIZACION DE URGENCIA ACTUALHOSPITAL SAN JUAN DE DIOS TOTAL C5 */
    /**************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_maxtiempo_total_c5_hsj ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_maxtiempo_to_c5_hsj = $var_fila["dato"];
        $var_urgencia24_maxtiempo_to_c5_fecha_hsj = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /*******************************************************************************************/
    /* MAX TIEMPO DE CATEGORIZACION URGENCIA ACTUALHOSPITAL SAN JUAN DE DIOS PEDIATRICO C5 */
    /*******************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_maxtiempo_pediatrico_c5_hsj ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_maxtiempo_pe_c5_hsj = $var_fila["dato"];
        $var_urgencia24_maxtiempo_pe_c5_fecha_hsj = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /***************************************************************************************/
    /* MAX TIEMPO DE CATEGORIZACION URGENCIA ACTUALHOSPITAL SAN JUAN DE DIOS ADULTO C5 */
    /***************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_maxtiempo_adulto_c5_hsj ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_maxtiempo_ad_c5_hsj = $var_fila["dato"];
        $var_urgencia24_maxtiempo_ad_c5_fecha_hsj = $var_fila["fecha"];        
      }
    }
    else
    {
      echo "No hay Registros";
    }

/************************************************************************************************************************************************************/
/************************************************************************************************************************************************************/

    /***************************************************************************************/
    /* N° DE CONSULTA FALLLECIDOS HOSPITAL SAN JUAN DE DIOS */
    /***************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_fallecido_hsj ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_fallecido_hsj = $var_fila["dato"];
        $var_urgencia24_fallecido_fecha_hsj = $var_fila["fecha"];        
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /***************************************************************************************/
    /* N° DE CONSULTA EN ESPERA HOSPITAL SAN JUAN DE DIOS */
    /***************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_enespera_hsj ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_enespera_hsj = $var_fila["dato"];
        $var_urgencia24_enespera_fecha_hsj = $var_fila["fecha"];        
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /***************************************************************************************/
    /* N° DE CONSULTA EN REANIMADOR HOSPITAL SAN JUAN DE DIOS */
    /***************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_reanimador_hsj ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_reanimador_hsj = $var_fila["dato"];
        $var_urgencia24_reanimador_fecha_hsj = $var_fila["fecha"];        
      }
    }
    else
    {
      echo "No hay Registros";
    }

/************************************************************************************************************************************************************/
/************************************************************************************************************************************************************/







/*****************************************************************************************************************************************************/
/*****************************************************************************************************************************************************/
/**  Penaflor                                                                                                                          **/
/*****************************************************************************************************************************************************/
/*****************************************************************************************************************************************************/

    /***************************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL PEÑAFLOR */
    /****************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_total_penaflor ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_pass_urgencia24_total_penaflor = $var_fila["dato"];
      }
    }
    else
    {
      echo "No hay Registros";
    } 
    /***************************************************************************************/    

    /***************************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL PEÑAFLOR PEDIATRICO */
    /***************************************************************************************/    
    $var_consulta= "SELECT * FROM pass_urgencia24_pediatrico_penaflor ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_pass_urgencia24_pediatrico_penaflor = $var_fila["dato"];
      }
    }
    else
    {
      echo "No hay Registros";
    } 
    /***************************************************************************************/

    /***************************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL PEÑAFLOR ADULTO */
    /***************************************************************************************/    
    $var_consulta= "SELECT * FROM pass_urgencia24_adulto_penaflor ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_pass_urgencia24_adulto_penaflor = $var_fila["dato"];
      }
    }
    else
    {
      echo "No hay Registros";
    }
    /***************************************************************************************/     

    /***************************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL PENAFLOR TOTAL C1  */
    /***************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_total_c1_penaflor ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_to_c1_penaflor = $var_fila["dato"];
        $var_urgencia24_to_c1_fecha_penaflor = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }
    /***************************************************************************************/

    /***************************************************************************************/    
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL PENAFLOR PEDIATRICO C1  */
    /***************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_pediatrico_c1_penaflor ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_pe_c1_penaflor = $var_fila["dato"];
        $var_urgencia24_pe_c1_fecha_penaflor = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }
    /***************************************************************************************/

    /***************************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL PENAFLOR ADULTO C1  */
    /***************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_adulto_c1_penaflor ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_ad_c1_penaflor = $var_fila["dato"];
        $var_urgencia24_ad_c1_fecha_penaflor = $var_fila["fecha"];        
      }
    }
    else
    {
      echo "No hay Registros";
    }
    /***************************************************************************************/    
    
    /***************************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL PENAFLOR TOTAL C2  */
    /***************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_total_c2_penaflor ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_to_c2_penaflor = $var_fila["dato"];
        $var_urgencia24_to_c2_fecha_penaflor = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }
    /***************************************************************************************/

    /***************************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL PENAFLOR PEDIATRICO C2 */
    /***************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_pediatrico_c2_penaflor ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_pe_c2_penaflor = $var_fila["dato"];
        $var_urgencia24_pe_c2_fecha_penaflor = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }
    /***************************************************************************************/

    /***************************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL PENAFLOR ADULTO C2 */
    /***************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_adulto_c2_penaflor ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_ad_c2_penaflor = $var_fila["dato"];
        $var_urgencia24_ad_c2_fecha_penaflor = $var_fila["fecha"];        
      }
    }
    else
    {
      echo "No hay Registros";
    }
    /***************************************************************************************/

    /***************************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL PENAFLOR TOTAL C3 */
    /***************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_total_c3_penaflor ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_to_c3_penaflor = $var_fila["dato"];
        $var_urgencia24_to_c3_fecha_penaflor = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }
    /***************************************************************************************/

    /***************************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL PENAFLOR PEDIATRICO C3 */
    /***************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_pediatrico_c3_penaflor ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_pe_c3_penaflor = $var_fila["dato"];
        $var_urgencia24_pe_c3_fecha_penaflor = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }
    /***************************************************************************************/

    /***************************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL PENAFLOR ADULTO C3 */
    /***************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_adulto_c3_penaflor ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_ad_c3_penaflor = $var_fila["dato"];
        $var_urgencia24_ad_c3_fecha_penaflor = $var_fila["fecha"];        
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /***************************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL PENAFLOR TOTAL C4  */
    /***************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_total_c4_penaflor ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_to_c4_penaflor = $var_fila["dato"];
        $var_urgencia24_to_c4_fecha_penaflor = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }
    /***************************************************************************************/

    /***************************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL PENAFLOR PEDIATRICO C4  */
    /***************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_pediatrico_c4_penaflor ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_pe_c4_penaflor = $var_fila["dato"];
        $var_urgencia24_pe_c4_fecha_penaflor = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }
    /***************************************************************************************/

    /***************************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL PENAFLOR ADULTO C4  */
    /***************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_adulto_c4_penaflor ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_ad_c4_penaflor = $var_fila["dato"];
        $var_urgencia24_ad_c4_fecha_penaflor = $var_fila["fecha"];        
      }
    }
    else
    {
      echo "No hay Registros";
    }
    /***************************************************************************************/    

    /***************************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL PENAFLOR TOTAL C5 */
    /***************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_total_c5_penaflor ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_to_c5_penaflor = $var_fila["dato"];
        $var_urgencia24_to_c5_fecha_penaflor = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }
    /***************************************************************************************/

    /***************************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL PENAFLOR PEDIATRICO C5         */
    /***************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_pediatrico_c5_penaflor ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_pe_c5_penaflor = $var_fila["dato"];
        $var_urgencia24_pe_c5_fecha_penaflor = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }
    /***************************************************************************************/

    /***************************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL PENAFLOR ADULTO C5  */
    /***************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_adulto_c5_penaflor ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_ad_c5_penaflor = $var_fila["dato"];
        $var_urgencia24_ad_c5_fecha_penaflor = $var_fila["fecha"];        
      }
    }
    else
    {
      echo "No hay Registros";
    }
    /***************************************************************************************/    

/************************************************************************************************************************************************************/
/************************************************************************************************************************************************************/


    /**************************************************************************************/    
    /* MAX TIEMPO DE CATEGORIZACION DE URGENCIA ACTUAL HOSPITAL PENAFLOR TOTAL C1 */
    /**************************************************************************************/    
    $var_consulta= "SELECT * FROM pass_urgencia24_maxtiempo_total_c1_penaflor ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_maxtiempo_to_c1_penaflor = $var_fila["dato"];
        $var_urgencia24_maxtiempo_to_c1_fecha_penaflor = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /*******************************************************************************************/
    /* MAX TIEMPO DE CATEGORIZACION DE URGENCIA ACTUAL HOSPITAL PENAFLOR PEDIATRICO C1 */
    /*******************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_maxtiempo_pediatrico_c1_penaflor ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_maxtiempo_pe_c1_penaflor = $var_fila["dato"];
        $var_urgencia24_maxtiempo_pe_c1_fecha_penaflor = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /***************************************************************************************/
    /* MAX TIEMPO DE CATEGORIZACION DE URGENCIA ACTUAL HOSPITAL PENAFLOR ADULTO C1 */
    /***************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_maxtiempo_adulto_c1_penaflor ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_maxtiempo_ad_c1_penaflor = $var_fila["dato"];
        $var_urgencia24_maxtiempo_ad_c1_fecha_penaflor = $var_fila["fecha"];        
      }
    }
    else
    {
      echo "No hay Registros";
    }
    
    /**************************************************************************************/
    /* MAX TIEMPO DE CATEGORIZACION DE URGENCIA ACTUAL HOSPITAL PENAFLOR TOTAL C2 */
    /**************************************************************************************/    
    $var_consulta= "SELECT * FROM pass_urgencia24_maxtiempo_total_c2_penaflor ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_maxtiempo_to_c2_penaflor = $var_fila["dato"];
        $var_urgencia24_maxtiempo_to_c2_fecha_penaflor = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /*******************************************************************************************/
    /* MAX TIEMPO DE CATEGORIZACION DE URGENCIA ACTUAL HOSPITAL PENAFLOR PEDIATRICO C2 */
    /*******************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_maxtiempo_pediatrico_c2_penaflor ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_maxtiempo_pe_c2_penaflor = $var_fila["dato"];
        $var_urgencia24_maxtiempo_pe_c2_fecha_penaflor = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /***************************************************************************************/
    /* MAX TIEMPO DE CATEGORIZACION DE URGENCIA ACTUAL HOSPITAL PENAFLOR ADULTO C2 */
    /***************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_maxtiempo_adulto_c2_penaflor ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_maxtiempo_ad_c2_penaflor = $var_fila["dato"];
        $var_urgencia24_maxtiempo_ad_c2_fecha_penaflor = $var_fila["fecha"];        
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /**************************************************************************************/
    /* MAX TIEMPO DE CATEGORIZACION DE URGENCIA ACTUAL HOSPITAL PENAFLOR TOTAL C3 */
    /**************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_maxtiempo_total_c3_penaflor ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_maxtiempo_to_c3_penaflor = $var_fila["dato"];
        $var_urgencia24_maxtiempo_to_c3_fecha_penaflor = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /*******************************************************************************************/
    /* MAX TIEMPO DE CATEGORIZACION DE URGENCIA ACTUAL HOSPITAL PENAFLOR PEDIATRICO C3 */
    /*******************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_maxtiempo_pediatrico_c3_penaflor ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_maxtiempo_pe_c3_penaflor = $var_fila["dato"];
        $var_urgencia24_maxtiempo_pe_c3_fecha_penaflor = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /***************************************************************************************/
    /* MAX TIEMPO DE CATEGORIZACION DE URGENCIA ACTUAL HOSPITAL PENAFLOR ADULTO C3 */
    /***************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_maxtiempo_adulto_c3_penaflor ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_maxtiempo_ad_c3_penaflor = $var_fila["dato"];
        $var_urgencia24_maxtiempo_ad_c3_fecha_penaflor = $var_fila["fecha"];        
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /**************************************************************************************/
    /* MAX TIEMPO DE CATEGORIZACION DE URGENCIA ACTUAL HOSPITAL PENAFLOR TOTAL C4 */
    /**************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_maxtiempo_total_c4_penaflor ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_maxtiempo_to_c4_penaflor = $var_fila["dato"];
        $var_urgencia24_maxtiempo_to_c4_fecha_penaflor = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /*******************************************************************************************/
    /* MAX TIEMPO DE CATEGORIZACION DE URGENCIA ACTUAL HOSPITAL PEAFLOR PEDIATRICO C4 */
    /*******************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_maxtiempo_pediatrico_c4_penaflor ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_maxtiempo_pe_c4_penaflor = $var_fila["dato"];
        $var_urgencia24_maxtiempo_pe_c4_fecha_penaflor = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /***************************************************************************************/
    /* MAX TIEMPO DE CATEGORIZACION DE URGENCIA ACTUAL HOSPITAL PENAFLOR ADULTO C4 */
    /***************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_maxtiempo_adulto_c4_penaflor ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_maxtiempo_ad_c4_penaflor = $var_fila["dato"];
        $var_urgencia24_maxtiempo_ad_c4_fecha_penaflor = $var_fila["fecha"];        
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /**************************************************************************************/
    /* MAX TIEMPO DE CATEGORIZACION DE URGENCIA ACTUAL HOSPITAL PENAFLOR TOTAL C5 */
    /**************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_maxtiempo_total_c5_penaflor ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_maxtiempo_to_c5_penaflor = $var_fila["dato"];
        $var_urgencia24_maxtiempo_to_c5_fecha_penaflor = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /*******************************************************************************************/
    /* MAX TIEMPO DE CATEGORIZACION URGENCIA ACTUAL HOSPITAL PENAFLOR PEDIATRICO C5 */
    /*******************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_maxtiempo_pediatrico_c5_penaflor ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_maxtiempo_pe_c5_penaflor = $var_fila["dato"];
        $var_urgencia24_maxtiempo_pe_c5_fecha_penaflor = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /***************************************************************************************/
    /* MAX TIEMPO DE CATEGORIZACION URGENCIA ACTUAL HOSPITAL PENAFLOR ADULTO C5 */
    /***************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_maxtiempo_adulto_c5_penaflor ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_maxtiempo_ad_c5_penaflor = $var_fila["dato"];
        $var_urgencia24_maxtiempo_ad_c5_fecha_penaflor = $var_fila["fecha"];        
      }
    }
    else
    {
      echo "No hay Registros";
    }











































    /***************************************************************************************/
    /* N° DE CONSULTA FALLLECIDOS HOSPITAL PENAFLOR */
    /***************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_fallecido_penaflor ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_fallecido_penaflor = $var_fila["dato"];
        $var_urgencia24_fallecido_fecha_penaflor = $var_fila["fecha"];        
      }
    }
    else
    {
      echo "No hay Registros";
    }
    /***************************************************************************************/

    /***************************************************************************************/
    /* N° DE CONSULTA EN ESPERA HOSPITAL PENAFLOR */
    /***************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_enespera_penaflor ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_enespera_penaflor = $var_fila["dato"];
        $var_urgencia24_enespera_fecha_penaflor = $var_fila["fecha"];        
      }
    }
    else
    {
      echo "No hay Registros";
    }
    /***************************************************************************************/

    /***************************************************************************************/
    /* N° DE CONSULTA EN REANIMADOR HOSPITAL PENAFLOR */
    /***************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_reanimador_penaflor ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_reanimador_penaflor = $var_fila["dato"];
        $var_urgencia24_reanimador_fecha_penaflor = $var_fila["fecha"];        
      }
    }
    else
    {
      echo "No hay Registros";
    }
    /***************************************************************************************/
































































/*****************************************************************************************************************************************************/
/*****************************************************************************************************************************************************/
/** CURAVAVI                                                                                                                               **/
/*****************************************************************************************************************************************************/
/*****************************************************************************************************************************************************/

    /******************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL CURACAVI */
    /******************************************************************************/
        
    $var_consulta= "SELECT * FROM pass_urgencia24_total_curacavi ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_pass_urgencia24_total_curacavi = $var_fila["dato"];
      }
    }
    else
    {
      echo "No hay Registros";
    } 

    /******************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL CURACAVI PEDIATRICO */
    /******************************************************************************/

    $var_consulta= "SELECT * FROM pass_urgencia24_pediatrico_curacavi ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_pass_urgencia24_pediatrico_curacavi = $var_fila["dato"];
      }
    }
    else
    {
      echo "No hay Registros";
    } 

    /******************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL CURACAVI ADULTO */
    /******************************************************************************/

    $var_consulta= "SELECT * FROM pass_urgencia24_adulto_curacavi ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_pass_urgencia24_adulto_curacavi = $var_fila["dato"];
      }
    }
    else
    {
      echo "No hay Registros";
    } 
 

    /*******************************************************************************/    
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL CURACAVI TOTAL C1  */
    /*******************************************************************************/    

    $var_consulta= "SELECT * FROM pass_urgencia24_total_c1_curacavi ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_to_c1_curacavi = $var_fila["dato"];
        $var_urgencia24_to_c1_fecha_curacavi = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /************************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL CURACAVI PEDIATRICO C1  */
    /************************************************************************************/

    $var_consulta= "SELECT * FROM pass_urgencia24_pediatrico_c1_curacavi ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_pe_c1_curacavi = $var_fila["dato"];
        $var_urgencia24_pe_c1_fecha_curacavi = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /********************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL CURACAVI ADULTO C1  */
    /********************************************************************************/

    $var_consulta= "SELECT * FROM pass_urgencia24_adulto_c1_curacavi ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_ad_c1_curacavi = $var_fila["dato"];
        $var_urgencia24_ad_c1_fecha_curacavi = $var_fila["fecha"];        
      }
    }
    else
    {
      echo "No hay Registros";
    }
    
    /*******************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL CURACAVI TOTAL C2  */
    /*******************************************************************************/    

    $var_consulta= "SELECT * FROM pass_urgencia24_total_c2_curacavi ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_to_c2_curacavi = $var_fila["dato"];
        $var_urgencia24_to_c2_fecha_curacavi = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /************************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL CURACAVI PEDIATRICO C2 */
    /************************************************************************************/

    $var_consulta= "SELECT * FROM pass_urgencia24_pediatrico_c2_curacavi ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_pe_c2_curacavi = $var_fila["dato"];
        $var_urgencia24_pe_c2_fecha_curacavi = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /********************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL CURACAVI ADULTO C2 */
    /********************************************************************************/

    $var_consulta= "SELECT * FROM pass_urgencia24_adulto_c2_curacavi ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_ad_c2_curacavi = $var_fila["dato"];
        $var_urgencia24_ad_c2_fecha_curacavi = $var_fila["fecha"];        
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /*******************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL CURACAVI TOTAL C3 */
    /*******************************************************************************/

    $var_consulta= "SELECT * FROM pass_urgencia24_total_c3_curacavi ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_to_c3_curacavi = $var_fila["dato"];
        $var_urgencia24_to_c3_fecha_curacavi = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /************************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL CURACAVI PEDIATRICO C3 */
    /************************************************************************************/

    $var_consulta= "SELECT * FROM pass_urgencia24_pediatrico_c3_curacavi ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_pe_c3_curacavi = $var_fila["dato"];
        $var_urgencia24_pe_c3_fecha_curacavi = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /********************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL CURACAVI ADULTO C3 */
    /********************************************************************************/

    $var_consulta= "SELECT * FROM pass_urgencia24_adulto_c3_curacavi ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_ad_c3_curacavi = $var_fila["dato"];
        $var_urgencia24_ad_c3_fecha_curacavi = $var_fila["fecha"];        
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /*******************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL CURACAVI TOTAL C4  */
    /*******************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_total_c4_curacavi ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_to_c4_curacavi = $var_fila["dato"];
        $var_urgencia24_to_c4_fecha_curacavi = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /************************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL CURACAVI PEDIATRICO C4  */
    /************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_pediatrico_c4_curacavi ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_pe_c4_curacavi = $var_fila["dato"];
        $var_urgencia24_pe_c4_fecha_curacavi = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /********************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL CURACAVI ADULTO C4  */
    /********************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_adulto_c4_curacavi ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_ad_c4_curacavi = $var_fila["dato"];
        $var_urgencia24_ad_c4_fecha_curacavi = $var_fila["fecha"];        
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /*******************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL CURACAVI TOTAL C5 */
    /*******************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_total_c5_curacavi ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_to_c5_curacavi = $var_fila["dato"];
        $var_urgencia24_to_c5_fecha_curacavi = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /*******************************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL CURACAVI PEDIATRICO C5         */
    /*******************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_pediatrico_c5_curacavi ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_pe_c5_curacavi = $var_fila["dato"];
        $var_urgencia24_pe_c5_fecha_curacavi = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /********************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL CURACAVI ADULTO C5  */
    /********************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_adulto_c5_curacavi ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_ad_c5_curacavi = $var_fila["dato"];
        $var_urgencia24_ad_c5_fecha_curacavi = $var_fila["fecha"];        
      }
    }
    else
    {
      echo "No hay Registros";
    }

/************************************************************************************************************************************************************/
/************************************************************************************************************************************************************/


    /**************************************************************************************/    
    /* MAX TIEMPO DE CATEGORIZACION DE URGENCIA ACTUAL HOSPITAL CURACAVI TOTAL C1 */
    /**************************************************************************************/    
    $var_consulta= "SELECT * FROM pass_urgencia24_maxtiempo_total_c1_curacavi ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_maxtiempo_to_c1_curacavi = $var_fila["dato"];
        $var_urgencia24_maxtiempo_to_c1_fecha_curacavi = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /*******************************************************************************************/
    /* MAX TIEMPO DE CATEGORIZACION DE URGENCIA ACTUAL HOSPITAL CURACAVI PEDIATRICO C1 */
    /*******************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_maxtiempo_pediatrico_c1_curacavi ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_maxtiempo_pe_c1_curacavi = $var_fila["dato"];
        $var_urgencia24_maxtiempo_pe_c1_fecha_curacavi = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /***************************************************************************************/
    /* MAX TIEMPO DE CATEGORIZACION DE URGENCIA ACTUAL HOSPITAL CURACAVI ADULTO C1 */
    /***************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_maxtiempo_adulto_c1_curacavi ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_maxtiempo_ad_c1_curacavi = $var_fila["dato"];
        $var_urgencia24_maxtiempo_ad_c1_fecha_curacavi = $var_fila["fecha"];        
      }
    }
    else
    {
      echo "No hay Registros";
    }
    
    /**************************************************************************************/
    /* MAX TIEMPO DE CATEGORIZACION DE URGENCIA ACTUAL HOSPITAL CURACAVI TOTAL C2 */
    /**************************************************************************************/    
    $var_consulta= "SELECT * FROM pass_urgencia24_maxtiempo_total_c2_curacavi ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_maxtiempo_to_c2_curacavi = $var_fila["dato"];
        $var_urgencia24_maxtiempo_to_c2_fecha_curacavi = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /*******************************************************************************************/
    /* MAX TIEMPO DE CATEGORIZACION DE URGENCIA ACTUAL HOSPITAL CURACAVI PEDIATRICO C2 */
    /*******************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_maxtiempo_pediatrico_c2_curacavi ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_maxtiempo_pe_c2_curacavi = $var_fila["dato"];
        $var_urgencia24_maxtiempo_pe_c2_fecha_curacavi = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /***************************************************************************************/
    /* MAX TIEMPO DE CATEGORIZACION DE URGENCIA ACTUAL HOSPITAL CURACAVI ADULTO C2 */
    /***************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_maxtiempo_adulto_c2_curacavi ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_maxtiempo_ad_c2_curacavi = $var_fila["dato"];
        $var_urgencia24_maxtiempo_ad_c2_fecha_curacavi = $var_fila["fecha"];        
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /**************************************************************************************/
    /* MAX TIEMPO DE CATEGORIZACION DE URGENCIA ACTUAL HOSPITAL CURACAVI TOTAL C3 */
    /**************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_maxtiempo_total_c3_curacavi ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_maxtiempo_to_c3_curacavi = $var_fila["dato"];
        $var_urgencia24_maxtiempo_to_c3_fecha_curacavi = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /*******************************************************************************************/
    /* MAX TIEMPO DE CATEGORIZACION DE URGENCIA ACTUAL HOSPITAL CURACAVI PEDIATRICO C3 */
    /*******************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_maxtiempo_pediatrico_c3_curacavi ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_maxtiempo_pe_c3_curacavi = $var_fila["dato"];
        $var_urgencia24_maxtiempo_pe_c3_fecha_curacavi = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /***************************************************************************************/
    /* MAX TIEMPO DE CATEGORIZACION DE URGENCIA ACTUAL HOSPITAL CURACAVI ADULTO C3 */
    /***************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_maxtiempo_adulto_c3_curacavi ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_maxtiempo_ad_c3_curacavi = $var_fila["dato"];
        $var_urgencia24_maxtiempo_ad_c3_fecha_curacavi = $var_fila["fecha"];        
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /**************************************************************************************/
    /* MAX TIEMPO DE CATEGORIZACION DE URGENCIA ACTUAL HOSPITAL CURACAVI TOTAL C4 */
    /**************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_maxtiempo_total_c4_curacavi ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_maxtiempo_to_c4_curacavi = $var_fila["dato"];
        $var_urgencia24_maxtiempo_to_c4_fecha_curacavi = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /*******************************************************************************************/
    /* MAX TIEMPO DE CATEGORIZACION DE URGENCIA ACTUAL HOSPITAL CURACAVI PEDIATRICO C4 */
    /*******************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_maxtiempo_pediatrico_c4_curacavi ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_maxtiempo_pe_c4_curacavi = $var_fila["dato"];
        $var_urgencia24_maxtiempo_pe_c4_fecha_curacavi = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /***************************************************************************************/
    /* MAX TIEMPO DE CATEGORIZACION DE URGENCIA ACTUAL HOSPITAL CURACAVI ADULTO C4 */
    /***************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_maxtiempo_adulto_c4_curacavi ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_maxtiempo_ad_c4_curacavi = $var_fila["dato"];
        $var_urgencia24_maxtiempo_ad_c4_fecha_curacavi = $var_fila["fecha"];        
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /**************************************************************************************/
    /* MAX TIEMPO DE CATEGORIZACION DE URGENCIA ACTUAL HOSPITAL CURACAVI TOTAL C5 */
    /**************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_maxtiempo_total_c5_curacavi ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_maxtiempo_to_c5_curacavi = $var_fila["dato"];
        $var_urgencia24_maxtiempo_to_c5_fecha_curacavi = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /*******************************************************************************************/
    /* MAX TIEMPO DE CATEGORIZACION URGENCIA ACTUAL HOSPITAL CURACAVI PEDIATRICO C5 */
    /*******************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_maxtiempo_pediatrico_c5_curacavi ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_maxtiempo_pe_c5_curacavi = $var_fila["dato"];
        $var_urgencia24_maxtiempo_pe_c5_fecha_curacavi = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /***************************************************************************************/
    /* MAX TIEMPO DE CATEGORIZACION URGENCIA ACTUAL HOSPITAL CURACAVI ADULTO C5 */
    /***************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_maxtiempo_adulto_c5_curacavi ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_maxtiempo_ad_c5_curacavi = $var_fila["dato"];
        $var_urgencia24_maxtiempo_ad_c5_fecha_curacavi = $var_fila["fecha"];        
      }
    }
    else
    {
      echo "No hay Registros";
    }

/************************************************************************************************************************************************************/
/************************************************************************************************************************************************************/

    /***************************************************************************************/
    /* N° DE CONSULTA FALLLECIDOS HOSPITAL CURACAVI */
    /***************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_fallecido_curacavi ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_fallecido_curacavi = $var_fila["dato"];
        $var_urgencia24_fallecido_fecha_curacavi = $var_fila["fecha"];        
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /***************************************************************************************/
    /* N° DE CONSULTA EN ESPERA HOSPITAL CURACAVI */
    /***************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_enespera_curacavi ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_enespera_curacavi = $var_fila["dato"];
        $var_urgencia24_enespera_fecha_curacavi = $var_fila["fecha"];        
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /***************************************************************************************/
    /* N° DE CONSULTA EN REANIMADOR HOSPITAL CURACAVI */
    /***************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_reanimador_curacavi ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_reanimador_curacavi = $var_fila["dato"];
        $var_urgencia24_reanimador_fecha_curacavi = $var_fila["fecha"];        
      }
    }
    else
    {
      echo "No hay Registros";
    }








































































































/*****************************************************************************************************************************************************/
/*****************************************************************************************************************************************************/
/**  Hospital de Talagante                                                                                                                          **/
/*****************************************************************************************************************************************************/
/*****************************************************************************************************************************************************/

    /**********************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL TALAGANTE */
    /**********************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_total_talagante ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_pass_urgencia24_total_talagante = $var_fila["dato"];
      }
    }
    else
    {
      echo "No hay Registros";
    } 

    /*********************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL TALAGANTE PEDIATRICO */
    /*********************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_pediatrico_talagante ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_pass_urgencia24_pediatrico_talagante = $var_fila["dato"];
      }
    }
    else
    {
      echo "No hay Registros";
    } 

    /*****************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL TALAGANTE ADULTO */
    /*****************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_adulto_talagante ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_pass_urgencia24_adulto_talagante = $var_fila["dato"];
      }
    }
    else
    {
      echo "No hay Registros";
    } 

    /*******************************************************************************/    
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL TALAGANTE TOTAL C1 */
    /*******************************************************************************/    
    $var_consulta= "SELECT * FROM pass_urgencia24_total_c1_talagante ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_to_c1_talagante = $var_fila["dato"];
        $var_urgencia24_to_c1_fecha_talagante = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /************************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL TALAGANTE PEDIATRICO C1 */
    /************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_pediatrico_c1_talagante ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_pe_c1_talagante = $var_fila["dato"];
        $var_urgencia24_pe_c1_fecha_talagante = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /********************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL TALAGANTE ADULTO C1 */
    /********************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_adulto_c1_talagante ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_ad_c1_talagante = $var_fila["dato"];
        $var_urgencia24_ad_c1_fecha_talagante = $var_fila["fecha"];        
      }
    }
    else
    {
      echo "No hay Registros";
    }
    
    /*******************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL TALAGANTE TOTAL C2 */
    /*******************************************************************************/    
    $var_consulta= "SELECT * FROM pass_urgencia24_total_c2_talagante ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_to_c2_talagante = $var_fila["dato"];
        $var_urgencia24_to_c2_fecha_talagante = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /************************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL TALAGANTE PEDIATRICO C2 */
    /************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_pediatrico_c2_talagante ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_pe_c2_talagante = $var_fila["dato"];
        $var_urgencia24_pe_c2_fecha_talagante = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /********************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL TALAGANTE ADULTO C2 */
    /********************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_adulto_c2_talagante ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_ad_c2_talagante = $var_fila["dato"];
        $var_urgencia24_ad_c2_fecha_talagante = $var_fila["fecha"];        
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /*******************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL TALAGANTE TOTAL C3 */
    /*******************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_total_c3_talagante ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_to_c3_talagante = $var_fila["dato"];
        $var_urgencia24_to_c3_fecha_talagante = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /************************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL TALAGANTE PEDIATRICO C3 */
    /************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_pediatrico_c3_talagante ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_pe_c3_talagante = $var_fila["dato"];
        $var_urgencia24_pe_c3_fecha_talagante = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /********************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL TALAGANTE ADULTO C3 */
    /********************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_adulto_c3_talagante ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_ad_c3_talagante = $var_fila["dato"];
        $var_urgencia24_ad_c3_fecha_talagante = $var_fila["fecha"];        
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /*******************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL TALAGANTE TOTAL C4 */
    /*******************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_total_c4_talagante ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_to_c4_talagante = $var_fila["dato"];
        $var_urgencia24_to_c4_fecha_talagante = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /************************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL TALAGANTE PEDIATRICO C4 */
    /************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_pediatrico_c4_talagante ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_pe_c4_talagante = $var_fila["dato"];
        $var_urgencia24_pe_c4_fecha_talagante = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /********************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL TALAGANTE ADULTO C4 */
    /********************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_adulto_c4_talagante ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_ad_c4_talagante = $var_fila["dato"];
        $var_urgencia24_ad_c4_fecha_talagante = $var_fila["fecha"];        
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /*******************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL TALAGANTE TOTAL C5 */
    /*******************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_total_c5_talagante ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_to_c5_talagante = $var_fila["dato"];
        $var_urgencia24_to_c5_fecha_talagante = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /*******************************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL TALAGANTE PEDIATRICO C5 */
    /*******************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_pediatrico_c5_talagante ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_pe_c5_talagante = $var_fila["dato"];
        $var_urgencia24_pe_c5_fecha_talagante = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /********************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL TALAGANTE ADULTO C5 */
    /********************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_adulto_c5_talagante ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_ad_c5_talagante = $var_fila["dato"];
        $var_urgencia24_ad_c5_fecha_talagante = $var_fila["fecha"];        
      }
    }
    else
    {
      echo "No hay Registros";
    }


    /***************************************************************************************/
    /* N° DE CONSULTA FALLLECIDOS HOSPITAL TALAGANTE */
    /***************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_fallecido_talagante ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_fallecido_talagante = $var_fila["dato"];
        $var_urgencia24_fallecido_fecha_talagante = $var_fila["fecha"];        
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /***************************************************************************************/
    /* N° DE CONSULTA EN ESPERA HOSPITAL TALAGANTE */
    /***************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_enespera_talagante ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_enespera_talagante = $var_fila["dato"];
        $var_urgencia24_enespera_fecha_talagante = $var_fila["fecha"];        
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /***************************************************************************************/
    /* N° DE CONSULTA EN REANIMADOR HOSPITAL TALAGANTE */
    /***************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_reanimador_talagante ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_reanimador_talagante = $var_fila["dato"];
        $var_urgencia24_reanimador_fecha_talagante = $var_fila["fecha"];        
      }
    }
    else
    {
      echo "No hay Registros";
    }


/*****************************************************************************************************************************************************/
/*****************************************************************************************************************************************************/
/*****************************************************************************************************************************************************/
/*****************************************************************************************************************************************************/
/*****************************************************************************************************************************************************/






    /******************************************************************************/



    /******************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL MELIPILLA */
    $var_consulta= "SELECT * FROM pass_urgencia24_total_melipilla ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_pass_urgencia24_total_melipilla = $var_fila["dato"];
      }
    }
    else
    {
      echo "No hay Registros";
    } 

    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL MELIPILLA PEDIATRICO */
    $var_consulta= "SELECT * FROM pass_urgencia24_pediatrico_melipilla ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_pass_urgencia24_pediatrico_melipilla = $var_fila["dato"];
      }
    }
    else
    {
      echo "No hay Registros";
    } 


    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL MELIPILLA ADULTO */
    $var_consulta= "SELECT * FROM pass_urgencia24_adulto_melipilla ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_pass_urgencia24_adulto_melipilla = $var_fila["dato"];
      }
    }
    else
    {
      echo "No hay Registros";
    } 
    /******************************************************************************/


    /*******************************************************************************/    
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL MELIPILLA TOTAL C1 */
    /*******************************************************************************/    
    $var_consulta= "SELECT * FROM pass_urgencia24_total_c1_melipilla ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_to_c1_melipilla = $var_fila["dato"];
        $var_urgencia24_to_c1_fecha_melipilla = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /************************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL MELIPILLA PEDIATRICO C1 */
    /************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_pediatrico_c1_melipilla ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_pe_c1_melipilla = $var_fila["dato"];
        $var_urgencia24_pe_c1_fecha_melipilla = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /********************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL MELIPILLA ADULTO C1 */
    /********************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_adulto_c1_melipilla ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_ad_c1_melipilla = $var_fila["dato"];
        $var_urgencia24_ad_c1_fecha_melipilla = $var_fila["fecha"];        
      }
    }
    else
    {
      echo "No hay Registros";
    }
    
    /*******************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL MELIPILLA TOTAL C2 */
    /*******************************************************************************/    
    $var_consulta= "SELECT * FROM pass_urgencia24_total_c2_melipilla ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_to_c2_melipilla = $var_fila["dato"];
        $var_urgencia24_to_c2_fecha_melipilla = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /************************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL MELIPILLA PEDIATRICO C2 */
    /************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_pediatrico_c2_melipilla ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_pe_c2_melipilla = $var_fila["dato"];
        $var_urgencia24_pe_c2_fecha_melipilla = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /********************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL MELIPILLA ADULTO C2 */
    /********************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_adulto_c2_melipilla ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_ad_c2_melipilla = $var_fila["dato"];
        $var_urgencia24_ad_c2_fecha_melipilla = $var_fila["fecha"];        
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /*******************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL MELIPILLA TOTAL C3 */
    /*******************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_total_c3_melipilla ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_to_c3_melipilla = $var_fila["dato"];
        $var_urgencia24_to_c3_fecha_melipilla = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /************************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL MELIPILLA PEDIATRICO C3 */
    /************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_pediatrico_c3_melipilla ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_pe_c3_melipilla = $var_fila["dato"];
        $var_urgencia24_pe_c3_fecha_melipilla = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /********************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL MELIPILLA ADULTO C3 */
    /********************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_adulto_c3_melipilla ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_ad_c3_melipilla = $var_fila["dato"];
        $var_urgencia24_ad_c3_fecha_melipilla = $var_fila["fecha"];        
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /*******************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL MELIPILLA TOTAL C4 */
    /*******************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_total_c4_melipilla ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_to_c4_melipilla = $var_fila["dato"];
        $var_urgencia24_to_c4_fecha_melipilla = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /************************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL MELIPILLA PEDIATRICO C4 */
    /************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_pediatrico_c4_melipilla ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_pe_c4_melipilla = $var_fila["dato"];
        $var_urgencia24_pe_c4_fecha_melipilla = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /********************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL MELIPILLA ADULTO C4 */
    /********************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_adulto_c4_melipilla ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_ad_c4_melipilla = $var_fila["dato"];
        $var_urgencia24_ad_c4_fecha_melipilla = $var_fila["fecha"];        
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /*******************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL MELIPILLA TOTAL C5 */
    /*******************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_total_c5_melipilla ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_to_c5_melipilla = $var_fila["dato"];
        $var_urgencia24_to_c5_fecha_melipilla = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /*******************************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL MELIPILLA PEDIATRICO C5 */
    /*******************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_pediatrico_c5_melipilla ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_pe_c5_melipilla = $var_fila["dato"];
        $var_urgencia24_pe_c5_fecha_melipilla = $var_fila["fecha"];
      }
    }
    else
    {
      echo "No hay Registros";
    }

    /********************************************************************************/
    /* N° DE CONSULTA DE URGENCIA ACTUALHOSPITAL MELIPILLA ADULTO C5 */
    /********************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_adulto_c5_melipilla ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_ad_c5_melipilla = $var_fila["dato"];
        $var_urgencia24_ad_c5_fecha_melipilla = $var_fila["fecha"];        
      }
    }
    else
    {
      echo "No hay Registros";
    }


    /***************************************************************************************/
    /* N° DE CONSULTA FALLLECIDOS HOSPITAL MELIPILLA */
    /***************************************************************************************/
    $var_consulta= "SELECT * FROM pass_urgencia24_fallecido_melipilla ORDER BY id DESC LIMIT 1";
    $var_resultado = $obj_conexion->query($var_consulta);
    
    if($var_resultado->num_rows>0)
    {
      while ($var_fila=$var_resultado->fetch_array())
      {
        $var_urgencia24_fallecido_melipilla = $var_fila["dato"];
        $var_urgencia24_fallecido_fecha_melipilla = $var_fila["fecha"];        
      }
    }
    else
    {
      echo "No hay Registros";
    }
















    /******************************************************************************/






































































































/*****************************************************************************************************************************************************/
/*****************************************************************************************************************************************************/
/*****************************************************************************************************************************************************/
/*****************************************************************************************************************************************************/
/*****************************************************************************************************************************************************/






































































?>





          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Resumen Red <b>SSMOC</b> – Urgencia Hospitalaria</h1>          
          </div>
          
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <a href="#" class="fas fa-print" id="sidebarToggle" value="Imprimir" onclick="window.print()"> </a>        
          </div>
                
          <!-- Content Row -->
          <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-12 col-md-6 mb-2">
              <div class="card border-default shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-default text-uppercase mb-1">N° de pacientes admitidos</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"> 
                            <?php 
                            echo $total_admitidos = 
                            $var_pass_urgencia24_total_hsj + 
                            $var_pass_urgencia24_total_curacavi; 
                            ?> 
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span> -->
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-chart-bar fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span>
                    </div> 
 
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->

          </div>












          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <!-- Pending Requests Card Example -->
            <div class="col-xl-6 col-md-6 mb-2">
              <div class="card border-default shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-default text-uppercase mb-1">N° de pacientes fallecidos (24 horas)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"> 
                      <?php 
                      echo $totalfallecidos =
                      $var_urgencia24_fallecido_hsj +
                      $var_urgencia24_fallecido_penaflor;
                      ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span> -->
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-chart-bar fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span>
                    </div>                                       
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-6 col-md-6 mb-2">
              <div class="card border-default shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-default text-uppercase mb-1">N° de pacientes según categorización</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"> 
                      <?php 
                      echo $totalcategorizados = 
                      $var_urgencia24_to_c1_hsj + 
                      $var_urgencia24_to_c2_hsj + 
                      $var_urgencia24_to_c3_hsj + 
                      $var_urgencia24_to_c4_hsj + 
                      $var_urgencia24_to_c5_hsj +
                      $var_urgencia24_to_c1_penaflor + 
                      $var_urgencia24_to_c2_penaflor + 
                      $var_urgencia24_to_c3_penaflor + 
                      $var_urgencia24_to_c4_penaflor + 
                      $var_urgencia24_to_c5_penaflor ; 
                      ?> </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span> -->
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-chart-bar fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span>
                    </div>
          <!--
                    <div class="col-auto">
                      <a class="btn btn-success btn-circle" data-toggle="modal" data-target="#categorizacion">
                        <i class="fas fa-success-circle"></i>
                      </a>
                    </div>
          -->
                  </div>
                </div>
              </div>
            </div>

          </div>










          <!-- Content Row -->
          <!-- ----------------------------------------------------------------------------------------------------------------- -->
          <!-- Content Row -->
          <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-6 col-md-6 mb-2">
              <div class="card border-default shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-default text-uppercase mb-1">N° de pacientes con indicación de hospitalización en espera de cama</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"> 
                            <?php
                              echo $totalenespera = 
                              $var_urgencia24_enespera_hsj +
                              $var_urgencia24_enespera_penaflor
                              ;
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span> -->
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-chart-bar fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span>
                    </div>                                        
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-6 col-md-6 mb-2">
              <div class="card border-default shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-default text-uppercase mb-1">N°de pacientes en el reanimador</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php
                         echo $totalreanimador =
                         $var_urgencia24_reanimador_hsj +
                         $var_urgencia24_reanimador_penaflor ;
                         ;
                        ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span> -->
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-chart-bar fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span>
                    </div>                                        
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->
          <!-- ----------------------------------------------------------------------------------------------------------------- -->

          <!-- ----------------------------------------------------------------------------------------------------------------- -->






























          <!-- Content Row -->
         <!-- ----------------------------------------------------------------------------------------------------------------- -->

          <b>TOTAL N° DE CONSULTA DE URGENCIA ACTUAL</b>
          <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-4 mb-3">
              <div class="card border-dark shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">N° DE CONSULTA DE URGENCIA ACTUAL </b></div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                            <?php echo $total_consulta_uegencia = 
                            $var_pass_urgencia24_total_hsj +
                            $var_pass_urgencia24_total_penaflor
                            ; ?></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span> -->
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-hospital fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span>
                    </div>                                        
                  </div>
                </div>
              </div>
            </div>
          <!-- Content Row -->
            <div class="col-xl-4 col-md-4 mb-3">
              <div class="card border-dark shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">N° DE CONSULTA DE URGENCIA ACTUAL <b>PEDIATRICO</b></div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                            <?php 
                              echo $total_consulta_urgencia_pediatrico = 
                              $var_pass_urgencia24_pediatrico_hsj +
                              $var_pass_urgencia24_pediatrico_penaflor 
                              ; ?></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span> -->
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-hospital fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span>
                    </div>                                        
                  </div>
                </div>
              </div>
            </div>
          <!-- Content Row -->
            <div class="col-xl-4 col-md-4 mb-3">
              <div class="card border-dark shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">N° DE CONSULTA DE URGENCIA ACTUAL <b>ADULTO</b></div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                            <?php 
                              echo $total_consulta_urgencia_adulto = 
                              $var_pass_urgencia24_adulto_hsj +
                              $var_pass_urgencia24_adulto_penaflor
                              ; ?>      
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span> -->
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-hospital fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span>
                    </div>                                        
                  </div>
                </div>
              </div>
            </div>
          </div>
















<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------  -->
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------  -->
<!-- Hospital San Juan de Dios C1 C2 C3 C4 C5                                                                                                              -->
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------  -->
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------  -->
          <!-- Content Row -->
          <b>Hospital San Juan de Dios</b>
          <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-4 mb-3">
              <div class="card border-dark shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">N° DE CONSULTA DE URGENCIA ACTUAL </b></div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $var_pass_urgencia24_total_hsj; ?></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span> -->
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-hospital fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span>
                    </div>                                        
                  </div>
                </div>
              </div>
            </div>
          <!-- Content Row -->
            <div class="col-xl-4 col-md-4 mb-3">
              <div class="card border-dark shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">N° DE CONSULTA DE URGENCIA ACTUAL <b>PEDIATRICO</b></div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $var_pass_urgencia24_pediatrico_hsj; ?></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span> -->
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-hospital fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span>
                    </div>                                        
                  </div>
                </div>
              </div>
            </div>
          <!-- Content Row -->
            <div class="col-xl-4 col-md-4 mb-3">
              <div class="card border-dark shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">N° DE CONSULTA DE URGENCIA ACTUAL <b>ADULTO</b></div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $var_pass_urgencia24_adulto_hsj; ?></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span> -->
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-hospital fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span>
                    </div>                                        
                  </div>
                </div>
              </div>
            </div>
          </div>

 <!-- -Hospital San Juan de Dios PACIENTES FALLECIDOS - CON INDICACIÓN DE HOSPITALIZACIÓN EN ESPERA DE CAMA - N°DE PACIENTES EN EL REANIMADOR -->
         <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-4 mb-3">
              <div class="card border-dark shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">N° DE PACIENTES FALLECIDOS </b></div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $var_urgencia24_fallecido_hsj; ?></div>
                          <div class="text-xs font-weight-bold text-uppercase mb-1">Ultima Actualizacion: <?php echo $var_urgencia24_fallecido_fecha_hsj; ?> </b></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span> -->
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fa-3x fa-fw text-dark">C5</i><span class="sr-only"></span> -->
                    </div>                                        
                  </div>
                </div>
              </div>
            </div>
          <!-- Content Row -->
            <div class="col-xl-4 col-md-4 mb-3">
              <div class="card border-dark shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">N° CON INDICACIÓN DE HOSPITALIZACIÓN EN ESPERA DE CAMA</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $var_urgencia24_enespera_hsj; ?></div>
                          <div class="text-xs font-weight-bold text-uppercase mb-1">Ultima Actualizacion: <?php echo $var_urgencia24_enespera_fecha_hsj; ?> </b></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span> -->
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fa-3x fa-fw text-dark">C5</i><span class="sr-only"></span> -->
                    </div>                                        
                  </div>
                </div>
              </div>
            </div>
          <!-- Content Row -->
            <div class="col-xl-4 col-md-4 mb-3">
              <div class="card border-dark shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">N° DE PACIENTES EN EL REANIMADOR </div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $var_urgencia24_reanimador_hsj; ?></div>
                          <div class="text-xs font-weight-bold text-uppercase mb-1">Ultima Actualizacion: <?php echo $var_urgencia24_reanimador_fecha_hsj; ?> </b></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span> -->
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fa-3x fa-fw text-success">C5</i><span class="sr-only"></span> -->
                    </div>                                        
                  </div>
                </div>
              </div>
            </div>
          </div>














          <!-- -------------------------------- Hospital San Juan de Dios C1 -------------------------------- -->
          <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-4 mb-3">
              <div class="card border-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">N° DE CONSULTA DE URGENCIA ACTUAL </b></div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $var_urgencia24_to_c1_hsj ?>  
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Ultima Actualizacion: <?php echo $var_urgencia24_to_c1_fecha_hsj; ?> </b></div>
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Max Tiempo Categorización en Min : <?php echo $var_urgencia24_maxtiempo_to_c1_hsj; ?> </b></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span> -->
                    </div>
                    <div class="col-auto">
                      <i class="fa-3x fa-fw text-danger">C1</i><span class="sr-only"></span>
                    </div>                                        
                  </div>
                </div>
              </div>
            </div>
          <!-- Content Row -->
            <div class="col-xl-4 col-md-4 mb-3">
              <div class="card border-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">N° DE CONSULTA DE URGENCIA ACTUAL <b>PEDIATRICO</b></div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $var_urgencia24_pe_c1_hsj; ?></div>
                          <div class="text-xs font-weight-bold text-uppercase mb-1">Ultima Actualizacion: <?php echo $var_urgencia24_pe_c1_fecha_hsj; ?> </b></div>
                          <div class="text-xs font-weight-bold text-uppercase mb-1">Max Tiempo Categorización en Min : <?php echo $var_urgencia24_maxtiempo_pe_c1_hsj; ?> </b></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span> -->
                    </div>
                    <div class="col-auto">
                      <i class="fa-3x fa-fw text-danger">C1</i><span class="sr-only"></span>
                    </div>                                        
                  </div>
                </div>
              </div>
            </div>
          <!-- Content Row -->
            <div class="col-xl-4 col-md-4 mb-3">
              <div class="card border-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">N° DE CONSULTA DE URGENCIA ACTUAL <b>ADULTO</b></div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $var_urgencia24_ad_c1_hsj; ?></div>
                          <div class="text-xs font-weight-bold text-uppercase mb-1">Ultima Actualizacion: <?php echo $var_urgencia24_ad_c1_fecha_hsj; ?> </b></div>
                          <div class="text-xs font-weight-bold text-uppercase mb-1">Max Tiempo Categorización en Min : <?php echo $var_urgencia24_maxtiempo_ad_c1_hsj; ?> </b></div>                        
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span> -->
                    </div>
                    <div class="col-auto">
                      <i class="fa-3x fa-fw text-danger">C1</i><span class="sr-only"></span>
                    </div>                                        
                  </div>
                </div>
              </div>
            </div>
          </div>


          <!-- -------------------------------- Hospital San Juan de Dios C2 -------------------------------- -->
          <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-4 mb-3">
              <div class="card border-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">N° DE CONSULTA DE URGENCIA ACTUAL </b></div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $var_urgencia24_to_c2_hsj; ?></div>
                          <div class="text-xs font-weight-bold text-uppercase mb-1">Ultima Actualizacion: <?php echo $var_urgencia24_to_c2_fecha_hsj; ?> </b></div>
                          <div class="text-xs font-weight-bold text-uppercase mb-1">Max Tiempo Categorización en Min : <?php echo $var_urgencia24_maxtiempo_to_c2_hsj; ?> </b></div> 
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span> -->
                    </div>
                    <div class="col-auto">
                      <i class="fa-3x fa-fw text-warning">C2</i><span class="sr-only"></span>
                    </div>                                        
                  </div>
                </div>
              </div>
            </div>
          <!-- Content Row -->
            <div class="col-xl-4 col-md-4 mb-3">
              <div class="card border-warning h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">N° DE CONSULTA DE URGENCIA ACTUAL <b>PEDIATRICO</b></div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $var_urgencia24_pe_c2_hsj; ?></div>
                          <div class="text-xs font-weight-bold text-uppercase mb-1">Ultima Actualizacion: <?php echo $var_urgencia24_pe_c2_fecha_hsj; ?> </b></div>
                          <div class="text-xs font-weight-bold text-uppercase mb-1">Max Tiempo Categorización en Min : <?php echo $var_urgencia24_maxtiempo_pe_c2_hsj; ?> </b></div> 
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span> -->
                    </div>
                    <div class="col-auto">
                      <i class="fa-3x fa-fw text-warning">C2</i><span class="sr-only"></span>
                    </div>                                        
                  </div>
                </div>
              </div>
            </div>
          <!-- Content Row -->
            <div class="col-xl-4 col-md-4 mb-3">
              <div class="card border-warning h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">N° DE CONSULTA DE URGENCIA ACTUAL <b>ADULTO</b></div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $var_urgencia24_ad_c2_hsj; ?></div>
                          <div class="text-xs font-weight-bold text-uppercase mb-1">Ultima Actualizacion: <?php echo $var_urgencia24_ad_c2_fecha_hsj; ?> </b></div>
                          <div class="text-xs font-weight-bold text-uppercase mb-1">Max Tiempo Categorización en Min : <?php echo $var_urgencia24_maxtiempo_ad_c2_hsj; ?> </b></div> 
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span> -->
                    </div>
                    <div class="col-auto">
                      <i class="fa-3x fa-fw text-warning">C2</i><span class="sr-only"></span>
                    </div>                                        
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- -------------------------------- Hospital San Juan de Dios C3 -------------------------------- -->
          <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-4 mb-3">
              <div class="card border-warning  shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning  text-uppercase mb-1">N° DE CONSULTA DE URGENCIA ACTUAL </b></div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $var_urgencia24_to_c3_hsj; ?></div>
                          <div class="text-xs font-weight-bold text-uppercase mb-1">Ultima Actualizacion: <?php echo $var_urgencia24_to_c3_fecha_hsj; ?> </b></div>
                          <div class="text-xs font-weight-bold text-uppercase mb-1">Max Tiempo Categorización en Min : <?php echo $var_urgencia24_maxtiempo_to_c3_hsj; ?> </b></div>                           
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span> -->
                    </div>
                    <div class="col-auto">
                      <i class="fa-3x fa-fw text-warning">C3</i><span class="sr-only"></span>
                    </div>                                        
                  </div>
                </div>
              </div>
            </div>
          <!-- Content Row -->
            <div class="col-xl-4 col-md-4 mb-3">
              <div class="card border-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">N° DE CONSULTA DE URGENCIA ACTUAL <b>PEDIATRICO</b></div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $var_urgencia24_pe_c3_hsj; ?></div>
                          <div class="text-xs font-weight-bold text-uppercase mb-1">Ultima Actualizacion: <?php echo $var_urgencia24_pe_c3_fecha_hsj; ?> </b></div>
                          <div class="text-xs font-weight-bold text-uppercase mb-1">Max Tiempo Categorización en Min : <?php echo $var_urgencia24_maxtiempo_pe_c3_hsj; ?> </b></div>                            
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span> -->
                    </div>
                    <div class="col-auto">
                      <i class="fa-3x fa-fw text-warning">C3</i><span class="sr-only"></span>
                    </div>                                        
                  </div>
                </div>
              </div>
            </div>
          <!-- Content Row -->
            <div class="col-xl-4 col-md-4 mb-3">
              <div class="card border-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">N° DE CONSULTA DE URGENCIA ACTUAL <b>ADULTO</b></div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $var_urgencia24_ad_c3_hsj; ?></div>
                          <div class="text-xs font-weight-bold text-uppercase mb-1">Ultima Actualizacion: <?php echo $var_urgencia24_ad_c3_fecha_hsj; ?> </b></div>
                          <div class="text-xs font-weight-bold text-uppercase mb-1">Max Tiempo Categorización en Min : <?php echo $var_urgencia24_maxtiempo_ad_c3_hsj; ?> </b></div>                            
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span> -->
                    </div>
                    <div class="col-auto">
                      <i class="fa-3x fa-fw text-warning">C3</i><span class="sr-only"></span>
                    </div>                                        
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- -------------------------------- Hospital San Juan de Dios C4 -------------------------------- -->
          <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-4 mb-3">
              <div class="card border-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">N° DE CONSULTA DE URGENCIA ACTUAL </b></div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $var_urgencia24_to_c4_hsj; ?></div>
                          <div class="text-xs font-weight-bold text-uppercase mb-1">Ultima Actualizacion: <?php echo $var_urgencia24_to_c4_fecha_hsj; ?> </b></div>
                          <div class="text-xs font-weight-bold text-uppercase mb-1">Max Tiempo Categorización en Min : <?php echo $var_urgencia24_maxtiempo_to_c4_hsj; ?> </b></div>    
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span> -->
                    </div>
                    <div class="col-auto">
                      <i class="fa-3x fa-fw text-success">C4</i><span class="sr-only"></span>
                    </div>                                        
                  </div>
                </div>
              </div>
            </div>
          <!-- Content Row -->
            <div class="col-xl-4 col-md-4 mb-3">
              <div class="card border-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">N° DE CONSULTA DE URGENCIA ACTUAL <b>PEDIATRICO</b></div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $var_urgencia24_pe_c4_hsj; ?></div>
                          <div class="text-xs font-weight-bold text-uppercase mb-1">Ultima Actualizacion: <?php echo $var_urgencia24_pe_c4_fecha_hsj; ?> </b></div>
                          <div class="text-xs font-weight-bold text-uppercase mb-1">Max Tiempo Categorización en Min : <?php echo $var_urgencia24_maxtiempo_pe_c4_hsj; ?> </b></div>  
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span> -->
                    </div>
                    <div class="col-auto">
                      <i class="fa-3x fa-fw text-success">C4</i><span class="sr-only"></span>
                    </div>                                        
                  </div>
                </div>
              </div>
            </div>
          <!-- Content Row -->
            <div class="col-xl-4 col-md-4 mb-3">
              <div class="card border-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">N° DE CONSULTA DE URGENCIA ACTUAL <b>ADULTO</b></div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $var_urgencia24_ad_c4_hsj; ?></div>
                          <div class="text-xs font-weight-bold text-uppercase mb-1">Ultima Actualizacion: <?php echo $var_urgencia24_ad_c4_fecha_hsj; ?> </b></div>
                          <div class="text-xs font-weight-bold text-uppercase mb-1">Max Tiempo Categorización en Min : <?php echo $var_urgencia24_maxtiempo_ad_c4_hsj; ?> </b></div>  
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span> -->
                    </div>
                    <div class="col-auto">
                      <i class="fa-3x fa-fw text-success">C4</i><span class="sr-only"></span>
                    </div>                                        
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- -------------------------------- Hospital San Juan de Dios C5 -------------------------------- -->
          <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-4 mb-3">
              <div class="card border-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">N° DE CONSULTA DE URGENCIA ACTUAL </b></div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $var_urgencia24_to_c5_hsj; ?></div>
                          <div class="text-xs font-weight-bold text-uppercase mb-1">Ultima Actualizacion: <?php echo $var_urgencia24_to_c5_fecha_hsj; ?> </b></div>
                          <div class="text-xs font-weight-bold text-uppercase mb-1">Max Tiempo Categorización en Min : <?php echo $var_urgencia24_maxtiempo_to_c5_hsj; ?> </b></div>  
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span> -->
                    </div>
                    <div class="col-auto">
                      <i class="fa-3x fa-fw text-primary">C5</i><span class="sr-only"></span>
                    </div>                                        
                  </div>
                </div>
              </div>
            </div>
          <!-- Content Row -->
            <div class="col-xl-4 col-md-4 mb-3">
              <div class="card border-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">N° DE CONSULTA DE URGENCIA ACTUAL <b>PEDIATRICO</b></div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $var_urgencia24_pe_c5_hsj; ?></div>
                          <div class="text-xs font-weight-bold text-uppercase mb-1">Ultima Actualizacion: <?php echo $var_urgencia24_pe_c5_fecha_hsj; ?> </b></div>
                          <div class="text-xs font-weight-bold text-uppercase mb-1">Max Tiempo Categorización en Min : <?php echo $var_urgencia24_maxtiempo_pe_c5_hsj; ?> </b></div>  
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span> -->
                    </div>
                    <div class="col-auto">
                      <i class="fa-3x fa-fw text-primary">C5</i><span class="sr-only"></span>
                    </div>                                        
                  </div>
                </div>
              </div>
            </div>
          <!-- Content Row -->
            <div class="col-xl-4 col-md-4 mb-3">
              <div class="card border-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">N° DE CONSULTA DE URGENCIA ACTUAL <b>ADULTO</b></div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $var_urgencia24_ad_c5_hsj; ?></div>
                          <div class="text-xs font-weight-bold text-uppercase mb-1">Ultima Actualizacion: <?php echo $var_urgencia24_ad_c5_fecha_hsj; ?> </b></div>
                          <div class="text-xs font-weight-bold text-uppercase mb-1">Max Tiempo Categorización en Min : <?php echo $var_urgencia24_maxtiempo_ad_c5_hsj; ?> </b></div>  
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span> -->
                    </div>
                    <div class="col-auto">
                      <i class="fa-3x fa-fw text-primary">C5</i><span class="sr-only"></span>
                    </div>                                        
                  </div>
                </div>
              </div>
            </div>
          </div>
























































<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------  -->
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------  -->
<!-- Hospital penaflor C1 C2 C3 C4 C5                                                                                                              -->
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------  -->
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------  -->
          <!-- Content Row -->
          <b>Hospital Peñaflor</b>
          <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-4 mb-3">
              <div class="card border-dark shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">N° DE CONSULTA DE URGENCIA ACTUAL </b></div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $var_pass_urgencia24_total_penaflor; ?></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span> -->
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-hospital fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span>
                    </div>                                        
                  </div>
                </div>
              </div>
            </div>
          <!-- Content Row -->
            <div class="col-xl-4 col-md-4 mb-3">
              <div class="card border-dark shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">N° DE CONSULTA DE URGENCIA ACTUAL <b>PEDIATRICO</b></div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $var_pass_urgencia24_pediatrico_penaflor; ?></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span> -->
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-hospital fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span>
                    </div>                                        
                  </div>
                </div>
              </div>
            </div>
          <!-- Content Row -->
            <div class="col-xl-4 col-md-4 mb-3">
              <div class="card border-dark shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">N° DE CONSULTA DE URGENCIA ACTUAL <b>ADULTO</b></div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $var_pass_urgencia24_adulto_penaflor; ?></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span> -->
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-hospital fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span>
                    </div>                                        
                  </div>
                </div>
              </div>
            </div>
          </div>

 <!-- -Hospital penaflo PACIENTES FALLECIDOS - CON INDICACIÓN DE HOSPITALIZACIÓN EN ESPERA DE CAMA - N°DE PACIENTES EN EL REANIMADOR -->
         <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-4 mb-3">
              <div class="card border-dark shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">N° DE PACIENTES FALLECIDOS </b></div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $var_urgencia24_fallecido_penaflor; ?></div>
                          <div class="text-xs font-weight-bold text-uppercase mb-1">Ultima Actualizacion: <?php echo $var_urgencia24_fallecido_fecha_penaflor; ?> </b></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span> -->
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fa-3x fa-fw text-dark">C5</i><span class="sr-only"></span> -->
                    </div>                                        
                  </div>
                </div>
              </div>
            </div>
          <!-- Content Row -->
            <div class="col-xl-4 col-md-4 mb-3">
              <div class="card border-dark shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">N° CON INDICACIÓN DE HOSPITALIZACIÓN EN ESPERA DE CAMA</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $var_urgencia24_enespera_penaflor; ?></div>
                          <div class="text-xs font-weight-bold text-uppercase mb-1">Ultima Actualizacion: <?php echo $var_urgencia24_enespera_fecha_penaflor; ?> </b></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span> -->
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fa-3x fa-fw text-dark">C5</i><span class="sr-only"></span> -->
                    </div>                                        
                  </div>
                </div>
              </div>
            </div>
          <!-- Content Row -->
            <div class="col-xl-4 col-md-4 mb-3">
              <div class="card border-dark shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">N° DE PACIENTES EN EL REANIMADOR </div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $var_urgencia24_reanimador_penaflor; ?></div>
                          <div class="text-xs font-weight-bold text-uppercase mb-1">Ultima Actualizacion: <?php echo $var_urgencia24_reanimador_fecha_penaflor; ?> </b></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span> -->
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fa-3x fa-fw text-success">C5</i><span class="sr-only"></span> -->
                    </div>                                        
                  </div>
                </div>
              </div>
            </div>
          </div>














          <!-- -------------------------------- Hospital penaflor C1 -------------------------------- -->
          <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-4 mb-3">
              <div class="card border-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">N° DE CONSULTA DE URGENCIA ACTUAL </b></div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $var_urgencia24_to_c1_penaflor ?>  
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Ultima Actualizacion: <?php echo $var_urgencia24_to_c1_fecha_penaflor; ?> </b></div>

                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span> -->
                    </div>
                    <div class="col-auto">
                      <i class="fa-3x fa-fw text-danger">C1</i><span class="sr-only"></span>
                    </div>                                        
                  </div>
                </div>
              </div>
            </div>
          <!-- Content Row -->
            <div class="col-xl-4 col-md-4 mb-3">
              <div class="card border-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">N° DE CONSULTA DE URGENCIA ACTUAL <b>PEDIATRICO</b></div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $var_urgencia24_pe_c1_penaflor; ?></div>
                          <div class="text-xs font-weight-bold text-uppercase mb-1">Ultima Actualizacion: <?php echo $var_urgencia24_pe_c1_fecha_penaflor; ?> </b></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span> -->
                    </div>
                    <div class="col-auto">
                      <i class="fa-3x fa-fw text-danger">C1</i><span class="sr-only"></span>
                    </div>                                        
                  </div>
                </div>
              </div>
            </div>
          <!-- Content Row -->
            <div class="col-xl-4 col-md-4 mb-3">
              <div class="card border-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">N° DE CONSULTA DE URGENCIA ACTUAL <b>ADULTO</b></div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $var_urgencia24_ad_c1_penaflor; ?></div>
                          <div class="text-xs font-weight-bold text-uppercase mb-1">Ultima Actualizacion: <?php echo $var_urgencia24_ad_c1_fecha_penaflor; ?> </b></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span> -->
                    </div>
                    <div class="col-auto">
                      <i class="fa-3x fa-fw text-danger">C1</i><span class="sr-only"></span>
                    </div>                                        
                  </div>
                </div>
              </div>
            </div>
          </div>


          <!-- -------------------------------- Hospital penaflor C2 -------------------------------- -->
          <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-4 mb-3">
              <div class="card border-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">N° DE CONSULTA DE URGENCIA ACTUAL </b></div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $var_urgencia24_to_c2_penaflor; ?></div>
                          <div class="text-xs font-weight-bold text-uppercase mb-1">Ultima Actualizacion: <?php echo $var_urgencia24_to_c2_fecha_penaflor; ?> </b></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span> -->
                    </div>
                    <div class="col-auto">
                      <i class="fa-3x fa-fw text-warning">C2</i><span class="sr-only"></span>
                    </div>                                        
                  </div>
                </div>
              </div>
            </div>
          <!-- Content Row -->
            <div class="col-xl-4 col-md-4 mb-3">
              <div class="card border-warning h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">N° DE CONSULTA DE URGENCIA ACTUAL <b>PEDIATRICO</b></div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $var_urgencia24_pe_c2_penaflor; ?></div>
                          <div class="text-xs font-weight-bold text-uppercase mb-1">Ultima Actualizacion: <?php echo $var_urgencia24_pe_c2_fecha_penaflor; ?> </b></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span> -->
                    </div>
                    <div class="col-auto">
                      <i class="fa-3x fa-fw text-warning">C2</i><span class="sr-only"></span>
                    </div>                                        
                  </div>
                </div>
              </div>
            </div>
          <!-- Content Row -->
            <div class="col-xl-4 col-md-4 mb-3">
              <div class="card border-warning h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">N° DE CONSULTA DE URGENCIA ACTUAL <b>ADULTO</b></div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $var_urgencia24_ad_c2_penaflor; ?></div>
                          <div class="text-xs font-weight-bold text-uppercase mb-1">Ultima Actualizacion: <?php echo $var_urgencia24_ad_c2_fecha_penaflor; ?> </b></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span> -->
                    </div>
                    <div class="col-auto">
                      <i class="fa-3x fa-fw text-warning">C2</i><span class="sr-only"></span>
                    </div>                                        
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- -------------------------------- Hospital curacavi C3 -------------------------------- -->
          <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-4 mb-3">
              <div class="card border-warning  shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning  text-uppercase mb-1">N° DE CONSULTA DE URGENCIA ACTUAL </b></div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $var_urgencia24_to_c3_penaflor; ?></div>
                          <div class="text-xs font-weight-bold text-uppercase mb-1">Ultima Actualizacion: <?php echo $var_urgencia24_to_c3_fecha_penaflor; ?> </b></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span> -->
                    </div>
                    <div class="col-auto">
                      <i class="fa-3x fa-fw text-warning">C3</i><span class="sr-only"></span>
                    </div>                                        
                  </div>
                </div>
              </div>
            </div>
          <!-- Content Row -->
            <div class="col-xl-4 col-md-4 mb-3">
              <div class="card border-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">N° DE CONSULTA DE URGENCIA ACTUAL <b>PEDIATRICO</b></div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $var_urgencia24_pe_c3_penaflor; ?></div>
                          <div class="text-xs font-weight-bold text-uppercase mb-1">Ultima Actualizacion: <?php echo $var_urgencia24_pe_c3_fecha_penaflor; ?> </b></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span> -->
                    </div>
                    <div class="col-auto">
                      <i class="fa-3x fa-fw text-warning">C3</i><span class="sr-only"></span>
                    </div>                                        
                  </div>
                </div>
              </div>
            </div>
          <!-- Content Row -->
            <div class="col-xl-4 col-md-4 mb-3">
              <div class="card border-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">N° DE CONSULTA DE URGENCIA ACTUAL <b>ADULTO</b></div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $var_urgencia24_ad_c3_penaflor; ?></div>
                          <div class="text-xs font-weight-bold text-uppercase mb-1">Ultima Actualizacion: <?php echo $var_urgencia24_ad_c3_fecha_penaflor; ?> </b></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span> -->
                    </div>
                    <div class="col-auto">
                      <i class="fa-3x fa-fw text-warning">C3</i><span class="sr-only"></span>
                    </div>                                        
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- -------------------------------- Hospital curacavi C4 -------------------------------- -->
          <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-4 mb-3">
              <div class="card border-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">N° DE CONSULTA DE URGENCIA ACTUAL </b></div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $var_urgencia24_to_c4_penaflor; ?></div>
                          <div class="text-xs font-weight-bold text-uppercase mb-1">Ultima Actualizacion: <?php echo $var_urgencia24_to_c4_fecha_penaflor; ?> </b></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span> -->
                    </div>
                    <div class="col-auto">
                      <i class="fa-3x fa-fw text-success">C4</i><span class="sr-only"></span>
                    </div>                                        
                  </div>
                </div>
              </div>
            </div>
          <!-- Content Row -->
            <div class="col-xl-4 col-md-4 mb-3">
              <div class="card border-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">N° DE CONSULTA DE URGENCIA ACTUAL <b>PEDIATRICO</b></div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $var_urgencia24_pe_c4_penaflor; ?></div>
                          <div class="text-xs font-weight-bold text-uppercase mb-1">Ultima Actualizacion: <?php echo $var_urgencia24_pe_c4_fecha_penaflor; ?> </b></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span> -->
                    </div>
                    <div class="col-auto">
                      <i class="fa-3x fa-fw text-success">C4</i><span class="sr-only"></span>
                    </div>                                        
                  </div>
                </div>
              </div>
            </div>
          <!-- Content Row -->
            <div class="col-xl-4 col-md-4 mb-3">
              <div class="card border-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">N° DE CONSULTA DE URGENCIA ACTUAL <b>ADULTO</b></div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $var_urgencia24_ad_c4_penaflor; ?></div>
                          <div class="text-xs font-weight-bold text-uppercase mb-1">Ultima Actualizacion: <?php echo $var_urgencia24_ad_c4_fecha_penaflor; ?> </b></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span> -->
                    </div>
                    <div class="col-auto">
                      <i class="fa-3x fa-fw text-success">C4</i><span class="sr-only"></span>
                    </div>                                        
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- -------------------------------- Hospital curacavi C5 -------------------------------- -->
          <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-4 mb-3">
              <div class="card border-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">N° DE CONSULTA DE URGENCIA ACTUAL </b></div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $var_urgencia24_to_c5_penaflor; ?></div>
                          <div class="text-xs font-weight-bold text-uppercase mb-1">Ultima Actualizacion: <?php echo $var_urgencia24_to_c5_fecha_penaflor; ?> </b></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span> -->
                    </div>
                    <div class="col-auto">
                      <i class="fa-3x fa-fw text-primary">C5</i><span class="sr-only"></span>
                    </div>                                        
                  </div>
                </div>
              </div>
            </div>
          <!-- Content Row -->
            <div class="col-xl-4 col-md-4 mb-3">
              <div class="card border-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">N° DE CONSULTA DE URGENCIA ACTUAL <b>PEDIATRICO</b></div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $var_urgencia24_pe_c5_penaflor; ?></div>
                          <div class="text-xs font-weight-bold text-uppercase mb-1">Ultima Actualizacion: <?php echo $var_urgencia24_pe_c5_fecha_penaflor; ?> </b></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span> -->
                    </div>
                    <div class="col-auto">
                      <i class="fa-3x fa-fw text-primary">C5</i><span class="sr-only"></span>
                    </div>                                        
                  </div>
                </div>
              </div>
            </div>
          <!-- Content Row -->
            <div class="col-xl-4 col-md-4 mb-3">
              <div class="card border-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">N° DE CONSULTA DE URGENCIA ACTUAL <b>ADULTO</b></div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $var_urgencia24_ad_c5_penaflor; ?></div>
                          <div class="text-xs font-weight-bold text-uppercase mb-1">Ultima Actualizacion: <?php echo $var_urgencia24_ad_c5_fecha_penaflor; ?> </b></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <!-- <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span> -->
                    </div>
                    <div class="col-auto">
                      <i class="fa-3x fa-fw text-primary">C5</i><span class="sr-only"></span>
                    </div>                                        
                  </div>
                </div>
              </div>
            </div>
          </div>







<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------  -->
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------  -->
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------  -->
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------  -->









          <!-- ----------------------------------------------------------------------------------------------------------------- -->
          <!-- Content Row -->
  
          <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <!--
            <div class="col-xl-12 col-md-6 mb-2">
              <div class="card border-dark shadow h-100 py-2">
        
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
          
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">N° de consulta de urgencia ACTUALs</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">00</div>
                        </div>
                      </div>
                    </div>
          
                    <div class="col-auto">
                      <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Actualizacion .1.min.</span>
                    </div>
          
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
              <div class="col-auto">
                <a data-toggle="modal" data-target="#HpSanJuan">
                <i class="fas fa-hospital fa-3x fa-fw"></i>
                </a>
              </div>
            </div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">Hospital San Juan de Dios</div>
                        </div>
                      </div>
                    </div>          

                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
              <div class="col-auto">
                <a data-toggle="modal" data-target="#HpPenaflor">
                <i class="fas fa-hospital fa-3x fa-fw"></i>
                </a>
              </div>
            </div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">Hospital de Peñaflor</div>
                        </div>
                      </div>
                    </div>            
          
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
              <div class="col-auto">
                <a data-toggle="modal" data-target="#HpTalagante">
                <i class="fas fa-hospital fa-3x fa-fw"></i>
                </a>
              </div>
            </div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">Hospital de Talagante</div>
                        </div>
                      </div>
                    </div>          
          
                <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
              <div class="col-auto">
                <a data-toggle="modal" data-target="#HpCuracavi">
                <i class="fas fa-hospital fa-3x fa-fw"></i>
                </a>
              </div>
            </div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">Hospital de Curacavi</div>
                        </div>
                      </div>
                    </div>        
      
                  </div>
                </div>
              </div>
            </div> -->

            <!-- Pending Requests Card Example -->
          </div>


@endsection
