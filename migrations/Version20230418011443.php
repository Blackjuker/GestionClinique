<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230418011443 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE patient (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, age INT NOT NULL, adresse VARCHAR(255) NOT NULL, ville VARCHAR(255) NOT NULL, genre VARCHAR(255) NOT NULL, tel VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, etat_civil VARCHAR(255) NOT NULL, nom_conjoint VARCHAR(255) NOT NULL, lieu_parente VARCHAR(255) NOT NULL, nbr_enfant INT NOT NULL, taille NUMERIC(10, 2) NOT NULL, poids INT NOT NULL, group_sanguin VARCHAR(255) NOT NULL, profession VARCHAR(255) NOT NULL, ident_unique VARCHAR(255) NOT NULL, prise_en_charge VARCHAR(255) NOT NULL, assureur VARCHAR(255) NOT NULL, medecin VARCHAR(255) NOT NULL, date_prdv DATE NOT NULL, date_drdv DATE NOT NULL, mot_cles VARCHAR(255) NOT NULL, code_apci VARCHAR(255) NOT NULL, reg_cnam VARCHAR(255) NOT NULL, date VARCHAR(255) NOT NULL, datevalidite DATE NOT NULL, qualite VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE patient');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
