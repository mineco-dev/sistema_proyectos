<?php

namespace Database\Seeders;

use App\Http\Livewire\Rol;
use App\Models\Article;
use App\Models\Bodega;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\ContactType;
use App\Models\Cooperante;
use App\Models\Cooperation;
use App\Models\CooperationType;
use App\Models\Dependency;
use App\Models\Expediente;
use App\Models\FormalizationDocument;
use App\Models\Insumo;
use App\Models\Katun;
use App\Models\Moneda;
use App\Models\Objetivo;
use App\Models\Subcategory;
use App\Models\User;
use App\Models\presentation;
use App\Models\Provider;
use App\Models\ResourceClassification;
use App\Models\State;
use App\Models\Unit;
use phpDocumentor\Reflection\Types\Resource_;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Category::factory(5)->create();
        User::create([
            'name' => 'Juan José',
            'email' => 'juanjosedelaguilalopez@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        User::create([
            'name' => 'Administrador',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678')
        ]);  

        Cooperation::create(['name' =>'Reembolsable']);
        Cooperation::create(['name' =>'No Reembolsable']);

        CooperationType::create(['name' => 'Unilateral']);
        CooperationType::create(['name' => 'Bilateral']);

        Cooperante::create(['name'=>'EUA']);
        Cooperante::create(['name'=>'UE']);
        Cooperante::create(['name'=>'Alemania/PTB']);
        Cooperante::create(['name'=>'China-Taiwan']);
        Cooperante::create(['name'=>'JICA']);
        Cooperante::create(['name'=>'Corea']);
        Cooperante::create(['name'=>'México']);
        Cooperante::create(['name'=>'GIZ']);
        Cooperante::create(['name'=>'FIDA']);
        Cooperante::create(['name'=>'FAO']);
        Cooperante::create(['name'=>'Rep. Dominicana']);
        Cooperante::create(['name'=>'PNUD']);
        Cooperante::create(['name'=>'Colombia']);
        Cooperante::create(['name'=>'España']);
        Cooperante::create(['name'=>'Otro']);

        FormalizationDocument::create(['name'=>'Acuerdo']);
        FormalizationDocument::create(['name'=>'Convenio']);
        FormalizationDocument::create(['name'=>'Carta de Entendimiento']);
        FormalizationDocument::create(['name'=>'Plan de Acción']);
        FormalizationDocument::create(['name'=>'Contrato']);
        FormalizationDocument::create(['name'=>'Plan de Trabajo']);
        FormalizationDocument::create(['name'=>'Memorandum']);
        FormalizationDocument::create(['name'=>'Registro de Discusiones']);
        FormalizationDocument::create(['name'=>'Otro']);

        Moneda::create(['name'=>'Dólares']);
        Moneda::create(['name'=>'Euros']);
        Moneda::create(['name'=>'Quetzales']);
        Moneda::create(['name'=>'N/A']);

        ResourceClassification::create(['name'=>'Técnicos']);
        ResourceClassification::create(['name'=>'Financieros']);
        ResourceClassification::create(['name'=>'En especie']);
        ResourceClassification::create(['name'=>'Financierons-técnicos']);
        ResourceClassification::create(['name'=>'Técnicos y en especie']);
        ResourceClassification::create(['name'=>'Financieros y en especie']);

        Objetivo::create(['name'=>'Fin de la pobreza', 'codigo'=>'1']);
        Objetivo::create(['name'=>'Hambre 0', 'codigo'=>'2']);
        Objetivo::create(['name'=>'Salud y Bienestar', 'codigo'=>'3']);
        Objetivo::create(['name'=>'Educación de Calidad', 'codigo'=>'4']);
        Objetivo::create(['name'=>'Igualdad de Género', 'codigo'=>'5']);
        Objetivo::create(['name'=>'Agua limpia y saneamiento', 'codigo'=>'6']);
        Objetivo::create(['name'=>'Energía Asequible y no contaminante', 'codigo'=>'7']);
        Objetivo::create(['name'=>'Trabajo decente y crecimiento económico', 'codigo'=>'8']);
        Objetivo::create(['name'=>'Industria, innovación e infraestructura', 'codigo'=>'9']);
        Objetivo::create(['name'=>'Reducción de las desigualdades', 'codigo'=>'10']);
        Objetivo::create(['name'=>'Ciudades y comunidades sostenibles', 'codigo'=>'11']);
        Objetivo::create(['name'=>'Producción y consumo responsables', 'codigo'=>'12']);
        Objetivo::create(['name'=>'Acción por el clima', 'codigo'=>'13']);
        Objetivo::create(['name'=>'Vida Submarina', 'codigo'=>'14']);
        Objetivo::create(['name'=>'Vida de Ecosistemas terrestres', 'codigo'=>'15']);
        Objetivo::create(['name'=>'Paz, justicia e instituciones sólidas', 'codigo'=>'16']);
        Objetivo::create(['name'=>'Alianzas para lograr los objetivos', 'codigo'=>'17']);

        Unit::create(['name'=>'101 - Dirección Superior']);
        Unit::create(['name'=>'102 - Registro Mercantil General de la República ']);
        Unit::create(['name'=>'103 - Registro de la Propiedad Intelectual']);
        Unit::create(['name'=>'104 - Dirección del Sistema Nacional de la Calidad']);
        Unit::create(['name'=>'105 - Dirección de Servicios Financieros Empresariales']);
        Unit::create(['name'=>'106 - Dirección de Atención y Asistencia al Consumidor']);
        Unit::create(['name'=>'107 - Programa de Apoyo al Comercio Exterior y la Integración']);
        Unit::create(['name'=>'108 - Programa Nacional de la Competitividad']);

        State::create(['name'=>'Negociación']);
        State::create(['name'=>'Registro']);
        State::create(['name'=>'Implementación']);
        State::create(['name'=>'Ejecución']);
        State::create(['name'=>'Cierre']);

        Katun::create(['name'=>'Protección Social y Reducción de la Pobreza', 'codigo'=>'1']);
        Katun::create(['name'=>'Acceso a Servicios de Salud', 'codigo'=>'2']);
        Katun::create(['name'=>'Acceso al Agua y Gestión de Recursos Naturales', 'codigo'=>'3']);
        Katun::create(['name'=>'Empleo e Inversión', 'codigo'=>'4']);
        Katun::create(['name'=>'Educación', 'codigo'=>'5']);
        Katun::create(['name'=>'Valor económico de los Recursos Naturales', 'codigo'=>'6']);
        Katun::create(['name'=>'Fortalecimiento institucional, seguridad y justicia', 'codigo'=>'7']);
        Katun::create(['name'=>'Seguridad Alimentaria y Nutricional', 'codigo'=>'8']);
        Katun::create(['name'=>'Reforma Fiscal Integral', 'codigo'=>'9']);
        Katun::create(['name'=>'Ordenamiento Territorial', 'codigo'=>'10']);

        Role::create(['name'=>'Administrador']);

        Permission::create(['name' => 'Modificar Catálogos']);
        Permission::create(['name' => 'Ver Listado de Proyectos']);
        Permission::create(['name' => 'Crear Proyecto']);

        ContactType::create(['name' => 'Unidad Beneficiada']);
        ContactType::create(['name' => 'Cooperante']);
    }
}
/* App\User::create([
    'name' => 'Juan José',
    'email' => 'jjaguilal@mineco.gob.gt',
    'password' => bcrypt('12345678')
]); */