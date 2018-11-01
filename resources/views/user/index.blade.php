@extends ('user.layout.master')

@section ('style')
    <link href="{{ asset('bower_components/demo-bower/confession/user/css/jasny-bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bower_components/demo-bower/confession/user/css/selectize.default.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/demo-bower/confession/user/css/sweet-alert.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/demo-bower/confession/user/css/toastr.min.css') }}">
    <style>
        .color{
            color: blue!important;
            cursor: pointer;
        }
    </style>
@endsection

@section ('content')
    <!-- Content Wrapper START -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <ul class="list-media">
                                <li class="list-item">
                                    <div class="p-b-15">
                                        <div class="media-img">
                                            <img src="{{ asset('images/icon.png') }}" alt="">
                                        </div>
                                        <div class="info">
                                            <span class="title">F_Confession</span>
                                            <span class="sub-title">@f_confession</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <p>Nơi chia sẻ những điều giấu kín !</p>
                        </div>
                        <div class="card-footer">
                            <p class="text-dark font-size-13"><b>Follow Me On:</b></p>
                            <ul class="list-inline">
                                <li class="m-r-15">
                                    <a class="text-gray" href="#">
                                        <i class="mdi mdi-instagram font-size-25"></i>
                                    </a>
                                </li>
                                <li class="m-r-15">
                                    <a class="text-gray" href="#">
                                        <i class="mdi mdi-facebook font-size-25"></i>
                                    </a>
                                </li>
                                <li class="m-r-15">
                                    <a class="text-gray" href="#">
                                        <i class="mdi mdi-twitter font-size-25"></i>
                                    </a>
                                </li>
                                <li class="m-r-15">
                                    <a class="text-gray" href="#">
                                        <i class="mdi mdi-dribbble font-size-25"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title m-b-25">Topics</h4>
                            <ul class="list-media">
                                <li class="list-item">
                                    <div class="p-b-15">
                                        <div class="media-img">
                                            <img src="{{ asset('images/thumb-3.png') }}" alt="">
                                        </div>
                                        <div class="info">
                                            <a href=""><span class="title">Hawksong</span></a>
                                            <span class="sub-title">Music</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-item">
                                    <div class="p-v-15">
                                        <div class="media-img">
                                            <img src="{{ asset('images/thumb-3.png') }}" alt="">
                                        </div>
                                        <div class="info">
                                            <a href=""><span class="title">Notepen</span></a>
                                            <span class="sub-title">Office</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-item">
                                    <div class="p-v-15">
                                        <div class="media-img">
                                            <img src="{{ asset('images/thumb-3.png') }}" alt="">
                                        </div>
                                        <div class="info">
                                            <a href=""><span class="title">GoFlight</span></a>
                                            <span class="sub-title">Travel</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="border top p-v-15 p-h-20 text-center">
                            <a href="#" class="text-semibold text-dark d-block">More...</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="social-footer">

                            <div class="social-comment">
                                <a href="#" class="pull-left">
                                    <img alt="image" src="{{ asset('images/thumb-3.png') }}">
                                </a>
                                <div class="media-body">
                                    <textarea class="form-control" placeholder="What do you mean ..."></textarea>
                                    <br>
                                    <button class="btn btn-info btn-rounded">Submit</button>
                                </div>
                                <p>Bạn có thể đăng bài ẩn danh <a class="color" data-toggle="modal" data-target="#modal-lg">ở đây</a></p>
                            </div>
                            <div class="modal fade" id="modal-lg" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">

                                            <div class="row ">
                                                <div class="col-md-12">

                                                    @foreach ($errors->all() as $error)
                                                        <p class="alert alert-danger">{{ $error }}</p>
                                                    @endforeach

                                                    {{ Form::open(['route' => 'confession.store', 'method' => 'POST', 'files' => true]) }}
                                                        <div class="form-group">
                                                            {!! Form::label('title', "Tieu de", ['class' => 'control-label']) !!}
                                                            {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Write title ...', 'id' => 'title', 'require']) }}
                                                        </div>
                                                        <div class="form-group">
                                                            {!! Form::label('body', "Noi dung", ['class' => 'control-label']) !!}
                                                            {{ Form::textarea('body', '', ['require', 'class' => 'form-control', 'id' => 'body', 'placeholder' => 'Write something ...', 'rows' => "5"]) }}
                                                        </div>
                                                        <div class="form-group">
                                                            {!! Form::label('images', "Ảnh", ['class' => 'control-label']) !!}
                                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                <span class="btn btn-default btn-file">
                                                                    <span class="fileinput-new">Select file</span>
                                                                    <span class="fileinput-exists">Change</span>
                                                                    {{ Form::file('images', ['id' => 'images']) }}
                                                                </span>
                                                                    <span class="fileinput-filename"></span>
                                                                <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">×</a>
                                                            </div>
                                                            <div id="image-holder"></div>
                                                        </div>
                                                        {{ Form::submit('submit', ['class' => 'btn btn-info btn-rounded']) }}
                                                    {{ Form::close() }}
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                        <div class="card">
                        @foreach ($confessions as $key => $confession)
                            <div class="feed-header">
                                <ul class="list-media">
                                    <li class="list-item">
                                        <div class="p-h-30 p-t-30">
                                            <div class="media-img">
                                                <img src="{{ asset('images/avatar-5.png') }}" alt="">
                                            </div>
                                            <div class="info">
                                                <span class="title">F-Confession</span>
                                                <span class="sub-title">@Anomyous</span>
                                                <div class="float-item">
                                                    <span>{{ $confession->created_at }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="p-30">
                                <p class="m-b-15">{{ $confession->body }}</p>
                                <ul class="list-inline m-t-20 p-v-15">
                                    <li class="m-r-25">
                                        <a href="#" class="text-gray font-size-16" title="Like">
                                            <i class="ti-heart text-danger p-r-5"></i>
                                            <span>168</span>
                                        </a>
                                    </li>
                                    <li class="m-r-20">
                                        <a href="#" class="text-gray font-size-16" title="Comment">
                                            <i class="ti-comments text-success p-r-5"></i>
                                            <span>18</span>
                                        </a>
                                    </li>
                                    <li class="m-r-20">
                                        <a href="#" class="text-gray font-size-16" title="Spam">
                                            <i class="ti-flag text-success p-r-5"></i>
                                            <span>5</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="social-footer">
                                <div class="social-comment">
                                    <a href="#" class="pull-left">
                                        <img alt="image" src="{{ asset('images/thumb-3.png') }}">
                                    </a>
                                    <div class="media-body">
                                        <a href="#">
                                            Andrew Williams
                                        </a>
                                        Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words.
                                        <br>
                                        <a href="#" class="small"><i class="fa fa-thumbs-up"></i> 26 Like this!</a> -
                                        <small class="text-muted">12.06.2014</small>
                                    </div>
                                </div>

                                <div class="social-comment">
                                    <a href="#" class="pull-left">
                                        <img alt="image" src="{{ asset('images/thumb-3.png') }}">
                                    </a>
                                    <div class="media-body">
                                        <textarea class="form-control" placeholder="Write comment..."></textarea>
                                    </div>
                                </div>

                            </div>
                        @endforeach
                        </div>
                    <div class="card">
                        <div class="feed-header">
                            <ul class="list-media">
                                <li class="list-item">
                                    <div class="p-h-30 p-t-30">
                                        <div class="media-img">
                                            <img src="{{ asset('images/thumb-3.png') }}" alt="">
                                        </div>
                                        <div class="info">
                                            <span class="title">Nicole Wyne</span>
                                            <span class="sub-title">@nicolewyne</span>
                                            <div class="float-item">
                                                <span>8 hrs ago</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="p-30">
                            <p>Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain clicks-and-mortar.</p>
                            <ul class="list-inline m-t-20 p-v-15">
                                <li class="m-r-25">
                                    <a href="#" class="text-gray font-size-16 ">
                                        <i class="ti-heart text-danger p-r-5"></i>
                                        <span>168</span>
                                    </a>
                                </li>
                                <li class="m-r-20">
                                    <a href="#" class="text-gray font-size-16">
                                        <i class="ti-comments text-success p-r-5"></i>
                                        <span>18</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="social-footer">
                            <div class="social-comment">
                                <a href="#" class="pull-left">
                                    <img alt="image" src="{{ asset('images/thumb-3.png') }}">
                                </a>
                                <div class="media-body">
                                    <a href="#">
                                        Andrew Williams
                                    </a>
                                    Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words.
                                    <br>
                                    <a href="#" class="small"><i class="fa fa-thumbs-up"></i> 26 Like this!</a> -
                                    <small class="text-muted">12.06.2014</small>
                                </div>
                            </div>

                            <div class="social-comment">
                                <a href="#" class="pull-left">
                                    <img alt="image" src="{{ asset('images/thumb-3.png') }}">
                                </a>
                                <div class="media-body">
                                    <a href="#">
                                        Andrew Williams
                                    </a>
                                    Making this the first true generator on the Internet. It uses a dictionary of.
                                    <br>
                                    <a href="#" class="small"><i class="fa fa-thumbs-up"></i> 11 Like this!</a> -
                                    <small class="text-muted">10.07.2014</small>
                                </div>
                            </div>

                            <div class="social-comment">
                                <a href="#" class="pull-left">
                                    <img alt="image" src="{{ asset('images/thumb-3.png') }}">
                                </a>
                                <div class="media-body">
                                    <textarea class="form-control" placeholder="Write comment..."></textarea>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card">
                        <div class="feed-header">
                            <ul class="list-media">
                                <li class="list-item">
                                    <div class="p-h-30 p-t-30">
                                        <div class="media-img">
                                            <img src="{{ asset('images/thumb-3.png') }}" alt="">
                                        </div>
                                        <div class="info">
                                            <span class="title">Erin Gonzales</span>
                                            <span class="sub-title">@eringonzales</span>
                                            <div class="float-item">
                                                <span>5 days ago</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="p-30">
                            <div class="bg-gradient-info p-20">
                                <p class="m-b-0 lead">To succeed in life, you need three things: a wishbone, a backbone and a funny bone.</p>
                            </div>
                            <ul class="list-inline m-t-20 p-v-15">
                                <li class="m-r-25">
                                    <a href="#" class="text-gray font-size-16 ">
                                        <i class="ti-heart text-danger p-r-5"></i>
                                        <span>168</span>
                                    </a>
                                </li>
                                <li class="m-r-20">
                                    <a href="#" class="text-gray font-size-16">
                                        <i class="ti-comments text-success p-r-5"></i>
                                        <span>18</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="social-footer">
                            <div class="social-comment">
                                <a href="#" class="pull-left">
                                    <img alt="image" src="{{ asset('images/thumb-3.png') }}">
                                </a>
                                <div class="media-body">
                                    <a href="#">
                                        Andrew Williams
                                    </a>
                                    Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words.
                                    <br>
                                    <a href="#" class="small"><i class="fa fa-thumbs-up"></i> 26 Like this!</a> -
                                    <small class="text-muted">12.06.2014</small>
                                </div>
                            </div>

                            <div class="social-comment">
                                <a href="#" class="pull-left">
                                    <img alt="image" src="{{ asset('images/thumb-3.png') }}">
                                </a>
                                <div class="media-body">
                                    <a href="#">
                                        Andrew Williams
                                    </a>
                                    Making this the first true generator on the Internet. It uses a dictionary of.
                                    <br>
                                    <a href="#" class="small"><i class="fa fa-thumbs-up"></i> 11 Like this!</a> -
                                    <small class="text-muted">10.07.2014</small>
                                </div>
                            </div>

                            <div class="social-comment">
                                <a href="#" class="pull-left">
                                    <img alt="image" src="{{ asset('images/thumb-3.png') }}">
                                </a>
                                <div class="media-body">
                                    <textarea class="form-control" placeholder="Write comment..."></textarea>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <!--<div class="card">
                        <div class="card-body">
                            <img class="img-fluid d-block mx-auto" src="assets/images/others/bell.png" alt="">
                            <div class="text-center">
                                <h5 class="text-dark font-size-18"><b>Get Notifications</b></h5>
                                <p>Climb leg rub face on everything</p>
                                <button class="btn btn-info m-t-20">Subscibe</button>
                            </div>

                        </div>
                    </div>-->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title m-b-25">Friends Follow</h4>
                            <ul class="list-media">
                                <li class="list-item">
                                    <div class="p-b-15">
                                        <div class="media-img">
                                            <img src="{{ asset('images/thumb-3.png') }}" alt="">
                                        </div>
                                        <div class="info">
                                            <span class="title">Susie Willis</span>
                                            <span class="sub-title">@susiewillis</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-item">
                                    <div class="p-v-15">
                                        <div class="media-img">
                                            <img src="{{ asset('images/thumb-3.png') }}" alt="">
                                        </div>
                                        <div class="info">
                                            <span class="title">Debra Stewart</span>
                                            <span class="sub-title">@debrastewart</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-item">
                                    <div class="p-v-15">
                                        <div class="media-img">
                                            <img src="{{ asset('images/thumb-3.png') }}" alt="">
                                        </div>
                                        <div class="info">
                                            <span class="title">Erin Gonzales</span>
                                            <span class="sub-title">@eringonzales</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-item">
                                    <div class="p-t-15">
                                        <div class="media-img">
                                            <img src="{{ asset('images/thumb-3.png') }}" alt="">
                                        </div>
                                        <div class="info">
                                            <span class="title">Ava Alexander</span>
                                            <span class="sub-title">@avaalexander</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="border top p-v-15 p-h-20 text-center">
                            <a href="#" class="text-semibold text-dark d-block">More...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Wrapper END -->
@endsection

@section ('script')
    <script src="{{ asset('bower_components/demo-bower/confession/user/js/jasny-bootstrap.min.js') }}"></script>
    <script src="{{ asset('bower_components/demo-bower/confession/user/js/selectize.min.js') }}"></script>
    <script src="{{ asset('bower_components/demo-bower/confession/user/js/sweet-alert.min.js') }}"></script>
    <script src="{{ asset('bower_components/demo-bower/confession/user/js/toastr.min.js') }}"></script>
    {{--<script>
        /* image preview */
        $("#images").on('change', function () {

            if (typeof (FileReader) != "undefined") {

                var image_holder = $("#image-holder");
                image_holder.empty();

                var reader = new FileReader();
                reader.onload = function (e) {
                    $("<img />", {
                        "src": e.target.result,
                        "class": "thumb-image",
                        "width": 200
                    }).appendTo(image_holder);

                }
                image_holder.show();
                reader.readAsDataURL($(this)[0].files[0]);
            } else {
                alert("Select image, please.");
            }
        });

        /*Gọi Modal thêm mới confession*/
        $(document).on('click', '#confession', function() {
            $('#modal-lg').modal('show');
            $('#title').val('');
            $('#body').val('');
            $('#images').val('');
        });
        /*--------------------------*/

        //send confession
        $('#submit').on('click', function (event) {
            event.preventDefault();

            //Lấy ra files
            var file_data = $('#images').prop('files')[0];
            //lấy ra kiểu file
            var type = file_data.type;
            //Xét kiểu file được upload
            var match = ["image/gif", "image/png", "image/jpg",];
            //kiểm tra kiểu file
            if (type == match[0] || type == match[1] || type == match[2]) {

                var form = $('#form_confession');
                var formData = form.serialize();
                formData.append('file', file_data);

                $.ajaxSetup({
                    header: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: 'POST',
                    url: '{{ route('confession.store') }}',
                    data: formData,

                    success: function (res) {
                        console.log(res);
                        if (res.error == 'valid') {
                            var arr = res.message;
                            var key = Object.keys(arr);

                            for (var i = 0; i < key.length; i++) {
                                toastr.error(arr[key[i]]);
                            }
                        } else  if (res.error == false) {
                            toastr.success("Thành công");

                            $('#form_confession').modal('hide');

                            /*setTimeout(function(){
                                window.location.reload();
                            }, 1000);*/
                        } else {
                            //
                        }
                    },

                    error: function (res) {
                        //
                    }
                });
            }
        });
    </script>--}}
@endsection
