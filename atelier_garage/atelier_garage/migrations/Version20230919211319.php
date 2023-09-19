<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230919211319 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP SEQUENCE open_hours_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE list_comment_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE config_service_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE cars_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE options_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE pictures_id_seq CASCADE');
        $this->addSql('ALTER TABLE options_cars DROP CONSTRAINT fk_8167152a3adb05f1');
        $this->addSql('ALTER TABLE options_cars DROP CONSTRAINT fk_8167152a8702f506');
        $this->addSql('DROP TABLE list_comment');
        $this->addSql('DROP TABLE config_service');
        $this->addSql('DROP TABLE cars');
        $this->addSql('DROP TABLE pictures');
        $this->addSql('DROP TABLE options');
        $this->addSql('DROP TABLE open_hours');
        $this->addSql('DROP TABLE options_cars');
        $this->addSql('ALTER TABLE users ADD name_user VARCHAR(20) NOT NULL');
        $this->addSql('ALTER TABLE users ADD first_name_user VARCHAR(20) DEFAULT NULL');
        $this->addSql('ALTER TABLE users DROP user_name');
        $this->addSql('ALTER TABLE users DROP user_first_name');
        $this->addSql('ALTER TABLE users RENAME COLUMN lvl_perm TO lvl_action');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('CREATE SEQUENCE open_hours_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE list_comment_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE config_service_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE cars_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE options_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE pictures_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE list_comment (id INT NOT NULL, id_comment INT NOT NULL, user_name_comment VARCHAR(30) DEFAULT NULL, user_email_comment VARCHAR(30) NOT NULL, text_comment TEXT NOT NULL, date_comment DATE NOT NULL, state_comment VARCHAR(1) NOT NULL, eval_comment INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE config_service (id INT NOT NULL, id_service INT NOT NULL, name_service VARCHAR(30) NOT NULL, descrip_service VARCHAR(150) DEFAULT NULL, state_service BOOLEAN NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE cars (id INT NOT NULL, id_car INT NOT NULL, mark_car VARCHAR(20) NOT NULL, model_car VARCHAR(30) NOT NULL, type_car VARCHAR(10) NOT NULL, kilometrage_car INT NOT NULL, date_circul_car DATE NOT NULL, color_car VARCHAR(10) DEFAULT NULL, nb_door_car INT NOT NULL, nb_place_car INT NOT NULL, utility_area_car DOUBLE PRECISION DEFAULT NULL, price_car INT NOT NULL, co2_car INT DEFAULT NULL, power_car INT NOT NULL, energy_car VARCHAR(30) NOT NULL, autonomy_car INT DEFAULT NULL, consum100 DOUBLE PRECISION DEFAULT NULL, descrip_car VARCHAR(255) DEFAULT NULL, boite_car BOOLEAN NOT NULL, state_car INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE pictures (id INT NOT NULL, id_picture INT NOT NULL, picture TEXT NOT NULL, id_car INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('COMMENT ON COLUMN pictures.picture IS \'(DC2Type:object)\'');
        $this->addSql('CREATE TABLE options (id INT NOT NULL, id_option INT NOT NULL, name_option VARCHAR(20) NOT NULL, descrip_option VARCHAR(200) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE open_hours (id INT NOT NULL, id_days INT NOT NULL, start_morning VARCHAR(5) DEFAULT NULL, end_morning VARCHAR(5) DEFAULT NULL, start_afternoon VARCHAR(5) DEFAULT NULL, end_afternoon VARCHAR(5) DEFAULT NULL, label_day VARCHAR(30) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE options_cars (options_id INT NOT NULL, cars_id INT NOT NULL, PRIMARY KEY(options_id, cars_id))');
        $this->addSql('CREATE INDEX idx_8167152a8702f506 ON options_cars (cars_id)');
        $this->addSql('CREATE INDEX idx_8167152a3adb05f1 ON options_cars (options_id)');
        $this->addSql('ALTER TABLE options_cars ADD CONSTRAINT fk_8167152a3adb05f1 FOREIGN KEY (options_id) REFERENCES options (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE options_cars ADD CONSTRAINT fk_8167152a8702f506 FOREIGN KEY (cars_id) REFERENCES cars (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE users ADD user_name VARCHAR(30) NOT NULL');
        $this->addSql('ALTER TABLE users ADD user_first_name VARCHAR(30) NOT NULL');
        $this->addSql('ALTER TABLE users DROP name_user');
        $this->addSql('ALTER TABLE users DROP first_name_user');
        $this->addSql('ALTER TABLE users RENAME COLUMN lvl_action TO lvl_perm');
    }
}
