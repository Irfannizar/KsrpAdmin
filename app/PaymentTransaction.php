<?php

namespace App;

use App\Observers\PaymentObserver;
use Illuminate\Database\Eloquent\Model;

class PaymentTransaction extends Model
{
    const IS_SUCCESS = 1;
	const IS_PENDING = 2;
	const IS_FAILED = 0;
	const SIGNATURE_TYPE = "SHA256";

	protected $fillable = [
        'event_id', 'name', 'contact_no', 'email', 'order_id', 'status', 'amount', 'signature_type', 'signature',
    ];

	public static function boot()
    {
        parent::boot();
        self::observe(PaymentObserver::class);
    }

    public function event()
    {
    	return $this->belongsTo(Event::class);
    }

    public function scopeSuccessfullPayment($query)
    {
        return $query->where('status',self::IS_SUCCESS);
    }

    public function scopePendingPayment($query)
    {
        return $query->where('status',self::IS_PENDING);
    }

    public function scopeFailPayment($query)
    {
        return $query->where('status',self::IS_FAILED);
    }

    public static function getDisplayPaymentStatus($status)
    {
        switch ($status) {
            case self::IS_SUCCESS:
                $status = "Payment success";
                break;

            case self::IS_PENDING:
                $status = "Awaiting for payment";
                break;
            
            case self::IS_FAILED:
                $status = "Payment failed.";
                break;
        }

        return $status;
    }
}
