<x-home-master>

    @section('content')

    <div class="auth-inner py-2">
            <!-- Login v1 -->
            <div class="card mb-0">
                <div class="card-body">
                    <a href="javascript:void(0);" class="brand-logo">

                        <h3   class="brand-text text-primary ml-1">Grazie i dati sono stati inseriti</h3>

                    </a>

                    @if($user->id == 1)

                    <a href="{{route('transaction.create')}}">    <div class="divider my-2">

                        <div class="divider-text text-center">-</div>
                        <button class="btn btn-primary btn-block"  tabindex="4">

                             <span>Home</span>

                        </button>

                    </div></a>

                    <div class="divider my-2">

                            <div class="divider-text text-center">Personalizza il tuo nickname Per la prossima volta</div>

                    </div>

                    <h1>{{  Session::get('transaction-id') }}</h1>

                    <form class="auth-login-form mt-2" action="{{route('user.store', [$user, $transaction])}}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="text" class="form-label">Nickname:</label>

                            <input
                                type="text"
                                class="form-control"
                                id="nickname"
                                name="nickname"
                                placeholder="alex4515"
                                aria-describedby="nickname"
                                tabindex="1"
                                autofocus
                            />
                        </div>
                        @error('nickname')
                        <div class="alert alert-danger"> {{$message}}</div>
                        @enderror
                        <button class="btn btn-primary btn-block" tabindex="4">Salva</button>
                    </form>

                    <div class="divider my-2">


                        @if(Session::has('user-created-message'))


                            <p class="text-center mt-2 alert-success">
                                <span>{{  Session::get('user-created-message') }}</span>
                            </p>

                            <h2 class="brand-text text-primary ml-1 text-center">{{Session::get('Data')}}</h2>




                        @endif

                    </div>

                    @endif

                </div>
            </div>
            <!-- /Login v1 -->
        </div>






    @endsection





</x-home-master>
