<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />


    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->

</head>

<body class="antialiased">
    <h1 class="text-center p-3">CRUD EN LARAVEL</h1>
    <div class="p-5 table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead class="bg-primary">
                <tr>
                    <th scope="col">Id Pedido</th>
                    <th scope="col">Nombre usuario</th>
                    <th scope="col">Nombre vendedor</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Tienda</th>
                    <th scope="col">Fecha</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($datos as $item)
                    <tr>
                        <th>{{ $item->ped_id }}</th>
                        <td>{{ $item->ped_nameuser }}</td>
                        <td>{{ $item->ped_namevendedor }}</td>
                        <td>{{ $item->ped_description }}</td>
                        <td>{{ $item->ped_tienda }}</td>
                        <td>{{ $item->ped_fecha }}</td>
                        <td>
                            <a href="" data-bs-toggle="modal"
                            data-bs-target="#modalEdit" class="btn btn-warning btn-sm" ><i
                                    class="fa-solid fa-pen-to-square" ></i></a>

                            <a href="" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                        </td>
                       
                        <!-- Modal editar datos -->
                        <div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modificar datos del producto</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                      <form>
                                        <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">Nombre Usuario</label>
                                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                        </div>
                                        <div class="mb-3">
                                          <label for="exampleInputPassword1" class="form-label">Password</label>
                                          <input type="password" class="form-control" id="exampleInputPassword1">
                                        </div>
                                        <div class="mb-3 form-check">
                                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                          <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                      </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
          crossorigin="anonymous"
          ></script>
    <script src="https://kit.fontawesome.com/33a54e7afe.js" crossorigin="anonymous"></script>
</body>

</html>
