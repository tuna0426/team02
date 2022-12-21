<?php

namespace App\Models;

use Facade\Ignition\QueryRecorder\Query;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;
    public function camp()
    {
        return $this->belongsTo("App\Models\Camp",'cid','id');
    }
    protected $fillable=[
        'name',
        'cid',
        'camp',
        'rank',
        'type',
        'get',
        'rarity',
        'build_at',
        'year',
        'displacement',
        'created_at',
        'updated_at'
    ];
    public function ScopeallTypes($query)
    {
        $query->select('type')->groupBy('type');
    }
    public function ScopeType($query,$typ)
    {
        $query->where('type','=',$typ)->orderBy('year');
    }
}
