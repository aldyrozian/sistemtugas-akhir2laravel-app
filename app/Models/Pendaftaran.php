<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    protected $guarded = ['id'];



    public function scopeFilterAjuanPembimbing($query, $filters)
    {
        $query->when($filters ?? false, function ($query, $search) {
            return $query->where('peminatan', 'like', '%' .  $search . '%')
                ->orWhereHas('mahasiswa', function ($query) use ($search) {
                    $query->where('nim', 'like', '%' . $search . '%')
                        ->orWhere('name', 'like', '%' . $search . '%');
                });
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }

    public function pembimbing1()
    {
        return $this->belongsTo(Pembimbing1::class, 'p1_id', 'id');
    }

    public function pembimbing2()
    {
        return $this->belongsTo(Pembimbing2::class, 'p2_id', 'id');
    }

    public function reviewer1()
    {
        return $this->belongsTo(Reviewer1::class, 'r1_id', 'id');
    }

    public function review()
    {
        return $this->hasOne(Review::class);
    }

    public function getRouteKey()
    {
        return 'id';
    }
}