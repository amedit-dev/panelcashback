<x-admin-master>




    @section('content')



        <div class="row match-height">
            <div class="col-lg-6 col-12">


                <div class="card mb-0">
                    <div class="card-body">

                        <p class="card-text mb-2">Modifica i dati</p>

                        <form class="auth-login-form mt-2" action="{{route('transaction.update',  $transaction->id)}}" method="post"  enctype="multipart/form-data">
                            @csrf
                            @method('patch')

                            <div class="form-group">
                                <label for="number" class="form-label ">Numero Transazioni:</label>
                                <input
                                    type="number"
                                    class="form-control font-weight-bold"
                                    id="transactions"
                                    value="{{$transaction->transactions}}"
                                    name="transactions"
                                    aria-describedby="transactions"
                                    tabindex="1"
                                    autofocus required
                                />
                            </div>

                            @error('transactions')
                            <div class="alert alert-danger"> {{$message}}</div>
                            @enderror

                            <div class="form-group">
                                <label for="number" class="form-label">Posizione:</label>

                                <input
                                    type="number"
                                    class="form-control font-weight-bold"
                                    id="position"
                                    name="position"
                                    value="{{$transaction->position}}"
                                    aria-describedby="position"
                                    tabindex="1"
                                    autofocus required
                                />
                            </div>

                            <div class="form-group">
                                <label for="text" class="form-label">Nickname:</label>

                                <input
                                    type="text"
                                    class="form-control"
                                    id="nickname"
                                    name="nickname"
                                    value=" {{ $transaction->user->nickname}} "
                                    aria-describedby="nickname"
                                    tabindex="1"
                                    autofocus
                                    disabled
                                />

                            </div>

                            @error('nickname')
                            <div class="alert alert-danger"> {{$message}}</div>
                            @enderror

                            <button class="btn btn-primary btn-block" tabindex="4">Salva</button>
                        </form>


                    </div>
                </div>


            </div>


            <div class="col-lg-6 col-12">

                <img class="img-fluid rounded mb-75" src="{{$transaction->screenshot}}" alt="avatar img">

            </div></div>



    @endsection




</x-admin-master>
