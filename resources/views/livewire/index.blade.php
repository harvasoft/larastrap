<div>
    <div class="row">
        @foreach ($dataPost as $post)
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm border-0">
                <div class="geeks">
                    <img class="card-img-top card-image-fill" src="{{ $post['featured_image'] }}" alt="">
                </div>
                <div class="card-body">
                    <a href="{{ route('post.show',$post['slug']) }}">
                        <h5 class="card-title font-semibold title-post">{{ $post['title'] }}</h5>
                    </a>
                    <div class="d-flex p-0 justify-content-between">
                        <span><i class="fa fa-calendar-alt mr-1"></i>
                            {{ Carbon\Carbon::parse($post['modified'])->format('d-m-Y') }}</span>
                        <span>
                            <i class="fa fa-user mr-1"></i> {{ $post['author']['name'] }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="row">
        <div class="col-md-8">
            @foreach ($dataPostRow as $postRow)
            <ul class="list-unstyled">
                <li class="media bg-white shadow-sm border-0 p-3">
                    <img height="50px" width="50px" src="{{ $postRow['featured_image']}}"
                        class="mr-3 rounded-circle small-image-rouded" alt="...">
                    <div class="media-body">
                        <a href="{{ route('post.show',$postRow['slug']) }}">
                            <h5 class="card-title font-semibold title-post">{{ $postRow['title'] }}</h5>
                        </a>
                        <div class="conten-wrapper">
                            {{ Str::limit(strip_tags($postRow['content']), 150, '...') }}
                        </div>
                        <div class="meta-wrapper">

                        </div>
                    </div>
                </li>
            </ul>
            @endforeach

            {{ $dataPostRow->links() }}
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
                            <img height="30px" width="30px" src="{{ $post['featured_image'] }}"
                                class="align-self-start rounded-circle mr-3 small-image-rouded" alt="...">
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



@push('js')
<script id="dsq-count-scr" src="//https-abdasis-my-id.disqus.com/count.js" async></script>
<script>
    var disqus_config = function () {
        this.page.url = 'https://abdasis.my.id'; // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = this.dataset.disqus-identifier; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    }
</script>

@endpush
@section('title')
Abd. Asis | The Journey To Great Programmer
@endsection

@section('jumbutron')
<div class="jumbotron py-5 p-md-5 rounded">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="display-5 font-italic">Belajar Pemrograman Bareng Yuk</h1>
                <p class="lead">Belajar pemrograman itu nggak sulit loh, mungkin cuma bikin pusing dikit 😂</p>
                <button class="btn btn-light">Yuk Ngoding</button>
            </div>
        </div>
    </div>
</div>
@endsection
