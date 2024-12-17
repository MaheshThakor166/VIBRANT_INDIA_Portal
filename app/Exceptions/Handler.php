<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Support\Arr; // Add this import for Arr helper
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
            //
        });
    }

    /**
     * Handle unauthenticated requests by redirecting to the appropriate login page.
     */
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        // Determine the guard used
        $guard = Arr::get($exception->guards(), 0);

        // Redirect based on the guard
        switch ($guard) {
            case 'admin':
                // Redirect to the admin login page if the 'admin' guard is not authenticated
                $loginRoute = route('admin.login');
                break;

            default:
                // Default to the user login page for the 'web' guard or other guards
                $loginRoute = route('login');
                break;
        }

        return redirect()->guest($loginRoute);
    }
}
