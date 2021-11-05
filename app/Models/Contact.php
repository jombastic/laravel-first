<?php

namespace App\Models;

use App\Scopes\ActiveScope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected static function boot() {
        parent::boot();

        static::addGlobalScope('active', function(Builder $builder) {
            $builder->where('active', true);
        });
        
        static::addGlobalScope(new ActiveScope);
    }
    
    public function scopeActiveVips($query) {
        return $query->where('vip', true)->where('trial', false);
    }

    public function scopeStatus($query, $status) {
        return $query->where('status', $status);
    }
}
