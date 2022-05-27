<link rel="stylesheet" href="files/bootstrap.min.css" type="text/css">

<link rel="stylesheet" href="files/my.css">
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4" style="color: red">
            @foreach ($errors->all() as $error)
                <h5>{{$error}}</h5>
            @endforeach
        </div>

        <div class="col-md-4"></div>
    </div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-4">
  <form action="{{url('addque')}}" method="post">
    @csrf
    <h3>Add Questions</h3>
    <div class="form-group">
      <label for="exampleInputEmail1">Question</label>
      <input type="text" class="form-control" name="question" placeholder="Question">
      <small class="form-text text-muted">Your Question</small>
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">options :</label>
        <label for="exampleInputPassword1">A :</label>
        <input type="text" class="form-control" name="opa" placeholder="Option A">
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1">B : </label>
        <input type="text" class="form-control" name="opb" placeholder="Option B">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">C:</label>
        <input type="text" class="form-control" name="opc" placeholder="Option C">
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1">D : </label>
        <input type="text" class="form-control" name="opd" placeholder="Option D">
      </div>


      <div class="form-group">
        <label for="exampleInputPassword1">Answer :</label>
      <select name="ans" class="form-control">
        <option value="a">A</option>
        <option value="b">B</option>
        <option value="c">C</option>
        <option value="d">D</option>
        </select></div>
<br><br>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="questions" style="color: red"><b>Back</b></a>
  </form>
</div>
<div class="col-md-6"></div>
</div>
</div>
</body>
  <script src="files/jquery.min.js"></script>
