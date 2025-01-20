<table class="table card-table table-vcenter text-nowrap datatable">
    <thead>
        <tr>
            <th class="w-1">Sl</th>
            <th>Faculty name</th>
            <th>Department name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody class="table-tbody">

        @foreach ($college_faculties as $faculty)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $faculty->faculty_name }}</td>
                <td>{{ $faculty->department->department_name }}</td>
                <td><a href="{{ route('college.faculty.edit', $faculty->id) }}"
                        class="btn btn-sm btn-outline-primary">Edit</a></td>
            </tr>
        @endforeach

    </tbody>

</table>
