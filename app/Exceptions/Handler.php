<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Support\Facades\Log;
use Throwable;

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
            Log::error('Exception occurred', [
                'exception' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
            ]);
        });
    }

    /**
     * Render an exception into an HTTP response.
     */
    public function render($request, Throwable $exception)
    {
        // Xử lý lỗi Model không tìm thấy
        if ($exception instanceof ModelNotFoundException) {
            Log::warning('Model not found', [
                'url' => $request->fullUrl(),
                'method' => $request->method(),
                'input' => $request->all(),
            ]);

            return response()->json([
                'message' => 'Resource not found.',
            ], 404);
        }

        // Xử lý lỗi Route không tìm thấy
        if ($exception instanceof NotFoundHttpException) {
            Log::info('Route not found', [
                'url' => $request->fullUrl(),
                'method' => $request->method(),
            ]);

            return response()->json([
                'message' => 'Page not found.',
            ], 404);
        }

        Log::error('Unhandled exception', [
            'exception' => $exception->getMessage(),
            'file' => $exception->getFile(),
            'line' => $exception->getLine(),
        ]);

        // Xử lý mặc định cho các lỗi khác
        return parent::render($request, $exception);
    }
}
