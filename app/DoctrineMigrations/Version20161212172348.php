<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20161212172348 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('UPDATE product_category SET product_id = 1, category_id = 1 WHERE id = 1');
        $this->addSql('UPDATE product_category SET product_id = 2, category_id = 2 WHERE id = 2');
        $this->addSql('UPDATE product_category SET product_id = 3, category_id = 3 WHERE id = 3');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('UPDATE product_category SET product_id = null, category_id = null WHERE id = 1');
        $this->addSql('UPDATE product_category SET product_id = null, category_id = null WHERE id = 2');
        $this->addSql('UPDATE product_category SET product_id = null, category_id = null WHERE id = 3');
    }
}
