@if ($errors->all())

  <div>
    <ul>
      @foreach($errors->all() as $error)

        <li>{!! $error !!}</li>

      @endforeach
    </ul>
  </div>

@endif

@if (Session::has('success'))

  <div>
    {!! Session::get('success') !!}
  </div>

@endif

@if (Session::has('error'))

  <div>
    {!! Session::get('error') !!}
  </div>

@endif
