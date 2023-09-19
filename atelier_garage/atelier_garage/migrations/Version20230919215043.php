<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230919215043 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE open_hours_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE open_hours (id INT NOT NULL, id_day INT NOT NULL, start_morning VARCHAR(5) DEFAULT NULL, end_morning VARCHAR(5) DEFAULT NULL, start_afternoon VARCHAR(5) DEFAULT NULL, end_afternoon VARCHAR(5) DEFAULT NULL, label_day VARCHAR(15) NOT NULL, PRIMARY KEY(id))');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE open_hours_id_seq CASCADE');
        $this->addSql('DROP TABLE open_hours');
    }
}
