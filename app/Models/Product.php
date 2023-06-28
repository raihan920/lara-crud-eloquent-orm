<?php

namespace App\Models;

use App\Models\Scopes\AllScope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Prunable;

class Product extends Model
{
    use HasFactory, SoftDeletes, Prunable;
    protected $fillable = [
        'product_name',
        'category_id',
        'unit_type_short_code',
        'quantity_per_unit',
        'unit_price',
        'unit_in_stock',
        'unit_on_order'
    ];

    protected static function boot(){
        parent::boot();
        static::addGlobalScope(new AllScope);
    }

    public function prunable(): Builder{
        //will delete the records that are older than 30 days
        return static::where('deleted_at','<=',now()->subMonth());
    }

    public function pruning(): void{
        //will show the product name that are being deleted in the command prompt
        //command: php artisan model:prune
        echo 'Pruning '. $this->product_name.PHP_EOL;
    }

    public function scopeTrashedItems($query){
        return $query->onlyTrashed();
    }
}
