<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hemos recibido tu solicitud - Indago</title>
</head>
<body style="margin: 0; padding: 0; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; background-color: #f4f4f5; color: #333333;">
    <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color: #f4f4f5; padding: 40px 20px;">
        <tr>
            <td align="center">
                <table width="100%" cellpadding="0" cellspacing="0" border="0" style="max-width: 600px; background-color: #ffffff; border-radius: 12px; overflow: hidden; box-shadow: 0 10px 15px -3px rgba(0,0,0,0.1);">
                    <!-- Header -->
                    <tr>
                        <td style="background-color: #242424; padding: 35px 20px; text-align: center; border-bottom: 5px solid #fca311;">
                            <h1 style="color: #ffffff; margin: 0; font-size: 26px; font-weight: 800; letter-spacing: 1px; text-transform: uppercase;">INDAGO CONSTRUCTORA</h1>
                        </td>
                    </tr>
                    <!-- Body -->
                    <tr>
                        <td style="padding: 40px 30px;">
                            <h2 style="color: #242424; margin-top: 0; font-size: 24px; font-weight: bold;">¡Hola, {{ explode(' ', $datos['nombre'])[0] }}!</h2>
                            <p style="color: #4b5563; font-size: 16px; line-height: 1.6; margin-bottom: 25px;">
                                Hemos recibido correctamente tu solicitud. Queremos agradecerte por considerar a <strong>Indago Constructora</strong> para tu proyecto.
                            </p>
                            
                            <!-- Highlight Box -->
                            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color: #fffbdf; border: 1px solid #fde047; border-radius: 8px; margin-bottom: 30px;">
                                <tr>
                                    <td style="padding: 20px; text-align: center;">
                                        <p style="margin: 0; color: #a16207; font-size: 16px; font-weight: bold;">
                                            Nuestro equipo de ingeniería revisará los detalles y te conectaremos en las próximas <span style="color: #d97706; text-decoration: underline;">2 horas laborables</span>.
                                        </p>
                                    </td>
                                </tr>
                            </table>

                            <p style="color: #4b5563; font-size: 15px; line-height: 1.6; margin-bottom: 10px; font-weight: bold;">
                                Resumen de tu solicitud:
                            </p>
                            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="margin-bottom: 30px; font-size: 15px; color: #4b5563;">
                                <tr>
                                    <td width="20" valign="top" style="color: #fca311; font-weight: bold; padding-bottom: 10px;">•</td>
                                    <td valign="top" style="padding-bottom: 10px;"><strong>Categoría:</strong> {{ $datos['tipo_obra'] === 'civil' ? 'Ingeniería Civil' : 'Diseño Arquitectónico' }}</td>
                                </tr>
                                @if(!empty($datos['empresa']))
                                <tr>
                                    <td width="20" valign="top" style="color: #fca311; font-weight: bold; padding-bottom: 10px;">•</td>
                                    <td valign="top" style="padding-bottom: 10px;"><strong>Empresa:</strong> {{ $datos['empresa'] }}</td>
                                </tr>
                                @endif
                                <tr>
                                    <td width="20" valign="top" style="color: #fca311; font-weight: bold; padding-bottom: 10px;">•</td>
                                    <td valign="top" style="padding-bottom: 10px;"><strong>Mensaje enviado:</strong> "{{ substr($datos['mensaje'], 0, 50) }}{{ strlen($datos['mensaje']) > 50 ? '...' : '' }}"</td>
                                </tr>
                            </table>

                            <p style="color: #4b5563; font-size: 16px; line-height: 1.6;">
                                Si tienes alguna modificación urgente, puedes llamarnos o escribirnos por WhatsApp al <a href="tel:8098968627" style="color: #242424; text-decoration: none; font-weight: bold;">809-896-8627</a>.
                            </p>
                            
                            <p style="color: #242424; font-size: 16px; line-height: 1.6; margin-top: 40px; font-weight: bold;">
                                Atentamente,<br>
                                <span style="color: #fca311;">El Equipo de Indago Constructora</span>
                            </p>
                        </td>
                    </tr>
                    <!-- Footer -->
                    <tr>
                        <td style="background-color: #242424; padding: 30px 20px; text-align: center; color: #9ca3af; font-size: 13px;">
                            <p style="margin: 0 0 10px 0; line-height: 1.5;">Sede Principal: Edif. B10, Local 1D, <br> Av. Pedro Livio Cedeño, Ensanche La Fé.</p>
                            <p style="margin: 0;">&copy; {{ date('Y') }} Indago Constructora. Todos los derechos reservados.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
