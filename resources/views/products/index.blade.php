<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <button type="submit" class="btn btn-primary">Tambah Produk Baru</button>
</form>

<table border="1">
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Quantity</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->qty }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
