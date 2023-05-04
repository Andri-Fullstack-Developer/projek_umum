<div class="swiper-container">
    @if ($home->isNotEmpty())
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                @foreach ($home as $imghome)
                    <div class="swiper-slide"><img src='{{ url('storeImg') . '/' . $imghome->image }}'></div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    @endif
</div>

{{-- <div class="home__container">
    <div class="container ">
        <div class="row mt-5">
            <h2 class="text mt-5">Selamat Datang</h2>
            <h3 class="text">PT. Daharan</h3>
        </div>
    </div>
</div> --}}

{{-- Garis Line --}}
<div class="container">
    <div class="row">
        <div class="col">
            <span class="garis container mt-5"></span>
        </div>
    </div>
</div>

{{-- dashord Berita --}}
<div class="container container_berita mt-2">
    <h2 class="text-center kontak">Berita</h2>
    <div class="row mt-5">
        <div class="col">
            <div class="card mb-5 mx-auto" style="width: 18rem;">
                <img src="{{ asset('img/cofi kerja.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a class="btn btn-bg text-center" href="https://google.com" target="_">kunjugi</a>
                    <p class="jam_tgl"><span>01 feb 2021</span> 09:00</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-5 mx-auto" style="width: 18rem;">
                <img src="{{ asset('img/cofi kerja.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a class="btn btn-bg  text-center" href="https://google.com" target="_">kunjugi</a>
                    <p class="jam_tgl"><span>01 feb 2021</span> 09:00</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-5 mx-auto" style="width: 18rem;">
                <img src="{{ asset('img/cofi kerja.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a class="btn btn-bg  text-center" href="https://google.com" target="_">kunjugi</a>
                    <p class="jam_tgl"><span>01 feb 2021</span> 09:00</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-5 mx-auto" style="width: 18rem;">
                <img src="{{ asset('img/cofi kerja.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a class="btn btn-bg  text-center" href="https://google.com" target="_">kunjugi</a>
                    <p class="jam_tgl"><span>01 feb 2021</span> 09:00</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-5 mx-auto" style="width: 18rem;">
                <img src="{{ asset('img/cofi kerja.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a class="btn btn-bg  text-center" href="https://google.com" target="_">kunjugi</a>
                    <p class="jam_tgl"><span>01 feb 2021</span> 09:00</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-5 mx-auto" style="width: 18rem;">
                <img src="{{ asset('img/cofi kerja.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a class="btn btn-bg  text-center" href="https://google.com" target="_">kunjugi</a>
                    <p class="jam_tgl"><span>01 feb 2021</span> 09:00</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-5 mx-auto" style="width: 18rem;">
                <img src="{{ asset('img/cofi kerja.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a class="btn btn-bg  text-center" href="https://google.com" target="_">kunjugi</a>
                    <p class="jam_tgl"><span>01 feb 2021</span> 09:00</p>
                </div>
            </div>
        </div>
        <div class="container ">
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <a class="container btn btn-bg mb-4" href="">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Garis Line --}}
<div class="container">
    <div class="row">
        <div class="col">
            <span class="garis container mt-5"></span>
        </div>
    </div>
</div>
{{-- Hasil Laporan --}}
<div class="container mt-2 text-center pendapatan_container">
    <h2 class="kontak">Pertahunan | Harian | Bulan</h2>
    <div class=" item bg-white">
        <div class="item12">
            <div id="myChart" style="width:100%; max-width:500px; height: 100%;"></div>
        </div>
        <div class="item12 batang">
            <canvas id="myChart12" class="z-10" style="width:100%;max-width:600px"></canvas>
        </div>
        <div class="item12">
            <div id="myPlot" stylhe="width:100%;max-width:700px;"></div>
        </div>
    </div>
</div>

{{-- Garis Line --}}
<div class="container">
    <div class="row">
        <div class="col">
            <span class="garis container mt-5"></span>
        </div>
    </div>
</div>

{{-- Media Sosial --}}
<div class="kontak__container  mt-2 mb-5">
    <h2 class="text-center kontak">Kontak</h2>
    <div class="container kontak-list ">
        <div class="row flex-column flex-sm-row">
            <div class="col">
                <h4 class=" text-kontak">Layanan</h4>
                <div class="elemen-icon mx-auto">
                    <div class="icon ">
                        <a href="">
                            <svg enable-background="new 0 0 512 512" width="50" height="50" fill="#df4f33"
                                id="Sender" version="1.1" viewBox="0 0 512 512" xml:space="preserve"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g>
                                    <g>
                                        <g>
                                            <polygon
                                                points="473.289,223.377 466.219,230.448 476.894,241.122 424.965,241.122 424.965,251.122 476.894,251.122      466.338,261.679 473.407,268.75 496.035,246.122    " />
                                            <polygon
                                                points="430.389,219.469 437.459,226.54 460.086,203.913 437.342,181.167 430.271,188.238 440.885,198.854      394.465,198.854 394.465,208.854 441.003,208.854    " />
                                            <polygon
                                                points="430.271,272.776 440.885,283.392 394.465,283.392 394.465,293.392 441.003,293.392 430.389,304.007      437.459,311.078 460.086,288.45 437.342,265.705    " />
                                            <rect height="10" width="14.5" x="396.965" y="241.122" />
                                        </g>
                                    </g>
                                    <g>
                                        <rect height="10"
                                            transform="matrix(-0.583 -0.8124 0.8124 -0.583 207.5317 778.1471)"
                                            width="12.277" x="297.306" y="330.819" />
                                        <path
                                            d="M87.207,340.147l11.791-0.009l29.979,17.562c7.191,4.214,17.027,8.792,26.988,12.561l3.539-9.353    c-9.32-3.526-18.844-7.951-25.473-11.836l-32.324-18.936l-14.498,0.011l-0.002-117.81l13.024-0.007l29.532-19.045    c1.547-0.995,3.1-2.004,4.663-3.018c12.853-8.341,26.144-16.966,39.856-21.155c5.738-1.746,11.051-2.595,16.246-2.595h52.585    c1.167,0,2.298,0.166,3.407,0.505c5.508,1.632,9.363,7.099,9.376,13.284c0,1.731-0.304,3.45-0.88,5.047    c-0.725,1.935-1.812,3.637-3.275,5.109c-0.121,0.125-0.246,0.245-0.375,0.363l-0.275,0.234c-1.35,1.179-2.879,2.021-4.617,2.526    c-1.064,0.327-2.195,0.492-3.36,0.492l-41.155,0.008l-1.037,3.623c-0.063,0.214-6.371,21.592-27.648,40.027l-0.115,0.099    c-0.677,0.574-1.363,1.155-2.063,1.728l-1.836,1.501v168.435h188.813v-83.245h0.416c13.541,0,24.557-10.669,24.557-23.783    c0-6.381-2.613-12.179-6.852-16.454c7.875-3.966,13.27-11.938,13.27-21.111c0-6.896-3.051-13.114-7.909-17.462    c6.879-4.219,11.46-11.65,11.46-20.103c0-10.124-6.569-18.785-15.793-22.211c3.629-4.146,5.824-9.505,5.824-15.354    c0-13.114-11.016-23.783-24.557-23.783h-0.416v-63.49h-189.16v57.505h1.039c-14.517,4.722-27.959,13.43-40.967,21.872    c-1.553,1.007-3.098,2.009-4.637,3l-27.064,17.454l-10.076,0.005v-13.168H15.965v10h61.242v145.774H15.965v10h71.242V340.147z     M190.523,156.518c-3.813,0-7.656,0.379-11.611,1.145v-34.034l22.561,32.881h-1.988L190.523,156.518z M257.523,198.717    l0.371-0.309c0.352-0.319,0.703-0.649,0.984-0.941c2.422-2.435,4.273-5.328,5.523-8.66c0.992-2.749,1.495-5.609,1.495-8.51    c-0.021-10.583-6.821-19.984-16.491-22.849c-2.014-0.617-4.131-0.931-6.292-0.931l-29.513-0.006l-30.195-44.01h159.925    l-80.703,112.467l-15.296-21.312c0.682-0.135,1.354-0.29,2.002-0.489C252.348,202.294,255.104,200.797,257.523,198.717z     M179.625,245.462l0.156-0.133c18.384-15.929,26.638-33.74,29.506-41.249l26.037-0.001l21.149,29.467l-5.31,7.4    c-6.566,9.149-6.566,21.444,0,30.595l5.327,7.425l-77.231,109.74V245.771C179.383,245.668,179.504,245.565,179.625,245.462z     M358.488,316.253h-21.572c-7.6,0-13.781-6.184-13.781-13.783c0-7.599,6.182-13.782,13.781-13.782h6.418h15.154    c8.026,0,14.557,6.184,14.557,13.782C373.045,310.069,366.515,316.253,358.488,316.253z M364.904,278.688h-6.416h-15.154    c-7.6,0-13.783-6.183-13.783-13.783c0-7.599,6.184-13.782,13.783-13.782h3.551h18.02c8.027,0,14.559,6.184,14.559,13.782    C379.463,272.505,372.932,278.688,364.904,278.688z M383.014,227.34c0,7.6-6.531,13.782-14.559,13.782h-3.551h-18.02    c-7.6,0-13.783-6.183-13.783-13.782s6.184-13.782,13.783-13.782h11.604h9.967C376.482,213.558,383.014,219.74,383.014,227.34z     M373.045,189.775c0,7.6-6.53,13.783-14.557,13.783h-11.604h-9.969c-7.6,0-13.781-6.183-13.781-13.783    c0-7.6,6.182-13.783,13.781-13.783h21.572C366.515,175.992,373.045,182.175,373.045,189.775z M336.916,165.992    c-13.113,0-23.781,10.669-23.781,23.783c0,10.212,6.472,18.941,15.528,22.304c-3.468,4.133-5.562,9.456-5.562,15.261    c0,6.874,2.936,13.073,7.614,17.419c-6.7,4.211-11.165,11.665-11.165,20.145c0,6.348,2.504,12.117,6.569,16.387    c-7.7,3.94-12.985,11.951-12.985,21.179c0,13.114,10.668,23.783,23.781,23.783h11.156v63.18l-30.43-42.403l-8.125,5.829    l33.469,46.64H183.893l78.772-111.931l26.237,36.563l8.125-5.83l-37.738-52.591c-4.064-5.663-4.064-13.272,0-18.935    l88.783-123.726v42.943H336.916z" />
                                        <rect height="12.374" width="10" x="55.982" y="210.979" />
                                        <rect height="100.652" width="10" x="55.982" y="234.854" />
                                    </g>
                                </g>
                            </svg><span>Email</span></a>
                    </div>
                    <div class="icon">
                        <a href="">
                            <svg viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" f
                                enable-background="new 0 0 512 512" width="50" height="50">
                                <circle cx="227.9" cy="31.5" r="12.3" fill="#25d366"
                                    class="fill-000000"></circle>
                                <circle cx="396.3" cy="228.4" r="12.3" fill="#25d366"
                                    class="fill-000000"></circle>
                                <circle cx="115.7" cy="228.4" r="12.3" fill="#25d366"
                                    class="fill-000000"></circle>
                                <path
                                    d="M363.7 85.6c-1.8 0-3.3-1.5-3.3-3.3v-8.9c0-1.8 1.5-3.3 3.3-3.3 1.8 0 3.3 1.5 3.3 3.3v8.9c.1 1.8-1.4 3.3-3.3 3.3zM377.8 91.4c-.9 0-1.7-.3-2.3-1a3.32 3.32 0 0 1 0-4.7l6.3-6.3c1.3-1.3 3.4-1.3 4.7 0 1.3 1.3 1.3 3.4 0 4.7l-6.3 6.3c-.7.7-1.6 1-2.4 1zM392.5 105.4h-8.7c-1.8 0-3.3-1.5-3.3-3.3 0-1.8 1.5-3.3 3.3-3.3h8.7c1.8 0 3.3 1.5 3.3 3.3 0 1.9-1.5 3.3-3.3 3.3zM384.1 125.7c-.8 0-1.7-.3-2.3-1l-6.3-6.3a3.32 3.32 0 0 1 0-4.7c1.3-1.3 3.4-1.3 4.7 0l6.3 6.3c1.3 1.3 1.3 3.4 0 4.7-.8.7-1.6 1-2.4 1zM363.7 134.2c-1.8 0-3.3-1.5-3.3-3.3v-8.7c0-1.8 1.5-3.3 3.3-3.3 1.8 0 3.3 1.5 3.3 3.3v8.7c.1 1.8-1.4 3.3-3.3 3.3zM343.4 125.7c-.9 0-1.7-.3-2.3-1a3.32 3.32 0 0 1 0-4.7l6.3-6.3c1.3-1.3 3.4-1.3 4.7 0 1.3 1.3 1.3 3.4 0 4.7l-6.3 6.3c-.7.7-1.5 1-2.4 1zM343.8 105.4H335c-1.8 0-3.3-1.5-3.3-3.3 0-1.8 1.5-3.3 3.3-3.3h8.7c1.8 0 3.3 1.5 3.3 3.3.1 1.9-1.4 3.3-3.2 3.3zM349.7 91.4c-.9 0-1.7-.3-2.3-1l-6.3-6.3a3.32 3.32 0 0 1 0-4.7c1.3-1.3 3.4-1.3 4.7 0l6.3 6.3c1.3 1.3 1.3 3.4 0 4.7-.7.7-1.5 1-2.4 1zM147.2 102.3c-1.8 0-3.3-1.5-3.3-3.3v-8.2c0-1.8 1.5-3.3 3.3-3.3 1.8 0 3.3 1.5 3.3 3.3V99c0 1.8-1.5 3.3-3.3 3.3zM147.2 138.9c-1.8 0-3.3-1.5-3.3-3.3v-8.2c0-1.8 1.5-3.3 3.3-3.3 1.8 0 3.3 1.5 3.3 3.3v8.2c0 1.8-1.5 3.3-3.3 3.3zM169.7 116.5h-8.2c-1.8 0-3.3-1.5-3.3-3.3 0-1.8 1.5-3.3 3.3-3.3h8.2c1.8 0 3.3 1.5 3.3 3.3 0 1.8-1.5 3.3-3.3 3.3zM133 116.5h-8.2c-1.8 0-3.3-1.5-3.3-3.3 0-1.8 1.5-3.3 3.3-3.3h8.2c1.8 0 3.3 1.5 3.3 3.3 0 1.8-1.5 3.3-3.3 3.3zM270.6 216.6c.3.4.3 2.5-.6 4.8-.8 2.4-4.9 4.5-6.8 4.8-1.7.3-4 .4-6.4-.4-1.5-.5-3.3-1.1-5.8-2.1-10.1-4.4-16.8-14.6-17.3-15.3-.5-.7-4.1-5.5-4.1-10.5s2.6-7.4 3.5-8.4c.9-1 2-1.3 2.7-1.3h1.9c.6 0 1.5-.2 2.3 1.7.8 2 2.9 7 3.1 7.5.3.5.4 1.1.1 1.8-.3.7-.5 1.1-1 1.7-.5.6-1.1 1.3-1.5 1.8-.5.5-1 1.1-.4 2.1s2.6 4.3 5.6 7c3.9 3.5 7.1 4.5 8.1 5s1.6.4 2.2-.3c.6-.7 2.5-3 3.2-4 .7-1 1.3-.8 2.3-.5.9.3 5.9 2.8 6.9 3.3 1.1.6 1.7.8 2 1.3z"
                                    fill="#25d366" class="fill-000000"></path>
                                <path
                                    d="M278.8 178.3c-7.6-7.7-17.8-11.9-28.6-11.9-22.3 0-40.5 18.2-40.5 40.5 0 7.1 1.9 14.1 5.4 20.2l-5.7 21 21.5-5.6c5.9 3.2 12.6 4.9 19.3 4.9 22.3 0 40.5-18.2 40.5-40.5 0-10.8-4.2-20.9-11.9-28.6zm-28.6 62.3c-6 0-12-1.6-17.1-4.7l-1.2-.7-12.7 3.3 3.4-12.4-.8-1.3c-3.4-5.4-5.2-11.5-5.1-17.9 0-18.5 15.1-33.6 33.7-33.6 9 0 17.4 3.5 23.8 9.9 6.4 6.4 9.9 14.8 9.8 23.8-.2 18.5-15.3 33.6-33.8 33.6z"
                                    fill="#25d366" class="fill-000000"></path>
                                <path
                                    d="M246.7 128.1c-43.7 0-79.2 35.5-79.2 79.2s35.5 79.2 79.2 79.2c43.8 0 79.2-35.5 79.2-79.2s-35.4-79.2-79.2-79.2zm0 155.1c-41.9 0-75.9-34-75.9-75.9 0-41.8 34-75.9 75.9-75.9 41.8 0 75.9 34 75.9 75.9 0 41.8-34 75.9-75.9 75.9z"
                                    fill="#25d366" class="fill-000000"></path>
                                <path
                                    d="M246.7 124.8c-45.5 0-82.5 37-82.5 82.5s37 82.5 82.5 82.5 82.5-37 82.5-82.5-37-82.5-82.5-82.5zm0 158.4c-41.9 0-75.9-34-75.9-75.9 0-41.8 34-75.9 75.9-75.9 41.8 0 75.9 34 75.9 75.9 0 41.8-34 75.9-75.9 75.9zM246.7 492.7c-1.8 0-3.3-1.5-3.3-3.3v-5.6c0-1.8 1.5-3.3 3.3-3.3 1.8 0 3.3 1.5 3.3 3.3v5.6c0 1.8-1.5 3.3-3.3 3.3zM246.7 467.3c-1.8 0-3.3-1.5-3.3-3.3v-20.3c0-1.8 1.5-3.3 3.3-3.3 1.8 0 3.3 1.5 3.3 3.3V464c0 1.8-1.5 3.3-3.3 3.3zM246.7 420.6c-1.8 0-3.3-1.5-3.3-3.3v-70.4c0-1.8 1.5-3.3 3.3-3.3 1.8 0 3.3 1.5 3.3 3.3v70.4c0 1.8-1.5 3.3-3.3 3.3zM246.7 333.3c-1.8 0-3.3-1.5-3.3-3.3v-8.8c0-1.8 1.5-3.3 3.3-3.3 1.8 0 3.3 1.5 3.3 3.3v8.8c0 1.8-1.5 3.3-3.3 3.3zM287.1 427.5c-1.8 0-3.3-1.5-3.3-3.3v-20.3c0-1.8 1.5-3.3 3.3-3.3 1.8 0 3.3 1.5 3.3 3.3v20.3c0 1.8-1.4 3.3-3.3 3.3zM287.1 380.8c-1.8 0-3.3-1.5-3.3-3.3v-43.9c0-1.8 1.5-3.3 3.3-3.3 1.8 0 3.3 1.5 3.3 3.3v43.9c0 1.8-1.4 3.3-3.3 3.3zM287.1 320c-1.8 0-3.3-1.5-3.3-3.3v-8.8c0-1.8 1.5-3.3 3.3-3.3 1.8 0 3.3 1.5 3.3 3.3v8.8c0 1.8-1.4 3.3-3.3 3.3zM287.1 449.2c-1.8 0-3.3-1.5-3.3-3.3V444c0-1.8 1.5-3.3 3.3-3.3 1.8 0 3.3 1.5 3.3 3.3v1.9c0 1.8-1.4 3.3-3.3 3.3zM206.3 381.6c-1.8 0-3.3-1.5-3.3-3.3v-70.4c0-1.8 1.5-3.3 3.3-3.3s3.3 1.5 3.3 3.3v70.4c0 1.9-1.5 3.3-3.3 3.3zM206.3 407.3c-1.8 0-3.3-1.5-3.3-3.3v-8.8c0-1.8 1.5-3.3 3.3-3.3s3.3 1.5 3.3 3.3v8.8c0 1.8-1.5 3.3-3.3 3.3z"
                                    fill="#25d366" class="fill-000000"></path>
                                <path
                                    d="M278.8 178.3c-7.6-7.7-17.8-11.9-28.6-11.9-22.3 0-40.5 18.2-40.5 40.5 0 7.1 1.9 14.1 5.4 20.2l-5.7 21 21.5-5.6c5.9 3.2 12.6 4.9 19.3 4.9 22.3 0 40.5-18.2 40.5-40.5 0-10.8-4.2-20.9-11.9-28.6zm-28.6 62.3c-6 0-12-1.6-17.1-4.7l-1.2-.7-12.7 3.3 3.4-12.4-.8-1.3c-3.4-5.4-5.2-11.5-5.1-17.9 0-18.5 15.1-33.6 33.7-33.6 9 0 17.4 3.5 23.8 9.9 6.4 6.4 9.9 14.8 9.8 23.8-.2 18.5-15.3 33.6-33.8 33.6z"
                                    fill="#25d366" class="fill-000000"></path>
                                <path
                                    d="M270.6 216.6c-.3-.4-.9-.7-1.9-1.2-1-.5-6-3-6.9-3.3-.9-.3-1.6-.5-2.3.5-.7 1-2.6 3.3-3.2 4-.6.7-1.2.8-2.2.3-1-.5-4.3-1.6-8.1-5-3-2.7-5-6-5.6-7-.6-1-.1-1.6.4-2.1s1-1.2 1.5-1.8c.5-.6.7-1 1-1.7.3-.7.2-1.3-.1-1.8-.3-.5-2.3-5.5-3.1-7.5-.8-2-1.7-1.7-2.3-1.7h-1.9c-.7 0-1.8.3-2.7 1.3-.9 1-3.5 3.5-3.5 8.4 0 5 3.6 9.8 4.1 10.5.5.7 7.1 10.9 17.3 15.3 2.4 1 4.3 1.7 5.8 2.1 2.4.8 4.6.7 6.4.4 1.9-.3 6-2.5 6.8-4.8.7-2.5.7-4.5.5-4.9z"
                                    fill-rule="evenodd" clip-rule="evenodd" fill="#25d366" class="fill-000000">
                                </path>
                            </svg><span>Whatsapp</span></a>
                    </div>
                    <div class="icon">
                        <a href="">
                            <svg style="enable-background:new 0 0 500 500;" width="50" height="50"
                                version="1.1" viewBox="0 0 500 500" xml:space="preserve"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="telephone-24-7-customer-support">
                                    <g>
                                        <polygon
                                            points="500,250 473.216,279.409 491.536,314.718 458.049,336.172 466.532,375.03 428.619,387.055     426.778,426.778 387.044,428.619 375.02,466.543 336.161,458.049 314.707,491.547 279.409,473.226 250,500 220.581,473.226     185.282,491.547 163.818,458.049 124.959,466.543 112.945,428.619 73.222,426.778 71.371,387.044 33.458,375.021 41.941,336.172     8.453,314.718 26.774,279.409 0,250 26.774,220.591 8.453,185.282 41.941,163.829 33.458,124.97 71.371,112.956 73.222,73.222     112.956,71.381 124.97,33.468 163.829,41.952 185.282,8.463 220.581,26.784 250,0 279.409,26.784 314.718,8.463 336.172,41.962     375.03,33.468 387.044,71.381 426.778,73.232 428.619,112.966 466.532,124.98 458.049,163.839 491.536,185.282 473.216,220.591       "
                                            style="fill:#9DD2D8;" />
                                        <g id="_x32_5">
                                            <path
                                                d="M393.229,250c0,79.102-64.123,143.229-143.229,143.229S106.771,329.102,106.771,250     S170.894,106.771,250,106.771S393.229,170.898,393.229,250z"
                                                style="fill:#F4F8F8;" />
                                            <g id="_x31_2">
                                                <g>
                                                    <path
                                                        d="M233.053,227.926c24.373-5.819,42.023-23.234,42.023-42.888       c0-24.455-27.308-44.301-60.984-44.301c-33.676,0-60.994,19.847-60.994,44.301c0,22.807,23.732,41.596,54.24,44.037h-0.031       c0,0,15.076,17.09,31.713,20.172C239.019,249.247,232.213,238.556,233.053,227.926z"
                                                        style="fill:#FC6E51;" />
                                                    <path
                                                        d="M263.688,167.297l-13.565,30.162h-8.764l7.263-15.971c0.554-1.16,1.139-2.33,1.77-3.489       c0.636-1.14,1.327-2.309,2.116-3.469h-10.219v-7.233H263.688z M185.506,183.838c1.21-2.177,1.826-4.456,1.826-6.765       c0-2.889-0.895-5.229-2.701-7.04c-1.785-1.831-4.089-2.736-6.912-2.736c-2.925,0-5.32,0.915-7.202,2.767       c-1.872,1.831-2.803,4.272-2.803,7.263l0.046,1.099h7.863c-0.015-0.254-0.036-0.458-0.036-0.641       c-0.02-0.183-0.02-0.335-0.02-0.478c0-2.431,0.662-3.662,1.979-3.662c0.605,0,1.079,0.244,1.43,0.712       c0.341,0.488,0.508,1.119,0.508,1.933c0,1.495-0.361,2.95-1.084,4.354c-0.361,0.732-0.864,1.597-1.495,2.594       c-0.646,0.956-1.429,2.075-2.36,3.316l-8.25,10.905h20.655v-7.233c-1.277,0-2.548,0.061-3.764,0.204       c-1.231,0.122-2.441,0.366-3.642,0.671c1.389-1.333,2.584-2.594,3.566-3.794C184.097,186.096,184.886,184.947,185.506,183.838z        M209.193,184.987h2.589v6.348h-2.589v6.124h-8.123v-6.124h-10.966v-6.358l9.11-17.68h9.979V184.987z M201.543,175.893       l-1.205,2.574c-0.601,1.261-1.206,2.441-1.806,3.53c-0.605,1.079-1.206,2.085-1.801,2.991h4.618v-5.645       c0-0.244,0.005-0.682,0.041-1.262C201.431,177.521,201.472,176.778,201.543,175.893z M213.023,204.478l4.242,2.391       l21.587-40.294l-4.253-2.248L213.023,204.478z"
                                                        style="fill:#F4F8F8;" />
                                                </g>
                                                <g>
                                                    <path
                                                        d="M242.152,271.006l-26.596,28.962l-5.051-4.649c-2.711-2.482-2.889-6.744-0.401-9.45       l17.553-19.104c2.487-2.706,6.734-2.89,9.455-0.387L242.152,271.006z"
                                                        style="fill:#484B4D;" />
                                                    <path
                                                        d="M286.245,212.88c-2.701-2.482-2.89-6.744-0.397-9.45l17.548-19.104       c2.487-2.716,6.734-2.889,9.461-0.387l5.035,4.629l-26.597,28.951L286.245,212.88z"
                                                        style="fill:#484B4D;" />
                                                    <path
                                                        d="M217.494,301.737l26.596-28.951c0,0,8.561,7.467,31.814-17.334       c0.453-0.509,0.885-0.986,1.302-1.475l0,0c0.016-0.011,0.025-0.03,0.052-0.041c0.01-0.021,0.02-0.04,0.03-0.051h0.005       c0.453-0.468,0.905-0.926,1.368-1.414c22.746-25.278,14.572-33.172,14.572-33.172l26.596-28.951       c20.895,14.995,10.712,36.845,3.77,47.455c-4.751,7.619-14.796,20.193-27.212,33.702       c-12.421,13.52-24.094,24.587-31.291,29.968C255.106,309.296,234.197,321.289,217.494,301.737z"
                                                        style="fill:#484B4D;" />
                                                    <path
                                                        d="M268.962,336.782c0.417,1.882-0.778,3.733-2.66,4.16c-4.797,1.058-9.028,1.526-12.787,1.536       c-0.122,0-0.224,0-0.346,0c-11.907,0-19.099-5.351-22.481-11.088c-3.464-5.758-3.601-11.414-3.611-12.797       c0-0.174,0-0.285,0-0.336c0.082-1.933,1.714-3.429,3.632-3.347c1.938,0.081,3.438,1.709,3.357,3.632c0,0,0,0,0,0.051       c-0.015,0.682,0.168,5.218,2.594,9.155c2.477,3.886,6.638,7.629,16.856,7.73c3.153,0,6.897-0.406,11.281-1.352       C266.683,333.699,268.545,334.88,268.962,336.782z"
                                                        style="fill:#FC6E51;" />
                                                    <path
                                                        d="M294.362,324.402l-12.705,17.588c-1.47,2.024-4.318,2.483-6.353,1.018       c-2.04-1.476-2.493-4.314-1.018-6.358l12.705-17.567c1.465-2.035,4.309-2.492,6.343-1.027       C295.369,319.529,295.832,322.367,294.362,324.402z"
                                                        style="fill:#FC6E51;" />
                                                    <path
                                                        d="M314.061,324.402l-12.695,17.588c-1.48,2.024-4.328,2.483-6.358,1.018       c-2.034-1.476-2.486-4.314-1.021-6.358l12.71-17.567c1.46-2.035,4.309-2.492,6.343-1.027       C315.084,319.529,315.531,322.367,314.061,324.402z"
                                                        style="fill:#FC6E51;" />
                                                    <path
                                                        d="M333.766,324.402l-12.711,17.588c-1.459,2.024-4.308,2.483-6.342,1.018       c-2.045-1.476-2.498-4.314-1.022-6.358l12.695-17.567c1.475-2.035,4.328-2.492,6.353-1.027       C334.772,319.529,335.23,322.367,333.766,324.402z"
                                                        style="fill:#FC6E51;" />
                                                    <path
                                                        d="M353.465,324.402L340.77,341.99c-1.475,2.024-4.323,2.483-6.353,1.018       c-2.029-1.476-2.498-4.314-1.027-6.358l12.716-17.567c1.465-2.035,4.308-2.492,6.342-1.027       C354.482,319.529,354.939,322.367,353.465,324.402z"
                                                        style="fill:#FC6E51;" />
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                                <g id="Layer_1" />
                            </svg><span>Telephone</span></a>
                    </div>
                </div>
            </div>
            <div class="col">
                <h4 class=" text-kontak ">Peta</h4>
                <div class="peta mt-3">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1516.2320975163518!2d103.89508464384991!3d1.3006878202662375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da22d1b2efb4b7%3A0xaef81285c5da56b9!2sTan%40Home%20-%20Mobile%20Spray%20Tanning!5e0!3m2!1sid!2sid!4v1680754829024!5m2!1sid!2sid"
                        style="width: 600px; height: 260px; border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
