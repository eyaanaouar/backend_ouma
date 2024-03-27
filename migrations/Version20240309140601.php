<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240309140601 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE birmcherguatg3');
        $this->addSql('DROP TABLE birmcherguatg4');
        $this->addSql('DROP TABLE birmcherqua');
        $this->addSql('DROP TABLE bouchemma');
        $this->addSql('DROP TABLE bouchemmatg3');
        $this->addSql('DROP TABLE bouchemmatg4');
        $this->addSql('DROP TABLE bouchemmatg5');
        $this->addSql('DROP TABLE ferianatg1');
        $this->addSql('DROP TABLE ferianatg2');
        $this->addSql('DROP TABLE login');
        $this->addSql('DROP TABLE rades');
        $this->addSql('DROP TABLE signup');
        $this->addSql('DROP TABLE sousse');
        $this->addSql('DROP TABLE soussetg2');
        $this->addSql('DROP TABLE thyna');
        $this->addSql('DROP TABLE thynatg2');
        $this->addSql('DROP TABLE thynatg3');
        $this->addSql('ALTER TABLE birmcherguatg2 MODIFY id_birmcherquaTG1 INT NOT NULL');
        $this->addSql('DROP INDEX `primary` ON birmcherguatg2');
        $this->addSql('ALTER TABLE birmcherguatg2 ADD emission_c02 DOUBLE PRECISION NOT NULL, DROP emissionCO2, CHANGE date date VARCHAR(255) NOT NULL, CHANGE rendement rendement DOUBLE PRECISION NOT NULL, CHANGE tauxdegradation tauxdegradation DOUBLE PRECISION NOT NULL, CHANGE consogaz consogaz DOUBLE PRECISION NOT NULL, CHANGE id_birmcherquaTG1 id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE birmcherguatg2 ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE goulette MODIFY id_goulette INT NOT NULL');
        $this->addSql('DROP INDEX `primary` ON goulette');
        $this->addSql('ALTER TABLE goulette CHANGE date date VARCHAR(255) NOT NULL, CHANGE id_goulette id INT AUTO_INCREMENT NOT NULL, CHANGE emissionCO2 emission_c02 DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE goulette ADD PRIMARY KEY (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE birmcherguatg3 (id_birmcherguaTG3 INT AUTO_INCREMENT NOT NULL, date VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, rendement INT NOT NULL, tauxdegradation INT NOT NULL, emissionCO2 INT NOT NULL, consogaz INT NOT NULL, PRIMARY KEY(id_birmcherguaTG3)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE birmcherguatg4 (id_birmcherquaTG4 INT AUTO_INCREMENT NOT NULL, date VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, rendement INT NOT NULL, tauxdegradation INT NOT NULL, emissionCO2 INT NOT NULL, consogaz INT NOT NULL, PRIMARY KEY(id_birmcherquaTG4)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE birmcherqua (id_birmcherqua INT AUTO_INCREMENT NOT NULL, date VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, rendement DOUBLE PRECISION NOT NULL, tauxdegradation DOUBLE PRECISION NOT NULL, emissionCO2 DOUBLE PRECISION NOT NULL, consogaz DOUBLE PRECISION NOT NULL, PRIMARY KEY(id_birmcherqua)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE bouchemma (consogaz DOUBLE PRECISION NOT NULL) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE bouchemmatg3 (id_bouchemmaTg3 INT AUTO_INCREMENT NOT NULL, date VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, rendement DOUBLE PRECISION NOT NULL, tauxdegradation DOUBLE PRECISION NOT NULL, emissionCO2 DOUBLE PRECISION NOT NULL, consogaz DOUBLE PRECISION NOT NULL, PRIMARY KEY(id_bouchemmaTg3)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE bouchemmatg4 (id_bouchemmaTg4 INT AUTO_INCREMENT NOT NULL, date VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, rendement DOUBLE PRECISION NOT NULL, tauxdegradation DOUBLE PRECISION NOT NULL, emissionCO2 DOUBLE PRECISION NOT NULL, consogaz DOUBLE PRECISION NOT NULL, PRIMARY KEY(id_bouchemmaTg4)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE bouchemmatg5 (id_bouchemmaTg5 DOUBLE PRECISION NOT NULL, date VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, rendement DOUBLE PRECISION NOT NULL, tauxdegradation DOUBLE PRECISION NOT NULL, emissionCO2 DOUBLE PRECISION NOT NULL, consogaz DOUBLE PRECISION NOT NULL, PRIMARY KEY(id_bouchemmaTg5)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE ferianatg1 (id_ferianaTG1 INT AUTO_INCREMENT NOT NULL, date VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, rendement INT NOT NULL, tauxdegradation INT NOT NULL, emissionCO2 INT NOT NULL, consogaz INT NOT NULL, PRIMARY KEY(id_ferianaTG1)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE ferianatg2 (id_ferianaTG2 INT AUTO_INCREMENT NOT NULL, date VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, rendement INT NOT NULL, tauxdegradation INT NOT NULL, emissionCO2 INT NOT NULL, consogaz INT NOT NULL, PRIMARY KEY(id_ferianaTG2)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE login (email VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, mdp VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE rades (id_rades INT AUTO_INCREMENT NOT NULL, rendement DOUBLE PRECISION NOT NULL, tauxdegradation DOUBLE PRECISION NOT NULL, emissionCO2 DOUBLE PRECISION NOT NULL, consogaz DOUBLE PRECISION NOT NULL, PRIMARY KEY(id_rades)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE signup (nom VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, prenom VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, email VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, mdp VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, confirmation_mdp VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE sousse (id_sousse INT AUTO_INCREMENT NOT NULL, date VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, rendement DOUBLE PRECISION NOT NULL, tauxdegradation DOUBLE PRECISION NOT NULL, emissionCO2 DOUBLE PRECISION NOT NULL, consogaz DOUBLE PRECISION NOT NULL, PRIMARY KEY(id_sousse)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE soussetg2 (id_sousseTG2 INT AUTO_INCREMENT NOT NULL, date VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, rendement DOUBLE PRECISION NOT NULL, tauxdegradation DOUBLE PRECISION NOT NULL, emissionCO2 DOUBLE PRECISION NOT NULL, consogaz DOUBLE PRECISION NOT NULL, PRIMARY KEY(id_sousseTG2)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE thyna (id_thyna INT AUTO_INCREMENT NOT NULL, date VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, rendement DOUBLE PRECISION NOT NULL, tauxdegradation DOUBLE PRECISION NOT NULL, emissionCO2 DOUBLE PRECISION NOT NULL, consogaz DOUBLE PRECISION NOT NULL, PRIMARY KEY(id_thyna)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE thynatg2 (id_thynatg2 INT AUTO_INCREMENT NOT NULL, date VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, rendement DOUBLE PRECISION NOT NULL, tauxdegradation DOUBLE PRECISION NOT NULL, emissionCO2 DOUBLE PRECISION NOT NULL, consogaz DOUBLE PRECISION NOT NULL, PRIMARY KEY(id_thynatg2)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE thynatg3 (id_thynatg3 INT AUTO_INCREMENT NOT NULL, date VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, rendement DOUBLE PRECISION NOT NULL, tauxdegradation DOUBLE PRECISION NOT NULL, emissionCO2 DOUBLE PRECISION NOT NULL, consogaz DOUBLE PRECISION NOT NULL, PRIMARY KEY(id_thynatg3)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE messenger_messages');
        $this->addSql('ALTER TABLE birmcherguatg2 MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `PRIMARY` ON birmcherguatg2');
        $this->addSql('ALTER TABLE birmcherguatg2 ADD emissionCO2 INT NOT NULL, DROP emission_c02, CHANGE date date INT NOT NULL, CHANGE rendement rendement INT NOT NULL, CHANGE tauxdegradation tauxdegradation INT NOT NULL, CHANGE consogaz consogaz INT NOT NULL, CHANGE id id_birmcherquaTG1 INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE birmcherguatg2 ADD PRIMARY KEY (id_birmcherquaTG1)');
        $this->addSql('ALTER TABLE goulette MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `PRIMARY` ON goulette');
        $this->addSql('ALTER TABLE goulette CHANGE date date VARCHAR(30) NOT NULL, CHANGE id id_goulette INT AUTO_INCREMENT NOT NULL, CHANGE emission_c02 emissionCO2 DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE goulette ADD PRIMARY KEY (id_goulette)');
    }
}
