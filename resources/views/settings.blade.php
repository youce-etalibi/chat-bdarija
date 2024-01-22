@extends('tamplate')
@section('title-document') Profile @endsection
@section('content-app')
@if(session()->has('success'))
<div class="flashbagParentPassword">
    <x-flashbag message="{{session('success')}}"/>
</div>
@endif
    <div class="parentSettings">
        <div class="parentViewImage" style="display: none">
            <div class="parentImageView">
                <img src="{{ asset("storage/".$profile->image) }}" alt="">
            </div>
        </div>
        <div class="sidebarSettings">
            <a href="{{ route('welcome.home') }}" class="btnBackSettings"><i class='bx bx-arrow-back'></i></a>
            <div class="parentParametreConf">
                <div class="parentFixedSettings">
                    <h3>Paramètres et confidentialité</h3>
                    <form action="">
                        <input type="text" class="searchBarPara" placeholder="Rechercher dans les paramétres">
                        <button type="submit"><i class='bx bx-search'></i></button>
                    </form>
                </div>
                <div class="parentSpanParaConfi">
                    <img src="./chatBdaija-logo.png" alt="Chat Bdarija" width="70px">
                    <h5>Centre de Comptes</h5>
                    <p>Vous pouvez gérer vos expériences liées et vos
                        paramétres de compte sur les métatechnologies.</p>
                        <ul>
                            <li >
                                <button class="DetailsPersonnelsLi"><i class='bx bxs-id-card'></i> Détails personnels</button>
                            </li>
                            <li>
                                <button href="" class="btnMotdePassSecurity"><i class='bx bxs-castle'></i> Mot de passe et sécurité</button>
                            </li>
                            <li>
                                <button href=""><i class='bx bxs-slideshow'></i> Préférences publicitaires</button>
                            </li>
                            <li>
                                <button href=""><i class='bx bxs-badge-check' ></i> Verification</button>
                            </li>
                        </ul>
                    </div>
            </div>
            <hr>
            <div class="parentParaOutils">
                <h5>Outils et ressources</h5>
                <p>Les outils que nous fournissons vous aident à contrôler et à gérer votre vie privée...</p>
                <ul>
                    <li>
                        <a href=""><i class='bx bxs-lock-alt'></i> Vérification de la confidentialité</a>
                    </li>
                    <li>
                        <a href=""><i class='bx bxs-group'></i> Surveillance</a>
                    </li>
                </ul>
            </div>
            <hr>
            <div class="parentParaPrefe">
                <h5>Préférences</h5>
                <p>Vous pouvez personnaliser votre expérience sur ChatBdarija...</p>
                <ul>
                    <li>
                        <a href=""><i class='bx bx-bell'></i> Notifications</a>
                    </li>
                    <li>
                        <a href=""><i class='bx bx-world'></i> Langue et region</a>
                    </li>
                    <li>
                        <a href=""><i class='bx bx-moon'></i> Mode sombre</a>
                    </li>
                </ul>
            </div>
        </div>


        <div class="parentContentSidebarAutomaticlly" style="display: none;">
            <h1>Paramètres les plus visités</h1>
            <div class="parentUlAutomatically">
                <ul class="ul1">
                    <li>
                        <a href="">
                        <div class="card">
                            <script src="https://cdn.lordicon.com/lordicon.js"></script>
                            <lord-icon
                                src="https://cdn.lordicon.com/jqnbdcqr.json"
                                trigger="hover"
                                colors="primary:#ebe6ef,secondary:#2393ea"
                                style="width:110px;height:110px">
                            </lord-icon>
                            <h4>Blocage</h4>
                            <p>Vérifiez les personnes que vous
                                avez bloquées ou ajoutez-en a
                                votre liste de personnes
                                bloquées.</p>
                        </div>
                    </a>
                    </li>
                    <li>
                        <a href="">
                        <div class="card">
                            <script src="https://cdn.lordicon.com/lordicon.js"></script>
                            <lord-icon
                                src="https://cdn.lordicon.com/zfmcashd.json"
                                trigger="hover"
                                colors="primary:#f9c9c0,secondary:#ebe6ef,tertiary:#4bb3fd,quaternary:#2393ea"
                                style="width:110px;height:110px">
                            </lord-icon>
                            <h4>Historique d’activité</h4>
                            <p>Consultez et gérez votre activité
                                sur Facebook.</p>
                        </div>
                    </a>
                    </li>
                    <li>
                        <a href="">
                        <div class="card">
                            <script src="https://cdn.lordicon.com/lordicon.js"></script>
                            <lord-icon
                                src="https://cdn.lordicon.com/wibvszhx.json"
                                trigger="hover"
                                colors="primary:#2393ea,secondary:#ffc738"
                                style="width:110px;height:110px">
                            </lord-icon>
                            <h4>Mode sombre</h4>
                            <p>Décidez si vous souhaitez utiliser
                                le mode sombre.</p>
                        </div>
                    </a>
                    </li>
                </ul>
                <h1>Vous cherchez autre chose ?</h4>
                <ul class="ul2">
                    <li>
                        <a href="">
                            <div class="card">
                                <script src="https://cdn.lordicon.com/lordicon.js"></script>
                                <lord-icon
                                src="https://cdn.lordicon.com/vvqcrgre.json"
                                trigger="hover"
                                style="width:100px;height:100px">
                            </lord-icon>
                            <div>
                                <h4>Centre de confidentialité</h4>
                                <p>Découvrez comment gérer et contrdler votre confidentialité au sein des produits Meta.</p>
                            </div>
                        </div>
                    </a>
                    </li>
                    <li>
                        <a href="">
                            <div class="card">
                                <script src="https://cdn.lordicon.com/lordicon.js"></script>
                            <lord-icon
                                src="https://cdn.lordicon.com/tlxagvyb.json"
                                trigger="hover"
                                colors="primary:#2393ea,secondary:#ffc738,tertiary:#2393ea,quaternary:#ebe6ef"
                                style="width:100px;height:100px">
                            </lord-icon>
                            <div>
                                <h4>Pages d'aide Facebook</h6>
                                    <p>Apprenez-en plus sur la version mise a jour de nos paramétres sur Facebook.</p>
                                </div>
                        </div>
                    </a>
                    </li>
                </ul>
            </div>
        </div>


        <div class="parentMotdePass" style="display: none">
            <h1>Mot de passe et sécurité</h1>
            <h4>Connexion et récupération</h4>
            <p>Gérez vos mots de passe, préférences de connexion et méthodes de récupération.</p>
            <p>Votre mot de passe doit contenir au moins 6 caractères ainsi qu’une combinaison de chiffres, de lettres et de caractères spéciaux ( !$@%).</p>
            <br>
            <form action="{{ route("image.changePassword", $profile->id) }}" method="post" >
                @csrf
                @method('patch')
                <table>
                    <tr>
                        <td colspan="2">
                            <label for="">Mot de passe actuel</label> <br>
                            <input type="password" name="passwordAcuel" id="inputPassActuel">
                            @error('passwordAcuel')
                                <p>{{$message}}</p>
                            @enderror
                            @error('MotDePassIncorrect')
                                <p>{{$message}}</p>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="">Nouveau mot de passe</label> <br>
                                <input type="password" name="password">
                            @error('password')
                                <p>{{$message}}</p>
                                @enderror
                            </td>
                            <td>
                                <label for="">Retapez le nouveau mot de passe</label> <br>
                                <input type="password" name="password_confirm">
                            @error('password_confirm')
                                <p>{{$message}}</p>
                            @enderror
                        </td>
                    </tr>
                </table>
                <a href="">Mot de passe oublié ?</a>
                <button type="submit">Change le mot de passe</button>
            </form>

        </div>



        {{-- <div class="parentContentSidebar" style="display: none"> --}}
        <div class="parentContentSidebar" >
            <h1>Détails personnels</h1>
            <div class="parentProfileSettings">
                <div class="parentImagesProfile">
                    <img src="{{ asset("storage/".$profile->cover) }}" alt="" class="coverSettings">

                    <img src="{{ asset("storage/".$profile->image) }}" alt="" class="imageProfileSettings">

                    <div class="ulOfImgProfile" style="display: none;">
                        <ul>
                            <li class="liofChangeImage">
                                <button href=""><i class='bx bxs-pencil'></i> Changer la photo</button>
                            </li>
                            <li >
                                <button class="viewPhoto"><i class='bx bxs-show'></i> Voir la photo</button>
                            </li>
                            <li>
                                <button ><a href="{{ route('image.download', $profile->id)}}" style="color: white;text-decoration:none;"><i class='bx bx-download' ></i> Télécharger la photo</a></button>
                            </li>
                        </ul>
                        <form id="imageChangeForm" action="{{ route('image.change', $profile->id) }}" enctype="multipart/form-data" method="post">
                            @csrf
                            @method('PATCH')
                            <input type="file" name="ImageChange" class="ImageChange" style="display: none">
                            <input type="submit" class="submitOfChangeImage" style="display: none">
                        </form>
                    </div>
                    <i class='bx bxs-camera btnCamera' ></i>
                    <h3>{{$profile->prenom}} {{$profile->nom}}
                        @if($profile->verification)
                        <i class='bx bxs-badge-check iVerifi'></i>
                        @endif
                    </h3>
                    <h6>{{"@".$profile->nom_utilisateur}}</h6>
                    <button class="btnModifieSettings">modifié le profile <i class='bx bxs-pencil'></i></button>
                    <button class="btnSeemore"><i class='bx bx-chevron-down'></i></button>
                    <ul class="ulSeemore">
                        <li>
                            <a href="{{ route("compte.suprime", Auth()->user()->id) }}" onclick="return confirm('Supprime compte ?')">Supprime comptes</a>
                        </li>
                        <li>
                            <a href="">Supprime pour moment</a>
                        </li>
                    </ul>
                </div>
                <div class="parentActivite">
                    <div class="navabrActivite">
                        <div class="divTitle">
                            <h3>Activité</h3>
                            <h6>0 amis</h6>
                            <h3 class="line">|</h3>
                        </div>
                        <button class="btnPostSettings"><i class='bx bx-notepad'></i> Mes publications</button>
                        <button class="btnCommuntSettings"><i class='bx bxs-message-rounded-dots' ></i> Mes commentaires</button>
                        <button class="btnLikesSettings"><i class='bx bx-like'></i> Likes</button>
                    </div>
                    <div class="parentPostsSettings" style="display: none;">
                        @foreach ($posts as $post)
                        <div class="post">
                            <div class="infoCompte">
                                <div class="compteImgPost">
                                    <img src="{{ asset("storage/".$post->compte->cover) }}" alt="" class="coverSettings">
                                    <a href="" class="btnTripelPost"><i class='bx bx-dots-vertical-rounded'></i></a>
                                </div>
                                <div class="infoCompteData">
                                    <h5>{{ $post->compte->prenom }} {{ $post->compte->nom }}</h5>
                                <p>{{ $post->created_at->diffForHumans() }}</p>
                            </div>
                        </div>
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
                                            </button>
                                        </form>
                                    </li>
                                    <li class="parentComment">
                                        <a href="" class="comments"><i class='bx bxs-comment-detail'></i></a>
                                    </li>
                                    <li class="parentShare">
                                        <a href="" class="share"><i class='bx bxs-share'></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="parentModelEdit" style="display: none">
        <div class="parentFormModel">
            <h2>Modifie le profile</h2>
            <button class="btnCloseModel"><i class='bx bx-x'></i></button>
            <div class="parentImageCoverEdit">
                <div class="divFormEdit">
                <img src="{{ asset("storage/".$profile->cover) }}" alt="" class="coverImgEdit">
                <div class="penEditCover"><i class='bx bxs-pencil'></i></div>
                <img  src="{{ asset("storage/".$profile->image) }}" alt="" class="ImgEdit">
                <div class="penEdit"><i class='bx bxs-pencil'></i></div>
                <form action="{{ route('info.store', $profile->id) }}" class="formEdit" method="POST" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <br>
                    <input type="file" name="image" class="imageFile" style="display: none;">
                    <input type="file" name="cover" class="coverFile" style="display: none;">
                    <br>
                    <table>
                            <tr>
                                <td>
                                    <label for="nom">Nom</label> <br>
                                    <input type="text" name="nom" id="nom"  placeholder="Nom" class="" value="{{ old('nom', $profile->nom) }}">
                                    @error('nom')
                                        <span class="p-Error">{{$message}}</span>
                                    @enderror
                                </td>
                                <td>
                                    <label for="prenom">Prenom</label> <br>
                                    <input type="text" name="prenom" id="prenom"   placeholder="Prenom" class="" value="{{ old('prenom', $profile->prenom) }}">
                                    @error('prenom')
                                        <span class="p-Error">{{$message}}</span>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="nom_utilisateur">Nom d'utilisateur</label> <br>
                                    <input type="text" name="nom_utilisateur" id="nom-utilisateur"  placeholder="Nom d'utilisateur" class="" value="{{ old('nom_utilisateur', $profile->nom_utilisateur) }}">
                                    @error('nom_utilisateur')
                                        <span class="p-Error">{{$message}}</span>
                                    @enderror
                                </td>
                                <td>
                                    <label for="email">Email</label> <br>
                                    <input type="text" name="email" id="email"  placeholder="Email" class="" value="{{ old('email', $profile->email) }}">
                                    @error('email')
                                        <span class="p-Error">{{$message}}</span>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="date-naissance">Date de naissance</label> <br>
                                    <input type="date" name="date_naissance" id="date-naissance"  placeholder="Date de naissance" class=""  value="{{ old('date_naissance', $profile->date_naissance) }}">
                                    @error('date_naissance')
                                        <span class="p-Error">{{$message}}</span>
                                    @enderror
                                </td>
                                <td>
                                    <label for="localisation">Localisation</label> <br>
                                    <input type="text" name="localisation" id="localisation"  placeholder="Localisation" class="" value="{{ old('localisation', $profile->localisation) }}">
                                    @error('localisation')
                                        <span class="p-Error">{{$message}}</span>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <label for="bio">Bio</label> <br>
                                    <textarea name="bio" id="date-naissance"  placeholder="Bio.." class="" >{{ old('bio', $profile->bio) }}</textarea>
                                    @error('bio')
                                        <span class="p-Error">{{$message}}</span>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" class="" value="Modifie votre compte" id="LoginSubmit">
                                </td>
                            </tr>
                        </table>
                    </div>
                </form>
            </div>

        </div>
    </div>


<script>
    $(document).ready(function () {
        $('.btnModifieSettings').click(function () {
            $('.parentModelEdit').show();
            setTimeout(function() {
                $('.parentModelEdit').hide('slow');
                    }, 60000);
        });

        $('.DetailsPersonnelsLi').click(function () {
            $('.parentContentSidebar').toggle('fast');
            $('.parentContentSidebarAutomaticlly').hide();
            $('.parentMotdePass').hide();
            });
        $('.btnMotdePassSecurity').click(function () {
            $('.parentMotdePass').show('fast');
            $('.parentContentSidebar').hide('fast');
            $('.parentContentSidebarAutomaticlly').hide('fast');
            });


        $('.btnPostSettings').click(function () {
            $('.parentPostsSettings').toggle('slowe');
            $('.btnPostSettings').toggleClass('visibleLike').css('transition', 'all 0.2s ease');;
        });
        $('.imageProfileSettings').click(function () {
            $('.ulOfImgProfile').toggle('slowe');
        });

        $('.viewPhoto').click(function() {
            $('.parentViewImage').show();
        });
        $('.parentViewImage').click(function() {
            $('.parentViewImage').hide();
        });


        $('.btnCloseModel').click(function () {
            $('.parentModelEdit').hide();
        });
        $('.penEdit').click(function(){
            $('.imageFile').click();
        })
        $('.liofChangeImage').click(function(){
            $('.ImageChange').click();
        })
        $('.penEditCover').click(function(){
            $('.coverFile').click();
        })
        $('.imageFile').change(function (e) {
            if (e.target.files.length > 0) {
                var file = e.target.files[0];
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('.ImgEdit').attr('src', e.target.result);
                };
                reader.readAsDataURL(file);
            }
        });
        $('.coverFile').change(function (e) {
            if (e.target.files.length > 0) {
                var file = e.target.files[0];
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('.coverImgEdit').attr('src', e.target.result);
                };
                reader.readAsDataURL(file);
            }
        });
        $('.ImageChange').change(function () {
            $('.imageChangeForm').submit();
        });
        $('.ImageChange').change(function () {
            $('.submitOfChangeImage').click();
        });
    });
</script>

@endsection
