<div class="d-flex">
    <a href="{{ route('olo.show', $olo->id) }}" class="btn btn-outline-dark btn-sm mr-2">Detail</a>
    @can('admin')
    <div class="d-flex">
        <a href="{{ route('olo.edit', $olo->id) }}" class="btn btn-outline-primary btn-sm">Update</a>
    </div>
    @endcan
</div>
