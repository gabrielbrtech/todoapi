<?php

namespace App\Exceptions;

use Exception;

class VerifyEmailTokenInvalidException extends Exception
{
    protected $message = 'Token is invalid';

    public function render() {
        return response()->json([
            'error' => class_basename($this),
            'message' => $this->getMessage()
        ], 400);
    }
}
