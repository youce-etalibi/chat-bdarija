<div class="parentPost">
    <div class="parentAddPost">
        <form action=" {{ route('post.store') }} " method="POST" enctype="multipart/form-data">
            @csrf
            <a href="{{ route('settings') }}">
                <img  src="{{ asset("storage/".$compte->image) }}" alt="Profile" class="imgProfilePost">
            </a>
            <input type="text" placeholder="Qu'est ce que tu penses ?" name="body" class="inputPost">
            <input type="file" name="images" class="inputFilePost" onchange="handleImageSelection()">
            <input type="hidden" name="id" value="{{ Auth::id()}}">
            <button type="submit" class="btnSubmitPost">Publier</button>
        </form>
        <div class="parentImagePost" style="display: none;">
            <button class="btnCloseImg"><i class='bx bx-x'></i></button>
            <img class="preview-image" alt="Selected Image Preview">
            @if ($errors->has('images'))
                <script>
                    alert("{{ $errors->first('images') }}");
                </script>
            @endif
        </div>
        <ul>
            <li class="linkLiveParent">
                <a href="" class="linkLive"><i class='bx bxs-camera-movie'></i> Live</a>
            </li>
            <li class="linkPhotoVideoParent">
                <a href="" class="linkPhotoVideo"><i class='bx bxs-image-add'></i> Photo / Video</a>
            </li>
            <li class="linkActiviteParent">
                <a href="" class="linkActivite"><i class='bx bxs-game'></i> Activité</a>
            </li>
        </ul>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('.linkPhotoVideo').on('click', function (e) {
            e.preventDefault();
            $('.inputFilePost').click();
        });

        $('.inputFilePost').on('change', function () {
            var input = this;
            var $imgProfilePost = $('.preview-image');
            var $parentImagePost = $('.parentImagePost');

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $imgProfilePost.attr('src', e.target.result);
                    $parentImagePost.find('.preview-image').attr('src', e.target.result);
                    $parentImagePost.show();
                    $('.btnSubmitPost').show();
                };

                reader.readAsDataURL(input.files[0]);
            }
        });

        $('.parentImagePost button').on('click', function () {
            var $parentImagePost = $('.parentImagePost');
            var $inputFilePost = $('.inputFilePost');
            var $imgProfilePost = $('.imgProfilePost');
            $parentImagePost.hide();
            $inputFilePost.val('');
            $imgProfilePost.attr('src', '{{ asset($compte->image) }}');
            $('.btnSubmitPost').hide();
        });

        $('.inputPost').on('input', function (e) {
            var text = $(this).val();
            text = text.replace(/\n/g, '<br>');
            $(this).val(text);
            toggleSubmitButtonVisibility();
        });

        function toggleSubmitButtonVisibility() {
            var $inputPost = $('.inputPost');
            var $btnSubmitPost = $('.btnSubmitPost');
            if ($inputPost.val().trim() !== '' || $('.inputFilePost').val() !== '') {
                $btnSubmitPost.show();
            } else {
                $btnSubmitPost.hide();
            }
        }
    });

</script>
