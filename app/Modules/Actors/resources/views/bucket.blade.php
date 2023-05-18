<style>
    .select2 {
        width: 60% !important;
        height: 60% !important;
    }

    .select2-container .select2-selection--single {
        box-sizing: border-box;
        cursor: pointer;
        display: block;
        height: 42px;
        user-select: none;
        -webkit-user-select: none;
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered {
        color: #444;
        line-height: 25px;
    }

    .select2-container--default .select2-selection--single .select2-selection__placeholder {
        color: #7e7e7e;
        font-size: 15px;
        font-weight: 500;
    }

    .select2-container .select2-selection--single .select2-selection__rendered {
        display: block;
        padding-left: 21px;
        padding-right: 20px;
        padding-top: 8px;
        overflow: hidden;
        font-size: 16px;
        font-weight: 500;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .select2-container .select2-selection--single .select2-selection__rendered {
        display: block;
        padding-left: 21px;
        padding-right: 20px;
        padding-top: 8px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .select2-container--default .select2-selection--single .select2-selection__clear {
        cursor: pointer;
        float: right;
        height: 34px;
        margin-right: 20px;
        padding-right: 0px;
        font-size: 23px;
        font-weight: 600;
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow b {
        border-color: #888 transparent transparent transparent;
        border-style: solid;
        border-width: 5px 4px 0 4px;
        height: 0;
        left: 58%;
        margin-left: -4px;
        margin-top: -2px;
        position: absolute;
        top: 64%;
        width: 0;
    }

    .select2-results__option {
        padding: 6px;
        user-select: none;
        font-size: 16px;
        font-weight: 500;
        -webkit-user-select: none;
    }

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
    }

    .card-container.dark {
        color: #fff;
    }

    .card-container.card-container.bg-light-subtle .card-title {
        color: dimgrey;
    }




    .cta-section  {
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
    .select-text{
        margin-left:70px;
    }
    .text-label {
        font-size: 17px;
        font-weight: 500
    }
</style>
<div class="card dark card-container position-static">
    <div class="card-body">
        <form id="bucket-form" action="{{ route('admin.actors.bucket.store') }}" method="post">
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
                        <input type="hidden" name="user_id" class="form-control-sm" id="bucket-item"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex flex-row mt-2">
                        {{--  <select name="parent_id" class="form-control w-75">
                            @isset($project_categories)
                                @foreach ($project_categories as $category)
                                    <optgroup label="{{count($category->parents)==0 ? $category?->trans?->project_name : ' '}}">
                                            @if (isset($category->parents) && count($category->parents) > 0)
                                                <option value="{{ $category->id }}">{{ $category->trans->project_name }}</option>
                                            @endif
                                    </optgroup>

                                @endforeach
                            @endisset
                        </select>  --}}
                        {{--  <select id="Select Project"
                            class="form-control w-75 bucket-select">
                            <option></option>
                            @foreach ($project_categories as $category)
                                <optgroup label="{{ $category?->trans?->project_name }}11">

                                    @if ($category->parent_id >= 0)
                                        @foreach ($category->child as $subcategory)
                                            <option value="{{ $subcategory->id }}">
                                                {{ $subcategory?->trans?->project_name }}
                                            </option>
                                        @endforeach
                                    @endif

                                </optgroup>
                            @endforeach
                        </select>  --}}
                        <select id="Select Project" name="parent_id" class="form-control parent_id">
                            <option value="">Select Parent Project </option>
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
