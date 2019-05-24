<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190524144956 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE cafe (id INT AUTO_INCREMENT NOT NULL, provenance_id INT DEFAULT NULL, proprietaire_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, stock VARCHAR(255) NOT NULL, INDEX IDX_4FBD7F10C24AFBDB (provenance_id), INDEX IDX_4FBD7F1076C50E4A (proprietaire_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE producteur (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, drapeau VARCHAR(255) NOT NULL, capitale VARCHAR(255) NOT NULL, habitant LONGTEXT NOT NULL, surface VARCHAR(255) NOT NULL, tonne VARCHAR(255) NOT NULL, pourcent VARCHAR(255) NOT NULL, arabica VARCHAR(255) NOT NULL, robusta VARCHAR(255) NOT NULL, lon VARCHAR(255) NOT NULL, lat VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE test_database (id INT AUTO_INCREMENT NOT NULL, surname VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, age INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, entreprise VARCHAR(255) NOT NULL, adresse LONGTEXT NOT NULL, telephone VARCHAR(255) NOT NULL, type LONGTEXT NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE cafe ADD CONSTRAINT FK_4FBD7F10C24AFBDB FOREIGN KEY (provenance_id) REFERENCES producteur (id)');
        $this->addSql('ALTER TABLE cafe ADD CONSTRAINT FK_4FBD7F1076C50E4A FOREIGN KEY (proprietaire_id) REFERENCES user (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE cafe DROP FOREIGN KEY FK_4FBD7F10C24AFBDB');
        $this->addSql('ALTER TABLE cafe DROP FOREIGN KEY FK_4FBD7F1076C50E4A');
        $this->addSql('DROP TABLE cafe');
        $this->addSql('DROP TABLE producteur');
        $this->addSql('DROP TABLE test_database');
        $this->addSql('DROP TABLE user');
    }
}
