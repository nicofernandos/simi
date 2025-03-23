<?php

namespace App\Http\Controllers\Admin;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use PDF;

use function PHPSTORM_META\map;
use function PHPUnit\Framework\returnCallback;

class ReportController extends Controller
{
    public function index(Request $request)
        {   
            // Deklarasikan variabel di luar blok if
        $startDate = null;
        $endDate = null;

        // Cek apakah query param ada dan terisi
        if ($request->filled(['start_date', 'end_date'])) {
            // Validasi input tanggal
            $request->validate([
                'start_date' => 'required|date',
                'end_date' => 'required|date|after_or_equal:start_date',
            ]);

            // Parsing tanggal mulai dan selesai
            $startDate = Carbon::parse($request->start_date)->startOfDay();
            $endDate = Carbon::parse($request->end_date)->endOfDay();
        }

        // // Mendapatkan laporan dengan status selesai dan user yang login
        $laporan = Task::where('task_status', 'selesai')
            ->when($request->filled(['start_date', 'end_date']), function ($query) use ($startDate, $endDate) {
                $query->whereBetween('date', [$startDate, $endDate]); // Rentang tanggal
            })
            ->get();

        return view('components.template.report.home', [
            'title' => 'Laporan Pekerjaan',
            'laporan' => $laporan ?? [],
            'start_date' => $request->start_date,
            'end_date' => $request->end_date
        ]);
    }    

    public function generatePDF(Request $request){
        $startDate = null;
        $endDate = null;

        if  ($request->filled(['start_date','end_date'])){
            $request->validate([
                'start_date' => 'required|date',
                'end_date' => 'required|date|after_or_equal:start_date',
            ]);

            $startDate = Carbon::parse($request->start_date)->startOfDay();
            $endDate = Carbon::parse($request->end_date)->endOfDay();
        }

        $laporan = Task::where('task_status','selesai')
            ->when($request->filled(['start_date','end_date']), function ($query) use ($startDate,$endDate){
                $query->whereBetween('date', [$startDate,$endDate]);
            })
            ->get();

        $data = [ 
            'title' => 'Laporan Pekerjaan',
            'laporan' => $laporan,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'tanggal_cetak' => Carbon::now()->format('d/m/y H:i:s')
        ];

        $pdf = PDF::loadView('components.template.report.pdf',$data);

        $filename = 'Laporan pekerjaan';
        if ($request->filled(['start_date','end_date'])){
            $filename .= '-'. $request->start_date . '-' . $request->end_date;
        } else {
            $filename .= '-' . date('Y-m-d');
        }
        $filename .= '.pdf';

        return $pdf->download($filename);

    }

}