<div class="container">
<h2>Search Results</h2>
   
    <div class="row featured__filter">
        @foreach($posts as $post)
        <div class="col-lg-3 col-md-4 col-sm-6 mix {{ $post->class }}">
            <div class="featured__item">
                <div class="featured__item__pic set-bg" data-setbg="img/featured/{{ $post->name }}">
                    <ul class="featured__item__pic__hover">
                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
                <div class="featured__item__text">
                    <h4>{{ $post->heading }}</h4>
                    <h5>₹{{ $post->price }}</h5>
                </div>
            </div>
        </div>
        @endforeach
    </div>


</div>