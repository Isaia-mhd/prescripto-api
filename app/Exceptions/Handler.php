<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Throwable $exception)
{
    // Vérification si l'exception est une ModelNotFoundException
    if ($exception instanceof ModelNotFoundException) {
        // Si la requête attend une réponse JSON
        if ($request->expectsJson()) {
            return response()->json(['error' => 'Doctor not found!'], 404);
        }
    }

    // Vérification pour d'autres types d'exception HTTP 404
    if ($exception instanceof NotFoundHttpException) {
        if ($request->expectsJson()) {
            return response()->json(['error' => 'Page not found'], 404);
        }
    }

    // Si l'exception n'est pas capturée spécifiquement, on laisse Laravel gérer le reste
    return parent::render($request, $exception);
}

}
