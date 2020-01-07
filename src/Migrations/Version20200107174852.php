<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200107174852 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql('
            UPDATE profile
            SET long_description = "<p>J\'ai découvert la programmation en 2012 et celle-ci est très vite devenue une passion, après avoir été formé à différents langages web et logiciels, j\'ai approfondi mes connaissances dans le développement web et mobile.</p>"
        ');

        $this->addSql('
            UPDATE experience
            SET end_date = "1970-01-01"
            WHERE company <> "Webgump"
            AND company <> "Synapse Interactive"
        ');

        $this->addSql('
            UPDATE experience
            SET end_date = "2019-08-02"
            WHERE company = "WebdealAuto"
        ');

        $this->addSql('
            INSERT INTO experience (profile_id, company, job_name, start_date, end_date, description, city)
            VALUES (39, "Synapse Interactive", "Lead Developer", "2019-08-19", NULL, "Conception d\'un outils de création de newsletter avec Symfony 4 et VueJS / Migration de deux sites sous Symfony 5 / Maintenance des outils existants sous CodeIgniter", "Marcq-en-Barœul")
        ');

        $this->addSql('
            UPDATE experience
            SET job_name = "Web developer"
            WHERE job_name = "Développeur web"
            OR job_name = "Stage développeur web"
        ');

        $this->addSql('
            UPDATE experience
            SET job_name = "Lead developer"
            WHERE job_name = "Lead Développeur"
        ');

        $this->addSql('UPDATE experience SET end_date = "2012-01-01 00:00:00" WHERE company = "Wanted Solutions"');
        $this->addSql('UPDATE experience SET end_date = "2012-01-01 00:00:00" WHERE company = "DevSources"');
        $this->addSql('UPDATE experience SET end_date = "2012-01-01 00:00:00" WHERE company = "Hautes Loges Animation"');
        $this->addSql('UPDATE experience SET end_date = "2013-01-01 00:00:00" WHERE company = "FabienAssist06"');
        $this->addSql('UPDATE experience SET end_date = "2013-01-01 00:00:00" WHERE company = "Lille Art Trianon"');
        $this->addSql('UPDATE experience SET end_date = "2013-01-01 00:00:00" WHERE company = "Réflexe Adoption"');

        $this->addSql('
            INSERT INTO skill (profile_id, name, percentage)
            VALUES (39, "VueJS", 60);
        ');

        $this->addSql('
            ALTER TABLE `formation` CHANGE `city` `city` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL;
        ');

        $this->addSql('
            ALTER TABLE `formation` CHANGE `description` `description` LONGTEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL;
        ');

        $this->addSql('UPDATE formation SET description = NULL;');

        $this->addSql('
            INSERT INTO formation (profile_id, place, degree, start_date, end_date) VALUES
            (39, "OpenClassrooms", "Certification \"Développez des applications Web avec Angular\"", "2019-10-16", "2019-10-16");
        ');

        $this->addSql('UPDATE formation SET end_date = "2009-01-01 00:00:00" WHERE place = "Lycée Yves Kernanec"');
        $this->addSql('UPDATE formation SET end_date = "2010-01-01 00:00:00" WHERE place = "C.M.A. (Centre des Musiques Actuelles)"');
        $this->addSql('UPDATE formation SET end_date = "2012-01-01 00:00:00" WHERE place = "Afpa"');

        $this->addSql('UPDATE skill SET name = "Symfony 1/2/3/4/5" WHERE name = "Symfony 1/2/3/4"');
    }

    public function down(Schema $schema) : void
    {
    }
}
