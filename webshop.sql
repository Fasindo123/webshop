-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2023. Dec 20. 08:27
-- Kiszolgáló verziója: 10.4.27-MariaDB
-- PHP verzió: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `webshop`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `categories`
--

INSERT INTO `categories` (`id`, `label`) VALUES
(1, 'Telefon'),
(2, 'Processzor'),
(3, 'Konzol');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `favorites`
--

CREATE TABLE `favorites` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `in_cart_items`
--

CREATE TABLE `in_cart_items` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `in_cart_items`
--

INSERT INTO `in_cart_items` (`id`, `user_id`, `item_id`, `qty`) VALUES
(13, 1, 1, 1),
(15, 1, 4, 1);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `stock` varchar(255) NOT NULL,
  `cover_img` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `items`
--

INSERT INTO `items` (`id`, `name`, `description`, `price`, `stock`, `cover_img`, `images`, `category_id`) VALUES
(1, 'Xiaomi Redmi Note 12', 'Az 5000mAh-s akkumulátor és a 33W-os gyorstöltés nyer? kombinációja\r\n', 69999, '200', '', 'uploads/photos/bdrweo8ql0fv73i.png,uploads/photos/01sj2fozlwcv7r3.png,uploads/photos/0mgf1b68ptaurv3.png', 1),
(2, 'Xiaomi 13', 'XIAOMI 13 8/256 GB DualSIM Fekete Kártyafüggetlen Okostelefon\r\n', 339999, '150', '', 'uploads/photos/a2efgb0ct9zq8ol.png', 1),
(3, 'Iphone 13', 'APPLE iPhone 13 Éjfekete 128 GB Kártyafüggetlen Okostelefon', 279999, '13', '', 'uploads/photos/ibx4uo37t0s8fq5.png,uploads/photos/nbyue4k082dv71p.png,uploads/photos/9uq4jvopkd6n8c0.png,uploads/photos/5jvuqlagsexh3oi.png', 1),
(4, 'Intel Core i9-11900KF', 'Intel Core i9-11900KF 8-Core 3.5GHz LGA1200 Box Processzor\r\n', 109000, '3', '', 'uploads/photos/whyztmfgubrl9k2.png,uploads/photos/18po2tb5sxka3yq.png,uploads/photos/w1prsmcy6x8q9nh.png,uploads/photos/i7p2fk_sqazwrjc.png', 2),
(5, 'AMD Ryzen 7 5800X', 'AMD Ryzen 7 5800X 8-Core 3.8GHz AM4 Box without fan and heatsink Processzor\r\n', 79250, '46', '', 'uploads/photos/n9giqwdtko6scj3.png,uploads/photos/tc1myas7fzxkq5i.png,uploads/photos/h6cp9iy17nrubgk.png', 2),
(6, 'AMD Ryzen 9 5900X', 'AMD Ryzen 9 5900X 12-Core 3.7GHz AM4 Box without fan and heatsink Processzor\r\n', 116020, '38', '', 'uploads/photos/n7dmst_ul5hywb9.png,uploads/photos/v0d43b69c5nwlu_.png', 2),
(7, 'Playstation 5', 'SONY PlayStation 5', 224999, '5', '', 'uploads/photos/rw_4a78epqoymux.png,uploads/photos/ny9s2c0i3gehq4j.png,uploads/photos/zqp3si5l4kwotm1.png', 3),
(8, 'Xbox Series S', 'Xbox Series S Carbon Black 1TB', 139999, '25', '', 'uploads/photos/h0wd9qzsynt8obc.png,uploads/photos/amrzlbwo_k6c25y.png,uploads/photos/v6g_fb59rusimqh.png', 3),
(9, 'Üres', 'Üres', 0, '0', '', '', 1);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `img` varchar(255) NOT NULL,
  `login_session_key` varchar(255) DEFAULT NULL,
  `email_status` varchar(255) DEFAULT NULL,
  `password_expire_date` datetime DEFAULT '2024-03-12 00:00:00',
  `password_reset_key` varchar(255) DEFAULT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `img`, `login_session_key`, `email_status`, `password_expire_date`, `password_reset_key`, `role`) VALUES
(1, 'Admin', 'admin', 'mtszita2006@gmail.com', '$2y$10$y/VBtsth/7jNXiRFOx1Rregg7qvslhA6xsEyG9Dch82qsGsAChkPa', 'http://localhost/webshopdashboard/uploads/files/ufl2e1y8ik7oawh.png', NULL, 'verified', '2023-12-31 13:20:16', '33b796e0be98f2460c675895ccdbb8ba', 'admin'),
(2, 'Felhasználó', 'user123', 'mtszita24@gmail.com', '$2y$10$.LeQTy.g69MxUb18aRJRxe3N76yrt.wLyd6mMzpYgs2WY595dSPom', '', NULL, 'verified', '2024-03-12 00:00:00', NULL, 'user');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `in_cart_items`
--
ALTER TABLE `in_cart_items`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT a táblához `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT a táblához `in_cart_items`
--
ALTER TABLE `in_cart_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT a táblához `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
