<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241005100716 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // Create the job table first
        $this->addSql('CREATE TABLE if not exists job (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');

        // Create the usuario table
        $this->addSql('CREATE TABLE if not exists usuario (id INT AUTO_INCREMENT NOT NULL, job_id INT DEFAULT NULL, nombre VARCHAR(50) NOT NULL, email VARCHAR(100) NOT NULL, password VARCHAR(50) NOT NULL, INDEX IDX_2265B05DBE04EA9 (job_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');

        // Add the foreign key constraint
        $this->addSql('ALTER TABLE usuario ADD CONSTRAINT FK_2265B05DBE04EA9 FOREIGN KEY (job_id) REFERENCES job (id)');
    }

    public function down(Schema $schema): void
    {
        // Drop the foreign key constraint first
        $this->addSql('ALTER TABLE usuario DROP FOREIGN KEY FK_2265B05DBE04EA9');

        // Drop the tables
        $this->addSql('DROP TABLE job');
        $this->addSql('DROP TABLE usuario');
    }
}