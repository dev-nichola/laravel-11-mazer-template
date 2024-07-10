<x-app-layout>

    <x-heading>
        {{ __('Halaman User') }}
    </x-heading>

    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card py-4 px-4">
                    <table id="users_table" class="table table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>

    @push('scripts')
        <script type="text/javascript">
            $(document).ready(function() {
                $('#users_table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{{ url()->current() }}',
                    columns: [{
                            data: 'id',
                            name: 'id'
                        },
                        {
                            data: 'name',
                            name: 'name'
                        },
                        {
                            data: 'email',
                            name: 'email'
                        },

                    ]
                });
            });
        </script>
    @endpush

</x-app-layout>
