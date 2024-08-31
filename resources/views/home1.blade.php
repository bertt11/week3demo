@extends('base')

@section("content")
    <div class="row">
        <div class="col">
            Param1 : {{ $param1 }}
            @if ($param1 === "a")
            <br/>
            Parameter 1 value = a
            @endif
        </div>

        <div class="col">
            Param2 : {{ $param2 }}
            @if ($param1 === "2")
            <br/>
            Parameter 2 value = 2
            @endif
        </div>

        <div class="col-md-3 m-1 p-1 bg-primary">
            Column 1 of 2
        </div>
        <div class="col-md-2 m-2 p-1 bg-secondary">
            Column 2 of 2
        </div>
    </div>
    <div id="notificationModal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Notification</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p id = "usernamemodal" >
            Username
        /p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
    <!-- Custom form -->
     <form id="frmLogin">
        <div class="form-floating mt-2">
            <input type="text" class="form-control" name="username" id="username" placeholder ="username" />
            <label for="username">Username</label>
        </div>

        <div class="form-floating mt-3">
            <input type="password" class="form-control" name="password" id="password" placeholder ="1234" />
            <label for="password">Password</label>
        </div>
            <button type ="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
@endsection

@section('js')
    <script type="text/javascript">
        $(document).ready(function(){
            $("#frmLogin").on('submit', function() {
                console.log("Form disubmit !");
                var username = $("input[name=username").val();
                $("usernameModal").html("Username: " + username);
                //Untuk trigger open modal dari jquery
                $("#notificationModal").modal('show');
                return false;
            });
        });
    </script>
@endsection