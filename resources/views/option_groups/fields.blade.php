@if($customFields)
<h5 class="col-12 pb-4">{!! trans('lang.main_fields') !!}</h5>
@endif
<div style="flex: 50%;max-width: 50%;padding: 0 4px;" class="column">
    <!-- Name Field -->
    <div class="form-group row ">

        {!! Form::label('name', trans("lang.option_group_name"), ['class' => 'col-5 control-label text-right']) !!}

        <div class="col-7">

            {!! Form::text('name', null, ['class' => 'form-control','placeholder'=> trans("lang.option_group_name_placeholder")]) !!}
            <div class="form-text text-muted">
                {{ trans("lang.option_group_name_help") }}
            </div>
        </div>
        <!-- 'Boolean Multi selectable' -->
        {!! Form::label('multigroup', trans("lang.option_group_multi"),['class' => 'col-4 control-label text-right']) !!}
        <div class="checkbox icheck">

            <label class="col-8 ml-2 form-check-inline">
                {!! Form::hidden('multi', 0) !!}
                {!! Form::checkbox('multi', 1, null) !!}
            </label>
            <div class="form-text text-muted">
                {{ trans("lang.option_group_checbox_help") }}
            </div>
            
        </div>
 <!-- number_of_elements Field -->
    <div class="form-group row ">
        {!! Form::label('number_of_elements', trans("lang.group_number_of_items_title"), ['class' => 'col-5 control-label text-right']) !!}
        <div class="col-7">
            {!! Form::number('cant_selectable', 1,  ['class' => 'form-control',  'min'=>"1",'placeholder'=>  trans("lang.group_number_of_items_placeholder")]) !!}
            <div class="form-text text-muted">
                {{ trans("lang.quantity_selectable_elements_help") }}
            </div>
        </div>
    </div>
    </div>
</div>
<div style="flex: 50%;max-width: 50%;padding: 0 4px;" class="column">
</div>

@if($customFields)
<div class="clearfix"></div>
<div class="col-12 custom-field-container">
    <h5 class="col-12 pb-4">{!! trans('lang.custom_field_plural') !!}</h5>

    {!! $customFields !!}
</div>
@endif
<!-- Submit Field -->
<div class="form-group col-12 text-right">
    <button type="submit" class="btn btn-{{setting('theme_color')}}"><i class="fa fa-save"></i> {{trans('lang.save')}} {{trans('lang.option_group')}}</button>
    <a href="{!! route('optionGroups.index') !!}" class="btn btn-default"><i class="fa fa-undo"></i> {{trans('lang.cancel')}}</a>
</div>
