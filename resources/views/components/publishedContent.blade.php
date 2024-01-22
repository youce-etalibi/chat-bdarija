<div class="parentPostPublished">
    @foreach ($posts as $post)
        <div class="post">
            <div class="infoCompte">
                <div class="compteImgPost">
                    <img src="{{ asset("storage/".$post->compte->image) }}" alt="">

                    <button href="" class="btnTripelPost"><i class='bx bx-dots-vertical-rounded'></i></button>
                    <ul class="ulAuthPost">
                        <li><a href="#"><i class='bx bxs-pencil'></i> Edit le post</a>
                        <li><a href="#"><i class='bx bxs-trash-alt'></i> Supprime le post</a>
                        <li><a href="#"><i class='bx bxs-box'></i>Archive le post</a>
                    </ul>
                </div>
                @if($post->compte->verification)
                <div class="infoCompteDataVerif">
                    <h5>{{ $post->compte->prenom }} {{ $post->compte->nom }}
                        <i class='bx bxs-badge-check iVerifipost'></i>
                    </h5>
                    <p>{{ $post->created_at->diffForHumans() }}</p>
                </div>
                @else
                <div class="infoCompteData">
                    <h5>{{ $post->compte->prenom }} {{ $post->compte->nom }}</h5>
                    <p>{{ $post->created_at->diffForHumans() }}</p>
                </div>
                    @endif
            </div>
            {{-- <hr> --}}
            <div class="bodyPost">
                <h5>{{ $post->body }} </h5>
            </div>
            <div class="imagePost">
                <img src="{{ asset('./storage/'.$post->images) }}" alt="">
            </div>
            <div class="parentControlles">
                <div class="controlls">
                    <ul>
                        <li class="parentLike">
                            <form action="{{ route('like', $post->id) }}" method="post" class="like-form">
                                @csrf
                                @method('post')
                                <button type="submit" class="like">
                                    <i class='bx bxs-like'></i>
                                    {{$post->likes}}
                                    {{$post->likes()->where('compte_id', auth()->id())->exists() ? 'Unlike' : 'Like'}}
                                </button>
                            </form>
                        </li>
                        <li class="parentComment">
                            <a href="" class="comments"><i class='bx bxs-comment-detail'></i> Comments</a>
                        </li>
                        <li class="parentShare">
                            <a href="" class="share"><i class='bx bxs-share'></i> Share</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    @endforeach
</div>
