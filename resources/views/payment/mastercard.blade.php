<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>select payment method</title>

  </head>
  <body>

    <h1 class="text-center text-capitalize pt-5 pb-3"></h1>
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-2" style="border: 1px solid #E2E7EB;">
            <div style="padding: 30px;">
                
                <div>
                  <img style="text-align: center; width: 100%" src="payment_image/nexus.png">
                </div>

                  <p>card information</p>
<form >
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-5 col-form-label" style="text-align: end;">Card Holder Name</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Card Holder Name">
    </div>
  </div>

<p class="text-center">Card Type VisaDebit</p>

  <div class="form-group row">
    <label for="cardnumber" class="col-sm-5 col-form-label" style="text-align: end;">Card Number</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="cardnumber" placeholder="Card Number">
    </div>
  </div>

    <div class="form-group row">
    <label for="pin" class="col-sm-5 col-form-label" style="text-align: end;">PIN</label>
    <div class="col-sm-3">
      <input type="password" class="form-control" id="pin" placeholder="pin">
    </div>
  </div>

  <p>Amount
  1800.00</p>
  <p>Currency
  BDT</p>
  <p>Description
  3TEC1567608993103460</p>

 <div class="form-group row">
    {{-- <label for="pin" class="col-sm-5 col-form-label" style="text-align: end;">PIN</label> --}}
    
    <div class="col-sm-3 ">
     {{--  <a href="{{ url('profile') }}" class="btn btn-primary" style="float: end;">submit</a> --}}
    </div>
     
    <div class="col-sm-3">
      {{-- <a href="{{ url('confirm') }}" class=" btn btn-primary" style="float: left;">back</a> --}}
       <a href="{{ url('profile') }}" class="btn btn-primary" style="float: end;">submit</a>
    </div>
  </div>



</form>



                <div>
                  <img style="text-align: center; width: 100%" src="payment_image/nexus_footer.png">
                </div>

            </div>
          </div>
        </div>
      </div>












    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>