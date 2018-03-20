<div class="col-md-10">
    <article @php(post_class())>

        <header>
            <div class="row">
                <div class="col-lg-7 col-xl-8">
                    <h1 class="h2 entry-title">{{ get_the_title() }}</h1>
                    @include('partials/entry-meta')
                </div>

                <div class="col-sm-8 col-lg-5 col-xl-4">
                    <div class="aside">
                        <img src="{{ get_the_post_thumbnail_url() }}" alt="" class="img-fluid">
                        <p class="text-center">
                            <a href="/aan-de-slag-met-prisma/" class="btn btn-default">Aan de slag met Prisma</a>
                        </p>
                    </div>
                </div>

            </div>

        </header>

        <div class="entry-content">
            <div class="row">
                <div class="col-lg-9 col-xl-8">
                    @php(the_content())
                </div>
            </div>
        </div>
        <footer>
            {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
        </footer>

    </article>
</div>