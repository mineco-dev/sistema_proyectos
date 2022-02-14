<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Bodega;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Cooperante;
use App\Models\Cooperation;
use App\Models\CooperationType;
use App\Models\Dependency;
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

        Objetivo::create(['name'=>'Fin de la pobreza']);
        Objetivo::create(['name'=>'Hambre 0']);
        Objetivo::create(['name'=>'Salud y Bienestar']);
        Objetivo::create(['name'=>'Educación de Calidad']);
        Objetivo::create(['name'=>'Igualdad de Género']);
        Objetivo::create(['name'=>'Agua limpia y saneamiento']);
        Objetivo::create(['name'=>'Energía Asequible y no contaminante']);
        Objetivo::create(['name'=>'Trabajo decente y crecimiento económico']);
        Objetivo::create(['name'=>'Industria, innovación e infraestructura']);
        Objetivo::create(['name'=>'Reducción de las desigualdades']);
        Objetivo::create(['name'=>'Ciudades y comunidades sostenibles']);
        Objetivo::create(['name'=>'Producción y consumo responsables']);
        Objetivo::create(['name'=>'Acción por el clima']);
        Objetivo::create(['name'=>'Vida Submarina']);
        Objetivo::create(['name'=>'Vida de Ecosistemas terrestres']);
        Objetivo::create(['name'=>'Paz, justicia e instituciones sólidas']);
        Objetivo::create(['name'=>'Alianzas para lograr los objetivos']);

        Unit::create(['name'=>'101']);
        Unit::create(['name'=>'102']);
        Unit::create(['name'=>'103']);
        Unit::create(['name'=>'104']);
        Unit::create(['name'=>'105']);
        Unit::create(['name'=>'106']);
        Unit::create(['name'=>'107']);
        Unit::create(['name'=>'108']);
        Unit::create(['name'=>'109']);

        State::create(['name'=>'Negociación']);
        State::create(['name'=>'Registro']);
        State::create(['name'=>'Implementación']);
        State::create(['name'=>'Ejecución']);
        State::create(['name'=>'NegociaCierreción']);

        Katun::create(['name'=>'Protección Social y Reducción de la Pobreza']);
        Katun::create(['name'=>'Acceso a Servicios de Salud']);
        Katun::create(['name'=>'Acceso al Agua y Gestión de Recursos Naturales']);
        Katun::create(['name'=>'Empleo e Inversión']);
        Katun::create(['name'=>'Educación']);
        Katun::create(['name'=>'Valor económico de los Recursos Naturales']);
        Katun::create(['name'=>'Fortalecimiento institucional, seguridad y justicia']);
        Katun::create(['name'=>'Seguridad Alimentaria y Nutricional']);
        Katun::create(['name'=>'Reforma Fiscal Integral']);
        Katun::create(['name'=>'Ordenamiento Territorial']);
    }
}
/* App\User::create([
    'name' => 'Juan José',
    'email' => 'jjaguilal@mineco.gob.gt',
    'password' => bcrypt('12345678')
]); */