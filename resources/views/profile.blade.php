<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-12 col-xl-4">
  
          <div class="card" style="border-radius: 15px;">
            <div class="card-body text-center">
              <div class="mt-3 mb-4">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava2-bg.webp"
                  class="rounded-circle img-fluid" style="width: 100px;" />
              </div>
              {{-- Nama --}}
              <h4 class="mb-2">Nama</h4>
              {{-- Satatus --}}
              <p class="text-muted mb-4">@Admin / @User <span class="mx-2">|</span> 
                {{-- email --}}
                <a href="#!">email@gmail.com</a></p>
              <div class="mb-4 pb-2">
                <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-primary btn-floating">
                  
                </button>
                <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-primary btn-floating">
                  
                </button>
                <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-primary btn-floating">
                  
                </button>
              </div>
              <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-rounded btn-lg">
                Logout
              </button>
              
            </div>
          </div>
  
        </div>
      </div>
    </div>
  </section>