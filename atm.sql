-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 14 apr 2021 om 14:16
-- Serverversie: 10.4.11-MariaDB
-- PHP-versie: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atm`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `moneybills`
--

CREATE TABLE `moneybills` (
  `a10` int(11) NOT NULL,
  `a20` int(11) NOT NULL,
  `a50` int(11) NOT NULL,
  `a100` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `moneybills`
--

INSERT INTO `moneybills` (`a10`, `a20`, `a50`, `a100`) VALUES
(85, 0, 70, 68);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `userdata`
--

CREATE TABLE `userdata` (
  `id` int(11) NOT NULL,
  `fullName` varchar(128) NOT NULL,
  `bankID` varchar(22) NOT NULL,
  `pinCode` varchar(255) NOT NULL,
  `bankBalance` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `userdata`
--

INSERT INTO `userdata` (`id`, `fullName`, `bankID`, `pinCode`, `bankBalance`) VALUES
(1, 'Desley Langeveld', 'NL76 NederlandseBa', '4172', NULL),
(2, 'Aras', 'NL76 INGB5743 6597', '$2y$10$3y7vRmg6INgQ78IQ.83EnOtjekilr9jECsFOKDtKeVAcIT9M1L8WO', NULL),
(3, 'Desley Langeveld 2', 'NL42 ASNB9307 5706 48', '$2y$10$Qj5hFverIBRsg8uqyVcrpOx1FakWUm0a/ns172tMUmMgKz32WzkGK', NULL),
(4, 'Desley Langeveld 2', 'NL41 NLSB 0623 6910 48', '$2y$10$k1c68Knh1bjEcu1hAV8Dg.qmCr4E6mjzBnr28cWdWOzt6P4t5dQBG', NULL),
(5, 'Desley Langeveld', 'NL24 ABNA 0725 9208 81', '$2y$10$zBLeXJeqduIfWMijYGhIq.E8gckhsxB9Y76FKXTF9IFEYLr9sqXpa', NULL),
(6, 'Desley Langeveld', 'NL35 ABNA 5714 6435 46', '$2y$10$Kpak02ab02okHYFtjHuhQ.oac52fNh2e41dJfKnJe7k8.xx5y0h16', NULL),
(7, 'Desley Langeveld', 'NL06 ABNA 1486 3120 92', '$2y$10$fSBjJASZiucQ60bVOFFdtuq8WpbCL1ZWEQlaWVbSgyZQ7VUEGSZce', NULL),
(8, 'Desley Langeveld', 'NL76 ABNA 2058 0629 25', '$2y$10$b/EeSqwCEZtCDGrcUmT8veI4yNixrOCK6iF5zZ32WeL6IJXUWMgIy', NULL),
(9, 'Desley Langeveld', 'NL72 ABNA 8769 0569 68', '$2y$10$3H0LSaJevJsSVy8tmUT2PeQoFhIL3AWzvWX2iBY/IjOFLmnbxF7CK', NULL),
(10, 'Desley Langeveld', 'NL34 ABNA 3104 4068 64', '$2y$10$99MriPTy4Wx5/mWbsYyV..TtPUEhih59fSpQIL6FpPtlBKVMhk.e.', NULL),
(11, 'Desley Langeveld 2', 'NL29 NLSB 5439 8673 63', '$2y$10$PNZKRQ1yy2QgLV/26iqMc.56fBA7XBsbSpr8MDSjSqY26nUUOxK.m', NULL),
(12, 'Desley Langeveld 2', 'NL01 NLSB 9076 3807 03', '$2y$10$ura8rLzwLvU1m8wGX9dLreKi3vO0dJCmr8YK0c0.L75PFfX1k3qn.', NULL),
(13, 'Desley Langeveld 2', 'NL37 NLSB 0325 3786 70', '$2y$10$9LZ12caCEoPg3IN/XHOmIOJjAZ4DTe/hZhQaV.Xl0n5E4jP6bL1Mi', NULL),
(14, 'Desley Langeveld 2', 'NL97 NLSB 9148 6923 06', '$2y$10$0KKHrQT6lYz1LQDAsXV51OPN/TEu.thH5C7VkUrUj2Ulu5EUKu6oK', NULL),
(15, 'Siem Postduif', 'NL13 NLSB 7623 2861 09', '$2y$10$jmCJrdKvzua11/0SO3nW7OQdMDmSY/Wlw8opv9zOmG5VO7DgXRg.S', NULL),
(16, 'Siem abc', 'NL23 NLSB 3657 2780 47', '$2y$10$wBdoFMUhD4xnU70LL/tUce/m7CEbpCn8UOv6S8e0KvWkWWM6vaAoS', NULL),
(17, 'Desley Langeveld 2', 'NL50 ABNA 7610 9287 04', '$2y$10$YzaeS5OHKWVY2kPdw6OPS.Eyqx7qEr03pKlbDe/wLSeNOG5DCnoN6', NULL),
(18, 'Aras', 'NL46 INGB 9386 9705 14', '$2y$10$N34STn17PSBDXuUQ6.qeX.R52O8qGCrwr9sSCQhXMIbm8j0xOGMr2', NULL),
(19, 'Desley Langeveld 2', 'NL49 INGB 4189 1759 06', '$2y$10$TE5zDUw3n2NmE54eblDX5uKoZX9fWPRYiKX.Qe.0udasuzBWHQdgi', NULL),
(20, 'Desley Langeveld 2', 'NL09 INGB 7912 7629 16', '$2y$10$5omqEP8ViwfFkvTqL0jw3.DSxhtLjptM7jYfN2NT4a6rlvpOOllju', NULL),
(21, 'Desley Langeveld 2', 'NL85 INGB 1420 9568 37', '$2y$10$/12ZzVoO9kFangOmYgKuqeCbQ0c8LqMfWN7J0/32fhJcOICU7i3pS', NULL),
(22, 'Aras', 'NL78 INGB 9758 2489 67', '$2y$10$OM3u2pkslk7Z.7MUcKuRgu4Cx0WuAqtIr0EHNmXD6tP6p0gmODKB6', NULL),
(23, 'Aras', 'NL19 INGB 7809 3610 14', '$2y$10$nXn7bwomSOGOPpV5crFKe.YkNA7GCNZWp2Jb9FbIHxfVMSd0DV4oy', NULL),
(24, 'Aras', 'NL28 INGB 8216 0639 42', '$2y$10$ofqiBGvVTWHL1qfLi/6vzu7S27oHJ/kSqqa4r8WwlmBKfQD8eoENW', NULL),
(25, 'Aras', 'NL76 INGB 0475 8431 29', '$2y$10$XuPzp5ZfJbjuzYACWxo43e0tOrNNr4Z0XTBNxFlhpMLAt5Txaz.Qy', NULL),
(26, 'Desley Langeveld 2', 'NL64 INGB 4179 8206 67', '$2y$10$zMzMgiqUHu33qATg3n9sUOVxepoGD9LjhmyZoClui5J6Mdhw32SD6', NULL),
(27, 'Aras', 'NL98 INGB 9204 0769 90', '$2y$10$W3.aMUBekheMj2Oqj3kKv.LmLPDS3jMBZHKajAKgnTPegp0tUYNmO', NULL),
(28, 'Desley Langeveld 2', 'NL81 INGB 1023 8652 10', '$2y$10$QMI1RUQ7WZEJfq6uk2NxSu5G01Vt1wdpA5MBFFP7V8Bvze4dZUs1m', NULL),
(29, 'Arsalan', 'NL78INGB8014102942', '$2y$10$1jRxicn7Fy1ENpdqsWH/zOMNOn/uRa6AgssSd7hAJxVEJ6FhMpm.m', NULL),
(30, 'Desley Langeveld 2', 'NL73ABNA9851146583', '$2y$10$h1QYyh43DA806fwSNWDJf.SQbekaIl2XCcYxNSRdq/H7qO3PAJ4L6', NULL),
(31, 'Siem abc', 'NL64RABO9732419795', '$2y$10$esGgGOQCRqOcgohopLCh9ebQvf/i7KOZ8oeB.DCsM7BiU7KNmshoq', NULL),
(32, 'Arsalan', 'NL28INGB4879231901', '$2y$10$ylRKycwJyDDsiYhaaF20JO0SlsGeXYFT1I80tOMtBlHyz4OGi3EgO', NULL),
(33, 'Siem abc', 'NL54RABO9128569375', '$2y$10$Xxplk1ow6yLg4fb8tAFgROMm3WDUg8G9RqM5vkcbfDtnonnWvibxK', NULL),
(34, '', 'NL809718356441', '$2y$10$Tg7pMBLiO7CVwfDtKCfzVu2HtrcHAy51RwQsMKkgaM76lj4jUXjNK', NULL),
(35, 'Desley Langeveld 2', 'NL90ABNA1248105657', '$2y$10$b9rG/uZPF.EwNhghb9OXjOo884O0dvoNW2lLUdzIoBCk2lUITlU9.', NULL),
(36, 'Desley Langeveld 2', 'NL96ABNA5723418362', '$2y$10$SXlOuN5P2vd4jdtiZSFiFOeEb6YOF/mFN1V42HRBEo.mDE5hKUnxa', NULL),
(37, 'Desley Langeveld 2', 'NL48ABNA6829837168', '$2y$10$bhiZ2ML6wKZBIIhp3sHDzeQynOk3AJYajOpVJUnlbBBU7DyLWhHhC', NULL),
(38, 'Desley Langeveld 2', 'NL49ABNA2089046153', '$2y$10$MGMUeP1CgpAQ2sNG4BWhFOyU.tbBFALnjHZSga7JSifzygn6g/9R.', NULL),
(39, 'Desley Langeveld 2', 'NL73ABNA7986369779', '$2y$10$yvx5695fHsYhQM.fJnP5Fufhkah30z/oMkmLx5rxC9AOiwH/YJiI.', NULL),
(40, 'Desley Langeveld 2', 'NL12ABNA1570059408', '$2y$10$bpIoACXqsf3ehphf50TXg.LKpbPSeHFBlsTe3S1kXH2Ifu6yEmbDa', 1200),
(41, 'Desley Langeveld 2', 'NL29ABNA3429027479', '$2y$10$ibn9Hh4WjaOIxVfR.YUSGuLLDXmron8MYu.93GatM7vk31tsMM2Am', 6550),
(42, 'Aras', 'NL92INGB7903054353', '$2y$10$f501jPvC9AZBH2K1AgYw0OvyKynqNGLk9EL5J6cCKSUKVy8ExI2g.', NULL),
(43, 'Siem abc', 'NL28ABNA6758089672', '$2y$10$gY/qz/utIAMf.OS69X6TP.vJqQlXFvtrwsLqIrrBVSqt2Kh/l05vm', NULL),
(44, 'ankita ', 'NL08RABO4291240189', '$2y$10$ybDwUhCxu4qPffWoa2of2uDxnzaiSmYIt4iUo5VVQTuZ0GZP4BILC', NULL),
(45, 'Mo', 'NL15RABO5042476564', '$2y$10$D6vIh.KKi1/nLYVPs7szpOIEsO/MHTSkttUAUTwSDJGxyXaa9Zd3q', NULL),
(46, 'Desley Langeveld 2', 'NL08ABNA7913723420', '$2y$10$SB9mFE3JmTeJTAp7CSeuLeZI4KmybbqDt7PdOHIqpBv3tlV8CjG9q', NULL),
(47, '', 'NL802438075802', '$2y$10$SWP3bY.k5oY1d/2p25oqoeC9je8RgUFA9sqTLJemLNujiedkUgCNe', NULL),
(48, '', 'NL651598982143', '$2y$10$2qk84eERHeu043/z.25LBurXA2VXLRZrVqKhKOvrZgub4YbO.2xBe', NULL),
(49, 'ArasDeBaras', 'NL54INGB5674380414', '$2y$10$6KHtJp2EztU5bPrSTZ2F1eTzqorGeCKv4uPXS1reE07vxxhOa5kTO', 2),
(50, 'Aras', 'NL23INGB3740854679', '$2y$10$gMmIKAvum9VaIztt5PQKneYUZpriGlSHM86CaiKxhQkIv/sBN7VLe', NULL),
(51, 'ankita 2', 'NL81ASNB1960047236', '$2y$10$slqsQTPluBEvdL5HoKh01.sx9B1lnGMp2aG/tG1edr64UDfnTD8lC', NULL),
(52, 'Siem abc', 'NL93RABO0961964853', '$2y$10$u0L8XnZ3rnxe9uRICJmi9eeBOZ5tA6pS.TxOdIKMPR049VyCec9.O', NULL),
(53, 'ArasDeBaras', 'NL98INGB8103708292', '$2y$10$r1vbCBUt6gMJq9yY1ZjifOjAHhfaIOI/toflQUxJr2ieZMv6K89d.', NULL),
(54, 'Arsalan', 'NL25INGB7153502463', '$2y$10$31BzdBsspa2yy02DYcE2i.It6l1eaKPqHnqO6o5Pk3tnI.LzKESTq', NULL),
(55, '', '', '', 8960),
(56, '', '', '', 8960),
(57, 'Siem abc', 'NL89ABNA1892539161', '$2y$10$0/HVwr4jT5PH.fmlafDRGejFglVpDQ4It8PRDfHOPpTnbcQEpt.66', NULL),
(58, 'Desley Langeveld', 'NL06ABNA2601918224', '$2y$10$.3Su6hrLbTeJtz.aTZm4XeBNURpIqbne0fFfOBTnOgcwKlKIiPTl.', NULL),
(59, 'Desley Langeveld', 'NL60ABNA1746473574', '$2y$10$WS0YfTnaFHsf1bgiRofA5Oc3UkA9IhqNH0OesMz2anxdzG6BCWqku', NULL),
(60, 'Siem abc', 'NL04ABNA7214658379', '$2y$10$jusWtZOIGgzgZn/LHA9Q1.YrkliJViXX4.pfEyCxSpW7kaUbKyVrq', NULL),
(61, 'Arsalan', 'NL69INGB9837016792', '$2y$10$wKk3EAHuhbv8cO43VLMqe.WzKnGINCtPg.MLGd.2RyfqGU851T8Fu', NULL),
(62, 'Arsalan', 'NL18INGB0132413904', '$2y$10$JvuOb4eKLWgzlJEHLdyhiuU6PccQE0HqICnQkByX6lZreh1j5cTgW', NULL),
(63, 'Arsalan', 'NL72INGB1384351767', '$2y$10$PqFuWI3DGzknfbaZqabiIumy.EE6WwdvXStS2Y.rGD9Y3Q3GkAOWi', NULL),
(64, 'Arsalan', 'NL49INGB3946201486', '$2y$10$YnWQiUZrD5g0RcDF9lztgenZfTfaRSzmEToZN4.7d2au9yMhOipeK', NULL),
(65, 'Arsalan', 'NL84INGB5076943501', '$2y$10$AvEWxvItQ5LmaWx4hGSZTuHwtFgVPtiYkdWH44zYDAtGbkGk5uPEm', NULL),
(66, 'Desley Langeveld 2', 'NL18ABNA9135970336', '$2y$10$RFPvYEVDHjD7mnk9sctnKe9FfGtnyQxrN6/8ciw75xiTQR3K49PZi', NULL),
(67, 'Arsalan', 'NL34INGB5709258306', '$2y$10$eJvCHxokSIlRKIHvLfRPOevz01V.qAzJuCo/M0xJjHXDLoRXXpO1W', NULL),
(68, 'ankita ', 'NL36RABO1905087463', '$2y$10$53OejTu18fExZjuohasXGuoMFVTP53eHZik0K1RD2W3mB.D6jX5CK', NULL),
(69, 'Aras', 'NL96INGB2947897224', '$2y$10$g06rfg0aCJHeioQqA0AvdeKX4vn9tRiri.H8ccMWIeJkqxqhXIVAC', NULL),
(70, 'fsdfsdf', 'NL56RABO2604319020', '$2y$10$gDKyIYiyYYbS2bvkf34I4uZsj2DEzLAXg5Sa5kkcx.xVQdNyZ5NLu', NULL),
(71, 'Desley Langeveld 2', 'NL38RABO9041908131', '$2y$10$jP7Th/KEPv4qf82MRjHqiOA2r1U0PwvLotW6O15Ss9qdOqDKThHSe', NULL),
(72, 'Razzz', 'NL80ASNB6728401834', '$2y$10$LexhG5rH35CFYs4o5K0R5eUpY8TrSPr4c/cjHhtOOXEWal260.qVm', -10);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
