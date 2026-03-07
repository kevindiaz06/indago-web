<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notificación Indago</title>
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
                            <h2 style="color: #242424; margin-top: 0; font-size: 22px; font-weight: bold;">Nueva Solicitud de Proyecto</h2>
                            <p style="color: #666666; font-size: 16px; line-height: 1.5; margin-bottom: 30px;">Has recibido un nuevo mensaje desde el formulario web de tu sitio.</p>
                            
                            <!-- Data Table -->
                            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color: #f9fafb; border: 1px solid #e5e7eb; border-radius: 8px; padding: 25px;">
                                <tr>
                                    <td style="padding-bottom: 12px;">
                                        <span style="font-size: 12px; text-transform: uppercase; color: #9ca3af; font-weight: bold; letter-spacing: 1px;">Cliente</span><br>
                                        <strong style="color: #242424; font-size: 16px;">{{ $datos['nombre'] }}</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding-bottom: 12px; padding-top: 12px; border-top: 1px solid #f3f4f6;">
                                        <span style="font-size: 12px; text-transform: uppercase; color: #9ca3af; font-weight: bold; letter-spacing: 1px;">Email</span><br>
                                        <a href="mailto:{{ $datos['email'] }}" style="color: #fca311; text-decoration: none; font-size: 16px; font-weight: bold;">{{ $datos['email'] }}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding-bottom: 12px; padding-top: 12px; border-top: 1px solid #f3f4f6;">
                                        <span style="font-size: 12px; text-transform: uppercase; color: #9ca3af; font-weight: bold; letter-spacing: 1px;">Teléfono</span><br>
                                        <strong style="color: #242424; font-size: 16px;">{{ $datos['telefono'] }}</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding-bottom: 12px; padding-top: 12px; border-top: 1px solid #f3f4f6;">
                                        <span style="font-size: 12px; text-transform: uppercase; color: #9ca3af; font-weight: bold; letter-spacing: 1px;">Empresa</span><br>
                                        <strong style="color: #242424; font-size: 16px;">{{ $datos['empresa'] ?? 'No especificada' }}</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding-top: 12px; border-top: 1px solid #f3f4f6;">
                                        <span style="font-size: 12px; text-transform: uppercase; color: #9ca3af; font-weight: bold; letter-spacing: 1px;">Tipo de Obra</span><br>
                                        <strong style="color: #242424; font-size: 16px; display: inline-block; padding: 4px 10px; background-color: #242424; color: #ffffff; border-radius: 4px; margin-top: 4px;">{{ $datos['tipo_obra'] === 'civil' ? 'Ingeniería Civil' : 'Diseño Arquitectónico' }}</strong>
                                    </td>
                                </tr>
                            </table>

                            <h3 style="color: #242424; font-size: 14px; text-transform: uppercase; margin-top: 35px; margin-bottom: 15px; letter-spacing: 1px;">Mensaje de {{ explode(' ', $datos['nombre'])[0] }}:</h3>
                            <div style="background-color: #ffffff; border-left: 4px solid #fca311; padding: 20px; font-style: italic; color: #4b5563; font-size: 16px; line-height: 1.8; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05); border-radius: 0 8px 8px 0; border-top: 1px solid #f3f4f6; border-right: 1px solid #f3f4f6; border-bottom: 1px solid #f3f4f6;">
                                {!! nl2br(e($datos['mensaje'])) !!}
                            </div>
                        </td>
                    </tr>
                    <!-- Footer -->
                    <tr>
                        <td style="background-color: #f4f4f5; padding: 20px; text-align: center; font-size: 12px; color: #9ca3af; border-top: 1px solid #e5e7eb;">
                            <p style="margin: 0;">Este es un mensaje automático generado desde tu web corporativa.</p>
                            <p style="margin: 5px 0 0 0;">&copy; {{ date('Y') }} Indago Constructora. Todos los derechos reservados.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
