<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190524164417 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE test_database');
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67D87998E');
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67DB4FCC262');
        $this->addSql('DROP INDEX IDX_6EEAA67DB4FCC262 ON commande');
        $this->addSql('DROP INDEX IDX_6EEAA67D87998E ON commande');
        $this->addSql('ALTER TABLE commande ADD acheteur_id INT DEFAULT NULL, ADD vendeur_id INT DEFAULT NULL, ADD cafe_id INT DEFAULT NULL, ADD etat VARCHAR(255) NOT NULL, DROP origine_id, DROP exportateur_id, DROP type, DROP suivi');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67D96A7BB5F FOREIGN KEY (acheteur_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67D858C065E FOREIGN KEY (vendeur_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67D6710CC07 FOREIGN KEY (cafe_id) REFERENCES cafe (id)');
        $this->addSql('CREATE INDEX IDX_6EEAA67D96A7BB5F ON commande (acheteur_id)');
        $this->addSql('CREATE INDEX IDX_6EEAA67D858C065E ON commande (vendeur_id)');
        $this->addSql('CREATE INDEX IDX_6EEAA67D6710CC07 ON commande (cafe_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE test_database (id INT AUTO_INCREMENT NOT NULL, surname VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, lastname VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, age INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67D96A7BB5F');
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67D858C065E');
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67D6710CC07');
        $this->addSql('DROP INDEX IDX_6EEAA67D96A7BB5F ON commande');
        $this->addSql('DROP INDEX IDX_6EEAA67D858C065E ON commande');
        $this->addSql('DROP INDEX IDX_6EEAA67D6710CC07 ON commande');
        $this->addSql('ALTER TABLE commande ADD origine_id INT DEFAULT NULL, ADD exportateur_id INT DEFAULT NULL, ADD suivi VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, DROP acheteur_id, DROP vendeur_id, DROP cafe_id, CHANGE etat type VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67D87998E FOREIGN KEY (origine_id) REFERENCES producteur (id)');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67DB4FCC262 FOREIGN KEY (exportateur_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_6EEAA67DB4FCC262 ON commande (exportateur_id)');
        $this->addSql('CREATE INDEX IDX_6EEAA67D87998E ON commande (origine_id)');
    }
}
