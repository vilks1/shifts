<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Shifts\ShiftInputModifier;
use App\Shifts;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use JsonException;
use Laravel\Lumen\Routing\Controller;

class ShiftsController extends Controller
{
    /**
     * View single shift
     * @param int $id
     * @return JsonResponse
     */
    public function view(int $id): JsonResponse
    {
        return response()->json(Shifts::find($id));
    }

    /**
     * Bulk create shifts (use the file contents which was given with the task)
     * @param Request $request
     * @return JsonResponse
     * @throws JsonException
     * @throws Exception
     */
    public function bulkCreate(Request $request): JsonResponse
    {
        $input = $request->all();
        $chunkedInput = array_chunk($input['shifts'] ?? [], 100);
        foreach ($chunkedInput as $chunk) {
            array_walk($chunk, static function(array &$shift) {
                $shift = (new ShiftInputModifier($shift))->get();
            });
            Shifts::insert($chunk);
        }

        return response()->json(true, 201);
    }

    /**
     * Delete all shifts from DB
     * @return JsonResponse
     */
    public function truncate(): JsonResponse
    {
        Shifts::truncate();
        return response()->json(true, 204);
    }


    /**
     * Search from Shifts
     * @param Request $request
     * @return JsonResponse
     * @throws Exception
     */
    public function index(Request $request): JsonResponse
    {
        $condition = [];
        $params = $request->query->all();
        $params['start'] = isset($params['start']) ? (new Carbon($params['start']))->unix() : null;
        $params['end'] = isset($params['end']) ? (new Carbon($params['end']))->unix() : null;

        $getCondition = static function(string $key, string $operand = '=') use ($params) {
            if ($value = $params[$key] ?? null) {
                return [$key, $operand, $value];
            }
            return [];
        };

        $condition[] = $getCondition('area');
        $condition[] = $getCondition('location');
        $condition[] = $getCondition('start', '>=');
        $condition[] = $getCondition('end', '<=');

        return response()->json(
            ['shifts' => Shifts::where(array_filter($condition))->limit(100)->get()]
        );
    }
}
