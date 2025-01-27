<table class="table card-table table-vcenter text-nowrap datatable">
    <thead>
        <tr>
            <th class="w-1">Sl</th>
            <th>Course name</th>
            <th>Department name</th>
            <th>Eligibility</th>
            <th>Fees</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody class="table-tbody">

        @foreach ($course_eligibilities_fees as $course)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $course->course->course_name }}</td>
                <td>{{ $course->department->department_name }}</td>
                <td>{{ $course->eligibility }}</td>
                <td>{{ $course?->fees?->fees }}</td>
                <td><a href="{{route('college.course.fees.eligibility.edit', [$course->id,$course->college_id])}}"
                        class="btn btn-sm btn-outline-primary">Edit</a></td>
            </tr>
        @endforeach

    </tbody>

</table>
