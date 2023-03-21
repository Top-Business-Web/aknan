<script src="{{ asset('assets/front/') }}/js/jquery-1.10.1.min.js"></script>
<script src="{{ asset('assets/front/') }}/js/owl.carousel.min.js"></script>

<script src="{{ asset('assets/front/') }}/js/main.js"></script>
<script src="{{ asset('assets/front/') }}/js/plugin.js"></script>

<script src="{{ asset('assets/front/') }}/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets/front/') }}/js/all.min.js"></script>

<script>

    var myElement = document.querySelector(".loader .myimage"),
        myimages = ['{{ asset('assets/front/') }}/photo/2.jpg', '{{ asset('assets/front/') }}/photo/3.jpg', '{{ asset('assets/front/') }}/photo/4.jpg'];

    function changeImage(myElement, myimages) {
        setInterval(function () {

            var myRandomNumber = Math.floor(Math.random() * myimages.length);
            myElement.src = myimages[myRandomNumber];

        }, 1000);
    }

    changeImage(myElement, myimages);

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
