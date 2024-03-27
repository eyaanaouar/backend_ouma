<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240309150034 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE login');
        $this->addSql('DROP TABLE rades');
        $this->addSql('DROP TABLE signup');
        $this->addSql('ALTER TABLE birmcherguatg2 MODIFY id_birmcherquaTG1 INT NOT NULL');
        $this->addSql('DROP INDEX `primary` ON birmcherguatg2');
        $this->addSql('ALTER TABLE birmcherguatg2 ADD emission_c02 DOUBLE PRECISION NOT NULL, DROP emissionCO2, CHANGE date date VARCHAR(255) NOT NULL, CHANGE rendement rendement DOUBLE PRECISION NOT NULL, CHANGE tauxdegradation tauxdegradation DOUBLE PRECISION NOT NULL, CHANGE consogaz consogaz DOUBLE PRECISION NOT NULL, CHANGE id_birmcherquaTG1 id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE birmcherguatg2 ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE birmcherguatg3 MODIFY id_birmcherguaTG3 INT NOT NULL');
        $this->addSql('DROP INDEX `primary` ON birmcherguatg3');
        $this->addSql('ALTER TABLE birmcherguatg3 ADD emission_c02 DOUBLE PRECISION NOT NULL, DROP emissionCO2, CHANGE date date VARCHAR(255) NOT NULL, CHANGE rendement rendement DOUBLE PRECISION NOT NULL, CHANGE tauxdegradation tauxdegradation DOUBLE PRECISION NOT NULL, CHANGE consogaz consogaz DOUBLE PRECISION NOT NULL, CHANGE id_birmcherguaTG3 id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE birmcherguatg3 ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE birmcherguatg4 MODIFY id_birmcherquaTG4 INT NOT NULL');
        $this->addSql('DROP INDEX `primary` ON birmcherguatg4');
        $this->addSql('ALTER TABLE birmcherguatg4 ADD emission_c02 DOUBLE PRECISION NOT NULL, DROP emissionCO2, CHANGE date date VARCHAR(255) NOT NULL, CHANGE rendement rendement DOUBLE PRECISION NOT NULL, CHANGE tauxdegradation tauxdegradation DOUBLE PRECISION NOT NULL, CHANGE consogaz consogaz DOUBLE PRECISION NOT NULL, CHANGE id_birmcherquaTG4 id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE birmcherguatg4 ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE birmcherqua MODIFY id_birmcherqua INT NOT NULL');
        $this->addSql('DROP INDEX `primary` ON birmcherqua');
        $this->addSql('ALTER TABLE birmcherqua CHANGE date date VARCHAR(255) NOT NULL, CHANGE id_birmcherqua id INT AUTO_INCREMENT NOT NULL, CHANGE emissionCO2 emission_c02 DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE birmcherqua ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE bouchemma ADD id INT AUTO_INCREMENT NOT NULL, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE bouchemmatg3 MODIFY id_bouchemmaTg3 INT NOT NULL');
        $this->addSql('DROP INDEX `primary` ON bouchemmatg3');
        $this->addSql('ALTER TABLE bouchemmatg3 CHANGE date date VARCHAR(255) NOT NULL, CHANGE id_bouchemmaTg3 id INT AUTO_INCREMENT NOT NULL, CHANGE emissionCO2 emission_c02 DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE bouchemmatg3 ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE bouchemmatg4 MODIFY id_bouchemmaTg4 INT NOT NULL');
        $this->addSql('DROP INDEX `primary` ON bouchemmatg4');
        $this->addSql('ALTER TABLE bouchemmatg4 CHANGE date date VARCHAR(255) NOT NULL, CHANGE id_bouchemmaTg4 id INT AUTO_INCREMENT NOT NULL, CHANGE emissionCO2 emission_c02 DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE bouchemmatg4 ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE bouchemmatg5 ADD id INT AUTO_INCREMENT NOT NULL, ADD emission_c02 DOUBLE PRECISION NOT NULL, DROP id_bouchemmaTg5, DROP emissionCO2, CHANGE date date VARCHAR(255) NOT NULL, DROP PRIMARY KEY, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE ferianatg1 MODIFY id_ferianaTG1 INT NOT NULL');
        $this->addSql('DROP INDEX `primary` ON ferianatg1');
        $this->addSql('ALTER TABLE ferianatg1 ADD emission_c02 DOUBLE PRECISION NOT NULL, DROP emissionCO2, CHANGE date date VARCHAR(255) NOT NULL, CHANGE rendement rendement DOUBLE PRECISION NOT NULL, CHANGE tauxdegradation tauxdegradation DOUBLE PRECISION NOT NULL, CHANGE consogaz consogaz DOUBLE PRECISION NOT NULL, CHANGE id_ferianaTG1 id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE ferianatg1 ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE ferianatg2 MODIFY id_ferianaTG2 INT NOT NULL');
        $this->addSql('DROP INDEX `primary` ON ferianatg2');
        $this->addSql('ALTER TABLE ferianatg2 ADD emission_c02 DOUBLE PRECISION NOT NULL, DROP emissionCO2, CHANGE date date VARCHAR(255) NOT NULL, CHANGE rendement rendement DOUBLE PRECISION NOT NULL, CHANGE tauxdegradation tauxdegradation DOUBLE PRECISION NOT NULL, CHANGE consogaz consogaz DOUBLE PRECISION NOT NULL, CHANGE id_ferianaTG2 id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE ferianatg2 ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE goulette MODIFY id_goulette INT NOT NULL');
        $this->addSql('DROP INDEX `primary` ON goulette');
        $this->addSql('ALTER TABLE goulette CHANGE date date VARCHAR(255) NOT NULL, CHANGE id_goulette id INT AUTO_INCREMENT NOT NULL, CHANGE emissionCO2 emission_c02 DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE goulette ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE sousse MODIFY id_sousse INT NOT NULL');
        $this->addSql('DROP INDEX `primary` ON sousse');
        $this->addSql('ALTER TABLE sousse CHANGE date date VARCHAR(255) NOT NULL, CHANGE id_sousse id INT AUTO_INCREMENT NOT NULL, CHANGE emissionCO2 emission_c02 DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE sousse ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE soussetg2 MODIFY id_sousseTG2 INT NOT NULL');
        $this->addSql('DROP INDEX `primary` ON soussetg2');
        $this->addSql('ALTER TABLE soussetg2 CHANGE date date VARCHAR(255) NOT NULL, CHANGE id_sousseTG2 id INT AUTO_INCREMENT NOT NULL, CHANGE emissionCO2 emission_c02 DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE soussetg2 ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE thyna MODIFY id_thyna INT NOT NULL');
        $this->addSql('DROP INDEX `primary` ON thyna');
        $this->addSql('ALTER TABLE thyna DROP date, DROP rendement, DROP tauxdegradation, DROP emissionCO2, DROP consogaz, CHANGE id_thyna id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE thyna ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE thynatg2 MODIFY id_thynatg2 INT NOT NULL');
        $this->addSql('DROP INDEX `primary` ON thynatg2');
        $this->addSql('ALTER TABLE thynatg2 CHANGE date date VARCHAR(255) NOT NULL, CHANGE id_thynatg2 id INT AUTO_INCREMENT NOT NULL, CHANGE emissionCO2 emission_c02 DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE thynatg2 ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE thynatg3 MODIFY id_thynatg3 INT NOT NULL');
        $this->addSql('DROP INDEX `primary` ON thynatg3');
        $this->addSql('ALTER TABLE thynatg3 CHANGE date date VARCHAR(255) NOT NULL, CHANGE id_thynatg3 id INT AUTO_INCREMENT NOT NULL, CHANGE emissionCO2 emission_c02 DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE thynatg3 ADD PRIMARY KEY (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE login (email VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, mdp VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE rades (id_rades INT AUTO_INCREMENT NOT NULL, rendement DOUBLE PRECISION NOT NULL, tauxdegradation DOUBLE PRECISION NOT NULL, emissionCO2 DOUBLE PRECISION NOT NULL, consogaz DOUBLE PRECISION NOT NULL, PRIMARY KEY(id_rades)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE signup (nom VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, prenom VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, email VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, mdp VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, confirmation_mdp VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE messenger_messages');
        $this->addSql('ALTER TABLE birmcherguatg2 MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `PRIMARY` ON birmcherguatg2');
        $this->addSql('ALTER TABLE birmcherguatg2 ADD emissionCO2 INT NOT NULL, DROP emission_c02, CHANGE date date INT NOT NULL, CHANGE rendement rendement INT NOT NULL, CHANGE tauxdegradation tauxdegradation INT NOT NULL, CHANGE consogaz consogaz INT NOT NULL, CHANGE id id_birmcherquaTG1 INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE birmcherguatg2 ADD PRIMARY KEY (id_birmcherquaTG1)');
        $this->addSql('ALTER TABLE birmcherguatg3 MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `PRIMARY` ON birmcherguatg3');
        $this->addSql('ALTER TABLE birmcherguatg3 ADD emissionCO2 INT NOT NULL, DROP emission_c02, CHANGE date date VARCHAR(30) NOT NULL, CHANGE rendement rendement INT NOT NULL, CHANGE tauxdegradation tauxdegradation INT NOT NULL, CHANGE consogaz consogaz INT NOT NULL, CHANGE id id_birmcherguaTG3 INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE birmcherguatg3 ADD PRIMARY KEY (id_birmcherguaTG3)');
        $this->addSql('ALTER TABLE birmcherguatg4 MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `PRIMARY` ON birmcherguatg4');
        $this->addSql('ALTER TABLE birmcherguatg4 ADD emissionCO2 INT NOT NULL, DROP emission_c02, CHANGE date date VARCHAR(30) NOT NULL, CHANGE rendement rendement INT NOT NULL, CHANGE tauxdegradation tauxdegradation INT NOT NULL, CHANGE consogaz consogaz INT NOT NULL, CHANGE id id_birmcherquaTG4 INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE birmcherguatg4 ADD PRIMARY KEY (id_birmcherquaTG4)');
        $this->addSql('ALTER TABLE birmcherqua MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `PRIMARY` ON birmcherqua');
        $this->addSql('ALTER TABLE birmcherqua CHANGE date date VARCHAR(30) NOT NULL, CHANGE id id_birmcherqua INT AUTO_INCREMENT NOT NULL, CHANGE emission_c02 emissionCO2 DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE birmcherqua ADD PRIMARY KEY (id_birmcherqua)');
        $this->addSql('ALTER TABLE bouchemma MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `primary` ON bouchemma');
        $this->addSql('ALTER TABLE bouchemma DROP id');
        $this->addSql('ALTER TABLE bouchemmatg3 MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `PRIMARY` ON bouchemmatg3');
        $this->addSql('ALTER TABLE bouchemmatg3 CHANGE date date VARCHAR(30) NOT NULL, CHANGE id id_bouchemmaTg3 INT AUTO_INCREMENT NOT NULL, CHANGE emission_c02 emissionCO2 DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE bouchemmatg3 ADD PRIMARY KEY (id_bouchemmaTg3)');
        $this->addSql('ALTER TABLE bouchemmatg4 MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `PRIMARY` ON bouchemmatg4');
        $this->addSql('ALTER TABLE bouchemmatg4 CHANGE date date VARCHAR(30) NOT NULL, CHANGE id id_bouchemmaTg4 INT AUTO_INCREMENT NOT NULL, CHANGE emission_c02 emissionCO2 DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE bouchemmatg4 ADD PRIMARY KEY (id_bouchemmaTg4)');
        $this->addSql('ALTER TABLE bouchemmatg5 MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `PRIMARY` ON bouchemmatg5');
        $this->addSql('ALTER TABLE bouchemmatg5 ADD emissionCO2 DOUBLE PRECISION NOT NULL, DROP id, CHANGE date date VARCHAR(30) NOT NULL, CHANGE emission_c02 id_bouchemmaTg5 DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE bouchemmatg5 ADD PRIMARY KEY (id_bouchemmaTg5)');
        $this->addSql('ALTER TABLE ferianatg1 MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `PRIMARY` ON ferianatg1');
        $this->addSql('ALTER TABLE ferianatg1 ADD emissionCO2 INT NOT NULL, DROP emission_c02, CHANGE date date VARCHAR(30) NOT NULL, CHANGE rendement rendement INT NOT NULL, CHANGE tauxdegradation tauxdegradation INT NOT NULL, CHANGE consogaz consogaz INT NOT NULL, CHANGE id id_ferianaTG1 INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE ferianatg1 ADD PRIMARY KEY (id_ferianaTG1)');
        $this->addSql('ALTER TABLE ferianatg2 MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `PRIMARY` ON ferianatg2');
        $this->addSql('ALTER TABLE ferianatg2 ADD emissionCO2 INT NOT NULL, DROP emission_c02, CHANGE date date VARCHAR(30) NOT NULL, CHANGE rendement rendement INT NOT NULL, CHANGE tauxdegradation tauxdegradation INT NOT NULL, CHANGE consogaz consogaz INT NOT NULL, CHANGE id id_ferianaTG2 INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE ferianatg2 ADD PRIMARY KEY (id_ferianaTG2)');
        $this->addSql('ALTER TABLE goulette MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `PRIMARY` ON goulette');
        $this->addSql('ALTER TABLE goulette CHANGE date date VARCHAR(30) NOT NULL, CHANGE id id_goulette INT AUTO_INCREMENT NOT NULL, CHANGE emission_c02 emissionCO2 DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE goulette ADD PRIMARY KEY (id_goulette)');
        $this->addSql('ALTER TABLE sousse MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `PRIMARY` ON sousse');
        $this->addSql('ALTER TABLE sousse CHANGE date date VARCHAR(30) NOT NULL, CHANGE id id_sousse INT AUTO_INCREMENT NOT NULL, CHANGE emission_c02 emissionCO2 DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE sousse ADD PRIMARY KEY (id_sousse)');
        $this->addSql('ALTER TABLE soussetg2 MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `PRIMARY` ON soussetg2');
        $this->addSql('ALTER TABLE soussetg2 CHANGE date date VARCHAR(30) NOT NULL, CHANGE id id_sousseTG2 INT AUTO_INCREMENT NOT NULL, CHANGE emission_c02 emissionCO2 DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE soussetg2 ADD PRIMARY KEY (id_sousseTG2)');
        $this->addSql('ALTER TABLE thyna MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `PRIMARY` ON thyna');
        $this->addSql('ALTER TABLE thyna ADD date VARCHAR(30) NOT NULL, ADD rendement DOUBLE PRECISION NOT NULL, ADD tauxdegradation DOUBLE PRECISION NOT NULL, ADD emissionCO2 DOUBLE PRECISION NOT NULL, ADD consogaz DOUBLE PRECISION NOT NULL, CHANGE id id_thyna INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE thyna ADD PRIMARY KEY (id_thyna)');
        $this->addSql('ALTER TABLE thynatg2 MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `PRIMARY` ON thynatg2');
        $this->addSql('ALTER TABLE thynatg2 CHANGE date date VARCHAR(30) NOT NULL, CHANGE id id_thynatg2 INT AUTO_INCREMENT NOT NULL, CHANGE emission_c02 emissionCO2 DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE thynatg2 ADD PRIMARY KEY (id_thynatg2)');
        $this->addSql('ALTER TABLE thynatg3 MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `PRIMARY` ON thynatg3');
        $this->addSql('ALTER TABLE thynatg3 CHANGE date date VARCHAR(30) NOT NULL, CHANGE id id_thynatg3 INT AUTO_INCREMENT NOT NULL, CHANGE emission_c02 emissionCO2 DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE thynatg3 ADD PRIMARY KEY (id_thynatg3)');
    }
}
