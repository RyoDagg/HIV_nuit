<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>4Elements - Quiz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/fv.png" type="image/x-icon">
    <link rel="icon" href="img/fv.png" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/flaticon-3.css">
    <link rel="stylesheet" href="css/fontawesome-all.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/side-demo.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="icon" type="image/x-icon" href="greenlogo.png">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>

    <!-- Start of breadcurmb section
        ============================================= -->
        <style>
    @import url('https://fonts.googleapis.com/css?family=Raleway:400,500,700,800');

    .body {
        margin: 0;
        padding: 0;
        height: 100%;
        color: #14152C;
        font-family: 'Raleway', sans-serif;
        background-color: #f7f8fc;
        box-sizing: border-box
    }


    .bottom {
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        background-color: #fff;
        padding: 15px 10px;
        box-shadow: 0px -2px 12px rgba(0, 0, 0, 0.1);
    }

    .bottom__container {
        max-width: 1200px;
        margin: auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .progress {
        width: 40%;
        height: 10px;
        position: relative;
        border-radius: 5px;
        overflow: hidden;
        background-color: #ecedf5;
    }

    .progress__inner {
        position: absolute;
        top: 0;
        border-radius: 5px;
        height: 100%;
        left: 0;
        width: 0%;
        background-color: #5861af;
        transition: .4s width linear
    }

    .navigation__btn path {
        fill: #A7AACB
    }

    .navigation {
        display: flex;
        align-items: center;
    }

    .navigation__btn {
        display: flex;
        align-items: center;
        width: 44px;
        border: 1px solid #A7AACB;
        justify-content: center;
        height: 44px;
    }

    .navigation__btn--left {
        border-top-left-radius: 6px;
        border-bottom-left-radius: 6px
    }

    .navigation__btn--right {
        border-top-right-radius: 6px;
        border-bottom-right-radius: 6px
    }

    .quiz__question {
        font-weight: 900;
        letter-spacing: 1px;
        margin-top: 0;
        font-size: 34px;
        margin-bottom: 50px;
    }

    .containerDegla {
        display: flex;
        height: calc(100% - 74px);
        width: 100%;
        align-items: center;
        justify-content: center;
        padding: 15px 10px;
        margin-bottom: 50px;
    }

    .answer:first-of-type {
        margin-right: 15px;
    }

    .answer__input {
        appearance: none;
        -moz-appearance: none;
        -webkit-appearance: none;
        width: 1px;
        height: 1px;
        position: absolute;
        outline: none !important;
    }

    .answer__label {
        border: 1px solid #A7AACB;
        display: inline-block;
        border-radius: 6px;
        padding: 0px 15px;
        padding-left: 55px;
        padding-right: 55px;
        line-height: 56px;
        font-size: 15px;
        color: #A7AACB;
        text-align: left;
        font-weight: 600;
    }

    .answer {
        display: inline-block;
        margin-right: 10px;
    }



    .quiz__step {
        text-align: center;
    }

    .answer__input:checked+.answer__label {
        border-color: #5861af;
        color: #14152C;
        box-shadow: 0px 0px 1px 4px rgba(88, 97, 175, 0.2)
    }

    .answer__input:checked+.answer__label .answer__tick {
        opacity: 1;
        visibility: visible;
    }

    .answer__char {
        line-height: 24px;
        display: inline-block;
        width: 26px;
        text-align: center;
        font-size: 13px;
        border-radius: 4px;
        color: #c8cae0;
        border: 1px solid #c8cae0;
        font-weight: 600;
        vertical-align: middle;
        margin-right: 15px;
    }

    .answer__tick {
        display: inline-block;
        vertical-align: middle;
        background-color: #5861af;
        margin-left: 20px;
        line-height: 14px;
        border-radius: 50%;
        padding: 4px;
        opacity: 0;
        visible: hidden;
    }

    .answer__tick path {
        fill: #fff
    }

    .quiz__inner {
        max-width: 800px;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .quiz__step:not(.quiz__step--current) {
        visibility: hidden;
        opacity: 0;
        display: none;
    }

    .question__emoji {
        font-size: 45px;
        margin-bottom: 15px;
        display: inline-block;
        margin-right: 15px;
    }

    .navigation__btn--disabled {
        opacity: 0.4;
    }

    .pichpich__container {
        margin-top: 25px;
    }

    .pichpich {
        background-color: #5861af;
        line-height: 50px;
        display: inline-block;
        border-radius: 25px;
        padding: 0 15px;
        font-size: 13px;
        text-decoration: none;
        color: #fff;
        letter-spacing: 1px;
        box-shadow: 0px 6px 11px rgba(88, 97, 175, 0.6);
        min-width: 130px;
        font-weight: 700;
        text-transform: uppercase;
    }

    .thanks__tick {
        line-height: 50px;
        width: 50px;
        font-size: 25px;
        color: #fff;
        background-color: #5861af;
        border-radius: 50%;
        display: inline-block;
        text-align: center;
    }

    .thanks__title {
        font-weight: 900;
        letter-spacing: 1px;
        margin-top: 15px;
        text-align: center;
        font-size: 40px;
    }

    .thanks {
        text-align: center;
    }
</style>
</head>

<body class="saas-classic">
    <!-- preloader - start -->
    <div id="preloader" class="saas-classic-preloader"></div>
    <div class="up">
        <a href="#" id="scrollup" class="saas-classic-scrollup text-center"><i class="fas fa-angle-up"></i></a>
    </div>

    <!-- Start of header section
        ============================================= -->
    <header id="header_main" class="saas_two_main_header">
        <div class="container">
            <div class="s_main_menu">
                <div class="row">
                    <div class="col-md-2">
                        <div class="brand_logo">
                            <a href="!#"><img src="ktiba.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="main_menu_list clearfix float-right">

                            <div class="saas_sign_up_btn text-center">
                                <a href="#!"> Home </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //desktop menu -->

        </div>
    </header>
    <!-- End of header section
        ============================================= -->


    <section id="saasio-breadcurmb" class="saasio-breadcurmb-section" style="background: rgb(79,163,163);
        background: radial-gradient(circle, rgba(79,163,163,1) 0%, rgba(164,220,215,1) 35%, rgba(204,242,215,1) 100%);">
        <div class="container">
            <div class="breadcurmb-title text-center">
                <h2>Quiz</h2>
            </div>
            <div class="breadcurmb-item-list text-center ul-li">
                <ul class="saasio-page-breadcurmb">
                    <li><a href="{{route('welcome')}}">Home</a></li>
                    <li><a href="#">Quiz</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End of breadcurmb section
        ============================================= -->

    <!-- Start of quizz page section
        ============================================= -->
    <section id="saas_two_service" class="saas_two_service_section">
        <div class="container">
            <div class="saas_two_section_title saas2-headline text-wcenter">
               <center> <span class="title_tag" >Four Elements Quiz</span></center>
            </div>


            <div class="LuciferWasHere" style="margin-top: 50px;">





                <div class="containerDegla">

                    <form class="quiz" action="{{ route('answer.store') }}" method="post">
                        {{csrf_field()}}
                        <div class="quiz__inner">
                            <?php
                            $i = 0;
                            ?>
                            <input type="hidden" name="uid" value="{{$user}}" />
                            {{--<input name="favorableAnswer" value="{{$question->favorableAnswer}}" type="hidden" />
                            <input name="secondPossibility" value="{{$question->secondPossibility}}" type="hidden" />--}}

                            @foreach ($question as $question)

                            <?php
                            $i++;
                            ?>
                            <div data-question="{{$i}}" class="quiz__step--{{$i}} {{$i == 1 ? 'quiz__step--current': ''}} quiz__step">
                                <input name="favorableAnswer[]" value="{{$question->favorableAnswer}}" type="hidden" />
                                <input name="secondPossibility[]" value="{{$question->secondPossibility}}" type="hidden" />
                                <input name="qtype[]" value="{{$question->type}}" type="hidden" />
                                <div class="question__emoji">{{ $question->Emoji }} </div>
                                <h1 class="quiz__question">{{ $question->question }}</h1>
                                <div class="answer">
                                    <input data-char="65" class="answer__input" type="radio" id="question{{$i}}_first" name="{{$question->id}}" value="{{ $question->firstPossibility }}">
                                    <label class="answer__label" for="question{{$i}}_first">{{ $question->firstPossibility }}</label>
                                </div>
                                <div class="answer">
                                    <input data-char="66" class="answer__input" type="radio" id="question{{$i}}_second" name="{{$question->id}}" value="{{ $question->secondPossibility }}">
                                    <label class="answer__label" for="question{{$i}}_second">{{ $question->secondPossibility }}</label>
                                </div>
                                <div class="answer">
                                    <input data-char="66" class="answer__input" type="radio" id="question{{$i}}_third" name="{{$question->id}}" value="{{ $question->thirdPossibility }}">
                                    <label class="answer__label" for="question{{$i}}_third">{{ $question->thirdPossibility }}</label>
                                </div>
                            </div>

                            @endforeach

                            <div data-question="{{$i+1}}" class="quiz__step--{{$i+1}} quiz__step quiz__summary">

                                <h1 class="quiz__question">Summary</h1>
                                <div id="summary"></div>
                                <div class="submit__container">
                                    <input type="submit" value="Submit" class="pichpich" />

                                </div>
                            </div>
                    </form>
                </div>

                <footer class="bottom" >
                    <section class="bottom__container">
                        <div class="progress">
                            <div class="progress__inner"></div>
                        </div>
                        <div class="navigation">
                            <div class="navigation__btn navigation__btn--left"><svg width="20" height="20" viewBox="0 0 24 24">
                                    <path d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z"></path>
                                </svg></div>
                            <div class="navigation__btn navigation__btn--right"><svg width="20" height="20" viewBox="0 0 24 24">
                                    <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                                </svg></div>
                        </div>
                    </section>
                </footer>



            </div>







        </div>
    </section>
    <!-- End of quizz section
        ============================================= -->


    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/tilt.jquery.min.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/parallax-scroll.js"></script>
    <script src="js/jquery.paroller.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/side-demo.js"></script>
    <script src="js/script.js"></script>
</body>
<script>
    const numberSteps = $('.quiz__step').length - 1;
    let disableButtons = false;
    const tick = '<div class="answer__tick"><svg width="14" height="14" viewBox="0 0 24 24"><path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"></path></svg></div>';
    let thanks = '<div class="thanks"><div class="thanks__tick">✔ </div><h1 class="thanks__title">Thank you!</h1></div>';

    $('.answer__input').on('change', function(e) {

        if ($(this).next().children('.answer__tick').length > 0) {
            return false
        }
        $(this).next().append(tick)
    });


    $('.navigation__btn--right').click(function(e) {
        let currentIndex = Number($('.quiz__step--current').attr('data-question'));
        if ($('.quiz__step--current input:checked').length == 0) {
            //console.log('input empty');
            return false;
        }
        //console.log({'currentIndex': currentIndex, 'numberSteps': numberSteps-1})
        if (currentIndex == numberSteps + 1 || disableButtons == true) {
            //console.log('last')
            return false;
        }
        if (currentIndex + 1 == numberSteps + 1) {
            $(this).addClass('navigation__btn--disabled');
        }
        if (currentIndex == numberSteps) {
            $('.summary__item').remove();
            $('.quiz__step:not(.quiz__summary)').each(function(index, item) {
                console.log(item)
                let icon = $(item).children('.question__emoji').text()
                let answer = $(item).children('.answer').find('input:checked').val();
                let node = '<div class="summary__item"><div class="question__emoji">' + icon + '</div>' + answer + '</div>'
                $('#summary').append(node)
            })
        }
        const percentage = (currentIndex * 100) / numberSteps;
        $('.progress__inner').width(percentage + '%');
        console.log('input ok')
        $('.quiz__step--current').hide('300');
        $('.quiz__step--current').removeClass('quiz__step--current');
        $('.quiz__step--' + (currentIndex + 1)).show('300').addClass('quiz__step--current');
        currentIndex = Number($('.quiz__step--current').attr('data-question'));
        if (currentIndex > 1) {
            $('.navigation__btn--left').removeClass('navigation__btn--disabled');
        }
    });
    /*
    function keypressEvent(e){
        let key = e.which || e.keyCode;

      if(key==65 || key==66){
        $('.quiz__step--current input[data-char="'+key+'"]').prop('checked', true).change();
        console.log($('.quiz__step--current input[data-char="'+key+'"]'))
       // $('.quiz__step--current input[data-char="'+key+'"] + .answer__label').change();
      }
    }
    */



    $('.navigation__btn--left').click(function(e) {
        let currentIndex = Number($('.quiz__step--current').attr('data-question'));

        console.log({
            'currentIndex': currentIndex,
            'numberSteps': numberSteps - 1
        })
        if (currentIndex == 1 || disableButtons == true) {
            console.log('first')
            $(this).addClass('navigation__btn--disabled');
            return false;
        }


        $('.navigation__btn--right').removeClass('navigation__btn--disabled')

        console.log('input ok')
        $('.quiz__step--current').hide('300');
        $('.quiz__step--current').removeClass('quiz__step--current');
        $('.quiz__step--' + (currentIndex - 1)).show('300').addClass('quiz__step--current');
        currentIndex = Number($('.quiz__step--current').attr('data-question'));
        if (currentIndex == 1) {
            $(this).addClass('navigation__btn--disabled');
        }
        const percentage = ((currentIndex - 1) * 100) / numberSteps + 1;
        $('.progress__inner').width(percentage + '%');
        $('.quiz__step--current').keyup(keypressEvent);
    });
    $('.submit').click(function(e) {
        e.preventDefault();
        $('.quiz').remove();
        $(thanks).appendTo('.containerDegla');
        disableButtons = true;
        $('.navigation__btn').addClass('navigation__btn--disabled')
    })
</script>
</html>