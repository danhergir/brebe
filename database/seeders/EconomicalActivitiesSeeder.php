<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EconomicalActivity;

class EconomicalActivitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run()
    {
        $activities = [
            'Servicios veterinarios',
            'Almacenes de calzado y remonadoras',
            'Computadoras, periféricos de computadora, software',
            'Droguerías y farmacias',
            'Dropshipping',
            'Equipo de oficina, fotográfico, fotocopiado y microfilm',
            'Equipos de telecomunicaciones, incluidas las ventas telefónicas',
            'Equipos y suministros dentales / de laboratorio / médicos / oftálmicos para hospitales',
            'Ferreterías',
            'Floristerías',
            'Laboratorios médicos y dentales',
            'Papelerías, material de oficina, papel de impresión y escritura',
            'Peluquerías, salones de belleza y SPA',
            'Producción y distribución de películas y cintas de video',
            'Productos digitales: aplicaciones (no incluye juegos)',
            'Tiendas de accesorios para mujeres',
            'Tiendas de cosméticos',
            'Tiendas de electrónica',
            'Tiendas de licores y cigarrerías',
            'Tiendas de regalos y misceláneas',
            'Tiendas de ropa para hombres y mujeres',
            'Tiendas de software',
            'Tiendas especializadas de decoración',
            'Alojamientos, hoteles, complejos turísticos',
            'Clubes de campo, membresía (atlética, recreativa, deportiva), campos de golf privados',
            'Colegios, universidades, escuelas profesionales y colegios universitarios',
            'Dentistas y ortodoncistas',
            'Escuelas y servicios educativos no formales',
            'Hospitales',
            'Marketing directo',
            'Médicos',
            'Organizaciones, Caridad y Servicio Social (No incluye crowdfunding)',
            'Restaurantes y lugares para comer',
            'Servicios de programación informática, procesamiento de datos y diseño de sistemas integrados',
            'Servicios profesionales',
            'Servicios Publicitarios',
        ];

        foreach ($activities as $activity) {
            EconomicalActivity::create(['name' => $activity]);
        }
    }
}
