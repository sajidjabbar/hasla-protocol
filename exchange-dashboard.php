<!-- App Include -->
<?php include 'inc/app.php' ?>
<!-- App Include -->

<!-- Stylesheet -->
<link rel="stylesheet" href="css/exchange-dashboard.css">
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

<!-- Exchange Dashboard Sec Start Here -->
<section class="exchange_dashboard">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <?php include 'inc/dashboard-sidebar.php' ?>
            </div>
            <div class="col-lg-9">
                <div class="dashboard">
                    <div class="topbar">
                        <div class="heading">
                            <h3>Home</h3>
                        </div>
                        <div class="right-side">
                            <div class="button-group">
                                <button>Buy & Sell
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17.546" viewBox="0 0 18 17.546">
                                            <path id="Icon_awesome-arrow-right" data-name="Icon awesome-arrow-right" d="M7.653,3.818l.892-.892a.96.96,0,0,1,1.362,0l7.809,7.805a.96.96,0,0,1,0,1.362l-7.81,7.812a.96.96,0,0,1-1.362,0l-.891-.89a.965.965,0,0,1,.016-1.378l4.843-4.614H.964A.962.962,0,0,1,0,12.06V10.775a.962.962,0,0,1,.964-.964H12.513L7.669,5.2a.958.958,0,0,1-.016-1.38Z" transform="translate(0 -2.643)" fill="#fff" />
                                        </svg>
                                    </span>
                                </button>
                                <button>Send & Recieve
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17.546" viewBox="0 0 18 17.546">
                                            <path id="Icon_awesome-arrow-right" data-name="Icon awesome-arrow-right" d="M7.653,3.818l.892-.892a.96.96,0,0,1,1.362,0l7.809,7.805a.96.96,0,0,1,0,1.362l-7.81,7.812a.96.96,0,0,1-1.362,0l-.891-.89a.965.965,0,0,1,.016-1.378l4.843-4.614H.964A.962.962,0,0,1,0,12.06V10.775a.962.962,0,0,1,.964-.964H12.513L7.669,5.2a.958.958,0,0,1-.016-1.38Z" transform="translate(0 -2.643)" fill="#fff" />
                                        </svg>
                                    </span>
                                </button>
                            </div>
                            <div class="right-side">
                                <div class="filters">
                                    <button>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20.038" height="21.856" viewBox="0 0 20.038 21.856">
                                            <g id="Group_789" data-name="Group 789" transform="translate(-2461.142 1255.89)">
                                                <path id="Path_819" data-name="Path 819" d="M2721.61-1255.89c.344.082.7.138,1.029.25a4.544,4.544,0,0,1,3.061,4.766,4.553,4.553,0,0,1-3.9,4.041,4.552,4.552,0,0,1-5.132-3.8,4.554,4.554,0,0,1,3.673-5.183c.124-.022.247-.052.37-.078Z" transform="translate(-244.543 0)" fill="#fff" />
                                                <path id="Path_820" data-name="Path 820" d="M2470.842-1213.176a6.249,6.249,0,0,0,.425,6.118,6.279,6.279,0,0,0,5.332,2.961c.078.449.127.9.237,1.338a5.8,5.8,0,0,0,1.866,3.039,1.6,1.6,0,0,1,.6,1.707,1.654,1.654,0,0,1-1.595,1.188c-.064,0-.128,0-.192,0q-7.265,0-14.529,0a1.977,1.977,0,0,1-1.153-.314,1.551,1.551,0,0,1-.147-2.468,6.457,6.457,0,0,0,1.717-2.331,5.9,5.9,0,0,0,.475-2.238c.01-.875,0-1.749,0-2.624a6.362,6.362,0,0,1,4.734-6.2,6.4,6.4,0,0,1,2.113-.2C2470.759-1213.193,2470.792-1213.184,2470.842-1213.176Z" transform="translate(0 -40.855)" fill="#fff" />
                                                <path id="Path_821" data-name="Path 821" d="M2596.27-808.621h6.642c.013,1.208-1.515,2.575-3.032,2.716A3.424,3.424,0,0,1,2596.27-808.621Z" transform="translate(-129.349 -428.143)" fill="#fff" />
                                            </g>
                                        </svg>
                                    </button>
                                    <button>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19.392" height="19.602" viewBox="0 0 19.392 19.602">
                                            <path id="Path_818" data-name="Path 818" d="M2268.625-206.1a1,1,0,0,1,.629.541.917.917,0,0,1-.205,1.04c-.618.662-1.229,1.331-1.843,2q-2.575,2.793-5.152,5.585a1.467,1.467,0,0,0-.41,1.054c.008,1.71,0,3.419.008,5.129a1.538,1.538,0,0,1-.395,1.08c-.855.972-1.7,1.953-2.552,2.929a.593.593,0,0,1-.683.21.593.593,0,0,1-.411-.565c-.006-.07,0-.14,0-.21q0-4.287,0-8.574a1.45,1.45,0,0,0-.4-1.04c-2.3-2.493-4.588-5-6.913-7.475a.977.977,0,0,1,.328-1.7Z" transform="translate(-2249.943 206.095)" fill="#fff" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="profile">
                                    <button>
                                        <img src="img/profile.png" alt="" class="img-fluid">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="balance-box">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="your-box">
                                    <div class="heading">
                                        <h4>Your Balance</h4>
                                        <h2>usd 00.00</h2>
                                    </div>
                                    <div class="bar">
                                        <figure><img src="img/balance-bar.png" alt="" class="img-fluid"></figure>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
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
                                                <h4><span><img src="img/upicon.png" alt="up" class="img-fluid"></span>
                                                    0.42%
                                                </h4>
                                            </td>
                                            <td class="supply">
                                                <h4>19.2M</h4>
                                            </td>
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
                                                <button class="filtered">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.586" height="8.474" viewBox="0 0 10.586 8.474">
                                                        <g id="Group_769" data-name="Group 769" transform="translate(-245.015 292.762)">
                                                            <path id="Path_777" data-name="Path 777" d="M250.325-292.76h4.553a.705.705,0,0,1,.734.725.708.708,0,0,1-.663.685c-.029,0-.059,0-.088,0h-9.084a.708.708,0,0,1-.731-.545.7.7,0,0,1,.671-.865c.3-.005.61,0,.915,0Z" transform="translate(-0.011)" fill="#fff" />
                                                            <path id="Path_778" data-name="Path 778" d="M250.3-255.853q-2.276,0-4.553,0a.705.705,0,0,1-.728-.72.708.708,0,0,1,.659-.689c.033,0,.066,0,.1,0h9.073a.706.706,0,0,1,.739.562.7.7,0,0,1-.648.848c-.077,0-.154,0-.231,0Z" transform="translate(0 -31.966)" fill="#fff" />
                                                            <path id="Path_779" data-name="Path 779" d="M250.31-220.37h-4.564a.705.705,0,0,1-.731-.729.709.709,0,0,1,.656-.681c.026,0,.051,0,.077,0h9.117a.708.708,0,0,1,.714.527.7.7,0,0,1-.672.883c-.422.006-.845,0-1.268,0Z" transform="translate(0 -63.92)" fill="#fff" />
                                                        </g>
                                                    </svg>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
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
                                                <h4><span><img src="img/upicon.png" alt="up" class="img-fluid"></span>
                                                    0.42%
                                                </h4>
                                            </td>
                                            <td class="supply">
                                                <h4>19.2M</h4>
                                            </td>
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
                                                <button class="filtered">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.586" height="8.474" viewBox="0 0 10.586 8.474">
                                                        <g id="Group_769" data-name="Group 769" transform="translate(-245.015 292.762)">
                                                            <path id="Path_777" data-name="Path 777" d="M250.325-292.76h4.553a.705.705,0,0,1,.734.725.708.708,0,0,1-.663.685c-.029,0-.059,0-.088,0h-9.084a.708.708,0,0,1-.731-.545.7.7,0,0,1,.671-.865c.3-.005.61,0,.915,0Z" transform="translate(-0.011)" fill="#fff" />
                                                            <path id="Path_778" data-name="Path 778" d="M250.3-255.853q-2.276,0-4.553,0a.705.705,0,0,1-.728-.72.708.708,0,0,1,.659-.689c.033,0,.066,0,.1,0h9.073a.706.706,0,0,1,.739.562.7.7,0,0,1-.648.848c-.077,0-.154,0-.231,0Z" transform="translate(0 -31.966)" fill="#fff" />
                                                            <path id="Path_779" data-name="Path 779" d="M250.31-220.37h-4.564a.705.705,0,0,1-.731-.729.709.709,0,0,1,.656-.681c.026,0,.051,0,.077,0h9.117a.708.708,0,0,1,.714.527.7.7,0,0,1-.672.883c-.422.006-.845,0-1.268,0Z" transform="translate(0 -63.92)" fill="#fff" />
                                                        </g>
                                                    </svg>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
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
                                                <h4><span><img src="img/upicon.png" alt="up" class="img-fluid"></span>
                                                    0.42%
                                                </h4>
                                            </td>
                                            <td class="supply">
                                                <h4>19.2M</h4>
                                            </td>
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
                                                <button class="filtered">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.586" height="8.474" viewBox="0 0 10.586 8.474">
                                                        <g id="Group_769" data-name="Group 769" transform="translate(-245.015 292.762)">
                                                            <path id="Path_777" data-name="Path 777" d="M250.325-292.76h4.553a.705.705,0,0,1,.734.725.708.708,0,0,1-.663.685c-.029,0-.059,0-.088,0h-9.084a.708.708,0,0,1-.731-.545.7.7,0,0,1,.671-.865c.3-.005.61,0,.915,0Z" transform="translate(-0.011)" fill="#fff" />
                                                            <path id="Path_778" data-name="Path 778" d="M250.3-255.853q-2.276,0-4.553,0a.705.705,0,0,1-.728-.72.708.708,0,0,1,.659-.689c.033,0,.066,0,.1,0h9.073a.706.706,0,0,1,.739.562.7.7,0,0,1-.648.848c-.077,0-.154,0-.231,0Z" transform="translate(0 -31.966)" fill="#fff" />
                                                            <path id="Path_779" data-name="Path 779" d="M250.31-220.37h-4.564a.705.705,0,0,1-.731-.729.709.709,0,0,1,.656-.681c.026,0,.051,0,.077,0h9.117a.708.708,0,0,1,.714.527.7.7,0,0,1-.672.883c-.422.006-.845,0-1.268,0Z" transform="translate(0 -63.92)" fill="#fff" />
                                                        </g>
                                                    </svg>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
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
                                                <h4><span><img src="img/upicon.png" alt="up" class="img-fluid"></span>
                                                    0.42%
                                                </h4>
                                            </td>
                                            <td class="supply">
                                                <h4>19.2M</h4>
                                            </td>
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
                                                <button class="filtered">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.586" height="8.474" viewBox="0 0 10.586 8.474">
                                                        <g id="Group_769" data-name="Group 769" transform="translate(-245.015 292.762)">
                                                            <path id="Path_777" data-name="Path 777" d="M250.325-292.76h4.553a.705.705,0,0,1,.734.725.708.708,0,0,1-.663.685c-.029,0-.059,0-.088,0h-9.084a.708.708,0,0,1-.731-.545.7.7,0,0,1,.671-.865c.3-.005.61,0,.915,0Z" transform="translate(-0.011)" fill="#fff" />
                                                            <path id="Path_778" data-name="Path 778" d="M250.3-255.853q-2.276,0-4.553,0a.705.705,0,0,1-.728-.72.708.708,0,0,1,.659-.689c.033,0,.066,0,.1,0h9.073a.706.706,0,0,1,.739.562.7.7,0,0,1-.648.848c-.077,0-.154,0-.231,0Z" transform="translate(0 -31.966)" fill="#fff" />
                                                            <path id="Path_779" data-name="Path 779" d="M250.31-220.37h-4.564a.705.705,0,0,1-.731-.729.709.709,0,0,1,.656-.681c.026,0,.051,0,.077,0h9.117a.708.708,0,0,1,.714.527.7.7,0,0,1-.672.883c-.422.006-.845,0-1.268,0Z" transform="translate(0 -63.92)" fill="#fff" />
                                                        </g>
                                                    </svg>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
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
                                                <h4><span><img src="img/upicon.png" alt="up" class="img-fluid"></span>
                                                    0.42%
                                                </h4>
                                            </td>
                                            <td class="supply">
                                                <h4>19.2M</h4>
                                            </td>
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
                                                <button class="filtered">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.586" height="8.474" viewBox="0 0 10.586 8.474">
                                                        <g id="Group_769" data-name="Group 769" transform="translate(-245.015 292.762)">
                                                            <path id="Path_777" data-name="Path 777" d="M250.325-292.76h4.553a.705.705,0,0,1,.734.725.708.708,0,0,1-.663.685c-.029,0-.059,0-.088,0h-9.084a.708.708,0,0,1-.731-.545.7.7,0,0,1,.671-.865c.3-.005.61,0,.915,0Z" transform="translate(-0.011)" fill="#fff" />
                                                            <path id="Path_778" data-name="Path 778" d="M250.3-255.853q-2.276,0-4.553,0a.705.705,0,0,1-.728-.72.708.708,0,0,1,.659-.689c.033,0,.066,0,.1,0h9.073a.706.706,0,0,1,.739.562.7.7,0,0,1-.648.848c-.077,0-.154,0-.231,0Z" transform="translate(0 -31.966)" fill="#fff" />
                                                            <path id="Path_779" data-name="Path 779" d="M250.31-220.37h-4.564a.705.705,0,0,1-.731-.729.709.709,0,0,1,.656-.681c.026,0,.051,0,.077,0h9.117a.708.708,0,0,1,.714.527.7.7,0,0,1-.672.883c-.422.006-.845,0-1.268,0Z" transform="translate(0 -63.92)" fill="#fff" />
                                                        </g>
                                                    </svg>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
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
                                                <h4><span><img src="img/upicon.png" alt="up" class="img-fluid"></span>
                                                    0.42%
                                                </h4>
                                            </td>
                                            <td class="supply">
                                                <h4>19.2M</h4>
                                            </td>
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
                                                <button class="filtered">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.586" height="8.474" viewBox="0 0 10.586 8.474">
                                                        <g id="Group_769" data-name="Group 769" transform="translate(-245.015 292.762)">
                                                            <path id="Path_777" data-name="Path 777" d="M250.325-292.76h4.553a.705.705,0,0,1,.734.725.708.708,0,0,1-.663.685c-.029,0-.059,0-.088,0h-9.084a.708.708,0,0,1-.731-.545.7.7,0,0,1,.671-.865c.3-.005.61,0,.915,0Z" transform="translate(-0.011)" fill="#fff" />
                                                            <path id="Path_778" data-name="Path 778" d="M250.3-255.853q-2.276,0-4.553,0a.705.705,0,0,1-.728-.72.708.708,0,0,1,.659-.689c.033,0,.066,0,.1,0h9.073a.706.706,0,0,1,.739.562.7.7,0,0,1-.648.848c-.077,0-.154,0-.231,0Z" transform="translate(0 -31.966)" fill="#fff" />
                                                            <path id="Path_779" data-name="Path 779" d="M250.31-220.37h-4.564a.705.705,0,0,1-.731-.729.709.709,0,0,1,.656-.681c.026,0,.051,0,.077,0h9.117a.708.708,0,0,1,.714.527.7.7,0,0,1-.672.883c-.422.006-.845,0-1.268,0Z" transform="translate(0 -63.92)" fill="#fff" />
                                                        </g>
                                                    </svg>
                                                </button>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="right-side">
                                    <div class="coin-detail">
                                        <div class="details">
                                            <h4>SOLANA STAKING</h4>
                                            <p>
                                                Earn up to 4.00% APY on your
                                                Solana holdings
                                            </p>
                                            <div class="button-group">
                                                <a href="#">Buy SOL <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17.546" viewBox="0 0 18 17.546">
                                                        <path id="Icon_awesome-arrow-right" data-name="Icon awesome-arrow-right" d="M7.653,3.818l.892-.892a.96.96,0,0,1,1.362,0l7.809,7.805a.96.96,0,0,1,0,1.362l-7.81,7.812a.96.96,0,0,1-1.362,0l-.891-.89a.965.965,0,0,1,.016-1.378l4.843-4.614H.964A.962.962,0,0,1,0,12.06V10.775a.962.962,0,0,1,.964-.964H12.513L7.669,5.2a.958.958,0,0,1-.016-1.38Z" transform="translate(0 -2.643)" fill="#2bdeff" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="solana">
                                            <figure><img src="img/solana.png" alt="123" class="img-fluid"></figure>
                                        </div>
                                    </div>
                                    <div class="top-movers">
                                        <div class="topbar">
                                            <h4>Top Movers</h4>
                                            <a href="#">See All</a>
                                        </div>
                                        <div class="coin-lists">
                                            <li>
                                                <div class="left">
                                                    <div class="coin-name">
                                                        <figure><img src="img/coin1.png" alt="" class="img-fluid">
                                                        </figure>
                                                        <div class="name">
                                                            <h4>Pangolin</h4>
                                                            <span>PNG</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="rate">
                                                    <p>USD 37.2T</p>
                                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="17.87" height="17.87" viewBox="0 0 17.87 17.87">
                                                            <path id="Path_795" data-name="Path 795" d="M-583.643-105.489a1.288,1.288,0,0,1-.3.535,1.02,1.02,0,0,1-.642.282c-.075.005-.15,0-.226,0h-9.381a.536.536,0,0,0,.077.054,2.32,2.32,0,0,1,.764.54q1.264,1.272,2.532,2.541a1.009,1.009,0,0,1,.306,1.074.944.944,0,0,1-1.463.454,1.821,1.821,0,0,1-.179-.158q-2.373-2.371-4.745-4.744a.974.974,0,0,1-.206-1.242,1.245,1.245,0,0,1,.2-.247q2.38-2.383,4.762-4.764a.971.971,0,0,1,1.466.025,1,1,0,0,1-.008,1.239c-.05.061-.106.119-.162.175q-1.08,1.081-2.161,2.16a3.26,3.26,0,0,1-1.158.912l.009.034h.15q4.643,0,9.287,0a.984.984,0,0,1,.864.375,2.648,2.648,0,0,1,.218.46Z" transform="translate(-483.277 351.739) rotate(135)" fill="#fff" />
                                                        </svg>
                                                        0.42%</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="left">
                                                    <div class="coin-name">
                                                        <figure><img src="img/coin1.png" alt="" class="img-fluid">
                                                        </figure>
                                                        <div class="name">
                                                            <h4>Pangolin</h4>
                                                            <span>PNG</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="rate">
                                                    <p>USD 37.2T</p>
                                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="17.87" height="17.87" viewBox="0 0 17.87 17.87">
                                                            <path id="Path_795" data-name="Path 795" d="M-583.643-105.489a1.288,1.288,0,0,1-.3.535,1.02,1.02,0,0,1-.642.282c-.075.005-.15,0-.226,0h-9.381a.536.536,0,0,0,.077.054,2.32,2.32,0,0,1,.764.54q1.264,1.272,2.532,2.541a1.009,1.009,0,0,1,.306,1.074.944.944,0,0,1-1.463.454,1.821,1.821,0,0,1-.179-.158q-2.373-2.371-4.745-4.744a.974.974,0,0,1-.206-1.242,1.245,1.245,0,0,1,.2-.247q2.38-2.383,4.762-4.764a.971.971,0,0,1,1.466.025,1,1,0,0,1-.008,1.239c-.05.061-.106.119-.162.175q-1.08,1.081-2.161,2.16a3.26,3.26,0,0,1-1.158.912l.009.034h.15q4.643,0,9.287,0a.984.984,0,0,1,.864.375,2.648,2.648,0,0,1,.218.46Z" transform="translate(-483.277 351.739) rotate(135)" fill="#fff" />
                                                        </svg>
                                                        0.42%</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="left">
                                                    <div class="coin-name">
                                                        <figure><img src="img/coin1.png" alt="" class="img-fluid">
                                                        </figure>
                                                        <div class="name">
                                                            <h4>Pangolin</h4>
                                                            <span>PNG</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="rate">
                                                    <p>USD 37.2T</p>
                                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="17.87" height="17.87" viewBox="0 0 17.87 17.87">
                                                            <path id="Path_795" data-name="Path 795" d="M-583.643-105.489a1.288,1.288,0,0,1-.3.535,1.02,1.02,0,0,1-.642.282c-.075.005-.15,0-.226,0h-9.381a.536.536,0,0,0,.077.054,2.32,2.32,0,0,1,.764.54q1.264,1.272,2.532,2.541a1.009,1.009,0,0,1,.306,1.074.944.944,0,0,1-1.463.454,1.821,1.821,0,0,1-.179-.158q-2.373-2.371-4.745-4.744a.974.974,0,0,1-.206-1.242,1.245,1.245,0,0,1,.2-.247q2.38-2.383,4.762-4.764a.971.971,0,0,1,1.466.025,1,1,0,0,1-.008,1.239c-.05.061-.106.119-.162.175q-1.08,1.081-2.161,2.16a3.26,3.26,0,0,1-1.158.912l.009.034h.15q4.643,0,9.287,0a.984.984,0,0,1,.864.375,2.648,2.648,0,0,1,.218.46Z" transform="translate(-483.277 351.739) rotate(135)" fill="#fff" />
                                                        </svg>
                                                        0.42%</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="left">
                                                    <div class="coin-name">
                                                        <figure><img src="img/coin1.png" alt="" class="img-fluid">
                                                        </figure>
                                                        <div class="name">
                                                            <h4>Pangolin</h4>
                                                            <span>PNG</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="rate">
                                                    <p>USD 37.2T</p>
                                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="17.87" height="17.87" viewBox="0 0 17.87 17.87">
                                                            <path id="Path_795" data-name="Path 795" d="M-583.643-105.489a1.288,1.288,0,0,1-.3.535,1.02,1.02,0,0,1-.642.282c-.075.005-.15,0-.226,0h-9.381a.536.536,0,0,0,.077.054,2.32,2.32,0,0,1,.764.54q1.264,1.272,2.532,2.541a1.009,1.009,0,0,1,.306,1.074.944.944,0,0,1-1.463.454,1.821,1.821,0,0,1-.179-.158q-2.373-2.371-4.745-4.744a.974.974,0,0,1-.206-1.242,1.245,1.245,0,0,1,.2-.247q2.38-2.383,4.762-4.764a.971.971,0,0,1,1.466.025,1,1,0,0,1-.008,1.239c-.05.061-.106.119-.162.175q-1.08,1.081-2.161,2.16a3.26,3.26,0,0,1-1.158.912l.009.034h.15q4.643,0,9.287,0a.984.984,0,0,1,.864.375,2.648,2.648,0,0,1,.218.46Z" transform="translate(-483.277 351.739) rotate(135)" fill="#fff" />
                                                        </svg>
                                                        0.42%</span>
                                                </div>
                                            </li>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Exchange Dashboard Sec End Here -->

<!-- Footer Include -->
<?php include 'inc/footer.php' ?>
<!-- Footer Include -->