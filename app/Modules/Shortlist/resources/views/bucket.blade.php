<style>
    /*bucket list css*/
 .card-container {
        max-width: 100%;
        flex-direction: row;
        background-color: #141414;
        border: 0;
        box-shadow: 0 7px 7px rgba(0, 0, 0, 0.18);
        margin: auto;
        /* max-height: 30%; */
        max-height: 88px;
        overflow: hidden;
    }
  .card-container.dark {
        color: #fff;
    }
  .card-container.card-container.bg-light-subtle .card-title {
        color: dimgrey;
    }
  .cta-section {
        padding: 0.3em 0.5em;
        /* color: #696969; */
    }
   .card.bg-light-subtle .cta-section .btn {
        background-color: #898989;
        border-color: #898989;
    }
   @media screen and (max-width: 475px) {
        .card {
            font-size: 0.9em;
        }
    }
</style>
<div class="card dark card-container position-static">
    <div class="card-body">
        <form id="bucket-form" action="{{ route('admin.project.member') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-3">
                    <div class="d-flex mt-3 select-text">
                        <span id="actor-ids" class="text-white text-label">
                            0
                        </span>
                        <span class="h6 text-white text-label" style="margin-left:5px;">
                            Selected
                        </span>
                        <input type="hidden" name="user_id" class="form-control-sm" id="bucket-item" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex flex-row mt-2">
                       <select id="Select Project" name="parent_id" class="form-control parent_id">
                            <option value="">Select Project </option>
                            @foreach ($project_categories as $category)
                                <option value="{{ $category?->id }}">{{ $category?->trans?->project_name }}</option>
                            @endforeach
                        </select>
                        <select id="child_id" name="child_id" class="form-control">
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group mt-2">
                        <button type="submit" id="bucket_list" class="btn btn-danger">Add to
                            shortlist</button>
                    </div>

                </div>
            </div>
        </form>
    </div>
</div>
