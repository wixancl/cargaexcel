@extends('layouts.app')

@section('content')

<?php
//include($_SERVER['DOCUMENT_ROOT'].'/htdocs/resources/views/carga/dbconect.php');




//require_once('vendor/php-excel-reader/excel_reader2.php');
//require_once('vendor/SpreadsheetReader.php');


//require_once(app_path().'/vendor/php-excel-reader/excel_reader2.php');
//require_once('http/vendor/SpreadsheetReader.php');

require_once($_SERVER['DOCUMENT_ROOT'].'/htdocs/vendor/php-excel-reader/excel_reader2.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/htdocs/vendor/SpreadsheetReader.php');



if (isset($_GET["import"]))
{
    
$allowedFileType = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];
  
  if(in_array($_FILES["file"]["type"],$allowedFileType)){

        $targetPath = 'subidas/'.$_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $targetPath);
        
        $Reader = new SpreadsheetReader($targetPath);
            
  }
  else
  { 
        $type = "error";
        $message = "El archivo enviado es invalido. Por favor vuelva a intentarlo";
  }
}
?>



<div class="container-fluid">

  <!--FIN Mensajes de Guardado o Actualización de Documentos-->
  <div class="row">
    <div class="col-lg-10 col-lg-offset-1 col-md-12">
    <!--Panel Formulario Subir Documentos Acepta-->
      <div class="panel panel-default">
        <div class="panel-heading"></div>
          <div class="panel-body">
            <br><br>

            <div class="outer-container">
              <form action="" method="get" name="frmExcelImport" id="frmExcelImport" enctype="multipart/form-data">
                <div>
                  <label>Elija Archivo Excel</label>
                  <br><br> 
                  <input type="file" name="file" id="file" accept=".xls,.xlsx">
                  <br><br>
                  <button type="submit" id="submit" name="import" class="btn-submit">Importar Registros</button>
                </div>
              </form>
            </div>

          </div>
        </div>
 
      </div>
    </div>
  </div>


@endsection

