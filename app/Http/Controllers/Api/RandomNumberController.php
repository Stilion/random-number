<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\RandomNumber;
use Illuminate\Http\JsonResponse;
use Random\RandomException;

class RandomNumberController extends Controller
{
    /**
     * Generate a new random number
     *
     * @return JsonResponse
     */
    public function generate(): JsonResponse
    {
        try {
            $number = RandomNumber::generateNewNumber();
            return response()->json($number);
        } catch (RandomException $e) {
            return response()->json([
                'error' => 'Failed to generate random number'
            ], 500);
        }
    }

    /**
     * Get the current number by ID
     *
     * @param int $id
     * @return JsonResponse
     */
    public function retrieve(int $id): JsonResponse
    {

        $number = RandomNumber::find($id);

        if (!$number) {
            return response()->json([
                'error' => 'Number with the specified ID not found'
            ], 404);
        }

        return response()->json($number);
    }
}
