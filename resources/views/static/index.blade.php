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
    <section id="about" class="container content-section">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <h2>Tecnologias Utilizadas</h2>
                <h3>Backend</h3>
                <ul>
                    <li><span class="badge">Vagrant</span> <small>Para configuração da maquina virtual <b>linux</b></small></li>
                    <li><span class="badge">Laravel</span> <small>Como framework de backend PHP</small></li>
                    <li><span class="badge">PHP 5.6</span> <small>Linguagem de programação usada</small></li>
                    <li><span class="badge">Mysql</span> <small>Banco de dados utilizado</small></li>
                    <li><span class="badge">Pusher</span> <small>Sistema de mensagens Realtime</small></li>
                    <li><span class="badge">Cron</span> <small>Para agendamento de tarefas</small></li>
                </ul>
                <h3>Fontend</h3>
                <ul>
                    <li><span class="badge">Javascript</span> <small>Linguagem de programação clientside</small></li>
                    <li><span class="badge">Jquery</span> <small>Framework para <b>Javascript</b></small></li>
                    <li><span class="badge">Bootstrap</span> <small>Framework para <b>CSS</b> e <b>Javascript</b></small></li>
                    <li><span class="badge">Less</span> <small>Preprocessador <b>CSS</b></small></li>
                    <li><span class="badge">Coffescript</span> <small>Preprocessador <b>Javascript</b></small></li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Download Section -->
    <section style="background-color: #000; color: #fff" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-4 col-lg-offset-4">
                    <h2>Calculadora</h2>

                    <div class="calculator" id="main-calculator">
                        <table class="table table-bordered table-condensed">
                            <tr>
                                <td colspan="4">
                                    <span class="calculator-output">0</span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="1">
                                    <button class="btn btn-default btn-block" data-action="clear">C</button>
                                </td>
                                <td colspan="2">
                                    <button class="btn btn-default btn-block" data-action="backspace"><span class="fa fa-long-arrow-left"></span></button>
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
                                <td>
                                    <button class="btn btn-default btn-block">.</button>
                                </td>
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
                <h2>Gerador de Número Aleatórios <b>em Background</b></h2>

                <div class="col-lg-4">
                    <p>Controle o Serviço de Gerador de Números</p>
                    <div class="col-lg-8 col-lg-offset-2 col-sm-7 col-sm-offset-5 col-xs-8 col-xs-offset-4">
                        <div class="switch animated fadeIn">
                            <input id="toogle-random-generator" {{ ($config->number_generator_status == 1)? 'check' : '' }} class="cmn-toggle cmn-toggle-round-flat" type="checkbox">
                            <label for="toogle-random-generator"></label>
                        </div>
                    </div>
                    <img class="animated slideInUp" src="{{ asset('img/help_tip.png') }}" alt="">
                </div>

                <div class="col-lg-8">
                    <p>Resultados exibidos via <span class="badge">Push Notifications</span></p>

                    <div class="terminal-window animated bounceIn">
                        <div class="terminal-header">
                            <div class="pull-left">
                                <div class="circle circle-red"></div>
                                <div class="circle circle-yellow"></div>
                                <div class="circle circle-green"></div>
                            </div>
                            <div class="terminal-title">Gerador de Números Randômicos</div>
                        </div>
                        <div class="terminal-body">
                            <ul id="random-output">
                                <li>Sincronizando com o serviço...</li>
                                @if ($config->number_generator_status == 1)
                                    <li class="current">Esperando mensagem...</li>
                                @else
                                    <li class="current">O serviço está parado.</li>
                                @endif
                            </ul>
                        </div>
                    </div>

                    <div class="tooltip bottom animated slideInUp" style="display: block; opacity: 1">
                        <div class="tooltip-arrow"></div>
                        <div class="tooltip-inner">
                            Total de números gerados: <span id="total">{{ \Fotonica\Number::count() }}</span>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Encontre este projeto no Github.</p>
            <a href="https://github.com/luizgabriel/desafio-fotonica" target="_blank" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
        </div>
    </footer>

@endsection