<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Mail\NewsletterWelcomeMail;
use App\Models\NewsletterSubscriber;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;

class NewsletterController extends Controller
{
    public function subscribe(Request $request): JsonResponse
    {
        try {
            $validated = $request->validate([
                'email' => [
                    'required',
                    'email:rfc',
                    'unique:newsletter_subscribers,email',
                    'max:255',
                ],
            ], [
                'email.required' => 'Por favor ingresa tu correo electrónico.',
                'email.email'    => 'El formato del correo no es válido.',
                'email.unique'   => 'Este correo ya está suscrito al newsletter.',
                'email.max'      => 'El correo es demasiado largo.',
            ]);

            NewsletterSubscriber::create([
                'email'         => $validated['email'],
                'is_active'     => true,
                'subscribed_at' => now(),
            ]);

            // Enviar correo de bienvenida
            Mail::to($validated['email'])->send(new NewsletterWelcomeMail($validated['email']));

            return response()->json([
                'success' => true,
                'message' => '¡Te has suscrito correctamente! Revisa tu correo.',
            ], 201);

        } catch (ValidationException $e) {
            $errors = $e->errors();
            $firstError = collect($errors)->first()[0] ?? 'Error de validación.';

            return response()->json([
                'success' => false,
                'message' => $firstError,
            ], 422);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Ocurrió un error inesperado. Inténtalo más tarde.',
            ], 500);
        }
    }
}
