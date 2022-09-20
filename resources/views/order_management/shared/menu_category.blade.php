@foreach ($categories as $categorie)
    <div class="product-category" onclick="searchByCategory({{ $categorie->id }})">
        <div class="listcat">
            {{ $categorie->title ?? '' }}
        </div>
    </div>
@endforeach
