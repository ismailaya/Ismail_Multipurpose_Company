@include('admin.partials.header')
<div class="page-header">
  <h3 class="page-title"> Dira, Dhamira na Mikakati </h3>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Nyumbani</a></li>
      <li class="breadcrumb-item"><a href="#">Kuhusu sisi</a></li>
      <li class="breadcrumb-item active" aria-current="page">Dhamira na Mikakati</li>
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
      <form action="{{ route('admin-process-kuhusu',['type'=>'dira_dhamira_mikakati']) }}" method="POST" id="pageForm">
          @csrf
          <input type="hidden" name="id" value="{{$id}}">
          <input type="hidden" name="dira_dhamira_mikakati" id="dataContent">
          <div id="dira" class="quill-container">
          {!! $dira ?? '' !!}
          </div>
          <button type="submit" class="btn btn-primary mt-3">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
@include('admin.partials.footer')
<script>
  if ($("#dira").length) {
    var quill = new Quill('#dira', {
      modules: {
        toolbar: [
          [{
            header: [1, 2, false]
          }],
          ['bold', 'italic', 'underline'],
          ['image', 'code-block']
        ]
      },
      placeholder: 'Dira dhamira na mikakati',
      theme: 'snow' // or 'bubble'
    });
  }


    // On form submission, copy Quill content to hidden input
    $('#pageForm').on('submit', function (event) {
        $('#dataContent').val(quill.root.innerHTML);
    });

</script>