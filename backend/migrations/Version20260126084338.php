<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260126084338 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE car_entity (id INT AUTO_INCREMENT NOT NULL, brand VARCHAR(50) NOT NULL, model VARCHAR(50) NOT NULL, year INT NOT NULL, type_fuel VARCHAR(255) NOT NULL, mileage VARCHAR(15) NOT NULL, tank INT NOT NULL, gas_tank INT DEFAULT NULL, engine_type VARCHAR(255) NOT NULL, transmission VARCHAR(255) NOT NULL, capacity VARCHAR(10) NOT NULL, horsepower INT NOT NULL, state_number VARCHAR(10) NOT NULL, vrc VARCHAR(255) NOT NULL, vin VARCHAR(255) NOT NULL, osago VARCHAR(255) NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE car_entity');
    }
}
