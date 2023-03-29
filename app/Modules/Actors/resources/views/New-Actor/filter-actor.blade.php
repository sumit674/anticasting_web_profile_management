<div class="um-members um-members-list">
    @foreach ($actors as $k => $item)
      
            <div class="um-member um-role-um_models approved with-cover">
                <span class="um-member-status approved">
                    Approved
                </span>
                <div class="um-member-cover" data-ratio="2.7:1" style="height: 0px;">
                    <div class="um-member-cover-e">
                        <a href="https://kayapati.com/demos/models/user/benna/">

                        </a>
                    </div>
                </div>
                <div class="um-member-photo radius-1 um-member-photo-grayscale">
                    @isset($item->images[0]->image)
                        <a href="https://kayapati.com/demos/models/user/benna/">

                            <img src="{{ $item->images[0]?->image }}"
                                class="gravatar avatar avatar-320 um-avatar um-avatar-uploaded" alt="Actor Image"
                                data-default="https://source.unsplash.com/random/234x156/?nature"
                                onerror="if ( ! this.getAttribute('data-load-error') ){ this.setAttribute('data-load-error', '1');this.setAttribute('src', this.getAttribute('data-default'));}"
                                width="320" height="320">
                        </a>
                    @else
                        <a href="https://kayapati.com/demos/models/user/benna/">

                            <img src="https://source.unsplash.com/random/234x156/?nature"
                                class="gravatar avatar avatar-320 um-avatar um-avatar-uploaded" alt="Actor Image"
                                data-default="https://source.unsplash.com/random/234x156/?nature"
                                onerror="if ( ! this.getAttribute('data-load-error') ){ this.setAttribute('data-load-error', '1');this.setAttribute('src', this.getAttribute('data-default'));}"
                                width="320" height="320" />
                        </a>
                    @endisset
                    <div class="um-member-card-wrap-on ">
                        <div class="um-member-card ">
                            <div class="um-member-meta-main">
                                <div class="um-member-tagline um-member-tagline-birth_date" data-key="birth_date">
                                    @php
                                        $dateOfBirth = $item?->profile?->date_of_birth;
                                        $age = \Carbon\Carbon::parse($dateOfBirth)->age;
                                    @endphp
                                    {{ $age }} years old
                                </div>
                                <div class="um-member-meta no-animate">
                                    <div class="um-member-metaline um-member-metaline-model_categories">
                                        <strong>Date Of
                                            Birth:</strong>
                                        {{ $item?->profile?->date_of_birth }}

                                    </div>
                                    <div class="um-member-metaline um-member-metaline-country">
                                        <strong>Ethnicity:</strong>
                                        {{ $item?->profile?->ethnicity }}
                                    </div>
                                    <div class="um-member-metaline um-member-metaline-country">
                                        <strong>Weight:</strong>
                                        {{ $item?->profile?->weight }}
                                        CM
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="um-member-name">
                    <h3><a href="https://kayapati.com/demos/models/user/benna/">
                            {{ $item?->first_name . ' ' . $item?->last_name }}
                        </a>
                    </h3>
                </div>
            </div>
    @endforeach
<div>
