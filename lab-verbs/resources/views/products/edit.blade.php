<!DOCTYPE html><html><head><title>Edit Product</title></head><body>

<h1>Edit Product #{{ $product['id'] }}</h1>

{{-- PUT form (method spoofing) --}}
<form method="POST" action="{{ route('products.update', $product['id']) }}">
    @csrf
    @method('PUT')
    <input type="text"   name="name"  value="{{ $product['name'] }}"  required>
    <input type="number" name="price" value="{{ $product['price'] }}" required>
    <button type="submit">Update Product</button>
</form>

<br>
{{-- DELETE form (method spoofing) --}}
<form method="POST"
      action="{{ route('products.destroy', $product['id']) }}"
      onsubmit="return confirm('Delete this product?')">
    @csrf
    @method('DELETE')
    <button type="submit">Delete Product</button>
</form>

</body></html>
