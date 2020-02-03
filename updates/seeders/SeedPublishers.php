<?php namespace Waka\Crsm\Updates\Seeders;

use DB;
use Seeder;
use Waka\Publisher\Models\BlocType;
use Waka\Publisher\Models\Document;

class SeedPublishers extends Seeder
{
    public function run()
    {
        /**
         * CONFIGURATION DES BLOCS PERSONALISES
         */
        $blocType = BlocType::create([
            'name' => "Liste des missions d'un projet",
            'code' => 'ProjectMission',
            'type' => 'row',
            'compiler' => 'Waka\\Crsm\\Contents\\Compilers\\ProjectMission',
            'use_icon' => true,
            'icon' => 'icon-road',
        ]);

        /**
         * IMPORT DES FICHIERS D EXEMPLES PUBLISHER DEPUIS DOSSIER CRSM
         */
        $localDisk = new \Waka\Utils\Classes\WorkDirFiles();
        $file = plugins_path('waka\crsm\updates\files\templates\lettre_entreprise_vide.docx');
        $localDisk->putFile($file, 'word/templates');
        $file = plugins_path('waka\crsm\updates\files\templates\offre_service_v4.docx');
        $localDisk->putFile($file, 'word/templates');
        $file = plugins_path('waka\crsm\updates\files\templates\projet.docx');
        $localDisk->putFile($file, 'word/templates');
        // trace_log($localDisk->getFileUrl('test.png', 'word/caca'));
        // trace_log($localDisk->getFilePath('test.png', 'word/caca'));
        // trace_log($localDisk->getFileUrl('word/caca/test.png'));

        /**
         * Création des documents
         */
        Db::table('waka_publisher_documents')->truncate();
        Document::create([
            "name" => "Présentation offre de service",
            "path" => '/word/templates/offre_service_v4.docx',
            "data_source_id" => 1,
            "sort_order" => 1,
        ]);
        Document::create([
            "name" => "Document vide entreprise",
            "path" => '/word/templates/lettre_entreprise_vide.docx',
            "data_source_id" => 2,
            "sort_order" => 2,
        ]);
        Document::create([
            "name" => "Projet",
            "path" => '/word/templates/projet.docx',
            "data_source_id" => 3,
            "sort_order" => 3,
        ]);

        Db::table('waka_publisher_blocs')->truncate();
        $sql = plugins_path('waka\publisher\updates\sql\waka_publisher_blocs.sql');
        DB::unprepared(file_get_contents($sql));

        Db::table('waka_publisher_contents')->truncate();
        $sql = plugins_path('waka\publisher\updates\sql\waka_publisher_contents.sql');
        DB::unprepared(file_get_contents($sql));
    }

}
