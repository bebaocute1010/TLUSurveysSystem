<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/statisticalformsurvey.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <title>StatisticalSurvey</title>
</head>
<body>  
    <div class="app">
        <header class="header">
            <img class="logo-img" src="{{ asset('img/img-logo.jpg') }}" alt="Logo">
            <h1 class="title-heading_1">TRƯỜNG ĐẠI HỌC THỦY LỢI</h1>
            <h2 class="title-heading_2">THUY LOI UNIVERSITY</h2>
           <div class="navbar">
                <div class="navbar-option">
                    <a class="navbar-title" href="">Câu hỏi</a>
                    <a class="navbar-title" href="">Câu trả lời</a>
                    <a class="navbar-count" href="">0</a>
                    <a class="navbar-title" href="">Cài đặt</a>
                    <button class="navbar-btn">Gửi</button>
                </div>
           </div>
           <div class="form_option--reply" action="">
               <h1 class="title-heading">Câu trả lời</h1>
               <h2 class="title-list">Danh sách</h2>
               <ul class="list-member">
                    <li class="list-member-name">Nguyễn Văn A <img class="list-member-icon" src="{{ asset('img/eye.png') }}" alt=""></li><br>
                    <li class="list-member-name">Nguyễn Văn B <img class="list-member-icon" src="{{ asset('img/eye.png') }}" alt=""></li><br>
                    <li class="list-member-name">Nguyên Văn C <img class="list-member-icon" src="{{ asset('img/eye.png') }}" alt=""></li>
               </ul>
               
               <div class="chart-pie">
                <p class="question-chart-pie">Câu hỏi <br> <span class="reply-chart-pie">x câu trả lời</span> </p>
               </div>
               <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
               <script src="{{ asset('js/chart/chartpice.js') }}"></script>
               <div class="boder-chart-pie"></div>
               <div class="chart-horizontal">
                <p class="question-chart-horizontal">Câu hỏi <br> <span class="reply-chart-horizontal">x câu trả lời</span> </p>
               </div>
               <div class="horizontal-chart">
                <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.umd.min.js"></script>
                <canvas id="horizontal" style="width:100%;max-width:620px;height: 180px;"></canvas>
                 <script  src="{{ asset('js/chart/horizontal.js') }}" type="text/javascript"></script>
               </div>
               <div class="boder-chart-horizontal"></div>
            </div>
            
    </header>
    </div>
</body>   
</html>