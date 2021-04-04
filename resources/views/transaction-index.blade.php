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
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                </div>
            </section>
            <!--/ Basic table -->

    @endsection

</x-admin-master>
