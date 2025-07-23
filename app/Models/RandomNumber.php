<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Random\RandomException;

class RandomNumber extends Model
{
    protected $fillable = ['number_value'];

    /**
     * Creating a business logic for a new random number
     *
     * @throws RandomException
     */
    public static function generateNewNumber(): self
    {
        try {
            return self::create([
                'number_value' => random_int(1, 100)
            ]);
        } catch (RandomException $e) {
            Log::error('Failed to generate random number: ' . $e->getMessage());
            throw $e;
        }
    }
}
