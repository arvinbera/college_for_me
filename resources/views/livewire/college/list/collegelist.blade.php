<div>
    <div class="table-responsive">
        <table class="table card-table table-vcenter text-nowrap datatable">
            <thead>
                <tr>
                    <th class="w-1">Sl</th>
                    <th>College name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-tbody">

                @foreach ($colleges as $college)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $college->name }}</td>
                        <td>
                            <a href="{{ route('college.info.edit', [$college->id]) }}"
                                class="btn btn-sm btn-outline-primary">Edit</a>
                            @if ($college->is_verify)
                                <a href="#" class="btn btn-sm btn-outline-danger" wire:click.prevent="remove_verify({{$college->id}})">Remove Blue Tick</a>    
                            @else
                                <a href="#" class="btn btn-sm btn-outline-success" wire:click.prevent="add_verify({{$college->id}})">Add Blue Tick</a>    
                            @endif
                        </td>
                    </tr>
                @endforeach

            </tbody>

        </table>
        {{ $colleges->links() }}
    </div>

</div>
