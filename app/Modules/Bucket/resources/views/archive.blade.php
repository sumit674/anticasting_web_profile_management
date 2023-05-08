<style>
    /*bucket list css*/

    .card-container {
        max-width: 40%;
        flex-direction: row;
        background-color: #141414;
        border: 0;
        box-shadow: 0 7px 7px rgba(0, 0, 0, 0.18);
        margin: auto;
        /* max-height: 30%; */
        max-height: 80px;
        float: right;
        margin-bottom: 12px;
    }

    .card-container.dark {
        color: #fff;
    }

    .card-container.card-container.bg-light-subtle .card-title {
        color: dimgrey;
    }

    .card-container img {
        max-width: 25%;
        margin: auto;
        padding: 0.5em;
        border-radius: 0.7em;
    }

    .cta-section {
        max-width: 40%;
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        justify-content: space-between;
    }

    .cta-section .btn {
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
  .select-list {
        margin-bottom: 100px;
    }

    .text-label {
        font-size: 17px;
        font-weight: 500
    }

    .archive-btn {
        padding: 13px 80px 10px 86px;
    }

    .card-body {
      padding: 0px 0px !important;
    }
</style>
<div class="card dark card-container position-static" id="archive-page"/>
    <div class="card-body">
        <form id="bucket-form" method="POST" action="{{route('admin.bucket.archiveBulk') }}">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group d-flex mt-3">
                        <span id="bucket-ids" class="text-white text-label">

                        </span>
                        <span class="h6 text-white text-label" style="margin-left:5px;" id="'bucket-ids"/>
                            Selected
                        </span>
                        <input type="hidden" name="bucket_id" class="form-control-sm" id="archive-item" />

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="">
                        <button type="submit" id="bucket_list" class="btn btn-danger archive-btn">Archive</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
