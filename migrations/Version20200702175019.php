<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200702175019 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE allocation MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE allocation DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE allocation DROP id, CHANGE id_alloc id_alloc INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE allocation ADD PRIMARY KEY (id_alloc)');
        $this->addSql('ALTER TABLE chambre MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE chambre DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE chambre DROP id');
        $this->addSql('ALTER TABLE chambre ADD PRIMARY KEY (numero_chambre)');
        $this->addSql('ALTER TABLE etudiant MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE etudiant DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE etudiant DROP id');
        $this->addSql('ALTER TABLE etudiant ADD PRIMARY KEY (matricule)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE allocation ADD id INT AUTO_INCREMENT NOT NULL, CHANGE id_alloc id_alloc INT NOT NULL, DROP PRIMARY KEY, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE chambre ADD id INT AUTO_INCREMENT NOT NULL, DROP PRIMARY KEY, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE etudiant ADD id INT AUTO_INCREMENT NOT NULL, DROP PRIMARY KEY, ADD PRIMARY KEY (id)');
    }
}
