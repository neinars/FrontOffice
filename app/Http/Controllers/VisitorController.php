<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use App\Models\Meet;
use App\Models\Utility;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Barryvdh\DomPDF\PDF;
use Dompdf\Dompdf;

class VisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tdata = Visitor::orderBy('created_at', 'DESC')->get();
        $meet = Meet::get();
        $utility = Utility::get();

        // dd($t);
        return view('visitor.index', compact('tdata', 'meet', 'utility'));
    }

    public function store(Request $request)
    {
        $tdata = Visitor::create([
            'name' => $request->name,
            'address' => $request->address,
            'instance' => $request->instance,
            'phone_number' => $request->phone_number,
            'meet_id' => $request->meet_id,
            'utility_id' => $request->utility_id,
            'desc' => $request->desc,
        ]);

        // dd($tdata);
        return redirect()
            ->back()
            ->with('status', 'Success')
            ->with('data', $tdata);
    }

    public function destroy(Visitor $visitor, $id)
    {
        $visitor = Visitor::find($id);
        $visitor->delete();
        // dd($visitor);
        return redirect()->back();
    }

    public function pdf()
    {
        $visitor = Visitor::where('created_at')->orderBy('created_at', 'asc')->get();
        $meet = Meet::all();
        $utility = Utility::all();

        // $pdf->loadHtml(view('recap', ['visitor' => $visitor, 'meet' => $meet,'utility' => $utility]));
        // return $pdf->download('Laporan-Kunjungan');

        $pdf = new Dompdf();
        $pdf->loadHtml(view('recap', ['visitor' => $visitor, 'meet' => $meet,'utility' => $utility]));

        $pdf->setPaper('A4', 'landscape');

        $pdf->render();

        return $pdf->stream('Laporan-Kunjungan.pdf');
    }
}
