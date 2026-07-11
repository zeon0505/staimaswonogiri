<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Dosen extends Model
{
    use HasUuids;

    protected $fillable = [
        'nama', 'slug', 'gelar_depan', 'gelar_belakang', 'jabatan', 'program_studi', 'foto', 'urutan', 'aktif',
        'nidn', 'nuptk', 'nipy', 'jabatan_akademik', 'status', 'email', 'pendidikan_terakhir'
    ];
    protected $casts = ['aktif' => 'boolean'];

    public function getNamaLengkapAttribute(): string
    {
        return trim(($this->gelar_depan ? $this->gelar_depan . ' ' : '') . $this->nama . ($this->gelar_belakang ? ', ' . $this->gelar_belakang : ''));
    }

    protected static function booted()
    {
        static::creating(function ($dosen) {
            if (empty($dosen->slug)) {
                $dosen->slug = \Illuminate\Support\Str::slug($dosen->nama_lengkap);
            }
        });

        static::updating(function ($dosen) {
            if (empty($dosen->slug)) {
                $dosen->slug = \Illuminate\Support\Str::slug($dosen->nama_lengkap);
            }
        });
    }
}