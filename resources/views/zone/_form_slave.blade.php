{{-- Create / Edit Server Form --}}
@if (isset($zone))
    {!! Form::model($zone, ['route' => ['zones.update', $zone], 'method' => 'put']) !!}
@else
    {!! Form::open(['route' => 'zones.store']) !!}
@endif

<div class="box box-solid">
    <div class="box-header">
        <h3 class="box-title">{{ trans('zone/model.types.slave') }}</h3>
    </div>
    <div class="box-body">

        <!-- domain -->
        <div class="form-group {{ $errors->has('domain') ? 'has-error' : '' }}">
            {!! Form::label('domain', trans('zone/model.domain'), array('class' => 'control-label required')) !!}
            <div class="controls">
                @if (isset($zone))
                    {!! Form::text('domain', null, array('class' => 'form-control', 'disabled' => 'disabled')) !!}
                @else
                    {!! Form::text('domain', null, array('class' => 'form-control', 'required' => 'required')) !!}
                @endif
                <span class="help-block">{{ $errors->first('domain', ':message') }}</span>
            </div>
        </div>
        <!-- ./ domain -->

        <!-- master_server -->
        <div class="form-group {{ $errors->has('master_server') ? 'has-error' : '' }}">
            {!! Form::label('master_server', trans('zone/model.master_server'), array('class' => 'control-label required')) !!}
            <div class="controls">
                {!! Form::text('master_server', null, array('class' => 'form-control',  'required' => 'required')) !!}
                <span class="help-block">{{ $errors->first('master_server', ':message') }}</span>
            </div>
        </div>
        <!-- ./ master_server -->
    </div>

    <div class="box-footer">
        <!-- Form Actions -->
        <a href="{{ route('zones.index') }}" class="btn btn-primary" role="button">
                <i class="fa fa-arrow-left"></i> {{ trans('general.back') }}
        </a>
    {!! Form::button('<i class="fa fa-floppy-o"></i> ' . trans('general.save'), array('type' => 'submit', 'class' => 'btn btn-success', 'id' => 'slave_zone')) !!}
    <!-- ./ form actions -->
    </div>
</div>
{!! Form::close() !!}
