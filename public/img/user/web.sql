DROP database IF EXISTS web;
CREATE DATABASE web;
USE web;

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
(11, 68000, 'váy trắng tiểu thư trễ vai tay bồng dáng dài hai lớp, đầm trắng dự tiệc bánh bèo', 'váy nữ', '\nváy trễ vai trắng tay bồng dáng dài, đầm trễ vai tiểu thư dự tiệc màu trắng điệu đà\n\n màu trắng\n\nFree sz < 63kg \n\n\n❤️❤️ vblà xưởng may với niềm đam mê mãnh liệt về thiết kế, và phương châm sản phẩm mang giá trị sử dụng cao cho khách hàng , thảo nguyên cũng luôn hướng tới giá trị cốt lõi và bền vững dựa trên cơ sở lợi ích cho khách hàng luôn là hàng đầu .. ! Và rất mong được sự ủng hộ và đặt niềm tin bên shop.\n\nTrân trọng và cảm ơn rất nhiều !! Các khách hàng yêu quý của shop 😘\n', 'public/img/products/4cb7898954c4dc291ef1ad30d820225e.png', 20),
(12, 109000, '[Mã BMLTA50 giảm đến 50K đơn 99K] Áo thun ba lỗ nam thể thao AJEKA, thun lạnh co giãn 4 chiều', 'áo nam', 
'Sản phẩm áo thun nam ba lỗ mang đến cho người mặc cảm giác năng động khỏe khoắn,áo phông thun lạnh 3 lỗ được may từ vải thun lạnh cao cấp mềm mịn, Áo thun nam ba lỗ có đủ bảng màu cực hot, giúp bạn thêm nhiều sự lựa chọn  

. 

- Chất liệu thun lạnh cao cấp, co giãn 4 chiều  thấm hút mồ hôi tốt, phù hợp các hoạt động thể thao, Gym, yoga, đá bóng, 

- Tỷ mỉ đến từng đường chỉ may, logo 3D nổi chắc chắn cực sang.

- Bảng màu cực cá tính, bền màu,  chống nhăn,thấm hút cực tốt.

- Full size từ M – L – XL – XXL-3XL.. chuẩn size theo form người Việt



*CAM KẾT :

-  Bảo hành 30 ngày  ( 1 đổi 1)  với đường may, túi khóa và độ bền của vải

-  Sẵn sàng nhận lại hàng nếu Quý khách không hài lòng và hoàn lại tiền 100%

-  Cam kết chất lượng và mẫu mã sản phẩm giống với hình ảnh

-  Hoàn tiền hoặc đổi hàng ngay lập tức nếu sản phẩm bị lỗi do sơ suất của nhà sản xuất 

-  Cam kết được đổi hàng trong vòng 30 ngày. (Sản phẩm còn nguyên tem mác và chưa sử dụng )

 🚛 FREESHIP EXTRA ĐƠN TỪ 50K.

Hướng dẫn chọn size 

Size M : 51-60kg - Cao < 1m65

Size L : 61-70 kg - 1m66<Cao< 1m70 

Size XL : 71- 80kg - 1m74<Cao< 1m75

Size 2XL : 81-90 kg - Cao> 1m7

Size 3XL : 91-98 kg - Cao >1m7', 
'public/img/products/48a84ebf054c419e102d419fda034dd4.png',
5),
(13, 110000, 'Áo croptop nữ sát nách ba lỗ thun không tay kiểu ôm body tank top vải cotton co giãn tốt', 'áo nữ', 
'👉 👉 THÔNG TIN SẢN PHẨM: 
Áo ba lỗ croptop nữ  dáng áo 3 lỗ ôm chất liệu thun cotton 100% co dãn mạnh.
-------------------------
-Chất liệu : Thun cotton co giãn 4 chiều loại cao cấp dày dặn nhất, rất mát ạ.
* Lưu ý: 
+Tuỳ đợt hàng độ dày mỏng của các màu sẽ khác nhau ( <10% ) vẫn đảm bảo chất lượng cao cấp nhất ạ.
+Chất liệu  cotton nên sẽ có sợi bông ạ.

-Màu sắc : Trắng - Đen - Vàng Đậm - Muối Tiêu - Xanh Ngọc - Đỏ Cam - Nâu - Đỏ Đô - Màu Ngẫu Nhiên( Màu sắc có thể chênh lệch so với thực tế 5% do ánh sáng và các thiết bị hiển thị màu khác nhau )

-Size : Freesize 40-55kg

-Kiểu dáng : Dáng áo ba lỗ croptop ôm, chất liệu 100% cotton co dãn 4 chiều cực tốt, dày dặn và mát.
Có thể phối với quần short ngắn, đóng thùng, áo Cardigan, Blazer,... rất năng động và cá tính ạ
--------------------------

* Lưu ý: 
+Thông số áo là thành phẩm, chất co dãn cực tốt nên dễ fix vừa dáng.
+Áo dáng ôm croptop, các chị em thích mặc ôm thì chọn size thông số vừa người nhé ạ.
----------------------------
Chỉ có tại ao _thun_vdr: 

+ Cam kết chịu trách nhiệm với mỗi sản phẩm bán ra, Miễn phí đổi trả hàng lỗi trong thời gian sớm nhất ( Hy hữu thôi chứ  ao _thun_vdr   kiểm hàng kĩ lắm ahihi )

 Lưu ý:  Hàng đổi phải còn nguyên tag, mạc, bao bì; chưa có dấu hiệu sử dụng và lỗi do tác động bên ngoài.
----------------------------
🔴 Cam kết hàng Chất lượng do nhà  ao _thun_vdr  tự sản xuất nên chị em yên tâm về form dáng, đường may và chất liệu nhé.
🔴 Cam kết hình chụp thật, hàng đẹp, Shop sẽ nhận lại hàng và hoàn tiền nếu hàng xấu và không giống hình ạ.
#aobalo #aohaiday #aocoban #aocaocap #kamong #ao #3 #lo #nu #2 #ao3lo #satnach #aosatnach #co #gian #om #ao3lonu #100% #cotton #ao3lotrang #ao3loden #ao #ba #lo #aocroptop#aothun #aothunnu #aothundep #aothunnure
#aothunteen #aothunteensi #aothuncroptop 
#aothundinhkimsa #aothungiare', 
'public/img/products/c3182e84bfa137bcecbfb1bb51959fb5.png',
35),
(14, 51000, '[Xả Kho] Áo Ba Lỗ Nam Co Giãn, Thấm Hút Mồ Hôi hàng VNXK(Hà Nội)', 'áo nam', 
'🎁 Áo ba lỗ nam, Áo Lót Nam loại mỏng, chất liệu cotton mỏng
👉👉 MỀM MẠI – KHÔ THOÁNG – MẶC NHƯ KHÔNG MẶC! ----- 
➦ Chất vải sợi tự nhiên, rất mềm mại. Thấm hút mồ hôi, thoát hơi và kháng khuẩn rất tốt.
 ➦ Kiểu dáng thiết kế trẻ trung, mềm mại
 ➦ Rất bền và không phai màu, không bai nhão trong thời dài sử dụng.
i ➦ màu trắng đơn giản, sang trọng
 ➦ Mặc thoáng mát, thoải mái không gò bó
➦ Không bai dãn, sổ lông trong quá trình sử dụng 
➦ Sản phẩm hot và được ưa chuộng nhất năm
➦  Có các size M (50 - 62KG) , L(60 - 72 KG), 2L(70 - 82KG)
 ➦ Chính sách giá ưu đãi tốt nhất thị trường
 ➦Áo được thiết kế đơn giản, dễ mặc cho nam giới phong cách năng động và khỏe khoắn hơn.
 👉👉 Mua ngay Áo ba lỗ nam Hà Nội ngay hôm nay để nhận ƯU ĐÃI KHỦNG!!!', 
'public/img/products/f4a695003d10825a8ee6337a278600fd.png',
35),
(15, 51000, 'Quần Jeans Đen Bạc Dáng Rộng Cạp Cao Ống Rộng 2 Túi Vuông Cá Tính Tôn Dáng', 'quần nam', 
'QUẦN TÚI VUÔNG 301
___
     Chất liệu: Bò / Jeans
BẢNG SIZE THAM KHẢO
XS: Eo 64cm Mông 93cm Dài quần 101cm Đùi 54cm Chu vi gấu quần 42cm
S:   Eo 68cm Mông 96cm Dài quần 102cm Đùi 56cm Chu vi gấu quần 43cm
M:  Eo 72cm Mông 100cm Dài quần 102cm Đùi 58cm Chu vi gấu quần 43.5cm
L:   Eo 76cm Mông 104cm Dài quần 103cm Đùi 60cm Chu vi gấu quần 44cm
XL: Eo 80cm Mông 108cm Dài quần 104cm Đùi 62cm  Chu vi gấu quần 45cm
2XL: Eo 84cm Mông 112cm Dài quần 105cm Đùi 65cm Chu vi gấu quần 45cm

💓Kích thước trên mô tả được đô thủ công, vì vậy có thể bị sai lệch 1-2cm
INBOX để được hỗ trợ tư vấn size

CHÍNH SÁCH ĐỔI TRẢ
- Đối với trường hợp xảy ra nhầm lẫn trong đơn hàng hoặc có lỗi phía nhà sản xuất, bạn vui lòng liên hệ cho shop kèm hình ảnh và video bóc hàng để được hỗ trợ đổi hàng miễn phí nhanh chóng.
- Lưu ý: Sản phẩm còn nguyên tag và không có tình trạng đã qua sử dụng.
_________
💓Cam kết nguồn gốc sản phẩm 100% là Hàng QCCC, được nhà Chanh đặt trực tiếp không qua trung gian nên giá cả rất hợp lý
💓Những sản phẩm đăng bán là những sản phẩm được nhà Chanh tuyển chọn qua chất lượng vải, đường may, kiểu dáng nên các bạn hoàn toàn yên tâm khi mua hàng tại nhà Chanh', 
'public/img/products/1c686be9cea18b4c687d4199c8a3dcf6.png',
35),
(16, 205000, 'Quần Jeans Đen Bạc Dáng Rộng Cạp Cao Ống Rộng 2 Túi Vuông Cá Tính Tôn Dáng', 'quần nam', 
'QUẦN TÚI VUÔNG 301
___
     Chất liệu: Bò / Jeans
BẢNG SIZE THAM KHẢO
XS: Eo 64cm Mông 93cm Dài quần 101cm Đùi 54cm Chu vi gấu quần 42cm
S:   Eo 68cm Mông 96cm Dài quần 102cm Đùi 56cm Chu vi gấu quần 43cm
M:  Eo 72cm Mông 100cm Dài quần 102cm Đùi 58cm Chu vi gấu quần 43.5cm
L:   Eo 76cm Mông 104cm Dài quần 103cm Đùi 60cm Chu vi gấu quần 44cm
XL: Eo 80cm Mông 108cm Dài quần 104cm Đùi 62cm  Chu vi gấu quần 45cm
2XL: Eo 84cm Mông 112cm Dài quần 105cm Đùi 65cm Chu vi gấu quần 45cm

💓Kích thước trên mô tả được đô thủ công, vì vậy có thể bị sai lệch 1-2cm
INBOX để được hỗ trợ tư vấn size

CHÍNH SÁCH ĐỔI TRẢ
- Đối với trường hợp xảy ra nhầm lẫn trong đơn hàng hoặc có lỗi phía nhà sản xuất, bạn vui lòng liên hệ cho shop kèm hình ảnh và video bóc hàng để được hỗ trợ đổi hàng miễn phí nhanh chóng.
- Lưu ý: Sản phẩm còn nguyên tag và không có tình trạng đã qua sử dụng.
_________
💓Cam kết nguồn gốc sản phẩm 100% là Hàng QCCC, được nhà Chanh đặt trực tiếp không qua trung gian nên giá cả rất hợp lý
💓Những sản phẩm đăng bán là những sản phẩm được nhà Chanh tuyển chọn qua chất lượng vải, đường may, kiểu dáng nên các bạn hoàn toàn yên tâm khi mua hàng tại nhà Chanh', 
'public/img/products/1c686be9cea18b4c687d4199c8a3dcf6.png',
13),
(17, 240000, 'Áo choàng bông thú lông mịn mùa đông', 'áo nữ', 
' Tăm tia bao lâu nay cúi cùng shop cũng nhả sêu cho em gom này~~~ đông mà lười là toàn chùm em nó thuii ấm dã man mà xinh xỉu áaaa

Đi lang thang trong nhà ko sợ lạnh, mà có chẳng may phải chạy ra ngoài thì vẫn ấm áp ạ.
Nhìn gấu cưng dễ sợ lunnn á 😚😚 
Heheee sắm 1 e để đi đầu trend nàoooo 

🐶 5 mẫu em đánh số
Size S-M-L-XL
S: 40-47kg
M: 47-54kg
L: 54-60kg
XL: 60-67kg', 
'public/img/products/sg-11134201-22100-ofm9emsngjiv6c.png',
0),
(18, 220000, 'Áo len nam cổ lọ dài tay Gman vải len tăm công nghệ dệt kim cao cấp phong cách hàn quốc', 'áo nam', 
'  1. THÔNG TIN SẢN PHẨM: Áo Len Nam cổ lọ dài tay - thời trang nam
✔️ Áo len nam cổ lọ là món phụ kiện thời trang đơn giản nhưng không kém phần đẹp, thời trang. Các anh có thể mặc đi làm, đi chơi hay đi dự tiệc lại rất dễ phối đồ dù là với quần vải, quần jean, quần kaki hay với các sản phẩm áo măng tô, áo vest.

✔️ Chất liệu: vải len cotton thiên nhiên mềm mại có bề mặt mềm mịn, thoát mồ hôi giữ ấm, nhanh tạo cảm giác vô cùng thoải mái cho người mặc và đặc biệt là không bị Xù Lông, Không phai màu, Giặt máy tốt. 

✔️ Màu sắc áo len cổ lọ nam : 9 màu
ĐEN - TRẮNG - XÁM - GHI - NÂU ĐẤT - XANH THAN - RÊU - ĐỎ ĐÔ - BE 

✔️ Size áo len tay dài : L, XL

    2. HƯỚNG DẪN CHỌN SIZE ÁO LEN NAM
📍 Size L: Cân nặng 45-65kg, cao dưới 1m70
📍 Size XL: Cân nặng 65-78kg, cao dưới 1m80.
(Nếu bạn gặp khó khăn khi chọn size, vui lòng INBOX, cung cấp chiều cao, cân nặng để SHOP TƯ VẤN SIZE)

   3.  Mẹo Nhỏ Giúp Bạn Bảo Quản Quần áo nam : 
💌  Đối với sản phẩm quần áo mới mua về, nên giặt tay lần đầu tiên để tránh phai màu sang quần áo khác
💌 Khi giặt nên lộn mặt trái ra để đảm bảo độ bền 
💌 Sản phẩm phù hợp cho giặt máy (có túi giặt)/giặt tay
💌 Không giặt chung đồ Trắng và đồ Tối màu 

    4. CHÍNH SÁCH
✔️ Cam kết chất lượng và loại mã sản phẩm giống với hình ảnh.
✔️ Trả hàng hoàn tiền trong 3 ngày nếu như sản phẩm không đúng mô tả
✔️ Shop sẽ đổi trả trong các trường hợp: shop giao nhầm size, nhầm màu, nhầm sản phẩm khác, thiếu hàng, áo bị lỗi và các lỗi khác của nhà sản xuất.
✔️ Trong các trường hợp: khách không ưng, mặc không hợp, khách chọn nhầm sản phẩm,... quý khách vui lòng  INBOX để shop hướng dẫn đổi size phù hợp

    5. LƯU Ý
🍀 Quay video khi mở / bóc / khui sản phẩm để được giải quyết nếu có sự cố
🍀 Màu sắc của sản phẩm thực tế có thể đậm, nhạt hơn ảnh mô tả do ánh sáng và màn hình thiết bị khác nhau.
🍀 Kích thước sản phẩm dung sai cho phép ±2cm.', 
'public/img/products/4e738af4c439269f606dc20f38bd69f8.png',
0),
(19, 250000, 'Áo Len Nam Nữ Faviti Cổ 3 Phân Dài Tay Chất Lông Cừu Đẹp Cao Cấp Mềm Mịn Dày Dặn Cực Ấm Kiểu Dáng Hàn Quốc AL86', 'áo nam nữ', 
'Len lông cừu là một loại len tự nhiên được làm Bằng công nghệ kéo sợi và xử lý xơ hiện đại ,len lông cừu tạo ra những loại len vượt trội hơn hẳn các chất liệu như bông hay vải tổng hợp. Chúng mang đến phong cách, sự thoải mái và hiệu suất cùng với sự hài hòa hoàn hảo.

Những sợi len hoàn toàn tự nhiên và vô cùng quý giá, có tác dụng giữ ấm tốt nhất, không những thế còn có khả năng điều chỉnh nhiệt độ cơ thể và khử mùi hôi. Điều này khiến cho các sản phẩm từ len lông cừu càng được ưa chuộng, đặc biệt là với những người thường xuyên vận động.

', 
'public/img/products/sg-11134201-22110-n4g1b7yppvjvee.png',
0),
(20, 200000, 'Quần Chip Nam Boxer Thun Lạnh Combo 4 Cái, Quần Xì Nam Đùi Thun Lạnh Cao Cấp Co Giãn 4 Chiều Cực Thoáng Khí Kháng Khuẩn', 'quần lót nam', 
'Quần Chip Nam Boxer Thun Lạnh Hộp 4 Cái, Quần Xì Nam Đùi Thun Lạnh Cao Cấp Co Giãn 4 Chiều Cực Thoáng Khí Kháng Khuẩn.
Quần Chip Nam boxer thun lạnh vẫn là chiếc quần lót mềm mại, mát lạnh giúp bảo vệ và nâng đỡ cậu nhỏ suốt ngày dài làm việc nhưng với chất liệu thun lạnh cao cấp sẽ mang lại những trải nghiệm hoàn toàn thoải mái và mát mẽ cho các chàng trai.
- Sản phẩm sử dụng vải thun lạnh co giãn tốt cực thoáng mát (Đảm bảo Uy Tín - Cam kết vải cực đẹp)
- Quần Chip Nam Boxer thun lạnh là mẫu sản phẩm Hot nhất hiện nay, đang được nhiều bạn nam ưa thích
- Sản phẩm quần lót nam Boxer thun lạnh cao cấp đầy đủ nhãn mác hiệu. 
- Xưởng nhà may, đẹp từ đường kim mũi chỉ, chất liệu an toàn. 
- Quần Chip Nam boxer cao cấp với chất liệu thun lạnh mềm mại, bền đẹp, thoáng mát, đàn hồi, giúp co giãn cực tốt, mang lại cảm giác thoải mái đã được tạo ra từ đôi tay của những người thợ lành nghề.
- Sản phẩm là loại vải mềm, mịn, mát và không bai nhão 
- Quần Chip Nam có độ thấm hút mồ hôi cao, tạo sự thông thoáng 
- Chất liệu: vải thun lạnh lạnh cao cấp
- Màu sắc: trắng, đen, xanh đen, đỏ ( được trộn màu ngẫu nhiên)
- Tính năng của sản phẩm: sang trọng, mềm mại, êm ái, thoát hơi cực tốt, thiết kế đai lưng tạo nên sự mạnh mẽ cho phái mạnh. 
- Quần Chip Nam  với 100% vải thun lạnh cao cấp được sản xuất tỷ mỹ theo tiêu chuẩn Việt Nam. 
- Quần xì nam boxer với kiểu dáng khoẻ khoắn hiện đại, năng động, ôm sát vào cơ thể cùng với gam màu tươi sáng tạo nên sự tự tin cho phái mạnh mỗi ngày. 
- Sản phẩm  với thiết kế đai lưng rời mạnh mẽ, sử dụng công nghệ dệt may mới nhất để tạo nên chất lượng cho sản phẩm, đem đến cảm giác co dãn siêu tốt, mềm mượt không để lại vết hằn trên da. 
- Sản phẩm dễ giặt và dễ bảo quản, không bị phai màu và ra màu khi giặt. 
- Quần xì nam boxer thun lạnh có khả năng hống ẩm, chống mùi hôi và vi khuẩn, bảo vệ làn da nhạy cảm của cậu bé.
Bảng Size
- Size XL: 45kg – 55kg
- Size XXL: 56kg – 65kg 
- Size XXXL: 66kg – 75kg 
Lưu ý! 
- Quý khách có cân nặng giữa 2 size nên chọn size lớn hơn, để chắc chắn hơn về size nên inbox cho shop về chiều cao cân nặng để shop tư vấn size phù hợp . 
Hướng Dẫn Bảo Quản
- Không sử dụng chất tẩy để giặt Quần xì nam vì sẽ làm ảnh hưởng màu sắc của sản phẩm.
- Sản phẩm khi phơi nên được lộn ra bề trái để bảo vệ gam màu của sản phẩm được tốt hơn.
Cam Kết Của Shop
- Shop cam kết sản phẩm giống hình 100% và luôn đặt chất lượng lên hàng đầu. 
- Tất cả hình ảnh đều là ảnh thật do shop tự chụp.
- Cam kết 100% đổi nếu sản phẩm khách đặt không vừa Size hoặc trả hàng nếu lỗi do shop. 
- Hàng luôn có sẳn giao ngay khi khách đặt. 
- Nếu có bất cứ điều gì không hài lòng về sản phẩm, khách vui lòng liên hệ với shop trước khi đánh giá shop nhé, shop sẽ sắp xếp đổi, trả hàng hoặc hoàn tiền cho khách ạ!
', 
'public/img/products/0500129cf7275778a13771d5cfc387d8.png',
0);

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
