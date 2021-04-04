<x-admin-master>


    @section('content')

        <div class="dt-buttons btn-group pb-2">

            <a href="{{route('codes.create')}}">  <button class="btn add-new btn-primary mt-50">
                <span>Aggiungi Codice</span>
            </button></a>
        </div>

        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>Codice</th>
                    <th>Creato il</th>
                    <th>Azioni</th>
                </tr>
                </thead>
                <tbody>

                @foreach($codes as $code)



                    <tr>
                        <td>
                            <span class="font-weight-bold">{{$code->code}}</span>
                        </td>
                        <td><span class="badge badge-pill badge-light-primary mr-1">{{  $code->created_at}}</span></td>
                        <td>
                            <div class="dropdown">


                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light" data-toggle="dropdown" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                </button>
                                <div class="dropdown-menu " style="">

                                    <form id="deletecode" class="auth-login-form mt-2" action="{{route('codes.destroy',$code->id) , $code->id}}" method="GET">
                                        @csrf
                                        @method('GET')

                                        @if($code->code == '1541')

                                            <button class="btn btn-danger btn-block" tabindex="4" disabled>Elimina</button>
                                            
                                        @else

                                            <button class="btn btn-danger btn-block" tabindex="4" >Elimina</button>

                                        @endif


                                    </form>



                                </div>
                            </div>
                        </td>
                    </tr>


                @endforeach
                </tbody>
            </table>
        </div>

    @endsection

</x-admin-master>
