<?php

namespace App\Models;

use App\Models\User;
use App\Models\Department;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'date',
        'task_status',
        'dokumentasi',
        'dokumentasi1',
        'dokumentasi2',
        'blok',
        'department',
        'no_task',
        'uraian_pekerjaan',
    ];

    protected $casts = [
        'date' => 'datetime',
    ];

    public function assignedUser(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function departmentData(): BelongsTo 
    {
        return $this->belongsTo(Department::class,'department');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}