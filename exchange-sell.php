<?php include 'inc/app.php'; ?>
<!-- css starts here -->
<link rel="stylesheet" href="css/exchange-sell.css">
<!-- css ends here -->
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
                            <li class="arrow"><a href="#">></a></li>
                            <li class="current-page"><a href="#">Buy Crypto</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- page Header ends here -->
<!-- exchange payment starts here -->
<section class="exchange-sell">
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="buy-and-sell-wrapper">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link " id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Buy</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Sell</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-Convert-tab" data-bs-toggle="pill" data-bs-target="#pills-Convert" type="button" role="tab" aria-controls="pills-Convert" aria-selected="false">Convert</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade " id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                        </div>
                        <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="sell-wrapper">
                                <div class="see-all-wrapper">
                                    <div class="currency-wrapper">
                                        <h3>$ <span>0</span></h3>
                                        <a href="#" class="btn">Sell All</a>
                                    </div>
                                    <div class="btc_wrapper">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13.938" height="19.911" viewBox="0 0 13.938 19.911">
                                            <path id="Icon_material-compare-arrows" data-name="Icon material-compare-arrows" d="M9.979,16.46H3v1.991H9.979v2.987l3.972-3.982L9.979,13.473Zm5.953-1V12.478h6.979V10.487H15.932V7.5L11.96,11.482Z" transform="translate(-7.5 22.911) rotate(-90)" fill="#fff" />
                                        </svg>
                                        <h5>BTC</h5>
                                    </div>

                                </div>
                            </div>
                            <div class="sells-wrapper">
                                <div class="sell-card-wrapper">
                                    <h5>Sell</h5>
                                    <h6> <img src="img/bitcoin-icon.png" class="img-fluid" alt=""> Bitcoin</h6>
                                    <button><i class="fa fa-angle-right"></i></button>
                                </div>
                                <div class="sell-card-wrapper">
                                    <h5>Deposit To</h5>
                                    <h6> <img src="img/bitcoin-icon.png" class="img-fluid" alt=""> GBP Wallet</h6>
                                    <button><i class="fa fa-angle-right"></i></button>
                                </div>
                            </div>
                            <div class="btn-wrapper">
                                <a href="#" class="btn form-control"> Sell Bitcoin</a>
                            </div>
                            <div class="btc-balance-wrapper">
                                <h5>BTC Ballance</h5>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-Convert" role="tabpanel" aria-labelledby="pills-Convert-tab">

                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
</section>
<!-- exchange payment ends here -->
<?php include 'inc/footer.php'; ?>