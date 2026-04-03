<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

#[Fillable(['username', 'email', 'address'])]
class Data extends Model
{
    use HasFactory, Notifiable;

    public $timestamps = false;
    protected $table = 'table_data';

    /**
     * Casting atribut.
     */
    protected function casts(): array
    {
        return [
            'created_at' => 'datetime',
        ];
    }
}