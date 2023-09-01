<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsletter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <section class="section blob-bg-sec banner-pd-3 mt-5">
        <div class="container">

            <div class="card animate-slide-to-right-and-opacity animation-delay-1 row p-3">

                <div class="card-body row">
                    <div class="col-md-6 d-flex flex-column justify-content-center align-items-center">
                        <h1 class="heading-title">Newsletter</h1>
                        <div class="heading-description op-8">Receba novidades e promoções sobre os nossos produtos e
                            serviços</div>
                        <!-- Display form submission status -->
                        <div class="newsletter_status"></div>
                    </div>
                    <form class="col-md-6" method="POST" action="newsletter/subscrever.php">
                        <div class="form-group">
                            <label class="fw-bold text-dark"> <i class="fas fa-user text-warning p-2 fs-4"></i> SEU
                                NOME</label>
                            <input type="text" name="nome" id="nome" placeholder="Nome..." class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="fw-bold text-dark"> <i class="fas fa-envelope text-warning p-2 fs-4"></i>SEU
                                EMAIL</label>
                            <input type="email" name="email" id="email" placeholder="Email..." class="form-control">
                        </div>
                        <button id="btnSubscrever" type="submit" class="btn btn-info text-white mt-3">Enviar</button>
                    </form>
                </div>

            </div>
        </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>
</html>