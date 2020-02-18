<?php namespace Waka\Crsm\Updates\Seeders;

use DB;
use Seeder;
use Waka\Compilator\Models\BlocType;
use Waka\Compilator\Models\Document;

class SeedCompilators extends Seeder
{
    public function run()
    {
        /**
         * CONFIGURATION DES BLOCS PERSONALISES
         */
        $blocType = BlocType::create([
            'name' => "Liste des missions d'un projet",
            'code' => 'ProjectMission',
            'type' => 'bloc',
            'compiler' => 'Waka\\Crsm\\Contents\\Compilers\\ProjectMission',
            'use_icon' => true,
            'icon' => 'icon-road',
        ]);

        $blocType = BlocType::create([
            'name' => "Liste des Solutions",
            'code' => 'ListNeed',
            'type' => 'bloc',
            'compiler' => 'Waka\\Wcms\\Contents\\Compilers\\ListNeed',
            'use_icon' => true,
            'icon' => 'icon-university',
        ]);

        /**
         * IMPORT DES FICHIERS D EXEMPLES PUBLISHER DEPUIS DOSSIER CRSM
         */
        $localDisk = new \Waka\Utils\Classes\WorkDirFiles();
        $file = plugins_path('waka/crsm/updates/files/templates/lettre_entreprise_vide.docx');
        $localDisk->putFile($file, 'word/templates');
        $file = plugins_path('waka/crsm/updates/files/templates/offre_service_v4.docx');
        $localDisk->putFile($file, 'word/templates');
        $file = plugins_path('waka/crsm/updates/files/templates/projet.docx');
        $localDisk->putFile($file, 'word/templates');
        $file = plugins_path('waka/crsm/updates/files/templates/lettre_contact_solution.docx');
        $localDisk->putFile($file, 'word/templates');
        $file = plugins_path('waka/crsm/updates/files/templates/lettre_entreprise_solution.docx');
        $localDisk->putFile($file, 'word/templates');

        /**
         * Création des documents
         */
        Db::table('waka_publisher_documents')->truncate();
        Document::create([
            "name" => "Présentation offre de service",
            "path" => '/word/templates/offre_service_v4.docx',
            "data_source_id" => 1,
        ]);
        Document::create([
            "name" => "Présentaion des solutions",
            "path" => '/word/templates/lettre_contact_solution.docx',
            "data_source_id" => 1,
        ]);
        Document::create([
            "name" => "Document vide entreprise",
            "path" => '/word/templates/lettre_entreprise_vide.docx',
            "data_source_id" => 2,
        ]);
        Document::create([
            "name" => "Présentaion des solutions entreprise",
            "path" => '/word/templates/lettre_entreprise_solution.docx',
            "data_source_id" => 2,
        ]);
        Document::create([
            "name" => "Proposition de projet",
            "path" => '/word/templates/projet.docx',
            "data_source_id" => 3,
        ]);

        Db::table('waka_publisher_blocs')->truncate();
        $sql = plugins_path('waka/publisher/updates/sql/waka_publisher_blocs.sql');
        DB::unprepared(file_get_contents($sql));

        // Db::table('waka_publisher_contents')->truncate();
        // $sql = plugins_path('waka/publisher/updates/sql/waka_publisher_contents.sql');
        // DB::unprepared(file_get_contents($sql));
    }

}
