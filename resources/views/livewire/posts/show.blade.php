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
            <div class="box-komentar">
                <div class="card shadow-sm border-0 mb-3">
                    <div class="card-body">
                        <div id="graphcomment"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('js')
<script type="text/javascript">
    /* - - - CONFIGURATION VARIABLES - - - */

      // make sure the id is yours
      window.gc_params = {
        graphcomment_id: 'abdasis',

        // if your website has a fixed header, indicate it's height in pixels
        fixed_header_height: 0,
      };

      /* - - - DON'T EDIT BELOW THIS LINE - - - */


      (function() {
        var gc = document.createElement('script'); gc.type = 'text/javascript'; gc.async = true;
        gc.src = 'https://graphcomment.com/js/integration.js?' + Math.round(Math.random() * 1e8);
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(gc);
      })();

</script>

@endpush
