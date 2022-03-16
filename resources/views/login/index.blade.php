@extends('login.layout')
@section('content')
    <div class="w-full md:w-96 md:pt-8 mx-auto">
        <div class="relative mx-auto w-full md:w-96 rounded-lg bg-white shadow border-3 pt-8 pb-12 px-4">
            <div class="absolute top-2 left-2 right-2">
                <div class="isError hidden bg-opacity-60 flex items-center rounded bg-pink-200 border border-pink-300 text-pink-900 py-2 px-3">
                    <i class="fas fa-info pr-2"></i> {{__('Bad Credentials, try again!') }}
                </div>
                <div class="isConnected hidden bg-opacity-40 flex items-center rounded bg-green-500 border border-green-400 text-green-900 py-2 px-3">
                    <i class="fas fa-check pr-2"></i> {{ __('Your are connected') }}
                </div>
            </div>

            <form id="login_submit">
                <div class="text-2xl font-bold pt-4 pb-2 text-center text-gray-800">
                    {{ __('Sign In') }}
                </div>
                @csrf
                <div class="pt-4">
                    <label class='block' htmlFor="email">Email :</label>
                    <input required placeholder='john@email.com' class='text-sm border rounded py-2 px-2 bg-white w-full' type="email" name="email" id="email" />
                </div>
                <div class="pt-4 relative">
                    <label class='block' htmlFor="password">Password :</label>
                    <input required placeholder='Password' class='text-sm border rounded py-2 px-2 bg-white w-full' type="password" name="password" id="password" />
                    <i class="pwd show fas fa-eye absolute bottom-2 right-1 text-gray-400 p-1 cursor-pointer hover:text-gray-600"></i>
                    <i class="pwd hide hidden fas fa-eye-slash absolute bottom-2 right-1 text-gray-400 p-1 cursor-pointer hover:text-gray-600"></i>
                </div>
                <div class="text-right text-gray-400 py-2 cursor-pointer hover:text-gray-600">
                    Forgot password?
                </div>
                <button type='submit' class='w-full bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 text-white py-3 text-center rounded-xl my-8'>
                    Se Connecter
                </button>
            </form>

            <div class="loader hidden justify-center bg-opacity-40 flex items-center absolute top-0 bottom-0 left-0 right-0 rounded bg-gray-500 border border-gray-400 text-gray-900 py-2 px-3">
                <i class="fas fa-spinner fa-spin text-2xl"></i>
            </div>

        </div>
    </div>
    <script>
        $(document).ready(function(){
            $('#login_submit').on('submit', function(e){
                e.preventDefault()
                $('.loader').removeClass('hidden')
                var data = {
                    email     :   $("#email").val(),
                    password  :   $("#password").val(),
                }
                $.ajax({
                    url : `{{route("login")}}`,
                    headers:{ 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                    method : 'POST',
                    data : data,
                    dataType : 'json',
                    success : function(r){
                        console.log(data)
                        $('.loader').addClass('hidden')
                        $('.isConnected').removeClass('hidden')
                    },
                    error : function(err){
                        console.log(err.responseJSON.message)
                        $('.loader').addClass('hidden')
                        $('.isError').removeClass('hidden')
                        var timer = setTimeout(() => {
                            $('.isError').addClass('hidden')

                        }, 3000);
                    }
                })
            })

            $('.pwd').on('click', function(){
                if($(this).hasClass('show')){
                    $('#password').attr('type', 'text')
                }else{
                    $('#password').attr('type', 'password')
                }
                $('.pwd').toggleClass('hidden')
            })
        })
    </script>
@endsection
