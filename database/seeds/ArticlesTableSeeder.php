<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('articles')->truncate();
        DB::table('articles')->insert([
           [
               'id'=> 1,
               'user_id'=> 1,
               'title' => 'Môi Trường Là Gì, Biện Pháp Bảo Vệ Môi Trường',
               'thumbnail'=> '20190528-X7nXC70Zeu7v9IBweGI0_lzufcl',
               'description'=> 'Duy trì một môi trường trong lành nơi chúng ta đang sinh sống là việc hết sức quan trọng đối với tất cả mọi người, nhưng đặc biệt quan trọng hơn nếu trẻ em được tìm hiểu về môi trường, vì đây là thế hệ sẽ tạo ra các thay đổi trong tương lai, có thể ngăn chặn hoặc đẩy lùi các vấn đề như hâm nóng toàn cầu hay nạn chặt phá rừng.',
               'detail'=>'Duy trì một môi trường trong lành nơi chúng ta đang sinh sống là việc hết sức quan trọng đối với tất cả mọi người, nhưng đặc biệt quan trọng hơn nếu trẻ em được tìm hiểu về môi trường, vì đây là thế hệ sẽ tạo ra các thay đổi trong tương lai, có thể ngăn chặn hoặc đẩy lùi các vấn đề như hâm nóng toàn cầu hay nạn chặt phá rừng.

Một trong những câu hỏi có thể bé sẽ hỏi khi bạn nhắc đến chủ đề này là “Môi trường là gì?”, và đôi khi đây là một câu hỏi không hề đơn giản để trả lời đối với các bậc cha mẹ.

Môi trường là tất cả những gì xung quanh chúng ta – không khí, cây xanh, động vật – tất cả mọi thứ! Sự rộng lớn của môi trường có thể khiến bé khó hình dung nhưng cũng không sao – điều quan trọng hơn là làm sao để trẻ hiểu được rằng việc bảo vệ môi trường là điều cần thiết để duy trì một cuộc sống hạnh phúc và lành mạnh. Dưới đây là một số mẹo nhỏ từ OMO để giúp con bạn tìm hiểu về môi trường và cách bảo vệ nó!

Tại Sao Phải Bảo Vệ Môi Trường?
Câu hỏi tiếp theo con bạn có thể hỏi là “Tại sao phải bảo vệ môi trường?”. Câu hỏi này thực ra lại dễ trả lời và giải thích hơn. Chỉ với một vài thay đổi và đóng góp trong biện pháp bảo vệ môi trường tại nhà, chúng ta có thể đóng góp cải tạo môi trường, giúp đảm bảo rằng con cái chúng ta và cả thế hệ tương lai, được sống trong một thế giới hạnh phúc và lành mạnh. Dù bạn có tin hay không, nhưng mỗi người đều có thể tạo ra sự khác biệt!

Biện Pháp Bảo Vệ Môi Trường
Bạn cần nhớ rằng bảo vệ môi trường không hề khó khăn. Nó không hề tốn kém (mà ngược lại nó có thể giúp bạn tiết kiệm một khoản không nhỏ!), không hề phức tạp, và thậm chí một vài thay đổi nhỏ cũng có thể tạo ra ảnh hưởng lớn. Dưới đây là một số cách đơn giản mà bạn và con có thể làm để bảo vệ môi trường:

Tái chế:
Nhiều người không quan trọng việc tái chế rác. Nhưng bằng việc phân loại các đồ tái chế như nhựa, bìa và giấy, chúng ta có thể làm giảm sự phân huỷ rác đồng thời ngăn chặn tác hại của nạn chặt phá rừng. Thay vì sử dụng túi nilon để đựng thức ăn trưa mang đi làm, bạn có thể đầu tư mua các loại hộp tái sử dụng để có thể rửa và dùng cho lần sau.

Ở trường học, con bạn cũng có thể hỏi các thầy cô giáo nơi đựng rác tái chế hoặc sử dụng giấy tái chế thay vì giấy mới.

Bảo Vệ Nước:
Bạn có để nước chảy lãng phí khi đánh răng không? Đó thực sự rất phí phạm, đặc biệt ở một số nơi nguồn nước đó có thể dùng làm nước uống. Khi đánh răng, bạn hãy tắt vòi nước nếu không dùng đến. Bạn cũng có thể tiết kiệm nước khi giặt giũ bằng cách cho đầy một mẻ giặt vào trong máy giặt (điều này còn giúp tiết kiệm năng lượng nữa!).

Các bé lớn hơn có thể giúp tiết kiệm nước trong gia đình bằng cách tìm hiểu về loại vòi hoa sen tiết kiệm nước, hoặc đo thời gian mỗi lần tắm – bằng cách này con bạn có thể thấy được lượng nước mà chúng tiết kiệm được mỗi lần.

Đi bộ và Đạp xe:
Khuyến khích bé đi bộ hoặc tự đạp xe thay vì chở bé đi học là một cách tốt nếu như có thể, điều này không chỉ tốt cho môi trường mà còn giúp ích cho chính cháu nữa. Có thể bạn đã biết rằng, khói xăng dầu rất gây hại đến môi trường, vì thế khuyến khích con sử dụng các phương tiện di chuyển khác mà không gây ra “khói cacbon” là tốt nhất. Hơn nữa, việc này cũng giúp con hoạt động để luôn giữ được sức khoẻ và sự năng động.

Bạn đã khi nào nói chuyện với con về việc bảo vệ môi trường chưa? Bạn có giúp con thực hiện các hoạt động tại nhà và ở trường để cải thiện môi trường sống không? Hãy chia sẻ với chúng tôi cách làm của bạn nhé!',
               'created_at' => '2018-06-12 05:47:42',
               'updated_at' => '2019-09-12 03:47:42',
           ],

           [
               'id'=> 2,
               'user_id'=> 2,
               'title'=> 'Vậy làm sao để bắt đầu lối sống xanh?',
               'thumbnail'=> 'images_k5aq4c',
               'description'=> 'Đây có lẽ một trong những câu hỏi mà mọi người đang đặt ra, nhưng bạn có biết chúng ta đều phải mất 21 ngày để thay đổi một thói quen mới?Và để bắt đầu một thói quen mới, chính mình phải thay đối cách nhìn cuộc sống này, vì chỉ khi ta thay đổi từ trong ta, những thứ xung quanh mới bắt đầu thay đổi. ',
               'detail'=> '1.Thở để cảm.

Chúng ta không thể sống nếu không thở, nhưng bao lâu rồi chúng ta không thật để ý đến việc thở? Cái thở của việc để tâm và không để tâm nó khác nhau thế nào? Cái thở của một bầu không khí thật sạch và ngược lại thì sẽ như thế nào? Đều là những câu hỏi, nhưng chính cảm nhận của chúng ta là hiểu được câu trả lời rõ nhất. Và lý trí giúp ta biết được làm sao để luôn được thở trong một bầu không khí sạch và mát như cái cảm giác mỗi buổi sáng, ngập mình trong sương, những cơn gió nhẹ bay qua hàng vai và ta yêu sao cái hơi thở đầu tiên trong ngày ấy, thật bình yên và nhẹ nhàng.

2.Nghĩ về những điều tốt đẹp. 

Để dễ hiểu hơn, hãy nghĩa cái đẹp như một nguồn năng lượng. Đừng chỉ sử dụng năng lượng ấy trong một thời điểm cụ thể, mà hãy mang những nguồn năng lượng ấy là những suy nghĩ tốt đẹp vào trong mọi thời điểm ta đang thở hoặc bất cứ lúc nào trong cuộc đời bạn, để suy nghĩ của ta luôn được nhận thức, để đưa chúng vào hành động. Vì chỉ có những suy nghĩ về những cái đẹp mới có thể sống và hướng đến cái đẹp, cho mình, cho người và cho cuộc đời này.

“The foundation of spiritual life is the thought, so the essence of the religious life is inner discipline, the discipline of the mind.” - (Archimandrite Theophil Paraian, “Words to Youth”)
3. Sống một cuộc sống bền vững. 

Có lẽ, chúng ta sinh ra trong một hoàn cảnh khác nhau, môi trường khác nhau. Nhưng chúng ta lại sống chung với nhau trên 1 hành tinh, 1 bầu không khí, và được lớn lên cùng 1 nguồn tài nguyên. Nhưng bền vững nghĩa là gì? Thật ra bền vững giống một một vòng tròn khép kín, được lặp đi lặp lại và được duy trì đúng bản chất ban đầu. Chúng ta, là thế hệ đang sống trong hiện tại, tiếp nối và đang sống trong vòng tròn ấy, có trách nhiệm là tiếp tục duy trì vòng tròn và bảo vệ để thế hệ tiếp theo vẫn được sống đúng như bản chất ban đầu, như cách chúng ta được nhận. Vậy nên sự hiện diện của ta không chỉ là sự tồn tại, mà là sống vì một mục đích tốt đẹp, hãy tìm ra mục đích ấy và bắt đầu một cuộc sống bền vững. Vì tương lai là trái ngọt của hạt mầm hôm nay tao gieo. Hãy yêu thương nhau như cách chúng ta đang sống chung với nhau trên cùng 1 hành tinh, 1 bầu không khí. 

4. Bắt đầu trồng cây. 

Chúng ta sẽ sống như thế nào nếu không có  cây xanh hoặc thiên nhiên? Chúng ta hiểu được cần phải có cây xanh nhưng chúng ta đã hiểu hết về những ưu điểm mà thiên nhiên mang lại cho con người chưa? Bạn có thể tham khảo gần 20 lý do tại đây:https://greentumble.com/20-reasons-why-we-should-plant-trees/Nếu bạn đang nuôi dưỡng niềm hy vọng, hãy bắt đầu từ việc trồng cây. Quá trình trồng cây cũng là quá trình ta học được rất nhiều về chính con người mình, về cuộc sống này và những điều nhìn là nhỏ bé ấy mang lại cho bạn. 

“All our wisdom is stored in the trees.” - Santosh Kalwar 
5. Thay đổi chính mình.Tìm một giải pháp để bắt đầu “Lối sống xanh" thật sự không khó, nó chỉ khó khi chúng ta thiếu niềm tin. Và niềm tin ấy chỉ bắt đầu, khi và chỉ khi bên trong ta bắt thôi thúc. Và khi chúng ta bắt đầu thay đổi chính mình, những suy nghĩ của chúng ta về môi trường không phải là một xu hướng, mà từ lâu nó đã là một phần trách nhiệm, chỉ là ta vẫn đợi đến khi kết quả xấu đi, ta mới bắt đầu nghĩ về nó nhiều hơn. 

Nếu 20 năm tiếp theo, ta lại tự hỏi vì sao 20 năm trước tôi không bắt đầu?

Nếu 20 năm tiếp theo, ta cảm thấy biết ơn vì ta đã bắt đầu. 

Vậy bạn của ngày hôm nay, sẽ chọn câu nói nào cho 20 năm tiếp theo?',
               'created_at' => '2018-07-12 03:47:42',
               'updated_at' => '2019-02-12 06:40:42',
           ],
           [
               'id'=> 3,
               'user_id'=> 1,
               'title'=> 'Từ bỏ ống hút nhựa để bảo vệ môi trường: Không phải cứ thay bằng ống tre, inox... là tốt',
               'thumbnail'=> 'photo1552286341605-1552286341918-crop-15522864630421255258773_nzajnp.jpg',
               'description'=> 'Con người đang hướng đến một tương lai không có rác nhựa, trong đó đối tượng đầu tiên được hướng đến là ống hút nhựa. Tuy nhiên, việc thay thế ống hút nhựa cần phải thực hiện đúng cách, nếu không muốn hậu quả xấu xảy ra.',
               'detail'=> 'Mọi hoạt động của con người đều để lại rác thải

"Rác" thực ra là một khái niệm rộng hơn bạn tưởng. Nó không chỉ là những gì bạn thải ra mỗi ngày, mà sản phẩm thừa từ quá trình sản xuất công nghiệp - như khí thải của các nhà máy - cũng được gọi là rác.

Cứ như vậy, mỗi năm con người thải ra môi trường cả trăm triệu tấn rác. Trong đó, thứ hiện đang là một cơn khủng hoảng trên toàn thế giới, khiến cho cả nhân loại đau đầu nhất thì không đâu khác chính là rác nhựa.

Theo báo cáo của Liên Hợp quốc (LHQ) vào năm 2015, có 500 tỷ túi nhựa đang được tiêu thụ trên toàn thế giới, và sẽ có thêm 33 tỷ tấn nhựa được sản xuất vào năm 2050. Cũng từ số liệu của LHQ, mỗi năm số rác nhựa lọt ra ngoài đại dương lên tới cả chục triệu tấn.
Tác hại của nhựa dĩ nhiên là rất khủng khiếp. Nhựa là một dạng vật liệu được các nhà khoa học ví là "bất tử", do độ bền kinh khủng của chúng trước các tác động tự nhiên. Một mảnh rác nhựa nhỏ bé có thể lênh đênh trên đại dương cả trăm năm mà vẫn không phân hủy, để rồi lạc trôi vào dạ dày của sinh vật biển nào đó và khiến chúng chết dần chết mòn.

Phong trào Zero Waste và câu chuyện về ống hút nhựa - loại rác cần thải loại đầu tiên
Trước cơn khủng hoảng rác và rác nhựa nói riêng, các cộng đồng hoạt động vì môi trường trên thế giới đang lan tỏa chiến dịch mang tên Zero Waste - phong cách sống không rác thải - hướng đến một cuộc sống nơi rác được giảm càng nhiều càng tốt.

Nếu theo Zero Waste, bạn sẽ phải tìm cách biến cuộc sống của mình thành một vòng tròn khép kín trên khía cạnh rác thải. Mọi thứ xung quanh bạn phải được tái sử dụng một cách triệt để nhưng an toàn, hướng đến tái chế 100%. Và với tiêu chí này, loại rác đầu tiên cần giải quyết chính là các ống hút nhựa.

Bên cạnh túi nylon, ống hút là vật dụng nhựa phổ biến nhất. Bất cứ khi nào bạn gọi một ly nước, sẽ có chiếc ống hút nhựa được cắm vào đó. Vấn đề là ống hút nhựa không thể tái chế, người ta buộc phải vứt chúng đi, và từ đó có thể dẫn đến những hậu quả nghiêm trọng nếu ống hút lọt ra ngoài đại dương.

Hệ quả của ống hút nhựa có thể là rất lớn, bởi vậy nên nhiều quốc gia trên thế giới đã có những động thái nghiêm khắc hơn liên quan đến nó. Như người Anh, họ cấm sử dụng ống hút nhựa tại hàng quán cafe. Hay ở Hàn Quốc, chính phủ cũng đưa ra bản thông báo sẽ loại bỏ hoàn toàn ống hút và cốc nhựa tại các cửa hàng cafe và điểm công cộng vào năm 2027.

Khi từ bỏ ống hút nhựa, chúng ta phải có giải pháp thay thế. Các cộng đồng Zero Waste vì vậy đã kêu gọi mọi người chuyển sang sử dụng ống hút làm từ tre, inox hoặc thủy tinh - những vật liệu thân thiện với môi trường hoặc cho phép tái sử dụng nhiều lần, từ đó giảm đi tổng lượng rác thải con người tạo ra mỗi năm.

Không đơn giản là từ bỏ và thay thế
Nhiều người cho rằng chỉ cần thay ống hút nhựa thành ống tre, ống inox, ống thủy tinh... hoặc tuyệt nhất là từ bỏ ống hút là mọi chuyện sẽ được giải quyết. Viễn cảnh tươi đẹp ấy xét cho cùng thực sự đáng mong đợi. Tuy nhiên, câu chuyện không dễ dàng như vậy.

Không phải tự nhiên người ta gọi ống hút nhựa là một trong những phát minh quan trọng của loài người. Ống hút rẻ, rất rẻ - bạn có thể dễ dàng mua cả trăm cái ống hút nhựa với mức giá chỉ chưa đến 10.000 đồng. Chính vì rẻ nên các ứng dụng của nó trở nên tiện lợi hơn: hàng quán nào cũng có, và khi uống xong chỉ việc vứt vào thùng rác là xong chuyện.
Nhưng quan trọng nhất có lẽ là tính vệ sinh. Với ống hút, bạn sẽ không bao giờ thấy cảnh vụn thức ăn rơi vãi trong cốc, cũng như cảm giác chịu đựng khi "chung mồm" với hàng trăm khách hàng mỗi lần uống nước ngoài quán. Việc chung đụng ấy thực sự không an toàn, vì nó làm tăng nguy cơ lây nhiễm các chứng bệnh nguy hiểm như viêm gan B.

Chị em cũng sẽ không phải nhìn những vết son môi đầy ám ảnh trên miệng cốc. Và đặc biệt, ống hút là một cứu cánh quan trọng dành cho những số phận không may bị tật nguyền, hoặc rơi vào tình huống không thể tự mình nhấc cốc lên được.

Tóm lại, ống hút tạo ra được vị thế như ngày hôm nay hoàn toàn là nhờ đến 3 yếu tố: Tiện, Sạch và Rẻ. Xét trên cả 3 tiêu chí, các sản phẩm thay thế hiện nay hầu như đều chưa thể đáp ứng được.

Về tính tiện dụng, hiển nhiên ống hút tre, inox hay thủy tinh đều không thể so sánh, vì chúng là các sản phẩm được sử dụng nhiều lần. Ống hút bằng giấy thì đáp ứng được yếu tố rẻ và tiện, nhưng không bền và rất dễ mủn.

Cá biệt có ống hút làm bằng cỏ - vừa đảm bảo được sự tiện dụng khi là loại dùng một lần, vừa được làm từ chất liệu thân thiện với môi trường - thì lại có giá thành tương đối cao.
Ống hút tre, ống inox và ống thủy tinh là 3 loại chất liệu được tin dùng để thay thế cho ống hút nhựa, nhưng cách dùng thì chưa thực đúng.
Dù sao 2 vấn đề trên cũng không quá khó để giải quyết, khi chúng ta có thể hy sinh sự tiện dụng một chút để bảo vệ môi trường. Nhưng yếu tố vệ sinh thì thực là nan giải.

Hãy tưởng tượng đến cảnh các nhà hàng, quán ăn chuyển hết sang ống inox, ống tre hoặc thủy tinh. Lợi điểm duy nhất là lượng rác nhựa thải ra sẽ giảm đi, nhưng câu chuyện "chung đụng" còn trở nên tệ hại hơn vì bạn phải uống nước tại đúng vị trí mà cả trăm người khác từng uống.

Hơn nữa, do đặc tính nhỏ gọn nên các loại ống hút cần nhiều công sức hơn để cọ rửa, và hiển nhiên bạn sẽ chẳng thể đảm bảo chiếc ống bạn đang dùng đã được vệ sinh kỹ càng hay chưa. Và nếu xét trên khía cạnh này, việc dùng đi dùng lại ống hút tre ngoài hàng quán sẽ chẳng khác là bao so với việc tái sử dụng một chiếc ống hút nhựa cả.

Loại bỏ ống hút nhựa là đúng, nhưng cần phải biết cách
Tác hại của nhựa đến môi trường là rất nghiêm trọng, nên sự thật là chúng ta vẫn phải tìm cách từ bỏ ống hút nhựa. Nhưng vấn đề là phải làm cho thật đúng cách.

Với các loại ống hút sử dụng nhiều lần, cách đúng đắn nhất là mỗi chúng ta phải tự trang bị lấy ống hút cho riêng mình. Hãy tập thói quen mang theo mình một chiếc ống hút loại tốt, kèm hộp đựng kín mỗi khi đi ra ngoài. Khi sử dụng xong, bạn có thể mang đi rửa, hoặc đơn giản chỉ cần hút lấy một ít nước lọc rồi cất đi, rồi về nhà vệ sinh lại cho cẩn thận hơn.
Ngoài ra như đã đề cập ở trên thì hiện tại, một số doanh nghiệp cũng đang rất nỗ lực tìm cách loại bỏ ống hút nhựa bằng một số sản phẩm thay thế có tính thân thiện hơn, như ống hút cỏ hoặc ống hút giấy.

Đặc biệt tại Hàn Quốc còn có giải pháp tuyệt vời hơn là ống hút làm từ gạo - cũng là loại dùng một lần, nhưng bạn có thể ăn luôn sau khi sử dụng nên hoàn toàn không để lại rác thải. Hơn nữa, ống hút gạo đủ bền để dùng với đồ uống nóng ít nhất là 2 - 3h, và lên đến 10h với nước lạnh.

Nhược điểm duy nhất của ống hút gạo - cũng như ống cỏ và ống giấy - là giá thành của chúng cao hơn. Nhưng theo đánh giá của nhiều chuyên gia, nếu như có thể sản xuất đại trà thì trong tương lai, các sản phẩm thân thiện với môi trường sẽ có mức giá thấp hơn hiện tại rất nhiều.',
               'created_at' => '2018-03-12 09:47:42',
               'updated_at' => '2019-09-21 02:27:32',
           ],
            [
                'id'=> 4,
                'user_id'=> 3,
                'title'=> 'BẠN CÓ BIẾT SỰ KHÁC NHAU GIỮA CÁC KHÁI NIỆM “GREEN”, “SUSTAINABLE”, “ECO-FRIENDLY”, “ETHICAL”, “FAIRTRADE”, “CLEAN”, “ORGANIC”, “NON-TOXIC”, VÀ “CONSCIOUS”?',
                'thumbnail'=> 'Green-Term-Deposit_original_tccnpd.jpg',
                'description'=> 'Green = tạm dịch “Xanh”

Sustainable = tạm dịch “Bền vững”

Eco-friendly = tạm dịch “thân thiện với môi trường, sinh thái”

Ethical = tạm dịch “Có đạo đức”

Fairtrade = tạm dịch “Thương mại bình đẳng”

Clean = tạm dịch “Sạch”

Organic = tạm dịch “Hữu cơ”

Non-Toxic = tạm dịch “Không độc hại”

Artisan = tạm dịch “Thủ công”

Conscious = tạm dịch “Có trách nhiệm, có ý thức”

Thoughful = tạm dịch “Sâu sắc, biết nghĩ cho người khác, biết nghĩ xa cho sau nay”',
                'detail'=> '“XANH”, “THÂN THIỆN VỚI MÔI TRƯỜNG” VÀ “BỀN VỮNG”

Ý nghĩa của từ "XANH" không còn đơn giản chỉ là để nói về một màu sắc. Hiện nay, từ ngữ này được sử dụng một cách liên tục trong ngôn ngữ giao tiếp thông thường để nói về hầu hết tất cả mọi thứ liên quan đến việc đem lại lợi ích cho môi trường, từ các hành động, phong trào cho đến cả trong kiến trúc và thời trang.

“THÂN THIỆN VỚI MÔI TRƯỜNG” thì lại không mang một nghĩa quá rộng. Nó nói tới một thứ gì đó không gây hại cho Trái Đất.

Còn “BỀN VỮNG” lại là thuật ngữ được định nghĩa chính xác nhất ở đây, và nó đại diện cho một phạm vi rộng các vấn đề và hoạt động, theo Liên Hợp Quốc, “Bền vững” có nghĩa là KHÔNG GÂY ẢNH HƯỞNG ĐẾN KHẢ NĂNG, CƠ HỘI CỦA THẾ HỆ TƯƠNG LAI TRONG VIỆC ĐÁP ỨNG, THOẢ MÃN NHU CẦU TRONG CUỘC SỐNG LÚC ĐÓ.

Sự bền vững chủ yếu hướng tới tương lai. Nó nói đến các công cụ hay hành động đang tạo ra giá trị lợi ích cho môi trường, xã hội và kinh tế, đồng thời không sử dụng quá nhiều tài nguyên hoặc gây ô nhiễm. Tất cả các khía cạnh này đều được bao hàm trong một từ “Bền vững”

So với ‘Xanh” và “Thân thiện với môi trường”, “Bền vững” có tiêu chuẩn cao hơn nhiều. Tính bền vững bao gồm các hoạt động thân thiện với môi trường và các sản phẩm xanh, nhưng “Xanh” lại không phải lúc nào cũng có nghĩa là “Bền vững”. Ví dụ, một sản phẩm được làm từ nguyên liệu tái tạo có thể được coi là xanh, nhưng nếu việc phân tích cả vòng đời của sản phẩm này chỉ ra rằng người ta đã phải dùng nhiều năng lượng để sản xuất và vận chuyển món hàng này, và nếu nó chưa có một phương pháp hợp lí để xử lý sản phẩm này sau khi dùng xong thì nó vẫn chưa được xem là bền vững.

Thành thật mà nói, không có nhiều sản phẩm trong thế giới đồ tiêu dùng ngoài kia thực sự bền vững. Mà thay vào đó là một số sản phẩm bền vững hơn một chút khi so sánh với các sản phẩm thay thế của nó.

“SẠCH”, “KHÔNG ĐỘC HẠI” VÀ “HỮU CƠ”

Nhu cầu tăng về các sản phẩm an toàn, chủ yếu là trong ngành công nghiệp chăm sóc sức khỏe và làm đẹp, đã tạo ra các thuật ngữ “SẠCH” và “KHÔNG ĐỘC HẠI”, và chúng khá là tương tự nhau. “Sạch” nói đến các thành phần, tự nhiên hoặc tổng hợp, không có hại cho sức khỏe của bạn. Sản phẩm “Không độc hại” thì không chứa các thành phần có thể gây hại cho sức khỏe hoặc môi trường. Khi nói về các sản phẩm làm đẹp hay sản phẩm làm sạch, sau này Lại Đây sẽ thường sử dụng “Không độc hại”, đơn giản vì nó chính xác và phù hợp hơn so với thuật ngữ lối sống sạch.

“HỮU CƠ” là một thuật ngữ có tính pháp lý, được USDA sử dụng để chứng nhận thực phẩm, sản phẩm làm đẹp và các sản phẩm nông nghiệp khác được sản xuất theo một phương pháp cụ thể - chủ yếu là không có hóa chất tổng hợp có hại cho môi trường và sức khỏe con người. Vì vậy, chúng ta chỉ sử dụng thuật ngữ này khi nói về thực phẩm, nhà hàng, sản phẩm làm đẹp... có sử dụng các thành phần được chứng nhận hữu cơ.

“CÓ ĐẠO ĐỨC”, “THƯƠNG MẠI BÌNH ĐẲNG” VÀ “THỦ CÔNG”

Kể từ những năm 1980, thương mại toàn cầu đã thay đổi tích cực hơn, đặc biệt là ở các khu vực đang phát triển của thế giới.

Nó bắt đầu với phong trào “THƯƠNG MẠI BÌNH ĐẲNG” để bảo vệ nhà sản xuất cà phê, ca cao và chè với mức giá thấp trên thị trường quốc tế. Đây là một thuật ngữ được định nghĩa chính xác và chỉ được sử dụng khi có chứng nhận từ một cơ quan quản lý quốc tế, như Chứng nhận Thương mại bình đẳng, Liên đoàn Thương mại bình đẳng, Trao đổi công bằng, hoặc Tổ chức Thương mại bình đẳng Thế giới. Lại Đây Refill sẽ chỉ sử dụng thuật ngữ này với các sản phẩm đã được chứng nhận và có một logo thể hiện điều này.

Xu hướng Thương mại CÓ ĐẠO ĐỨC nói đến các điều kiện làm việc của công nhân sản xuất quần áo, đồ chơi, thực phẩm và các sản phẩm khác cho các công ty đa quốc gia, cũng như việc họ được trả lương như thế nào cho công việc của mình. Đây là một thuật ngữ rộng không được chứng nhận hay được định nghĩa chính xác nhưng nó vẫn có tác dụng trong việc mô tả chung về loại sản phẩm mà bạn muốn mua.

Thuật ngữ “THỦ CÔNG” đi ngược lại với dây chuyền công nghiệp sản xuất sản phẩm. Các sản phẩm thủ công thường được làm bằng tay và được chế tạo với sự tự động hóa tối thiểu bởi những công nhân lành nghề ở các nước đang phát triển. Tuy nhiên, thực tế là một cái gì đó được làm bằng tay không có nghĩa là nó bền vững.

“CÓ TRÁCH NHIỆM, CÓ Ý THỨC” và “SÂU SẮC, BIẾT NGHĨ”

“CÓ TRÁCH NHIỆM, CÓ Ý THỨC” thường hướng đến nhận thức của người tiêu dùng và tiêu chuẩn cao về sức khoẻ và môi trường, tinh thần. Là người tiêu dùng có trách nhiệm tức là biết cách đọc và hiểu nhãn mắc, thông tin sản phẩm, và biết là với các sản phẩm bền vững, hữu cơ, thân thiện với động vật… thì chi phí bỏ ra sẽ phải cao hơn. “Có trách nhiệm, có ý thức” là từ chỉ về một lối sống, cũng là một từ để mô tả về con người, doanh nghiệp, hay cách nghĩ về đồ vật, chứ không hẳn là nói về sản phẩm cụ thể.

Trong khi đó, “SÂU SẮC, BIẾT NGHĨ” lại hướng về sự quan tâm đến nhu cầu của người khác, được thông tin đầy đủ về 1 đề tài nào đó để ra quyết định hay hình thành 1 quan điểm. “SÂU SẮC, BIẾT NGHĨ” thể hiện hết những ý, những từ nêu trên trong bài này, và nó có thể được xem như một mục tiêu bao quát. “Sâu sắc, biết nghĩ” còn vượt xa hơn cả việc trở thành một người mua hàng và một người tái chế có trách nhiệm. Mua sản phẩm địa phương là tốt, nhưng phương pháp phân tích khi nói về việc đọc các nhãn mác hay chọn loại bao bì thân thiện với môi trường chỉ là điểm khởi đầu.

Thực sự “SÂU SẮC, BIẾT NGHĨ “và nhận thức phải đi cùng việc theo đuổi một lối sống hoàn toàn mới, một lối sống ưu tiên sự tối giản, “less is more”. Chấp nhận “thời trang chậm”, là LỐI SỐNG MÀ VIỆC THIẾT KẾ, SẢN XUẤT, MUA SẮM, SỬ DỤNG CHUYỂN ĐỘNG CHẬM RÃI HƠN, CHÚNG TA MUA ÍT HƠN VÀ TẬP TỪ BỎ NHỮNG MÓN ĐỒ KHÔNG CẦN THIẾT. Tự nuôi trồng thức ăn hoặc mua thực phẩm tại cửa hàng của nông dân. Học cách tự làm các sản phẩm chăm sóc da với nguyên liệu tự nhiên. Làm sạch môi trường sống xung quanh bằng cách loại bỏ các chất gây ô nhiễm và bỏ thói bừa bộn. Bán và tặng những thứ không còn cần thiết với bạn nữa. Chọn cuộc sống với một ngôi nhà nhỏ nằm trong khu phố đi bộ và có phương tiện giao thông công cộng. Đọc nhiều tài liệu, sách báo có chất lượng về các chủ đề môi trường và nhân quyền, và hãy là một công dân “sâu sắc, biết nghĩ cho người khác, biết nghĩ cho sau này”.',
                'created_at' => '2018-01-12 05:47:42',
                'updated_at' => '2019-07-12 13:48:52',
            ],
           [
               'id'=> 5,
               'user_id'=> 2,
               'title'=> 'Sử dụng túi vải, ống hút tre: Đây là cách đơn giản mà giới trẻ Việt đang làm để bảo vệ môi trường hàng ngày',
               'thumbnail'=> '500_F_214490100_ZkWQ5OKhbnd9CDY5dDMYPxnooJxUerY3_n2k3ak',
               'description'=> 'Những hành động nhỏ nhưng thiết thực chắc chắn sẽ góp phần rất lớn trong việc bảo vệ môi trường.
Lối sống tích cực, đơn giản, thân thiện và gần gũi với môi trường đang là điều mà nhiều bạn trẻ theo đuổi. Sớm nhận thức được những hành động nhỏ sẽ góp phần rất lớn trong việc giảm thiểu ô nhiễm môi trường nên rất nhiều bạn trẻ đã cụ thể hoá việc bảo vệ môi trường thông qua những hành động, thói quen đơn giản hàng ngày.

Nếu bạn vẫn nghĩ bảo vệ môi trường là một việc làm mang tầm vĩ mô thì có lẽ 4 hành động đơn giản dưới đây sẽ khiến bạn thay đổi suy nghĩ. Chúng ta hoàn toàn có thể bảo vệ môi trường thông qua việc thay đổi thói quen sử dụng những sản phẩm từ nhựa khó phân huỷ mỗi ngày.',
               'detail'=> '1. Sử dụng túi vải 
Một chiếc túi vải (totebag) có thể đựng được gì? Tất cả mọi thứ. Gấp gọn một chiếc túi vải vào rồi bất kể đi đâu, mua gì bạn cũng có thể đựng trong đó mà không cần sử dụng bao nilon - những thứ mất cả trăm năm mới có thể phân huỷ. Chỉ cần giặt sạch sẽ là bạn có thể dùng đi dùng lại một chiếc túi vải cho đến khi rách thì thôi.
Gần đây, túi vải ngày càng được giới trẻ yêu thích không chỉ bởi sự tiện dụng mà còn bởi sự cá tính, phong cách. Những chiếc túi vải trở thành một món phụ kiện đơn giản nhưng đáng yêu. Rất nhiều shop như Jamlos, Acohi... đã nhanh chóng cho ra đời những mẫu túi vải với nhiều màu sắc và thiết kế ấn tượng. 
Những quán cà phê, trà sữa hay rạp chiếu phim cũng sử dụng túi vải như một món quà khuyến mãi cho khách hàng để khuyến khích các bạn trẻ sống xanh và bảo vệ môi trường. Rất dễ dàng để có được những chiếc tote xinh xắn trong ngày khai trương cửa hàng mới hay chương trình tích điểm của các thương hiệu như The Coffee House, Sharetea, Lusine, Thinker and Dreamer...
2. Sử dụng quai vải
Quai vải có thể coi là một biến tấu thú vị của túi vải trong mùa hè này. Hành động đơn giản nhưng góp phần bảo vệ môi trường này thậm chí đã trở thành một trào lưu được nhiều bạn trẻ hưởng ứng trên Instagram. Giống như túi vải, quai vải có thể tái sử dụng rất nhiều lần và cũng cực kì gọn nhẹ để mang theo khắp nơi.
Bạn có thể dùng chiếc quai "thần thánh" này để đựng cà phê, trà sữa, nước cam, sinh tố...  nói chung là tất tần tật các loại ly nước khi mang đi xa. Chiếc quai này cực kì tiện lợi để cầm, thậm chí là treo ở trên xe, trên tường. 

Quai vải khá phổ biến tại các nước như Đài Loan, Nhật Bản, Hàn Quốc nhưng chỉ bắt đầu được chú ý tại Việt Nam khi các thương hiệu đồ uống như Ten Ren, Cheesse Coffee, Bobapop. Bạn có thể dễ dàng mua được chiếc quai vải xinh xắn này với giá chỉ từ 10-30k hoặc nếu chịu khó hơn thì "canh me" các chương trình khuyến mãi để có được em nó nhé!
3. Sử dụng ống hút tre và các vật dụng thân thiện với môi trường
Mỗi ngày, bạn sử dụng ống hút nhựa để uống nước cũng nhiều không thua gì túi nilon. Ống hút nhựa không thể tái sử dụng và cũng mất rất nhiều thời gian để phân huỷ. Vậy là "cái khó ló cái khôn", giới trẻ Việt đã "phát minh" ra một chiếc ống hút rất "cây nhà lá vườn". Đó là ống hút tre. 
Chiếc ống hút tre có thể tái sử dụng nhiều lần và được sản xuất hoàn toàn tự nhiên. Chỉ khoảng 10-15k cho một chiếc ống hút tre là bạn đã có thể góp phần bảo vệ môi trường và cả bảo vệ sức khoẻ bản thân. Ngoài các sản phẩm từ tre như ống hút, bàn chải, bút viết, các sản phẩm từ dừa như thìa dừa, bát gáo dừa cũng được nhiều bạn trẻ yêu thích sử dụng.
Hiện tại, các sản phẩm trên chưa được bày bán rộng rãi mà chủ yếu được bán tại các shop online. Với giá thành khá mềm cùng với sự tiện dụng thì hi vọng trong tương lai sẽ có nhiều bạn trẻ biết đến và sử dụng những sản phẩm này để có thể góp phần bảo vệ môi trường.

4. Sử dụng hộp cơm làm từ bã mía
Dù biết hộp cơm làm bằng xốp hay nhựa chẳng tốt cho sức khoẻ hay cho môi trường tẹo nào nhưng đôi khi, vì trường hợp bất khả kháng nên vẫn phải sử dụng. Vì thế, hộp cơm làm từ bã mía là một giải pháp tuyệt vời vừa tiện dụng nhưng lại vẫn tốt cho môi trường và sức khoẻ.

Bã mía là nguyên liệu bỏ đi sau quá trình làm đường vì vậy, tận dụng nó để làm thành hộp cơm là một ý tưởng rất có ích cho môi trường. Vừa tiết kiệm lại rất hữu ích. 
Hộp cơm làm từ bã mía có thể phân huỷ thành phân bón hữu cơ sau 180 ngày. Hộp cơm này cũng rất an toàn nếu bạn dùng để dựng thức ăn nóng. Hiện tại, hộp cơm thân thiện với môi trường này chưa phổ biến nhưng với sự tiện dụng và thân thiện, chắc chắn các bạn trẻ sẽ sớm để ý và tin dùng thôi!',
               'created_at' => '2018-04-12 09:47:42',
               'updated_at' => '2019-08-13 22:17:30',
           ]
        ]);
        DB::statement("ALTER SEQUENCE articles_id_seq RESTART 6");
    }
}
