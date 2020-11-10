-- Cơ sở dữ liệu: `qlbansach`

--


--

-- Tạo index:
Alter table tbl_product ADD INDEX idx_authorid(author_id);
Alter table tbl_product add index idx_pro(product_id);
Alter table tbl_author add index idx_author(author_id);
Alter table tbl_category_product  add index idx_cateid(category_id);
Alter table tbl_customer add index idx_customerid(customer_id);
Alter table tbl_product add index idx_cate(category_id);



-- Cấu trúc bảng cho bảng `tbl_admin`
INSERT INTO `tbl_admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `admin_phone`, `created_at`, `updated_at`) VALUES
(1, 'mailinh123', '12345678', 'Mai Linh','0976931294', null, null),
(2, 'tham123', '12345678', 'Hồng Thắm','0976931294', null,null);


--
-- Cấu trúc bảng tbl_category_product

INSERT INTO `tbl_category_product` (`category_id`, `category_name`, `category_desc`, `category_status`, `created_at`, `updated_at`) VALUES
(1, 'Tiểu thuyết', 'Top các truyện tiểu thuyết ngôn tình hay nhất trong năm 2020 được bạn đọc bình chọn và đánh giá cao. Nếu bạn là fan thì không thể bỏ qua các truyện này.', '1', null, null),
(2, 'Sách khoa học', 'Khoa học là nền tảng, là động lực thúc đẩy sự phát triển, là chiếc chìa khóa mở cánh cửa tương lai của loài người.Chúng tôi giới thiệu đến bạn đọc 14 cuốn sách khoa học hay, ngắn, dễ đọc, và vô cúng thú vị giúp cung cấp lượng kiến thức to lớn từ nguồn gốc các loài, các nền văn minh thế giới cho đến vũ trụ bao la chứa đựng nhiều điều bí ẩn chưa được khai phá.','1',null,null),
(3, 'Truyện tranh', 'Những bộ truyện tranh hay, nổi tiếng và mới nhất trong nước & thể giới: Nhật Bản, Hàn Quốc, Việt Nam,...', '1', null, null),
(4, 'Văn Thơ', 'Những bài thơ mang đến rất nhiều cảm xúc sâu lắng, làm say đắm lòng người, đó là sự kết hợp hoàn hảo của những nhà thơ vĩ đại Việt Nam, rất nhiều thể loại thơ ca ra đời, được xem như một bức tranh văn hóa đa màu sắc của dải đất hình chữ S, nơi mà chúng ta đang sống hàng ngày. Cùng điểm qua 1 số bài thơ được xem là những bài thơ hay nhất nhé!', '1', null, null),
(5,'Truyện cổ tích','Những câu chuyện cổ tích hay dành cho thiếu nhi','1',null,null);

--
-- Cấu trúc bảng tbl_author

INSERT INTO `tbl_author` (`author_id`, `author_name`, `author_image`, `author_desc`, `author_status`,`created_at`, `updated_at`) VALUES
(1, 'Huy Cận', 'HuyCan.jpg', '- Ông là một trong những nhà thơ xuất sắc nhất của phong trào Thơ mới.
- Ông sinh năm 1919 và mất năm 2005
- Ông có tên khai sinh là tên khai sinh là Cù Huy Cận
- Ông từng giữ các chức cao trong cách mạng VIệt Nam
- Ông được nhận một số giải thưởng cao quý như: Giải thưởng Hồ Chí Minh về văn học nghệ thuật, tặng Huân chương Sao Vàng, được bầu là viện sĩ Viện Hàn lâm Thơ Thế giới, ….
- Một số tác phẩm tiêu biểu của Huy Cận: Lửa thiêng, Kinh cầu tự, Bài thơ cuộc đời (1963), Hai bàn tay em (thơ thiếu nhi, 1967), Những năm sáu mươi (1968), Chiến trường gần đến chiến trường xa (1973), Họp mặt thiếu niên anh hùng (1973), Những người mẹ, những người vợ (1974), Ngày hằng sống ngày hằng thơ (1975), Ngôi nhà giữa nắng (1978), Hạt lại gieo (1984),...','1',null,null),
(2, 'Hồ Chí Minh', 'HoChiMinh.jpg', 'Chủ tịch Hồ Chí Minh sinh ngày 19 tháng 5 nǎm 1890 tại quê ngoại làng Hoàng Trù, xã Kim Liên, huyện Nam Đàn, tỉnh Nghệ An, trong một gia đình nhà nho.','1', null,null),
(3, 'Xuân Diệu','XuanDieu.jpg','Xuân Diệu(2/2/1916) là một trong những nhà thơ tiêu biểu trong phong trào thơ mới của Việt Nam. Là “nhà thơ mới nhất trong những nhà thơ mới”( theo Hoài Thanh). Có rất nhiều tác phẩm của Xuân Diệu được đông đảo công chúng yêu thơ đón nhận nồng nhiệt.','1',null,null),
(4, 'Nam Cao', 'NamCao.jpg', 'Nam Cao tên thật Trần Hữu Tri , giấy khai sinh ghi ngày 29 tháng 10 năm 1917, nhưng theo người em ruột của ông là Trần Hữu Đạt thì ông sinh năm 1915. ... Ông gửi in trên Tiểu thuyết thứ bảy, trên báo Ích Hữu các truyện ngắn Nghèo, Đui mù, Những cánh hoa tàn,...','1', null,null),
(5, 'Mai Long_Hồng Hà', '', 'Tác giả chuyên viết về các thể loại truyện cổ tích, truyện tranh việt nam','1', null,null),
(6, 'Gosho Aojama', 'tac_gia_manga_conan.jpg', 'Tác giả Aoyama Gosho tên khai sinh là Aoyama Yoshimasa, sinh ngày 21/6/1963 tại tỉnh Tootori, Nhật Bản. Ông là nhà sáng tác truyện tranh, được biết đến với bộ truyện Thám tử lừng danh Conan.','1', null,null),
(7, 'Fujiko Fujio', 'tac_gia_manga_doremon.jpg', 'Doraemon là bộ truyện tranh Nhật Bản của tác giả Fujiko Fujio được sáng tác vào năm 1969, ban đầu dành cho lứa tuổi thiếu nhi. Tác phẩm sau đó đã được chuyển thể thành các tập phim hoạt hình ngắn, dài cùng các thể loại khác như kịch, trò chơi điện tử. Họa sĩ Fujiko Fujio là tấm gương sáng về lao động nghệ thuật, sự nghiêm cẩn mà bao dung của ông in đậm trong tâm trí các học trò.','1', null,null),
(8, 'Nguyễn Nhật Ánh', 'Nguyen_Nhat_Anh.jpg', 'Nguyễn Nhật Ánh (sinh ngày 7 tháng 5 năm 1955) là một nhà văn người Việt. Ông được biết đến qua nhiều tác phẩm văn học về đề tài tuổi mới lớn, các tác phẩm của ông rất được độc giả ưa chuộng và nhiều tác phẩm đã được chuyển thể thành phim.','1', null,null),
(9,'Hans Christian Andersen','Andersen.jpg','Là nhà văn người Đan Mạch chuyên viết truyện cổ tích cho thiếu nhi','1',null,null);



INSERT INTO `tbl_product` (`product_id`,`product_name`,`category_id`,`author_id`,`product_image`,`product_desc`,`product_content`,`product_numberOfPages`,`product_price`,`product_status`,`created_at`, `updated_at`) VALUES 
(3, 'Vội vàng', 4, 3,'Voi_vang.jpg','Bài thơ là lời giục giã hãy sống mãnh liệt, sống hết mình, hãy quý trọng từng phút, từng giây của cuộc đời mình nhất là những năm tháng tuổi trẻ của một hồn thơ yêu đời ham sống đến cuồng nhiệt','Bài thơ là lời giục giã hãy sống mãnh liệt, sống hết mình, hãy quý trọng từng phút, từng giây của cuộc đời mình nhất là những năm tháng tuổi trẻ của một hồn thơ yêu đời ham sống đến cuồng nhiệt',124,'50.000 vnđ',1,null,null),
(2, 'Chí Phèo', 4, 4,'ChiPheo_NamCao.jpg','Chí Phèo là một truyện ngắn nổi tiếng của nhà văn Nam Cao viết vào tháng 2 năm 1941. Chí Phèo là một tác phẩm xuất sắc, thể hiện nghệ thuật viết truyện độc đáo của Nam Cao, đồng thời là một tấn bi kịch của một người nông dân nghèo bị tha hóa trong xã hội. Chí Phèo cũng là tên nhân vật chính của truyện.','Truyện xoay quanh nhân vật Chí Phèo - đứa trẻ bị bỏ hoang trong một lò gạch cũ và được nhặt về nuôi. Lớn lên hắn đi ở hết nhà này nhà khác. Năm 20 tuổi, hắn làm canh điền cho nhà Bá Kiến, bị Bá Kiến vu oan và bắt bỏ tù. Hắn ở tù bảy tám năm rồi trở về với bộ dạng khác hẳn ngày xưa. Hắn lúc nào cũng say và cứ say là hắn lại đến nhà Bá Kiến để chửi bới, rạch mặt ăn vạ. Bá Kiến đã biến Chí Phèo thành kẻ tay sai chuyên đâm thuê chém mướn cho lão. Chí Phèo trở thành con quỷ dữ của làng Vũ Đại, ai cũng khiếp sợ. Cuộc đời hắn không lúc nào tỉnh. Nhưng vào một đêm trăng, hắn gặp Thị Nở, họ ăn nằm với nhau. Nửa đêm hắn đau bụng, nôn mửa và sáng hôm sau, Thị Nở nấu cho hắn một bát cháo hành. Cũng từ đó hắn khao khát trở về cuộc sống lương thiện và muốn được sống cùng Thị Nở. Nhưng một lần nữa hắn bị đạp xuống vực vì bà cô của Thị không đồng ý. Chí Phèo tuyệt vọng, lại uống và cầm dao đến nhà Bá Kiến đòi lương thiện. Hắn đâm chết Bá Kiến rồi tự tử. Thị Nở nghe tin hắn chết nhìn xuống bụng và nghĩ đến cái lò gạch.',124,'50.000 vnđ',1,null,null),
(4, 'Conan', 3, 6,'Connan.jpg','Bộ truyện được cập nhật và hiện tại đã có tập mới nhất.','Thám tử lừng danh Conan (bản đẹp) hay Detective Conan, là một bộ truyện tranh trinh thám Nhật Bản của tác giả Aoyama Gosho.Mở đầu câu truyện, cậu học sinh trung học 17 tuổi Shinichi Kudo bị biến thành cậu bé Conan Edogawa. Shinichi trong phần đầu của Thám tử lừng danh Conan được miêu tả là một thám tử học đường xuất sắc.',136,'22.000 vnđ',1,null,null),
(5, 'Tấm Cám', 3, 5,'TamCam.jpg','Sản phẩm dành cho độ tuổi thiếu nhi và hiện rất được yêu thích','Tấm Cám là một câu chuyện cổ tích Việt Nam thuộc thể loại truyện cổ tích thần kì. Dù có nhiều dị bản, câu chuyện này phản ánh những mâu thuẫn trong gia đình, đặc biệt là mối quan hệ mẹ kế - con chồng; cuộc đấu tranh giữa cái thiện và cái ác, cùng ước mơ cái thiện thắng cái ác của người Việt Nam.',80,'80.000 vnđ',1,null,null),
(6, 'Thần đồng đất việt', 3, 5, 'ThanDongDatViet.jpg', 'Bộ truyện tranh hiện là sản phẩm được rất nhiều người quan tâm và lựa chọn.','Thần đồng Đất Việt là một bộ truyện tranh thiếu nhi Việt Nam do họa sĩ Lê Linh sáng tác và phát hành bởi Công ty Phan Thị cùng với sự phối hợp của Nhà xuất bản Trẻ',78,'35.000 vnđ',1,null,null),
(7, 'Doraemon', 3, 6,'Doraemon.jpg','Bộ truyện tình trạng vẫn còn mới, được cập nhật đến tập mới nhất.','Bộ truyện kể về một chú mèo máy tên là Doraemon đến từ thế kỷ 22 để giúp một cậu bé cấp 1 hậu đậu tên là Nobi Nobita. Các câu chuyện của Doraemon thường ngắn gọn, dễ hiểu, dí dỏm và mang cái nhìn lạc quan về cuộc sống tương lai cũng như sự phát triển của khoa học kĩ thuật.',123, '28.000 vnđ',1,null,null),
(8, 'Tôi thấy hoa vàng trên cỏ xanh', 1, 8, 'ToiThayHoaVangTrenCoXanh.jpg','Trọn bộ sản phẩm hiện có 4 quyển','Tiểu thuyết là một câu chuyện đầy cảm xúc về quê hương, về gia đình, về thời niên thiếu của mỗi người. Cậu bé Tường ngây thơ, đầy tình thương trong khi Thiều là người anh trai ích kỷ, hẹp hòi đến tàn nhẫn. Bên cạnh tình cảm anh em với những yêu thương, ghen ghét, đố kỵ, hối tiếc, ăn năn… còn là tình cảm bạn bè, kỷ niệm thời thơ ấu của lũ trẻ nhà quê nghèo ở miền Trung cuối những năm 1980. Ở đó có những cuộc cãi vã, đánh nhau; những trò chơi trẻ con thú vị; những giấc mơ cổ tích công chúa, hoàng tử; những hờn giận vu vơ, rung động đầu đời…',257,'99.000 vnđ',1,null,null),
(9, 'Mắt Biếc', 1, 8, 'MatBiec.png', 'Trọn bộ sản phẩm gồm 4 quyển','Mắt biếc kể về cuộc đời của nhân vật chính tên Ngạn. Ngạn sinh ra và lớn lên ở một ngôi làng tên là làng Đo Đo (thuộc xã Bình Quế - huyện Thăng Bình - tỉnh Quảng Nam - cũng là nguyên quán của tác giả). Lớn lên cùng với Ngạn là cô bạn hàng xóm có đôi mắt tuyệt đẹp tên là Hà Lan. Tuổi thơ của Ngạn và Hà Lan gắn bó với bao nhiêu kỉ niệm cùng đồi sim, đánh trống trường... Tình bạn trẻ thơ dần dần biến thành tình yêu thầm lặng của Ngạn dành cho Hà Lan....', 256, '91.000 vnđ',1,null,null),
(10,'Tràng Giang',4,1,'TrangGiang_HuyCan.jpg','Bài thơ bộc lộ nỗi sầu của một cái tôi cô đơn trước thiên nhiên rộng lớn, trong đó thấm đượm tình người, tình đời, lòng yêu nước thầm kín mà thiết tha','Bài thơ bộc lộ nỗi sầu của một cái tôi cô đơn trước thiên nhiên rộng lớn, trong đó thấm đượm tình người, tình đời, lòng yêu nước thầm kín mà thiết tha',15,'80.000 vnđ',1,null,null),
(11,'Lão Hạc',4,4,'LaoHac_NamCao.jpg','Lão Hạc là một trong những truyện ngắn xuất sắc viết về người nông dân của Nam Cao, đăng báo lần đầu năm 1943','Tác phẩm phản ánh hiện thực số phận người nông dân trước CMT8 qua tình cảnh của lão Hạc: nghèo túng, không có lối thoát, phải chọn cái chết để bảo toàn tài sản cho con và không phiền hà hàng xóm.Qua đó thể hiện tấm lòng yêu thương, trân trọng đối với người nông dân trong xã hội của nhà văn Nam Cao. Cảm thông, trân trọng, ngợi ca vẻ đẹp tiềm ẩn của người nông dân trong cảnh khốn cùng vẫn giàu lòng tự trọng.',50,'50.000 vnđ',1,null,null)
(12,'Nhật ký trong tù',4,2,'NhatKiTrongTu_HoChiMinh.jpg','Nhật ký trong tù là tập thơ gồm 133 bài theo thể đường luật do Hồ Chí Minh sáng tác trong thời gian bị chính quyền Tưởng Giới Thạch bắt giam ở Quảng Tây, Trung Quốc.','Nhật ký trong tù không chỉ ghi những cảnh sinh hoạt trong tù, mà còn có ý nghĩa tố cáo chế độ nhà tù khắc nghiệt của chính quyền Tưởng Giới Thạch.',120,'150.000 vnđ',1,null,null),
(13,'Cô bé bán diêm',5,9,'CoBeBanDiem.jpg','Truyện kể về một cô bé nghèo khổ phải đi bán diêm giữa mùa đông giá lạnh và từ giã cõi đời trong đêm giao thừa','Truyện kể về một cô bé nghèo khổ phải đi bán diêm giữa mùa đông giá lạnh và từ giã cõi đời trong đêm giao thừa',100,'100.000 vnđ',1,null,null);



--
-- Cấu trúc bảng tbl_customer
INSERT INTO `tbl_customer` (`customer_id`,`customer_name`,`customer_email`,`customer_password`,`customer_phone`,`customer_address`,`created_at`, `updated_at`) VALUES 

--
-- Cấu trúc bảng tbl_shipping
INSERT INTO `tbl_shipping` (`shipping_id`,`shipping_name`,`shipping_address`,`shipping_phone`,`shipping_email`,`shipping_note`,`created_at`, `updated_at`) VALUES 

--
-- Cấu trúc bảng tbl_order_details
INSERT INTO `tbl_order_details` (`order_details_id`,`order_id`,`product_id`,`product_name`,`product_price`,`product_sales_quantity`,`created_at`, `updated_at`) VALUES 