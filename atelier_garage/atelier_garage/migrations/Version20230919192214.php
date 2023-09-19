<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230919192214 extends AbstractMigration
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
        $this->addSql('CREATE TABLE cars (id INT NOT NULL, id_car INT NOT NULL, mark_car VARCHAR(20) NOT NULL, model_car VARCHAR(30) NOT NULL, type_car VARCHAR(10) NOT NULL, kilometrage_car INT NOT NULL, date_circul_car DATE NOT NULL, color_car VARCHAR(10) DEFAULT NULL, nb_door_car INT NOT NULL, nb_place_car INT NOT NULL, utility_area_car DOUBLE PRECISION DEFAULT NULL, price_car INT NOT NULL, co2_car INT DEFAULT NULL, power_car INT NOT NULL, energy_car VARCHAR(30) NOT NULL, autonomy_car INT DEFAULT NULL, consum100 DOUBLE PRECISION DEFAULT NULL, descrip_car VARCHAR(255) DEFAULT NULL, boite_car BOOLEAN NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE options (id INT NOT NULL, id_option INT NOT NULL, name_option VARCHAR(20) NOT NULL, descrip_option VARCHAR(200) DEFAULT NULL, PRIMARY KEY(id))');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE cars_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE options_id_seq CASCADE');
        $this->addSql('DROP TABLE cars');
        $this->addSql('DROP TABLE options');
    }
}
