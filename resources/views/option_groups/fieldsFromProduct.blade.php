@if ($customFields)
    <h5 class="col-12 pb-4">{!! trans('lang.main_fields') !!}</h5>
@endif
<div style="flex: 80%;max-width: 80%;padding: 0 4px;" class="column">
    <!-- Name Field -->
    <div class="form-group row ">
        
        {!! Form::label('name', trans('lang.option_group_name'), ['class' => 'col-3 control-label text-right']) !!}
        
        <div class="col-7">
            
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' =>trans('lang.option_group_name_placeholder')]) !!}
            <div class="form-text text-muted">
                {{ trans('lang.option_group_name_help') }}
            </div>
        </div>


         {{-- Market Id Field --}}
         {!! Form::label('name_admin', trans('lang.option_group_name_admin'), ['class' => 'col-3 mt-3 pb-3 control-label text-right']) !!}
         <div class="col-7 mt-3 pb-3">
             {{-- {!! Form::text('market_id', null, ['class' => 'form-control', 'placeholder' =>trans('lang.option_group_name_admin_placeholder')]) !!} --}}
             {!! Form::text('name_admin', null, ['class' => 'form-control', 'placeholder' =>trans('lang.option_group_name_admin_placeholder')]) !!}
             <div class="form-text text-muted">
                 {{ trans('lang.option_group_name_admin_help') }}
             </div>
         </div>


        {{-- Market Id Field --}}
        {{-- {!! Form::label('market_id', trans('lang.option_group_name_admin'), ['class' => 'col-3 mt-3 pb-3 control-label text-right']) !!}
        <div class="col-7 mt-3 pb-3"> --}}
            {{-- {!! Form::text('market_id', null, ['class' => 'form-control', 'placeholder' =>trans('lang.option_group_name_admin_placeholder')]) !!} --}}
            {{-- {!! Form::select('market_id', $market, null, ['class' => 'select2 form-control']) !!}
            <div class="form-text text-muted">
                {{ trans('lang.option_group_name_admin_help') }}
            </div>
        </div>
         --}}
{{-- <!-- Market Id Field -->
<div class="form-group row ">
    {!! Form::label('market_id', trans("lang.product_market_id"),['class' => 'col-3 control-label text-right']) !!}
    <div class="col-9">
        {!! Form::select('market_id', $market, null, ['class' => 'select2 form-control']) !!}
        <div class="form-text text-muted">{{ trans("lang.product_market_id_help") }}</div>
    </div>
</div> --}}
    
        <!-- Description Field -->
        {{-- {!! Form::label('group_description', trans('lang.group_description'), ['class' => 'col-3 control-label text-right']) !!}

        <div class="col-9">

            {!! Form::text('group_description', null, ['class' => 'form-control', 'placeholder' => trans('lang.group_description_placeholder')]) !!}
            <div class="form-text text-muted">
                {{ trans('lang.group_description_helper') }}
            </div>
        </div> --}}
        <!-- 'Boolean Multi selectable' -->
        {!! Form::label('multigroup', trans('lang.option_group_multi'), ['class' => 'col-3 control-label text-right'])!!}
        <div class="checkbox icheck">

            <label class="col-8 ml-2 form-check-inline">
                {!! Form::hidden('multi', 0) !!}
                {!! Form::checkbox('multi', 1, null) !!}
            </label>
            <div class="form-text text-muted">
                {{ trans('lang.option_group_checbox_help') }}
            </div>

        </div>
        <!-- number_of_elements Field -->
        <div class="form-group row ">
            {!! Form::label('number_of_elements', trans('lang.group_number_of_items_title'), [
            'class' => 'col-4
            control-label text-right',
            ]) !!}
            <div class="col-5">
                {!! Form::number('cant_selectable', null, ['class' => 'form-control', 'min=1', 'placeholder' =>
                trans('lang.group_number_of_items_placeholder')]) !!}
                <div class="form-text text-muted">
                    {{ trans('lang.quantity_selectable_elements_help') }}
                </div>
            </div>
        </div>
        {{-- force_select boolean --}}
        {!! Form::label('force_select', trans('lang.force_select'), ['class' => 'col-3 control-label text-right'])!!}
        <div class="checkbox icheck">

            <label class="col-12 ml-2 form-check-inline">
                {!! Form::hidden('force_select', 0) !!}
                {!! Form::checkbox('force_select', 1, null) !!}
                
            </label>
            <div class="form-text text-muted">
                {{ trans('lang.force_select_help') }}
           </div>

        </div>
    </div>
    <div style="flex: 50%;max-width: 50%;padding: 0 4px;" class="column">
    </div>

    @if ($customFields)
        <div class="clearfix"></div>
        <div class="col-12 custom-field-container">
            <h5 class="col-12 pb-4">{!! trans('lang.custom_field_plural') !!}</h5>

            {!! $customFields !!}
        </div>
    @endif
    <!-- Submit Field -->
    <div class="form-group col-12 text-right">
        <button type="submit" class="btn btn-{{ setting('theme_color') }}"><i class="fa fa-save"></i>
            {{ trans('lang.save') }} {{ trans('lang.option_group') }}</button>
        <a href="{!!  route('optionGroups.index') !!}" class="btn btn-default"><i class="fa fa-undo"></i>
            {{ trans('lang.cancel') }}</a>
    </div>
