<div>

    <div class="row">
        <div class="col-md-5 mb-2">
            <input type="text" class="form-control" placeholder="Search college" wire:model.live="college_key">
        </div>

    </div>

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

                @forelse ($colleges as $college)
                    <tr>
                        <td>{{ ($colleges->currentPage() - 1) * $colleges->perPage() + $loop->iteration }}</td>
                        <td>{{ $college->name }}</td>
                        <td>
                            <a href="{{ route('college.info.edit', [$college->id]) }}"
                                class="btn btn-sm btn-outline-primary">Edit</a>

                            @if ($college->is_verify)
                                <a href="#" class="btn btn-sm btn-outline-danger"
                                    wire:click.prevent="remove_verify({{ $college->id }})">
                                    Remove Blue Tick
                                </a>
                                <a href="{{ route('college.collegeadmin.add', $college->id) }}"
                                    class="btn btn-sm btn-outline-warning">
                                    Add Admin
                                </a>
                            @else
                                <a href="#" class="btn btn-sm btn-outline-success"
                                    wire:click.prevent="add_verify({{ $college->id }})">
                                    Add Blue Tick
                                </a>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">No colleges found</td>
                    </tr>
                @endforelse

            </tbody>

        </table>
        {{ $colleges->links() }}
    </div>

</div>
