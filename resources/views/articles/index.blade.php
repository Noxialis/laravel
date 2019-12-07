@extends ('layout')


@section ('content')

    <div id="wrapper">
        <div id="page" class="container">
            @foreach ($articles as $article)
                <div class="content">
                    <div class="title">
                        <h1>
                            <a href="{{ $articles->path() }}">
                                {{ $article->title }}
                            </a>
                        </h1>
                    </div>
                        <h3>{{ $article->excerpt }}</h3>
                    </li>
                </div>
            @endforeach
        </div>
    </div>

@endsection
