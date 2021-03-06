<!doctype html>
<html lang="en">
  <head>
    <title>Broadcast Mail</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
          <div class="row">
              <div class="col">
                  <div class="text-center mt-5">
                      <h1>Example broadcast mail</h1>
                  </div>
                  {{-- <div class="alert alert-success" role="alert">
                    Success mengirim, harap melihat email anda
                  </div> --}}
                  <form action="{{ route('send_email') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlSelect2">Subscribers</label>
                        <select multiple class="form-control" id="exampleFormControlSelect2" name="subscribers[]">
                            @foreach ($subrek as $subs)
                            <option>{{ $subs->user }}</option>
                            @endforeach
                        </select>
                      </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Message</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message">{{ $message }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Send</button>
                </form>
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