<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    /**
     * Имя таблицы в базе данных, связанной с моделью.
     *
     * @var string
     */
    protected $table = 'items';

    /**
     * Атрибуты, которые можно массово назначить.
     *
     * @var array
     */
    protected $fillable = ['name', 'url'];

    /**
     * Типы атрибутов.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'int',
    ];
}
