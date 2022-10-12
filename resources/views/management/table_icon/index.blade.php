<div class="modal fade" id="tableIconModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Table Icons
                </h5>

            </div>
            <div class="modal-body">
                <form class="card-body" autocomplete="off" action="{{ route('table_icon.store') }}" method="POST"
                    id="create-form" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="inputGroupFile02" name="files[]" multiple>
                        <button type="submit" class="btn btn-info btn-sm">
                            Upload
                        </button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
                <hr>
                @foreach ($table_icon as $icon)
                    <img src="{{ Storage::url($icon->icon_path) }}" class="w-80 me-20"
                        style="width: 100%; height: auto; background-size: center; object-fit: cover;"
                        onclick="setTableIcon('{{ $icon->icon_path }}')" />
                @endforeach
            </div>
        </div>
    </div>
</div>
