<x-admin-master>






    @section('content')

        <div class="auth-inner py-2">
            <!-- Login v1 -->
            <div class="card mb-0">
                <div class="card-body">
                    <a href="javascript:void(0);" class="brand-logo">

                        <h2 class="brand-text text-primary ml-1 text-center">Generazione Codice</h2>

                    </a>

                    <form class="auth-login-form mt-2" action="{{route('codes.store')}}" method="POST"  enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="code" class="form-label ">Codice:</label>
                            <input
                                type="number"
                                class="form-control font-weight-bold"
                                id="code"
                                name="code"
                                placeholder="0404"
                                aria-describedby="transactions"
                                tabindex="1"
                                autofocus required
                            />
                        </div>

                        @error('codice')
                        <div class="alert alert-danger"> {{$message}}</div>
                        @enderror

                        <button class="btn btn-primary btn-block" tabindex="4">Aggiungi</button>
                    </form>


                </div>
            </div>
            <!-- /Login v1 -->
        </div>

    @endsection




</x-admin-master>
