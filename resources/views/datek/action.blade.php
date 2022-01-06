<div class="d-flex">
    <a href="{{ route('datek.show', $datek->id) }}" class="btn btn-outline-dark btn-sm mr-2">Detail</a>
    @can('admin')
    <div class="d-flex">
        <a href="{{ route('datek.edit', $datek->id) }}" class="btn btn-outline-primary btn-sm">Update</a>
    </div>
    @endcan
</div>
