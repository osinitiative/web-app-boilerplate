<button type="button" class="btn btn-sm btn-primary" @include('components.tooltip', ['tooltip' => $tooltip])
  data-toggle="modal" data-target="#{{ $id }}">
  @isset($icon)
  <i class="{{ $icon }}"></i>
  @endisset

  @isset($label)
	{{ __($label) }}
  @endisset
</button>