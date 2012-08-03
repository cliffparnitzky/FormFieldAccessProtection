-- ********************************************************
-- *                                                      *
-- * IMPORTANT NOTE                                       *
-- *                                                      *
-- * Do not import this file manually but use the Contao  *
-- * install tool to create and maintain database tables! *
-- *                                                      *
-- ********************************************************

-- 
-- Table `tl_form_field`
-- 

CREATE TABLE `tl_form_field` (
  `protected` char(1) NOT NULL default '',
  `groups` blob NULL,
  `guests` char(1) NOT NULL default '',
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
