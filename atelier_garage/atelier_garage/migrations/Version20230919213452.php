<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230919213452 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE cars_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE options_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE pictures_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE cars (id INT NOT NULL, id_car INT NOT NULL, mark_car VARCHAR(20) NOT NULL, model_car VARCHAR(30) NOT NULL, price_car INT NOT NULL, type_car VARCHAR(15) NOT NULL, kilometer INT NOT NULL, date_circul_car DATE NOT NULL, nb_door_car INT NOT NULL, nb_place_car INT NOT NULL, color_car VARCHAR(15) DEFAULT NULL, utility_area_car DOUBLE PRECISION DEFAULT NULL, power_car INT NOT NULL, co2 INT DEFAULT NULL, energy_car VARCHAR(20) NOT NULL, autonomy_car VARCHAR(15) DEFAULT NULL, conso100 DOUBLE PRECISION DEFAULT NULL, boit_car BOOLEAN NOT NULL, descrip_car VARCHAR(255) DEFAULT NULL, id_photo_princ INT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE options (id INT NOT NULL, id_option INT NOT NULL, name_option VARCHAR(20) NOT NULL, descrip_option VARCHAR(200) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE options_cars (options_id INT NOT NULL, cars_id INT NOT NULL, PRIMARY KEY(options_id, cars_id))');
        $this->addSql('CREATE INDEX IDX_8167152A3ADB05F1 ON options_cars (options_id)');
        $this->addSql('CREATE INDEX IDX_8167152A8702F506 ON options_cars (cars_id)');
        $this->addSql('CREATE TABLE pictures (id INT NOT NULL, id_car_id INT NOT NULL, id_picture INT NOT NULL, picture BYTEA NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_8F7C2FC0E5F14372 ON pictures (id_car_id)');
        $this->addSql('ALTER TABLE options_cars ADD CONSTRAINT FK_8167152A3ADB05F1 FOREIGN KEY (options_id) REFERENCES options (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE options_cars ADD CONSTRAINT FK_8167152A8702F506 FOREIGN KEY (cars_id) REFERENCES cars (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE pictures ADD CONSTRAINT FK_8F7C2FC0E5F14372 FOREIGN KEY (id_car_id) REFERENCES cars (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE cars_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE options_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE pictures_id_seq CASCADE');
        $this->addSql('ALTER TABLE options_cars DROP CONSTRAINT FK_8167152A3ADB05F1');
        $this->addSql('ALTER TABLE options_cars DROP CONSTRAINT FK_8167152A8702F506');
        $this->addSql('ALTER TABLE pictures DROP CONSTRAINT FK_8F7C2FC0E5F14372');
        $this->addSql('DROP TABLE cars');
        $this->addSql('DROP TABLE options');
        $this->addSql('DROP TABLE options_cars');
        $this->addSql('DROP TABLE pictures');
    }
}
