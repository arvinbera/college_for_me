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

                @foreach ($article_categories as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->title }}</td>
                        <td><a href=""
                                class="btn btn-sm btn-outline-primary">Edit</a></td>
                    </tr>
                @endforeach

            </tbody>

        </table>
  
    </div>

</div>
