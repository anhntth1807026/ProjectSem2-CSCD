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
        DB::table('products')->truncate();
        DB::table('products')->insert(
            [
                'id'=> 1,
                'user_id'=> 1,
                'title' => "Môi Trường Là Gì, Biện Pháp Bảo Vệ Môi Trường
Môi Trường Là Gì, Biện Pháp Bảo Vệ Môi Trường",
                'thumbnail'=> 'https://i.khoahoc.tv/photos/image/2018/03/22/bao-ve-moi-truong.jpg',
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
            ]
        );
    }
}
