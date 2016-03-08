<div class="form-group {!! !$errors->has($label) ?: 'has-error' !!}">

    <label for="{{$id}}" class="col-sm-2 control-label">{{$label}}</label>

    <div class="col-sm-6">

        @include('admin::form.error')

        <div class="input-group {{$id}}" id="{{$id}}">
            <span class="input-group-addon"><i></i></span>
            <input type="text" name="{{$name}}" value="{{ old($column, $value) }}" class="form-control" placeholder="{{ Lang::get('admin::lang.input') }} {{ $label }}">
        </div>
    </div>
</div>