<x-user-master>
    @section('title', 'Post')
    @section('content')
        <h4 class="border-top border-bottom border-light h4 py-3 text-center text-md-left">{{ $post->title }}</h4>
            <section class="col-12 my-5">
                <article class="row my-4 pb-4 text-center text-lg-left border-bottom border-light">
                    <div class="col-12 col-lg-6 col-xl-5">
                        <img src="{{ $post->post_image }}" class="img-fluid" alt="post-image">
                    </div>
                    <div class="col-12 col-lg-6 col-xl-7">
                        <small>{{ $post->created_at->diffForHumans() }}</small>
                        <p class="d-flex flex-wrap">{!! $post->body !!}</p>
                    </div>
                </article>
            </section>
    @endsection
</x-user-master>
