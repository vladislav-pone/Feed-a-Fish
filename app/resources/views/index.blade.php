<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Feed-A-Fish</title>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body style="background-color: lightcyan;">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-md-auto mt-4">
        <a href="/log" class="btn btn-primary" type="button">Feed</a>
      </div>
    </div>
    <div class="row justify-content-md-center">
      <div class="col-md-auto mt-4">
        <table class="table table-striped table-hover">
          <tbody>
            @foreach ($logs as $log) 
            <tr>
              <td>{{ $log->name }}</td>
              <td>{{ $log->date() }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="bubbles bubble-1"></div>
  <div class="bubbles bubble-2"></div>
  <div class="bubbles bubble-3"></div>
  <div class="bubbles bubble-4"></div>
</body>
</html>


<style>
.bubbles {
  position: absolute;
  bottom: 0;
  z-index: 1;
  margin-right: 50px;
  background-color: darkslateblue;
  border-radius: 50%;
  opacity: .50;
  width: 40px;
  height: 40px;
  animation: up 4s infinite;
}

.bubble-2 {
  left: 15%;
  animation: up 2s infinite;
}


.bubble-1 {
  left: 34%;
  animation: up 6s infinite;
}

.bubble-3 {
  left: 40%;
  opacity: .30;
  animation: up 3s infinite;
}

.bubble-4 {
  left: 80%;
  animation: up 4s infinite;
}

@keyframes up {
  100% {
    transform: translateY(-800px);
  }
</style>
  