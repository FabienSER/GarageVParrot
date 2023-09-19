<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230919194748 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE picture_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE picture (id INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('ALTER TABLE cars ADD id_car2_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE cars ADD CONSTRAINT FK_95C71D147A37632E FOREIGN KEY (id_car2_id) REFERENCES picture (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_95C71D147A37632E ON cars (id_car2_id)');
        $this->addSql('ALTER TABLE pictures DROP CONSTRAINT fk_8f7c2fc0e5f14372');
        $this->addSql('DROP INDEX idx_8f7c2fc0e5f14372');
        $this->addSql('ALTER TABLE pictures DROP id_car_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE cars DROP CONSTRAINT FK_95C71D147A37632E');
        $this->addSql('DROP SEQUENCE picture_id_seq CASCADE');
        $this->addSql('DROP TABLE picture');
        $this->addSql('DROP INDEX IDX_95C71D147A37632E');
        $this->addSql('ALTER TABLE cars DROP id_car2_id');
        $this->addSql('ALTER TABLE pictures ADD id_car_id INT NOT NULL');
        $this->addSql('ALTER TABLE pictures ADD CONSTRAINT fk_8f7c2fc0e5f14372 FOREIGN KEY (id_car_id) REFERENCES cars (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX idx_8f7c2fc0e5f14372 ON pictures (id_car_id)');
    }
}
