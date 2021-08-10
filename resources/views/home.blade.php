<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Test - aCommerce</title>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="/css/app.css" rel="stylesheet">

        <!-- JS -->
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

        <!-- Font awesome icon -->
        <script src="https://kit.fontawesome.com/9e0f67df40.js" crossorigin="anonymous"></script>

        <!-- Styles -->

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <section class="section section--news py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        Items 1 - 12 of 23
                    </div>
                </div>
                <div class="row">
                    @foreach($datas as $data)
                    <div class="col-sm-6 col-lg-3 mb-4">
                        <div class="card card--product">
                            <div class="card__figure">
                                <img class="img-fluid" src="{{ customImage() }}">
                            </div>
                            <div class="card__title">
                                <b>{{ $data['title'] }}</b>
                            </div>
                            <div class="card__date">
                                {{ dateHumanReadable($data['created_at']) }}
                            </div>
                            <div class="card__rating">
                                {!! rating($data['vote']) !!}
                            </div>
                            <div class="card__price">
                                ฿ {{ number_format($data['price']) }}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-12">
                        <nav>
                            <ul class="pagination" role="navigation">
                                <li class="page-item disabled" aria-disabled="true" aria-label="« Previous">
                                    <span class="page-link" aria-hidden="true">
                                        <i class="fas fa-angle-left"></i>
                                    </span>
                                </li>

                                <li class="page-item active" aria-current="page">
                                    <span class="page-link">1</span>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="javascript:;" target="_blank" rel="noopener">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="javascript:;" target="_blank" rel="noopener">3</a>
                                </li>

                                <li class="page-item">
                                    <a class="page-link" href="javascript:;" rel="noopener" aria-label="Next »" target="_blank">
                                        <i class="fas fa-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
    </body>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</html>
