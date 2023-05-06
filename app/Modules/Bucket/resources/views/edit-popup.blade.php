<div class="modal fade" id="editBucketModal" tabindex="-1" aria-labelledby="exampleModalLabel" data-bs-backdrop="static"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Bucket</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="#" method="POST" id="edit_bucket_form">
                @csrf
                <input type="hidden" name="bucket_id" id="bucket_id">
                <div class="modal-body p-4 bg-light">
                    <div class="my-2">
                        <label for="bucket_name">Bucket</label>
                        <input type="text" name="bucket_name" id="bucket_name" class="form-control" placeholder="Bucket"
                            required>
                    </div>
                </div>
                <div class="modal-footer">
                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" id="edit_Bucket_btn" class="btn btn-success">Update Bucket</button>
                </div>
            </form>
        </div>
    </div>
</div>
