<?php
namespace App\Repository;

class ResponseRepository
{
    public function successResponse($data)
    {
        return response()->json($data);
    }
}