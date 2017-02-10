<?php

use yii\db\Schema;
use jamband\schemadump\Migration;

class m170207_232237_db extends Migration
{
    public function safeUp()
    {
        // address
        $this->createTable('{{%address}}', [
            'id_address_ad' => $this->primaryKey()->unsigned(),
            'country_ad' => $this->string(50)->notNull(),
            'state_ad' => $this->string(50)->notNull(),
            'city_ad' => $this->string(50)->notNull(),
            'zip_ad' => $this->string(10)->notNull(),
            'street_ad' => $this->string(50)->null(),
            'house_ad' => $this->string(5)->null(),
            'apartment_ad' => $this->string(5)->null(),
            'annotation_ad' => $this->string(255)->null(),
            'receiver_name_ad' => $this->string(70)->notNull(),
        ], $this->tableOptions);

// auth_assignment
        $this->createTable('{{%auth_assignment}}', [
            'item_name' => $this->string(64)->notNull(),
            'user_id' => $this->string(64)->notNull(),
            'created_at' => $this->integer(11)->null(),
            'PRIMARY KEY (item_name, user_id)',
        ], $this->tableOptions);

// auth_item
        $this->createTable('{{%auth_item}}', [
            'name' => $this->string(64)->notNull(),
            'type' => $this->smallInteger(6)->notNull(),
            'description' => $this->text()->null(),
            'rule_name' => $this->string(64)->null(),
            'data' => $this->binary()->null(),
            'created_at' => $this->integer(11)->null(),
            'updated_at' => $this->integer(11)->null(),
            'PRIMARY KEY (name)',
        ], $this->tableOptions);

// auth_item_child
        $this->createTable('{{%auth_item_child}}', [
            'parent' => $this->string(64)->notNull(),
            'child' => $this->string(64)->notNull(),
            'PRIMARY KEY (parent, child)',
        ], $this->tableOptions);

// auth_rule
        $this->createTable('{{%auth_rule}}', [
            'name' => $this->string(64)->notNull(),
            'data' => $this->binary()->null(),
            'created_at' => $this->integer(11)->null(),
            'updated_at' => $this->integer(11)->null(),
            'PRIMARY KEY (name)',
        ], $this->tableOptions);

// booklet
        $this->createTable('{{%booklet}}', [
            'id_booklet_bk' => $this->primaryKey()->unsigned(),
            'title_bk' => $this->string(50)->null(),
            'description_bk' => $this->string(255)->null(),
            'path_to_preview_bk' => $this->text()->notNull(),
            'path_to_pdf_bk' => $this->text()->null(),
            'id_cateory_bk' => $this->integer(11)->unsigned()->notNull(),
            'price_bk' => $this->decimal(10, 2)->notNull(),
            'active_bk' => $this->boolean(1)->null()->defaultValue(0),
        ], $this->tableOptions);

// category
        $this->createTable('{{%category}}', [
            'id_category_ct' => $this->primaryKey()->unsigned(),
            'name_ct' => $this->string(50)->notNull(),
            'description_ct' => $this->string(255)->null(),
            'url_image_ct' => $this->text()->null(),
        ], $this->tableOptions);

// client
        $this->createTable('{{%client}}', [
            'id_client_cl' => $this->primaryKey()->unsigned(),
            'first_name_cl' => $this->string(50)->notNull(),
            'second_name_cl' => $this->string(50)->notNull(),
            'id_address_cl' => $this->integer(11)->unsigned()->notNull(),
            'mob_phone_cl' => $this->string(20)->null(),
            'annotation_cl' => $this->string(255)->null(),
        ], $this->tableOptions);

// options
        $this->createTable('{{%options}}', [
            'id_options_op' => $this->primaryKey()->unsigned(),
            'pages_title_op' => $this->string(255)->notNull(),
            'value_op' => $this->text()->notNull(),
            'description_op' => $this->string(255)->notNull(),
        ], $this->tableOptions);

// order
        $this->createTable('{{%order}}', [
            'id_order_or' => $this->primaryKey()->unsigned(),
            'id_client_or' => $this->integer(11)->unsigned()->null(),
            'summ_or' => $this->decimal(10, 2)->notNull(),
            'annotation_or' => $this->string(255)->null(),
            'date_register_or' => $this->datetime()->notNull(),
            'date_delivery_or' => $this->datetime()->null(),
            'date_done_or' => $this->datetime()->null(),
            'id_address_or' => $this->integer(11)->unsigned()->null(),
            'ship_method_or' => $this->integer(11)->null(),
            'shipping_price_or' => $this->decimal(10, 2)->null(),
            'status' => "ENUM ('order', 'payment', 'processing', 'shipping', 'successfull', 'cancelled') DEFAULT NULL",
        ], $this->tableOptions);

// order_item
        $this->createTable('{{%order_item}}', [
            'id_order_item_oi' => $this->primaryKey()->unsigned(),
            'id_order_io' => $this->integer(11)->unsigned()->notNull(),
            'id_booklet_io' => $this->integer(11)->unsigned()->null(),
            'quantity_oi' => $this->integer(11)->notNull(),
            'price_io' => $this->decimal(10, 2)->notNull(),
            'comments_io' => $this->text()->null(),
            'id_category_io' => $this->integer(11)->unsigned()->notNull(),
        ], $this->tableOptions);

// order_item_article
        $this->createTable('{{%order_item_article}}', [
            'id_order_item_oa' => $this->integer(11)->unsigned()->notNull(),
            'article_oa' => $this->text()->notNull(),
            'PRIMARY KEY (id_order_item_oa)',
        ], $this->tableOptions);

// order_item_file
        $this->createTable('{{%order_item_file}}', [
            'id_order_item_of' => $this->integer(11)->unsigned()->notNull(),
            'path_to_file_of' => $this->text()->notNull(),
            'PRIMARY KEY (id_order_item_of)',
        ], $this->tableOptions);

// order_item_picture
        $this->createTable('{{%order_item_picture}}', [
            'id_order_item_picture_op' => $this->primaryKey()->unsigned(),
            'id_order_item_op' => $this->integer(11)->unsigned()->notNull(),
            'path_to_file_op' => $this->text()->notNull(),
            'description_op' => $this->string(255)->null(),
        ], $this->tableOptions);

// order_propertie_value
        $this->createTable('{{%order_propertie_value}}', [
            'id_property_value' => $this->integer(11)->unsigned()->notNull(),
            'id_order_item' => $this->integer(11)->unsigned()->notNull(),
            'PRIMARY KEY (id_property_value, id_order_item)',
        ], $this->tableOptions);

// page
        $this->createTable('{{%page}}', [
            'id_page_pg' => $this->primaryKey()->unsigned(),
            'html_pg' => $this->text()->notNull(),
            'description_pg' => $this->string(255)->null(),
            'number_pg' => $this->integer(11)->notNull(),
            'temlate_pg' => $this->integer(11)->null()->defaultValue(1)->comment('Template booklet - one, two or three pages.'),
            'id_booklet_pg' => $this->integer(11)->unsigned()->null(),
        ], $this->tableOptions);

// propertie
        $this->createTable('{{%propertie}}', [
            'id_propertie_pr' => $this->primaryKey()->unsigned(),
            'id_category_pr' => $this->integer(11)->unsigned()->notNull(),
            'name_pr' => $this->string(20)->notNull(),
            'type_pr' => "ENUM ('y\\n', 'check', 'list') NOT NULL",
            'description_pr' => $this->string(255)->null(),
        ], $this->tableOptions);

// propertie_value
        $this->createTable('{{%propertie_value}}', [
            'id_property_value_vl' => $this->primaryKey()->unsigned(),
            'id_property_vl' => $this->integer(11)->unsigned()->notNull(),
            'value_vl' => $this->string(255)->notNull(),
            'type_price_change_vl' => "ENUM ('none', 'percent', 'fixed') DEFAULT NULL DEFAULT 'none'",
            'change_on_vl' => $this->decimal(10, 2)->null(),
        ], $this->tableOptions);

// site_page
        $this->createTable('{{%site_page}}', [
            'id_site_pages_sp' => $this->primaryKey()->unsigned(),
            'route_sp' => $this->string(250)->notNull(),
            'title_sp' => $this->string(50)->notNull(),
            'content_sp' => $this->text()->null(),
            'active_sp' => $this->boolean(1)->null()->defaultValue(1),
            'order_number_sp' => $this->integer(11)->null()->defaultValue(1),
        ], $this->tableOptions);

// user
        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string(255)->notNull()->unique(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string(255)->notNull(),
            'password_reset_token' => $this->string(255)->null()->unique(),
            'email' => $this->string(255)->notNull()->unique(),
            'status' => $this->smallInteger(6)->notNull()->defaultValue(10),
            'created_at' => $this->integer(11)->notNull(),
            'updated_at' => $this->integer(11)->notNull(),
            'is_admin' => $this->boolean(1)->notNull()->defaultValue(0)->comment('1-administrator'),
        ], $this->tableOptions);

// fk: auth_assignment
        $this->addForeignKey('fk_auth_assignment_item_name', '{{%auth_assignment}}', 'item_name', '{{%auth_item}}', 'name');

// fk: auth_item
        $this->addForeignKey('fk_auth_item_rule_name', '{{%auth_item}}', 'rule_name', '{{%auth_rule}}', 'name');

// fk: auth_item_child
        $this->addForeignKey('fk_auth_item_child_parent', '{{%auth_item_child}}', 'parent', '{{%auth_item}}', 'name');
        $this->addForeignKey('fk_auth_item_child_child', '{{%auth_item_child}}', 'child', '{{%auth_item}}', 'name');

// fk: booklet
        $this->addForeignKey('fk_booklet_id_cateory_bk', '{{%booklet}}', 'id_cateory_bk', '{{%category}}', 'id_category_ct');

// fk: client
        $this->addForeignKey('fk_client_id_address_cl', '{{%client}}', 'id_address_cl', '{{%address}}', 'id_address_ad');

// fk: order
        $this->addForeignKey('fk_order_id_address_or', '{{%order}}', 'id_address_or', '{{%address}}', 'id_address_ad');
        $this->addForeignKey('fk_order_id_client_or', '{{%order}}', 'id_client_or', '{{%client}}', 'id_client_cl');

// fk: order_item
        $this->addForeignKey('fk_order_item_id_booklet_io', '{{%order_item}}', 'id_booklet_io', '{{%booklet}}', 'id_booklet_bk');
        $this->addForeignKey('fk_order_item_id_category_io', '{{%order_item}}', 'id_category_io', '{{%category}}', 'id_category_ct');
        $this->addForeignKey('fk_order_item_id_order_io', '{{%order_item}}', 'id_order_io', '{{%order}}', 'id_order_or');

// fk: order_item_article
        $this->addForeignKey('fk_order_item_article_id_order_item_oa', '{{%order_item_article}}', 'id_order_item_oa', '{{%order_item}}', 'id_order_item_oi');

// fk: order_item_file
        $this->addForeignKey('fk_order_item_file_id_order_item_of', '{{%order_item_file}}', 'id_order_item_of', '{{%order_item}}', 'id_order_item_oi');

// fk: order_item_picture
        $this->addForeignKey('fk_order_item_picture_id_order_item_op', '{{%order_item_picture}}', 'id_order_item_op', '{{%order_item}}', 'id_order_item_oi');

// fk: order_propertie_value
        $this->addForeignKey('fk_order_propertie_value_id_order_item', '{{%order_propertie_value}}', 'id_order_item', '{{%order_item}}', 'id_order_item_oi');
        $this->addForeignKey('fk_order_propertie_value_id_property_value', '{{%order_propertie_value}}', 'id_property_value', '{{%propertie_value}}', 'id_property_value_vl');

// fk: page
        $this->addForeignKey('fk_page_id_booklet_pg', '{{%page}}', 'id_booklet_pg', '{{%booklet}}', 'id_booklet_bk');

// fk: propertie
        $this->addForeignKey('fk_propertie_id_category_pr', '{{%propertie}}', 'id_category_pr', '{{%category}}', 'id_category_ct');

// fk: propertie_value
        $this->addForeignKey('fk_propertie_value_id_property_vl', '{{%propertie_value}}', 'id_property_vl', '{{%propertie}}', 'id_propertie_pr');
    }

    public function safeDown()
    {
        $this->dropTable('{{%address}}');
        $this->dropTable('{{%auth_assignment}}'); // fk: item_name
        $this->dropTable('{{%auth_item}}'); // fk: rule_name
        $this->dropTable('{{%auth_item_child}}'); // fk: parent, child
        $this->dropTable('{{%auth_rule}}');
        $this->dropTable('{{%booklet}}'); // fk: id_cateory_bk
        $this->dropTable('{{%category}}');
        $this->dropTable('{{%client}}'); // fk: id_address_cl
        $this->dropTable('{{%options}}');
        $this->dropTable('{{%order}}'); // fk: id_address_or, id_client_or
        $this->dropTable('{{%order_item}}'); // fk: id_booklet_io, id_category_io, id_order_io
        $this->dropTable('{{%order_item_article}}'); // fk: id_order_item_oa
        $this->dropTable('{{%order_item_file}}'); // fk: id_order_item_of
        $this->dropTable('{{%order_item_picture}}'); // fk: id_order_item_op
        $this->dropTable('{{%order_propertie_value}}'); // fk: id_order_item, id_property_value $this->dropTable('{{%page}}'); // fk: id_booklet_pg
        $this->dropTable('{{%propertie}}'); // fk: id_category_pr
        $this->dropTable('{{%propertie_value}}'); // fk: id_property_vl
        $this->dropTable('{{%site_page}}');
        $this->dropTable('{{%user}}');
    }
}
