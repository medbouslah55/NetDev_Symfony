<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210415161836 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE coach CHANGE cin cin INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE membre CHANGE cin cin INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE reclamation CHANGE date date DATE NOT NULL');
        $this->addSql('ALTER TABLE suivre DROP FOREIGN KEY FK_suivre_membre');
        $this->addSql('ALTER TABLE suivre DROP FOREIGN KEY FK_suivre_regime');
        $this->addSql('ALTER TABLE suivre DROP date_deb, DROP nb_jour_restant, DROP date_fin');
        $this->addSql('DROP INDEX id_regime ON suivre');
        $this->addSql('CREATE INDEX IDX_3BC593BB8CB1FF91 ON suivre (id_regime)');
        $this->addSql('DROP INDEX fk_suivre_membre ON suivre');
        $this->addSql('CREATE INDEX IDX_3BC593BB7E1091A7 ON suivre (cin_membre)');
        $this->addSql('ALTER TABLE suivre ADD CONSTRAINT FK_suivre_membre FOREIGN KEY (cin_membre) REFERENCES membre (cin) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE suivre ADD CONSTRAINT FK_suivre_regime FOREIGN KEY (id_regime) REFERENCES regime (id_regime) ON UPDATE NO ACTION ON DELETE NO ACTION');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE coach CHANGE cin cin INT NOT NULL');
        $this->addSql('ALTER TABLE membre CHANGE cin cin INT NOT NULL');
        $this->addSql('ALTER TABLE reclamation CHANGE date date DATETIME NOT NULL');
        $this->addSql('ALTER TABLE suivre DROP FOREIGN KEY FK_3BC593BB8CB1FF91');
        $this->addSql('ALTER TABLE suivre DROP FOREIGN KEY FK_3BC593BB7E1091A7');
        $this->addSql('ALTER TABLE suivre ADD date_deb DATE DEFAULT NULL, ADD nb_jour_restant INT NOT NULL, ADD date_fin DATE DEFAULT NULL');
        $this->addSql('DROP INDEX idx_3bc593bb7e1091a7 ON suivre');
        $this->addSql('CREATE INDEX FK_suivre_membre ON suivre (cin_membre)');
        $this->addSql('DROP INDEX idx_3bc593bb8cb1ff91 ON suivre');
        $this->addSql('CREATE INDEX id_regime ON suivre (id_regime)');
        $this->addSql('ALTER TABLE suivre ADD CONSTRAINT FK_3BC593BB8CB1FF91 FOREIGN KEY (id_regime) REFERENCES regime (id_regime)');
        $this->addSql('ALTER TABLE suivre ADD CONSTRAINT FK_3BC593BB7E1091A7 FOREIGN KEY (cin_membre) REFERENCES membre (cin)');
    }
}
