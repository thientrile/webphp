-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 06, 2022 lúc 06:54 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shopit`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `img` char(30) NOT NULL,
  `category` varchar(255) NOT NULL,
  `description` longtext DEFAULT NULL,
  `sDescription` mediumtext DEFAULT NULL,
  `discount` double NOT NULL DEFAULT 0,
  `price` double NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `img`, `category`, `description`, `sDescription`, `discount`, `price`, `date`) VALUES
(1, 'Custom Template #1', 'dgwork-product-mockup-3.jpg', 'Audio', 'Main Features Donec vel dapibus massa. Nulla gravida euismod lorem, tempus hendrerit est porta eu. Aenean tortor enim, cursus eget euismod vel, euismod in eros. Page Builder After enabled Elementor page builder for the product post, you can customize the product template with front-end editor visually. Predefined Templates We include some predefined section templates in the Visual Composer template list that allow you to create different section layouts fastly. Flexible Layout You can create complex layout for the custom product template, make the product page looks more like an optmized landing page. Predefined Templates We include some predefined section templates in the Visual Composer template list that allow you to create different section layouts fastly.', 'DGWork is a flexible shop & business WordPress EDD Theme offering deep integration with Easy Digital Downloads. It’s perfect to create your self-hosted online shop to sell the digital products like software, photography, videos, audios, eBook or graphic design works, etc. Either multi-product sh...', 0, 12, '2022-12-06 14:32:39'),
(2, 'Custom Template #2', 'video_thumbnail.jpg', 'videos', 'Main Features Donec vel dapibus massa. Nulla gravida euismod lorem, tempus hendrerit est porta eu. Aenean tortor enim, cursus eget euismod vel, euismod in eros. Page Builder After enabled Elementor page builder for the product post, you can customize the product template with front-end editor visually. Predefined Templates We include some predefined section templates in the Visual Composer template list that allow you to create different section layouts fastly. Flexible Layout You can create complex layout for the custom product template, make the product page looks more like an optmized landing page. Predefined Templates We include some predefined section templates in the Visual Composer template list that allow you to create different section layouts fastly.', 'DGWork is a flexible shop & business WordPress EDD Theme offering deep integration with Easy Digital Downloads. It’s perfect to create your self-hosted online shop to sell the digital products like software, photography, videos, audios, eBook or graphic design works, etc. Either multi-product sh...', 0, 30, '2022-12-06 14:34:07'),
(3, 'CityNews Theme', 'dgwork-product-citynews.jpg', '', 'Main Features Donec vel dapibus massa. Nulla gravida euismod lorem, tempus hendrerit est porta eu. Aenean tortor enim, cursus eget euismod vel, euismod in eros. Page Builder After enabled Elementor page builder for the product post, you can customize the product template with front-end editor visually. Predefined Templates We include some predefined section templates in the Visual Composer template list that allow you to create different section layouts fastly. Flexible Layout You can create complex layout for the custom product template, make the product page looks more like an optmized landing page. Predefined Templates We include some predefined section templates in the Visual Composer template list that allow you to create different section layouts fastly.', 'DGWork is a flexible shop & business WordPress EDD Theme offering deep integration with Easy Digital Downloads. It’s perfect to create your self-hosted online shop to sell the digital products like software, photography, videos, audios, eBook or graphic design works, etc. Either multi-product sh..', 49, 2450, '2022-12-06 14:50:55'),
(4, 'Custom Template #3', 'dgwork-product-surfer.jpg', 'videos', 'Main Features Donec vel dapibus massa. Nulla gravida euismod lorem, tempus hendrerit est porta eu. Aenean tortor enim, cursus eget euismod vel, euismod in eros. Page Builder After enabled Elementor page builder for the product post, you can customize the product template with front-end editor visually. Predefined Templates We include some predefined section templates in the Visual Composer template list that allow you to create different section layouts fastly. Flexible Layout You can create complex layout for the custom product template, make the product page looks more like an optmized landing page. Predefined Templates We include some predefined section templates in the Visual Composer template list that allow you to create different section layouts fastly.', 'DGWork is a flexible shop & business WordPress EDD Theme offering deep integration with Easy Digital Downloads. It’s perfect to create your self-hosted online shop to sell the digital products like software, photography, videos, audios, eBook or graphic design works, etc. Either multi-product sh...', 0, 12, '2022-12-06 14:50:55'),
(5, 'Brandminute Mockups', 'dgwork-product-iphone-book.jpg', 'Graphics', 'Main Features Donec vel dapibus massa. Nulla gravida euismod lorem, tempus hendrerit est porta eu. Aenean tortor enim, cursus eget euismod vel, euismod in eros. Page Builder After enabled Elementor page builder for the product post, you can customize the product template with front-end editor visually. Predefined Templates We include some predefined section templates in the Visual Composer template list that allow you to create different section layouts fastly. Flexible Layout You can create complex layout for the custom product template, make the product page looks more like an optmized landing page. Predefined Templates We include some predefined section templates in the Visual Composer template list that allow you to create different section layouts fastly.', 'DGWork is a flexible shop & business WordPress EDD Theme offering deep integration with Easy Digital Downloads. It’s perfect to create your self-hosted online shop to sell the digital products like software, photography, videos, audios, eBook or graphic design works, etc. Either multi-product sh...', 0, 36, '2022-12-06 14:58:26'),
(6, 'Standard Product Template', 'dgwork-product-mockup-2.jpg', 'Graphics, Themes', 'Main Features Donec vel dapibus massa. Nulla gravida euismod lorem, tempus hendrerit est porta eu. Aenean tortor enim, cursus eget euismod vel, euismod in eros. Page Builder After enabled Elementor page builder for the product post, you can customize the product template with front-end editor visually. Predefined Templates We include some predefined section templates in the Visual Composer template list that allow you to create different section layouts fastly. Flexible Layout You can create complex layout for the custom product template, make the product page looks more like an optmized landing page. Predefined Templates We include some predefined section templates in the Visual Composer template list that allow you to create different section layouts fastly.', 'DGWork is a flexible shop & business WordPress EDD Theme offering deep integration with Easy Digital Downloads. It’s perfect to create your self-hosted online shop to sell the digital products like software, photography, videos, audios, eBook or graphic design works, etc. Either multi-product sh...', 0, 32, '2022-12-06 14:58:26'),
(7, 'SimpleKey Theme', 'simplekey.jpg', 'Themes', 'Main Features Donec vel dapibus massa. Nulla gravida euismod lorem, tempus hendrerit est porta eu. Aenean tortor enim, cursus eget euismod vel, euismod in eros. Page Builder After enabled Elementor page builder for the product post, you can customize the product template with front-end editor visually. Predefined Templates We include some predefined section templates in the Visual Composer template list that allow you to create different section layouts fastly. Flexible Layout You can create complex layout for the custom product template, make the product page looks more like an optmized landing page. Predefined Templates We include some predefined section templates in the Visual Composer template list that allow you to create different section layouts fastly.', 'DGWork is a flexible shop & business WordPress EDD Theme offering deep integration with Easy Digital Downloads. It’s perfect to create your self-hosted online shop to sell the digital products like software, photography, videos, audios, eBook or graphic design works, etc. Either multi-product sh...', 39, 1950, '2022-12-06 15:08:20'),
(8, 'AE Video Package', 'dgwork-product-video.jpg', 'Videos', 'Main Features Donec vel dapibus massa. Nulla gravida euismod lorem, tempus hendrerit est porta eu. Aenean tortor enim, cursus eget euismod vel, euismod in eros. Page Builder After enabled Elementor page builder for the product post, you can customize the product template with front-end editor visually. Predefined Templates We include some predefined section templates in the Visual Composer template list that allow you to create different section layouts fastly. Flexible Layout You can create complex layout for the custom product template, make the product page looks more like an optmized landing page. Predefined Templates We include some predefined section templates in the Visual Composer template list that allow you to create different section layouts fastly.', 'DGWork is a flexible shop & business WordPress EDD Theme offering deep integration with Easy Digital Downloads. It’s perfect to create your self-hosted online shop to sell the digital products like software, photography, videos, audios, eBook or graphic design works, etc. Either multi-product sh...', 30, 100, '2022-12-06 15:08:20'),
(9, 'Acoustic Inspiration', 'dgwork-product-dj.jpg', 'Audio', 'Main Features Donec vel dapibus massa. Nulla gravida euismod lorem, tempus hendrerit est porta eu. Aenean tortor enim, cursus eget euismod vel, euismod in eros. Page Builder After enabled Elementor page builder for the product post, you can customize the product template with front-end editor visually. Predefined Templates We include some predefined section templates in the Visual Composer template list that allow you to create different section layouts fastly. Flexible Layout You can create complex layout for the custom product template, make the product page looks more like an optmized landing page. Predefined Templates We include some predefined section templates in the Visual Composer template list that allow you to create different section layouts fastly.', 'DGWork is a flexible shop & business WordPress EDD Theme offering deep integration with Easy Digital Downloads. It’s perfect to create your self-hosted online shop to sell the digital products like software, photography, videos, audios, eBook or graphic design works, etc. Either multi-product sh..', 0, 89, '2022-12-06 15:21:37'),
(10, 'Focux Theme', 'focux-1024x933-1.jpg', 'Themes', 'Main Features Donec vel dapibus massa. Nulla gravida euismod lorem, tempus hendrerit est porta eu. Aenean tortor enim, cursus eget euismod vel, euismod in eros. Page Builder After enabled Elementor page builder for the product post, you can customize the product template with front-end editor visually. Predefined Templates We include some predefined section templates in the Visual Composer template list that allow you to create different section layouts fastly. Flexible Layout You can create complex layout for the custom product template, make the product page looks more like an optmized landing page. Predefined Templates We include some predefined section templates in the Visual Composer template list that allow you to create different section layouts fastly.', 'DGWork is a flexible shop & business WordPress EDD Theme offering deep integration with Easy Digital Downloads. It’s perfect to create your self-hosted online shop to sell the digital products like software, photography, videos, audios, eBook or graphic design works, etc. Either multi-product sh...', 59, 2950, '2022-12-06 15:21:37'),
(11, 'Tablet & Phone Mockup', 'dgwork-product-phone-2.jpg', 'Graphics', 'Main Features Donec vel dapibus massa. Nulla gravida euismod lorem, tempus hendrerit est porta eu. Aenean tortor enim, cursus eget euismod vel, euismod in eros. Page Builder After enabled Elementor page builder for the product post, you can customize the product template with front-end editor visually. Predefined Templates We include some predefined section templates in the Visual Composer template list that allow you to create different section layouts fastly. Flexible Layout You can create complex layout for the custom product template, make the product page looks more like an optmized landing page. Predefined Templates We include some predefined section templates in the Visual Composer template list that allow you to create different section layouts fastly.', 'DGWork is a flexible shop & business WordPress EDD Theme offering deep integration with Easy Digital Downloads. It’s perfect to create your self-hosted online shop to sell the digital products like software, photography, videos, audios, eBook or graphic design works, etc. Either multi-product sh...', 0, 20, '2022-12-06 15:33:02');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
