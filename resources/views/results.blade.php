<?php
if(!isset($mode))$mode="user17";
$view= ($mode=='user16')?'master16':'master';
$user=Auth::$mode()->get();
?>
/*@extends('user.'.$view)
@section('title')
Result 2016
@endsection

@section('head')
  <link rel="stylesheet" href="{{ asset('js/morris.css') }}">
@endsection

@section('body')


<div class="content-wrapper" style="min-height: 1775px;">
  <section class="a4 content">
    <div id="ranks" class="container-fluid">
      <div class="row">
        <div align="center" class="col-md-12 bg-purple"><h1 style="margin:20px;"><b>TECHNOTHLON RESULT</b></h1> </div>
    </div>
    <br>
    <div align="center" class="col-md-12 bg-success"><h2 style="margin:10px;">
        Your team has secured
        @if($resp->rank < 5000)
            <b> AIR {{ $resp->rank }}</b>!
        @else
        @if($resp->roll[0] == 'H')
            <b> {{ round((10000 - $resp->rank)/100,2) }}</b> percentile.
        @else
            <b> {{ round((16000 - $resp->rank)/160,2) }}</b> percentile.
        @endif
        @endif
    </h2>
</div>
<br><br>
@if($resp->rank<=50)
<div align="center" class="col-md-12 bg-success">
    <h2 style="margin:15px;">Congratulations!</h2>
    <p style="font-size:22px">You have been selected for Technothlon Mains :)</p>
    <p style="font-size:22px">Expect a call from us soon! See you in Guwahati ;)</p>
</div>
@elseif($resp->rank< 5000)
<div align="center" class="col-md-12 bg-warning">
    <h3 style="margin:15px;">You Fought Bravely!</h3>
    <p style="font-size:22px">But alas you could not make it to IIT Guwahati :(</p>
</div>
@else
<div align="center" class="col-md-12 bg-danger">
    <h3 style="margin:15px;">You Fought Bravely!</h3>
    <p style="font-size:22px">But alas you could not make it to IIT Guwahati :(</p>
    <p style="font-size:18px">Please note that we have given ranks to top 5000 teams only, after that only percentiles have been given.</p>
</div>
@endif
</div>
<br>
<!-- RANKS-->
<div class="row">
  <div class="col-lg-6 col-xs-6">
    <div class="small-box bg-blue"><div class="inner" align="center">
    @if($resp->region_rank)
      <h3>{{ $resp->region_rank }}</h3>
    @else
      <h3>N/A</h3>
    @endif
      <h4>Region Rank</h4>
  </div>
  <div class="icon"><i class="ion ion-stats-bars"></i></div>
</div>
</div>
<div class="col-lg-6 col-xs-6">
  <div class="small-box bg-yellow"><div class="inner" align="center">
    @if($resp->city_rank)
      <h3>{{ $resp->city_rank }}</h3>
    @else
      <h3>N/A</h3>
    @endif
    <h4>City Rank</h4>
</div>
<div class="icon"><i class="ion ion-stats-bars"></i></div>
</div>
</div>
</div>
<br><br>
<div id="technalysis" class="container-fluid">
  <div class="row">
    <div align="center" class="col-md-12 bg-purple">
      <h2 style="margin:20px;"><b>SECTION-WISE ANALYSIS</b></h2>
      <h3>How To Interpret It?</h3>
      <p style="font-size:18px; text-align:left">Each option in Technothlon was placed very strategically! Each of them reprsents a unique combination of a person's ability in the following domains: Out-of-the-Box thinking, Mathematics, Analytical Ability, Logical Thinking and Cryptography.<br>
      By analysing the options marked by you in the exam, we came up with your unique score in each of these sections. Also, you can compare it with the average performance of students.</p>
      <h4><b>Please note that these scores do not represent the actual marks obtained in the exam.</b></h4>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Out Of The Box</h3>
        </div>
        <div class="box-body chart-responsive">
          <div class="chart" id="outbox" style="height: 300px;"></div>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Maths</h3>
        </div>
        <div class="box-body chart-responsive">
          <div class="chart" id="maths" style="height: 300px;"></div>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Analysis</h3>
        </div>
        <div class="box-body chart-responsive">
          <div class="chart" id="analysis" style="height: 300px;"></div>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Cryptography</h3>
        </div>
        <div class="box-body chart-responsive">
          <div class="chart" id="crypto" style="height: 300px;"></div>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Logic</h3>
        </div>
        <div class="box-body chart-responsive">
          <div class="chart" id="logic" style="height: 300px;"></div>
        </div>
      </div>
    </div>

  </div>
</div>

<!-- Certificate-->
    <section class="content-header">
        <h1 align="center">
            Certificate
        </h1>
        <br>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info center">
                <p style="font-size: 18px">Congratulations! You are eligible for <b>
                @if($cat == 'g')
                    Gold Certificate.</b><br>
                    It will be handed over to your school by post.(Should reach by now. Please inform us if not received)<br>
                    Participation e-certificate is available right now!
                @elseif($cat == 's')
                    Silver Certificate.</b><br>
                    It will be handed over to your school by post.(Should reach by now. Please inform us if not received)<br>
                    Participation e-certificate is available right now!
                @else
                    Participation e-Certificate.
                @endif
                </p>
            </div>
            <div class="col-md-6 center">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{ $user->name1 }}</h3>
                    </div>
                    <div class="panel-body">
                        <a href="{{ route('certificate16download', [Crypt::encrypt(1)]) }}" class="btn btn-primary">Download</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 center">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{ $user->name2 }}</h3>
                    </div>
                    <div class="panel-body">
                        <a href="{{ route('certificate16download', [Crypt::encrypt(2)]) }}" class="btn btn-primary">Download</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@if($resp->msg)
<div class="row">
    <div class="col-md-12">
        <div align="center" class="col-md-12 bg-info">
            <h3 style="margin:10px;">Message</h3>
            <p style="font-size: 18px">{{ $resp->msg }}</p>
        </div>
    </div>
</div>
@endif
</section>
</div>
@endsection

@section('script')
<script src="{{asset('js/raphael-min.js')}}"></script>
<script src="{{asset('js/morris.min.js')}}"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $("#result").addClass("active");
});
</script>

<script type="text/javascript">

  Morris.Donut({
  element: 'outbox',
  data: [
    {value: 7, label: "7", formatted: "Average" },
    {value: "{{ $score['outbox'] }}", label: "{{ $score['outbox'] }}", formatted: "Your Score" }
  ],
  backgroundColor: '#fff',
  labelColor: '#3c8dbc',
  colors: [
    '#f56954',
    '#00a65a',
  ],
  formatter: function (x, data) { return data.formatted; }
});

Morris.Donut({
  element: 'maths',
  data: [
    {value: 9, label: "9", formatted: "Average" },
    {value: "{{ $score['maths'] }}", label: "{{ $score['maths'] }}", formatted: "Your Score" }
  ],
  backgroundColor: '#ccc',
  labelColor: '#3c8dbc',
  colors: [
    '#f56954',
    '#00a65a',
  ],
  formatter: function (x, data) { return data.formatted; }
});

Morris.Donut({
  element: 'analysis',
  data: [
    {value: 20, label: "20", formatted: "Average" },
    {value: "{{ $score['analysis'] }}", label: "{{ $score['analysis'] }}", formatted: "Your Score" }
  ],
  backgroundColor: '#ccc',
  labelColor: '#3c8dbc',
  colors: [
    '#f56954',
    '#00a65a',
  ],
  formatter: function (x, data) { return data.formatted; }
});

Morris.Donut({
  element: 'crypto',
  data: [
    {value: 6, label: "6", formatted: "Average" },
    {value: "{{ $score['crypto'] }}", label: "{{ $score['crypto'] }}", formatted: "Your Score" }
  ],
  backgroundColor: '#ccc',
  labelColor: '#3c8dbc',
  colors: [
    '#f56954',
    '#00a65a',
  ],
  formatter: function (x, data) { return data.formatted; }
});

Morris.Donut({

  element: 'logic',
  data: [
    {value: 10, label: "10", formatted: "Average" },
    {value: "{{ $score['logic'] }}", label: "{{ $score['logic'] }}", formatted: "Your Score" }
  ],
  backgroundColor: '#ccc',
  labelColor: '#3c8dbc',
  colors: [
    '#f56954',
    '#00a65a',
  ],
  formatter: function (x, data) { return data.formatted; }
});
</script>
@endsection
