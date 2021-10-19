@extends(('layouts.blog'))
@section('content')
    <section class="p-0 border-top border-bottom bg-light row no-gutters">
        <div class="col-lg-5 col-xl-6 order-lg-2">
            <div class="divider divider-side transform-flip-y bg-light d-none d-lg-block"></div>
            <img class="flex-fill" src="{{asset("storage/images/$post->image")}}" alt="blog.1.image">
        </div>
        <div class="col-lg-7 col-xl-6">
            <div class="container min-vh-lg-70 d-flex align-items-center">
                <div class="row justify-content-center flex-grow-1">
                    <div class="col col-md-10 col-xl-9 py-4 py-sm-5">
                        <div class="my-4 my-md-5">
                            <div class="d-flex align-items-center mb-3 mb-xl-4">
                                <div>
                                    @foreach($post->tags as $tag)
                                        <a href="#" class="badge badge-pill badge-danger">{{$tag->name}}</a>
                                    @endforeach
                                </div>
                                <div
                                    class="ml-3 text-small text-muted">{{$post->created_at->toFormattedDateString()}}</div>
                            </div>
                            <h1 class="display-4">{{$post->title}}</h1>
                            {{--                            <a href="#" class="d-flex align-items-center">--}}
                            {{--                                <img src="assets/img/avatars/male-1.jpg" alt="Joshua Lapinsky profile image"--}}
                            {{--                                     class="avatar avatar-sm">--}}
                            {{--                                <div class="h6 mb-0 ml-3">Joshua Lapinsky</div>--}}
                            {{--                            </a>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-10">
                    {{--                    <article class="article">--}}
                    {{--                        <h3 class="h2">Intro to article</h3>--}}
                    {{--                        <p>--}}
                    {{--                            Dolor sit amet, consectetur adipiscing elit. Phasellus feugiat elit vitae enim lacinia--}}
                    {{--                            semper. Cras nulla lectus, porttitor vitae urna iaculis, melisandre tincidunt lectus.--}}
                    {{--                            Brienne nec tellus sit amet massa auctor imperdiet id vitae diam.--}}
                    {{--                        </p>--}}
                    {{--                        <p>--}}
                    {{--                            Aenean Gendry est nec diam suscipit iaculis. Praesent urna velit, auctor nec turpis et,--}}
                    {{--                            vehicula lobortis sem. Vivamus convallis mi sagittis eleifend laoreet. Praesent vitae--}}
                    {{--                            venenatis enim. Nulla tincidunt Varys et lectus rhoncus laoreet. Aenean Gendry--}}
                    {{--                            est nec diam suscipit iaculis.--}}
                    {{--                            <mark data-aos="highlight-text" data-aos-delay="250">Praesent urna velit, auctor nec turpis--}}
                    {{--                                et, vehicula lobortis sem. Vivamus convallis mi sagittis eleifend laoreet.--}}
                    {{--                            </mark>--}}
                    {{--                            Praesent vitae venenatis enim. Nulla tincidunt Varys et lectus rhoncus laoreet.--}}
                    {{--                        </p>--}}
                    {{--                        <p>--}}
                    {{--                            Praesent urna velit, auctor nec turpis et, vehicula lobortis sem. Vivamus convallis mi--}}
                    {{--                            sagittis eleifend laoreet. Praesent vitae venenatis enim. Nulla tincidunt Varys et lectus--}}
                    {{--                            rhoncus laoreet.--}}
                    {{--                        </p>--}}
                    {{--                        <h5>Let’s talk subheadings</h5>--}}
                    {{--                        <p>--}}
                    {{--                            Turpis et, vehicula lobortis sem. Vivamus convallis mi sagittis eleifend laoreet. Praesent--}}
                    {{--                            vitae venenatis enim. Nulla tincidunt Varys et lectus rhoncus laoreet.--}}
                    {{--                        </p>--}}
                    {{--                        <ul>--}}
                    {{--                            <li>--}}
                    {{--                                Vivamus convallis mi sagittis eleifend laoreet.--}}
                    {{--                            </li>--}}
                    {{--                            <li>--}}
                    {{--                                Nulla tincidunt Varys et lectus rhoncus laoreet. Aenean Gendry est nec diam suscipit--}}
                    {{--                                iaculis.--}}
                    {{--                            </li>--}}
                    {{--                            <li>--}}
                    {{--                                Velit, auctor nec turpis et, vehicula lobortis sem. Vivamus convallis mi.--}}
                    {{--                            </li>--}}
                    {{--                        </ul>--}}
                    {{--                        <blockquote class="blockquote">--}}
                    {{--                            “Here’s an insightful quote from the article that is worth isolating for emphasis.”--}}
                    {{--                        </blockquote>--}}
                    {{--                        <p>--}}
                    {{--                            Aenean Gendry est nec diam suscipit iaculis. Praesent urna velit, auctor nec turpis et,--}}
                    {{--                            vehicula lobortis sem. Vivamus convallis mi sagittis eleifend laoreet. Praesent vitae--}}
                    {{--                            venenatis enim. Nulla tincidunt Varys et lectus rhoncus laoreet. Aenean Gendry--}}
                    {{--                            est nec diam suscipit iaculis. Praesent urna velit, auctor nec turpis et, vehicula lobortis--}}
                    {{--                            sem. Vivamus convallis mi sagittis eleifend laoreet. Praesent vitae venenatis enim. Nulla--}}
                    {{--                            tincidunt Varys et lectus rhoncus laoreet.--}}
                    {{--                        </p>--}}
                    {{--                        <figure>--}}
                    {{--                            <img src="assets/img/blog/thumb-4.jpg" alt="Blog Figure" class="img-fluid rounded">--}}
                    {{--                            <figcaption>Here’s a great little figure caption.</figcaption>--}}
                    {{--                        </figure>--}}
                    {{--                        <p>--}}
                    {{--                            Praesent urna velit, auctor nec turpis et, vehicula lobortis sem. Vivamus convallis mi--}}
                    {{--                            sagittis eleifend laoreet. Praesent vitae venenatis enim. Nulla tincidunt Varys et lectus--}}
                    {{--                            rhoncus laoreet.--}}
                    {{--                        </p>--}}
                    {{--                        <p>--}}
                    {{--                            Dolor sit amet, consectetur adipiscing elit. Phasellus feugiat elit vitae enim lacinia--}}
                    {{--                            semper. Cras nulla lectus, porttitor vitae urna iaculis, melisandre tincidunt lectus.--}}
                    {{--                            Brienne nec tellus sit amet massa auctor imperdiet id vitae diam.--}}
                    {{--                        </p>--}}
                    {{--                        <pre><code>&lt;p&gt;Sample text here...&lt;/p&gt;--}}
                    {{--&lt;p&gt;And another line of sample text here...&lt;/p&gt;</code></pre>--}}
                    {{--                        <p>--}}
                    {{--                            Gravida est nec diam suscipit iaculis. Praesent urna velit, auctor nec turpis et, vehicula--}}
                    {{--                            lobortis sem. Vivamus convallis mi sagittis eleifend laoreet. Praesent vitae venenatis enim.--}}
                    {{--                            Nulla tincidunt Varys et lectus rhoncus laoreet. Aenean Gendry est--}}
                    {{--                            nec diam suscipit iaculis. Praesent urna velit, auctor nec turpis et, vehicula lobortis sem.--}}
                    {{--                            Vivamus convallis mi sagittis eleifend laoreet. Praesent vitae venenatis enim. Nulla--}}
                    {{--                            tincidunt Varys et lectus rhoncus laoreet.--}}
                    {{--                        </p>--}}
                    {{--                        <h5>Now to summarize</h5>--}}
                    {{--                        <p>--}}
                    {{--                            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium--}}
                    {{--                            voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati--}}
                    {{--                            cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia--}}
                    {{--                            animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita--}}
                    {{--                            distinctio.--}}
                    {{--                        </p>--}}
                    {{--                        <p>--}}
                    {{--                            Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id--}}
                    {{--                            quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.--}}
                    {{--                        </p>--}}
                    {{--                        <ol>--}}
                    {{--                            <li>--}}
                    {{--                                Praesent urna velit, auctor nec turpis et, vehicula lobortis sem.--}}
                    {{--                            </li>--}}
                    {{--                            <li>--}}
                    {{--                                Praesent urna velit, auctor nec turpis et, vehicula lobortis sem. Vivamus convallis mi--}}
                    {{--                                sagittis eleifend laoreet.--}}
                    {{--                            </li>--}}
                    {{--                            <li>--}}
                    {{--                                Et iusto odio dignissimos ducimus qui blanditiis--}}
                    {{--                            </li>--}}
                    {{--                        </ol>--}}
                    {{--                    </article>--}}
                    <article class="article">
                        {!! $post->html_content !!}
                    </article>
                    @include('includes.post.breadcrumbs',['post' => $post])
                    @include('includes.post.share')
                </div>
            </div>
        </div>
    </section>
    @include('includes.post.related-articles')
@endsection
