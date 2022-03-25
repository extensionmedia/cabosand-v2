<div class="w-full h-14 flex items-center bg-white shadow-lg border-b">
    <div class="w-60 flex items-center gap-2 pl-2">
        <div class="menu-show text-xl text-center px-2 py-1 rounded cursor-pointer hover:text-white hover:bg-gray-600">
            <i class="fas fa-bars"></i>
        </div>
        <a href="{{route('home')}}" class="flex items-center gap-2">
            <img class="h-6" src="{{asset('/storage/images/manager-logo.png')}}" alt="">
            <div class="relative">
                <div class="font-bold text-lg -mt-2">{{config("app.name")}}</div>
                <div class="absolute top-4 text-xs text-blue-800">v2.0</div>
            </div>

        </a>
    </div>

    <form class="relative">
        <input name="req" id="req" type="text" placeholder="Search ..." class="bg-blue-50 rounded py-2 pl-8 pr-2 w-64">
        <button class="absolute top-2 left-2 text-gray-400 hover:text-gray-600">
            <i class="fas fa-search"></i>
        </button>
    </form>
    <div class="flex-1 flex justify-end">
        <form action="{{route('logout')}}" method="POST">
            @csrf
            <button class="text-xl text-center px-2 py-1 rounded cursor-pointer hover:text-white hover:bg-red-600">
                <i class="fas fa-sign-out-alt"></i>
            </button>
        </form>
    </div>

</div>
<script>
    $(document).ready(function(){
        $('.menu-show').on('click', function(){
            $('.menu_container').removeClass('hidden')

            // const element = document.querySelector('.menu');
            // element.classList.add('animate__animated', 'animate__slideInLeft');

            // element.addEventListener('animationend', () => {
            //     $('.menu').removeClass('animate__animated animate__slideInLeft')
            // });
        })
    })
</script>
