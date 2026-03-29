<!DOCTYPE html><html><head><title>New Product</title></head><body>

<h1>Add New Product</h1>
<form method="POST" action="{{ route('products.store') }}">
    @csrf
    <input type="text"   name="name"  placeholder="Product name" required>
    <input type="number" name="price" placeholder="Price"        required>
    <button type="submit">Save Product</button>
</form>

</body></html>
