<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    Use HasFactory;

    use HasUlids;

    protected $primaryKey = 'id';

    protected $keyType = 'string'; //uuid - Universal Uniqe Identfier

    public $incrementing = false;

    protected $table = 'comment';

    protected $fillable = ['author', 'content', 'post_id'];

    protected $guarded = ['id'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
