-- phpMyAdmin SQL Dump
-- version 4.4.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- 생성 시간: 21-07-25 19:58
-- 서버 버전: 5.5.47-MariaDB
-- PHP 버전: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 데이터베이스: `skills08`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `addr` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `users`
--

INSERT INTO `users` (`id`, `password`, `name`, `addr`) VALUES
('a1234', '1111', '김안나', '서울시'),
('d1234', '4567', '도댕댕', '경기도 양평군'),
('g10514', '12345', '장지원', '용인시 기흥구'),
('j1234', '12345678', '장떙떙', '용인시 기흥구'),
('k1234', '2345', '김묘묘', '성남시 분당구'),
('p1234', '3456', '박동동', '용인시 수지구'),
('q1234', '1233', '강땡떙', '성남시 분당구');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
