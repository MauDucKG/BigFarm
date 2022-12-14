-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2022 at 03:23 AM
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
(1, '2021-12-12 00:00:00', 1, 'Bất ngờ quá', 1, 'admin@hcmut.edu.vn', NULL),
(2, '2021-12-12 00:00:00', 1, 'Bất ngờ quá', 1, 'admin@hcmut.edu.vn', NULL),
(3, '2021-12-12 00:00:00', 0, 'Không thể tin được', 2, 'user@hcmut.edu.vn', NULL),
(5, '2022-12-14 01:23:14', 1, 'Tào lao', 1, 'admin@hcmut.edu.vn', NULL);

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
(1, 1, '2021-11-11 00:00:00', 'TTO - TP.HCM không lập lại các chốt kiểm soát để kiểm tra di biến động dân cư như trước đây. Tuy vậy người dân từ các tỉnh thành đến TP.HCM sẽ phải đăng ký tạm trú tạm vắng để địa phương có biện pháp kiểm soát.', 'UBND TP.HCM yêu cầu tăng cường kiểm soát chặt chẽ di biến động dân cư. Các địa phương phải nắm chắc tình hình người dân khi ra, vào địa bàn, người có nguy cơ đang lưu trú, làm việc tại các địa phương, doanh nghiệp như lái xe, phụ xe liên tỉnh, người làm việc ngoài tỉnh về địa phương lưu trú… Từ đó sẽ chủ động các biện pháp quản lý phù hợp.\nTuy nhiên trước chủ trương này của thành phố, nhiều người dân bày tỏ sự băn khoăn, không biết liệu thành phố có lập lại các chốt kiểm soát và cần phải chuẩn bị những thủ tục gì khi đến TP.HCM.\nTrao đổi về vấn đề này, thượng tá Lê Mạnh Hà - phó trưởng Phòng tham mưu Công an TP.HCM - cho biết TP.HCM không lập lại các chốt kiểm soát để kiểm tra di biến động dân cư như trước đây.\nTheo thượng tá Hà, biến động dân cư được hiểu là sự thay đổi về dân cư, thường trú, tạm trú, không phải là lực lượng chức năng kiểm soát người dân đi lại ở các chốt.\nHiện nay Công an TP.HCM đang thực hiện các công tác quản lý di biến động dân cư như: đăng ký thường trú, tạm trú, rà soát hộ khẩu, những ai có mặt thực tế ở địa phương. Công an TP cũng đang rà soát, đối sánh các dữ liệu dân cư, cấp mã số định danh cá nhân.\nBên cạnh đó ngành công an cũng đang kiểm tra diện thường trú, tạm trú, những người đang lưu trú ở khách sạn, nhà nghỉ... khai báo để quản lý chặt chẽ và thực hiện các chính sách an sinh xã hội.', 'Ca nhiễm tăng, TP.HCM kiểm soát di biến động dân cư ra sao?'),
(2, 1, '2021-11-11 00:00:00', 'TTO - Với việc ban hành hướng dẫn gói chăm sóc sức khỏe cho F0 cách ly tại nhà phiên bản 1.6, ngành y tế TP.HCM cho thấy quyết tâm tập trung \"đánh chặn từ xa\" bằng việc kiểm soát F0 cách ly tại cộng đồng không để trở nặng.', 'Không phải F0 nào cũng cách ly tại nhà\nTheo thống kê, trong tổng số ca F0 hiện tại có khoảng 70% trường hợp có triệu chứng nhẹ, hoặc không có triệu chứng đang được cách ly chăm sóc tại nhà hoặc khu cách ly tập trung. Làm gì để giảm số ca mắc chuyển nặng? Hướng dẫn mới nhất từ TP.HCM được \"chi tiết hóa\" từ phân loại người F0 nào được cách ly ở nhà; chăm sóc ra sao; nên và không nên làm gì; dấu hiệu cần báo ngay cho y tế và kê đơn, cấp cứu F0 tại nhà...\nHướng dẫn lần này quy định rõ hơn về đối tượng được chăm sóc tại nhà khi đảm bảo đủ 2 điều kiện bao gồm không triệu chứng hoặc triệu chứng nhẹ (không có suy hô hấp SpO2 lớn hơn hoặc bằng 96% khi thở khí trời, nhịp thở bằng hoặc dưới 20 lần/phút). Chỉ những F0 có độ tuổi từ 1 - 50 tuổi, không có bệnh nền, không đang mang thai, không béo phì mới được cách ly ở nhà.\nNgoài ra quy định này chỉ cho phép một số trường hợp không thỏa các điều kiện nêu trên có thể xem xét cách ly ở nhà nếu có bệnh nền ổn định, bảo đảm tiêm đủ 2 mũi vắc xin hoặc sau 14 ngày kể từ ngày tiêm mũi đầu tiên.\nTP Thủ Đức (TP.HCM) là một trong các địa phương được ghi nhận có số ca mắc tăng nhanh gần đây. Ông Nguyễn Văn Chức - giám đốc Trung tâm Y tế TP Thủ Đức - cho biết để \"đánh chặn từ xa\", ngoài 32 trạm y tế cố định, các trạm y tế lưu động, các phường triển khai tổ y tế lưu động đến từng khu phố (trước đây là phường) để kịp thời xử lý các ca F0 chuyển nặng. \"Tổ lưu động của từng khu phố khá đông, bao gồm đủ các ban ngành từ y tế, đoàn thanh niên, dân quân, giáo dục, thành ra việc phản ứng và tiếp cận sẽ được gần người dân hơn\" - ông Chức nói.', '50% ca tử vong ở TP.HCM chưa tiêm vắc xin, thành phố đang \"đánh chặn\" số ca chuyển nặng');

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
(11, 68000, 'váy trắng tiểu thư trễ vai tay bồng dáng dài hai lớp, đầm trắng dự tiệc bánh bèo', 'váy nữ', '\nváy trễ vai trắng tay bồng dáng dài, đầm trễ vai tiểu thư dự tiệc màu trắng điệu đà\n\n màu trắng\n\nFree sz < 63kg \n\n\n❤️❤️ vblà xưởng may với niềm đam mê mãnh liệt về thiết kế, và phương châm sản phẩm mang giá trị sử dụng cao cho khách hàng , thảo nguyên cũng luôn hướng tới giá trị cốt lõi và bền vững dựa trên cơ sở lợi ích cho khách hàng luôn là hàng đầu .. ! Và rất mong được sự ủng hộ và đặt niềm tin bên shop.\n\nTrân trọng và cảm ơn rất nhiều !! Các khách hàng yêu quý của shop 😘\n', 'public/img/products/4cb7898954c4dc291ef1ad30d820225e.png', 20);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
