
<div id="filterbar" class="collapse col-lg-3">
    <form method="get">

        <div class="box border-bottom">
            <div class="form-group text-center">
                <div class="btn-group">
                    <a href="{{ route('admin.actors') }}" class="btn btn-danger form-check-label">Reset</a>
                    <input type="submit" value="Filter" class="btn btn-success   form-check-label active" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label class="form-label" for="ethnicity">Ethnicity</label>
                    <select name="ethnicity[]" id="ethnicity" class="form-control ethnicity" multiple="multiple">
                        <optgroup label="Ethnicity">

                            @if (isset($state))
                                @foreach ($state as $item)
                                    <option
                                        value="{{ $item->value }}"@if (isset(request()->ethnicity) && in_array($item->value, old('ethnicity', request()->ethnicity))) selected @endif>
                                        {{ $item->name }}</option>
                                @endforeach
                            @endif
                        </optgroup>
                    </select>
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="gender">Gender</label>
                    <select name="gender[]" id="gender" class="form-control gender" multiple="multiple">

                        <optgroup label="Gender">
                            <option value='Male' @if (isset(request()->gender) && in_array('Male', old('gender', request()->gender))) selected @endif>Male
                            </option>
                            <option value='Female' @if (isset(request()->gender) && in_array('Female', old('gender', request()->gender))) selected @endif>Female
                            </option>
                            <option value='prefernottosay' @if (isset(request()->gender) && in_array('prefernottosay', old('gender', request()->gender))) selected @endif>
                                Prefer not
                                to
                                say</option>
                        </optgroup>
                    </select>
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="gender">Rating</label>
                    <select name="rating" id="rating" class="form-control rating" multiple="multiple">
                      <optgroup label="Rating Number">
                            <option value='1'>One
                            </option>
                            <option value='2'>Two
                            </option>
                            <option value='3'>
                                Three
                            </option>
                            <option value='4'>
                                Four
                            </option>
                            <option value='5'>
                                Five
                             </option>
                        </optgroup>
                    </select>
                 </div>
                <div class="col-md-12">
                    {{-- <label class="form-label" for="age">Age</label> --}}
                    <div class="d-flex justify-content-between">
                        <div>
                            <input type="hidden" name="min_age" id="min_age"
                                value="{{ old('min_age', request()->min_age) }}" />
                            <input type="hidden" name="max_age" id="max_age"
                                value="{{ old('max_age', request()->max_age) }}" />

                            <label class="form-label" for=""><b>Age:</b></label>
                            <span class="age"></span>
                            <span>years old</span>
                            <div id="slider-range"></div>

                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </form>
</div>
