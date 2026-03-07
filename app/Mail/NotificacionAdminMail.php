<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NotificacionAdminMail extends Mailable
{
    use Queueable, SerializesModels;

    public $datos;

    public function __construct($datos)
    {
        $this->datos = $datos;
    }

    public function envelope(): Envelope
    {
        // Asunto dinámico basado en el 'tipo_obra' del select
        $tipoObraTexto = $this->datos['tipo_obra'] === 'civil' 
            ? 'Ingeniería Civil' 
            : 'Diseño Arquitectónico';

        return new Envelope(
            subject: 'Nueva solicitud: ' . $tipoObraTexto,
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.notificacion_admin',
        );
    }
}
