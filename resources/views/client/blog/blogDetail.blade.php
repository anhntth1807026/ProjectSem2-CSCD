@extends('client.layout')
@section('content')
    <style>
        body, h1, h2, h3, h4, h5 {
            font-family: "Segoe UI",Arial,sans-serif;
            /*    Verdana, Geneva, 'DejaVu Sans', sans-serif*/
        }
        body{
            font-size: 20px;

        }

        .comment-section {
            list-style: none;
            width: 100%;
            margin: 50px auto;
            padding: 10px;
        }

        .comment {
            display: flex;
            border-radius: 3px;
            margin-bottom: 45px;
            flex-wrap: wrap;
        }

        .comment.user-comment {
            color: #808080;
        }

        .comment.author-comment {
            color: #60686d;
            justify-content: flex-end;
        }

        .comment .info {
            width: 17%;
        }

        .comment.user-comment .info {
            text-align: right;
        }

        .comment.author-comment .info {
            order: 3;
        }


        .comment .info a {
            display: block;
            text-decoration: none;
            color: #656c71;
            font-weight: bold;
            text-overflow: ellipsis;
            overflow: hidden;
            white-space: nowrap;
            padding: 10px 0 3px 0;
        }

        .comment .info span {
            font-size: 11px;
            color: #9ca7af;
        }

        .comment .avatar {
            width: 8%;
        }

        .comment.user-comment .avatar {
            padding: 10px 18px 0 3px;
        }

        .comment.author-comment .avatar {
            order: 2;
            padding: 10px 3px 0 18px;
        }

        .comment .avatar img {
            display: block;
            border-radius: 50%;
        }

        .comment.user-comment .avatar img {
            float: right;
        }

        .comment p {
            line-height: 1.5;
            padding: 18px 22px;
            width: 65%;
            position: relative;
            word-wrap: break-word;
        }

        .comment.user-comment p {
            background-color: #f3f3f3;
        }

        .comment.author-comment p {
            background-color: #e2f8ff;
            order: 1;
        }

        .user-comment p:after {
            content: '';
            position: absolute;
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background-color: #ffffff;
            border: 2px solid #f3f3f3;
            left: -8px;
            top: 18px;
        }

        .author-comment p:after {
            content: '';
            position: absolute;
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background-color: #ffffff;
            border: 2px solid #e2f8ff;
            right: -8px;
            top: 18px;
        }

        .write-new {
            margin: 80px auto 0;
            width: 50%;
        }

        .write-new textarea {
            color: #444;
            font: inherit;

            outline: 0;
            border-radius: 3px;
            border: 1px solid #cecece;
            background-color: #fefefe;
            box-shadow: 1px 2px 1px 0 rgba(0, 0, 0, 0.06);
            overflow: auto;

            width: 100%;
            min-height: 80px;
            padding: 15px 20px;
        }

        .write-new img {
            border-radius: 50%;
            margin-top: 15px;
        }

        .write-new button {
            float: right;
            background-color: #87bae1;
            box-shadow: 1px 2px 1px 0 rgba(0, 0, 0, 0.12);
            border-radius: 2px;
            border: 0;
            color: #ffffff;
            font-weight: bold;
            cursor: pointer;

            padding: 10px 25px;
            margin-top: 18px;
        }


        @media (max-width: 800px) {
            .comment p {
                width: 100%;
            }

            .comment.user-comment .info {
                order: 3;
                text-align: left;
            }

            .comment.user-comment .avatar {
                order: 2;
            }

            .comment.user-comment p {
                order: 1;
            }

            .comment.author-comment {
                justify-content: flex-start;
            }


            .comment-section {
                margin-top: 10px;
            }

            .comment .info {
                width: auto;
            }

            .comment .info a {
                padding-top: 15px;
            }

            .comment.user-comment .avatar,
            .comment.author-comment .avatar {
                padding: 15px 10px 0 18px;
                width: auto;
            }

            .comment.user-comment p:after,
            .comment.author-comment p:after {
                width: 12px;
                height: 12px;
                top: initial;
                left: 28px;
                bottom: -6px;
            }

            .write-new {
                width: 100%;
            }
        }

    </style>

    <div class="container">
        <img class="" src="https://res.cloudinary.com/dx8lbwzhw/image/upload/w_600,h_400/{{$blogDetail -> thumbnail}}" style="width:100%;">
    </div>
    <div class="w3-display-left w3-text-white" style="padding:22rem;margin-left: 200px">

{{--        <p class="w3-opacity" style="text-align: center">10-9-2019, 10h20</p>--}}
{{--        <p class="w3-opacity" style="text-align: center">Updated: 15-9-2019</p>--}}
    </div>

    <div>
        <div class="w3-content" style="margin-top: 115px;max-width:1100px;margin-bottom:80px">
            <h4 style="text-align: center;"><b style="color: black;">{{$blogDetail-> title}}</b>
            </h4>
            <div class="w3-container">
                <strong>{{$blogDetail-> description}}</strong>
                <br>
            <hr>
            <br>
            <div class="content">
                <div class="w3-row-padding">
                    <div class="w3-col ">
                        <p>{{$blogDetail-> detail}}</p>
                    </div>
                </div>
                <br>

            </div>
            <br>


            <hr>
            <br>
            <br>

            <p style="text-align: right">Credit by: Tuấn Anh Nguyễn</p>
            <p style="text-align: right;text-decoration: underline">#fornow#fortoday#forfuture</p>
            <p style="text-align: right;text-decoration: underline">#metoo#greenday#greenearth</p>
            <p style="text-align: right;text-decoration: underline">#recyclearth#fighting#livingfortomorow</p>
        </div>
    </div>

    <ul class="comment-section">

        <li class="write-new">

            <form action="#" method="post">

                <textarea placeholder="Write your comment here" name="comment"></textarea>

                <div>
                    <img src="{{ asset('video/avatar_user_1.jpg') }}" width="35" alt="Profile of Bradley Jones"
                         title="Bradley Jones"/>
                    <button type="submit">Submit</button>
                </div>

            </form>

        </li>

    </ul>
    </div>
@endsection
