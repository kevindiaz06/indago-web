<?php

namespace Database\Seeders;

use App\Models\Proyecto;
use Illuminate\Database\Seeder;

class ProyectoSeeder extends Seeder
{
    public function run(): void
    {
        $proyectos = [
            [
                'titulo'    => 'Torre Aqua Residences',
                'ubicacion' => 'Piantini, Santo Domingo',
                'tipo'      => 'residencial',
                'estado'    => 'ejecucion',
                'm2'        => '8,400 m²',
                'pisos'     => '18 Pisos',
                'tiempo'    => '28 meses',
                'cliente'   => 'Grupo Aqua RD',
                'reto'      => 'La torre se construye sobre un terreno comprimido en zona de alta densidad urbana. El reto principal fue la cimentación profunda con pilotes helicoidales y el manejo de desvíos de tráfico durante la fase de excavación.',
            ],
            [
                'titulo'    => 'Plaza Comercial InduSur',
                'ubicacion' => 'Boca Chica, Santo Domingo Este',
                'tipo'      => 'comercial',
                'estado'    => 'finalizado',
                'm2'        => '12,000 m²',
                'pisos'     => '3 Plantas',
                'tiempo'    => '18 meses',
                'cliente'   => 'InduSur Investment',
                'reto'      => 'Coordinación logística de más de 200 proveedores simultáneos y montaje estructural de vigas de 40m en zona costera con vientos adversos, cumpliendo el cronograma sin desviaciones.',
            ],
            [
                'titulo'    => 'Nave Industrial FrigoNorte',
                'ubicacion' => 'Santiago de los Caballeros',
                'tipo'      => 'industrial',
                'estado'    => 'finalizado',
                'm2'        => '6,200 m²',
                'pisos'     => '1 Planta + Mezzanine',
                'tiempo'    => '12 meses',
                'cliente'   => 'FrigoNorte S.A.',
                'reto'      => 'Instalación de un sistema de cámaras frigoríficas industriales de -25°C integradas a la estructura de acero. Requirió coordinación milimétrica entre la fase civil y la instalación de equipos de refrigeración.',
            ],
            [
                'titulo'    => 'Urbanización Las Palmas',
                'ubicacion' => 'La Romana',
                'tipo'      => 'residencial',
                'estado'    => 'finalizado',
                'm2'        => '32,000 m²',
                'pisos'     => '72 Villas',
                'tiempo'    => '36 meses',
                'cliente'   => 'Desarrollos Caribe',
                'reto'      => 'Desarrollo en lote de topografía irregular que obligó a un movimiento de tierra de 45,000 m³ y diseño de vías internas con pendientes adaptadas al terreno natural, manteniendo la estética del conjunto.',
            ],
            [
                'titulo'    => 'Carretera Acceso Norte – Km 14',
                'ubicacion' => 'Autopista Duarte, SDN',
                'tipo'      => 'civil',
                'estado'    => 'finalizado',
                'm2'        => '4.2 km de vía',
                'pisos'     => 'Doble calzada',
                'tiempo'    => '10 meses',
                'cliente'   => 'MOPC – República Dominicana',
                'reto'      => 'Rehabilitación y ensanche de una vía de alto tráfico sin cierre total de la carretera. Se trabajó en horarios nocturnos con señalización especial y coordinación con la DIGESETT para flujo alterno.',
            ],
            [
                'titulo'    => 'Edificio Corporativo Blue Tower',
                'ubicacion' => 'Bella Vista, Santo Domingo',
                'tipo'      => 'comercial',
                'estado'    => 'ejecucion',
                'm2'        => '9,800 m²',
                'pisos'     => '22 Pisos',
                'tiempo'    => '32 meses',
                'cliente'   => 'Blue Group Corp.',
                'reto'      => 'Construcción en zona de alta densidad con restricciones de grúa por espacio aéreo del aeropuerto. Se utilizó sistema trepante lateral y hormigón de alta resistencia (60 MPa) para reducir el peralte de losas.',
            ],
        ];

        foreach ($proyectos as $data) {
            Proyecto::create($data);
        }
    }
}
