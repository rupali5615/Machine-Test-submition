<link rel="stylesheet" href="files/bootstrap.min.css" type="text/css">
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script> --}}
<link rel="stylesheet" href="files/my.css">

<br>
<br>

<br>

<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    {{-- <div class="container-fluid">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4" style="color: red">
                @if (session('success'))
                <h6 class="alert alert-success">{{session('success')}}</h6>
                @endif
            </div>

            <div class="col-md-4"></div>
        </div> --}}
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="col-sm-2"><h2> <b> Add Questions </b></h2></div>
                <div class="row">

                    {{-- <a href="addque"><div class="col-sm-7"><Button class="btn btn-primary">Add</Button></div></a>--}}
                   <a href="{{url('add')}}"><button class="btn btn-primary">Add</button></a>
                   <br><br>


                    <div class="col-sm-4">
                        <a href="/"><button class="btn btn-secondary">Home</button></a>

                        <div class="search-box">
                            <input type="text" class="form-control" placeholder="Search&hellip;">
                        </div>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>SN</th>
                        <th>Question <i class="fa fa-sort"></i></th>
                        <th>option A</th>
                        <th>option B</th>
                        <th>option C</th>
                        <th>option D</th>
                       <th>Answer</th>
                       <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach($que as $i)
                        <tr>
                            <td>{{$loop->index}}</td>
                            <td scope="row" class="id">{{ $i->question }}</td>
                            <td>{{$i->a}}</td>
                            <td>{{$i->b }}</td>
                            <td>{{$i->c }}</td>
                            <td>{{$i->d }}</td>
                            <td>{{$i->ans }}</td>
                        <td>
                            {{-- <a href="#" class="text-warning"  data-toggle="tooltip" data-toggle="modal" data-target="#Modal_update">Update</a> --}}
                            <a href="#" class="text-danger"  data-toggle="tooltip" >Delete</a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>

        </div>
    </div>
</div>
</body>
</html>


<!-- Modal-Add -->

<!-- Modal-Update -->
{{-- <div class="modal fade" id="Modal_update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6">Name</div>
          <div class="col-md-6">Mobile</div>
        </div>
        <div class="row">
          <div class="col-md-6"><input id="updateInputName" class="form-control"></div>
          <div class="col-md-6"><input id="updateInputMobile" class="form-control"></div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Save changes</button>
      </div>
    </div>
  </div>
</div> --}}



<script src="files/jquery.min.js"></script>
