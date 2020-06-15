<?php

namespace sigdoc\Http\Controllers;

use Illuminate\Http\Request;

class HospitalSanJuanController extends Controller
{
    public function HospitalSanJuan()
    {
    	return view('hospitalSanJuan.cuadro');
    }
}
