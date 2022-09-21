<div class="product-category" onclick="getMenuLists()">
    <div class="listcat">
        All
    </div>
</div>
@foreach ($categories as $categorie)
    <div class="product-category" onclick="searchByCategory({{ $categorie->id }})">
        <div class="listcat">
            {{ $categorie->title ?? '' }}
        </div>
    </div>
@endforeach
