<?php

declare(strict_types=1);

namespace App;

use App\Casts\ShiftDateTimeCast;
use Illuminate\Database\Eloquent\Model;

class Shifts extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'start', 'end', 'type', 'user_name', 'user_email', 'location', 'event', 'rate', 'charge', 'area', 'departments'
    ];

    protected $hidden = [
        'id', 'start_timezone', 'end_timezone'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'event' => 'json',
        'departments' => 'json',
        'start' => ShiftDateTimeCast::class,
        'end' => ShiftDateTimeCast::class,
    ];
}
