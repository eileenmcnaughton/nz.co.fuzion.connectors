CREATE TABLE `civicrm_connector` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Connector ID',
  `domain_id` INT(10) UNSIGNED NULL DEFAULT NULL COMMENT 'Optional FK to Domain ID',
  `name` VARCHAR(64) NULL DEFAULT NULL COMMENT 'Connector name (by front end user)' COLLATE 'utf8_unicode_ci',
  `description` VARCHAR(255) NULL DEFAULT NULL COMMENT 'Connector description (by front end user).' COLLATE 'utf8_unicode_ci',
  `payment_processor_type_id` INT(10) UNSIGNED NOT NULL COMMENT 'Connector type',
  `is_active` TINYINT(4) NOT NULL DEFAULT 1 COMMENT 'Is this the default connector of this type for this domain?',
  `is_default` TINYINT(4) NOT NULL DEFAULT 0 COMMENT 'Is this the default connector of this type for this domain?',
  `contact_id` INT(10) UNSIGNED NULL DEFAULT NULL COMMENT 'Optional FK to Domain ID',
  `field1` VARCHAR(255) NULL DEFAULT NULL COMMENT 'Storage field 1 to be defined by connector type' COLLATE 'utf8_unicode_ci',
  `field2` VARCHAR(255) NULL DEFAULT NULL COMMENT 'Storage field 2 to be defined by connector type' COLLATE 'utf8_unicode_ci',
  `field3` VARCHAR(255) NULL DEFAULT NULL COMMENT 'Storage field 3 to be defined by connector type' COLLATE 'utf8_unicode_ci',
  `field4` VARCHAR(255) NULL DEFAULT NULL COMMENT 'Storage field 4 to be defined by connector type' COLLATE 'utf8_unicode_ci',
  `field5` VARCHAR(255) NULL DEFAULT NULL COMMENT 'Storage field 5 to be defined by connector type' COLLATE 'utf8_unicode_ci',

  PRIMARY KEY (`id`),
  UNIQUE INDEX `UI_name` (`name`)
)
COLLATE='utf8_unicode_ci'
ENGINE=InnoDB
;
CREATE TABLE `civicrm_connector_type` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Connector Type ID',
  `name` VARCHAR(64) NULL DEFAULT NULL COMMENT 'Connector Type name (default for creating a new connector).' COLLATE 'utf8_unicode_ci',
  `description` VARCHAR(255) NULL DEFAULT NULL COMMENT 'Connector Type description (default for creating a new connector).' COLLATE 'utf8_unicode_ci',
  `is_active` TINYINT(4) NOT NULL DEFAULT 0 NULL COMMENT 'Is this processor active?',
  `is_default` TINYINT(4) NOT NULL DEFAULT 0 NULL COMMENT 'Is this processor the default?',
  `module` VARCHAR(255) NULL DEFAULT NULL COMMENT 'Key of the module or extension' COLLATE 'utf8_unicode_ci',
  `function` VARCHAR(255) NULL DEFAULT NULL COMMENT 'Module function see README for examples' COLLATE 'utf8_unicode_ci',
  `plugin` VARCHAR(255) NULL DEFAULT NULL COMMENT 'Plugin - see README for examples' COLLATE 'utf8_unicode_ci',
  `permissions` VARCHAR(255) NULL DEFAULT NULL COMMENT 'Permissions in json - see README for examples' COLLATE 'utf8_unicode_ci',
  `field1_label` VARCHAR(255) NULL DEFAULT NULL COMMENT 'Label for storage field 1' COLLATE 'utf8_unicode_ci',
  `field2_label` VARCHAR(255) NULL DEFAULT NULL COMMENT 'Label for storage field 2' COLLATE 'utf8_unicode_ci',
  `field3_label` VARCHAR(255) NULL DEFAULT NULL COMMENT 'Label for storage field 3' COLLATE 'utf8_unicode_ci',
  `field4_label` VARCHAR(255) NULL DEFAULT NULL COMMENT 'Label for storage field 4 'COLLATE 'utf8_unicode_ci',
  `field5_label` VARCHAR(255) NULL DEFAULT NULL COMMENT 'Label for storage field 5' COLLATE 'utf8_unicode_ci',

  PRIMARY KEY (`id`),
  UNIQUE INDEX `UI_name` (`name`)
)
COLLATE='utf8_unicode_ci'
ENGINE=InnoDB
;
