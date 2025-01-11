@include('admin.partials.header')
<div class="page-header">
  <h3 class="page-title"> Wasifu </h3>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Nyumbani</a></li>
      <li class="breadcrumb-item"><a href="#">Kuhusu sisi</a></li>
      <li class="breadcrumb-item active" aria-current="page">Wasifu</li>
    </ol>
  </nav>
</div>
<div class="row grid-margin">
  <div class="col-lg-12">
    <div class="card">
      @if(session()->has('action_success') && session()->has('message'))
      @if(session()->get('action_success'))
      <div class="alert alert-success">{{session()->get('message')}}</div>
    @else
      <div class="alert alert-danger">{{session()->get('message')}}</div>
    @endif
    @endif
      <div class="card-body">
        <form action="{{ route('admin-process-kuhusu', ['type' => 'mawasiliano']) }}" method="POST" id="pageForm">
          @csrf
          <input type="hidden" name="id" value="{{$data->id}}">
          <div class="form-row">
          <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-0 p-3">
            <label for="name">Jina la taasisi <span class="text-danger ml-2"> *</span></label>
            <input type="text" class="form-control" name="name" id="name" placeholder="" value="{{$data->name}}" required>
          </div>

          <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-0 p-3">
            <label for="abbr">Kifupisho cha jina ( mf: CCM ) <span class="text-danger ml-2"> *</span></label>
            <input type="text" class="form-control" name="abbr" id="abbr" placeholder="" value="{{$data->abbr}}" required>
          </div>

          <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-0 p-3">
            <label for="address">Pahala <span class="text-danger ml-2"> *</span></label>
            <input type="text" class="form-control" name="address" id="address" placeholder="" value="{{$data->address}}" required>
          </div>

          <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-0 p-3">
            <label for="pobox">Sanduku la posta ( S.L.P ) <span class="text-danger ml-2"> *</span></label>
            <input type="text" class="form-control" name="pobox" id="pobox" placeholder="" value="{{$data->pobox}}" required>
          </div>

          <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-0 p-3">
            <label for="phone1">Nambari ya simu <span class="text-danger ml-2"> *</span></label>
            <input type="tel" class="form-control" name="phone1" id="phone1" placeholder="" value="{{$data->phone1}}" required>
          </div>

          <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-0 p-3">
            <label for="phone2">Nambari ya simu nyengine</label>
            <input type="tel" class="form-control" name="phone2" id="phone2" placeholder="" value="{{$data->phone2}}">
          </div>

          <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-0 p-3">
            <label for="email1">Barua pepe <span class="text-danger ml-2"> *</span></label>
            <input type="email" class="form-control" name="email1" id="email1" placeholder="" value="{{$data->email1}}" required>
          </div>

          <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-0 p-3">
            <label for="email2">Barua pepe yengine</label>
            <input type="email" class="form-control" name="email2" id="email2" placeholder="" value="{{$data->email2}}">
          </div>
          </div>
          <div class="px-3">
            <button type="submit" class="btn btn-primary btn-fw mt-3">Tuma</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@include('admin.partials.footer')
