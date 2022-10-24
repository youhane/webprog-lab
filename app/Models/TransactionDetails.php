<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetails extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function transaction(){
        return $this->belongsTo(Transactions::class);
    }

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function getSubtotalAttribute(){
        return $this->quantity * $this->price;
    }
}
