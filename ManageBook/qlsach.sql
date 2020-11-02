-- Cơ sở dữ liệu: `qlbansach`

--
-- Cấu trúc bảng cho bảng `tbl_admin`

--
INSERT INTO `tbl_admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `admin_phone`, `created_at`, `updated_at`) VALUES
(1, 'mailinh123', '12345678', 'Mai Linh','0976931294', null, null),
(2, 'tham123', '12345678', 'Hồng Thắm','0976931294', null,null);


--
-- Cấu trúc bảng tbl_category_product

INSERT INTO `tbl_category_product` (`category_id`, `category_name`, `category_desc`, `category_status`, `created_at`, `updated_at`) VALUES
(1, 'Tiểu thuyết', 'Top các truyện tiểu thuyết ngôn tình hay nhất trong năm 2020 được bạn đọc bình chọn và đánh giá cao. Nếu bạn là fan thì không thể bỏ qua các truyện này.', '1', null, null),
(2, 'Thơ', 'Tuyển tập những bài thơ hay','1',null,null);

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
(3, 'Xuân Diệu','XuanDieu.jpg','Xuân Diệu(2/2/1916) là một trong những nhà thơ tiêu biểu trong phong trào thơ mới của Việt Nam. Là “nhà thơ mới nhất trong những nhà thơ mới”( theo Hoài Thanh). Có rất nhiều tác phẩm của Xuân Diệu được đông đảo công chúng yêu thơ đón nhận nồng nhiệt.','1',null,null);


INSERT INTO `tbl_product` (`product_id`,`product_name`,`category_id`,`author_id`,`product_image`,`product_desc`,`product_content`,`product_numberOfPages`,`product_price`,`product_status`,`created_at`, `updated_at`) VALUES 
(1, 'Vội vàng', 2, 3,'ManageBook\Images\Sách\Van_Tho\Voi_vang.jpg','Bài thơ là lời giục giã hãy sống mãnh liệt, sống hết mình, hãy quý trọng từng phút, từng giây của cuộc đời mình nhất là những năm tháng tuổi trẻ của một hồn thơ yêu đời ham sống đến cuồng nhiệt','Bài thơ là lời giục giã hãy sống mãnh liệt, sống hết mình, hãy quý trọng từng phút, từng giây của cuộc đời mình nhất là những năm tháng tuổi trẻ của một hồn thơ yêu đời ham sống đến cuồng nhiệt',2,'50.000 vnđ',1,null,null);