<div class="col-md-10">
    <article @php(post_class())>

        <header>
            <div class="row">
                <div class="col-lg-7 col-xl-8">
                    <h1 class="entry-title">{{ get_the_title() }}</h1>
                    @include('partials/entry-meta')
                </div>

                <div class="col-sm-8 col-lg-5 col-xl-4">
                    <img src="{{ get_the_post_thumbnail_url() }}" alt="" class="img-fluid">
                </div>

            </div>

        </header>

        <div class="entry-content">
            @php(the_content())
        </div>
        <footer>
            {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
        </footer>

    </article>
</div>