-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 14, 2021 lúc 06:34 PM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `x_gka`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ins_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `upd_date` timestamp NULL DEFAULT NULL,
  `del_flag` char(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT 'deleted:1, active:0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `ins_date`, `upd_date`, `del_flag`) VALUES
(1, 'admin@gmail.com', '$2y$10$x910oNuGszqOJQGXj.aaEOqErMmuj.GlRtpqHdULusmUufVje.4R.', '2021-08-14 14:57:06', NULL, '0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2021_08_15_000001_create_admin_table', 1),
(4, '2021_08_15_000002_create_news_table', 2),
(5, '2021_08_15_000003_create_projects_table', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `new_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `new_featured_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `new_short_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `new_content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `del_flag` char(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT 'deleted:1, active:0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `new_title`, `new_featured_image`, `new_short_description`, `new_content`, `created_at`, `updated_at`, `del_flag`) VALUES
(4, '1GK Archi vào Top 100 Công ty Kiến trúc thế giới WA100 – 2021', '/backend/uploads/2021-08-14/1628956298_1.jpg', '1Năm nay là năm đầu tiên, công ty GK Archi lọt Top list 100 công ty kiến trúc hàng đầu thế giới. GK Archi có trụ sở tại Việt Nam, Myanmar, Singapore, trong đó, Việt Nam – quốc gia được xem là một trong những nước kiểm soát về dịch tốt nhất thế giới.', '<p><span style=\"color: rgb(128, 129, 132);\">Năm nay là năm đầu tiên, công ty GK Archi lọt Top list 100 công ty kiến trúc hàng đầu thế giới. GK Archi có trụ sở tại Việt Nam, Myanmar, Singapore, trong đó, Việt Nam – quốc gia được xem là một trong những nước kiểm soát về dịch tốt nhất thế giới....</span></p>', '2021-08-14 15:44:23', NULL, '0'),
(5, 'Calla Garden vào danh sách Top 3 đề cử giải thưởng Kiến trúc thế giới', '/backend/uploads/2021-08-14/1628955935_2.jpg', 'Calla Garden là công trình cao tầng đã lọt vào danh sách cuối cùng để bình chọn trao giải Kiến trúc thế giới lần thứ 37, với 2 công trình công trình cao tầng nổi tiếng khác của nữ cố KTS Zaha Hadid được hoàn thành năm 2020, bốn năm sau khi bà qua đời.', '<p><br></p>', '2021-08-14 15:45:35', NULL, '0'),
(6, 'Ngỡ ngàng chung cư dành cho người thu nhập thấp siêu tinh tế ở TPHCM', '/backend/uploads/2021-08-14/1628955953_2.jpg', 'Công trình do GK Archi thiết kế với tên gọi cũ là Chung cư Aview 2 được đầu tư xây dựng trên khu đất có diện tích 3.715,2 m2 tại TP.Hồ Chí Minh. Dự án dành cho những người có thu nhập thấp nhưng Calla Garden vẫn đầy đủ tiện nghi cho người sử dụng', '<p><br></p>', '2021-08-14 15:45:53', NULL, '0'),
(7, 'GK Archi chúc mừng lễ khởi công dự án Chung cư kết hợp thương mại Sophia Center', '/backend/uploads/2021-08-14/1628956002_3.jpg', 'Sophia Center là 1 dự án chung cư cao tầng cao cấp mang kiểu dáng hiện đại đầu tiên tại thành phố Rạch Giá, Kiên Giang. Dự án mang kỳ vọng khởi nguồn cho 1 lối sống tầm cao tại vịnh Rạch Giá đẹp nhất vùng biển phía Tây Việt Nam.', '<p><img src=\"http://gka.vn/wp-content/uploads/2020/08/PhuCuongNight-min.jpg\" height=\"3375\" width=\"6000\">12/01/2021</p><h5>GK Archi chúc mừng lễ khởi công dự án Chung cư kết hợp thương mại Sophia Center</h5><iframe class=\"ql-video\" frameborder=\"0\" allowfullscreen=\"true\" src=\"https://www.facebook.com/v2.8/plugins/like.php?action=like&amp;app_id=584245598253249&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df386d607591d5d8%26domain%3Dgka.vn%26is_canvas%3Dfalse%26origin%3Dhttp%253A%252F%252Fgka.vn%252Ff2167dd65a22a54%26relation%3Dparent.parent&amp;container_width=759&amp;href=http%3A%2F%2Fgka.vn%2Fgk-archi-chuc-mung-le-khoi-cong-du-an-chung-cu-ket-hop-thuong-mai-sophia-center%2F&amp;layout=button&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true&amp;size=small\" height=\"1000px\" width=\"1000px\"></iframe><p><br></p><p>Sophia Center là 1 dự án chung cư cao tầng cao cấp mang kiểu dáng hiện đại đầu tiên tại thành phố Rạch Giá, Kiên Giang. Dự án mang kỳ vọng khởi nguồn cho 1 lối sống tầm cao tại vịnh Rạch Giá đẹp nhất vùng biển phía Tây Việt Nam.</p><p>Sophia Center là dự án khu chung cư thuộc Khu đô thị Phú Cường, tọa lạc trên đường 3 tháng 2, phường An Hòa, TP. Rạch Giá, tỉnh Kiên Giang.</p><p><strong>Quy mô dự án&nbsp;Sophia Center</strong></p><p><a href=\"http://gka.vn/wp-content/uploads/2020/08/PhuCuongNight-min.jpg\" target=\"_blank\" style=\"color: rgb(246, 146, 30);\"><img src=\"http://gka.vn/wp-content/uploads/2020/08/PhuCuongNight-min.jpg\" height=\"3375\" width=\"6000\"></a></p><p class=\"ql-align-center\"><em>Tổng quan dự án khu chung cư Sophia Center</em></p><p>Sophia Center được xây dựng trên khu đất có tổng diện tích 4.632 m2 với mật độ xây dựng 56,7%. Quy mô xây dựng dự án bao gồm 1 block chung cư cao 17 tầng nổi và 2 tầng hầm, trong đó 3 tầng khối đế từ 1 – 03A được sử dụng là trung tâm thương mại và còn lại là các tầng căn hộ.</p><p><img src=\"https://static1.cafeland.vn/cafelandnew/hinh-anh/2020/12/05/172/image-20201205170047-2.jpeg?t=1\" alt=\"Căn hộ Sophia Center - Khu đô thị Phú Cường\" height=\"442\" width=\"750\"></p><p class=\"ql-align-center\"><em>Vị trí khu chung cư Sophia Center trong khu đô thị Phú Cường</em></p><p>Dự án có tổng cộng 350 sản pẩm thương mại, trong đó có 324 căn hộ chung cư, 20 căn shop retail và 6 shophouse. Các căn hộ gồm có 84 căn 1&nbsp;<strong>phòng ngủ</strong>, 199 căn 2 phòng ngủ và 41 căn 3 phòng ngủ, mỗi căn có diện tich từ 32 m2 – 90 m2.</p><p><img src=\"https://static1.cafeland.vn/cafelandnew/hinh-anh/2020/12/05/172/image-20201205170047-3.png?t=1\" alt=\"Căn hộ Sophia Center - Khu đô thị Phú Cường\" height=\"456\" width=\"750\"></p><p class=\"ql-align-center\"><em>Thiết kế căn hộ 2 phòng ngủ và 3 phòng ngủ</em></p><p>Chung cư Sophia Center sở hữu vị trí ngay khu trung tâm của khu đô thị Phú Cường, nhờ đó cư dân của dự án được thừa hưởng nhiều tiện ích như: bệnh viện Đa khoa Kiên Giang mới, trường trung học cơ sở Võ Văn Kiệt, trung tâm thương mại – hội nghị, nhà hàng biển, khu thể thao đa năng, bến du thuyền…</p><p><img src=\"https://static1.cafeland.vn/cafelandnew/hinh-anh/2020/12/05/172/image-20201205170047-4.jpeg?t=1\" alt=\"Căn hộ Sophia Center - Khu đô thị Phú Cường\" height=\"422\" width=\"750\"></p><p class=\"ql-align-center\"><em>Bệnh viện và trường học nội khu của khu đô thị Phú Cường</em></p><p>Sophia Center có sự kết nối vùng thuận lợi nhờ vị trí tọa lạc trên tuyến đường huyết mạch của TP. Rạch Giá. Dự án thuận tiện kết nối đến các khu vực khác trong nội thành trong bán kính 5km như: khu hành chính TP. Rạch Giá, trung tâm thương mại Rạch Giá, bến tàu Phú Quốc, sân bay Rạch Giá…</p><p>Chủ đầu tư của chung cư Sophia Center là Công ty Cổ phần Đầu tư Phú Cường Kiên Giang, là một thành viên của Tập đoàn Phú Cường. Tập đoàn Phú Cường có tiền thân là một doanh nghiệp chế biến thủy sản vừa và nhỏ trong những năm đầu của thập niên 1990, hiện tại tập đoàn có hơn 20 công ty thành viên hoạt động đa ngành nghề.</p><p>Hiện tại Phú Cường Group tập trung vào 3 lĩnh vực sản xuất kinh doanh chính: bất động sản, năng lượng tái tạo và cung ứng dịch vụ trên 2 khu vực TP. Hồ Chí Minh và Đồng bằng sông Cửu Long. Ngoài dự án Sophia Center (nằm trong khu đô thị Phú Cường cũng do Phú Cường Group làm chủ đầu tư), Phú Cường Group còn là chủ đầu tư 2 dự án lấn biển khác trên khu vực TP. Rạch Giá là Khu đô thị Phú Cường Hoàng Gia, khu đô thị Phú Cường Phú Quý.</p><p>Sophia Center là dự án khu nhà ở cao tầng kết hợp trung tâm thương mại nằm trong tổng thể dự án Khu đô thị mới Phú Cường có quy mô 166 ha. Dự án đã được UBND tỉnh Kiên Giang phê duyệt quy hoạch chi tiết tỷ lệ 1/500 tại Quyết định số 1312/QĐ-UBND ngày 16/06/2010.</p><p>Giá bán căn hộ tham khảo trên thị trường của dự án Sophia Center từ 23 triệu đồng/m2.</p><p>GK Archi rất hân hạnh được đồng hành, thiết kế cho dự án hấp dẫn này.</p><p>Chúc công ty cổ phần Phú Cường Kiên Giang và dự án thành công tốt đẹp.</p>', '2021-08-14 15:46:42', NULL, '0'),
(8, 'WA Awards 2020: Nhà Văn Hóa Sinh Viên TP.HCM đạt giải ở hạng mục công trình đã thực hiện', '/backend/uploads/2021-08-14/1628956828_5.jpg', 'Giải thưởng Kiến trúc thế giới (World Architecture Awards – WA Awards 2020) là cuộc tranh tài về kiến trúc – nội thất có quy mô toàn cầu. Năm 2020, dự án Nhà Văn Hóa Sinh Viên là công trình duy nhất của Việt Nam giành chiến thắng tại hạng mục Dự án đã thự', '<p><br></p>', '2021-08-14 16:00:28', NULL, '0'),
(9, 'GK Archi Teambuilding 2020- Nha Trang Trip', '/backend/uploads/2021-08-14/1628956849_6.png', 'Tuần vừa qua, đại gia đình GK Archi đã có chuyến du lịch nghĩ dưỡng 3 ngày 2 đêm tại Nha Trang Đây là chuyến đi không đơn thuần là nghỉ dưỡng mà còn là dịp để các thành viên gắng kết với nhau thông qua những hoạt động vui chơi tập thể mà ban', '<p><br></p>', '2021-08-14 16:00:49', NULL, '0'),
(10, 'GK Archi đạt giải thưởng trong cuộc thi thiết kế Trung tâm thương mại Chợ Cồn', '/backend/uploads/2021-08-14/1628956868_7.jpg', 'ĐNO – Sáng 18-6, Ban tổ chức cuộc thi tuyển chọn phương án kiến trúc chợ Cồn tổ chức tổng kết và trao giải cho các phương án xuất sắc nhất.  Ở giải thưởng này, GK Archi đạt giải thưởng trong cuộc thi thiết kế Trung tâm thương mại Chợ Cồn – Chợ Cồn tại', '<p><br></p>', '2021-08-14 16:01:08', NULL, '0'),
(11, 'Nhà văn hóa sinh viên TP.HCM – vẻ đẹp của hình khối và tính bền vững | GK Archi – Nihon Sekkei', '/backend/uploads/2021-08-14/1628956888_8.jpg', 'Toàn công trình nhà văn hóa sinh viên TP HCM có diện tích sàn gần 40.000m2 nằm trong khuôn viên trung tâm của Khu Đại học quốc gia TP.HCM rộng 3.5ha. Công trình được thiết kế bởi 2 công ty Việt Nam và Nhật Bản là: GK Archi và Nihon Sekkei được xem là một', '<p><br></p>', '2021-08-14 16:01:28', NULL, '0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `del_flag` char(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT 'deleted:1, active:0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `projects`
--

INSERT INTO `projects` (`id`, `name`, `country`, `avatar`, `created_at`, `updated_at`, `del_flag`) VALUES
(1, 'Navifeed – Long Xuyên', 'Việt Nam', '/backend/uploads/2021-08-14/1628957649_1.jpg', '2021-08-14 16:14:09', NULL, '0'),
(2, 'Kingston Tower', 'Việt Nam', '/backend/uploads/2021-08-14/1628957720_2.jpg', '2021-08-14 16:15:20', NULL, '0'),
(3, 'Khu dân cư Him Lam – Hà Đông', 'Việt Nam', '/backend/uploads/2021-08-14/1628958031_3.jpg', '2021-08-14 16:15:33', NULL, '0'),
(4, 'The Western Gate', 'Việt Nam', '/backend/uploads/2021-08-14/1628958322_4.jpg', '2021-08-14 16:25:22', NULL, '0'),
(5, 'Chung cư Marina Tower', 'Việt Nam', '/backend/uploads/2021-08-14/1628958348_5.jpg', '2021-08-14 16:25:48', NULL, '0'),
(6, 'Khu phức hợp Tân Bình Green Housing', 'Việt Nam', '/backend/uploads/2021-08-14/1628958360_6.jpg', '2021-08-14 16:26:00', NULL, '0'),
(7, 'Khu sinh hoạt công nhân Tân Tạo', 'Việt Nam', '/backend/uploads/2021-08-14/1628958441_7.png', '2021-08-14 16:27:21', NULL, '0'),
(8, 'Dự án Ahlone Tower', 'Myanmar', '/backend/uploads/2021-08-14/1628958467_8.jpg', '2021-08-14 16:27:47', NULL, '0'),
(9, 'Khách sạn Maw Lamyaing', 'Myanmar', '/backend/uploads/2021-08-14/1628958493_9.jpg', '2021-08-14 16:28:13', NULL, '0'),
(10, 'Khu nhà ở Thuwanna 1', 'Myanmar', '/backend/uploads/2021-08-14/1628958507_10.jpg', '2021-08-14 16:28:27', NULL, '0'),
(11, 'Khu phức hợp Green Home', 'Việt Nam', '/backend/uploads/2021-08-14/1628958520_11.jpg', '2021-08-14 16:28:40', NULL, '0'),
(12, 'Chung cư Narnattaw', 'Myanmar', '/backend/uploads/2021-08-14/1628958535_12.jpg', '2021-08-14 16:28:55', NULL, '0');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
