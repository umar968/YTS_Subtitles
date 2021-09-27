<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210927092642 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE actor (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE genre (id INT AUTO_INCREMENT NOT NULL, genre VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE language (id INT AUTO_INCREMENT NOT NULL, language_name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE movie (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, year VARCHAR(255) DEFAULT NULL, runtime TIME DEFAULT NULL, imdm_rating DOUBLE PRECISION DEFAULT NULL, release_date DATE DEFAULT NULL, description LONGTEXT DEFAULT NULL, trailer VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE movie_genre (id INT AUTO_INCREMENT NOT NULL, movie_id_id INT NOT NULL, genre_id_id INT NOT NULL, INDEX IDX_FD12296410684CB (movie_id_id), INDEX IDX_FD122964C2428192 (genre_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE role (id INT AUTO_INCREMENT NOT NULL, movie_id_id INT NOT NULL, actor_id_id INT NOT NULL, role VARCHAR(255) NOT NULL, INDEX IDX_57698A6A10684CB (movie_id_id), INDEX IDX_57698A6A5BC075C3 (actor_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE subtitle (id INT AUTO_INCREMENT NOT NULL, movie_id_id INT NOT NULL, language_id_id INT NOT NULL, title VARCHAR(255) NOT NULL, subtitle_file VARCHAR(255) NOT NULL, INDEX IDX_518597B110684CB (movie_id_id), INDEX IDX_518597B11C9A06 (language_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE movie_genre ADD CONSTRAINT FK_FD12296410684CB FOREIGN KEY (movie_id_id) REFERENCES movie (id)');
        $this->addSql('ALTER TABLE movie_genre ADD CONSTRAINT FK_FD122964C2428192 FOREIGN KEY (genre_id_id) REFERENCES genre (id)');
        $this->addSql('ALTER TABLE role ADD CONSTRAINT FK_57698A6A10684CB FOREIGN KEY (movie_id_id) REFERENCES movie (id)');
        $this->addSql('ALTER TABLE role ADD CONSTRAINT FK_57698A6A5BC075C3 FOREIGN KEY (actor_id_id) REFERENCES actor (id)');
        $this->addSql('ALTER TABLE subtitle ADD CONSTRAINT FK_518597B110684CB FOREIGN KEY (movie_id_id) REFERENCES movie (id)');
        $this->addSql('ALTER TABLE subtitle ADD CONSTRAINT FK_518597B11C9A06 FOREIGN KEY (language_id_id) REFERENCES language (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE role DROP FOREIGN KEY FK_57698A6A5BC075C3');
        $this->addSql('ALTER TABLE movie_genre DROP FOREIGN KEY FK_FD122964C2428192');
        $this->addSql('ALTER TABLE subtitle DROP FOREIGN KEY FK_518597B11C9A06');
        $this->addSql('ALTER TABLE movie_genre DROP FOREIGN KEY FK_FD12296410684CB');
        $this->addSql('ALTER TABLE role DROP FOREIGN KEY FK_57698A6A10684CB');
        $this->addSql('ALTER TABLE subtitle DROP FOREIGN KEY FK_518597B110684CB');
        $this->addSql('DROP TABLE actor');
        $this->addSql('DROP TABLE genre');
        $this->addSql('DROP TABLE language');
        $this->addSql('DROP TABLE movie');
        $this->addSql('DROP TABLE movie_genre');
        $this->addSql('DROP TABLE role');
        $this->addSql('DROP TABLE subtitle');
    }
}
