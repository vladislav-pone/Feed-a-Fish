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
                <a href="/" class="btn btn-primary" type="button">Back</a>
            </div>
          </div>
          <div class="row justify-content-md-center">
            <div class="col-md-auto mt-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Name</span>
                    </div>
                    <input id='input' type="text" class="form-control" name="name" aria-label="Feeder name">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button">Save</button>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </body>
</html>

<script>
    $('.btn.btn-outline-secondary').on('click', function() {
        var form = document.createElement("form");

        form.method = "POST";
        form.action = "/log";   

        var element1 = document.createElement("input");
        element1.value = $('#input').val();
        element1.name="name";
        form.appendChild(element1);
        form.classList.add('d-none');

        document.body.appendChild(form);

        form.submit();
    })
</script>