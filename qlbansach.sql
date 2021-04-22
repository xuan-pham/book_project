-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2021 at 06:34 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(13, 'Lam', 'Tran Quoc', '273/50', '0909009009', 'quoclam123@gmail.com', 'note ', '2021-04-22 11:03:06', '2021-04-22 11:03:06'),
(14, 'Lam', 'Quoc', 'dia chi!!', '0903003003', 'quoclam@gmail.com', 'ghi chu!!!', '2021-04-22 11:08:50', '2021-04-22 11:08:50');

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
(8, 13, 15, 5, 119.9, '2021-04-22 11:03:06', '2021-04-22 11:03:06'),
(9, 13, 17, 2, 99.7, '2021-04-22 11:03:06', '2021-04-22 11:03:06'),
(10, 14, 22, 10, 59.3, '2021-04-22 11:08:50', '2021-04-22 11:08:50');

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
(14, 'Ngôn Tình', 1, '2021-04-19 22:54:23', '2021-04-19 17:58:53'),
(16, 'Cổ Tích', 1, '2021-04-20 12:43:01', '2021-04-20 07:49:28');

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
(15, 'Đàn Ông Sao Hỏa Đàn Bà Sao Kim', 'danongsaohoa.jpg', 1, 119.9, 'Ngày xửa ngày xưa, những người sao Hỏa và sao Kim đã gặp gỡ, yêu nhau và sống hạnh phúc bởi họ tôn trọng và chấp nhận mọi điều khác biệt. Rồi họ đến Trái Đất và chứng lãng quên đã xảy ra: Họ quên rằng họ đến từ những hành tinh khác.Hiểu biết về gi...\r\n', '<p><strong>Hiểu biết về giới t&iacute;nh gi&uacute;p ch&uacute;ng ta th&ecirc;m khoan dung v&agrave; biết tha thứ khi ai đ&oacute; kh&ocirc;ng đ&aacute;p lại theo c&aacute;ch m&agrave; ta mong đợi</strong></p>\r\n\r\n<p><strong>T&igrave;nh chỉ đẹp khi c&ograve;n dang dở</strong><br />\r\n<strong>Cưới nhau về nham nhở lắm em ơ&nbsp;</strong></p>\r\n\r\n<p>Bởi kết h&ocirc;n kh&ocirc;ng phải l&agrave; kết th&uacute;c một cuộc t&igrave;nh, m&agrave; n&oacute; mới l&agrave; mở đầu cho rất nhiều những giai đoạn kh&oacute; khăn m&agrave; cặp vợ chồng n&agrave;o cũng phải trải qua. Bạn phải biết c&aacute;ch th&iacute;ch ứng v&agrave; đối ph&oacute; với n&oacute; để kh&ocirc;ng rơi v&agrave;o t&igrave;nh cảnh h&ocirc;n nh&acirc;n đổ vỡ.</p>\r\n\r\n<p><img alt=\"Đàn Ông Sao Hỏa Đàn Bà Sao Kim\" src=\"https://salt.tikicdn.com/ts/tmp/c3/61/e5/a2683e21f4854f3b0d9f1621f4724653.jpg\" style=\"border-style:none; height:499px; width:750px\" /></p>\r\n\r\n<p><strong>Bạn sẽ rất dễ &#39;VỠ MỘNG&#39; sau khi kết h&ocirc;n</strong></p>\r\n\r\n<p>Cả hai sẽ bắt đầu ph&aacute;t hiện ra nhiều thứ ở người kia sau khi về sống chung một nh&agrave;. Nếu kh&ocirc;ng chuẩn bị cho m&igrave;nh t&acirc;m thế tốt v&agrave; sự th&iacute;ch ứng nhanh, rất c&oacute; thể cả hai sẽ tạo ra sự&hellip; thất vọng v&agrave; vỡ mộng trong nhau.</p>\r\n\r\n<p><strong>Cuộc sống h&ocirc;n nh&acirc;n trở n&ecirc;n nh&agrave;m ch&aacute;n</strong></p>\r\n\r\n<p>Khi đ&atilde; qu&aacute; hiểu nhau về t&iacute;nh c&aacute;ch, ch&iacute;nh th&oacute;i quen h&agrave;ng ng&agrave;y, lặp đi lặp lại tạo ra sự nh&agrave;m ch&aacute;n. Trong mối quan hệ vợ chồng c&oacute; thể gia tăng nhiều vụ c&atilde;i v&atilde; v&igrave; những l&iacute; do như khủng hoảng kinh tế, c&aacute;ch chăm s&oacute;c nu&ocirc;i dạy con c&aacute;i, c&ocirc;ng việc v&agrave; đặc biệt l&agrave; chuyện cảm thấy&hellip; t&igrave;nh y&ecirc;u phai nhạt.</p>\r\n\r\n<p><strong>Kh&ocirc;ng hiểu, kỳ vọng th&aacute;i qu&aacute; v&agrave;o&nbsp; bạn đời</strong></p>\r\n\r\n<p>Ai cũng c&oacute; những mong muốn ri&ecirc;ng về một nửa của m&igrave;nh nhưng đ&ocirc;i khi ch&iacute;nh sự k&igrave; vọng th&aacute;i qu&aacute; l&agrave;m họ dễ rơi v&agrave;o trạng th&aacute;i thất vọng, ch&aacute;n chường. Bạn cảm thấy kh&ocirc;ng hiểu đối phương, cảm thấy họ kh&ocirc;ng được như m&igrave;nh mong muốn, v&agrave; những cuộc c&atilde;i v&atilde; bắt đầu diễn ra thường xuy&ecirc;n hơn.</p>\r\n\r\n<p><img alt=\"Đàn Ông Sao Hỏa Đàn Bà Sao Kim\" src=\"https://salt.tikicdn.com/ts/tmp/1c/58/3e/56a19f84f1b3131292b3b5a91bbd2950.jpg\" style=\"border-style:none; height:499px; width:750px\" /></p>\r\n\r\n<p><strong>Muốn g&igrave;n giữ hạnh ph&uacute;c trọn vẹn, cần lắm những sự thấu hiểu, cảm th&ocirc;ng, chia sẻ v&agrave; y&ecirc;u thương nhau</strong></p>\r\n\r\n<ul>\r\n	<li>V&igrave; đ&agrave;n &ocirc;ng v&agrave; đ&agrave;n b&agrave; đến từ hai h&agrave;nh tinh kh&aacute;c nhau, h&atilde;y t&ocirc;n trọng v&agrave; chấp nhận mọi điều kh&aacute;c biệt.</li>\r\n	<li>Bạn kh&ocirc;ng thể v&agrave; cũng kh&ocirc;ng n&ecirc;n cố thay đổi người bạn đời của m&igrave;nh. Thay đổi l&agrave; việc của họ, c&ograve;n việc của bạn l&agrave; thay đổi c&aacute;ch giao tiếp, phản ứng v&agrave; đối đ&aacute;p với người bạn đời của m&igrave;nh.</li>\r\n	<li>Ch&uacute;ng ta dễ d&agrave;ng đổ lỗi của m&igrave;nh l&ecirc;n đầu bạn đời hơn l&agrave; nhận thấy sai lầm của ch&iacute;nh m&igrave;nh. V&igrave; vậy, h&atilde;y lắng nghe để tận hưởng cuộc sống h&ocirc;n nh&acirc;n ngọt ng&agrave;o như l&uacute;c mới y&ecirc;u<img alt=\"Đàn Ông Sao Hỏa Đàn Bà Sao Kim\" src=\"https://salt.tikicdn.com/ts/tmp/aa/18/9b/b5a9ab2f3a08f9a71e5e3ce86ef4f060.jpg\" style=\"border-style:none; height:499px; width:750px\" /></li>\r\n</ul>\r\n\r\n<p><strong>Đ&Agrave;N &Ocirc;NG SAO HỎA - Đ&Agrave;N B&Agrave; SAO KIM</strong></p>\r\n\r\n<p>Để cảm thấy dễ chịu hơn, người sao Hỏa n&aacute;u m&igrave;nh trong k&eacute;n để tự vấn về rắc rối của m&igrave;nh. Người sao Kim lại cảm thấy nhẹ nh&otilde;m hơn khi ai đ&oacute; sẻ chia những vấn đề c&ugrave;ng họ. Đ&agrave;n &ocirc;ng giữ k&iacute;n những b&iacute; mật trong khi phụ nữ lại rất th&iacute;ch b&agrave;y tỏ</p>\r\n\r\n<p>Đ&agrave;n &ocirc;ng c&oacute; động lực v&agrave; tr&agrave;n đầy sức mạnh khi họ cảm thấy được cần đến. C&ograve;n phụ nữ th&igrave; c&oacute; động lực v&agrave; sẵn s&agrave;ng h&agrave;nh động khi họ cảm thấy được y&ecirc;u thương. L&agrave;m thế n&agrave;o để động vi&ecirc;n người kh&aacute;c giới? Cuốn s&aacute;ch HAY NHẤT MỌI THỜI ĐẠI về thấu hiểu người kh&aacute;c giới v&agrave; tạo hạnh ph&uacute;c trong h&ocirc;n nh&acirc;n, gia đ&igrave;nh.</p>\r\n\r\n<p>Ng&ocirc;n ngữ của đ&agrave;n &ocirc;ng sao Hỏa v&agrave; đ&agrave;n b&agrave; sao Kim c&oacute; từ ngữ giống nhau nhưng c&aacute;ch sử dụng lại mang tới những &yacute; nghĩa kh&aacute;c nhau. Với phụ nữ, để diễn đạt trọn vẹn cảm x&uacute;c của m&igrave;nh họ thường sử dụng lối n&oacute;i cường điệu, ẩn dụ v&agrave; kh&aacute;i qu&aacute;t. Giải quyết những bất đồng ng&ocirc;n ngữ</p>\r\n\r\n<p>Khi đ&agrave;n &ocirc;ng y&ecirc;u phụ nữ, nhưng theo định kỳ, anh ấy cần xa c&aacute;ch trước khi c&oacute; thể gần gũi hơn. C&ograve;n với phụ nữ, l&ograve;ng tự t&ocirc;n của họ d&acirc;ng l&ecirc;n v&agrave; hạ xuống giống như một con s&oacute;ng. Khi đến tận c&ugrave;ng, n&oacute; l&agrave; sắp xếp lại cảm x&uacute;c. Đ&agrave;n &ocirc;ng giống như d&acirc;y cao su, đ&agrave;n b&agrave; lại như những con s&oacute;ng</p>\r\n\r\n<p>101 c&aacute;ch để thấu hiểu v&agrave; ghi được những điểm số cao trong mắt người kh&aacute;c giới. Rất dễ d&agrave;ng nếu bạn sở hữu cuốn s&aacute;ch &quot;Đ&agrave;n &ocirc;ng sao Hỏa đ&agrave;n b&agrave; sao Kim&quot; trong tay. C&aacute;ch để d&agrave;nh được thiện cảm với người kh&aacute;c giới</p>\r\n\r\n<p>Một mối quan hệ cũng giống như một khu vườn, để ph&aacute;t triển, n&oacute; phải được tưới nước thường xuy&ecirc;n. Cũng tương tự như thế, để g&igrave;n giữ sự kỳ diệu của t&igrave;nh y&ecirc;u tồn tại, ch&uacute;ng ta hiểu biết v&agrave; nu&ocirc;i dưỡng những nhu cầu đặt biệt của t&igrave;nh y&ecirc;u.</p>\r\n\r\n<p><strong>&quot;Đ&Agrave;N &Ocirc;NG SAO HỎA - Đ&Agrave;N B&Agrave; SAO KIM&quot;&nbsp; Đ&Atilde; ĐẾN TAY H&Agrave;NG NG&Agrave;N ĐỘC GIẢ V&Agrave; NHẬN ĐƯỢC V&Ocirc; SỐ NHỮNG PHẢN HỒI T&Iacute;CH CỰC, KHEN NGỢI CUỐN S&Aacute;CH</strong></p>\r\n', 1, 1, 1, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Cân Bằng Cảm Xúc, Cả Lúc Bão Giông', 'canbangcamxuc.jpg', 1, 57.6, 'Một ngày, chúng ta có khoảng 16 tiếng tiếp xúc với con người, công việc, các nguồn thông tin từ mạng xã hội, loa đài báo giấy… Việc này mang đến cho bạn vô vàn cảm xúc, cả tiêu cực lẫn tích cực...', '<p>Một ng&agrave;y, ch&uacute;ng ta c&oacute; khoảng 16 tiếng tiếp x&uacute;c với con người, c&ocirc;ng việc, c&aacute;c nguồn th&ocirc;ng tin từ mạng x&atilde; hội, loa đ&agrave;i b&aacute;o giấy&hellip; Việc n&agrave;y mang đến cho bạn v&ocirc; v&agrave;n cảm x&uacute;c, cả ti&ecirc;u cực lẫn t&iacute;ch cực.<br />\r\nBạn c&oacute; thể thấy vui khi nh&igrave;n một em b&eacute; đến trường nhưng 5 ph&uacute;t sau đ&atilde; nổi cơn tam b&agrave;nh khi bị đứa trẻ con đi xe đạp đ&acirc;m sầm v&agrave;o lại c&ograve;n ăn vạ.<br />\r\nHoặc bạn rất dễ ph&aacute;t đi&ecirc;n nếu như chỉ c&ograve;n 5 gi&acirc;y nữa đ&egrave;n giao th&ocirc;ng chuyển từ đỏ sang xanh m&agrave; kẻ đi đằng sau bấm c&ograve;i inh ỏi.<br />\r\nHay l&agrave;, bạn thấy buồn chỉ v&igrave; h&ocirc;m nay trời mưa man m&aacute;c, m&agrave; vẫn phải ngồi trong văn ph&ograve;ng l&agrave;m việc, bạn bi quan rằng tuổi trẻ thật buồn tẻ.<br />\r\nH&atilde;y thừa nhận đi! Ai trong số ch&uacute;ng ta cũng sẽ trải qua những điều n&agrave;y. V&agrave; cuốn s&aacute;ch n&agrave;y dạy bạn c&aacute;ch l&agrave;m h&ograve;a với ch&iacute;nh những ti&ecirc;u cực b&ecirc;n trong m&igrave;nh&hellip;<br />\r\nĐa số những cảm x&uacute;c ti&ecirc;u cực chỉ thỏa m&atilde;n được ch&uacute;ng ta ở thời điểm hiện tại. Tức l&agrave; ch&uacute;ng ta c&oacute; thể sẽ nhận được sự thoải m&aacute;i khi la h&eacute;t, c&aacute;u giận, chửi thề một ai đ&oacute; nhưng những &acirc;m thanh ta ph&aacute;t ra, suy nghĩ ta truyền đi sẽ đ&oacute;ng vai một con dao sắc lẹm đ&acirc;m ngược lại v&agrave;o ch&iacute;nh th&acirc;n thể m&igrave;nh. C&aacute;c mối quan hệ, cuộc sống, c&ocirc;ng việc của ch&uacute;ng ta sẽ dần rơi v&agrave;o sự mệt mỏi, bế tắc.<br />\r\nHọc được c&aacute;ch c&acirc;n bằng cảm x&uacute;c cũng ch&iacute;nh l&agrave; học được c&aacute;ch l&agrave;m chủ cuộc đời m&igrave;nh th&ocirc;ng minh, s&aacute;ng suốt v&agrave; đ&uacute;ng hướng.<br />\r\n&ldquo;C&acirc;n bằng cảm x&uacute;c, cả l&uacute;c b&atilde;o gi&ocirc;ng&rdquo; kh&aacute;c biệt ho&agrave;n to&agrave;n so với những cuốn s&aacute;ch về cảm x&uacute;c th&ocirc;ng thường kh&aacute;c khi:<br />\r\nChỉ cho người đọc những l&yacute; do khiến ch&uacute;ng ta lu&ocirc;n ti&ecirc;u cực v&agrave; bản chất của những điều n&agrave;y l&agrave; g&igrave;?<br />\r\nNhững điều khiến ch&uacute;ng ta thường xuy&ecirc;n n&oacute;ng giận v&agrave; kh&ocirc;ng hạnh ph&uacute;c bắt nguồn từ đ&acirc;u?<br />\r\nĐưa ra những b&agrave;i tập cụ thể để c&acirc;n bằng cảm x&uacute;c mỗi ng&agrave;y như: Ngừng suy nghĩ trong một khoảng thời gian cố định, tưởng tượng một qu&aacute; tr&igrave;nh, tập sống với bản th&acirc;n mỗi ng&agrave;y&hellip;<br />\r\nC&acirc;n bằng phương tr&igrave;nh của cuộc đời kh&ocirc;ng dễ, cuốn s&aacute;ch n&agrave;y kh&ocirc;ng chỉ l&agrave; l&yacute; thuyết c&ograve;n cho bạn những kĩ năng, phướng ph&aacute;p tận t&igrave;nh nhất để gi&uacute;p bạn l&agrave;m chủ cảm x&uacute;c của m&igrave;nh.</p>\r\n\r\n<p>Gi&aacute; sản phẩm tr&ecirc;n Tiki đ&atilde; bao gồm thuế theo luật hiện h&agrave;nh. Tuy nhi&ecirc;n tuỳ v&agrave;o từng loại sản phẩm hoặc phương thức, địa chỉ giao h&agrave;ng m&agrave; c&oacute; thể ph&aacute;t sinh th&ecirc;m chi ph&iacute; kh&aacute;c như ph&iacute; vận chuyển, phụ ph&iacute; h&agrave;ng cồng kềnh, ...</p>\r\n', 1, 1, 1, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'Thức Tỉnh Mục Đích Sống (Tái Bản)', 'thuctinh.jpg', 1, 99.7, 'Thức Tỉnh Mục Đích Sống - Cuốn Sách Làm Bừng Tỉnh Thế Giới!\r\nChuyển hóa tâm thức con người là trọng tâm của những điều Eckhart Tolle đề cập trong quyển sách nổi tiếng A New Earth - Thức Tỉnh Mục Đích Sống này. Theo ông, sự thức tỉnh là bước kế tiếp sẽ xảy', '<p><img alt=\"Thức Tỉnh Mục Đích Sống (Tái Bản 2019)\" src=\"https://salt.tikicdn.com/ts/tmp/18/3d/b4/9fe2848b28872357aa5a406d0e32ab8f.jpg\" style=\"height:500px; width:750px\" /><br />\r\n<img alt=\"Thức Tỉnh Mục Đích Sống (Tái Bản 2019)\" src=\"https://salt.tikicdn.com/ts/tmp/09/05/96/ced0af9d7ccaa3550b05d2f495c1f881.jpg\" style=\"height:562px; width:750px\" /></p>\r\n\r\n<p><img alt=\"Thức Tỉnh Mục Đích Sống (Tái Bản 2019)\" src=\"https://salt.tikicdn.com/ts/tmp/ff/f4/98/d11225d85393b24f48a21d0e955432a5.jpg\" style=\"height:562px; width:750px\" /></p>\r\n\r\n<p><img alt=\"Thức Tỉnh Mục Đích Sống (Tái Bản 2019)\" src=\"https://salt.tikicdn.com/ts/tmp/83/e1/d7/50f7ffcf099333e960ca1857002d8209.jpg\" style=\"height:562px; width:750px\" /></p>\r\n\r\n<p><strong>Thức Tỉnh Mục Đ&iacute;ch Sống - Cuốn S&aacute;ch L&agrave;m Bừng Tỉnh Thế Giới!</strong><br />\r\nChuyển h&oacute;a t&acirc;m thức con người l&agrave; trọng t&acirc;m của những điều Eckhart Tolle đề cập trong quyển s&aacute;ch nổi tiếng A New Earth - Thức Tỉnh Mục Đ&iacute;ch Sống n&agrave;y. Theo &ocirc;ng, sự thức tỉnh l&agrave; bước kế tiếp sẽ xảy ra trong qu&aacute; tr&igrave;nh ph&aacute;t triển t&acirc;m thức của nh&acirc;n loại. Nh&acirc;n loại sẽ bước sang một giai đoạn m&agrave; sự thức tỉnh trong t&acirc;m hồn sẽ tạo ra sự tự do v&agrave; niềm hạnh ph&uacute;c mi&ecirc;n viễn trong mỗi con người v&agrave; tr&ecirc;n to&agrave;n thế giới.<br />\r\n&quot;Thức tỉnh mục đ&iacute;ch sống&quot; đ&atilde; cộng hưởng thật s&acirc;u sắc với những điều b&ecirc;n trong t&ocirc;i v&agrave; gi&uacute;p t&ocirc;i thay đổi nhận thức về bản th&acirc;n v&agrave; về cả mọi điề&quot;</p>\r\n\r\n<p>Gi&aacute; sản phẩm tr&ecirc;n Web đ&atilde; bao gồm thuế theo luật hiện h&agrave;nh. Tuy nhi&ecirc;n tuỳ v&agrave;o từng loại sản phẩm hoặc phương thức, địa chỉ giao h&agrave;ng m&agrave; c&oacute; thể ph&aacute;t sinh th&ecirc;m chi ph&iacute; kh&aacute;c như ph&iacute; vận chuyển, phụ ph&iacute; h&agrave;ng cồng kềnh, ...</p>\r\n', 1, 1, 1, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'Nói Chuyện Là Bản Năng, Giữ Miệng Là Tu Dưỡng, Im Lặng Là Trí Tuệ', 'noichuyen.jpg', 1, 95.4, 'NÓI CHUYỆN LÀ BẢN NĂNG, GIỮ MIỆNG LÀ TU DƯỠNG, IM LẶNG LÀ TRÍ TUỆ\r\n\r\nTuân Tử nói: “Nói năng hợp lý, đó gọi là hiểu biết; im lặng đúng lúc, đó cũng là hiểu biết”. Ngôn ngữ là thứ có thể thể hiện rõ nhất mức độ tu dưỡng của một người, nói năng hợp lý là một', '<p>N&Oacute;I CHUYỆN L&Agrave; BẢN NĂNG, GIỮ MIỆNG L&Agrave; TU DƯỠNG, IM LẶNG L&Agrave; TR&Iacute; TUỆ</p>\r\n\r\n<p>Tu&acirc;n Tử n&oacute;i: &ldquo;N&oacute;i năng hợp l&yacute;, đ&oacute; gọi l&agrave; hiểu biết; im lặng đ&uacute;ng l&uacute;c, đ&oacute; cũng l&agrave; hiểu biết&rdquo;. Ng&ocirc;n ngữ l&agrave; thứ c&oacute; thể thể hiện r&otilde; nhất mức độ tu dưỡng của một người, n&oacute;i năng hợp l&yacute; l&agrave; một loại tr&iacute; tuệ, m&agrave; im lặng đ&uacute;ng l&uacute;c cũng l&agrave; một loại tr&iacute; tuệ. Nếu một người kh&ocirc;ng biết giữ miệng, n&oacute;i m&agrave; kh&ocirc;ng suy nghĩ, nghĩ g&igrave; n&oacute;i nấy, tất nhi&ecirc;n rất dễ khiến người kh&aacute;c ch&aacute;n gh&eacute;t.<br />\r\n<br />\r\nNội dung quyển s&aacute;ch n&agrave;y xoay quanh hai vấn đề đ&oacute; l&agrave; &ldquo;biết c&aacute;ch n&oacute;i chuyện&rdquo; v&agrave; &ldquo;biết giữ miệng&rdquo;, th&ocirc;ng qua 12 chương s&aacute;ch n&oacute;i r&otilde; c&aacute;ch n&oacute;i chuyện với những người kh&aacute;c nhau, c&aacute;ch n&oacute;i chuyện trong những trường hợp kh&aacute;c nhau, l&agrave;m thế n&agrave;o để nắm vững những kỹ năng v&agrave; chừng mực để n&oacute;i chuyện cho kh&ocirc;n kh&eacute;o, những người kh&ocirc;ng giỏi ăn n&oacute;i l&agrave;m c&aacute;ch n&agrave;o mới c&oacute; thể n&oacute;i được những lời th&iacute;ch hợp với đ&uacute;ng người v&agrave; đ&uacute;ng thời điểm, để c&oacute; thể ứng ph&oacute; với những trường hợp kh&aacute;c nhau trong giao tiếp.</p>\r\n\r\n<p>Người biết n&oacute;i chuyện, ẩn sau con người họ l&agrave; l&ograve;ng tốt đ&atilde; khắc s&acirc;u v&agrave;o xương tủy, l&agrave; sự t&ocirc;n trọng đến từ việc đặt m&igrave;nh v&agrave;o vị tr&iacute; của người kh&aacute;c, l&agrave; tr&iacute; tuệ s&acirc;u sắc, độc đ&aacute;o v&agrave; l&ograve;ng ki&ecirc;n nhẫn kh&ocirc;ng ngại phiền h&agrave;. Họ chưa hẳn l&agrave; những người giỏi ăn n&oacute;i, nhưng mỗi khi n&oacute;i đều l&agrave;m người kh&aacute;c như được tắm trong gi&oacute; xu&acirc;n, vừa mở miệng l&agrave; đ&atilde; to&aacute;t l&ecirc;n kh&iacute; chất hơn người.</p>\r\n\r\n<p>Người biết giữ miệng, bất kể trong trường hợp n&agrave;o, họ đều c&oacute; thể lập tức nh&igrave;n thấu cảm x&uacute;c của người kh&aacute;c, quan t&acirc;m đến cảm gi&aacute;c của đối phương, n&oacute;i năng c&oacute; chừng mực, l&agrave;m g&igrave; cũng chừa lại đường lui cho m&igrave;nh v&agrave; người kh&aacute;c. Vừa mở miệng l&agrave; c&oacute; thể l&agrave;m y&ecirc;n l&ograve;ng người kh&aacute;c, tự nhi&ecirc;n đi tới đ&acirc;u cũng sẽ được ch&agrave;o đ&oacute;n.<br />\r\nBiết giữ im lặng th&igrave; cuộc sống sẽ dễ chịu hơn, học c&aacute;ch giữ miệng th&igrave; cuộc đời n&agrave;y sẽ kh&ocirc;ng c&ograve;n điều g&igrave; phải hối hận. Điều kh&ocirc;ng n&ecirc;n n&oacute;i th&igrave; kh&ocirc;ng n&oacute;i, điều kh&ocirc;ng n&ecirc;n hỏi th&igrave; kh&ocirc;ng hỏi, hiểu &yacute; m&agrave; kh&ocirc;ng vạch trần, nh&igrave;n thấu m&agrave; kh&ocirc;ng n&oacute;i ra, đ&oacute; l&agrave; bậc đại tr&iacute;.</p>\r\n\r\n<p><strong>Đ&ocirc;i n&eacute;t về t&aacute;c giả:</strong></p>\r\n\r\n<p>Trương Tiếu Hằng l&agrave; một t&aacute;c giả đồng thời l&agrave; một nh&agrave; sản xuất. &Ocirc;ng từng l&agrave; một nh&acirc;n vi&ecirc;n b&igrave;nh thường, từng l&agrave;m b&aacute;n h&agrave;ng rồi tự mở c&ocirc;ng ty, &ocirc;ng đ&atilde; đi nhiều nơi, đọc s&aacute;ch, s&aacute;ng t&aacute;c, t&igrave;m hiểu về cu&ocirc;̣c s&ocirc;́ng. Vốn sống phong ph&uacute;, b&uacute;t ph&aacute;p tinh tế c&ugrave;ng lối viết đi thẳng v&agrave;o trọng t&acirc;m lu&ocirc;n mang lại cho độc giả cảm gi&aacute;c sảng kho&aacute;i khi đọc t&aacute;c phẩm của &ocirc;ng. Một số t&aacute;c phẩm của &ocirc;ng đ&atilde; được xuất bản như &ldquo;Khoa triết học Đại học Bắc Kinh&rdquo;, &ldquo;EQ cao ch&iacute;nh l&agrave; biết c&aacute;ch n&oacute;i chuyện&rdquo;.</p>\r\n\r\n<p>Gi&aacute; sản phẩm tr&ecirc;n Tiki đ&atilde; bao gồm thuế theo luật hiện h&agrave;nh. Tuy nhi&ecirc;n tuỳ v&agrave;o từng loại sản phẩm hoặc phương thức, địa chỉ giao h&agrave;ng m&agrave; c&oacute; thể ph&aacute;t sinh th&ecirc;m chi ph&iacute; kh&aacute;c như ph&iacute; vận chuyển, phụ ph&iacute; h&agrave;ng cồng kềnh, ...</p>\r\n', 1, 1, 3, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'Luật Hấp Dẫn (Tái Bản)', 'luathapdan.jpg', 1, 67.2, 'Luật Hấp Dẫn (Tái Bản) \r\nCHÚNG TA THƯỜNG NGHE RẰNG:\"Những gì ta muốn, muốn ta\", hay \"Niềm tin mang đến đều ta mong muốn\", nhưng cốt lõi của những điều ấy chỉ lần đầu tiên được lý giải rõ ràng và giản dị trong cuốn sách bestseller mới nhất này của ESTHER &', '<p>Luật Hấp Dẫn (T&aacute;i Bản)&nbsp;</p>\r\n\r\n<p>CH&Uacute;NG TA THƯỜNG NGHE RẰNG:&quot;Những g&igrave; ta muốn, muốn ta&quot;, hay &quot;Niềm tin mang đến đều ta mong muốn&quot;, nhưng cốt l&otilde;i của những điều ấy chỉ lần đầu ti&ecirc;n được l&yacute; giải r&otilde; r&agrave;ng v&agrave; giản dị trong cuốn s&aacute;ch bestseller mới nhất n&agrave;y của ESTHER &amp; JERRY HICKS, rằng mọi sự trong cuộc đời ta, cả những điều như &yacute; ta hay tr&aacute;i &yacute;, đều được đưa đến với ta bởi Luật quyền năng nhất Vũ Trụ: Luật Hấp Dẫn</p>\r\n\r\n<p>Phần lớn cuốn s&aacute;ch được viết dưới dạng hỏi đ&aacute;p, va điều ấy cho ph&eacute;p người đọc kh&ocirc;ng nhất thiết phải đọc một mạch từ đầu tới cuối, mặc d&ugrave; đọc một mạch từ đầu tới cuối vẫn sẽ l&agrave; một trải nghiệm tuyệt vời. Đầy t&iacute;nh gợi mở v&agrave; khơi nguồn cảm hứng, Luật hấp dẫn l&agrave;m n&ecirc;n danh tiếng l&acirc;u bền của n&oacute; ch&iacute;nh bằng việc chỉ ra cơ chế của cuộc sống, v&agrave; quan trọng hơn cả: con đường r&otilde; r&agrave;ng nhất để s&aacute;ng tạo n&ecirc;n trải nghiệm của ri&ecirc;ng ta, th&agrave;nh c&ocirc;ng của ri&ecirc;ng ta, cuộc đời c&oacute; &yacute; nghĩa của ri&ecirc;ng ta.</p>\r\n\r\n<p>Gi&aacute; sản phẩm tr&ecirc;n Web đ&atilde; bao gồm thuế theo luật hiện h&agrave;nh. Tuy nhi&ecirc;n tuỳ v&agrave;o từng loại sản phẩm hoặc phương thức, địa chỉ giao h&agrave;ng m&agrave; c&oacute; thể ph&aacute;t sinh th&ecirc;m chi ph&iacute; kh&aacute;c như ph&iacute; vận chuyển, phụ ph&iacute; h&agrave;ng cồng kềnh, ...</p>\r\n', 1, 1, 3, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'Rèn Luyện Tư Duy Phản Biện', 'tuduyphanbien.jpg', 1, 59.4, 'Như bạn có thể thấy, chìa khóa để trở thành một người có tư duy phản biện tốt chính là sự tự nhận thức. Bạn cần phải đánh giá trung thực những điều trước đây bạn nghĩ là đúng, cũng như quá trình suy nghĩ đã dẫn bạn tới những kết luận đó...', '<p>Như bạn c&oacute; thể thấy, ch&igrave;a kh&oacute;a để trở th&agrave;nh một người c&oacute; tư duy phản biện tốt ch&iacute;nh l&agrave; sự tự nhận thức. Bạn cần phải đ&aacute;nh gi&aacute; trung thực những điều trước đ&acirc;y bạn nghĩ l&agrave; đ&uacute;ng, cũng như qu&aacute; tr&igrave;nh suy nghĩ đ&atilde; dẫn bạn tới những kết luận đ&oacute;. Nếu bạn kh&ocirc;ng c&oacute; những l&yacute; lẽ hợp l&yacute;, hoặc nếu suy nghĩ của bạn bị ảnh hưởng bởi những kinh nghiệm v&agrave; cảm x&uacute;c, th&igrave; l&uacute;c đ&oacute; h&atilde;y c&acirc;n nhắc sử dụng tư duy phản biện! Bạn cần phải nhận ra được rằng con người, kể từ khi sinh ra, rất giỏi việc đưa ra những l&yacute; do l&yacute; giải cho những suy nghĩ khiếm khuyết của m&igrave;nh. Nếu bạn đang c&oacute; những kết luận sai lệch n&agrave;y th&igrave; c&oacute; một sự thật l&agrave; những đức tin của bạn thường m&acirc;u thuẫn với nhau v&agrave; đ&oacute; thường l&agrave; kết quả của thi&ecirc;n kiến x&aacute;c nhận, nhưng nếu bạn biết điều n&agrave;y, th&igrave; bạn đ&atilde; tiến gần hơn tới sự thật rồi!</p>\r\n\r\n<p>Những người tư duy phản biện cũng biết rằng họ cần thu thập những &yacute; tưởng v&agrave; đức tin của mọi người. Tư duy phản biện kh&ocirc;ng thể tự nhi&ecirc;n m&agrave; c&oacute;.</p>\r\n\r\n<p>Những người kh&aacute;c c&oacute; thể đưa ra những g&oacute;c nh&igrave;n kh&aacute;c m&agrave; bạn c&oacute; thể chưa bao giờ nghĩ tới, v&agrave; họ c&oacute; thể chỉ ra những lỗ hổng trong logic của bạn m&agrave; bạn đ&atilde; ho&agrave;n to&agrave;n bỏ qua. Bạn kh&ocirc;ng cần phải ho&agrave;n to&agrave;n đồng &yacute; với &yacute; kiến của những người kh&aacute;c, bởi v&igrave; điều n&agrave;y cũng c&oacute; thể dẫn tới những vấn đề li&ecirc;n quan đến thi&ecirc;n kiến, nhưng một cuộc thảo luận phản biện l&agrave; một b&agrave;i tập tư duy cực kỳ hiệu quả.</p>\r\n\r\n<p>Việc lắng nghe những &yacute; kiến của người kh&aacute;c cũng c&oacute; thể gi&uacute;p bạn nhận ra rằng phạm vi tri thức của bạn kh&ocirc;ng phải l&agrave; v&ocirc; hạn. Kh&ocirc;ng ai c&oacute; thể biết hết tất cả mọi thứ. Nhưng với việc chia sẻ v&agrave; đ&aacute;nh gi&aacute; ph&ecirc; b&igrave;nh kiến thức, ch&uacute;ng ta c&oacute; thể mở rộng t&acirc;m tr&iacute;. Nếu điều n&agrave;y khiến bạn cảm thấy kh&ocirc;ng thoải m&aacute;i, kh&ocirc;ng sao cả. Tr&ecirc;n thực tế, bước ra ngo&agrave;i v&ugrave;ng an to&agrave;n l&agrave; một điều quan trọng để mở rộng niềm tin v&agrave; suy nghĩ của bạn. Tư duy phản biện kh&ocirc;ng phải l&agrave; chỉ biết v&agrave;i thứ, v&agrave; chắc chắn kh&ocirc;ng phải việc x&aacute;c<br />\r\nnhận những điều bạn đ&atilde; biết. Thay v&agrave;o đ&oacute;, n&oacute; xoay quanh việc t&igrave;m kiếm sự thật &ndash; v&agrave; biến ch&uacute;ng trở th&agrave;nh thứ bạn biết.</p>\r\n\r\n<p><img alt=\"\" src=\"https://salt.tikicdn.com/ts/tmp/7c/e5/13/b8ef3e019e10058662a893201be0c34b.jpg\" style=\"height:619px; width:750px\" /></p>\r\n\r\n<p>Gi&aacute; sản phẩm tr&ecirc;n web đ&atilde; bao gồm thuế theo luật hiện h&agrave;nh. Tuy nhi&ecirc;n tuỳ v&agrave;o từng loại sản phẩm hoặc phương thức, địa chỉ giao h&agrave;ng m&agrave; c&oacute; thể ph&aacute;t sinh th&ecirc;m chi ph&iacute; kh&aacute;c như ph&iacute; vận chuyển, phụ ph&iacute; h&agrave;ng cồng kềnh, ...</p>\r\n', 1, 1, 1, 2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'Từ Điển Tiếng “Em”', 'tudientiengem.jpg', 1, 43.7, 'TỪ ĐIỂN TIẾNG “EM” – Định nghĩa về thế giới mới!\r\n\r\nBạn sẽ bất ngờ, khi cầm cuốn “từ điển” xinh xinh này trên tay.\r\n\r\nVà sẽ còn ngạc nhiên hơn nữa, khi bắt đầu đọc từng trang sách…', '<p>TỪ ĐIỂN TIẾNG &ldquo;EM&rdquo; &ndash; Định nghĩa về thế giới mới!<br />\r\n<br />\r\nBạn sẽ bất ngờ, khi cầm cuốn &ldquo;từ điển&rdquo; xinh xinh n&agrave;y tr&ecirc;n tay.</p>\r\n\r\n<p>V&agrave; sẽ c&ograve;n ngạc nhi&ecirc;n hơn nữa, khi bắt đầu đọc từng trang s&aacute;ch&hellip;</p>\r\n\r\n<p>Dĩ nhi&ecirc;n l&agrave; v&igrave; &ldquo;Từ điển tiếng &ldquo;Em&rdquo; kh&ocirc;ng phải l&agrave; một cuốn từ điển th&ocirc;ng thường rồi!<br />\r\n<br />\r\nN&oacute;i đến &ldquo;từ điển&rdquo;, xưa nay ch&uacute;ng ta đều nghĩ về một bộ s&aacute;ch đồ sộ, giải th&iacute;ch &yacute; nghĩa, c&aacute;ch d&ugrave;ng, dịch, c&aacute;ch ph&aacute;t &acirc;m, v&agrave; thường k&egrave;m theo c&aacute;c v&iacute; dụ về c&aacute;ch sử dụng từ đ&oacute;.</p>\r\n\r\n<p>Tuy nhi&ecirc;n, với cuốn s&aacute;ch &ldquo;Từ điển tiếng &ldquo;em&rdquo;, c&aacute;c bạn sẽ hết sức bất ngờ với những định nghĩa mới, bắt trend, s&aacute;ng tạo, th&ocirc;ng minh v&agrave; v&ocirc; c&ugrave;ng h&agrave;i hước.<br />\r\n<br />\r\nTiếng &ldquo;em&rdquo; [danh từ] ở đ&acirc;y l&agrave; tiếng l&ograve;ng của những người y&ecirc;u sự thật, gh&eacute;t sự giả dối</p>\r\n\r\n<p>C&ocirc; đơn [ t&iacute;nh từ ] kh&ocirc;ng phải l&agrave; kh&ocirc;ng c&oacute; ai b&ecirc;n cạnh, m&agrave; l&agrave; người m&igrave;nh muốn ở cạnh lại kh&ocirc;ng hề ở b&ecirc;n</p>\r\n\r\n<p>Sống lỗi [ động từ ] l&agrave; c&aacute;ch sống của mấy bạn c&oacute; người y&ecirc;u c&aacute;i l&agrave; bỏ b&ecirc; bạn b&egrave; liền h&agrave;<br />\r\n<br />\r\nNhưng đ&acirc;y kh&ocirc;ng chỉ l&agrave; cuốn s&aacute;ch chỉ biết n&oacute;i dăm ba c&acirc;u chuyện về t&igrave;nh y&ecirc;u.<br />\r\n<br />\r\nC&ograve;n nhiều hơn thế!<br />\r\n<br />\r\nL&agrave; những c&acirc;u cửa miệng của giới trẻ thời nay; l&agrave; hoạt động tưởng v&ocirc; bổ nhưng cần thiết cho sự sống: ăn, ngủ, tắm, gội cũng được định nghĩa hết sức d&iacute; dỏ V&agrave; cũng kh&ocirc;ng thiếu những &ldquo;tật xấu, th&oacute;i hư&rdquo; nghĩ đến đ&atilde; thấy &ldquo;tức c&aacute;i lồng ngực&rdquo;<br />\r\n<br />\r\nV&agrave; bạn y&ecirc;n t&acirc;m, &ldquo;tập đo&agrave;n&rdquo; Kho Từ Điển điều h&agrave;nh bởi Thịt Kho &ndash; Hiệp Thị - 2 chủ xị cho ra đời cuốn s&aacute;ch nhỏ b&eacute; x&iacute;u xiu nhưng mới mẻ v&agrave; mặn m&agrave; v&ocirc; c&ugrave;ng n&agrave;y sẽ khiến bạn tho&aacute;t m&aacute;c &ldquo;người tối cổ&rdquo; cười cả ng&agrave;y kh&ocirc;ng ch&aacute;n, nh&igrave;n bạn b&egrave; quanh m&igrave;nh bằng &aacute;nh mắt dễ thương, tận hưởng cuộc đời với những định nghĩa ho&agrave;n to&agrave;n!!!<br />\r\n<br />\r\nCuốn s&aacute;ch n&agrave;y giống như một chiếc hộp Pandora th&uacute; vị v&agrave; hấp dẫn người đọc, v&igrave; bạn kh&ocirc;ng thể đo&aacute;n trước được t&aacute;c giả sẽ &ldquo;định nghĩa&rdquo; c&acirc;u n&oacute;i đ&oacute; theo nghĩa n&agrave;o, cho ta th&ecirc;m th&iacute;ch th&uacute; với những ng&ocirc;n từ đ&aacute;ng y&ecirc;u sử dụng mỗi ng&agrave;y.<br />\r\n<br />\r\nVậy n&ecirc;n, ngay b&acirc;y giờ, bạn đ&atilde; sẵn s&agrave;ng để mở ra những điều th&uacute; vị trong cuốn s&aacute;ch n&agrave;y chưa!!!</p>\r\n\r\n<p>Gi&aacute; sản phẩm tr&ecirc;n web đ&atilde; bao gồm thuế theo luật hiện h&agrave;nh. Tuy nhi&ecirc;n tuỳ v&agrave;o từng loại sản phẩm hoặc phương thức, địa chỉ giao h&agrave;ng m&agrave; c&oacute; thể ph&aacute;t sinh th&ecirc;m chi ph&iacute; kh&aacute;c như ph&iacute; vận chuyển, phụ ph&iacute; h&agrave;ng cồng kềnh, ...</p>\r\n', 1, 1, 2, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'Giáo Trình Hán Ngữ 1 - Tập 1 - Quyển Thượng (Phiên Bản Mới)', 'tienghan.jpg', 1, 59.3, 'Giáo trình Hán ngữ tập 1 phiên bản mới tải app – Cuốn giáo trình Hán ngữ phiên bản mới duy nhất tại Việt Nam\r\n\r\n“Giáo trình Hán ngữ phiên bản mới tập 1” là cuốn đầu tiên trong bộ, nằm ở trình độ Sơ cấp dành cho người bắt đầu tiếng Trung.\r\n\r\nTrong quá trìn', '<p><strong>Gi&aacute;o tr&igrave;nh H&aacute;n ngữ tập 1 phi&ecirc;n bản mới tải app &ndash;&nbsp;Cuốn gi&aacute;o tr&igrave;nh H&aacute;n ngữ phi&ecirc;n bản mới duy nhất tại Việt Nam</strong></p>\r\n\r\n<p>&ldquo;<strong>Gi&aacute;o tr&igrave;nh H&aacute;n ngữ phi&ecirc;n bản mới tập 1</strong>&rdquo;&nbsp;l&agrave; cuốn đầu ti&ecirc;n trong bộ, nằm ở tr&igrave;nh độ Sơ cấp d&agrave;nh cho người bắt đầu tiếng Trung.</p>\r\n\r\n<p><strong>Trong qu&aacute; tr&igrave;nh học những kh&oacute; khăn tr&ecirc;n c&oacute; đang ngăn cản bạn chinh phục ng&ocirc;n ngữ n&agrave;y kh&ocirc;ng?</strong></p>\r\n\r\n<p><strong>Bạn l&agrave; người mới bắt đầu học tiếng Trung, bạn kh&ocirc;ng biết n&ecirc;n tự học như thế n&agrave;o</strong></p>\r\n\r\n<p>Trong khi tiếng Việt v&agrave; tiếng Anh được viết bằng chữ c&aacute;i Latinh th&igrave; tiếng Trung được viết bằng chữ tượng h&igrave;nh n&ecirc;n rất kh&oacute; khi bạn tự t&igrave;m hiểu ng&ocirc;n ngữ n&agrave;y. Bạn l&agrave; người mới bắt đầu học tiếng Trung, bạn muốn tự học nhưng kh&ocirc;ng biết n&ecirc;n học những kiến thức n&agrave;o, đ&acirc;u l&agrave; những kiến thức nền tảng ph&ugrave; hợp với tr&igrave;nh độ của những người mới học. V&agrave; quan trọng nhất l&agrave; bạn kh&ocirc;ng biết được n&ecirc;n t&igrave;m học từ những t&agrave;i liệu n&agrave;o. Tr&ecirc;n thị trường t&agrave;i liệu học tiếng Trung th&igrave; nhiều nhưng t&agrave;i liệu vừa b&aacute;m s&aacute;t chương tr&igrave;nh dạy học, vừa cập nhật những điểm đổi mới c&ugrave;ng như được bi&ecirc;n soạn dễ hiểu th&igrave; lại rất &iacute;t.</p>\r\n\r\n<p><strong>Ngữ ph&aacute;p v&agrave; vốn từ của bạn bị hạn chế</strong></p>\r\n\r\n<p>Ngữ ph&aacute;p v&agrave; từ vựng l&agrave; mấu chốt quan trọng nhất trong việc học một ng&ocirc;n ngữ. Nắm chắc ngữ ph&aacute;p v&agrave; từ vựng việc học tập để vượt qua c&aacute;c b&agrave;i kiểm tra hay học giao tiếp đều trở n&ecirc;n dễ d&agrave;ng hơn. Bạn l&agrave; người mới học, tr&igrave;nh độ ngữ ph&aacute;p v&agrave; từ vựng của bạn đang ở đ&acirc;u? Muốn n&acirc;ng cao tr&igrave;nh độ nhanh nhất bạn phải l&agrave;m thế n&agrave;o? Đ&acirc;u l&agrave; c&acirc;u trả lời d&agrave;nh cho bạn?</p>\r\n\r\n<p><strong>Bạn &ldquo;loay hoay&rdquo; kh&ocirc;ng biết l&agrave;m thế n&agrave;o để ph&aacute;t triển đồng thời cả 4 kỹ năng Nghe &ndash; n&oacute;i &ndash; đọc &ndash; viết</strong></p>\r\n\r\n<p>Đối với rất nhiều bạn việc đọc, viết c&aacute;c văn bản tiếng Trung&nbsp;&ldquo;dễ như ăn ch&aacute;o&rdquo;&nbsp;nhưng khi gặp người n&oacute;i tiếng H&aacute;n th&igrave; lại&ldquo;&aacute; khẩu&rdquo;,&nbsp;kh&ocirc;ng nghe được đối phương n&oacute;i g&igrave;, cũng kh&ocirc;ng biết đ&aacute;p trả ra sao. Học tiếng Trung ai cũng muốn n&acirc;ng cao cả 4 kỹ năng Nghe &ndash; n&oacute;i &ndash; đọc &ndash; viết nhưng kh&ocirc;ng phải ai cũng tự t&igrave;m được giải ph&aacute;p cho bản th&acirc;n. Vậy l&agrave;m thế n&agrave;o, bằng c&aacute;ch n&agrave;o bạn c&oacute; thể ph&aacute;t triển đồng đều 4 kỹ năng n&agrave;y?</p>\r\n\r\n<p>Bạn mới bắt đầu học tiếng H&aacute;n nhưng những kh&oacute; khăn n&agrave;y lại l&agrave;m bạn &ldquo;ch&ugrave;n bước&rdquo;, ch&aacute;n nản ngay từ đầu.&nbsp;Để c&oacute; thể duy tr&igrave; v&agrave; trở n&ecirc;n th&agrave;nh thạo tiếng Trung đ&ograve;i hỏi bạn phải c&oacute; sự ki&ecirc;n tr&igrave; v&agrave; quyết t&acirc;m đủ lớn để chinh phục m&ocirc;n ngoại ngữ n&agrave;y. Trong đ&oacute; những bước đi đầu ti&ecirc;n lu&ocirc;n l&agrave; quan trọng nhất, giải quyết được những kh&oacute; khăn n&agrave;y sẽ gi&uacute;p bạn tự tin tiếp tục n&acirc;ng cao tr&igrave;nh độ. C&ocirc;ng cụ gi&uacute;p c&aacute;c bạn l&agrave;m điều đ&oacute; chỉ c&oacute; thể l&agrave;&nbsp;&ldquo;Gi&aacute;o tr&igrave;nh H&aacute;n ngữ tập 1 phi&ecirc;n bản mới&rdquo;.</p>\r\n\r\n<p><strong>V&igrave; sao cuốn s&aacute;ch n&agrave;y lại cần thiết với những bạn mới bắt đầu học tiếng Trung?</strong></p>\r\n\r\n<p><strong>Tr&igrave;nh b&agrave;y khoa học ph&ugrave; hợp với c&aacute;c bạn tự nghi&ecirc;n cứu</strong></p>\r\n\r\n<p>Với những bạn đang tự học tiếng Trung hoặc tự &ocirc;n luyện sau những giờ học tr&ecirc;n lớp th&igrave; cuốn s&aacute;ch n&agrave;y ho&agrave;n to&agrave;n ph&ugrave; hợp. C&aacute;c b&agrave;i học được bi&ecirc;n soạn theo chương tr&igrave;nh thống nhất, ph&ugrave; hợp với tr&igrave;nh độ Sơ cấp, c&aacute;c kiến thức đều ở mức cơ bản nhất. Đ&acirc;y l&agrave; bước đầu ti&ecirc;n của người học tiếng Trung, n&ecirc;n việc tạo sự th&uacute; vị trong b&agrave;i học để người học quan trọng hơn kiến thức. Tập 1 gồm 15 b&agrave;i học với c&aacute;c chủ đề đa dạng. Mỗi b&agrave;i học gồm 5 phần:</p>\r\n\r\n<ul>\r\n	<li>B&agrave;i kh&oacute;a</li>\r\n	<li>Từ mới</li>\r\n	<li>Ch&uacute; th&iacute;ch</li>\r\n	<li>Ngữ ph&aacute;p, ngữ &acirc;m</li>\r\n	<li>Luyện tập</li>\r\n</ul>\r\n\r\n<p>Th&ocirc;ng qua mỗi b&agrave;i học c&aacute;c bạn được học đầy đủ c&aacute;c kiến thức, bắt đầu mỗi b&agrave;i c&aacute;c bạn n&ecirc;n tự học từ phần một đến phần 5, kh&ocirc;ng n&ecirc;n nhảy c&oacute;c qua c&aacute;c phần để đạt được hiệu quả cao nhất.</p>\r\n\r\n<p><strong>Hệ thống ngữ ph&aacute;p v&agrave; từ mới theo từng b&agrave;i</strong></p>\r\n\r\n<p>T&agrave;i liệu cung cấp c&aacute;c hệ thống ngữ ph&aacute;p v&agrave; từ vựng tương ứng với tr&igrave;nh độ sơ cấp. Hệ thống từ vựng b&aacute;m s&aacute;t theo từng chủ đề, mỗi b&agrave;i c&aacute;c bạn được học từ 10 &ndash; 20 từ vựng li&ecirc;n quan đến chủ đề. Ngo&agrave;i ra ở cuối s&aacute;ch c&ograve;n c&oacute; bảng từ vựng cung cấp gần 260 từ vựng đủ cho những người mới học.</p>\r\n\r\n<p>Về mặt ngữ ph&aacute;p trong tập 1, từ b&agrave;i 10 đến b&agrave;i 15 sẽ gi&uacute;p người học hiểu r&otilde; những cấu tr&uacute;c ngữ ph&aacute;p cơ bản. C&aacute;c cấu tr&uacute;c lu&ocirc;n c&oacute; v&iacute; dụ đi k&egrave;m, đ&acirc;y đều l&agrave; những v&iacute; dụ minh họa gần gũi, dễ hiểu nhất với những người mới bắt đầu. Với hệ thống ngữ ph&aacute;p v&agrave; từ vựng trong tập 1 người học đ&atilde; c&oacute; thể tự tin chinh phục kỳ thi HSK cấp độ 1.</p>\r\n\r\n<p><strong>Gi&uacute;p người học ph&aacute;t triển đồng thời cả 4 kỹ năng</strong></p>\r\n\r\n<p>Từ b&agrave;i 1 đến b&agrave;i 5, s&aacute;ch hệ thống hết c&aacute;c phi&ecirc;n &acirc;m. Học xong 5 b&agrave;i n&agrave;y c&aacute;c bạn đ&atilde; c&oacute; thể đọc hết pinyin của chữ H&aacute;n. Trong 5 b&agrave;i n&agrave;y c&ograve;n dạy người học c&aacute;ch ph&aacute;t &acirc;m tiếng H&aacute;n đ&uacute;ng chuẩn người bản địa.</p>\r\n\r\n<p>Gi&aacute;o tr&igrave;nh được bi&ecirc;n soạn theo hướng mẫu c&acirc;u để trực tiếp đi v&agrave;o thực h&agrave;nh giao tiếp. Phần b&agrave;i kh&oacute;a v&agrave; nội dung đ&agrave;m thoại c&oacute; quan hệ chủ điểm đồng nhất với b&agrave;i luyện đọc trong phần b&agrave;i tập. Phần b&agrave;i tập cũng ch&uacute; &yacute; tới r&egrave;n luyện kỹ năng giao tiếp, m&ocirc; phỏng v&agrave; bồi dưỡng tr&iacute; nhớ cho sinh vi&ecirc;n. Ngo&agrave;i ra c&aacute;c b&agrave;i nghe đều được c&aacute;c giảng vi&ecirc;n của Đại học Ng&ocirc;n ngữ Bắc Kinh thực hiện, qua đ&oacute; c&aacute;c bạn n&acirc;ng cao được kỹ năng nghe một c&aacute;ch nhanh nhất.</p>\r\n\r\n<p>Khi ho&agrave;n th&agrave;nh tr&igrave;nh độ n&agrave;y người học sẽ c&oacute; khả năng nghe &ndash; n&oacute;i &ndash; đọc &ndash; viết đều ở mức cơ bản, v&agrave; c&oacute; thể sử dụng được trong những t&igrave;nh huống nhất định.</p>\r\n\r\n<p><strong>Người học r&egrave;n được kỹ năng viết chữ</strong></p>\r\n\r\n<p>Ở cuối mỗi b&agrave;i học sẽ c&oacute; c&aacute;c bảng từ được kẻ &ocirc; sẵn gi&uacute;p c&aacute;c bạn luyện tập viết chữ H&aacute;n đ&uacute;ng chuẩn. Những chữ kh&oacute;, s&aacute;ch đ&atilde; c&oacute; phần kẻ mờ, người học chỉ cần viết lại theo c&aacute;c n&eacute;t đ&atilde; được vạch ra để học được c&aacute;ch viết c&aacute;c n&eacute;t ch&iacute;nh x&aacute;c.</p>\r\n\r\n<p><strong>Dịch bằng 2 thứ tiếng</strong></p>\r\n\r\n<p>Cuốn s&aacute;ch c&oacute; phi&ecirc;n &acirc;m pinyin gi&uacute;p c&aacute;c bạn đọc v&agrave; hiểu được tiếng Trung. B&ecirc;n cạnh đ&oacute; s&aacute;ch c&ograve;n dịch sang cả tiếng Anh v&agrave; tiếng Việt gi&uacute;p c&aacute;c bạn tăng th&ecirc;m hiểu biết về nhiều ng&ocirc;n ngữ c&ugrave;ng l&uacute;c.</p>\r\n\r\n<p><strong>Tăng th&ecirc;m sự hiểu biết về đất nước Trung Hoa</strong></p>\r\n\r\n<p>Chủ điểm b&agrave;i kh&oacute;a bao gồm nhiều lĩnh vực trong đời sống h&agrave;ng ng&agrave;y, giới thiệu những kiến thức về con người v&agrave; đất nước Trung Quốc nhằm tăng sự hiểu biết về đất nước n&agrave;y. C&aacute;c phần ch&uacute; th&iacute;ch chi tiết cũng n&ecirc;u r&otilde; những kiến thức về ng&ocirc;n ngữ v&agrave; bối cảnh văn h&oacute;a Trung Hoa. Từ đ&oacute; c&aacute;c bạn kh&ocirc;ng chỉ học được tiếng Trung m&agrave; c&ograve;n n&acirc;ng cao sự hiểu biết của m&igrave;nh về Trung Quốc.</p>\r\n\r\n<p><strong>Học tiếng Trung qua ứng dụng tr&ecirc;n điện thoại của MCBooks</strong></p>\r\n\r\n<p>Để tiện lợi hơn trong qu&aacute; tr&igrave;nh học tập, gi&uacute;p bạn tận dụng mọi khoảng thời gian trống để &ocirc;n lại c&aacute;c b&agrave;i nghe, với gi&aacute;o tr&igrave;nh H&aacute;n ngữ 1 phi&ecirc;n bản mới tải APP, chỉ cần tải app của MCBooks qu&eacute;t m&atilde; QR code ở sau cuốn s&aacute;ch. Bạn c&oacute; thể sở hữu cuốn s&aacute;ch ngay trong điện thoại của m&igrave;nh. Hệ thống hỗ trợ tr&ecirc;n cả hai hệ điều h&agrave;nh Android v&agrave; IOS. H&atilde;y thưởng thức c&ocirc;ng nghệ trong một cuốn s&aacute;ch tuyệt vời. Chắc chắn cuốn s&aacute;ch n&agrave;y sẽ l&agrave; bạn đồng h&agrave;nh kh&ocirc;ng thể thiếu tr&ecirc;n chặng đường học tiếng Trung của bạn.</p>\r\n\r\n<p>Cuốn s&aacute;ch n&agrave;y do MCBooks &ndash; chuy&ecirc;n s&aacute;ch ngoại ngữ &ndash; độc quyền ph&aacute;t h&agrave;nh n&ecirc;n chắc chắn người học sẽ kh&ocirc;ng phải lo lắng về chất lượng cuốn s&aacute;ch. Gi&aacute;o tr&igrave;nh được in r&otilde; n&eacute;t tr&ecirc;n chất liệu giấy cực tốt kh&ocirc;ng hề k&eacute;m cạnh thậm ch&iacute; c&ograve;n nhỉnh hơn c&aacute;c cuốn s&aacute;ch gi&aacute;o khoa tr&ecirc;n thị trường hiện nay. Với cuốn s&aacute;ch n&agrave;y c&aacute;c bạn vừa c&oacute; thể tự tin để vượt qua HSK 1, vừa tự tin giao tiếp tiếng Trung trong những t&igrave;nh huống hội thoại h&agrave;ng ng&agrave;y.</p>\r\n\r\n<p>Xin n&oacute;i th&ecirc;m, hiện nay tr&ecirc;n thị trường c&oacute; rất nhiều đối tượng sử dụng c&aacute;c sản phẩm nh&aacute;i, photocopy hoặc kh&ocirc;ng phải của MCBooks, đ&acirc;y l&agrave; c&aacute;c h&agrave;nh động vị phạm bản quyền. Để được bảo vệ quyền lợi, người học kh&ocirc;ng n&ecirc;n mua c&aacute;c cuốn s&aacute;ch n&agrave;y. H&atilde;y sử dụng đ&uacute;ng s&aacute;ch của MCBooks, v&igrave; một thế giới kh&ocirc;ng c&oacute; s&aacute;ch giả!</p>\r\n', 1, 1, 8, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, '5099 Từ Vựng HSK1 – HSK6 Từ Điển Tam Ngữ Anh – Trung – Việt + DVD Audio tài liệu', 'tuvung.jpg', 1, 143, '5099 Từ Vựng HSK1 – HSK6 Từ Điển Tam Ngữ Anh – Trung – Việt + DVD Audio tài liệu \r\n\r\nVới nhu cầu học tiếng Trung cũng như thi chứng chỉ HSK ngày càng cao, Lteam đã biên tập nên bộ từ điển tam ngữ Anh - Trung - Việt tổng...', '<p><strong>5099 Từ Vựng HSK1 &ndash; HSK6 Từ Điển Tam Ngữ Anh &ndash; Trung &ndash; Việt + DVD Audio t&agrave;i liệu&nbsp;</strong></p>\r\n\r\n<p>Với nhu cầu học tiếng Trung cũng như thi chứng chỉ HSK ng&agrave;y c&agrave;ng cao, Lteam đ&atilde; bi&ecirc;n tập n&ecirc;n bộ từ điển tam ngữ Anh - Trung - Việt tổng hợp gồm đầy đủ 5099 từ (từ đơn, từ gh&eacute;p, th&agrave;nh ngữ) trong chương tr&igrave;nh &ocirc;n thi HSK nhằm gi&uacute;p c&aacute;c bạn dễ d&agrave;ng học, nhớ, hiểu v&agrave; biết c&aacute;ch d&ugrave;ng, c&aacute;ch viết 5099 từ cực kỳ quan trọng n&agrave;y.</p>\r\n\r\n<p>Bộ s&aacute;ch gồm 2 phần:</p>\r\n\r\n<p>- Phần 01: S&aacute;ch bản cứng, mỗi chữ trong 5099 chữ đều c&oacute;:</p>\r\n\r\n<p>+ Tiếng Trung giản thể</p>\r\n\r\n<p>+ Tiếng Trung phồn thể</p>\r\n\r\n<p>+ Phi&ecirc;n &acirc;m, b&iacute;nh &acirc;m, pinyin</p>\r\n\r\n<p>+ Tiếng Việt bồi d&agrave;nh cho c&aacute;c bạn muốn học giao tiếp nhanh</p>\r\n\r\n<p>+ Dịch nghĩa tiếng Anh</p>\r\n\r\n<p>+ Dịch nghĩa tiếng Việt (từ được viết hoa chữ c&aacute;i đầu mang nghĩa H&aacute;n Việt)</p>\r\n\r\n<p>+ Ngo&agrave;i ra, quyển s&aacute;ch c&oacute; đầy đủ 214 Bộ thủ để c&aacute;c bạn bắt đầu l&agrave;m quen tiếng Trung</p>\r\n\r\n<p>- Phần 02: Hệ thống giải nghĩa chuy&ecirc;n s&acirc;u Online khổng lồ:</p>\r\n\r\n<p>+ 5099 từ c&oacute; đầy đủ video, chuỗi ảnh hướng dẫn viết từng n&eacute;t cho từng chữ</p>\r\n\r\n<p>+ 5099 từ c&oacute; đầy đủ ph&aacute;t &acirc;m do gi&aacute;o vi&ecirc;n Trung Quốc đọc</p>\r\n\r\n<p>+ 5099 từ c&oacute; th&ecirc;m c&aacute;c v&iacute; dụ:</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; + C&oacute; v&iacute; dụ bằng tiếng Trung giản thể</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; + C&oacute; v&iacute; dụ bằng tiếng Trung phồn thể</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; + C&oacute; pinyin, b&iacute;nh &acirc;m phần vi dụ</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; + C&oacute; phần &acirc;m bồi phần v&iacute; dụ</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; + C&oacute; dịch tiếng Việt phần v&iacute; dụ</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; + C&oacute; dịch tiếng Anh phần v&iacute; dụ</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; + C&oacute; Audio nghe do Gi&aacute;o vi&ecirc;n Trung Quốc đọc c&aacute;c phần v&iacute; dụ</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; + C&oacute; Audio nghe do Gi&aacute;o vi&ecirc;n Trung Quốc đọc 5099 chữ HSK</p>\r\n\r\n<p>Ở đầu mỗi phần đều c&oacute; QRCode để c&aacute;c bạn dễ d&agrave;ng Scan ra hệ thống Online tương ứng, c&aacute;c bạn d&ugrave;ng Zalo hoặc Facebook để Scan nh&eacute;! Ch&uacute;ng m&igrave;nh sẽ li&ecirc;n tục bổ sung để ho&agrave;n thiện v&agrave; th&ecirc;m c&aacute;c phần bổ sung chi tiết hơn trong hệ thống Online!</p>\r\n\r\n<p>T&agrave;i liệu đi k&egrave;m hơn 20Gb dữ liệu (c&oacute; trong DVD v&agrave; tờ rơi đi k&egrave;m s&aacute;ch):</p>\r\n\r\n<ul>\r\n	<li>Audio Nghe Tổng hợp 5099 từ vựng HSK1 &ndash; HSK6</li>\r\n	<li>Audio Nghe 1001 Bức Thư Viết Cho Tương Lai</li>\r\n	<li>Audio Nghe 999 Bức Thư Viết Cho Bản Th&acirc;n (2018)</li>\r\n	<li>Audio Nghe 123 th&ocirc;ng điệp tuổi trẻ</li>\r\n	<li>Audio Nghe Cuộc đời phụ nữ mu&ocirc;n v&agrave;n l&yacute; do hạnh ph&uacute;c</li>\r\n	<li>Audio Nghe Si&ecirc;u tr&iacute; nhớ chữ H&aacute;n</li>\r\n	<li>Audio Nghe s&aacute;ch Du Lịch Việt Nam &ndash; Ẩm Thực v&agrave; Cảnh Điểm</li>\r\n	<li>Audio Nghe bộ 3 s&aacute;ch Từ điển HSK giao tiếp 1-2-2</li>\r\n	<li>T&agrave;i liệu d&agrave;nh cho người mới bắt đầu học tiếng Trung</li>\r\n	<li>Từ điển th&agrave;nh ngữ tiếng Trung</li>\r\n	<li>Từ vựng tiếng Trung theo chủ đề</li>\r\n	<li>Gi&aacute;o tr&igrave;nh luyện thi HSK từ sơ cấp đến cao cấp</li>\r\n	<li>Gi&aacute;o tr&igrave;nh ngữ ph&aacute;p tiếng Trung</li>\r\n	<li>Bộ gi&aacute;o tr&igrave;nh H&aacute;n ngữ 6 quyển (k&egrave;m file nghe)</li>\r\n	<li>Bộ gi&aacute;o tr&igrave;nh Boya 9 quyển (k&egrave;m file nghe)</li>\r\n	<li>T&agrave;i liệu học giao tiếp tiếng Trung theo t&igrave;nh huống</li>\r\n	<li>Gi&aacute;o tr&igrave;nh 301 c&acirc;u đ&agrave;m thoại tiếng Trung</li>\r\n	<li>3000 c&acirc;u giao tiếp th&ocirc;ng dụng trong tiếng Trung</li>\r\n	<li>1000 c&acirc;u giao tiếp cơ bản trong tiếng Trung</li>\r\n	<li>Từ vựng HSK 1-6</li>\r\n	<li>Từ vựng Anh &ndash; Trung</li>\r\n	<li>Bộ đề thi HSK 1-6</li>\r\n	<li>Gi&aacute;o &aacute;n BOYA1-HSK3 độc quyền!!!!!</li>\r\n	<li>Gi&aacute;o tr&igrave;nh dạy tiếng Việt cho người Trung Quốc</li>\r\n	<li>Kho s&aacute;ch về du lịch Trung Quốc</li>\r\n</ul>\r\n\r\n<p>Ch&uacute;c c&aacute;c bạn hiểu r&otilde; v&agrave; học thuộc 5099 từ vựng HSK v&agrave; c&oacute; kết quả thi thật tốt nh&eacute;!</p>\r\n', 1, 1, 8, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'Cuộc đời kỳ lạ của Nikola Tesla (tái bản 2018)', 'nikola.jpg', 1, 59.9, 'Được mệnh danh là “nhà khoa học điên” của giới vật lý, Tesla là người đi tiên phong đưa kỹ thuật điện, điện từ vào đời sống...', '<p>Được mệnh danh l&agrave; &ldquo;nh&agrave; khoa học đi&ecirc;n&rdquo; của giới vật l&yacute;, Tesla l&agrave; người đi ti&ecirc;n phong đưa kỹ thuật điện, điện từ v&agrave;o đời sống. Với c&aacute;ch tư duy kỳ lạ của m&igrave;nh, &ocirc;ng đ&atilde; c&oacute; đến khoảng 300 bằng ph&aacute;t minh, ti&ecirc;u biểu như động cơ điện kh&ocirc;ng đồng bộ hay l&otilde;i Tesla. Rất nhiều ph&aacute;t minh của Tesla đang được ứng dụng trong c&aacute;c thiết bị điện xung quanh ta ng&agrave;y nay.</p>\r\n\r\n<p>Thật kh&ocirc;ng dễ để hiểu thấu hết những g&igrave; đang diễn ra trong đầu Tesla, một thi&ecirc;n t&agrave;i với tr&iacute; nhớ h&igrave;nh ảnh, biết t&aacute;m thứ tiếng v&agrave; c&oacute; tầm nh&igrave;n vượt thời đại. Những g&igrave; &ocirc;ng đ&atilde; viết trong quyển s&aacute;ch n&agrave;y c&oacute; thể kỳ lạ v&agrave; kh&oacute; tin, nhưng h&atilde;y nhớ rằng, người ta đ&atilde; mất gần một thế kỷ để biết những g&igrave; Tesla đề xuất l&agrave; ch&iacute;nh x&aacute;c v&agrave; khả thi!</p>\r\n\r\n<p>Hy vọng qu&yacute; bạn đọc c&oacute; thể nh&igrave;n ra được điều g&igrave; đ&oacute; mới mẻ trong những c&acirc;u chữ của Tesla, bởi đ&oacute; c&oacute; thể l&agrave; những hiểu biết gi&uacute;p ta thay đổi cả thế giới n&agrave;y.</p>\r\n', 1, 1, 7, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'Các Thế Giới Song Song (Tái Bản 2018)', 'cac_the_gioi_song_song.jpg', 1, 94, 'Các Thế Giới Song Song\r\n\r\nMột chuyến du hành đầy trí tuệ qua các vũ trụ, được dẫn dắt tài tình bởi \"thuyền trưởng\" Michio Kaku và độc giả có dịp chiêm ngưỡng vẻ ...', '<p><strong>C&aacute;c Thế Giới Song Song</strong></p>\r\n\r\n<p>Một chuyến du h&agrave;nh đầy tr&iacute; tuệ qua c&aacute;c vũ trụ, được dẫn dắt t&agrave;i t&igrave;nh bởi &quot;thuyền trưởng&quot;&nbsp;<strong>Michio Kaku</strong>&nbsp;v&agrave; độc giả c&oacute; dịp chi&ecirc;m ngưỡng vẻ đẹp kỳ vĩ của vũ trụ kể từ vụ nổ lớn, vượt qua những hố đen, lỗ s&acirc;u, bước v&agrave;o c&aacute;c thế giới lượng tử từ mu&ocirc;n m&agrave;u kỳ lạ nằm ngay trước mũi ch&uacute;ng ta, vốn dĩ tồn tại song song tr&ecirc;n một m&agrave;ng b&ecirc;n ngo&agrave;i kh&ocirc;ng - thời gian bốn chiều, ngắm nh&igrave;n thực tại vật chất quen thuộc ho&agrave; quyện với thế giới của những điều kỳ diệu như năng lượng v&agrave; vật chất tối, sự nảy chồi của c&aacute;c vũ trụ, những chiều kh&ocirc;ng gian b&iacute; ẩn v&agrave; sự biến ảo của c&aacute;c d&acirc;y rung si&ecirc;u nhỏ...</p>\r\n\r\n<p>Dẫn chuyện l&ocirc;i cuốn, kết hợp tường minh, sống động một lượng th&ocirc;ng tin đồ sộ để khai mở những giới hạn tột c&ugrave;ng của tr&iacute; &nbsp;tưởng tượng,&nbsp;<strong>Kaku</strong>&nbsp;thực sự xứng đ&aacute;ng l&agrave; &quot; nh&agrave; truyền gi&aacute;o&quot; vĩ đại đ&atilde; mang thế giới vật l&yacute; l&yacute; thuyết tới quảng đại quần ch&uacute;ng.</p>\r\n', 1, 1, 7, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `product` (`id`, `name`, `image`, `quantity`, `price`, `decription`, `detail`, `status`, `featured`, `id_productCategory`, `id_Author`, `id_Publisher`, `created_at`, `updated_at`) VALUES
(26, 'Thiền Thật Ra Không Khó (Ai Cũng Có Thể Hành Thiền)', 'thien.jpg', 1, 58.4, 'Tôi tâm đắc với ý \"hồn nhiên trước khi biết và hồn nhiên sau khi biết\" mà tác giả đã nêu trong sách Thiền thật ra không khó. Nhớ lại cả một giai đoạn dài trước đây, mình chưa từng biết tới, đừng nói đến nghĩ hay bận tâm về cái sự \"hồn nhiên\" của mình. Bởi', '<p>T&ocirc;i t&acirc;m đắc với &yacute; &quot;hồn nhi&ecirc;n trước khi biết v&agrave; hồn nhi&ecirc;n sau khi biết&quot; m&agrave; t&aacute;c giả đ&atilde; n&ecirc;u trong s&aacute;ch Thiền thật ra kh&ocirc;ng kh&oacute;. Nhớ lại cả một giai đoạn d&agrave;i trước đ&acirc;y, m&igrave;nh chưa từng biết tới, đừng n&oacute;i đến nghĩ hay bận t&acirc;m về c&aacute;i sự &quot;hồn nhi&ecirc;n&quot; của m&igrave;nh. Bởi v&igrave; sự hồn nhi&ecirc;n khi ấy thực sự l&agrave; thứ bản năng &quot;trời cho&quot;.<br />\r\n<br />\r\nKhi kh&ocirc;ng c&ograve;n sự hồn nhi&ecirc;n bản năng nữa th&igrave; cảm gi&aacute;c căng thẳng, mệt mỏi ập đến nhiều hơn, tần suất d&agrave;y hơn theo thời gian. C&aacute;i đầu dường như lu&ocirc;n đặc qu&aacute;nh v&igrave; những bận bịu, lo toan, v&agrave; c&oacute; lẽ cả v&igrave; những giờ d&agrave;i g&ograve; lưng l&agrave;m việc b&ecirc;n m&aacute;y t&iacute;nh.<br />\r\n<br />\r\nT&ocirc;i đọc Thiền thật ra kh&ocirc;ng kh&oacute;, muốn t&igrave;m cho m&igrave;nh một liều thuốc tinh thần. Sự giản dị của văn phong, chất khi&ecirc;m nhường ch&acirc;n th&agrave;nh, tận tụy nghĩ cho người đọc của t&aacute;c giả thật cảm động. Kh&ocirc;ng muốn l&agrave;m rối tr&iacute; th&ecirc;m những t&acirc;m tr&iacute; đ&atilde; bải hoải, người viết chọn c&aacute;ch &quot;cầm tay chỉ việc&quot; rất cụ thể, tỉ mỉ tới từng thao t&aacute;c để ai cũng c&oacute; thể bắt đầu học thiền từ động t&aacute;c cụ thể, để rồi c&oacute; thể tiến đến thiền trong t&acirc;m tr&iacute;.<br />\r\n<br />\r\nHọc bu&ocirc;ng v&agrave; thả để tập trung trong trạng th&aacute;i &quot;trong suốt&quot; l&agrave; việc n&oacute;i dễ hơn l&agrave;m. C&oacute; ngồi thiền mới biết việc ngồi y&ecirc;n, kh&ocirc;ng nghĩ g&igrave; cả, thực sự l&agrave; một th&aacute;ch thức.<br />\r\n<br />\r\nT&aacute;c giả Trần Lu&acirc;n T&iacute;n từng kinh qua c&aacute;i trở ngại n&agrave;y n&ecirc;n &ocirc;ng chia sẻ với người đọc c&aacute;ch m&igrave;nh tự khắc chế &quot;con ngựa bất kham&quot; của t&acirc;m tr&iacute;. &Ocirc;ng gợi &yacute;, nhưng kh&ocirc;ng qu&ecirc;n nhắc rằng c&oacute; thể c&aacute;ch đ&oacute; sẽ kh&ocirc;ng hay bằng c&aacute;ch m&agrave; mỗi người tự t&igrave;m ra cho bản th&acirc;n m&igrave;nh.<br />\r\n<br />\r\nT&ocirc;i thường nhớ tới hai chữ &quot;lỏng&quot; v&agrave; &quot;rỗng&quot; mỗi khi ngồi thiền m&agrave; Trần Lu&acirc;n T&iacute;n nhắc lại nhiều lần, coi đ&oacute; như những khẩu quyết c&oacute; t&iacute;nh dẫn dụ s&uacute;c t&iacute;ch nhất. V&agrave; nhận ra rốt cuộc hai chữ ấy ch&iacute;nh l&agrave; c&aacute;i đ&iacute;ch của h&agrave;nh thiền.<br />\r\n<br />\r\nMỗi ng&agrave;y t&ocirc;i tự tặng cho bản th&acirc;n m&igrave;nh một khoảng thời gian &quot;rỗng&quot; hết sức c&oacute; thể, để hưởng lấy sự nhẹ nh&otilde;m, thanh thản. C&ugrave;ng với thời gian, t&ocirc;i nhận ra m&igrave;nh c&oacute; thể hướng tới việc thiền mọi nơi, mọi l&uacute;c trong ng&agrave;y.<br />\r\n<br />\r\nBởi bất cứ khi n&agrave;o nhớ tới v&agrave; để t&acirc;m &quot;quan s&aacute;t&quot;, lắng nghe b&ecirc;n trong cơ thể m&igrave;nh, th&igrave; ngay khi đ&oacute; t&ocirc;i đ&atilde; cảm thấy m&igrave;nh c&oacute; thể bước v&agrave;o trạng th&aacute;i thiền.<br />\r\n<br />\r\nThiền thật ra kh&ocirc;ng kh&oacute;, ai cũng c&oacute; thể h&agrave;nh thiền!<br />\r\n<br />\r\n<em>- Nh&agrave; b&aacute;o Đỗ D&acirc;n</em></p>\r\n', 1, 1, 10, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'Giáo án Giảng dạy và Luyện tập Yoga', 'yoga.png', 1, 195, 'Cuốn sách GIÁO ÁN đầu tay!\r\nBạn là một giáo viên Yoga, hay đơn giản bạn là người thực hà Bạn đang gặp khó khăn trong việc xây dựng giáo án của mình.\r\nCuốn sách này dành... ', '<p>Cuốn s&aacute;ch GI&Aacute;O &Aacute;N đầu tay!</p>\r\n\r\n<p>Bạn l&agrave; một gi&aacute;o vi&ecirc;n Yoga, hay đơn giản bạn l&agrave; người thực h&agrave; Bạn đang gặp kh&oacute; khăn trong việc x&acirc;y dựng gi&aacute;o &aacute;n của m&igrave;nh.</p>\r\n\r\n<p><img alt=\"\" src=\"https://salt.tikicdn.com/ts/product/d0/4f/99/a2ad11600f4ea1cbc871385a6e83c5b3.png\" style=\"height:16px; width:16px\" />Cuốn s&aacute;ch n&agrave;y d&agrave;nh cho bạn</p>\r\n\r\n<p><strong>S&Aacute;CH GI&Aacute;O &Aacute;N GIẢNG DẠY V&Agrave; LUYỆN TẬP YOGA.</strong></p>\r\n\r\n<p>S&aacute;ch với những nội dung ch&iacute;nh sau đ&acirc;y:</p>\r\n\r\n<p><img alt=\"\" src=\"https://salt.tikicdn.com/ts/product/53/64/19/ef49ddbf96ac6d5cf6745ae464ae4588.png\" style=\"height:16px; width:16px\" />Tổng quan về x&acirc;y dựng gi&aacute;o &aacute;n</p>\r\n\r\n<p><img alt=\"\" src=\"https://salt.tikicdn.com/ts/product/53/64/19/ef49ddbf96ac6d5cf6745ae464ae4588.png\" style=\"height:16px; width:16px\" />Nội dung chi tiết cho một gi&aacute;o &aacute;n yoga</p>\r\n\r\n<p>V&agrave; gần 60 gi&aacute;o &aacute;n được ch&uacute;ng t&ocirc;i x&acirc;y dựng theo từng chuy&ecirc;n đề v&agrave; tr&igrave;nh độ. Với cuốn s&aacute;ch n&agrave;y bạn sẽ tự tin hơn rất nhiều trong giờ dạy của m&igrave;nh. Mỗi gi&aacute;o &aacute;n được x&acirc;y dựng với 5 bước: Sơ thiền &ndash; Khởi động &ndash; Chuỗi b&agrave;i tập &ndash; Xoa b&oacute;p &ndash; Thư gi&atilde;n s&acirc;u.</p>\r\n\r\n<p><img alt=\"\" src=\"https://salt.tikicdn.com/ts/product/53/64/19/ef49ddbf96ac6d5cf6745ae464ae4588.png\" style=\"height:16px; width:16px\" />Gi&aacute;o &aacute;n hướng dẫn giảng dạy chuỗi Ch&agrave;o mặt trời v&agrave; Ch&agrave;o mặt trăng</p>\r\n\r\n<p><img alt=\"\" src=\"https://salt.tikicdn.com/ts/product/53/64/19/ef49ddbf96ac6d5cf6745ae464ae4588.png\" style=\"height:16px; width:16px\" />X&acirc;y dựng gi&aacute;o &aacute;n yoga theo tr&igrave;nh độ: Nền tảng, cơ bản, n&acirc;ng cao.</p>\r\n\r\n<p><img alt=\"\" src=\"https://salt.tikicdn.com/ts/product/53/64/19/ef49ddbf96ac6d5cf6745ae464ae4588.png\" style=\"height:16px; width:16px\" />Gi&aacute;o &aacute;n c&aacute;c b&agrave;i tập yoga theo chủ đề</p>\r\n\r\n<p><img alt=\"\" src=\"https://salt.tikicdn.com/ts/product/53/64/19/ef49ddbf96ac6d5cf6745ae464ae4588.png\" style=\"height:16px; width:16px\" />Gi&aacute;o &aacute;n c&aacute;c b&agrave;i tập yoga theo d&ograve;ng ph&aacute;i</p>\r\n\r\n<p><img alt=\"\" src=\"https://salt.tikicdn.com/ts/product/53/64/19/ef49ddbf96ac6d5cf6745ae464ae4588.png\" style=\"height:16px; width:16px\" />Gi&aacute;o &aacute;n c&aacute;c b&agrave;i tập yoga l&agrave;m khỏe c&aacute;c nh&oacute;m cơ</p>\r\n\r\n<p><img alt=\"\" src=\"https://salt.tikicdn.com/ts/product/53/64/19/ef49ddbf96ac6d5cf6745ae464ae4588.png\" style=\"height:16px; width:16px\" />Gi&aacute;o &aacute;n c&aacute;c b&agrave;i tập yoga hỗ trợ trị liệu</p>\r\n\r\n<p><img alt=\"\" src=\"https://salt.tikicdn.com/ts/product/53/64/19/ef49ddbf96ac6d5cf6745ae464ae4588.png\" style=\"height:16px; width:16px\" />Gi&aacute;o &aacute;n c&aacute;c b&agrave;i tập yoga v&agrave; dụng cụ</p>\r\n\r\n<p>S&aacute;ch c&oacute; 350 trang, khổ 19*27, in giấy b&oacute;ng C150 đẹp, b&igrave;a mềm.</p>\r\n', 1, 1, 10, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'Đừng Để Mất Bò - 7 Bước Quản Lý Cửa Hàng Hiệu Quả Và Chống Thất Thoát', 'matbo.jpg', 1, 149, 'ĐỪNG ĐỂ MẤT BÒ MỚI LO LÀM CHUỒNG!\r\nBạn đang quản lý hay làm chủ một cửa hàng nhưng công việc kinh doanh lại không được suôn sẻ. Bạn luôn phải đau đầu vì những vấn đề như...', '<h2>ĐỪNG ĐỂ MẤT B&Ograve; MỚI LO L&Agrave;M CHUỒNG!</h2>\r\n\r\n<p>Bạn đang&nbsp;<strong>quản l&yacute;</strong>&nbsp;hay l&agrave;m&nbsp;<strong>chủ một cửa h&agrave;ng</strong>&nbsp;nhưng c&ocirc;ng việc kinh doanh lại kh&ocirc;ng được su&ocirc;n sẻ. Bạn lu&ocirc;n phải&nbsp;<strong>đau đầu</strong>&nbsp;v&igrave; những vấn đề như:&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Th&aacute;ng n&agrave;o cũng c&oacute; một lượng ng&acirc;n quỹ &ldquo;kh&ocirc;ng c&aacute;nh m&agrave; bay&rdquo;.</li>\r\n	<li>Kh&oacute; tuyển người, nh&acirc;n vi&ecirc;n &ldquo;đến rồi đi&rdquo; m&agrave; kh&ocirc;ng ai gắn b&oacute;.</li>\r\n	<li>Nh&acirc;n vi&ecirc;n đi l&agrave;m trễ, vi phạm nội quy, n&oacute;i ho&agrave;i cũng kh&ocirc;ng thay đổi.</li>\r\n	<li>Hay dạy m&atilde;i nhưng nh&acirc;n vi&ecirc;n vẫn kh&ocirc;ng l&agrave;m được việc.</li>\r\n</ul>\r\n\r\n<p>Đừng đi t&igrave;m c&aacute;ch gỡ rối ở đ&acirc;u xa x&ocirc;i, quyển s&aacute;ch n&agrave;y&nbsp;sẽ gi&uacute;p bạn giải quyết TẤT CẢ những vấn đề tr&ecirc;n theo một c&aacute;ch&nbsp;<strong>khoa học v&agrave; hiệu quả</strong>&nbsp;nhất.&nbsp;</p>\r\n\r\n<p><strong>Quyển s&aacute;ch mang đến cho bạn:</strong></p>\r\n\r\n<ul>\r\n	<li><strong>3 bước</strong>&nbsp;tuyển chọn v&agrave; huấn luyện để c&oacute; được đội ngũ&nbsp;<strong>nh&acirc;n vi&ecirc;n xuất sắc</strong>.</li>\r\n	<li>C&aacute;ch thức&nbsp;<strong>tổ chức</strong>&nbsp;bộ m&aacute;y, ph&acirc;n chia c&ocirc;ng việc, hướng đến&nbsp;<strong>tự động h&oacute;a</strong>&nbsp;hoạt động kinh doanh.</li>\r\n	<li><strong>2 phương ph&aacute;p</strong>&nbsp;để&nbsp;<strong>đ&ocirc;n đốc</strong>&nbsp;nh&acirc;n vi&ecirc;n l&agrave;m việc chăm chỉ, nghi&ecirc;m t&uacute;c m&agrave; kh&ocirc;ng cảm thấy ức chế.</li>\r\n	<li><strong>Đặc biệt</strong>&nbsp;l&agrave; danh s&aacute;ch hơn&nbsp;<strong>20 chi&ecirc;u tr&ograve; gian lận</strong>, trộm cắp phổ biến, vẫn đang &acirc;m thầm diễn ra v&agrave; lấy đi h&agrave;ng tỷ đồng mỗi năm tại c&aacute;c cửa h&agrave;ng.</li>\r\n</ul>\r\n\r\n<p><strong>Quyển s&aacute;ch n&agrave;y d&agrave;nh cho:</strong></p>\r\n\r\n<ul>\r\n	<li>Người đang kinh doanh cửa h&agrave;ng, nh&agrave; h&agrave;ng, c&agrave; ph&ecirc; hoặc m&ocirc; h&igrave;nh chuỗi.&nbsp;</li>\r\n	<li>Những ai gặp kh&oacute; khăn trong việc tự động h&oacute;a doanh nghiệp.</li>\r\n	<li>Những ai đang đau đầu trong c&ocirc;ng t&aacute;c kiểm so&aacute;t hoạt động của nh&acirc;n vi&ecirc;n.</li>\r\n	<li>Hay bất kỳ ai y&ecirc;u th&iacute;ch kinh doanh v&agrave; ấp ủ giấc mơ l&agrave;m gi&agrave;u từ một doanh nghiệp vững bền.</li>\r\n</ul>\r\n\r\n<p>H&atilde;y mua ngay quyển s&aacute;ch n&agrave;y để c&oacute; trong tay những&nbsp;<strong>giải ph&aacute;p tuyệt vời</strong>&nbsp;cho cửa h&agrave;ng của bạn!</p>\r\n', 1, 1, 6, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'Quản Lý Chiến Lược MBA Trong Tầm Tay - The Portable MBA In Strategy', 'MBA.jpg', 1, 154, 'QUẢN LÝ CHIẾN LƯỢC MBA TRONG TẦM TAY - THE PORTABLE MBA IN STRATEGY\r\n\r\nKhông có chiến lược, các tổ chức giống như một con thuyền không người lái và đi lòng vòng. Nó giống như một con tàu không có hải trình cố định, và không có nơi nào để tới...', '<p><strong>QUẢN L&Yacute; CHIẾN LƯỢC MBA TRONG TẦM TAY - THE PORTABLE MBA IN STRATEGY</strong></p>\r\n\r\n<p><em>Kh&ocirc;ng c&oacute; chiến lược, c&aacute;c tổ chức giống như một con thuyền kh&ocirc;ng người l&aacute;i v&agrave; đi l&ograve;ng v&ograve;ng. N&oacute; giống như một con t&agrave;u kh&ocirc;ng c&oacute; hải tr&igrave;nh cố định, v&agrave; kh&ocirc;ng c&oacute; nơi n&agrave;o để tới.</em></p>\r\n\r\n<p>Tr&ecirc;n thế giới, c&oacute; rất nhiều doanh nghiệp, nhất l&agrave; c&aacute;c doanh nghiệp vừa v&agrave; nhỏ, c&aacute;c start-up, kh&ocirc;ng quan t&acirc;m đầy đủ đến c&ocirc;ng t&aacute;c quản trị chiến lược m&agrave; vẫn hoạt động b&igrave;nh thường. Nhưng thực tế cũng chỉ ra rằng tại những doanh nghiệp&nbsp;<strong>ph&aacute;t triển năng động v&agrave; hiệu quả</strong>, nhất l&agrave; đối với những c&ocirc;ng ty c&oacute; qu&aacute; tr&igrave;nh vươn l&ecirc;n tầm v&oacute;c kinh doanh to&agrave;n cầu nhanh ch&oacute;ng, như Microsoft hay Apple chẳng hạn, th&igrave; c&ocirc;ng t&aacute;c&nbsp;<strong>quản trị chiến lược to&agrave;n diện rất được coi trọng&nbsp;ngay từ khi khởi nghiệp</strong>.</p>\r\n\r\n<p><img alt=\"\" src=\"https://salt.tikicdn.com/ts/tmp/64/a7/86/4fc6f1d1e7f10ff21a51f40cb469b9e3.jpg\" style=\"height:396px; width:635px\" /></p>\r\n\r\n<p>Vậy điểm kh&aacute;c biệt giữa doanh nghiệp c&oacute; v&agrave; kh&ocirc;ng c&oacute; &aacute;p dụng c&ocirc;ng cụ quản trị chiến lược l&agrave; g&igrave;? v&agrave; lợi &iacute;ch m&agrave; c&ocirc;ng t&aacute;c quản trị chiến lược mang lại cho doanh nghiệp bao gồm những g&igrave;? Hay c&oacute; thể n&oacute;i ngắn gọn hơn: vai tr&ograve; v&agrave; lợi &iacute;ch của quản trị chiến lược như thế n&agrave;o? C&acirc;u hỏi sẽ được giải đ&aacute;p trong quyển s&aacute;ch m&agrave; SG Trading sắp giới thiệu đến c&aacute;c bạn.</p>\r\n\r\n<p><strong>Quản L&yacute; Chiến Lược MBA Trong Tầm Tay</strong>&nbsp;được bi&ecirc;n dịch từ quyển s&aacute;ch The Portable MBA In Strategy đ&atilde; xuất bản hơn 500.000 bản tr&ecirc;n to&agrave;n thế giới, l&agrave; quyển s&aacute;ch ưa th&iacute;ch của sinh vi&ecirc;n ở c&aacute;c trường đại học kinh doanh h&agrave;ng đầu tr&ecirc;n thế giới.&nbsp;</p>\r\n\r\n<p>Mục đ&iacute;ch của cuốn&nbsp;Quản L&yacute; Chiến Lược MBA Trong Tầm Tay - The Portable MBA In Strategy cung cấp tư duy v&agrave; khả năng thực h&agrave;nh tối ưu trong lĩnh vực quản trị chiến lược cho c&aacute;c đối tượng bạn đọc:</p>\r\n\r\n<ul>\r\n	<li>C&aacute;c nh&agrave; quản l&yacute;, những người đ&atilde; c&oacute; bằng MBA quan t&acirc;m đến việc cập nhập kiến thức về quản trị chiến lược.</li>\r\n	<li>Bất k&igrave; ai đang l&agrave;m việc tại c&aacute;c c&ocirc;ng ty muốn t&igrave;m hiểu về mục đ&iacute;ch, bản chất của chiến lược kinh doanh.</li>\r\n	<li>C&aacute;c bạn trẻ, sinh vi&ecirc;n đang hoặc c&oacute; &yacute; định khởi nghiệp kinh doanh, th&igrave; đ&acirc;y l&agrave; nguồn t&agrave;i liệu tổng hợp c&aacute;c nh&agrave; tư tưởng h&agrave;ng đầu trong lĩnh vực n&agrave;y.</li>\r\n</ul>\r\n\r\n<p>Quyển s&aacute;ch cung cấp cho bạn c&aacute;ch tư duy, ph&acirc;n t&iacute;ch v&agrave; thực thi mới mẻ nhất từ kinh nghiệm của c&aacute;c chuy&ecirc;n gia, gi&aacute;o sư t&ecirc;n tuổi thuộc c&aacute;c trường đại học h&agrave;ng đầu thế giới. Machael E.Porter của&nbsp;<strong>Trường Kinh doanh Harvard</strong>&nbsp;sẽ chỉ cho bạn c&aacute;ch thừc đẩy mạnh lợi thế cạnh tranh th&ocirc;ng qua một chiến lược to&agrave;n cầu. C.K.Prahalad giải th&iacute;ch về giải ph&aacute;p tạo dựng v&agrave; th&uacute;c đẩy những năng lực cốt l&otilde;i - một chiến lược đ&atilde; dẫn c&aacute;c tổ chức đến với th&agrave;nh c&ocirc;ng vượt trội. Jeffrey Sample của trường Kinh doanh London tr&igrave;nh b&agrave;y về sự th&aacute;ch thức của Internet v&agrave; lĩnh vực kinh doanh điện tử với nhiều &yacute; tưởng nền tảng của ch&uacute;ng t&ocirc;i về chiến lược.</p>\r\n\r\n<p>Bạn cũng sẽ nắm bắt được những&nbsp;<strong>giải ph&aacute;p chiến lược</strong>&nbsp;cần thiết cho một tổ chức v&agrave; c&aacute;c đơn vị kinh doanh, kể cả c&aacute;c chiến lược li&ecirc;n quan đến ch&iacute;nh trị - nhu cầu quản l&yacute; c&aacute;c mối quan hệ với những bộ phận li&ecirc;n quan của những hiệp hội quần ch&uacute;ng, thương mại, c&aacute;c tổ chức ch&iacute;nh phủ, c&aacute;c nh&oacute;m cộng đồng v&agrave; những người c&oacute; lợi &iacute;ch li&ecirc;n quan kh&aacute;c.</p>\r\n\r\n<p><em>Đ&oacute; sẽ l&agrave; kiến thức v&ocirc; c&ugrave;ng hữu &iacute;ch đối với c&aacute;c bạn đang nghi&ecirc;n cứu kiến thức quản trị chiến lược kinh doanh v&agrave; c&aacute;c doanh nh&acirc;n trẻ đang điều h&agrave;nh c&aacute;c start-up!</em></p>\r\n\r\n<p>SG Trading</p>\r\n\r\n<p>----------------------------------------------------------------</p>\r\n\r\n<p>Mục lục</p>\r\n\r\n<p>PHẦN 1: CHIẾN THẮNG TR&Ecirc;N THỊ TRƯỜNG</p>\r\n\r\n<p>1. QUẢN TRỊ CHIẾN LƯỢC THỊ TRƯỜNG</p>\r\n\r\n<p>2. CHIẾN LƯỢC TẬP ĐO&Agrave;N QUẢN TRỊ NH&Oacute;M DOANH NGHIỆP</p>\r\n\r\n<p>3. CHIẾN LƯỢC ĐƠN VỊ KINH DOANH</p>\r\n\r\n<p>4. TĂNG CƯỜNG LỢI THẾ CẠNH TRANH TH&Ocirc;NG QUA CHIẾN LƯỢC TO&Agrave;N CẦU</p>\r\n\r\n<p>5. CHIẾN LƯỢC D&Agrave;NH CHO DOANH NGHIỆP NHỎ</p>\r\n\r\n<p>6. CHIẾN LƯỢC KỸ THUẬT SỐ&nbsp;</p>\r\n\r\n<p>7. CHIẾN LƯỢC CH&Iacute;NH TRỊ</p>\r\n\r\n<p>PHẦN 2. C&Aacute;C NH&Acirc;N TỐ ĐẦU V&Agrave;O CHIẾN LƯỢC</p>\r\n\r\n<p>8. PH&Aacute;C THẢO M&Ocirc;I TRƯỜNG KINH DOANH</p>\r\n\r\n<p>9. PH&Acirc;N T&Iacute;CH M&Ocirc;I TRƯỜNG VĨ M&Ocirc;</p>\r\n\r\n<p>10. Đ&Aacute;NH GI&Aacute; CHIẾN LƯỢC VỀ T&Agrave;I SẢN DOANH NGHIỆP</p>\r\n\r\n<p>11. S&Aacute;NG TẠO V&Agrave; TẬN DỤNG NĂNG LỰC CỐT L&Otilde;I</p>\r\n\r\n<p>PHẦN 3: HOẠCH ĐỊNH CHIẾN LƯỢC</p>\r\n\r\n<p>12. X&Aacute;C ĐỊNH Đ&Aacute;NH GI&Aacute; CHIẾN LƯỢC</p>\r\n\r\n<p>13. Đ&Aacute;NH GI&Aacute; C&Aacute;C LỰA CHỌN</p>\r\n\r\n<p>PHẦN 4: QUẢN L&Yacute; THAY ĐỔI CHIẾN LƯỢC</p>\r\n\r\n<p>14. C&Aacute;CH TỔ CHỨC LẠI C&Ocirc;NG TY ĐỂ THỰC HIỆN CHIẾN LƯỢC</p>\r\n\r\n<p>15. T&Aacute;I ĐỊNH DẠNG QUY TR&Igrave;NH VẬN H&Agrave;NH</p>\r\n\r\n<p>16. QUẢN TRỊ CHIẾN LƯỢC TH&Ocirc;NG QUA HỆ THỐNG H&Agrave;NH CH&Iacute;NH</p>\r\n\r\n<p>17. TẠO RA PHƯƠNG PH&Aacute;P THỰC THI PH&Ugrave; HỢP</p>\r\n\r\n<p>18. KH&Ocirc;NG C&Oacute; C&Ocirc;NG THỨC CHIẾN LƯỢC</p>\r\n', 1, 1, 1, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'Bình Luận Bộ Luật Hình Sự Năm 2015 -Phần Thứ Hai Các Tội Phạm- Chương XVI: Các Tội Xâm Phạm Sở Hữu – Chương XVII: Các Tội Xâm Phạm Chế Độ Hôn Nhân Và Gia Đình', 'C1617HÌNH-SỰ-ĐINH-VĂN-QUẾ.jpg', 1, 270, 'Trong cuộc sống, không phải bao giờ cũng tròn xoe như quy định của pháp luật. Nhiều trường hợp đi đường bị cướp giật thì người bị giật chỉ hô: cướp! cướp! Chỉ khi mọi người hỏi thì bị hại mới nói: “Nó giật mất túi xác', '<p><em>T</em>rong cu&ocirc;̣c s&ocirc;́ng, kh&ocirc;ng phải bao giờ cũng tròn xoe như quy định của pháp lu&acirc;̣t. Nhi&ecirc;̀u trường hợp đi đường bị cướp gi&acirc;̣t thì người bị gi&acirc;̣t chỉ h&ocirc;: cướp! cướp! Chỉ khi mọi người hỏi thì bị hại mới nói: &ldquo;Nó gi&acirc;̣t m&acirc;́t túi xách của t&ocirc;i&rdquo;. Kẻ có hành vi gian d&ocirc;́i đ&ecirc;̉ chi&ecirc;́m đoạt ti&ecirc;̀n sau khi đã vay được m&ocirc;̣t cách hợp pháp thì bị hại cho rằng mình bị lừa đảo; kẻ tr&ocirc;̣m vào nhà bị chủ nhà đu&ocirc;̉i bắt cũng chỉ h&ocirc; &ldquo;cướp&rdquo;, chứ ít ai h&ocirc; &ldquo;tr&ocirc;̣m&rdquo;! Nhi&ecirc;̀u người nhặt được của rơi đem n&ocirc;̣p cho c&ocirc;ng an, nhưng nhi&ecirc;̀u người chi&ecirc;́m làm của ri&ecirc;ng hoặc bắt chủ sở hữu phải &ldquo;chu&ocirc;̣c&rdquo;. Có người mượn xe của người quen, r&ocirc;̀i nh&acirc;n ti&ecirc;̣n chở khách ki&ecirc;́m ti&ecirc;̀n, nói là mượn m&ocirc;̣t ngày nhưng m&ocirc;̣t tu&acirc;̀n sau mới trả. Có kẻ quá khích đã đ&acirc;̣p phá tài sản của người khác làm cho tài sản bị hư hỏng hoặc kh&ocirc;ng dùng được nữa. Có người vì thi&ecirc;́u trách nhi&ecirc;̣m n&ecirc;n đã g&acirc;y thi&ecirc;̣t hại đ&ecirc;́n tài sản của Nhà nước, cơ quan, t&ocirc;̉ chức, doanh nghi&ecirc;̣p nhưng lại cho rằng mình đã làm h&ecirc;́t trách nhi&ecirc;̣m&hellip;</p>\r\n\r\n<p>Trong quan h&ecirc;̣ h&ocirc;n nh&acirc;n, nhi&ecirc;̀u hành vi pháp lu&acirc;̣t quy định là t&ocirc;̣i phạm nhưng người phạm t&ocirc;̣i thì cho rằng đó là phong tục, t&acirc;̣p quán! Trong gia đình, chuy&ecirc;̣n ch&ocirc;̀ng đánh vợ, b&ocirc;́ mẹ đánh con cái, th&acirc;̣m chí con cái đánh cả cha, mẹ, &ocirc;ng bà nhưng họ cho rằng đó là chuy&ecirc;̣n &ldquo;n&ocirc;̣i b&ocirc;̣&rdquo; của gia đình. Có người tr&ocirc;́n ra nước ngoài đẻ thu&ecirc;, mang ti&ecirc;̀n v&ecirc;̀ nu&ocirc;i con và phụng dưỡng cha mẹ vì họ nghĩ rằng &ldquo;cực chẳng đã&rdquo; chứ họ kh&ocirc;ng mu&ocirc;́n l&agrave;m như vậy&hellip;</p>\r\n\r\n<p>Kể từ ng&agrave;y 01-01-2018, c&aacute;c h&agrave;nh vi n&oacute;i tr&ecirc;n, nếu đ&atilde; đủ yếu tố cấu th&agrave;nh tội phạm th&igrave; sẽ bị xử l&yacute; theo quy định tại Chương XVI (C&aacute;c tội x&acirc;m phạm sở hữu) v&agrave; Chương XVII (C&aacute;c tội x&acirc;m phạm chế độ h&ocirc;n nh&acirc;n v&agrave; gia đ&igrave;nh) được quy định tại Bộ luật H&igrave;nh sự năm 2015<a href=\"file:///C:/Users/Admin/Desktop/Loinoidau%20C16%20C17.doc#_ftn1\">*</a>&nbsp;được sửa đổi, bổ sung năm 2017.</p>\r\n\r\n<p>Tr&ecirc;n thực tế, nh&acirc;̣n thức v&ecirc;̀ pháp lu&acirc;̣t nói chung, nh&acirc;́t là pháp lu&acirc;̣t v&ecirc;̀ hình sự của nhi&ecirc;̀u người còn hạn ch&ecirc;́; các cơ quan ti&ecirc;́n hành t&ocirc;́ tụng ở nhi&ecirc;̀u nơi còn chưa th&ocirc;́ng nh&acirc;́t n&ecirc;n nhi&ecirc;̀u vụ án kéo dài, phải đi&ecirc;̀u tra lại nhi&ecirc;̀u l&acirc;̀n, g&acirc;y nghi ngờ và bức xúc cho dư lu&acirc;̣n. Mặt kh&aacute;c, c&aacute;c tội x&acirc;m phạm sở hữu, cũng như các t&ocirc;̣i x&acirc;m phạm ch&ecirc;́ đ&ocirc;̣ h&ocirc;n nh&acirc;n và gia đình của B&ocirc;̣ lu&acirc;̣t Hình sự năm 2015 c&oacute; nhiều điểm mới so với Bộ luật H&igrave;nh sự năm 1999. V&igrave; vậy, việc hiểu v&agrave; &aacute;p dụng c&aacute;c quy định đ&ocirc;́i với các t&ocirc;̣i phạm này tại Chương XVI v&agrave; Chương XVII của Bộ luật H&igrave;nh sự năm 2015 trong việc đấu tranh v&agrave; ph&ograve;ng ngừa tội phạm l&agrave; rất quan trọng.</p>\r\n\r\n<p>Tiếp theo c&aacute;c cuốn: &ldquo;B&igrave;nh luận Bộ luật H&igrave;nh sự năm 2015 (Phần thứ hai &ndash; C&aacute;c tội phạm), Chương XIV: C&aacute;c tội x&acirc;m phạm t&iacute;nh mạng, sức khỏe, nh&acirc;n phẩm, danh dự của con người&rdquo;; &ldquo;B&igrave;nh luận Bộ luật H&igrave;nh sự năm 2015 (Phần thứ hai &ndash; C&aacute;c tội phạm), Chương XV: C&aacute;c tội x&acirc;m phạm quyền tự do của con người, quyền tự do, d&acirc;n chủ của c&ocirc;ng d&acirc;n; Chương XXIII: C&aacute;c tội phạm về chức vụ&rdquo;, Nh&agrave; xuất bản Th&ocirc;ng tin v&agrave; Truyền th&ocirc;ng phối hợp với t&aacute;c giả Đinh Văn Quế cho ra mắt cuốn s&aacute;ch&nbsp;<strong>&ldquo;B&igrave;nh luận Bộ luật H&igrave;nh sự năm 2015 (Phần thứ hai &ndash; C&aacute;c tội phạm), Chương XVI: C&aacute;c tội x&acirc;m phạm sở hữu; Chương XVII: C&aacute;c tội x&acirc;m phạm chế độ h&ocirc;n nh&acirc;n v&agrave; gia đ&igrave;nh&rdquo;</strong><strong>.</strong></p>\r\n\r\n<p>Dựa v&agrave;o c&aacute;c quy định của Chương XVI v&agrave; Chương XVII, đối chiếu với thực tiễn, t&aacute;c giả đ&atilde; giải th&iacute;ch một c&aacute;ch khoa học về c&aacute;cd&acirc;́u hi&ecirc;̣u c&acirc;́u thànhc&aacute;c tội x&acirc;m phạm x&acirc;m phạm sở hữu, các t&ocirc;̣i x&acirc;m phạm ch&ecirc;́ đ&ocirc;̣ h&ocirc;n nh&acirc;n và gia đình, đồng thời n&ecirc;u ra một số vấn đề vướng mắc trong thực tiễn &aacute;p dụng cần tiếp tục ho&agrave;n thiện.</p>\r\n\r\n<p>Xin tr&acirc;n trọng giới thiệu cuốn s&aacute;ch n&agrave;y đến tất cả bạn đọc!</p>\r\n', 1, 1, 9, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'Thiên Quan Tứ Phúc - Tập 1 (Tặng Kèm 1 Bookmark 2 Mặt)', 'thienquan.jpg', 1, 111.9, 'Chuyện bắt đầu từ tám trăm năm trước\r\n\r\nMột thái tử điện hạ được vạn người ngưỡng vọng, phi thăng thành tiên. Những tưởng thế là mỹ mãn, nào ngờ y phi...', '<p>Chuyện bắt đầu từ t&aacute;m trăm năm trước</p>\r\n\r\n<p>Một th&aacute;i tử điện hạ được vạn người ngưỡng vọng, phi thăng th&agrave;nh ti&ecirc;n. Những tưởng thế l&agrave; mỹ m&atilde;n, n&agrave;o ngờ y phi thăng hai lần th&igrave; hai lần bị đ&aacute;nh xuống trần, từ thần tướng tay hoa tay kiếm mu&ocirc;n d&acirc;n thờ phụng trở th&agrave;nh ti&ecirc;n nh&acirc;n đồng n&aacute;t lang thang khắp ng&otilde; hẻm hang c&ugrave;ng, kh&ocirc;ng c&oacute; lấy một ng&ocirc;i miếu thờ, từ giai thoại th&agrave;nh tr&ograve; cười của tam giới. Đến lần n&agrave;y, sau t&aacute;m trăm năm, y rốt cuộc cũng phi thăng lần thứ ba, một lần nữa trở lại Thi&ecirc;n đ&igrave;nh.</p>\r\n\r\n<p>Gặp lại bao người xưa, những chuyện cũ cũng lần lượt được v&eacute;n l&ecirc;n.</p>\r\n\r\n<p>T&aacute;m trăm năm qua lưu lạc hồng trần, y đ&atilde; trải qua những khổ nạn g&igrave;? Rốt cuộc l&agrave; ai đ&atilde; đẩy y đến thảm cảnh ấy?</p>\r\n\r\n<p><strong>Đ&ocirc;i n&eacute;t t&aacute;c giả:</strong></p>\r\n\r\n<p>Mặc Hương Đồng Khứu, t&aacute;c giả của trang văn học mạng Tấn Giang, được rất nhiều độc giả biết tới qua cuốn tiểu thuyết Ma đạo tổ sư. Hai tiểu thuyết kh&aacute;c l&agrave; Hệ thống tự cứu của nh&acirc;n vật phản diện v&agrave; Thi&ecirc;n quan tứ ph&uacute;c cũng đ&aacute;nh gi&aacute; cao tr&ecirc;n c&aacute;c trang văn học.</p>\r\n\r\n<p>C&aacute;c t&aacute;c phẩm của Mặc Hương Đồng Khứu được bạn đọc y&ecirc;u th&iacute;ch bởi t&igrave;nh tiết chặt chẽ, c&acirc;u chuyện mới lạ v&agrave; mang gi&aacute; trị nh&acirc;n văn s&acirc;u sắc, c&ugrave;ng phong c&aacute;ch h&agrave;i hước đặc trưng.</p>\r\n', 1, 1, 1, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'Thiên Quan Tứ Phúc - Tập 2 (Bìa Mềm)', 'tap2.jpg', 1, 119.9, 'Ngược dòng thời gian quay lại tám trăm năm trước, khi Tiên Lạc đương lúc hưng thịnh, tai ương chưa ập đến, nước chưa mất, nhà chưa tan. Bấy giờ, Tạ Liên vẫn còn là thái tử điện hạ được người người ngưỡng vọng, y chưa mất cha...', '<p>Ngược d&ograve;ng thời gian quay lại t&aacute;m trăm năm trước, khi Ti&ecirc;n Lạc đương l&uacute;c hưng thịnh, tai ương chưa ập đến, nước chưa mất, nh&agrave; chưa tan. Bấy giờ, Tạ Li&ecirc;n vẫn c&ograve;n l&agrave; th&aacute;i tử điện hạ được người người ngưỡng vọng, y chưa mất cha mẹ, vẫn c&ograve;n người th&acirc;n v&agrave; thuộc hạ đồng h&agrave;nh. Tr&ecirc;n đường Thần V&otilde;, y cứu một đứa b&eacute; mang mệnh Thi&ecirc;n s&aacute;t c&ocirc; tinh rồi đốt l&ecirc;n kh&aacute;t vọng sống vốn đ&atilde; tắt lịm trong tim cậu. Y mang trong m&igrave;nh nhiệt huyết muốn đi ngược lại những điều vẫn lu&ocirc;n l&agrave; quy phạm, trước tượng Thần V&otilde; Đại Đế, y n&oacute;i m&igrave;nh kh&ocirc;ng sợ đối kh&aacute;ng với đất trời. Thế rồi</p>\r\n\r\n<p>Năm đ&oacute; mười bảy tuổi, y ch&eacute;m quỷ phi thăng.</p>\r\n\r\n<p>Năm đ&oacute; hạn khắp nơi, t&oacute;c phụ vương bạc trắng.</p>\r\n\r\n<p>Năm đ&oacute; họa ngập đầu, y chẳng thể cản ngăn</p>\r\n\r\n<p><strong>Đ&ocirc;i n&eacute;t t&aacute;c giả</strong></p>\r\n\r\n<p>Nghề nghiệp: Tiểu thuyết gia của mạng văn học Tấn Giang.</p>\r\n\r\n<p>&quot;Gặp được người, chỉ ba chữ n&agrave;y th&ocirc;i đ&atilde; l&agrave; một trong những chuyện l&atilde;ng mạn nhất thế giới.&rdquo;</p>\r\n\r\n<p>C&aacute;c t&aacute;c phẩm đ&atilde; xuất bản tại Việt Nam: Ma đạo tổ sư, Hệ thống tự cứu của nh&acirc;n vật phản diện.</p>\r\n', 1, 1, 11, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 'Sách Trinh Thám, Kinh Dị: BATTLE ROYALE - Trò Chơi Sinh Tử (Một Trong Những Novel \"Huyền Thoại\" Ăn Khách Nhất Tại Nhật Bản / Tặng Kèm Bookmark Green Life)', 'trinhtham1.jpg', 1, 193.5, 'Sách Trinh Thám, Kinh Dị: BATTLE ROYALE - Trò Chơi Sinh Tử (Một Trong Những Novel \"Huyền Thoại\" Ăn Khách Nhất Tại Nhật Bản / Tặng Kèm Bookmark Green Life)\r\n\r\n \r\n\r\nDù là thực hay mơ, chúng ta vẫn sẽ số...', '<p><strong>Sách Trinh Thám, Kinh Dị: BATTLE ROYALE - Tr&ograve; Chơi Sinh Tử (Một Trong Những Novel &quot;Huyền Thoại&quot; Ăn Kh&aacute;ch Nhất Tại Nhật Bản / Tặng Kèm Bookmark Green Life)</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>Dù là thực hay mơ, chúng ta v&acirc;̃n sẽ s&ocirc;́</em></p>\r\n\r\n<p><em>đ&ecirc;́n khi chúng ta th&ocirc;i kh&ocirc;ng s&ocirc;́ng!</em></p>\r\n\r\n<p><em>&ldquo;Cho d&ugrave; l&agrave; bao xa đi chăng nữa, h&atilde;y chạy hết sức cho những g&igrave; m&agrave; m&igrave;nh xứng đ&aacute;ng. Chạy th&ocirc;i.&rdquo;.</em></p>\r\n\r\n<p><em>BATTLE ROYALE - Tr&ograve; Chơi Sinh Tử hứa hẹn mang đ&ecirc;́n những gi&acirc;y phút nghẹt thở qua từng trang vi&ecirc;́t!</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Giới Thi&ecirc;̣u:</p>\r\n\r\n<p>Ngất lịm tr&ecirc;n chiếc xe bu&yacute;t chở cả lớp đi tham quan, Shuya c&ugrave;ng 41 người bạn tỉnh dậy trong một ng&ocirc;i trường xa lạ, tại một h&ograve;n đảo hoang vắng. Tr&ecirc;n cổ mỗi đứa c&oacute; đeo một chiếc v&ograve;ng kim loại kỳ qu&aacute;i. Một người đ&agrave;n &ocirc;ng lạ mặt xuất hiện c&ugrave;ng ba t&ecirc;n l&iacute;nh vũ trang, tự xưng l&agrave; gi&aacute;o vi&ecirc;n chủ nhiệm mới, th&ocirc;ng b&aacute;o rằng cả lớp đ&atilde; được chọn để tham gia &ldquo;Cuộc thực nghiệm chiến đấu thuộc Chương Tr&igrave;nh số 68&rdquo; của Ch&iacute;nh phủ.<br />\r\n<br />\r\nV&agrave; &ldquo;tr&ograve; chơi&rdquo; &aacute;c mộng bắt đầu!<br />\r\n<br />\r\nCho&aacute;ng v&aacute;ng v&agrave; đau buồn tột độ, Battle Royale - Tr&ograve; chơi sinh tử dựng l&ecirc;n một thế giới phi nh&acirc;n đến đi&ecirc;n rồ, nơi c&aacute;i &aacute;c tự do, nh&acirc;n quyền trở th&agrave;nh hiểm họa, v&agrave; những gi&aacute; trị đạo đức căn bản bị ch&agrave; đạp lạnh l&ugrave;ng; nhưng đồng thời cũng l&agrave; c&acirc;u chuyện về c&aacute;i thiện v&agrave; t&igrave;nh y&ecirc;u, bền bỉ ng&acirc;n l&ecirc;n ngay trong những ho&agrave;n cảnh t&agrave;n khốc nhất.</p>\r\n', 1, 1, 1, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 'Truyện Trinh Thám Cực Hay Và Hấp Dẫn: Án Mạng Trên Chuyến Tàu Tốc Hành Phương Đông (Tái Bản)', 'trinhtham2.jpg', 1, 99.5, 'Truyện Trinh Thám Cực Hay Và Hấp Dẫn: Án Mạng Trên Chuyến Tàu Tốc Hành Phương Đông (Tái Bản)\r\n\r\n“Kẻ sát nhân đang đồng hành cùng chúng ta – trên chuyến tàu này…”\r\n\r\nVừa quá nửa đêm, chuyến tàu tốc hành phương Đông nổi tiếng buộc phải ngừng lại vì tuyết rơ', '<p><em><strong>Truyện Trinh Th&aacute;m Cực Hay V&agrave; Hấp Dẫn: &Aacute;n Mạng Tr&ecirc;n Chuyến T&agrave;u Tốc H&agrave;nh Phương Đ&ocirc;ng (T&aacute;i Bản)</strong></em></p>\r\n\r\n<p>&ldquo;Kẻ s&aacute;t nh&acirc;n đang đồng h&agrave;nh c&ugrave;ng ch&uacute;ng ta &ndash; tr&ecirc;n chuyến t&agrave;u n&agrave;y&hellip;&rdquo;</p>\r\n\r\n<p>Vừa qu&aacute; nửa đ&ecirc;m, chuyến t&agrave;u tốc h&agrave;nh phương Đ&ocirc;ng nổi tiếng buộc phải ngừng lại v&igrave; tuyết rơi qu&aacute; d&agrave;y. V&agrave;o buổi s&aacute;ng, tay triệu ph&uacute; Simon Ratchett được ph&aacute;t hiện nằm chết trong toa ri&ecirc;ng của m&igrave;nh với mười hai nh&aacute;t dao, cửa khoang được kh&oacute;a từ b&ecirc;n trong. Một trong những h&agrave;nh kh&aacute;ch c&oacute; mặt tr&ecirc;n chuyến t&agrave;u l&agrave; thủ phạm.</p>\r\n\r\n<p>Một m&igrave;nh giữa cơn b&atilde;o tuyết c&ugrave;ng nh&acirc;n dạng m&ugrave; mờ về t&ecirc;n s&aacute;t nh&acirc;n qua lời chứng của mọi người, th&aacute;m tử Hercule Poirot phải t&igrave;m ra ch&acirc;n tướng kẻ thủ &aacute;c giữa mười hai kẻ th&ugrave; của nạn nh&acirc;n, trước khi t&ecirc;n giết người kịp đ&agrave;o tho&aacute;t&hellip;</p>\r\n', 1, 1, 1, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 'Tokyo Hoàng Đạo Án', 'trinhtham3.jpg', 1, 67.5, 'Tokyo Hoàng Đạo Án\r\n\r\nHãy tới đây, hạ giới và vòm trời Bombô\r\n\r\nTa sẽ giết các con và cháu ta\r\n\r\nCắt thân thể chúng rời rã ra\r\n\r\nGhép phần đẹp nhất thành...', '<p><strong>Tokyo Ho&agrave;ng Đạo &Aacute;n</strong></p>\r\n\r\n<p><em>H&atilde;y tới đ&acirc;y, hạ giới v&agrave; v&ograve;m trời Bomb&ocirc;</em></p>\r\n\r\n<p><em>Ta sẽ giết c&aacute;c con v&agrave; ch&aacute;u ta</em></p>\r\n\r\n<p><em>Cắt th&acirc;n thể ch&uacute;ng rời r&atilde; ra</em></p>\r\n\r\n<p><em>Gh&eacute;p phần đẹp nhất th&agrave;nh người mới</em></p>\r\n\r\n<p><em>Mảnh miếng c&ograve;n lại đem ch&ocirc;n xa</em></p>\r\n\r\n<p>Đối với phụ nữ, ta c&oacute; niềm đam m&ecirc; m&atilde;nh liệt. Đối với c&aacute;i đẹp, ta nhất mực t&ocirc;n s&ugrave;ng.</p>\r\n\r\n<p>Sau ba chục năm nghi&ecirc;n cứu chi&ecirc;m tinh v&agrave; giả kim thuật, ta ấp ủ ước vọng tạo ra một tấm th&acirc;n phụ nữ to&agrave;n b&iacute;ch hơn hết thảy nhan sắc tr&ecirc;n đời.</p>\r\n\r\n<p>Ta b&iacute; mật l&ecirc;n kế hoạch giết s&aacute;u đứa con g&aacute;i v&agrave; ch&aacute;u g&aacute;i trinh trắng trong nh&agrave;, lựa lấy đầu, ngực, bụng, h&ocirc;ng, đ&ugrave;i v&agrave; ch&acirc;n ho&agrave;n mỹ nhất để luyện th&agrave;nh một sinh thể mới. Những phần dư, ta sẽ đem ch&ocirc;n theo một sơ đồ ho&agrave;ng đạo.</p>\r\n\r\n<p>Chưa kịp l&agrave;m g&igrave; cả, ta đ&atilde; bị đập sọ đến chết.</p>\r\n\r\n<p>Bất ngờ thay!</p>\r\n\r\n<p>Bất ngờ hơn l&agrave;, sau khi ta chết thảm, s&aacute;u đứa ấy cũng phơi x&aacute;c ở nhiều nơi, đứa mất đầu, đứa mất ngực, đứa mất bụng&hellip; như ta đ&atilde; định.</p>\r\n\r\n<p>Ai đ&atilde; giết ta rồi ho&agrave;n th&agrave;nh t&acirc;m nguyện của ta vậy? Nữ thần rốt cuộc c&oacute; th&agrave;nh h&igrave;nh kh&ocirc;ng?</p>\r\n\r\n<p>Năm th&aacute;ng tr&ocirc;i qua&hellip; Tất cả những g&igrave; ta c&oacute; thể l&agrave;m chỉ l&agrave; chờ người nơi ấy, chờ người t&igrave;m gi&uacute;p c&acirc;u trả lời cho nghi vấn mỗi ng&agrave;y một cồn c&agrave;o.</p>\r\n\r\n<p><strong>Th&ocirc;ng tin về t&aacute;c giả</strong></p>\r\n\r\n<p><strong>Soji Shimada</strong>&nbsp;l&agrave; một t&aacute;c giả chi&ecirc;m tinh, nh&agrave; thiết kế, ki&ecirc;m nhạc sĩ nổi tiếng người Nhật Bản.</p>\r\n\r\n<p><strong><em>Tokyo ho&agrave;ng đạo &aacute;n</em></strong>&nbsp;l&agrave;&nbsp;<strong><a href=\"http://tiki.vn/sach-truyen-tieng-viet/sach-van-hoc/trinh-tham.html\">tiểu thuyết trinh th&aacute;m</a>&nbsp;<a href=\"http://tiki.vn/sach-truyen-tieng-viet/sach-van-hoc/kinh-di.html\">kinh dị&nbsp;</a></strong>đầu tay của &ocirc;ng, đ&atilde; được vinh danh ở giải Edogawa Rampo v&agrave;o năm 1981.</p>\r\n\r\n<p>Hơn 30 năm qua,&nbsp;<strong><em>Tokyo ho&agrave;ng đạo &aacute;n</em></strong>&nbsp;vẫn nằm trong danh s&aacute;ch c&aacute;c t&aacute;c phẩm văn học b&aacute;n chạy nhất của Nhật Bản, đ&atilde; được dịch ra nhiều thứ tiếng như Anh, Ph&aacute;p, Nga, Trung, Th&aacute;i Lan, Tagalog&hellip;</p>\r\n', 1, 1, 1, 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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

INSERT INTO `setting` (`id`, `name`, `logo`, `address`, `email`, `phone`, `social`, `created_at`, `updated_at`) VALUES
(1, 'Nhà sách EShop', 'logo2.png', 'Công viên phần mềm, Toà nhà Innovation lô 24, Quang Trung, Quận 12, Thành phố Hồ Chí Minh', 'lamtqps14394@fpt.edu.vn', '0909696969', 'fb/yjngji12', '2021-04-19 20:13:25', '2021-04-22 06:26:15');

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
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `post_category`
--
ALTER TABLE `post_category`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

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
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
