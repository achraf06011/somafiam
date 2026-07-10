<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .navbar-brand img {
            height: 80.5px;
            width: 100px;
            margin-right: 2px;
        }

        .navbar-brand,
        .navbar-brand div {
            display: flex;
            align-items: center;
        }

        .navbar-brand div {
            color: #1d7eb6;
            font-size: 32.5px;
            font-weight: 500;
            font-family: Rubik;
        }

        @media (max-width: 768px) {
            .navbar-brand img {
                height: 50px;
                width: 55px;
            }

            .navbar-brand div {
                font-size: 18px;
            }
        }

        @media (max-width: 576px) {
            .navbar-brand img {
                height: 40px;
                width: 45px;
            }

            .navbar-brand div {
                font-size: 14px;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar " style="background-color: #eeeeee; height: 95px; width: 100%;">
        <div class="container d-flex align-items-center justify-content-start"
            style="height: 100%;top: -17px;position: relative;">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="{{ asset('robotique/images/Logo3.png') }}" alt="SOMAFIAM.SA">
                <div>SOMAFIAM S.A</div>
            </a>
        </div>
    </nav>
</body>

</html>
