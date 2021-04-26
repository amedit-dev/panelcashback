<x-admin-master>

    @section('content')

        <!-- Basic table -->
            <section id="basic-datatable">
                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-body mt-2">
                                <h4>Filtro</h4>
                                <form id="form" class="dt_adv_search" method="POST" action="{{route('transaction.showdate')}}">
                                    @csrf
                                    <div class="row">

                                        <div class="col-md-2 form-group">

                                            <label class="form-label" for="basic-icon-default-date">Seleziona Data</label>
                                            <input type="text"  name="date"  class="form-control dt-date flatpickr-input active" id="basic-icon-default-date" placeholder="MM/DD/YYYY" aria-label="MM/DD/YYYY" readonly="readonly">

                                        </div>
                                    </div>


                            </div>
                            </form>

                        </div>

                        <table class="datatables-basic table">
                            <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th>Data</th>
                                <th>Posizioni</th>
                                <th>Transazione</th>
                                <th>Screenshot</th>
                                <th>Nickname</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                </div>
            </section>
            <!--/ Basic table -->

            <button data-rel="http://png" type="button" class="btn btn-primary btn-add-record ml-2" data-toggle="modal" data-target="#exampleModalScrollable455"> Visualizza  </button>

            <div  class="modal fade" id="exampleModalScrollable455" tabindex="-1" aria-labelledby="exampleModalScrollableTitle" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalScrollableTitle455">Screenshot</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span> </button>
                        </div>
                        <div id="screenshootarea1" class="modal-body">

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary waves-effect waves-float waves-light" data-dismiss="modal">ok</button>
                        </div>
                    </div>
                </div>
            </div>


            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>



    @endsection




</x-admin-master>
