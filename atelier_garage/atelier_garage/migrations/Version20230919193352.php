<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230919193352 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE pictures_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE pictures (id INT NOT NULL, id_car_id INT NOT NULL, id_picture INT NOT NULL, picture TEXT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_8F7C2FC0E5F14372 ON pictures (id_car_id)');
        $this->addSql('COMMENT ON COLUMN pictures.picture IS \'(DC2Type:object)\'');
        $this->addSql('ALTER TABLE pictures ADD CONSTRAINT FK_8F7C2FC0E5F14372 FOREIGN KEY (id_car_id) REFERENCES cars (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE pictures_id_seq CASCADE');
        $this->addSql('ALTER TABLE pictures DROP CONSTRAINT FK_8F7C2FC0E5F14372');
        $this->addSql('DROP TABLE pictures');
    }
}
