-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 11, 2021 lúc 10:54 AM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlbansach`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `author`
--

CREATE TABLE `author` (
  `id` int(9) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `gender` int(9) NOT NULL,
  `birthday` date NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `author`
--

INSERT INTO `author` (`id`, `avatar`, `firstName`, `lastName`, `gender`, `birthday`, `created_at`, `updated_at`) VALUES
(1, 'avatar ne', 'Nguyễn Nhật', 'Ánh', 1, '2021-04-06', '2021-04-06 00:00:00', '2021-04-06 00:00:00'),
(2, 'avatar ne', 'Trang', 'Hạ', 0, '2021-04-06', '2021-04-06 00:00:00', '2021-04-06 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` int(9) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'mini-banner1.jpg', '2021-03-30 00:00:00', '2021-03-30 00:00:00'),
(2, 'mini-banner2.jpg', '2021-03-30 00:00:00', '2021-03-30 00:00:00'),
(3, 'mini-banner3.jpg', '2021-03-30 00:00:00', '2021-03-30 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(9) NOT NULL,
  `id_Product` int(9) NOT NULL,
  `quantity` int(9) NOT NULL,
  `price` decimal(4,2) NOT NULL,
  `customerName` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `note` text NOT NULL,
  `status` int(9) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `payment`
--

CREATE TABLE `payment` (
  `id` int(9) NOT NULL,
  `id_order` int(9) NOT NULL,
  `status` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `id` int(9) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `id_PostCategory` int(9) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`id`, `title`, `image`, `description`, `content`, `id_PostCategory`, `created_at`, `updated_at`) VALUES
(1, 'Đi Trốn – Nỗi buồn chiến tranh', 'blog1.jpg', 'Tác phẩm thứ hai của Bình Ca, vẫn là một cuốn sách viết về “lứa chúng tôi”, về những đứa trẻ con nhà cán bộ kháng chiến, sinh vào đầu thập niên 1950 ở vùng tự do… Thế nhưng, nếu “Quân khu Nam Đồng” là tập hồi ký của một tập thể, thì “Đi trốn” là chuyến ph', 'Đọc thêm:\r\n\r\nQuân Khu Nam Đồng – Tuổi thơ của những ông “tướng” con.\r\nBến không chồng – “Hòn vọng phu” thời hiện đại.\r\nNgười Tị Nạn – Tiếng vọng nơi góc biển.\r\nĐơn Tuyến – Tiểu thuyết chân dung Nguyễn Đình Ngọc.\r\nCũng bởi thần hồn nát thần tính.\r\nTrên nền lịch sử đất nước vào khoảng những năm 1965 – 1966, sau khi Hiệp định Geneva được ký kết chính thức chấm dứt chế độ thực dân Pháp tại Đông Dương, miền Bắc đang trong giai đoạn xây dựng và chống chiến tranh phá hoại của quân đội Mỹ. Dưới mưa bom lửa đạn, những đứa trẻ thời chiến thuộc vùng tự do không còn được sống êm ấm mà phải đi sơ tán về nông thôn và rừng núi.\r\n\r\n“Đi trốn” chia làm 3 phần với 26 chương, là một cuộc đi trốn đúng nghĩa đen của những cậu nhóc con cán bộ kháng chiến vốn mang gốc gác thị thành đang tập trung ở trại sơ tán Khe Khao. Sở dĩ phải tính đến nước đi trốn là vì mấy ông lính con trót nghịch dại lấy trộm vũ khí ở kho đạn dược của bộ đội, rồi cũng bởi thần hồn nát thần tính mà lo sợ bị bỏ tù. Cả nhóm Tự Thắng, Việt Bắc, Linh, Hoài Nam (về sau Thảo thay Nam) dưới sự dẫn đường của Sơn – cậu bé người địa phương, đã lên kế hoạch bỏ vào rừng đi trốn một thời gian.\r\n\r\nMọi chuyện sẽ chỉ là một chuyến đi trốn vui vui của con trẻ, cho đến khi Mỹ đánh bom làm sập mất lối vào hang động, khiến cả bọn vừa bị thương vừa phải mau chóng tìm cách thoát ra, đẩy tất cả vào cuộc phiêu lưu thực sự để tìm đường sống trong hiểm nguy.\r\n\r\nVẫn là giọng văn rất Bình Ca, thiệt thà đến là lạ, hóm hỉnh đến là duyên. Từ những mẫu chuyện sinh hoạt đời thường ở trại Khe Khao, hay chuyến đi vượt suối băng rừng, đến những câu chuyện quá khứ về gia đình của từng cô cậu nhóc, nhà văn dùng thứ ngôn từ mộc mạc đậm chất lính để viết nên “một câu chuyện sinh động và cảm cộng” – chữ của nhà văn Bảo Ninh.', 2, '2021-03-30 00:00:00', '2021-03-30 00:00:00'),
(2, 'Cảm ơn người lớn – Cuốn bí kíp về lòng bao dung giữa hai thế hệ', 'blog2.jpg', '“Nếu biết con cái là một lũ sinh vật lúc nào cũng hào hứng làm những chuyện ngốc nghếch sau lưng đấng sinh thành, chắc các bậc làm cha làm mẹ phải họp hành căng thẳng để bàn tính xem có nên đẻ ra bọn tôi hay không. […] Ờ, có lẽ điều đáng kể nhất mà người ', '“Cảm ơn người lớn” chỉ vỏn vẹn gồm 264 trang, chia làm 19 chương, là sự kế thừa và tiếp nối thành công cảm xúc của mạch truyện “Cho tôi xin một vé đi tuổi thơ” – một hiện tượng văn học của Nguyễn Nhật Ánh phát hành 10 năm trước.\r\n\r\nVẫn là những cu Mùi, cái Tủn, Tí Sún và Hải cò, vẫn là những câu chuyện nho nhỏ, những trò nghịch ngợm đáng yêu, vẫn duyên, vẫn điên điên như giọng văn Nguyễn Nhật Ánh vốn thế. Thế nhưng cuốn sách này có một khung sườn chắc chắn hơn, được xây đắp bởi những chiêm nghiệm, những trăn trở khi trẻ con đã không còn là trẻ con nữa, mà phải bước qua nấc thang thời gian để trở thành người lớn.\r\n\r\nTác giả thông qua nhân vật cu Mùi để so sánh hai thế giới tưởng chừng cách biệt lại luôn giao hoà ấy, rồi tài tình vẫy thêm vết màu loang ngẫu hứng gợi những suy tư về tình yêu, hôn nhân, tiền bạc, sức khỏe, thời gian, cái chết… Những nỗi ám ảnh muôn thuở của con người.', 2, '2021-03-30 00:00:00', '2021-03-30 00:00:00'),
(3, 'Lấy Nhau Vì Tình – Yêu là để hạnh phúc!', 'blog3.jpg', 'Mỗi tình tiết trong “Lấy nhau vì tình” là lịch sử giao thời, là văn hóa giao thoa, là phong kiến bó buộc, là Âu hóa bung ra, là trung dung nửa vời. Đây là cuốn tiểu thuyết tâm lý xã hội, có tả chân xã hội một cách sinh động và trung thành, có phân tích tâ', 'Việt Nam những năm 30 của thế kỷ XX là giai đoạn xã hội lai căng nửa mùa, thanh niên nam nữ chạy theo lối sống tân thời, muốn thoát ly tục lệ phong kiến, muốn chống lại truyền thống “cha mẹ đặt đâu con ngồi đấy”, đại đa số người trẻ đó cho rằng lấy nhau vì tình mới là hợp lý và mới có được hạnh phúc vợ chồng.\r\n\r\n[Vũ Trọng Phụng] Giông Tố: “Breaking bad” phiên bản Việt Nam thời Pháp Thuộc\r\nSố Đỏ – Đứa Con Đáng Tự Hào Của “Ông Vua Phóng Sự Đất Bắc” Vũ Trọng Phụng\r\nHôn nhân phong kiến trong buổi giao thời đã sinh ra không ít bi kịch, các tác giả của Tự lực văn đoàn đã lên án nó và góp phần đào thải nó. Tuy nhiên, tôn chỉ của trường phái văn học Tự lực văn đoàn vốn là bài phong kiến, bài Nho giáo, hô hào cải cách xã hội và ủng hộ Âu hóa, nên những tác phẩm của họ đắm chìm trong lãng mạn, say sưa trong diễm tình, như ru con người chứ không hề làm thức tỉnh con người.\r\n\r\nChỉ có Vũ Trọng Phụng với kim chỉ nam “tả chân” trong sự nghiệp cầm bút, là đủ khách quan, đủ bình tĩnh, và đủ sáng suốt để đặt ra câu hỏi: Hôn nhân vì tình yêu có phải bao giờ cũng tốt đẹp, cũng đem đến hạnh phúc hay không? Làm thế nào để dùng tình yêu mưu cầu hạnh phúc?\r\n\r\n“Lấy nhau vì tình” ra đời năm 1937 đã trả lời cho những câu hỏi này.\r\n\r\n', 2, '2021-03-30 00:00:00', '2021-03-30 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post_category`
--

CREATE TABLE `post_category` (
  `id` int(9) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ordinal_number` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `post_category`
--

INSERT INTO `post_category` (`id`, `name`, `ordinal_number`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Review', 'asc', 1, '2021-03-30 00:00:00', '2021-03-30 00:00:00'),
(2, 'Văn học Việt Nam', 'asc', 1, '2021-03-30 00:00:00', '2021-03-30 00:00:00'),
(3, 'Văn học nước ngoài', 'asc', 1, '2021-03-30 00:00:00', '2021-03-30 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(9) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` int(9) NOT NULL,
  `price` double NOT NULL,
  `decription` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `featured` int(1) NOT NULL,
  `id_user` int(9) NOT NULL,
  `id_productCategory` int(9) NOT NULL,
  `id_Author` int(9) NOT NULL,
  `id_Publisher` int(9) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `image`, `quantity`, `price`, `decription`, `detail`, `status`, `featured`, `id_user`, `id_productCategory`, `id_Author`, `id_Publisher`, `created_at`, `updated_at`) VALUES
(1, 'sách 01', '01.jpg', 50, 150000, 'mo ta ne', 'chi tiet ne', 1, 1, 1, 1, 1, 1, '2021-04-06 00:00:00', '2021-04-06 00:00:00'),
(2, 'sách 02', '02.jpg', 50, 200000, 'mo ta ne', 'chi tiet ne', 1, 1, 1, 8, 1, 2, '2021-04-06 00:00:00', '2021-04-06 00:00:00'),
(3, 'sách 03', '03.jpg', 50, 240000, 'mo ta ne', 'chi tiet ne', 1, 1, 1, 7, 1, 2, '2021-04-06 00:00:00', '2021-04-06 00:00:00'),
(4, 'sách 04', '04.png', 250, 390000, 'mo ta ne', 'chi tiet ne', 1, 1, 1, 5, 1, 2, '2021-04-06 00:00:00', '2021-04-06 00:00:00'),
(5, 'sách 05', '05.jpg', 20, 1440000, 'mo ta ne', 'chi tiet ne', 1, 1, 1, 2, 1, 2, '2021-04-06 00:00:00', '2021-04-06 00:00:00'),
(6, 'sách 06', '06.jpg', 250000, 240000, 'mo ta ne', 'chi tiet ne', 1, 1, 1, 5, 1, 1, '2021-04-06 00:00:00', '2021-04-06 00:00:00'),
(7, 'sách 07', '07.jpg', 40, 90000, 'mo ta ne', 'chi tiet ne', 1, 1, 1, 5, 1, 1, '2021-04-06 00:00:00', '2021-04-06 00:00:00'),
(8, 'sách 08', '08.jpg', 23, 230000, 'mo ta ne', 'chi tiet ne', 1, 1, 1, 5, 1, 1, '2021-04-06 00:00:00', '2021-04-06 00:00:00'),
(9, 'sách 09', '09.jpg', 90, 250000, 'mo ta ne', 'chi tiet ne', 1, 1, 1, 8, 1, 1, '2021-04-06 00:00:00', '2021-04-06 00:00:00'),
(10, 'sách 10', '10.jpg', 10, 235000, 'mo ta ne', 'chi tiet ne', 1, 1, 1, 7, 2, 1, '2021-04-06 00:00:00', '2021-04-06 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_category`
--

CREATE TABLE `product_category` (
  `id` int(9) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ordinal_number` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `featured` int(1) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product_category`
--

INSERT INTO `product_category` (`id`, `name`, `ordinal_number`, `status`, `featured`, `created_at`, `updated_at`) VALUES
(1, 'Trinh thám', 'asc', 1, 1, '2021-03-23 00:00:00', '2021-03-23 00:00:00'),
(2, 'Lãng mạn', 'asc', 1, 1, '2021-03-23 00:00:00', '2021-03-23 00:00:00'),
(3, 'Tâm Lý - Kỹ Năng Sống', 'asc', 1, 1, '2021-03-30 00:00:00', '2021-03-30 00:00:00'),
(4, 'Y Học - Sức Khỏe', 'asc', 1, NULL, '2021-03-30 00:00:00', '2021-03-30 00:00:00'),
(5, 'Kinh Tế - Quản Lý', 'asc', 1, NULL, '2021-03-30 00:00:00', '2021-03-30 00:00:00'),
(6, 'Marketing - Bán hàng', 'asc', 1, NULL, '2021-03-30 00:00:00', '2021-03-30 00:00:00'),
(7, 'Khoa Học - Kỹ Thuật', 'asc', 1, NULL, '2021-03-30 00:00:00', '2021-03-30 00:00:00'),
(8, 'Học Ngoại Ngữ', 'asc', 1, NULL, '2021-03-30 00:00:00', '2021-03-30 00:00:00'),
(9, 'Trinh Thám - Hình Sự', 'asc', 1, NULL, '2021-03-30 00:00:00', '2021-03-30 00:00:00'),
(10, 'Thể Thao - Nghệ Thuật', 'asc', 1, NULL, '2021-03-30 00:00:00', '2021-03-30 00:00:00'),
(11, 'Tử Vi - Phong Thủy', 'asc', 1, NULL, '2021-03-30 00:00:00', '2021-03-30 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `publisher`
--

CREATE TABLE `publisher` (
  `id` int(9) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ordinal_number` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `publisher`
--

INSERT INTO `publisher` (`id`, `name`, `ordinal_number`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Nhà Xuất Bản Tp. Hcm', 'asc', 1, '2021-04-06 00:00:00', '2021-04-06 00:00:00'),
(2, 'Nhà Xuất Bản Kim Đồng', 'asc', 1, '2021-04-06 00:00:00', '2021-04-06 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'master', '2021-03-30 00:00:00', '2021-03-30 00:00:00'),
(2, 'Product Management', '2021-04-08 13:46:53', '2021-04-08 13:46:53'),
(3, 'Post Management', '2021-04-08 13:46:53', '2021-04-08 13:46:53'),
(4, 'user', '2021-04-01 10:02:26', '2021-04-01 10:02:26');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `setting`
--

CREATE TABLE `setting` (
  `id` int(9) NOT NULL,
  `name` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `social` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id` int(9) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(9) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `id_role` int(9) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `avatar`, `firstName`, `lastName`, `gender`, `phone`, `birthday`, `id_role`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'pexels-abdullah-ghatasheh-1631677.jpg', 'phan', 'cong phung', 'nam', '000000000', '2021-04-02', 1, '2021-04-11 00:00:00', '2021-04-11 00:00:00'),
(2, 'product', 'e10adc3949ba59abbe56e057f20f883e', '163239651_1313626969008933_2458765687601489447_o.jpg', 'pham', 'xuan duc', 'nam', '0332220298', '2021-04-22', 2, '2021-04-11 00:00:00', '2021-04-11 00:00:00'),
(5, 'post', 'e10adc3949ba59abbe56e057f20f883e', 'pexels-irina-iriser-1379636.jpg', 'nguyen', 'dinh quy', 'nam', '222222222', '2021-04-13', 3, '2021-04-11 00:00:00', '2021-04-11 00:00:00');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_Product` (`id_Product`);

--
-- Chỉ mục cho bảng `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_order` (`id_order`);

--
-- Chỉ mục cho bảng `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_PostCategory` (`id_PostCategory`);

--
-- Chỉ mục cho bảng `post_category`
--
ALTER TABLE `post_category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_Author` (`id_Author`),
  ADD KEY `id_productCategory` (`id_productCategory`),
  ADD KEY `id_Publisher` (`id_Publisher`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_role` (`id_role`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `author`
--
ALTER TABLE `author`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `post`
--
ALTER TABLE `post`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `post_category`
--
ALTER TABLE `post_category`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `publisher`
--
ALTER TABLE `publisher`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_Product`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `orders` (`id`);

--
-- Các ràng buộc cho bảng `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`id_PostCategory`) REFERENCES `post_category` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_Author`) REFERENCES `author` (`id`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`id_productCategory`) REFERENCES `product_category` (`id`),
  ADD CONSTRAINT `product_ibfk_3` FOREIGN KEY (`id_Publisher`) REFERENCES `publisher` (`id`);

--
-- Các ràng buộc cho bảng `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
