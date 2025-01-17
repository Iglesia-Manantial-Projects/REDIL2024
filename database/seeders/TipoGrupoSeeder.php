<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\TipoGrupo;

class TipoGrupoSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $tipoGrupo1 = TipoGrupo::create([
      'nombre' => 'Abierto',
      'nombre_plural' => 'Abiertos',
      'descripcion' => '',
      'geo_icono' => 'grupo-verde.png',
      'seguimiento_actividad' => 1,
      'enviar_mensaje_bienvenida' => 1,
      'mensaje_bienvenida' => 'Ahora ya eres un líder, que bendición que puedas servir al señor desde los grupos abiertos',
      'metros_cobertura' => 5000,
      'color' => '#c12',
      'automatizacion_tipo_usuario_id' => 2
    ]);

    // Automatizaciones de los pasos 1 y 2
    $tipoGrupo1->automatizacionesPasosCrecimiento()->attach(1, ['estado_por_defecto' => 3, 'descripcion_por_defecto' => 'Hola, es automatizo este paso.']);
    $tipoGrupo1->automatizacionesPasosCrecimiento()->attach(2, ['estado_por_defecto' => 2, 'descripcion_por_defecto' => 'Hola, es automatizo este paso.']);

    $tipoGrupo2 = TipoGrupo::create([
      'nombre' => 'Cerrado',
      'nombre_plural' => 'Cerrados',
      'descripcion' => '',
      'contiene_servidores' => TRUE,
      'geo_icono' => 'grupo-rojo.png',
      'seguimiento_actividad' => 1,
      'enviar_mensaje_bienvenida' => 1,
      'mensaje_bienvenida' => 'Ahora ya eres un líder, que bendición que puedas servir al señor desde los grupos cerrados',
      'metros_cobertura' => 1000,
      'color' => '#ed2'
    ]);

    $tipoGrupo3 = TipoGrupo::create([
      'nombre' => 'Inasignable',
      'nombre_plural' => 'Inasignables',
      'descripcion' => '',
      'geo_icono' => 'grupo-azul-claro.png',
      'seguimiento_actividad' => 0,
      'enviar_mensaje_bienvenida' => 1,
      'mensaje_bienvenida' => 'Ahora ya eres un líder, que bendición que puedas servir al señor desde los grupos inasignables',
      'metros_cobertura' => 1000,
      'color' => '#ed2'
    ]);

    $tipoGrupo4 =TipoGrupo::create([
      'nombre' => 'Eliminable',
      'nombre_plural' => 'Eliminables',
      'descripcion' => '',
      'geo_icono' => 'grupo-vinotinto.png',
      'enviar_mensaje_bienvenida' => 1,
      'mensaje_bienvenida' => 'Ahora ya eres un líder, que bendición que puedas servir al señor desde los grupos eliminables',
      'metros_cobertura' => 1000,
      'color' => '#ed2'
    ]);
  }




}
