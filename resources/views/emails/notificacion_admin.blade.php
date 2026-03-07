<h2>Nueva solicitud de proyecto</h2>
<ul>
    <li><strong>Nombre:</strong> {{ $datos['nombre'] }}</li>
    <li><strong>Email:</strong> {{ $datos['email'] }}</li>
    <li><strong>Teléfono:</strong> {{ $datos['telefono'] }}</li>
    <li><strong>Empresa:</strong> {{ $datos['empresa'] ?? 'No especificada' }}</li>
    <li><strong>Tipo de Obra:</strong> {{ $datos['tipo_obra'] === 'civil' ? 'Ingeniería Civil' : 'Diseño Arquitectónico' }}</li>
</ul>
<h3>Mensaje:</h3>
<p>{{ $datos['mensaje'] }}</p>
