@extends('templates.default')
@push('style')
    {{-- aditional style --}}
@endpush

@section('content')
    <div class="container">
        @include('templates.partials._navbar-user')
        <br>
        <br>
        <div class="row">
            <div class="col-4">
                <h1>Bring Your Style With <br> TSTL - <a style="color: red">A</a>babil Sublime Printing</h1>
                <p style="font-family: sans-serif">Lestarikan Kebudayaan dan tanamkan rasa Nasionalisme pada diri kalian dengan <br>Apparel dari TSTL - Ababil Sublime Printing yang dibungkus dengan teknologi dan modernisasi.</p>
            </div>
            <div class="col-4">
                <img src="{{asset('assets/images/examples/image1.png')}}"> 
            </div>
        </div>
    </div>
    <div class="container">
        
        <div class="row content mt-5">
            <div class="col-md-10 offset-md-1">
                <div class="row content-isi">    
                    <div class="col-4">
                        <div class="card bg-jersey text-dark" style="width: 16rem;">
                            <img src="{{asset('assets/images/examples/A.jpeg')}}">
                            <hr>
                            <div class="card-body">
                                <center><h5 class="card-title">
                                    Paket A
                                </h5></center>
                                <p class="card-text">
                                    Full set, atas full printing, nomor celana polyflex/sablon/bordir
                                </p>
                                <a href="#" class="btn btn-primary btn-card">Beli</a>
                                <p class="float-right" >135.000</p>
                            </div>  
                        </div>
                    </div>
                    
                    <div class="col-4">
                        <div class="card bg-jersey text-dark" style="width: 16rem;">
                            <img src="{{asset('assets/images/examples/A.jpeg')}}">
                            <hr>
                            <div class="card-body">
                                <center><h5 class="card-title">
                                    Paket B
                                </h5></center>
                                <p class="card-text">
                                    Full set, printing depan belakang, lengan kain, nomor celana polyflex/sablon/bordir
                                </p>
                                <a href="#" class="btn btn-primary btn-card">Beli</a>
                                <p class="float-right" >127.500</p>
                            </div>  
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card bg-jersey text-dark" style="width: 16rem;">
                            <img src="{{asset('assets/images/examples/A.jpeg')}}">
                            <hr>
                            <div class="card-body">
                                <center><h5 class="card-title">
                                    Paket C
                                </h5></center>
                                <p class="card-text">
                                    Printing depan saja, nama dan no punggung sablon poliflex/sablon, nomor celana sablon poliflex/sablon
                                </p>
                                <a href="#" class="btn btn-primary btn-card">Beli</a>
                                <p class="float-right" >127.500</p>
                            </div>  
                        </div>
                    </div>
                </div>
                
                <div class="row content-isi">    
                    <div class="col-4">
                        <div class="card bg-jersey text-dark" style="width: 16rem;">
                            <img src="{{asset('assets/images/examples/A.jpeg')}}">
                            <hr>
                            <div class="card-body">
                                <center><h5 class="card-title">
                                    Paket A
                                </h5></center>
                                <p class="card-text">
                                    Full set, atas full printing, nomor celana polyflex/sablon/bordir
                                </p>
                                <a href="#" class="btn btn-primary btn-card">Beli</a>
                                <p class="float-right" >135.000</p>
                            </div>  
                        </div>
                    </div>
                    
                    <div class="col-4">
                        <div class="card bg-jersey text-dark" style="width: 16rem;">
                            <img src="{{asset('assets/images/examples/A.jpeg')}}">
                            <hr>
                            <div class="card-body">
                                <center><h5 class="card-title">
                                    Paket B
                                </h5></center>
                                <p class="card-text">
                                    Full set, printing depan belakang, lengan kain, nomor celana polyflex/sablon/bordir
                                </p>
                                <a href="#" class="btn btn-primary btn-card">Beli</a>
                                <p class="float-right" >127.500</p>
                            </div>  
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card bg-jersey text-dark" style="width: 16rem;">
                            <img src="{{asset('assets/images/examples/A.jpeg')}}">
                            <hr>
                            <div class="card-body">
                                <center><h5 class="card-title">
                                    Paket C
                                </h5></center>
                                <p class="card-text">
                                    Printing depan saja, nama dan no punggung sablon poliflex/sablon, nomor celana sablon poliflex/sablon
                                </p>
                                <a href="#" class="btn btn-primary btn-card">Beli</a>
                                <p class="float-right" >127.500</p>
                            </div>  
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

 <!-- tampilkan barang -->

    @include('templates.partials._footer')

 <!-- tampilkan barang -->

    @include('templates.partials._footer')
@endsection

@push('scripts')
@include('templates.partials._scripts-user')

<script type="text/javascript">
            var menuitems = document.getElementById("menuitems");
            menuitems.style.maxHeight = "0px";
            function menutoggle(){
                if (menuitems.style.maxHeight == "0px") {
                    menuitems.style.maxHeight = "200px";
                } else{
                    menuitems.style.maxHeight = "0px";
                }
            }
            function read(){
                location.href = "#small-container";
            }
        </script>
@endpush