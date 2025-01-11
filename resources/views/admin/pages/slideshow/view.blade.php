@include('admin.partials.header')
<div class="page-header">
              <h3 class="page-title"> slaidi </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Nyumbani</a></li>
                  <li class="breadcrumb-item active" aria-current="page"> Onyesho la slaidi</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
  <div class="card">

    @if(session()->has('action_success') && session()->has('message'))
    @if(session()->get('action_success'))
    <div class="alert alert-success">{{session()->get('message')}}</div>
  @else
  <div class="alert alert-danger">{{session()->get('message')}}</div>
@endif
  @endif
    <div class="card-body">
      <div class="row">
        <!-- Slaidi mpya -->
        <div class="col-lg-12" id="pageForm" style="display: none;">
          <div class="card">
            <div class="card-body">
              <h2 class="card-title"><span id="Ingiza" style="display: none;">Ingiza slaidi jipya</span><span
                  id="Rekebisha" style="display: none;">Rekebisha slaidi</span> <button
                  class="btn btn-primary float-right" onclick="showForm('Ingiza')">Ona slaidi</button></h2>
              <form action="{{route('admin-process-slaidi')}}" method="post" id="fullForm"  enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="action" value="add" required id="formAction">
                <input type="hidden" name="id" value="" id="formId">
                <div class="form-group">
                  <label for="title">Jina la slaidi</label>
                  <input type="text" class="form-control" name="title" id="title" placeholder="" required>
                </div>
                <div class="form-group">
                  <label for="details">Maelezo ya slaidi</label>
                  <textarea class="form-control" name="details" id="details" rows="4" required></textarea>
                </div>
                <div class="form-group">
                        <label>Ambatanisha</label>
                        <input type="file" name="file" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Kiambatanisho">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Chagua</button>
                          </span>
                        </div>
                      </div>
                <input type="submit" class="btn btn-success btn-fw mr-2" value="Ingiza slaidi">
                <input type="reset" class="btn btn-info btn-fw" value="Futa">
              </form>
            </div>
          </div>
        </div>

        <!-- Orodha ya slaidi -->
        <div class="col-lg-12" id="pageList">
          <div class="card">
            <div class="card-body">
              <h2 class="card-title">Orodha ya slaidi <button class="btn btn-primary float-right"
                  onclick="showForm('Ingiza')">Ingiza Slaidi</button></h2>
              <div class="accordion accordion-bordered" id="slaidi_parent">
                @foreach ($data as $i => $h)
          <div class="card p-0 m-0">
            <div class="card-header" id="heading-4">
            <h6 class="mb-0">
              <a data-toggle="collapse" href="#collapse-{{$i}}" aria-expanded="true"
              aria-controls="collapse-{{$i}}" class="text-white text-uppercase"> {{$h->title}}</a>
            </h6>
            </div>
            <div id="collapse-{{$i}}" class="collapse show" data-parent="#slaidi_parent">
            <div class="card-body px-4">
              {{$h->details}}
              <div class="mt-2">
              <a class="btn btn-outline-secondary btn-fw mr-2" href="{{ asset('storage/' . $h->file) }}" target="_blank">Ona slaidi</a>
              <button class="btn btn-outline-primary btn-fw mr-2"
                onclick="showForm('Rekebisha',{{json_encode($h)}})">Badili</button>
                <form action="{{route('admin-process-slaidi')}}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure?')">
                    @csrf
                    <input type="hidden" name="action" value="delete" required>
                    <input type="hidden" name="id" value="{{$h->id}}" id="formId">
                    <button type="submit" class="btn btn-outline-warning btn-fw mr-2">Futa</button>
                </form>
              </div>
            </div>

            </div>
          </div>
        @endforeach
                @if (!$count)
          <div class="alert alert-info">
            Hakuna taarifa
          </div>
        @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@include('admin.partials.footer')
<script>
  function showForm(act = 'Ingiza', data = {}) {
    $('#fullForm')[0].reset();
    $("#pageForm").toggle();
    $("#pageList").toggle();
    $("#Ingiza,#Rekebisha").hide();
    $("#" + act).show();
    const isEdit = act == 'Rekebisha';
    $("#formAction").val(isEdit ? 'edit' : 'add');
    if (isEdit) {
      $("#formId").val(data.id)
      $("#title").val(data.title)
      $("#details").val(data.details)
      console.log(JSON.stringify(data));
    }
  }



    $('.file-upload-browse').on('click', function() {
      var file = $(this).parent().parent().parent().find('.file-upload-default');
      file.trigger('click');
    });
    $('.file-upload-default').on('change', function() {
      $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
    });
</script>
    