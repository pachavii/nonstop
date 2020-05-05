<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Book Store</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    
    <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
    

    <!-- css -->
    <!--link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"-->

    <!-- Add icon library -->
    <script src="https://kit.fontawesome.com/2f30b2ba37.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
    <style>
        html,
        body {

            color: white;
            font-family: 'Prompt', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;

            background-color: #e7ecea;
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;

        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 55px;
        }

        .links>a {
            color: white;
            padding: 0 25px;
            font-size: 20px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        

        .default {
            border-color: #FFFFFF;
            color: black;
        }

        .default:hover {
            border-color: #e7e7e7;
            background: #e7e7e7;
        }
        .btn {
            width:16.66%;
            height:700px;
            background-color: #fff;
            color: black;
            margin-top:-10px;
            font-size: 50px;
            cursor: pointer;
            float: left;
            font-family: 'Prompt', sans-serif;   
        }
        .btn:hover {
        background-color: #333;
        color: white;
        }

        
        .btn1 {
            
            
            color: black;
            padding: 14px 28px;
            font-size: 30px;
            cursor: pointer;
            border-radius: 10px;
            margin-top:10px;
            font-family: 'Prompt', sans-serif;  
        }
        .btn2 {
            
            
            color: black;
            padding: 14px 28px;
            font-size: 30px;
            cursor: pointer;
            border-radius: 10px;
            margin-top:10px;
            font-family: 'Prompt', sans-serif;  
        }
        .btn3 {
            border: 4px solid #e6e6e6;
            background-color: #66ff66;
            color: black;
            padding: 14px 28px;
            font-size: 30px;
            cursor: pointer;
            border-radius: 10px;
            margin-top:10px;
            font-family: 'Prompt', sans-serif;  
        }
        .btn4 {
            border: 4px solid #fff;
            
            color: white;
            padding: 14px 30px;
            font-size: 30px;
            cursor: pointer;
            border-radius: 10px;
            margin-top:50px;
            font-family: 'Prompt', sans-serif;  

        }
        .btn5 {
            border: 4px solid #e6e6e6;
            
            color: black;
            padding: 14px 30px;
            font-size: 30px;
            cursor: pointer;
            border-radius: 10px;
            margin-top:50px;
            font-family: 'Prompt', sans-serif;  

        }
        .btn6 {
            border: 4px solid #000;
            
            color: black;
            padding: 14px 30px;
            font-size: 30px;
            cursor: pointer;
            border-radius: 10px;
            margin-top:50px;
            font-family: 'Prompt', sans-serif;  

        }
        .btn7 {
            border: 0px ;
            
            color: black;
            padding: 14px 30px;
            font-size: 30px;
            cursor: pointer;
            border-radius: 10px;
            margin-top:50px;
            font-family: 'Prompt', sans-serif;  

        }

        .default1 {
            border-color: black;
            color: black;
        }

        .default1:hover {
            border-color: black;
            background: #e7e7e7;
        }

        /* Create two equal columns that floats next to each other */
        .column {
            float: center;
            width: 31.5%;
            padding: 10px;
            height: 300px;
            /* Should be removed. Only for demonstration */
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;


        }
        .navbar{
             overflow: hidden;
            background-color: #333;
            position: fixed ; /* Set the navbar to fixed position */
            top: 0; /* Position the navbar at the top of the page */
            width: 100%; /* Full width */
            padding:15px;
            z-index: 1;
        }
        .navbar li {
             float: left;
                display: block;
                color: #f2f2f2;
                text-align: center;
                padding: 10px 16px;
                text-decoration: none;
                font-size: 20px;
        }
        
        .cropped {
            width: 100%; /* width of container */
            height: 1000px; /* height of container */
            object-fit: cover;
            
            
        }
        .container {
        position: relative;
        }
        .center {
             position: absolute;
                top: 55%;
                left: 50%;
                transform: translate(-50%, -50%);
                 font-size: 150px;
        }
        .center1 {
             position: absolute;
                top: 85%;
                transform: translate(-50%, -50%);
                 font-size: 150px;
        }
        .topleft {
         position: absolute;
         top: 40%;
         left: 5%;
         font-size: 140px;
        }
        .topright {
         position: absolute;
         top: 40%;
         left: 55%;
         font-size: 140px;
        }
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto; /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            border-radius: 10px;
            width: 30%; /* Could be more or less, depending on screen size */
        }

            /* The Close Button */
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            padding: 0.5rem 1rem;
            margin: -1rem -1rem -1rem auto;
           
        }.close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .modal-header {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            padding: 1rem 1rem;
            border-bottom: 1px solid #dee2e6;
            border-top-left-radius: calc(0.3rem - 1px);
            border-top-right-radius: calc(0.3rem - 1px);
        }

        .modal-title {
            margin-bottom: 0;
            line-height: 1.6;
            color: #000;
            font-size: 40px;
        }

        .modal-body {
            position: relative;
            flex: 1 1 auto;
            padding: 1rem;
            color: #000;
            font-size: 30px;
        }

        .modal-footer {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: flex-end;
            
            border-top: 1px solid #dee2e6;
            border-bottom-right-radius: calc(0.3rem - 1px);
            border-bottom-left-radius: calc(0.3rem - 1px);
        }
        .form-group {
            margin-bottom: 1rem;
        }
        .form-control {
            display: block;
            width: 95%;
            height: 50px;
            padding: 0.375rem 0.75rem;
            font-size: 30px;
            font-weight: bold 400;
            line-height: 1.6;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: 10px;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }
        .form-control1 {
            display: block;
            width: 30%;
            height: 50px;
            padding: 0.375rem 0.75rem;
            font-size: 30px;
            font-weight: bold 400;
            line-height: 1.6;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: 10px;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
            margin-left:30%;
            margin-top:10px;
        }
        select{
            width: 225px;
            height: 50px;
            cursor: pointer;
            background-color: white;
            box-shadow: 0 2px 0 white;
            border-radius: 2px;
            border: 1px solid #ced4da;
        }
        <!-- custom styling for all icons -->
        i.fas,
        i.fab {
            border: 1px solid red;
        }
        .searchform {
     display: inline;	
    margin-left: 80px;
     margin-top: 50px;
     margin-bottom: 50px;
}

.searchform label, 
.searchform input {
  color: #737373;
  float: left;
  vertical-align: baseline;
}

.searchform label { margin: .125em .125em 0 0; }

.searchform input[type=search] {
    font-family: 'Prompt', sans-serif;
    font-size:30px;
  border: .125em solid #737373;
  border-width: 0 0 3px;
  background-color: transparent;
  padding: .1875em .375em;
  width: 80%;
}

.searchform input[type=search]:focus {
  border-color: #E18728;
  color: #E18728;
  outline: 0;
}

@media only screen and (min-width: 48em) {
  .searchform input[type=search]{ width: 20%; }
}
.text-block {
  position: absolute;
  top: 50%;
  left: 50%;
  background-color: white;
  color: Black;
  width:30%;
  padding:5% 3% 5% 5%;
 transform: translate(-50%, -50%);
 border-radius: 25px;
 -webkit-box-shadow: 0 50px 80px rgba(0,0,0,.5);
box-shadow: 0 50px 80px rgba(0,0,0,.5);
}
.text-block2 {
  position: absolute;
  top: 50%;
  left: 50%;
  background-color: white;
  color: Black;
  width:30%;
  padding:2% 3% 0% 5%;
 transform: translate(-50%, -50%);
 border-radius: 25px;
 -webkit-box-shadow: 0 50px 80px rgba(0,0,0,.5);
box-shadow: 0 50px 80px rgba(0,0,0,.5);
}
.text-block3 {
  position: absolute;
  top: 40%;
  left: 50%;
  background-color: white;
  color: Black;
  width:40%;
  padding:2% 3% 3% 5%;
 transform: translate(-50%, -50%);
 border-radius: 25px;
 -webkit-box-shadow: 0 50px 80px rgba(0,0,0,.5);
box-shadow: 0 50px 80px rgba(0,0,0,.5);
}
.text-block4 {
  position: absolute;
  top: 40%;
  left: 50%;
  background-color: white;
  color: Black;
  width:60%;
  padding:2% 3% 3% 5%;
 transform: translate(-50%, -50%);
 border-radius: 25px;
 -webkit-box-shadow: 0 50px 80px rgba(0,0,0,.5);
box-shadow: 0 50px 80px rgba(0,0,0,.5);
}



    
        
        

    </style>
</head>


<body>
    <div id="app">
        <main class="py-4">
        <div class="navbar">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            @if (Route::has('login'))

                @guest

                    <li class="links">
                        <a href="{{ route('login') }}">Login</a>
                    </li>

                    @if (Route::has('register'))
                        <li class="links">
                            <a href="{{ route('register') }}">Register</a>
                        </li>
                    @endif

                @else <!-- //แสดงเมื่อ Login แล้ว -->
                <div class="content">
                    @role('admin')
                        <li class="links"><a href="{{ url('/home') }}">Admin Panel</a></li>
                    @endrole
                    @role('bookstore')
                        <li class="links"><a href="{{ url('/home') }}">หน้าหลัก</a></li>
                        <li class="links"><a href="{{ url('/book') }}">หนังสือ</a></li>
                        <li class="links"><a href="{{ url('/publisher') }}">สำนักพิมพ์</a></li>
                        <li class="links"><a href="{{ url('/subagent') }}">ซับเอเย่นต์</a></li>
                        <li class="links"><a href="{{ url('/member') }}">สมาชิก</a></li>
                        <li class="links"><a href="{{ url('/recievebook') }}">รับหนังสือเข้า</a></li>
                        <li class="links"><a href="{{ url('/storeanalyse') }}">วิเคราะห์ข้อมูล</a></li>
                    @endrole
                    @role('subagent')
                        <li class="links"><a href="{{ url('/home') }}">หน้าหลัก</a></li>
                        <li class="links"><a href="{{ url('subrecievelist/') }}">สรุปรายการหนังสือ</a></li>
                        <li class="links"><a href="{{ url('subreturnlist/') }}">คืนหนังสือ</a></li>
                    @endrole
                
                            <!-- @can('manageuser')
                                <li class="links"><a href="#">Manage Users</a></li>
                            @endcan
                            @can('addorder')
                                <li class="links"><a href="#">Add Orders</a></li>
                            @endcan
                            @can('editorder')
                                <li class="links"><a href="#">Edit Orders</a></li>
                            @endcan
                            @can('deleteorder')
                                <li class="links"><a href="#">Delete Orders</a></li>
                            @endcan
                            @can('readorder')
                                <li class="links"><a href="#">Read Orders</a></li>
                            @endcan -->
                                
                    <li class="links" style=" float:right;margin-right:30px;">
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
                            @csrf
                        </form>                                
                    </li>

                 </div>      
                @endguest
                
            @endif

        </main>
        @yield('content')
    </div>

</body>

</html>