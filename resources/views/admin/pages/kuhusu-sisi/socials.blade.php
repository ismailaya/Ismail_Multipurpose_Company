@include('admin.partials.header')
<div class="page-header">
  <h3 class="page-title"> Mitandao ya kijamii </h3>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Nyumbani</a></li>
      <li class="breadcrumb-item"><a href="#">Kuhusu sisi</a></li>
      <li class="breadcrumb-item active" aria-current="page">Mitandao ya kijamii</li>
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
        <form action="{{ route('admin-process-kuhusu', ['type' => 'socials']) }}" method="POST" id="pageForm">
          @csrf
          <input type="hidden" name="id" value="{{$data->id}}">
          <div class="form-row">
            <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-0 p-3">
              <label for="facebook">Facebook <span class="text-danger ml-2"></span></label>
              <input type="url" class="form-control" name="facebook" id="facebook" placeholder=""
                value="{{$data->facebook}}">
            </div>

            <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-0 p-3">
              <label for="twitter">Twitter <span class="text-danger ml-2"></span></label>
              <input type="url" class="form-control" name="twitter" id="twitter" placeholder=""
                value="{{$data->twitter}}">
            </div>

            <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-0 p-3">
              <label for="instagram">Instagram <span class="text-danger ml-2"></span></label>
              <input type="url" class="form-control" name="instagram" id="instagram" placeholder=""
                value="{{$data->instagram}}">
            </div>

            <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-0 p-3">
              <label for="linkedin">Linkedin <span class="text-danger ml-2"></span></label>
              <input type="url" class="form-control" name="linkedin" id="linkedin" placeholder=""
                value="{{$data->linkedin}}">
            </div>

            <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-0 p-3">
              <label for="telegram">Telegram <span class="text-danger ml-2"></span></label>
              <input type="url" class="form-control" name="telegram" id="telegram" placeholder=""
                value="{{$data->telegram}}">
            </div>

            <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-0 p-3">
              <label for="youtube">Youtube channel</label>
              <input type="url" class="form-control" name="youtube" id="youtube" placeholder=""
                value="{{$data->youtube}}">
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
