<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20161213092904 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE blog_category (id INT AUTO_INCREMENT NOT NULL, blog_id INT NOT NULL, category_id INT NOT NULL, INDEX IDX_72113DE6DAE07E97 (blog_id), INDEX IDX_72113DE612469DE2 (category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE order_cart (id INT AUTO_INCREMENT NOT NULL, order_id INT NOT NULL, cart_id INT NOT NULL, INDEX IDX_4652B2A08D9F6D38 (order_id), INDEX IDX_4652B2A01AD5CDBF (cart_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE blog_category ADD CONSTRAINT FK_72113DE6DAE07E97 FOREIGN KEY (blog_id) REFERENCES blog (id)');
        $this->addSql('ALTER TABLE blog_category ADD CONSTRAINT FK_72113DE612469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE order_cart ADD CONSTRAINT FK_4652B2A08D9F6D38 FOREIGN KEY (order_id) REFERENCES orders (id)');
        $this->addSql('ALTER TABLE order_cart ADD CONSTRAINT FK_4652B2A01AD5CDBF FOREIGN KEY (cart_id) REFERENCES cart (id)');
        $this->addSql('ALTER TABLE blog DROP FOREIGN KEY FK_C015514312469DE2');
        $this->addSql('DROP INDEX IDX_C015514312469DE2 ON blog');
        $this->addSql('ALTER TABLE blog ADD created_at DATETIME NOT NULL, ADD updated_at DATETIME NOT NULL, DROP category_id');
        $this->addSql('ALTER TABLE user ADD created_at DATETIME NOT NULL, ADD updated_at DATETIME NOT NULL, ADD roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json_array)\', DROP createdAt, DROP updatedAt');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE blog_category');
        $this->addSql('DROP TABLE order_cart');
        $this->addSql('ALTER TABLE blog ADD category_id INT DEFAULT NULL, DROP created_at, DROP updated_at');
        $this->addSql('ALTER TABLE blog ADD CONSTRAINT FK_C015514312469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('CREATE INDEX IDX_C015514312469DE2 ON blog (category_id)');
        $this->addSql('ALTER TABLE user ADD createdAt DATETIME NOT NULL, ADD updatedAt DATETIME NOT NULL, DROP created_at, DROP updated_at, DROP roles');
    }
}
