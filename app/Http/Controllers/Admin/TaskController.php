<?php

namespace App\Http\Controllers\Admin;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use function PHPSTORM_META\map;
use App\Http\Controllers\Controller;

use Illuminate\Console\View\Components\Component;
use League\CommonMark\Extension\CommonMark\Node\Inline\Code;

class TaskController extends Controller
{
    function index(){
        $tasks = Task::all();

        return view('components.template.task.home',[
            'title' => 'Page Kelola Pekerjaan',
            'tasks' => $tasks
        ]);
    }

    function tambahKerja(){

        $employee = User::where('role', 'employee')->get();

        $reportCode = $this->no_code();

        return view('components.template.task.addTask',
        [
            'title' => 'Page Tambah Kerjaan',
            'reportCode' => $reportCode,
            'employee' => $employee
        ]);
    }

    public function store(Request $request)
    {
        $validasi = $request->validate([
            'title' => 'required|string|max:225',
            'description' => 'nullable|string',
            'date' => 'required|date',
            'user_id' => 'required|exists:users,id',
            'task_status' => 'in:in:progress,pending,selesai',
            'no_task' => 'required',
            'dokumentasi' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'blok' => 'nullable|string',
            'department' => 'nullable|string',
        ]);
     
    
        $filePath = null;
        if ($request->hasFile('dokumentasi')) { 
            $filePath = $request->file('dokumentasi')->store('dokumentasi', 'public');
            }
    
        $key = Task::create([
            'title' => $validasi['title'],
            'description' => $validasi['description'] ?? null,
            'date' => $validasi['date'],
            'user_id' => $validasi['user_id'],
            'task_status' => $validasi['task_status'],
            'department' => $validasi['department'],
            'blok' => $validasi['blok'],
            'no_task' => $validasi['no_task'],
            'dokumentasi' => $filePath,
        ]);
    
        return redirect()->route('kelola_Pekerjaan')->with('success', 'Pekerjaan berhasil ditambahkan!');
    }
    

    // function tambahPekerjaan(Request $request){
    //     $validData = $request->validate([
    //         ''
    //     ])
    // }

    function no_code(){
        $code = '1234567890'.time();
        $string ='';
        for($i = 0; $i<3;$i++){
            $pos = rand(0,strlen($code)-1);
            $string .= $code[$pos];
        }

        return 'IMB/'.date('Y').'/'.date('m').'/'.date('d').'/'.$string;
    }   

    function editTask(int $id){
        $tasks = Task::with('user')->findOrFail($id);
        return view('components.template.task.editTask',[
            'title' => 'Edit Pekerjaan',
            'tasks' => $tasks
        ]);
    }

    function update(Request $request,$id){
        $tasks = Task::with('user')->findOrFail($id);
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
            'dokumentasi' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $tasks->update([
            'title' => $validasi['title'],
            'description' => $validasi['description'],
            'date' => $validasi['date'],
            'task_status' => $validasi['task_status'],
            'blok' => $validasi['blok'],
            'department' => $validasi['department'],
        ]);
        if ($request->hasFile('dokumentasi')) {
            
            if ($tasks->dokumentasi && file_exists(public_path('storage/'.$tasks->dokumentasi))) {
                unlink(public_path('storage/'.$tasks->dokumentasi));
            }
    
            $filePath = $request->file('dokumentasi')->store('dokumentasi', 'public');
            $tasks->dokumentasi = $filePath;
    
            $tasks->save();
        }

        return redirect()->route('kelola_Pekerjaan')->with('success','Berhasil mengupdate pekerjaan!');
    }

    function destroy(int $id)
    {
        $tasks = Task::with('user')->findOrFail($id);
        $tasks->destroy($id);
        return redirect()->route('kelola_Pekerjaan')->with('success','Berhasil menghapus pekerjaan!');
    }

    function detailTask(int $id){
        $tasks = Task::with('user.department')->findOrFail($id);
        return view('components.template.task.detail',[
            'title' => 'Detail Pekerjaan',
            'tasks' => $tasks
        ]);
    }

    function repTask(){
        return view('task.layrep',[
            'title' => 'Laporan Kerja'
        ]);
    }

    function kelolaTask(){
        return view('template.cards.kelolaTask',[
            'title' => 'Laporan Kerja'
        ]);
    }

}   