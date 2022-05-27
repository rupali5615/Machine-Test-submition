<link rel="stylesheet" href="files/bootstrap.min.css" type="text/css">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<link rel="stylesheet" href="files/my.css">

<div class="back2">
    {{-- <script>
        function goBack() {
          window.history.back();
        }
        </script> --}}
    <div class="container-fluid">
        <br>
        <form action="/save" method="post">
        {{-- {{ csrf_token() }} --}}@csrf
        <div class="row" style="padding: 20vh; color:white;">


            <div class="col-md-3">

            </div>
            <div class="col-md-4">
                <h2><b>PHP Quiz</b></h2>
                <h4><small>Total Questions 10</small></h4>
                <br>

                <h4>{{Session::get('nextq')}} : {{$question->question}}</h4><br>
                <input value="a" checked="true" type="radio" name="ans"> (a) <small>{{$question->a}}</small><br>
                <input value="b" type="radio" name="ans"> (b) <small>{{$question->b}}</small><br>
                <input value="c" type="radio" name="ans"> (c) <small> {{$question->c}}</small><br>
                <input value="d" type="radio" name="ans"> (d) <small>{{$question->d}}</small><br>
                <input value="{{$question->ans}}" style="visibility: hidden;" name="dbans">
                <br>
                <br>
                <button  type="submit" class="btn btn-primary" style="float: right">Next</button>
                <a href="{{ url()->previous() }}" class="btn btn-secondary"><i class="fa fa-angle-left"></i>Back</a>
            </div>
            <div class="col-md-5">
                <section>
                    Timer :<h1>00:00</h1>
                  </section>
                <script src="script.js"></script>
            </div>
        </div>
    </form>

    </div>
</div>
<script type="text/javascript">
   let timeSecond = 900;
const timeH = document.querySelector("h1");

displayTime(timeSecond);

const countDown = setInterval(() => {
  timeSecond--;
  displayTime(timeSecond);
  if (timeSecond == 0 || timeSecond < 1) {
    endCount();
    clearInterval(countDown);
  }
}, 1000);

function displayTime(second) {
  const min = Math.floor(second / 60);
  const sec = Math.floor(second % 60);
  timeH.innerHTML = `
  ${min < 10 ? "0" : ""}${min}:${sec < 10 ? "0" : ""}${sec}
  `;
}

function endCount() {
  timeH.innerHTML = "Time out";
}


</script>
<script src="files/jquery.min.js"></script>
