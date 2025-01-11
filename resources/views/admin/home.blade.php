@include('admin.partials.header')
<div class="row">
    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">{{$vitengo}}</h3>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="icon icon-box-success ">
                            <a href="{{route('admin-vitengo')}}" class="text-success">
                            <span class="mdi mdi-eye icon-item"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <h6 class="text-muted font-weight-normal">Vitengo</h6>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <div class="row">
                    <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">{{$idara}}</h3>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="icon icon-box-primary ">
                            <a href="{{route('admin-idara')}}" class="text-primary">
                            <span class="mdi mdi-eye icon-item"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <h6 class="text-muted font-weight-normal">Idara</h6>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <div class="row">
                    <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">{{$madiwani}}</h3>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="icon icon-box-warning ">
                            <a href="{{route('admin-orodha-ya-madiwani')}}" class="text-warning">
                            <span class="mdi mdi-eye icon-item"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <h6 class="text-muted font-weight-normal">Madiwani</h6>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <div class="row">
                    <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">{{$matukio}}</h3>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="icon icon-box-danger ">
                            <a href="{{route('admin-matukio')}}" class="text-danger">
                            <span class="mdi mdi-eye icon-item"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <h6 class="text-muted font-weight-normal">Matukio</h6>
            </div>
        </div>
    </div>
</div>

@include('admin.partials.footer')
    