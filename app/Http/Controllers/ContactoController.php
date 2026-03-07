<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotificacionAdminMail;
use App\Mail\ConfirmacionUsuarioMail;

class ContactoController extends Controller
{
    public function enviar(Request $request)
    {
        // 1. Validación estricta
        $validated = $request->validate([
            'nombre'    => 'required|string|max:255',
            'email'     => 'required|email|max:255',
            'telefono'  => 'required|string|max:50',
            'tipo_obra' => 'required|in:civil,arquitectonico',
            'empresa'   => 'nullable|string|max:255',
            'mensaje'   => 'required|string|max:2000',
        ]);

        // 2. Envío de correos
        // Se envía la notificación a ti (admin/empresa)
        Mail::to(env('MAIL_FROM_ADDRESS', 'grupoindago@gmail.com'))->send(new NotificacionAdminMail($validated));

        // Se envía la confirmación de recibido al cliente
        Mail::to($validated['email'])->send(new ConfirmacionUsuarioMail($validated));

        // 3. Retornar con variable de sesión flush
        return back()->with('success', 'Tu solicitud ha sido enviada correctamente. Un especialista se pondrá en contacto pronto.');
    }
}
