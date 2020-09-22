
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
    <title>HC-Portal</title>
</head>
<style>
    body
    {
        /* background-color: black; */
        background-image: url('/images/backpic.jpg');
        /* height: 1000px;  */
        background-position: center; 
        background-repeat: no-repeat; 
        background-size: cover;
        background-attachment: fixed;
        color: grey;
    }
    .box
    {
        display: flex;
        justify-content: center;
        margin-top:50px;
    }
    .box2
    {
        display: flex;
        justify-content: center;
        margin-top:50px;
        margin-left: 50px;
        font-family: calabri;
    }
    .container
    {
        
        width: 500px;
    }
    td
    {
        color: white;
    }
    table
    {
      background-color: rgb(255, 255, 255,0.1);
    
      border: none;
    }

    #text
    {
      background-color: rgb(255, 255, 255,0.2);
    }
    /* ----------------------------------------------------------------------- */
    .lds-facebook {
  display: inline-block;
  position: relative;
  width: 80px;
  height: 50px;
}
.lds-facebook div {
  display: inline-block;
  position: absolute;
  left: 8px;
  width: 16px;
  background: #fff;
  animation: lds-facebook 1.2s cubic-bezier(0, 0.5, 0.5, 1) infinite;
}
.lds-facebook div:nth-child(1) {
  left: 8px;
  animation-delay: -0.24s;
}
.lds-facebook div:nth-child(2) {
  left: 32px;
  animation-delay: -0.12s;
}
.lds-facebook div:nth-child(3) {
  left: 56px;
  animation-delay: 0;
}
@keyframes lds-facebook {
  0% {
    top: 8px;
    height: 64px;
  }
  50%, 100% {
    top: 24px;
    height: 32px;
  }
}
/* -------------------------------------------------------------------------------------- */
#nav1
{
  min-height: 50px;
}
.imagelogo
{
  height:auto;
  width:70px;
}

/* ------------------------------------------------------------------------------- */
.graph_box
{
  justify-content: center;
  border: 1px solid black;
  margin-left: 100px;
  margin-right: 100px;
}


.chart {
  width: 100%; 
  min-height: 400px;
}
.rowchart {
  margin:0 !important;
}

/* ----------------------------------------------------------------------------------------------------------------- */

#profile
{
  background-color: rgb(255, 255, 255,0.2);
}


/* ---------------------------------------------------------------------------------------------------------------- */

.tableFixHead          { overflow-y: auto; height: 500px; }
.tableFixHead thead th { position: sticky; top: 0; }

/* Just common table stuff. Really. */
table  { border-collapse: collapse; width: 100%; }
th, td { padding: 8px 16px; }
th     { background:rgb(1, 1, 1,0.7); }


</style>

<body>

  <!-- ========================================================================================== -->
  <!-- <nav class="navbar navbar-expand-sm navbar-light hd1 p-3" > -->
  <!-- <div class="container">
    <div class="row  " style=" height:30px; background-color: #055959;">
    <script type="text/javascript" >
      document.write ('<p class="navbar-brand text-white " style="font-size: 15px;">Current time is: <span id="date-time">', new Date().toLocaleString(), '<\/span>.<\/p>')
      if (document.getElementById) onload = function () 
        {
          setInterval ("document.getElementById ('date-time').firstChild.data = new Date().toLocaleString()", 50)
        }
    </script>
    </div>
  </div> -->
        
        
  <!-- ========================================================================================== -->
  <div class="start" id="start">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark h-20" id="nav1">
      <a class="navbar-brand text-white" href="#"> <img src="/images/HL.png" class="imagelogo" alt=""> </a>
      <span><h5>HealthChain</h5></span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            
          </ul>
          
          <button class="btn "><a href="#start"class="text-light" style="text-decoration: none;">DASHBOARD</a></button>
          <button type="button" class="btn text-white" data-toggle="modal" data-target="#myModal"> PROFILE</button>
          <button type="button" class="btn text-white" data-toggle="modal" data-target="#exampleModal"> ONLINE </button>
          <button class="btn "><a href="{{url('/newcases')}}"class="text-light" style="text-decoration: none;">HISTORY</a></button>
          <button class="btn "><a href="{{url('/graphdata')}}"class="text-light" style="text-decoration: none;">GRAPH</a></button>
          <button type="button" class="btn  w-30 text-white"><a href="{{url('/login')}}"class="text-light" style="text-decoration: none;"><i class="fas fa-arrow-right fa-0x " ></i> LOGOUT</a> </button>
        </div>
      </nav>
  </div>
    <!-- ------------------------------------------------------------------------------------------------------------------- -->
    <div class="modal fade" id="myModal">
      <div class="modal-dialog modal-xl border">
        <div class="modal-content ">

        <!-- Modal Header -->
        <div class="modal-header bg-dark text-white" id="profile">
          <h4 class="modal-title">PROFILE</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="form p-1">
            <form action="">
              <div class="row ml-2">
                <label for=""><i class="fa fa-user fa-1x text-dark" aria-hidden="true"> Personal Info</i></label>
              </div>
              <div class="row p-2"> 
                <div class="col-md-6 col-lg-5 col-xl-6 mb-1"> <input type="text" name="" disabled value="{{$found->Firstname}}" id="" class="form-control" > </div>
                <div class="col-md-6 col-lg-5 col-xl-6 mb-1"> <input type="text" name="" disabled value="{{$found->Lastname}}" id="" class="form-control" ></div>
              </div>
              <div class="row p-2">
                <div class="col-md-6 col-lg-5 col-xl-6 mb-1"> <input type="text" name="" disabled value="{{$found->DateofBirth}}" id="" class="form-control" > </div>
                <div class="col-md-6 col-lg-5 col-xl-6 mb-1"> <input type="text" name="" disabled value="{{$found->Age}}" id="" class="form-control" ></div>
              </div>
              <div class="row p-2">
                <div class="col-md-6 col-lg-5 col-xl-6 mb-1"> <input type="text" name="" disabled value="{{$found->CNIC}}" value="" id="" class="form-control" > </div>
                <div class="col-md-3 col-lg-3 col-xl-3 mb-1"> <input type="text" name="" disabled value="{{$found->Address}}" value="" id="" class="form-control" ></div>
                <div class="col-md-3 col-lg-3 col-xl-3 mb-1"> <input type="text" name="" disabled value="{{$found->Postalcode}}" value="" id="" class="form-control" ></div>
              </div>

              <div class="row p-2">
                <div class="col-md-6 col-lg-5 col-xl-6 mb-1"> <input type="text" name="" disabled value="{{$found->Contactno}}" id="" class="form-control" > </div>
                <div class="col-md-6 col-lg-5 col-xl-6 mb-1"> <input type="text" name="" disabled value="{{$found->Email}}" id="" class="form-control" ></div>
              </div>
              <div class="row ml-2">
                <label for=""><i class="fa fa-plus-square  fa-1x text-dark" aria-hidden="true"> Medical Info</i> </label>
              </div>
              <div class="row p-2">
                <div class="col-md-6 col-lg-5 col-xl-6 mb-1"> <input type="text" name="" disabled value="{{$found->Diseases}}" id="" class="form-control" ></div>
                
                <div class="col-md-3 col-lg-3 col-xl-3 mb-1"> <input type="text" name="" disabled value="{{$found->Hospital}}" id="" class="form-control" ></div>
                <div class="col-md-3 col-lg-3 col-xl-3 mb-1"> <input type="text" name="" disabled value="{{$found->City}}" id="" class="form-control" ></div>
              </div>
              <div class="row p-2">
                <div class="col-md-12 col-lg-12 col-xl-12 mb-1"> <input type="text" name="" disabled value="{{$found->Others}}" id="" class="form-control" > </div>
              </div>
              <div class="row p-2">
                <div class="col-md-6 col-lg-5 col-xl-6 mb-1"> <input type="text" name="" disabled value="{{$found->Username}}" id="" class="form-control" > </div>
                <div class="col-md-6 col-lg-5 col-xl-6 mb-1"> <input type="text" name="" disabled value="{{$found->Password}}" id="" class="form-control" ></div>
              </div>
              
                <div class="modal-footer">
                  <input type="submit" value="Save" class="btn btn-success">
                </div>
            </form>
          </div>
        </div>
         
      </div>
    </div>
  </div>
    <!-- ------------------------------------------------------------------------------------------------------------------- -->
    <div class="start">
    <h2 class="text-center text-dark">Live Graph</h2>
      <!-- <div class="graph_box border-danger">
        <div class="col-md-offset-12 col-lg-12 col-xl-12 ">
          <div class="text-center" id="curve_chart" style="width:100% height=:100%" ></div>
        </div>
      </div> -->
      <div class="col-md-12 col-lg-12 col-lx-12">
        <div class="rowchart">
          <div class="col-md-12 text-center">
            
          </div>
          <div class="col-md-4 col-md-offset-4">
            
          </div>  
          <div class="clearfix"></div>
          <div class="col-md-12">
            <div id="curve_chart" class="chart "></div>
          </div>

        </div>
      </div>
    </div>


      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header bg-dark">
              <h5 class="modal-title text-white" id="exampleModalLabel">Online Calculation</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <h2 class="text-dark text-center mt-2">Measure Your Blood Pressure Now</h2>
              <div class="box">
              
                  <div class="form-group container ">
                  <form action="{{url('\Clientdata', $found->Pid)}}" method="post">
                      @csrf
                          <div class="row mb-3 text-center">
                              <div class="col-md-12 col-lg-12 col-xl-12">
                                  <label for="" class="text-dark text-center">Hi BP</label>
                                  <input type="text" name="hiper" id="text" class="form-control text-center" required>
                              </div>
                          </div>

                          <div class="row mb-3 text-center">

                              <div class="col-md-12 col-lg-12 col-xl-12">
                                  <label for="" class="text-dark text-center">Lo BP</label>
                                  <input type="text" name="loper" id="text" class="form-control text-center" required>
                              </div>

                          </div>

                          <div class="row mb-3 text-center">

                              <div class="col-md-12 col-lg-12 col-xl-12">
                                  <label for="" class="text-dark text-center">Pulse Rate</label>
                                  <input type="text" name="plusrate" id="text" class="form-control text-center" required>
                              </div>

                          </div>
                          <div class="modal-footer">
                              <input type="submit" value="Check" class="btn btn-primary">
                          </div>
                      </form>
                  </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    <!-- ------------------------------------------------------------------------------------------------------------------------------ -->

    <div id="auto" class="Tables">
        <div class="navbar border-bottom border-white ml-3 mr-3">
            <a class="navbar-brand text-white" href="#"> <i class="fas fa-cogs fa-0x " ></i> <div class="lds-facebook"><div></div><div></div><div></div></div> Live Stats </a>
        </div>
        <div class="" id="font">
        <br>
            <!-- <h4 class="border-bottom  text-light">Live Score</h4> -->
            <div class="col-md-12 col-lg-12 col-xl-12 tableFixHead">
            <table class="table table-striped text-light">
                <thead>
                    <tr>
                        <th>Time</th>
                        <th>Hi BP</th>
                        <th>Lo BP</th>
                        <th>BMI</th>
                        <th>Pulse Rate</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($dele as $dele)
                        <tr>
                            <td>{{$dele->created_at}}</td>
                            <td>{{$dele->Hiper}}</td>
                            <td>{{$dele->Loper}}</td>
                            <td>{{$dele->BMI}}</td>
                            <td>{{$dele->Plusrate}}</td>
                            <td>{{$dele->Status}}</td>
                        </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
</body>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['PR', 'Hi HP', 'lo HP'],
          <?php
            define('DB_HOST','127.0.0.1');
            define('DB_USERNAME','root');
            define('DB_PASSWORD','');
            define('DB_NAME','FOG');

            $mysql = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
            
            if(!$mysql){
                    die("Connection failed: ".$mysqli->error);
                }
            
            $query = "SELECT * FROM Records WHERE RPid ='$found->Pid'";
            if($query != NUll)
            {
                $res = mysqli_query($mysql, $query);
                while($data = mysqli_fetch_array($res)){
                $loper = $data['Loper'];
                $Hiper = $data['Hiper'];
                $Plusrate = $data['Plusrate'];
                ?>
                ['<?php echo 'PR',$Plusrate ?>',<?php echo $Hiper ?>,<?php echo $loper ?>],
                <?php
                  }
                
            }
            else{
              echo"Temporary Data not available";
            }

          ?>
        ]);

        var options = {
          title: 'Blood Pressure Stats',
          backgroundColor: {
            fill: '#E4E4E4',
            fillOpacity: 0.2
          },
          legend: { position: 'above' }

          // pointSize: 5,
          // series: {
          //   0: {
          //       color: 'Blue'
          //   },
          //   1: {
          //       color: 'Orange'
          //   }
          // },
          // animation: {
          //   duration: 1000,
          //   easing: 'linear'
          // }


          // hAxis: {title: "Month"},
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
      $(window).resize(function(){
      drawChart()

      var cnt = 0;

        setInterval(function(){
          google.extendTraces('curve_chart',{ y:[[getData()]]}, [0]);
            cnt++;
            if(cnt > 10) {
              google.relayout('curve_chart',{
                    xaxis: {
                        range: [cnt-10,cnt]
                    }
                });
            }
        },200);
      });y
    </script>


 <!-- <script type="text/javascript"> -->
<!-- // $(document).ready(function(){
  //   $.ajax({
  //     url : "http://127.0.0.1:8000//graphdata",
  //     type: "GET",
  //     success: function(data){
  //       console.log(data);

  //       var rid = [];
  //       var Loper_G = [];

  //       for(var i in data){
  //         rid.push("UserID" + data[i].rid);
  //         Loper_G.push(data[1].Loper);
  //       }
  //       console.log(data[1].Loper);
  //       var chartdata = {
  //         labels: rid,
  //         datasets: [
  //           {
  //             label: "LoBP",
  //             fill: false,
  //             lineTension: 0.1,
  //             backgroundColor: "rgba(29,202, 255, 0.75)",
  //             borderColor: "rgba(29,202,255, 1)",
  //             pointHoverBackgroundColor: "rgba(29, 202, 255, 1)",
  //             pointHoverBorderColor: "rgba(29, 202, 255, 1)",
  //             data: Loper_G
  //           },
  //         ]
  //       }; 
  //       var ctx = $("#mycanvas");
  //       var LineGraph = new Chart(ctx, {
  //         type: 'line',
  //         data: chartdata
  //       });

  //     },
  //     error:function(data){

  //     }
  //   });
  // });






  // $(document).ready( function (){
  //   $('#auto').load('.Tables');
  //   refresh();
  // }); 
  // function refresh()
  // {
  //   setTimeout( function (){
  //   $('#auto').fadeOut('slow').load('.Tables').fadeIn('slow');
  //   refresh();
  //   }, 1000000); -->
   <!-- // } -->
  <!-- </script>    -->
</html>