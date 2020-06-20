<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\BeoordelingenExport;
use Maatwebsite\Excel\Facades\Excel;

class BeoordelingenController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $beoordelingen = \DB::select('select * FROM beoordeling_form');

        return view('overzicht', compact('beoordelingen'));

    }

    /**
     * Display the specified resource.
     */
    public function export()
    {
//        $beoordelingen = \DB::select('select * FROM beoordeling_form');
//        $test = ["number" => 1];

        return Excel::download(new BeoordelingenExport, 'test.xlsx');

//
//        $xmlFile   = $test->array_to_xml()();
//
//        return Response::download($xmlFile, 'export.xml', ['Content-Type: text/xml']);

//        return view('export');

    }
}
