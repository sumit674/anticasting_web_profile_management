<div class="modal fade" id="upload-image-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">

        <div class="modal-content">
            {{-- <form action="{{ route('users.uploadImages') }}" method="post" enctype="multipart/form-data"> --}}
            {{-- @csrf --}}

            <div class="modal-header">
                <input type="hidden" id="image_number" />
                <h6 class="modal-title" id="exampleModalLabel">Headshot Image</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="d-flex justify-content-center mt-2">
                <input type="radio" class="ps-2" name="select-image" checked id="image-upload" />
                &nbsp;
                <label class="pe-2 label-text" for="image-upload">Upload</label>
                &nbsp;
                <input type="radio" class="pe-2" name="select-image" id="image-capture" />
                &nbsp;
                <label class="pe-2 label-text" for="image-capture">Capture</label>
            </div>
            <div class="upload-picture pt-0">
                <div class="modal-body">
                    <p style="font-weight: bold;">Picture</p>
                    <input type="file" name="picture" class="form-control image mb-2" id="picture" />
                    <input type="hidden" name="old_image" class="mb-2" id="old_image" />

                    <span id="error1" style="display:none; color:#FF0000;">
                        Invalid image format. Image format must be jpg, jpeg,png or gif.
                    </span>
                    <!--
                        <span id="error2"  style="display:none; color:#FF0000;">
                            File too Big, please select a file less than 4mb.
                        </span>
                          -->
                    <span id="error3" style="display:none; color:#FF0000;">
                        Image should be more than 4 MB.
                    </span>
                </div>
            </div>
            <div class="image-capture upload-capture">
                <div class="modal-body">
                    <div class="m-auto">
                        {{-- <div class="text-center">
                            @if (isset($userInfo?->images[3]))
                                <img src="{{ $userInfo?->images[3]?->image }}" class="image-thumbnail" alt="...">
                            @endif

                        </div> --}}
                        <div class="justify-content-center">
                            <div id="my_camera"></div>
                            <div class="text-center" id="results"></div>
                        </div>
                        <div class="mt-1">
                            <div class="d-flex mt-3">
                                <div class="justify-content-start take-snap-first" id="take">

                                    <p class="text-webcam-text act-btn"  onClick="take_snapshot()"><i
                                            class="fa fa-camera-retro fa-2xl"></i> Take Snapshot</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="take-snap-configuration">

                                    <p class="text-webcam-text act-btn" id="retake" onClick="ReConfigureCamera()"><i
                                            class="fa fa-camera fa-2xl"></i> Retake Snapshot
                                    </p>
                                </div>
                                <div class="take-snap-second" id="take-btn">
                                    <button class="btn btn-sm btn-success text-webcam-text" data-bs-dismiss="modal" onClick="Retake_snapshot()">
                                        <span class="fa fa-check fa-2xl"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        {{-- <input type=button value="Save Snapshot" onClick="saveSnap()"> --}}

                    </div>
                </div>
            </div>
            {{-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" onclick="onSelectImage();" class="btn btn-primary pictureCls" >Select</button>
                </div> --}}
            {{-- </form> --}}
        </div>
    </div>
</div>
