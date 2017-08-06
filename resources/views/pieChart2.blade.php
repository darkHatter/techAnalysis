<!DOCTYPE HTML>
<html>
<head>
<title>
Technalysis
</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
<link type="text/css" href="/css/css1.css" rel="stylesheet" />
<link type="text/css" href="/css/css2.css" rel="stylesheet" />

<!--[if IE]><script language="javascript" type="text/javascript" src="../../Extras/excanvas.js"></script><![endif]-->

<!-- JIT Library File -->
<script language="javascript" type="text/javascript" src="/js/example2.js"></script>

<!-- Example File -->
<script language="javascript" type="text/javascript" src="/js/example1.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet">
<link href="https://adminlte.io/themes/AdminLTE/dist/css/AdminLTE.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>

<script src="https://www.gstatic.com/charts/loader.js"></script>
<style>
.curves{
  background:white;
  margin:20px;
  border-radius:5px;
  box-shadow:2px 2px 10px grey;
  border-top:5px solid #3c8dbc;
  }
 .sectionWise{
  background:white;
  margin:20px;
  border-radius:5px;
  box-shadow:2px 2px 10px grey;
  border-top:5px solid #3c8dbc;
  height: 300px;

 }
 h3{
  font-size:35px;
  font-family: 'Raleway', sans-serif;
  text-align:center;

 }

 h4{
  text-align:center;
  font-size:30px;
    font-family: 'Raleway', sans-serif;
 }

 body{
  background:#ecf0f5;
 }
 table{
  font-size: 20px;
    font-family: 'Raleway', sans-serif;
}
</style>
<script>
google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
    google.charts.setOnLoadCallback(drawChart2);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Question No.', 'Rating',],
          ['1',  3.5,    ],
          ['2',  2,     ],
          ['3',  3,      ],
          ['4',  4,     ],
          ['5',  5,     ],
          ['6',  2,     ],
          ['7',  1.5,     ],
          ['9',  3,     ],
          ['10',  4,     ],
          ['11',  2.5,     ],
          ['12',  3.5,     ],
          ['13',  2,     ],
          ['14',  4.5,     ],
          ['15',  3,     ],
          ['16',  2,     ],
          ['17',  2.5,     ],
          ['18',  3,   ],
          ['19',  4,     ],
          ['20',  2.5,     ]
        ]);

        var options = {
          title: 'Ratings Of Question',
          width:'100%',
          height:400,
          'chartArea': {left:30, 'width': '90%', 'height': '65%'},
          backgroundColor:'white',
          legend: { position: 'bottom' }

        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }

      function drawChart2() {
        var data = google.visualization.arrayToDataTable([
          ['Question No.', '% Correctly Answered', '% Attempted',],
          ['1',  40,60    ],
          ['2',  23,80     ],
          ['3',  39,90      ],
          ['4',  54, 60    ],
          ['5',  35,  68   ],
          ['6',  52,    78 ],
          ['7',  40,60  ],
          ['9',  63,84     ],
          ['10',  24, 65    ],
          ['11',  25,  58   ],
          ['12',  35,  84  ],
          ['13',  56,  87  ],
          ['14',  45,   48 ],
          ['15',  63, 90    ],
          ['16',  62,  100  ],
          ['17',  25,   50  ],
          ['18',  35,  64 ],
          ['19',  48,   85  ],
          ['20',  25,   81  ]
        ]);

        var options = {
          title: 'Percentage Correct and Attempted',
          width:'100%',
          height:400,
          'chartArea': {'width': '89%', 'height': '65%'},
          colors:['red','#000000'],
          backgroundColor:'#white',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.AreaChart(document.getElementById('curve'));

        chart.draw(data, options);
      }
</script>
</head>
<body onload="init();">




<div id="centre-container">
    <div id="infovis"></div>
</div>

<div id="right-container">

<div id="inner-details"></div>

</div>

<div id="log"></div>
</div>



<div class="container graph1">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 container curves">
      <div id="curve_chart" >
    </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 sectionWise">
 <h3> The most scoring Section Were: </h3>
  <table class="table table-striped">
  <thead>
  <td colspan="2" style="font-weight: bold; text-align: center;">JUNIORS</td>
  </thead>
  <thead style="font-weight: bold;">
  <td>Section</td>
  <td>Comprising Questions</td>
  </thead>
  <tr>
  <td>Power 2</td>
  <td>Q1, Q2, Q3</td>
  </tr>
  <tr>
  <td>Fibo 1</td>
  <td>Q6, Q7, Q8</td>
  </tr>
  <tr>
  <td>Fibo 2</td>
  <td>Q11, Q12, Q13</td>
  </tr>
  </table>

  </div>


    </div>

  <div class="row">
    <div class="curves container col-lg-6 col-md-6 col-sm-6">
      <div id="curve" >
    </div>
      </div>
    </div>
</div>

</body>
</html>
