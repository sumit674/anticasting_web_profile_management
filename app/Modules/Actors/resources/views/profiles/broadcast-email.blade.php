<div class="modal fade" id="broadcast-popup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <h5 class="modal-title" id="exampleModalLabel">Send Your Email</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('admin.broadcast')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="subject" class="text-muted fw-bold"><b>Subject</b>
                            {{--  <span class="text-danger"><b>*</b></span>  --}}
                        </label>
                        <input type="text" name="subject" class="form-control" id="subject"
                            placeholder="Enter subject">
                            {{--  @error('subject')
                               <span class="text-danger">{{$message}}</span>
                            @enderror  --}}
                    </div>
                    <div class="form-group">
                        <label for="message" class="text-muted fw-bold"><b>Message</b>
                            {{--  <span class="text-danger"><b>*</b></span>  --}}
                        </label>
                        <textarea class="form-control" name="message" id="message" cols="6" rows="4" placeholder="Enter message">
                        </textarea>
                        {{--  @error('message')
                           <span class="text-danger">{{$message}}</span>
                        @enderror  --}}
                    </div>
                    <input type="hidden" name='user_id' id="send-broadcast-user-email"/>
                </div>
                <div class="modal-footer border-top-0 d-flex justify-content-center">
                    <button type="submit" class="btn btn-success">Sand</button>
                </div>
            </form>
        </div>
    </div>
</div>
