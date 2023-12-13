-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2023 at 10:36 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pfa`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `doctor_id` int(11) NOT NULL,
  `F_name` varchar(10) DEFAULT NULL,
  `L_name` varchar(15) DEFAULT NULL,
  `Specialty` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `hospital_id` int(11) NOT NULL,
  `hospital_name` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `emergency_num` int(11) DEFAULT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `paramedic_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medical_history`
--

CREATE TABLE `medical_history` (
  `blood_type` varchar(7) DEFAULT NULL,
  `Operation` varchar(30) DEFAULT NULL,
  `lad_reports` varchar(30) DEFAULT NULL,
  `X_ray` varchar(20) DEFAULT NULL,
  `medication` varchar(30) DEFAULT NULL,
  `patient_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paramedics`
--

CREATE TABLE `paramedics` (
  `paramedic_id` int(11) NOT NULL,
  `F_name` varchar(10) DEFAULT NULL,
  `L_name` varchar(15) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `location` varchar(30) DEFAULT NULL,
  `PASSWORD` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `patient_id` int(11) NOT NULL,
  `Patient_name` varchar(30) DEFAULT NULL,
  `Gender` varchar(30) DEFAULT NULL,
  `Date_of_birth` date DEFAULT NULL,
  `emergency_num` int(11) DEFAULT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `paramedic_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`hospital_id`),
  ADD KEY `id` (`doctor_id`),
  ADD KEY `p_id` (`paramedic_id`);

--
-- Indexes for table `medical_history`
--
ALTER TABLE `medical_history`
  ADD KEY `id_p` (`patient_id`);

--
-- Indexes for table `paramedics`
--
ALTER TABLE `paramedics`
  ADD PRIMARY KEY (`paramedic_id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`patient_id`),
  ADD KEY `id_d` (`doctor_id`),
  ADD KEY `Par_id` (`paramedic_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `hospital_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paramedics`
--
ALTER TABLE `paramedics`
  MODIFY `paramedic_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hospital`
--
ALTER TABLE `hospital`
  ADD CONSTRAINT `id` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`doctor_id`),
  ADD CONSTRAINT `p_id` FOREIGN KEY (`paramedic_id`) REFERENCES `paramedics` (`paramedic_id`);

--
-- Constraints for table `medical_history`
--
ALTER TABLE `medical_history`
  ADD CONSTRAINT `id_p` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`patient_id`);

--
-- Constraints for table `patients`
--
ALTER TABLE `patients`
  ADD CONSTRAINT `Par_id` FOREIGN KEY (`paramedic_id`) REFERENCES `paramedics` (`paramedic_id`),
  ADD CONSTRAINT `id_d` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`doctor_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
