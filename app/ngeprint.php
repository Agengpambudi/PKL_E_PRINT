<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ngeprint extends Model
{
    protected $table = 'ngeprint';
    public $timestamps = true;
    protected $fillable = [
        'user_id', 'jumlah', 'status', 'file'
    ];
    public function user ()
    {
        return $this-> belongsTo('App\User','user_id');
    }
}
