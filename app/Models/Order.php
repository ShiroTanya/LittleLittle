<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'order_customer_name', 'order_customer_phone', 'order_customer_email', 'order_quantity','order_date_use','ticket_id'
    ];
    protected $primaryKey = 'order_id';
    protected $table = 'tbl_order';

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }
}