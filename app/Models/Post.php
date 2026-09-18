<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    use HasUuids;

    protected $primaryKey = 'id';

    protected $keyType = 'string'; //uuid - Universal Uniqe Identfier

    public $incrementing = false;

    protected $table = 'post';

    protected $fillable = ['title','author','content','published', 'user_id']; // fields that can be updated

    protected $guarded = ['id']; // cannot be updated/assigned (read only)

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(comment::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

}
