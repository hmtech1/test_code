<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>cafe</title>
    <style>
        nav{
            width:100%;
            top:0;
            background: rgba(1, 4, 136, 0.9);
        }
        .seat{
            display: flex;
            flex: 0 0 14.2857142857%;
            padding: 5px;
            position: relative;
            height: 50px;
            width: 50px;
        }
        .seat label {
            display: block;
            position: relative;
            width: 100%;
            text-align: center;
            font-size: 14px;
            font-weight: bold;
            line-height: 1.5rem;
            padding: 4px 0;
            background: #AAC2CC;
            border-radius: 5px;
            animation-duration: 300ms;
            animation-fill-mode: both;
            color: #c23616;
        }
        .seat label:before {
            content: "";
            position: absolute;
            width: 75%;
            height: 75%;
            top: 1px;
            left: 50%;
            transform: translate(-50%, 0%);
            background: rgba(255, 255, 255, 0.4);
            border-radius: 3px;
        }
        .seat label:hover {
            cursor: pointer;
            box-shadow: 0 0 0px 2px #5c6aff;
        }
        .cafe_table{
            background: url('table.svg');
            height: 80px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: #fff;
            border-style: outset;
        }
         .cafe_table2{
            background: url('table.svg');
            width: 80px;
            height: 120px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: #fff;
            border-style: outset;
        }
        .gardern{
            background: url('garden.jpg');
            border-radius: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: #fff;
            font-size: 2rem;
            background-size: 100% 100%;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
            width: 100%;
        }
        .last_table{
            display: flex;
            align-items: flex-end;
        }


        @media only screen and (max-width: 600px) {

            .gardern{
                display: none;
            }
            .last_table{
            justify-content: flex-end;
        }

        
        }
        ul{
            margin-top: 20px;
        }
        ul li{
            margin-right: 50px;
            display: flex;
            font-weight: bold;
        }
        .free{
            height: 30px;
            width: 30px;
            background: rgb(170,194,204);
            margin-right: 20px;
            border-radius: 5px;
            border-style: inset;
            border-color: rgb(204,219,225);
        }
         .booked{
            height: 30px;
            width: 30px;
            background: #4671c6;
            margin-right: 20px;
            border-radius: 5px;
            border-style: inset;
            border-color: #181ba9;
        }




    </style>
  </head>

<body>
<nav>
    <h3 style="color:#fff;padding-left:10px">
    Cafeteria<img src="img/Quess_Logo.png" style="width:120px;padding:10px">
    </h3>
</nav>


<div class="container" style="margin-bottom: 25px;">
    <div class="row">
            <ul style="display: flex;">
               <li><div class="free"></div> Free </li>
                <li><div class="booked"></div> Booked</li>
            </ul>   
    </div>
    <div class="row">
        <div class="col-lg-3 col-sm-3">
            <table style="width: 144px; height: 64px;">
                <tbody>
                    <tr>
                        <td>
                            <li class="seat">
                                <label>C3</label>
                            </li>
                        </td>
                        <td>
                             <li class="seat">
                                <label>C2</label>
                            </li>
                        </td>
                        <td>
                             <li class="seat">
                                <label>C1</label>
                            </li>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <div class="cafe_table">
                                <img src="img/Quess_Logo.png" alt="" style="width : 40%">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                             <li class="seat">
                                <label>C6</label>
                            </li>
                        </td>
                        <td>
                             <li class="seat">
                                <label>C5</label>
                            </li>
                        </td>
                        <td>
                             <li class="seat">
                                <label>C4</label>
                            </li>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table style="width: 144px; height: 64px; margin-top:30px; ">
                <tbody>
                    <tr>
                        <td>
                            <li class="seat">
                                <label>C9</label>
                            </li>
                        </td>
                        <td>
                             <li class="seat">
                                <label>C8</label>
                            </li>
                        </td>
                        <td>
                             <li class="seat">
                                <label>C7</label>
                            </li>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <div class="cafe_table">
                                  <img src="img/Quess_Logo.png" alt="" style="width : 40%">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                             <li class="seat">
                                <label>C12</label>
                            </li>
                        </td>
                        <td>
                             <li class="seat">
                                <label>C11</label>
                            </li>
                        </td>
                        <td>
                             <li class="seat">
                                <label>C10</label>
                            </li>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table style="width: 144px; height: 64px; margin-top:30px; ">
                <tbody>
                    <tr>
                        <td>
                            <li class="seat">
                                <label>C15</label>
                            </li>
                        </td>
                        <td>
                             <li class="seat">
                                <label>C14</label>
                            </li>
                        </td>
                        <td>
                             <li class="seat">
                                <label>C13</label>
                            </li>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <div class="cafe_table">
                                  <img src="img/Quess_Logo.png" alt="" style="width : 40%">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                             <li class="seat">
                                <label>C18</label>
                            </li>
                        </td>
                        <td>
                             <li class="seat">
                                <label>C17</label>
                            </li>
                        </td>
                        <td>
                             <li class="seat">
                                <label>C16</label>
                            </li>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-lg-3 col-sm-3 d-flex last_table">
            <table>
                <tbody>
                    <tr>
                        <td> <li class="seat">
                                <label>C19</label>
                            </li></td>
                        <td rowspan="2">
                             <div class="cafe_table2">
                                  <img src="img/Quess_Logo.png" alt="" style="width : 100%">
                            </div>
                        </td>
                        <td> <li class="seat">
                                <label>C21</label>
                            </li></td>
                    </tr>
                    <tr>
                        <td> <li class="seat">
                                <label>C20</label>
                            </li></td>
                        <td> <li class="seat">
                                <label>C22</label>
                            </li></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-lg-6 col-sm-12 col-md-12 col-xs-12 d-flex ">
            <div class="gardern">Garden Area</div>
            
        </div>
    </div>
</div>






    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>