@if($product->name =="")
<h1>Nome Vazio</h1>
@else
<h1>{{$product->name}}</h1>
@endif

<!-- IF TERNÁRIO -->
<h1>{{$product->name =="" ? "Produto Vazio" : $product->name}}</h1>

<!-- LOOP -->

<ul>
    @for($i =0; $i < 10; $i ++)
        <li>{{$i}}</li>
    @endfor
</ul>

<ul>
    @foreach($products as $product)
        <li>{{$product->name}}</li>
    @endforeach    
</ul>

@empty($products)
    <h4>Não há produtos para esse item</h4>
@endempty

<script>
    const products = @json($products);
</script>