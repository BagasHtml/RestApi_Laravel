<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

#[Fillable(['nama_barang', 'berat_barang', 'tinggi_barang', 'barang_tersedia', 'lokasi_gudang'])]
class Barang extends Model
{
    use HasFactory, Notifiable;

    public $timestamps = false;
    protected $table = "table_barang";

    protected function casts()
    {
        return parent::casts();
    }
}
