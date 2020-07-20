<x-user-master>
    @section('title', 'Tour')
    @section('content')
        <section class="col-12">
            <div class="text-center">
                <h3 class="display-4 my-5">Upcoming Shows</h3>
                <table class="table table-responsive text-white" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="align-middle">Időpont</th>
                            <th class="align-middle">Helyszín</th>
                            <th class="align-middle">Kapunyitás</th>
                            <th class="align-middle">Kezdés</th>
                            <th class="align-middle">Jegyár elővételben</th>
                            <th class="align-middle">Jegyár a helyszínen</th>
                            <th class="align-middle"></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th class="align-middle">Időpont</th>
                            <th class="align-middle">Helyszín</th>
                            <th class="align-middle">Kapunyitás</th>
                            <th class="align-middle">Kezdés</th>
                            <th class="align-middle">Jegyár elővételben</th>
                            <th class="align-middle">Jegyár a helyszínen</th>
                            <th class="align-middle"></th>
                        </tr>
                    </tfoot>
                    <tbody>

                        <tr>
                            <td class="align-middle">.</td>
                            <td class="align-middle"></td>
                            <td class="align-middle"></td>
                            <td class="align-middle"></td>
                            <td class="align-middle">.,- Ft</td>
                            <td class="align-middle">.,- Ft</td>
                            <td class="align-middle"><a class="btn btn-primary align-middle" target="_blank" href="">More info</a></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </section>
    @endsection
</x-user-master>
