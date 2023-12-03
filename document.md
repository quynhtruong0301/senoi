Những đối tượng mình cần quan tâm đến:
    * Administrator
        - Quản lý các nội dung xuất hiện trên website
        - Phê duyệt bài viết, blog, chỉnh sửa các thông tin
        - ...
    * Người dùng website
        - Cá nhân
            + Những người có nhu cầu mua bán thú cưng
            + Những người có nhu cầu tìm hiểu và được tư vấn từ các đơn vị thú cưng
            + ...
        - Doanh nghiệp cung cấp các dịch vụ thú cưng (Khám chữa bệnh, buôn bán đồ thú cưng, ...)
            + Những doanh nghiệp có nhu cầu đặt banner quảng cáo
            + Kết nối với khách hàng
            + ...
        - Các tổ chức bảo vệ động vật
            + Chia sẻ những bài viết về nội dung phù hợp.
            + Cho và tặng miễn phí thú cưng bị bỏ rơi
            + Quyên góp tiên cứu chữa cho thú cưng hiểm nghèo
Phân tích theo chức năng cụ thể của từng đối tượng
    *Administrator
        - Admin toàn quyền:
            + Phân quyền cho các quản trị viên cấp dưới
            + Quản lý toàn bộ thông tin
            + Các chức năng bên phía quản trị viên
                . Thêm, sửa, xoá, phân quyền cho các quản trị viên mới
                . Xem thông tin, dữ liệu thống kê của website (số bài viết mới, số thú cưng được bán, số người truy cập,...)
                . Chỉnh sửa các thông tin trên website (Thêm, sửa, xoá)


-------------------Databases----------------------------
1. Bảng provinces
   - Bảng provinces chứa dữ liệu của các tỉnh thành của Việt Nam được cập nhật mới nhất.
   - Các trường trong bảng:
     - id:  Là trường để định danh và phân biệt giữa các tỉnh thành.
     - name: Là trường để lưu dữ liệu tên các tỉnh thành.
     - slug: Là trường để lưu dữ liệu tên các tỉnh thành dưới dạng slug.
     - created_at: Là trường lưu trữ dữ liệu ngày mà bản ghi được tạo.
     - updated_at: Là trường lưu trữ dữ liệu ngày mà bản ghi được chỉnh sửa.
2. Bảng districts
    - Bảng districts chứa dữ liệu của các quận, huyện của Việt Nam được cập nhật mới nhất.
    - Các trường trong bảng:
        - id:  Là trường để định danh và phân biệt giữa các quận, huyện.
        - province_id: Là khoá ngoại để cho biết quận, huyện này thuộc tỉnh, thành phố nào.
        - name: Là trường để lưu dữ liệu tên các quận, huyện.
        - slug: Là trường để lưu dữ liệu tên các quận, huyện dưới dạng slug.
        - created_at: Là trường lưu trữ dữ liệu ngày mà bản ghi được tạo.
        - updated_at: Là trường lưu trữ dữ liệu ngày mà bản ghi được chỉnh sửa.
3. Bảng wards
    - Bảng wards chứa dữ liệu của các xã, phường của Việt Nam được cập nhật mới nhất.
    - Các trường trong bảng:
        - id:  Là trường để định danh và phân biệt giữa các xã, phường.
        - district_id: Là khoá ngoại để cho biết xã, phường này thuộc quận, huyện nào.
        - name: Là trường để lưu dữ liệu tên các xã, phường.
        - slug: Là trường để lưu dữ liệu tên các xã, phường dưới dạng slug.
        - created_at: Là trường lưu trữ dữ liệu ngày mà bản ghi được tạo.
        - updated_at: Là trường lưu trữ dữ liệu ngày mà bản ghi được chỉnh sửa.
4. Bảng topics
   - Bảng topics chứa dữ liệu của các lựa chọn chủ đề của những bài viết, bài chia sẻ (blogs).
   - Các trường trong bảng:
     - id: Là trường để định danh và phân biệt giữa các topic
     - name: Là trường để lưu dữ liệu tên các topic.
     - slug: Là trường để lưu dữ liệu tên các topic dưới dạng slug.
     - created_at: Là trường lưu trữ dữ liệu ngày mà bản ghi được tạo.
     - updated_at: Là trường lưu trữ dữ liệu ngày mà bản ghi được chỉnh sửa.
5. Bảng categories
    - Bảng categories chứa dữ liệu của các giống loại thú cưng được lựa chọn khi tạo bài đăng mới.
    - Các trường trong bảng:
        - id: Là trường để định danh và phân biệt giữa các bản ghi.
        - name: Là trường để lưu dữ liệu tên các loại thú cưng.
        - virtual_image: Là trường để lưu hình ảnh hoạt hình của các loại thú cưng.
        - real_image: Là trường để lưu hình ảnh thực của các loại thú cưng.
        - slug: Là trường để lưu dữ liệu tên các loại thú cưng dưới dạng slug.
        - description: Là trường để lưu dữ liệu mô tả qua về các loại thú cưng.
        - public: Là trường quyết đinh việc có hiển thị lựa chọn loại thú cưng này ra website cho người dùng hay không.
        - created_at: Là trường lưu trữ dữ liệu ngày mà bản ghi được tạo.
        - updated_at: Là trường lưu trữ dữ liệu ngày mà bản ghi được chỉnh sửa.
6. Bảng attributes
    - Bảng attributes chứa dữ liệu của các lựa chọn thuộc tính, tính chất của các thú cưng được tạo trên website.
    - Các trường trong bảng:
        - id: Là trường để định danh và phân biệt giữa các thuộc tính.
        - type: Là trường để lưu dữ liệu của các loại thuộc tính như màu sắc, quốc tịch, tuổi, ...
        - value: Là trường để lưu các dữ liệu cụ thể của các thuộc tính.
        - display_name: Là trường để lưu dữ liệu tên hiển thị với của thuộc tính với người dùng.
        - public: Là trường quyết đinh việc có hiển thị thuộc tính này ra website cho người dùng hay không.
        - created_at: Là trường lưu trữ dữ liệu ngày mà bản ghi được tạo.
        - updated_at: Là trường lưu trữ dữ liệu ngày mà bản ghi được chỉnh sửa.
7. Bảng blogs
    - Bảng bloss chứa dữ liệu của các bài viết, bài chia sẻ (blog) .
    - Các trường trong bảng:
        - id: Là trường để định danh và phân biệt giữa các bài viết.
        - topic_id: Là khoá ngoại cho biết bài viết này thuộc topic nào.
        - title: Là trường lưu trữ dữ liệu tiêu đề của bài viết.
        - author: Là trường để lưu trữ dữ liệu tác giả của bài viết.
        - description: Là trường để lưu trữ dữ liệu mô tả khái quát của bài viết.
        - content: Là trường để lưu trữ dữ liệu toàn bộ nội dung bài viết.
        - slug: Là trường để lưu trữ dữ liệu tiêu đề bài viết dưới dạng slug.
        - tag: Là trường để lưu trữ dữ liệu các tag của bài viết.
        - public: Là trường quyết đinh việc có hiển thị bài viết này ra website cho người dùng hay không.
        - order: Là trường để sắp xếp thứ tự hiện thị bài viết và bài viết nổi bật, bài viết có giá trị order càng cao thì càng nổi bật.
        - created_at: Là trường lưu trữ dữ liệu ngày mà bản ghi được tạo.
        - updated_at: Là trường lưu trữ dữ liệu ngày mà bản ghi được chỉnh sửa.
8. Bảng banners
    - Bảng banners chứa dữ liệu của các hình ảnh quảng cáo được hiển thị trên website.
    - Các trường trong bảng:
        - id: Là trường để định danh và phân biệt giữa các hình ảnh quảng cáo.
        - user_id: Là khoá ngoại cho biết hình ảnh quảng cáo này được cá nhân, đơn vị nào đặt.
        - url: Là trường để lưu trữ dữ liệu đường dẫn ảnh của ảnh quảng cáo.
        - order: Là trường để sắp xếp thứ tự hiện thị các ảnh quảng cáo và quảng cáo nổi bật, quảng cáo có giá trị order càng cao thì càng nổi bật.
        - public: Là trường quyết đinh việc có hiển thị ảnh quảng cáo này ra website cho người dùng hay không.
        - start_date: Là trường để lưu dữ liệu ngày bắt đầu hiển thị quảng cáo trên website.
        - end_date: Là trường để lưu dữ liệu ngày kết thúc hiển thị quảng cáo trên website.
        - created_at: Là trường lưu trữ dữ liệu ngày mà bản ghi được tạo.
        - updated_at: Là trường lưu trữ dữ liệu ngày mà bản ghi được chỉnh sửa.
9. Bảng pets
    - Bảng pets là bảng bảng lưu trữ dữ liệu thông tin các bài đăng bán thú cưng, là thành phần chính của website.
    - Các trường trong bảng:
        - id: Là trường để định danh và phân biệt giữa các bài đăng.
        - user_id: Là khoá ngoại cho biết bài đăng này là của ai.
        - category_id: Là khoá ngoại cho biết thú cưng trong bài thuôc loại nào.
        - province_id: Là khoá ngoại cho biết thú cưng được đăng bán ở tỉnh, thành phố nào.
        - district_id: Là khoá ngoại cho biết thú cưng được đăng bán ở quân, huyện nào.
        - ward_id: Là khoá ngoại cho biết thú cưng được đăng bán ở xã, phường nào.
        - thumbnail: Là trường để lưu dữ liệu đường dẫn ảnh hiển thị mặc định của bài viết.
        - name: Là trường để lưu dữ liệu tên của thú cưng đăng bán trong bài.
        - price: Là trường để lưu dữ liệu giá cả của thú cưng được bán trong bài.
        - description: Là trường lưu dữ liệu mô tả về thú cưng đăng bán trong bài.
        - sold: Là trường lưu dữ liệu để có thể biết được thú cưng này đã được bán hay đang còn.
        - favorite: Là trường lưu dữ liệu số người yêu thích và quan tâm đến thú cưng này.
        - free: Là trường lưu dữ liệu để có thể biết được đây là bài đăng bán thú cưng hay là bài cho, tặng thú cưng.
        - created_at: Là trường lưu trữ dữ liệu ngày mà bản ghi được tạo.
        - updated_at: Là trường lưu trữ dữ liệu ngày mà bản ghi được chỉnh sửa.
10. Bảng comments
    - Bảng comments chứa dữ liệu các bình luận của người dùng.
    - Các trường trong bảng:
        - id: Là trường để định danh và phân biệt giữa các bình luận.
        - blog_id: Là khoá ngoại cho biết bình luận này được bình luận trong bài viết nào.
        - pet_id: Là khoá ngoại cho biết bình luận này được bình luận trong bài đăng nào.
        - user_id: Là khoá ngoại cho biết bình luận này là của ai.
        - content: Là trường lưu trữ dữ liệu nội dung bình luận.
        - created_at: Là trường lưu trữ dữ liệu ngày mà bản ghi được tạo.
        - updated_at: Là trường lưu trữ dữ liệu ngày mà bản ghi được chỉnh sửa.
11. Bảng transactions
    - Bảng transactions chứa dữ liệu lịch sử các thông tin giao dịch trong 1 tháng trở lại tính từ hiện tại.
    - Các trường trong bảng:
        - id: Là trường để định danh và phân biệt giữa các các lịch sử giao dịch.
        - user_id: Là khoá ngoại cho biết giao dịch này được thực hiện bởi ai.
        - amount_total: Là trường lưu trữ dữ liệu số tiền thanh toán.
        - merchant_key: Là trường lưu trữ mã code thanh toán của khách hàng.
        - payment_key: Là trường lưu trữ mã giao dịch được lưu trên các cổng thanh toán.
        - capture_method: Là trường lưu trữ hình thức thanh toán.
        - payment_gateway: Là trường lưu trữ cổng thanh toán cho biết người dùng sử dụng cổng thanh toán nào.
        - status: Là trường lưu trữ trạng thái của thanh toán.
        - created_at: Là trường lưu trữ dữ liệu ngày mà bản ghi được tạo.
        - updated_at: Là trường lưu trữ dữ liệu ngày mà bản ghi được chỉnh sửa.
12. Bảng payments
    - Bảng payments chứa dữ liệu thông tin giao dịch đã hoàn thành của hệ thống.
    - Các trường trong bảng:
        - id: Là trường để định danh và phân biệt giữa các các lịch sử giao dịch.
        - user_id: Là khoá ngoại cho biết giao dịch này được thực hiện bởi ai.
        - amount_total: Là trường lưu trữ dữ liệu số tiền thanh toán.
        - merchant_key: Là trường lưu trữ mã code thanh toán của khách hàng.
        - payment_key: Là trường lưu trữ mã giao dịch được lưu trên các cổng thanh toán.
        - capture_method: Là trường lưu trữ hình thức thanh toán.
        - payment_gateway: Là trường lưu trữ cổng thanh toán cho biết người dùng sử dụng cổng thanh toán nào.
        - status: Là trường lưu trữ trạng thái của thanh toán.
        - created_at: Là trường lưu trữ dữ liệu ngày mà bản ghi được tạo.
        - updated_at: Là trường lưu trữ dữ liệu ngày mà bản ghi được chỉnh sửa.
13. Bảng coin_log
    Bảng coin_log chứa dữ liệu sử dụng coin của người dùng trong hệ thống.
    - Các trường trong bảng:
        - id: Là trường để định danh và phân biệt giữa các các lịch sử giao dịch coin.
        - user_id: Là khoá ngoại cho biết giao dịch này được thực hiện bởi ai.
        - coin: Là trường lưu trữ dữ liệu số lượng coin sử dụng trong giao dịch.
        - type: Là trường lưu trữ dữ liệu loại giao dịch coin.
        - message: Là trường lưu trữ dữ liệu nội dung tin nhắn giao dịch.
        - created_at: Là trường lưu trữ dữ liệu ngày mà bản ghi được tạo.
        - updated_at: Là trường lưu trữ dữ liệu ngày mà bản ghi được chỉnh sửa.
14. Bảng users
    Bảng users chứa dữ liệu của người dùng trong hệ thống.
    - Các trường trong bảng:
        - id: Là trường để định danh và phân biệt giữa các người dùng.
        - name: Là trường lưu trữ tên người dùng.
        - avatar: Là trường trữ đường dẫn ảnh đại diện của người dùng.
        - email: Là trường lưu trữ dữ email của người dùng, có thể dùng trong đăng nhập.
        - phone: Là trường lưu trữ dữ số điện thoại của người dùng, có thể dùng trong đăng nhập.
        - social_id: Là trường lưu mã mạng xã hội của người dùng để dùng cho đăng nhập bằng mạng xã hội.
        - social_provider: Là trường lưu trữ cho biết người dùng đăng nhập bằng mạng xã hội nào nếu có.
        - coin: Là trường lưu trữ số lượng coin của người dùng.
        - password: Là trường lưu trữ mật khẩu đã được mã hoá của người dùng.
        - created_at: Là trường lưu trữ dữ liệu ngày mà bản ghi được tạo.
        - updated_at: Là trường lưu trữ dữ liệu ngày mà bản ghi được chỉnh sửa.
15. Bảng favorites
    Bảng favorites là bảng trung gian để có thể đếm và lưu trữ bài đăng yêu thích của người dùng.
    - Các trường trong bảng:
        - user_id: Là khoá ngoại cho biết bản ghi liên kết với người dùng nào.
        - pet_id: Là khoá ngoại cho biết bản ghi liên kết với bằng đăng nào.
        - created_at: Là trường lưu trữ dữ liệu ngày mà bản ghi được tạo.
        - updated_at: Là trường lưu trữ dữ liệu ngày mà bản ghi được chỉnh sửa.
16. Bảng pet_image
    Bảng pet_image là ảnh chứa các đường dẫn ảnh của thú cưng trong bài đăng.
    - Các trường trong bảng:
        - pet_id: Là khoá ngoại cho biết bản ghi liên kết với bằng đăng nào.
        - url: Là trường lưu trữ đường dẫn ảnh của thú cưng.
        - created_at: Là trường lưu trữ dữ liệu ngày mà bản ghi được tạo.
        - updated_at: Là trường lưu trữ dữ liệu ngày mà bản ghi được chỉnh sửa.
17. Bảng pet_attribute
    Bảng pet_attribute là bảng trung gian để cho biết thú cưng trong bài đăng có các thuộc tính gì.
    - Các trường trong bảng:
        - attribute_id: Là khoá ngoại cho biết bản ghi liên kết thuộc tính nào.
        - pet_id: Là khoá ngoại cho biết bản ghi liên kết với bằng đăng nào.
        - created_at: Là trường lưu trữ dữ liệu ngày mà bản ghi được tạo.
        - updated_at: Là trường lưu trữ dữ liệu ngày mà bản ghi được chỉnh sửa.



