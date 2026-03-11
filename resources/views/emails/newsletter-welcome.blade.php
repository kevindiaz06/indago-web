<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Bienvenido al Newsletter de Indago Constructora!</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { background-color: #0f0f0f; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: #e5e5e5; }
        .wrapper { max-width: 600px; margin: 40px auto; background-color: #1a1a1a; border-radius: 16px; overflow: hidden; border: 1px solid #2a2a2a; }
        .header { background: linear-gradient(135deg, #1a1a1a 0%, #2a2a2a 100%); padding: 40px 40px 30px; text-align: center; border-bottom: 1px solid #2a2a2a; position: relative; }
        .header::before { content: ''; position: absolute; top: 0; left: 0; right: 0; height: 3px; background: linear-gradient(90deg, transparent, #f97316, transparent); }
        .logo-area { display: inline-flex; align-items: center; gap: 12px; margin-bottom: 24px; }
        .logo-icon { width: 48px; height: 48px; background-color: #f97316; border-radius: 10px; display: flex; align-items: center; justify-content: center; }
        .logo-text { font-size: 22px; font-weight: 900; color: #ffffff; letter-spacing: -0.5px; }
        .logo-text span { color: #f97316; }
        .welcome-badge { display: inline-block; background: rgba(249, 115, 22, 0.15); border: 1px solid rgba(249, 115, 22, 0.3); color: #f97316; font-size: 12px; font-weight: 600; letter-spacing: 2px; text-transform: uppercase; padding: 6px 16px; border-radius: 50px; margin-bottom: 20px; }
        .header h1 { font-size: 28px; font-weight: 800; color: #ffffff; line-height: 1.3; }
        .header h1 span { color: #f97316; }
        .body { padding: 40px; }
        .greeting { font-size: 16px; color: #a3a3a3; line-height: 1.7; margin-bottom: 24px; }
        .greeting strong { color: #ffffff; }
        .feature-grid { display: grid; gap: 16px; margin: 28px 0; }
        .feature-item { display: flex; align-items: flex-start; gap: 16px; padding: 16px; background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.07); border-radius: 12px; }
        .feature-icon { width: 40px; height: 40px; background: rgba(249, 115, 22, 0.1); border-radius: 8px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; font-size: 20px; }
        .feature-text h4 { font-size: 14px; font-weight: 700; color: #ffffff; margin-bottom: 4px; }
        .feature-text p { font-size: 13px; color: #737373; line-height: 1.5; }
        .divider { height: 1px; background: linear-gradient(90deg, transparent, #2a2a2a, transparent); margin: 28px 0; }
        .cta-section { text-align: center; padding: 24px; background: rgba(249, 115, 22, 0.05); border: 1px solid rgba(249, 115, 22, 0.15); border-radius: 12px; margin-bottom: 28px; }
        .cta-section p { font-size: 14px; color: #a3a3a3; margin-bottom: 16px; }
        .cta-button { display: inline-block; background: linear-gradient(135deg, #f97316, #ea580c); color: #ffffff; font-size: 14px; font-weight: 700; padding: 12px 32px; border-radius: 10px; text-decoration: none; letter-spacing: 0.5px; }
        .footer { padding: 24px 40px; background: #141414; border-top: 1px solid #2a2a2a; text-align: center; }
        .footer p { font-size: 12px; color: #525252; line-height: 1.6; }
        .footer a { color: #f97316; text-decoration: none; }
        .subscribed-email { display: inline-block; background: rgba(249,115,22,0.1); color: #f97316; font-size: 13px; font-weight: 600; padding: 4px 12px; border-radius: 6px; margin-top: 8px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <div class="logo-area">
                <div class="logo-text">INDAGO<span>CONSTRUCTORA</span></div>
            </div>
            <div class="welcome-badge">✉ Newsletter</div>
            <h1>¡Bienvenido a nuestra<br><span>comunidad</span>!</h1>
        </div>

        <div class="body">
            <p class="greeting">
                Hola, <strong>¡nos alegra tenerte aquí!</strong><br><br>
                Te has suscrito exitosamente al newsletter de <strong>Indago Constructora</strong>
                con el correo:
            </p>
            <div style="text-align: center; margin-bottom: 24px;">
                <span class="subscribed-email">{{ $subscriberEmail }}</span>
            </div>
            <p class="greeting">
                A partir de ahora recibirás en primera fila todo lo que hacemos:
            </p>

            <div class="feature-grid">
                <div class="feature-item">
                    <div class="feature-icon">🏗️</div>
                    <div class="feature-text">
                        <h4>Proyectos Destacados</h4>
                        <p>Serás el primero en ver nuestros nuevos proyectos de construcción e infraestructura.</p>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">📝</div>
                    <div class="feature-text">
                        <h4>Artículos del Blog</h4>
                        <p>Contenido exclusivo sobre tendencias, novedades y consejos del sector de la construcción.</p>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">🎯</div>
                    <div class="feature-text">
                        <h4>Novedades y Noticias</h4>
                        <p>Mantente al tanto de todas las últimas noticias y avances de nuestra empresa.</p>
                    </div>
                </div>
            </div>

            <div class="divider"></div>

            <div class="cta-section">
                <p>¿Quieres ver nuestros proyectos más recientes ahora mismo?</p>
                <a href="{{ url('/proyectos') }}" class="cta-button">Ver Proyectos →</a>
            </div>
        </div>

        <div class="footer">
            <p>
                Has recibido este correo porque te suscribiste al newsletter de Indago Constructora.<br>
                Si deseas darte de baja, <a href="{{ url('/') }}">visita nuestro sitio</a> y contáctanos.
            </p>
            <p style="margin-top: 10px;">© {{ date('Y') }} Indago Constructora. Todos los derechos reservados.</p>
        </div>
    </div>
</body>
</html>
