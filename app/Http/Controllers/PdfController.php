<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
class PdfController extends Controller
{
    //
    public function index(){

        $pdf = PDF::loadView('index');
        return $pdf->download('invoice.pdf');
    }
}
