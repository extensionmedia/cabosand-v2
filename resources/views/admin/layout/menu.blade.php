<div class="hidden menu_container hide-menu z-10 fixed top-0 left-0 right-0 bottom-0 bg-black bg-opacity-50">
    <div class="menu animate__animated animate__slideInLeft animate__faster w-60 bg-gradient-to-r from-cyan-600 to-blue-500 h-full">
        <div class="w-60 h-14 flex items-center gap-2 pl-2 border-b">
            <div class="menu-hide text-xl text-white text-center px-2 py-1 rounded cursor-pointer hover:text-white hover:bg-gray-600">
                <i class="fas fa-bars"></i>
            </div>
            <a href="{{route('home')}}" class="flex items-center gap-2">
                <img class="h-6" src="{{asset('/storage/images/manager-logo.png')}}" alt="">
                <div class="relative">
                    <div class="font-bold text-lg -mt-2 text-white">{{config("app.name")}}</div>
                    <div class="absolute top-4 text-xs text-white">v2.0</div>
                </div>

            </a>
        </div>

        <div class="pt-4 px-1 flex flex-col gap-2">
            <a href="{{route('home')}}" class="flex items-center gap-2 py-1 px-2 rounded-lg bg-white bg-opacity-80  text-gray-600">
                <div class="menu-hide text-xl  text-center">
                    <i class="fas fa-home"></i>
                </div>
                <div class="font-bold text-sm ">
                    Dashboard
                </div>
            </a>
            <a href="{{route('home')}}" class="flex items-center gap-2 py-1 px-2 rounded-lg text-white hover:bg-white hover:bg-opacity-50">
                <div class="menu-hide text-xl  text-center">
                    <i class="fas fa-home"></i>
                </div>
                <div class="text-sm ">
                    Depenses
                </div>
            </a>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('.menu-hide').on('click', function(){
            $('.menu_container').addClass('hidden')
            // const element = document.querySelector('.menu');
            // element.classList.add('animate__animated','animate__slideOutLeft');

            // element.addEventListener('animationend', () => {
            //     $('.menu').removeClass('animate__animated animate__slideOutLeft')
            //     $('.menu_container').addClass('hidden')

            // });
        })
    })
</script>
