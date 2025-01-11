@include('admin.partials.header')

<div class="page-header">
  <h3 class="page-title"> Historia </h3>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Nyumbani</a></li>
      <li class="breadcrumb-item"><a href="#">Kuhusu sisi</a></li>
      <li class="breadcrumb-item active" aria-current="page">Historia</li>
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
        <form action="{{ route('admin-process-kuhusu',['type'=>'historia']) }}" method="POST" id="historyForm">
          @csrf
          <input type="hidden" name="id" value="{{$id}}">
          <input type="hidden" name="historia" id="historyContent">
          <div id="historiaZaJiji" class="quill-container">
          {!! $history ?? '' !!}
          </div>
          <button type="submit" class="btn btn-primary mt-3">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
@include('admin.partials.footer')
<script>
  if ($("#historiaZaJiji").length) {
    var quill = new Quill('#historiaZaJiji', {
      modules: {
        toolbar: [
          [{
            header: [1, 2, false]
          }],
          ['bold', 'italic', 'underline'],
          ['image', 'code-block']
        ]
      },
      placeholder: 'Historia ya jiji',
      theme: 'snow' // or 'bubble'
    });
  }


  // On form submission, copy Quill content to hidden input
  $('#historyForm').on('submit', function (event) {
        $('#historyContent').val(quill.root.innerHTML);
    });

</script>