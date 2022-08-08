<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $table = 'ticket';

    protected $fillable = [
        'code',
        'subject',
        'user_id',
        'departement_id',
        'asset_id',
        'project_id',
        'recipients',
        'priority',
        'status',
    ];
    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function departement()
    {
        return $this->belongsTo(Departement::class, 'departement_id');
    }
    public function Asset()
    {
        return $this->belongsTo(Asset::class, 'asset_id');
    }
    public function Project()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }
    public function Recipients()
    {
        return $this->belongsTo(User::class, 'recipients');
    }
}
