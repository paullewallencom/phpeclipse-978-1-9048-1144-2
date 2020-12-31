-- MySQL dump 9.11
--
-- Host: localhost    Database: Shelter
-- ------------------------------------------------------
-- Server version	4.0.23-standard-log

---
--- Create the database
---

DROP DATABASE IF EXISTS Shelter;

CREATE DATABASE Shelter;

USE Shelter;

--
-- Table structure for table `tCat`
--


DROP TABLE IF EXISTS tCat;
CREATE TABLE tCat (
  CatID int(11) NOT NULL auto_increment,
  Name varchar(40) NOT NULL default '',
  Gender char(1) NOT NULL default 'U',
  Age int(3) NOT NULL default '0',
  Breed varchar(100) NOT NULL default '',
  PRIMARY KEY  (CatID)
) TYPE=MyISAM;

--
-- Dumping data for table `tCat`
--

INSERT INTO tCat (CatID, Name, Gender, Age, Breed) VALUES (1,'Snowball','M',145,'DSH');
INSERT INTO tCat (CatID, Name, Gender, Age, Breed) VALUES (2,'Lizzie','F',141,'DSH/Siamese Mix');
INSERT INTO tCat (CatID, Name, Gender, Age, Breed) VALUES (3,'Pim Pim','F',120,'DSH/Russian Blue Mix');
INSERT INTO tCat (CatID, Name, Gender, Age, Breed) VALUES (4,'Mathilda','F',37,'DMH');
INSERT INTO tCat (CatID, Name, Gender, Age, Breed) VALUES (5,'Manfred','M',18,'DSH');
INSERT INTO tCat (CatID, Name, Gender, Age, Breed) VALUES (6,'Saffy','F',108,'DLH');
INSERT INTO tCat (CatID, Name, Gender, Age, Breed) VALUES (7,'Tera','F',60,'DSH');