DROP database IF EXISTS web;
CREATE DATABASE web;
USE web;


CREATE TABLE `PRODUCT` (
  `id` int AUTO_INCREMENT,
  `price` int  DEFAULT NULL,
  `name` varchar(255)  DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `content` varchar(10000)  DEFAULT NULL,
  `img` varchar(255)  DEFAULT 'public/uploads/product.jpeg',
  primary key (id)
);

CREATE TABLE `NEWS` (
  `id` int AUTO_INCREMENT,
  `status` boolean DEFAULT NULL,
  `date` datetime  DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `content` varchar(10000)  DEFAULT NULL,
  `title` varchar(255)  DEFAULT NULL,
  primary key (id)
) ;

CREATE TABLE `USER` (
  `email` varchar(255) ,
  `profile_photo` varchar(255) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `gender` boolean DEFAULT NULL,
  `age` int default null,
  `phone` varchar(10) DEFAULT NULL,
  `createAt` datetime DEFAULT NULL,
  `updateAt` datetime DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  primary key (email)
) ;

-- CREATE TABLE `RATING`(
-- 	`product_id` int ,
-- 	`user_id` varchar(255),
-- 	`star_num` int DEFAULT 0,
-- 	foreign key(product_id) references PRODUCT(id) ON DELETE CASCADE ON UPDATE CASCADE,
-- 	foreign key(user_id) references USER(email) ON DELETE CASCADE ON UPDATE CASCADE,
-- 	primary key (product_id, user_id)
-- );

CREATE TABLE `COMMENT` (
  `id` int AUTO_INCREMENT,
  `date` datetime DEFAULT NULL,
  `approved` BOOLEAN,
  `content` varchar(10000),
  `news_id` int,
  `user_id` varchar(255),
  `parent` int DEFAULT NULL,
  primary key (id),
  foreign key(news_id) references NEWS(id) ON DELETE CASCADE ON UPDATE CASCADE,
  foreign key(user_id) references USER(email) ON DELETE CASCADE ON UPDATE CASCADE
);

ALTER TABLE `COMMENT`
ADD foreign key (parent) references COMMENT(id) ON DELETE CASCADE ON UPDATE CASCADE;

CREATE TABLE `ADMIN` (
  `username` varchar(255),
  `password` varchar(255) DEFAULT NULL,
  `createAt` datetime DEFAULT NULL,
  `updateAt` datetime DEFAULT NULL,
  primary key (username)
);

CREATE TABLE `COMPANY` (
  `id` int AUTO_INCREMENT,
	`name` varchar(255),
  `address` varchar(1000) DEFAULT NULL,
  `createAt` datetime DEFAULT NULL,
  `updateAt` datetime DEFAULT NULL,
  primary key(id)
);


-- Example data 
INSERT INTO `ADMIN` (username, password) VALUES ('admin', '');
INSERT INTO `ADMIN` (username, password) VALUES ('username', '');

INSERT INTO `USER` (email, fname, lname, gender, age, phone, password)
VALUES ('admin@hcmut.edu.vn', 'Nguyen Van', 'A', 1, 15, '0123456789', '');
INSERT INTO `USER` (email, fname, lname, gender, age, phone, password)
VALUES ('user@hcmut.edu.vn', 'Nguyen Van', 'B', 0, 30, '0123456789', '');


-- Product data
INSERT INTO `PRODUCT` (name, price, description, content, img)
VALUES ('Áo khoác nam xịn nhất năm', 150000, 'Áo khoác nam', 
'✔️ Áo khoác kaki nam đẹp, phong cách hàn quốc hiện đại giúp bạn phát huy được sự cá tính, năng động của bản thân. 
✔️Áo khoác kaki nam là mẫu áo khoác quen thuộc với hầu hết mọi chàng trai  và các nàng rồi đúng không nào, để phù hợp với gu thời trang hiện đại ngày nay các kiểu Áo khoác kaki được thiết kế đa dạng kiểu dáng lạ mắt mang đến gu thời trang năng động, khỏe khoắn cho người mặc. Các bạn có thể diện Áo khoác kaki nam tới công sở, dạo phố, đi học, dã ngoại,.....đề phù hợp đấy. Hãy nhanh chóng chọn cho mình một kiểu để thay đổi phong cách hàng ngày của bản thân nào.
📣Chất liệu: kakai 2 lớp

✔️ KÍCH THƯỚC: 
Size S : Dưới 39kg Cao Dưới 1m65
Size M: 40kg - 55kg Cao Dưới 1m70
Size L: 56kg - 62kg Cao Dưới 1m75
Size XL: 63kg - 75kg Cao Dưới 1m78
Size XXL: 76kg - 80kg Cao Dưới 1m80
LƯU Ý: những bạn có bụng nên lấy lớn hơn 1 size so với bảng trên ạ. inbox trực tiếp cho shop để được tư vấn chính xác nhất',
'public/img/products/ao_khoac_nam_1.png');

INSERT INTO `PRODUCT` (name, price, description, content, img)
VALUES ('Áo khoác nam đen', 150000, 'Áo khoác nam', 
'✔️ áo khoác đẹp, phong cách hàn quốc hiện đại giúp bạn phát huy được sự cá tính, năng động của bản thân. 
✔️ áo khoác nam là mẫu áo khoác quen thuộc với hầu hết mọi chàng trai  và các nàng rồi đúng không nào, để phù hợp với gu thời trang hiện đại ngày nay các kiểu áo khoác dù được thiết kế đa dạng kiểu dáng lạ mắt mang đến gu thời trang năng động, khỏe khoắn cho người mặc. Các bạn có thể diện áo khoác gió tới công sở, dạo phố, đi học, dã ngoại,.....đề phù hợp đấy. Hãy nhanh chóng chọn cho mình một kiểu áo khoác để thay đổi phong cách hàng ngày của bản thân nào.
📣Chất liệu cúa áo khoác nỉ nam : nỉ cao cấp 2 lớp',
'public/img/products/product.png');

INSERT INTO `PRODUCT` (name, price, description, content, img)
VALUES ('Áo Khoác Cardigan Trắng Nâu Túi Gấu Nữ form rộng xinh xắn', 200000, 'Áo khoác nữ',
'Áo Khoác Cardigan Trắng Nâu Túi Gấu Nữ form rộng xinh xắn
Áo Khoác Cardigan Túi Gấu Be Nâu
 - Form: Freesize, 60-70kg đổ lại mặc oke 
- kích thước : dài 63cm, rộng 55cm, tay 54cm, vai 54cm
- Phân loại: be, nâu
- Chất liệu: Nỉ Bông
 #cardigan #cardigannamnu #cardiganformrong #aocardigan #aokhoac',
'public/img/products/ao_choang_nu.png');


INSERT INTO `PRODUCT` (name, price, description, content, img)
VALUES ('ÁO SƠ MI NAM DÀI TAY THỜI TRANG HÀN QUỐC CAO CẤP', 85000, 'Áo sơ mi nam',
'Áo sơ mi nam dài tay, vải đẹp cao cấp loại 1 trên thị trường.
Áo sơ mi nam cổ bẻ dài tay (sơ mi nam) được thiết kế với form dáng trẻ trung với form áo ôm, rất chuẩn như hình.
Chúng tôi hiện nay cung cấp áo sơ mi nam với giá bán lẻ tốt nhất trên thị trường.
--Giá cạnh tranh nhất do chính nhà máy sản xuất với số lượng lớn.
--Chúng tôi không nói sản phẩm của mình có chất lượng cao nhưng phải khẳng định chất lượng sản phẩm vượt trội so với giá tiền. 
--Uy tín bán hàng được đặt lên hàng đầu, không kinh doanh chộp giật.
--Vì sản phẩm được sản xuất với số lượng lớn để có giá cạnh tranh nên không thể tránh được sai sót. Nếu quý khách hàng không hài lòng chúng tôi sẵn sàng hỗ trợ đổi trả.
--Rất mong nhận được ý kiến đóng góp của Quý khách hàng để chúng tôi cải thiện chất lượng dịch vụ tốt hơn.',
'public/img/products/ao_so_mi_nam.png'
);

INSERT INTO `PRODUCT` (name, price, description, content, img)
VALUES ('Quần baggy nam ống rộng kiểu dáng quần jean nam ống suông cao cấp đẹp', 79000, 'Quần Jean nam',
'THÔNG TIN SẢN PHẨM  Quần jean nam
✔️Chất liệu: 98% cotton, 2% spandex.

✔️Đặc tính: Co giãn, hút ẩm tốt và thấm hút mồ hôi.

✔️Hướng dẫn sử dụng: quần baggy nam

- Giặt ở nhiệt độ bình thường.

- Không được dùng hóa chất tẩy, ủi ở nhiệt độ thích hợp.

- Hạn chế sử dụng máy sấy.
 ✔️ Sản xuất: Hàng Việt Nam Xuất Khẩu
 ✔️ Màu sắc, mẫu mã giống hình 100%
 ✔️ Chấp nhận đổi trả nếu có bất cứ vấn đề nào liên quan đến chất lượng',
'public/img/products/jean_nam.png'
);

INSERT INTO `PRODUCT` (name, price, description, content, img)
VALUES ('Quần jean baggy nam ống rộng suông cao cấp chất bò đẹp 007', 129000, 'Quần Jean nam',
'THÔNG TIN SẢN PHẨM  Quần jean nam
✔️Chất liệu: 98% cotton, 2% spandex.

✔️Đặc tính: Co giãn, hút ẩm tốt và thấm hút mồ hôi.

✔️Hướng dẫn sử dụng: quần baggy nam

- Giặt ở nhiệt độ bình thường.

- Không được dùng hóa chất tẩy, ủi ở nhiệt độ thích hợp.

- Hạn chế sử dụng máy sấy.
 ✔️ Sản xuất: Hàng Việt Nam Xuất Khẩu
 ✔️ Màu sắc, mẫu mã giống hình 100%
 ✔️ Chấp nhận đổi trả nếu có bất cứ vấn đề nào liên quan đến chất lượng',
'public/img/products/24526a479ebbc5730bf0472e5d355170.png'
);

INSERT INTO `PRODUCT` (name, price, description, content, img)
VALUES ('Quần sọt nam, quần lửng nam, quần short jean nam màu trắng rách cao cấp 2021 QJNA0002', 100000, 'Quần lửng nam',
'THÔNG TIN CHI TIẾT SẢN PHẨM QUẦN JEAN NAM
Quần sọt nam, quần lửng nam, quần short jean nam màu trắng rách cao cấp 2021 QJNA0002
 + Chất liệu vải jean demin cao cấp
 + Được thiết kế phù hợp với độ tuổi từ 18 đến 30 tuổi 
+ Quần vải jean mềm mại thấm hút mồ hôi tốt, thoải mái khi mặc 
+ Quần có thể kết hợp với nhiều loại trang phục để mặc ở nhà hay đi chơi, du lịch,…
CÁCH SỦ DỤNG VÀ BẢO QUẢN QUẦN JEAN NAM ,
+ Giặt bằng máy phơi khô dưới ảnh nắng trực tiếp
 + Bảo quản trong nơi khô ráo thoáng mát , tránh nơi ẩm ướt
 CÁCH CHỌN SIZE TỪ 28-32 CỦA QUẦN JEAN NAM 
+ SIZE 28: cao dưới 1m65, nặng 45 - 50Kg, vòng bụng 79cm 
+ SIZE 29: cao dưới 1m68, nặng 50 - 55Kg, vòng bụng 81cm 
+ SIZE 30: cao dưới 1m7, nặng 55 - 59Kg, vòng bụng 83cm 
+ SIZE 31: cao dưới 1m73, nặng 60 - 64Kg, vòng bụng 85cm 
+ SIZE 32: cao dưới 1m78, nặng 65 - 70Kg, vòng bụng 86cm
 SHOP…  XIN CAM KẾT 
+ Sản phẩm chất lượng tốt, đúng như mô tả 
+ Giao hàng ngay khi nhận được đơn
 + Đổi, trả với những sản phẩm lỗi do nhà sản xuất 
+ Lưu ý: Không nhận đổi trả với lí do không vừa ý ',
'public/img/products/7cf42a990082379716da4356e59ed97c.png'
);

INSERT INTO `PRODUCT` (name, price, description, content, img)
VALUES ('Quần đùi thể thao nam GYMKAI, quần short 2 lớp, lót legging lửng, thoải mái vận động', 208000, 'Quần lửng nam',
'QUẦN ĐÙI THỂ THAO NAM GYMKAI, QUẦN SHORT 2 LỚP, LÓT LEGGING LỬNG, THOẢI MÁI VẬN ĐỘNG
- Quần với thiết kế 2 lớp chuyên dụng với lớp trong là quần legging lửng may liền với quần tập gym chắc chắn bên ngoài.
- Chất liệu:
+ Vải ngoài: 100% Polyester Microfiber
+ Vải trong : 95% Polyester 5% Spandex
- Thiết kế 2 lớp chuyên dụng phù hợp với đặc tính vận động khi tập luyện hoặc tham gia hoạt động thể thao.
- Lớp trong với chất liệu thun lạnh co giãn 4 chiều hỗ trợ bó cơ khi tập luyện và vận động, lớp vải ngoài thông hơi thấm hút mồ hôi cực tốt.
- Quần ngoài form ngắn trên gối mang đến vẻ ngoài mạnh mẽ, nam tính khi vận động
- Chất liệu quần đạt tiêu chuẩn xuất khẩu không xù lông, không bai nhão, không phai màu
- Quần có 2 màu : Đen và Xám 
- Quần short thể thao nam 2 lớp cao cấp được thiết kế theo đúng form chuẩn của nam giới Việt Nam.
- Thích hợp chơi thể thao, chạy bộ, tập gym, chơi bóng rổ, bóng chuyền, mặc nhà, đi chơi dạo phố,...
- Nơi sản xuất : được thiết kế và may sản xuất trực tiếp tại Việt Nam.',
'public/img/products/d80c30fde4bfcc552714f0fcd95ff469.png'
);

INSERT INTO `PRODUCT` (name, price, description, content, img)
VALUES ('Quần lửng nam Fasvin T21438.HN vải gió co giãn mềm mát tiện dụng mặc nhà và thể thao', 175000, 'Quần lửng nam',
'=>  Các shop có thương hiệu đều luôn giữ gìn uy tín của mình. Đến với Fasvin bạn cũng sẽ được phục vụ tận tình chu đáo.

=>  Quần lửng nam Fasvin T21438.HN được chế tạo tại nhà máy của FASVIN với quy trình thu hóa nghiệm ngặt. Các sản phẩm đều được những người thợ lâu năm trong nghề làm ra một cách cẩn thận và chắc chắn. Quần rất đa dụng có thể mặc đi chơi, thể thao hay mặc nhà. 

* KIỂU DÁNG : Quần lửng nam thể thao Fasvin có thiết kế dáng lửng dài đến đầu gối, dài hơn các mẫu quần short thường khoảng 5 cm tạo cảm giác  khoẻ khoắn, năng động nhưng không kém phần lịch sự. Quần có thiết kế đơn giản phù hợp với nhiều lứa tuổi từ thanh niên đến trung niên. Quần lửng thể thao Fasvin được may vừa vặn đứng dáng nên tiện dụng  đi chơi  thể thao, dạo phố hay mặc nhà.

*CHẤT  LIỆU : Vải gió chun thể thao co giãn 4 chiều (95% Polyester + 5% spandex) thoải mái mềm mát. Đây là loại vải dệt thoi chứ không phải dệt kim nên đứng dáng và lịch sự có thể đi chơi hay mặc nhà tiếp khách. Chất vải thoáng mát và bền chắc thích hợp các hoạt động mạnh mẽ. 

* GIÁ CẢ : Chúng tôi luôn không ngừng cải tiến để có thể tạo ra những sản phẩm có chất lượng tốt với giá cả phải chăng nhất. Hơn nữa luôn có các chương trình khuyến mại dành cho quý khách dùng thử và trải nghiệm sản phẩm mới.

* CHẤT LƯỢNG: Quần lửng nam đã được kiểm định chất lượng bởi cục tiêu chuẩn chất lượng và có tem hợp quy được dán trên thẻ bài.

* BẢO QUẢN VÀ SỬ DỤNG : Sản phẩm có thể giặt máy, nhanh khô và không bị bạc màu. Đặc biệt nếu bạn là người bận rộn, bạn không cần là lượt trước khi mặc vì vải đã được tích hợp công nghệ chống nhăn, chống nhàu.
',
'public/img/products/5472f307a0db884dadb06f5d9010d5aa.png'
);

INSERT INTO `PRODUCT` (name, price, description, content, img)
VALUES ('Quần Ngố Kaki Nam Túi Hộp Lửng GENVIET Basic Đơn Giản T1303K1026', 398000, 'Quần lửng nam',
'CHÍNH SÁCH MUA HÀNG: 
+ Hỗ trợ đổi hàng với những sản phẩm bị lỗi do nhà sản xuất, hoặc những sản phẩm giảm giá dưới 50% mà không vừa size số.
+ Inbox trực tiếp để GENVIET tư vấn size và giải đáp các vấn đề bạn đang quan tâm nhé.
+ Bạn nhận được sản phẩm, vui lòng đánh giá giúp GENVIET nha.
- Chỉ áp dụng đổi với sản phẩm mua nguyên giá.
- Không áp dụng đổi đối với hàng khuyến mại, hàng giảm giá hoặc mua trong chương trình ưu đãi khác.
- Vì lý do sức khỏe, không đổi trả quần áo lót, phụ kiện.
- Sản phẩm chưa qua sử dụng, còn nguyên tem mác, thẻ bài và kèm hóa đơn hoặc biên lai vận chuyển.
------------------------------------------------------
HƯỚNG DẪN GIẶT ỦI
- Không giặt tẩy bằng các chất tẩy rửa mạnh
- Không ngâm nước quá lâu
- Không nên ngâm và giặt chung với sản phẩm khác
- Cách giặt đồ: Lấy 1-2 giọt sữa tắm, dầu gội đầu… đánh bông lên, cho sản phẩm vào -bóp nhẹ, rũ qua sau đó rũ lại bằng nước sạch rồi phơi lên luôn, tránh ngâm lâu.
- Với những sản phẩm chất liệu ren, có phụ kiện không nên giặt sản phẩm cùng với các sản phẩm cầu kì khác như: Có móc, có khóa cứng, có nhiều họa tiết …. sẽ làm ảnh hưởng đến chất liệu sản phẩm. (Sản phẩm ren và lưới hoặc vải mềm mỏng nên giặt bằng tay, nếu giặt máy vui lòng bỏ vào túi lưới để tránh làm hư sợi vải)
- Đối với sản phẩm có chất co giãn mạnh, khi phơi nên phơi ngang, lộn mặt trái sản phẩm khi phơi
- Nên phơi quần áo trong bóng mát, không nên phơi dưới ánh nắng gắt quá lâu tránh mất màu, giòn và rút sợi vải
- Ủi sản phẩm ở nhiệt độ vừa phải.
------------------------------------------------------
MÔ TẢ SẢN PHẨM
 T1303K1026 - Quần Ngố GENVIET Kaki Nam Túi Hộp
- Chất liệu: Kaki 
-Màu Sắc: hồng đất, xanh ghi, xanh rêu
-Kích cỡ: 27 đến 34
Sản phẩm được thiết kế độc quyền bởi thương hiệu thời trang GENVIET  với hệ thống 80 showrooms trên toàn quốc với thương hiệu uy tín, sản phẩm chất lượng mà mang lại vẻ đẹp tuyệt đối cho bạn. GENVIET tin rằng sẽ đem lại sự trải nghiệm tuyệt vời cho các bạn khi sử dụng sản phẩm và dịch vụ của GENVIET
',
'public/img/products/fcdf27ac2a8dc95fcd016f66901213d2.png'
);

INSERT INTO `PRODUCT` (name, price, description, content, img)
VALUES ('váy trắng tiểu thư trễ vai tay bồng dáng dài hai lớp, đầm trắng dự tiệc bánh bèo', 68000, 'váy nữ',
'
váy trễ vai trắng tay bồng dáng dài, đầm trễ vai tiểu thư dự tiệc màu trắng điệu đà

 màu trắng

Free sz < 63kg 


❤️❤️ vblà xưởng may với niềm đam mê mãnh liệt về thiết kế, và phương châm sản phẩm mang giá trị sử dụng cao cho khách hàng , thảo nguyên cũng luôn hướng tới giá trị cốt lõi và bền vững dựa trên cơ sở lợi ích cho khách hàng luôn là hàng đầu .. ! Và rất mong được sự ủng hộ và đặt niềm tin bên shop.

Trân trọng và cảm ơn rất nhiều !! Các khách hàng yêu quý của shop 😘
',
'public/img/products/4cb7898954c4dc291ef1ad30d820225e.png'
);



INSERT INTO `NEWS` (status, date, title, description, content)
VALUES (1, '2021-11-11', 'Ca nhiễm tăng, TP.HCM kiểm soát di biến động dân cư ra sao?', 
'TTO - TP.HCM không lập lại các chốt kiểm soát để kiểm tra di biến động dân cư như trước đây. Tuy vậy người dân từ các tỉnh thành đến TP.HCM sẽ phải đăng ký tạm trú tạm vắng để địa phương có biện pháp kiểm soát.',
'UBND TP.HCM yêu cầu tăng cường kiểm soát chặt chẽ di biến động dân cư. Các địa phương phải nắm chắc tình hình người dân khi ra, vào địa bàn, người có nguy cơ đang lưu trú, làm việc tại các địa phương, doanh nghiệp như lái xe, phụ xe liên tỉnh, người làm việc ngoài tỉnh về địa phương lưu trú… Từ đó sẽ chủ động các biện pháp quản lý phù hợp.
Tuy nhiên trước chủ trương này của thành phố, nhiều người dân bày tỏ sự băn khoăn, không biết liệu thành phố có lập lại các chốt kiểm soát và cần phải chuẩn bị những thủ tục gì khi đến TP.HCM.
Trao đổi về vấn đề này, thượng tá Lê Mạnh Hà - phó trưởng Phòng tham mưu Công an TP.HCM - cho biết TP.HCM không lập lại các chốt kiểm soát để kiểm tra di biến động dân cư như trước đây.
Theo thượng tá Hà, biến động dân cư được hiểu là sự thay đổi về dân cư, thường trú, tạm trú, không phải là lực lượng chức năng kiểm soát người dân đi lại ở các chốt.
Hiện nay Công an TP.HCM đang thực hiện các công tác quản lý di biến động dân cư như: đăng ký thường trú, tạm trú, rà soát hộ khẩu, những ai có mặt thực tế ở địa phương. Công an TP cũng đang rà soát, đối sánh các dữ liệu dân cư, cấp mã số định danh cá nhân.
Bên cạnh đó ngành công an cũng đang kiểm tra diện thường trú, tạm trú, những người đang lưu trú ở khách sạn, nhà nghỉ... khai báo để quản lý chặt chẽ và thực hiện các chính sách an sinh xã hội.');
INSERT INTO `NEWS` (status, date, title, description, content)
VALUES (1, '2021-11-11', '50% ca tử vong ở TP.HCM chưa tiêm vắc xin, thành phố đang "đánh chặn" số ca chuyển nặng', 
'TTO - Với việc ban hành hướng dẫn gói chăm sóc sức khỏe cho F0 cách ly tại nhà phiên bản 1.6, ngành y tế TP.HCM cho thấy quyết tâm tập trung "đánh chặn từ xa" bằng việc kiểm soát F0 cách ly tại cộng đồng không để trở nặng.',
'Không phải F0 nào cũng cách ly tại nhà
Theo thống kê, trong tổng số ca F0 hiện tại có khoảng 70% trường hợp có triệu chứng nhẹ, hoặc không có triệu chứng đang được cách ly chăm sóc tại nhà hoặc khu cách ly tập trung. Làm gì để giảm số ca mắc chuyển nặng? Hướng dẫn mới nhất từ TP.HCM được "chi tiết hóa" từ phân loại người F0 nào được cách ly ở nhà; chăm sóc ra sao; nên và không nên làm gì; dấu hiệu cần báo ngay cho y tế và kê đơn, cấp cứu F0 tại nhà...
Hướng dẫn lần này quy định rõ hơn về đối tượng được chăm sóc tại nhà khi đảm bảo đủ 2 điều kiện bao gồm không triệu chứng hoặc triệu chứng nhẹ (không có suy hô hấp SpO2 lớn hơn hoặc bằng 96% khi thở khí trời, nhịp thở bằng hoặc dưới 20 lần/phút). Chỉ những F0 có độ tuổi từ 1 - 50 tuổi, không có bệnh nền, không đang mang thai, không béo phì mới được cách ly ở nhà.
Ngoài ra quy định này chỉ cho phép một số trường hợp không thỏa các điều kiện nêu trên có thể xem xét cách ly ở nhà nếu có bệnh nền ổn định, bảo đảm tiêm đủ 2 mũi vắc xin hoặc sau 14 ngày kể từ ngày tiêm mũi đầu tiên.
TP Thủ Đức (TP.HCM) là một trong các địa phương được ghi nhận có số ca mắc tăng nhanh gần đây. Ông Nguyễn Văn Chức - giám đốc Trung tâm Y tế TP Thủ Đức - cho biết để "đánh chặn từ xa", ngoài 32 trạm y tế cố định, các trạm y tế lưu động, các phường triển khai tổ y tế lưu động đến từng khu phố (trước đây là phường) để kịp thời xử lý các ca F0 chuyển nặng. "Tổ lưu động của từng khu phố khá đông, bao gồm đủ các ban ngành từ y tế, đoàn thanh niên, dân quân, giáo dục, thành ra việc phản ứng và tiếp cận sẽ được gần người dân hơn" - ông Chức nói.');

INSERT INTO `COMMENT` (news_id, user_id, date, approved, content)
VALUES (1, 'admin@hcmut.edu.vn', '2021-12-12', 1, 'Bất ngờ quá');
INSERT INTO `COMMENT` (news_id, user_id, date, approved, content)
VALUES (1, 'admin@hcmut.edu.vn', '2021-12-12', 1, 'Bất ngờ quá');
INSERT INTO `COMMENT` (news_id, user_id, date, approved, content)
VALUES (2, 'user@hcmut.edu.vn', '2021-12-12', 0, 'Không thể tin được');

INSERT INTO `COMPANY` (name, address)
VALUES ('Chi nhánh TPHCM', '268 Lý Thường Kiệt, Phường 14, Quận 10, TPHCM');
INSERT INTO `COMPANY` (name, address)
VALUES ('Chi nhánh Hà Nội', 'Hà Nội');