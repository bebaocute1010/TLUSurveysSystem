<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/newform.css') }}">
    <link rel="stylesheet" href="{{ asset('css/formsendtarget.css') }}">
    <link rel="stylesheet" href="{{ asset('css/statisticalformtest.css') }}">
    <link rel="stylesheet" href="{{ asset('css/formsetting.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="https://kit.fontawesome.com/a0c051604d.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<style>
    body {font-family: Arial;}
    .tabcontent {
      display: none;
    }
    #wrapper{
        position: absolute;
        right: 0;
        min-height: 100vh;
        right: 146px;
        top: 2px;
    }
    .switch-toggle{
        cursor: pointer;
        width: 40px;
        height: 20px;
        appearance: none;
        background-color: #333;
        border-radius:26px ;
        position: relative;
    }
    .switch-toggle::before{
        content: '';
        width: 14px;
        height: 14px;
        top: 3px;
        left: 3px;
        position: absolute;
        background-color: #fff;
        border-radius: 50%;
    }
    .switch-toggle:checked{
        background-color: #61FC18;
       
    }
    .switch-toggle:checked::before{
        left: 22px;
    }
    </style>
<body>
    <div class="app">
        <header class="header">
            <img class="logo-img" src="{{ asset('img/img-logo.jpg') }}" alt="Logo">
            <h1 class="title-heading_1">TR?????NG ?????I H???C TH???Y L???I</h1>
            <h2 class="title-heading_2">THUY LOI UNIVERSITY</h2>
           <div class="navbar"> 
            <div class="navbar-option ">
                <button class="navbar-title tablinks" onclick="openTabs(event, 'Question')">C??u h???i</button>
                <button class="navbar-title tablinks" onclick="openTabs(event, 'Reply')">C??u tr??? l???i</button>
                <button class="navbar-title tablinks" onclick="openTabs(event, 'Setting')">C??i ?????t</button>
                <button class="navbar-btn tablinks" onclick="openTabs(event,'Send')">G???i</button>
            </div>
           </div>
               
           <div class="form_option--question" action="">
            <input class="form_option--title" placeholder="Ti??u ?????">
            <input class="form_option--description" type="text" placeholder="M?? t???...">
            <div class="form_option--email">
                <p class="form_option--sympol">*</p>
                <p class="form_option--text">Email</p>
                <input class="form_option--input" type="text" name="" id="" placeholder="Email h???p l???">
            </div>
    
            <form class="form_option--selection" action="">
                <input class="form_option--heading" placeholder="C??u h???i">
                <div class="boder_option--heading"></div>
                <div class="form_selection">
                    <div class="form_selection--cancel">
                        <i class="fa-solid fa-xmark option-cancel"></i><br>
                        <i class="fa-solid fa-xmark "></i>
                    </div>
                    
                    <input class="form_selection--one" type="radio"> Tu??? ch???n 1 <br>
                    <input class="form_selection--two" type="radio"> T??y ch???n 2   
                   <div class="form_option--add">
                    <input class="form_selection--three" type="radio"> 
                    <a class="form-add form-add-selection"> Th??m t??y ch???n </a>
                    <span class="form-add">ho???c</span> 
                    <a href="" class="form-add form-add-reply"> th??m"C??u tr??? l???i kh??c"</a>
                   </div>
                </div>
                <div class="form_option--btn">
                    <p class="form_option--require">B???t bu???c</p>
                    <div id="wrapper">
                        <input type="checkbox" name="" class="switch-toggle">
                    </div>
                    <img class="btn-icon-trash" src="./img/trash.png" alt="">
                </div>
                <div class="dropdown">
                    
                    <button class="btn-secondary " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <p class="dropdown-btn">Tr???c nghi???m</p>
                        <i  class="fa-solid fa-angle-down dropdown-icon--down"></i>
                    </button>
                   
                    <div class="dropdown-menu ">
                    <button  class="dropdown-item dropdown-selection tablinks" onclick="openTabs(event,'ShortAnswer')"> Tr??? l???i ng???n</button>
                    <button  class="dropdown-item dropdown-selection tablinks" onclick="openTabs(event,'Paragraph')"> ??o???n</button>
                    <button  class="dropdown-item dropdown-selection tablinks" onclick="openTabs(event,'Multiple')"> Tr???c nghi???m</button>
                    <button  class="dropdown-item dropdown-selection tablinks" onclick="openTabs(event,'CheckBox')"> H???p ki???m</button>
                    </div>
                </div>
                </form>
              
             </div>
             <form class="form_option--tool" action="">
                <img class="tool-circle" src="./img/tool1.png" alt="">
                <img class="tool-plus" src="./img/tool2.png" alt="">
                <i  class="fa-solid fa-image toll-img"></i>
            </form>
        <div id="Question" class="tabcontent">
            <div class="form_option--question" action="">
            <input class="form_option--title" placeholder="Ti??u ?????">
            <input class="form_option--description" type="text" placeholder="M?? t???...">
            <div class="form_option--email">
              <p class="form_option--sympol">*</p>
              <p class="form_option--text">Email</p>
              <input class="form_option--input" type="text" name="" id="" placeholder="Email h???p l???">
            </div>
  
            <form class="form_option--selection" action="">
              <input class="form_option--heading" placeholder="C??u h???i">
              <div class="boder_option--heading"></div>
              <div class="form_selection">
                  <div class="form_selection--cancel">
                      <i class="fa-solid fa-xmark option-cancel"></i><br>
                      <i class="fa-solid fa-xmark "></i>
                  </div>
                  
                  <input class="form_selection--one" type="radio"> Tu??? ch???n 1 <br>
                  <input class="form_selection--two" type="radio"> T??y ch???n 2   
                 <div class="form_option--add">
                  <input class="form_selection--three" type="radio"> 
                  <a class="form-add form-add-selection"> Th??m t??y ch???n </a>
                  <span class="form-add">ho???c</span> 
                  <a href="" class="form-add form-add-reply"> th??m"C??u tr??? l???i kh??c"</a>
                 </div>
              </div>
              <div class="form_option--btn">
                  <p class="form_option--require">B???t bu???c</p>
                  <div id="wrapper">
                    <input type="checkbox" name="" class="switch-toggle">
                  </div>
                  <img class="btn-icon-trash" src="./img/trash.png" alt="">
              </div>
              <div class="dropdown">
                  
                  <button class="btn-secondary " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <p class="dropdown-btn">Tr???c nghi???m</p>
                      <i  class="fa-solid fa-angle-down dropdown-icon--down"></i>
                  </button>
                 
                  <div class="dropdown-menu ">
                    <button  class="dropdown-item dropdown-selection tablinks" onclick="openTabs(event,'ShortAnswer')"> Tr??? l???i ng???n</button>
                    <button  class="dropdown-item dropdown-selection tablinks" onclick="openTabs(event,'Paragraph')"> ??o???n</button>
                    <button  class="dropdown-item dropdown-selection tablinks" onclick="openTabs(event,'Multiple')"> Tr???c nghi???m</button>
                    <button  class="dropdown-item dropdown-selection tablinks" onclick="openTabs(event,'CheckBox')"> H???p ki???m</button>
                    </div>
              </div>
          </form>
     </div>
     <form class="form_option--tool" action="">
        <img class="tool-circle" src="./img/tool1.png" alt="">
        <img class="tool-plus" src="./img/tool2.png" alt="">
        <i  class="fa-solid fa-image toll-img"></i>
    </form>
  </div>
  
  <div id="Reply" class="tabcontent">
    <div class="form_option--reply" action="">
        <h1 class="title-heading">C??u tr??? l???i</h1>
        <h2 class="title-list">Danh s??ch</h2>
        <ul class="list-member">
             <li class="list-member-name">Nguy???n V??n A <img class="list-member-icon" src="./img/eye.png" alt=""><i class="icon-download fa-solid fa-download"></i></li><br>
             <li class="list-member-name">Nguy???n V??n B <img class="list-member-icon" src="./img/eye.png" alt=""><i class="icon-download fa-solid fa-download"></i></li><br>
             <li class="list-member-name">Nguy??n V??n C <img class="list-member-icon" src="./img/eye.png" alt=""><i class="icon-download fa-solid fa-download"></i></li>
        </ul>
        <h2 class="title-point">??i???m s???</h2>
        <div class="title-poin-heading">
             <p class="list-title">Danh s??ch</p>
             <p class="point-title">??i???m <br>/10</p>
        </div>
        <ul class="list-point">
             <li class="list-point-member">Nguy???n V??n A <span class="list-point-number">1</span> </li>
             <li class="list-point-member">Nguy???n V??n B <span class="list-point-number">1</span> </li>
             <li class="list-point-member">Nguy???n V??n C <span class="list-point-number">1</span> </li>
             <li class="list-point-member">Nguy???n V??n D <span class="list-point-number">1</span> </li>
             <li class="list-point-member">Nguy???n V??n E <span class="list-point-number">1</span> </li>
             <li class="list-point-member">Nguy???n V??n F <span class="list-point-number">1</span> </li>
             <li class="list-point-member">Nguy???n V??n G <span class="list-point-number">1</span> </li>
        </ul>
        <div class="chart-pie">
         <p class="question-chart-pie">C??u h???i <br> <span class="reply-chart-pie">x c??u tr??? l???i</span> </p>
        </div>
        <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
        <script src="./js/chart/chartpice.js"></script>
        <div class="boder-chart-horizontal"></div>
        <div class="boder-chart-pie"></div>
        <div class="chart-horizontal">
         <p class="question-chart-horizontal">C??u h???i <br> <span class="reply-chart-horizontal">x c??u tr??? l???i</span> </p>
        </div>
        <div class="horizontal-chart">
         <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.umd.min.js"></script>
         <canvas id="horizontal" style="width:100%;max-width:600px;height: 150px;"></canvas>
          <script  src="./js/chart/horizontal.js" type="text/javascript"></script>
        </div>
       
        <div class="chart-column">
         <p>??i???m s??? </p>
         <p class="chart-point">Bi???u ????? ??i???m s???</p>
         <p class="chart-quantity">S??? l?????ng</p>
         <span class="chart-poin-end">??i???m s???</span>

         <canvas id="columnChart" style="width:100%;max-width:800px;height: 300px;"></canvas>
          <script  src="./js/chart/column.js" type="text/javascript"></script>
        </div>
        </div>
  </div>
  
  <div id="Setting" class="tabcontent">
    <form class="form_option--setting" action="">
        <h1 class="form_option--title">C??i ?????t</h1>
        <p class="oder-title">?????t l??m b??i ki???m tra</p>
        <span class="points-title">Ch??? ?????nh c??c gi?? tr??? ??i???m, ?????t c??u tr??? l???i v?? t??? ?????ng cung c???p ?? ki???n ph???n h???i</span> 
        <div id="wrapper" style="top:160px">
            <input type="checkbox" name="" class="switch-toggle">
        </div>
   </form>
   
  </div>
  <div id="Send" class="tabcontent">
    <form class="form-submit" action="">
        <h1 class="form-submit-title">G???i bi???u m???u</h1>
        <span class="form-submit-code">M?? phi???u kh???o s??t:</span>
        <input class="form-submit-link" type="text" placeholder="links:">
        <i class="fa-regular fa-copy icon-copy"></i>
        <button class="btn-end" >K???t th??c</button>
    </form>
  </div>
  <!-- Short answer-->
 <div id="ShortAnswer" class="tabcontent">
    <div class="form_option--question" action="">
        <input class="form_option--title" placeholder="Ti??u ?????">
        <input class="form_option--description" type="text" placeholder="M?? t???...">
        <div class="form_option--email">
            <p class="form_option--sympol">*</p>
            <p class="form_option--text">Email</p>
            <input class="form_option--input" type="text" name="" id="" placeholder="Email h???p l???">
        </div>

        <form class="form_option--selection" action="">
            <input class="form_option--heading" placeholder="C??u h???i">
            <div class="boder_option--heading"></div>
            <input class="form-option-shortanswer" type="" placeholder="V??n b???n tr??? l???i ng???n">
            <div class="form_option--btn">
                <p class="form_option--require">B???t bu???c</p>
                <div id="wrapper">
                    <input type="checkbox" name="" class="switch-toggle">
                </div>
                <img class="btn-icon-trash" src="./img/trash.png" alt="">
            </div>
            <div class="dropdown">
                
                <button class="btn-secondary " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <p class="dropdown-btn">Tr??? l???i ng???n</p>
                    <i  class="fa-solid fa-angle-down dropdown-icon--down"></i>
                </button>
               
                <div class="dropdown-menu ">
                    <button  class="dropdown-item dropdown-selection tablinks" onclick="openTabs(event,'')"> Tr??? l???i ng???n</button>
                    <button  class="dropdown-item dropdown-selection tablinks" onclick="openTabs(event,'')"> ??o???n</button>
                    <button  class="dropdown-item dropdown-selection tablinks" onclick="openTabs(event,'')"> Tr???c nghi???m</button>
                    <button  class="dropdown-item dropdown-selection tablinks" onclick="openTabs(event,'')"> H???p ki???m</button>
                    </div>
            </div>
            </form>
          
         </div>
     </div>
     <!-- multiple-choice -->
     <div id="Multiple" class="tabcontent">
        <div class="form_option--question" action="">
            <input class="form_option--title" placeholder="Ti??u ?????">
            <input class="form_option--description" type="text" placeholder="M?? t???...">
            <div class="form_option--email">
                <p class="form_option--sympol">*</p>
                <p class="form_option--text">Email</p>
                <input class="form_option--input" type="text" name="" id="" placeholder="Email h???p l???">
            </div>
    
            <form class="form_option--selection" action="">
                <input class="form_option--heading" placeholder="C??u h???i">
                <div class="boder_option--heading"></div>
                <div class="form_selection">
                    <div class="form_selection--cancel">
                        <i class="fa-solid fa-xmark option-cancel"></i><br>
                        <i class="fa-solid fa-xmark "></i>
                    </div>
                    
                    <input class="form_selection--one" type="radio"> Tu??? ch???n 1 <br>
                    <input class="form_selection--two" type="radio"> T??y ch???n 2   
                   <div class="form_option--add">
                    <input class="form_selection--three" type="radio"> 
                    <a class="form-add form-add-selection"> Th??m t??y ch???n </a>
                    <span class="form-add">ho???c</span> 
                    <a href="" class="form-add form-add-reply"> th??m"C??u tr??? l???i kh??c"</a>
                   </div>
                </div>
                <div class="form_option--btn">
                    <p class="form_option--require">B???t bu???c</p>
                    <div id="wrapper">
                        <input type="checkbox" name="" class="switch-toggle">
                    </div>
                    <img class="btn-icon-trash" src="./img/trash.png" alt="">
                </div>
                <div class="dropdown">
                    
                    <button class="btn-secondary " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <p class="dropdown-btn">Tr???c nghi???m</p>
                        <i  class="fa-solid fa-angle-down dropdown-icon--down"></i>
                    </button>
                   
                    <div class="dropdown-menu ">
                        <button  class="dropdown-item dropdown-selection tablinks" onclick="openTabs(event,'')"> Tr??? l???i ng???n</button>
                        <button  class="dropdown-item dropdown-selection tablinks" onclick="openTabs(event,'')"> ??o???n</button>
                        <button  class="dropdown-item dropdown-selection tablinks" onclick="openTabs(event,'')"> Tr???c nghi???m</button>
                        <button  class="dropdown-item dropdown-selection tablinks" onclick="openTabs(event,'')"> H???p ki???m</button>
                        </div>
                </div>
                </form>
              
             </div>
         </div>
         <!-- Check box -->
         <div id="CheckBox" class="tabcontent">
            <div class="form_option--question" action="">
                <input class="form_option--title" placeholder="Ti??u ?????">
                <input class="form_option--description" type="text" placeholder="M?? t???...">
                <div class="form_option--email">
                    <p class="form_option--sympol">*</p>
                    <p class="form_option--text">Email</p>
                    <input class="form_option--input" type="text" name="" id="" placeholder="Email h???p l???">
                </div>
        
                <form class="form_option--selection" action="">
                    <input class="form_option--heading" placeholder="C??u h???i">
                    <div class="boder_option--heading"></div>
                    <div class="form_selection">
                        <div class="form_selection--cancel">
                            <i class="fa-solid fa-xmark option-cancel"></i><br>
                            <i class="fa-solid fa-xmark "></i>
                        </div>
                        
                        <input class="form_selection--one" type="radio"> Tu??? ch???n 1 <br>
                        <input class="form_selection--two" type="radio"> T??y ch???n 2   
                       <div class="form_option--add">
                        <input class="form_selection--three" type="radio"> 
                        <a class="form-add form-add-selection"> Th??m t??y ch???n </a>
                        <span class="form-add">ho???c</span> 
                        <a href="" class="form-add form-add-reply"> th??m"C??u tr??? l???i kh??c"</a>
                       </div>
                    </div>
                    <div class="form_option--btn">
                        <p class="form_option--require">B???t bu???c</p>
                        <div id="wrapper">
                            <input type="checkbox" name="" class="switch-toggle">
                        </div>
                        <img class="btn-icon-trash" src="./img/trash.png" alt="">
                    </div>
                    <div class="dropdown">
                        
                        <button class="btn-secondary " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <p class="dropdown-btn">H???p ki???m</p>
                            <i  class="fa-solid fa-angle-down dropdown-icon--down"></i>
                        </button>
                       
                        <div class="dropdown-menu ">
                            <button  class="dropdown-item dropdown-selection tablinks" onclick="openTabs(event,'')"> Tr??? l???i ng???n</button>
                            <button  class="dropdown-item dropdown-selection tablinks" onclick="openTabs(event,'')"> ??o???n</button>
                            <button  class="dropdown-item dropdown-selection tablinks" onclick="openTabs(event,'')"> Tr???c nghi???m</button>
                            <button  class="dropdown-item dropdown-selection tablinks" onclick="openTabs(event,'')"> H???p ki???m</button>
                            </div>
                    </div>
                    </form>
                  
                 </div>
             </div>
             <!-- paragraph -->
             <div id="Paragraph" class="tabcontent">
                <div class="form_option--question" action="">
                    <input class="form_option--title" placeholder="Ti??u ?????">
                    <input class="form_option--description" type="text" placeholder="M?? t???...">
                    <div class="form_option--email">
                        <p class="form_option--sympol">*</p>
                        <p class="form_option--text">Email</p>
                        <input class="form_option--input" type="text" name="" id="" placeholder="Email h???p l???">
                    </div>
            
                    <form class="form_option--selection" action="">
                        <input class="form_option--heading" placeholder="C??u h???i">
                        <div class="boder_option--heading"></div>
                        <input class="form-option-shortanswer" type="" placeholder="V??n b???n tr??? l???i d??i">
                        <div class="form_option--btn">
                            <p class="form_option--require">B???t bu???c</p>
                            <div id="wrapper">
                                <input type="checkbox" name="" class="switch-toggle">
                            </div>
                            <img class="btn-icon-trash" src="./img/trash.png" alt="">
                        </div>
                        <div class="dropdown">
                            
                            <button class="btn-secondary " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <p class="dropdown-btn">??o???n</p>
                                <i  class="fa-solid fa-angle-down dropdown-icon--down"></i>
                            </button>
                           
                            <div class="dropdown-menu ">
                                <button  class="dropdown-item dropdown-selection tablinks" onclick="openTabs(event,'')"> Tr??? l???i ng???n</button>
                                <button  class="dropdown-item dropdown-selection tablinks" onclick="openTabs(event,'')"> ??o???n</button>
                                <button  class="dropdown-item dropdown-selection tablinks" onclick="openTabs(event,'')"> Tr???c nghi???m</button>
                                <button  class="dropdown-item dropdown-selection tablinks" onclick="openTabs(event,'')"> H???p ki???m</button>
                                </div>
                        </div>
                        </form>
                      
                     </div>
                 </div>
 </div>
  <script src="{{ asset('js/chart/tabs.js') }}"></script>
     </div>
</header>
    </div>
</body>   
</html>