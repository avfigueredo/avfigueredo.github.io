@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="Sobre {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="A little bit about {{ $page->siteName }}" />
@endpush

@section('body')
    <h1>Sobre</h1>

    <img src="/assets/img/mydevphoto.png"
        alt="Sobre"
        class="flex rounded-full h-64 w-64 bg-contain mx-auto md:float-right my-6 md:ml-10">

    <p class="mb-6">
        Sou um <code>desenvolvedor</code> apaixonado por PHP e por tudo que cerca o desenvolvimento web. Sou um entusiasta do <code>Laravel</code> e usei o framework para muitos projetos.
        Me siga no <a href="https://twitter.com/avfigueredo" target="_blank">twitter</a> para saber o que me mantém ocupado.
    </p>

    <p>
        Atualmente eu crio coisas incríveis na Multilaser, por lá nós usamos muitas das novas tecnologias que estão reinvetando a web, como <i>Laravel Nova</i>, <i>Vue</i>, <i>Electron</i>...
    </p>

    <p>Fã do <i>Steve Jobs</i> e de tudo que a <i>Apple</i> faz desde 2010 quando comprei meu primeiro IPod Touch 4.</p>

    <p class="mb-8">
        Para entrar em contato comigo, envie um e-mail para <a href="mailto:avfigueredo.dev@gmail.com">avfigueredo.dev@gmail.com</a> ou através do <a href="https://twitter.com/avfigueredo" target="_blank">twitter</a> ou <a href="https://www.linkedin.com/in/andrefigueredo/" target="_blank">LinkedIn</a>.
    </p>


@endsection
