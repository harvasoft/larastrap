<div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="box-artikel mb-3">
                <div class="card mb-3 shadow-sm border-0">
                    <img src="{{ $post['featured_image'] }}" class="card-img-top single-featured-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title single-post-title">{{ $post['title'] }}</h5>
                        <p class="card-text">
                            <small class="text-muted">{{ $post['author']['name'] }}</small> |
                            <small class="text-muted">{{ $post['modified'] }}</small>
                        </p>
                        <div class="kotak-artikel">
                            <p class="card-text">{!! $post['content'] !!}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-penulis">
                <div class="card shadow-sm border-0 mb-3">
                    <div class="card-header bg-white border-0">Tentang Penulis</div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li class="media mb-3">
                                <img height="60px" width="60px" src="{{ $post['author']['avatar_URL'] }}"
                                    class="align-self-start rounded-circle mr-3 small-image-rouded" alt="...">
                                <div class="media-body">
                                    <a href="https://facebook.com/abdasispif">
                                        <p class="card-title font-weight-light title-post">{{ $post['author']['name'] }}
                                            <i class="fa fa-check-circle text-primary"></i> </p>
                                    </a>
                                    <p>Pecinta pemadangan alam, tapi tidak suka jalan-jalan</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="box-komentar">
                <div class="card shadow-sm border-0 mb-3">
                    <div class="card-body">
                        <div id="disqus_thread"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('js')
<script>
    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://https-abdasis-my-id.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by
        Disqus.</a></noscript>

@endpush

@section('title')
{{ $post['title'] }} - Abd. Asis
@endsection
