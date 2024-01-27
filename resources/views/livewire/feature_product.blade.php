<div class="container">
<div class="row">
    <div class="col-lg-12">
        <div class="section-title">
            <h2>Featured Product</h2>
        </div>
        <div class="featured__controls">
            <ul>
                <li class="active" data-filter="*">All</li>
                <li data-filter=".fruits">Fruits</li>
                <li data-filter=".dairy">Dairy</li>
                <li data-filter=".vegetables">Vegetables</li>
            </ul>
        </div>
    </div>
</div>

<div class="row featured__filter">
    @foreach($products as $product)
    <div class="col-lg-3 col-md-4 col-sm-6 mix {{ $product->class }}">
        <div class="featured__item">
            <div class="featured__item__pic set-bg" data-setbg="img/featured/{{ $product->name }}">
                <ul class="featured__item__pic__hover">
                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                </ul>
            </div>
            <div class="featured__item__text">
                <h4><a href="#">{{ $product->heading }}</a></h4>
                <h3>₹{{ $product->price }}</h3>
            </div>
        </div>
    </div>
    @endforeach
</div>

        </div>