<div class="modal fade" id="editBucketModal" tabindex="-1" aria-labelledby="exampleModalLabel" data-bs-backdrop="static"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Movie</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="#" method="POST" id="edit_bucket_form">
                @csrf
                <input type="hidden" name="bucket_id" id="bucket_id">
                <div class="modal-body p-4 bg-light">
                    <div class="my-2">
                        <label for="movie_name">Movie Name</label>
                        <input type="text" name="movie_name" id="movie_name" class="form-control" placeholder="Enter a movie name"
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
