<x-home-master>

    @section('links')
    <title>Speak My Mind</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!--<link href="style.css" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@700&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



    @endsection
    @section('content')

    <style>
    /*body{
        background-image: url('notebook.jpg');
        background-repeat: no-repeat;

        background-size: 100% 100%;
    }*/
    .search-container {
        float: left;
        margin-top: -20px;
    }
    .search-container input[type=text] {
        padding: 0px;

        margin-left: 450px;
        font-size: 17px;

        border-radius: 15px;
        width: 350px;
        height: auto;
    }
    .search-container button {
        float: right;
        padding: 3px;

        margin-left: 0px;
        margin-right: 16px;

        background: #ddd;
        font-size: 17px;
        border-radius: 15px;
        cursor: pointer;
        width: 80px;

    }

    .search-container button:hover {
        background: #ccc;
    }

    </style>
<body>
    <style>
        #gradient{
            background-image: linear-gradient(purple, blue);
        }
        .big-text {
            position: absolute;
            top: 70%;
            left: 50%;
            transform: translate(-50%, -30%);
            font-family: Ubuntu;
            font-size: 2rem;
            color: #fff;
        }

        .big-text2 {
            position: absolute;
            top: 90%;
            left: 50%;
            transform: translate(-50%, -30%);
            font-family: Ubuntu;
            font-size: 2rem;
            color: #fff;
        }
        .nav_links {
            list-style: none;
            background-color: white;
        }
    </style>
                <style>
                    .form {
                        background-color: #f5f5f5;
                        padding: 20px;
                        margin: 20px;
                    }

                    .form-button {
                        background-color: #73AD21;
                        border: none;
                        border-radius: 12px;
                        color: white;
                        padding: 10px;
                        text-align: center;
                        text-decoration: none;
                        display: inline-block;
                        font-size: 16px;
                        margin: 10px -18px;
                        width: 120px;
                        cursor: pointer;
                    }

                    .form-button:hover {
                        background-color: DodgerBlue;
                        color: white;
                    }

                </style>
                <div id="gradient">


                    <img src="{{asset('/logo./Pop-Up_logo2.svg')}}" style="padding:370px; padding-top: 100px; margin-bottom: -90px;">


                    <form action="{{route('topic.create')}}" style = "margin-top: -200px; margin-bottom: -20px; padding-bottom: 20px; padding-left: 575px;">
                        <input type="submit" value="Rlease :)" class="form-button">
                    </form>

    @php
        $collors = ['success', 'warning', 'danger', 'info', 'secondary']
    @endphp
    <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>

        @foreach($subjects as $subject)
            @php
                $key = array_rand($collors, 1);
            @endphp
        <a href="{{route('topic.page.show', $subject->id)}}" class="list-group-item list-group-item-action list-group-item-{{$collors[$key]}}"
        >{{$subject->title}}</a>
        @endforeach
    </div>



    <div class="intro">
      <div class="intro-text">
        <h4 class="hide">
          <span class="text"></span>
        </h4>
        <p class="hide">
          <span class="text"></span>
        </p>


      </div>
    </div>

    @endsection
    @section('scripts')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js" integrity="sha512-UxP+UhJaGRWuMG2YC6LPWYpFQnsSgnor0VUF3BHdD83PS/pOpN+FYbZmrYN+ISX8jnvgVUciqP/fILOXDjZSwg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--<script src="app.js"></script>-->

</body>



    @endsection




</x-home-master>
