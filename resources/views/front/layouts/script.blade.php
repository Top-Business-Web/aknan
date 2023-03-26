<script src="{{ asset('assets/front/') }}/js/jquery-1.10.1.min.js"></script>
<script src="{{ asset('assets/front/') }}/js/owl.carousel.min.js"></script>

<script src="{{ asset('assets/front/') }}/js/main.js"></script>
<script src="{{ asset('assets/front/') }}/js/plugin.js"></script>

<script src="{{ asset('assets/front/') }}/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets/front/') }}/js/all.min.js"></script>

<script>

    {{--var myElement = document.querySelector(".loader .myimage"),--}}
    {{--    myimages = ['{{ asset('assets/front/photo/2.jpg') }}', '{{ asset('assets/front/photo/3.jpg') }}', '{{ asset('assets/front/photo/4.jpg') }}'];--}}

    {{--function changeImage(myElement, myimages) {--}}
    {{--    setInterval(function () {--}}

    {{--        var myRandomNumber = Math.floor(Math.random() * myimages.length);--}}
    {{--        myElement.src = myimages[myRandomNumber];--}}

    {{--    }, 1000);--}}
    {{--}--}}

    {{--changeImage(myElement, myimages);--}}

    // const imageCollection = loadImages(
    //     ["menuImage", "resetScoreButton", "instructionsButton", "playButton", "dialogPanel", "gamePlayImage", "exitButton", "timerPanel", "messengerPanel", "scoreBar", "yesButton", "noButton", "goButton"],
    //     ["game_Menu", "reset_score_button", "instructions_button", "play_button", "dialog_panel", "game_play", "exit_button", "timer", "messenger_panel", "score_bar", "yes_button", "no_button", "go_button"],
    //     drawGameMenu  // this is called when all images have loaded.
    // );
    //
    // function loadImages(names, files, onAllLoaded) {
    //     var i = 0, numLoading = names.length;
    //     const onload = () => --numLoading === 0 && onAllLoaded();
    //     const images = {};
    //     while (i < names.length) {
    //         const img = images[names[i]] = new Image;
    //         img.src = files[i++] + ".png";
    //         img.onload = onload;
    //     }
    //     return images;
    // }

</script>

<!-- script -->
@yield('script')
<!-- script -->
<script>
    $(document).on('keyup', '.searchInput', function (e) {
        e.preventDefault();
        const value = $(this).val();
        const divResult = $('.resultDiv');
        const noResult = '<li class="mb-2"><a class="text-decoration-none" href="#"></a>{{ lang() == 'ar' ? 'لا يوجد نتائج' : 'No results' }}</li>';
        const loader = '<li class="mb-2"><a class="text-decoration-none" href="#"></a>{{ lang() == 'ar' ? 'جاري البحث' : 'Searching' }}</li>';
        // divResult.html(noResult);

        $.ajax({
            type: 'get',
            url: '{{ route('search') }}',
            data: {
                'search': value
            },
            beforeSend: function (data) {
                divResult.removeClass('d-none');
                divResult.html(loader);
            },
            success: function (data) {
                // alert(data)
                if (data !== ''){
                    divResult.html(data);
                } else {
                    divResult.html(noResult);
                    setTimeout(function (){
                        divResult.addClass('d-none');
                    },1000)
                }
            },
            error: function (data) {
                divResult.html(noResult);
            }
        });

    });
</script>
