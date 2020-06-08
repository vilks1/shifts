<?php
declare(strict_types=1);

namespace App\Casts;

use Carbon\Carbon;
use Exception;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Model;

class ShiftDateTimeCast implements CastsAttributes
{

    /**
     * @param Model $model
     * @param string $key
     * @param mixed $value
     * @param array $attributes
     * @return string
     */
    public function get($model, string $key, $value, array $attributes): string
    {
        $timezoneAttribute = $key . '_timezone';
        return Carbon::createFromTimestampUTC($value)->setTimezone($model->$timezoneAttribute)->format('c');
    }

    /**
     * @param Model $model
     * @param string $key
     * @param mixed $value
     * @param array $attributes
     * @return array|int|string
     * @throws Exception
     */
    public function set($model, string $key, $value, array $attributes): int
    {
        return (new Carbon($value))->unix();
    }
}
