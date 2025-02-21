<div>
    <div class="table-responsive">
        <table class="table card-table table-vcenter text-nowrap datatable">
            <thead>
                <tr>
                    <th class="w-1">Sl</th>
                    <th>Category name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-tbody">

                @foreach ($college_categories as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->course_category_name }}</td>
                        <td><a href="#" class="btn btn-sm btn-outline-primary">Edit</a></td>
                    </tr>
                @endforeach

            </tbody>

        </table>
        {{ $college_categories->links() }}
    </div>

</div>
