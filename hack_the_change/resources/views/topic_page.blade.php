<x-home-master>

    @section('content')

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <!--  Required meta tags always come first  -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta http-equiv="x-ua-compatible" content="ie=edge">
            <title>Material Design Bootstrap Template</title>
            <!--  Font Awesome  -->
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
            <!-- Bootstrap core CSS -->
            <link href="../css/bootstrap.min.css" rel="stylesheet">
            <!-- Material Design Bootstrap -->
            <link href="../css/mdb.min.css" rel="stylesheet">
            <style>
                .navbar {
                    background-color: #6f7782;
                }
                footer.page-footer {
                    background-color: #6f7782;
                }

            </style>
        </head>

        <body>


        <!--Main Layout-->
        <main>

            <div class="container">

                <!--Section: Blog v.4-->
                <section class="section mt-5 pb-3 wow fadeIn">

                    <!--Grid row-->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Card -->
                            <div class="card card-cascade wider reverse">

                                <!-- Card image -->
                                <div class="view view-cascade overlay">
                                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Slides/img%20(134).jpg" alt="Card image cap">
                                    <a href="#!">
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>

                                <!--Post data-->
                                <div class="card-body card-body-cascade text-center">
                                    <h2><a><strong>Title of the Subject: <br>{{$subject->title}}</strong></a></h2>
                                </div>
                                <!--Post data-->
                            </div>
                        </div>
                    </div>
                    <!--Grid row-->

                </section>
                <!--Section: Blog v.4-->

                <hr class="mb-5 mt-4">


                <!--Section: Leave a reply (Logged In User)-->
                <section class="pb-5 mt-5 wow fadeIn" data-wow-delay="0.3s">

                    <!--Leave a reply form-->
                    <div class="reply-form">
                        <h3 class="text-center my-5 h3 pt-3">Leave your nice Feedback </h3>

                        <!--Third row-->
                        <div class="row text-center text-md-left">

                            <!--Content column-->
                            <div class="col-sm-10 col-12">
                                <div class="md-form">
                                    <form method="post" action="{{route('comment.store')}}" enctype="multipart/form-data">

                                        @csrf
                                        <input type="hidden" name="topic_id" value="{{$subject->id}}">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Feedback</label>
                                            <input type="text"
                                                   name="text"
                                                   class="form-control" id="title" aria-describedby="emailHelp" placeholder="Enter title">
                                            <small id="emailHelp" class="form-text text-muted">Write your favorite feedback less than 50 letters</small>
                                        </div>


                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                    <label for="form-mess">Your Feedback</label>
                                </div>

                            </div>

                        </div>
                    </div>
                </section>




                <!--Section: Comments list-->
                <section class="mb-4 pt-5 wow fadeIn" data-wow-delay="0.3s">

                    <!--Main wrapper-->
                    <div class="comments-list text-center text-md-left mb-5">
                        <div class="text-center mb-4">
                            <h3 class="font-weight-bold pt-3 mb-5">Comments <span class="badge pink"></span></h3>
                        </div>


                        <!--row-->
                        @foreach($comments as $comment)

                        <div class="row mb-4">


                            <!--Content column-->
                            <div class="col-sm-10 col-12">
                                <a>
                                    <h4 class="font-weight-bold">Unknown :)</h4>
                                </a>

                                <p class="grey-text">
                                    {{$comment->text}}
                                </p>
                                <div class="col-md-12 text-center mt-4">

                                    <form method="post" action="{{route('comment.positiveFeedback', $comment)}}">
                                        @method('PUT')
                                        @csrf
                                        <input type="hidden" name="role" value="">
                                        <button class="btn btn-pink btn-rounded btn-success">
                                            + ({{$comment->positive_feedback}})
                                        </button>
                                    </form>

                                </div>
                                <div class="col-md-12 text-center mt-4">
                                    <form method="post" action="{{route('comment.negativeFeedback', $comment)}}">
                                        @method('PUT')
                                        @csrf
                                        <input type="hidden" name="role" value="">
                                        <button class="btn btn-pink btn-rounded btn-danger">
                                            - ({{$comment->negative_feedback}})
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <!--/.Content column-->
                        </div>
                        <!--/.row-->
                        @endforeach

                    </div>
                    <!--/.Main wrapper-->
                </section>
                <!--/Section: Comments list-->





            </div>

        </main>
        <!--Main Layout-->


        <!--  SCRIPTS  -->
        <!-- JQuery -->
        <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="../js/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="../js/mdb.min.js"></script>
        <script>
            new WOW().init();

        </script>
        </body>

        </html>


    @endsection
</x-home-master>
