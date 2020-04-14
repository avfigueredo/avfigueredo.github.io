@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="Uses {{ $page->siteName }}"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="Get in touch with {{ $page->siteName }}"/>
@endpush

@section('body')
    <h1>Meu setup em 2020</h1>


    <h3 class="text-red-500">IDE <i class="text-gray-500">#</i></h3>
    <p>Eu programo principalmente em PHP, por isso uso o <b>PHPStorm</b> e utilizo o tema <a
                href="https://draculatheme.com/"> Dracula</a> e a fonte <a href="https://www.jetbrains.com/lp/mono/">JetBrains
            Mono</a>.</p>
    <p>
        Aqui um screeshot: <br><br>

        <img src="/assets/img/phpstorm.png" alt="PHPStorm">
    </p>

    <h3 class="text-red-500">Code Editor para PHP & JS <i class="text-gray-500">#</i></h3>
    <p>Como editor de código rápido para PHP e também para usar o <code>tinker</code> no Laravel, eu uso o incrível app
        <a
                href="https://tinkerwell.app/">Tinkerwell</a>.
    </p>
    <img src="/assets/img/tinkerwell.png" alt="Tinkerwell app">

    <p>Para testar funções de JS e verificar algo rápido eu uso o app <a href="https://runjs.dev/">RunJS</a>.</p>


    <h3 class="text-red-500">Terminal <i class="text-gray-500">#</i></h3>
    <p>Eu uso o <a href="https://www.iterm2.com/">Iterm2</a> com o tema <i>Dracula</i>.</p>

    <h3 class="text-red-500">Database <i class="text-gray-500">#</i></h3>
    <p>Como gerenciador de banco de dados eu uso o <a href="https://tableplus.com/">TablePlus</a></p>

    <img src="/assets/img/workspace@2x.png" alt="TablePlus">


    <h3 class="text-red-500">MacOS <i class="text-gray-500">#</i></h3>

    <p>Eu utilizo o MacOS desde 2014 e para mim não há sistema igual, principalmente falando em <span
                class="text-indigo-500">#produtividade</span> e <span class="text-indigo-500">#desenvolvimento</span>.
    </p>

    <img src="/assets/img/desktop.png" alt="Desktop">


    <h6 class="text-gray-700"><i>Meus apps</i></h6>

    <ul>
        <li>Para desenvolver - <span class="text-indigo-500">Firefox Developer Edition</span></li>
        <li>Para navegar - <span class="text-indigo-500">Firefox Quantum</span></li>
        <li>Para desenvolvimento local - <span class="text-indigo-500">Laravel Valet</span></li>
        <li>Para música - <span class="text-indigo-500">Spotify</span></li>
        <li>Para tudo no MacOS - <span class="text-indigo-500">Alfred 4</span></li>
        <li>Para projetos & tarefas pessoais - <span class="text-indigo-500">OmniFocus 3</span></li>
        <li>Para projetos & tarefas de trabalho - <span class="text-indigo-500">Trello</span></li>
        <li>Para armazenamento na nuvem - <span class="text-indigo-500">One Drive</span></li>
        <li>Para anotações - <span class="text-indigo-500">Evernote & Notion</span></li>
        <li>Para escrever - <span class="text-indigo-500">Bear</span></li>
        <li>Para planilhas - <span class="text-indigo-500">Excel</span></li>
        <li>Para apresentações - <span class="text-indigo-500">Keynote</span></li>
        <li>Para gerenciamento de senhas - <span class="text-indigo-500">1Password</span></li>
        <li>Para git - <span class="text-indigo-500">Git Kraken</span></li>
    </ul>

    <h3 class="text-red-500">Hardware <i class="text-gray-500">#</i></h3>

    <p>
        Como hardware principal eu uso um Macbook Pro 2012 13" 2.5 Ghz com 16 GB de ram e 720 GB de SSD.
        <br>E também...<br>

    <ul>
        <li>IPad Pro 11" 2018 64GB</li>
        <li>IPad Mini 5 64GB</li>
        <li>Monitor Samsung LED 28" 4K LU28E590DS</li>
        <li>Logitech MX Master 2S</li>
        <li>Apple Magic Keyboard</li>
        <li>AirPods Pro</li>
        <li>Bose QuietComfort 35 II</li>

    </ul>
    </p>

    <h3 class="text-red-500">Smartphone <i class="text-gray-500">#</i></h3>

    <p>Atualmente eu utilizo um IPhone XS com 64 GB de armazenamento.</p>

    <img width="300" src="/assets/img/ios.jpeg" alt="IOS">

    <hr>

    <p><span class="text-red-500">Encerrando...</span> a cada ano eu pretendo atualizar essa página ou quando ocorrer alguma mudança <span class="text-red-500">interessante 😄</span>.</p>


@stop
