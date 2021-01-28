<div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="box-artikel">
                <div class="card mb-3 shadow-sm border-0">
                    <img src="{{ $post['featured_image'] }}" class="card-img-top single-featured-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title single-post-title">{{ $post['title'] }}</h5>
                        <p class="card-text">
                            <small class="text-muted">{{ $post['author']['name'] }}</small> |
                            <small class="text-muted">{{ $post['modified'] }}</small>
                        </p>
                        <p class="card-text">{!! $post['content'] !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
