<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220208085116 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE experience (id INT AUTO_INCREMENT NOT NULL, profile_id INT NOT NULL, company VARCHAR(255) NOT NULL, job_name VARCHAR(255) NOT NULL, start_date DATE NOT NULL, end_date DATE DEFAULT NULL, city VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, INDEX IDX_590C103CCFA12B8 (profile_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE formation (id INT AUTO_INCREMENT NOT NULL, profile_id INT NOT NULL, place VARCHAR(255) NOT NULL, degree VARCHAR(255) NOT NULL, start_date DATE NOT NULL, end_date DATE DEFAULT NULL, city VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, INDEX IDX_404021BFCCFA12B8 (profile_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE profile (id INT AUTO_INCREMENT NOT NULL, firstname VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, address VARCHAR(255) NOT NULL, zipcode VARCHAR(10) NOT NULL, city VARCHAR(255) NOT NULL, mobile VARCHAR(10) NOT NULL, website VARCHAR(255) NOT NULL, profession VARCHAR(255) NOT NULL, short_description LONGTEXT NOT NULL, long_description LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE recommendation (id INT AUTO_INCREMENT NOT NULL, profile_id INT NOT NULL, date DATE NOT NULL, firstname VARCHAR(255) NOT NULL, company VARCHAR(255) NOT NULL, picture VARCHAR(255) NOT NULL, message LONGTEXT NOT NULL, INDEX IDX_433224D2CCFA12B8 (profile_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE skill (id INT AUTO_INCREMENT NOT NULL, profile_id INT NOT NULL, name VARCHAR(255) NOT NULL, percentage INT DEFAULT NULL, type VARCHAR(4) NOT NULL, category VARCHAR(255) NOT NULL, INDEX IDX_5E3DE477CCFA12B8 (profile_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE social (id INT AUTO_INCREMENT NOT NULL, profile_id INT NOT NULL, class_name VARCHAR(255) NOT NULL, title VARCHAR(255) NOT NULL, link VARCHAR(255) NOT NULL, INDEX IDX_7161E187CCFA12B8 (profile_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE work (id INT AUTO_INCREMENT NOT NULL, profile_id INT NOT NULL, title VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, cover VARCHAR(255) NOT NULL, link VARCHAR(255) DEFAULT NULL, position INT NOT NULL, INDEX IDX_534E6880CCFA12B8 (profile_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE experience ADD CONSTRAINT FK_590C103CCFA12B8 FOREIGN KEY (profile_id) REFERENCES profile (id)');
        $this->addSql('ALTER TABLE formation ADD CONSTRAINT FK_404021BFCCFA12B8 FOREIGN KEY (profile_id) REFERENCES profile (id)');
        $this->addSql('ALTER TABLE recommendation ADD CONSTRAINT FK_433224D2CCFA12B8 FOREIGN KEY (profile_id) REFERENCES profile (id)');
        $this->addSql('ALTER TABLE skill ADD CONSTRAINT FK_5E3DE477CCFA12B8 FOREIGN KEY (profile_id) REFERENCES profile (id)');
        $this->addSql('ALTER TABLE social ADD CONSTRAINT FK_7161E187CCFA12B8 FOREIGN KEY (profile_id) REFERENCES profile (id)');
        $this->addSql('ALTER TABLE work ADD CONSTRAINT FK_534E6880CCFA12B8 FOREIGN KEY (profile_id) REFERENCES profile (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE experience DROP FOREIGN KEY FK_590C103CCFA12B8');
        $this->addSql('ALTER TABLE formation DROP FOREIGN KEY FK_404021BFCCFA12B8');
        $this->addSql('ALTER TABLE recommendation DROP FOREIGN KEY FK_433224D2CCFA12B8');
        $this->addSql('ALTER TABLE skill DROP FOREIGN KEY FK_5E3DE477CCFA12B8');
        $this->addSql('ALTER TABLE social DROP FOREIGN KEY FK_7161E187CCFA12B8');
        $this->addSql('ALTER TABLE work DROP FOREIGN KEY FK_534E6880CCFA12B8');
        $this->addSql('DROP TABLE experience');
        $this->addSql('DROP TABLE formation');
        $this->addSql('DROP TABLE profile');
        $this->addSql('DROP TABLE recommendation');
        $this->addSql('DROP TABLE skill');
        $this->addSql('DROP TABLE social');
        $this->addSql('DROP TABLE work');
    }
}
