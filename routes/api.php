<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use JD\Cloudder\Facades\Cloudder;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::post('/convert-data', function () {
    $data =  [
//        [
//            'id' => 1,
//            'name' => 'Bàn Chải Người Lớn',
//            'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
//                            gửi gắm trong mỗi bánh xà phòng.',
//            'thumbnail' => env('CCCC').'/img/home-care/ban-chai-nguoi-lon.webp',
//            'quantity' => '10',
//            'price' => '79.000',
//            'created_at' => date('Y-m-d H:i:s'),
//            'updated_at' => date('Y-m-d H:i:s'),
//            'pro_category' => 1,
//        ],
//        [
//            'id' => 2,
//            'name' => 'Băng Keo Giấy',
//            'description' => 'Trong khi băng keo nhựa thường được làm bằng màng BOPP trong từ hạt nhựa PP và được cán thành màng nhựa mỏng, mềm và dai, thì băng keo giấy đã sử dụng giấy kraft, một loại giấy thô không qua tẩy màu để làm lớp nền. Sau đó lớp keo nước sẽ được phun lên bề mặt giấy hay nhựa để tạo thành chất kết dính được làm từ acrylate copolymer, nhựa thông hydro hóa, BOP, DO,...
//
//Chính vì vậy khoảnh khắc quyết định chọn băng keo giấy hay băng keo nhựa để sử dụng chính là lúc chúng mình có quyết tâm cứu được có khi là một lõi nhựa nếu nhà sản xuất sử dụng lõi nhựa thay vì lõi giấy và quan trọng hơn hết, là 45m băng keo nhựa hay không !
//
//Kích thước: 1.6cm *45m / 4.7cm *45m.',
//            'thumbnail' => env('CCCC').('/img/home-care/bang-keo-giay.webp'),
//            'quantity' => '20',
//            'price' => '19.000',
//            'created_at' => date('Y-m-d H:i:s'),
//            'updated_at' => date('Y-m-d H:i:s'),
//            'pro_category' => 1,
//        ],
//        [
//            'id' => 3,
//            'name' => 'Bình Thủy Tinh 10L',
//            'description' => 'Nhắc đến Lại Đây, có lẽ bạn bè sẽ nhớ đến ngay chiếc bình O Brand này khi đến trạm, vì em ấy được Lại Đây sản xuất độc quyền nên sẽ không tìm được ở nơi nào khác. Và đang được dùng để đựng các sản phẩm làm đầy của Lại Đây.
//
//Song ngoài mục đích ấy, Lại Đây vẫn bán lẻ để các cá nhân, tổ chức vẫn có thể sử dụng cho các mục đích khác nhau, như đựng nước uống ở nhà (mình thường mua máy lọc nước, nấu lại và trữ nước trong bình, nên mấy năm nay nhà ít phải mua bình nước ngoài và tiết kiệm được kha khá) hoặc là dùng để đựng nước trái cây, nước uống tại các sự kiện thay thế cho các chai nhựa dùng 1 lần dành cho khách đến.
//
//Nắp gỗ thông, mộc, có vòi kim loại. Sản phẩm này không có kệ hay gì khác. LDRF chỉ cung cấp sản phẩm bình refill như mô tả ở trên.
//
//Đường kính ở đáy là 27cm, Đường kính ở vành miệng là 17cm. Dung tích 10 lít.',
//            'thumbnail' => env('CCCC').('/img/home-care/binh-thuy-tinh-1.webp'),
//            'quantity' => '5',
//            'price' => '79.0000',
//            'created_at' => date('Y-m-d H:i:s'),
//            'updated_at' => date('Y-m-d H:i:s'),
//            'pro_category' => 1,
//        ],
//        [
//            'id' => 4,
//            'name' => 'Cây Rửa Ly Xơ Mướp',
//            'description' => 'Cây rửa ly bằng xơ mướp được cấu tạo với thân gỗ chắc chắn và đầu xơ mướp nhỏ vừa đủ giúp bạn có thể vệ sinh sạch sẽ với những chiếc cốc, ly cao.
//
//Lưu ý : Nên bảo quản hoặc treo nơi thoáng mát, khô ráo.
//
//Sau khi dùng nên phơi khô đầu xơ mướp để tránh ẩm mốc và dùng được lâu hơn.',
//            'thumbnail' => env('CCCC').('/img/home-care/cay-rua-ly-xo-muop.webp'),
//            'quantity' => '10',
//            'price' => '39.000',
//            'created_at' => date('Y-m-d H:i:s'),
//            'updated_at' => date('Y-m-d H:i:s'),
//            'pro_category' => 1,
//        ],
//        [
//            'id' => 5,
//            'name' => 'Chai Gốm Hoa Văn',
//            'description' => '250ml
//
//Nơi sản xuất: Trung Quốc
//
//Đặc điểm:
//
//Thiết kế sang trọng và tông màu trầm sẽ giúp chai gốm xuất hiện trong căn nhà của bạn như một phụ kiện trang trí tinh tế.
//
//Chai có dung tích 400ml có thể dùng để đựng nước rửa chén, rửa tay, dầu tắm, dầu gội, đặc biệt khi dùng hết bạn có thể mang thẳng chai đến Lại Đây để làm đầy các sản phẩm mà không tạo ra tí rác thải nào.
//
//Đường kính 7.5cm, cao 18cm.',
//            'thumbnail' =>env('CCCC').('/img/home-care/chai-gom-hoa-van.webp'),
//            'quantity' => '15',
//            'price' => '165.000',
//            'created_at' => date('Y-m-d H:i:s'),
//            'updated_at' => date('Y-m-d H:i:s'),
//        ],
//        [
//            'id' => 6,
//            'name' => 'Chổi Xơ Dừa',
//            'description' => 'Nơi sản xuất: Việt Nam
//
//Kích thước: 40cm
//
//Trọng lượng:
//
//Đặc điểm: màu gỗ tự nhiên
//
//
//
//Để làm ra loại chổi này, người làm chổi đã lấy vỏ của trái dừa già có nhiều xơ mềm và rất chắc, ủ cho mềm vỏ rồi lấy búa để đập cho xơ dập và tơi ra, sau đó đem xơ ấy để làm thành chổi xơ dừa. Chổi rất bền và đa năng nên sẽ là người cộng sự đắc lực của bạn trong ngôi nhà. Có thể dùng để quét bụi khô lẫn dùng để vệ sinh trong nước. Để bảo quản chổi tốt hơn thì sau khi sử dụng hãy nhớ vệ sinh chổi sạch sẽ và để ở nơi khô ráo thoáng mát nhé.',
//            'thumbnail' =>env('CCCC').('/img/home-care/choi-xo-dua.webp'),
//            'quantity' => '10',
//            'price' => '79.000',
//            'created_at' => date('Y-m-d H:i:s'),
//            'updated_at' => date('Y-m-d H:i:s'),
//            'pro_category' => 1,
//        ],
//        [
//            'id' => 7,
//            'name' => 'Cọ Rửa Bình',
//            'description' => 'Sau các dòng sản phẩm dụng cụ vệ sinh từ Xơ Mướp thì Lại Đây luôn cố gắng tìm kiếm những sản phẩm đa năng và tốt hơn để củng cố công cuộc sống xanh của những khách hàng thân yêu. Lại Đây xin giới thiệu với các bạn bộ sưu tập Cọ Rửa Thiên Nhiên.
//
//
//
//Với những nhiệm vụ chùi rửa quá nặng nhọc mà Xơ Mướp không thể xử lý được, thì các em Cọ Rửa Thiên Nhiên đều có thể ‘cân\' một cách dễ dàng. Mỗi loại cọ rửa có cấu trúc từ những nguyên liệu chắc chắn và có sức bền cao như thân gỗ sồi và lông cọ từ các loại xơ dừa tự nhiên có khả năng ngậm nước và cứng cáp cho chà rửa. Vì vậy, các em cọ trong bộ sưu tập mới này có thể dễ dàng xử lý các vết dính, cháy cặn hay bụi bẩn khó nhằn trong gian bếp hoặc bất cứ khu vực cần chà rửa nào trong căn nhà của bạn.
//
//
//
//Với mỗi sản phẩm Cọ Rửa Thiên Nhiên trong bộ sưu tập, Lại Đây sẽ hướng dẫn cho bạn đầy đủ về thông tin sản phẩm, cũng như cách sử dụng và bảo quản.
//
//
//
//Cọ Rửa Bình EcoCleaner
//
//Thông tin:
//
//Thân gỗ sồi, cọ sợi Tampico.
//
//HDSD:
//
//Ngâm nước 24 tiếng trước khi sử dụng cho lông cọ nở ra và dính chắc hơn vào thân cọ.
//
//Thích hợp để chà rửa bình và các loại chai lọ có đáy sâu.',
//            'thumbnail' => env('CCCC').('/img/home-care/co-rua-binh.webp'),
//            'quantity' => '10',
//            'price' => '95.000',
//            'created_at' => date('Y-m-d H:i:s'),
//            'updated_at' => date('Y-m-d H:i:s'),
//            'pro_category' => 1,
//        ],
//        [
//            'id' => 8,
//            'name' => 'Bàn Chải Người Lớn',
//            'description' => 'Sau các dòng sản phẩm dụng cụ vệ sinh từ Xơ Mướp thì Lại Đây luôn cố gắng tìm kiếm những sản phẩm đa năng và tốt hơn để củng cố công cuộc sống xanh của những khách hàng thân yêu. Lại Đây xin giới thiệu với các bạn bộ sưu tập Cọ Rửa Thiên Nhiên.
//
//
//
//Với những nhiệm vụ chùi rửa quá nặng nhọc mà Xơ Mướp không thể xử lý được, thì các em Cọ Rửa Thiên Nhiên đều có thể ‘cân\' một cách dễ dàng. Mỗi loại cọ rửa có cấu trúc từ những nguyên liệu chắc chắn và có sức bền cao như thân gỗ sồi và lông cọ từ các loại xơ dừa tự nhiên có khả năng ngậm nước và cứng cáp cho chà rửa. Vì vậy, các em cọ trong bộ sưu tập mới này có thể dễ dàng xử lý các vết dính, cháy cặn hay bụi bẩn khó nhằn trong gian bếp hoặc bất cứ khu vực cần chà rửa nào trong căn nhà của bạn.
//
//
//
//Với mỗi sản phẩm Cọ Rửa Thiên Nhiên trong bộ sưu tập, Lại Đây sẽ hướng dẫn cho bạn đầy đủ về thông tin sản phẩm, cũng như cách sử dụng và bảo quản.
//
//
//
//Cọ Rửa Cán Dài EcoCleaner
//
//    Thông tin:
//
//Thân và đế gỗ sồi, cọ sợi Tampico.
//
//Có đầu cọ cho thay thế.
//
//    HDSD:
//
//Làm ướt rồi sử dụng để chà rửa với xà bông.
//
//Thích hợp chà rửa chai lọ, các dụng cụ trong căn bếp.',
//            'thumbnail' =>env('CCCC').('/img/home-care/co-rua-can-dai.webp'),
//            'quantity' => '10',
//            'price' => '115.000',
//            'created_at' => date('Y-m-d H:i:s'),
//            'updated_at' => date('Y-m-d H:i:s'),
//            'pro_category' => 1,
//        ],
//        [
//            'id' => 9,
//            'name' => 'Cọ Rửa Chảo Mồi',
//            'description' => 'Sau các dòng sản phẩm dụng cụ vệ sinh từ Xơ Mướp thì Lại Đây luôn cố gắng tìm kiếm những sản phẩm đa năng và tốt hơn để củng cố công cuộc sống xanh của những khách hàng thân yêu. Lại Đây xin giới thiệu với các bạn bộ sưu tập Cọ Rửa Thiên Nhiên.
//
//
//
//Với những nhiệm vụ chùi rửa quá nặng nhọc mà Xơ Mướp không thể xử lý được, thì các em Cọ Rửa Thiên Nhiên đều có thể ‘cân\' một cách dễ dàng. Mỗi loại cọ rửa có cấu trúc từ những nguyên liệu chắc chắn và có sức bền cao như thân gỗ sồi và lông cọ từ các loại xơ dừa tự nhiên có khả năng ngậm nước và cứng cáp cho chà rửa. Vì vậy, các em cọ trong bộ sưu tập mới này có thể dễ dàng xử lý các vết dính, cháy cặn hay bụi bẩn khó nhằn trong gian bếp hoặc bất cứ khu vực cần chà rửa nào trong căn nhà của bạn.
//
//
//
//Với mỗi sản phẩm Cọ Rửa Thiên Nhiên trong bộ sưu tập, Lại Đây sẽ hướng dẫn cho bạn đầy đủ về thông tin sản phẩm, cũng như cách sử dụng và bảo quản.
//
//
//
//Cọ Rửa Chảo Nồi EcoCleaner
//
//Thông tin:
//
//Thân gỗ sồi, cọ sợi Tampico.
//
//HDSD:
//
//Ngâm nước 24 tiếng trước khi sử dụng cho lông cọ nở ra và dính chắc hơn vào thân cọ.
//
//Thích hợp để chà rửa chén, dĩa và khuôn nướng.',
//            'thumbnail' => env('CCCC').('/img/home-care/co-rua-chao-noi.webp'),
//            'quantity' => '20',
//            'price' => '115.000',
//            'created_at' => date('Y-m-d H:i:s'),
//            'updated_at' => date('Y-m-d H:i:s'),
//            'pro_category' => 1,
//        ],
//        [
//            'id' => 10,
//            'name' => 'Đũa Gỗ Trắc',
//            'description' => '
//Home / Home Care / Đũa gỗ trắc / Chopsticks, Techicai Sitan Wood
//PrevNext
//Xuất xứ: Việt Nam
//
//Kích thước: 20cm
//
//Đặc điểm: màu gỗ tự nhiên
//
//ũa là vật dụng không thể thiếu trong mỗi bữa ăn. Tuy nhiên làm sao để có thể chọn cho mình những chiếc đũa tốt không gây ảnh hưởng đến sức khoẻ của gia đình hay chính mình cho những lúc ra khỏi nhà bạn? Đũa gỗ trắc không dùng chất tẩy, có màu của gỗ tự nhiên không dùng các loại sơn để gây ảnh hưởng sức khoẻ của người tiêu dùng trong mỗi bữa ăn. Đũa gỗ trắc với kích thước dài 20cm có thể thuận tiện bỏ vừa túi đựng để mang theo khắp nơi giảm thiểu việc sử dụng đũa 1 lần từ các quán ăn nè.
//Lưu ý : Sau khi vệ sinh đũa bằng nước thì bạn nên để ráo hoặc phơi khô để hạn chế ẩm mốc.',
//            'thumbnail' => env('CCCC').('/img/home-care/dua-go-trac.webp'),
//            'quantity' => '100',
//            'price' => '19.000',
//            'created_at' => date('Y-m-d H:i:s'),
//            'updated_at' => date('Y-m-d H:i:s'),
//            'pro_category' => 1,
//        ],
//        [
//            'id' => 11,
//            'name' => 'Hộp Kim Loại Đựng Thức Ăn ',
//            'description' => '
//Origin / Xuất xứ: Trung Quốc
//
//Hộp Bento Inox Inox Hình Chữ Nhật - 1 tầng - có ngăn chia - 800ml
//
//
//
//Trong rất nhiều loại vật liệu bền vững mà chúng ta đang sử dụng để thay thế cho nhựa hay các vật liệu dùng-một-lần, Thép không gỉ chính là một vật liệu bền vững có thể được tái chế 100%.
//
//Theo đó, Lại Đây muốn mang đến cho bạn một giải pháp bảo quản thực phẩm an toàn, lâu dài và hạn chế ảnh hưởng đến môi trường ở mức tối đa. Đó chính là một sản phẩm mang thương hiệu của chúng mình, LAIDAY Bento Kim Loại!
//
//
//
//LAIDAY Bento Kim Loại được chế tạo từ thép không gỉ 304, với chỉ tiêu chất lượng cao 18/8 cho sử dụng với thực phẩm. Sản phẩm của Lại Đây được đóng gói trong các chất liệu tái chế và có thể được tiếp tục sử dụng. Có thể nói, sản phẩm LAIDAY Bento Kim Loại được thiết kế cực kì bền và chắc chắn, nếu được bảo quản đúng cách, bạn có thể sử dụng sản phẩm hoài hoài.
//
//
//
//Bên trong Bento Kim Loại có chứa một thanh ngăn siêu chắc chắn, dùng để phân loại và ngăn chia thực phẩm. Nhờ những đặc điểm trên, LAIDAY Bento Kim Loại có thể được dùng để đựng đồ ăn mang đi, dự trữ thực phẩm, và có thể được đem đi đến bất cứ đâu do tính chất mỏng, nhẹ, bền.
//
//
//
//Thông Tin Sản Phẩm
//
//Kích cỡ: 17 x 12 x 6 cm
//
//Chất liệu: Thép không gỉ 304 (KHÔNG chứa PVC, Phthalate, Leaching)
//
//Sản phẩm gồm: Hộp bento, nắp có miếng ngăn silicone, thanh chắn.
//
//Khối lượng: 270g
//
//Nguồn gốc: Trung Quốc.
//
//Đạt chất lượng chứng chỉ: FDA, SGS, LFGB.
//
//
//
//Cách Bảo Quản
//
//Có thể sử dụng với máy rửa bát.
//
//Nắp có lớp Silicone: nên được rửa với nước lạnh. Miếng silicone có thể rớt ra nếu dùng máy rửa bát do nước nóng, khi dùng chờ 2 phút cho silicone nguội và quay về hình dạng ban đầu và lắp lại vào nắp hộp.',
//            'thumbnail' => env('CCCC').('/img/home-care/hop-dung-thuc-an-kim-loai.webp'),
//            'quantity' => '30',
//            'price' => '429.000',
//            'created_at' => date('Y-m-d H:i:s'),
//            'updated_at' => date('Y-m-d H:i:s'),
//            'pro_category' => 1,
//        ],
//        [
//            'id' => 12,
//            'name' => 'Hộp Gỗ Tròn 1',
//            'description' => 'Hộp gỗ made in VietNam',
//            'thumbnail' => env('CCCC').('/img/home-care/hop-go-tron-1.webp'),
//            'quantity' => '10',
//            'price' => '79.000',
//            'created_at' => date('Y-m-d H:i:s'),
//            'updated_at' => date('Y-m-d H:i:s'),
//            'pro_category' => 1,
//        ],
//        [
//            'id' => 13,
//            'name' => 'Hôp vải đựng khăn giấy',
//            'description' => 'Kích cỡ : 23cm x 13cm x 8cm
//
//
//
//Đồ vật trong nhà không chỉ giúp ích cho tiện nghi cuộc sống mà chúng còn góp phần tạo nên phong cách sống của một người.
//
//
//
//Thiết kế tối giản của chiếc hộp vải đựng khăn rút cùng chất liệu canvas không qua các bước xử lí trung gian để tạo màu sắc cho vải giúp tiết kiệm nguyên liệu và năng lượng, khiến quá trình sản xuất được “xanh” hơn. Chiếc hộp không kiểu cách, không màu sắc nhưng không thể phủ nhận ở nó có một vẻ đẹp rất lạ và thu hút. Và nếu có thể, bạn hãy gấp những miếng khăn vải lại, đặt vào trong hộp để rút xài như khăn giấy và có thể tái sử dụng nhé.
//
//
//
//Chất liệu là vải cotton canvas thô 100% đã qua xử lí. Hình dáng sản phẩm sẽ không bị ảnh hưởng sau khi giặt hay phơi, nhưng nếu giặt máy thì vải nhăn lại nhưng hoàn toàn có thể ủi được để lấy lại hình dáng như ban đầu.',
//            'thumbnail' => env('CCCC').('/img/home-care/hop-khan-giay-go.webp'),
//            'quantity' => '50',
//            'price' => '179.000',
//            'created_at' => date('Y-m-d H:i:s'),
//            'updated_at' => date('Y-m-d H:i:s'),
//            'pro_category' => 1,
//        ],
//        [
//            'id' => 14,
//            'name' => 'Túi vải đựng khăn',
//            'description' => 'Kích cỡ : 23x13x8 (cm)
//
//
//
//Được làm từ chất liệu canvas thô sơ, mộc mạc và dày dặn, túi vải đựng khăn là sản phẩm nhỏ gọn, tiện dụng có thể mang theo bên người.
//
//
//
//Sản phẩm này dựa trên mẫu khăn vải mà Lại Đây Refill đang bán (kích thước 20 x 20cm), khi gấp đôi lại sẽ nhét vừa vặn. Với mục đích hướng đến cho các cá nhân mang một ít theo hàng ngày, để nếu lỡ có đi ra ngoài ăn uống thì cũng không cần xài các loại khăn lạnh (làm từ vải không dệt, có rất nhiều nhựa), mà cũng không cần mang theo gói khăn giấy tiện lợi.
//
//
//
//Chất liệu là vải cotton canvas thô 100% đã qua xử lí. Hình dáng sản phẩm sẽ không bị ảnh hưởng sau khi giặt hay phơi, nhưng nếu giặt máy thì vải nhăn lại nhưng hoàn toàn có thể ủi được để lấy lại hình dáng như ban đầu.',
//            'thumbnail' => env('CCCC').('/img/home-care/tui-vai-dung-giay.webp'),
//            'quantity' => '10',
//            'price' => '69.000',
//            'created_at' => date('Y-m-d H:i:s'),
//            'updated_at' => date('Y-m-d H:i:s'),
//            'pro_category' => 1,
//        ],
//        [
//            'id' => 15,
//            'name' => 'Khay Đựng Xà Phòng',
//            'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
//                            gửi gắm trong mỗi bánh xà phòng.',
//            'thumbnail' => env('CCCC').('/img/home-care/khay-dung-xa-phong.webp'),
//            'quantity' => '10',
//            'price' => '59000',
//            'created_at' => date('Y-m-d H:i:s'),
//            'updated_at' => date('Y-m-d H:i:s'),
//            'pro_category' => 1,
//        ],
//        [
//            'id' => 16,
//            'name' => 'Khay Đựng Xà Phòng 2',
//            'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
//                            gửi gắm trong mỗi bánh xà phòng.',
//            'thumbnail' =>env('CCCC').('/img/home-care/khay-dung-xa-phong-2.webp'),
//            'quantity' => '10',
//            'price' => '79.000',
//            'created_at' => date('Y-m-d H:i:s'),
//            'updated_at' => date('Y-m-d H:i:s'),
//            'pro_category' => 1,
//        ],
//        [
//            'id' => 17,
//            'name' => 'Khay Đựng XÀ Phòng 3',
//            'description' => 'Khay đựng xà bông.',
//            'thumbnail' => env('CCCC').('/img/home-care/khay-dung-xa-phong-3.webp'),
//            'quantity' => '10',
//            'price' => '79.000',
//            'created_at' => date('Y-m-d H:i:s'),
//            'updated_at' => date('Y-m-d H:i:s'),
//            'pro_category' => 1,
//        ],
//        [
//            'id' => 18,
//            'name' => 'Ly Xếp Gọn  Thông Minh',
//            'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
////                            gửi gắm trong mỗi bánh xà phòng.',
//            'thumbnail' => env('CCCC').('/img/home-care/ly-thong-minh-xep-gon.webp'),
//            'quantity' => '20',
//            'price' => '60.000',
//            'created_at' => date('Y-m-d H:i:s'),
//            'updated_at' => date('Y-m-d H:i:s'),
//            'pro_category' => 1,
//        ],
//        [
//            'id' => 19,
//            'name' => 'Miếng Rửa Chén Vải',
//            'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
//                            gửi gắm trong mỗi bánh xà phòng.',
//            'thumbnail' => env('CCCC').('/img/home-care/mieng-rua-chen-vai.webp'),
//            'quantity' => '50',
//            'price' => '19.000',
//            'created_at' => date('Y-m-d H:i:s'),
//            'updated_at' => date('Y-m-d H:i:s'),
//            'pro_category' => 1,
//        ],
//        [
//            'id' => 20,
//            'name' => 'Miếng Rửa Chén Vải 2',
//            'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
//                            gửi gắm trong mỗi bánh xà phòng.',
//            'thumbnail' => env('CCCC').('/img/home-care/mieng-rua-chen-vai-2.webp'),
//            'quantity' => '15',
//            'price' => '49.000',
//            'created_at' => date('Y-m-d H:i:s'),
//            'updated_at' => date('Y-m-d H:i:s'),
//            'pro_category' => 1,
//        ],
//        [
//            'id' => 21,
//            'name' => 'Nến Thơm',
//            'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
//                            gửi gắm trong mỗi căn phòng.',
//            'thumbnail' => env('CCCC').('/img/home-care/nen-thom.webp'),
//            'quantity' => '100',
//            'price' => '8.000',
//            'created_at' => date('Y-m-d H:i:s'),
//            'updated_at' => date('Y-m-d H:i:s'),
//            'pro_category' => 1,
//        ],
//        [
//            'id' => 22,
//            'name' => 'Hũ Gia Vị',
//            'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
//                            gửi gắm trong mỗi căn phòng.',
//            'thumbnail' => env('CCCC').('/img/home-care/hu-gia-vi.webp'),
//            'quantity' => '10',
//            'price' => '88.000',
//            'created_at' => date('Y-m-d H:i:s'),
//            'updated_at' => date('Y-m-d H:i:s'),
//            'pro_category' => 1,
//        ],
//        [
//            'id' => 23,
//            'name' => 'Nước Giặt Hữu Cơ',
//            'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
//                            gửi gắm trong mỗi căn phòng.',
//            'thumbnail' => env('CCCC').('/img/home-care/nuoc-giat-huu-co.webp'),
//            'quantity' => '8',
//            'price' => '399.000',
//            'created_at' => date('Y-m-d H:i:s'),
//            'updated_at' => date('Y-m-d H:i:s'),
//            'pro_category' => 1,
//        ],
//        [
//            'id' => 51,
//            'name' => 'Nước Giặt Lau Sàn Hữu Cơ Bio',
//            'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
//                            gửi gắm trong mỗi căn phòng.',
//            'thumbnail' => env('CCCC').('/img/home-care/nuoc-lau-san-huu-co-Bio.webp'),
//            'quantity' => '18',
//            'price' => '299.000',
//            'created_at' => date('Y-m-d H:i:s'),
//            'updated_at' => date('Y-m-d H:i:s'),
//            'pro_category' => 1,
//        ],
//        [
//            'id' => 24,
//            'name' => 'Nước Rửa Chén Sàn Hữu Cơ',
//            'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
//                            gửi gắm trong mỗi căn phòng.',
//            'thumbnail' => env('CCCC').('/img/home-care/nuoc-rua-chen-huu-co.webp'),
//            'quantity' => '9',
//            'price' => '199.000',
//            'created_at' => date('Y-m-d H:i:s'),
//            'updated_at' => date('Y-m-d H:i:s'),
//            'pro_category' => 1,
//        ],
//        [
//            'id' => 25,
//            'name' => 'Nước Rửa Chén Sàn Hữu Cơ',
//            'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
//                            gửi gắm trong mỗi căn phòng.',
//            'thumbnail' => env('CCCC').('/img/home-care/nuoc-rua-chen-huu-co.webp'),
//            'quantity' => '9',
//            'price' => '199.000',
//            'created_at' => date('Y-m-d H:i:s'),
//            'updated_at' => date('Y-m-d H:i:s'),
//            'pro_category' => 1,
//        ],
//        [
//            'id' => 26,
//            'name' => 'Nước Xịt Chống Côn Trùng',
//            'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
//                            gửi gắm trong mỗi căn phòng.',
//            'thumbnail' => env('CCCC').('/img/home-care/nuoc-xit-chong-con-trung.webp'),
//            'quantity' => '15',
//            'price' => '199.000',
//            'created_at' => date('Y-m-d H:i:s'),
//            'updated_at' => date('Y-m-d H:i:s'),
//            'pro_category' => 1,
//        ],
//        [
//            'id' => 27,
//            'name' => 'Thớt Gỗ Cá Voi',
//            'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
//                            gửi gắm trong mỗi căn phòng.',
//            'thumbnail' => env('CCCC').('/img/home-care/thot-go-ca-voi.webp'),
//            'quantity' => '25',
//            'price' => '299.000',
//            'created_at' => date('Y-m-d H:i:s'),
//            'updated_at' => date('Y-m-d H:i:s'),
//            'pro_category' => 1,
//        ],
//        [
//            'id' => 28,
//            'name' => 'Túi Đựng Rác Bằng Vải',
//            'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
//                            gửi gắm trong mỗi căn phòng.',
//            'thumbnail' => env('CCCC').('/img/home-care/tui-dung-rac-bang-vai.webp'),
//            'quantity' => '50',
//            'price' => '29.000',
//            'created_at' => date('Y-m-d H:i:s'),
//            'updated_at' => date('Y-m-d H:i:s'),
//            'pro_category' => 1,
//        ],
//        [
//            'id' => 29,
//            'name' => 'Túi Lọc Trà',
//            'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
//                            gửi gắm trong mỗi căn phòng.',
//            'thumbnail' => env('CCCC').('/img/home-care/tui-loc-tra.webp'),
//            'quantity' => '50',
//            'price' => '19.000',
//            'created_at' => date('Y-m-d H:i:s'),
//            'updated_at' => date('Y-m-d H:i:s'),
//            'pro_category' => 1,
//        ],
//        [
//            'id' => 30,
//            'name' => 'Túi Thực Phẩm Silicon 1',
//            'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
//                            gửi gắm trong mỗi căn phòng.',
//            'thumbnail' => env('CCCC').('/img/home-care/tui-thuc-pham-silicon-1.webp'),
//            'quantity' => '30',
//            'price' => '79.000',
//            'created_at' => date('Y-m-d H:i:s'),
//            'updated_at' => date('Y-m-d H:i:s'),
//            'pro_category' => 1,
//        ],
//        [
//            'id' => 31,
//            'name' => 'Túi Thực Phẩm Silicon 2',
//            'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
//                            gửi gắm trong mỗi căn phòng.',
//            'thumbnail' => env('CCCC').('/img/home-care/tui-thuc-pham-silicon-2.webp'),
//            'quantity' => '30',
//            'price' => '79.000',
//            'created_at' => date('Y-m-d H:i:s'),
//            'updated_at' => date('Y-m-d H:i:s'),
//            'pro_category' => 1,
//        ],
//        [
//            'id' => 32,
//            'name' => 'Túi Vải Đa Năng 1',
//            'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
//                            gửi gắm trong mỗi căn phòng.',
//            'thumbnail' => env('CCCC').('/img/home-care/tui-vai-da-nang-1.webp'),
//            'quantity' => '10',
//            'price' => '99.000',
//            'created_at' => date('Y-m-d H:i:s'),
//            'updated_at' => date('Y-m-d H:i:s'),
//            'pro_category' => 1,
//        ],
//        [
//            'id' => 33,
//            'name' => 'Túi Vải Đa Năng 2',
//            'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
//                            gửi gắm trong mỗi căn phòng.',
//            'thumbnail' => env('CCCC').('/img/home-care/tui-vai-da-nang-2.webp'),
//            'quantity' => '10',
//            'price' => '99.000',
//            'created_at' => date('Y-m-d H:i:s'),
//            'updated_at' => date('Y-m-d H:i:s'),
//            'pro_category' => 1,
//        ],
//        [
//            'id' => 34,
//            'name' => 'Túi Vải Đa Năng 3',
//            'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
//                            gửi gắm trong mỗi căn phòng.',
//            'thumbnail' => env('CCCC').('/img/home-care/tui-vai-da-nang-3.webp'),
//            'quantity' => '10',
//            'price' => '99.000',
//            'created_at' => date('Y-m-d H:i:s'),
//            'updated_at' => date('Y-m-d H:i:s'),
//            'pro_category' => 1,
//        ],
//        [
//            'id' => 35,
//            'name' => 'Vải Che Đồ Dùng',
//            'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
//                            gửi gắm trong mỗi căn phòng.',
//            'thumbnail' => env('CCCC').('/img/home-care/vai-che-do-dung.webp'),
//            'quantity' => '10',
//            'price' => '29.000',
//            'created_at' => date('Y-m-d H:i:s'),
//            'updated_at' => date('Y-m-d H:i:s'),
//            'pro_category' => 1,
//        ],
//        [
//            'id' => 36,
//            'name' => 'Vòi Ấn 1',
//            'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
//                            gửi gắm trong mỗi căn phòng.',
//            'thumbnail' => env('CCCC').('/img/home-care/voi-an-1.webp'),
//            'quantity' => '10',
//            'price' => '69.000',
//            'created_at' => date('Y-m-d H:i:s'),
//            'updated_at' => date('Y-m-d H:i:s'),
//            'pro_category' => 1,
//        ],
//        [
//            'id' => 37,
//            'name' => 'Vòi Ấn 2',
//            'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
//                            gửi gắm trong mỗi căn phòng.',
//            'thumbnail' =>env('CCCC').('/img/home-care/voi-an-2.webp'),
//            'quantity' => '10',
//            'price' => '69.000',
//            'created_at' => date('Y-m-d H:i:s'),
//            'updated_at' => date('Y-m-d H:i:s'),
//            'pro_category' => 1,
//        ],
//        [
//            'id' => 38,
//            'name' => 'Vòi Ấn 3',
//            'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
//                            gửi gắm trong mỗi căn phòng.',
//            'thumbnail' => env('CCCC').('/img/home-care/voi-an-3.webp'),
//            'quantity' => '10',
//            'price' => '69.000',
//            'created_at' => date('Y-m-d H:i:s'),
//            'updated_at' => date('Y-m-d H:i:s'),
//            'pro_category' => 1,
//        ],
//        [
//            'id' => 39,
//            'name' => 'Vòi Ấn 4',
//            'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
//                            gửi gắm trong mỗi căn phòng.',
//            'thumbnail' =>env('CCCC').('/img/home-care/voi-an-4.webp'),
//            'quantity' => '10',
//            'price' => '69.000',
//            'created_at' => date('Y-m-d H:i:s'),
//            'updated_at' => date('Y-m-d H:i:s'),
//            'pro_category' => 1,
//        ],
//        [
//            'id' => 40,
//            'name' => 'Vòng Gốm Đựng Bàn Chải 1',
//            'description' => 'Hương Vani, các giác quan của bạn sẽ cảm nhận được từng thành phần nhiên liệu tự nhiên được
//                            gửi gắm trong mỗi căn phòng.',
//            'thumbnail' => env('CCCC').('/img/home-care/vong-gom-dung-ban-chai-1.webp'),
//            'quantity' => '10',
//            'price' => '89.000',
//            'created_at' => date('Y-m-d H:i:s'),
//            'updated_at' => date('Y-m-d H:i:s'),
//            'pro_category' => 1,
//        ]
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
            'pro_category' => 1,
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
            'pro_category' => 1,
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
            'pro_category' => 1,
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
            'pro_category' => 1,
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
            'pro_category' => 1,
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
            'pro_category' => 1,
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
            'pro_category' => 1,
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
            'pro_category' => 1,
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
            'pro_category' => 1,
        ],
        [
            'id' => 51,
            'name' => 'Bàn Chải Tre',
            'description' => 'Lại Đây cảm ơn bạn vì đã chọn một chiếc bàn chải tre thay vì một chiếc bàn chải nhựa để bảo vệ răng miệng cũng như là hành tinh này. Bàn chải tre của Lại Đây có cán làm bằng tre tự nhiên và lông bàn chải làm từ sợi tre được carbon hoá.

Với thiết kế đơn giản, tay cầm thuận tiện, và đầu bàn chải vừa vặn, em bàn chải tre sẽ chạm đến và làm sạch những ngóch ngách bên trong khoang miệng của bạn. Cũng giống như các loại bàn chải khác, các bạn nên thay bàn chải sau từ 3-5 tháng đảm bảo an toàn vệ sinh và lông bàn chải vẫn sử dụng tốt.

Bạn có thể tái chế thân bài chải khi không dùng được nữa, nhưng lông bàn chải chưa hoàn toàn phân huỷ được nên các bạn hãy tách lông bàn chải bằng kìm và cho vào thùng rác nhé.',
            'thumbnail' => env('CCCC').('/img/personal-care/ban-chai-tre.webp'),
            'quantity' => '10',
            'price' => '79.000',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'pro_category' => 2,
        ],
        [
            'id' => 52,
            'name' => 'Bao Tay Tắm',
            'description' => 'Bao tay tắm xơ mướp.',
            'thumbnail' => env('CCCC').('/img/personal-care/bao-tay-tam.webp'),
            'quantity' => '10',
            'price' => '77.000',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'pro_category' => 2,
        ],
        [
            'id' => 53,
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



Hướng Dẫn Vệ Sinh

-       Vệ sinh: Dùng bàn chải cọ rửa bên trong. Khi bình bị dính bẩn hoặc đóng cặn, pha loãng dấm và nước (1:2) hoặc vắt nước khoảng 1-2 quả chanh rồi ngâm bên trong hơn 2 tiếng, sau đó rửa lại bình thường.

-       Chú Ý: Không rửa bình Thermos bằng máy rửa chén. Nếu thân bình bằng thủy tinh, KHÔNG sử dụng cọ rửa xơ cứng hay kim loại.

Bảo Quản

-       Bảo quản ở nơi khô ráo khi không sử dụng.

-       Không nên làm rớt bình vì sẽ ảnh hưởng tới chất lượng lưu giữ nước.

-     Rửa bình ngay sau khi sử dụng để tránh ám mùi từ thức uống trước.',
            'thumbnail' => env('CCCC').('/img/personal-care/binh-nuoc-giu-nhiet.webp'),
            'quantity' => '10',
            'price' => '429.000',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'pro_category' => 2,
        ],
        [
            'id' => 54,
            'name' => 'Bình Nước Giữ Nhiệt Cầu Vồng',
            'description' => 'Rainbow Double Walled Thermos Tumbler - Classic Bottle Shape - 500ml

Bình nước giữ nhiệt thép không gỉ - kiểu chai nước - Bảy sắc cầu vồng - 500ml



Vật liệu: phần lõi bên trong bình: inox 304 & phần vỏ ngoài bình là inox 201 stainless steel

structure

Đặc điểm: 2 thành, y như bình giữ nhiệt kim loại hay bình classico

Dung tích:500ml

Khả năng giữ nhiệt (nóng/lạnh):12-24 hours

Màu sắc: 2 lựa chọn - dinh kem

Shape: cổ điển "cái chai" .',
            'thumbnail' => env('CCCC').('/img/personal-care/binh-nuoc-giu-nhiet-cau-vong.webp'),
            'quantity' => '10',
            'price' => '429.000',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'pro_category' => 2,
        ],
        [
            'id' => 55,
            'name' => 'Bông Tắm Xơ Mướp',
            'description' => 'Bông Tắm Xơ Mướp / Bath & Shower Loofah Pad - Oval.',
            'thumbnail' => env('CCCC').('/img/personal-care/bon-tam-xo-muop.webp'),
            'quantity' => '10',
            'price' => '39.000',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'pro_category' => 2,
        ],
        [
            'id' => 56,
            'name' => 'Bông Ngoáy Tai Thân Giấy Lớn',
            'description' => '
Home / Home Care / Bông Ngoáy Tai Thân Giấy Lớn / Cotton Bud with Paper Stem Big
Nhịp sống hối hả ngày nay luôn hướng chúng ta đến việc sử dụng ngày càng nhiều các sản phẩm tiện lợi, bông ngoáy tai là một trong những vật dụng thải ra nhựa dùng một lần được dùng nhiều nhất mà chúng ta ít để ý tới. Bạn có biết mỗi năm số lược thân nhựa của bông ngoáy tai được tìm thấy ở biển cũng nhiều không kém gì ống hút nhựa không?

Ở Lại Đây, thân của bông ngoáy tai được thay thế hoàn toàn bằng giấy tái chế, vì thế, nó có thể được phân hủy 100% ở ngoài môi trường. Thử hình dung số lượng bông ngoáy tai mà bạn thải ra mỗi tuần, bằng việc sử dụng bông ngoáy tai thân giấy thôi bạn đã góp phần giảm áp lực lên môi trường rất nhiều rồi đấy.

Kích thước đầu bông ngoáy tai có hai cỡ lớn và nhỏ, phù hợp cho cả người lớn và trẻ em.',
            'thumbnail' => env('CCCC').('/img/personal-care/bong-ngoay-tai.webp'),
            'quantity' => '10',
            'price' => '45.000',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'pro_category' => 2,
        ],
        [
            'id' => 57,
            'name' => 'Bông Tẩy Trang Vải',
            'description' => 'Một trong những vật dụng tối cần thiết của phe con gái chúng mình. Da của chúng mình rất cần được thở sau một ngày dài mang trên mình lớp trang điểm hoặc đơn giản nó cần được rửa sạch bụi bẩn chúng mình gặp phải khi đi ra ngoài, vì thế bước tẩy trang là rất rất cần thiết. Làm đẹp cho bản thân mình là điều tốt, nhưng mà sau khi làm cho bản thân đẹp mà gây ra điều xấu cho môi trường thì cũng không vui tí nào đúng không nè? Vì thế, bông tẩy trang vải đã được ra đời để cho các bạn yên tâm làm đẹp. Bông tẩy trang được làm bằng vải sợi tre, giúp tẩy sạch mọi vết bẩn trên một cách nhẹ nhàng, và còn có thể giặt đi giặt lại sử dụng nhiều lần. Nếu dùng luân phiên 3-4 bông tẩy trang một lần, tuổi thọ của các em ấy có thể lên tới 9 đến 12 tháng nếu bạn bảo quản đúng cách.

Vệ sinh bông tẩy trang cũng rất đơn giản, mỗi khi dùng xong bạn có thể giặt tay ngay với nước hoặc cho thêm một ít xà bông nếu bạn dùng những sản phẩm trang điểm long-lasting. Hoặc bạn có thể cho vào một túi lưới riêng nếu giặt bằng máy giặt.',
            'thumbnail' => env('CCCC').('/img/personal-care/bong-tay-trang.webp'),
            'quantity' => '10',
            'price' => '35.000',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'pro_category' => 2,
        ],
        [
            'id' => 58,
            'name' => 'Bột Biển Rửa Mặt Than Tre Hoạt Tính',
            'description' =>   'Origin: China

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

Treo/ giữ Bọt ở nơi khô thoáng.

Thay thế Bọt Konjac Than Tre sau 3-4 tuần sử dụng. ',
            'thumbnail' => env('CCCC').('/img/personal-care/bot-bien-rua-mat-than-tre.webp'),
            'quantity' => '10',
            'price' => '79.000',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'pro_category' => 2,
        ],
        [
            'id' => 58,
            'name' => 'Bột súc miệng thảo mộc',
            'description' =>'BỘT SÚC MIỆNG THẢO MỘC REFILL



Giá: 1.000đ/ gram.



Bột súc miệng thảo mộc 100% organic từ tinh dầu bạc hà, bột quế, đá muối hồng Himalaya, bột vỏ cam khô và trà xanh. Sản phẩm dạng bột mịn, màu xanh nâu của thảo mộc, có hương quế và mùi bạc hà đặc trưng. Trong thành phần không chứa alcohol, phù hợp các bạn có răng nướu nhạy cảm và vì là dạng bột nên thuận tiện để xách đi du lịch, mang lên máy bay.



Cách sử dụng rất đơn giản, bạn chỉ cần hòa tan 2 gram bột với 70ml nước ấm, súc miệng ngày 2-3 lần hoặc sau mỗi bữa ăn để đảm bảo khoang miệng được sạch sẽ, chống hôi miệng, viêm niêm mạc, sát khuẩn cổ họng, giúp răng nướu chắc khỏe và chống mảng bám rất tốt.

Lại Đây không đóng sẵn bột trong hũ hay gói mà để bạn có thể tự do mang theo bất kì chai lọ hay túi giấy có sẵn mà bạn yêu thích và mua theo khối lượng mình cần và có thể quay lại để refill khi hết.



LƯU Ý

Không sử dụng khi có tiền lệ kích ứng với thành phần của sản phẩm

Hiệu quả khác nhau phụ thuộc vào cơ địa của mỗi người.

Nên sử dụng trên một vùng da nhỏ ở cổ tay hoặc gò má để kiểm tra độ phù hợp với sản phẩm.

Không sử dụng nếu dị ứng với các thành phần của sản phẩm.

Dừng sử dụng ngay khi có dấu hiệu dị ứng như mẩn đỏ, ngứa.',
            'thumbnail' => env('CCCC').('/img/personal-care/bot-suc-mieng-thao-moc.webp'),
            'quantity' => '10',
            'price' => '1.000',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'pro_category' => 2,
        ],
        [
            'id' => 59,
            'name' => 'Chỉ nha khoa bằng tơ thiên nhiên, kèm lọ thủy tinh',
            'description' =>'Trước đây chỉ nha khoa được sử dụng phổ biến rộng rãi nhờ vào khả năng làm sạch bất ngờ và vì sự tiện dụng của nó. Nhưng những nghiên cứu đã chỉ ra trong một số loại chỉ nha khoa có chứa pfcs -perfluorinated polymers, chất có thể gây ra những bệnh tuyến giáp, làm mất ổn định hormones, tổn thương hệ thống miễn dịch, sinh sản bị suy giảm và ảnh hưởng đến sự phát triển của thai nhi thì từ đó, chỉ nha khoa bằng tơ tự nhiên được ra đời. Hộp chỉ làm bằng thủy tinh, tơ tự nhiên phân hủy hoàn toàn trong 60-90 ngày và bên cạnh đó chúng mình cũng có thể mua chỉ refill chứ không phải mua một chiếc lọ mới khiến loại chỉ này trở thành một bước đột phá trong quá trình thế giới phát triển bền vững hơn !
Kích thước : Lọ cao 5cm với 60m chỉ nha khoa.',
            'thumbnail' => env('CCCC').('/img/personal-care/chi-nha-khoa-kem-lo-thuy-tinh.webp'),
            'quantity' => '10',
            'price' => '319.000',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'pro_category' => 2,
        ],
        [
            'id' => 60,
            'name' => 'Cốc Nguyệt San',
            'description' =>'Nơi sản xuất: Sản xuất và nhập khẩu tại Hoa Kỳ

Kích thước:

Trọng lượng: 300g/bộ sản phẩm

Đặc điểm: OVACUP là sản phẩm thay thế băng vệ sinh trong kỳ nguyệt san, giảm nguy cơ mắc các bệnh phụ khoa và giảm thiểu rác thải ra môi trường. OVACUP mang lại sự thoải mái và khô thoáng giúp cho phụ nữ Việt có một kỳ kinh nguyệt nhẹ nhàng và hạnh phúc hơn.

Ưu điểm của cốc nguyệt san:

- Tạo cảm giác khô thoáng, dễ chịu, hạn chế tối đa khả năng rò rỉ trong kỳ kinh nguyệt.

- Chất liệu an toàn, không chứa hóa chất độc hại.

- Không gây kích ứng và loại bỏ hoàn toàn nguy cơ sốc nhiễm độc (TSS).

- Thời gian sử dụng tối đa cho một lần dùng cốc lên tới 12h.

- Thoải mái vận động: luyện tập, đi bơi, đi du lịch ngay cả trong những ngày đèn đỏ.

- Thân thiện với môi trường, tái sử dụng trong vòng 5 - 10 năm.',
            'thumbnail' => env('CCCC').('/img/personal-care/coc-nguyet-san.webp'),
            'quantity' => '10',
            'price' => '499.000',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'pro_category' => 2,
        ],
        [
            'id' => 60,
            'name' => 'Cốc Nguyệt San',
            'description' =>'Nơi sản xuất: Sản xuất và nhập khẩu tại Hoa Kỳ

Kích thước:

Trọng lượng: 300g/bộ sản phẩm

Đặc điểm: OVACUP là sản phẩm thay thế băng vệ sinh trong kỳ nguyệt san, giảm nguy cơ mắc các bệnh phụ khoa và giảm thiểu rác thải ra môi trường. OVACUP mang lại sự thoải mái và khô thoáng giúp cho phụ nữ Việt có một kỳ kinh nguyệt nhẹ nhàng và hạnh phúc hơn.

Ưu điểm của cốc nguyệt san:

- Tạo cảm giác khô thoáng, dễ chịu, hạn chế tối đa khả năng rò rỉ trong kỳ kinh nguyệt.

- Chất liệu an toàn, không chứa hóa chất độc hại.

- Không gây kích ứng và loại bỏ hoàn toàn nguy cơ sốc nhiễm độc (TSS).

- Thời gian sử dụng tối đa cho một lần dùng cốc lên tới 12h.

- Thoải mái vận động: luyện tập, đi bơi, đi du lịch ngay cả trong những ngày đèn đỏ.

- Thân thiện với môi trường, tái sử dụng trong vòng 5 - 10 năm.',
            'thumbnail' => env('CCCC').('/img/personal-care/coc-nguyet-san.webp'),
            'quantity' => '10',
            'price' => '499.000',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'pro_category' => 2,
        ],
    ];
    $newData = [];

    foreach ($data as $item){

        $img = str_replace('http://127.0.0.1:8000', public_path(), $item['thumbnail']);

        Cloudder::upload($img, null);
        $re = Cloudder::getResult();

        $thumbnail_id = $re['public_id']. '.'. $re['format'];

        $item['thumbnail'] = $thumbnail_id;

        array_push($newData,$item);

    }

    file_put_contents(storage_path().'/data.txt',var_export($newData,true));
//    return 'done';

});
