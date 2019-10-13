@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row pt-4 pb-2 pb-md-4">
            <div class="col">
                <h1 class="">Desafio Laravel</h1>
                <p class="lead">Boas vindas, candidato(a) a front-end ✌️</p>
                <p>Você está usando um projeto do framework <a href="https://laravel.com/" target="_blank">Laravel</a>. Entendimento sobre o framework ajuda neste desafio, mas ele também poderá ser resolvido apenas com conhecimento raso em programação, algumas dicas e olhos atentos.</p>
                
            </div>
            <div class="col-md d-none-md"></div>
        </div>
        <div class="row">
            <div class="col-md">
                <h4>Suas tarefas:</h4>

                <ol class="">
                    <li>O link "<a href="/page-one">Page one</a>" da barra de navegação está escrito corretamente no HTML, mas não está funcionando como esperado.<br>
                        ⇨ Conserte ou estabeleça a rota seguindo os métodos do Laravel.
                    </li>

                    <li>A página "<a href="/first-challenge">First challenge</a>" existe, mas está vazia.<br>
                       ⇨ Insira nela o conteúdo HMTL da página que já criou em nosso desafio principal, mas <u>mantenha apenas a barra de navegação atual. <b>No topo ↑</b></u>. <br>Carregar seu próprio CSS contará como um extra, já que não daremos dicas sobre isto. 
                    </li>
                </ol>
            </div>

            <div class="col">
                <h4>As dicas são:</h4>

                <ul>
                    <li><b>Os únicos arquivos que precisam de sua atenção ou modificação serão:</b><br>
                        <code>routes/<b>web.php</b></code><br>
                        <code>app/Http/Controllers/<b>PagesController.php</b></code><br>
                        <b>... ou estarão em:</b><br>
                        <code>resources/<b>views/</b></code>
                        <br>
                    </li>
                </ul>
                <br>
                <p><b>Faça upload da pasta deste projeto para nós, mesmo que tenha cumprido apenas uma parte do desafio.</b></p>
            </div>
        </div>
    </div>
@endsection