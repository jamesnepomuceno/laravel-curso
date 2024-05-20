<h3>Fornecedor</h3>

{{-- Verifica se existe algum fornecedor (testando comentário) --}}


@php
    // comentários em sintaxe de PHP
    /*if (count($fornecedores) === 0) {
        echo '<h3>Não existem fornecedores cadastrados</h3>';
    } else {
        echo '<ul>';
        foreach ($fornecedores as $fornecedor) {
            echo '<li>' . $fornecedor . '</li>';
        }
        echo '</ul>';
    }*/

@endphp

{{-- @dd($fornecedores) --}}

@if(count($fornecedores) === 0)
    <h3>Não existem fornecedores cadastrados</h3>
@else
    <ul>
        Existe fornecedores cadastrados:
        @foreach($fornecedores as $fornecedor)
            <li>{{ $fornecedor }}</li>
        @endforeach
    </ul>
@endif



{{-- Verifica se existe algum fornecedor --}}

