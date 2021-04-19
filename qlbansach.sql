-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2021 at 08:14 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlbansach`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `id` int(9) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `gender` int(9) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id`, `fullname`, `gender`, `created_at`, `updated_at`) VALUES
(1, 'Ánh', 1, '2021-04-06 00:00:00', '2021-04-06 00:00:00'),
(2, 'Hạ', 0, '2021-04-06 00:00:00', '2021-04-06 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(9) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'mini-banner1.jpg', '2021-03-30 00:00:00', '2021-03-30 00:00:00'),
(2, 'mini-banner2.jpg', '2021-03-30 00:00:00', '2021-03-30 00:00:00'),
(3, 'mini-banner3.jpg', '2021-03-30 00:00:00', '2021-03-30 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(9) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `note` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `firstname`, `lastname`, `address`, `phone`, `email`, `note`, `created_at`, `updated_at`) VALUES
(11, 'Phùng', 'Phan Công', '56b/73 Lạc Long Quân, Phường 3, Quận 11', '0924159113', 'phungphancong1590@gmail.com', 'giao hàng giờ hành chính', '2021-04-20 01:13:25', '2021-04-20 01:13:25');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(9) NOT NULL,
  `order_id` int(9) NOT NULL,
  `product_id` int(9) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `product_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(3, 11, 3, 1, 240000, '2021-04-20 01:13:25', '2021-04-20 01:13:25'),
(4, 11, 2, 3, 200000, '2021-04-20 01:13:26', '2021-04-20 01:13:26'),
(5, 11, 8, 1, 230000, '2021-04-20 01:13:26', '2021-04-20 01:13:26');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(9) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL,
  `id_PostCategory` int(9) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `image`, `description`, `content`, `status`, `id_PostCategory`, `created_at`, `updated_at`) VALUES
(1, 'NHỮNG HỖN LOẠN CHẤT CHỒNG BÊN TRONG NGƯỜI TRẺ', 'nxbtre_full_14152021_091502.jpg', '<p><em>Bầy r&ugrave;a chồng chất</em>&nbsp;l&agrave; c&acirc;u chuyện của Aza Holmes, một c&ocirc; g&aacute;i 16 tuổi lu&ocirc;n loay hoay với căn bệnh t&acirc;m l&yacute; của m&igrave;nh v&agrave; bị mắc kẹt trong những suy nghĩ hỗn loạn của bản th&acirc', 'Thông qua nhân vật Aza, \"Bầy rùa chồng chất\" tái hiện bức tranh tâm lý những người trẻ đang sống trong thế giới phẳng.', 0, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, '60 GIÂY VÒNG QUANH THẾ GIỚI CÙNG NAS DAILY', 'nxbtre_full_16022021_090241.jpg', '<p>Năm 2016, Nas Daily, ch&agrave;ng trai người Israel gốc Palestine, với tấm bằng cử nh&acirc;n của Đại học Harvard, Mỹ, tr&ecirc;n tay, đ&atilde; từ bỏ c&ocirc;ng việc của m&igrave;nh tại một c&ocirc;ng ty nổi tiếng để đi v&ograve;ng quanh thế giới.</p>', 'Một chàng trai đã bỏ việc để đi khắp 64 quốc gia trên thế giới trong vòng 1.000 ngày. Mỗi ngày, anh đăng tải một video dài 60 giây về đất nước mình đến.', 0, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'NGÀY SÁCH VN LẦN 8 - NGÀY SÁCH VÀ BẢN QUYỀN THẾ GIỚI- BẠN CÓ THỂ THAM GIA!', 'nxbtre_full_16372021_093739.jpg', '<p>Tại H&agrave; Nội:</p>\r\n\r\n<p>1. Chương tr&igrave;nh triển l&atilde;m giới thiệu s&aacute;ch - Tại thư viện Quốc gia Việt Nam.</p>\r\n\r\n<p>Thời gian: 17-24/4/2021</p>\r\n\r\n<p>Địa điểm: 31 Tr&agrave;ng Thi, Ho&agrave;n Kiếm, H&agrave; Nội.</p>\r\n\r\n<p>2.&nbsp;', 'Trong khuôn khổ hoạt động chào mừng Ngày sách VN lần thứ 8 (21/4), Ngày Sách và Bản quyền Thế giới (23/4), NXB Trẻ mời bạn đọc cùng tham dự các hoạt động và sự kiện của NXB như sau:', 0, 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'ROBOT CÓ THAY THẾ ĐƯỢC NGƯỜI THẦY?', 'nxbtre_full_20372020_123727.jpg', '<p>Cuốn s&aacute;ch&nbsp;<em>Dạy học trong C&aacute;ch mạng c&ocirc;ng nghiệp lần thứ tư</em>&nbsp;do Nh&agrave; xuất bản Trẻ ấn h&agrave;nh (tựa gốc:&nbsp;<em>Teching in the Fourth Industrial Revolution,</em>&nbsp;tập hợp c&aacute;c b&agrave;i viết của s', 'Cuộc Cách mạng công nghiệp lần thứ tư với sự can dự ngày càng sâu của trí tuệ nhân tạo (AI) vào giáo dục, nảy sinh những băn khoăn: liệu nghề giáo truyền thống sẽ bị “giải tán”; liệu robot có thể thay thế người thầy?', 0, 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'TIỂU THUYẾT VỀ 18 NĂM LÀM QUAN CỦA NGUYỄN DU', 'nxbtre_full_29002020_100012.jpg', '<p><em>Truyện Kiều</em>&nbsp;l&agrave; t&aacute;c phẩm xuất sắc của nền văn học Việt Nam. Cảm thương cho số phận của n&agrave;ng Kiều, người đọc ở nhiều thế hệ c&agrave;ng mến phục t&agrave;i năng của Nguyễn Du.</p>\r\n\r\n<p>Sinh trưởng trong thời kỳ m&agrav', 'Tác phẩm viết về đề tài lịch sử không chỉ đề cập các sự kiện diễn ra trong quá khứ. Bằng sự nhạy cảm của mình, nhà văn tái hiện bi kịch của nhân tài thời loạn.', 0, 11, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'CUỐN SÁCH BÁN CHẠY 6 TRIỆU BẢN TRÊN THẾ GIỚI ĐƯỢC PHÁT HÀNH TIẾNG VIỆT', 'nxbtre_full_19362020_103640.jpg', '<p>Nhưng khi một vụ &aacute;n mạng xảy ra, tất cả đổ dồn v&agrave;o c&ocirc; b&eacute; hoang d&atilde; v&agrave; đơn độc ấy. Lấy vụ &aacute;n l&agrave;m trung t&acirc;m cuốn s&aacute;ch, t&aacute;c giả Delia Owens dẫn dắt người đọc kh&aacute;m ph&aacute; ', 'Cuốn sách \"Xa ngoài kia nơi loài tôm hát\" của Delia Owens là một tiểu thuyết lãng mạn đầy ắp hơi thở thiên nhiên đẹp đẽ và đau đớn. Cuốn sách Xa ngoài kia nơi loài tôm hát (Tên gốc: Where the Crawdads Sing) lấy bối cảnh những năm 1950 về cô gái trẻ Kya Clark ở Bắc Caroline, nước Mỹ. Kya được biết với cái tên \"Cô gái đầm lầy\" bởi cô sống một mình giữa thiên nhiên, chỉ kết nối với một vài người.', 0, 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'NGUYỄN NHẬT ÁNH, CON CHIM XANH TÌNH NGHĨA VÀ CÁ TÍNH SÀI GÒN', 'nxbtre_full_11232020_022301.jpg', '<p>Trong buổi ra mắt s&aacute;ch h&ocirc;m 10-11, t&aacute;c giả Nguyễn Nhật &Aacute;nh b&agrave;y tỏ sự h&agrave;o hứng khi đ&atilde; hơn chục năm &ocirc;ng mới lại lấy bối cảnh S&agrave;i G&ograve;n - TP.HCM cho một truyện d&agrave;i.</p>\r\n\r\n<p>&quot;S&', 'Con chim xanh biếc bay về - truyện dài mới của Nguyễn Nhật Ánh chính thức phát hành hôm nay 11-11, đưa người đọc trở lại bối cảnh Sài Gòn hiện tại với những mảng đời tình - nghĩa đan nhau.', 0, 11, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, ' TỪ MIẾNG NGON ĐẾN MIỀN NHỚ', 'nxbtre_full_16032020_100332.jpg', '<p>Tuy nhi&ecirc;n chỉ cần bắt đầu bằng c&aacute;ch lật ngẫu nhi&ecirc;n một tản văn bất kỳ trong&nbsp;<em>Ăn để nhớ</em>, người đọc dễ bị cuốn h&uacute;t bởi lời văn nữ t&iacute;nh của t&aacute;c giả Kim Em.</p>\r\n\r\n<p>C&aacute;c m&oacute;n ăn d&acirc;n d', 'Với \"Ăn để nhớ\", người đọc được “nếm” miếng ngon đậm vị miền Trung qua lời văn tinh tế. Nếu chỉ đọc tựa và mục lục, người ta dễ nhầm lẫn Ăn để nhớ là tập tản văn kể về những trải nghiệm ẩm thực riêng tư của tác giả.', 0, 11, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'DU HÀNH VÀO VŨ TRỤ - HIỂU BẢN CHẤT CUỘC SỐNG', 'nxbtre_full_27502020_095019.jpg', '<p>Một đ&ecirc;m</p>\r\n\r\n<p>&ldquo;Trong vũ trụ, kh&ocirc;ng c&oacute; g&igrave; l&agrave; bất động, mọi thứ lu&ocirc;n thay đổi, mọi thứ đều chuyển động, mọi thứ đều tiến h&oacute;a, mọi thứ đều phi thường. Sở dĩ ch&uacute;ng ta kh&ocirc;ng cảm nhận được ', 'NXBTRE - Cái học về vũ trụ không phải là cái học xa rời thực tế. Hiểu về vũ trụ cũng có nghĩa là hiểu về bản chất cuộc sống của chúng ta. Những tựa hay trong tủ sách Khoa học - Khám phá dưới đây đều là những tác phẩm khoa học nổi tiếng trong nước và trên thế giới, giới thiệu đến bạn đọc những kiến thức mới và những nỗ lực không ngừng của bao thế hệ trong hành trình nghiên cứu khoa học.', 0, 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'NHỮNG CUỐN SÁCH HAY CỦA STEPHEN HAWKING AI CŨNG NÊN ĐỌC', 'nxbtre_full_08092020_090953.jpg', '<p>Stephen William Hawking l&agrave; một nh&agrave; vật l&yacute; l&yacute; thuyết, vũ trụ học, t&aacute;c giả viết s&aacute;ch khoa học thường thức người Anh, nguy&ecirc;n Gi&aacute;m đốc Nghi&ecirc;n cứu tại Trung t&acirc;m Vũ trụ học l&yacute; thuyết t', 'Stephen Hawking nổi tiếng với việc viết những cuốn sách phổ biến khoa học trong đó ông thảo luận lý thuyết của ông cũng như vũ trụ học nói chung.', 0, 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'KIMI RAIKKONEN - TAY ĐUA VÔ ĐỊCH F1', 'nxbtre_full_02492020_084945.jpg', '<p>Kh&ocirc;ng một m&eacute;t n&agrave;o</p>\r\n\r\n<p>Năm 2017, Grand Prix Malaysia.</p>\r\n\r\n<p>Xe giật mạnh về ph&iacute;a trước. Ngay sau khi họ ra khỏi đoạn đường nối kh&aacute;ch sạn v&agrave;o xa lộ, Kimi tăng tốc l&ecirc;n hơn 100km/h. Tay tr&aacute;i a', 'NXBTRE- Kimi Raikkonen là nhà vô địch môn đua xe F1 người Phần Lan. Anh bắt đầu sự nghiệp đua xe F1 ở Sauber và đầu quân cho các đội McLaren, Ferrari, Lotus. Quyển sách Kimi Raikkonen - Tay đua vô địch F1 là ký sự nhân vật, theo chân Kimi trên đường đua và cả trong đời thường để cho người đọc thấy được những điều phía sau ánh hào quang của một tay đua chuyên nghiệp.', 0, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'NHÀ VĂN LÊ VĂN NGHĨA: TÔI GHI LẠI NHỮNG ĐIỀU TÔI BIẾT VỀ MỘT SÀI GÒN. ', 'nxbtre_full_06212020_102128.jpg', '<p><strong>Nh&agrave; văn L&ecirc; văn Nghĩa:&nbsp;</strong>C&acirc;u hỏi nầy c&oacute; hai phần. Xin được trả lời từng phần a) Thực ra, t&ocirc;i cũng đ&acirc;u biết nhiều về S&agrave;ig&ograve;n đ&acirc;u v&igrave; S&agrave;i g&ograve;n rất lớn lại mu&o', 'Sài Gòn – Chuyện xưa mà chưa cũ – tập tạp bút mới nhất của nhà văn Lê Văn Nghĩa vừa được NXB Trẻ phát hành trong Tháng ba sách Trẻ 2020 - cùng với chùm sách về Sài Gòn của ông, giúp bạn đọc trẻ tuổi hiểu về sài Gòn ở một góc độ rất khác, và người đã lớn, thì bâng khuâng nhớ về một sài Gòn xưa. Nhà văn Lê Văn Nghĩa không tham vọng tái hiện hết không gian văn hóa Sài Gòn xưa. Ông cũng tự nhận, Sài Gòn với ông, chỉ là Chợ Lớn, là con đường nhỏ Phạm Văn Chí, là trường Tiểu học Bình Tây, là bến Bình Đông với những cái \"chành\" (kho) chứa gạo thương hồ đẫm mồ hôi những người làm nghề vác gạo, là những căn nhà Hoa nhưng có kiến trúc theo kiểu Pháp.', 0, 11, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'VƯƠNG HỒNG SỂN VẪN QUYẾN RŨ VỀ CHUYỆN ĐỊA DANH VÀ LỊCH SỬ NAM KỲ', 'nxbtre_full_12172020_011753.jpg', '<p>Cụ&nbsp;<a href=\"https://tuoitre.vn/vuong-hong-sen.html\" target=\"_blank\">Vương Hồng Sển</a>&nbsp;viết quyển n&agrave;y từ năm 1986, đến nay đ&atilde; ng&oacute;t 34 năm s&aacute;ch mới xuất bản, đ&acirc;y cũng l&agrave; một c&acirc;u chuyện.</p>\r\n\r\n<p>', 'Tháng 3 năm nay, tên tuổi Vương Hồng Sển trở lại với bạn đọc qua quyển di cảo Chuyện cũ ở Sốc Trăng.Lại bắt gặp giọng kể chuyện nhẩn nha dây cà ra dây muống mà vẫn rất duyên của ông già gốc lục tỉnh. Qua từng trang sách, người đọc cảm như mình đang đối diện với một ông già vừa \"lợi hại\" vừa xuề xòa, thế nên sẵn sàng lót dép ngồi hóng chuyện. Mà toàn chuyện hay, chuyện có ích cho sự học.', 0, 11, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'ĐỒNG HỒ XƯƠNG : VỪA THỰC VỪA ẢO PHẢN ÁNH HƠI THỞ THỜI ĐẠI CỦA CHÚNG TA VỚI NHIỀU ĐIỀU ĐÁNG SUY NGẪM...', 'nxbtre_full_16282020_012837.jpg', '<p>V&agrave;o năm 1984 khi bạn n&oacute;i với ai đ&oacute; rằng con người c&oacute; thể tạo ra một thiết bị gi&uacute;p gọi v&agrave; nh&igrave;n thấy nhau ở bất kỳ nơi đ&acirc;u, bất kỳ l&uacute;c n&agrave;o họ muốn. Chắc chắn nhiều người nghĩ đ&oacute; ', 'Khi khép lại trang cuối cùng của đồng hồ xương mình nhận ra rằng thật khó để ai đó vạch ra một kế hoạch chi tiết cho cuộc đời. Vì chúng ta không thể biết được điều gì sẽ xảy đến vào ngày mai. Điều duy nhất chắc chắn xảy ra là quỹ thời gian của mỗi người chúng ta sẽ cạn dần và rồi chiếc đồng hồ của mỗi người cũng sẽ điểm giây cuối cùng. Nhưng đừng sợ hãi, hãy can đảm sống trọn vẹn theo cách của mình. Bởi mỗi ngày trôi qua đều có ý nghĩa riêng của nó cho dù đó là ngày tồi tệ như thế nào đi nữa. Ai rồi cũng chết cho nên nếu sự sống là một phước lành thì cái chết cũng nên được xem là một ân huệ. Bất tử đâu hẳn là hạnh phúc.', 0, 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'GÁY NGƯỜI THÌ LẠNH', 'nxbtre_full_20592019_015921.jpg', '<p>&nbsp;</p>\r\n\r\n<p>Hồi m&igrave;nh c&ograve;n học cấp Ba, c&ocirc; gi&aacute;o m&igrave;nh đ&atilde; từng giới thiệu cho m&igrave;nh về s&aacute;ch của c&ocirc; Tư. Nhờ lời giới thiệu ấy, m&igrave;nh đ&atilde; bắt đầu t&igrave;m đọc c&aacute;c tựa s&aacu', 'Khi cầm trên tay cuốn sách, bất giác mình có cảm giác như bản thân đang lạc vào một cánh đồng... màu xanh, cánh đồng ấy hoang sơ, trống trải, và “lạnh”. Cách trang trí bìa của Trẻ khiến mình cảm giác rằng, rồi khi mình lật tấm bìa này ra, mỗi trang viết sẽ là một nỗi xúc động.', 0, 11, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'XUẤT BẢN XUẤT BẢN  Cuốn tiểu thuyết dã sử về tài nữ Đoàn Thị Điểm', 'sach_nstgb.jpg', '<p><a href=\"https://zingnews.vn/xuat-ban.html\">XUẤT BẢN</a>&nbsp;<a href=\"https://zingnews.vn/tin-tuc-xuat-ban.html\">XUẤT BẢN</a></p>\r\n\r\n<h1>Cuốn tiểu thuyết d&atilde; sử về t&agrave;i nữ Đo&agrave;n Thị Điểm</h1>\r\n\r\n<ul>\r\n	<li><a href=\"https://zingnews.v', 'Những câu chuyện xoay quanh đề tài người nữ sĩ trong sử Việt được chia sẻ trong buổi giao lưu ra mắt sách “Nữ sĩ thời gió bụi” diễn ra tại Thư viện Quốc gia chiều ngày 16/4.', 0, 11, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'Tuần lễ sách đầu tiên tại thành phố Thủ Đức', 'Ngay_Sach_TP.HCM_Zing_1_2.jpg', '<p>Tuần lễ s&aacute;ch hưởng ứng Ng&agrave;y s&aacute;ch Việt Nam lần t&aacute;m tại TP.HCM do Sở Th&ocirc;ng tin v&agrave; Truyền th&ocirc;ng TP.HCM phối hợp UBND th&agrave;nh phố Thủ Đức, Cục Văn thư v&agrave; Lưu trữ Nh&agrave; nước (Bộ Nội vụ), Th&agr', 'Hoạt động trưng bày, triển lãm sách, ảnh lần đầu tiên được tổ chức tại thành phố Thủ Đức (TP.HCM), kể từ khi thành phố này thành lập.', 0, 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, '7 cuốn sách hay có khả năng thay đổi cuộc đời lại đang sale cực rẻ, bạn hãy tranh thủ mua ngay', 'Dac-nhan-tam.jpg', '<p>S&aacute;ch vẫn lu&ocirc;n l&agrave; kho t&agrave;ng qu&yacute; b&aacute;u gi&uacute;p ch&uacute;ng ta t&iacute;ch lũy kiến thức, thay đổi tư duy, th&aacute;i độ sống&hellip; Nhiều cuốn s&aacute;ch được xếp v&agrave;o diện kh&ocirc;ng thể kh&ocirc;ng đ', 'Đây là 7 cuốn sách thay đổi tư duy bán rất chạy mà bạn không thể bỏ qua.', 0, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'Sách là thứ tốn tiền và tốn thời gian, nếu không biết cách đọc đúng này, bạn đừng mua sách nữa!', 'cuon-sach-danh-cho-con-gai-4.jpg', '<p>C&oacute; khi n&agrave;o bạn chỉ nh&igrave;n tr&aacute;i chanh v&agrave; rồi biết c&aacute;ch l&agrave;m nước chanh kh&ocirc;ng?</p>\r\n\r\n<p><strong><em>Thường l&agrave;, kh&ocirc;ng!</em></strong></p>\r\n\r\n<p>Vậy điều g&igrave; đ&atilde; khiến bạn nghĩ rằ', 'Tôi không khuyến khích bạn chia sách dựa trên chương hay là chủ đề, bởi vì độ dài của các chương không giống nhau, có chương dài hơn và ngược lại.', 0, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `post_category`
--

CREATE TABLE `post_category` (
  `id` int(9) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_category`
--

INSERT INTO `post_category` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Khám Phá', 1, '2021-04-19 21:29:24', '2021-04-19 16:30:54'),
(5, 'Du Lịch', 1, '2021-04-19 21:31:21', '2021-04-19 16:32:16'),
(6, 'Tâm Lý', 1, '2021-04-19 21:32:36', '2021-04-19 16:32:48'),
(7, 'Tình Cảm', 1, '2021-04-19 21:48:39', '2021-04-19 16:48:56'),
(8, 'Hài Hước', 1, '2021-04-19 21:49:22', '2021-04-19 16:49:32'),
(9, 'Thông Báo', 1, '2021-04-19 22:04:41', '2021-04-19 17:05:07'),
(10, 'Khoa Học', 1, '2021-04-19 22:09:33', '2021-04-19 17:09:41'),
(11, 'Văn Học Việt Nam', 1, '2021-04-19 22:17:15', '2021-04-19 17:17:24'),
(14, 'Ngôn Tình', 1, '2021-04-19 22:54:23', '2021-04-19 17:58:53');

-- --------------------------------------------------------

--
-- Table structure for table `product`
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
  `id_productCategory` int(9) NOT NULL,
  `id_Author` int(9) NOT NULL,
  `id_Publisher` int(9) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `image`, `quantity`, `price`, `decription`, `detail`, `status`, `featured`, `id_productCategory`, `id_Author`, `id_Publisher`, `created_at`, `updated_at`) VALUES
(1, 'sách 01', '01.jpg', 1, 150000, 'mo ta ne', 'chi tiet ne', 1, 1, 1, 1, 1, '2021-04-06 00:00:00', '2021-04-06 00:00:00'),
(2, 'sách 02', '02.jpg', 1, 200000, 'mo ta ne', 'chi tiet ne', 1, 1, 8, 1, 2, '2021-04-06 00:00:00', '2021-04-06 00:00:00'),
(3, 'sách 03', '03.jpg', 1, 240000, 'mo ta ne', 'chi tiet ne', 1, 1, 7, 1, 2, '2021-04-06 00:00:00', '2021-04-06 00:00:00'),
(4, 'sách 04', '04.png', 1, 390000, 'mo ta ne', 'chi tiet ne', 1, 1, 5, 1, 2, '2021-04-06 00:00:00', '2021-04-06 00:00:00'),
(5, 'sách 05', '05.jpg', 1, 1440000, 'mo ta ne', 'chi tiet ne', 1, 1, 2, 1, 2, '2021-04-06 00:00:00', '2021-04-06 00:00:00'),
(6, 'sách 06', '06.jpg', 1, 240000, 'mo ta ne', 'chi tiet ne', 1, 1, 5, 1, 1, '2021-04-06 00:00:00', '2021-04-06 00:00:00'),
(7, 'sách 07', '07.jpg', 1, 90000, 'mo ta ne', 'chi tiet ne', 1, 1, 5, 1, 1, '2021-04-06 00:00:00', '2021-04-06 00:00:00'),
(8, 'sách 08', '08.jpg', 1, 230000, 'mo ta ne', 'chi tiet ne', 1, 1, 5, 1, 1, '2021-04-06 00:00:00', '2021-04-06 00:00:00'),
(9, 'sách 09', '09.jpg', 1, 250000, 'mo ta ne', 'chi tiet ne', 1, 1, 8, 1, 1, '2021-04-06 00:00:00', '2021-04-06 00:00:00'),
(10, 'sách 10', '10.jpg', 1, 235000, 'mo ta ne', 'chi tiet ne', 1, 1, 7, 2, 1, '2021-04-06 00:00:00', '2021-04-06 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` int(9) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `featured` int(1) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `name`, `status`, `featured`, `created_at`, `updated_at`) VALUES
(1, 'Trinh thám', 1, 1, '2021-03-23 00:00:00', '2021-03-23 00:00:00'),
(2, 'Lãng mạn', 1, 1, '2021-03-23 00:00:00', '2021-03-23 00:00:00'),
(3, 'Tâm Lý - Kỹ Năng Sống', 1, 1, '2021-03-30 00:00:00', '2021-03-30 00:00:00'),
(4, 'Y Học - Sức Khỏe', 1, 1, '2021-03-30 00:00:00', '2021-03-30 00:00:00'),
(5, 'Kinh Tế - Quản Lý', 1, 1, '2021-03-30 00:00:00', '2021-03-30 00:00:00'),
(6, 'Marketing - Bán hàng', 1, 1, '2021-03-30 00:00:00', '2021-03-30 00:00:00'),
(7, 'Khoa Học - Kỹ Thuật', 1, 1, '2021-03-30 00:00:00', '2021-03-30 00:00:00'),
(8, 'Học Ngoại Ngữ', 1, 1, '2021-03-30 00:00:00', '2021-03-30 00:00:00'),
(9, 'Trinh Thám - Hình Sự', 1, 1, '2021-03-30 00:00:00', '2021-03-30 00:00:00'),
(10, 'Thể Thao - Nghệ Thuật', 1, 1, '2021-03-30 00:00:00', '2021-03-30 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `id` int(9) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Nhà Xuất Bản Tp. Hcm', 1, '2021-04-06 00:00:00', '2021-04-06 00:00:00'),
(2, 'Nhà Xuất Bản Kim Đồng', 1, '2021-04-06 00:00:00', '2021-04-06 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'master', '2021-03-30 00:00:00', '2021-03-30 00:00:00'),
(2, 'Product Management', '2021-04-08 13:46:53', '2021-04-08 13:46:53'),
(3, 'Post Management', '2021-04-08 13:46:53', '2021-04-08 13:46:53'),
(4, 'user', '2021-04-01 10:02:26', '2021-04-01 10:02:26');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
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

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `name`, `logo`, `company`, `address`, `email`, `phone`, `social`, `created_at`, `updated_at`) VALUES
(1, 'Web sex', 'aa', '', '56', 'asd@gmail.com', '1234', 'fb', '2021-04-19 20:13:25', '2021-04-19 20:13:25');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id` int(9) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
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
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `avatar`, `firstName`, `lastName`, `gender`, `phone`, `birthday`, `id_role`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'pexels-abdullah-ghatasheh-1631677.jpg', 'phan', 'cong phung', 'nam', '000000000', '2021-04-02', 1, '2021-04-11 00:00:00', '2021-04-11 00:00:00'),
(2, 'product', 'e10adc3949ba59abbe56e057f20f883e', '163239651_1313626969008933_2458765687601489447_o.jpg', 'pham', 'xuan duc', 'nam', '0332220298', '2021-04-22', 2, '2021-04-11 00:00:00', '2021-04-11 00:00:00'),
(5, 'post', 'e10adc3949ba59abbe56e057f20f883e', 'pexels-irina-iriser-1379636.jpg', 'nguyen', 'dinh quy', 'nam', '222222222', '2021-04-13', 3, '2021-04-11 00:00:00', '2021-04-11 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_PostCategory` (`id_PostCategory`);

--
-- Indexes for table `post_category`
--
ALTER TABLE `post_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_Author` (`id_Author`),
  ADD KEY `id_productCategory` (`id_productCategory`),
  ADD KEY `id_Publisher` (`id_Publisher`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_role` (`id_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `post_category`
--
ALTER TABLE `post_category`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`id_PostCategory`) REFERENCES `post_category` (`id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_Author`) REFERENCES `author` (`id`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`id_productCategory`) REFERENCES `product_category` (`id`),
  ADD CONSTRAINT `product_ibfk_3` FOREIGN KEY (`id_Publisher`) REFERENCES `publisher` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
