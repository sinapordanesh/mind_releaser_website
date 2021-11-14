<x-home-master>

    @media (min-width: 1025px) {
    .h-custom {
    height: 100vh !important;
    }
    }

        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-8 col-xl-6">
                    <div class="card rounded-3">
                        <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-registration/img3.jpg" class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;" alt="Sample photo">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Registration Info</h3>

                            <form class="px-md-2">

                                <div class="form-outline mb-4">
                                    <input type="text" id="form3Example1q" class="form-control" />
                                    <label class="form-label" for="form3Example1q">Name</label>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline datepicker">
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="exampleDatepicker1"
                                            />
                                            <label for="exampleDatepicker1" class="form-label">Select a date</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4">

                                        <select class="select">
                                            <option value="1" disabled>Gender</option>
                                            <option value="2">Female</option>
                                            <option value="3">Male</option>
                                            <option value="4">Other</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="mb-4">

                                    <select class="select">
                                        <option value="1" disabled>Class</option>
                                        <option value="2">Class 1</option>
                                        <option value="3">Class 2</option>
                                        <option value="4">Class 3</option>
                                    </select>

                                </div>

                                <div class="row mb-4 pb-2 pb-md-0 mb-md-5">
                                    <div class="col-md-6">

                                        <div class="form-outline">
                                            <input type="text" id="form3Example1w" class="form-control" />
                                            <label class="form-label" for="form3Example1w">Registration code</label>
                                        </div>

                                    </div>
                                </div>

                                <button type="submit" class="btn btn-success btn-lg mb-1">Submit</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>


{{--    @section('content')--}}

{{--        <section id="cover" class="min-vh-100">--}}
{{--            <div id="cover-caption">--}}
{{--                <div class="container">--}}
{{--                    <div class="row text-white">--}}
{{--                        <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">--}}
{{--                            <h1 class="display-4 py-2 text-truncate">Center my form.</h1>--}}
{{--                            <div class="px-2">--}}
{{--                                <form method="post" action="{{route('topic.store')}}" enctype="multipart/form-data" style = "margin-top: -200px; margin-bottom: -20px; padding-bottom: 20px; padding-left: 575px;">--}}

{{--                                    @csrf--}}

{{--                                    <div class="form-group">--}}
{{--                                        <label for="exampleInputEmail1">Titile</label>--}}
{{--                                        <input type="text"--}}
{{--                                               name="title"--}}
{{--                                               class="form-control" id="title" aria-describedby="emailHelp" placeholder="Enter title">--}}
{{--                                        <small id="emailHelp" class="form-text text-muted">Write your favorite title</small>--}}
{{--                                    </div>--}}


{{--                                    <button type="submit" class="btn btn-primary">Submit</button>--}}
{{--                                    <input type="submit" value="Create" class="form-button">--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}

{{--    @endsection--}}


</x-home-master>
