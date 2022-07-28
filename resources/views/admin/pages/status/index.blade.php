<!DOCTYPE html>
<html>
<head>
    <title>How to Active and Inactive Status in Laravel 6? - Nicesnippets.com</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"  />
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
</head>
<body class="bg-info">
    <div class="container">
      <div class="panel panel-default" style="margin-top: 40px">
        <div class="panel-heading">
          <h2>How to Active and Inactive Status in Laravel 6? - Nicesnippets.com </h2>
        </div>
        <div class="panel-body">
          <table class="table table-bordered">
              <thead>
                 <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Status</th>
                 </tr> 
              </thead>
              <tbody>
                 @foreach($users as $user)
                    <tr>
                       <td>{{ $user->name }}</td>
                       <td>{{ $user->email }}</td>
                       <td>
                          <input data-id="{{$user->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $user->status ? 'checked' : '' }}>
                       </td>
                    </tr>
                 @endforeach
              </tbody>
          </table>
        </div>
      </div>
    </div>
</body>
<script>
  $(function() {
    $('.toggle-class').change(function() {
        var status = $(this).prop('checked') == true ? 1 : 0; 
        var user_id = $(this).data('id'); 
         console.log(status);
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '/userChangeStatus',
            data: {'status': status, 'user_id': user_id},
            success: function(data){
              console.log(data.success)
            }
        });
    })
  })
</script>
</html> 