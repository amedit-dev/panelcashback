<x-home-master>

    @section('content')

    <div class="auth-inner py-2">
            <!-- Login v1 -->
            <div class="card mb-0">
                <div class="card-body">
                    <a href="javascript:void(0);" class="brand-logo">

                        <h2 class="brand-text text-primary ml-1">Tracking Posizioni</h2>

                    </a>

                    <h4 class="card-title mb-1">Inserisci il codice</h4>

                    <form class="auth-login-form mt-2" action="{{route('codes.check')}}" method="POST"  enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">

                            <input
                                type="number"
                                class="form-control font-weight-bold"
                                id="code"
                                name="code"
                                placeholder="1234"
                                aria-describedby="code"
                                tabindex="1"
                                autofocus required
                            />
                        </div>

                        @error('code')
                        <div class="alert alert-danger"> {{$message}}</div>
                        @enderror

                        <button class="btn btn-primary btn-block" tabindex="4">Avanti</button>
                    </form>

                    <div class="divider my-2">


                        @if(Session::has('codes-index-message'))

                            <p class="text-center mt-2 alert-danger">
                                <span>{{  Session::get('codes-index-message') }}</span>
                            </p>





                        @endif

                    </div>

                </div>
            </div>
            <!-- /Login v1 -->
        </div>






    @endsection





</x-home-master>
