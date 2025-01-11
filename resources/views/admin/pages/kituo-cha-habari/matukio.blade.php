@include('admin.partials.header')
<div class="page-header">
  <h3 class="page-title"> Matukio </h3>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Nyumbani</a></li>
      <li class="breadcrumb-item"><a href="#">Kituo cha habari</a></li>
      <li class="breadcrumb-item active" aria-current="page">Matukio</li>
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
        <!-- Tukio jipya -->
        <div class="col-lg-12" id="pageForm" style="display: none;">
          <div class="card">
            <div class="card-body">
              <h2 class="card-title"><span id="Ingiza" style="display: none;">Ingiza tukio jipya</span><span
                  id="Rekebisha" style="display: none;">Rekebisha tukio</span> <button
                  class="btn btn-primary float-right" onclick="showForm('Ingiza')">Ona tukio</button></h2>
              <form action="{{route('admin-process-matukio')}}" method="post" id="fullForm"
                enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="action" value="add" required id="formAction">
                <input type="hidden" name="id" value="" id="formId">
                <div class="form-group">
                  <label for="title">Jina la tukio</label>
                  <input type="text" class="form-control" name="title" id="title" placeholder="" required>
                </div>
                <div class="form-group">
                  <label for="type">Aina ya tukio</label>
                  <select class="form-control" name="type" id="type" placeholder="" required>
                    <option value="">-- Chagua Aina --</option>
                    <option value="habari">Habari</option>
                    <option value="matukio">Matukio</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="details">Maelezo ya tukio</label>
                  <textarea class="form-control" name="details" id="details" rows="4" required></textarea>
                </div>
                <div class="form-group">
                  <label>Picha ya tukio</label>
                  <input type="file" name="file" class="file-upload-default">
                  <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info" disabled placeholder="Kiambatanisho">
                    <span class="input-group-append">
                      <button class="file-upload-browse btn btn-primary" type="button">Chagua Picha</button>
                    </span>
                  </div>
                </div>
                <input type="submit" class="btn btn-success btn-fw mr-2" value="Ingiza tukio">
                <input type="reset" class="btn btn-info btn-fw" value="Futa">
              </form>
            </div>
          </div>
        </div>

        <!-- Orodha ya tukio -->
        <div class="col-lg-12" id="pageList">
          <div class="card">
            <div class="card-body">
              <h2 class="card-title">Orodha ya matukio <button class="btn btn-primary float-right"
                  onclick="showForm('Ingiza')">Ingiza Tukio</button></h2>
              <div class="accordion accordion-bordered" id="tukio_parent">
                @foreach ($data as $i => $h)
          <div class="card p-0 m-0">
            <div class="card-header" id="heading-4">
            <h6 class="mb-0">
              <a data-toggle="collapse" href="#collapse-{{$i}}" aria-expanded="true"
              aria-controls="collapse-{{$i}}" class="text-white text-uppercase"> {{$h->title}}</a>
            </h6>
            </div>
            <div id="collapse-{{$i}}" class="collapse" data-parent="#tukio_parent">
            <div class="card-body px-4">
            <div>{{$h->details}}</div>
              <table class="table table-bordered">
              <tr>
                <td style="width: 100px;">
                <div class="preview-thumbnail">
                  <img src="{{ asset('storage/' . $h->file) }}" alt="image"
                  class="rounded-circle profile-pic" style="width: 60px;height: 60px;">
                </div>
                </td>
                <td>
                  
                <div class="mt-2">
              <button class="btn btn-outline-primary btn-fw mr-2"
                onclick="showForm('Rekebisha',{{json_encode($h)}})">Badili</button>
              <form action="{{route('admin-process-matukio')}}" method="POST" style="display:inline;"
                onsubmit="return confirm('Are you sure?')">
                @csrf
                <input type="hidden" name="action" value="delete" required>
                <input type="hidden" name="id" value="{{$h->id}}" id="formId">
                <button type="submit" class="btn btn-outline-warning btn-fw mr-2">Futa</button>
              </form>
              </div>
              </td>
              </tr>
              </table>
              
              

            </div>

            </div>
          </div>
        @endforeach
                @if (!$count)
          <div class="alert alert-info">
            Hakuna Tukio
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
      $("#type").val(data.type)
      console.log(JSON.stringify(data));
    }
  }



  $('.file-upload-browse').on('click', function () {
    var file = $(this).parent().parent().parent().find('.file-upload-default');
    file.trigger('click');
  });
  $('.file-upload-default').on('change', function () {
    $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
  });


</script>