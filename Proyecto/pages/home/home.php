<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2">
                <h1>University DB</h1>
                <br><br>
                <ul class="list-group">
                    <li class="list-group-item">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        Profesores
                    </li>
                    <br>
                    <li class="list-group-item">
                        <i class="fa fa-file" aria-hidden="true"></i>
                        Estudiantes
                    </li>
                    <br>
                    <li class="list-group-item">
                        <i class="fa fa-bar-chart" aria-hidden="true"></i>
                        Facultades
                    </li>
                    <br>
                    <li class="list-group-item">
                        <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                        Carreras
                    </li>
                    <br>
                    <li class="list-group-item">
                        <i class="fa fa-comments-o" aria-hidden="true"></i>
                        Materias
                    <br>
                    <li class="list-group-item">
                        <div class="form-check form-switch">
                            <i class="fa fa-moon-o" aria-hidden="true"></i>   
                            <label class="form-check-label" for="flexSwitchCheckDefault">Dark Mode</label>
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                        </div>
                    </li>  
                </ul>
            </div>
            <div class="col-10">
                <nav class="navbar navbar-light bg-light">
                    <div class="container-fluid">
                        <form class="d-flex">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                            <i class="fa fa-search" aria-hidden="true"></i>
                            <input class="form-control me-2" type="search" placeholder="Search here..." aria-label="Search">
                        </form>
                    </div>
                </nav>
                <br>
                <div class="container-fluid">
                <h3>Dashboard</h3>
                <br>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card text-center">
                        <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                        <div class="card-body">
                            <h5 class="card-title">Total Likes</h5>
                            <p class="card-text">50,120</p>
                        </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card text-center">
                        <i class="fa fa-comments-o" aria-hidden="true"></i>
                        <div class="card-body">
                            <h5 class="card-title">Comments</h5>
                            <p class="card-text">25,120</p>
                        </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card text-center">
                        <i class="fa fa-share" aria-hidden="true"></i>
                        <div class="card-body">
                            <h5 class="card-title">Total Share</h5>
                            <p class="card-text">10,310 </p>
                        </div>
                        </div>
                    </div>
                </div>
                </div>
                <br>
                <div class="container-fluid">
                <table class="table">
                    <i class="fa fa-calendar-o" aria-hidden="true">
                        Recent Activity
                    </i>
                    <thead>
                        <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Joined</th>
                        <th scope="col">Type</th>
                        <th scope="col">Stat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>Prem Shahi</td>
                        <td>premshahi@gmail.com</td>
                        <td>2022-02-12</td>
                        <td>New</td>
                        <td>Liked</td>
                        </tr>
                        <tr>
                        <td>Deepa Chand</td>
                        <td>deepachand@gmail.com</td>
                        <td>2022-02-12</td>
                        <td>Member</td>
                        <td>Shared</td>
                        </tr>
                        <tr>
                        <td>Prakash Shahi</td>
                        <td>prakashshahi@gmail.com</td>
                        <td>2022-02-13</td>
                        <td>New</td>
                        <td>Liked</td>
                        </tr>
                        <tr>
                        </tr>
                        <tr>
                        <td>Manisha Chand</td>
                        <td>manishachand@gmail.com</td>
                        <td>2022-02-13</td>
                        <td>Member</td>
                        <td>Shared</td>
                        </tr>    
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>