<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211008083115 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // DC2Type comment is generated for "same" property because the type's name declared in doctrine.yaml ("same")
        //    is identical to the one returned in SameType::getName method ("same" too).
        //
        // DC2Type comment is NOT generated for "other" property because the type's name declared in doctrine.yaml ("different")
        //    is not identical to the one returned in OtherType::getName method ("other").
        //
        $this->addSql('CREATE TABLE `test` (id INT AUTO_INCREMENT NOT NULL, same INT NOT NULL COMMENT \'(DC2Type:same)\', other INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE `test`');
    }
}
