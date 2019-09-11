<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->truncate();
        DB::table('products')->insert([
            [
                'id' => 1,
                'name' => 'Bàn Chải Người Lớn',
                'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
                            gửi gắm trong mỗi bánh xà phòng.',
                'thumbnail' => env('CCCC').'/img/home-care/ban-chai-nguoi-lon.webp',
                'quantity' => '10',
                'price' => '79.000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'name' => 'Băng Keo Giấy',
                'description' => 'Trong khi băng keo nhựa thường được làm bằng màng BOPP trong từ hạt nhựa PP và được cán thành màng nhựa mỏng, mềm và dai, thì băng keo giấy đã sử dụng giấy kraft, một loại giấy thô không qua tẩy màu để làm lớp nền. Sau đó lớp keo nước sẽ được phun lên bề mặt giấy hay nhựa để tạo thành chất kết dính được làm từ acrylate copolymer, nhựa thông hydro hóa, BOP, DO,...

Chính vì vậy khoảnh khắc quyết định chọn băng keo giấy hay băng keo nhựa để sử dụng chính là lúc chúng mình có quyết tâm cứu được có khi là một lõi nhựa nếu nhà sản xuất sử dụng lõi nhựa thay vì lõi giấy và quan trọng hơn hết, là 45m băng keo nhựa hay không !

Kích thước: 1.6cm *45m / 4.7cm *45m.',
                'thumbnail' => env('CCCC').('/img/home-care/bang-keo-giay.webp'),
                'quantity' => '20',
                'price' => '19.000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 3,
                'name' => 'Bình Thủy Tinh 10L',
                'description' => 'Nhắc đến Lại Đây, có lẽ bạn bè sẽ nhớ đến ngay chiếc bình O Brand này khi đến trạm, vì em ấy được Lại Đây sản xuất độc quyền nên sẽ không tìm được ở nơi nào khác. Và đang được dùng để đựng các sản phẩm làm đầy của Lại Đây.

Song ngoài mục đích ấy, Lại Đây vẫn bán lẻ để các cá nhân, tổ chức vẫn có thể sử dụng cho các mục đích khác nhau, như đựng nước uống ở nhà (mình thường mua máy lọc nước, nấu lại và trữ nước trong bình, nên mấy năm nay nhà ít phải mua bình nước ngoài và tiết kiệm được kha khá) hoặc là dùng để đựng nước trái cây, nước uống tại các sự kiện thay thế cho các chai nhựa dùng 1 lần dành cho khách đến.

Nắp gỗ thông, mộc, có vòi kim loại. Sản phẩm này không có kệ hay gì khác. LDRF chỉ cung cấp sản phẩm bình refill như mô tả ở trên.

Đường kính ở đáy là 27cm, Đường kính ở vành miệng là 17cm. Dung tích 10 lít.',
                'thumbnail' => env('CCCC').('/img/home-care/binh-thuy-tinh-1.webp'),
                'quantity' => '5',
                'price' => '79.0000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 4,
                'name' => 'Cây Rửa Ly Xơ Mướp',
                'description' => 'Cây rửa ly bằng xơ mướp được cấu tạo với thân gỗ chắc chắn và đầu xơ mướp nhỏ vừa đủ giúp bạn có thể vệ sinh sạch sẽ với những chiếc cốc, ly cao. 

Lưu ý : Nên bảo quản hoặc treo nơi thoáng mát, khô ráo.

Sau khi dùng nên phơi khô đầu xơ mướp để tránh ẩm mốc và dùng được lâu hơn.',
                'thumbnail' => env('CCCC').('/img/home-care/cay-rua-ly-xo-muop.webp'),
                'quantity' => '10',
                'price' => '39.000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 5,
                'name' => 'Chai Gốm Hoa Văn',
                'description' => '250ml 

Nơi sản xuất: Trung Quốc

Đặc điểm:

Thiết kế sang trọng và tông màu trầm sẽ giúp chai gốm xuất hiện trong căn nhà của bạn như một phụ kiện trang trí tinh tế.

Chai có dung tích 400ml có thể dùng để đựng nước rửa chén, rửa tay, dầu tắm, dầu gội, đặc biệt khi dùng hết bạn có thể mang thẳng chai đến Lại Đây để làm đầy các sản phẩm mà không tạo ra tí rác thải nào.

Đường kính 7.5cm, cao 18cm.',
                'thumbnail' =>env('CCCC').('/img/home-care/chai-gom-hoa-van.webp'),
                'quantity' => '15',
                'price' => '165.000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 6,
                'name' => 'Chổi Xơ Dừa',
                'description' => 'Nơi sản xuất: Việt Nam

Kích thước: 40cm

Trọng lượng:

Đặc điểm: màu gỗ tự nhiên

 

Để làm ra loại chổi này, người làm chổi đã lấy vỏ của trái dừa già có nhiều xơ mềm và rất chắc, ủ cho mềm vỏ rồi lấy búa để đập cho xơ dập và tơi ra, sau đó đem xơ ấy để làm thành chổi xơ dừa. Chổi rất bền và đa năng nên sẽ là người cộng sự đắc lực của bạn trong ngôi nhà. Có thể dùng để quét bụi khô lẫn dùng để vệ sinh trong nước. Để bảo quản chổi tốt hơn thì sau khi sử dụng hãy nhớ vệ sinh chổi sạch sẽ và để ở nơi khô ráo thoáng mát nhé.',
                'thumbnail' =>env('CCCC').('/img/home-care/choi-xo-dua.webp'),
                'quantity' => '10',
                'price' => '79.000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 7,
                'name' => 'Cọ Rửa Bình',
                'description' => 'Sau các dòng sản phẩm dụng cụ vệ sinh từ Xơ Mướp thì Lại Đây luôn cố gắng tìm kiếm những sản phẩm đa năng và tốt hơn để củng cố công cuộc sống xanh của những khách hàng thân yêu. Lại Đây xin giới thiệu với các bạn bộ sưu tập Cọ Rửa Thiên Nhiên. 

 

Với những nhiệm vụ chùi rửa quá nặng nhọc mà Xơ Mướp không thể xử lý được, thì các em Cọ Rửa Thiên Nhiên đều có thể ‘cân\' một cách dễ dàng. Mỗi loại cọ rửa có cấu trúc từ những nguyên liệu chắc chắn và có sức bền cao như thân gỗ sồi và lông cọ từ các loại xơ dừa tự nhiên có khả năng ngậm nước và cứng cáp cho chà rửa. Vì vậy, các em cọ trong bộ sưu tập mới này có thể dễ dàng xử lý các vết dính, cháy cặn hay bụi bẩn khó nhằn trong gian bếp hoặc bất cứ khu vực cần chà rửa nào trong căn nhà của bạn. 

 

Với mỗi sản phẩm Cọ Rửa Thiên Nhiên trong bộ sưu tập, Lại Đây sẽ hướng dẫn cho bạn đầy đủ về thông tin sản phẩm, cũng như cách sử dụng và bảo quản. 

 

Cọ Rửa Bình EcoCleaner

Thông tin: 

Thân gỗ sồi, cọ sợi Tampico.

HDSD: 

Ngâm nước 24 tiếng trước khi sử dụng cho lông cọ nở ra và dính chắc hơn vào thân cọ.

Thích hợp để chà rửa bình và các loại chai lọ có đáy sâu.',
                'thumbnail' => env('CCCC').('/img/home-care/co-rua-binh.webp'),
                'quantity' => '10',
                'price' => '95.000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 8,
                'name' => 'Bàn Chải Người Lớn',
                'description' => 'Sau các dòng sản phẩm dụng cụ vệ sinh từ Xơ Mướp thì Lại Đây luôn cố gắng tìm kiếm những sản phẩm đa năng và tốt hơn để củng cố công cuộc sống xanh của những khách hàng thân yêu. Lại Đây xin giới thiệu với các bạn bộ sưu tập Cọ Rửa Thiên Nhiên. 

 

Với những nhiệm vụ chùi rửa quá nặng nhọc mà Xơ Mướp không thể xử lý được, thì các em Cọ Rửa Thiên Nhiên đều có thể ‘cân\' một cách dễ dàng. Mỗi loại cọ rửa có cấu trúc từ những nguyên liệu chắc chắn và có sức bền cao như thân gỗ sồi và lông cọ từ các loại xơ dừa tự nhiên có khả năng ngậm nước và cứng cáp cho chà rửa. Vì vậy, các em cọ trong bộ sưu tập mới này có thể dễ dàng xử lý các vết dính, cháy cặn hay bụi bẩn khó nhằn trong gian bếp hoặc bất cứ khu vực cần chà rửa nào trong căn nhà của bạn. 

 

Với mỗi sản phẩm Cọ Rửa Thiên Nhiên trong bộ sưu tập, Lại Đây sẽ hướng dẫn cho bạn đầy đủ về thông tin sản phẩm, cũng như cách sử dụng và bảo quản. 

 

Cọ Rửa Cán Dài EcoCleaner

    Thông tin: 

Thân và đế gỗ sồi, cọ sợi Tampico.

Có đầu cọ cho thay thế.

    HDSD: 

Làm ướt rồi sử dụng để chà rửa với xà bông.

Thích hợp chà rửa chai lọ, các dụng cụ trong căn bếp.',
                'thumbnail' =>env('CCCC').('/img/home-care/co-rua-can-dai.webp'),
                'quantity' => '10',
                'price' => '115.000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 9,
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
                'thumbnail' => env('CCCC').('/img/home-care/co-rua-chao-noi.webp'),
                'quantity' => '20',
                'price' => '115.000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 10,
                'name' => 'Đũa Gỗ Trắc',
                'description' => '
Home / Home Care / Đũa gỗ trắc / Chopsticks, Techicai Sitan Wood
PrevNext
Xuất xứ: Việt Nam

Kích thước: 20cm

Đặc điểm: màu gỗ tự nhiên

ũa là vật dụng không thể thiếu trong mỗi bữa ăn. Tuy nhiên làm sao để có thể chọn cho mình những chiếc đũa tốt không gây ảnh hưởng đến sức khoẻ của gia đình hay chính mình cho những lúc ra khỏi nhà bạn? Đũa gỗ trắc không dùng chất tẩy, có màu của gỗ tự nhiên không dùng các loại sơn để gây ảnh hưởng sức khoẻ của người tiêu dùng trong mỗi bữa ăn. Đũa gỗ trắc với kích thước dài 20cm có thể thuận tiện bỏ vừa túi đựng để mang theo khắp nơi giảm thiểu việc sử dụng đũa 1 lần từ các quán ăn nè.
Lưu ý : Sau khi vệ sinh đũa bằng nước thì bạn nên để ráo hoặc phơi khô để hạn chế ẩm mốc.',
                'thumbnail' => env('CCCC').('/img/home-care/dia-go-trac.webp'),
                'quantity' => '100',
                'price' => '19.000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 11,
                'name' => 'Hộp Kim Loại Đựng Thức Ăn ',
                'description' => '
Home / Home Care / Hộp kim loại đựng thức ăn Laiday / Laiday eco metal bento box
Origin / Xuất xứ: Trung Quốc 

Giá/ Price: 429,000 đ 

 

Hộp Bento Inox Inox Hình Chữ Nhật - 1 tầng - có ngăn chia - 800ml

 

Trong rất nhiều loại vật liệu bền vững mà chúng ta đang sử dụng để thay thế cho nhựa hay các vật liệu dùng-một-lần, Thép không gỉ chính là một vật liệu bền vững có thể được tái chế 100%.  

Theo đó, Lại Đây muốn mang đến cho bạn một giải pháp bảo quản thực phẩm an toàn, lâu dài và hạn chế ảnh hưởng đến môi trường ở mức tối đa. Đó chính là một sản phẩm mang thương hiệu của chúng mình, LAIDAY Bento Kim Loại!

 

LAIDAY Bento Kim Loại được chế tạo từ thép không gỉ 304, với chỉ tiêu chất lượng cao 18/8 cho sử dụng với thực phẩm. Sản phẩm của Lại Đây được đóng gói trong các chất liệu tái chế và có thể được tiếp tục sử dụng. Có thể nói, sản phẩm LAIDAY Bento Kim Loại được thiết kế cực kì bền và chắc chắn, nếu được bảo quản đúng cách, bạn có thể sử dụng sản phẩm hoài hoài. 

 

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
                'thumbnail' => env('CCCC').('/img/home-care/hop-dung-thuc-an-kim-loai.webp'),
                'quantity' => '30',
                'price' => '429.000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 12,
                'name' => 'Hộp Gỗ Tròn 1',
                'description' => 'Hộp gỗ made in VietNam',
                'thumbnail' => env('CCCC').('/img/home-care/hop-go-tron-1.webp'),
                'quantity' => '10',
                'price' => '79.000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 13,
                'name' => 'Hôp vải đựng khăn giấy',
                'description' => 'Kích cỡ : 23cm x 13cm x 8cm

 

Đồ vật trong nhà không chỉ giúp ích cho tiện nghi cuộc sống mà chúng còn góp phần tạo nên phong cách sống của một người.

 

Thiết kế tối giản của chiếc hộp vải đựng khăn rút cùng chất liệu canvas không qua các bước xử lí trung gian để tạo màu sắc cho vải giúp tiết kiệm nguyên liệu và năng lượng, khiến quá trình sản xuất được “xanh” hơn. Chiếc hộp không kiểu cách, không màu sắc nhưng không thể phủ nhận ở nó có một vẻ đẹp rất lạ và thu hút. Và nếu có thể, bạn hãy gấp những miếng khăn vải lại, đặt vào trong hộp để rút xài như khăn giấy và có thể tái sử dụng nhé.

 

Chất liệu là vải cotton canvas thô 100% đã qua xử lí. Hình dáng sản phẩm sẽ không bị ảnh hưởng sau khi giặt hay phơi, nhưng nếu giặt máy thì vải nhăn lại nhưng hoàn toàn có thể ủi được để lấy lại hình dáng như ban đầu.',
                'thumbnail' => env('CCCC').('/img/home-care/hop-khan-giay-go.webp'),
                'quantity' => '50',
                'price' => '179.000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 14,
                'name' => 'Túi vải đựng khăn',
                'description' => 'Kích cỡ : 23x13x8 (cm)

 

Được làm từ chất liệu canvas thô sơ, mộc mạc và dày dặn, túi vải đựng khăn là sản phẩm nhỏ gọn, tiện dụng có thể mang theo bên người. 

 

Sản phẩm này dựa trên mẫu khăn vải mà Lại Đây Refill đang bán (kích thước 20 x 20cm), khi gấp đôi lại sẽ nhét vừa vặn. Với mục đích hướng đến cho các cá nhân mang một ít theo hàng ngày, để nếu lỡ có đi ra ngoài ăn uống thì cũng không cần xài các loại khăn lạnh (làm từ vải không dệt, có rất nhiều nhựa), mà cũng không cần mang theo gói khăn giấy tiện lợi.

 

Chất liệu là vải cotton canvas thô 100% đã qua xử lí. Hình dáng sản phẩm sẽ không bị ảnh hưởng sau khi giặt hay phơi, nhưng nếu giặt máy thì vải nhăn lại nhưng hoàn toàn có thể ủi được để lấy lại hình dáng như ban đầu.',
                'thumbnail' => env('CCCC').('/img/home-care/tui-vai-dung-giay.webp'),
                'quantity' => '10',
                'price' => '69.000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 15,
                'name' => 'Khay Đựng Xà Phòng',
                'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
                            gửi gắm trong mỗi bánh xà phòng.',
                'thumbnail' => env('CCCC').('/img/home-care/khay-dung-xa-phong.webp'),
                'quantity' => '10',
                'price' => '59000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 16,
                'name' => 'Khay Đựng Xà Phòng 2',
                'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
                            gửi gắm trong mỗi bánh xà phòng.',
                'thumbnail' =>env('CCCC').('/img/home-care/khay-dung-xa-phong-2.webp'),
                'quantity' => '10',
                'price' => '79.000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 17,
                'name' => 'Khay Đựng XÀ Phòng 3',
                'description' => 'Khay đựng xà bông.',
                'thumbnail' => env('CCCC').('/img/home-care/khay-dung-xa-phong-3.webp'),
                'quantity' => '10',
                'price' => '79.000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 18,
                'name' => 'Ly Xếp Gọn  Thông Minh',
                'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
                            gửi gắm trong mỗi bánh xà phòng.',
                'thumbnail' => env('CCCC').('/img/home-care/ly-thong-minh-xep-gon.webp'),
                'quantity' => '20',
                'price' => '60.000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 19,
                'name' => 'Miếng Rửa Chén Vải',
                'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
                            gửi gắm trong mỗi bánh xà phòng.',
                'thumbnail' => env('CCCC').('/img/home-care/mieng-rua-chen-vai.webp'),
                'quantity' => '50',
                'price' => '19.000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 20,
                'name' => 'Miếng Rửa Chén Vải 2',
                'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
                            gửi gắm trong mỗi bánh xà phòng.',
                'thumbnail' => env('CCCC').('/img/home-care/mieng-rua-chen-vai-2.webp'),
                'quantity' => '15',
                'price' => '49.000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 21,
                'name' => 'Nến Thơm',
                'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
                            gửi gắm trong mỗi căn phòng.',
                'thumbnail' => env('CCCC').('/img/home-care/nen-thom.webp'),
                'quantity' => '100',
                'price' => '8.000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 22,
                'name' => 'Hũ Gia Vị',
                'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
                            gửi gắm trong mỗi căn phòng.',
                'thumbnail' => env('CCCC').('/img/home-care/hu-gia-vi.webp'),
                'quantity' => '10',
                'price' => '88.000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 23,
                'name' => 'Nước Giặt Hữu Cơ',
                'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
                            gửi gắm trong mỗi căn phòng.',
                'thumbnail' => env('CCCC').('/img/home-care/nuoc-giat-huu-co.webp'),
                'quantity' => '8',
                'price' => '399.000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 51,
                'name' => 'Nước Giặt Lau Sàn Hữu Cơ Bio',
                'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
                            gửi gắm trong mỗi căn phòng.',
                'thumbnail' => env('CCCC').('/img/home-care/nuoc-lau-san-huu-co-Bio.webp'),
                'quantity' => '18',
                'price' => '299.000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 24,
                'name' => 'Nước Rửa Chén Sàn Hữu Cơ',
                'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
                            gửi gắm trong mỗi căn phòng.',
                'thumbnail' => env('CCCC').('/img/home-care/nuoc-rua-chen-huu-co.webp'),
                'quantity' => '9',
                'price' => '199.000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 25,
                'name' => 'Nước Rửa Chén Sàn Hữu Cơ',
                'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
                            gửi gắm trong mỗi căn phòng.',
                'thumbnail' => env('CCCC').('/img/home-care/nuoc-rua-chen-huu-co.webp'),
                'quantity' => '9',
                'price' => '199.000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 26,
                'name' => 'Nước Xịt Chống Côn Trùng',
                'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
                            gửi gắm trong mỗi căn phòng.',
                'thumbnail' => env('CCCC').('/img/home-care/nuoc-xit-chong-con-trung.webp'),
                'quantity' => '15',
                'price' => '199.000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 27,
                'name' => 'Thớt Gỗ Cá Voi',
                'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
                            gửi gắm trong mỗi căn phòng.',
                'thumbnail' => env('CCCC').('/img/home-care/thot-go-ca-coi.webp'),
                'quantity' => '25',
                'price' => '299.000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 28,
                'name' => 'Túi Đựng Rác Bằng Vải',
                'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
                            gửi gắm trong mỗi căn phòng.',
                'thumbnail' => env('CCCC').('/img/home-care/tui-dung-rac-bang-vai.webp'),
                'quantity' => '50',
                'price' => '29.000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 29,
                'name' => 'Túi Lọc Trà',
                'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
                            gửi gắm trong mỗi căn phòng.',
                'thumbnail' => env('CCCC').('/img/home-care/tui-loc-tra.webp'),
                'quantity' => '50',
                'price' => '19.000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 30,
                'name' => 'Túi Thực Phẩm Silicon 1',
                'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
                            gửi gắm trong mỗi căn phòng.',
                'thumbnail' => env('CCCC').('/img/home-care/tui-thuc-pham-silicon-1.webp'),
                'quantity' => '30',
                'price' => '79.000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 31,
                'name' => 'Túi Thực Phẩm Silicon 2',
                'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
                            gửi gắm trong mỗi căn phòng.',
                'thumbnail' => env('CCCC').('/img/home-care/tui-thuc-pham-silicon-2.webp'),
                'quantity' => '30',
                'price' => '79.000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 32,
                'name' => 'Túi Vải Đa Năng 1',
                'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
                            gửi gắm trong mỗi căn phòng.',
                'thumbnail' => env('CCCC').('/img/home-care/tui-vai-da-nang-1.webp'),
                'quantity' => '10',
                'price' => '99.000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 33,
                'name' => 'Túi Vải Đa Năng 2',
                'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
                            gửi gắm trong mỗi căn phòng.',
                'thumbnail' => env('CCCC').('/img/home-care/tui-vai-da-nang-2.webp'),
                'quantity' => '10',
                'price' => '99.000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 34,
                'name' => 'Túi Vải Đa Năng 3',
                'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
                            gửi gắm trong mỗi căn phòng.',
                'thumbnail' => env('CCCC').('/img/home-care/tui-vai-da-nang-3.webp'),
                'quantity' => '10',
                'price' => '99.000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 35,
                'name' => 'Vải Che Đồ Dùng',
                'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
                            gửi gắm trong mỗi căn phòng.',
                'thumbnail' => env('CCCC').('/img/home-care/vai-che-do-dung.webp'),
                'quantity' => '10',
                'price' => '29.000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 36,
                'name' => 'Vòi Ấn 1',
                'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
                            gửi gắm trong mỗi căn phòng.',
                'thumbnail' => env('CCCC').('/img/home-care/voi-an-1.webp'),
                'quantity' => '10',
                'price' => '69.000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 37,
                'name' => 'Vòi Ấn 2',
                'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
                            gửi gắm trong mỗi căn phòng.',
                'thumbnail' =>env('CCCC').('/img/home-care/voi-an-2.webp'),
                'quantity' => '10',
                'price' => '69.000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 38,
                'name' => 'Vòi Ấn 3',
                'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
                            gửi gắm trong mỗi căn phòng.',
                'thumbnail' => env('CCCC').('/img/home-care/voi-an-3.webp'),
                'quantity' => '10',
                'price' => '69.000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 39,
                'name' => 'Vòi Ấn 4',
                'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
                            gửi gắm trong mỗi căn phòng.',
                'thumbnail' =>env('CCCC').('/img/home-care/voi-an-4.webp'),
                'quantity' => '10',
                'price' => '69.000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 40,
                'name' => 'Vòng Gốm Đựng Bàn Chải 1',
                'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
                            gửi gắm trong mỗi căn phòng.',
                'thumbnail' => env('CCCC').('/img/home-care/vong-gom-dung-ban-chai-1.webp'),
                'quantity' => '10',
                'price' => '89.000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 41,
                'name' => 'Vòng Gốm Đựng Bàn Chải 2',
                'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
                            gửi gắm trong mỗi căn phòng.',
                'thumbnail' => env('CCCC').('/img/home-care/vong-gom-dung-ban-chai-2.webp'),
                'quantity' => '10',
                'price' => '89.000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 42,
                'name' => 'Vòng Gốm Đựng Bàn Chải 3',
                'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
                            gửi gắm trong mỗi căn phòng.',
                'thumbnail' => env('CCCC').('/img/home-care/vong-gom-dung-ban-chai-3.webp'),
                'quantity' => '10',
                'price' => '89.000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 43,
                'name' => 'Vòng Gốm Đựng Bàn Chải 4',
                'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
                            gửi gắm trong mỗi căn phòng.',
                'thumbnail' => env('CCCC').('/img/home-care/vong-gom-dung-ban-chai-4.webp'),
                'quantity' => '10',
                'price' => '89.000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 44,
                'name' => 'Vòng Gốm Đựng Bàn Chải 5',
                'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
                            gửi gắm trong mỗi căn phòng.',
                'thumbnail' => env('CCCC').('/img/home-care/vong-gom-dung-ban-chai-5.webp'),
                'quantity' => '10',
                'price' => '89.000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 45,
                'name' => 'Xịt Khử Mùi',
                'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
                            gửi gắm trong mỗi căn phòng.',
                'thumbnail' => env('CCCC').('/img/home-care/xit-khu-mui.webp'),
                'quantity' => '10',
                'price' => '200.000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 46,
                'name' => 'Xơ Mướp Nguyên Quả',
                'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
                            gửi gắm trong mỗi căn phòng.',
                'thumbnail' =>env('CCCC').('/img/home-care/xo-muop-nguyen-qua.webp'),
                'quantity' => '10',
                'price' => '39.000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 47,
                'name' => 'Thớt Gỗ HCN',
                'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
                            gửi gắm trong mỗi căn phòng.',
                'thumbnail' => env('CCCC').('/img/home-care/thot-go-hcn.webp'),
                'quantity' => '5',
                'price' => '399.000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 49,
                'name' => 'Khay Tròn 1',
                'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
                            gửi gắm trong mỗi căn phòng.',
                'thumbnail' => env('CCCC').('/img/home-care/khay-tron-1.webp'),
                'quantity' => '10',
                'price' => '39.000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 50,
                'name' => 'Khay Tròn 2',
                'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
                            gửi gắm trong mỗi căn phòng.',
                'thumbnail' => env('CCCC').('/img/home-care/khay-tron-2.webp'),
                'quantity' => '10',
                'price' => '39.000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
