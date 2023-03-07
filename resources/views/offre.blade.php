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
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <title>Offre d'emploi</title>

</head>
<body>
    @extends('layouts.app')

    @section('content')
    <div class="container-fluid">
        <div class="row ml-1 mt-2 mb-2 ">
            <span class="fa fa-plus-circle" style="font-size: 50px; cursor: pointer">
            </span>
        </div>
        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card card-solid">
                <div class="card-body pb-0">
                    <div class="row d-flex align-items-stretch">
                        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                            <div class="card bg-light">
                                <div class="card-header text-muted border-bottom-0">
                                    Etech
                                </div>
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="lead"><b>Data scientist</b></h2>
                                            <p class="text-muted text-sm"><b>A propos: </b> Un professionnel de l'informatique qui utilise des compétences en analyse de données, en statistiques et en programmation pour extraire des informations exploitables à partir de grandes quantités de données </p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Immeuble Aquamad
                                                    Route du Pape, BP 8515
                                                    Morarano - Alarobia
                                                </li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>  +261 20 22 536 04</li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-vie"></i></span>  etech@etechconsulting-mg.com</li>
                                            </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                            <img src="images/etech.png" alt="" class="img-circle img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">
                                        <a href="#" class="btn btn-sm bg-teal">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-primary">
                                            <i class="fas fa-user"></i> Postuler
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                            <div class="card bg-light">
                                <div class="card-header text-muted border-bottom-0">
                                    Orange Madagascar
                                </div>
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="lead"><b>Chef Commercial</b></h2>
                                            <p class="text-muted text-sm"><b>A propos: </b>un professionnel responsable de la gestion de toutes les activités commerciales d'une entreprise. </p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span>
                                                    La Tour, rue Ravoninahitriniarivo Ankorondrano
                                                    BP 7754, 101 Antananarivo Madagascar
                                                </li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>  +261 32 34 567 89</li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-vie"></i></span>  contact.oma@orange.com</li>
                                            </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                            <img src="images/orange.png" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">
                                        <a href="#" class="btn btn-sm bg-teal">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-primary">
                                            <i class="fas fa-user"></i> Postuler
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                            <div class="card bg-light">
                                <div class="card-header text-muted border-bottom-0">
                                    Etech
                                </div>
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="lead"><b>Data Strategist</b></h2>
                                            <p class="text-muted text-sm"><b>A propos: </b> un professionnel qui aide les entreprises à élaborer des stratégies efficaces pour l'utilisation de leurs données. </p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Immeuble Aquamad
                                                    Route du Pape, BP 8515
                                                    Morarano - Alarobia
                                                </li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>  +261 20 22 536 04</li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-vie"></i></span>  etech@etechconsulting-mg.com</li>
                                            </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                            <img src="images/etech.png" alt="" class="img-circle img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">
                                        <a href="#" class="btn btn-sm bg-teal">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-primary">
                                            <i class="fas fa-user"></i> Postuler
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                            <div class="card bg-light">
                                <div class="card-header text-muted border-bottom-0">
                                    Ibonia
                                </div>
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="lead"><b>Laravel Developper</b></h2>
                                            <p class="text-muted text-sm"><b>A propos: </b> un professionnel qui maitrise le framework Laravel</p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span>
                                                    Ambohidepona
                                                </li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>  033 15 646 67</li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-vie"></i></span>  ibonia@ibonia.mg</li>
                                            </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                            <img src="images/ibonia.png" alt="" class="img-circle img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">
                                        <a href="#" class="btn btn-sm bg-teal">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-primary">
                                            <i class="fas fa-user"></i> Postuler
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                            <div class="card bg-light">
                                <div class="card-header text-muted border-bottom-0">
                                    Etech
                                </div>
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="lead"><b>Data scientist</b></h2>
                                            <p class="text-muted text-sm"><b>A propos: </b> Un professionnel de l'informatique qui utilise des compétences en analyse de données, en statistiques et en programmation pour extraire des informations exploitables à partir de grandes quantités de données </p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Immeuble Aquamad
                                                    Route du Pape, BP 8515
                                                    Morarano - Alarobia
                                                </li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>  +261 20 22 536 04</li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-vie"></i></span>  etech@etechconsulting-mg.com</li>
                                            </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                            <img src="images/etech.png" alt="" class="img-circle img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">
                                        <a href="#" class="btn btn-sm bg-teal">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-primary">
                                            <i class="fas fa-user"></i> Postuler
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                            <div class="card bg-light">
                                <div class="card-header text-muted border-bottom-0">
                                    Orange Madagascar
                                </div>
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="lead"><b>Chef Commercial</b></h2>
                                            <p class="text-muted text-sm"><b>A propos: </b>un professionnel responsable de la gestion de toutes les activités commerciales d'une entreprise. </p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span>
                                                    La Tour, rue Ravoninahitriniarivo Ankorondrano
                                                    BP 7754, 101 Antananarivo Madagascar
                                                </li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>  +261 32 34 567 89</li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-vie"></i></span>  contact.oma@orange.com</li>
                                            </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                            <img src="images/orange.png" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">
                                        <a href="#" class="btn btn-sm bg-teal">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-primary">
                                            <i class="fas fa-user"></i> Postuler
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                            <div class="card bg-light">
                                <div class="card-header text-muted border-bottom-0">
                                    Etech
                                </div>
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="lead"><b>Data Strategist</b></h2>
                                            <p class="text-muted text-sm"><b>A propos: </b> un professionnel qui aide les entreprises à élaborer des stratégies efficaces pour l'utilisation de leurs données. </p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Immeuble Aquamad
                                                    Route du Pape, BP 8515
                                                    Morarano - Alarobia
                                                </li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>  +261 20 22 536 04</li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-vie"></i></span>  etech@etechconsulting-mg.com</li>
                                            </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                            <img src="images/etech.png" alt="" class="img-circle img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">
                                        <a href="#" class="btn btn-sm bg-teal">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-primary">
                                            <i class="fas fa-user"></i> Postuler
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                            <div class="card bg-light">
                                <div class="card-header text-muted border-bottom-0">
                                    Ibonia
                                </div>
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="lead"><b>Laravel Developper</b></h2>
                                            <p class="text-muted text-sm"><b>A propos: </b> un professionnel qui maitrise le framework Laravel</p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span>
                                                    Ambohidepona
                                                </li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>  033 15 646 67</li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-vie"></i></span>  ibonia@ibonia.mg</li>
                                            </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                            <img src="images/ibonia.png" alt="" class="img-circle img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">
                                        <a href="#" class="btn btn-sm bg-teal">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-primary">
                                            <i class="fas fa-user"></i> Postuler
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                            <div class="card bg-light">
                                <div class="card-header text-muted border-bottom-0">
                                    Orange Madagascar
                                </div>
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="lead"><b>Chef Commercial</b></h2>
                                            <p class="text-muted text-sm"><b>A propos: </b>un professionnel responsable de la gestion de toutes les activités commerciales d'une entreprise. </p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span>
                                                    La Tour, rue Ravoninahitriniarivo Ankorondrano
                                                    BP 7754, 101 Antananarivo Madagascar
                                                </li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>  +261 32 34 567 89</li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-vie"></i></span>  contact.oma@orange.com</li>
                                            </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                            <img src="images/orange.png" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">
                                        <a href="#" class="btn btn-sm bg-teal">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-primary">
                                            <i class="fas fa-user"></i> Postuler
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                            <div class="card bg-light">
                                <div class="card-header text-muted border-bottom-0">
                                    Etech
                                </div>
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="lead"><b>Data Strategist</b></h2>
                                            <p class="text-muted text-sm"><b>A propos: </b> un professionnel qui aide les entreprises à élaborer des stratégies efficaces pour l'utilisation de leurs données. </p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Immeuble Aquamad
                                                    Route du Pape, BP 8515
                                                    Morarano - Alarobia
                                                </li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>  +261 20 22 536 04</li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-vie"></i></span>  etech@etechconsulting-mg.com</li>
                                            </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                            <img src="images/etech.png" alt="" class="img-circle img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">
                                        <a href="#" class="btn btn-sm bg-teal">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-primary">
                                            <i class="fas fa-user"></i> Postuler
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                            <div class="card bg-light">
                                <div class="card-header text-muted border-bottom-0">
                                    Ibonia
                                </div>
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="lead"><b>Laravel Developper</b></h2>
                                            <p class="text-muted text-sm"><b>A propos: </b> un professionnel qui maitrise le framework Laravel</p>
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span>
                                                    Ambohidepona
                                                </li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>  033 15 646 67</li>
                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-vie"></i></span>  ibonia@ibonia.mg</li>
                                            </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                            <img src="images/ibonia.png" alt="" class="img-circle img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">
                                        <a href="#" class="btn btn-sm bg-teal">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-primary">
                                            <i class="fas fa-user"></i> Postuler
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <nav aria-label="Contacts Page Navigation">
                        <ul class="pagination justify-content-center m-0">
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#">6</a></li>
                            <li class="page-item"><a class="page-link" href="#">7</a></li>
                            <li class="page-item"><a class="page-link" href="#">8</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- /.card-footer -->
            </div>
            <!-- /.card -->

        </section>

    </div>
    @endsection
</body>
</html>