<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Business extends Model
{
    use HasFactory, SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'third_party_id',
        'business_name',
        'start_date',
        'currency',
        'logo',
        'website',
        'contact_number',
        'alternate_contact_number',
        'country',
        'state',
        'city',
        'zipcode',
        'landmark',
        'timezone',
    ];

    protected array $dates = ['deleted_at'];

    /**
     * @return BelongsTo
     */
    public  function thirdParty(): BelongsTo
    {
        return $this->belongsTo(ThirdParty::class);
    }
}
