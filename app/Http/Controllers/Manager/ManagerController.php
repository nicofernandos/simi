<?php

namespace App\Http\Controllers\Manager;

use App\Models\Task;
use App\Models\User;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Psy\Command\ListCommand\FunctionEnumerator;
use Carbon\Carbon;
use PDF;

class ManagerController extends Controller
{
    public function index(){
        $user = User::all()->count();
        $task = Task::all()->count();
        $sel = Task::where('task_status','selesai')->count();
        $pro = Task::where('task_status','progress')->count();
        $pen = Task::where('task_status','pending')->count();
        $depart = Department::all()->count();
        return view('components.manager.dashboard',[
            'title' => 'Dashboard Manager',
            'user' => $user,
            'task' => $task,
            'depart' => $depart,
            'sel' => $sel,
            'pro' => $pro,
            'pen' => $pen,
        ]);
    }

    public function report(Request $request){
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

        return view('components.manager.report', [
            'title' => 'Laporan Pekerjaan',
            'laporan' => $laporan ?? [],
            'start_date' => $request->start_date,
            'end_date' => $request->end_date
        ]);
    }

    public function reportGenerate(Request $request){
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

        $pdf = PDF::loadView('components.manager.pdf',$data);

        $filename = 'Laporan pekerjaan';
        if ($request->filled(['start_date','end_date'])){
            $filename .= '-'. $request->start_date . '-' . $request->end_date;
        } else {
            $filename .= '-' . date('Y-m-d');
        }
        $filename .= '.pdf';

        return $pdf->download($filename);
    }

    public function depart(){
        $departments = Department::all();
        return view('components.manager.depart',[
            'title' => 'Halaman Departement',
            'departments' => $departments
        ]);
    }

    public function empo(){
        $employee = User::with('department')->get();
        return view('components.manager.employe',[
            'title' => 'Halaman Data Karyawan',
            'employee' => $employee
        ]);
    }
}