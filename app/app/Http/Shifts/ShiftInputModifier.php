<?php

namespace App\Http\Shifts;

use Carbon\Carbon;
use Exception;
use JsonException;

class ShiftInputModifier
{
    private array $shiftData;

    /**
     * ShiftInputModifier constructor.
     * @param array $shiftData
     */
    public function __construct(array $shiftData)
    {
        $this->shiftData = $shiftData;
    }

    /**
     * @return array
     * @throws JsonException
     * @throws Exception
     */
    public function get(): array
    {
        $this->prepareDateFields('start');
        $this->prepareDateFields('end');

        if ($this->shiftData['departments']) {
            $this->shiftData['departments'] = json_encode($this->shiftData['departments'], JSON_THROW_ON_ERROR, 512);
        }
        if ($this->shiftData['event']) {
            $this->shiftData['event'] = json_encode($this->shiftData['event'], JSON_THROW_ON_ERROR, 512);
        }

        return $this->shiftData;
    }

    /**
     * @param string $dateKey
     * @throws Exception
     */
    private function prepareDateFields(string $dateKey): void
    {
        $date = new Carbon($this->shiftData[$dateKey]);
        $this->shiftData[$dateKey] = $date->unix();
        $this->shiftData[$dateKey . '_timezone'] = $date->timezone;
    }
}
