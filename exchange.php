<!-- App Include -->
<?php include 'inc/app.php' ?>
<!-- App Include -->

<!-- Stylesheet -->
<link rel="stylesheet" href="css/exchange.css">
<!-- Stylesheet -->

<!-- page Header starts here -->
<section class="pageHeader-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header-wrapper">
                    <div class="heading-wrapper">
                        <h3>Buy Crypto</h3>
                    </div>
                    <div class="breadcrumbs-wrapper">
                        <ul>
                            <li class="base-page"><a href="#">HOME</a></li>
                            <li class="arrow"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                            <li class="current-page"><a href="#">Buy Crypto</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- page Header ends here -->

<!-- Exchange Sec Start Here -->
<section class="exchange_sec">
    <div class="container">
        <div class="crypto-box">
            <div class="topbar">
                <h3>crypto prices <span class="lght">9,541 Assets</span></h3>
            </div>
            <div class="for-tabs">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-assets-tab" data-bs-toggle="pill" data-bs-target="#pills-assets" type="button" role="tab" aria-controls="pills-assets" aria-selected="true"><img src="img/tade-icon.png" alt="123" class="img-fluid" /> All
                            Assets</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-tardeable-tab" data-bs-toggle="pill" data-bs-target="#pills-tardeable" type="button" role="tab" aria-controls="pills-tardeable" aria-selected="false"><img src="img/tade-icon.png" alt="123" class="img-fluid" />
                            Tradable</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-gainers-tab" data-bs-toggle="pill" data-bs-target="#pills-gainers" type="button" role="tab" aria-controls="pills-gainers" aria-selected="false"><img src="img/tade-icon.png" alt="123" class="img-fluid" />
                            Gainers</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-loser-tab" data-bs-toggle="pill" data-bs-target="#pills-loser" type="button" role="tab" aria-controls="pills-loser" aria-selected="false"><img src="img/tade-icon.png" alt="123" class="img-fluid" />
                            Losers</button>
                    </li>
                </ul>
                <div class="converion">
                    <div class="form-group">
                        <select class="form-control">
                            <option>USD</option>
                            <option>EUR</option>
                            <option>Lb</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control">
                            <option>1H</option>
                            <option>2H</option>
                            <option>3H</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-assets" role="tabpanel" aria-labelledby="pills-assets-tab">
                    <div class="table-resposnive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="favourite"></th>
                                    <th class="name">name</th>
                                    <th class="price">price</th>
                                    <th class="chart">chart</th>
                                    <th class="change">change</th>
                                    <th class="market-cap">market cap</th>
                                    <th class="volume">volume ( 24h )</th>
                                    <th class="supply">supply</th>
                                    <th class="trade">trade</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="favourite">
                                        <label class="favourite_container">
                                            <input type="checkbox" hidden />
                                            <span class="checkmark">
                                                <svg width="14.191" height="13.571" viewBox="0 0 14.191 13.571">
                                                    <g id="_5_stars_rating" data-name="5 stars rating" transform="translate(0.507 0.5)">
                                                        <path id="Path_776" data-name="Path 776" d="M125.546,243.434l3.872.571a.391.391,0,0,1,.218.664l-2.8,2.73a.39.39,0,0,0-.114.343l.654,3.861a.4.4,0,0,1-.571.415l-3.456-1.827a.377.377,0,0,0-.363,0l-3.467,1.816a.393.393,0,0,1-.571-.415l.664-3.851a.381.381,0,0,0-.114-.343l-2.8-2.73a.389.389,0,0,1,.218-.664l3.872-.56a.371.371,0,0,0,.291-.218l1.733-3.508a.4.4,0,0,1,.706,0l1.723,3.508A.458.458,0,0,0,125.546,243.434Z" transform="translate(-116.575 -239.5)" fill="none" stroke="#fff" stroke-width="1" />
                                                    </g>
                                                </svg>
                                            </span>
                                        </label>
                                    </td>
                                    <td class="name">
                                        <figure><img src="img/bitcoin-icon.png" alt="123" class="img-fluid">
                                        </figure>
                                        <div class="name">
                                            <h5 class="coin-name">Bitcoin</h5>
                                            <h6 class="short-form">BTC</h6>
                                        </div>
                                    </td>
                                    <td class="price">
                                        <h4>USD 4,5658,578,51</h4>
                                    </td>
                                    <td class="chart">
                                        <figure><img src="img/chart1.png" alt="" class="img-fluid"></figure>
                                    </td>
                                    <td class="change">
                                        <h4><span><img src="img/upicon.png" alt="up" class="img-fluid"></span> 0.42%
                                        </h4>
                                    </td>
                                    <td class="market-cap">
                                        <h4>USD 86.7T</h4>
                                    </td>
                                    <td class="volume">
                                        <h4>USD 86.7T</h4>
                                    </td>
                                    <td class="supply">
                                        <h4>19.2M</h4>
                                    </td>
                                    <td class="trade">
                                        <button>Trade <span><svg xmlns="http://www.w3.org/2000/svg" width="9.138" height="8.908" viewBox="0 0 9.138 8.908">
                                                    <path id="Icon_awesome-arrow-right" data-name="Icon awesome-arrow-right" d="M3.886,3.24l.453-.453a.488.488,0,0,1,.692,0L8.995,6.75a.488.488,0,0,1,0,.692L5.03,11.408a.488.488,0,0,1-.692,0l-.453-.452a.49.49,0,0,1,.008-.7L6.353,7.914H.49A.488.488,0,0,1,0,7.424V6.772a.488.488,0,0,1,.49-.489H6.353L3.894,3.941a.486.486,0,0,1-.008-.7Z" transform="translate(0 -2.643)" fill="#fff" />
                                                </svg>
                                            </span></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="favourite">
                                        <label class="favourite_container">
                                            <input type="checkbox" hidden />
                                            <span class="checkmark">
                                                <svg width="14.191" height="13.571" viewBox="0 0 14.191 13.571">
                                                    <g id="_5_stars_rating" data-name="5 stars rating" transform="translate(0.507 0.5)">
                                                        <path id="Path_776" data-name="Path 776" d="M125.546,243.434l3.872.571a.391.391,0,0,1,.218.664l-2.8,2.73a.39.39,0,0,0-.114.343l.654,3.861a.4.4,0,0,1-.571.415l-3.456-1.827a.377.377,0,0,0-.363,0l-3.467,1.816a.393.393,0,0,1-.571-.415l.664-3.851a.381.381,0,0,0-.114-.343l-2.8-2.73a.389.389,0,0,1,.218-.664l3.872-.56a.371.371,0,0,0,.291-.218l1.733-3.508a.4.4,0,0,1,.706,0l1.723,3.508A.458.458,0,0,0,125.546,243.434Z" transform="translate(-116.575 -239.5)" fill="none" stroke="#fff" stroke-width="1" />
                                                    </g>
                                                </svg>
                                            </span>
                                        </label>
                                    </td>
                                    <td class="name">
                                        <figure><img src="img/bitcoin-icon.png" alt="123" class="img-fluid">
                                        </figure>
                                        <div class="name">
                                            <h5 class="coin-name">Bitcoin</h5>
                                            <h6 class="short-form">BTC</h6>
                                        </div>
                                    </td>
                                    <td class="price">
                                        <h4>USD 4,5658,578,51</h4>
                                    </td>
                                    <td class="chart">
                                        <figure><img src="img/chart2.png" alt="" class="img-fluid"></figure>
                                    </td>
                                    <td class="change">
                                        <h4><span><img src="img/upicon.png" alt="up" class="img-fluid"></span> 0.42%
                                        </h4>
                                    </td>
                                    <td class="market-cap">
                                        <h4>USD 86.7T</h4>
                                    </td>
                                    <td class="volume">
                                        <h4>USD 86.7T</h4>
                                    </td>
                                    <td class="supply">
                                        <h4>19.2M</h4>
                                    </td>
                                    <td class="trade">
                                        <button>Trade <span><svg xmlns="http://www.w3.org/2000/svg" width="9.138" height="8.908" viewBox="0 0 9.138 8.908">
                                                    <path id="Icon_awesome-arrow-right" data-name="Icon awesome-arrow-right" d="M3.886,3.24l.453-.453a.488.488,0,0,1,.692,0L8.995,6.75a.488.488,0,0,1,0,.692L5.03,11.408a.488.488,0,0,1-.692,0l-.453-.452a.49.49,0,0,1,.008-.7L6.353,7.914H.49A.488.488,0,0,1,0,7.424V6.772a.488.488,0,0,1,.49-.489H6.353L3.894,3.941a.486.486,0,0,1-.008-.7Z" transform="translate(0 -2.643)" fill="#fff" />
                                                </svg>
                                            </span></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="favourite">
                                        <label class="favourite_container">
                                            <input type="checkbox" hidden />
                                            <span class="checkmark">
                                                <svg width="14.191" height="13.571" viewBox="0 0 14.191 13.571">
                                                    <g id="_5_stars_rating" data-name="5 stars rating" transform="translate(0.507 0.5)">
                                                        <path id="Path_776" data-name="Path 776" d="M125.546,243.434l3.872.571a.391.391,0,0,1,.218.664l-2.8,2.73a.39.39,0,0,0-.114.343l.654,3.861a.4.4,0,0,1-.571.415l-3.456-1.827a.377.377,0,0,0-.363,0l-3.467,1.816a.393.393,0,0,1-.571-.415l.664-3.851a.381.381,0,0,0-.114-.343l-2.8-2.73a.389.389,0,0,1,.218-.664l3.872-.56a.371.371,0,0,0,.291-.218l1.733-3.508a.4.4,0,0,1,.706,0l1.723,3.508A.458.458,0,0,0,125.546,243.434Z" transform="translate(-116.575 -239.5)" fill="none" stroke="#fff" stroke-width="1" />
                                                    </g>
                                                </svg>
                                            </span>
                                        </label>
                                    </td>
                                    <td class="name">
                                        <figure><img src="img/bitcoin-icon.png" alt="123" class="img-fluid">
                                        </figure>
                                        <div class="name">
                                            <h5 class="coin-name">Bitcoin</h5>
                                            <h6 class="short-form">BTC</h6>
                                        </div>
                                    </td>
                                    <td class="price">
                                        <h4>USD 4,5658,578,51</h4>
                                    </td>
                                    <td class="chart">
                                        <figure><img src="img/chart3.png" alt="" class="img-fluid"></figure>
                                    </td>
                                    <td class="change">
                                        <h4><span><img src="img/upicon.png" alt="up" class="img-fluid"></span> 0.42%
                                        </h4>
                                    </td>
                                    <td class="market-cap">
                                        <h4>USD 86.7T</h4>
                                    </td>
                                    <td class="volume">
                                        <h4>USD 86.7T</h4>
                                    </td>
                                    <td class="supply">
                                        <h4>19.2M</h4>
                                    </td>
                                    <td class="trade">
                                        <button>Trade <span><svg xmlns="http://www.w3.org/2000/svg" width="9.138" height="8.908" viewBox="0 0 9.138 8.908">
                                                    <path id="Icon_awesome-arrow-right" data-name="Icon awesome-arrow-right" d="M3.886,3.24l.453-.453a.488.488,0,0,1,.692,0L8.995,6.75a.488.488,0,0,1,0,.692L5.03,11.408a.488.488,0,0,1-.692,0l-.453-.452a.49.49,0,0,1,.008-.7L6.353,7.914H.49A.488.488,0,0,1,0,7.424V6.772a.488.488,0,0,1,.49-.489H6.353L3.894,3.941a.486.486,0,0,1-.008-.7Z" transform="translate(0 -2.643)" fill="#fff" />
                                                </svg>
                                            </span></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="favourite">
                                        <label class="favourite_container">
                                            <input type="checkbox" hidden />
                                            <span class="checkmark">
                                                <svg width="14.191" height="13.571" viewBox="0 0 14.191 13.571">
                                                    <g id="_5_stars_rating" data-name="5 stars rating" transform="translate(0.507 0.5)">
                                                        <path id="Path_776" data-name="Path 776" d="M125.546,243.434l3.872.571a.391.391,0,0,1,.218.664l-2.8,2.73a.39.39,0,0,0-.114.343l.654,3.861a.4.4,0,0,1-.571.415l-3.456-1.827a.377.377,0,0,0-.363,0l-3.467,1.816a.393.393,0,0,1-.571-.415l.664-3.851a.381.381,0,0,0-.114-.343l-2.8-2.73a.389.389,0,0,1,.218-.664l3.872-.56a.371.371,0,0,0,.291-.218l1.733-3.508a.4.4,0,0,1,.706,0l1.723,3.508A.458.458,0,0,0,125.546,243.434Z" transform="translate(-116.575 -239.5)" fill="none" stroke="#fff" stroke-width="1" />
                                                    </g>
                                                </svg>
                                            </span>
                                        </label>
                                    </td>
                                    <td class="name">
                                        <figure><img src="img/bitcoin-icon.png" alt="123" class="img-fluid">
                                        </figure>
                                        <div class="name">
                                            <h5 class="coin-name">Bitcoin</h5>
                                            <h6 class="short-form">BTC</h6>
                                        </div>
                                    </td>
                                    <td class="price">
                                        <h4>USD 4,5658,578,51</h4>
                                    </td>
                                    <td class="chart">
                                        <figure><img src="img/chart4.png" alt="" class="img-fluid"></figure>
                                    </td>
                                    <td class="change">
                                        <h4><span><img src="img/down.png" alt="up" class="img-fluid"></span> 0.42%
                                        </h4>
                                    </td>
                                    <td class="market-cap">
                                        <h4>USD 86.7T</h4>
                                    </td>
                                    <td class="volume">
                                        <h4>USD 86.7T</h4>
                                    </td>
                                    <td class="supply">
                                        <h4>19.2M</h4>
                                    </td>
                                    <td class="trade">
                                        <button>Trade <span><svg xmlns="http://www.w3.org/2000/svg" width="9.138" height="8.908" viewBox="0 0 9.138 8.908">
                                                    <path id="Icon_awesome-arrow-right" data-name="Icon awesome-arrow-right" d="M3.886,3.24l.453-.453a.488.488,0,0,1,.692,0L8.995,6.75a.488.488,0,0,1,0,.692L5.03,11.408a.488.488,0,0,1-.692,0l-.453-.452a.49.49,0,0,1,.008-.7L6.353,7.914H.49A.488.488,0,0,1,0,7.424V6.772a.488.488,0,0,1,.49-.489H6.353L3.894,3.941a.486.486,0,0,1-.008-.7Z" transform="translate(0 -2.643)" fill="#fff" />
                                                </svg>
                                            </span></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-tardeable" role="tabpanel" aria-labelledby="pills-tardeable-tab">
                    <div class="table-resposnive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="favourite"></th>
                                    <th class="name">name</th>
                                    <th class="price">price</th>
                                    <th class="chart">chart</th>
                                    <th class="change">change</th>
                                    <th class="market-cap">market cap</th>
                                    <th class="volume">volume ( 24h )</th>
                                    <th class="supply">supply</th>
                                    <th class="trade">trade</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="favourite">
                                        <label class="favourite_container">
                                            <input type="checkbox" hidden />
                                            <span class="checkmark">
                                                <svg width="14.191" height="13.571" viewBox="0 0 14.191 13.571">
                                                    <g id="_5_stars_rating" data-name="5 stars rating" transform="translate(0.507 0.5)">
                                                        <path id="Path_776" data-name="Path 776" d="M125.546,243.434l3.872.571a.391.391,0,0,1,.218.664l-2.8,2.73a.39.39,0,0,0-.114.343l.654,3.861a.4.4,0,0,1-.571.415l-3.456-1.827a.377.377,0,0,0-.363,0l-3.467,1.816a.393.393,0,0,1-.571-.415l.664-3.851a.381.381,0,0,0-.114-.343l-2.8-2.73a.389.389,0,0,1,.218-.664l3.872-.56a.371.371,0,0,0,.291-.218l1.733-3.508a.4.4,0,0,1,.706,0l1.723,3.508A.458.458,0,0,0,125.546,243.434Z" transform="translate(-116.575 -239.5)" fill="none" stroke="#fff" stroke-width="1" />
                                                    </g>
                                                </svg>
                                            </span>
                                        </label>
                                    </td>
                                    <td class="name">
                                        <figure><img src="img/bitcoin-icon.png" alt="123" class="img-fluid">
                                        </figure>
                                        <div class="name">
                                            <h5 class="coin-name">Bitcoin</h5>
                                            <h6 class="short-form">BTC</h6>
                                        </div>
                                    </td>
                                    <td class="price">
                                        <h4>USD 4,5658,578,51</h4>
                                    </td>
                                    <td class="chart">
                                        <figure><img src="img/chart1.png" alt="" class="img-fluid"></figure>
                                    </td>
                                    <td class="change">
                                        <h4><span><img src="img/upicon.png" alt="up" class="img-fluid"></span> 0.42%
                                        </h4>
                                    </td>
                                    <td class="market-cap">
                                        <h4>USD 86.7T</h4>
                                    </td>
                                    <td class="volume">
                                        <h4>USD 86.7T</h4>
                                    </td>
                                    <td class="supply">
                                        <h4>19.2M</h4>
                                    </td>
                                    <td class="trade">
                                        <button>Trade <span><svg xmlns="http://www.w3.org/2000/svg" width="9.138" height="8.908" viewBox="0 0 9.138 8.908">
                                                    <path id="Icon_awesome-arrow-right" data-name="Icon awesome-arrow-right" d="M3.886,3.24l.453-.453a.488.488,0,0,1,.692,0L8.995,6.75a.488.488,0,0,1,0,.692L5.03,11.408a.488.488,0,0,1-.692,0l-.453-.452a.49.49,0,0,1,.008-.7L6.353,7.914H.49A.488.488,0,0,1,0,7.424V6.772a.488.488,0,0,1,.49-.489H6.353L3.894,3.941a.486.486,0,0,1-.008-.7Z" transform="translate(0 -2.643)" fill="#fff" />
                                                </svg>
                                            </span></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="favourite">
                                        <label class="favourite_container">
                                            <input type="checkbox" hidden />
                                            <span class="checkmark">
                                                <svg width="14.191" height="13.571" viewBox="0 0 14.191 13.571">
                                                    <g id="_5_stars_rating" data-name="5 stars rating" transform="translate(0.507 0.5)">
                                                        <path id="Path_776" data-name="Path 776" d="M125.546,243.434l3.872.571a.391.391,0,0,1,.218.664l-2.8,2.73a.39.39,0,0,0-.114.343l.654,3.861a.4.4,0,0,1-.571.415l-3.456-1.827a.377.377,0,0,0-.363,0l-3.467,1.816a.393.393,0,0,1-.571-.415l.664-3.851a.381.381,0,0,0-.114-.343l-2.8-2.73a.389.389,0,0,1,.218-.664l3.872-.56a.371.371,0,0,0,.291-.218l1.733-3.508a.4.4,0,0,1,.706,0l1.723,3.508A.458.458,0,0,0,125.546,243.434Z" transform="translate(-116.575 -239.5)" fill="none" stroke="#fff" stroke-width="1" />
                                                    </g>
                                                </svg>
                                            </span>
                                        </label>
                                    </td>
                                    <td class="name">
                                        <figure><img src="img/bitcoin-icon.png" alt="123" class="img-fluid">
                                        </figure>
                                        <div class="name">
                                            <h5 class="coin-name">Bitcoin</h5>
                                            <h6 class="short-form">BTC</h6>
                                        </div>
                                    </td>
                                    <td class="price">
                                        <h4>USD 4,5658,578,51</h4>
                                    </td>
                                    <td class="chart">
                                        <figure><img src="img/chart2.png" alt="" class="img-fluid"></figure>
                                    </td>
                                    <td class="change">
                                        <h4><span><img src="img/upicon.png" alt="up" class="img-fluid"></span> 0.42%
                                        </h4>
                                    </td>
                                    <td class="market-cap">
                                        <h4>USD 86.7T</h4>
                                    </td>
                                    <td class="volume">
                                        <h4>USD 86.7T</h4>
                                    </td>
                                    <td class="supply">
                                        <h4>19.2M</h4>
                                    </td>
                                    <td class="trade">
                                        <button>Trade <span><svg xmlns="http://www.w3.org/2000/svg" width="9.138" height="8.908" viewBox="0 0 9.138 8.908">
                                                    <path id="Icon_awesome-arrow-right" data-name="Icon awesome-arrow-right" d="M3.886,3.24l.453-.453a.488.488,0,0,1,.692,0L8.995,6.75a.488.488,0,0,1,0,.692L5.03,11.408a.488.488,0,0,1-.692,0l-.453-.452a.49.49,0,0,1,.008-.7L6.353,7.914H.49A.488.488,0,0,1,0,7.424V6.772a.488.488,0,0,1,.49-.489H6.353L3.894,3.941a.486.486,0,0,1-.008-.7Z" transform="translate(0 -2.643)" fill="#fff" />
                                                </svg>
                                            </span></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="favourite">
                                        <label class="favourite_container">
                                            <input type="checkbox" hidden />
                                            <span class="checkmark">
                                                <svg width="14.191" height="13.571" viewBox="0 0 14.191 13.571">
                                                    <g id="_5_stars_rating" data-name="5 stars rating" transform="translate(0.507 0.5)">
                                                        <path id="Path_776" data-name="Path 776" d="M125.546,243.434l3.872.571a.391.391,0,0,1,.218.664l-2.8,2.73a.39.39,0,0,0-.114.343l.654,3.861a.4.4,0,0,1-.571.415l-3.456-1.827a.377.377,0,0,0-.363,0l-3.467,1.816a.393.393,0,0,1-.571-.415l.664-3.851a.381.381,0,0,0-.114-.343l-2.8-2.73a.389.389,0,0,1,.218-.664l3.872-.56a.371.371,0,0,0,.291-.218l1.733-3.508a.4.4,0,0,1,.706,0l1.723,3.508A.458.458,0,0,0,125.546,243.434Z" transform="translate(-116.575 -239.5)" fill="none" stroke="#fff" stroke-width="1" />
                                                    </g>
                                                </svg>
                                            </span>
                                        </label>
                                    </td>
                                    <td class="name">
                                        <figure><img src="img/bitcoin-icon.png" alt="123" class="img-fluid">
                                        </figure>
                                        <div class="name">
                                            <h5 class="coin-name">Bitcoin</h5>
                                            <h6 class="short-form">BTC</h6>
                                        </div>
                                    </td>
                                    <td class="price">
                                        <h4>USD 4,5658,578,51</h4>
                                    </td>
                                    <td class="chart">
                                        <figure><img src="img/chart3.png" alt="" class="img-fluid"></figure>
                                    </td>
                                    <td class="change">
                                        <h4><span><img src="img/upicon.png" alt="up" class="img-fluid"></span> 0.42%
                                        </h4>
                                    </td>
                                    <td class="market-cap">
                                        <h4>USD 86.7T</h4>
                                    </td>
                                    <td class="volume">
                                        <h4>USD 86.7T</h4>
                                    </td>
                                    <td class="supply">
                                        <h4>19.2M</h4>
                                    </td>
                                    <td class="trade">
                                        <button>Trade <span><svg xmlns="http://www.w3.org/2000/svg" width="9.138" height="8.908" viewBox="0 0 9.138 8.908">
                                                    <path id="Icon_awesome-arrow-right" data-name="Icon awesome-arrow-right" d="M3.886,3.24l.453-.453a.488.488,0,0,1,.692,0L8.995,6.75a.488.488,0,0,1,0,.692L5.03,11.408a.488.488,0,0,1-.692,0l-.453-.452a.49.49,0,0,1,.008-.7L6.353,7.914H.49A.488.488,0,0,1,0,7.424V6.772a.488.488,0,0,1,.49-.489H6.353L3.894,3.941a.486.486,0,0,1-.008-.7Z" transform="translate(0 -2.643)" fill="#fff" />
                                                </svg>
                                            </span></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="favourite">
                                        <label class="favourite_container">
                                            <input type="checkbox" hidden />
                                            <span class="checkmark">
                                                <svg width="14.191" height="13.571" viewBox="0 0 14.191 13.571">
                                                    <g id="_5_stars_rating" data-name="5 stars rating" transform="translate(0.507 0.5)">
                                                        <path id="Path_776" data-name="Path 776" d="M125.546,243.434l3.872.571a.391.391,0,0,1,.218.664l-2.8,2.73a.39.39,0,0,0-.114.343l.654,3.861a.4.4,0,0,1-.571.415l-3.456-1.827a.377.377,0,0,0-.363,0l-3.467,1.816a.393.393,0,0,1-.571-.415l.664-3.851a.381.381,0,0,0-.114-.343l-2.8-2.73a.389.389,0,0,1,.218-.664l3.872-.56a.371.371,0,0,0,.291-.218l1.733-3.508a.4.4,0,0,1,.706,0l1.723,3.508A.458.458,0,0,0,125.546,243.434Z" transform="translate(-116.575 -239.5)" fill="none" stroke="#fff" stroke-width="1" />
                                                    </g>
                                                </svg>
                                            </span>
                                        </label>
                                    </td>
                                    <td class="name">
                                        <figure><img src="img/bitcoin-icon.png" alt="123" class="img-fluid">
                                        </figure>
                                        <div class="name">
                                            <h5 class="coin-name">Bitcoin</h5>
                                            <h6 class="short-form">BTC</h6>
                                        </div>
                                    </td>
                                    <td class="price">
                                        <h4>USD 4,5658,578,51</h4>
                                    </td>
                                    <td class="chart">
                                        <figure><img src="img/chart4.png" alt="" class="img-fluid"></figure>
                                    </td>
                                    <td class="change">
                                        <h4><span><img src="img/down.png" alt="up" class="img-fluid"></span> 0.42%
                                        </h4>
                                    </td>
                                    <td class="market-cap">
                                        <h4>USD 86.7T</h4>
                                    </td>
                                    <td class="volume">
                                        <h4>USD 86.7T</h4>
                                    </td>
                                    <td class="supply">
                                        <h4>19.2M</h4>
                                    </td>
                                    <td class="trade">
                                        <button>Trade <span><svg xmlns="http://www.w3.org/2000/svg" width="9.138" height="8.908" viewBox="0 0 9.138 8.908">
                                                    <path id="Icon_awesome-arrow-right" data-name="Icon awesome-arrow-right" d="M3.886,3.24l.453-.453a.488.488,0,0,1,.692,0L8.995,6.75a.488.488,0,0,1,0,.692L5.03,11.408a.488.488,0,0,1-.692,0l-.453-.452a.49.49,0,0,1,.008-.7L6.353,7.914H.49A.488.488,0,0,1,0,7.424V6.772a.488.488,0,0,1,.49-.489H6.353L3.894,3.941a.486.486,0,0,1-.008-.7Z" transform="translate(0 -2.643)" fill="#fff" />
                                                </svg>
                                            </span></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-gainers" role="tabpanel" aria-labelledby="pills-gainers-tab">
                    <div class="table-resposnive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="favourite"></th>
                                    <th class="name">name</th>
                                    <th class="price">price</th>
                                    <th class="chart">chart</th>
                                    <th class="change">change</th>
                                    <th class="market-cap">market cap</th>
                                    <th class="volume">volume ( 24h )</th>
                                    <th class="supply">supply</th>
                                    <th class="trade">trade</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="favourite">
                                        <label class="favourite_container">
                                            <input type="checkbox" hidden />
                                            <span class="checkmark">
                                                <svg width="14.191" height="13.571" viewBox="0 0 14.191 13.571">
                                                    <g id="_5_stars_rating" data-name="5 stars rating" transform="translate(0.507 0.5)">
                                                        <path id="Path_776" data-name="Path 776" d="M125.546,243.434l3.872.571a.391.391,0,0,1,.218.664l-2.8,2.73a.39.39,0,0,0-.114.343l.654,3.861a.4.4,0,0,1-.571.415l-3.456-1.827a.377.377,0,0,0-.363,0l-3.467,1.816a.393.393,0,0,1-.571-.415l.664-3.851a.381.381,0,0,0-.114-.343l-2.8-2.73a.389.389,0,0,1,.218-.664l3.872-.56a.371.371,0,0,0,.291-.218l1.733-3.508a.4.4,0,0,1,.706,0l1.723,3.508A.458.458,0,0,0,125.546,243.434Z" transform="translate(-116.575 -239.5)" fill="none" stroke="#fff" stroke-width="1" />
                                                    </g>
                                                </svg>
                                            </span>
                                        </label>
                                    </td>
                                    <td class="name">
                                        <figure><img src="img/bitcoin-icon.png" alt="123" class="img-fluid">
                                        </figure>
                                        <div class="name">
                                            <h5 class="coin-name">Bitcoin</h5>
                                            <h6 class="short-form">BTC</h6>
                                        </div>
                                    </td>
                                    <td class="price">
                                        <h4>USD 4,5658,578,51</h4>
                                    </td>
                                    <td class="chart">
                                        <figure><img src="img/chart1.png" alt="" class="img-fluid"></figure>
                                    </td>
                                    <td class="change">
                                        <h4><span><img src="img/upicon.png" alt="up" class="img-fluid"></span> 0.42%
                                        </h4>
                                    </td>
                                    <td class="market-cap">
                                        <h4>USD 86.7T</h4>
                                    </td>
                                    <td class="volume">
                                        <h4>USD 86.7T</h4>
                                    </td>
                                    <td class="supply">
                                        <h4>19.2M</h4>
                                    </td>
                                    <td class="trade">
                                        <button>Trade <span><svg xmlns="http://www.w3.org/2000/svg" width="9.138" height="8.908" viewBox="0 0 9.138 8.908">
                                                    <path id="Icon_awesome-arrow-right" data-name="Icon awesome-arrow-right" d="M3.886,3.24l.453-.453a.488.488,0,0,1,.692,0L8.995,6.75a.488.488,0,0,1,0,.692L5.03,11.408a.488.488,0,0,1-.692,0l-.453-.452a.49.49,0,0,1,.008-.7L6.353,7.914H.49A.488.488,0,0,1,0,7.424V6.772a.488.488,0,0,1,.49-.489H6.353L3.894,3.941a.486.486,0,0,1-.008-.7Z" transform="translate(0 -2.643)" fill="#fff" />
                                                </svg>
                                            </span></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="favourite">
                                        <label class="favourite_container">
                                            <input type="checkbox" hidden />
                                            <span class="checkmark">
                                                <svg width="14.191" height="13.571" viewBox="0 0 14.191 13.571">
                                                    <g id="_5_stars_rating" data-name="5 stars rating" transform="translate(0.507 0.5)">
                                                        <path id="Path_776" data-name="Path 776" d="M125.546,243.434l3.872.571a.391.391,0,0,1,.218.664l-2.8,2.73a.39.39,0,0,0-.114.343l.654,3.861a.4.4,0,0,1-.571.415l-3.456-1.827a.377.377,0,0,0-.363,0l-3.467,1.816a.393.393,0,0,1-.571-.415l.664-3.851a.381.381,0,0,0-.114-.343l-2.8-2.73a.389.389,0,0,1,.218-.664l3.872-.56a.371.371,0,0,0,.291-.218l1.733-3.508a.4.4,0,0,1,.706,0l1.723,3.508A.458.458,0,0,0,125.546,243.434Z" transform="translate(-116.575 -239.5)" fill="none" stroke="#fff" stroke-width="1" />
                                                    </g>
                                                </svg>
                                            </span>
                                        </label>
                                    </td>
                                    <td class="name">
                                        <figure><img src="img/bitcoin-icon.png" alt="123" class="img-fluid">
                                        </figure>
                                        <div class="name">
                                            <h5 class="coin-name">Bitcoin</h5>
                                            <h6 class="short-form">BTC</h6>
                                        </div>
                                    </td>
                                    <td class="price">
                                        <h4>USD 4,5658,578,51</h4>
                                    </td>
                                    <td class="chart">
                                        <figure><img src="img/chart2.png" alt="" class="img-fluid"></figure>
                                    </td>
                                    <td class="change">
                                        <h4><span><img src="img/upicon.png" alt="up" class="img-fluid"></span> 0.42%
                                        </h4>
                                    </td>
                                    <td class="market-cap">
                                        <h4>USD 86.7T</h4>
                                    </td>
                                    <td class="volume">
                                        <h4>USD 86.7T</h4>
                                    </td>
                                    <td class="supply">
                                        <h4>19.2M</h4>
                                    </td>
                                    <td class="trade">
                                        <button>Trade <span><svg xmlns="http://www.w3.org/2000/svg" width="9.138" height="8.908" viewBox="0 0 9.138 8.908">
                                                    <path id="Icon_awesome-arrow-right" data-name="Icon awesome-arrow-right" d="M3.886,3.24l.453-.453a.488.488,0,0,1,.692,0L8.995,6.75a.488.488,0,0,1,0,.692L5.03,11.408a.488.488,0,0,1-.692,0l-.453-.452a.49.49,0,0,1,.008-.7L6.353,7.914H.49A.488.488,0,0,1,0,7.424V6.772a.488.488,0,0,1,.49-.489H6.353L3.894,3.941a.486.486,0,0,1-.008-.7Z" transform="translate(0 -2.643)" fill="#fff" />
                                                </svg>
                                            </span></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="favourite">
                                        <label class="favourite_container">
                                            <input type="checkbox" hidden />
                                            <span class="checkmark">
                                                <svg width="14.191" height="13.571" viewBox="0 0 14.191 13.571">
                                                    <g id="_5_stars_rating" data-name="5 stars rating" transform="translate(0.507 0.5)">
                                                        <path id="Path_776" data-name="Path 776" d="M125.546,243.434l3.872.571a.391.391,0,0,1,.218.664l-2.8,2.73a.39.39,0,0,0-.114.343l.654,3.861a.4.4,0,0,1-.571.415l-3.456-1.827a.377.377,0,0,0-.363,0l-3.467,1.816a.393.393,0,0,1-.571-.415l.664-3.851a.381.381,0,0,0-.114-.343l-2.8-2.73a.389.389,0,0,1,.218-.664l3.872-.56a.371.371,0,0,0,.291-.218l1.733-3.508a.4.4,0,0,1,.706,0l1.723,3.508A.458.458,0,0,0,125.546,243.434Z" transform="translate(-116.575 -239.5)" fill="none" stroke="#fff" stroke-width="1" />
                                                    </g>
                                                </svg>
                                            </span>
                                        </label>
                                    </td>
                                    <td class="name">
                                        <figure><img src="img/bitcoin-icon.png" alt="123" class="img-fluid">
                                        </figure>
                                        <div class="name">
                                            <h5 class="coin-name">Bitcoin</h5>
                                            <h6 class="short-form">BTC</h6>
                                        </div>
                                    </td>
                                    <td class="price">
                                        <h4>USD 4,5658,578,51</h4>
                                    </td>
                                    <td class="chart">
                                        <figure><img src="img/chart3.png" alt="" class="img-fluid"></figure>
                                    </td>
                                    <td class="change">
                                        <h4><span><img src="img/upicon.png" alt="up" class="img-fluid"></span> 0.42%
                                        </h4>
                                    </td>
                                    <td class="market-cap">
                                        <h4>USD 86.7T</h4>
                                    </td>
                                    <td class="volume">
                                        <h4>USD 86.7T</h4>
                                    </td>
                                    <td class="supply">
                                        <h4>19.2M</h4>
                                    </td>
                                    <td class="trade">
                                        <button>Trade <span><svg xmlns="http://www.w3.org/2000/svg" width="9.138" height="8.908" viewBox="0 0 9.138 8.908">
                                                    <path id="Icon_awesome-arrow-right" data-name="Icon awesome-arrow-right" d="M3.886,3.24l.453-.453a.488.488,0,0,1,.692,0L8.995,6.75a.488.488,0,0,1,0,.692L5.03,11.408a.488.488,0,0,1-.692,0l-.453-.452a.49.49,0,0,1,.008-.7L6.353,7.914H.49A.488.488,0,0,1,0,7.424V6.772a.488.488,0,0,1,.49-.489H6.353L3.894,3.941a.486.486,0,0,1-.008-.7Z" transform="translate(0 -2.643)" fill="#fff" />
                                                </svg>
                                            </span></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="favourite">
                                        <label class="favourite_container">
                                            <input type="checkbox" hidden />
                                            <span class="checkmark">
                                                <svg width="14.191" height="13.571" viewBox="0 0 14.191 13.571">
                                                    <g id="_5_stars_rating" data-name="5 stars rating" transform="translate(0.507 0.5)">
                                                        <path id="Path_776" data-name="Path 776" d="M125.546,243.434l3.872.571a.391.391,0,0,1,.218.664l-2.8,2.73a.39.39,0,0,0-.114.343l.654,3.861a.4.4,0,0,1-.571.415l-3.456-1.827a.377.377,0,0,0-.363,0l-3.467,1.816a.393.393,0,0,1-.571-.415l.664-3.851a.381.381,0,0,0-.114-.343l-2.8-2.73a.389.389,0,0,1,.218-.664l3.872-.56a.371.371,0,0,0,.291-.218l1.733-3.508a.4.4,0,0,1,.706,0l1.723,3.508A.458.458,0,0,0,125.546,243.434Z" transform="translate(-116.575 -239.5)" fill="none" stroke="#fff" stroke-width="1" />
                                                    </g>
                                                </svg>
                                            </span>
                                        </label>
                                    </td>
                                    <td class="name">
                                        <figure><img src="img/bitcoin-icon.png" alt="123" class="img-fluid">
                                        </figure>
                                        <div class="name">
                                            <h5 class="coin-name">Bitcoin</h5>
                                            <h6 class="short-form">BTC</h6>
                                        </div>
                                    </td>
                                    <td class="price">
                                        <h4>USD 4,5658,578,51</h4>
                                    </td>
                                    <td class="chart">
                                        <figure><img src="img/chart4.png" alt="" class="img-fluid"></figure>
                                    </td>
                                    <td class="change">
                                        <h4><span><img src="img/down.png" alt="up" class="img-fluid"></span> 0.42%
                                        </h4>
                                    </td>
                                    <td class="market-cap">
                                        <h4>USD 86.7T</h4>
                                    </td>
                                    <td class="volume">
                                        <h4>USD 86.7T</h4>
                                    </td>
                                    <td class="supply">
                                        <h4>19.2M</h4>
                                    </td>
                                    <td class="trade">
                                        <button>Trade <span><svg xmlns="http://www.w3.org/2000/svg" width="9.138" height="8.908" viewBox="0 0 9.138 8.908">
                                                    <path id="Icon_awesome-arrow-right" data-name="Icon awesome-arrow-right" d="M3.886,3.24l.453-.453a.488.488,0,0,1,.692,0L8.995,6.75a.488.488,0,0,1,0,.692L5.03,11.408a.488.488,0,0,1-.692,0l-.453-.452a.49.49,0,0,1,.008-.7L6.353,7.914H.49A.488.488,0,0,1,0,7.424V6.772a.488.488,0,0,1,.49-.489H6.353L3.894,3.941a.486.486,0,0,1-.008-.7Z" transform="translate(0 -2.643)" fill="#fff" />
                                                </svg>
                                            </span></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-loser" role="tabpanel" aria-labelledby="pills-loser-tab">
                    <div class="table-resposnive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="favourite"></th>
                                    <th class="name">name</th>
                                    <th class="price">price</th>
                                    <th class="chart">chart</th>
                                    <th class="change">change</th>
                                    <th class="market-cap">market cap</th>
                                    <th class="volume">volume ( 24h )</th>
                                    <th class="supply">supply</th>
                                    <th class="trade">trade</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="favourite">
                                        <label class="favourite_container">
                                            <input type="checkbox" hidden />
                                            <span class="checkmark">
                                                <svg width="14.191" height="13.571" viewBox="0 0 14.191 13.571">
                                                    <g id="_5_stars_rating" data-name="5 stars rating" transform="translate(0.507 0.5)">
                                                        <path id="Path_776" data-name="Path 776" d="M125.546,243.434l3.872.571a.391.391,0,0,1,.218.664l-2.8,2.73a.39.39,0,0,0-.114.343l.654,3.861a.4.4,0,0,1-.571.415l-3.456-1.827a.377.377,0,0,0-.363,0l-3.467,1.816a.393.393,0,0,1-.571-.415l.664-3.851a.381.381,0,0,0-.114-.343l-2.8-2.73a.389.389,0,0,1,.218-.664l3.872-.56a.371.371,0,0,0,.291-.218l1.733-3.508a.4.4,0,0,1,.706,0l1.723,3.508A.458.458,0,0,0,125.546,243.434Z" transform="translate(-116.575 -239.5)" fill="none" stroke="#fff" stroke-width="1" />
                                                    </g>
                                                </svg>
                                            </span>
                                        </label>
                                    </td>
                                    <td class="name">
                                        <figure><img src="img/bitcoin-icon.png" alt="123" class="img-fluid">
                                        </figure>
                                        <div class="name">
                                            <h5 class="coin-name">Bitcoin</h5>
                                            <h6 class="short-form">BTC</h6>
                                        </div>
                                    </td>
                                    <td class="price">
                                        <h4>USD 4,5658,578,51</h4>
                                    </td>
                                    <td class="chart">
                                        <figure><img src="img/chart1.png" alt="" class="img-fluid"></figure>
                                    </td>
                                    <td class="change">
                                        <h4><span><img src="img/upicon.png" alt="up" class="img-fluid"></span> 0.42%
                                        </h4>
                                    </td>
                                    <td class="market-cap">
                                        <h4>USD 86.7T</h4>
                                    </td>
                                    <td class="volume">
                                        <h4>USD 86.7T</h4>
                                    </td>
                                    <td class="supply">
                                        <h4>19.2M</h4>
                                    </td>
                                    <td class="trade">
                                        <button>Trade <span><svg xmlns="http://www.w3.org/2000/svg" width="9.138" height="8.908" viewBox="0 0 9.138 8.908">
                                                    <path id="Icon_awesome-arrow-right" data-name="Icon awesome-arrow-right" d="M3.886,3.24l.453-.453a.488.488,0,0,1,.692,0L8.995,6.75a.488.488,0,0,1,0,.692L5.03,11.408a.488.488,0,0,1-.692,0l-.453-.452a.49.49,0,0,1,.008-.7L6.353,7.914H.49A.488.488,0,0,1,0,7.424V6.772a.488.488,0,0,1,.49-.489H6.353L3.894,3.941a.486.486,0,0,1-.008-.7Z" transform="translate(0 -2.643)" fill="#fff" />
                                                </svg>
                                            </span></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="favourite">
                                        <label class="favourite_container">
                                            <input type="checkbox" hidden />
                                            <span class="checkmark">
                                                <svg width="14.191" height="13.571" viewBox="0 0 14.191 13.571">
                                                    <g id="_5_stars_rating" data-name="5 stars rating" transform="translate(0.507 0.5)">
                                                        <path id="Path_776" data-name="Path 776" d="M125.546,243.434l3.872.571a.391.391,0,0,1,.218.664l-2.8,2.73a.39.39,0,0,0-.114.343l.654,3.861a.4.4,0,0,1-.571.415l-3.456-1.827a.377.377,0,0,0-.363,0l-3.467,1.816a.393.393,0,0,1-.571-.415l.664-3.851a.381.381,0,0,0-.114-.343l-2.8-2.73a.389.389,0,0,1,.218-.664l3.872-.56a.371.371,0,0,0,.291-.218l1.733-3.508a.4.4,0,0,1,.706,0l1.723,3.508A.458.458,0,0,0,125.546,243.434Z" transform="translate(-116.575 -239.5)" fill="none" stroke="#fff" stroke-width="1" />
                                                    </g>
                                                </svg>
                                            </span>
                                        </label>
                                    </td>
                                    <td class="name">
                                        <figure><img src="img/bitcoin-icon.png" alt="123" class="img-fluid">
                                        </figure>
                                        <div class="name">
                                            <h5 class="coin-name">Bitcoin</h5>
                                            <h6 class="short-form">BTC</h6>
                                        </div>
                                    </td>
                                    <td class="price">
                                        <h4>USD 4,5658,578,51</h4>
                                    </td>
                                    <td class="chart">
                                        <figure><img src="img/chart2.png" alt="" class="img-fluid"></figure>
                                    </td>
                                    <td class="change">
                                        <h4><span><img src="img/upicon.png" alt="up" class="img-fluid"></span> 0.42%
                                        </h4>
                                    </td>
                                    <td class="market-cap">
                                        <h4>USD 86.7T</h4>
                                    </td>
                                    <td class="volume">
                                        <h4>USD 86.7T</h4>
                                    </td>
                                    <td class="supply">
                                        <h4>19.2M</h4>
                                    </td>
                                    <td class="trade">
                                        <button>Trade <span><svg xmlns="http://www.w3.org/2000/svg" width="9.138" height="8.908" viewBox="0 0 9.138 8.908">
                                                    <path id="Icon_awesome-arrow-right" data-name="Icon awesome-arrow-right" d="M3.886,3.24l.453-.453a.488.488,0,0,1,.692,0L8.995,6.75a.488.488,0,0,1,0,.692L5.03,11.408a.488.488,0,0,1-.692,0l-.453-.452a.49.49,0,0,1,.008-.7L6.353,7.914H.49A.488.488,0,0,1,0,7.424V6.772a.488.488,0,0,1,.49-.489H6.353L3.894,3.941a.486.486,0,0,1-.008-.7Z" transform="translate(0 -2.643)" fill="#fff" />
                                                </svg>
                                            </span></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="favourite">
                                        <label class="favourite_container">
                                            <input type="checkbox" hidden />
                                            <span class="checkmark">
                                                <svg width="14.191" height="13.571" viewBox="0 0 14.191 13.571">
                                                    <g id="_5_stars_rating" data-name="5 stars rating" transform="translate(0.507 0.5)">
                                                        <path id="Path_776" data-name="Path 776" d="M125.546,243.434l3.872.571a.391.391,0,0,1,.218.664l-2.8,2.73a.39.39,0,0,0-.114.343l.654,3.861a.4.4,0,0,1-.571.415l-3.456-1.827a.377.377,0,0,0-.363,0l-3.467,1.816a.393.393,0,0,1-.571-.415l.664-3.851a.381.381,0,0,0-.114-.343l-2.8-2.73a.389.389,0,0,1,.218-.664l3.872-.56a.371.371,0,0,0,.291-.218l1.733-3.508a.4.4,0,0,1,.706,0l1.723,3.508A.458.458,0,0,0,125.546,243.434Z" transform="translate(-116.575 -239.5)" fill="none" stroke="#fff" stroke-width="1" />
                                                    </g>
                                                </svg>
                                            </span>
                                        </label>
                                    </td>
                                    <td class="name">
                                        <figure><img src="img/bitcoin-icon.png" alt="123" class="img-fluid">
                                        </figure>
                                        <div class="name">
                                            <h5 class="coin-name">Bitcoin</h5>
                                            <h6 class="short-form">BTC</h6>
                                        </div>
                                    </td>
                                    <td class="price">
                                        <h4>USD 4,5658,578,51</h4>
                                    </td>
                                    <td class="chart">
                                        <figure><img src="img/chart3.png" alt="" class="img-fluid"></figure>
                                    </td>
                                    <td class="change">
                                        <h4><span><img src="img/upicon.png" alt="up" class="img-fluid"></span> 0.42%
                                        </h4>
                                    </td>
                                    <td class="market-cap">
                                        <h4>USD 86.7T</h4>
                                    </td>
                                    <td class="volume">
                                        <h4>USD 86.7T</h4>
                                    </td>
                                    <td class="supply">
                                        <h4>19.2M</h4>
                                    </td>
                                    <td class="trade">
                                        <button>Trade <span><svg xmlns="http://www.w3.org/2000/svg" width="9.138" height="8.908" viewBox="0 0 9.138 8.908">
                                                    <path id="Icon_awesome-arrow-right" data-name="Icon awesome-arrow-right" d="M3.886,3.24l.453-.453a.488.488,0,0,1,.692,0L8.995,6.75a.488.488,0,0,1,0,.692L5.03,11.408a.488.488,0,0,1-.692,0l-.453-.452a.49.49,0,0,1,.008-.7L6.353,7.914H.49A.488.488,0,0,1,0,7.424V6.772a.488.488,0,0,1,.49-.489H6.353L3.894,3.941a.486.486,0,0,1-.008-.7Z" transform="translate(0 -2.643)" fill="#fff" />
                                                </svg>
                                            </span></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="favourite">
                                        <label class="favourite_container">
                                            <input type="checkbox" hidden />
                                            <span class="checkmark">
                                                <svg width="14.191" height="13.571" viewBox="0 0 14.191 13.571">
                                                    <g id="_5_stars_rating" data-name="5 stars rating" transform="translate(0.507 0.5)">
                                                        <path id="Path_776" data-name="Path 776" d="M125.546,243.434l3.872.571a.391.391,0,0,1,.218.664l-2.8,2.73a.39.39,0,0,0-.114.343l.654,3.861a.4.4,0,0,1-.571.415l-3.456-1.827a.377.377,0,0,0-.363,0l-3.467,1.816a.393.393,0,0,1-.571-.415l.664-3.851a.381.381,0,0,0-.114-.343l-2.8-2.73a.389.389,0,0,1,.218-.664l3.872-.56a.371.371,0,0,0,.291-.218l1.733-3.508a.4.4,0,0,1,.706,0l1.723,3.508A.458.458,0,0,0,125.546,243.434Z" transform="translate(-116.575 -239.5)" fill="none" stroke="#fff" stroke-width="1" />
                                                    </g>
                                                </svg>
                                            </span>
                                        </label>
                                    </td>
                                    <td class="name">
                                        <figure><img src="img/bitcoin-icon.png" alt="123" class="img-fluid">
                                        </figure>
                                        <div class="name">
                                            <h5 class="coin-name">Bitcoin</h5>
                                            <h6 class="short-form">BTC</h6>
                                        </div>
                                    </td>
                                    <td class="price">
                                        <h4>USD 4,5658,578,51</h4>
                                    </td>
                                    <td class="chart">
                                        <figure><img src="img/chart4.png" alt="" class="img-fluid"></figure>
                                    </td>
                                    <td class="change">
                                        <h4><span><img src="img/down.png" alt="up" class="img-fluid"></span> 0.42%
                                        </h4>
                                    </td>
                                    <td class="market-cap">
                                        <h4>USD 86.7T</h4>
                                    </td>
                                    <td class="volume">
                                        <h4>USD 86.7T</h4>
                                    </td>
                                    <td class="supply">
                                        <h4>19.2M</h4>
                                    </td>
                                    <td class="trade">
                                        <button>Trade <span><svg xmlns="http://www.w3.org/2000/svg" width="9.138" height="8.908" viewBox="0 0 9.138 8.908">
                                                    <path id="Icon_awesome-arrow-right" data-name="Icon awesome-arrow-right" d="M3.886,3.24l.453-.453a.488.488,0,0,1,.692,0L8.995,6.75a.488.488,0,0,1,0,.692L5.03,11.408a.488.488,0,0,1-.692,0l-.453-.452a.49.49,0,0,1,.008-.7L6.353,7.914H.49A.488.488,0,0,1,0,7.424V6.772a.488.488,0,0,1,.49-.489H6.353L3.894,3.941a.486.486,0,0,1-.008-.7Z" transform="translate(0 -2.643)" fill="#fff" />
                                                </svg>
                                            </span></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Exchange Sec End Here -->

<!-- Footer Include -->
<?php include 'inc/footer.php' ?>
<!-- Footer Include -->