<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class GuruM extends Model
{
    use HasFactory, Searchable;
    protected $table ="guru";
    protected $fillable = ["id","nip","namaguru","mapel"];

    public function searchableAs()
    {
        return 'guru';
    }

    public function toSearchableArray()
    {
        return [
            'namaguru'     => $this->namaguru,
        ];
    }
}
