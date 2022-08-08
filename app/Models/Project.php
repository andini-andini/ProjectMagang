<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'project';

    protected $fillable = [
        'tag',
        'name',
        'departement_id',
        'jumlahAsset',
        'lokasi',
        'startDate',
        'dueDate'
    ];
    public function departement()
    {
        return $this->belongsTo(Departement::class, 'departement_id');
    }
}
