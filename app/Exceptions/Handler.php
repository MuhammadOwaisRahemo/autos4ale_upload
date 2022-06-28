<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Throwable $exception)
    {
        if ($request->wantsJson()) {
            $msg = $exception->getMessage();
            $e = $exception;
            
            if(empty($msg)){
                switch($exception->getStatusCode()){
                    case 403:
                        $msg = 'Forbidden: You are not allowed to do this';
                        break;
                    case 404:
                        $msg = 'Data Not Found';
                        break;
                    case 500:
                        $msg = 'Internal Server Error';
                        break;
                }
            }
            return response([
                'error' => $msg,
                'details' => $e,
            ], 404);
        }
        return parent::render($request, $exception);
    }
}