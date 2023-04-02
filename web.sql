-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2023 at 07:33 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `createAt` datetime DEFAULT NULL,
  `updateAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `createAt`, `updateAt`) VALUES
('admin', '', NULL, NULL),
('username', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  `approved` tinyint(1) DEFAULT NULL,
  `content` varchar(10000) DEFAULT NULL,
  `news_id` int(11) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `parent` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `date`, `approved`, `content`, `news_id`, `user_id`, `parent`) VALUES
(1, '2021-12-12 00:00:00', 0, 'Bất ngờ quá', 1, 'admin@hcmut.edu.vn', NULL),
(2, '2021-12-12 00:00:00', 0, 'Bất ngờ quá', 1, 'admin@hcmut.edu.vn', NULL),
(3, '2021-12-12 00:00:00', 0, 'Không thể tin được', 2, 'user@hcmut.edu.vn', NULL),
(5, '2022-12-14 01:23:14', 0, 'Tào lao', 1, 'admin@hcmut.edu.vn', NULL),
(6, '2022-12-16 07:53:53', 1, 'hay', 1, 'admin@hcmut.edu.vn', NULL),
(7, '2022-12-16 07:54:06', 1, 'quá hay', 1, 'admin@hcmut.edu.vn', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(1000) DEFAULT NULL,
  `createAt` datetime DEFAULT NULL,
  `updateAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`, `address`, `createAt`, `updateAt`) VALUES
(1, 'Chi nhánh TPHCM', '268 Lý Thường Kiệt, Phường 14, Quận 10, TPHCM', NULL, NULL),
(2, 'Chi nhánh Hà Nội', 'Hà Nội', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `content` varchar(10000) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `status`, `date`, `description`, `content`, `title`) VALUES
(1, 1, '2022-11-11 00:00:00', 'Phong cách thời trang nam là một trong những yếu tố ảnh hưởng đến sự tự tin của các chàng trai. Tìm hiểu xem các phong cách thời trang nam nào đang làm mưa làm gió và khiến chị em đổ rần rần trong năm 2022 nhé!\r\n\r\n', 'Phong cách thời trang nam Hàn Quốc:\nLàn sóng Hallyu đã có một sự ảnh hưởng không nhỏ đối với phong cách thời trang nam châu Á và cả thế giới. Phong cách Hàn Quốc mang lại sự trẻ trung, thanh lịch, khiến chị em đều bị thu hút từ ánh nhìn đầu tiên. Nếu “u mê” phong cách này thì bạn đừng quên sắm những chiếc quần jeans ống suông, quần tây, áo thun và đặc biệt là những chiếc sơ mi rộng trong tủ đồ nhé. Các items này mà mix với nhau sẽ mang đến một chàng lãng tử chuẩn “oppa” Hàn Quốc ngay.\n<br>\n<br>\nPhong cách thời trang nam Trung Quốc:\nPhong cách của các “nam thần” trong phim Trung Quốc cũng nhiều lần khiến các chị em đứng ngồi không yên. Với đất nước tỷ dân thì phong cách thời trang Trung Quốc nam cũng rất đa dạng, từ phong trần cho đến lịch lãm, từ phong cách trẻ trung đến trưởng thành đều xuất hiện ở đất nước này. Dù các bạn theo đuổi sự tươi trẻ, khỏe khoắn hay lịch sự, chín chắn thì với những tips phối đồ với phong cách thời trang Trung Quốc nam đều sẽ khiến “ai đó” phải ngước nhìn.\n<br>\n<br>\nPhong cách thời trang nam tối giản:\nPhong cách thời trang tối giản cho nam – “Minimalism style” được nhiều người yêu thích khi vừa dễ phối đồ, lại không cần phải quá đau đầu trong việc lựa chọn trang phục. Đặc điểm của phong cách này đầu tiên cần kể đến màu sắc. Những tông màu cho phong cách thời trang nam đơn giản thường là tông trung tính, không quá 3 màu sắc trong 1 outfit. Những màu thường được Minimalist (người theo chủ nghĩa tối giản) lựa chọn là đen, trắng, ghi, be, nâu, xanh navy. Về thiết kế, phong cách minimalism thường hợp với những trang phục giản lược các đường nét rườm rà, không nhấn nhá nhiều chi tiết. Phong cách mang đến sự đơn giản nhưng không nhạt nhoà, mà đằng sau đó là một chàng trai, một quý ông tinh tế và đầy cuốn hút.\n<br>\n<br>\nPhong cách thời trang nam street style:\nSự phong trần, mạnh mẽ được thể hiện nhiều nhất ở phong cách đường phố. Những chàng trai cá tính thường rất phá cách mỗi khi “lên đồ”, nhưng tất cả đều thể hiện được vẻ nam tính, quyến rũ của mình. Với style này, bạn có thể thoải mái mix đồ theo cách mình ưng, bởi không có chuẩn mực nào dành cho trang phục streetwear. Bạn chỉ cần tự tin là chính mình và mặc những gì mình thích, tất cả đều sẽ phải ngoái nhìn với sự cá tính này.\n', 'NHỮNG PHONG CÁCH PHỐI ĐỒ THỜI TRANG NAM HOT NHẤT HIỆN NAY\n'),
(2, 1, '2022-02-04 00:00:00', 'Ngoài Off-White, đêm khai mạc Tuần lễ thời trang nữ Thu-Đông Paris 2022 còn có sự ra mắt ấn tượng của các dự án về thời trang kỹ thuật số để phục vụ cho \"vũ trụ ảo\" (metaverse).', 'Tối 28/2, Tuần lễ thời trang nữ Thu-Đông Paris 2022 đã được khai mạc tại thủ đô nước Pháp, với sự tham dự trực tiếp của nhiều ngôi sao hàng đầu thế giới, trong đó có nữ ca sỹ Rihanna đang mang bầu ở những tháng cuối.\n<br>\n<br>\nTuần lễ thời trang nữ Thu-Đông năm nay có sự góp mặt của 95 thương hiệu thời trang lớn của thế giới, trong đó 13 nhà mốt tham gia theo hình thức trực tuyến do lo ngại ảnh hưởng của dịch COVID-19.\n<br>\n<br>\nTrong bối cảnh các biện pháp hạn chế để phòng ngừa dịch COVID-19 đã được nới lỏng trên khắp châu Âu, nhiều tên tuổi lớn như Dior, Chanel và Hermes sẽ tổ chức các buổi trình diễn catwalk trực tiếp trong Tuần lễ thời trang nữ Thu-Đông 2022, trong khi nhà mốt Yves Saint Laurent đã từ chối tham gia.\n<br>\n<br>\nNhiều thương hiệu khác vẫn đang kết hợp giữa hai hình thức trực tuyến và trực tiếp để giới thiệu các bộ trang phục đến với người mua và giới truyền thông. Hình thức này được phát triển trong hai năm qua và vẫn đang được nhiều nhà mốt, ví dụ như Issey Miyake của Nhật Bản, áp dụng.', 'TUẦN LỄ THỜI TRANG NỮ THU-ĐÔNG PARIS 2022 HƯỚNG TỚI VŨ TRỤ ẢO'),
(3, 1, '2022-12-01 10:15:37', 'Thời trang hiện đại đang ngày càng trở nên phóng khoáng, đơn giản, không còn gò bó, ngột ngạt hay diêm dúa, lồng lộn như xưa. Và xu hướng thời trang 2022 cho giới trẻ cũng đang hòa vào xu hướng chung của thời trang hiện đại.\n\n\n', '\r\nThế giới thời trang là một khái niệm rộng lớn và muôn màu. Đâu cần phải đầm đuôi cá hay váy xẻ tà cầu kỳ, lộng lẫy, một chiếc quần jean đơn giản phối với một chiếc áo sơ mi cũng đã trở thành một phong cách rồi đấy. Thời trang nữ thường theo trào lưu, theo cái mà nhiều người quan niệm đó là đẹp, là sang, và chính trào lưu sẽ tạo xu hướng.\r\n<br>\r\n<br>\r\nChiếc quần rách chắc không còn xa lạ gì với các bạn nữ. Nó không những mang lại cho người mặc cảm giác thoải mái, năng động mà còn khiến bạn trở nên nổi bật trước đám đông. Năm 2022, xu hướng này sẽ trở lại mạnh mẽ bởi sự giản dị và hiện đại đang được giới trẻ rất quan tâm.\r\n<br>\r\n<br>\r\nKhông phải vest chỉ dành cho đàn ông, phụ nữ mặc vest còn đẹp hơn rất nhiều, mọi sự sang trọng, tinh tế, sắc sảo đều được thể hiện hết trong phong cách này. Đây là kiểu thời trang công sở độc đáo khi kết hợp với những phụ kiện đi kèm, bạn sẽ trở nên sành điệu hơn rất nhiều.\r\n<br>\r\n<br>\r\nNhững năm gần đây, các trang phục mang họa tiết da động vật như ngựa vằn, da rắn, da cá sấu, da báo, hổ… xuất hiện rất nhiều trong các thiết kế giày cao gót, túi xách, mũ… Đây là thể loại họa tiết cá tính và sành điệu giúp chị em trông thêm tự tin và kiêu hãnh hơn.\r\n\r\n\r\n\r\n\r\n', 'XU HƯỚNG THỜI TRANG 2022: NĂNG ĐỘNG, CÁ TÍNH LÊN NGÔI'),
(4, 1, '2022-12-01 00:00:00', 'Có những trang phục nàng chỉ có thể mặc vào những ngày mùa đầy gió, những ngày mùa đầy mùi hương – đó là những ngày tháng 12, ngày tháng của mùa lễ hội, tiệc tùng và cũng là những ngày mà các vạt nắng đông vẫn còn kịp vương đầy, rạng rỡ, còn chưa bị làm lu mờ bởi những cơn mưa bụi mùa xuân.\r\n\r\n', 'Tháng 12 không chỉ cuốn các nàng đi trong những bộn bề công việc chốn văn phòng mà còn mang đến cho nàng đầy ắp sự thú vị của những ngày lễ, đêm hội, sự kiện gặp gỡ cùng các buổi tiệc tùng. Không còn quá lâu, chỉ còn chưa đầy hai tuần nữa là tới Noel và cũng chỉ còn hơn một tháng nữa là tới tết cổ truyền, nàng đã chuẩn bị gì cho tủ quần áo tháng 12 đặc biệt của mình?\r\n<br>\r\n<br>\r\nCác nhà thiết kế của thương hiệu thời trang Lê House có tiếng là lãng mạn. Họ thường rất kịp thời tung ra thị trường những mẫu thiết kế thời trang quyến rũ nhất, ngọt ngào nhất, sexy nhất và cũng bắt nhịp thị trường nhất. Lần này, họ mang tới tủ quần áo cho các nàng chỉ với hai gam màu đặc biệt. Đó là màu của nắng và màu của đêm…\r\n<br>\r\n<br>\r\nMàu của nắng là những gam màu ấm áp, chói chang, rực rỡ, đong đầy niềm vui và sự hy vọng. Nàng có thể diện những bộ cánh nổi bật nhất, xuống phố, làm những điều cuối cùng của năm trong hanh thông và phấn khích.\r\n<br>\r\n<br>\r\nĐó có thể là những chiếc đầm dài, những váy xòe điệu đà hay là những chiếc đầm chữ A, đầm ôm body siêu quyến rũ… Tất thảy chúng mang màu đỏ, màu vàng – những màu mà chỉ có tia nắng mặt trời mới có. Không khí ấm áp của mùa lễ hội sẽ ùa đến. Không gian lạnh giá của những ngọn gió mùa đông như tan ra bởi những khí sắc như thế. Tháng 12, tủ quần áo của nàng nhất định phải có.\r\n<br>\r\n<br>\r\nNếu là một tín đồ thời trang thật sự, nàng hãy nhớ nhé, tủ quần áo tháng 12 của nàng, chắc chắn không thể thiếu những gam màu của nắng cho những ngày dài rộn rã giúp nàng khoe trọn sắc thắm và những gam màu của đêm cho những niềm vui bất tận giúp nàng tỏa sáng và gắn kết với tất thảy xung quanh…\r\n', 'MÀU NẮNG HAY MÀU ĐÊM SẼ THỐNG LĨNH TỦ QUẦN ÁO THÁNG 12 CỦA NÀNG ?');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `content` varchar(10000) DEFAULT NULL,
  `img` varchar(255) DEFAULT 'public/uploads/product.jpeg',
  `sale` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `price`, `name`, `description`, `content`, `img`, `sale`) VALUES
(1, 150000, 'Áo khoác nam xịn nhất năm', 'Áo khoác nam', '✔️ Áo khoác kaki nam đẹp, phong cách hàn quốc hiện đại giúp bạn phát huy được sự cá tính, năng động của bản thân. \n✔️Áo khoác kaki nam là mẫu áo khoác quen thuộc với hầu hết mọi chàng trai  và các nàng rồi đúng không nào, để phù hợp với gu thời trang hiện đại ngày nay các kiểu Áo khoác kaki được thiết kế đa dạng kiểu dáng lạ mắt mang đến gu thời trang năng động, khỏe khoắn cho người mặc. Các bạn có thể diện Áo khoác kaki nam tới công sở, dạo phố, đi học, dã ngoại,.....đề phù hợp đấy. Hãy nhanh chóng chọn cho mình một kiểu để thay đổi phong cách hàng ngày của bản thân nào.\n📣Chất liệu: kakai 2 lớp\n\n✔️ KÍCH THƯỚC: \nSize S : Dưới 39kg Cao Dưới 1m65\nSize M: 40kg - 55kg Cao Dưới 1m70\nSize L: 56kg - 62kg Cao Dưới 1m75\nSize XL: 63kg - 75kg Cao Dưới 1m78\nSize XXL: 76kg - 80kg Cao Dưới 1m80\nLƯU Ý: những bạn có bụng nên lấy lớn hơn 1 size so với bảng trên ạ. inbox trực tiếp cho shop để được tư vấn chính xác nhất', 'public/img/products/ao_khoac_nam_1.png', 0),
(2, 150000, 'Áo khoác nam đen', 'Áo khoác nam', '✔️ áo khoác đẹp, phong cách hàn quốc hiện đại giúp bạn phát huy được sự cá tính, năng động của bản thân. \n✔️ áo khoác nam là mẫu áo khoác quen thuộc với hầu hết mọi chàng trai  và các nàng rồi đúng không nào, để phù hợp với gu thời trang hiện đại ngày nay các kiểu áo khoác dù được thiết kế đa dạng kiểu dáng lạ mắt mang đến gu thời trang năng động, khỏe khoắn cho người mặc. Các bạn có thể diện áo khoác gió tới công sở, dạo phố, đi học, dã ngoại,.....đề phù hợp đấy. Hãy nhanh chóng chọn cho mình một kiểu áo khoác để thay đổi phong cách hàng ngày của bản thân nào.\n📣Chất liệu cúa áo khoác nỉ nam : nỉ cao cấp 2 lớp', 'public/img/products/jean_nam.png', 30),
(3, 200000, 'Áo Khoác Cardigan Trắng Nâu Túi Gấu Nữ form rộng xinh xắn', 'Áo khoác nữ', 'Áo Khoác Cardigan Trắng Nâu Túi Gấu Nữ form rộng xinh xắn <br>\nÁo Khoác Cardigan Túi Gấu Be Nâu\n - Form: Freesize, 60-70kg đổ lại mặc oke \n- kích thước : dài 63cm, rộng 55cm, tay 54cm, vai 54cm\n- Phân loại: be, nâu\n- Chất liệu: Nỉ Bông\n #cardigan #cardigannamnu #cardiganformrong #aocardigan #aokhoac', 'public/img/products/ao_choang_nu.png', 10),
(4, 85000, 'ÁO SƠ MI NAM DÀI TAY THỜI TRANG HÀN QUỐC CAO CẤP', 'Áo sơ mi nam', 'Áo sơ mi nam dài tay, vải đẹp cao cấp loại 1 trên thị trường.\nÁo sơ mi nam cổ bẻ dài tay (sơ mi nam) được thiết kế với form dáng trẻ trung với form áo ôm, rất chuẩn như hình.\nChúng tôi hiện nay cung cấp áo sơ mi nam với giá bán lẻ tốt nhất trên thị trường.\n--Giá cạnh tranh nhất do chính nhà máy sản xuất với số lượng lớn.\n--Chúng tôi không nói sản phẩm của mình có chất lượng cao nhưng phải khẳng định chất lượng sản phẩm vượt trội so với giá tiền. \n--Uy tín bán hàng được đặt lên hàng đầu, không kinh doanh chộp giật.\n--Vì sản phẩm được sản xuất với số lượng lớn để có giá cạnh tranh nên không thể tránh được sai sót. Nếu quý khách hàng không hài lòng chúng tôi sẵn sàng hỗ trợ đổi trả.\n--Rất mong nhận được ý kiến đóng góp của Quý khách hàng để chúng tôi cải thiện chất lượng dịch vụ tốt hơn.', 'public/img/products/ao_so_mi_nam.png', 9),
(5, 79000, 'Quần baggy nam ống rộng kiểu dáng quần jean nam ống suông cao cấp đẹp', 'Quần Jean nam', 'THÔNG TIN SẢN PHẨM  Quần jean nam\n✔️Chất liệu: 98% cotton, 2% spandex.\n\n✔️Đặc tính: Co giãn, hút ẩm tốt và thấm hút mồ hôi.\n\n✔️Hướng dẫn sử dụng: quần baggy nam\n\n- Giặt ở nhiệt độ bình thường.\n\n- Không được dùng hóa chất tẩy, ủi ở nhiệt độ thích hợp.\n\n- Hạn chế sử dụng máy sấy.\n ✔️ Sản xuất: Hàng Việt Nam Xuất Khẩu\n ✔️ Màu sắc, mẫu mã giống hình 100%\n ✔️ Chấp nhận đổi trả nếu có bất cứ vấn đề nào liên quan đến chất lượng', 'public/img/products/jean_nam.png', 8),
(6, 129000, 'Quần jean baggy nam ống rộng suông cao cấp chất bò đẹp 007', 'Quần Jean nam', 'THÔNG TIN SẢN PHẨM  Quần jean nam\n✔️Chất liệu: 98% cotton, 2% spandex.\n\n✔️Đặc tính: Co giãn, hút ẩm tốt và thấm hút mồ hôi.\n\n✔️Hướng dẫn sử dụng: quần baggy nam\n\n- Giặt ở nhiệt độ bình thường.\n\n- Không được dùng hóa chất tẩy, ủi ở nhiệt độ thích hợp.\n\n- Hạn chế sử dụng máy sấy.\n ✔️ Sản xuất: Hàng Việt Nam Xuất Khẩu\n ✔️ Màu sắc, mẫu mã giống hình 100%\n ✔️ Chấp nhận đổi trả nếu có bất cứ vấn đề nào liên quan đến chất lượng', 'public/img/products/24526a479ebbc5730bf0472e5d355170.png', 10),
(7, 100000, 'Quần sọt nam, quần lửng nam, quần short jean nam màu trắng rách cao cấp 2021 QJNA0002', 'Quần lửng nam', 'THÔNG TIN CHI TIẾT SẢN PHẨM QUẦN JEAN NAM\nQuần sọt nam, quần lửng nam, quần short jean nam màu trắng rách cao cấp 2021 QJNA0002\n + Chất liệu vải jean demin cao cấp\n + Được thiết kế phù hợp với độ tuổi từ 18 đến 30 tuổi \n+ Quần vải jean mềm mại thấm hút mồ hôi tốt, thoải mái khi mặc \n+ Quần có thể kết hợp với nhiều loại trang phục để mặc ở nhà hay đi chơi, du lịch,…\nCÁCH SỦ DỤNG VÀ BẢO QUẢN QUẦN JEAN NAM ,\n+ Giặt bằng máy phơi khô dưới ảnh nắng trực tiếp\n + Bảo quản trong nơi khô ráo thoáng mát , tránh nơi ẩm ướt\n CÁCH CHỌN SIZE TỪ 28-32 CỦA QUẦN JEAN NAM \n+ SIZE 28: cao dưới 1m65, nặng 45 - 50Kg, vòng bụng 79cm \n+ SIZE 29: cao dưới 1m68, nặng 50 - 55Kg, vòng bụng 81cm \n+ SIZE 30: cao dưới 1m7, nặng 55 - 59Kg, vòng bụng 83cm \n+ SIZE 31: cao dưới 1m73, nặng 60 - 64Kg, vòng bụng 85cm \n+ SIZE 32: cao dưới 1m78, nặng 65 - 70Kg, vòng bụng 86cm\n SHOP…  XIN CAM KẾT \n+ Sản phẩm chất lượng tốt, đúng như mô tả \n+ Giao hàng ngay khi nhận được đơn\n + Đổi, trả với những sản phẩm lỗi do nhà sản xuất \n+ Lưu ý: Không nhận đổi trả với lí do không vừa ý ', 'public/img/products/7cf42a990082379716da4356e59ed97c.png', 15),
(8, 208000, 'Quần đùi thể thao nam GYMKAI, quần short 2 lớp, lót legging lửng, thoải mái vận động', 'Quần lửng nam', 'QUẦN ĐÙI THỂ THAO NAM GYMKAI, QUẦN SHORT 2 LỚP, LÓT LEGGING LỬNG, THOẢI MÁI VẬN ĐỘNG\n- Quần với thiết kế 2 lớp chuyên dụng với lớp trong là quần legging lửng may liền với quần tập gym chắc chắn bên ngoài.\n- Chất liệu:\n+ Vải ngoài: 100% Polyester Microfiber\n+ Vải trong : 95% Polyester 5% Spandex\n- Thiết kế 2 lớp chuyên dụng phù hợp với đặc tính vận động khi tập luyện hoặc tham gia hoạt động thể thao.\n- Lớp trong với chất liệu thun lạnh co giãn 4 chiều hỗ trợ bó cơ khi tập luyện và vận động, lớp vải ngoài thông hơi thấm hút mồ hôi cực tốt.\n- Quần ngoài form ngắn trên gối mang đến vẻ ngoài mạnh mẽ, nam tính khi vận động\n- Chất liệu quần đạt tiêu chuẩn xuất khẩu không xù lông, không bai nhão, không phai màu\n- Quần có 2 màu : Đen và Xám \n- Quần short thể thao nam 2 lớp cao cấp được thiết kế theo đúng form chuẩn của nam giới Việt Nam.\n- Thích hợp chơi thể thao, chạy bộ, tập gym, chơi bóng rổ, bóng chuyền, mặc nhà, đi chơi dạo phố,...\n- Nơi sản xuất : được thiết kế và may sản xuất trực tiếp tại Việt Nam.', 'public/img/products/d80c30fde4bfcc552714f0fcd95ff469.png', 16),
(9, 175000, 'Quần lửng nam Fasvin T21438.HN vải gió co giãn mềm mát tiện dụng mặc nhà và thể thao', 'Quần lửng nam', '=>  Các shop có thương hiệu đều luôn giữ gìn uy tín của mình. Đến với Fasvin bạn cũng sẽ được phục vụ tận tình chu đáo.\n\n=>  Quần lửng nam Fasvin T21438.HN được chế tạo tại nhà máy của FASVIN với quy trình thu hóa nghiệm ngặt. Các sản phẩm đều được những người thợ lâu năm trong nghề làm ra một cách cẩn thận và chắc chắn. Quần rất đa dụng có thể mặc đi chơi, thể thao hay mặc nhà. \n\n* KIỂU DÁNG : Quần lửng nam thể thao Fasvin có thiết kế dáng lửng dài đến đầu gối, dài hơn các mẫu quần short thường khoảng 5 cm tạo cảm giác  khoẻ khoắn, năng động nhưng không kém phần lịch sự. Quần có thiết kế đơn giản phù hợp với nhiều lứa tuổi từ thanh niên đến trung niên. Quần lửng thể thao Fasvin được may vừa vặn đứng dáng nên tiện dụng  đi chơi  thể thao, dạo phố hay mặc nhà.\n\n*CHẤT  LIỆU : Vải gió chun thể thao co giãn 4 chiều (95% Polyester + 5% spandex) thoải mái mềm mát. Đây là loại vải dệt thoi chứ không phải dệt kim nên đứng dáng và lịch sự có thể đi chơi hay mặc nhà tiếp khách. Chất vải thoáng mát và bền chắc thích hợp các hoạt động mạnh mẽ. \n\n* GIÁ CẢ : Chúng tôi luôn không ngừng cải tiến để có thể tạo ra những sản phẩm có chất lượng tốt với giá cả phải chăng nhất. Hơn nữa luôn có các chương trình khuyến mại dành cho quý khách dùng thử và trải nghiệm sản phẩm mới.\n\n* CHẤT LƯỢNG: Quần lửng nam đã được kiểm định chất lượng bởi cục tiêu chuẩn chất lượng và có tem hợp quy được dán trên thẻ bài.\n\n* BẢO QUẢN VÀ SỬ DỤNG : Sản phẩm có thể giặt máy, nhanh khô và không bị bạc màu. Đặc biệt nếu bạn là người bận rộn, bạn không cần là lượt trước khi mặc vì vải đã được tích hợp công nghệ chống nhăn, chống nhàu.\n', 'public/img/products/5472f307a0db884dadb06f5d9010d5aa.png', 18),
(10, 398000, 'Quần Ngố Kaki Nam Túi Hộp Lửng GENVIET Basic Đơn Giản T1303K1026', 'Quần lửng nam', 'CHÍNH SÁCH MUA HÀNG: \n+ Hỗ trợ đổi hàng với những sản phẩm bị lỗi do nhà sản xuất, hoặc những sản phẩm giảm giá dưới 50% mà không vừa size số.\n+ Inbox trực tiếp để GENVIET tư vấn size và giải đáp các vấn đề bạn đang quan tâm nhé.\n+ Bạn nhận được sản phẩm, vui lòng đánh giá giúp GENVIET nha.\n- Chỉ áp dụng đổi với sản phẩm mua nguyên giá.\n- Không áp dụng đổi đối với hàng khuyến mại, hàng giảm giá hoặc mua trong chương trình ưu đãi khác.\n- Vì lý do sức khỏe, không đổi trả quần áo lót, phụ kiện.\n- Sản phẩm chưa qua sử dụng, còn nguyên tem mác, thẻ bài và kèm hóa đơn hoặc biên lai vận chuyển.\n------------------------------------------------------\nHƯỚNG DẪN GIẶT ỦI\n- Không giặt tẩy bằng các chất tẩy rửa mạnh\n- Không ngâm nước quá lâu\n- Không nên ngâm và giặt chung với sản phẩm khác\n- Cách giặt đồ: Lấy 1-2 giọt sữa tắm, dầu gội đầu… đánh bông lên, cho sản phẩm vào -bóp nhẹ, rũ qua sau đó rũ lại bằng nước sạch rồi phơi lên luôn, tránh ngâm lâu.\n- Với những sản phẩm chất liệu ren, có phụ kiện không nên giặt sản phẩm cùng với các sản phẩm cầu kì khác như: Có móc, có khóa cứng, có nhiều họa tiết …. sẽ làm ảnh hưởng đến chất liệu sản phẩm. (Sản phẩm ren và lưới hoặc vải mềm mỏng nên giặt bằng tay, nếu giặt máy vui lòng bỏ vào túi lưới để tránh làm hư sợi vải)\n- Đối với sản phẩm có chất co giãn mạnh, khi phơi nên phơi ngang, lộn mặt trái sản phẩm khi phơi\n- Nên phơi quần áo trong bóng mát, không nên phơi dưới ánh nắng gắt quá lâu tránh mất màu, giòn và rút sợi vải\n- Ủi sản phẩm ở nhiệt độ vừa phải.\n------------------------------------------------------\nMÔ TẢ SẢN PHẨM\n T1303K1026 - Quần Ngố GENVIET Kaki Nam Túi Hộp\n- Chất liệu: Kaki \n-Màu Sắc: hồng đất, xanh ghi, xanh rêu\n-Kích cỡ: 27 đến 34\nSản phẩm được thiết kế độc quyền bởi thương hiệu thời trang GENVIET  với hệ thống 80 showrooms trên toàn quốc với thương hiệu uy tín, sản phẩm chất lượng mà mang lại vẻ đẹp tuyệt đối cho bạn. GENVIET tin rằng sẽ đem lại sự trải nghiệm tuyệt vời cho các bạn khi sử dụng sản phẩm và dịch vụ của GENVIET\n', 'public/img/products/fcdf27ac2a8dc95fcd016f66901213d2.png', 20),
(11, 68000, 'váy trắng tiểu thư trễ vai tay bồng dáng dài hai lớp, đầm trắng dự tiệc bánh bèo', 'váy nữ', '\nváy trễ vai trắng tay bồng dáng dài, đầm trễ vai tiểu thư dự tiệc màu trắng điệu đà\n\n màu trắng\n\nFree sz < 63kg \n\n\n❤️❤️ vblà xưởng may với niềm đam mê mãnh liệt về thiết kế, và phương châm sản phẩm mang giá trị sử dụng cao cho khách hàng , thảo nguyên cũng luôn hướng tới giá trị cốt lõi và bền vững dựa trên cơ sở lợi ích cho khách hàng luôn là hàng đầu .. ! Và rất mong được sự ủng hộ và đặt niềm tin bên shop.\n\nTrân trọng và cảm ơn rất nhiều !! Các khách hàng yêu quý của shop 😘\n', 'public/img/products/4cb7898954c4dc291ef1ad30d820225e.png', 20),
(12, 109000, '[Mã BMLTA50 giảm đến 50K đơn 99K] Áo thun ba lỗ nam thể thao AJEKA, thun lạnh co giãn 4 chiều', 'áo nam', 'Sản phẩm áo thun nam ba lỗ mang đến cho người mặc cảm giác năng động khỏe khoắn,áo phông thun lạnh 3 lỗ được may từ vải thun lạnh cao cấp mềm mịn, Áo thun nam ba lỗ có đủ bảng màu cực hot, giúp bạn thêm nhiều sự lựa chọn  \n\n. \n\n- Chất liệu thun lạnh cao cấp, co giãn 4 chiều  thấm hút mồ hôi tốt, phù hợp các hoạt động thể thao, Gym, yoga, đá bóng, \n\n- Tỷ mỉ đến từng đường chỉ may, logo 3D nổi chắc chắn cực sang.\n\n- Bảng màu cực cá tính, bền màu,  chống nhăn,thấm hút cực tốt.\n\n- Full size từ M – L – XL – XXL-3XL.. chuẩn size theo form người Việt\n\n\n\n*CAM KẾT :\n\n-  Bảo hành 30 ngày  ( 1 đổi 1)  với đường may, túi khóa và độ bền của vải\n\n-  Sẵn sàng nhận lại hàng nếu Quý khách không hài lòng và hoàn lại tiền 100%\n\n-  Cam kết chất lượng và mẫu mã sản phẩm giống với hình ảnh\n\n-  Hoàn tiền hoặc đổi hàng ngay lập tức nếu sản phẩm bị lỗi do sơ suất của nhà sản xuất \n\n-  Cam kết được đổi hàng trong vòng 30 ngày. (Sản phẩm còn nguyên tem mác và chưa sử dụng )\n\n 🚛 FREESHIP EXTRA ĐƠN TỪ 50K.\n\nHướng dẫn chọn size \n\nSize M : 51-60kg - Cao < 1m65\n\nSize L : 61-70 kg - 1m66<Cao< 1m70 \n\nSize XL : 71- 80kg - 1m74<Cao< 1m75\n\nSize 2XL : 81-90 kg - Cao> 1m7\n\nSize 3XL : 91-98 kg - Cao >1m7', 'public/img/products/48a84ebf054c419e102d419fda034dd4.png', 5),
(13, 110000, 'Áo croptop nữ sát nách ba lỗ thun không tay kiểu ôm body tank top vải cotton co giãn tốt', 'áo nữ', '👉 👉 THÔNG TIN SẢN PHẨM: \nÁo ba lỗ croptop nữ  dáng áo 3 lỗ ôm chất liệu thun cotton 100% co dãn mạnh.\n-------------------------\n-Chất liệu : Thun cotton co giãn 4 chiều loại cao cấp dày dặn nhất, rất mát ạ.\n* Lưu ý: \n+Tuỳ đợt hàng độ dày mỏng của các màu sẽ khác nhau ( <10% ) vẫn đảm bảo chất lượng cao cấp nhất ạ.\n+Chất liệu  cotton nên sẽ có sợi bông ạ.\n\n-Màu sắc : Trắng - Đen - Vàng Đậm - Muối Tiêu - Xanh Ngọc - Đỏ Cam - Nâu - Đỏ Đô - Màu Ngẫu Nhiên( Màu sắc có thể chênh lệch so với thực tế 5% do ánh sáng và các thiết bị hiển thị màu khác nhau )\n\n-Size : Freesize 40-55kg\n\n-Kiểu dáng : Dáng áo ba lỗ croptop ôm, chất liệu 100% cotton co dãn 4 chiều cực tốt, dày dặn và mát.\nCó thể phối với quần short ngắn, đóng thùng, áo Cardigan, Blazer,... rất năng động và cá tính ạ\n--------------------------\n\n* Lưu ý: \n+Thông số áo là thành phẩm, chất co dãn cực tốt nên dễ fix vừa dáng.\n+Áo dáng ôm croptop, các chị em thích mặc ôm thì chọn size thông số vừa người nhé ạ.\n----------------------------\nChỉ có tại ao _thun_vdr: \n\n+ Cam kết chịu trách nhiệm với mỗi sản phẩm bán ra, Miễn phí đổi trả hàng lỗi trong thời gian sớm nhất ( Hy hữu thôi chứ  ao _thun_vdr   kiểm hàng kĩ lắm ahihi )\n\n Lưu ý:  Hàng đổi phải còn nguyên tag, mạc, bao bì; chưa có dấu hiệu sử dụng và lỗi do tác động bên ngoài.\n----------------------------\n🔴 Cam kết hàng Chất lượng do nhà  ao _thun_vdr  tự sản xuất nên chị em yên tâm về form dáng, đường may và chất liệu nhé.\n🔴 Cam kết hình chụp thật, hàng đẹp, Shop sẽ nhận lại hàng và hoàn tiền nếu hàng xấu và không giống hình ạ.\n#aobalo #aohaiday #aocoban #aocaocap #kamong #ao #3 #lo #nu #2 #ao3lo #satnach #aosatnach #co #gian #om #ao3lonu #100% #cotton #ao3lotrang #ao3loden #ao #ba #lo #aocroptop#aothun #aothunnu #aothundep #aothunnure\n#aothunteen #aothunteensi #aothuncroptop \n#aothundinhkimsa #aothungiare', 'public/img/products/c3182e84bfa137bcecbfb1bb51959fb5.png', 35),
(14, 51000, '[Xả Kho] Áo Ba Lỗ Nam Co Giãn, Thấm Hút Mồ Hôi hàng VNXK(Hà Nội)', 'áo nam', '🎁 Áo ba lỗ nam, Áo Lót Nam loại mỏng, chất liệu cotton mỏng\n👉👉 MỀM MẠI – KHÔ THOÁNG – MẶC NHƯ KHÔNG MẶC! ----- \n➦ Chất vải sợi tự nhiên, rất mềm mại. Thấm hút mồ hôi, thoát hơi và kháng khuẩn rất tốt.\n ➦ Kiểu dáng thiết kế trẻ trung, mềm mại\n ➦ Rất bền và không phai màu, không bai nhão trong thời dài sử dụng.\ni ➦ màu trắng đơn giản, sang trọng\n ➦ Mặc thoáng mát, thoải mái không gò bó\n➦ Không bai dãn, sổ lông trong quá trình sử dụng \n➦ Sản phẩm hot và được ưa chuộng nhất năm\n➦  Có các size M (50 - 62KG) , L(60 - 72 KG), 2L(70 - 82KG)\n ➦ Chính sách giá ưu đãi tốt nhất thị trường\n ➦Áo được thiết kế đơn giản, dễ mặc cho nam giới phong cách năng động và khỏe khoắn hơn.\n 👉👉 Mua ngay Áo ba lỗ nam Hà Nội ngay hôm nay để nhận ƯU ĐÃI KHỦNG!!!', 'public/img/products/f4a695003d10825a8ee6337a278600fd.png', 35),
(15, 51000, 'Quần Jeans Đen Bạc Dáng Rộng Cạp Cao Ống Rộng 2 Túi Vuông Cá Tính Tôn Dáng', 'quần nam', 'QUẦN TÚI VUÔNG 301\n___\n     Chất liệu: Bò / Jeans\nBẢNG SIZE THAM KHẢO\nXS: Eo 64cm Mông 93cm Dài quần 101cm Đùi 54cm Chu vi gấu quần 42cm\nS:   Eo 68cm Mông 96cm Dài quần 102cm Đùi 56cm Chu vi gấu quần 43cm\nM:  Eo 72cm Mông 100cm Dài quần 102cm Đùi 58cm Chu vi gấu quần 43.5cm\nL:   Eo 76cm Mông 104cm Dài quần 103cm Đùi 60cm Chu vi gấu quần 44cm\nXL: Eo 80cm Mông 108cm Dài quần 104cm Đùi 62cm  Chu vi gấu quần 45cm\n2XL: Eo 84cm Mông 112cm Dài quần 105cm Đùi 65cm Chu vi gấu quần 45cm\n\n💓Kích thước trên mô tả được đô thủ công, vì vậy có thể bị sai lệch 1-2cm\nINBOX để được hỗ trợ tư vấn size\n\nCHÍNH SÁCH ĐỔI TRẢ\n- Đối với trường hợp xảy ra nhầm lẫn trong đơn hàng hoặc có lỗi phía nhà sản xuất, bạn vui lòng liên hệ cho shop kèm hình ảnh và video bóc hàng để được hỗ trợ đổi hàng miễn phí nhanh chóng.\n- Lưu ý: Sản phẩm còn nguyên tag và không có tình trạng đã qua sử dụng.\n_________\n💓Cam kết nguồn gốc sản phẩm 100% là Hàng QCCC, được nhà Chanh đặt trực tiếp không qua trung gian nên giá cả rất hợp lý\n💓Những sản phẩm đăng bán là những sản phẩm được nhà Chanh tuyển chọn qua chất lượng vải, đường may, kiểu dáng nên các bạn hoàn toàn yên tâm khi mua hàng tại nhà Chanh', 'public/img/products/1c686be9cea18b4c687d4199c8a3dcf6.png', 35),
(16, 205000, 'Quần Jeans Đen Bạc Dáng Rộng Cạp Cao Ống Rộng 2 Túi Vuông Cá Tính Tôn Dáng', 'quần nam', 'QUẦN TÚI VUÔNG 301\n___\n     Chất liệu: Bò / Jeans\nBẢNG SIZE THAM KHẢO\nXS: Eo 64cm Mông 93cm Dài quần 101cm Đùi 54cm Chu vi gấu quần 42cm\nS:   Eo 68cm Mông 96cm Dài quần 102cm Đùi 56cm Chu vi gấu quần 43cm\nM:  Eo 72cm Mông 100cm Dài quần 102cm Đùi 58cm Chu vi gấu quần 43.5cm\nL:   Eo 76cm Mông 104cm Dài quần 103cm Đùi 60cm Chu vi gấu quần 44cm\nXL: Eo 80cm Mông 108cm Dài quần 104cm Đùi 62cm  Chu vi gấu quần 45cm\n2XL: Eo 84cm Mông 112cm Dài quần 105cm Đùi 65cm Chu vi gấu quần 45cm\n\n💓Kích thước trên mô tả được đô thủ công, vì vậy có thể bị sai lệch 1-2cm\nINBOX để được hỗ trợ tư vấn size\n\nCHÍNH SÁCH ĐỔI TRẢ\n- Đối với trường hợp xảy ra nhầm lẫn trong đơn hàng hoặc có lỗi phía nhà sản xuất, bạn vui lòng liên hệ cho shop kèm hình ảnh và video bóc hàng để được hỗ trợ đổi hàng miễn phí nhanh chóng.\n- Lưu ý: Sản phẩm còn nguyên tag và không có tình trạng đã qua sử dụng.\n_________\n💓Cam kết nguồn gốc sản phẩm 100% là Hàng QCCC, được nhà Chanh đặt trực tiếp không qua trung gian nên giá cả rất hợp lý\n💓Những sản phẩm đăng bán là những sản phẩm được nhà Chanh tuyển chọn qua chất lượng vải, đường may, kiểu dáng nên các bạn hoàn toàn yên tâm khi mua hàng tại nhà Chanh', 'public/img/products/1c686be9cea18b4c687d4199c8a3dcf6.png', 13),
(17, 240000, 'Áo choàng bông thú lông mịn mùa đông', 'áo nữ', ' Tăm tia bao lâu nay cúi cùng shop cũng nhả sêu cho em gom này~~~ đông mà lười là toàn chùm em nó thuii ấm dã man mà xinh xỉu áaaa\n\nĐi lang thang trong nhà ko sợ lạnh, mà có chẳng may phải chạy ra ngoài thì vẫn ấm áp ạ.\nNhìn gấu cưng dễ sợ lunnn á 😚😚 \nHeheee sắm 1 e để đi đầu trend nàoooo \n\n🐶 5 mẫu em đánh số\nSize S-M-L-XL\nS: 40-47kg\nM: 47-54kg\nL: 54-60kg\nXL: 60-67kg', 'public/img/products/sg-11134201-22100-ofm9emsngjiv6c.png', 0),
(18, 220000, 'Áo len nam cổ lọ dài tay Gman vải len tăm công nghệ dệt kim cao cấp phong cách hàn quốc', 'áo nam', '  1. THÔNG TIN SẢN PHẨM: Áo Len Nam cổ lọ dài tay - thời trang nam\n✔️ Áo len nam cổ lọ là món phụ kiện thời trang đơn giản nhưng không kém phần đẹp, thời trang. Các anh có thể mặc đi làm, đi chơi hay đi dự tiệc lại rất dễ phối đồ dù là với quần vải, quần jean, quần kaki hay với các sản phẩm áo măng tô, áo vest.\n\n✔️ Chất liệu: vải len cotton thiên nhiên mềm mại có bề mặt mềm mịn, thoát mồ hôi giữ ấm, nhanh tạo cảm giác vô cùng thoải mái cho người mặc và đặc biệt là không bị Xù Lông, Không phai màu, Giặt máy tốt. \n\n✔️ Màu sắc áo len cổ lọ nam : 9 màu\nĐEN - TRẮNG - XÁM - GHI - NÂU ĐẤT - XANH THAN - RÊU - ĐỎ ĐÔ - BE \n\n✔️ Size áo len tay dài : L, XL\n\n    2. HƯỚNG DẪN CHỌN SIZE ÁO LEN NAM\n📍 Size L: Cân nặng 45-65kg, cao dưới 1m70\n📍 Size XL: Cân nặng 65-78kg, cao dưới 1m80.\n(Nếu bạn gặp khó khăn khi chọn size, vui lòng INBOX, cung cấp chiều cao, cân nặng để SHOP TƯ VẤN SIZE)\n\n   3.  Mẹo Nhỏ Giúp Bạn Bảo Quản Quần áo nam : \n💌  Đối với sản phẩm quần áo mới mua về, nên giặt tay lần đầu tiên để tránh phai màu sang quần áo khác\n💌 Khi giặt nên lộn mặt trái ra để đảm bảo độ bền \n💌 Sản phẩm phù hợp cho giặt máy (có túi giặt)/giặt tay\n💌 Không giặt chung đồ Trắng và đồ Tối màu \n\n    4. CHÍNH SÁCH\n✔️ Cam kết chất lượng và loại mã sản phẩm giống với hình ảnh.\n✔️ Trả hàng hoàn tiền trong 3 ngày nếu như sản phẩm không đúng mô tả\n✔️ Shop sẽ đổi trả trong các trường hợp: shop giao nhầm size, nhầm màu, nhầm sản phẩm khác, thiếu hàng, áo bị lỗi và các lỗi khác của nhà sản xuất.\n✔️ Trong các trường hợp: khách không ưng, mặc không hợp, khách chọn nhầm sản phẩm,... quý khách vui lòng  INBOX để shop hướng dẫn đổi size phù hợp\n\n    5. LƯU Ý\n🍀 Quay video khi mở / bóc / khui sản phẩm để được giải quyết nếu có sự cố\n🍀 Màu sắc của sản phẩm thực tế có thể đậm, nhạt hơn ảnh mô tả do ánh sáng và màn hình thiết bị khác nhau.\n🍀 Kích thước sản phẩm dung sai cho phép ±2cm.', 'public/img/products/4e738af4c439269f606dc20f38bd69f8.png', 0),
(19, 250000, 'Áo Len Nam Nữ Faviti Cổ 3 Phân Dài Tay Chất Lông Cừu Đẹp Cao Cấp Mềm Mịn Dày Dặn Cực Ấm Kiểu Dáng Hàn Quốc AL86', 'áo nam nữ', 'Len lông cừu là một loại len tự nhiên được làm Bằng công nghệ kéo sợi và xử lý xơ hiện đại ,len lông cừu tạo ra những loại len vượt trội hơn hẳn các chất liệu như bông hay vải tổng hợp. Chúng mang đến phong cách, sự thoải mái và hiệu suất cùng với sự hài hòa hoàn hảo.\n\nNhững sợi len hoàn toàn tự nhiên và vô cùng quý giá, có tác dụng giữ ấm tốt nhất, không những thế còn có khả năng điều chỉnh nhiệt độ cơ thể và khử mùi hôi. Điều này khiến cho các sản phẩm từ len lông cừu càng được ưa chuộng, đặc biệt là với những người thường xuyên vận động.\n\n', 'public/img/products/sg-11134201-22110-n4g1b7yppvjvee.png', 0),
(20, 200000, 'Quần Chip Nam Boxer Thun Lạnh Combo 4 Cái, Quần Xì Nam Đùi Thun Lạnh Cao Cấp Co Giãn 4 Chiều Cực Thoáng Khí Kháng Khuẩn', 'quần lót nam', 'Quần Chip Nam Boxer Thun Lạnh Hộp 4 Cái, Quần Xì Nam Đùi Thun Lạnh Cao Cấp Co Giãn 4 Chiều Cực Thoáng Khí Kháng Khuẩn.\nQuần Chip Nam boxer thun lạnh vẫn là chiếc quần lót mềm mại, mát lạnh giúp bảo vệ và nâng đỡ cậu nhỏ suốt ngày dài làm việc nhưng với chất liệu thun lạnh cao cấp sẽ mang lại những trải nghiệm hoàn toàn thoải mái và mát mẽ cho các chàng trai.\n- Sản phẩm sử dụng vải thun lạnh co giãn tốt cực thoáng mát (Đảm bảo Uy Tín - Cam kết vải cực đẹp)\n- Quần Chip Nam Boxer thun lạnh là mẫu sản phẩm Hot nhất hiện nay, đang được nhiều bạn nam ưa thích\n- Sản phẩm quần lót nam Boxer thun lạnh cao cấp đầy đủ nhãn mác hiệu. \n- Xưởng nhà may, đẹp từ đường kim mũi chỉ, chất liệu an toàn. \n- Quần Chip Nam boxer cao cấp với chất liệu thun lạnh mềm mại, bền đẹp, thoáng mát, đàn hồi, giúp co giãn cực tốt, mang lại cảm giác thoải mái đã được tạo ra từ đôi tay của những người thợ lành nghề.\n- Sản phẩm là loại vải mềm, mịn, mát và không bai nhão \n- Quần Chip Nam có độ thấm hút mồ hôi cao, tạo sự thông thoáng \n- Chất liệu: vải thun lạnh lạnh cao cấp\n- Màu sắc: trắng, đen, xanh đen, đỏ ( được trộn màu ngẫu nhiên)\n- Tính năng của sản phẩm: sang trọng, mềm mại, êm ái, thoát hơi cực tốt, thiết kế đai lưng tạo nên sự mạnh mẽ cho phái mạnh. \n- Quần Chip Nam  với 100% vải thun lạnh cao cấp được sản xuất tỷ mỹ theo tiêu chuẩn Việt Nam. \n- Quần xì nam boxer với kiểu dáng khoẻ khoắn hiện đại, năng động, ôm sát vào cơ thể cùng với gam màu tươi sáng tạo nên sự tự tin cho phái mạnh mỗi ngày. \n- Sản phẩm  với thiết kế đai lưng rời mạnh mẽ, sử dụng công nghệ dệt may mới nhất để tạo nên chất lượng cho sản phẩm, đem đến cảm giác co dãn siêu tốt, mềm mượt không để lại vết hằn trên da. \n- Sản phẩm dễ giặt và dễ bảo quản, không bị phai màu và ra màu khi giặt. \n- Quần xì nam boxer thun lạnh có khả năng hống ẩm, chống mùi hôi và vi khuẩn, bảo vệ làn da nhạy cảm của cậu bé.\nBảng Size\n- Size XL: 45kg – 55kg\n- Size XXL: 56kg – 65kg \n- Size XXXL: 66kg – 75kg \nLưu ý! \n- Quý khách có cân nặng giữa 2 size nên chọn size lớn hơn, để chắc chắn hơn về size nên inbox cho shop về chiều cao cân nặng để shop tư vấn size phù hợp . \nHướng Dẫn Bảo Quản\n- Không sử dụng chất tẩy để giặt Quần xì nam vì sẽ làm ảnh hưởng màu sắc của sản phẩm.\n- Sản phẩm khi phơi nên được lộn ra bề trái để bảo vệ gam màu của sản phẩm được tốt hơn.\nCam Kết Của Shop\n- Shop cam kết sản phẩm giống hình 100% và luôn đặt chất lượng lên hàng đầu. \n- Tất cả hình ảnh đều là ảnh thật do shop tự chụp.\n- Cam kết 100% đổi nếu sản phẩm khách đặt không vừa Size hoặc trả hàng nếu lỗi do shop. \n- Hàng luôn có sẳn giao ngay khi khách đặt. \n- Nếu có bất cứ điều gì không hài lòng về sản phẩm, khách vui lòng liên hệ với shop trước khi đánh giá shop nhé, shop sẽ sắp xếp đổi, trả hàng hoặc hoàn tiền cho khách ạ!\n', 'public/img/products/0500129cf7275778a13771d5cfc387d8.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(255) NOT NULL,
  `profile_photo` varchar(255) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `createAt` datetime DEFAULT NULL,
  `updateAt` datetime DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `profile_photo`, `fname`, `lname`, `gender`, `age`, `phone`, `createAt`, `updateAt`, `password`) VALUES
('admin@hcmut.edu.vn', NULL, 'Nguyen Van', 'A', 1, 15, '0123456789', NULL, NULL, ''),
('user@hcmut.edu.vn', NULL, 'Nguyen Van', 'B', 0, 30, '0123456789', NULL, NULL, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_id` (`news_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `parent` (`parent`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sale` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`email`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_ibfk_3` FOREIGN KEY (`parent`) REFERENCES `comment` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
