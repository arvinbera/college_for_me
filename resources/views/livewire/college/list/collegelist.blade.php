<div>
    <div class="table-responsive">
        <table class="table card-table table-vcenter text-nowrap datatable">
            <thead>
                <tr>
                    <th class="w-1">Sl</th>
                    <th>Department name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-tbody">

                @foreach ($colleges as $college)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $college->name }}</td>
                        <td><a href="{{ route('college.info.edit', [$college->id]) }}"
                                class="btn btn-sm btn-outline-primary">Edit</a></td>
                    </tr>
                @endforeach

            </tbody>

        </table>
        {{ $colleges->links() }}
    </div>

</div>
