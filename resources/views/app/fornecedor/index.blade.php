
<!-- dados abaixo sao de xemplo -->
<h3>Fornecedor</h3>
<br>
 <!-- uso if -->
    @if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3> Existem alguns fornecedores cadastrados, total: <?= $total ?>  </h3>
    @elseif(count($fornecedores) >= 10)
    <h3> Existem mais de 10 fornecedores cadastrados, total: <?= $total ?></h3>
    @else
    <h3> Nao ha fornecedores cadastrados, total: <?= $total ?></h3>
    @endif  
    
<br>


 

@for($i = 0;$i < count($fornecedores); $i++ )
    <!-- uso do unless se o retorno da condicao for false --> 
    Fornecedor: {{$fornecedores[$i]['nome']}}
    <br>
    Status : {{$fornecedores[$i]['status']}}
    <br>
    @isset($fornecedores[$i]['cnpj'])
       Cnpj : {{$fornecedores[$i]['cnpj']}}
    @endisset
    <br>
    @unless($fornecedores[$i]['status'] == 'N')  
        Fornecedor Inatico
    @endunless
@endfor

 <!-- operador isset --> 
 @isset($total)
     true
     @isset($totalFornecedor)
       false
     @endisset
 @endisset


 <!-- operador for  -->
 @for($i = 0;$i < 10; $i++ )
  {{$i}}
 @endfor

 <!-- foreach -->

 @isset($fornecedores)
   
    @foreach($fornecedores as $indice => $valor)
    @endforeach
 @endisset

 <!-- escapando a sintaxe do blade -->




 
 

