<div>
    <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
            <h1 class="display-4 font-italic text-pembuka">Belajar Pemrograman Bareng Yuk</h1>
            <p class="lead">Belajar pemrograman itu nggak sulit loh, tapi bikin pusing dikit 😂</p>
            <button class="btn btn-light">Yuk memut bareng</button>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="row">
                @foreach ($dataPost as $post)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm border-0">
                        <div class="geeks">
                            <img class="card-img-top" src="{{ $post['featured_image'] }}" alt="">
                        </div>
                        <div class="card-body">
                            <a href="{{ route('post.show',$post['slug']) }}">
                                <h5 class="card-title font-semibold title-post">{{ $post['title'] }}</h5>
                            </a>
                            <div class="d-flex justify-content-between align-items-center">
                                <button class="btn btn-sm">
                                    <i class="fa fa-mug-hot mr-1"></i> ngopi
                                </button>
                                <button class="btn btn-sm">
                                    <i class="fa fa-user mr-1"></i> {{ $post['author']['name'] }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            @foreach ($dataPost as $post)
            <ul class="list-unstyled">
                <li class="media bg-white shadow-sm border-0 p-3">
                    <img height="50px" width="50px"
                        src="{{ $post['featured_image'] ?? 'https://i1.wp.com/wp.laravel-news.com/wp-content/uploads/2021/01/ray-featuredimage.png?fit=2200%2C1100&ssl=1?resize=1400%2C709' }}"
                        class="mr-3 rounded-circle" alt="...">
                    <div class="media-body">
                        <a href="{{ route('post.show',$post['slug']) }}">
                            <h5 class="card-title font-semibold title-post">{{ $post['title'] }}</h5>
                        </a>
                        {{ Str::limit(strip_tags($post['content']), 150, '...') }}
                    </div>
                </li>
            </ul>
            @endforeach
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <h5 class="card-header bg-white border-bottom font-weight-bolder">
                    Populer Post
                </h5>
                <div class="card-body">
                    <ul class="list-unstyled">
                        @foreach ($dataPost as $post)
                        <li class="media mb-3">
                            <img height="30px" width="30px"
                                src="https://i1.wp.com/wp.laravel-news.com/wp-content/uploads/2021/01/ray-featuredimage.png?fit=2200%2C1100&ssl=1?resize=1400%2C709"
                                class="align-self-start rounded-circle mr-3" alt="...">
                            <div class="media-body">
                                <a href="{{ route('post.show',$post['slug']) }}">
                                    <p class="card-title font-weight-light title-post">{{ $post['title'] }}</p>
                                </a>
                            </div>
                        </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
