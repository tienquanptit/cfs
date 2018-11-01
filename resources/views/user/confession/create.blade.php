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
                <div class="col-sm-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="row ">
                                <div class="col-md-12">
                                    {{ Form::open(['route' => 'confession.store', 'method' => 'POST', 'file' => true]) }}
                                    <div class="form-group">
                                        {!! Form::label('title', "Tieu de", ['class' => 'control-label']) !!}
                                        {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Write title ...', 'id' => 'title', 'require']) }}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('body', "Noi dung", ['class' => 'control-label']) !!}
                                        {{ Form::textarea('body', '', ['require', 'class' => 'form-control', 'id' => 'body', 'placeholder' => 'Write something ...', 'rows' => "5"]) }}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('image', "Ảnh", ['class' => 'control-label']) !!}
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
