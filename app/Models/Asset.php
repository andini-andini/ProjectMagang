<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;
    public $table = "asset";
    protected $fillable = [
        'name',
    ];

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function Category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function Location()
    {
        return $this->belongsTo(Location::class, 'location_id');
    }

    public function Departement()
    {
        return $this->belongsTo(Departement::class, 'departement_id');
    }

    public function Manufacture()
    {
        return $this->belongsTo(Manufacture::class, 'manufacturs_id');
    }

    public function Supplier()
    {
        return $this->belongsTo(Supplier::class, 'supplier_id');
    }
}
