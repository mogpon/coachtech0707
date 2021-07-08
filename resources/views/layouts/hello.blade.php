<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
  <style>
    body {
      background: #2d197c;
      margin: 0;
      padding: 0;
    }

    .contents {
      width: 50%;
      background: white;
      padding: 25px;
      border-radius: 10px;
      position: absolute;
      top: 50%;
      left: 25%;
      transform: translate(0, -50%);
    }

    h2 {
      margin: 10px 0;
    }

    .content_in {
      display: flex;
      justify-content: space-between;

    }

    .form {
      width: 80%;
      padding: 10px 0;
    }

    .form_2 {
      width: 100%;
      padding: 5px 0;
    }

    .btn_1 {
      padding: 7px 15px;
      color: #dc70fa;
      border-color: #dc70fa;
      border-radius: 5px;
      ;
      background: white;
      font-weight: bold;
    }

    .btn_1:hover {
      background: rgb(247, 158, 202);
      color: white;
      transition: 0.5s;
    }

    .btn_2 {
      padding: 7px 15px;
      color: #fa9770;
      border-color: #fa9770;
      border-radius: 5px;
      ;
      background: white;
      font-weight: bold;
    }

    .btn_2:hover {
      background: rgb(255, 214, 151);
      color: white;
      transition: 0.5s;
    }

    .btn_3 {
      padding: 7px 15px;
      color: #71fadc;
      border-color: #71fadc;
      border-radius: 5px;
      ;
      background: white;
      font-weight: bold;
    }

    .btn_3:hover {
      background: rgb(147, 255, 201);
      color: white;
      transition: 0.5s;
    }

    table {
      width: 95%;
      margin: 10px auto;
      text-align: center;
      display: table;
    }
  </style>
</head>

<body>
  <div class="contents">
    @yield('content')
  </div>
</body>

</html>