@extends('layouts.master')

@section('content')

<form class="form-horizontal">
  <div class="control-group">
    <label class="control-label">Type something</label>
    <div class="controls">
      <input type="text" data-validation-required-message="This field is required, yo", name="some_field" required />
      <p class="help-block"></p>

    </div>
  </div>
</form>

</form>

@stop
