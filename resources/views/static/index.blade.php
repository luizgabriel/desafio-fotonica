@extends('base')

@section('content')


    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">DESAFIO FOTÔNICA</h1>
                        <p class="intro-text">Rodando exclusivamente em uma maquina virtual configurada utilizando uma ferramenta chamada
                            <a href="https://www.vagrantup.com/">Vagrant</a></p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Ferramentas Utilizadas</h2>
                <h3>Servidor</h3>
                <ul>
                    <li>Vagrant <small>Para configuração da maquina virtual</small></li>
                </ul>
                <h3>Backend</h3>
                <ul>
                    <li>Laravel <small>Framework para PHP</small></li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Download Section -->
    <section id="download" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-4 col-lg-offset-4">
                    <h2>Calculadora</h2>

                    <div id="calculator">
                        <table class="table table-bordered table-condensed">
                            <tr>
                                <td colspan="4">
                                    <input id="calculator-output" type="number" class="form-control"/>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <button class="btn btn-default btn-block"><i class="fa fa-long-arrow-left"></i></button>
                                </td>
                                <td colspan="1">
                                    <button class="btn btn-default btn-block">C</button>
                                </td>
                                <td colspan="1">
                                    <button class="btn btn-default btn-block">/</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button class="btn btn-default btn-block">1</button>
                                </td>
                                <td>
                                    <button class="btn btn-default btn-block">2</button>
                                </td>
                                <td>
                                    <button class="btn btn-default btn-block">3</button>
                                </td>
                                <td>
                                    <button class="btn btn-default btn-block">+</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button class="btn btn-default btn-block">4</button>
                                </td>
                                <td>
                                    <button class="btn btn-default btn-block">5</button>
                                </td>
                                <td>
                                    <button class="btn btn-default btn-block">6</button>
                                </td>
                                <td>
                                    <button class="btn btn-default btn-block">-</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button class="btn btn-default btn-block">7</button>
                                </td>
                                <td>
                                    <button class="btn btn-default btn-block">8</button>
                                </td>
                                <td>
                                    <button class="btn btn-default btn-block">9</button>
                                </td>
                                <td>
                                    <button class="btn btn-default btn-block">*</button>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <button class="btn btn-default btn-block">0</button>
                                </td>
                                <td></td>
                                <td>
                                    <button class="btn btn-default btn-block">=</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contact Start Bootstrap</h2>
                <p>Feel free to email us to provide some feedback on our templates, give us suggestions for new templates and themes, or to just say hello!</p>
                <p><a href="mailto:feedback@startbootstrap.com">feedback@startbootstrap.com</a>
                </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li>
                        <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <div id="map"></div>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; Your Website 2014</p>
        </div>
    </footer>

@endsection