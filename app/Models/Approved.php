<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Approved extends Model
{
    protected $table = "approved";

    protected $primaryKey = 'accountid';

    protected $fillable = ['accountid','accountno','pin'];

    public static function createApproved($data)
    {
        try {
            if (!self::where('accountid', $data['accountid'])->exists()) {
                return self::create($data);
            } else {
                throw new \Exception('Account ID already exists.');
            }
        } catch (QueryException $e) {
            // Handle the exception
            return response()->json(['error' => $e->getMessage()], 400);
        } catch (\Exception $e) {
            // Handle the exception
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }
}
