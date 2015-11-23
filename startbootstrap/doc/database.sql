-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Loomise aeg: Nov 23, 2015 kell 10:35 EL
-- Serveri versioon: 5.6.21
-- PHP versioon: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT = @@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS = @@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION = @@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Andmebaas: `blog`
--

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `authors`
--

CREATE TABLE IF NOT EXISTS `authors` (
  `author_id` INT(10) UNSIGNED NOT NULL
  COMMENT 'auto_increment',
  `name`      VARCHAR(30)      NOT NULL
  COMMENT 'auto_increment'
)
  ENGINE = InnoDB
  DEFAULT CHARSET = latin1;

--
-- Andmete tõmmistamine tabelile `authors`
--

INSERT INTO `authors` (`author_id`, `name`) VALUES
  (1, '1');

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `post_id`     INT(10) UNSIGNED NOT NULL,
  `title`       VARCHAR(80)      NOT NULL,
  `description` VARCHAR(120)     NOT NULL,
  `author_id`   INT(10) UNSIGNED NOT NULL,
  `date`        DATETIME         NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `content`     TEXT             NOT NULL
)
  ENGINE = InnoDB
  DEFAULT CHARSET = latin1;

--
-- Andmete tõmmistamine tabelile `posts`
--

INSERT INTO `posts` (`post_id`, `title`, `description`, `author_id`, `date`, `content`) VALUES
  (0, '', '', 0, '2015-11-23 11:25:47',
   'Man must explore, and this is exploration at its greatest. Problems look mighty small from 150 miles up.'),
  (0, '', '', 1, '2015-11-23 11:26:12',
   'Man must explore, and this is exploration at its greatest. Problems look mighty small from 150 miles up.'),
  (0, '', '', 1, '2015-11-23 11:29:25',
   'I believe every human has a finite number of heartbeats. I don''t intend to waste any of mine. We predict too much for the next year and yet far too little for the next ten.');

--
-- Indeksid tõmmistatud tabelitele
--

--
-- Indeksid tabelile `authors`
--
ALTER TABLE `authors`
ADD PRIMARY KEY (`author_id`, `name`);

/*!40101 SET CHARACTER_SET_CLIENT = @OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS = @OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION = @OLD_COLLATION_CONNECTION */;
