<div class="hidden menu hide-menu z-10 fixed top-0 left-0 right-0 bottom-0 bg-black bg-opacity-50">
    <div class="animate__animated animate__slideInLeft w-60 bg-gradient-to-r from-cyan-600 to-blue-500 h-full">
        <div class="w-60 h-14 flex items-center gap-2 pl-2">
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

        <div class="">

        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('.menu-hide').on('click', function(){
            $('.menu').addClass('hidden animate__bounceOutLeft')
        })
    })
</script>
