<!DOCTYPE html><html><head><title>Products</title></head><body>

@if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
@endif

<h1>Product Search</h1>
<form method="GET" action="{{ route('products.index') }}">
    <input type="text" name="search" value="{{ $keyword }}"
           placeholder="Search product...">
    <button type="submit">Search</button>
</form>

@if($keyword)
    <p>Showing results for: <strong>{{ $keyword }}</strong></p>
@endif

<br>
<a href="{{ route('products.create') }}">+ Add New Product</a>
<br><br>
<!-- Quick link to edit sample product 5 to easily test 4.2 -->
<a href="{{ route('products.edit', 5) }}">Edit Sample Product 5</a>

</body></html>
