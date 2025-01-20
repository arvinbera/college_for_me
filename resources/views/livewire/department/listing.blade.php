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

                @foreach ($departments as $department)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $department->department_name }}</td>
                        <td><a href="{{ route('department.edit', $department->id) }}"
                                class="btn btn-sm btn-outline-primary">Edit</a></td>
                    </tr>
                @endforeach

            </tbody>

        </table>
        {{ $departments->links() }}
    </div>

</div>
