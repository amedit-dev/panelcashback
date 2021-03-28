<x-home-master>

    @section('content')

    <div class="auth-inner py-2">
            <!-- Login v1 -->
            <div class="card mb-0">
                <div class="card-body">
                    <a href="javascript:void(0);" class="brand-logo">

                        <h2 class="brand-text text-primary ml-1">Tracking Posizioni</h2>

                    </a>

                    <h4 class="card-title mb-1">Bienvenuto! 👋</h4>
                    <p class="card-text mb-2">Inserisci qui sotto i dati</p>

                    <form class="auth-login-form mt-2" action="{{route('transaction.store')}}" method="POST"  enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="number" class="form-label ">Numero Transazioni:</label>
                            <input
                                type="number"
                                class="form-control font-weight-bold"
                                id="transactions"
                                name="transactions"
                                placeholder="251"
                                aria-describedby="transactions"
                                tabindex="1"
                                autofocus required
                            />
                        </div>

                        @error('transactions')
                        <div class="alert alert-danger"> {{$message}}</div>
                        @enderror

                        <div class="form-group">
                            <label for="number" class="form-label">La tua posizione:</label>

                            <input
                                type="number"
                                class="form-control font-weight-bold"
                                id="position"
                                name="position"
                                placeholder="120.000"
                                aria-describedby="position"
                                tabindex="1"
                                autofocus required
                            />
                        </div>


                        <div class="form-group">
                            <label for="customFile">Allega Screenshot</label>
                            <div class="custom-file">
                                <input  name="file" type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label"  for="customFile">Seleziona</label>
                            </div>
                        </div>

                        @error('file')
                        <div class="alert alert-danger"> {{$message}}</div>
                        @enderror

                        <div class="form-group">
                            <label for="text" class="form-label">Nickname:</label>

                            <small class="text-muted">(optionale)</small>

                            <input
                                type="text"
                                class="form-control"
                                id="nickname"
                                name="nickname"
                                placeholder="Alex4515"
                                aria-describedby="nickname"
                                tabindex="1"
                                autofocus
                            />

                        </div>

                        @error('nickname')
                        <div class="alert alert-danger"> {{$message}}</div>
                        @enderror



                        <button class="btn btn-primary btn-block" tabindex="4">Aggiungi</button>
                    </form>


                </div>
            </div>
            <!-- /Login v1 -->
        </div>






    @endsection





</x-home-master>
