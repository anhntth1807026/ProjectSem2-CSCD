<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{

    public function run()
    {
        DB::table('products')->truncate();
        DB::table('products')->insert(
            array (
                array (
                    'id' => 1,
                    'name' => 'Bàn Chải Người Lớn',
                    'description' => 'Bàn Chải Tre Kiểu Nón LAIDAY có gì đặc biệt?

Bàn chải tre LAIDAY được sản xuất và thiết kế một cách thông minh và kỹ lưỡng, với mục đích giảm thải rác một cách đáng kể ngay cả trong khâu đóng gói. 

Những ưu điểm sau đây của Bàn Chải Tre Hình Nón sẽ khiến bạn cực kì an tâm khi mua sắm và sử dụng sản phẩm: 

Thân cầm Phân Hủy Sinh Học

Chất liệu bằng Tre

Đóng gói không có nhựa

Đế Trụ tự đứng vững

Tính Kháng Khuẩn tự nhiên

Không chứa BPA

Sơn phân huỷ

Lông chải Nylon Than Hoạt Tính Phân Huỷ Sinh Học

Về phần lông chải, Bàn Chải Tre Hình Nón có lông bàn chải Nylon Than Tre Hoạt Tính làm từ PBT (Polybutylene terephthalate) hỗ trợ việc vệ sinh răng miệng ở mức tối đa. Ngoài tính chất mỏng nhẹ và chứa cacbon hoá ion, các sợi lông chải PBT còn sở hữu khả năng chống chịu tốt axít và các tác nhân môi trường. Khả năng chống thấm của lông PBT cực kì thích hợp cho những sản phẩm tiếp xúc nhiều với nước.

Sản phẩm Bàn Chải Tre Hình Nón ở Lại Đây có các màu sắc và kích thước dùng cho gia đình:

- Chiều cao :

Bàn chải người lớn: 19 cm

Bàn chải trẻ em: 15,6 cm

- Màu sắc :

Bàn chải người lớn: Hồng, Xanh Dương

Bàn chải trẻ em: Vàng, Xanh Lá.',
                    'thumbnail' => 'jda4v7guyn5p2syj4npi.webp',
                    'quantity' => 1,
                    'price' => 79000,
                    'created_at' => '2019-09-12 03:47:42',
                    'updated_at' => '2019-09-12 03:47:42',
                    'pro_category_id' => 1,
                    ''
                ),
                array (
                    'id' => 2,
                    'name' => 'Băng Keo Giấy',
                    'description' => 'Trong khi băng keo nhựa thường được làm bằng màng BOPP trong từ hạt nhựa PP và được cán thành màng nhựa mỏng, mềm và dai, thì băng keo giấy đã sử dụng giấy kraft, một loại giấy thô không qua tẩy màu để làm lớp nền. Sau đó lớp keo nước sẽ được phun lên bề mặt giấy hay nhựa để tạo thành chất kết dính được làm từ acrylate copolymer, nhựa thông hydro hóa, BOP, DO,...Chính vì vậy khoảnh khắc quyết định chọn băng keo giấy hay băng keo nhựa để sử dụng chính là lúc chúng mình có quyết tâm cứu được có khi là một lõi nhựa nếu nhà sản xuất sử dụng lõi nhựa thay vì lõi giấy và quan trọng hơn hết, là 45m băng keo nhựa hay không !Kích thước: 1.6cm *45m  4.7cm *45m.',
                    'thumbnail' => 'i1okpw40ugrurhsj022e.webp',
                    'quantity' => 1,
                    'price' => 19000,
                    'created_at' => '2019-09-12 03:47:42',
                    'updated_at' => '2019-09-12 03:47:42',
                    'pro_category_id' => 1,
                ),
                array (
                    'id' => 3,
                    'name' => 'Bình Thủy Tinh 10L',
                    'description' => 'Nhắc đến Lại Đây, có lẽ bạn bè sẽ nhớ đến ngay chiếc bình O Brand này khi đến trạm, vì em ấy được Lại Đây sản xuất độc quyền nên sẽ không tìm được ở nơi nào khác. Và đang được dùng để đựng các sản phẩm làm đầy của Lại Đây.Song ngoài mục đích ấy, Lại Đây vẫn bán lẻ để các cá nhân, tổ chức vẫn có thể sử dụng cho các mục đích khác nhau, như đựng nước uống ở nhà (mình thường mua máy lọc nước, nấu lại và trữ nước trong bình, nên mấy năm nay nhà ít phải mua bình nước ngoài và tiết kiệm được kha khá) hoặc là dùng để đựng nước trái cây, nước uống tại các sự kiện thay thế cho các chai nhựa dùng 1 lần dành cho khách đến.Nắp gỗ thông, mộc, có vòi kim loại. Sản phẩm này không có kệ hay gì khác. LDRF chỉ cung cấp sản phẩm bình refill như mô tả ở trên.Đường kính ở đáy là 27cm, Đường kính ở vành miệng là 17cm. Dung tích 10 lít.',
                    'thumbnail' => 'vwz44dkbhwxcyd2wiflu.webp',
                    'quantity' => 1,
                    'price' => 790000,
                    'created_at' => '2019-09-12 03:47:42',
                    'updated_at' => '2019-09-12 03:47:42',
                    'pro_category_id' => 1,
                ),
                array (
                    'id' => 4,
                    'name' => 'Cây Rửa Ly Xơ Mướp',
                    'description' => 'Cây rửa ly bằng xơ mướp được cấu tạo với thân gỗ chắc chắn và đầu xơ mướp nhỏ vừa đủ giúp bạn có thể vệ sinh sạch sẽ với những chiếc cốc, ly cao.Lưu ý : Nên bảo quản hoặc treo nơi thoáng mát, khô ráo.Sau khi dùng nên phơi khô đầu xơ mướp để tránh ẩm mốc và dùng được lâu hơn.',
                    'thumbnail' => 'jd3hjxjvbdllfrgq6qqm.webp',
                    'quantity' => 1,
                    'price' => 39000,
                    'created_at' => '2019-09-12 03:47:42',
                    'updated_at' => '2019-09-12 03:47:42',
                    'pro_category_id' => 1,
                ),
                array (
                    'id' => 5,
                    'name' => 'Chai Gốm Hoa Văn',
                    'description' => 'Đặc điểm:Thiết kế sang trọng và tông màu trầm sẽ giúp chai gốm xuất hiện trong căn nhà của bạn như một phụ kiện trang trí tinh tế.',
                    'thumbnail' => 're9oppowofwiwwzaiyvk.webp',
                    'quantity' => 1,
                    'price' => 165000,
                    'created_at' => '2019-09-12 03:47:42',
                    'updated_at' => '2019-09-12 03:47:42',
                    'pro_category_id' => 1,
                ),
                array (
                    'id' => 6,
                    'name' => 'Chổi Xơ Dừa',
                    'description' => 'Nơi sản xuất: Việt Nam, Kích thước: 40cm,Trọng lượng:Đặc điểm: màu gỗ tự nhiênĐể làm ra loại chổi này, người làm chổi đã lấy vỏ của trái dừa già có nhiều xơ mềm và rất chắc, ủ cho mềm vỏ rồi lấy búa để đập cho xơ dập và tơi ra, sau đó đem xơ ấy để làm thành chổi xơ dừa. Chổi rất bền và đa năng nên sẽ là người cộng sự đắc lực của bạn trong ngôi nhà. Có thể dùng để quét bụi khô lẫn dùng để vệ sinh trong nước. Để bảo quản chổi tốt hơn thì sau khi sử dụng hãy nhớ vệ sinh chổi sạch sẽ và để ở nơi khô ráo thoáng mát nhé.',
                    'thumbnail' => 'rwnoi1hmy6bes82ytaa5.webp',
                    'quantity' => 1,
                    'price' => 79000,
                    'created_at' => '2019-09-12 03:47:42',
                    'updated_at' => '2019-09-12 03:47:42',
                    'pro_category_id' => 1,
                ),
                array (
                    'id' => 7,
                    'name' => 'Cọ Rửa Bình',
                    'description' => 'Sau các dòng sản phẩm dụng cụ vệ sinh từ Xơ Mướp thì Lại Đây luôn cố gắng tìm kiếm những sản phẩm đa năng và tốt hơn để củng cố công cuộc sống xanh của những khách hàng thân yêu. Lại Đây xin giới thiệu với các bạn bộ sưu tập Cọ Rửa Thiên Nhiên.Với những nhiệm vụ chùi rửa quá nặng nhọc mà Xơ Mướp không thể xử lý được, thì các em Cọ Rửa Thiên Nhiên đều có thể ‘cân\' một cách dễ dàng. Mỗi loại cọ rửa có cấu trúc từ những nguyên liệu chắc chắn và có sức bền cao như thân gỗ sồi và lông cọ từ các loại xơ dừa tự nhiên có khả năng ngậm nước và cứng cáp cho chà rửa. Vì vậy, các em cọ trong bộ sưu tập mới này có thể dễ dàng xử lý các vết dính, cháy cặn hay bụi bẩn khó nhằn trong gian bếp hoặc bất cứ khu vực cần chà rửa nào trong căn nhà của bạn.Với mỗi sản phẩm Cọ Rửa Thiên Nhiên trong bộ sưu tập, Lại Đây sẽ hướng dẫn cho bạn đầy đủ về thông tin sản phẩm, cũng như cách sử dụng và bảo quản.
Cọ Rửa Bình EcoCleaner
Thông tin:
Thân gỗ sồi, cọ sợi Tampico.
HDSD:
Ngâm nước 24 tiếng trước khi sử dụng cho lông cọ nở ra và dính chắc hơn vào thân cọ.
Thích hợp để chà rửa bình và các loại chai lọ có đáy sâu.',
                    'thumbnail' => 'jhltkyqjb7dzt8oqqqpq.webp',
                    'quantity' => 1,
                    'price' => 95000,
                    'created_at' => '2019-09-12 03:47:42',
                    'updated_at' => '2019-09-12 03:47:42',
                    'pro_category_id' => 1,
                ),
                array (
                    'id' => 8,
                    'name' => 'Cọ Rửa Chảo Mồi',
                    'description' => 'Sau các dòng sản phẩm dụng cụ vệ sinh từ Xơ Mướp thì Lại Đây luôn cố gắng tìm kiếm những sản phẩm đa năng và tốt hơn để củng cố công cuộc sống xanh của những khách hàng thân yêu. Lại Đây xin giới thiệu với các bạn bộ sưu tập Cọ Rửa Thiên Nhiên.
Với những nhiệm vụ chùi rửa quá nặng nhọc mà Xơ Mướp không thể xử lý được, thì các em Cọ Rửa Thiên Nhiên đều có thể ‘cân\' một cách dễ dàng. Mỗi loại cọ rửa có cấu trúc từ những nguyên liệu chắc chắn và có sức bền cao như thân gỗ sồi và lông cọ từ các loại xơ dừa tự nhiên có khả năng ngậm nước và cứng cáp cho chà rửa. Vì vậy, các em cọ trong bộ sưu tập mới này có thể dễ dàng xử lý các vết dính, cháy cặn hay bụi bẩn khó nhằn trong gian bếp hoặc bất cứ khu vực cần chà rửa nào trong căn nhà của bạn.
Với mỗi sản phẩm Cọ Rửa Thiên Nhiên trong bộ sưu tập, Lại Đây sẽ hướng dẫn cho bạn đầy đủ về thông tin sản phẩm, cũng như cách sử dụng và bảo quản.
Cọ Rửa Chảo Nồi EcoCleaner
Thông tin:
Thân gỗ sồi, cọ sợi Tampico.
HDSD:
Ngâm nước 24 tiếng trước khi sử dụng cho lông cọ nở ra và dính chắc hơn vào thân cọ.
Thích hợp để chà rửa chén, dĩa và khuôn nướng.',
                    'thumbnail' => 'qhbz9lpmar9sw925ezpq.webp',
                    'quantity' => 1,
                    'price' => 115000,
                    'created_at' => '2019-09-12 03:47:42',
                    'updated_at' => '2019-09-12 03:47:42',
                    'pro_category_id' => 1,
                ),
                array (
                    'id' => 9,
                    'name' => 'Đũa Gỗ Trắc',
                    'description' => '
Home  Home Care  Đũa gỗ trắc  Chopsticks, Techicai Sitan Wood
PrevNext
Xuất xứ: Việt Nam
Kích thước: 20cm
Đặc điểm: màu gỗ tự nhiên
ũa là vật dụng không thể thiếu trong mỗi bữa ăn. Tuy nhiên làm sao để có thể chọn cho mình những chiếc đũa tốt không gây ảnh hưởng đến sức khoẻ của gia đình hay chính mình cho những lúc ra khỏi nhà bạn? Đũa gỗ trắc không dùng chất tẩy, có màu của gỗ tự nhiên không dùng các loại sơn để gây ảnh hưởng sức khoẻ của người tiêu dùng trong mỗi bữa ăn. Đũa gỗ trắc với kích thước dài 20cm có thể thuận tiện bỏ vừa túi đựng để mang theo khắp nơi giảm thiểu việc sử dụng đũa 1 lần từ các quán ăn nè.
Lưu ý : Sau khi vệ sinh đũa bằng nước thì bạn nên để ráo hoặc phơi khô để hạn chế ẩm mốc.',
                    'thumbnail' => 'an3k5wvuz0x2w9kpvclo.webp',
                    'quantity' => '1',
                    'price' => 19000,
                    'created_at' => '2019-09-12 03:47:42',
                    'updated_at' => '2019-09-12 03:47:42',
                    'pro_category_id' => 1,
                ),
                array (
                    'id' => 10,
                    'name' => 'Hộp Kim Loại Đựng Thức Ăn ',
                    'description' => '
Hộp Bento Inox Inox Hình Chữ Nhật - 1 tầng - có ngăn chia - 800ml
Trong rất nhiều loại vật liệu bền vững mà chúng ta đang sử dụng để thay thế cho nhựa hay các vật liệu dùng-một-lần, Thép không gỉ chính là một vật liệu bền vững có thể được tái chế 100%.
Theo đó, Lại Đây muốn mang đến cho bạn một giải pháp bảo quản thực phẩm an toàn, lâu dài và hạn chế ảnh hưởng đến môi trường ở mức tối đa. Đó chính là một sản phẩm mang thương hiệu của chúng mình, LAIDAY Bento Kim Loại!
LAIDAY Bento Kim Loại được chế tạo từ thép không gỉ 304, với chỉ tiêu chất lượng cao 188 cho sử dụng với thực phẩm. Sản phẩm của Lại Đây được đóng gói trong các chất liệu tái chế và có thể được tiếp tục sử dụng. Có thể nói, sản phẩm LAIDAY Bento Kim Loại được thiết kế cực kì bền và chắc chắn, nếu được bảo quản đúng cách, bạn có thể sử dụng sản phẩm hoài hoài.
Bên trong Bento Kim Loại có chứa một thanh ngăn siêu chắc chắn, dùng để phân loại và ngăn chia thực phẩm. Nhờ những đặc điểm trên, LAIDAY Bento Kim Loại có thể được dùng để đựng đồ ăn mang đi, dự trữ thực phẩm, và có thể được đem đi đến bất cứ đâu do tính chất mỏng, nhẹ, bền.
Thông Tin Sản Phẩm
Kích cỡ: 17 x 12 x 6 cm
Chất liệu: Thép không gỉ 304 (KHÔNG chứa PVC, Phthalate, Leaching)
Sản phẩm gồm: Hộp bento, nắp có miếng ngăn silicone, thanh chắn.
Khối lượng: 270g
Nguồn gốc: Trung Quốc.
Đạt chất lượng chứng chỉ: FDA, SGS, LFGB.
Cách Bảo Quản
Có thể sử dụng với máy rửa bát.
Nắp có lớp Silicone: nên được rửa với nước lạnh. Miếng silicone có thể rớt ra nếu dùng máy rửa bát do nước nóng, khi dùng chờ 2 phút cho silicone nguội và quay về hình dạng ban đầu và lắp lại vào nắp hộp.',
                    'thumbnail' => 'gkxdyoleuakf6lhaphes.webp',
                    'quantity' => 1,
                    'price' => 429000,
                    'created_at' => '2019-09-12 03:47:42',
                    'updated_at' => '2019-09-12 03:47:42',
                    'pro_category_id' => 1,
                ),
                array (
                    'id' => 11,
                    'name' => 'Hộp Gỗ Tròn ',
                    'description' => 'Hộp gỗ made in VietNam',
                    'thumbnail' => 'otbpw47yof0cujyyijtw.webp',
                    'quantity' => 1,
                    'price' => 79000,
                    'created_at' => '2019-09-12 03:47:42',
                    'updated_at' => '2019-09-12 03:47:42',
                    'pro_category_id' => 1,
                ),
                array (
                    'id' => 12,
                    'name' => 'Hôp vải đựng khăn giấy',
                    'description' => 'Kích cỡ : 23cm x 13cm x 8cm
Đồ vật trong nhà không chỉ giúp ích cho tiện nghi cuộc sống mà chúng còn góp phần tạo nên phong cách sống của một người.
Thiết kế tối giản của chiếc hộp vải đựng khăn rút cùng chất liệu canvas không qua các bước xử lí trung gian để tạo màu sắc cho vải giúp tiết kiệm nguyên liệu và năng lượng, khiến quá trình sản xuất được “xanh” hơn. Chiếc hộp không kiểu cách, không màu sắc nhưng không thể phủ nhận ở nó có một vẻ đẹp rất lạ và thu hút. Và nếu có thể, bạn hãy gấp những miếng khăn vải lại, đặt vào trong hộp để rút xài như khăn giấy và có thể tái sử dụng nhé.
Chất liệu là vải cotton canvas thô 100% đã qua xử lí. Hình dáng sản phẩm sẽ không bị ảnh hưởng sau khi giặt hay phơi, nhưng nếu giặt máy thì vải nhăn lại nhưng hoàn toàn có thể ủi được để lấy lại hình dáng như ban đầu.',
                    'thumbnail' => 'gipfnmhh6sx4qxndlzoy.webp',
                    'quantity' => 1,
                    'price' => 179000,
                    'created_at' => '2019-09-12 03:47:42',
                    'updated_at' => '2019-09-12 03:47:42',
                    'pro_category_id' => 1,
                ),
                array (
                    'id' => 13,
                    'name' => 'Túi vải đựng khăn',
                    'description' => 'Kích cỡ : 23x13x8 (cm)
Được làm từ chất liệu canvas thô sơ, mộc mạc và dày dặn, túi vải đựng khăn là sản phẩm nhỏ gọn, tiện dụng có thể mang theo bên người.
Sản phẩm này dựa trên mẫu khăn vải mà Lại Đây Refill đang bán (kích thước 20 x 20cm), khi gấp đôi lại sẽ nhét vừa vặn. Với mục đích hướng đến cho các cá nhân mang một ít theo hàng ngày, để nếu lỡ có đi ra ngoài ăn uống thì cũng không cần xài các loại khăn lạnh (làm từ vải không dệt, có rất nhiều nhựa), mà cũng không cần mang theo gói khăn giấy tiện lợi.
Chất liệu là vải cotton canvas thô 100% đã qua xử lí. Hình dáng sản phẩm sẽ không bị ảnh hưởng sau khi giặt hay phơi, nhưng nếu giặt máy thì vải nhăn lại nhưng hoàn toàn có thể ủi được để lấy lại hình dáng như ban đầu.',
                    'thumbnail' => 'w2l0t8xbzdfvo2qqaiun.webp',
                    'quantity' => 1,
                    'price' => 69000,
                    'created_at' => '2019-09-12 03:47:42',
                    'updated_at' => '2019-09-12 03:47:42',
                    'pro_category_id' => 1,
                ),
                array (
                    'id' => 14,
                    'name' => 'Khay Đựng Xà Phòng',
                    'description' => 'Kích thước 12 x 7cm.',
                    'thumbnail' => 'qnaff5zmssjuqpjvf4mu.webp',
                    'quantity' => 1,
                    'price' => 59000,
                    'created_at' => '2019-09-12 03:47:42',
                    'updated_at' => '2019-09-12 03:47:42',
                    'pro_category_id' => 1,
                ),
                array (
                    'id' => 15,
                    'name' => 'Ly Xếp Gọn  Thông Minh',
                    'description' => 'Lại Đây xin giới thiệu giải pháp Ly Silicone Gấp Thông Minh, một trợ thủ đắc lực cho nếp sống bận rộn và tiết kiệm năng lượng.

Thiết kế sản phẩm có nếp gấp ở thân cho phép thu gọn Ly xuống còn một phần ba kích thước. Vì vậy, trong những ngày rối rắm công việc, và bạn phải mang rất nhiều vật dụng quan trọng theo mình, thì bạn vẫn có thể nhét vừa Ly Silicone Gấp Thông Minh vào bất cứ ngăn nhỏ nào trong túi.

Với chất liệu silicon và thiết kế thông minh, Ly Silicon Gấp Thông Minh có nhiều chức năng siêu tiện lợi như: 
- Chất liệu Silicon an toàn với thực phẩm, không chứa BPA (chất gây ung thư có trong nhựa) như đa số các loại ly cốc dùng nhiều lần. 
- Ly Silicon Gấp Thông Minh có dung tích là 350ml, rất tiện dụng để chứa tất cả các loại thức uống nóng lạnh, súp hoặc thức ăn vặt. Sản phẩm có thể sử dụng trong máy rửa chén. 
- Sản phẩm được thiết kế thông minh với vỏ ly PP chống trơn và cách nhiệt, miệng ly được thiết kế dày dặn chống bỏng miệng từ thức uống nóng, và đế ly rất chắc chắn giúp đứng vững và chống trầy. 
Giá: 139,000 VNĐ/cái

Thông tin sản phẩm 
Dung tích: 350ml (12oz) 
Nhiệt độ: -40C ~ 230C
Kích thước: Lid = 8.8cm, Cup = 14x5,5cm and folded 6,6x 5.5cm 
Khối lượng: 140grams 
Vật liệu: Silicon an toàn cho thực phẩm + PP. Không chứa BPA. 
Tiêu chuẩn theo chứng nhận: CE / EU, FDA, LFGB, SGS 
Màu sản phẩm: Xám, Xanh Đen

Sử dụng & bảo quản
Sử dụng để đựng nước, thức ăn, thực phẩm lỏng.
Không cọ sát/ chứa vật sắc nhọn.
Có thể rửa trong máy rửa bát.',
                    'thumbnail' => 'xfyg0gmiwza1n71hoc1a.webp',
                    'quantity' => 1,
                    'price' => 60000,
                    'created_at' => '2019-09-12 03:47:42',
                    'updated_at' => '2019-09-12 03:47:42',
                    'pro_category_id' => 1,
                ),
                array (
                    'id' => 16,
                    'name' => 'Miếng Rửa Chén Vải',
                    'description' => 'Có thể bạn đã biết, nhà bếp là khu vực "màu mỡ" cho các loại vi khuẩn xâm nhập, trong đó khu vực bồn rửa và đặt biệt là miếng rửa chén là "điểm đến hấp dẫn nhất". Do đó, việc lựa chọn miếng rửa chén cũng cần được kỹ lưỡng và tiết kiệm. Bên cạnh sản phẩm rửa chén bằng xơ mướp mà ông bà ta ngày xưa hay dùng, chúng mình có thể sử dụng miếng rửa chén bằng vải. Với kích thước to gần bằng bàn tay và có quai để cầm chắc chắn, miếng rửa chén giảm độ tiếp xúc của da tay với nước rửa chén cho những bạn không quen đeo bao tay khi rửa. Bạn cũng có thể dùng nước rửa chén hữu cơ tại nhà Lại Đây, cho đôi bàn tay không phải tiếp xúc với hóa chất nữa!

Nhà bếp là nơi lưu trữ, chế biến thực phẩm, vì vậy chúng mình không thể quên việc vệ sinh bồn rửa thường xuyên và sử dụng miếng rửa chén thích hợp, thay thế cho những miếng mút xốp bằng nhựa.',
                    'thumbnail' => 'qapenqpsjzco3basymu2.webp',
                    'quantity' => 1,
                    'price' => 19000,
                    'created_at' => '2019-09-12 03:47:42',
                    'updated_at' => '2019-09-12 03:47:42',
                    'pro_category_id' => 1,
                ),
                array (
                    'id' => 17,
                    'name' => 'Nến Thơm Sáp Đậu Nành',
                    'description' => 'Nến thơm được chiết xuất tự nhiên từ sáp đậu nành, sáp ong, tinh dầu thiên nhiên, bấc gỗ. Đặc biệt vỏ nến được làm từ gốm hoàn toàn thân thiện với môi trường. Các tầng mùi hương mỏng nhẹ sẽ giúp bạn thoải mái, thư giản và giải toả được các căng thẳng trên cơ thể.

Lưu ý : Nến thơm toả hương tốt nhất trong diện tích 30m2.
Chỉ nên đốt tối đa 3 tiếng liên tục.
',
                    'thumbnail' => 'z31idadmbq6l0izied4b.webp',
                    'quantity' => 1,
                    'price' => 300000,
                    'created_at' => '2019-09-12 03:51:10',
                    'updated_at' => '2019-09-12 03:51:10',
                    'pro_category_id' => 1,
                ),
                array (
                    'id' => 18,
                    'name' => 'Hũ Đựng Gia Vị',
                    'description' => 'Hũ đựng gia vị bằng gỗ thông, thiết kế đơn giản, gọn gàng',
                    'thumbnail' => 'znojyp1krkbzjhtsr5sm.webp',
                    'quantity' => 1,
                    'price' => 88000,
                    'created_at' => '2019-09-12 03:51:10',
                    'updated_at' => '2019-09-12 03:51:10',
                    'pro_category_id' => 1,
                ),
                array (
                    'id' => 19,
                    'name' => 'Nước Giặt Hữu Cơ',
                    'description' => 'Nơi sản xuất: Việt Nam

Thành phần chính: Hoa cúc, rau muống, rau lang, rau mồng tơi, rau cải, vỏ khoai tây, khoai lang, vỏ ổi, vỏ dưa hấu, rau bồ ngót, rau mương,…

Công dụng:

- Giặt sạch mọi vết bẩn. Tiết kiệm hơn khi xả sạch với 1 lần nước.

- Không hoá chất, không gây kích ứng da, dùng được cho da em bé.

- Mang hương thơm của nắng dù phơi dưới trời râm.Khử mùi tốt, ngâm đồ qua đêm không bị hôi.

- Quần áo mềm mại hơn không cần dùng nước xả.

- Nước thải ra môi trường sẽ làm sạch môi trường nước và làm giảm lượng muỗi đáng kể.

- Ít bọt và nhờn, nhưng giặt rửa rất sạch, cảm giác nhẹ nhàng và cực kì tiết kiệm nước.Hương thơm nhẹ dịu, thường mang các hương hoa, trái cây,… và thường không bám hương nhiều sau khi giặt rửa xong.Không chất bảo quản, bảo quản bằng enzim sống nên hạn sử dụng ngắn hơn các sản phẩm hóa chất khác.
Đặc điểm: Sản phẩm được dùng để giặt sạch quần áo, không gây kích ứng cho da, làm mềm vải và xả sạch chỉ với 1 lần nước, an toàn với da trẻ em, tiết kiệm nước. Nước thải ra giúp thông hệ thống thoát nước và diệt 80% lăng quăng

 

*Màu sản phẩm không giống trên hình.',
                    'thumbnail' => 'vrwq8u8yg5phvdnfk1ir.webp',
                    'quantity' => 1,
                    'price' => 399000,
                    'created_at' => '2019-09-12 03:51:10',
                    'updated_at' => '2019-09-12 03:51:10',
                    'pro_category_id' => 1,
                ),
                array (
                    'id' => 20,
                    'name' => 'Nước Rửa Chén  Hữu Cơ',
                    'description' => 'Thành phần: Water/Aqua, Anionic surfactant (derived from coconut), Vegetable Glycerin, Lauryl Hydroxysultaine ( derived from coconut), Decyl Glucoside (derived from coconut and sugar), Sodium Chloride, Lime Juice, Neem leaf extract, Rosemary extract, sage oil, Aloe vera juice, thyme oil, vetiver root oil, phenoxyethanol (cosmetic grade, safe preservative), fragrance (IFRA compliance) ',
                    'thumbnail' => 'tgocxk8njbjs9vuvskbt.webp',
                    'quantity' => 1,
                    'price' => 199000,
                    'created_at' => '2019-09-12 03:51:10',
                    'updated_at' => '2019-09-12 03:51:10',
                    'pro_category_id' => 1,
                ),
                array (
                    'id' => 21,
                    'name' => 'Nước Lau Sàn Hữu Cơ',
                    'description' => 'Nơi sản xuất: Việt Nam
Thành phần: Vỏ củ dền, rau dền, bắp cải tím, vỏ củ cải tím, hoa Osaka, vỏ quế,…

Hướng dẫn sử dụng và công dụng:

- Pha loãng với nước để lau sàn.
- Làm sạch các vết ố bẩn trên bề mặt.
- Thay thế sản phẩm hóa chất tốt hơn trong việc chùi rửa toilet, thời gian bám bẩn sẽ lâu hơn.
- Lau kính.
- Rửa xe.
- Khử mùi nước tiểu của động vật.

- Có tác dụng diệt lăng quăng, bọ gậy và làm thông hệ thống thoát nước.
  + 100% thành phần từ rác thải hữu cơ thực vật (rau củ quả, hoa).
  + Chất bảo quản: enzyme sinh học (eco enzyme) từ 100% rác hữu cơ đã xử lý vi sinh.
  + Độ sánh được tạo ra từ tinh bột.Hoàn toàn an toàn cho trẻ em và người lớn có cơ địa dị ứng nhạy cảm.
  + Hương Quế ấm áp: hiệu quả đuổi côn trùng tốt, và khử mùi nước tiểu thú cưng tốt.

Đặc điểm: Sản phẩm này được dùng để lau sàn nhà, mặt kính, bàn ăn, giúp đuổi sạch côn trùng, lau rửa xe giúp xe sạch sáng hơn, khử mùi nước tiểu chó mèo. Nước sau khi sử dụng có thể dùng để tưới cây tạo công dụng như phân hữu cơ, tạo độ mùn cho đất, hạn chế sâu rầy cho cây. Tẩy rửa vệ sinh, khử trùng toilet, bồn cầu.

*Màu sản phẩm không giống trên hình.',
                    'thumbnail' => 'vm0dznqrabztjy6zisjh.webp',
                    'quantity' => 1,
                    'price' => 199000,
                    'created_at' => '2019-09-12 03:51:10',
                    'updated_at' => '2019-09-12 03:51:10',
                    'pro_category_id' => 1,
                ),
                array (
                    'id' => 22,
                    'name' => 'Nước Xịt Chống Côn Trùng',
                    'description' => 'Lại Đây xin giới thiệu cho bạn một sản phẩm dịu nhẹ từ 100% thiên nhiên, nhưng có tác dụng rất triệt để với các loài côn trùng nhiệt đới khó chịu: Nước Xịt Chống Côn Trùng Tự Nhiên từ hợp chất tinh dầu.

Xịt chống côn trùng là sản phẩm cần có để các bạn bảo vệ bản thân và gia đình khỏi những vết muỗi đốt và sự tấn công của các loài côn trùng khác. Tuy vậy, các chất chống côn trùng thông thường thường khiến cho da chúng ta trở nên nhớt dính khó chịu và chứa nhiều loại hoá chất khác nhau.

Trong khi đó, Nước Xịt Chống Côn Trùng Tự Nhiên hoạt động sử dụng các loại tinh dầu thơm dịu nhẹ rất an toàn cho sức khoẻ, kể cả với phụ nữ mang thai và trẻ em. Tổ hợp tinh chất này chỉ gây độc với các loại côn trùng, động vật không có xương sống và động vật máu lạnh.

Thành Phần
Tinh dầu sả chanh, tinh dầu bạc hà, tinh dầu tràm trà, tinh dầu ngọc am, tinh dầu đàn hương, tinh dầu oải hương, nước cất, cồn y tế.

Cách sử dụng
Bước 1: Lắc đều chai.
Bước 2: Xịt cách xa tầm 20cm lên vùng cần chống côn trùng(cơ thể, quần áo, không gian phòng, chăn gối)
- Đổ khoảng 2-3ml tinh dầu vào máy giặt nước cuối (chế độ tiết kiệm nước), phơi tránh ánh nắng mặt trời. Quần áo, vải sẽ tránh được công trùng trong 2 tháng hoặc sau 2 lần giặt.

 Lưu ý
- KHÔNG sử dụng cho da mặt hay da có vấn đề bệnh lý.
- Khi hoạt động mạnh, xịt lại sau 2-3 tiếng do mồ hôi sẽ làm trôi dung dịch.
- Bảo quản ở nơi thoáng mát tránh ánh mặt trời.',
                    'thumbnail' => 'ru0slrqn98kekbeikq8p.webp',
                    'quantity' => 1,
                    'price' => 199000,
                    'created_at' => '2019-09-12 03:51:10',
                    'updated_at' => '2019-09-12 03:51:10',
                    'pro_category_id' => 1,
                ),
                array (
                    'id' => 23,
                    'name' => 'Thớt Gỗ Cá Voi',
                    'description' => 'Nơi sản xuất: Việt Nam
Kích thước:40x23x2cm
Trọng lượng:
Đặc điểm: màu gỗ tự nhiên
Thành phần, vật liệu: Gỗ tần bì (Ash)',
                    'thumbnail' => 'wg6oyxyaynxb9ovugxd9.webp',
                    'quantity' => 1,
                    'price' => 299000,
                    'created_at' => '2019-09-12 03:51:10',
                    'updated_at' => '2019-09-12 03:51:10',
                    'pro_category_id' => 1,
                ),
                array (
                    'id' => 24,
                    'name' => 'Túi Đựng Rác Bằng Vải',
                    'description' => 'Bạn có để ý rằng chiếc túi đựng rác hàng ngày của chúng mình cũng chỉ là một vật trung gian để thu thập những vật dư thừa, chỉ đựng rác trong vòng 1-2 ngày trong khi những chiếc túi ấy mất đến hàng trăm năm mới có thể phân rã thành những mảnh nhỏ ở các bãi chôn lấp.

Vì vậy chúng mình hãy chuyển sang sử dụng một chiếc túi vải nhỏ xinh để chứa những món đồ không cần nữa để rồi khi vứt chúng đi mình vẫn giữ lại được chiếc túi đó để nó được “lại đầy” rác mới nhé.

Kích thước: 35cm x 48cm.',
                    'thumbnail' => 'netwqruxn2hq9dmvyohp.webp',
                    'quantity' => 1,
                    'price' => 29000,
                    'created_at' => '2019-09-12 03:51:10',
                    'updated_at' => '2019-09-12 03:51:10',
                    'pro_category_id' => 1,
                ),
                array (
                    'id' => 25,
                    'name' => 'Túi Lọc Trà',
                    'description' => 'Bạn có biết trong túi lọc trà cũng có hạt vi nhựa ? Chính vì vậy nếu là một người yêu trà, bạn hãy chuyển sang mua trà khô và sở hữu cho mình một chiếc túi lọc trà bằng vải để có thể tái sử dụng nhiều lần, vừa bảo vệ môi trường và cũng bảo vệ sức khỏe chính mình nhé.

Kích thước : 6x4.5 (cm)
Xuất xứ: Việt Nam.',
                    'thumbnail' => 'on8jqbzi5smfrqsehcov.webp',
                    'quantity' => 1,
                    'price' => 19000,
                    'created_at' => '2019-09-12 03:51:10',
                    'updated_at' => '2019-09-12 03:51:10',
                    'pro_category_id' => 1,
                ),
                array (
                    'id' => 26,
                    'name' => 'Túi Thực Phẩm Silicon ',
                    'description' => 'Sản xuất từ 100% silicone dùng trong thực phẩm, không chất độc hại và cực kỳ kháng nhiệt độ (chịu được nhiệt độ từ -50° C đến 250° C)',
                    'thumbnail' => 'uin9dzie01xqwm7lrs3t.webp',
                    'quantity' => '1',
                    'price' => 79000,
                    'created_at' => '2019-09-12 03:51:10',
                    'updated_at' => '2019-09-12 03:51:10',
                    'pro_category_id' => 1,
                ),

                array (
                    'id' => 27,
                    'name' => 'Túi Vải Đa Năng',
                    'description' => 'Origin: Vietnam 

Materials: 100% Cotton Canvas 

Size: 34 x 16 x 20 cm (S), 49 x 23 x 30 cm (M), 62 x 31 x 43 cm (L)

Price: 95,000 Đ (S), 135,000 Đ (M), 195,000 Đ (L) 

Hãy đưa nghệ thuật sắp lên một tầm cao mới với những chiếc túi đựng đa năng sành điệu được làm thủ công tại Việt Nam từ loại vải canvas tự nhiên chắc chắn, rất phù hợp cho phong cách tối giản cho không gian ở nhà hay nơi làm việc.
Những chiếc túi đa năng tối giản này không những đơn giản mà còn cực kỳ linh hoạt cho mọi mục đích sử dụng. Bạn hoàn toàn có thể dùng chúng để đựng các vật dụng, đồ giặt, giấu đồ chơi của tụi nhỏ hay vừa khít để đựng một cái cây trong đó. Để chúng mình gợi ý thêm những cách mà bạn có thể sử dụng chiếc túi này:
Những chiếc túi phân chia quần áo trong tủ đồ
Túi đựng sách nấu ăn trong bếp
Túi đựng những bức thư hay tạp chí được gửi đến
Túi đựng đồ sạch sau khi giặt xong
Túi đựng đồ "chỉ giặt tay"
Túi đựng khăn
Túi đựng đồ chơi thú cưng
Túi đựng đồ chơi của con
Túi đựng đồ linh tinh
…',
                    'thumbnail' => 'nfpgt38mzbyvz4oac0tm.webp',
                    'quantity' => 1,
                    'price' => 99000,
                    'created_at' => '2019-09-12 03:51:10',
                    'updated_at' => '2019-09-12 03:51:10',
                    'pro_category_id' => 1,
                ),
                array (
                    'id' => 28,
                    'name' => 'Vải Che Đồ Dùng',
                    'description' => 'Sản phẩm "gây hiểu lầm" nhiều nhất tại Lại Đây vì ngoại hình em ấy nhìn khá giống... khăn ủ tóc. Để "thanh minh", thì em ấy là màng vải bọc thực phẩm, giải pháp giảm ngừa các loại vi khuẩn, côn trùng và bụi bám vào thức ăn.
Bữa ăn gia đình là nơi mà mọi người sum vầy, trò chuyện sau một ngày dài, cũng là dịp hâm nóng tình cảm giữa những người ta gắn bó. Một bữa ăn ấm cúng, dù nấu cho bản thân hay cho người yêu thương cũng đều được chúng ta đặt tròn tình yêu thương và bỏ thời gian ra nấu. Nếu hôm nào nhỡ có về trễ, bạn đừng lo vì vẫn có thức ăn và nước uống với những chiếc màng vải được bọc chu đáo dang đợi bạn ở nhà đấy.
Cloth Food Cover được bán theo một bộ gồm 03 chiếc với 3 kích cỡ với giá 129.000 bạn nhé.
',
                    'thumbnail' => 'korfvyoj3hcso9tli6rq.webp',
                    'quantity' => 1,
                    'price' => 29000,
                    'created_at' => '2019-09-12 03:51:10',
                    'updated_at' => '2019-09-12 03:51:10',
                    'pro_category_id' => 1,
                ),
                array (
                    'id' => 29,
                    'name' => 'Vòi Ấn',
                    'description' => 'Xuất xứ: Việt Nam

Kích cỡ: có nhiều kích cỡ khác nhau

Đặc điểm: dạng vòi xịt, dùng thay thế cho các chai lọ không có vòi xịt

Vòi ấn có nhiều kích cỡ khác nhau có thể mua kèm để sử dụng với nhiều loại chai lọ không có vòi, từ đó giúp  tái sử dụng các chai nhựa, lọ thuỷ tinh cũ. Đồng thời các vòi ấn / xịt sẽ giúp bạn sử dụng tiết kiệm hơn vì có thể kiểm soát được lượng sản phẩm vừa đủ.',
                    'thumbnail' => 'qcmjixjefpnhn7wwyw2q.webp',
                    'quantity' => 1,
                    'price' => 69000,
                    'created_at' => '2019-09-12 03:51:10',
                    'updated_at' => '2019-09-12 03:51:10',
                    'pro_category_id' => 1,
                ),
                array (
                    'id' => 30,
                    'name' => 'Vòng Gốm Đựng Bàn Chải ',
                    'description' => 'Kích thước:

Trọng lượng:

Đặc điểm: 

Được cấu tạo từ gốm thành hình vòng dùng để cố định bàn chải, sau khi sử dụng bàn chải vòng gốm sẽ giải quyết được tình trạng tồn đọng nước gây nên mùi khó chịu. Ngoài ra sử dụng vòng gốm giúp cho nhà vệ sinh của bạn trở nên ngăn nắp và gọn gàng hơn. Không chỉ dùng để cố định bàn chải mà  còn có thể dùng cho các vật dụng khác như bút, ống hút, muỗng nĩa...
Với 6 gam màu nhẹ nhàng giúp bạn tuỳ sức phối màu để trở nên hợp tone hơn với căn nhà của bạn.
Lưu ý : Mặc dù em ấy có thể loại bỏ đi phần nước dư trên bàn chải nhưng bạn vẫn nên vệ sinh sạch sẽ vòng gốm sau khoảng 2 tuần/lần nhé.',
                    'thumbnail' => 'gxzc8uhpz7cwrr22kbi6.webp',
                    'quantity' => 1,
                    'price' => 89000,
                    'created_at' => '2019-09-12 03:51:10',
                    'updated_at' => '2019-09-12 03:51:10',
                    'pro_category_id' => 1,
                ),
                array(
                    'id' => 31,
                    'name' => 'Xịt Khử Mùi',
                    'description' => 'Xịt khử mùi không khí với chiết xuất từ thiên nhiên và tinh dầu thảo mộc nguyên chất.

Có tác dụng : 

- Khử các mùi khó chịu như ẩm, mốc,... trong không gian của bạn

- Xịt khử mùi quần áo

- Vì được chiết xuất hoàn toàn từ thiên nhiên nên có thể xịt trực tiếp vào tóc để khử mùi mà không gây hư tóc

Mùi hương dịu nhẹ từ bạc hà không gây cảm giác khó chịu đặc biệt là với những người mẫn cảm với mùi hương. Chai xịt nhỏ gọn có thể tiện lợi mang đi nhiều nơi.',
                    'thumbnail' => 'irrqeezd9ytifrb2q29t.webp',
                    'quantity' => 1,
                    'price' => 200000,
                    'created_at' => '2019-09-12 03:56:15',
                    'updated_at' => '2019-09-12 03:56:15',
                    'pro_category_id' => 1,
                ),
                array(
                    'id' => 32,
                    'name' => 'Xơ Mướp Nguyên Quả',
                    'description' => 'Một vật dụng đã quá đỗi quen thuộc với ông bà nhưng lại bị quên lãng và suýt thì “tuyệt chủng” vì những món bàn chải nhựa nổi lên như một đế chế, có cổng xâm nhập vào môi trường nhưng lại… không có lối ra!
Khi dùng để tắm xơ mướp có chức năng tẩy tế bào chết cho da, khi dùng để vệ sinh nhà cửa bạn ý có thể biến hình thành một miếng rửa ly chén hai trong một thay cả miếng rửa chén mềm lẫn miếng cọ xong nồi, một miếng cọ bồn tắm tiện dụng, hay lấy đi vết bẩn cứng đầu cứ nằm la liệt hoài trên sàn nhà. Bạn có thể cắt nhỏ quả xơ mướp để làm được nhiều việc khác nhau trong nhà. Chẳng cần đến những bàn chải nhựa cứ phải mua lắt nhắt từng thứ một mới có thể "cân" được cả ngôi nhà, với xơ mướp, chỉ hai quả là đủ.
Kích thước: xơ mướp tự nhiên trung bình 20cm.',
                    'thumbnail' => 'mfzokfyk7m2ipruno7bd.webp',
                    'quantity' => 1,
                    'price' => 39000,
                    'created_at' => '2019-09-12 03:56:15',
                    'updated_at' => '2019-09-12 03:56:15',
                    'pro_category_id' => 1,
                ),
                array(
                    'id' => 33,
                    'name' => 'Thớt Gỗ Hình Chữ Nhật',
                    'description' => 'Nơi sản xuất: Việt Nam
Kích thước:38x17x2cm

Trọng lượng:

Đặc điểm: màu gỗ tự nhiên',
                    'thumbnail' => 'jrpgzjg7wkqyvfgngr4q.webp',
                    'quantity' => 1,
                    'price' => 399000,
                    'created_at' => '2019-09-12 03:56:15',
                    'updated_at' => '2019-09-12 03:56:15',
                    'pro_category_id' => 1,
                ),
                array(
                    'id' => 34,
                    'name' => 'Khay Tròn ',
                    'description' => 'Nơi sản xuất: Việt Nam

Kích thước: 31x22x2cm
Trọng lượng:
Đặc điểm: màu gỗ tự nhiên, dùng để đựng các vật dụng cá nhân tùy thích.',
                    'thumbnail' => 'bmafi5dlaawjtoik1rhh.webp',
                    'quantity' => 1,
                    'price' => 39000,
                    'created_at' => '2019-09-12 03:56:15',
                    'updated_at' => '2019-09-12 03:56:15',
                    'pro_category_id' => 1,
                ),

                array(
                    'id' => 35,
                    'name' => 'Bàn Chải Tre',
                    'description' => 'Lại Đây cảm ơn bạn vì đã chọn một chiếc bàn chải tre thay vì một chiếc bàn chải nhựa để bảo vệ răng miệng cũng như là hành tinh này. Bàn chải tre của Lại Đây có cán làm bằng tre tự nhiên và lông bàn chải làm từ sợi tre được carbon hoá.
Với thiết kế đơn giản, tay cầm thuận tiện, và đầu bàn chải vừa vặn, em bàn chải tre sẽ chạm đến và làm sạch những ngóch ngách bên trong khoang miệng của bạn. Cũng giống như các loại bàn chải khác, các bạn nên thay bàn chải sau từ 3-5 tháng đảm bảo an toàn vệ sinh và lông bàn chải vẫn sử dụng tốt.
Bạn có thể tái chế thân bài chải khi không dùng được nữa, nhưng lông bàn chải chưa hoàn toàn phân huỷ được nên các bạn hãy tách lông bàn chải bằng kìm và cho vào thùng rác nhé.',
                    'thumbnail' => 'moiklbu0xnp8fulbxpdf.webp',
                    'quantity' => 1,
                    'price' => 79000,
                    'created_at' => '2019-09-12 03:56:15',
                    'updated_at' => '2019-09-12 03:56:15',
                    'pro_category_id' => 2,
                ),
                array(
                    'id' => 36,
                    'name' => 'Bao Tay Tắm',
                    'description' => 'Bao tay tắm xơ mướp.',
                    'thumbnail' => 'bh8z4dt0qaon5npw66et.webp',
                    'quantity' => 1,
                    'price' => 77000,
                    'created_at' => '2019-09-12 03:56:15',
                    'updated_at' => '2019-09-12 03:56:15',
                    'pro_category_id' => 2,
                ),
                array(
                    'id' => 37,
                    'name' => 'Bình Nước Giữ Nhiệt Nắp Gỗ',
                    'description' => 'Lại Đây rất hạnh phúc khi nhận thấy các sản phẩm Tumbler của bọn tớ được các bạn rất yêu mến và quyết tâm sử dụng để hạn chế rác thải nhựa từ thức uống hằng ngày. Vì vậy chúng tớ có một tin vui cho những bạn còn đắn đo chưa biết nên lựa chọn loại Tumbler nào thích hợp cho mình. Thì giờ đây, chúng tớ giúp bạn có thêm lựa chọn cho công cuộc sống xanh, đó chính là mẫu tumbler mới của Lại Đây, Classico Thermos Tumbler.
Vẻ đẹp của Classico Tumbler được tạo bởi sự kết hợp giữa những tông màu đặc sắc của các vật liệu chính. Màu nâu trầm ấm của nắp gỗ tre và các gam màu lạnh của thép không gỉ ở phần thân bình như Đen Nhám, Xám, Trắng và Kim Loại, tạo nên sự sang trọng và ấn tượng. Vì vậy sản phẩm Classico Tumbler của Lại Đây mang nhiệm vụ phô trương nét đẹp nghệ thuật của chất liệu, khoáng chất trong tự nhiên, đồng thời giúp bạn tránh khỏi rác thải và sự lãng phí.
Đối với Lại Đây, sống xanh không bị gói gọn trong khuôn khổ hay sự cũ kỹ cứng nhắc, mà là sự tìm tòi và khám phá bản thân của mỗi cá nhân trong cuộc sống hướng về tự nhiên và môi trường tạo nên cuộc sống của họ. Vì vậy, những bạn yêu thích cái đẹp và đang xây dựng cho mình lối sống xanh thì đừng nên bỏ qua Classico Tumbler và một số sản phẩm khác rất xinh xắn của Lại Đây nhé!
 Giá: 429,000vnđ
Ghi Chú Sản Phẩm
-       Bình Thermos giữ nhiệt từ 6 đến 12 tiếng.
-       Dung lượng 350ml.
-       Thân bình là hai lớp thép không gỉ được hút chân không ở giữa         (trong – SS304, ngoài – SS201).
-       Nắp bằng tre.
-       Có 4 màu: Đen. Xám, Trắng và Kim Loại.
-       Kích cỡ: 6.5 x 6.5 x 21 (cm)
Hướng Dẫn Vệ Sinh:
-       Vệ sinh: Dùng bàn chải cọ rửa bên trong. Khi bình bị dính bẩn hoặc đóng cặn, pha loãng dấm và nước (1:2) hoặc vắt nước khoảng 1-2 quả chanh rồi ngâm bên trong hơn 2 tiếng, sau đó rửa lại bình thường.
-       Chú Ý: Không rửa bình Thermos bằng máy rửa chén. Nếu thân bình bằng thủy tinh, KHÔNG sử dụng cọ rửa xơ cứng hay kim loại.
Bảo Quản:
-       Bảo quản ở nơi khô ráo khi không sử dụng.
-       Không nên làm rớt bình vì sẽ ảnh hưởng tới chất lượng lưu giữ nước.
-     Rửa bình ngay sau khi sử dụng để tránh ám mùi từ thức uống trước.',
                    'thumbnail' => 'cqcxqhbz3yszl9pbkraf.webp',
                    'quantity' => 1,
                    'price' => 429000,
                    'created_at' => '2019-09-12 03:56:15',
                    'updated_at' => '2019-09-12 03:56:15',
                    'pro_category_id' => 2,
                ),
                array(
                    'id' => 38,
                    'name' => 'Bình Nước Giữ Nhiệt Cầu Vồng',
                    'description' => 'Rainbow Double Walled Thermos Tumbler - Classic Bottle Shape - 500ml

Bình nước giữ nhiệt thép không gỉ - kiểu chai nước - Bảy sắc cầu vồng - 500ml



Vật liệu: phần lõi bên trong bình: inox 304 & phần vỏ ngoài bình là inox 201 stainless steel

structure

Đặc điểm: 2 thành, y như bình giữ nhiệt kim loại hay bình classico

Dung tích:500ml

Khả năng giữ nhiệt (nónglạnh):12-24 hours

Màu sắc: 2 lựa chọn - dinh kem

Shape: cổ điển "cái chai" .',
                    'thumbnail' => 'gm4gujh7bxl63ms0pbg7.webp',
                    'quantity' => 1,
                    'price' => 429000,
                    'created_at' => '2019-09-12 03:56:15',
                    'updated_at' => '2019-09-12 03:56:15',
                    'pro_category_id' => 2,
                ),
                array(
                    'id' => 39,
                    'name' => 'Bông Tắm Xơ Mướp',
                    'description' => 'Bông Tắm Xơ Mướp  Bath & Shower Loofah Pad - Oval.',
                    'thumbnail' => 'hxh8z8uutowh3appfyfl.webp',
                    'quantity' => 1,
                    'price' => 39000,
                    'created_at' => '2019-09-12 03:56:15',
                    'updated_at' => '2019-09-12 03:56:15',
                    'pro_category_id' => 2,
                ),
                array(
                    'id' => 40,
                    'name' => 'Bông Ngoáy Tai Thân Giấy Lớn',
                    'description' => '
Home  Home Care  Bông Ngoáy Tai Thân Giấy Lớn  Cotton Bud with Paper Stem Big
Nhịp sống hối hả ngày nay luôn hướng chúng ta đến việc sử dụng ngày càng nhiều các sản phẩm tiện lợi, bông ngoáy tai là một trong những vật dụng thải ra nhựa dùng một lần được dùng nhiều nhất mà chúng ta ít để ý tới. Bạn có biết mỗi năm số lược thân nhựa của bông ngoáy tai được tìm thấy ở biển cũng nhiều không kém gì ống hút nhựa không?

Ở Lại Đây, thân của bông ngoáy tai được thay thế hoàn toàn bằng giấy tái chế, vì thế, nó có thể được phân hủy 100% ở ngoài môi trường. Thử hình dung số lượng bông ngoáy tai mà bạn thải ra mỗi tuần, bằng việc sử dụng bông ngoáy tai thân giấy thôi bạn đã góp phần giảm áp lực lên môi trường rất nhiều rồi đấy.

Kích thước đầu bông ngoáy tai có hai cỡ lớn và nhỏ, phù hợp cho cả người lớn và trẻ em.',
                    'thumbnail' => 'ezrrp4ughsxbcnjby9gb.webp',
                    'quantity' => 1,
                    'price' => 45000,
                    'created_at' => '2019-09-12 03:56:15',
                    'updated_at' => '2019-09-12 03:56:15',
                    'pro_category_id' => 2,
                ),
                array(
                    'id' => 41,
                    'name' => 'Bông Tẩy Trang Vải',
                    'description' => 'Một trong những vật dụng tối cần thiết của phe con gái chúng mình. Da của chúng mình rất cần được thở sau một ngày dài mang trên mình lớp trang điểm hoặc đơn giản nó cần được rửa sạch bụi bẩn chúng mình gặp phải khi đi ra ngoài, vì thế bước tẩy trang là rất rất cần thiết. Làm đẹp cho bản thân mình là điều tốt, nhưng mà sau khi làm cho bản thân đẹp mà gây ra điều xấu cho môi trường thì cũng không vui tí nào đúng không nè? Vì thế, bông tẩy trang vải đã được ra đời để cho các bạn yên tâm làm đẹp. Bông tẩy trang được làm bằng vải sợi tre, giúp tẩy sạch mọi vết bẩn trên một cách nhẹ nhàng, và còn có thể giặt đi giặt lại sử dụng nhiều lần. Nếu dùng luân phiên 3-4 bông tẩy trang một lần, tuổi thọ của các em ấy có thể lên tới 9 đến 12 tháng nếu bạn bảo quản đúng cách.

Vệ sinh bông tẩy trang cũng rất đơn giản, mỗi khi dùng xong bạn có thể giặt tay ngay với nước hoặc cho thêm một ít xà bông nếu bạn dùng những sản phẩm trang điểm long-lasting. Hoặc bạn có thể cho vào một túi lưới riêng nếu giặt bằng máy giặt.',
                    'thumbnail' => 'ytcwgs44pkealhue3w5k.webp',
                    'quantity' => 1,
                    'price' => 35000,
                    'created_at' => '2019-09-12 03:56:15',
                    'updated_at' => '2019-09-12 03:56:15',
                    'pro_category_id' => 2,
                ),
                array(
                    'id' => 42,
                    'name' => 'Bột Biển Rửa Mặt Than Tre Hoạt Tính',
                    'description' => 'Origin: China

Price: 79,000 đ



Được áp dụng như một dụng cụ làm đẹp cao cấp trong các sản phẩm làm đẹp lấy cảm hứng từ Nhật Bản và sản xuất tại Trung Quốc, Bọt Konjac Than Tre có các tác dụng:

Tẩy tế bào chết, làm sạch sâu làn da.

Tác động dịu nhẹ, KHÔNG làm trầy hoặc tổn thương da nhờ các sợi bọt giữ những hạt nước ở bề mặt tiếp xúc với da.

Hút bỏ dầu thừa, mụn đầu đen trên mặt mà không cần sữa rửa mặt nhờ chất kiềm nhẹ trong sợi Konjac.

Đồng thời cấp nước và cân bằng độ pH trên da.

Kích thích tuần hoàn máu trên khuôn mặt.

Bọt Konjac Than Tre phù hợp sử dụng cho mọi đối tượng, kể cả em bé.



Vậy Bọt Konjac Than Hoạt Tính làm từ gì?

Konjac là một loại thảo mộc lâu năm thuộc họ Ráy, được sử dụng như thực phẩm cho sức khỏe. Trong khi đó, Bọt Konjac ở Lại Đây được làm 100% từ sợi thảo mộc Konjac và tinh chất Konjac cao cấp.Sợi Konjac chứa các chất chống oxy hóa, vitamins (A, B1, B2, B6, B12, C, D, và E), đạm, chất béo và các khoáng chất tự nhiên như đồng, kẽm, sắt, và magie. Nhờ vậy, khi sử dụng để làm sạch da mặt, các vitamin và khoáng chất trên sẽ nuôi dưỡng giúp da trở nên mềm mịn tự nhiên.



Mặt khác, thành phần chiết xuất Than Tre hoạt tính chứa nhiều loại khoáng chất có lợi như Kali, Can-xi, Sắt, và Natri. Khi được kết hợp với Konjac, các phân tử Cacbon phát huy khả năng hút chất bẩn sâu và sạch.



Do vậy, sản phẩm Bọt Konjac Than Tre được làm hoàn toàn từ thực vật, KHÔNG thử nghiệm trên động vật và KHÔNG có GMO.



Cách sử dụng:

Bước 1: Ngâm từ 3-5 phút trong nước ấm để Bọt Konjac ngậm nước. (Lần đầu tiên sử dụng cần ngâm khoảng 15’ để Bọt nở hết, kích thước bọt có thể to gấp nửa)



Bước 2: Kẹp Bọt Konjac giữa hai bàn tay và ấn để ép bớt lượng nước dư thừa (không bóp hay vặn méo hình dáng Bọt)



Bước 3: Làm ướt mặt bằng nước ấm để nở lỗ chân lông, giúp Bọt Konjac hoạt động tốt hơn.



Bước 4: Mát xa Bọt Konjac trên da theo chiều xoay vòng (kể cả khi kết hợp sữa rửa mặt hay không)



Bước 5:  Sau khi sử dụng, nhẹ nhàng rửa Bọt dưới vòi nước ấm và ép nước ra bằng cách ấn giữa hai lòng bàn tay.



Chú ý:

Sản phẩm có thể dùng hằng ngày.

Treo giữ Bọt ở nơi khô thoáng.

Thay thế Bọt Konjac Than Tre sau 3-4 tuần sử dụng. ',
                    'thumbnail' => 'ax4kcgawwjprz5kavvsn.webp',
                    'quantity' => 1,
                    'price' => 79000,
                    'created_at' => '2019-09-12 03:56:15',
                    'updated_at' => '2019-09-12 03:56:15',
                    'pro_category_id' => 2,
                ),
                array(
                    'id' => 43,
                    'name' => 'Bột súc miệng thảo mộc',
                    'description' => 'BỘT SÚC MIỆNG THẢO MỘC REFILL



Giá: 1.000đ gram.



Bột súc miệng thảo mộc 100% organic từ tinh dầu bạc hà, bột quế, đá muối hồng Himalaya, bột vỏ cam khô và trà xanh. Sản phẩm dạng bột mịn, màu xanh nâu của thảo mộc, có hương quế và mùi bạc hà đặc trưng. Trong thành phần không chứa alcohol, phù hợp các bạn có răng nướu nhạy cảm và vì là dạng bột nên thuận tiện để xách đi du lịch, mang lên máy bay.



Cách sử dụng rất đơn giản, bạn chỉ cần hòa tan 2 gram bột với 70ml nước ấm, súc miệng ngày 2-3 lần hoặc sau mỗi bữa ăn để đảm bảo khoang miệng được sạch sẽ, chống hôi miệng, viêm niêm mạc, sát khuẩn cổ họng, giúp răng nướu chắc khỏe và chống mảng bám rất tốt.

Lại Đây không đóng sẵn bột trong hũ hay gói mà để bạn có thể tự do mang theo bất kì chai lọ hay túi giấy có sẵn mà bạn yêu thích và mua theo khối lượng mình cần và có thể quay lại để refill khi hết.



LƯU Ý

Không sử dụng khi có tiền lệ kích ứng với thành phần của sản phẩm

Hiệu quả khác nhau phụ thuộc vào cơ địa của mỗi người.

Nên sử dụng trên một vùng da nhỏ ở cổ tay hoặc gò má để kiểm tra độ phù hợp với sản phẩm.

Không sử dụng nếu dị ứng với các thành phần của sản phẩm.

Dừng sử dụng ngay khi có dấu hiệu dị ứng như mẩn đỏ, ngứa.',
                    'thumbnail' => 'hw2phxmiemv8kjldwjeu.webp',
                    'quantity' => 1,
                    'price' => 1000,
                    'created_at' => '2019-09-12 03:56:15',
                    'updated_at' => '2019-09-12 03:56:15',
                    'pro_category_id' => 2,
                ),
                array(
                    'id' => 44,
                    'name' => 'Chỉ nha khoa bằng tơ thiên nhiên, kèm lọ thủy tinh',
                    'description' => 'Trước đây chỉ nha khoa được sử dụng phổ biến rộng rãi nhờ vào khả năng làm sạch bất ngờ và vì sự tiện dụng của nó. Nhưng những nghiên cứu đã chỉ ra trong một số loại chỉ nha khoa có chứa pfcs -perfluorinated polymers, chất có thể gây ra những bệnh tuyến giáp, làm mất ổn định hormones, tổn thương hệ thống miễn dịch, sinh sản bị suy giảm và ảnh hưởng đến sự phát triển của thai nhi thì từ đó, chỉ nha khoa bằng tơ tự nhiên được ra đời. Hộp chỉ làm bằng thủy tinh, tơ tự nhiên phân hủy hoàn toàn trong 60-90 ngày và bên cạnh đó chúng mình cũng có thể mua chỉ refill chứ không phải mua một chiếc lọ mới khiến loại chỉ này trở thành một bước đột phá trong quá trình thế giới phát triển bền vững hơn !
Kích thước : Lọ cao 5cm với 60m chỉ nha khoa.',
                    'thumbnail' => 'zr1tjfgrkaaaknav0z2s.webp',
                    'quantity' => 1,
                    'price' => 319000,
                    'created_at' => '2019-09-12 03:56:15',
                    'updated_at' => '2019-09-12 03:56:15',
                    'pro_category_id' => 2,
                ),
                array(
                    'id' => 45,
                    'name' => 'Cốc Nguyệt San',
                    'description' => 'Nơi sản xuất: Sản xuất và nhập khẩu tại Hoa Kỳ

Kích thước:

Trọng lượng: 300gbộ sản phẩm

Đặc điểm: OVACUP là sản phẩm thay thế băng vệ sinh trong kỳ nguyệt san, giảm nguy cơ mắc các bệnh phụ khoa và giảm thiểu rác thải ra môi trường. OVACUP mang lại sự thoải mái và khô thoáng giúp cho phụ nữ Việt có một kỳ kinh nguyệt nhẹ nhàng và hạnh phúc hơn.

Ưu điểm của cốc nguyệt san:

- Tạo cảm giác khô thoáng, dễ chịu, hạn chế tối đa khả năng rò rỉ trong kỳ kinh nguyệt.

- Chất liệu an toàn, không chứa hóa chất độc hại.

- Không gây kích ứng và loại bỏ hoàn toàn nguy cơ sốc nhiễm độc (TSS).

- Thời gian sử dụng tối đa cho một lần dùng cốc lên tới 12h.

- Thoải mái vận động: luyện tập, đi bơi, đi du lịch ngay cả trong những ngày đèn đỏ.

- Thân thiện với môi trường, tái sử dụng trong vòng 5 - 10 năm.',
                    'thumbnail' => 'arbixqcuzerg0tvm3oal.webp',
                    'quantity' => 1,
                    'price' => 499000,
                    'created_at' => '2019-09-12 03:56:15',
                    'updated_at' => '2019-09-12 03:56:15',
                    'pro_category_id' => 2,
                ),
                array (
                    'id' => 46,
                    'name' => 'Nước Giặt Lau Sàn Hữu Cơ Bio',
                    'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
                            gửi gắm trong mỗi căn phòng.',
                    'thumbnail' => 'npfmzttvk7wtmtqdt3ym.webp',
                    'quantity' => 1,
                    'price' => 299000,
                    'created_at' => '2019-09-12 03:51:10',
                    'updated_at' => '2019-09-12 03:51:10',
                    'pro_category_id' => 1,
                ),
//                array (
//                    'id' => 47,
//                    'name' => 'Dao Cạo Kim Loại',
//                    'description' => '',
//                    'thumbnail' => 'npfmzttvk7wtmtqdt3ym.webp',
//                    'quantity' => 1,
//                    'price' => 69000,
//                    'created_at' => '2019-09-12 03:51:10',
//                    'updated_at' => '2019-09-12 03:51:10',
//                    'pro_category_id' => 1,
//                ),
//                array (
//                    'id' => 48,
//                    'name' => 'Dao Cạo Lông Mày',
//                    'description' => 'Xuất xứ: Việt Nam
//Chất liệu: inox, cán gỗ
//Đặc điểm: cạo lông mày, mặt với ưu điểm gọn nhẹ, đi sát bề mặt da mà không gây tổn thương cho da,
//thay thế cho dạo cạo bằng nhựa. Khi mua tại Lại Đây, bạn sẽ được tặng kèm 1 lưỡi dao để sử dụng.
//
//Khuyến cáo: nên thay mới lưỡi dao 1-2 tháng/1 lần tùy theo điều kiện sử dụng.',
//                    'thumbnail' => 'npfmzttvk7wtmtqdt3ym.webp',
//                    'quantity' => 1,
//                    'price' => 49000,
//                    'created_at' => '2019-09-12 03:51:10',
//                    'updated_at' => '2019-09-12 03:51:10',
//                    'pro_category_id' => 1,
//                ),
            )
        );
    }
}