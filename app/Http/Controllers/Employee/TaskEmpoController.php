<?php

namespace App\Http\Controllers\Employee;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class TaskEmpoController extends Controller
{
    function index(){
        return view('dashboard',[
            'title' => 'Halaman Dashboard'
        ]);
    }

    function task(){
        $tasks = Task::where('user_id', auth()->user()->id)->get();
        return view('components.employee.empo.task',[
            'title' => 'Halaman Daftar Pekerjaan',
            'tasks' => $tasks
        ]);
    }

    function view(){
        $tasks = Task::where('user_id', auth()->user()->id)->get();
        return view('components.employee.empo.view',[
            'title' => 'Halaman Update Pekerjaan',
            'tasks' => $tasks
        ]);
    }
    
    function show(int $id){
        $tasks = Task::with('user','departmentData')->findOrFail($id);
        if(!$tasks){
            return redirect()->back()->with('error','Detail data pekerjaan tidak ditemukan!');
        }

        return view('components.employee.empo.show',[
            'title' => 'Halaman Edit Pekerjaan',
            'tasks' => $tasks
        ]);
    }

    function update(Request $request,$id){
        $tasks = Task::with('user','departmentData')->findOrFail($id);
        if (!$tasks){
            return redirect()->back()->with('error','Pekerjaan tidak ditemukan!');
        }

        $validasi = $request->validate([
            'title' => 'required|string|max:225',
            'description' => 'nullable|string',
            'date' => 'required|date',
            'task_status'=> 'required|in:progress,pending,selesai',
            'blok' => 'nullable|string',
            'department' => 'nullable|string',
            'uraian_pekerjaan' => 'nullable|string',
            'dokumentasi' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'dokumentasi1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'dokumentasi2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $tasks->update([
            'title' => $validasi['title'],
            'description' => $validasi['description'],
            'date' => $validasi['date'],
            'task_status' => $validasi['task_status'],
            'blok' => $validasi['blok'],
            'department' => $validasi['department'],
            'uraian_pekerjaan' => $validasi['uraian_pekerjaan'],
        ]);
        if ($request->hasFile('dokumentasi')) {
            
            if ($tasks->dokumentasi && file_exists(public_path('storage/'.$tasks->dokumentasi))) {
                unlink(public_path('storage/'.$tasks->dokumentasi));
            }
    
            $filePath = $request->file('dokumentasi')->store('dokumentasi', 'public');
            $tasks->dokumentasi = $filePath;
    
            $tasks->save();
        }
        if ($request->hasFile('dokumentasi1')) {
            
            if ($tasks->dokumentasi1 && file_exists(public_path('storage/'.$tasks->dokumentasi1))) {
                unlink(public_path('storage/'.$tasks->dokumentasi1));
            }
    
            $filePath = $request->file('dokumentasi1')->store('dokumentasi1', 'public');
            $tasks->dokumentasi1 = $filePath;
    
            $tasks->save();
        }
        if ($request->hasFile('dokumentasi2')) {
            
            if ($tasks->dokumentasi2 && file_exists(public_path('storage/'.$tasks->dokumentasi2))) {
                unlink(public_path('storage/'.$tasks->dokumentasi2));
            }
    
            $filePath = $request->file('dokumentasi2')->store('dokumentasi2', 'public');
            $tasks->dokumentasi2 = $filePath;
    
            $tasks->save();
        }

        return redirect()->route('empoTask')->with('success','Berhasil mengupdate pekerjaan!');
    }


    public function detail(int $id){
        $tasks = Task::with('user','departmentData')->findOrFail($id);
        return view('components.employee.empo.detail',[
            'title' => 'Detail Pekerjaan',
            'tasks' => $tasks
        ]);
    }

    public function dataTask(){
        $tasks = Task::where('user_id', auth()->user()->id)->get();
        return view('components.employee.empo.data',[
            'title' => 'Data Pekerjaan',
            'tasks' => $tasks
        ]);
    }

    public function report(Request $request)
    {
        // Validasi input tanggal
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        // Parsing tanggal mulai dan selesai
        $startDate = Carbon::parse($request->start_date)->startOfDay();
        $endDate = Carbon::parse($request->end_date)->endOfDay();

        // Mendapatkan laporan dengan status selesai dan user yang login
        $laporan = Task::where('user_id', auth()->user()->id) // Filter berdasarkan ID pengguna yang login
                    ->where('task_status', 'selesai') // Status pekerjaan yang selesai
                    ->whereBetween('date', [$startDate, $endDate]) // Rentang tanggal
                    ->get();

        // Mengecek apakah laporan kosong
        if ($laporan->isEmpty()) {
            return redirect()->route('reportTask')->with('error', 'Data tidak ditemukan');
        }

        return view('components.employee.empo.report', [
            'title' => 'Laporan Pekerjaan',
            'laporan' => $laporan,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date
        ]);
    }

}