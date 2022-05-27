<link rel="stylesheet" href="files/bootstrap.min.css" type="text/css">

<link rel="stylesheet" href="files/my.css">
<div class="back2">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-5">
            <table id="datatablesSimple" class="table table-striped table-bordered table-hover text-center">
                <thead style="background: white">
                    <th>Right Answer</th>
                    <th>Wrong Answer</th>
                    <th>Final Result</th>
                </thead>
                <tbody>
                    <tr>
                        <td><small>{{Session::get('correctans')}} </small></td>
                        <td><small>{{Session::get('wrongans')}} </small></td>
                        <td> <small>{{Session::get('correctans')}}/{{Session::get('correctans')+Session::get('wrongans')}}</small></td>
                    </tr>
                </tbody>
            </table>
            {{-- <label>Correct: <small>{{Session::get('correctans')}} </small></label>
            <label>Incorrect: <small>{{Session::get('wrongans')}} </small></label>
            <label>Result: <small>{{Session::get('correctans')}}/{{Session::get('correctans')+Session::get('wrongans')}}</small></label>
 --}}
      <a href="/"><button class="btn btn-primary" style="margin-left: 10%;">End Exam</button></a>

            <br>


            {{-- <div class="text-center"><a href="/">Go To Home</a></div> --}}
        </div>
        <div class="col-md-4">
        </div>

    </div>
</div>
</div>
<script src="files/jquery.min.js"></script>
