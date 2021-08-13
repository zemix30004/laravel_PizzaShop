<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <img src="" alt="">
        <div class="caption">
            <h3>King Pizza</h3>
            <p>120 грн.</p>
            <p>
                <a href="{{ route('basket') }}" class="btn btn-primary" role="button">В корзину</a>
                @isset($category)
                {{  $category-> name }}
                @endisset
                <a href="" class="btn btn-default"
                role="button">Подробнее</a>
            </p>
        </div>
    </div>
</div>
