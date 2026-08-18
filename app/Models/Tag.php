<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    Use HasFactory;

    use HasUuids;

    protected $primaryKey = 'id';

    protected $keyType = 'string'; //uuid - Universal Uniqe Identfier

    public $incrementing = false;

    protected $table = 'tag';

    protected $fillable = ['title']; // fields that can be updated

    protected $guarded = ['id']; // cannot be updated/assigned (read only)

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
