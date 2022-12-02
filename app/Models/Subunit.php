<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subunit extends Model
{
    use HasFactory;

    protected $table = 'sub_unit';
    protected $primaryKey = 'kd_sub_unit';


    public function scopePoliklinik($query)
    {
        return $query->where('kd_unit', '=', 1);
    }

    public function scopeRuangan($query)
    {
        return $query->where('kd_unit', '=', 2);
    }

    public function scopePencarian($query, $search)
    {
        return $query->where(function ($query) use ($search) {
            if ($search) {
                $keywords = '%' . $search . '%';
                $query->where('nama_sub_unit', 'like', $keywords);
            }  
        });
    }
}
