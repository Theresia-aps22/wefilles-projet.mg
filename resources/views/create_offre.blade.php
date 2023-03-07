<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- style -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/style.css" />

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="css/adminlte.min.css">
    <link rel="stylesheet" href="css/summernote-bs4.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <title>Creation offre</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row mt-5 justify-content-center">
            <div class="col-10">

                <div class="card">
                    <div class="card-body login-card-body">
                        <p class="login-box-msg">Creation d'offre</p>
                        <p id='error' class="login-box-msg text-danger"> erreur message </p>

                        <form action="#" >
                            <div class="input-group mb-3">
                                <input name="poste" type="text" id="poste" class="form-control" placeholder="Poste..." />
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input name="type_contrat" type="text" id="type_contrat" class="form-control" placeholder="Type Contrat..." />
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-clock"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <div class="card card-outline card-info">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            Parler plus
                                            <small>de l'offre</small>
                                        </h3>
                                        <!-- tools box -->
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                                                    title="Collapse">
                                                <i class="fas fa-minus"></i></button>
                                            <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                                                    title="Remove">
                                                <i class="fas fa-times"></i></button>
                                        </div>
                                        <!-- /. tools -->
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body pad">
                                        <div class="mb-3">
                                        <textarea class="textarea" cols="200" placeholder="tâches, qualités,..."
                                                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                        </div>

                                    </div>
                                </div>
                                </div>

                                <div class="col-4">
                                <input type="submit" class="btn btn-primary btn-block" value="Valider" />
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>


</body>
</html>