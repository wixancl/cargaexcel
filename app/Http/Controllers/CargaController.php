<?php

namespace sigdoc\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Auth;

class CargaController extends Controller
{

    public function index()
    {
		//return 'Hola';
		return view('carga/cuadro');
	
    }



    public function importar(Request $request)
    {


		$validator = validator::make($request->all(), [
            'file' => 'max:5000',
            'file' => 'mimes:xls,xlsx'

        ],[

            'file.max' => 'El Peso maximo del archivo es 5 megas',
            'file.mimes' =>'El documento debe ser un archivo de tipo xls, xlsx',

        ]);

		$file = $request->file('file');

        $mime = \Request::file('file')->getMimeType();
        $extension = strtolower(\Request::file('file')->getClientOriginalExtension());
        $path = "files_uploaded";
        $codigo = uniqid();
        $filenamestorage =  $codigo . '.' . $extension;

        \Storage::disk('local')->put($filenamestorage,  \File::get($file));
       
		return redirect()->back()->with('message', 'success');

	
    }   
}
