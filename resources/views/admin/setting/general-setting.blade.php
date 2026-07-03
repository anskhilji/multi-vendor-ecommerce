<div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
    <div class="card border">
        <div class="card-body">
            <form action="{{ route('admin.general-setting-update') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Site Name</label>
                    <input type="text" class="form-control" name="site_name"
                        value="{{ $generalSetting?->site_name }}">
                </div>
                <div class="form-group">
                    <label>Layout</label>
                    <select class="form-control" name="layout" id="layout">
                        <option value="LTR" @selected($generalSetting?->layout == 'LTR')>LTR</option>
                        <option value="RTL" @selected($generalSetting?->layout == 'RTL')>RTL</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Contact Email</label>
                    <input type="text" class="form-control" name="contact_email"
                        value="{{ $generalSetting?->contact_email }}">
                </div>
                <div class="form-group">
                    <label>Default Currency Name</label>
                    <select name="currency_name" class="form-control select2" id="currency_name">
                        <option value="">Select</option>
                        @foreach (config('settings.currency_list') as $currency)
                            <option @selected($generalSetting?->currency_name == $currency) value="{{ $currency }}">{{ $currency }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Currency Icon</label>
                    <input type="text" class="form-control" name="currency_icon"
                        value="{{ $generalSetting?->currency_icon }}">
                </div>
                <div class="form-group">
                    <label>Time Zone</label>
                    <select class="form-control select2" name="time_zone" id="time_zone">
                        <option value="">Select</option>
                        @foreach (config('settings.time_zone') as $key => $timeZone)
                            <option @selected($generalSetting?->time_zone == $key) value="{{ $key }}">{{ $key }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
