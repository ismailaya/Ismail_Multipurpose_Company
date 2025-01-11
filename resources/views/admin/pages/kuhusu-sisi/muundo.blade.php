@include('admin.partials.header')
<div class="page-header">
  <h3 class="page-title"> Muundo </h3>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Nyumbani</a></li>
      <li class="breadcrumb-item"><a href="#">Kuhusu sisi</a></li>
      <li class="breadcrumb-item active" aria-current="page">Muundo</li>
    </ol>
  </nav>
</div>
<div class="row grid-margin">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Muundo</h4>
        <div id="muundo" class="quill-container">
          Muundo wa Baraza la Jiji unaopendekezwa umezingatia matakwa ya Kisheria ya kutekeleza majukumu ya Baraza la
          Jiji, kuratibu na kusimamia utekelezaji wa Shughuli za Manispaa za Jiji pamoja na kupunguza gharama za
          kuutekeleza muundo huo. Aidha, Sheria ya Mamlaka ya Serikali za Mitaa Nam. 07/2014 na marekebisho yake ya
          mwaka 2020 Kifungu Nam. 18(2)(d) na 18(2)(e) inafafanua zaidi. Baraza la Jiji linaundwa na Sehemu kuu mbili.
          Sehemu ya Kisiasa (Baraza la Madiwa la Jiji) itakayoongozwa na Mstahiki Meya wa Jiji na Sehemu ya Kiutendaji
          (Afisi ya Mkurugenzi wa Jiji) itakayoogozwa na Mkurugenzi Mkuu wa Jiji.
        </div>
      </div>
    </div>
  </div>
</div>
@include('admin.partials.footer')
<script>
  if ($("#muundo").length) {
    var quill = new Quill('#muundo', {
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

</script>