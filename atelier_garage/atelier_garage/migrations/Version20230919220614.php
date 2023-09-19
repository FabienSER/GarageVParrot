<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230919220614 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE list_comment_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE list_service_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE list_comment (id INT NOT NULL, id_comment INT NOT NULL, user_mail_comment VARCHAR(30) NOT NULL, user_name_comment VARCHAR(20) DEFAULT NULL, text_comment TEXT NOT NULL, date_comment DATE NOT NULL, eval_comment INT NOT NULL, state_comment INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE list_service (id INT NOT NULL, id_service INT NOT NULL, name_service VARCHAR(25) NOT NULL, descrip_service VARCHAR(200) DEFAULT NULL, state_service BOOLEAN NOT NULL, PRIMARY KEY(id))');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE list_comment_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE list_service_id_seq CASCADE');
        $this->addSql('DROP TABLE list_comment');
        $this->addSql('DROP TABLE list_service');
    }
}
