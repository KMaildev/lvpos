@foreach ($categories as $categorie)
    <div class="product-category">
        <div class="listcat">
            {{ $categorie->title ?? '' }}
        </div>
    </div>
@endforeach
