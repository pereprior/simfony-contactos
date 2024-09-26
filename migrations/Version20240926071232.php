<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240926071232 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE usuario ADD provincia_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE usuario ADD CONSTRAINT FK_2265B05D4E7121AF FOREIGN KEY (provincia_id) REFERENCES provincia (id)');
        $this->addSql('CREATE INDEX IDX_2265B05D4E7121AF ON usuario (provincia_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE usuario DROP FOREIGN KEY FK_2265B05D4E7121AF');
        $this->addSql('DROP INDEX IDX_2265B05D4E7121AF ON usuario');
        $this->addSql('ALTER TABLE usuario DROP provincia_id');
    }
}
