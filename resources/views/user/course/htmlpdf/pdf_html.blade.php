<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style type="text/css">


    </style>
</head>

<body>
    <div class="container mt-5 d-flex align-items-center justify-content-center" style="margin-left:400px;">
<div style="width:800px; height:600px; padding:20px; text-align:center; border: 10px solid #787878">
<div style="width:750px; height:550px; padding:20px; text-align:center; border: 5px solid #787878">
       <span style="font-size:50px; font-weight:bold">Certificate of Completion</span>
       <br>
       <span style="font-size:25px"><i>This is to certify that</i></span>
       <br><br/>
       <span style="font-size:30px"><b> <p class="name">{{$name}}</p></b></span>
       <span style="font-size:25px"><i>has completed the course</i></span> <br/><br/>
       <span style="font-size:30px">{{$course_name}}</span> <br/><br/>
       <span style="font-size:20px">with score of <b>{{$total}} %</b></span> <br/><br/>
       <span style="font-size:25px"><i>dated</i></span><br>

      <span style="font-size:30px">{{ \Carbon\Carbon::parse($date)->format('m/d/Y')}}</span>
</div>
</div>
</div>
</body>

</html>
