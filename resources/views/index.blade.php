<head>
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- fontawesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <!-- SweetAlert CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11">

    <style>
        body {
            background-color: #19123B;
        }

        .card {
            border: none;
            border-top: 5px solid rgb(176, 106, 252);
            background: #212042;
            color: #57557A;
        }

        p {
            font-weight: 600;
            font-size: 15px;
        }

        .fab {
            display: flex;
            justify-content: center;
            align-items: center;
            border: none;
            background: #2A284D;
            height: 40px;
            width: 90px;
        }


        .division {
            float: none;
            position: relative;
            margin: 30px auto 20px;
            text-align: center;
            width: 100%;
            box-sizing: border-box;
        }

        .division .line {
            border-top: 1.5px solid #57557A;
            ;
            position: absolute;
            top: 13px;
            width: 85%;
        }

        .line.l {
            left: 52px;
        }

        .line.r {
            right: 45px;

        }

        .division span {
            font-weight: 600;
            font-size: 14px;
        }

        .myform {
            padding: 0 25px 0 33px;
        }

        .form-control {
            border: 1px solid #57557A;
            border-radius: 3px;
            background: #212042;
            margin-bottom: 20px;
            letter-spacing: 1px;

        }

        .form-control:focus {
            border: 1px solid #57557A;
            border-radius: 3px;
            box-shadow: none;
            background: #212042;
            color: #fff;
            letter-spacing: 1px;
        }

        .bn {
            text-decoration: underline;
        }

        .bn:hover {
            cursor: pointer;
        }

        .form-check-input {
            margin-top: 8px !important;
        }

        .btn-primary {
            background: linear-gradient(135deg, rgba(176, 106, 252, 1) 39%, rgba(116, 17, 255, 1) 101%);
            border: none;
            border-radius: 50px;
        }

        .btn-primary:focus {
            box-shadow: none;
            border: none;
        }

        small {
            color: #F2CEFF;
        }

        .far.fa-user {
            font-size: 13px;
        }

        @media(min-width: 767px) {
            .bn {
                text-align: right;
            }
        }

        @media(max-width: 767px) {
            .form-check {
                text-align: center;
            }

            .bn {
                text-align: center;
                align-items: center;
            }
        }

        @media(max-width: 450px) {
            .fab {
                width: 100%;
                height: 100%;
            }

            .division .line {
                width: 50%;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row d-flex justify-content-center mt-5">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card py-3 px-2">
                    <div class="col-12" style="padding: 0; margin-top: -16px;">
                        <img src="https://i.ibb.co/Jm1Yfv7/baner.jpg" width="100%" height="50%">
                    </div>
                    <div class="division">
                        <div class="row">
                            <div class="col-3">
                                <div class="line l"></div>
                            </div>
                            <div class="col-6"><span>CEK ID GAMES</span></div>
                            <div class="col-3">
                                <div class="line r"></div>
                            </div>
                        </div>
                    </div>
                    <form class="myform" action="{{ route('cekin.cek') }}" method="GET">
                        @csrf
                        <div class="form-group">
                            <select name="game_code" class="form-control">
                                <option value="mobilelegend">Mobile legend</option>
                                <option value="freefire">Free fire</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" name="user_id" class="form-control" placeholder="User id">
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-block btn-primary btn-lg"><small><i
                                        class="far fa-user pr-2"></i>CEK ID</small></button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- SweetAlert JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- jika data username di temukan -->
    @if (isset($apiData['data']['username']))
        <script>
            Swal.fire({
                title: 'Username ditemukan!',
                text: "Username: {{ $apiData['data']['username'] }}",
                icon: 'success',
                confirmButtonText: 'OK'
            });
        </script>
    @endif

</body>
