@extends('layout.layout')
@section('content')
@endsection
@section('main_content')
<div class="side-app">
    <!-- CONTAINER -->
    <div class="main-container container-fluid">

        <!-- ROW-1 -->
        <div class="row">
            <div class="col-lg-6 col-sm-12 col-md-6 col-xl-3">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h3 class="mb-2 fw-semibold">

                                </h3>
                                <p class="text-muted fs-13 mb-0">Lượng khách thành viên</p>
                                <p class="text-muted mb-0 mt-2 fs-12">
                                    <span class="icn-box text-success fw-semibold fs-13 me-1">
                                        <i class="fa fa-long-arrow-up"></i>
                                        42%</span>
                                    So với tháng trước
                                </p>
                            </div>
                            <div class="col col-auto top-icn dash">
                                <div class="counter-icon bg-primary dash ms-auto box-shadow-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-white"
                                        enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                        <path
                                            d="M12,8c-2.2091675,0-4,1.7908325-4,4s1.7908325,4,4,4c2.208252-0.0021973,3.9978027-1.791748,4-4C16,9.7908325,14.2091675,8,12,8z M12,15c-1.6568604,0-3-1.3431396-3-3s1.3431396-3,3-3c1.6561279,0.0018311,2.9981689,1.3438721,3,3C15,13.6568604,13.6568604,15,12,15z M21.960022,11.8046875C19.9189453,6.9902344,16.1025391,4,12,4s-7.9189453,2.9902344-9.960022,7.8046875c-0.0537109,0.1246948-0.0537109,0.2659302,0,0.390625C4.0810547,17.0097656,7.8974609,20,12,20s7.9190063-2.9902344,9.960022-7.8046875C22.0137329,12.0706177,22.0137329,11.9293823,21.960022,11.8046875z M12,19c-3.6396484,0-7.0556641-2.6767578-8.9550781-7C4.9443359,7.6767578,8.3603516,5,12,5s7.0556641,2.6767578,8.9550781,7C19.0556641,16.3232422,15.6396484,19,12,19z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-md-6 col-xl-3">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h3 class="mb-2 fw-semibold">12,563</h3>
                                <p class="text-muted fs-13 mb-0">Tổng đơn hàng</p>
                                <p class="text-muted mb-0 mt-2 fs-12">
                                    <span class="icn-box text-danger fw-semibold fs-13 me-1">
                                        <i class="fa fa-long-arrow-down"></i>
                                        12%</span>
                                    So với tháng trước
                                </p>
                            </div>
                            <div class="col col-auto top-icn dash">
                                <div class="counter-icon bg-secondary dash ms-auto box-shadow-secondary">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-white"
                                        enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                        <path
                                            d="M19.5,7H16V5.9169922c0-2.2091064-1.7908325-4-4-4s-4,1.7908936-4,4V7H4.5C4.4998169,7,4.4996338,7,4.4993896,7C4.2234497,7.0001831,3.9998169,7.223999,4,7.5V19c0.0018311,1.6561279,1.3438721,2.9981689,3,3h10c1.6561279-0.0018311,2.9981689-1.3438721,3-3V7.5c0-0.0001831,0-0.0003662,0-0.0006104C19.9998169,7.2234497,19.776001,6.9998169,19.5,7z M9,5.9169922c0-1.6568604,1.3431396-3,3-3s3,1.3431396,3,3V7H9V5.9169922z M19,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2H7c-1.1040039-0.0014038-1.9985962-0.8959961-2-2V8h3v2.5C8,10.776123,8.223877,11,8.5,11S9,10.776123,9,10.5V8h6v2.5c0,0.0001831,0,0.0003662,0,0.0005493C15.0001831,10.7765503,15.223999,11.0001831,15.5,11c0.0001831,0,0.0003662,0,0.0006104,0C15.7765503,10.9998169,16.0001831,10.776001,16,10.5V8h3V19z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-md-6 col-xl-3">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h3 class="mb-2 fw-semibold">$5,178</h3>
                                <p class="text-muted fs-13 mb-0">Tổng doanh thu</p>
                                <p class="text-muted mb-0 mt-2 fs-12">
                                    <span class="icn-box text-success fw-semibold fs-13 me-1">
                                        <i class="fa fa-long-arrow-up"></i>
                                        27%</span>
                                    So với tháng trước
                                </p>
                            </div>
                            <div class="col col-auto top-icn dash">
                                <div class="counter-icon bg-info dash ms-auto box-shadow-info">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-white"
                                        enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                        <path
                                            d="M7.5,12C7.223877,12,7,12.223877,7,12.5v5.0005493C7.0001831,17.7765503,7.223999,18.0001831,7.5,18h0.0006104C7.7765503,17.9998169,8.0001831,17.776001,8,17.5v-5C8,12.223877,7.776123,12,7.5,12z M19,2H5C3.3438721,2.0018311,2.0018311,3.3438721,2,5v14c0.0018311,1.6561279,1.3438721,2.9981689,3,3h14c1.6561279-0.0018311,2.9981689-1.3438721,3-3V5C21.9981689,3.3438721,20.6561279,2.0018311,19,2z M21,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2H5c-1.1040039-0.0014038-1.9985962-0.8959961-2-2V5c0.0014038-1.1040039,0.8959961-1.9985962,2-2h14c1.1040039,0.0014038,1.9985962,0.8959961,2,2V19z M12,6c-0.276123,0-0.5,0.223877-0.5,0.5v11.0005493C11.5001831,17.7765503,11.723999,18.0001831,12,18h0.0006104c0.2759399-0.0001831,0.4995728-0.223999,0.4993896-0.5v-11C12.5,6.223877,12.276123,6,12,6z M16.5,10c-0.276123,0-0.5,0.223877-0.5,0.5v7.0005493C16.0001831,17.7765503,16.223999,18.0001831,16.5,18h0.0006104C16.7765503,17.9998169,17.0001831,17.776001,17,17.5v-7C17,10.223877,16.776123,10,16.5,10z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-md-6 col-xl-3">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h3 class="mb-2 fw-semibold">$43,987</h3>
                                <p class="text-muted fs-13 mb-0">Lợi nhuận</p>
                                <p class="text-muted mb-0 mt-2 fs-12">
                                    <span class="icn-box text-success fw-semibold fs-13 me-1">
                                        <i class="fa fa-long-arrow-up"></i>
                                        9%</span>
                                    So với tháng trước
                                </p>
                            </div>
                            <div class="col col-auto top-icn dash">
                                <div class="counter-icon bg-warning dash ms-auto box-shadow-warning">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-white"
                                        enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                        <path
                                            d="M9,10h2.5c0.276123,0,0.5-0.223877,0.5-0.5S11.776123,9,11.5,9H10V8c0-0.276123-0.223877-0.5-0.5-0.5S9,7.723877,9,8v1c-1.1045532,0-2,0.8954468-2,2s0.8954468,2,2,2h1c0.5523071,0,1,0.4476929,1,1s-0.4476929,1-1,1H7.5C7.223877,15,7,15.223877,7,15.5S7.223877,16,7.5,16H9v1.0005493C9.0001831,17.2765503,9.223999,17.5001831,9.5,17.5h0.0006104C9.7765503,17.4998169,10.0001831,17.276001,10,17v-1c1.1045532,0,2-0.8954468,2-2s-0.8954468-2-2-2H9c-0.5523071,0-1-0.4476929-1-1S8.4476929,10,9,10z M21.5,12H17V2.5c0.000061-0.0875244-0.0228882-0.1735229-0.0665283-0.2493896c-0.1375732-0.2393188-0.4431152-0.3217773-0.6824951-0.1842041l-3.2460327,1.8603516L9.7481079,2.0654297c-0.1536865-0.0878906-0.3424072-0.0878906-0.4960938,0l-3.256897,1.8613281L2.7490234,2.0664062C2.6731567,2.0227661,2.5871582,1.9998779,2.4996338,1.9998779C2.2235718,2.000061,1.9998779,2.223938,2,2.5v17c0.0012817,1.380188,1.119812,2.4987183,2.5,2.5H19c1.6561279-0.0018311,2.9981689-1.3438721,3-3v-6.5006104C21.9998169,12.2234497,21.776001,11.9998169,21.5,12z M4.5,21c-0.828064-0.0009155-1.4990845-0.671936-1.5-1.5V3.3623047l2.7412109,1.5712891c0.1575928,0.0872192,0.348877,0.0875854,0.5068359,0.0009766L9.5,3.0761719l3.2519531,1.8583984c0.157959,0.0866089,0.3492432,0.0862427,0.5068359-0.0009766L16,3.3623047V19c0.0008545,0.7719116,0.3010864,1.4684448,0.7803345,2H4.5z M21,19c0,1.1045532-0.8954468,2-2,2s-2-0.8954468-2-2v-6h4V19z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ROW-1 END-->

        <!-- ROW-2 -->
        <div class="row">
            <div class="col-sm-12 col-md-12 col-xl-4 col-lg-6">
                <div class="row">
                    <div class="col-lg-12 col-xl-12 col-md-6 col-sm-12">
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
                        <div class="card overflow-hidden">
                            <div class="card-header border-bottom">
                                <h4 class="card-title fw-semibold">Đơn hàng gần đây</h4>
                                <a href="#" class="ms-auto">Xem tất cả</a>
                            </div>
                            <div class="card-body p-0 customers mt-1">
                                <div class="list-group py-1">
                                    <a href="javascript:void(0);" class="border-0">
                                        <div class="list-group-item border-0">
                                            <div class="media mt-0 align-items-center">
                                                <div class="transaction-icon"><i class="fe fe-chevrons-right"></i>
                                                </div>
                                                <div class="media-body">
                                                    <div class="d-flex align-items-center">
                                                        <div class="mt-0">
                                                            <h5 class="mb-1 fs-13 fw-normal text-dark">To Bel Bcron
                                                                Bank<span class="fs-13 fw-semibold ms-1">Savings
                                                                    Section</span></h5>
                                                            <p class="mb-0 fs-12 text-muted">Transfer 4.53pm</p>
                                                        </div>
                                                        <span class="ms-auto fs-13">
                                                            <span class="float-end text-dark">-$2,543</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="border-0">
                                        <div class="list-group-item border-0">
                                            <div class="media mt-0 align-items-center">
                                                <div class="transaction-icon">
                                                    <i class="fe fe-briefcase"></i>
                                                </div>
                                                <div class="media-body">
                                                    <div class="d-flex align-items-center">
                                                        <div class="mt-0">
                                                            <h5 class="mb-1 fs-13 fw-normal text-dark">Payment For <span
                                                                    class="fs-13 fw-semibold ms-1">Day Job</span></h5>
                                                            <p class="mb-0 fs-12 text-muted">Received 2.45pm</p>
                                                        </div>
                                                        <span class="ms-auto fs-13">
                                                            <span class="float-end text-dark">+$32,543</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="border-0">
                                        <div class="list-group-item border-0">
                                            <div class="media mt-0 align-items-center">
                                                <div class="transaction-icon"><i class="fe fe-dollar-sign"></i>
                                                </div>
                                                <div class="media-body">
                                                    <div class="d-flex align-items-center">
                                                        <div class="mt-0">
                                                            <h5 class="mb-1 fs-13 fw-normal text-dark">Bought items
                                                                from<span class="fs-13 fw-semibold ms-1">Ecommerce
                                                                    site</span></h5>
                                                            <p class="mb-0 fs-12 text-muted">Payment 8.00am</p>
                                                        </div>
                                                        <span class="ms-auto fs-13">
                                                            <span class="float-end text-dark">-$256</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="border-0">
                                        <div class="list-group-item border-0">
                                            <div class="media mt-0 align-items-center">
                                                <div class="transaction-icon"><i class="fe fe-file-text"></i>
                                                </div>
                                                <div class="media-body">
                                                    <div class="d-flex align-items-center">
                                                        <div class="mt-0">
                                                            <h5 class="mb-1 fs-13 fw-normal text-dark">Paid Monthly
                                                                Expenses<span class="fs-13 fw-semibold ms-1">Bills &amp;
                                                                    Loans</span></h5>
                                                            <p class="mb-0 fs-12 text-muted">Payment 6.43am</p>
                                                        </div>
                                                        <span class="ms-auto fs-13">
                                                            <span class="float-end text-dark">-$1,298</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-6 col-xl-8">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h3 class="card-title">Biểu đồ doanh thu theo tháng</h3>
                        <div class="ms-auto">
                            <div class="btn-group p-0 ms-auto">
                                <button class="btn btn-primary-light btn-sm disabled" type="button">2021</button>
                                <button class="btn btn-primary-light btn-sm" type="button">2022</button>
                                <button class="btn btn-primary-light btn-sm disabled" type="button">2023</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="sales-stats d-flex">
                            <div>
                                <div class="text-muted fs-13">Tổng doanh thu
                                    <span class="p-2 br-5 text-success"><i class="fe fe-arrow-up-right"></i></span>
                                </div>
                                <h3 class="fw-semibold">$582,857.97</h3>
                                <div><span class="text-success fs-13 me-1">32%</span>Increase Since last Year</div>
                            </div>
                        </div>
                        <div id="chartD" style="min-height: 360px;">
                            <div id="apexcharts2ufi2hjn" class="apexcharts-canvas apexcharts2ufi2hjn light zoomable"
                                style="width: 396px; height: 345px;"><svg id="SvgjsSvg1099" width="396" height="345"
                                    xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                    class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                    style="background: transparent;">
                                    <g id="SvgjsG1101" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(77.57291793823242, 30)">
                                        <defs id="SvgjsDefs1100">
                                            <clipPath id="gridRectMask2ufi2hjn">
                                                <rect id="SvgjsRect1123" width="309.4270820617676" height="276.584"
                                                    x="-0.5" y="-0.5" rx="0" ry="0" fill="#ffffff" opacity="1"
                                                    stroke-width="0" stroke="none" stroke-dasharray="0"></rect>
                                            </clipPath>
                                            <clipPath id="gridRectMarkerMask2ufi2hjn">
                                                <rect id="SvgjsRect1124" width="310.4270820617676" height="277.584"
                                                    x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1"
                                                    stroke-width="0" stroke="none" stroke-dasharray="0"></rect>
                                            </clipPath>
                                            <linearGradient id="SvgjsLinearGradient1130" x1="0" y1="0" x2="0" y2="1">
                                                <stop id="SvgjsStop1131" stop-opacity="0.75"
                                                    stop-color="rgba(143,189,86,0.75)" offset="0"></stop>
                                                <stop id="SvgjsStop1132" stop-opacity="0.5"
                                                    stop-color="rgba(255,255,255,0.5)" offset="2"></stop>
                                                <stop id="SvgjsStop1133" stop-opacity="0.5"
                                                    stop-color="rgba(255,255,255,0.5)" offset="1"></stop>
                                            </linearGradient>
                                        </defs>
                                        <line id="SvgjsLine1106" x1="0" y1="0" x2="0" y2="275.584" stroke="#b6b6b6"
                                            stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1"
                                            height="275.584" fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                            stroke-width="1"></line>
                                        <g id="SvgjsG1136" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG1137" class="apexcharts-xaxis-texts-g"
                                                transform="translate(0, -4)"><text id="SvgjsText1138"
                                                    font-family="Helvetica, Arial, sans-serif" x="0" y="304.584"
                                                    text-anchor="middle" dominant-baseline="auto" font-size="11px"
                                                    font-weight="400" fill="#373d3f"
                                                    class="apexcharts-xaxis-label apexcharts-xaxis-label"
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1139"
                                                        style="font-family: Helvetica, Arial, sans-serif;">Feb '12
                                                    </tspan>
                                                    <title>Feb '12</title>
                                                </text><text id="SvgjsText1140"
                                                    font-family="Helvetica, Arial, sans-serif" x="70.76720812124687"
                                                    y="304.584" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="11px" font-weight="400" fill="#373d3f"
                                                    class="apexcharts-xaxis-label apexcharts-xaxis-label"
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1141"
                                                        style="font-family: Helvetica, Arial, sans-serif;">May '12
                                                    </tspan>
                                                    <title>May '12</title>
                                                </text><text id="SvgjsText1142"
                                                    font-family="Helvetica, Arial, sans-serif" x="143.10702086741034"
                                                    y="304.584" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="11px" font-weight="400" fill="#373d3f"
                                                    class="apexcharts-xaxis-label apexcharts-xaxis-label"
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1143"
                                                        style="font-family: Helvetica, Arial, sans-serif;">Aug '12
                                                    </tspan>
                                                    <title>Aug '12</title>
                                                </text><text id="SvgjsText1144"
                                                    font-family="Helvetica, Arial, sans-serif" x="215.4468336135738"
                                                    y="304.584" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="11px" font-weight="400" fill="#373d3f"
                                                    class="apexcharts-xaxis-label apexcharts-xaxis-label"
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1145"
                                                        style="font-family: Helvetica, Arial, sans-serif;">Nov '12
                                                    </tspan>
                                                    <title>Nov '12</title>
                                                </text><text id="SvgjsText1146"
                                                    font-family="Helvetica, Arial, sans-serif" x="287.78664635973723"
                                                    y="304.584" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="11px" font-weight="400" fill="#373d3f"
                                                    class="apexcharts-xaxis-label apexcharts-xaxis-label"
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1147"
                                                        style="font-family: Helvetica, Arial, sans-serif;"></tspan>
                                                    <title></title>
                                                </text></g>
                                            <line id="SvgjsLine1148" x1="0" y1="276.584" x2="308.4270820617676"
                                                y2="276.584" stroke="rgba(119, 119, 142, 0.05)" stroke-dasharray="0"
                                                stroke-width="1"></line>
                                        </g>
                                        <g id="SvgjsG1159" class="apexcharts-grid">
                                            <g id="SvgjsG1160" class="apexcharts-gridlines-horizontal">
                                                <line id="SvgjsLine1166" x1="0" y1="0" x2="308.4270820617676" y2="0"
                                                    stroke="#f7f9fa" stroke-dasharray="0" class="apexcharts-gridline">
                                                </line>
                                                <line id="SvgjsLine1167" x1="0" y1="55.1168" x2="308.4270820617676"
                                                    y2="55.1168" stroke="#f7f9fa" stroke-dasharray="0"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1168" x1="0" y1="110.2336" x2="308.4270820617676"
                                                    y2="110.2336" stroke="#f7f9fa" stroke-dasharray="0"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1169" x1="0" y1="165.35039999999998"
                                                    x2="308.4270820617676" y2="165.35039999999998" stroke="#f7f9fa"
                                                    stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1170" x1="0" y1="220.4672" x2="308.4270820617676"
                                                    y2="220.4672" stroke="#f7f9fa" stroke-dasharray="0"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1171" x1="0" y1="275.584" x2="308.4270820617676"
                                                    y2="275.584" stroke="#f7f9fa" stroke-dasharray="0"
                                                    class="apexcharts-gridline"></line>
                                            </g>
                                            <g id="SvgjsG1161" class="apexcharts-gridlines-vertical"></g>
                                            <line id="SvgjsLine1162" x1="0" y1="276.584" x2="0" y2="282.584"
                                                stroke="rgba(119, 119, 142, 0.05)" stroke-dasharray="0"
                                                class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1163" x1="70.76720812124687" y1="276.584"
                                                x2="70.76720812124687" y2="282.584" stroke="rgba(119, 119, 142, 0.05)"
                                                stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1164" x1="143.10702086741034" y1="276.584"
                                                x2="143.10702086741034" y2="282.584" stroke="rgba(119, 119, 142, 0.05)"
                                                stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1165" x1="215.4468336135738" y1="276.584"
                                                x2="215.4468336135738" y2="282.584" stroke="rgba(119, 119, 142, 0.05)"
                                                stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1173" x1="0" y1="275.584" x2="308.4270820617676"
                                                y2="275.584" stroke="transparent" stroke-dasharray="0"></line>
                                            <line id="SvgjsLine1172" x1="0" y1="1" x2="0" y2="275.584"
                                                stroke="transparent" stroke-dasharray="0"></line>
                                        </g>
                                        <g id="SvgjsG1126" class="apexcharts-area-series apexcharts-plot-series">
                                            <g id="SvgjsG1127" class="apexcharts-series" seriesName="REVENUE"
                                                data:longestSeries="true" rel="1" data:realIndex="0">
                                                <path id="SvgjsPath1134"
                                                    d="M -6.0929328494309125 275.584L -6.0929328494309125 203.01354666666657C -5.818045565312823 203.01354666666657 -5.582427893211604 195.84836266666662 -5.307540609093515 195.84836266666662C -5.0323347997331105 195.84836266666662 -4.79644410599562 198.7879253333333 -4.521238296635216 198.7879253333333C -4.246032487274812 198.7879253333333 -4.010141793537322 201.17631999999992 -3.734935984176918 201.17631999999992C -2.9093185560957044 201.17631999999992 -2.2016464748832356 202.0949333333333 -1.3760290468020224 202.0949333333333C -1.100823237441618 202.0949333333333 -0.8649325437041284 203.01354666666657 -0.5897267343437239 203.01354666666657C -0.31452092498331946 203.01354666666657 -0.07863023124582982 197.68558933333327 0.19657557811457463 197.68558933333327C 0.4717813874749791 197.68558933333327 0.7076720812124686 196.7669759999999 0.9828778905728731 196.7669759999999C 1.2580836999332776 196.7669759999999 1.4939743936707672 186.4785066666666 1.7691802030311716 186.4785066666666C 2.594797631112385 186.4785066666666 3.3024697123248536 186.29478399999994 4.128087140406067 186.29478399999994C 4.403292949766471 186.29478399999994 4.639183643503961 178.5784319999999 4.9143894528643655 178.5784319999999C 5.18959526222477 178.5784319999999 5.42548595596226 181.8854399999999 5.700691765322664 181.8854399999999C 5.975897574683068 181.8854399999999 6.211788268420558 171.78069333333326 6.486994077780962 171.78069333333326C 6.762199887141367 171.78069333333326 6.9980905808788565 179.8644906666666 7.2732963902392616 179.8644906666666C 8.098913818320474 179.8644906666666 8.806585899532944 177.29237333333322 9.632203327614157 177.29237333333322C 9.907409136974561 177.29237333333322 10.143299830712051 175.63886933333333 10.418505640072455 175.63886933333333C 10.69371144943286 175.63886933333333 10.92960214317035 175.2714239999999 11.204807952530754 175.2714239999999C 11.480013761891158 175.2714239999999 11.715904455628648 167.9225173333333 11.991110264989052 167.9225173333333C 12.266316074349456 167.9225173333333 12.502206768086946 169.9434666666666 12.77741257744735 169.9434666666666C 13.878235814888967 169.9434666666666 14.821798589838927 173.80164266666657 15.922621827280544 173.80164266666657C 16.197827636640948 173.80164266666657 16.43371833037844 177.65981866666664 16.708924139738844 177.65981866666664C 16.98412994909925 177.65981866666664 17.220020642836737 165.901568 17.49522645219714 165.901568C 17.770432261557545 165.901568 18.006322955295037 157.81777066666666 18.28152876465544 157.81777066666666C 19.107146192736653 157.81777066666666 19.814818273949122 160.38988799999981 20.640435702030334 160.38988799999981C 20.91564151139074 160.38988799999981 21.15153220512823 160.38988799999981 21.426738014488635 160.38988799999981C 21.70194382384904 160.38988799999981 21.937834517586527 167.37134933333323 22.21304032694693 167.37134933333323C 22.488246136307335 167.37134933333323 22.724136830044827 163.51317333333327 22.99934263940523 163.51317333333327C 23.274548448765636 163.51317333333327 23.510439142503127 151.93864533333328 23.78564495186353 151.93864533333328C 24.611262379944744 151.93864533333328 25.318934461157212 161.3085013333333 26.144551889238425 161.3085013333333C 26.41975769859883 161.3085013333333 26.65564839233632 183.90638933333332 26.930854201696725 183.90638933333332C 27.20606001105713 183.90638933333332 27.441950704794618 176.1900373333333 27.717156514155022 176.1900373333333C 27.992362323515426 176.1900373333333 28.228253017252918 164.43178666666665 28.503458826613322 164.43178666666665C 28.778664635973726 164.43178666666665 29.014555329711214 153.59214933333328 29.28976113907162 153.59214933333328C 30.11537856715283 153.59214933333328 30.823050648365303 155.0619306666665 31.648668076446516 155.0619306666665C 31.92387388580692 155.0619306666665 32.15976457954441 142.93623466666656 32.434970388904816 142.93623466666656C 32.710176198265216 142.93623466666656 32.94606689200271 151.20375466666655 33.22127270136311 151.20375466666655C 33.49647851072351 151.20375466666655 33.73236920446101 143.85484799999983 34.00757501382141 143.85484799999983C 34.28278082318181 143.85484799999983 34.518671516919305 150.28514133333329 34.793877326279706 150.28514133333329C 35.61949475436092 150.28514133333329 36.32716683557339 137.60827733333326 37.1527842636546 137.60827733333326C 37.42799007301501 137.60827733333326 37.6638807667525 162.41083733333335 37.939086576112906 162.41083733333335C 38.21429238547331 162.41083733333335 38.4501830792108 155.0619306666665 38.7253888885712 155.0619306666665C 39.000594697931604 155.0619306666665 39.2364853916691 152.3060906666666 39.5116912010295 152.3060906666666C 39.7868970103899 152.3060906666666 40.022787704127396 150.46886399999983 40.297993513487796 150.46886399999983C 41.11214403284566 150.46886399999983 41.8099873351524 139.62922666666657 42.624137854510266 139.62922666666657C 42.89934366387067 139.62922666666657 43.13523435760816 135.4036053333332 43.41044016696856 135.4036053333332C 43.68564597632896 135.4036053333332 43.92153667006646 138.52689066666653 44.19674247942686 138.52689066666653C 44.47194828878727 138.52689066666653 44.707838982524756 138.15944533333334 44.98304479188516 138.15944533333334C 45.258250601245564 138.15944533333334 45.49414129498306 141.28273066666657 45.76934710434346 141.28273066666657C 46.594964532424676 141.28273066666657 47.30263661363714 134.1175466666665 48.12825404171836 134.1175466666665C 48.40345985107876 134.1175466666665 48.63935054481625 141.28273066666657 48.91455635417665 141.28273066666657C 49.189762163537054 141.28273066666657 49.42565285727455 156.89915733333328 49.70085866663495 156.89915733333328C 49.97606447599535 156.89915733333328 50.211955169732846 154.51076266666655 50.48716097909325 154.51076266666655C 51.58798421653486 154.51076266666655 52.53154699148483 161.3085013333333 53.63237022892645 161.3085013333333C 53.90757603828685 161.3085013333333 54.14346673202434 172.51558399999988 54.418672541384744 172.51558399999988C 54.693878350745145 172.51558399999988 54.92976904448264 165.16667733333327 55.20497485384304 165.16667733333327C 55.48018066320344 165.16667733333327 55.71607135694094 155.24565333333328 55.99127716630134 155.24565333333328C 56.266482975661745 155.24565333333328 56.50237366939923 162.04339199999993 56.77757947875964 162.04339199999993C 57.60319690684085 162.04339199999993 58.31086898805332 168.2899626666665 59.13648641613453 168.2899626666665C 59.41169222549494 168.2899626666665 59.64758291923243 149.91769599999986 59.922788728592835 149.91769599999986C 60.197994537953235 149.91769599999986 60.43388523169073 158.18521599999985 60.70909104105113 158.18521599999985C 60.98429685041153 158.18521599999985 61.22018754414903 167.00390400000003 61.49539335350943 167.00390400000003C 61.77059916286983 167.00390400000003 62.006489856607324 164.24806399999989 62.281695665967725 164.24806399999989C 63.10731309404894 164.24806399999989 63.81498517526141 172.33186133333334 64.64060260334263 172.33186133333334C 64.91580841270303 172.33186133333334 65.15169910644052 176.37375999999995 65.42690491580092 176.37375999999995C 65.70211072516132 176.37375999999995 65.93800141889882 162.9620053333332 66.21320722825922 162.9620053333332C 66.48841303761962 162.9620053333332 66.72430373135713 160.57361066666658 66.99950954071753 160.57361066666658C 67.27471535007793 160.57361066666658 67.51060604381541 154.69448533333332 67.78581185317582 154.69448533333332C 68.61142928125703 154.69448533333332 69.3191013624695 155.24565333333328 70.14471879055071 155.24565333333328C 70.41992459991111 155.24565333333328 70.65581529364862 151.20375466666655 70.93102110300902 151.20375466666655C 71.20622691236942 151.20375466666655 71.4421176061069 151.38747733333332 71.7173234154673 151.38747733333332C 71.9925292248277 151.38747733333332 72.22841991856521 159.47127466666655 72.50362572792561 159.47127466666655C 72.77883153728601 159.47127466666655 73.01472223102351 172.51558399999988 73.28992804038391 172.51558399999988C 74.11554546846511 172.51558399999988 74.8232175496776 174.16908799999987 75.6488349777588 174.16908799999987C 75.9240407871192 174.16908799999987 76.1599314808567 171.41324799999984 76.4351372902171 171.41324799999984C 76.7103430995775 171.41324799999984 76.946233793315 174.16908799999987 77.2214396026754 174.16908799999987C 77.4966454120358 174.16908799999987 77.73253610577329 185.1924479999999 78.00774191513369 185.1924479999999C 78.2829477244941 185.1924479999999 78.5188384182316 180.04821333333325 78.794044227592 180.04821333333325C 79.61966165567321 180.04821333333325 80.32733373688568 179.4970453333333 81.1529511649669 179.4970453333333C 81.4281569743273 179.4970453333333 81.6640476680648 177.65981866666664 81.9392534774252 177.65981866666664C 82.2144592867856 177.65981866666664 82.45034998052309 177.10865066666656 82.72555578988349 177.10865066666656C 83.00076159924389 177.10865066666656 83.23665229298139 183.5389439999999 83.51185810234179 183.5389439999999C 83.78706391170219 183.5389439999999 84.02295460543968 196.39953066666658 84.29816041480008 196.39953066666658C 85.1237778428813 196.39953066666658 85.83144992409376 183.5389439999999 86.65706735217498 183.5389439999999C 86.93227316153538 183.5389439999999 87.16816385527288 183.5389439999999 87.44336966463328 183.5389439999999C 87.71857547399368 183.5389439999999 87.95446616773118 180.41565866666656 88.22967197709158 180.41565866666656C 88.50487778645198 180.41565866666656 88.74076848018947 192.1739093333333 89.01597428954987 192.1739093333333C 89.29118009891027 192.1739093333333 89.52707079264778 191.07157333333328 89.80227660200818 191.07157333333328C 90.9030998394498 191.07157333333328 91.84666261439975 182.8040533333333 92.94748585184136 182.8040533333333C 93.22269166120176 182.8040533333333 93.45858235493927 196.7669759999999 93.73378816429967 196.7669759999999C 94.00899397366007 196.7669759999999 94.24488466739757 201.17631999999992 94.52009047675797 201.17631999999992C 94.79529628611837 201.17631999999992 95.03118697985586 223.77420799999993 95.30639278921626 223.77420799999993C 96.13201021729748 223.77420799999993 96.83968229850994 214.77179733333332 97.66529972659116 214.77179733333332C 97.94050553595156 214.77179733333332 98.17639622968906 207.60661333333326 98.45160203904946 207.60661333333326C 98.72680784840986 207.60661333333326 98.96269854214735 189.41806933333328 99.23790435150775 189.41806933333328C 99.51311016086815 189.41806933333328 99.74900085460565 196.21580799999992 100.02420666396605 196.21580799999992C 100.29941247332646 196.21580799999992 100.53530316706396 190.1529599999999 100.81050897642436 190.1529599999999C 101.63612640450557 190.1529599999999 102.34379848571804 199.70653866666657 103.16941591379926 199.70653866666657C 103.44462172315966 199.70653866666657 103.68051241689714 187.94828799999993 103.95571822625755 187.94828799999993C 104.23092403561795 187.94828799999993 104.46681472935545 187.58084266666663 104.74202053871585 187.58084266666663C 105.01722634807625 187.58084266666663 105.25311704181375 189.7855146666666 105.52832285117415 189.7855146666666C 105.80352866053455 189.7855146666666 106.03941935427204 176.5574826666666 106.31462516363244 176.5574826666666C 107.14024259171366 176.5574826666666 107.84791467292612 172.14813866666657 108.67353210100734 172.14813866666657C 108.94873791036774 172.14813866666657 109.18462860410524 167.37134933333323 109.45983441346564 167.37134933333323C 109.73504022282604 167.37134933333323 109.97093091656353 183.90638933333332 110.24613672592393 183.90638933333332C 110.52134253528433 183.90638933333332 110.75723322902184 197.86931199999992 111.03243903838224 197.86931199999992C 111.30764484774264 197.86931199999992 111.54353554148014 191.62274133333324 111.81874135084054 191.62274133333324C 112.64435877892174 191.62274133333324 113.35203086013422 205.03449599999988 114.17764828821542 205.03449599999988C 114.45285409757582 205.03449599999988 114.68874479131333 200.8088746666666 114.96395060067373 200.8088746666666C 115.23915641003413 200.8088746666666 115.47504710377163 194.56230399999993 115.75025291313203 194.56230399999993C 116.02545872249243 194.56230399999993 116.26134941622992 198.97164799999985 116.53655522559032 198.97164799999985C 116.81176103495072 198.97164799999985 117.04765172868822 176.92492800000002 117.32285753804862 176.92492800000002C 118.14847496612984 176.92492800000002 118.8561470473423 180.23193600000002 119.68176447542352 180.23193600000002C 119.95697028478392 180.23193600000002 120.19286097852142 174.35281066666664 120.46806678788182 174.35281066666664C 121.01847840660263 174.35281066666664 121.49025979407762 173.98536533333322 122.04067141279842 173.98536533333322C 122.31587722215882 173.98536533333322 122.5517679158963 195.29719466666654 122.8269737252567 195.29719466666654C 123.65259115333792 195.29719466666654 124.36026323455039 212.56712533333325 125.1858806626316 212.56712533333325C 125.461086471992 212.56712533333325 125.6969771657295 212.3834026666666 125.97218297508991 212.3834026666666C 126.24738878445031 212.3834026666666 126.48327947818781 216.79274666666663 126.75848528754821 216.79274666666663C 127.03369109690861 216.79274666666663 127.2695817906461 217.89508266666655 127.5447876000065 217.89508266666655C 127.8199934093669 217.89508266666655 128.05588410310438 208.52522666666664 128.3310899124648 208.52522666666664C 129.156707340546 208.52522666666664 129.86437942175849 213.11829333333333 130.6899968498397 213.11829333333333C 130.96520265920012 213.11829333333333 131.2010933529376 208.52522666666664 131.476299162298 208.52522666666664C 131.75150497165842 208.52522666666664 131.9873956653959 194.19485866666662 132.2626014747563 194.19485866666662C 132.5378072841167 194.19485866666662 132.7736979778542 185.74361599999986 133.04890378721458 185.74361599999986C 133.324109596575 185.74361599999986 133.56000029031247 195.1134719999999 133.8352060996729 195.1134719999999C 134.6608235277541 195.1134719999999 135.36849560896658 208.7089493333333 136.1941130370478 208.7089493333333C 136.46931884640819 208.7089493333333 136.7052095401457 220.09975466666663 136.98041534950607 220.09975466666663C 137.2556211588665 220.09975466666663 137.49151185260396 214.4043519999999 137.76671766196438 214.4043519999999C 138.0419234713248 214.4043519999999 138.27781416506227 203.01354666666657 138.55301997442268 203.01354666666657C 138.8282257837831 203.01354666666657 139.06411647752057 185.74361599999986 139.33932228688099 185.74361599999986C 140.1649397149622 185.74361599999986 140.87261179617465 201.91121066666653 141.69822922425587 201.91121066666653C 141.97343503361628 201.91121066666653 142.20932572735376 204.29960533333326 142.48453153671417 204.29960533333326C 142.7597373460746 204.29960533333326 142.99562803981206 207.7903359999999 143.27083384917248 207.7903359999999C 143.5460396585329 207.7903359999999 143.78193035227036 209.81128533333333 144.05713616163078 209.81128533333333C 144.3323419709912 209.81128533333333 144.56823266472867 183.35522133333325 144.84343847408908 183.35522133333325C 145.6690559021703 183.35522133333325 146.37672798338275 181.1505493333333 147.20234541146397 181.1505493333333C 147.47755122082438 181.1505493333333 147.71344191456186 176.92492800000002 147.98864772392227 176.92492800000002C 148.26385353328268 176.92492800000002 148.49974422702016 174.35281066666664 148.77495003638057 174.35281066666664C 149.05015584574096 174.35281066666664 149.28604653947846 171.78069333333326 149.56125234883885 171.78069333333326C 149.83645815819926 171.78069333333326 150.07234885193674 171.96441599999991 150.34755466129715 171.96441599999991C 151.17317208937837 171.96441599999991 151.88084417059085 178.76215466666656 152.70646159867206 178.76215466666656C 152.98166740803248 178.76215466666656 153.21755810176995 181.8854399999999 153.49276391113037 181.8854399999999C 153.76796972049075 181.8854399999999 154.00386041422826 167.00390400000003 154.27906622358864 167.00390400000003C 154.55427203294906 167.00390400000003 154.79016272668653 153.40842666666663 155.06536853604695 153.40842666666663C 155.34057434540736 153.40842666666663 155.57646503914484 150.6525866666666 155.85167084850525 150.6525866666666C 156.67728827658647 150.6525866666666 157.38496035779892 148.44791466666652 158.21057778588013 148.44791466666652C 158.48578359524055 148.44791466666652 158.72167428897802 151.57119999999998 158.99688009833844 151.57119999999998C 159.27208590769885 151.57119999999998 159.50797660143633 149.91769599999986 159.78318241079674 149.91769599999986C 160.05838822015716 149.91769599999986 160.29427891389463 156.16426666666655 160.56948472325504 156.16426666666655C 160.84469053261546 156.16426666666655 161.08058122635293 178.94587733333333 161.35578703571335 178.94587733333333C 162.18140446379456 178.94587733333333 162.88907654500701 177.8435413333333 163.71469397308823 177.8435413333333C 163.98989978244865 177.8435413333333 164.22579047618612 182.62033066666652 164.50099628554653 182.62033066666652C 164.77620209490695 182.62033066666652 165.01209278864442 184.45755733333328 165.28729859800484 184.45755733333328C 165.56250440736525 184.45755733333328 165.79839510110273 193.64369066666654 166.07360091046314 193.64369066666654C 166.34880671982353 193.64369066666654 166.58469741356103 197.1344213333333 166.85990322292142 197.1344213333333C 167.96072646036305 197.1344213333333 168.904289235313 194.19485866666662 170.00511247275463 194.19485866666662C 170.28031828211505 194.19485866666662 170.51620897585252 178.94587733333333 170.79141478521294 178.94587733333333C 171.06662059457332 178.94587733333333 171.30251128831082 169.20857599999988 171.5777170976712 169.20857599999988C 171.85292290703163 169.20857599999988 172.0888136007691 175.2714239999999 172.36401941012952 175.2714239999999C 173.18963683821073 175.2714239999999 173.8973089194232 181.33427199999983 174.72292634750443 181.33427199999983C 174.9981321568648 181.33427199999983 175.23402285060232 175.82259199999987 175.5092286599627 175.82259199999987C 175.78443446932312 175.82259199999987 176.0203251630606 176.00631466666653 176.295530972421 176.00631466666653C 176.57073678178142 176.00631466666653 176.8066274755189 168.84113066666657 177.0818332848793 168.84113066666657C 177.35703909423972 168.84113066666657 177.5929297879772 159.10382933333324 177.8681355973376 159.10382933333324C 178.69375302541883 159.10382933333324 179.40142510663128 157.81777066666666 180.2270425347125 157.81777066666666C 180.5022483440729 157.81777066666666 180.73813903781038 173.2504746666666 181.0133448471708 173.2504746666666C 181.2885506565312 173.2504746666666 181.5244413502687 163.14572799999996 181.7996471596291 163.14572799999996C 182.07485296898952 163.14572799999996 182.310743662727 137.24083199999995 182.5859494720874 137.24083199999995C 182.86115528144782 137.24083199999995 183.0970459751853 150.10141866666663 183.3722517845457 150.10141866666663C 184.19786921262693 150.10141866666663 184.90554129383938 157.81777066666666 185.7311587219206 157.81777066666666C 186.006364531281 157.81777066666666 186.24225522501848 167.18762666666657 186.5174610343789 167.18762666666657C 186.7926668437393 167.18762666666657 187.0285575374768 173.98536533333322 187.3037633468372 173.98536533333322C 187.5789691561976 173.98536533333322 187.8148598499351 169.02485333333334 188.09006565929548 169.02485333333334C 188.3652714686559 169.02485333333334 188.60116216239336 175.63886933333333 188.87636797175378 175.63886933333333C 189.701985399835 175.63886933333333 190.40965748104747 172.33186133333334 191.2352749091287 172.33186133333334C 191.5104807184891 172.33186133333334 191.74637141222658 173.2504746666666 192.021577221587 173.2504746666666C 192.29678303094738 173.2504746666666 192.53267372468488 172.69930666666653 192.80787953404527 172.69930666666653C 193.08308534340568 172.69930666666653 193.31897603714316 171.2295253333333 193.59418184650357 171.2295253333333C 193.869387655864 171.2295253333333 194.10527834960146 175.08770133333326 194.38048415896188 175.08770133333326C 195.2061015870431 175.08770133333326 195.91377366825554 179.4970453333333 196.73939109633676 179.4970453333333C 197.01459690569718 179.4970453333333 197.25048759943465 189.60179199999993 197.52569340879506 189.60179199999993C 197.80089921815548 189.60179199999993 198.03678991189295 192.72507733333327 198.31199572125337 192.72507733333327C 198.58720153061378 192.72507733333327 198.82309222435126 187.76456533333328 199.09829803371167 187.76456533333328C 199.3735038430721 187.76456533333328 199.60939453680956 184.8250026666666 199.88460034616998 184.8250026666666C 200.7102177742512 184.8250026666666 201.41788985546364 177.65981866666664 202.24350728354486 177.65981866666664C 202.51871309290527 177.65981866666664 202.75460378664275 160.9410559999999 203.02980959600316 160.9410559999999C 203.30501540536358 160.9410559999999 203.54090609910105 157.26660266666659 203.81611190846147 157.26660266666659C 204.09131771782188 157.26660266666659 204.32720841155935 156.53171199999997 204.60241422091977 156.53171199999997C 204.87762003028016 156.53171199999997 205.11351072401766 160.9410559999999 205.38871653337804 160.9410559999999C 206.21433396145926 160.9410559999999 206.92200604267174 156.3479893333332 207.74762347075296 156.3479893333332C 208.02282928011337 156.3479893333332 208.25871997385084 159.6549973333332 208.53392578321126 159.6549973333332C 208.80913159257165 159.6549973333332 209.04502228630915 158.73638399999993 209.32022809566953 158.73638399999993C 209.59543390502995 158.73638399999993 209.83132459876742 158.00149333333331 210.10653040812784 158.00149333333331C 210.38173621748825 158.00149333333331 210.61762691122573 146.79441066666664 210.89283272058614 146.79441066666664C 212.2803286761115 146.79441066666664 213.4696109237047 146.61068799999987 214.85710687923006 146.61068799999987C 215.13231268859047 146.61068799999987 215.36820338232795 140.3641173333333 215.64340919168836 140.3641173333333C 215.91861500104878 140.3641173333333 216.15450569478625 139.81294933333322 216.42971150414667 139.81294933333322C 217.25532893222788 139.81294933333322 217.96300101344033 142.56878933333326 218.78861844152155 142.56878933333326C 219.06382425088196 142.56878933333326 219.29971494461944 139.81294933333322 219.57492075397985 139.81294933333322C 219.85012656334027 139.81294933333322 220.08601725707774 156.71543466666662 220.36122306643816 156.71543466666662C 220.63642887579857 156.71543466666662 220.87231956953605 165.71784533333334 221.14752537889646 165.71784533333334C 221.42273118825688 165.71784533333334 221.65862188199435 167.18762666666657 221.93382769135476 167.18762666666657C 222.75944511943598 167.18762666666657 223.46711720064843 170.86207999999988 224.29273462872965 170.86207999999988C 224.56794043809006 170.86207999999988 224.80383113182754 173.80164266666657 225.07903694118795 173.80164266666657C 225.35424275054837 173.80164266666657 225.59013344428584 179.4970453333333 225.86533925364625 179.4970453333333C 226.14054506300667 179.4970453333333 226.37643575674414 171.96441599999991 226.65164156610456 171.96441599999991C 226.92684737546494 171.96441599999991 227.16273806920245 171.78069333333326 227.43794387856283 171.78069333333326C 228.26356130664405 171.78069333333326 228.97123338785653 166.82018133333327 229.79685081593774 166.82018133333327C 230.07205662529816 166.82018133333327 230.30794731903563 171.96441599999991 230.58315312839605 171.96441599999991C 230.85835893775644 171.96441599999991 231.09424963149394 168.2899626666665 231.36945544085432 168.2899626666665C 231.91986705957513 168.2899626666665 232.39164844705013 158.00149333333331 232.94206006577093 158.00149333333331C 233.76767749385215 158.00149333333331 234.47534957506463 159.83871999999997 235.30096700314584 159.83871999999997C 235.57617281250623 159.83871999999997 235.81206350624373 162.04339199999993 236.08726931560412 162.04339199999993C 236.36247512496453 162.04339199999993 236.598365818702 149.18280533333325 236.87357162806242 149.18280533333325C 237.14877743742284 149.18280533333325 237.3846681311603 145.32462933333318 237.65987394052073 145.32462933333318C 237.93507974988114 145.32462933333318 238.17097044361861 135.7710506666666 238.44617625297903 135.7710506666666C 239.27179368106025 135.7710506666666 239.9794657622727 134.1175466666665 240.8050831903539 134.1175466666665C 241.08028899971433 134.1175466666665 241.3161796934518 123.09418666666659 241.59138550281222 123.09418666666659C 241.86659131217263 123.09418666666659 242.1024820059101 121.25695999999994 242.37768781527052 121.25695999999994C 242.65289362463093 121.25695999999994 242.8887843183684 126.03374933333328 243.16399012772882 126.03374933333328C 243.4391959370892 126.03374933333328 243.6750866308267 119.78717866666659 243.9502924401871 119.78717866666659C 244.77590986826831 119.78717866666659 245.4835819494808 114.8266666666666 246.309199377562 114.8266666666666C 246.58440518692242 114.8266666666666 246.8202958806599 118.68484266666655 247.0955016900203 118.68484266666655C 247.37070749938073 118.68484266666655 247.6065981931182 110.96849066666653 247.88180400247862 110.96849066666653C 248.157009811839 110.96849066666653 248.3929005055765 118.86856533333321 248.6681063149369 118.86856533333321C 248.9433121242973 118.86856533333321 249.17920281803478 81.57286399999987 249.4544086273952 81.57286399999987C 250.2800260554764 81.57286399999987 250.9876981366889 84.14498133333325 251.8133155647701 84.14498133333325C 252.0885213741305 84.14498133333325 252.324412067868 82.85892266666656 252.59961787722838 82.85892266666656C 252.8748236865888 82.85892266666656 253.11071438032627 71.83556266666653 253.3859201896867 71.83556266666653C 253.6611259990471 71.83556266666653 253.89701669278458 75.87746133333326 254.172222502145 75.87746133333326C 254.4474283115054 75.87746133333326 254.68331900524288 78.81702399999995 254.9585248146033 78.81702399999995C 255.7841422426845 78.81702399999995 256.49181432389696 82.12403199999994 257.3174317519782 82.12403199999994C 257.867843370699 82.12403199999994 258.33962475817395 81.75658666666664 258.8900363768948 81.75658666666664C 259.16524218625517 81.75658666666664 259.4011328799927 86.34965333333332 259.6763386893531 86.34965333333332C 259.9515444987135 86.34965333333332 260.187435192451 93.69855999999993 260.4626410018114 93.69855999999993C 261.2882584298926 93.69855999999993 261.9959305111051 79.36819199999991 262.8215479391863 79.36819199999991C 263.3719595579071 79.36819199999991 263.8437409453821 67.24249599999985 264.39415256410285 67.24249599999985C 264.66935837346324 67.24249599999985 264.90524906720077 78.08213333333322 265.18045487656116 78.08213333333322C 265.45566068592154 78.08213333333322 265.6915513796591 71.10067199999992 265.96675718901946 71.10067199999992C 266.7923746171007 71.10067199999992 267.50004669831316 74.59140266666668 268.3256641263944 74.59140266666668C 268.60086993575476 74.59140266666668 268.8367606294923 70.91694933333326 269.1119664388527 70.91694933333326C 269.38717224821306 70.91694933333326 269.6230629419506 61.3633706666667 269.898268751311 61.3633706666667C 270.17347456067137 61.3633706666667 270.4093652544089 62.09826133333331 270.6845710637693 62.09826133333331C 270.95977687312967 62.09826133333331 271.1956675668672 71.83556266666653 271.4708733762276 71.83556266666653C 272.2964908043088 71.83556266666653 273.0041628855212 70.54950399999996 273.82978031360244 70.54950399999996C 274.1049861229628 70.54950399999996 274.34087681670036 70.73322666666661 274.61608262606075 70.73322666666661C 274.89128843542113 70.73322666666661 275.12717912915866 75.69373866666649 275.40238493851905 75.69373866666649C 275.67759074787944 75.69373866666649 275.91348144161697 78.44957866666664 276.18868725097735 78.44957866666664C 276.46389306033774 78.44957866666664 276.69978375407527 73.85651199999995 276.97498956343566 73.85651199999995C 278.07581280087726 73.85651199999995 279.01937557582727 74.40767999999991 280.12019881326887 74.40767999999991C 280.39540462262926 74.40767999999991 280.63129531636673 68.89599999999996 280.9065011257271 68.89599999999996C 281.1817069350875 68.89599999999996 281.41759762882504 71.65183999999988 281.6928034381854 71.65183999999988C 281.9680092475458 71.65183999999988 282.20389994128334 67.60994133333327 282.4791057506437 67.60994133333327C 283.30472317872494 67.60994133333327 284.0123952599374 69.0797226666665 284.83801268801864 69.0797226666665C 285.113218497379 69.0797226666665 285.34910919111655 63.93548799999985 285.62431500047694 63.93548799999985C 285.8995208098373 63.93548799999985 286.13541150357486 74.59140266666668 286.41061731293524 74.59140266666668C 286.68582312229563 74.59140266666668 286.92171381603316 76.61235199999999 287.19691962539355 76.61235199999999C 287.47212543475393 76.61235199999999 287.70801612849147 67.24249599999985 287.98322193785185 67.24249599999985C 288.80883936593307 67.24249599999985 289.5165114471455 71.65183999999988 290.3421288752267 71.65183999999988C 290.6173346845871 71.65183999999988 290.8532253783246 64.11921066666662 291.128431187685 64.11921066666662C 291.4036369970454 64.11921066666662 291.6395276907829 66.14015999999992 291.9147335001433 66.14015999999992C 292.1899393095037 66.14015999999992 292.42583000324123 72.20300799999995 292.7010358126016 72.20300799999995C 292.976241621962 72.20300799999995 293.21213231569953 52.91212799999994 293.4873381250599 52.91212799999994C 294.31295555314114 52.91212799999994 295.0206276343536 61.73081599999989 295.84624506243483 61.73081599999989C 296.1214508717952 61.73081599999989 296.35734156553275 57.137749333333204 296.63254737489314 57.137749333333204C 296.9077531842535 57.137749333333204 297.143643877991 58.60753066666655 297.4188496873514 58.60753066666655C 297.69405549671177 58.60753066666655 297.9299461904493 62.281983999999966 298.2051519998097 62.281983999999966C 298.4803578091701 62.281983999999966 298.7162485029076 61.914538666666544 298.991454312268 61.914538666666544C 300.0922775497096 61.914538666666544 301.0358403246596 55.30052266666655 302.1366635621012 55.30052266666655C 302.4118693714616 55.30052266666655 302.6477600651991 59.342421333333164 302.9229658745595 59.342421333333164C 303.1981716839199 59.342421333333164 303.4340623776574 67.24249599999985 303.7092681870178 67.24249599999985C 303.9844739963782 67.24249599999985 304.22036469011573 63.38432 304.4955704994761 63.38432C 305.32118792755733 63.38432 306.02886000876975 71.46811733333323 306.85447743685097 71.46811733333323C 307.12968324621136 71.46811733333323 307.3655739399489 62.64942933333316 307.6407797493093 62.64942933333316C 307.91598555866966 62.64942933333316 308.1518762524072 44.09343999999987 308.4270820617676 44.09343999999987C 308.4270820617676 44.09343999999987 308.4270820617676 44.09343999999987 308.4270820617676 275.584M 308.4270820617676 44.09343999999987z"
                                                    fill="url(#SvgjsLinearGradient1130)" fill-opacity="1"
                                                    stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                    stroke-dasharray="0" class="apexcharts-area" index="0"
                                                    clip-path="url(#gridRectMask2ufi2hjn)"
                                                    pathTo="M -6.0929328494309125 275.584L -6.0929328494309125 203.01354666666657C -5.818045565312823 203.01354666666657 -5.582427893211604 195.84836266666662 -5.307540609093515 195.84836266666662C -5.0323347997331105 195.84836266666662 -4.79644410599562 198.7879253333333 -4.521238296635216 198.7879253333333C -4.246032487274812 198.7879253333333 -4.010141793537322 201.17631999999992 -3.734935984176918 201.17631999999992C -2.9093185560957044 201.17631999999992 -2.2016464748832356 202.0949333333333 -1.3760290468020224 202.0949333333333C -1.100823237441618 202.0949333333333 -0.8649325437041284 203.01354666666657 -0.5897267343437239 203.01354666666657C -0.31452092498331946 203.01354666666657 -0.07863023124582982 197.68558933333327 0.19657557811457463 197.68558933333327C 0.4717813874749791 197.68558933333327 0.7076720812124686 196.7669759999999 0.9828778905728731 196.7669759999999C 1.2580836999332776 196.7669759999999 1.4939743936707672 186.4785066666666 1.7691802030311716 186.4785066666666C 2.594797631112385 186.4785066666666 3.3024697123248536 186.29478399999994 4.128087140406067 186.29478399999994C 4.403292949766471 186.29478399999994 4.639183643503961 178.5784319999999 4.9143894528643655 178.5784319999999C 5.18959526222477 178.5784319999999 5.42548595596226 181.8854399999999 5.700691765322664 181.8854399999999C 5.975897574683068 181.8854399999999 6.211788268420558 171.78069333333326 6.486994077780962 171.78069333333326C 6.762199887141367 171.78069333333326 6.9980905808788565 179.8644906666666 7.2732963902392616 179.8644906666666C 8.098913818320474 179.8644906666666 8.806585899532944 177.29237333333322 9.632203327614157 177.29237333333322C 9.907409136974561 177.29237333333322 10.143299830712051 175.63886933333333 10.418505640072455 175.63886933333333C 10.69371144943286 175.63886933333333 10.92960214317035 175.2714239999999 11.204807952530754 175.2714239999999C 11.480013761891158 175.2714239999999 11.715904455628648 167.9225173333333 11.991110264989052 167.9225173333333C 12.266316074349456 167.9225173333333 12.502206768086946 169.9434666666666 12.77741257744735 169.9434666666666C 13.878235814888967 169.9434666666666 14.821798589838927 173.80164266666657 15.922621827280544 173.80164266666657C 16.197827636640948 173.80164266666657 16.43371833037844 177.65981866666664 16.708924139738844 177.65981866666664C 16.98412994909925 177.65981866666664 17.220020642836737 165.901568 17.49522645219714 165.901568C 17.770432261557545 165.901568 18.006322955295037 157.81777066666666 18.28152876465544 157.81777066666666C 19.107146192736653 157.81777066666666 19.814818273949122 160.38988799999981 20.640435702030334 160.38988799999981C 20.91564151139074 160.38988799999981 21.15153220512823 160.38988799999981 21.426738014488635 160.38988799999981C 21.70194382384904 160.38988799999981 21.937834517586527 167.37134933333323 22.21304032694693 167.37134933333323C 22.488246136307335 167.37134933333323 22.724136830044827 163.51317333333327 22.99934263940523 163.51317333333327C 23.274548448765636 163.51317333333327 23.510439142503127 151.93864533333328 23.78564495186353 151.93864533333328C 24.611262379944744 151.93864533333328 25.318934461157212 161.3085013333333 26.144551889238425 161.3085013333333C 26.41975769859883 161.3085013333333 26.65564839233632 183.90638933333332 26.930854201696725 183.90638933333332C 27.20606001105713 183.90638933333332 27.441950704794618 176.1900373333333 27.717156514155022 176.1900373333333C 27.992362323515426 176.1900373333333 28.228253017252918 164.43178666666665 28.503458826613322 164.43178666666665C 28.778664635973726 164.43178666666665 29.014555329711214 153.59214933333328 29.28976113907162 153.59214933333328C 30.11537856715283 153.59214933333328 30.823050648365303 155.0619306666665 31.648668076446516 155.0619306666665C 31.92387388580692 155.0619306666665 32.15976457954441 142.93623466666656 32.434970388904816 142.93623466666656C 32.710176198265216 142.93623466666656 32.94606689200271 151.20375466666655 33.22127270136311 151.20375466666655C 33.49647851072351 151.20375466666655 33.73236920446101 143.85484799999983 34.00757501382141 143.85484799999983C 34.28278082318181 143.85484799999983 34.518671516919305 150.28514133333329 34.793877326279706 150.28514133333329C 35.61949475436092 150.28514133333329 36.32716683557339 137.60827733333326 37.1527842636546 137.60827733333326C 37.42799007301501 137.60827733333326 37.6638807667525 162.41083733333335 37.939086576112906 162.41083733333335C 38.21429238547331 162.41083733333335 38.4501830792108 155.0619306666665 38.7253888885712 155.0619306666665C 39.000594697931604 155.0619306666665 39.2364853916691 152.3060906666666 39.5116912010295 152.3060906666666C 39.7868970103899 152.3060906666666 40.022787704127396 150.46886399999983 40.297993513487796 150.46886399999983C 41.11214403284566 150.46886399999983 41.8099873351524 139.62922666666657 42.624137854510266 139.62922666666657C 42.89934366387067 139.62922666666657 43.13523435760816 135.4036053333332 43.41044016696856 135.4036053333332C 43.68564597632896 135.4036053333332 43.92153667006646 138.52689066666653 44.19674247942686 138.52689066666653C 44.47194828878727 138.52689066666653 44.707838982524756 138.15944533333334 44.98304479188516 138.15944533333334C 45.258250601245564 138.15944533333334 45.49414129498306 141.28273066666657 45.76934710434346 141.28273066666657C 46.594964532424676 141.28273066666657 47.30263661363714 134.1175466666665 48.12825404171836 134.1175466666665C 48.40345985107876 134.1175466666665 48.63935054481625 141.28273066666657 48.91455635417665 141.28273066666657C 49.189762163537054 141.28273066666657 49.42565285727455 156.89915733333328 49.70085866663495 156.89915733333328C 49.97606447599535 156.89915733333328 50.211955169732846 154.51076266666655 50.48716097909325 154.51076266666655C 51.58798421653486 154.51076266666655 52.53154699148483 161.3085013333333 53.63237022892645 161.3085013333333C 53.90757603828685 161.3085013333333 54.14346673202434 172.51558399999988 54.418672541384744 172.51558399999988C 54.693878350745145 172.51558399999988 54.92976904448264 165.16667733333327 55.20497485384304 165.16667733333327C 55.48018066320344 165.16667733333327 55.71607135694094 155.24565333333328 55.99127716630134 155.24565333333328C 56.266482975661745 155.24565333333328 56.50237366939923 162.04339199999993 56.77757947875964 162.04339199999993C 57.60319690684085 162.04339199999993 58.31086898805332 168.2899626666665 59.13648641613453 168.2899626666665C 59.41169222549494 168.2899626666665 59.64758291923243 149.91769599999986 59.922788728592835 149.91769599999986C 60.197994537953235 149.91769599999986 60.43388523169073 158.18521599999985 60.70909104105113 158.18521599999985C 60.98429685041153 158.18521599999985 61.22018754414903 167.00390400000003 61.49539335350943 167.00390400000003C 61.77059916286983 167.00390400000003 62.006489856607324 164.24806399999989 62.281695665967725 164.24806399999989C 63.10731309404894 164.24806399999989 63.81498517526141 172.33186133333334 64.64060260334263 172.33186133333334C 64.91580841270303 172.33186133333334 65.15169910644052 176.37375999999995 65.42690491580092 176.37375999999995C 65.70211072516132 176.37375999999995 65.93800141889882 162.9620053333332 66.21320722825922 162.9620053333332C 66.48841303761962 162.9620053333332 66.72430373135713 160.57361066666658 66.99950954071753 160.57361066666658C 67.27471535007793 160.57361066666658 67.51060604381541 154.69448533333332 67.78581185317582 154.69448533333332C 68.61142928125703 154.69448533333332 69.3191013624695 155.24565333333328 70.14471879055071 155.24565333333328C 70.41992459991111 155.24565333333328 70.65581529364862 151.20375466666655 70.93102110300902 151.20375466666655C 71.20622691236942 151.20375466666655 71.4421176061069 151.38747733333332 71.7173234154673 151.38747733333332C 71.9925292248277 151.38747733333332 72.22841991856521 159.47127466666655 72.50362572792561 159.47127466666655C 72.77883153728601 159.47127466666655 73.01472223102351 172.51558399999988 73.28992804038391 172.51558399999988C 74.11554546846511 172.51558399999988 74.8232175496776 174.16908799999987 75.6488349777588 174.16908799999987C 75.9240407871192 174.16908799999987 76.1599314808567 171.41324799999984 76.4351372902171 171.41324799999984C 76.7103430995775 171.41324799999984 76.946233793315 174.16908799999987 77.2214396026754 174.16908799999987C 77.4966454120358 174.16908799999987 77.73253610577329 185.1924479999999 78.00774191513369 185.1924479999999C 78.2829477244941 185.1924479999999 78.5188384182316 180.04821333333325 78.794044227592 180.04821333333325C 79.61966165567321 180.04821333333325 80.32733373688568 179.4970453333333 81.1529511649669 179.4970453333333C 81.4281569743273 179.4970453333333 81.6640476680648 177.65981866666664 81.9392534774252 177.65981866666664C 82.2144592867856 177.65981866666664 82.45034998052309 177.10865066666656 82.72555578988349 177.10865066666656C 83.00076159924389 177.10865066666656 83.23665229298139 183.5389439999999 83.51185810234179 183.5389439999999C 83.78706391170219 183.5389439999999 84.02295460543968 196.39953066666658 84.29816041480008 196.39953066666658C 85.1237778428813 196.39953066666658 85.83144992409376 183.5389439999999 86.65706735217498 183.5389439999999C 86.93227316153538 183.5389439999999 87.16816385527288 183.5389439999999 87.44336966463328 183.5389439999999C 87.71857547399368 183.5389439999999 87.95446616773118 180.41565866666656 88.22967197709158 180.41565866666656C 88.50487778645198 180.41565866666656 88.74076848018947 192.1739093333333 89.01597428954987 192.1739093333333C 89.29118009891027 192.1739093333333 89.52707079264778 191.07157333333328 89.80227660200818 191.07157333333328C 90.9030998394498 191.07157333333328 91.84666261439975 182.8040533333333 92.94748585184136 182.8040533333333C 93.22269166120176 182.8040533333333 93.45858235493927 196.7669759999999 93.73378816429967 196.7669759999999C 94.00899397366007 196.7669759999999 94.24488466739757 201.17631999999992 94.52009047675797 201.17631999999992C 94.79529628611837 201.17631999999992 95.03118697985586 223.77420799999993 95.30639278921626 223.77420799999993C 96.13201021729748 223.77420799999993 96.83968229850994 214.77179733333332 97.66529972659116 214.77179733333332C 97.94050553595156 214.77179733333332 98.17639622968906 207.60661333333326 98.45160203904946 207.60661333333326C 98.72680784840986 207.60661333333326 98.96269854214735 189.41806933333328 99.23790435150775 189.41806933333328C 99.51311016086815 189.41806933333328 99.74900085460565 196.21580799999992 100.02420666396605 196.21580799999992C 100.29941247332646 196.21580799999992 100.53530316706396 190.1529599999999 100.81050897642436 190.1529599999999C 101.63612640450557 190.1529599999999 102.34379848571804 199.70653866666657 103.16941591379926 199.70653866666657C 103.44462172315966 199.70653866666657 103.68051241689714 187.94828799999993 103.95571822625755 187.94828799999993C 104.23092403561795 187.94828799999993 104.46681472935545 187.58084266666663 104.74202053871585 187.58084266666663C 105.01722634807625 187.58084266666663 105.25311704181375 189.7855146666666 105.52832285117415 189.7855146666666C 105.80352866053455 189.7855146666666 106.03941935427204 176.5574826666666 106.31462516363244 176.5574826666666C 107.14024259171366 176.5574826666666 107.84791467292612 172.14813866666657 108.67353210100734 172.14813866666657C 108.94873791036774 172.14813866666657 109.18462860410524 167.37134933333323 109.45983441346564 167.37134933333323C 109.73504022282604 167.37134933333323 109.97093091656353 183.90638933333332 110.24613672592393 183.90638933333332C 110.52134253528433 183.90638933333332 110.75723322902184 197.86931199999992 111.03243903838224 197.86931199999992C 111.30764484774264 197.86931199999992 111.54353554148014 191.62274133333324 111.81874135084054 191.62274133333324C 112.64435877892174 191.62274133333324 113.35203086013422 205.03449599999988 114.17764828821542 205.03449599999988C 114.45285409757582 205.03449599999988 114.68874479131333 200.8088746666666 114.96395060067373 200.8088746666666C 115.23915641003413 200.8088746666666 115.47504710377163 194.56230399999993 115.75025291313203 194.56230399999993C 116.02545872249243 194.56230399999993 116.26134941622992 198.97164799999985 116.53655522559032 198.97164799999985C 116.81176103495072 198.97164799999985 117.04765172868822 176.92492800000002 117.32285753804862 176.92492800000002C 118.14847496612984 176.92492800000002 118.8561470473423 180.23193600000002 119.68176447542352 180.23193600000002C 119.95697028478392 180.23193600000002 120.19286097852142 174.35281066666664 120.46806678788182 174.35281066666664C 121.01847840660263 174.35281066666664 121.49025979407762 173.98536533333322 122.04067141279842 173.98536533333322C 122.31587722215882 173.98536533333322 122.5517679158963 195.29719466666654 122.8269737252567 195.29719466666654C 123.65259115333792 195.29719466666654 124.36026323455039 212.56712533333325 125.1858806626316 212.56712533333325C 125.461086471992 212.56712533333325 125.6969771657295 212.3834026666666 125.97218297508991 212.3834026666666C 126.24738878445031 212.3834026666666 126.48327947818781 216.79274666666663 126.75848528754821 216.79274666666663C 127.03369109690861 216.79274666666663 127.2695817906461 217.89508266666655 127.5447876000065 217.89508266666655C 127.8199934093669 217.89508266666655 128.05588410310438 208.52522666666664 128.3310899124648 208.52522666666664C 129.156707340546 208.52522666666664 129.86437942175849 213.11829333333333 130.6899968498397 213.11829333333333C 130.96520265920012 213.11829333333333 131.2010933529376 208.52522666666664 131.476299162298 208.52522666666664C 131.75150497165842 208.52522666666664 131.9873956653959 194.19485866666662 132.2626014747563 194.19485866666662C 132.5378072841167 194.19485866666662 132.7736979778542 185.74361599999986 133.04890378721458 185.74361599999986C 133.324109596575 185.74361599999986 133.56000029031247 195.1134719999999 133.8352060996729 195.1134719999999C 134.6608235277541 195.1134719999999 135.36849560896658 208.7089493333333 136.1941130370478 208.7089493333333C 136.46931884640819 208.7089493333333 136.7052095401457 220.09975466666663 136.98041534950607 220.09975466666663C 137.2556211588665 220.09975466666663 137.49151185260396 214.4043519999999 137.76671766196438 214.4043519999999C 138.0419234713248 214.4043519999999 138.27781416506227 203.01354666666657 138.55301997442268 203.01354666666657C 138.8282257837831 203.01354666666657 139.06411647752057 185.74361599999986 139.33932228688099 185.74361599999986C 140.1649397149622 185.74361599999986 140.87261179617465 201.91121066666653 141.69822922425587 201.91121066666653C 141.97343503361628 201.91121066666653 142.20932572735376 204.29960533333326 142.48453153671417 204.29960533333326C 142.7597373460746 204.29960533333326 142.99562803981206 207.7903359999999 143.27083384917248 207.7903359999999C 143.5460396585329 207.7903359999999 143.78193035227036 209.81128533333333 144.05713616163078 209.81128533333333C 144.3323419709912 209.81128533333333 144.56823266472867 183.35522133333325 144.84343847408908 183.35522133333325C 145.6690559021703 183.35522133333325 146.37672798338275 181.1505493333333 147.20234541146397 181.1505493333333C 147.47755122082438 181.1505493333333 147.71344191456186 176.92492800000002 147.98864772392227 176.92492800000002C 148.26385353328268 176.92492800000002 148.49974422702016 174.35281066666664 148.77495003638057 174.35281066666664C 149.05015584574096 174.35281066666664 149.28604653947846 171.78069333333326 149.56125234883885 171.78069333333326C 149.83645815819926 171.78069333333326 150.07234885193674 171.96441599999991 150.34755466129715 171.96441599999991C 151.17317208937837 171.96441599999991 151.88084417059085 178.76215466666656 152.70646159867206 178.76215466666656C 152.98166740803248 178.76215466666656 153.21755810176995 181.8854399999999 153.49276391113037 181.8854399999999C 153.76796972049075 181.8854399999999 154.00386041422826 167.00390400000003 154.27906622358864 167.00390400000003C 154.55427203294906 167.00390400000003 154.79016272668653 153.40842666666663 155.06536853604695 153.40842666666663C 155.34057434540736 153.40842666666663 155.57646503914484 150.6525866666666 155.85167084850525 150.6525866666666C 156.67728827658647 150.6525866666666 157.38496035779892 148.44791466666652 158.21057778588013 148.44791466666652C 158.48578359524055 148.44791466666652 158.72167428897802 151.57119999999998 158.99688009833844 151.57119999999998C 159.27208590769885 151.57119999999998 159.50797660143633 149.91769599999986 159.78318241079674 149.91769599999986C 160.05838822015716 149.91769599999986 160.29427891389463 156.16426666666655 160.56948472325504 156.16426666666655C 160.84469053261546 156.16426666666655 161.08058122635293 178.94587733333333 161.35578703571335 178.94587733333333C 162.18140446379456 178.94587733333333 162.88907654500701 177.8435413333333 163.71469397308823 177.8435413333333C 163.98989978244865 177.8435413333333 164.22579047618612 182.62033066666652 164.50099628554653 182.62033066666652C 164.77620209490695 182.62033066666652 165.01209278864442 184.45755733333328 165.28729859800484 184.45755733333328C 165.56250440736525 184.45755733333328 165.79839510110273 193.64369066666654 166.07360091046314 193.64369066666654C 166.34880671982353 193.64369066666654 166.58469741356103 197.1344213333333 166.85990322292142 197.1344213333333C 167.96072646036305 197.1344213333333 168.904289235313 194.19485866666662 170.00511247275463 194.19485866666662C 170.28031828211505 194.19485866666662 170.51620897585252 178.94587733333333 170.79141478521294 178.94587733333333C 171.06662059457332 178.94587733333333 171.30251128831082 169.20857599999988 171.5777170976712 169.20857599999988C 171.85292290703163 169.20857599999988 172.0888136007691 175.2714239999999 172.36401941012952 175.2714239999999C 173.18963683821073 175.2714239999999 173.8973089194232 181.33427199999983 174.72292634750443 181.33427199999983C 174.9981321568648 181.33427199999983 175.23402285060232 175.82259199999987 175.5092286599627 175.82259199999987C 175.78443446932312 175.82259199999987 176.0203251630606 176.00631466666653 176.295530972421 176.00631466666653C 176.57073678178142 176.00631466666653 176.8066274755189 168.84113066666657 177.0818332848793 168.84113066666657C 177.35703909423972 168.84113066666657 177.5929297879772 159.10382933333324 177.8681355973376 159.10382933333324C 178.69375302541883 159.10382933333324 179.40142510663128 157.81777066666666 180.2270425347125 157.81777066666666C 180.5022483440729 157.81777066666666 180.73813903781038 173.2504746666666 181.0133448471708 173.2504746666666C 181.2885506565312 173.2504746666666 181.5244413502687 163.14572799999996 181.7996471596291 163.14572799999996C 182.07485296898952 163.14572799999996 182.310743662727 137.24083199999995 182.5859494720874 137.24083199999995C 182.86115528144782 137.24083199999995 183.0970459751853 150.10141866666663 183.3722517845457 150.10141866666663C 184.19786921262693 150.10141866666663 184.90554129383938 157.81777066666666 185.7311587219206 157.81777066666666C 186.006364531281 157.81777066666666 186.24225522501848 167.18762666666657 186.5174610343789 167.18762666666657C 186.7926668437393 167.18762666666657 187.0285575374768 173.98536533333322 187.3037633468372 173.98536533333322C 187.5789691561976 173.98536533333322 187.8148598499351 169.02485333333334 188.09006565929548 169.02485333333334C 188.3652714686559 169.02485333333334 188.60116216239336 175.63886933333333 188.87636797175378 175.63886933333333C 189.701985399835 175.63886933333333 190.40965748104747 172.33186133333334 191.2352749091287 172.33186133333334C 191.5104807184891 172.33186133333334 191.74637141222658 173.2504746666666 192.021577221587 173.2504746666666C 192.29678303094738 173.2504746666666 192.53267372468488 172.69930666666653 192.80787953404527 172.69930666666653C 193.08308534340568 172.69930666666653 193.31897603714316 171.2295253333333 193.59418184650357 171.2295253333333C 193.869387655864 171.2295253333333 194.10527834960146 175.08770133333326 194.38048415896188 175.08770133333326C 195.2061015870431 175.08770133333326 195.91377366825554 179.4970453333333 196.73939109633676 179.4970453333333C 197.01459690569718 179.4970453333333 197.25048759943465 189.60179199999993 197.52569340879506 189.60179199999993C 197.80089921815548 189.60179199999993 198.03678991189295 192.72507733333327 198.31199572125337 192.72507733333327C 198.58720153061378 192.72507733333327 198.82309222435126 187.76456533333328 199.09829803371167 187.76456533333328C 199.3735038430721 187.76456533333328 199.60939453680956 184.8250026666666 199.88460034616998 184.8250026666666C 200.7102177742512 184.8250026666666 201.41788985546364 177.65981866666664 202.24350728354486 177.65981866666664C 202.51871309290527 177.65981866666664 202.75460378664275 160.9410559999999 203.02980959600316 160.9410559999999C 203.30501540536358 160.9410559999999 203.54090609910105 157.26660266666659 203.81611190846147 157.26660266666659C 204.09131771782188 157.26660266666659 204.32720841155935 156.53171199999997 204.60241422091977 156.53171199999997C 204.87762003028016 156.53171199999997 205.11351072401766 160.9410559999999 205.38871653337804 160.9410559999999C 206.21433396145926 160.9410559999999 206.92200604267174 156.3479893333332 207.74762347075296 156.3479893333332C 208.02282928011337 156.3479893333332 208.25871997385084 159.6549973333332 208.53392578321126 159.6549973333332C 208.80913159257165 159.6549973333332 209.04502228630915 158.73638399999993 209.32022809566953 158.73638399999993C 209.59543390502995 158.73638399999993 209.83132459876742 158.00149333333331 210.10653040812784 158.00149333333331C 210.38173621748825 158.00149333333331 210.61762691122573 146.79441066666664 210.89283272058614 146.79441066666664C 212.2803286761115 146.79441066666664 213.4696109237047 146.61068799999987 214.85710687923006 146.61068799999987C 215.13231268859047 146.61068799999987 215.36820338232795 140.3641173333333 215.64340919168836 140.3641173333333C 215.91861500104878 140.3641173333333 216.15450569478625 139.81294933333322 216.42971150414667 139.81294933333322C 217.25532893222788 139.81294933333322 217.96300101344033 142.56878933333326 218.78861844152155 142.56878933333326C 219.06382425088196 142.56878933333326 219.29971494461944 139.81294933333322 219.57492075397985 139.81294933333322C 219.85012656334027 139.81294933333322 220.08601725707774 156.71543466666662 220.36122306643816 156.71543466666662C 220.63642887579857 156.71543466666662 220.87231956953605 165.71784533333334 221.14752537889646 165.71784533333334C 221.42273118825688 165.71784533333334 221.65862188199435 167.18762666666657 221.93382769135476 167.18762666666657C 222.75944511943598 167.18762666666657 223.46711720064843 170.86207999999988 224.29273462872965 170.86207999999988C 224.56794043809006 170.86207999999988 224.80383113182754 173.80164266666657 225.07903694118795 173.80164266666657C 225.35424275054837 173.80164266666657 225.59013344428584 179.4970453333333 225.86533925364625 179.4970453333333C 226.14054506300667 179.4970453333333 226.37643575674414 171.96441599999991 226.65164156610456 171.96441599999991C 226.92684737546494 171.96441599999991 227.16273806920245 171.78069333333326 227.43794387856283 171.78069333333326C 228.26356130664405 171.78069333333326 228.97123338785653 166.82018133333327 229.79685081593774 166.82018133333327C 230.07205662529816 166.82018133333327 230.30794731903563 171.96441599999991 230.58315312839605 171.96441599999991C 230.85835893775644 171.96441599999991 231.09424963149394 168.2899626666665 231.36945544085432 168.2899626666665C 231.91986705957513 168.2899626666665 232.39164844705013 158.00149333333331 232.94206006577093 158.00149333333331C 233.76767749385215 158.00149333333331 234.47534957506463 159.83871999999997 235.30096700314584 159.83871999999997C 235.57617281250623 159.83871999999997 235.81206350624373 162.04339199999993 236.08726931560412 162.04339199999993C 236.36247512496453 162.04339199999993 236.598365818702 149.18280533333325 236.87357162806242 149.18280533333325C 237.14877743742284 149.18280533333325 237.3846681311603 145.32462933333318 237.65987394052073 145.32462933333318C 237.93507974988114 145.32462933333318 238.17097044361861 135.7710506666666 238.44617625297903 135.7710506666666C 239.27179368106025 135.7710506666666 239.9794657622727 134.1175466666665 240.8050831903539 134.1175466666665C 241.08028899971433 134.1175466666665 241.3161796934518 123.09418666666659 241.59138550281222 123.09418666666659C 241.86659131217263 123.09418666666659 242.1024820059101 121.25695999999994 242.37768781527052 121.25695999999994C 242.65289362463093 121.25695999999994 242.8887843183684 126.03374933333328 243.16399012772882 126.03374933333328C 243.4391959370892 126.03374933333328 243.6750866308267 119.78717866666659 243.9502924401871 119.78717866666659C 244.77590986826831 119.78717866666659 245.4835819494808 114.8266666666666 246.309199377562 114.8266666666666C 246.58440518692242 114.8266666666666 246.8202958806599 118.68484266666655 247.0955016900203 118.68484266666655C 247.37070749938073 118.68484266666655 247.6065981931182 110.96849066666653 247.88180400247862 110.96849066666653C 248.157009811839 110.96849066666653 248.3929005055765 118.86856533333321 248.6681063149369 118.86856533333321C 248.9433121242973 118.86856533333321 249.17920281803478 81.57286399999987 249.4544086273952 81.57286399999987C 250.2800260554764 81.57286399999987 250.9876981366889 84.14498133333325 251.8133155647701 84.14498133333325C 252.0885213741305 84.14498133333325 252.324412067868 82.85892266666656 252.59961787722838 82.85892266666656C 252.8748236865888 82.85892266666656 253.11071438032627 71.83556266666653 253.3859201896867 71.83556266666653C 253.6611259990471 71.83556266666653 253.89701669278458 75.87746133333326 254.172222502145 75.87746133333326C 254.4474283115054 75.87746133333326 254.68331900524288 78.81702399999995 254.9585248146033 78.81702399999995C 255.7841422426845 78.81702399999995 256.49181432389696 82.12403199999994 257.3174317519782 82.12403199999994C 257.867843370699 82.12403199999994 258.33962475817395 81.75658666666664 258.8900363768948 81.75658666666664C 259.16524218625517 81.75658666666664 259.4011328799927 86.34965333333332 259.6763386893531 86.34965333333332C 259.9515444987135 86.34965333333332 260.187435192451 93.69855999999993 260.4626410018114 93.69855999999993C 261.2882584298926 93.69855999999993 261.9959305111051 79.36819199999991 262.8215479391863 79.36819199999991C 263.3719595579071 79.36819199999991 263.8437409453821 67.24249599999985 264.39415256410285 67.24249599999985C 264.66935837346324 67.24249599999985 264.90524906720077 78.08213333333322 265.18045487656116 78.08213333333322C 265.45566068592154 78.08213333333322 265.6915513796591 71.10067199999992 265.96675718901946 71.10067199999992C 266.7923746171007 71.10067199999992 267.50004669831316 74.59140266666668 268.3256641263944 74.59140266666668C 268.60086993575476 74.59140266666668 268.8367606294923 70.91694933333326 269.1119664388527 70.91694933333326C 269.38717224821306 70.91694933333326 269.6230629419506 61.3633706666667 269.898268751311 61.3633706666667C 270.17347456067137 61.3633706666667 270.4093652544089 62.09826133333331 270.6845710637693 62.09826133333331C 270.95977687312967 62.09826133333331 271.1956675668672 71.83556266666653 271.4708733762276 71.83556266666653C 272.2964908043088 71.83556266666653 273.0041628855212 70.54950399999996 273.82978031360244 70.54950399999996C 274.1049861229628 70.54950399999996 274.34087681670036 70.73322666666661 274.61608262606075 70.73322666666661C 274.89128843542113 70.73322666666661 275.12717912915866 75.69373866666649 275.40238493851905 75.69373866666649C 275.67759074787944 75.69373866666649 275.91348144161697 78.44957866666664 276.18868725097735 78.44957866666664C 276.46389306033774 78.44957866666664 276.69978375407527 73.85651199999995 276.97498956343566 73.85651199999995C 278.07581280087726 73.85651199999995 279.01937557582727 74.40767999999991 280.12019881326887 74.40767999999991C 280.39540462262926 74.40767999999991 280.63129531636673 68.89599999999996 280.9065011257271 68.89599999999996C 281.1817069350875 68.89599999999996 281.41759762882504 71.65183999999988 281.6928034381854 71.65183999999988C 281.9680092475458 71.65183999999988 282.20389994128334 67.60994133333327 282.4791057506437 67.60994133333327C 283.30472317872494 67.60994133333327 284.0123952599374 69.0797226666665 284.83801268801864 69.0797226666665C 285.113218497379 69.0797226666665 285.34910919111655 63.93548799999985 285.62431500047694 63.93548799999985C 285.8995208098373 63.93548799999985 286.13541150357486 74.59140266666668 286.41061731293524 74.59140266666668C 286.68582312229563 74.59140266666668 286.92171381603316 76.61235199999999 287.19691962539355 76.61235199999999C 287.47212543475393 76.61235199999999 287.70801612849147 67.24249599999985 287.98322193785185 67.24249599999985C 288.80883936593307 67.24249599999985 289.5165114471455 71.65183999999988 290.3421288752267 71.65183999999988C 290.6173346845871 71.65183999999988 290.8532253783246 64.11921066666662 291.128431187685 64.11921066666662C 291.4036369970454 64.11921066666662 291.6395276907829 66.14015999999992 291.9147335001433 66.14015999999992C 292.1899393095037 66.14015999999992 292.42583000324123 72.20300799999995 292.7010358126016 72.20300799999995C 292.976241621962 72.20300799999995 293.21213231569953 52.91212799999994 293.4873381250599 52.91212799999994C 294.31295555314114 52.91212799999994 295.0206276343536 61.73081599999989 295.84624506243483 61.73081599999989C 296.1214508717952 61.73081599999989 296.35734156553275 57.137749333333204 296.63254737489314 57.137749333333204C 296.9077531842535 57.137749333333204 297.143643877991 58.60753066666655 297.4188496873514 58.60753066666655C 297.69405549671177 58.60753066666655 297.9299461904493 62.281983999999966 298.2051519998097 62.281983999999966C 298.4803578091701 62.281983999999966 298.7162485029076 61.914538666666544 298.991454312268 61.914538666666544C 300.0922775497096 61.914538666666544 301.0358403246596 55.30052266666655 302.1366635621012 55.30052266666655C 302.4118693714616 55.30052266666655 302.6477600651991 59.342421333333164 302.9229658745595 59.342421333333164C 303.1981716839199 59.342421333333164 303.4340623776574 67.24249599999985 303.7092681870178 67.24249599999985C 303.9844739963782 67.24249599999985 304.22036469011573 63.38432 304.4955704994761 63.38432C 305.32118792755733 63.38432 306.02886000876975 71.46811733333323 306.85447743685097 71.46811733333323C 307.12968324621136 71.46811733333323 307.3655739399489 62.64942933333316 307.6407797493093 62.64942933333316C 307.91598555866966 62.64942933333316 308.1518762524072 44.09343999999987 308.4270820617676 44.09343999999987C 308.4270820617676 44.09343999999987 308.4270820617676 44.09343999999987 308.4270820617676 275.584M 308.4270820617676 44.09343999999987z"
                                                    pathFrom="M -1 771.6351999999999L -1 771.6351999999999L -5.307540609093515 771.6351999999999L -4.521238296635216 771.6351999999999L -3.734935984176918 771.6351999999999L -1.3760290468020224 771.6351999999999L -0.5897267343437239 771.6351999999999L 0.19657557811457463 771.6351999999999L 0.9828778905728731 771.6351999999999L 1.7691802030311716 771.6351999999999L 4.128087140406067 771.6351999999999L 4.9143894528643655 771.6351999999999L 5.700691765322664 771.6351999999999L 6.486994077780962 771.6351999999999L 7.2732963902392616 771.6351999999999L 9.632203327614157 771.6351999999999L 10.418505640072455 771.6351999999999L 11.204807952530754 771.6351999999999L 11.991110264989052 771.6351999999999L 12.77741257744735 771.6351999999999L 15.922621827280544 771.6351999999999L 16.708924139738844 771.6351999999999L 17.49522645219714 771.6351999999999L 18.28152876465544 771.6351999999999L 20.640435702030334 771.6351999999999L 21.426738014488635 771.6351999999999L 22.21304032694693 771.6351999999999L 22.99934263940523 771.6351999999999L 23.78564495186353 771.6351999999999L 26.144551889238425 771.6351999999999L 26.930854201696725 771.6351999999999L 27.717156514155022 771.6351999999999L 28.503458826613322 771.6351999999999L 29.28976113907162 771.6351999999999L 31.648668076446516 771.6351999999999L 32.434970388904816 771.6351999999999L 33.22127270136311 771.6351999999999L 34.00757501382141 771.6351999999999L 34.793877326279706 771.6351999999999L 37.1527842636546 771.6351999999999L 37.939086576112906 771.6351999999999L 38.7253888885712 771.6351999999999L 39.5116912010295 771.6351999999999L 40.297993513487796 771.6351999999999L 42.624137854510266 771.6351999999999L 43.41044016696856 771.6351999999999L 44.19674247942686 771.6351999999999L 44.98304479188516 771.6351999999999L 45.76934710434346 771.6351999999999L 48.12825404171836 771.6351999999999L 48.91455635417665 771.6351999999999L 49.70085866663495 771.6351999999999L 50.48716097909325 771.6351999999999L 53.63237022892645 771.6351999999999L 54.418672541384744 771.6351999999999L 55.20497485384304 771.6351999999999L 55.99127716630134 771.6351999999999L 56.77757947875964 771.6351999999999L 59.13648641613453 771.6351999999999L 59.922788728592835 771.6351999999999L 60.70909104105113 771.6351999999999L 61.49539335350943 771.6351999999999L 62.281695665967725 771.6351999999999L 64.64060260334263 771.6351999999999L 65.42690491580092 771.6351999999999L 66.21320722825922 771.6351999999999L 66.99950954071753 771.6351999999999L 67.78581185317582 771.6351999999999L 70.14471879055071 771.6351999999999L 70.93102110300902 771.6351999999999L 71.7173234154673 771.6351999999999L 72.50362572792561 771.6351999999999L 73.28992804038391 771.6351999999999L 75.6488349777588 771.6351999999999L 76.4351372902171 771.6351999999999L 77.2214396026754 771.6351999999999L 78.00774191513369 771.6351999999999L 78.794044227592 771.6351999999999L 81.1529511649669 771.6351999999999L 81.9392534774252 771.6351999999999L 82.72555578988349 771.6351999999999L 83.51185810234179 771.6351999999999L 84.29816041480008 771.6351999999999L 86.65706735217498 771.6351999999999L 87.44336966463328 771.6351999999999L 88.22967197709158 771.6351999999999L 89.01597428954987 771.6351999999999L 89.80227660200818 771.6351999999999L 92.94748585184136 771.6351999999999L 93.73378816429967 771.6351999999999L 94.52009047675797 771.6351999999999L 95.30639278921626 771.6351999999999L 97.66529972659116 771.6351999999999L 98.45160203904946 771.6351999999999L 99.23790435150775 771.6351999999999L 100.02420666396605 771.6351999999999L 100.81050897642436 771.6351999999999L 103.16941591379926 771.6351999999999L 103.95571822625755 771.6351999999999L 104.74202053871585 771.6351999999999L 105.52832285117415 771.6351999999999L 106.31462516363244 771.6351999999999L 108.67353210100734 771.6351999999999L 109.45983441346564 771.6351999999999L 110.24613672592393 771.6351999999999L 111.03243903838224 771.6351999999999L 111.81874135084054 771.6351999999999L 114.17764828821542 771.6351999999999L 114.96395060067373 771.6351999999999L 115.75025291313203 771.6351999999999L 116.53655522559032 771.6351999999999L 117.32285753804862 771.6351999999999L 119.68176447542352 771.6351999999999L 120.46806678788182 771.6351999999999L 122.04067141279842 771.6351999999999L 122.8269737252567 771.6351999999999L 125.1858806626316 771.6351999999999L 125.97218297508991 771.6351999999999L 126.75848528754821 771.6351999999999L 127.5447876000065 771.6351999999999L 128.3310899124648 771.6351999999999L 130.6899968498397 771.6351999999999L 131.476299162298 771.6351999999999L 132.2626014747563 771.6351999999999L 133.04890378721458 771.6351999999999L 133.8352060996729 771.6351999999999L 136.1941130370478 771.6351999999999L 136.98041534950607 771.6351999999999L 137.76671766196438 771.6351999999999L 138.55301997442268 771.6351999999999L 139.33932228688099 771.6351999999999L 141.69822922425587 771.6351999999999L 142.48453153671417 771.6351999999999L 143.27083384917248 771.6351999999999L 144.05713616163078 771.6351999999999L 144.84343847408908 771.6351999999999L 147.20234541146397 771.6351999999999L 147.98864772392227 771.6351999999999L 148.77495003638057 771.6351999999999L 149.56125234883885 771.6351999999999L 150.34755466129715 771.6351999999999L 152.70646159867206 771.6351999999999L 153.49276391113037 771.6351999999999L 154.27906622358864 771.6351999999999L 155.06536853604695 771.6351999999999L 155.85167084850525 771.6351999999999L 158.21057778588013 771.6351999999999L 158.99688009833844 771.6351999999999L 159.78318241079674 771.6351999999999L 160.56948472325504 771.6351999999999L 161.35578703571335 771.6351999999999L 163.71469397308823 771.6351999999999L 164.50099628554653 771.6351999999999L 165.28729859800484 771.6351999999999L 166.07360091046314 771.6351999999999L 166.85990322292142 771.6351999999999L 170.00511247275463 771.6351999999999L 170.79141478521294 771.6351999999999L 171.5777170976712 771.6351999999999L 172.36401941012952 771.6351999999999L 174.72292634750443 771.6351999999999L 175.5092286599627 771.6351999999999L 176.295530972421 771.6351999999999L 177.0818332848793 771.6351999999999L 177.8681355973376 771.6351999999999L 180.2270425347125 771.6351999999999L 181.0133448471708 771.6351999999999L 181.7996471596291 771.6351999999999L 182.5859494720874 771.6351999999999L 183.3722517845457 771.6351999999999L 185.7311587219206 771.6351999999999L 186.5174610343789 771.6351999999999L 187.3037633468372 771.6351999999999L 188.09006565929548 771.6351999999999L 188.87636797175378 771.6351999999999L 191.2352749091287 771.6351999999999L 192.021577221587 771.6351999999999L 192.80787953404527 771.6351999999999L 193.59418184650357 771.6351999999999L 194.38048415896188 771.6351999999999L 196.73939109633676 771.6351999999999L 197.52569340879506 771.6351999999999L 198.31199572125337 771.6351999999999L 199.09829803371167 771.6351999999999L 199.88460034616998 771.6351999999999L 202.24350728354486 771.6351999999999L 203.02980959600316 771.6351999999999L 203.81611190846147 771.6351999999999L 204.60241422091977 771.6351999999999L 205.38871653337804 771.6351999999999L 207.74762347075296 771.6351999999999L 208.53392578321126 771.6351999999999L 209.32022809566953 771.6351999999999L 210.10653040812784 771.6351999999999L 210.89283272058614 771.6351999999999L 214.85710687923006 771.6351999999999L 215.64340919168836 771.6351999999999L 216.42971150414667 771.6351999999999L 218.78861844152155 771.6351999999999L 219.57492075397985 771.6351999999999L 220.36122306643816 771.6351999999999L 221.14752537889646 771.6351999999999L 221.93382769135476 771.6351999999999L 224.29273462872965 771.6351999999999L 225.07903694118795 771.6351999999999L 225.86533925364625 771.6351999999999L 226.65164156610456 771.6351999999999L 227.43794387856283 771.6351999999999L 229.79685081593774 771.6351999999999L 230.58315312839605 771.6351999999999L 231.36945544085432 771.6351999999999L 232.94206006577093 771.6351999999999L 235.30096700314584 771.6351999999999L 236.08726931560412 771.6351999999999L 236.87357162806242 771.6351999999999L 237.65987394052073 771.6351999999999L 238.44617625297903 771.6351999999999L 240.8050831903539 771.6351999999999L 241.59138550281222 771.6351999999999L 242.37768781527052 771.6351999999999L 243.16399012772882 771.6351999999999L 243.9502924401871 771.6351999999999L 246.309199377562 771.6351999999999L 247.0955016900203 771.6351999999999L 247.88180400247862 771.6351999999999L 248.6681063149369 771.6351999999999L 249.4544086273952 771.6351999999999L 251.8133155647701 771.6351999999999L 252.59961787722838 771.6351999999999L 253.3859201896867 771.6351999999999L 254.172222502145 771.6351999999999L 254.9585248146033 771.6351999999999L 257.3174317519782 771.6351999999999L 258.8900363768948 771.6351999999999L 259.6763386893531 771.6351999999999L 260.4626410018114 771.6351999999999L 262.8215479391863 771.6351999999999L 264.39415256410285 771.6351999999999L 265.18045487656116 771.6351999999999L 265.96675718901946 771.6351999999999L 268.3256641263944 771.6351999999999L 269.1119664388527 771.6351999999999L 269.898268751311 771.6351999999999L 270.6845710637693 771.6351999999999L 271.4708733762276 771.6351999999999L 273.82978031360244 771.6351999999999L 274.61608262606075 771.6351999999999L 275.40238493851905 771.6351999999999L 276.18868725097735 771.6351999999999L 276.97498956343566 771.6351999999999L 280.12019881326887 771.6351999999999L 280.9065011257271 771.6351999999999L 281.6928034381854 771.6351999999999L 282.4791057506437 771.6351999999999L 284.83801268801864 771.6351999999999L 285.62431500047694 771.6351999999999L 286.41061731293524 771.6351999999999L 287.19691962539355 771.6351999999999L 287.98322193785185 771.6351999999999L 290.3421288752267 771.6351999999999L 291.128431187685 771.6351999999999L 291.9147335001433 771.6351999999999L 292.7010358126016 771.6351999999999L 293.4873381250599 771.6351999999999L 295.84624506243483 771.6351999999999L 296.63254737489314 771.6351999999999L 297.4188496873514 771.6351999999999L 298.2051519998097 771.6351999999999L 298.991454312268 771.6351999999999L 302.1366635621012 771.6351999999999L 302.9229658745595 771.6351999999999L 303.7092681870178 771.6351999999999L 304.4955704994761 771.6351999999999L 306.85447743685097 771.6351999999999L 307.6407797493093 771.6351999999999L 308.4270820617676 771.6351999999999">
                                                </path>
                                                <path id="SvgjsPath1135"
                                                    d="M -6.0929328494309125 203.01354666666657C -5.818045565312823 203.01354666666657 -5.582427893211604 195.84836266666662 -5.307540609093515 195.84836266666662C -5.0323347997331105 195.84836266666662 -4.79644410599562 198.7879253333333 -4.521238296635216 198.7879253333333C -4.246032487274812 198.7879253333333 -4.010141793537322 201.17631999999992 -3.734935984176918 201.17631999999992C -2.9093185560957044 201.17631999999992 -2.2016464748832356 202.0949333333333 -1.3760290468020224 202.0949333333333C -1.100823237441618 202.0949333333333 -0.8649325437041284 203.01354666666657 -0.5897267343437239 203.01354666666657C -0.31452092498331946 203.01354666666657 -0.07863023124582982 197.68558933333327 0.19657557811457463 197.68558933333327C 0.4717813874749791 197.68558933333327 0.7076720812124686 196.7669759999999 0.9828778905728731 196.7669759999999C 1.2580836999332776 196.7669759999999 1.4939743936707672 186.4785066666666 1.7691802030311716 186.4785066666666C 2.594797631112385 186.4785066666666 3.3024697123248536 186.29478399999994 4.128087140406067 186.29478399999994C 4.403292949766471 186.29478399999994 4.639183643503961 178.5784319999999 4.9143894528643655 178.5784319999999C 5.18959526222477 178.5784319999999 5.42548595596226 181.8854399999999 5.700691765322664 181.8854399999999C 5.975897574683068 181.8854399999999 6.211788268420558 171.78069333333326 6.486994077780962 171.78069333333326C 6.762199887141367 171.78069333333326 6.9980905808788565 179.8644906666666 7.2732963902392616 179.8644906666666C 8.098913818320474 179.8644906666666 8.806585899532944 177.29237333333322 9.632203327614157 177.29237333333322C 9.907409136974561 177.29237333333322 10.143299830712051 175.63886933333333 10.418505640072455 175.63886933333333C 10.69371144943286 175.63886933333333 10.92960214317035 175.2714239999999 11.204807952530754 175.2714239999999C 11.480013761891158 175.2714239999999 11.715904455628648 167.9225173333333 11.991110264989052 167.9225173333333C 12.266316074349456 167.9225173333333 12.502206768086946 169.9434666666666 12.77741257744735 169.9434666666666C 13.878235814888967 169.9434666666666 14.821798589838927 173.80164266666657 15.922621827280544 173.80164266666657C 16.197827636640948 173.80164266666657 16.43371833037844 177.65981866666664 16.708924139738844 177.65981866666664C 16.98412994909925 177.65981866666664 17.220020642836737 165.901568 17.49522645219714 165.901568C 17.770432261557545 165.901568 18.006322955295037 157.81777066666666 18.28152876465544 157.81777066666666C 19.107146192736653 157.81777066666666 19.814818273949122 160.38988799999981 20.640435702030334 160.38988799999981C 20.91564151139074 160.38988799999981 21.15153220512823 160.38988799999981 21.426738014488635 160.38988799999981C 21.70194382384904 160.38988799999981 21.937834517586527 167.37134933333323 22.21304032694693 167.37134933333323C 22.488246136307335 167.37134933333323 22.724136830044827 163.51317333333327 22.99934263940523 163.51317333333327C 23.274548448765636 163.51317333333327 23.510439142503127 151.93864533333328 23.78564495186353 151.93864533333328C 24.611262379944744 151.93864533333328 25.318934461157212 161.3085013333333 26.144551889238425 161.3085013333333C 26.41975769859883 161.3085013333333 26.65564839233632 183.90638933333332 26.930854201696725 183.90638933333332C 27.20606001105713 183.90638933333332 27.441950704794618 176.1900373333333 27.717156514155022 176.1900373333333C 27.992362323515426 176.1900373333333 28.228253017252918 164.43178666666665 28.503458826613322 164.43178666666665C 28.778664635973726 164.43178666666665 29.014555329711214 153.59214933333328 29.28976113907162 153.59214933333328C 30.11537856715283 153.59214933333328 30.823050648365303 155.0619306666665 31.648668076446516 155.0619306666665C 31.92387388580692 155.0619306666665 32.15976457954441 142.93623466666656 32.434970388904816 142.93623466666656C 32.710176198265216 142.93623466666656 32.94606689200271 151.20375466666655 33.22127270136311 151.20375466666655C 33.49647851072351 151.20375466666655 33.73236920446101 143.85484799999983 34.00757501382141 143.85484799999983C 34.28278082318181 143.85484799999983 34.518671516919305 150.28514133333329 34.793877326279706 150.28514133333329C 35.61949475436092 150.28514133333329 36.32716683557339 137.60827733333326 37.1527842636546 137.60827733333326C 37.42799007301501 137.60827733333326 37.6638807667525 162.41083733333335 37.939086576112906 162.41083733333335C 38.21429238547331 162.41083733333335 38.4501830792108 155.0619306666665 38.7253888885712 155.0619306666665C 39.000594697931604 155.0619306666665 39.2364853916691 152.3060906666666 39.5116912010295 152.3060906666666C 39.7868970103899 152.3060906666666 40.022787704127396 150.46886399999983 40.297993513487796 150.46886399999983C 41.11214403284566 150.46886399999983 41.8099873351524 139.62922666666657 42.624137854510266 139.62922666666657C 42.89934366387067 139.62922666666657 43.13523435760816 135.4036053333332 43.41044016696856 135.4036053333332C 43.68564597632896 135.4036053333332 43.92153667006646 138.52689066666653 44.19674247942686 138.52689066666653C 44.47194828878727 138.52689066666653 44.707838982524756 138.15944533333334 44.98304479188516 138.15944533333334C 45.258250601245564 138.15944533333334 45.49414129498306 141.28273066666657 45.76934710434346 141.28273066666657C 46.594964532424676 141.28273066666657 47.30263661363714 134.1175466666665 48.12825404171836 134.1175466666665C 48.40345985107876 134.1175466666665 48.63935054481625 141.28273066666657 48.91455635417665 141.28273066666657C 49.189762163537054 141.28273066666657 49.42565285727455 156.89915733333328 49.70085866663495 156.89915733333328C 49.97606447599535 156.89915733333328 50.211955169732846 154.51076266666655 50.48716097909325 154.51076266666655C 51.58798421653486 154.51076266666655 52.53154699148483 161.3085013333333 53.63237022892645 161.3085013333333C 53.90757603828685 161.3085013333333 54.14346673202434 172.51558399999988 54.418672541384744 172.51558399999988C 54.693878350745145 172.51558399999988 54.92976904448264 165.16667733333327 55.20497485384304 165.16667733333327C 55.48018066320344 165.16667733333327 55.71607135694094 155.24565333333328 55.99127716630134 155.24565333333328C 56.266482975661745 155.24565333333328 56.50237366939923 162.04339199999993 56.77757947875964 162.04339199999993C 57.60319690684085 162.04339199999993 58.31086898805332 168.2899626666665 59.13648641613453 168.2899626666665C 59.41169222549494 168.2899626666665 59.64758291923243 149.91769599999986 59.922788728592835 149.91769599999986C 60.197994537953235 149.91769599999986 60.43388523169073 158.18521599999985 60.70909104105113 158.18521599999985C 60.98429685041153 158.18521599999985 61.22018754414903 167.00390400000003 61.49539335350943 167.00390400000003C 61.77059916286983 167.00390400000003 62.006489856607324 164.24806399999989 62.281695665967725 164.24806399999989C 63.10731309404894 164.24806399999989 63.81498517526141 172.33186133333334 64.64060260334263 172.33186133333334C 64.91580841270303 172.33186133333334 65.15169910644052 176.37375999999995 65.42690491580092 176.37375999999995C 65.70211072516132 176.37375999999995 65.93800141889882 162.9620053333332 66.21320722825922 162.9620053333332C 66.48841303761962 162.9620053333332 66.72430373135713 160.57361066666658 66.99950954071753 160.57361066666658C 67.27471535007793 160.57361066666658 67.51060604381541 154.69448533333332 67.78581185317582 154.69448533333332C 68.61142928125703 154.69448533333332 69.3191013624695 155.24565333333328 70.14471879055071 155.24565333333328C 70.41992459991111 155.24565333333328 70.65581529364862 151.20375466666655 70.93102110300902 151.20375466666655C 71.20622691236942 151.20375466666655 71.4421176061069 151.38747733333332 71.7173234154673 151.38747733333332C 71.9925292248277 151.38747733333332 72.22841991856521 159.47127466666655 72.50362572792561 159.47127466666655C 72.77883153728601 159.47127466666655 73.01472223102351 172.51558399999988 73.28992804038391 172.51558399999988C 74.11554546846511 172.51558399999988 74.8232175496776 174.16908799999987 75.6488349777588 174.16908799999987C 75.9240407871192 174.16908799999987 76.1599314808567 171.41324799999984 76.4351372902171 171.41324799999984C 76.7103430995775 171.41324799999984 76.946233793315 174.16908799999987 77.2214396026754 174.16908799999987C 77.4966454120358 174.16908799999987 77.73253610577329 185.1924479999999 78.00774191513369 185.1924479999999C 78.2829477244941 185.1924479999999 78.5188384182316 180.04821333333325 78.794044227592 180.04821333333325C 79.61966165567321 180.04821333333325 80.32733373688568 179.4970453333333 81.1529511649669 179.4970453333333C 81.4281569743273 179.4970453333333 81.6640476680648 177.65981866666664 81.9392534774252 177.65981866666664C 82.2144592867856 177.65981866666664 82.45034998052309 177.10865066666656 82.72555578988349 177.10865066666656C 83.00076159924389 177.10865066666656 83.23665229298139 183.5389439999999 83.51185810234179 183.5389439999999C 83.78706391170219 183.5389439999999 84.02295460543968 196.39953066666658 84.29816041480008 196.39953066666658C 85.1237778428813 196.39953066666658 85.83144992409376 183.5389439999999 86.65706735217498 183.5389439999999C 86.93227316153538 183.5389439999999 87.16816385527288 183.5389439999999 87.44336966463328 183.5389439999999C 87.71857547399368 183.5389439999999 87.95446616773118 180.41565866666656 88.22967197709158 180.41565866666656C 88.50487778645198 180.41565866666656 88.74076848018947 192.1739093333333 89.01597428954987 192.1739093333333C 89.29118009891027 192.1739093333333 89.52707079264778 191.07157333333328 89.80227660200818 191.07157333333328C 90.9030998394498 191.07157333333328 91.84666261439975 182.8040533333333 92.94748585184136 182.8040533333333C 93.22269166120176 182.8040533333333 93.45858235493927 196.7669759999999 93.73378816429967 196.7669759999999C 94.00899397366007 196.7669759999999 94.24488466739757 201.17631999999992 94.52009047675797 201.17631999999992C 94.79529628611837 201.17631999999992 95.03118697985586 223.77420799999993 95.30639278921626 223.77420799999993C 96.13201021729748 223.77420799999993 96.83968229850994 214.77179733333332 97.66529972659116 214.77179733333332C 97.94050553595156 214.77179733333332 98.17639622968906 207.60661333333326 98.45160203904946 207.60661333333326C 98.72680784840986 207.60661333333326 98.96269854214735 189.41806933333328 99.23790435150775 189.41806933333328C 99.51311016086815 189.41806933333328 99.74900085460565 196.21580799999992 100.02420666396605 196.21580799999992C 100.29941247332646 196.21580799999992 100.53530316706396 190.1529599999999 100.81050897642436 190.1529599999999C 101.63612640450557 190.1529599999999 102.34379848571804 199.70653866666657 103.16941591379926 199.70653866666657C 103.44462172315966 199.70653866666657 103.68051241689714 187.94828799999993 103.95571822625755 187.94828799999993C 104.23092403561795 187.94828799999993 104.46681472935545 187.58084266666663 104.74202053871585 187.58084266666663C 105.01722634807625 187.58084266666663 105.25311704181375 189.7855146666666 105.52832285117415 189.7855146666666C 105.80352866053455 189.7855146666666 106.03941935427204 176.5574826666666 106.31462516363244 176.5574826666666C 107.14024259171366 176.5574826666666 107.84791467292612 172.14813866666657 108.67353210100734 172.14813866666657C 108.94873791036774 172.14813866666657 109.18462860410524 167.37134933333323 109.45983441346564 167.37134933333323C 109.73504022282604 167.37134933333323 109.97093091656353 183.90638933333332 110.24613672592393 183.90638933333332C 110.52134253528433 183.90638933333332 110.75723322902184 197.86931199999992 111.03243903838224 197.86931199999992C 111.30764484774264 197.86931199999992 111.54353554148014 191.62274133333324 111.81874135084054 191.62274133333324C 112.64435877892174 191.62274133333324 113.35203086013422 205.03449599999988 114.17764828821542 205.03449599999988C 114.45285409757582 205.03449599999988 114.68874479131333 200.8088746666666 114.96395060067373 200.8088746666666C 115.23915641003413 200.8088746666666 115.47504710377163 194.56230399999993 115.75025291313203 194.56230399999993C 116.02545872249243 194.56230399999993 116.26134941622992 198.97164799999985 116.53655522559032 198.97164799999985C 116.81176103495072 198.97164799999985 117.04765172868822 176.92492800000002 117.32285753804862 176.92492800000002C 118.14847496612984 176.92492800000002 118.8561470473423 180.23193600000002 119.68176447542352 180.23193600000002C 119.95697028478392 180.23193600000002 120.19286097852142 174.35281066666664 120.46806678788182 174.35281066666664C 121.01847840660263 174.35281066666664 121.49025979407762 173.98536533333322 122.04067141279842 173.98536533333322C 122.31587722215882 173.98536533333322 122.5517679158963 195.29719466666654 122.8269737252567 195.29719466666654C 123.65259115333792 195.29719466666654 124.36026323455039 212.56712533333325 125.1858806626316 212.56712533333325C 125.461086471992 212.56712533333325 125.6969771657295 212.3834026666666 125.97218297508991 212.3834026666666C 126.24738878445031 212.3834026666666 126.48327947818781 216.79274666666663 126.75848528754821 216.79274666666663C 127.03369109690861 216.79274666666663 127.2695817906461 217.89508266666655 127.5447876000065 217.89508266666655C 127.8199934093669 217.89508266666655 128.05588410310438 208.52522666666664 128.3310899124648 208.52522666666664C 129.156707340546 208.52522666666664 129.86437942175849 213.11829333333333 130.6899968498397 213.11829333333333C 130.96520265920012 213.11829333333333 131.2010933529376 208.52522666666664 131.476299162298 208.52522666666664C 131.75150497165842 208.52522666666664 131.9873956653959 194.19485866666662 132.2626014747563 194.19485866666662C 132.5378072841167 194.19485866666662 132.7736979778542 185.74361599999986 133.04890378721458 185.74361599999986C 133.324109596575 185.74361599999986 133.56000029031247 195.1134719999999 133.8352060996729 195.1134719999999C 134.6608235277541 195.1134719999999 135.36849560896658 208.7089493333333 136.1941130370478 208.7089493333333C 136.46931884640819 208.7089493333333 136.7052095401457 220.09975466666663 136.98041534950607 220.09975466666663C 137.2556211588665 220.09975466666663 137.49151185260396 214.4043519999999 137.76671766196438 214.4043519999999C 138.0419234713248 214.4043519999999 138.27781416506227 203.01354666666657 138.55301997442268 203.01354666666657C 138.8282257837831 203.01354666666657 139.06411647752057 185.74361599999986 139.33932228688099 185.74361599999986C 140.1649397149622 185.74361599999986 140.87261179617465 201.91121066666653 141.69822922425587 201.91121066666653C 141.97343503361628 201.91121066666653 142.20932572735376 204.29960533333326 142.48453153671417 204.29960533333326C 142.7597373460746 204.29960533333326 142.99562803981206 207.7903359999999 143.27083384917248 207.7903359999999C 143.5460396585329 207.7903359999999 143.78193035227036 209.81128533333333 144.05713616163078 209.81128533333333C 144.3323419709912 209.81128533333333 144.56823266472867 183.35522133333325 144.84343847408908 183.35522133333325C 145.6690559021703 183.35522133333325 146.37672798338275 181.1505493333333 147.20234541146397 181.1505493333333C 147.47755122082438 181.1505493333333 147.71344191456186 176.92492800000002 147.98864772392227 176.92492800000002C 148.26385353328268 176.92492800000002 148.49974422702016 174.35281066666664 148.77495003638057 174.35281066666664C 149.05015584574096 174.35281066666664 149.28604653947846 171.78069333333326 149.56125234883885 171.78069333333326C 149.83645815819926 171.78069333333326 150.07234885193674 171.96441599999991 150.34755466129715 171.96441599999991C 151.17317208937837 171.96441599999991 151.88084417059085 178.76215466666656 152.70646159867206 178.76215466666656C 152.98166740803248 178.76215466666656 153.21755810176995 181.8854399999999 153.49276391113037 181.8854399999999C 153.76796972049075 181.8854399999999 154.00386041422826 167.00390400000003 154.27906622358864 167.00390400000003C 154.55427203294906 167.00390400000003 154.79016272668653 153.40842666666663 155.06536853604695 153.40842666666663C 155.34057434540736 153.40842666666663 155.57646503914484 150.6525866666666 155.85167084850525 150.6525866666666C 156.67728827658647 150.6525866666666 157.38496035779892 148.44791466666652 158.21057778588013 148.44791466666652C 158.48578359524055 148.44791466666652 158.72167428897802 151.57119999999998 158.99688009833844 151.57119999999998C 159.27208590769885 151.57119999999998 159.50797660143633 149.91769599999986 159.78318241079674 149.91769599999986C 160.05838822015716 149.91769599999986 160.29427891389463 156.16426666666655 160.56948472325504 156.16426666666655C 160.84469053261546 156.16426666666655 161.08058122635293 178.94587733333333 161.35578703571335 178.94587733333333C 162.18140446379456 178.94587733333333 162.88907654500701 177.8435413333333 163.71469397308823 177.8435413333333C 163.98989978244865 177.8435413333333 164.22579047618612 182.62033066666652 164.50099628554653 182.62033066666652C 164.77620209490695 182.62033066666652 165.01209278864442 184.45755733333328 165.28729859800484 184.45755733333328C 165.56250440736525 184.45755733333328 165.79839510110273 193.64369066666654 166.07360091046314 193.64369066666654C 166.34880671982353 193.64369066666654 166.58469741356103 197.1344213333333 166.85990322292142 197.1344213333333C 167.96072646036305 197.1344213333333 168.904289235313 194.19485866666662 170.00511247275463 194.19485866666662C 170.28031828211505 194.19485866666662 170.51620897585252 178.94587733333333 170.79141478521294 178.94587733333333C 171.06662059457332 178.94587733333333 171.30251128831082 169.20857599999988 171.5777170976712 169.20857599999988C 171.85292290703163 169.20857599999988 172.0888136007691 175.2714239999999 172.36401941012952 175.2714239999999C 173.18963683821073 175.2714239999999 173.8973089194232 181.33427199999983 174.72292634750443 181.33427199999983C 174.9981321568648 181.33427199999983 175.23402285060232 175.82259199999987 175.5092286599627 175.82259199999987C 175.78443446932312 175.82259199999987 176.0203251630606 176.00631466666653 176.295530972421 176.00631466666653C 176.57073678178142 176.00631466666653 176.8066274755189 168.84113066666657 177.0818332848793 168.84113066666657C 177.35703909423972 168.84113066666657 177.5929297879772 159.10382933333324 177.8681355973376 159.10382933333324C 178.69375302541883 159.10382933333324 179.40142510663128 157.81777066666666 180.2270425347125 157.81777066666666C 180.5022483440729 157.81777066666666 180.73813903781038 173.2504746666666 181.0133448471708 173.2504746666666C 181.2885506565312 173.2504746666666 181.5244413502687 163.14572799999996 181.7996471596291 163.14572799999996C 182.07485296898952 163.14572799999996 182.310743662727 137.24083199999995 182.5859494720874 137.24083199999995C 182.86115528144782 137.24083199999995 183.0970459751853 150.10141866666663 183.3722517845457 150.10141866666663C 184.19786921262693 150.10141866666663 184.90554129383938 157.81777066666666 185.7311587219206 157.81777066666666C 186.006364531281 157.81777066666666 186.24225522501848 167.18762666666657 186.5174610343789 167.18762666666657C 186.7926668437393 167.18762666666657 187.0285575374768 173.98536533333322 187.3037633468372 173.98536533333322C 187.5789691561976 173.98536533333322 187.8148598499351 169.02485333333334 188.09006565929548 169.02485333333334C 188.3652714686559 169.02485333333334 188.60116216239336 175.63886933333333 188.87636797175378 175.63886933333333C 189.701985399835 175.63886933333333 190.40965748104747 172.33186133333334 191.2352749091287 172.33186133333334C 191.5104807184891 172.33186133333334 191.74637141222658 173.2504746666666 192.021577221587 173.2504746666666C 192.29678303094738 173.2504746666666 192.53267372468488 172.69930666666653 192.80787953404527 172.69930666666653C 193.08308534340568 172.69930666666653 193.31897603714316 171.2295253333333 193.59418184650357 171.2295253333333C 193.869387655864 171.2295253333333 194.10527834960146 175.08770133333326 194.38048415896188 175.08770133333326C 195.2061015870431 175.08770133333326 195.91377366825554 179.4970453333333 196.73939109633676 179.4970453333333C 197.01459690569718 179.4970453333333 197.25048759943465 189.60179199999993 197.52569340879506 189.60179199999993C 197.80089921815548 189.60179199999993 198.03678991189295 192.72507733333327 198.31199572125337 192.72507733333327C 198.58720153061378 192.72507733333327 198.82309222435126 187.76456533333328 199.09829803371167 187.76456533333328C 199.3735038430721 187.76456533333328 199.60939453680956 184.8250026666666 199.88460034616998 184.8250026666666C 200.7102177742512 184.8250026666666 201.41788985546364 177.65981866666664 202.24350728354486 177.65981866666664C 202.51871309290527 177.65981866666664 202.75460378664275 160.9410559999999 203.02980959600316 160.9410559999999C 203.30501540536358 160.9410559999999 203.54090609910105 157.26660266666659 203.81611190846147 157.26660266666659C 204.09131771782188 157.26660266666659 204.32720841155935 156.53171199999997 204.60241422091977 156.53171199999997C 204.87762003028016 156.53171199999997 205.11351072401766 160.9410559999999 205.38871653337804 160.9410559999999C 206.21433396145926 160.9410559999999 206.92200604267174 156.3479893333332 207.74762347075296 156.3479893333332C 208.02282928011337 156.3479893333332 208.25871997385084 159.6549973333332 208.53392578321126 159.6549973333332C 208.80913159257165 159.6549973333332 209.04502228630915 158.73638399999993 209.32022809566953 158.73638399999993C 209.59543390502995 158.73638399999993 209.83132459876742 158.00149333333331 210.10653040812784 158.00149333333331C 210.38173621748825 158.00149333333331 210.61762691122573 146.79441066666664 210.89283272058614 146.79441066666664C 212.2803286761115 146.79441066666664 213.4696109237047 146.61068799999987 214.85710687923006 146.61068799999987C 215.13231268859047 146.61068799999987 215.36820338232795 140.3641173333333 215.64340919168836 140.3641173333333C 215.91861500104878 140.3641173333333 216.15450569478625 139.81294933333322 216.42971150414667 139.81294933333322C 217.25532893222788 139.81294933333322 217.96300101344033 142.56878933333326 218.78861844152155 142.56878933333326C 219.06382425088196 142.56878933333326 219.29971494461944 139.81294933333322 219.57492075397985 139.81294933333322C 219.85012656334027 139.81294933333322 220.08601725707774 156.71543466666662 220.36122306643816 156.71543466666662C 220.63642887579857 156.71543466666662 220.87231956953605 165.71784533333334 221.14752537889646 165.71784533333334C 221.42273118825688 165.71784533333334 221.65862188199435 167.18762666666657 221.93382769135476 167.18762666666657C 222.75944511943598 167.18762666666657 223.46711720064843 170.86207999999988 224.29273462872965 170.86207999999988C 224.56794043809006 170.86207999999988 224.80383113182754 173.80164266666657 225.07903694118795 173.80164266666657C 225.35424275054837 173.80164266666657 225.59013344428584 179.4970453333333 225.86533925364625 179.4970453333333C 226.14054506300667 179.4970453333333 226.37643575674414 171.96441599999991 226.65164156610456 171.96441599999991C 226.92684737546494 171.96441599999991 227.16273806920245 171.78069333333326 227.43794387856283 171.78069333333326C 228.26356130664405 171.78069333333326 228.97123338785653 166.82018133333327 229.79685081593774 166.82018133333327C 230.07205662529816 166.82018133333327 230.30794731903563 171.96441599999991 230.58315312839605 171.96441599999991C 230.85835893775644 171.96441599999991 231.09424963149394 168.2899626666665 231.36945544085432 168.2899626666665C 231.91986705957513 168.2899626666665 232.39164844705013 158.00149333333331 232.94206006577093 158.00149333333331C 233.76767749385215 158.00149333333331 234.47534957506463 159.83871999999997 235.30096700314584 159.83871999999997C 235.57617281250623 159.83871999999997 235.81206350624373 162.04339199999993 236.08726931560412 162.04339199999993C 236.36247512496453 162.04339199999993 236.598365818702 149.18280533333325 236.87357162806242 149.18280533333325C 237.14877743742284 149.18280533333325 237.3846681311603 145.32462933333318 237.65987394052073 145.32462933333318C 237.93507974988114 145.32462933333318 238.17097044361861 135.7710506666666 238.44617625297903 135.7710506666666C 239.27179368106025 135.7710506666666 239.9794657622727 134.1175466666665 240.8050831903539 134.1175466666665C 241.08028899971433 134.1175466666665 241.3161796934518 123.09418666666659 241.59138550281222 123.09418666666659C 241.86659131217263 123.09418666666659 242.1024820059101 121.25695999999994 242.37768781527052 121.25695999999994C 242.65289362463093 121.25695999999994 242.8887843183684 126.03374933333328 243.16399012772882 126.03374933333328C 243.4391959370892 126.03374933333328 243.6750866308267 119.78717866666659 243.9502924401871 119.78717866666659C 244.77590986826831 119.78717866666659 245.4835819494808 114.8266666666666 246.309199377562 114.8266666666666C 246.58440518692242 114.8266666666666 246.8202958806599 118.68484266666655 247.0955016900203 118.68484266666655C 247.37070749938073 118.68484266666655 247.6065981931182 110.96849066666653 247.88180400247862 110.96849066666653C 248.157009811839 110.96849066666653 248.3929005055765 118.86856533333321 248.6681063149369 118.86856533333321C 248.9433121242973 118.86856533333321 249.17920281803478 81.57286399999987 249.4544086273952 81.57286399999987C 250.2800260554764 81.57286399999987 250.9876981366889 84.14498133333325 251.8133155647701 84.14498133333325C 252.0885213741305 84.14498133333325 252.324412067868 82.85892266666656 252.59961787722838 82.85892266666656C 252.8748236865888 82.85892266666656 253.11071438032627 71.83556266666653 253.3859201896867 71.83556266666653C 253.6611259990471 71.83556266666653 253.89701669278458 75.87746133333326 254.172222502145 75.87746133333326C 254.4474283115054 75.87746133333326 254.68331900524288 78.81702399999995 254.9585248146033 78.81702399999995C 255.7841422426845 78.81702399999995 256.49181432389696 82.12403199999994 257.3174317519782 82.12403199999994C 257.867843370699 82.12403199999994 258.33962475817395 81.75658666666664 258.8900363768948 81.75658666666664C 259.16524218625517 81.75658666666664 259.4011328799927 86.34965333333332 259.6763386893531 86.34965333333332C 259.9515444987135 86.34965333333332 260.187435192451 93.69855999999993 260.4626410018114 93.69855999999993C 261.2882584298926 93.69855999999993 261.9959305111051 79.36819199999991 262.8215479391863 79.36819199999991C 263.3719595579071 79.36819199999991 263.8437409453821 67.24249599999985 264.39415256410285 67.24249599999985C 264.66935837346324 67.24249599999985 264.90524906720077 78.08213333333322 265.18045487656116 78.08213333333322C 265.45566068592154 78.08213333333322 265.6915513796591 71.10067199999992 265.96675718901946 71.10067199999992C 266.7923746171007 71.10067199999992 267.50004669831316 74.59140266666668 268.3256641263944 74.59140266666668C 268.60086993575476 74.59140266666668 268.8367606294923 70.91694933333326 269.1119664388527 70.91694933333326C 269.38717224821306 70.91694933333326 269.6230629419506 61.3633706666667 269.898268751311 61.3633706666667C 270.17347456067137 61.3633706666667 270.4093652544089 62.09826133333331 270.6845710637693 62.09826133333331C 270.95977687312967 62.09826133333331 271.1956675668672 71.83556266666653 271.4708733762276 71.83556266666653C 272.2964908043088 71.83556266666653 273.0041628855212 70.54950399999996 273.82978031360244 70.54950399999996C 274.1049861229628 70.54950399999996 274.34087681670036 70.73322666666661 274.61608262606075 70.73322666666661C 274.89128843542113 70.73322666666661 275.12717912915866 75.69373866666649 275.40238493851905 75.69373866666649C 275.67759074787944 75.69373866666649 275.91348144161697 78.44957866666664 276.18868725097735 78.44957866666664C 276.46389306033774 78.44957866666664 276.69978375407527 73.85651199999995 276.97498956343566 73.85651199999995C 278.07581280087726 73.85651199999995 279.01937557582727 74.40767999999991 280.12019881326887 74.40767999999991C 280.39540462262926 74.40767999999991 280.63129531636673 68.89599999999996 280.9065011257271 68.89599999999996C 281.1817069350875 68.89599999999996 281.41759762882504 71.65183999999988 281.6928034381854 71.65183999999988C 281.9680092475458 71.65183999999988 282.20389994128334 67.60994133333327 282.4791057506437 67.60994133333327C 283.30472317872494 67.60994133333327 284.0123952599374 69.0797226666665 284.83801268801864 69.0797226666665C 285.113218497379 69.0797226666665 285.34910919111655 63.93548799999985 285.62431500047694 63.93548799999985C 285.8995208098373 63.93548799999985 286.13541150357486 74.59140266666668 286.41061731293524 74.59140266666668C 286.68582312229563 74.59140266666668 286.92171381603316 76.61235199999999 287.19691962539355 76.61235199999999C 287.47212543475393 76.61235199999999 287.70801612849147 67.24249599999985 287.98322193785185 67.24249599999985C 288.80883936593307 67.24249599999985 289.5165114471455 71.65183999999988 290.3421288752267 71.65183999999988C 290.6173346845871 71.65183999999988 290.8532253783246 64.11921066666662 291.128431187685 64.11921066666662C 291.4036369970454 64.11921066666662 291.6395276907829 66.14015999999992 291.9147335001433 66.14015999999992C 292.1899393095037 66.14015999999992 292.42583000324123 72.20300799999995 292.7010358126016 72.20300799999995C 292.976241621962 72.20300799999995 293.21213231569953 52.91212799999994 293.4873381250599 52.91212799999994C 294.31295555314114 52.91212799999994 295.0206276343536 61.73081599999989 295.84624506243483 61.73081599999989C 296.1214508717952 61.73081599999989 296.35734156553275 57.137749333333204 296.63254737489314 57.137749333333204C 296.9077531842535 57.137749333333204 297.143643877991 58.60753066666655 297.4188496873514 58.60753066666655C 297.69405549671177 58.60753066666655 297.9299461904493 62.281983999999966 298.2051519998097 62.281983999999966C 298.4803578091701 62.281983999999966 298.7162485029076 61.914538666666544 298.991454312268 61.914538666666544C 300.0922775497096 61.914538666666544 301.0358403246596 55.30052266666655 302.1366635621012 55.30052266666655C 302.4118693714616 55.30052266666655 302.6477600651991 59.342421333333164 302.9229658745595 59.342421333333164C 303.1981716839199 59.342421333333164 303.4340623776574 67.24249599999985 303.7092681870178 67.24249599999985C 303.9844739963782 67.24249599999985 304.22036469011573 63.38432 304.4955704994761 63.38432C 305.32118792755733 63.38432 306.02886000876975 71.46811733333323 306.85447743685097 71.46811733333323C 307.12968324621136 71.46811733333323 307.3655739399489 62.64942933333316 307.6407797493093 62.64942933333316C 307.91598555866966 62.64942933333316 308.1518762524072 44.09343999999987 308.4270820617676 44.09343999999987"
                                                    fill="none" fill-opacity="1" stroke="#8fbd56" stroke-opacity="1"
                                                    stroke-linecap="butt" stroke-width="1" stroke-dasharray="0"
                                                    class="apexcharts-area" index="0"
                                                    clip-path="url(#gridRectMask2ufi2hjn)"
                                                    pathTo="M -6.0929328494309125 203.01354666666657C -5.818045565312823 203.01354666666657 -5.582427893211604 195.84836266666662 -5.307540609093515 195.84836266666662C -5.0323347997331105 195.84836266666662 -4.79644410599562 198.7879253333333 -4.521238296635216 198.7879253333333C -4.246032487274812 198.7879253333333 -4.010141793537322 201.17631999999992 -3.734935984176918 201.17631999999992C -2.9093185560957044 201.17631999999992 -2.2016464748832356 202.0949333333333 -1.3760290468020224 202.0949333333333C -1.100823237441618 202.0949333333333 -0.8649325437041284 203.01354666666657 -0.5897267343437239 203.01354666666657C -0.31452092498331946 203.01354666666657 -0.07863023124582982 197.68558933333327 0.19657557811457463 197.68558933333327C 0.4717813874749791 197.68558933333327 0.7076720812124686 196.7669759999999 0.9828778905728731 196.7669759999999C 1.2580836999332776 196.7669759999999 1.4939743936707672 186.4785066666666 1.7691802030311716 186.4785066666666C 2.594797631112385 186.4785066666666 3.3024697123248536 186.29478399999994 4.128087140406067 186.29478399999994C 4.403292949766471 186.29478399999994 4.639183643503961 178.5784319999999 4.9143894528643655 178.5784319999999C 5.18959526222477 178.5784319999999 5.42548595596226 181.8854399999999 5.700691765322664 181.8854399999999C 5.975897574683068 181.8854399999999 6.211788268420558 171.78069333333326 6.486994077780962 171.78069333333326C 6.762199887141367 171.78069333333326 6.9980905808788565 179.8644906666666 7.2732963902392616 179.8644906666666C 8.098913818320474 179.8644906666666 8.806585899532944 177.29237333333322 9.632203327614157 177.29237333333322C 9.907409136974561 177.29237333333322 10.143299830712051 175.63886933333333 10.418505640072455 175.63886933333333C 10.69371144943286 175.63886933333333 10.92960214317035 175.2714239999999 11.204807952530754 175.2714239999999C 11.480013761891158 175.2714239999999 11.715904455628648 167.9225173333333 11.991110264989052 167.9225173333333C 12.266316074349456 167.9225173333333 12.502206768086946 169.9434666666666 12.77741257744735 169.9434666666666C 13.878235814888967 169.9434666666666 14.821798589838927 173.80164266666657 15.922621827280544 173.80164266666657C 16.197827636640948 173.80164266666657 16.43371833037844 177.65981866666664 16.708924139738844 177.65981866666664C 16.98412994909925 177.65981866666664 17.220020642836737 165.901568 17.49522645219714 165.901568C 17.770432261557545 165.901568 18.006322955295037 157.81777066666666 18.28152876465544 157.81777066666666C 19.107146192736653 157.81777066666666 19.814818273949122 160.38988799999981 20.640435702030334 160.38988799999981C 20.91564151139074 160.38988799999981 21.15153220512823 160.38988799999981 21.426738014488635 160.38988799999981C 21.70194382384904 160.38988799999981 21.937834517586527 167.37134933333323 22.21304032694693 167.37134933333323C 22.488246136307335 167.37134933333323 22.724136830044827 163.51317333333327 22.99934263940523 163.51317333333327C 23.274548448765636 163.51317333333327 23.510439142503127 151.93864533333328 23.78564495186353 151.93864533333328C 24.611262379944744 151.93864533333328 25.318934461157212 161.3085013333333 26.144551889238425 161.3085013333333C 26.41975769859883 161.3085013333333 26.65564839233632 183.90638933333332 26.930854201696725 183.90638933333332C 27.20606001105713 183.90638933333332 27.441950704794618 176.1900373333333 27.717156514155022 176.1900373333333C 27.992362323515426 176.1900373333333 28.228253017252918 164.43178666666665 28.503458826613322 164.43178666666665C 28.778664635973726 164.43178666666665 29.014555329711214 153.59214933333328 29.28976113907162 153.59214933333328C 30.11537856715283 153.59214933333328 30.823050648365303 155.0619306666665 31.648668076446516 155.0619306666665C 31.92387388580692 155.0619306666665 32.15976457954441 142.93623466666656 32.434970388904816 142.93623466666656C 32.710176198265216 142.93623466666656 32.94606689200271 151.20375466666655 33.22127270136311 151.20375466666655C 33.49647851072351 151.20375466666655 33.73236920446101 143.85484799999983 34.00757501382141 143.85484799999983C 34.28278082318181 143.85484799999983 34.518671516919305 150.28514133333329 34.793877326279706 150.28514133333329C 35.61949475436092 150.28514133333329 36.32716683557339 137.60827733333326 37.1527842636546 137.60827733333326C 37.42799007301501 137.60827733333326 37.6638807667525 162.41083733333335 37.939086576112906 162.41083733333335C 38.21429238547331 162.41083733333335 38.4501830792108 155.0619306666665 38.7253888885712 155.0619306666665C 39.000594697931604 155.0619306666665 39.2364853916691 152.3060906666666 39.5116912010295 152.3060906666666C 39.7868970103899 152.3060906666666 40.022787704127396 150.46886399999983 40.297993513487796 150.46886399999983C 41.11214403284566 150.46886399999983 41.8099873351524 139.62922666666657 42.624137854510266 139.62922666666657C 42.89934366387067 139.62922666666657 43.13523435760816 135.4036053333332 43.41044016696856 135.4036053333332C 43.68564597632896 135.4036053333332 43.92153667006646 138.52689066666653 44.19674247942686 138.52689066666653C 44.47194828878727 138.52689066666653 44.707838982524756 138.15944533333334 44.98304479188516 138.15944533333334C 45.258250601245564 138.15944533333334 45.49414129498306 141.28273066666657 45.76934710434346 141.28273066666657C 46.594964532424676 141.28273066666657 47.30263661363714 134.1175466666665 48.12825404171836 134.1175466666665C 48.40345985107876 134.1175466666665 48.63935054481625 141.28273066666657 48.91455635417665 141.28273066666657C 49.189762163537054 141.28273066666657 49.42565285727455 156.89915733333328 49.70085866663495 156.89915733333328C 49.97606447599535 156.89915733333328 50.211955169732846 154.51076266666655 50.48716097909325 154.51076266666655C 51.58798421653486 154.51076266666655 52.53154699148483 161.3085013333333 53.63237022892645 161.3085013333333C 53.90757603828685 161.3085013333333 54.14346673202434 172.51558399999988 54.418672541384744 172.51558399999988C 54.693878350745145 172.51558399999988 54.92976904448264 165.16667733333327 55.20497485384304 165.16667733333327C 55.48018066320344 165.16667733333327 55.71607135694094 155.24565333333328 55.99127716630134 155.24565333333328C 56.266482975661745 155.24565333333328 56.50237366939923 162.04339199999993 56.77757947875964 162.04339199999993C 57.60319690684085 162.04339199999993 58.31086898805332 168.2899626666665 59.13648641613453 168.2899626666665C 59.41169222549494 168.2899626666665 59.64758291923243 149.91769599999986 59.922788728592835 149.91769599999986C 60.197994537953235 149.91769599999986 60.43388523169073 158.18521599999985 60.70909104105113 158.18521599999985C 60.98429685041153 158.18521599999985 61.22018754414903 167.00390400000003 61.49539335350943 167.00390400000003C 61.77059916286983 167.00390400000003 62.006489856607324 164.24806399999989 62.281695665967725 164.24806399999989C 63.10731309404894 164.24806399999989 63.81498517526141 172.33186133333334 64.64060260334263 172.33186133333334C 64.91580841270303 172.33186133333334 65.15169910644052 176.37375999999995 65.42690491580092 176.37375999999995C 65.70211072516132 176.37375999999995 65.93800141889882 162.9620053333332 66.21320722825922 162.9620053333332C 66.48841303761962 162.9620053333332 66.72430373135713 160.57361066666658 66.99950954071753 160.57361066666658C 67.27471535007793 160.57361066666658 67.51060604381541 154.69448533333332 67.78581185317582 154.69448533333332C 68.61142928125703 154.69448533333332 69.3191013624695 155.24565333333328 70.14471879055071 155.24565333333328C 70.41992459991111 155.24565333333328 70.65581529364862 151.20375466666655 70.93102110300902 151.20375466666655C 71.20622691236942 151.20375466666655 71.4421176061069 151.38747733333332 71.7173234154673 151.38747733333332C 71.9925292248277 151.38747733333332 72.22841991856521 159.47127466666655 72.50362572792561 159.47127466666655C 72.77883153728601 159.47127466666655 73.01472223102351 172.51558399999988 73.28992804038391 172.51558399999988C 74.11554546846511 172.51558399999988 74.8232175496776 174.16908799999987 75.6488349777588 174.16908799999987C 75.9240407871192 174.16908799999987 76.1599314808567 171.41324799999984 76.4351372902171 171.41324799999984C 76.7103430995775 171.41324799999984 76.946233793315 174.16908799999987 77.2214396026754 174.16908799999987C 77.4966454120358 174.16908799999987 77.73253610577329 185.1924479999999 78.00774191513369 185.1924479999999C 78.2829477244941 185.1924479999999 78.5188384182316 180.04821333333325 78.794044227592 180.04821333333325C 79.61966165567321 180.04821333333325 80.32733373688568 179.4970453333333 81.1529511649669 179.4970453333333C 81.4281569743273 179.4970453333333 81.6640476680648 177.65981866666664 81.9392534774252 177.65981866666664C 82.2144592867856 177.65981866666664 82.45034998052309 177.10865066666656 82.72555578988349 177.10865066666656C 83.00076159924389 177.10865066666656 83.23665229298139 183.5389439999999 83.51185810234179 183.5389439999999C 83.78706391170219 183.5389439999999 84.02295460543968 196.39953066666658 84.29816041480008 196.39953066666658C 85.1237778428813 196.39953066666658 85.83144992409376 183.5389439999999 86.65706735217498 183.5389439999999C 86.93227316153538 183.5389439999999 87.16816385527288 183.5389439999999 87.44336966463328 183.5389439999999C 87.71857547399368 183.5389439999999 87.95446616773118 180.41565866666656 88.22967197709158 180.41565866666656C 88.50487778645198 180.41565866666656 88.74076848018947 192.1739093333333 89.01597428954987 192.1739093333333C 89.29118009891027 192.1739093333333 89.52707079264778 191.07157333333328 89.80227660200818 191.07157333333328C 90.9030998394498 191.07157333333328 91.84666261439975 182.8040533333333 92.94748585184136 182.8040533333333C 93.22269166120176 182.8040533333333 93.45858235493927 196.7669759999999 93.73378816429967 196.7669759999999C 94.00899397366007 196.7669759999999 94.24488466739757 201.17631999999992 94.52009047675797 201.17631999999992C 94.79529628611837 201.17631999999992 95.03118697985586 223.77420799999993 95.30639278921626 223.77420799999993C 96.13201021729748 223.77420799999993 96.83968229850994 214.77179733333332 97.66529972659116 214.77179733333332C 97.94050553595156 214.77179733333332 98.17639622968906 207.60661333333326 98.45160203904946 207.60661333333326C 98.72680784840986 207.60661333333326 98.96269854214735 189.41806933333328 99.23790435150775 189.41806933333328C 99.51311016086815 189.41806933333328 99.74900085460565 196.21580799999992 100.02420666396605 196.21580799999992C 100.29941247332646 196.21580799999992 100.53530316706396 190.1529599999999 100.81050897642436 190.1529599999999C 101.63612640450557 190.1529599999999 102.34379848571804 199.70653866666657 103.16941591379926 199.70653866666657C 103.44462172315966 199.70653866666657 103.68051241689714 187.94828799999993 103.95571822625755 187.94828799999993C 104.23092403561795 187.94828799999993 104.46681472935545 187.58084266666663 104.74202053871585 187.58084266666663C 105.01722634807625 187.58084266666663 105.25311704181375 189.7855146666666 105.52832285117415 189.7855146666666C 105.80352866053455 189.7855146666666 106.03941935427204 176.5574826666666 106.31462516363244 176.5574826666666C 107.14024259171366 176.5574826666666 107.84791467292612 172.14813866666657 108.67353210100734 172.14813866666657C 108.94873791036774 172.14813866666657 109.18462860410524 167.37134933333323 109.45983441346564 167.37134933333323C 109.73504022282604 167.37134933333323 109.97093091656353 183.90638933333332 110.24613672592393 183.90638933333332C 110.52134253528433 183.90638933333332 110.75723322902184 197.86931199999992 111.03243903838224 197.86931199999992C 111.30764484774264 197.86931199999992 111.54353554148014 191.62274133333324 111.81874135084054 191.62274133333324C 112.64435877892174 191.62274133333324 113.35203086013422 205.03449599999988 114.17764828821542 205.03449599999988C 114.45285409757582 205.03449599999988 114.68874479131333 200.8088746666666 114.96395060067373 200.8088746666666C 115.23915641003413 200.8088746666666 115.47504710377163 194.56230399999993 115.75025291313203 194.56230399999993C 116.02545872249243 194.56230399999993 116.26134941622992 198.97164799999985 116.53655522559032 198.97164799999985C 116.81176103495072 198.97164799999985 117.04765172868822 176.92492800000002 117.32285753804862 176.92492800000002C 118.14847496612984 176.92492800000002 118.8561470473423 180.23193600000002 119.68176447542352 180.23193600000002C 119.95697028478392 180.23193600000002 120.19286097852142 174.35281066666664 120.46806678788182 174.35281066666664C 121.01847840660263 174.35281066666664 121.49025979407762 173.98536533333322 122.04067141279842 173.98536533333322C 122.31587722215882 173.98536533333322 122.5517679158963 195.29719466666654 122.8269737252567 195.29719466666654C 123.65259115333792 195.29719466666654 124.36026323455039 212.56712533333325 125.1858806626316 212.56712533333325C 125.461086471992 212.56712533333325 125.6969771657295 212.3834026666666 125.97218297508991 212.3834026666666C 126.24738878445031 212.3834026666666 126.48327947818781 216.79274666666663 126.75848528754821 216.79274666666663C 127.03369109690861 216.79274666666663 127.2695817906461 217.89508266666655 127.5447876000065 217.89508266666655C 127.8199934093669 217.89508266666655 128.05588410310438 208.52522666666664 128.3310899124648 208.52522666666664C 129.156707340546 208.52522666666664 129.86437942175849 213.11829333333333 130.6899968498397 213.11829333333333C 130.96520265920012 213.11829333333333 131.2010933529376 208.52522666666664 131.476299162298 208.52522666666664C 131.75150497165842 208.52522666666664 131.9873956653959 194.19485866666662 132.2626014747563 194.19485866666662C 132.5378072841167 194.19485866666662 132.7736979778542 185.74361599999986 133.04890378721458 185.74361599999986C 133.324109596575 185.74361599999986 133.56000029031247 195.1134719999999 133.8352060996729 195.1134719999999C 134.6608235277541 195.1134719999999 135.36849560896658 208.7089493333333 136.1941130370478 208.7089493333333C 136.46931884640819 208.7089493333333 136.7052095401457 220.09975466666663 136.98041534950607 220.09975466666663C 137.2556211588665 220.09975466666663 137.49151185260396 214.4043519999999 137.76671766196438 214.4043519999999C 138.0419234713248 214.4043519999999 138.27781416506227 203.01354666666657 138.55301997442268 203.01354666666657C 138.8282257837831 203.01354666666657 139.06411647752057 185.74361599999986 139.33932228688099 185.74361599999986C 140.1649397149622 185.74361599999986 140.87261179617465 201.91121066666653 141.69822922425587 201.91121066666653C 141.97343503361628 201.91121066666653 142.20932572735376 204.29960533333326 142.48453153671417 204.29960533333326C 142.7597373460746 204.29960533333326 142.99562803981206 207.7903359999999 143.27083384917248 207.7903359999999C 143.5460396585329 207.7903359999999 143.78193035227036 209.81128533333333 144.05713616163078 209.81128533333333C 144.3323419709912 209.81128533333333 144.56823266472867 183.35522133333325 144.84343847408908 183.35522133333325C 145.6690559021703 183.35522133333325 146.37672798338275 181.1505493333333 147.20234541146397 181.1505493333333C 147.47755122082438 181.1505493333333 147.71344191456186 176.92492800000002 147.98864772392227 176.92492800000002C 148.26385353328268 176.92492800000002 148.49974422702016 174.35281066666664 148.77495003638057 174.35281066666664C 149.05015584574096 174.35281066666664 149.28604653947846 171.78069333333326 149.56125234883885 171.78069333333326C 149.83645815819926 171.78069333333326 150.07234885193674 171.96441599999991 150.34755466129715 171.96441599999991C 151.17317208937837 171.96441599999991 151.88084417059085 178.76215466666656 152.70646159867206 178.76215466666656C 152.98166740803248 178.76215466666656 153.21755810176995 181.8854399999999 153.49276391113037 181.8854399999999C 153.76796972049075 181.8854399999999 154.00386041422826 167.00390400000003 154.27906622358864 167.00390400000003C 154.55427203294906 167.00390400000003 154.79016272668653 153.40842666666663 155.06536853604695 153.40842666666663C 155.34057434540736 153.40842666666663 155.57646503914484 150.6525866666666 155.85167084850525 150.6525866666666C 156.67728827658647 150.6525866666666 157.38496035779892 148.44791466666652 158.21057778588013 148.44791466666652C 158.48578359524055 148.44791466666652 158.72167428897802 151.57119999999998 158.99688009833844 151.57119999999998C 159.27208590769885 151.57119999999998 159.50797660143633 149.91769599999986 159.78318241079674 149.91769599999986C 160.05838822015716 149.91769599999986 160.29427891389463 156.16426666666655 160.56948472325504 156.16426666666655C 160.84469053261546 156.16426666666655 161.08058122635293 178.94587733333333 161.35578703571335 178.94587733333333C 162.18140446379456 178.94587733333333 162.88907654500701 177.8435413333333 163.71469397308823 177.8435413333333C 163.98989978244865 177.8435413333333 164.22579047618612 182.62033066666652 164.50099628554653 182.62033066666652C 164.77620209490695 182.62033066666652 165.01209278864442 184.45755733333328 165.28729859800484 184.45755733333328C 165.56250440736525 184.45755733333328 165.79839510110273 193.64369066666654 166.07360091046314 193.64369066666654C 166.34880671982353 193.64369066666654 166.58469741356103 197.1344213333333 166.85990322292142 197.1344213333333C 167.96072646036305 197.1344213333333 168.904289235313 194.19485866666662 170.00511247275463 194.19485866666662C 170.28031828211505 194.19485866666662 170.51620897585252 178.94587733333333 170.79141478521294 178.94587733333333C 171.06662059457332 178.94587733333333 171.30251128831082 169.20857599999988 171.5777170976712 169.20857599999988C 171.85292290703163 169.20857599999988 172.0888136007691 175.2714239999999 172.36401941012952 175.2714239999999C 173.18963683821073 175.2714239999999 173.8973089194232 181.33427199999983 174.72292634750443 181.33427199999983C 174.9981321568648 181.33427199999983 175.23402285060232 175.82259199999987 175.5092286599627 175.82259199999987C 175.78443446932312 175.82259199999987 176.0203251630606 176.00631466666653 176.295530972421 176.00631466666653C 176.57073678178142 176.00631466666653 176.8066274755189 168.84113066666657 177.0818332848793 168.84113066666657C 177.35703909423972 168.84113066666657 177.5929297879772 159.10382933333324 177.8681355973376 159.10382933333324C 178.69375302541883 159.10382933333324 179.40142510663128 157.81777066666666 180.2270425347125 157.81777066666666C 180.5022483440729 157.81777066666666 180.73813903781038 173.2504746666666 181.0133448471708 173.2504746666666C 181.2885506565312 173.2504746666666 181.5244413502687 163.14572799999996 181.7996471596291 163.14572799999996C 182.07485296898952 163.14572799999996 182.310743662727 137.24083199999995 182.5859494720874 137.24083199999995C 182.86115528144782 137.24083199999995 183.0970459751853 150.10141866666663 183.3722517845457 150.10141866666663C 184.19786921262693 150.10141866666663 184.90554129383938 157.81777066666666 185.7311587219206 157.81777066666666C 186.006364531281 157.81777066666666 186.24225522501848 167.18762666666657 186.5174610343789 167.18762666666657C 186.7926668437393 167.18762666666657 187.0285575374768 173.98536533333322 187.3037633468372 173.98536533333322C 187.5789691561976 173.98536533333322 187.8148598499351 169.02485333333334 188.09006565929548 169.02485333333334C 188.3652714686559 169.02485333333334 188.60116216239336 175.63886933333333 188.87636797175378 175.63886933333333C 189.701985399835 175.63886933333333 190.40965748104747 172.33186133333334 191.2352749091287 172.33186133333334C 191.5104807184891 172.33186133333334 191.74637141222658 173.2504746666666 192.021577221587 173.2504746666666C 192.29678303094738 173.2504746666666 192.53267372468488 172.69930666666653 192.80787953404527 172.69930666666653C 193.08308534340568 172.69930666666653 193.31897603714316 171.2295253333333 193.59418184650357 171.2295253333333C 193.869387655864 171.2295253333333 194.10527834960146 175.08770133333326 194.38048415896188 175.08770133333326C 195.2061015870431 175.08770133333326 195.91377366825554 179.4970453333333 196.73939109633676 179.4970453333333C 197.01459690569718 179.4970453333333 197.25048759943465 189.60179199999993 197.52569340879506 189.60179199999993C 197.80089921815548 189.60179199999993 198.03678991189295 192.72507733333327 198.31199572125337 192.72507733333327C 198.58720153061378 192.72507733333327 198.82309222435126 187.76456533333328 199.09829803371167 187.76456533333328C 199.3735038430721 187.76456533333328 199.60939453680956 184.8250026666666 199.88460034616998 184.8250026666666C 200.7102177742512 184.8250026666666 201.41788985546364 177.65981866666664 202.24350728354486 177.65981866666664C 202.51871309290527 177.65981866666664 202.75460378664275 160.9410559999999 203.02980959600316 160.9410559999999C 203.30501540536358 160.9410559999999 203.54090609910105 157.26660266666659 203.81611190846147 157.26660266666659C 204.09131771782188 157.26660266666659 204.32720841155935 156.53171199999997 204.60241422091977 156.53171199999997C 204.87762003028016 156.53171199999997 205.11351072401766 160.9410559999999 205.38871653337804 160.9410559999999C 206.21433396145926 160.9410559999999 206.92200604267174 156.3479893333332 207.74762347075296 156.3479893333332C 208.02282928011337 156.3479893333332 208.25871997385084 159.6549973333332 208.53392578321126 159.6549973333332C 208.80913159257165 159.6549973333332 209.04502228630915 158.73638399999993 209.32022809566953 158.73638399999993C 209.59543390502995 158.73638399999993 209.83132459876742 158.00149333333331 210.10653040812784 158.00149333333331C 210.38173621748825 158.00149333333331 210.61762691122573 146.79441066666664 210.89283272058614 146.79441066666664C 212.2803286761115 146.79441066666664 213.4696109237047 146.61068799999987 214.85710687923006 146.61068799999987C 215.13231268859047 146.61068799999987 215.36820338232795 140.3641173333333 215.64340919168836 140.3641173333333C 215.91861500104878 140.3641173333333 216.15450569478625 139.81294933333322 216.42971150414667 139.81294933333322C 217.25532893222788 139.81294933333322 217.96300101344033 142.56878933333326 218.78861844152155 142.56878933333326C 219.06382425088196 142.56878933333326 219.29971494461944 139.81294933333322 219.57492075397985 139.81294933333322C 219.85012656334027 139.81294933333322 220.08601725707774 156.71543466666662 220.36122306643816 156.71543466666662C 220.63642887579857 156.71543466666662 220.87231956953605 165.71784533333334 221.14752537889646 165.71784533333334C 221.42273118825688 165.71784533333334 221.65862188199435 167.18762666666657 221.93382769135476 167.18762666666657C 222.75944511943598 167.18762666666657 223.46711720064843 170.86207999999988 224.29273462872965 170.86207999999988C 224.56794043809006 170.86207999999988 224.80383113182754 173.80164266666657 225.07903694118795 173.80164266666657C 225.35424275054837 173.80164266666657 225.59013344428584 179.4970453333333 225.86533925364625 179.4970453333333C 226.14054506300667 179.4970453333333 226.37643575674414 171.96441599999991 226.65164156610456 171.96441599999991C 226.92684737546494 171.96441599999991 227.16273806920245 171.78069333333326 227.43794387856283 171.78069333333326C 228.26356130664405 171.78069333333326 228.97123338785653 166.82018133333327 229.79685081593774 166.82018133333327C 230.07205662529816 166.82018133333327 230.30794731903563 171.96441599999991 230.58315312839605 171.96441599999991C 230.85835893775644 171.96441599999991 231.09424963149394 168.2899626666665 231.36945544085432 168.2899626666665C 231.91986705957513 168.2899626666665 232.39164844705013 158.00149333333331 232.94206006577093 158.00149333333331C 233.76767749385215 158.00149333333331 234.47534957506463 159.83871999999997 235.30096700314584 159.83871999999997C 235.57617281250623 159.83871999999997 235.81206350624373 162.04339199999993 236.08726931560412 162.04339199999993C 236.36247512496453 162.04339199999993 236.598365818702 149.18280533333325 236.87357162806242 149.18280533333325C 237.14877743742284 149.18280533333325 237.3846681311603 145.32462933333318 237.65987394052073 145.32462933333318C 237.93507974988114 145.32462933333318 238.17097044361861 135.7710506666666 238.44617625297903 135.7710506666666C 239.27179368106025 135.7710506666666 239.9794657622727 134.1175466666665 240.8050831903539 134.1175466666665C 241.08028899971433 134.1175466666665 241.3161796934518 123.09418666666659 241.59138550281222 123.09418666666659C 241.86659131217263 123.09418666666659 242.1024820059101 121.25695999999994 242.37768781527052 121.25695999999994C 242.65289362463093 121.25695999999994 242.8887843183684 126.03374933333328 243.16399012772882 126.03374933333328C 243.4391959370892 126.03374933333328 243.6750866308267 119.78717866666659 243.9502924401871 119.78717866666659C 244.77590986826831 119.78717866666659 245.4835819494808 114.8266666666666 246.309199377562 114.8266666666666C 246.58440518692242 114.8266666666666 246.8202958806599 118.68484266666655 247.0955016900203 118.68484266666655C 247.37070749938073 118.68484266666655 247.6065981931182 110.96849066666653 247.88180400247862 110.96849066666653C 248.157009811839 110.96849066666653 248.3929005055765 118.86856533333321 248.6681063149369 118.86856533333321C 248.9433121242973 118.86856533333321 249.17920281803478 81.57286399999987 249.4544086273952 81.57286399999987C 250.2800260554764 81.57286399999987 250.9876981366889 84.14498133333325 251.8133155647701 84.14498133333325C 252.0885213741305 84.14498133333325 252.324412067868 82.85892266666656 252.59961787722838 82.85892266666656C 252.8748236865888 82.85892266666656 253.11071438032627 71.83556266666653 253.3859201896867 71.83556266666653C 253.6611259990471 71.83556266666653 253.89701669278458 75.87746133333326 254.172222502145 75.87746133333326C 254.4474283115054 75.87746133333326 254.68331900524288 78.81702399999995 254.9585248146033 78.81702399999995C 255.7841422426845 78.81702399999995 256.49181432389696 82.12403199999994 257.3174317519782 82.12403199999994C 257.867843370699 82.12403199999994 258.33962475817395 81.75658666666664 258.8900363768948 81.75658666666664C 259.16524218625517 81.75658666666664 259.4011328799927 86.34965333333332 259.6763386893531 86.34965333333332C 259.9515444987135 86.34965333333332 260.187435192451 93.69855999999993 260.4626410018114 93.69855999999993C 261.2882584298926 93.69855999999993 261.9959305111051 79.36819199999991 262.8215479391863 79.36819199999991C 263.3719595579071 79.36819199999991 263.8437409453821 67.24249599999985 264.39415256410285 67.24249599999985C 264.66935837346324 67.24249599999985 264.90524906720077 78.08213333333322 265.18045487656116 78.08213333333322C 265.45566068592154 78.08213333333322 265.6915513796591 71.10067199999992 265.96675718901946 71.10067199999992C 266.7923746171007 71.10067199999992 267.50004669831316 74.59140266666668 268.3256641263944 74.59140266666668C 268.60086993575476 74.59140266666668 268.8367606294923 70.91694933333326 269.1119664388527 70.91694933333326C 269.38717224821306 70.91694933333326 269.6230629419506 61.3633706666667 269.898268751311 61.3633706666667C 270.17347456067137 61.3633706666667 270.4093652544089 62.09826133333331 270.6845710637693 62.09826133333331C 270.95977687312967 62.09826133333331 271.1956675668672 71.83556266666653 271.4708733762276 71.83556266666653C 272.2964908043088 71.83556266666653 273.0041628855212 70.54950399999996 273.82978031360244 70.54950399999996C 274.1049861229628 70.54950399999996 274.34087681670036 70.73322666666661 274.61608262606075 70.73322666666661C 274.89128843542113 70.73322666666661 275.12717912915866 75.69373866666649 275.40238493851905 75.69373866666649C 275.67759074787944 75.69373866666649 275.91348144161697 78.44957866666664 276.18868725097735 78.44957866666664C 276.46389306033774 78.44957866666664 276.69978375407527 73.85651199999995 276.97498956343566 73.85651199999995C 278.07581280087726 73.85651199999995 279.01937557582727 74.40767999999991 280.12019881326887 74.40767999999991C 280.39540462262926 74.40767999999991 280.63129531636673 68.89599999999996 280.9065011257271 68.89599999999996C 281.1817069350875 68.89599999999996 281.41759762882504 71.65183999999988 281.6928034381854 71.65183999999988C 281.9680092475458 71.65183999999988 282.20389994128334 67.60994133333327 282.4791057506437 67.60994133333327C 283.30472317872494 67.60994133333327 284.0123952599374 69.0797226666665 284.83801268801864 69.0797226666665C 285.113218497379 69.0797226666665 285.34910919111655 63.93548799999985 285.62431500047694 63.93548799999985C 285.8995208098373 63.93548799999985 286.13541150357486 74.59140266666668 286.41061731293524 74.59140266666668C 286.68582312229563 74.59140266666668 286.92171381603316 76.61235199999999 287.19691962539355 76.61235199999999C 287.47212543475393 76.61235199999999 287.70801612849147 67.24249599999985 287.98322193785185 67.24249599999985C 288.80883936593307 67.24249599999985 289.5165114471455 71.65183999999988 290.3421288752267 71.65183999999988C 290.6173346845871 71.65183999999988 290.8532253783246 64.11921066666662 291.128431187685 64.11921066666662C 291.4036369970454 64.11921066666662 291.6395276907829 66.14015999999992 291.9147335001433 66.14015999999992C 292.1899393095037 66.14015999999992 292.42583000324123 72.20300799999995 292.7010358126016 72.20300799999995C 292.976241621962 72.20300799999995 293.21213231569953 52.91212799999994 293.4873381250599 52.91212799999994C 294.31295555314114 52.91212799999994 295.0206276343536 61.73081599999989 295.84624506243483 61.73081599999989C 296.1214508717952 61.73081599999989 296.35734156553275 57.137749333333204 296.63254737489314 57.137749333333204C 296.9077531842535 57.137749333333204 297.143643877991 58.60753066666655 297.4188496873514 58.60753066666655C 297.69405549671177 58.60753066666655 297.9299461904493 62.281983999999966 298.2051519998097 62.281983999999966C 298.4803578091701 62.281983999999966 298.7162485029076 61.914538666666544 298.991454312268 61.914538666666544C 300.0922775497096 61.914538666666544 301.0358403246596 55.30052266666655 302.1366635621012 55.30052266666655C 302.4118693714616 55.30052266666655 302.6477600651991 59.342421333333164 302.9229658745595 59.342421333333164C 303.1981716839199 59.342421333333164 303.4340623776574 67.24249599999985 303.7092681870178 67.24249599999985C 303.9844739963782 67.24249599999985 304.22036469011573 63.38432 304.4955704994761 63.38432C 305.32118792755733 63.38432 306.02886000876975 71.46811733333323 306.85447743685097 71.46811733333323C 307.12968324621136 71.46811733333323 307.3655739399489 62.64942933333316 307.6407797493093 62.64942933333316C 307.91598555866966 62.64942933333316 308.1518762524072 44.09343999999987 308.4270820617676 44.09343999999987"
                                                    pathFrom="M -1 771.6351999999999L -1 771.6351999999999L -5.307540609093515 771.6351999999999L -4.521238296635216 771.6351999999999L -3.734935984176918 771.6351999999999L -1.3760290468020224 771.6351999999999L -0.5897267343437239 771.6351999999999L 0.19657557811457463 771.6351999999999L 0.9828778905728731 771.6351999999999L 1.7691802030311716 771.6351999999999L 4.128087140406067 771.6351999999999L 4.9143894528643655 771.6351999999999L 5.700691765322664 771.6351999999999L 6.486994077780962 771.6351999999999L 7.2732963902392616 771.6351999999999L 9.632203327614157 771.6351999999999L 10.418505640072455 771.6351999999999L 11.204807952530754 771.6351999999999L 11.991110264989052 771.6351999999999L 12.77741257744735 771.6351999999999L 15.922621827280544 771.6351999999999L 16.708924139738844 771.6351999999999L 17.49522645219714 771.6351999999999L 18.28152876465544 771.6351999999999L 20.640435702030334 771.6351999999999L 21.426738014488635 771.6351999999999L 22.21304032694693 771.6351999999999L 22.99934263940523 771.6351999999999L 23.78564495186353 771.6351999999999L 26.144551889238425 771.6351999999999L 26.930854201696725 771.6351999999999L 27.717156514155022 771.6351999999999L 28.503458826613322 771.6351999999999L 29.28976113907162 771.6351999999999L 31.648668076446516 771.6351999999999L 32.434970388904816 771.6351999999999L 33.22127270136311 771.6351999999999L 34.00757501382141 771.6351999999999L 34.793877326279706 771.6351999999999L 37.1527842636546 771.6351999999999L 37.939086576112906 771.6351999999999L 38.7253888885712 771.6351999999999L 39.5116912010295 771.6351999999999L 40.297993513487796 771.6351999999999L 42.624137854510266 771.6351999999999L 43.41044016696856 771.6351999999999L 44.19674247942686 771.6351999999999L 44.98304479188516 771.6351999999999L 45.76934710434346 771.6351999999999L 48.12825404171836 771.6351999999999L 48.91455635417665 771.6351999999999L 49.70085866663495 771.6351999999999L 50.48716097909325 771.6351999999999L 53.63237022892645 771.6351999999999L 54.418672541384744 771.6351999999999L 55.20497485384304 771.6351999999999L 55.99127716630134 771.6351999999999L 56.77757947875964 771.6351999999999L 59.13648641613453 771.6351999999999L 59.922788728592835 771.6351999999999L 60.70909104105113 771.6351999999999L 61.49539335350943 771.6351999999999L 62.281695665967725 771.6351999999999L 64.64060260334263 771.6351999999999L 65.42690491580092 771.6351999999999L 66.21320722825922 771.6351999999999L 66.99950954071753 771.6351999999999L 67.78581185317582 771.6351999999999L 70.14471879055071 771.6351999999999L 70.93102110300902 771.6351999999999L 71.7173234154673 771.6351999999999L 72.50362572792561 771.6351999999999L 73.28992804038391 771.6351999999999L 75.6488349777588 771.6351999999999L 76.4351372902171 771.6351999999999L 77.2214396026754 771.6351999999999L 78.00774191513369 771.6351999999999L 78.794044227592 771.6351999999999L 81.1529511649669 771.6351999999999L 81.9392534774252 771.6351999999999L 82.72555578988349 771.6351999999999L 83.51185810234179 771.6351999999999L 84.29816041480008 771.6351999999999L 86.65706735217498 771.6351999999999L 87.44336966463328 771.6351999999999L 88.22967197709158 771.6351999999999L 89.01597428954987 771.6351999999999L 89.80227660200818 771.6351999999999L 92.94748585184136 771.6351999999999L 93.73378816429967 771.6351999999999L 94.52009047675797 771.6351999999999L 95.30639278921626 771.6351999999999L 97.66529972659116 771.6351999999999L 98.45160203904946 771.6351999999999L 99.23790435150775 771.6351999999999L 100.02420666396605 771.6351999999999L 100.81050897642436 771.6351999999999L 103.16941591379926 771.6351999999999L 103.95571822625755 771.6351999999999L 104.74202053871585 771.6351999999999L 105.52832285117415 771.6351999999999L 106.31462516363244 771.6351999999999L 108.67353210100734 771.6351999999999L 109.45983441346564 771.6351999999999L 110.24613672592393 771.6351999999999L 111.03243903838224 771.6351999999999L 111.81874135084054 771.6351999999999L 114.17764828821542 771.6351999999999L 114.96395060067373 771.6351999999999L 115.75025291313203 771.6351999999999L 116.53655522559032 771.6351999999999L 117.32285753804862 771.6351999999999L 119.68176447542352 771.6351999999999L 120.46806678788182 771.6351999999999L 122.04067141279842 771.6351999999999L 122.8269737252567 771.6351999999999L 125.1858806626316 771.6351999999999L 125.97218297508991 771.6351999999999L 126.75848528754821 771.6351999999999L 127.5447876000065 771.6351999999999L 128.3310899124648 771.6351999999999L 130.6899968498397 771.6351999999999L 131.476299162298 771.6351999999999L 132.2626014747563 771.6351999999999L 133.04890378721458 771.6351999999999L 133.8352060996729 771.6351999999999L 136.1941130370478 771.6351999999999L 136.98041534950607 771.6351999999999L 137.76671766196438 771.6351999999999L 138.55301997442268 771.6351999999999L 139.33932228688099 771.6351999999999L 141.69822922425587 771.6351999999999L 142.48453153671417 771.6351999999999L 143.27083384917248 771.6351999999999L 144.05713616163078 771.6351999999999L 144.84343847408908 771.6351999999999L 147.20234541146397 771.6351999999999L 147.98864772392227 771.6351999999999L 148.77495003638057 771.6351999999999L 149.56125234883885 771.6351999999999L 150.34755466129715 771.6351999999999L 152.70646159867206 771.6351999999999L 153.49276391113037 771.6351999999999L 154.27906622358864 771.6351999999999L 155.06536853604695 771.6351999999999L 155.85167084850525 771.6351999999999L 158.21057778588013 771.6351999999999L 158.99688009833844 771.6351999999999L 159.78318241079674 771.6351999999999L 160.56948472325504 771.6351999999999L 161.35578703571335 771.6351999999999L 163.71469397308823 771.6351999999999L 164.50099628554653 771.6351999999999L 165.28729859800484 771.6351999999999L 166.07360091046314 771.6351999999999L 166.85990322292142 771.6351999999999L 170.00511247275463 771.6351999999999L 170.79141478521294 771.6351999999999L 171.5777170976712 771.6351999999999L 172.36401941012952 771.6351999999999L 174.72292634750443 771.6351999999999L 175.5092286599627 771.6351999999999L 176.295530972421 771.6351999999999L 177.0818332848793 771.6351999999999L 177.8681355973376 771.6351999999999L 180.2270425347125 771.6351999999999L 181.0133448471708 771.6351999999999L 181.7996471596291 771.6351999999999L 182.5859494720874 771.6351999999999L 183.3722517845457 771.6351999999999L 185.7311587219206 771.6351999999999L 186.5174610343789 771.6351999999999L 187.3037633468372 771.6351999999999L 188.09006565929548 771.6351999999999L 188.87636797175378 771.6351999999999L 191.2352749091287 771.6351999999999L 192.021577221587 771.6351999999999L 192.80787953404527 771.6351999999999L 193.59418184650357 771.6351999999999L 194.38048415896188 771.6351999999999L 196.73939109633676 771.6351999999999L 197.52569340879506 771.6351999999999L 198.31199572125337 771.6351999999999L 199.09829803371167 771.6351999999999L 199.88460034616998 771.6351999999999L 202.24350728354486 771.6351999999999L 203.02980959600316 771.6351999999999L 203.81611190846147 771.6351999999999L 204.60241422091977 771.6351999999999L 205.38871653337804 771.6351999999999L 207.74762347075296 771.6351999999999L 208.53392578321126 771.6351999999999L 209.32022809566953 771.6351999999999L 210.10653040812784 771.6351999999999L 210.89283272058614 771.6351999999999L 214.85710687923006 771.6351999999999L 215.64340919168836 771.6351999999999L 216.42971150414667 771.6351999999999L 218.78861844152155 771.6351999999999L 219.57492075397985 771.6351999999999L 220.36122306643816 771.6351999999999L 221.14752537889646 771.6351999999999L 221.93382769135476 771.6351999999999L 224.29273462872965 771.6351999999999L 225.07903694118795 771.6351999999999L 225.86533925364625 771.6351999999999L 226.65164156610456 771.6351999999999L 227.43794387856283 771.6351999999999L 229.79685081593774 771.6351999999999L 230.58315312839605 771.6351999999999L 231.36945544085432 771.6351999999999L 232.94206006577093 771.6351999999999L 235.30096700314584 771.6351999999999L 236.08726931560412 771.6351999999999L 236.87357162806242 771.6351999999999L 237.65987394052073 771.6351999999999L 238.44617625297903 771.6351999999999L 240.8050831903539 771.6351999999999L 241.59138550281222 771.6351999999999L 242.37768781527052 771.6351999999999L 243.16399012772882 771.6351999999999L 243.9502924401871 771.6351999999999L 246.309199377562 771.6351999999999L 247.0955016900203 771.6351999999999L 247.88180400247862 771.6351999999999L 248.6681063149369 771.6351999999999L 249.4544086273952 771.6351999999999L 251.8133155647701 771.6351999999999L 252.59961787722838 771.6351999999999L 253.3859201896867 771.6351999999999L 254.172222502145 771.6351999999999L 254.9585248146033 771.6351999999999L 257.3174317519782 771.6351999999999L 258.8900363768948 771.6351999999999L 259.6763386893531 771.6351999999999L 260.4626410018114 771.6351999999999L 262.8215479391863 771.6351999999999L 264.39415256410285 771.6351999999999L 265.18045487656116 771.6351999999999L 265.96675718901946 771.6351999999999L 268.3256641263944 771.6351999999999L 269.1119664388527 771.6351999999999L 269.898268751311 771.6351999999999L 270.6845710637693 771.6351999999999L 271.4708733762276 771.6351999999999L 273.82978031360244 771.6351999999999L 274.61608262606075 771.6351999999999L 275.40238493851905 771.6351999999999L 276.18868725097735 771.6351999999999L 276.97498956343566 771.6351999999999L 280.12019881326887 771.6351999999999L 280.9065011257271 771.6351999999999L 281.6928034381854 771.6351999999999L 282.4791057506437 771.6351999999999L 284.83801268801864 771.6351999999999L 285.62431500047694 771.6351999999999L 286.41061731293524 771.6351999999999L 287.19691962539355 771.6351999999999L 287.98322193785185 771.6351999999999L 290.3421288752267 771.6351999999999L 291.128431187685 771.6351999999999L 291.9147335001433 771.6351999999999L 292.7010358126016 771.6351999999999L 293.4873381250599 771.6351999999999L 295.84624506243483 771.6351999999999L 296.63254737489314 771.6351999999999L 297.4188496873514 771.6351999999999L 298.2051519998097 771.6351999999999L 298.991454312268 771.6351999999999L 302.1366635621012 771.6351999999999L 302.9229658745595 771.6351999999999L 303.7092681870178 771.6351999999999L 304.4955704994761 771.6351999999999L 306.85447743685097 771.6351999999999L 307.6407797493093 771.6351999999999L 308.4270820617676 771.6351999999999">
                                                </path>
                                                <g id="SvgjsG1128" class="apexcharts-series-markers-wrap">
                                                    <g class="apexcharts-series-markers">
                                                        <circle id="SvgjsCircle1179" r="0" cx="0" cy="0"
                                                            class="apexcharts-marker wsymkj69t no-pointer-events"
                                                            stroke="#ffffff" fill="#8fbd56" fill-opacity="1"
                                                            stroke-width="2" stroke-opacity="0.9"
                                                            default-marker-size="0"></circle>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1129" class="apexcharts-datalabels"></g>
                                            </g>
                                        </g>
                                        <line id="SvgjsLine1174" x1="0" y1="0" x2="308.4270820617676" y2="0"
                                            stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                            class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine1175" x1="0" y1="0" x2="308.4270820617676" y2="0"
                                            stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden">
                                        </line>
                                        <g id="SvgjsG1176" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG1177" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG1178" class="apexcharts-point-annotations"></g>
                                        <rect id="SvgjsRect1180" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                            fill="#fefefe" opacity="1" stroke-width="0" stroke="none"
                                            stroke-dasharray="0" class="apexcharts-zoom-rect"></rect>
                                        <rect id="SvgjsRect1181" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                            fill="#fefefe" opacity="1" stroke-width="0" stroke="none"
                                            stroke-dasharray="0" class="apexcharts-selection-rect"></rect>
                                    </g>
                                    <rect id="SvgjsRect1105" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                        fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0">
                                    </rect>
                                    <g id="SvgjsG1149" class="apexcharts-yaxis" rel="0"
                                        transform="translate(44.57291793823242, 0)">
                                        <g id="SvgjsG1150" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1151"
                                                font-family="Helvetica, Arial, sans-serif" x="20" y="31.5"
                                                text-anchor="end" dominant-baseline="auto" font-size="11px"
                                                font-weight="regular" fill="#373d3f" class="apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">42</text><text
                                                id="SvgjsText1152" font-family="Helvetica, Arial, sans-serif" x="20"
                                                y="86.7168" text-anchor="end" dominant-baseline="auto" font-size="11px"
                                                font-weight="regular" fill="#373d3f" class="apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">39</text><text
                                                id="SvgjsText1153" font-family="Helvetica, Arial, sans-serif" x="20"
                                                y="141.9336" text-anchor="end" dominant-baseline="auto" font-size="11px"
                                                font-weight="regular" fill="#373d3f" class="apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">36</text><text
                                                id="SvgjsText1154" font-family="Helvetica, Arial, sans-serif" x="20"
                                                y="197.15040000000002" text-anchor="end" dominant-baseline="auto"
                                                font-size="11px" font-weight="regular" fill="#373d3f"
                                                class="apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">33</text><text
                                                id="SvgjsText1155" font-family="Helvetica, Arial, sans-serif" x="20"
                                                y="252.36720000000003" text-anchor="end" dominant-baseline="auto"
                                                font-size="11px" font-weight="regular" fill="#373d3f"
                                                class="apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">30</text><text
                                                id="SvgjsText1156" font-family="Helvetica, Arial, sans-serif" x="20"
                                                y="307.584" text-anchor="end" dominant-baseline="auto" font-size="11px"
                                                font-weight="regular" fill="#373d3f" class="apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">27</text></g>
                                        <g id="SvgjsG1157" class="apexcharts-yaxis-title"><text id="SvgjsText1158"
                                                font-family="poppins, sans-serif" x="18.06770896911621" y="167.792"
                                                text-anchor="end" dominant-baseline="auto" font-size="14px"
                                                font-weight="regular" fill="#adb5be"
                                                class="apexcharts-yaxis-title-text apexcharts-yaxis-label"
                                                style="font-family: poppins, sans-serif;"
                                                transform="rotate(-90 -7.239582061767578 162.79201793670654)">Growth</text>
                                        </g>
                                    </g>
                                </svg>
                                <div class="apexcharts-legend"></div>
                                <div class="apexcharts-tooltip light">
                                    <div class="apexcharts-tooltip-title"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                    <div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(143, 189, 86);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-label"></span><span
                                                    class="apexcharts-tooltip-text-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="apexcharts-toolbar">
                                    <div class="apexcharts-zoom-in-icon" title="Zoom In"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24">
                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4V7zm-1-5C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="apexcharts-zoom-out-icon" title="Zoom Out"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24">
                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M7 11v2h10v-2H7zm5-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="apexcharts-zoom-icon selected" title="Selection Zoom"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="#000000" height="24"
                                            viewBox="0 0 24 24" width="24">
                                            <path
                                                d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                                            </path>
                                            <path d="M0 0h24v24H0V0z" fill="none"></path>
                                            <path d="M12 10h-2v2H9v-2H7V9h2V7h1v2h2v1z"></path>
                                        </svg></div>
                                    <div class="apexcharts-pan-icon" title="Panning"><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" height="24"
                                            viewBox="0 0 24 24" width="24">
                                            <defs>
                                                <path d="M0 0h24v24H0z" id="a"></path>
                                            </defs>
                                            <clipPath id="b">
                                                <use overflow="visible" xlink:href="#a"></use>
                                            </clipPath>
                                            <path clip-path="url(#b)"
                                                d="M23 5.5V20c0 2.2-1.8 4-4 4h-7.3c-1.08 0-2.1-.43-2.85-1.19L1 14.83s1.26-1.23 1.3-1.25c.22-.19.49-.29.79-.29.22 0 .42.06.6.16.04.01 4.31 2.46 4.31 2.46V4c0-.83.67-1.5 1.5-1.5S11 3.17 11 4v7h1V1.5c0-.83.67-1.5 1.5-1.5S15 .67 15 1.5V11h1V2.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5V11h1V5.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5z">
                                            </path>
                                        </svg></div>
                                    <div class="apexcharts-reset-zoom-icon" title="Reset Zoom"><svg fill="#000000"
                                            height="24" viewBox="0 0 24 24" width="24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"></path>
                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                        </svg></div>
                                    <div class="apexcharts-menu-icon" title="Menu"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24">
                                            <path fill="none" d="M0 0h24v24H0V0z"></path>
                                            <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
                                        </svg></div>
                                    <div class="apexcharts-menu">
                                        <div class="apexcharts-menu-item exportSVG" title="Download SVG">Download SVG
                                        </div>
                                        <div class="apexcharts-menu-item exportPNG" title="Download PNG">Download PNG
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 661px; height: 484px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 445px; height: 484px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ROW-2 END -->

        <!-- ROW-3 -->
        <div class="row">
            <div class="col-xl-4 col-md-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h4 class="card-title fw-semibold">Daily Activity</h4>
                    </div>
                    <div class="card-body pb-0">
                        <ul class="task-list">
                            <li>
                                <i class="task-icon bg-primary"></i>
                                <p class="fw-semibold mb-1 fs-13">New Products Introduced<span
                                        class="text-muted fs-12 ms-2 ms-auto float-end">1:43 pm</span></p>
                                <p class="text-muted fs-12">Lorem ipsum dolor sit.<a href="#"
                                        class="fw-semibold ms-1">Product Light Launched</a></p>
                            </li>
                            <li>
                                <i class="task-icon bg-secondary"></i>
                                <p class="fw-semibold mb-1 fs-13">Hermoine Replied<span
                                        class="text-muted fs-12 ms-2 float-end">6:12 am</span></p>
                                <p class="text-muted fs-12">Hermoine replied to your post on<a href="#"
                                        class="fw-semibold ms-1"> Detailed Blog</a></p>
                            </li>
                            <li>
                                <i class="task-icon bg-info"></i>
                                <p class="fw-semibold mb-1 fs-13">New Request<span
                                        class="text-muted fs-12 ms-2 float-end">11:22 am</span></p>
                                <p class="text-muted fs-12">Corner sent you a request<a href="#"
                                        class="fw-semibold ms-1"> Facebook</a></p>
                            </li>
                            <li>
                                <i class="task-icon bg-warning"></i>
                                <p class="fw-semibold mb-1 fs-13">Task Due<span
                                        class="text-muted fs-12 ms-2 float-end">4:32 pm</span></p>
                                <p class="text-muted mb-0 fs-12">Task has to be completed <a href="#"
                                        class="fw-semibold ms-1"> New Project</a></p>
                            </li>
                            <li class="mb-2">
                                <i class="task-icon bg-primary"></i>
                                <p class="fw-semibold mb-1 fs-13">Maggice Liked<span
                                        class="text-muted fs-12 ms-2 float-end">5 mins ago</span></p>
                                <p class="text-muted mb-0 fs-12">Maggice bruce liked your article <a href="#"
                                        class="fw-semibold ms-1"> Article on Projects</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-12">
                <div class="card overflow-hidden">
                    <div class="card-header border-bottom">
                        <div>
                            <h3 class="card-title">Timeline</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tl-container">
                            <div class="tl-blog primary">
                                <div class="tl-img rounded-circle bg-primary-transparent">
                                    <i class="fe fe-user-plus text-primary text-17"></i>
                                </div>
                                <div class="tl-details d-flex">
                                    <p>
                                        <span class="tl-title-main"> Mr White </span> Started following you
                                        <span class="d-flex text-muted fs-12">10 Jan 2022</span>
                                    </p>
                                    <p class="ms-auto text-13">
                                        <span class="badge bg-primary text-white">1m</span>
                                    </p>
                                </div>
                            </div>
                            <div class="tl-blog secondary">
                                <div class="tl-img rounded-circle bg-secondary-transparent">
                                    <i class="fe fe-message-circle text-secondary text-17"></i>
                                </div>
                                <div class="tl-details d-flex">
                                    <p>
                                        <span class="tl-title-main"> Caroline </span> 1 Commented applied
                                        <span class="d-flex text-muted fs-12">09 Jan 2022</span>
                                    </p>
                                    <p class="ms-auto text-13">
                                        <span class="badge bg-secondary text-white">2m</span>
                                    </p>
                                </div>
                            </div>
                            <div class="tl-blog teritary">
                                <div class="tl-img rounded-circle bg-info-transparent">
                                    <i class="fe fe-clipboard text-info text-17"></i>
                                </div>
                                <div class="tl-details d-flex">
                                    <p>
                                        <span class="tl-title-main"> Juliette </span> posted a new article
                                        <span class="d-flex text-muted fs-12">07 Jan 2022</span>
                                    </p>
                                    <p class="ms-auto text-13">
                                        <span class="badge bg-info text-white">3m</span>
                                    </p>
                                </div>
                            </div>
                            <div class="tl-blog custom-yellow">
                                <div class="tl-img rounded-circle bg-warning-transparent">
                                    <i class="fe fe-thumbs-up text-warning text-17"></i>
                                </div>
                                <div class="tl-details d-flex">
                                    <p>
                                        <span class="tl-title-main"> Akimov </span> liked your site
                                        <span class="d-flex text-muted fs-12">07 Dec 2022</span>
                                    </p>
                                    <p class="ms-auto text-13">
                                        <span class="badge bg-warning text-white">4m</span>
                                    </p>
                                </div>
                            </div>
                            <div class="tl-blog primary">
                                <div class="tl-img rounded-circle bg-primary-transparent">
                                    <i class="fe fe-book text-primary text-17"></i>
                                </div>
                                <div class="tl-details d-flex">
                                    <p class="mb-0">
                                        <span class="tl-title-main"> Emilie </span>sent you a feedback
                                        <span class="d-flex text-muted fs-12">06 Jan 2022</span>
                                    </p>
                                    <p class="ms-auto text-13 mb-0">
                                        <span class="badge bg-orange text-white">5m</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-12">
                <div class="card overflow-hidden">
                    <div class="card-header title-submenu border-bottom">
                        <h3 class="card-title">To-Do List</h3>
                    </div>
                    <div class="card-body">
                        <div class="todo-container">
                            <div class="todo-blog primary">
                                <label class="todo-img">
                                    <input type="checkbox" class="todo-checkbox" name="todo-checkbox" checked="checked">
                                    <span class="checkmark"></span>
                                </label>
                                <div class="todo-details d-flex">
                                    <p class="mb-0">Design a UI Dashboard for client
                                        <span class="d-flex text-muted fs-12">3 days remaining</span>
                                    </p>
                                    <div class="ms-auto text-13 fw-semibold">
                                        <a href="javascript:void(0)" class="btn btn-sm btn-outline-light">Edit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="todo-blog secondary">
                                <label class="todo-img">
                                    <input type="checkbox" class="todo-checkbox" name="todo-checkbox" checked="checked">
                                    <span class="checkmark"></span>
                                </label>
                                <div class="todo-details d-flex">
                                    <p class="mb-0">Design a UI Dashboard for client
                                        <span class="d-flex text-muted fs-12">3 days remaining</span>
                                    </p>
                                    <div class="ms-auto text-13 fw-semibold">
                                        <a href="javascript:void(0)" class="btn btn-sm btn-outline-light">Edit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="todo-blog teritary">
                                <label class="todo-img">
                                    <input type="checkbox" class="todo-checkbox" name="todo-checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <div class="todo-details d-flex">
                                    <p class="mb-0">Design a UI Dashboard for client
                                        <span class="d-flex text-muted fs-12">3 days remaining</span>
                                    </p>
                                    <div class="ms-auto text-13 fw-semibold">
                                        <a href="javascript:void(0)" class="btn btn-sm btn-outline-light">Edit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="todo-blog custom-yellow">
                                <label class="todo-img">
                                    <input type="checkbox" class="todo-checkbox" name="todo-checkbox" checked="checked">
                                    <span class="checkmark"></span>
                                </label>
                                <div class="todo-details d-flex">
                                    <p class="mb-0">Design a UI Dashboard for client
                                        <span class="d-flex text-muted fs-12">3 days remaining</span>
                                    </p>
                                    <div class="ms-auto text-13 fw-semibold">
                                        <a href="javascript:void(0)" class="btn btn-sm btn-outline-light">Edit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="todo-blog primary">
                                <label class="todo-img">
                                    <input type="checkbox" class="todo-checkbox" name="todo-checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <div class="todo-details d-flex">
                                    <p class="mb-0">Design a UI Dashboard for client
                                        <span class="d-flex text-muted fs-12">3 days remaining</span>
                                    </p>
                                    <div class="ms-auto text-13 fw-semibold">
                                        <a href="javascript:void(0)" class="btn btn-sm btn-outline-light">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ROW-3 END -->

        <!-- ROW-4 -->
        <div class="row">
            <div class="col-12 col-sm-12">
                <div class="card product-sales-main">
                    <div class="card-header border-bottom">
                        <h3 class="card-title mb-0">Task List</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="data-table_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="dataTables_length" id="data-table_length"><label><select
                                                    name="data-table_length" aria-controls="data-table"
                                                    class="form-select form-select-sm select2 select2-hidden-accessible"
                                                    tabindex="-1" aria-hidden="true">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                </select><span
                                                    class="select2 select2-container select2-container--default"
                                                    dir="ltr" style="width: 174.875px;"><span class="selection"><span
                                                            class="select2-selection select2-selection--single"
                                                            role="combobox" aria-haspopup="true" aria-expanded="false"
                                                            tabindex="-1"
                                                            aria-labelledby="select2-data-table_length-yb-container"><span
                                                                class="select2-selection__rendered"
                                                                id="select2-data-table_length-yb-container"
                                                                title="10">10</span><span
                                                                class="select2-selection__arrow" role="presentation"><b
                                                                    role="presentation"></b></span></span></span><span
                                                        class="dropdown-wrapper" aria-hidden="true"></span></span><span
                                                    class="select2 select2-container select2-container--default select2-hidden-accessible"
                                                    dir="ltr" style="width: 46px;" tabindex="-1"
                                                    aria-hidden="true"><span class="selection"><span
                                                            class="select2-selection select2-selection--single"
                                                            role="combobox" aria-haspopup="true" aria-expanded="false"
                                                            tabindex="0"
                                                            aria-labelledby="select2-data-table_length-fl-container"><span
                                                                class="select2-selection__rendered"
                                                                id="select2-data-table_length-fl-container"
                                                                title="10">10</span><span
                                                                class="select2-selection__arrow" role="presentation"><b
                                                                    role="presentation"></b></span></span></span><span
                                                        class="dropdown-wrapper" aria-hidden="true"></span></span><span
                                                    class="select2 select2-container select2-container--default"
                                                    dir="ltr" style="width: 46px;"><span class="selection"><span
                                                            class="select2-selection select2-selection--single"
                                                            role="combobox" aria-haspopup="true" aria-expanded="false"
                                                            tabindex="0" aria-labelledby="select2-sr7v-container"><span
                                                                class="select2-selection__rendered"
                                                                id="select2-sr7v-container"></span><span
                                                                class="select2-selection__arrow" role="presentation"><b
                                                                    role="presentation"></b></span></span></span><span
                                                        class="dropdown-wrapper"
                                                        aria-hidden="true"></span></span></label></div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div id="data-table_filter" class="dataTables_filter"><label><input
                                                    type="search" class="form-control form-control-sm"
                                                    placeholder="Search..." aria-controls="data-table"></label></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div id="data-table_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                                            <div class="row">
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="dataTables_length" id="data-table_length"><label><select
                                                                name="data-table_length" aria-controls="data-table"
                                                                class="form-select form-select-sm select2 select2-hidden-accessible"
                                                                tabindex="-1" aria-hidden="true">
                                                                <option value="10">10</option>
                                                                <option value="25">25</option>
                                                                <option value="50">50</option>
                                                                <option value="100">100</option>
                                                            </select><span
                                                                class="select2 select2-container select2-container--default"
                                                                dir="ltr" style="width: 170.677px;"><span
                                                                    class="selection"><span
                                                                        class="select2-selection select2-selection--single"
                                                                        role="combobox" aria-haspopup="true"
                                                                        aria-expanded="false" tabindex="0"
                                                                        aria-labelledby="select2-data-table_length-3u-container"><span
                                                                            class="select2-selection__rendered"
                                                                            id="select2-data-table_length-3u-container"
                                                                            title="10">10</span><span
                                                                            class="select2-selection__arrow"
                                                                            role="presentation"><b
                                                                                role="presentation"></b></span></span></span><span
                                                                    class="dropdown-wrapper"
                                                                    aria-hidden="true"></span></span></label></div>
                                                </div>
                                                <div class="col-sm-12 col-md-6">
                                                    <div id="data-table_filter" class="dataTables_filter"><label><input
                                                                type="search" class="form-control form-control-sm"
                                                                placeholder="Search..."
                                                                aria-controls="data-table"></label></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <table id="data-table"
                                                        class="table text-nowrap mb-0 table-bordered dataTable no-footer"
                                                        role="grid" aria-describedby="data-table_info">
                                                        <thead class="table-head">
                                                            <tr role="row">
                                                                <th class="bg-transparent border-bottom-0 wp-15 sorting sorting_asc"
                                                                    tabindex="0" aria-controls="data-table" rowspan="1"
                                                                    colspan="1"
                                                                    aria-label="Assigned To: activate to sort column descending"
                                                                    style="width: 161.375px;" aria-sort="ascending">
                                                                    Assigned To</th>
                                                                <th class="bg-transparent border-bottom-0 sorting"
                                                                    tabindex="0" aria-controls="data-table" rowspan="1"
                                                                    colspan="1"
                                                                    aria-label="Task: activate to sort column ascending"
                                                                    style="width: 269.958px;">Task</th>
                                                                <th class="bg-transparent border-bottom-0 sorting"
                                                                    tabindex="0" aria-controls="data-table" rowspan="1"
                                                                    colspan="1"
                                                                    aria-label="Project: activate to sort column ascending"
                                                                    style="width: 96.5729px;">Project</th>
                                                                <th class="bg-transparent border-bottom-0 sorting"
                                                                    tabindex="0" aria-controls="data-table" rowspan="1"
                                                                    colspan="1"
                                                                    aria-label="Due Date: activate to sort column ascending"
                                                                    style="width: 64.5625px;">Due Date</th>
                                                                <th class="bg-transparent border-bottom-0 sorting"
                                                                    tabindex="0" aria-controls="data-table" rowspan="1"
                                                                    colspan="1"
                                                                    aria-label="Status: activate to sort column ascending"
                                                                    style="width: 101.719px;">Status</th>
                                                                <th class="bg-transparent border-bottom-0 no-btn sorting"
                                                                    tabindex="0" aria-controls="data-table" rowspan="1"
                                                                    colspan="1"
                                                                    aria-label="Action: activate to sort column ascending"
                                                                    style="width: 94.7917px;">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="table-body">





                                                            <tr class="odd">
                                                                <td class="sorting_1">
                                                                    <div class="d-flex align-items-center">
                                                                        <span
                                                                            class="data-image avatar avatar-md rounded-circle"
                                                                            style="background-image: url(../assets/images/users/12.jpg)"></span>
                                                                        <div class="user-details ms-2">
                                                                            <h6 class="mb-0">Daniel Obrien</h6>
                                                                            <span
                                                                                class="text-muted fs-12">member@spruko.com</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-muted fs-14 fw-semibold"><a href="#"
                                                                        class="text-dark" data-bs-target="#Vertically"
                                                                        data-bs-toggle="modal">Diam lorem dolor no
                                                                        lorem.</a></td>
                                                                <td class="text-muted fs-13"><a
                                                                        href="project-details.html"
                                                                        class="text-dark">Noa Dashboard UI</a></td>
                                                                <td class="text-danger fs-14 fw-semibold">01 Nov 21</td>
                                                                <td>
                                                                    <div class="form-group mb-0">
                                                                        <ul>
                                                                            <li class="select-status">
                                                                                <select
                                                                                    class="form-control select2-status-search select2-hidden-accessible"
                                                                                    data-placeholder="Select Status"
                                                                                    tabindex="-1" aria-hidden="true">
                                                                                    <option value="IP">In Progress
                                                                                    </option>
                                                                                    <option value="OH" selected="">On
                                                                                        Hold</option>
                                                                                    <option value="CP">Completed
                                                                                    </option>
                                                                                </select><span
                                                                                    class="select2 select2-container select2-container--default"
                                                                                    dir="ltr" style="width: 1px;"><span
                                                                                        class="selection"><span
                                                                                            class="select2-selection select2-selection--single"
                                                                                            role="combobox"
                                                                                            aria-haspopup="true"
                                                                                            aria-expanded="false"
                                                                                            tabindex="-1"
                                                                                            aria-labelledby="select2-mq8d-container"><span
                                                                                                class="select2-selection__rendered"
                                                                                                id="select2-mq8d-container"
                                                                                                title="On Hold"><span
                                                                                                    class="status-indicator projects on-hold">On
                                                                                                    Hold</span></span><span
                                                                                                class="select2-selection__arrow"
                                                                                                role="presentation"><b
                                                                                                    role="presentation"></b></span></span></span><span
                                                                                        class="dropdown-wrapper"
                                                                                        aria-hidden="true"></span></span><span
                                                                                    class="select2 select2-container select2-container--default select2-hidden-accessible"
                                                                                    dir="ltr" style="width: 92px;"
                                                                                    tabindex="-1"
                                                                                    aria-hidden="true"><span
                                                                                        class="selection"><span
                                                                                            class="select2-selection select2-selection--single"
                                                                                            role="combobox"
                                                                                            aria-haspopup="true"
                                                                                            aria-expanded="false"
                                                                                            tabindex="0"
                                                                                            aria-labelledby="select2-qgce-container"><span
                                                                                                class="select2-selection__rendered"
                                                                                                id="select2-qgce-container"
                                                                                                title="On Hold"><span
                                                                                                    class="status-indicator projects on-hold">On
                                                                                                    Hold</span></span><span
                                                                                                class="select2-selection__arrow"
                                                                                                role="presentation"><b
                                                                                                    role="presentation"></b></span></span></span><span
                                                                                        class="dropdown-wrapper"
                                                                                        aria-hidden="true"></span></span><span
                                                                                    class="select2 select2-container select2-container--default"
                                                                                    dir="ltr" style="width: 92px;"><span
                                                                                        class="selection"><span
                                                                                            class="select2-selection select2-selection--single"
                                                                                            role="combobox"
                                                                                            aria-haspopup="true"
                                                                                            aria-expanded="false"
                                                                                            tabindex="0"
                                                                                            aria-labelledby="select2-0dvc-container"><span
                                                                                                class="select2-selection__rendered"
                                                                                                id="select2-0dvc-container"></span><span
                                                                                                class="select2-selection__arrow"
                                                                                                role="presentation"><b
                                                                                                    role="presentation"></b></span></span></span><span
                                                                                        class="dropdown-wrapper"
                                                                                        aria-hidden="true"></span></span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-stretch">
                                                                        <a class="btn btn-sm btn-outline-primary border me-2"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-original-title="Mark As Completed">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                enable-background="new 0 0 24 24"
                                                                                height="20" width="16"
                                                                                viewBox="0 0 24 24">
                                                                                <path
                                                                                    d="M15.8085327,8.6464844l-5.6464233,5.6464844l-2.4707031-2.4697266c-0.0023804-0.0023804-0.0047607-0.0047607-0.0072021-0.0071411c-0.1972046-0.1932373-0.5137329-0.1900635-0.7069702,0.0071411c-0.1932983,0.1972656-0.1900635,0.5137939,0.0071411,0.7070312l2.8242188,2.8232422C9.9022217,15.4474487,10.02948,15.5001831,10.1621094,15.5c0.1326294,0.0001221,0.2598267-0.0525513,0.3534546-0.1464844l6-6c0.0023804-0.0023804,0.0047607-0.0046997,0.0071411-0.0071411c0.1932373-0.1972046,0.1900635-0.5137329-0.0071411-0.7069702C16.3183594,8.446106,16.0018311,8.4493408,15.8085327,8.6464844z M12,2C6.4771729,2,2,6.4771729,2,12s4.4771729,10,10,10c5.5201416-0.0064697,9.9935303-4.4798584,10-10C22,6.4771729,17.5228271,2,12,2z M12,21c-4.9705811,0-9-4.0294189-9-9s4.0294189-9,9-9c4.9683228,0.0054321,8.9945679,4.0316772,9,9C21,16.9705811,16.9705811,21,12,21z">
                                                                                </path>
                                                                            </svg>
                                                                        </a>
                                                                        <a class="btn btn-sm btn-outline-secondary border me-2"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-original-title="Delete">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                height="20" viewBox="0 0 24 24"
                                                                                width="16">
                                                                                <path d="M0 0h24v24H0V0z" fill="none">
                                                                                </path>
                                                                                <path
                                                                                    d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z">
                                                                                </path>
                                                                            </svg>
                                                                        </a>
                                                                        <a href="#"
                                                                            class="border br-5 px-2 py-1 d-flex align-items-center justify-content-center"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-haspopup="true"
                                                                            aria-expanded="false"><i
                                                                                class="fe fe-more-vertical"></i></a>
                                                                        <div class="dropdown-menu dropdown-menu-start">
                                                                            <a class="dropdown-item" href="#"><i
                                                                                    class="fe fe-edit-2 me-2"></i>
                                                                                Edit</a>
                                                                            <a class="dropdown-item" href="#"><i
                                                                                    class="fe fe-info me-2"></i>
                                                                                Info</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="even">
                                                                <td class="sorting_1">
                                                                    <div class="d-flex align-items-center">
                                                                        <span
                                                                            class="data-image avatar avatar-md rounded-circle"
                                                                            style="background-image: url(../assets/images/users/5.jpg)"></span>
                                                                        <div class="user-details ms-2">
                                                                            <h6 class="mb-0">Emilie Benett</h6>
                                                                            <span
                                                                                class="text-muted fs-12">member@spruko.com</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-muted fs-14 fw-semibold"><a href="#"
                                                                        class="text-dark" data-bs-target="#Vertically"
                                                                        data-bs-toggle="modal">Rebum gubergren at kasd
                                                                        takimata clita.</a></td>
                                                                <td class="text-muted fs-13"><a
                                                                        href="project-details.html"
                                                                        class="text-dark">Noa Dashboard UI</a></td>
                                                                <td class="text-danger fs-14 fw-semibold">29 Oct 21</td>
                                                                <td>
                                                                    <div class="form-group mb-0">
                                                                        <ul>
                                                                            <li class="select-status">
                                                                                <select
                                                                                    class="form-control select2-status-search select2-hidden-accessible"
                                                                                    data-placeholder="Select Status"
                                                                                    tabindex="-1" aria-hidden="true">
                                                                                    <option value="IP">In Progress
                                                                                    </option>
                                                                                    <option value="OH">On Hold</option>
                                                                                    <option value="CP" selected="">
                                                                                        Completed</option>
                                                                                </select><span
                                                                                    class="select2 select2-container select2-container--default"
                                                                                    dir="ltr" style="width: 1px;"><span
                                                                                        class="selection"><span
                                                                                            class="select2-selection select2-selection--single"
                                                                                            role="combobox"
                                                                                            aria-haspopup="true"
                                                                                            aria-expanded="false"
                                                                                            tabindex="-1"
                                                                                            aria-labelledby="select2-xme2-container"><span
                                                                                                class="select2-selection__rendered"
                                                                                                id="select2-xme2-container"
                                                                                                title="Completed"><span
                                                                                                    class="status-indicator projects completed">Completed</span></span><span
                                                                                                class="select2-selection__arrow"
                                                                                                role="presentation"><b
                                                                                                    role="presentation"></b></span></span></span><span
                                                                                        class="dropdown-wrapper"
                                                                                        aria-hidden="true"></span></span><span
                                                                                    class="select2 select2-container select2-container--default select2-hidden-accessible"
                                                                                    dir="ltr" style="width: 92px;"
                                                                                    tabindex="-1"
                                                                                    aria-hidden="true"><span
                                                                                        class="selection"><span
                                                                                            class="select2-selection select2-selection--single"
                                                                                            role="combobox"
                                                                                            aria-haspopup="true"
                                                                                            aria-expanded="false"
                                                                                            tabindex="0"
                                                                                            aria-labelledby="select2-qsvc-container"><span
                                                                                                class="select2-selection__rendered"
                                                                                                id="select2-qsvc-container"
                                                                                                title="Completed"><span
                                                                                                    class="status-indicator projects completed">Completed</span></span><span
                                                                                                class="select2-selection__arrow"
                                                                                                role="presentation"><b
                                                                                                    role="presentation"></b></span></span></span><span
                                                                                        class="dropdown-wrapper"
                                                                                        aria-hidden="true"></span></span><span
                                                                                    class="select2 select2-container select2-container--default"
                                                                                    dir="ltr" style="width: 92px;"><span
                                                                                        class="selection"><span
                                                                                            class="select2-selection select2-selection--single"
                                                                                            role="combobox"
                                                                                            aria-haspopup="true"
                                                                                            aria-expanded="false"
                                                                                            tabindex="0"
                                                                                            aria-labelledby="select2-k2e1-container"><span
                                                                                                class="select2-selection__rendered"
                                                                                                id="select2-k2e1-container"></span><span
                                                                                                class="select2-selection__arrow"
                                                                                                role="presentation"><b
                                                                                                    role="presentation"></b></span></span></span><span
                                                                                        class="dropdown-wrapper"
                                                                                        aria-hidden="true"></span></span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-stretch">
                                                                        <a class="btn btn-sm btn-outline-primary border me-2"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-original-title="Mark As Completed">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                enable-background="new 0 0 24 24"
                                                                                height="20" width="16"
                                                                                viewBox="0 0 24 24">
                                                                                <path
                                                                                    d="M15.8085327,8.6464844l-5.6464233,5.6464844l-2.4707031-2.4697266c-0.0023804-0.0023804-0.0047607-0.0047607-0.0072021-0.0071411c-0.1972046-0.1932373-0.5137329-0.1900635-0.7069702,0.0071411c-0.1932983,0.1972656-0.1900635,0.5137939,0.0071411,0.7070312l2.8242188,2.8232422C9.9022217,15.4474487,10.02948,15.5001831,10.1621094,15.5c0.1326294,0.0001221,0.2598267-0.0525513,0.3534546-0.1464844l6-6c0.0023804-0.0023804,0.0047607-0.0046997,0.0071411-0.0071411c0.1932373-0.1972046,0.1900635-0.5137329-0.0071411-0.7069702C16.3183594,8.446106,16.0018311,8.4493408,15.8085327,8.6464844z M12,2C6.4771729,2,2,6.4771729,2,12s4.4771729,10,10,10c5.5201416-0.0064697,9.9935303-4.4798584,10-10C22,6.4771729,17.5228271,2,12,2z M12,21c-4.9705811,0-9-4.0294189-9-9s4.0294189-9,9-9c4.9683228,0.0054321,8.9945679,4.0316772,9,9C21,16.9705811,16.9705811,21,12,21z">
                                                                                </path>
                                                                            </svg>
                                                                        </a>
                                                                        <a class="btn btn-sm btn-outline-secondary border me-2"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-original-title="Delete">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                height="20" viewBox="0 0 24 24"
                                                                                width="16">
                                                                                <path d="M0 0h24v24H0V0z" fill="none">
                                                                                </path>
                                                                                <path
                                                                                    d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z">
                                                                                </path>
                                                                            </svg>
                                                                        </a>
                                                                        <a href="#"
                                                                            class="border br-5 px-2 py-1 d-flex align-items-center justify-content-center"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-haspopup="true"
                                                                            aria-expanded="false"><i
                                                                                class="fe fe-more-vertical"></i></a>
                                                                        <div class="dropdown-menu dropdown-menu-start">
                                                                            <a class="dropdown-item" href="#"><i
                                                                                    class="fe fe-edit-2 me-2"></i>
                                                                                Edit</a>
                                                                            <a class="dropdown-item" href="#"><i
                                                                                    class="fe fe-info me-2"></i>
                                                                                Info</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="odd">
                                                                <td class="sorting_1">
                                                                    <div class="d-flex align-items-center">
                                                                        <span
                                                                            class="data-image avatar avatar-md rounded-circle"
                                                                            style="background-image: url(../assets/images/users/4.jpg)"></span>
                                                                        <div class="user-details ms-2">
                                                                            <h6 class="mb-0">Olena Tyrell</h6>
                                                                            <span
                                                                                class="text-muted fs-12">member@spruko.com</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-muted fs-14 fw-semibold"><a href="#"
                                                                        class="text-dark" data-bs-target="#Vertically"
                                                                        data-bs-toggle="modal">Est sea erat at kasd.</a>
                                                                </td>
                                                                <td class="text-muted fs-13"><a
                                                                        href="project-details.html"
                                                                        class="text-dark">Noa Dashboard UI</a></td>
                                                                <td class="text-danger fs-14 fw-semibold">04 Nov 21</td>
                                                                <td>
                                                                    <div class="form-group mb-0">
                                                                        <ul>
                                                                            <li class="select-status">
                                                                                <select
                                                                                    class="form-control select2-status-search select2-hidden-accessible"
                                                                                    data-placeholder="Select Status"
                                                                                    tabindex="-1" aria-hidden="true">
                                                                                    <option value="IP" selected="">In
                                                                                        Progress</option>
                                                                                    <option value="OH">On Hold</option>
                                                                                    <option value="CP">Completed
                                                                                    </option>
                                                                                </select><span
                                                                                    class="select2 select2-container select2-container--default"
                                                                                    dir="ltr" style="width: 1px;"><span
                                                                                        class="selection"><span
                                                                                            class="select2-selection select2-selection--single"
                                                                                            role="combobox"
                                                                                            aria-haspopup="true"
                                                                                            aria-expanded="false"
                                                                                            tabindex="-1"
                                                                                            aria-labelledby="select2-uteo-container"><span
                                                                                                class="select2-selection__rendered"
                                                                                                id="select2-uteo-container"
                                                                                                title="In Progress"><span
                                                                                                    class="status-indicator projects in-progress">In
                                                                                                    Progress</span></span><span
                                                                                                class="select2-selection__arrow"
                                                                                                role="presentation"><b
                                                                                                    role="presentation"></b></span></span></span><span
                                                                                        class="dropdown-wrapper"
                                                                                        aria-hidden="true"></span></span><span
                                                                                    class="select2 select2-container select2-container--default select2-hidden-accessible"
                                                                                    dir="ltr" style="width: 92px;"
                                                                                    tabindex="-1"
                                                                                    aria-hidden="true"><span
                                                                                        class="selection"><span
                                                                                            class="select2-selection select2-selection--single"
                                                                                            role="combobox"
                                                                                            aria-haspopup="true"
                                                                                            aria-expanded="false"
                                                                                            tabindex="0"
                                                                                            aria-labelledby="select2-rofn-container"><span
                                                                                                class="select2-selection__rendered"
                                                                                                id="select2-rofn-container"
                                                                                                title="In Progress"><span
                                                                                                    class="status-indicator projects in-progress">In
                                                                                                    Progress</span></span><span
                                                                                                class="select2-selection__arrow"
                                                                                                role="presentation"><b
                                                                                                    role="presentation"></b></span></span></span><span
                                                                                        class="dropdown-wrapper"
                                                                                        aria-hidden="true"></span></span><span
                                                                                    class="select2 select2-container select2-container--default"
                                                                                    dir="ltr" style="width: 92px;"><span
                                                                                        class="selection"><span
                                                                                            class="select2-selection select2-selection--single"
                                                                                            role="combobox"
                                                                                            aria-haspopup="true"
                                                                                            aria-expanded="false"
                                                                                            tabindex="0"
                                                                                            aria-labelledby="select2-b8nh-container"><span
                                                                                                class="select2-selection__rendered"
                                                                                                id="select2-b8nh-container"></span><span
                                                                                                class="select2-selection__arrow"
                                                                                                role="presentation"><b
                                                                                                    role="presentation"></b></span></span></span><span
                                                                                        class="dropdown-wrapper"
                                                                                        aria-hidden="true"></span></span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-stretch">
                                                                        <a class="btn btn-sm btn-outline-primary border me-2"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-original-title="Mark As Completed">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                enable-background="new 0 0 24 24"
                                                                                height="20" width="16"
                                                                                viewBox="0 0 24 24">
                                                                                <path
                                                                                    d="M15.8085327,8.6464844l-5.6464233,5.6464844l-2.4707031-2.4697266c-0.0023804-0.0023804-0.0047607-0.0047607-0.0072021-0.0071411c-0.1972046-0.1932373-0.5137329-0.1900635-0.7069702,0.0071411c-0.1932983,0.1972656-0.1900635,0.5137939,0.0071411,0.7070312l2.8242188,2.8232422C9.9022217,15.4474487,10.02948,15.5001831,10.1621094,15.5c0.1326294,0.0001221,0.2598267-0.0525513,0.3534546-0.1464844l6-6c0.0023804-0.0023804,0.0047607-0.0046997,0.0071411-0.0071411c0.1932373-0.1972046,0.1900635-0.5137329-0.0071411-0.7069702C16.3183594,8.446106,16.0018311,8.4493408,15.8085327,8.6464844z M12,2C6.4771729,2,2,6.4771729,2,12s4.4771729,10,10,10c5.5201416-0.0064697,9.9935303-4.4798584,10-10C22,6.4771729,17.5228271,2,12,2z M12,21c-4.9705811,0-9-4.0294189-9-9s4.0294189-9,9-9c4.9683228,0.0054321,8.9945679,4.0316772,9,9C21,16.9705811,16.9705811,21,12,21z">
                                                                                </path>
                                                                            </svg>
                                                                        </a>
                                                                        <a class="btn btn-sm btn-outline-secondary border me-2"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-original-title="Delete">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                height="20" viewBox="0 0 24 24"
                                                                                width="16">
                                                                                <path d="M0 0h24v24H0V0z" fill="none">
                                                                                </path>
                                                                                <path
                                                                                    d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z">
                                                                                </path>
                                                                            </svg>
                                                                        </a>
                                                                        <a href="#"
                                                                            class="border br-5 px-2 py-1 d-flex align-items-center justify-content-center"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-haspopup="true"
                                                                            aria-expanded="false"><i
                                                                                class="fe fe-more-vertical"></i></a>
                                                                        <div class="dropdown-menu dropdown-menu-start">
                                                                            <a class="dropdown-item" href="#"><i
                                                                                    class="fe fe-edit-2 me-2"></i>
                                                                                Edit</a>
                                                                            <a class="dropdown-item" href="#"><i
                                                                                    class="fe fe-info me-2"></i>
                                                                                Info</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="even">
                                                                <td class="sorting_1">
                                                                    <div class="d-flex align-items-center">
                                                                        <span
                                                                            class="data-image avatar avatar-md rounded-circle"
                                                                            style="background-image: url(../assets/images/users/11.jpg)"></span>
                                                                        <div class="user-details ms-2">
                                                                            <h6 class="mb-0">Skyler Hilda</h6>
                                                                            <span
                                                                                class="text-muted fs-12">member@spruko.com</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-muted fs-14 fw-semibold"><a href="#"
                                                                        class="text-dark" data-bs-target="#Vertically"
                                                                        data-bs-toggle="modal">Sit sed takimata sanctus
                                                                        invidunt</a></td>
                                                                <td class="text-muted fs-13"><a
                                                                        href="project-details.html"
                                                                        class="text-dark">Noa Dashboard UI</a></td>
                                                                <td class="text-danger fs-14 fw-semibold">31 Oct 21</td>
                                                                <td>
                                                                    <div class="form-group mb-0">
                                                                        <ul>
                                                                            <li class="select-status">
                                                                                <select
                                                                                    class="form-control select2-status-search select2-hidden-accessible"
                                                                                    data-placeholder="Select Status"
                                                                                    tabindex="-1" aria-hidden="true">
                                                                                    <option value="IP" selected="">In
                                                                                        Progress</option>
                                                                                    <option value="OH">On Hold</option>
                                                                                    <option value="CP">Completed
                                                                                    </option>
                                                                                </select><span
                                                                                    class="select2 select2-container select2-container--default"
                                                                                    dir="ltr" style="width: 1px;"><span
                                                                                        class="selection"><span
                                                                                            class="select2-selection select2-selection--single"
                                                                                            role="combobox"
                                                                                            aria-haspopup="true"
                                                                                            aria-expanded="false"
                                                                                            tabindex="-1"
                                                                                            aria-labelledby="select2-582h-container"><span
                                                                                                class="select2-selection__rendered"
                                                                                                id="select2-582h-container"
                                                                                                title="In Progress"><span
                                                                                                    class="status-indicator projects in-progress">In
                                                                                                    Progress</span></span><span
                                                                                                class="select2-selection__arrow"
                                                                                                role="presentation"><b
                                                                                                    role="presentation"></b></span></span></span><span
                                                                                        class="dropdown-wrapper"
                                                                                        aria-hidden="true"></span></span><span
                                                                                    class="select2 select2-container select2-container--default select2-hidden-accessible"
                                                                                    dir="ltr" style="width: 92px;"
                                                                                    tabindex="-1"
                                                                                    aria-hidden="true"><span
                                                                                        class="selection"><span
                                                                                            class="select2-selection select2-selection--single"
                                                                                            role="combobox"
                                                                                            aria-haspopup="true"
                                                                                            aria-expanded="false"
                                                                                            tabindex="0"
                                                                                            aria-labelledby="select2-35on-container"><span
                                                                                                class="select2-selection__rendered"
                                                                                                id="select2-35on-container"
                                                                                                title="In Progress"><span
                                                                                                    class="status-indicator projects in-progress">In
                                                                                                    Progress</span></span><span
                                                                                                class="select2-selection__arrow"
                                                                                                role="presentation"><b
                                                                                                    role="presentation"></b></span></span></span><span
                                                                                        class="dropdown-wrapper"
                                                                                        aria-hidden="true"></span></span><span
                                                                                    class="select2 select2-container select2-container--default"
                                                                                    dir="ltr" style="width: 92px;"><span
                                                                                        class="selection"><span
                                                                                            class="select2-selection select2-selection--single"
                                                                                            role="combobox"
                                                                                            aria-haspopup="true"
                                                                                            aria-expanded="false"
                                                                                            tabindex="0"
                                                                                            aria-labelledby="select2-numy-container"><span
                                                                                                class="select2-selection__rendered"
                                                                                                id="select2-numy-container"></span><span
                                                                                                class="select2-selection__arrow"
                                                                                                role="presentation"><b
                                                                                                    role="presentation"></b></span></span></span><span
                                                                                        class="dropdown-wrapper"
                                                                                        aria-hidden="true"></span></span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-stretch">
                                                                        <a class="btn btn-sm btn-outline-primary border me-2"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-original-title="Mark As Completed">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                enable-background="new 0 0 24 24"
                                                                                height="20" width="16"
                                                                                viewBox="0 0 24 24">
                                                                                <path
                                                                                    d="M15.8085327,8.6464844l-5.6464233,5.6464844l-2.4707031-2.4697266c-0.0023804-0.0023804-0.0047607-0.0047607-0.0072021-0.0071411c-0.1972046-0.1932373-0.5137329-0.1900635-0.7069702,0.0071411c-0.1932983,0.1972656-0.1900635,0.5137939,0.0071411,0.7070312l2.8242188,2.8232422C9.9022217,15.4474487,10.02948,15.5001831,10.1621094,15.5c0.1326294,0.0001221,0.2598267-0.0525513,0.3534546-0.1464844l6-6c0.0023804-0.0023804,0.0047607-0.0046997,0.0071411-0.0071411c0.1932373-0.1972046,0.1900635-0.5137329-0.0071411-0.7069702C16.3183594,8.446106,16.0018311,8.4493408,15.8085327,8.6464844z M12,2C6.4771729,2,2,6.4771729,2,12s4.4771729,10,10,10c5.5201416-0.0064697,9.9935303-4.4798584,10-10C22,6.4771729,17.5228271,2,12,2z M12,21c-4.9705811,0-9-4.0294189-9-9s4.0294189-9,9-9c4.9683228,0.0054321,8.9945679,4.0316772,9,9C21,16.9705811,16.9705811,21,12,21z">
                                                                                </path>
                                                                            </svg>
                                                                        </a>
                                                                        <a class="btn btn-sm btn-outline-secondary border me-2"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-original-title="Delete">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                height="20" viewBox="0 0 24 24"
                                                                                width="16">
                                                                                <path d="M0 0h24v24H0V0z" fill="none">
                                                                                </path>
                                                                                <path
                                                                                    d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z">
                                                                                </path>
                                                                            </svg>
                                                                        </a>
                                                                        <a href="#"
                                                                            class="border br-5 px-2 py-1 d-flex align-items-center justify-content-center"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-haspopup="true"
                                                                            aria-expanded="false"><i
                                                                                class="fe fe-more-vertical"></i></a>
                                                                        <div class="dropdown-menu dropdown-menu-start">
                                                                            <a class="dropdown-item" href="#"><i
                                                                                    class="fe fe-edit-2 me-2"></i>
                                                                                Edit</a>
                                                                            <a class="dropdown-item" href="#"><i
                                                                                    class="fe fe-info me-2"></i>
                                                                                Info</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr class="odd">
                                                                <td class="sorting_1">
                                                                    <div class="d-flex align-items-center">
                                                                        <span
                                                                            class="data-image avatar avatar-md rounded-circle"
                                                                            style="background-image: url(../assets/images/users/13.jpg)"></span>
                                                                        <div class="user-details ms-2">
                                                                            <h6 class="mb-0">William Turner</h6>
                                                                            <span
                                                                                class="text-muted fs-12">member@spruko.com</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-muted fs-14 fw-semibold"><a href="#"
                                                                        class="text-dark" data-bs-target="#Vertically"
                                                                        data-bs-toggle="modal">Amet clita sea ut dolor
                                                                        consetetur, elitr.</a></td>
                                                                <td class="text-muted fs-13"><a
                                                                        href="project-details.html"
                                                                        class="text-dark">Noa Dashboard UI</a></td>
                                                                <td class="text-danger fs-14 fw-semibold">08 Nov 21</td>
                                                                <td>
                                                                    <div class="form-group mb-0">
                                                                        <ul>
                                                                            <li class="select-status">
                                                                                <select
                                                                                    class="form-control select2-status-search select2-hidden-accessible"
                                                                                    data-placeholder="Select Status"
                                                                                    tabindex="-1" aria-hidden="true">
                                                                                    <option value="IP">In Progress
                                                                                    </option>
                                                                                    <option value="OH" selected="">On
                                                                                        Hold</option>
                                                                                    <option value="CP">Completed
                                                                                    </option>
                                                                                </select><span
                                                                                    class="select2 select2-container select2-container--default"
                                                                                    dir="ltr" style="width: 1px;"><span
                                                                                        class="selection"><span
                                                                                            class="select2-selection select2-selection--single"
                                                                                            role="combobox"
                                                                                            aria-haspopup="true"
                                                                                            aria-expanded="false"
                                                                                            tabindex="-1"
                                                                                            aria-labelledby="select2-yybu-container"><span
                                                                                                class="select2-selection__rendered"
                                                                                                id="select2-yybu-container"
                                                                                                title="On Hold"><span
                                                                                                    class="status-indicator projects on-hold">On
                                                                                                    Hold</span></span><span
                                                                                                class="select2-selection__arrow"
                                                                                                role="presentation"><b
                                                                                                    role="presentation"></b></span></span></span><span
                                                                                        class="dropdown-wrapper"
                                                                                        aria-hidden="true"></span></span><span
                                                                                    class="select2 select2-container select2-container--default select2-hidden-accessible"
                                                                                    dir="ltr" style="width: 92px;"
                                                                                    tabindex="-1"
                                                                                    aria-hidden="true"><span
                                                                                        class="selection"><span
                                                                                            class="select2-selection select2-selection--single"
                                                                                            role="combobox"
                                                                                            aria-haspopup="true"
                                                                                            aria-expanded="false"
                                                                                            tabindex="0"
                                                                                            aria-labelledby="select2-nx2c-container"><span
                                                                                                class="select2-selection__rendered"
                                                                                                id="select2-nx2c-container"
                                                                                                title="On Hold"><span
                                                                                                    class="status-indicator projects on-hold">On
                                                                                                    Hold</span></span><span
                                                                                                class="select2-selection__arrow"
                                                                                                role="presentation"><b
                                                                                                    role="presentation"></b></span></span></span><span
                                                                                        class="dropdown-wrapper"
                                                                                        aria-hidden="true"></span></span><span
                                                                                    class="select2 select2-container select2-container--default"
                                                                                    dir="ltr" style="width: 92px;"><span
                                                                                        class="selection"><span
                                                                                            class="select2-selection select2-selection--single"
                                                                                            role="combobox"
                                                                                            aria-haspopup="true"
                                                                                            aria-expanded="false"
                                                                                            tabindex="0"
                                                                                            aria-labelledby="select2-b5fz-container"><span
                                                                                                class="select2-selection__rendered"
                                                                                                id="select2-b5fz-container"></span><span
                                                                                                class="select2-selection__arrow"
                                                                                                role="presentation"><b
                                                                                                    role="presentation"></b></span></span></span><span
                                                                                        class="dropdown-wrapper"
                                                                                        aria-hidden="true"></span></span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-stretch">
                                                                        <a class="btn btn-sm btn-outline-primary border me-2"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-original-title="Mark As Completed">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                enable-background="new 0 0 24 24"
                                                                                height="20" width="16"
                                                                                viewBox="0 0 24 24">
                                                                                <path
                                                                                    d="M15.8085327,8.6464844l-5.6464233,5.6464844l-2.4707031-2.4697266c-0.0023804-0.0023804-0.0047607-0.0047607-0.0072021-0.0071411c-0.1972046-0.1932373-0.5137329-0.1900635-0.7069702,0.0071411c-0.1932983,0.1972656-0.1900635,0.5137939,0.0071411,0.7070312l2.8242188,2.8232422C9.9022217,15.4474487,10.02948,15.5001831,10.1621094,15.5c0.1326294,0.0001221,0.2598267-0.0525513,0.3534546-0.1464844l6-6c0.0023804-0.0023804,0.0047607-0.0046997,0.0071411-0.0071411c0.1932373-0.1972046,0.1900635-0.5137329-0.0071411-0.7069702C16.3183594,8.446106,16.0018311,8.4493408,15.8085327,8.6464844z M12,2C6.4771729,2,2,6.4771729,2,12s4.4771729,10,10,10c5.5201416-0.0064697,9.9935303-4.4798584,10-10C22,6.4771729,17.5228271,2,12,2z M12,21c-4.9705811,0-9-4.0294189-9-9s4.0294189-9,9-9c4.9683228,0.0054321,8.9945679,4.0316772,9,9C21,16.9705811,16.9705811,21,12,21z">
                                                                                </path>
                                                                            </svg>
                                                                        </a>
                                                                        <a class="btn btn-sm btn-outline-secondary border me-2"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-original-title="Delete">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                height="20" viewBox="0 0 24 24"
                                                                                width="16">
                                                                                <path d="M0 0h24v24H0V0z" fill="none">
                                                                                </path>
                                                                                <path
                                                                                    d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z">
                                                                                </path>
                                                                            </svg>
                                                                        </a>
                                                                        <a href="#"
                                                                            class="border br-5 px-2 py-1 d-flex align-items-center justify-content-center"
                                                                            data-bs-toggle="dropdown"
                                                                            aria-haspopup="true"
                                                                            aria-expanded="false"><i
                                                                                class="fe fe-more-vertical"></i></a>
                                                                        <div class="dropdown-menu dropdown-menu-start">
                                                                            <a class="dropdown-item" href="#"><i
                                                                                    class="fe fe-edit-2 me-2"></i>
                                                                                Edit</a>
                                                                            <a class="dropdown-item" href="#"><i
                                                                                    class="fe fe-info me-2"></i>
                                                                                Info</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12 col-md-5">
                                                    <div class="dataTables_info" id="data-table_info" role="status"
                                                        aria-live="polite">Showing 1 to 5 of 5 entries</div>
                                                </div>
                                                <div class="col-sm-12 col-md-7">
                                                    <div class="dataTables_paginate paging_simple_numbers"
                                                        id="data-table_paginate">
                                                        <ul class="pagination">
                                                            <li class="paginate_button page-item previous disabled"
                                                                id="data-table_previous"><a href="#"
                                                                    aria-controls="data-table" data-dt-idx="0"
                                                                    tabindex="0" class="page-link">Previous</a></li>
                                                            <li class="paginate_button page-item active"><a href="#"
                                                                    aria-controls="data-table" data-dt-idx="1"
                                                                    tabindex="0" class="page-link">1</a></li>
                                                            <li class="paginate_button page-item next disabled"
                                                                id="data-table_next"><a href="#"
                                                                    aria-controls="data-table" data-dt-idx="2"
                                                                    tabindex="0" class="page-link">Next</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="data-table_info" role="status"
                                            aria-live="polite">Showing 1 to 5 of 5 entries</div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="data-table_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled"
                                                    id="data-table_previous"><a href="#" aria-controls="data-table"
                                                        data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                                <li class="paginate_button page-item active"><a href="#"
                                                        aria-controls="data-table" data-dt-idx="1" tabindex="0"
                                                        class="page-link">1</a></li>
                                                <li class="paginate_button page-item next disabled"
                                                    id="data-table_next"><a href="#" aria-controls="data-table"
                                                        data-dt-idx="2" tabindex="0" class="page-link">Next</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- COL END -->
        </div>
        <!-- ROW-4 END -->

    </div>
</div>
@endsection