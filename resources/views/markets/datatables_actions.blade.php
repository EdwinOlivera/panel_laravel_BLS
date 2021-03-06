<div class='btn-group btn-group-sm'>
  @can('markets.show')
  <a data-toggle="tooltip" data-placement="bottom" title="{{trans('lang.view_details')}}" href="{{ route('markets.show', $id) }}" class='btn btn-link'>
    <i class="fa fa-eye"></i>
  </a>
  @endcan

  @can('markets.edit')
  <a data-toggle="tooltip" data-placement="bottom" title="{{trans('Edición completa')}}" href="{!! route('markets.editMarketComplete', $id) !!}" class='btn btn-link'>
    <i class="fa fa-list"></i>
  </a>
  @endcan

  @can('markets.edit')
  <a data-toggle="tooltip" data-placement="bottom" title="{{trans('lang.market_edit')}}" href="{{ route('markets.edit', $id) }}" class='btn btn-link'>
    <i class="fa fa-edit"></i>
  </a>
  @endcan


  @can('markets.destroy')
{!! Form::open(['route' => ['markets.destroy', $id], 'method' => 'delete']) !!}
  {!! Form::button('<i class="fas fa-trash"></i>', [
  'type' => 'submit',
  'class' => 'btn btn-link text-danger',
  'onclick' => "return confirm('¿Seguro quieres eliminar esté elemento?')"
  ]) !!}
{!! Form::close() !!}
  @endcan
</div>
