@extends('businessloan.layouts.default')
@include('include.header')

<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{'/'}}" class="logo">
                        <img src="{{ asset('user/assets/images/logo.png') }}" alt="Chain App Dev">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="{{ '/' }}" class="active">Home</a></li>
                        </li>
                        <li class="scroll-to-section"><a href="{{ route('contactUs.contactPage') }}">Contact</a></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<br><br>
<br><br>
<br><br>

<div class="container">
    <div class="row">
    <div class="col-md-3">
        <div style="height:10px;weight:10px;">
            <img class="animated bounce infinite" src="{{ asset('assets/img/creditCard/Aura Edge_card-image_396x257px.png') }}">
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="col-md-9" style="">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script>
            $(document).ready(function() {
                $("select").change(function() {
                    $(this).find("option:selected").each(function() {
                        var optionValue = $(this).attr("value");
                        if (optionValue) {
                            $(".box").not("." + optionValue).hide();
                            $("." + optionValue).show();
                        } else {
                            $(".box").hide();
                        }
                    });
                }).change();
            });
        </script>
        <div>
            <form action="{{ route('creditCard.create.step.one') }}" method="POST">
                @csrf
                <div class="container">
                    <p class="text-center" style="font-size: 02rem;">Choose your monthly income and <span>we offer you the best credit card</span>.</p>

                    <div class="card-body">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        {{-- <div style="margin-top:-20px;width: 20%;height:10%;float: right;">
                    <div class="tenor-gif-embed" data-postid="23934764" data-share-method="host" data-aspect-ratio="1"
                        data-width="100%"><a href="https://tenor.com/view/ja-gif-23934764">Ja GIF</a>from <a
                            href="https://tenor.com/search/ja-gifs">Ja GIFs</a></div> <script type="text/javascript" async src="https://tenor.com/embed.js"></script>


                            <div class="tenor-gif-embed" data-postid="23077396" data-share-method="host" data-aspect-ratio="1" data-width="100%"><a href="https://tenor.com/view/credit-card-bills-dont-stop-credit-card-payments-bills-utilities-can-you-pay-my-bills-gif-23077396">Credit Card Bills Dont Stop Credit Card Payments Sticker</a>from <a href="https://tenor.com/search/credit+card+bills+dont+stop-stickers">Credit Card Bills Dont Stop Stickers</a></div> <script type="text/javascript" async src="https://tenor.com/embed.js"></script>
                        </div> --}}
                        <div class="col p-3 ">
                            <label for="">Monthly Income</label>
                            <select name="salary" id="" class="form-control" required>
                                <option value="" class="text-center">--Select Income--</option>
                                <option value="sl_10k_to_20k">10,000-20,000</option>
                                <option value="sl_20k_to_25k">20,000-25,000</option>
                                <option value="sl_25k_to_35k">25,000-35,000</option>
                                <option value="sl_35k_to_45k">35,000-45,000</option>
                                <option value="sl_45k_to_55k">45,000-55,000</option>
                                <option value="sl_55k_to_75k" name="salary">55,000-75,000</option>
                                <option value="sl_75k_to_1lac" name="salary">75,000-1,00,000</option>
                                <option value="sl_1lac_to_1lac70k" name="salary">1,00,000-1,70,000</option>
                                <option value="sl_1lac70k_to_2lac70k" name="salary">1,70,000-2,70,000</option>
                            </select>
                        </div>

                        <div class="sl_10k_to_20k box">
                            <div class="row">
                                <div class="col-md-4">
                                <!--    <input type="radio" name="img_name" id="" class="form-check-input"-->
                                <!--value="money-back-credit-card">-->

                                    <div class="card">
                                        <div class="card-body">
                                            {{-- <input type="radio" name="img_name" id="" value="money-back-credit-card"> --}}
                                            <div class="text-center">
                                                <img src="{{ asset('assets/img/creditCard/money back.webp') }}" alt=""
                                                    style="width: 12rem; height:9rem;">
                                                <br><br>
                                                <div class="card-title"> <b>MoneyBack Credit card</b> </div>
                                            </div>
                                            

                                            <!--<strong style="margin-left: 3rem;">MoneyBack Credit card</strong>-->
                                            
                                            <ul style="text-align:initial;">
                                                <li> * Earn 4 Reward Points For Every Rs.150 Spent &#160;&#160;
                                                    Online(Up To
                                                    Maximum
                                                    Of 5000 Reward &#160;&#160;&#160;Points Per Statement Cycle)</li>
                                                <li> * Earn 2 Reward Points For Every Rs.150 Spent.</li>
                                            </ul>
                                            <div class="text-center">
                                                <a href="{{ route('creditCard.moneyback') }}" class="btn btn-primary">
                                                    Proceed
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <img src="{{ asset('assets/img/creditCard/HDFC-Bank-6E-Rewards-IndiGo-HDFC-Bank-Credit-Card-2.png') }}"
                                                    alt="" style="width: 12rem; height:9rem;">
                                                <br><br>
                                                <div class="card-title"> <b>Indigo Credit card</b> </div>
                                            </div>
                                            
                                            <!--<strong style="margin-left: 6rem;">IndiGo Credit card</strong>-->
                                            
                                            <ul style="text-align:initial;">
                                                <li> * Earn 4 Reward Points For Every Rs.150 Spent &#160;&#160;
                                                    Online(Up To
                                                    Maximum
                                                    Of 5000 Reward &#160;&#160;&#160;Points Per Statement Cycle)</li>
                                                <li> * Earn 2 Reward Points For Every Rs.150 Spent.</li>
                                            </ul>
                                            <div class="text-center">
                                                <a href="{{ route('creditCard.indigo') }}" class="btn btn-primary">
                                                    Proceed
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <img src="{{ asset('assets/img/creditCard/indianOil.webp') }}" alt=""
                                                    style="width: 12rem; height:9rem;">
                                                <br><br>
                                                <div class="card-title"> <b>Indian Oil Credit card</b> </div>
                                            </div>
                                            <ul style="text-align:initial;">
                                                <li> * Earn 5% Of Spends As Fuel Points(FP) At &#160;&#160; &#160;&#160;
                                                    IndianOil
                                                    Fuel Outlest (Max.250 FP Per Month For The First 6 Months Forn Card
                                                    Issuance
                                                    ,Max.150 FP Per Month Post 6 Months)
                                                </li>
                                            </ul>
                                            <div class="text-center">
                                                <a href="{{ route('creditCard.indianOil') }}"
                                                    class="btn btn-primary">
                                                    Proceed
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="sl_20k_to_25k box">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <img src="{{ asset('assets/img/creditCard/HDFC-Freedom-Card.png') }}"
                                                style="width: 12rem; height:9rem;" alt="">
                                            <br>
                                            <div class="card-title"> <b>Freedom Credit card</b> </div>
                                        </div>
                                        <!--<br>-->
                                        <!--<strong style="margin-left: 3rem;">Freedom Credit Card</strong>-->
                                        
                                        <ul style="text-align:initial;">
                                            <li> * Earn 4 Reward Points For Every Rs.150 Spent &#160;&#160; Online(Up To
                                                Maximum
                                                Of
                                                5000 Reward &#160;&#160;&#160;Points Per Statement Cycle)</li>
                                            <li> * Earn 2 Reward Points For Every Rs.150 Spent.</li>
                                        </ul>
                                        <div class="text-center">
                                            <a href="{{ route('creditCard.freedom') }}" class="btn btn-primary">
                                                Proceed
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="sl_25k_to_35k box">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <img src="{{ asset('assets/img/creditCard/Aura Edge_card-image_396x257px.png') }}"
                                                    style="width: 12rem; height:9rem;" alt="">
                                                <br><br>
                                                <div class="card-title"> <b>Aura Edge Credit card</b> </div>
                                            </div>

                                            <ul style="text-align:initial;">
                                                <li> * Earn 4 Reward Points For Every Rs.150 Spent &#160;&#160;
                                                    Online(Up To Maximum
                                                    Of 5000 Reward &#160;&#160;&#160;Points Per Statement Cycle)</li>
                                                <li> * Earn 2 Reward Points For Every Rs.150 Spent.</li>
                                            </ul>
                                            <div class="text-center">
                                                <a href="{{ route('creditCard.auraEdge') }}" class="btn btn-primary">
                                                    Proceed
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <img src="{{ asset('assets/img/creditCard/Altura-Card.jpg') }}"
                                                    style="width: 12rem; height:9rem;" alt="">
                                                <br><br>
                                                <div class="card-title"> <b>Altura Credit card</b> </div>
                                            </div>

                                            <ul style="text-align:initial;">
                                                <li> * Earn 4 Reward Points For Every Rs.150 Spent &#160;&#160;
                                                    Online(Up To Maximum
                                                    Of 5000 Reward &#160;&#160;&#160;Points Per Statement Cycle)</li>
                                                <li> * Earn 2 Reward Points For Every Rs.150 Spent.</li>
                                            </ul>
                                            <div class="text-center">
                                                <a href="{{ route('creditCard.altura') }}" class="btn btn-primary">
                                                    Proceed
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <img src="{{ asset('assets/img/creditCard/Millennia.webp') }}"
                                                    style="width: 12rem; height:9rem;" alt="">
                                                <br><br>
                                                <div class="card-title"> <b>Millennia Credit card</b> </div>
                                            </div>
                                            <ul style="text-align:initial;">
                                                <li> *1% CashBack on all offline spends and Wallet reloads.</li>
                                                <li> *5% CashBack on shopping via PAYZAPP & SmartBUY.
                                                </li>
                                                <li>*2.5% CashBack on all online spends</li>
                                            </ul>
                                            <div class="text-center">
                                                <a href="{{ route('creditCard.millenia') }}" class="btn btn-primary">
                                                    Proceed
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="sl_35k_to_45k box">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <img src="{{ asset('assets/img/creditCard/Millennia.webp') }}"
                                                    style="width: 12rem; height:9rem;" alt="">
                                                <br><br>
                                                <div class="card-title"> <b>Millennia Credit card</b> </div>
                                            </div>
                                            <ul style="text-align:initial;">
                                                <li> *1% CashBack on all offline spends and Wallet reloads.</li>
                                                <li> *5% CashBack on shopping via PAYZAPP & SmartBUY.
                                                </li>
                                                <li>*2.5% CashBack on all online spends</li>
                                            </ul>
                                            <div class="text-center">
                                                <a href="{{ route('creditCard.millenia') }}" class="btn btn-primary">
                                                    Proceed
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <img src="{{ asset('assets/img/creditCard/Aura Edge_card-image_396x257px.png') }}"
                                                    style="width: 12rem; height:9rem;" alt="">
                                                <br><br>
                                                <div class="card-title"> <b>Aura Credit Card</b> </div>
                                            </div>
                                            <!--<br>-->
                                            <!--<strong style="margin-left: 4rem;">Aura Credit Card</strong>-->
                                            <ul style="text-align:initial;">
                                                <li> * Earn 4 Reward Points For Every Rs.150 Spent &#160;&#160;
                                                    Online(Up To
                                                    Maximum
                                                    Of 5000 Reward &#160;&#160;&#160;Points Per Statement Cycle)</li>
                                                <li> * Earn 2 Reward Points For Every Rs.150 Spent. <br></li>
                                            </ul>
                                            <div class="text-center">
                                                <a href="{{ route('creditCard.auraEdge') }}" class="btn btn-primary">
                                                    Proceed
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <img src="{{ asset('assets/img/creditCard/au-altura-plus-credit-card.png') }}"
                                                    style="width: 12rem; height:9rem;" alt="">
                                                <br><br>
                                                <div class="card-title"> <b>Altura Plus Credit card</b> </div>
                                            </div>
                                            <ul style="text-align:initial;">
                                                <li> * Earn 4 Reward Points For Every Rs.150 Spent &#160;&#160;
                                                    Online(Up To
                                                    Maximum
                                                    Of 5000 Reward &#160;&#160;&#160;Points Per Statement Cycle)</li>
                                                <li> * Earn 2 Reward Points For Every Rs.150 Spent.</li>
                                            </ul>
                                            <div class="text-center">
                                                <a href="{{ route('creditCard.alturaPlus') }}"
                                                    class="btn btn-primary">
                                                    Proceed
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="sl_45k_to_55k box">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <img src="{{ asset('assets/img/creditCard/Millennia.webp') }}"
                                                    style="width: 12rem; height:9rem;" alt="">
                                                <br><br>
                                                <div class="card-title"> <b>Millennia Credit card</b> </div>
                                            </div>
                                            <ul style="text-align:initial;">
                                                <li> *1% CashBack on all offline spends and Wallet reloads.</li>
                                                <li> *5% CashBack on shopping via PAYZAPP & SmartBUY.
                                                </li>
                                                <li>*2.5% CashBack on all online spends</li>
                                            </ul>
                                            <div class="text-center">
                                                <a href="{{ route('creditCard.millenia') }}"
                                                    class="btn btn-primary">
                                                    Proceed
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="col-sm-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <img src="{{ asset('assets/img/creditCard/Aura Edge_card-image_396x257px.png') }}"
                                                    style="width: 12rem; height:9rem" alt="">
                                                <br><br>
                                                <div class="card-title"> <b>Aura Edge Credit card</b> </div>
                                            </div>
                                            <ul style="text-align:initial;">
                                                <li> * Earn 4 Reward Points For Every Rs.150 Spent &#160;&#160;
                                                    Online(Up To
                                                    Maximum
                                                    Of 5000 Reward &#160;&#160;&#160;Points Per Statement Cycle)</li>
                                                <li> * Earn 2 Reward Points For Every Rs.150 Spent.</li>
                                            </ul>
                                            <div class="text-center">
                                                <a href="{{ route('creditCard.auraEdge') }}"
                                                    class="btn btn-primary">
                                                    Proceed
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="col-sm-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <img src="{{ asset('assets/img/creditCard/au-altura-plus-credit-card.png') }}"
                                                    style="width: 12rem; height:9rem;" alt="">
                                                <br><br>
                                                <div class="card-title"> <b>Altura Plus Credit card</b> </div>
                                            </div>
                                            <ul style="text-align:initial;">
                                                <li> * Earn 4 Reward Points For Every Rs.150 Spent &#160;&#160;
                                                    Online(Up To
                                                    Maximum
                                                    Of 5000 Reward &#160;&#160;&#160;Points Per Statement Cycle)</li>
                                                <li> * Earn 2 Reward Points For Every Rs.150 Spent.</li>
                                            </ul>
                                            <div class="text-center">
                                                <a href="{{ route('creditCard.alturaPlus') }}"
                                                    class="btn btn-primary">
                                                    Proceed
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="sl_55k_to_75k box">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <img src="{{ asset('assets/img/creditCard/Millennia.webp') }}"
                                                    style="width: 12rem; height:9rem;" alt="">
                                                <br><br>
                                                <div class="card-title"> <b>Millennia Credit card</b> </div>
                                            </div>
                                            <ul style="text-align:initial;">
                                                <li> *1% CashBack on all offline spends and Wallet reloads.</li>
                                                <li> *5% CashBack on shopping via PAYZAPP & SmartBUY.
                                                </li>
                                                <li>*2.5% CashBack on all online spends</li>

                                            </ul>
                                            <div class="text-center">
                                                <a href="{{ route('creditCard.millenia') }}"
                                                    class="btn btn-primary">
                                                    Proceed
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="col-sm-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <img src="{{ asset('assets/img/creditCard/Aura Edge_card-image_396x257px.png') }}"
                                                    style="width: 12rem; height:9rem;" alt="">
                                                <br><br>
                                                <div class="card-title"> <b>Aura Edge Credit card</b> </div>
                                            </div>
                                            <ul style="text-align:initial;">
                                                <li> * Earn 4 Reward Points For Every Rs.150 Spent &#160;&#160;
                                                    Online(Up To
                                                    Maximum Of
                                                    5000 Reward &#160;&#160;&#160;Points Per Statement Cycle)</li>
                                                <li> * Earn 2 Reward Points For Every Rs.150 Spent.</li>
                                            </ul>
                                            <div class="text-center">
                                                <a href="{{ route('creditCard.auraEdge') }}"
                                                    class="btn btn-primary">
                                                    Proceed
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="col-sm-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <img src="{{ asset('assets/img/creditCard/au-altura-plus-credit-card.png') }}"
                                                    style="width: 12rem; height:9rem;" alt="">
                                                <br><br>
                                                <div class="card-title"> <b>Altura Plus Credit card</b> </div>
                                            </div>
                                            <ul style="text-align:initial;">
                                                <li> * Earn 4 Reward Points For Every Rs.150 Spent &#160;&#160;
                                                    Online(Up To
                                                    Maximum Of
                                                    5000 Reward &#160;&#160;&#160;Points Per Statement Cycle)</li>
                                                <li> * Earn 2 Reward Points For Every Rs.150 Spent.</li>
                                            </ul>
                                            <div class="text-center">
                                                <a href="{{ route('creditCard.alturaPlus') }}"
                                                    class="btn btn-primary">
                                                    Proceed
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="sl_75k_to_1lac box">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <img src="{{ asset('assets/img/creditCard/Regalis.webp') }}"
                                                    style="width: 12rem; height:9rem;" alt="">
                                                <br><br>
                                                <div class="card-title"> <b>Regalia Credit card</b> </div>
                                            </div>
                                            <ul style="text-align:initial;">
                                                <li> *Earn 4 RP Per Rs.150 On Retall Spends*
                                                </li>
                                                <li> *Up To 5% Cashback On Travel & Amanzon Spends On Smartbuy.</li>
                                                <li> *Exclusive Complimentary Dineout Passport Membership.
                                                </li>
                                            </ul>
                                            <div class="text-center">
                                                <a href="{{ route('creditCard.regalia') }}" class="btn btn-primary">
                                                    Proceed
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="col-sm-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <img src="{{ asset('assets/img/creditCard/Aura Edge_card-image_396x257px.png') }}"
                                                    style="width: 12rem; height:9rem;" alt="">
                                                <br><br>
                                                <div class="card-title"> <b>Aura Edge Credit card</b> </div>
                                            </div>
                                            <ul style="text-align:initial;">
                                                <li> * Earn 4 Reward Points For Every Rs.150 Spent &#160;&#160;
                                                    Online(Up To
                                                    Maximum Of
                                                    5000 Reward &#160;&#160;&#160;Points Per Statement Cycle)</li>
                                                <li> * Earn 2 Reward Points For Every Rs.150 Spent.</li>
                                            </ul>
                                            <div class="text-center">
                                                <a href="{{ route('creditCard.auraEdge') }}"
                                                    class="btn btn-primary">
                                                    Proceed
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="col-sm-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <img src="{{ asset('assets/img/creditCard/au-altura-plus-credit-card.png') }}"
                                                    style="width: 12rem; height:9rem;" alt="">
                                                <br><br>
                                                <div class="card-title"> <b>Altura Plus Credit card</b> </div>
                                            </div>
                                            <ul style="text-align:initial;">
                                                <li> * Earn 4 Reward Points For Every Rs.150 Spent &#160;&#160;
                                                    Online(Up To
                                                    Maximum Of
                                                    5000 Reward &#160;&#160;&#160;Points Per Statement Cycle)</li>
                                                <li> * Earn 2 Reward Points For Every Rs.150 Spent.</li>
                                            </ul>
                                            <div class="text-center">
                                                <a href="{{ route('creditCard.alturaPlus') }}"
                                                    class="btn btn-primary">
                                                    Proceed
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="sl_1lac_to_1lac70k box">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <img src="{{ asset('assets/img/creditCard/Aura Edge_card-image_396x257px.png') }}"
                                                    style="width: 12rem; height:9rem;" alt="">
                                                <br><br>
                                                <div class="card-title"> <b>Aura Edge Credit card</b> </div>
                                            </div>
                                            <ul style="text-align:initial;">
                                                <li> * Earn 4 Reward Points For Every Rs.150 Spent &#160;&#160;
                                                    Online(Up To
                                                    Maximum Of
                                                    5000 Reward &#160;&#160;&#160;Points Per Statement Cycle)</li>
                                                <li> * Earn 2 Reward Points For Every Rs.150 Spent.</li>
                                            </ul>
                                            <div class="text-center">
                                                <a href="{{ route('creditCard.auraEdge') }}"
                                                    class="btn btn-primary">
                                                    Proceed
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="col-sm-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <img src="{{ asset('assets/img/creditCard/au-altura-plus-credit-card.png') }}"
                                                    style="width: 12rem; height:9rem;" alt="">
                                                <br><br>
                                                <div class="card-title"> <b>Altula Plus Credit card</b> </div>
                                            </div>
                                            <ul style="text-align:initial;">
                                                <li> * Earn 4 Reward Points For Every Rs.150 Spent &#160;&#160;
                                                    Online(Up To
                                                    Maximum Of
                                                    5000 Reward &#160;&#160;&#160;Points Per Statement Cycle)</li>
                                                <li> * Earn 2 Reward Points For Every Rs.150 Spent.</li>
                                            </ul>
                                            <div class="text-center">
                                                <a href="{{ route('creditCard.alturaPlus') }}"
                                                    class="btn btn-primary">
                                                    Proceed
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="col-sm-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <img src="{{ asset('assets/img/creditCard/Diners-Black.png') }}"
                                                    style="width: 12rem; height:9rem;" alt="">
                                                <br><br>
                                                <div class="card-title"> <b>Diners Black Credit card</b> </div>
                                            </div>
                                            <ul style="text-align:initial;">
                                                <li> * Earn 4 Reward Points For Every Rs.150 Spent &#160;&#160;
                                                    Online(Up To
                                                    Maximum Of
                                                    5000 Reward &#160;&#160;&#160;Points Per Statement Cycle)</li>
                                                <li> * Earn 2 Reward Points For Every Rs.150 Spent.</li>
                                            </ul>
                                            <div class="text-center">
                                                <a href="{{ route('creditCard.dinersBlack') }}"
                                                    class="btn btn-primary">
                                                    Proceed
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="sl_1lac70k_to_2lac70k box">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <img src="{{ asset('assets/img/creditCard/Aura Edge_card-image_396x257px.png') }}"
                                                    style="width: 12rem; height:9rem;" alt="">
                                                <br><br>
                                                <div class="card-title"> <b>Aura Edge Credit card</b> </div>
                                            </div>
                                            <ul style="text-align:initial;">
                                                <li> * Earn 4 Reward Points For Every Rs.150 Spent &#160;&#160;
                                                    Online(Up To
                                                    Maximum Of
                                                    5000 Reward &#160;&#160;&#160;Points Per Statement Cycle)</li>
                                                <li> * Earn 2 Reward Points For Every Rs.150 Spent.</li>
                                            </ul>
                                            <div class="text-center">
                                                <a href="{{ route('creditCard.auraEdge') }}"
                                                    class="btn btn-primary">
                                                    Proceed
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="col-sm-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <img src="{{ asset('assets/img/creditCard/infinia.webp') }}"
                                                    style="width: 12rem; height:9rem;" alt="">
                                                <br><br>
                                                <div class="card-title"> <b>Infinia Credit card</b> </div>
                                            </div>
                                            <ul style="text-align:initial;">
                                                <li>*Metallic Card</li>
                                                <li> *Unlimited airport lounge access across the globe for Primary and
                                                    Add-on member.
                                                </li>
                                                <li> *5 Reward Points for every ₹ 150 spent.</li>
                                            </ul>
                                            <div class="text-center">
                                                <a href="{{ route('creditCard.infinia') }}" class="btn btn-primary">
                                                    Proceed
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="col-sm-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <img src="{{ asset('assets/img/creditCard/Au-bank-credit-Card-Zenith.jpg') }}"
                                                    style="width: 12rem; height:9rem;" alt="">
                                                <br><br>
                                                <div class="card-title"> <b>Zenith Credit card</b> </div>
                                            </div>
                                            <ul style="text-align:initial;">
                                                <li>
                                                    * 20 Reward Points per Rs.100 retail spends done on Dining at
                                                    standalone
                                                    restaurants.
                                                </li>
                                                <li>
                                                    * 5 Reward Points per Rs.100 retail spends done across all other
                                                    merchant
                                                    categories.
                                                </li>
                                            </ul>
                                            <div class="text-center">
                                                <a href="{{ route('creditCard.zenith') }}" class="btn btn-primary">
                                                    Proceed
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                {{-- <div class="">
            <div class="">
    
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">Next</button>
                </div>
            </div>
        </div>
        </div> --}}
            </form>
        </div>

    </div>
</div>
</div>
@include('include.footer')
