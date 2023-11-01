<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Семейный портал</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="styles/styles.css" rel="stylesheet">


  <!-- Add the slick-theme.css if you want default styling -->
  <link rel="stylesheet" type="text/css" href="slick-1.8.0/slick/slick.css" />
  <!-- Add the slick-theme.css if you want default styling -->
  <link rel="stylesheet" type="text/css" href="slick-1.8.0/slick/slick-theme.css" />

  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/modal_window.js"></script>



</head>

<body class="svm-main-content" id="main">



  <!--Модальное окно-->
  <div id="myModal" class="modal">
    <div class="modal-content" id="modal_send">
      <span class="close-modal" style="font-size: 40px; color: #B5AC3A;">&times;</span>
      <form class="modalform" id="modalform" action="" method="POST">

        Имя:<br>

        <input type="text" name="name" class="mb-2 modal-input" required maxlength="15"><br>

        Телефон:<br>

        <!-- <div id="message">wdfawd</div> -->


        <input type="text" name="number" class="mb-2 phone-mask modal-input " required maxlength="11"><br>

        <script>
          $(document).ready(function() {
            $(".phone-mask").mask("+7 (999) 999 99-99");
          });
        </script>



        Сообщение:<br>

        <textarea id="volume_msg" name="msg" required maxlength="200"></textarea><br>

        <div class="counter_block">
          <p id="counter">0</p>
          <p id="total">/200</p>
        </div>



        <div class="submit-btn-block" id="submit_btn">
          <input type="submit" value="Отправить">
        </div>


      </form>


      <!-- картинка успешой отправки -->
      <div id="checkmarkAnim-block" style="display:none; justify-content:center; align-content:center; width:auto; height:auto; margin-top: 20px;">
        <img src="src/success_.gif" id="checkmarkAnim">
        <div style="display:flex; align-items:center;">
          <p style="margin:0px !important; font-size:16px;">Заявка отправлена, ожидайте</p>
        </div>
      </div>


    </div>



  </div>
  <!--Модальное окно-->






  <header class="container-fluid navbar-Text">

    <div class="row mt-3 nav-div-svm">

      <div class="col-lg-5 col-md-4 col-3">

        <div class="row mt-4 mb-4 d-flex justify-content-center ico-header-svm btns-header-svm">

          <div class="col-lg-2 col-md-1 ico-header-svm-d d-flex justify-content-center">
            <a><img src="src/vk_icon.svg" height="40px" width="40px" class="ico-push-anim"></a>
          </div>
          <div class="col-lg-2 col-md-1 ico-header-svm-d d-flex justify-content-center">
            <a><img src="src/tvit_icon.svg" height="40px" width="40px" class="ico-push-anim"></a>
          </div>
          <div class="col-lg-2 col-md-1 ico-header-svm-d d-flex justify-content-center">
            <a><img src="src/facebook_icon.svg" height="40px" width="40px" class="ico-push-anim"></a>
          </div>
          <div class="col-lg-2 col-md-1 ico-header-svm-d d-flex justify-content-center">
            <a><img src="src/insta_icon.svg" height="40px" width="40px" class="ico-push-anim"></a>
          </div>
          <div class="col-lg-2 col-md-1 d-flex justify-content-center">
            <a><img src="src/ok_icon.svg" height="40px" width="40px" class="ico-push-anim"></a>
          </div>

        </div>


        <!--боковое меню для планшетов-->
        <div id="mySidenav" class="sidenav">

          <div class="container p-0">

            <div class="row">

              <div class="col mt-4">


                <div class="ico-sidebar-block d-flex justify-content-center">
                  <div class="ico-header-svm-d-sidebar d-flex justify-content-center">
                    <a class="ico-header-svm-d-sidebar-a"><img src="src/vk_icon.svg" height="40px" width="40px" class="ico-push-anim"></a>
                  </div>
                  <div class="ico-header-svm-d-sidebar d-flex justify-content-center">
                    <a class="ico-header-svm-d-sidebar-a"><img src="src/tvit_icon.svg" height="40px" width="40px" class="ico-push-anim"></a>
                  </div>
                  <div class="ico-header-svm-d-sidebar d-flex justify-content-center">
                    <a class="ico-header-svm-d-sidebar-a"><img src="src/facebook_icon.svg" height="40px" width="40px" class="ico-push-anim"></a>
                  </div>
                  <div class="ico-header-svm-d-sidebar d-flex justify-content-center">
                    <a class="ico-header-svm-d-sidebar-a"><img src="src/insta_icon.svg" height="40px" width="40px" class="ico-push-anim"></a>
                  </div>
                  <div class="ico-header-svm-d-sidebar d-flex justify-content-center">
                    <a class="ico-header-svm-d-sidebar-a"><img src="src/ok_icon.svg" height="40px" width="40px" class="ico-push-anim"></a>
                  </div>
                </div>

                <div class="d7">
                  <form>
                    <input type="text" placeholder="Поиск по сайту...">
                    <span><img src="src/search-sidebar.svg"></span>
                  </form>
                </div>

                <div class="sidebar-links-block">
                  <a href="#">Главная</a>
                  <a href="#">О портале</a>
                  <a href="#">Всё для семьи</a>
                  <a href="#">События</a>
                  <a href="#">Вопросы</a>
                  <a href="#">Контакты</a>
                </div>

                <div class="row mt-4 mb-4 block-btn-svm-sidebar">
                  <div class="d-flex justify-content-center">
                    <a type="button" class="btn btn-text-color btn-animation btn-svm-sidebar" id="openModalButton-1">Написать нам</a>
                  </div>
                </div>

              </div>


            </div>
          </div>

        </div>
        <!--боковое меню для планшетов-->


        <!--боковое меню для телефонов-->

        <div id="mySidenav-tel" class="sidenav-svm">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav1()"><img src="src/close-menu.svg"></a>

          <div class="sidenav-svm-block">

            <div class="sidenav-svm-ico-block d-flex justify-content-center">

              <div class="d-flex justify-content-center">
                <a><img src="src/vk_icon.svg" height="40px" width="40px" class="ico-push-anim"></a>
              </div>
              <div class="ico-header-svm-d-sidebar d-flex justify-content-center">
                <a><img src="src/tvit_icon.svg" height="40px" width="40px" class="ico-push-anim sidenav-svm-ico"></a>
              </div>
              <div class="ico-header-svm-d-sidebar d-flex justify-content-center">
                <a><img src="src/facebook_icon.svg" height="40px" width="40px" class="ico-push-anim sidenav-svm-ico"></a>
              </div>
              <div class="ico-header-svm-d-sidebar d-flex justify-content-center">
                <a><img src="src/insta_icon.svg" height="40px" width="40px" class="ico-push-anim sidenav-svm-ico"></a>
              </div>
              <div class="ico-header-svm-d-sidebar d-flex justify-content-center">
                <a><img src="src/ok_icon.svg" height="40px" width="40px" class="ico-push-anim sidenav-svm-ico"></a>
              </div>

            </div>

            <div class="d7">
              <form>
                <input type="text" placeholder="Поиск по сайту...">
                <span><img src="src/search-sidebar.svg"></span>
              </form>
            </div>

            <div class="sidenav-svm-text">
              <a href="#">Главная</a>
              <a href="#">О портале</a>
              <a href="#">Всё для семьи</a>
              <a href="#">События</a>
              <a href="#">Вопросы</a>
              <a href="#">Контакты</a>
            </div>

            <div class="d-flex justify-content-center">
              <a type="button" class="btn btn-text-color btn-animation btn-svm-sidebar-2" id="openModalButton-1">Написать нам</a>
            </div>

          </div>
        </div>

        <!--боковое меню для телефонов-->

        <div class="row navbar-left nav-svm-left d-flex justify-content-center">

          <div class="d-flex justify-content-center navbar-left-w">

            <div class="col d-flex justify-content-center menu-header-svm-l">
              <span id="menuToggle"><img src="src/vaadin_menu.svg" style="width: 100%;"></span>
            </div>

            <div class="col d-flex justify-content-center menu-header-svm-l-2">
              <span onclick="openNav1()"><img src="src/vaadin_menu.svg" style="width: 100%;"></span>
            </div>

            <div class="col d-flex justify-content-center ref-header-svm-h">
              <a>
                <p class="m-0 nav-text-anim">О портале</p>
              </a>
            </div>

            <div class="col d-flex justify-content-center ref-header-svm-h">
              <a>
                <p class="m-0 nav-text-anim">Всё для семьи</p>
              </a>
            </div>

            <div class="col d-flex justify-content-center ref-header-svm-h">
              <a>
                <p class="m-0 nav-text-anim">События</p>
              </a>
            </div>
          </div>

        </div>



      </div>


      <div class="col-lg-2 col-md-4 col-6 d-flex justify-content-center div-logo">
        <img src="src/logo.svg" height="auto">
      </div>


      <div class="col-lg-5 col-md-4 col-3">

        <div class="row mt-4 mb-4 div-btn-svm">
          <div class="d-flex justify-content-center">
            <a type="button" class="btn btn-text-color btn-animation btn-svm" id="openModalButton">Написать нам</a>
          </div>
        </div>

        <div class="row navbar-right nav-svm-right">


          <div class="d-flex justify-content-center navbar-right-w">

            <div class="col d-flex justify-content-center ref-header-svm-h">
              <a>
                <p class="m-0 nav-text-anim">Вопросы</p>
              </a>
            </div>
            <div class="col d-flex justify-content-center ref-header-svm-h">
              <a>
                <p class="m-0 nav-text-anim">Контакты</p>
              </a>
            </div>
            <div class="col d-flex justify-content-center ico-push-anim search-header-svm-r">
              <a><img src="src/search_icon.svg" style="width: 100%;"></a>

            </div>

          </div>

        </div>
      </div>

  </header>

  <main>



    <section>
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="width: 100%;">

        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="src/баннер_1.png" class="d-block w-100 banner-img" height="auto">
            <div class="banner-text-1">
              <p class="banner-text-1-p1">Вся информация по<br> развитию и поддержке<br> семьи в одном месте.</p>
              <p class="banner-text-1-p2">при поддержке правительства Амурской области</p>
            </div>

          </div>
          <div class="carousel-item">
            <img src="src/баннер_2.png" class="d-block w-100 banner-img">
            <div class="banner-text-1">
              <p class="banner-text-2-p1">С наступающим <br> 2020 !</p>
              <p class="banner-text-2-p2">Здоровья и любви Вам в новом году!</p>
            </div>


          </div>
          <div class="carousel-item">
            <img src="src/баннер_3.png" class="d-block w-100 banner-img">
            <div class="banner-text-1">
              <p class="banner-text-3-p1">Многодетные семьи получат<br> помощь на рождение детей</p>
              <p class="banner-text-3-p2">Уже со следующего месяца многодетные семьи будут<br> получать увеличенные пособия на детей. На заседании ...</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>

    <section class="pt-1 pb-1 mt-4 mb-4">
      <div class="container-fluid d-flex justify-content-center">
        <div class="row row-svm-w d-flex justify-content-center">
          <div class="col-lg-4 col-md-3 col-sm-12 d-flex justify-content-center desc-svm">

            <div class="about-block">
              <img src="src/about-img57.png" class="about-img">
              <p class="about-text-header-el1">57</p>
              <p class="about-text-main-el1">семьям, обратившимся <br>к нам, мы помогли</p>
            </div>


          </div>
          <div class="col-lg-4 col-md-3 col-sm-12 d-flex justify-content-center desc-svm desc-svm-ml">

            <div class="about-block">
              <img src="src/about-img57.png" class="about-img">
              <p class="about-text-header-el2">24/7</p>
              <p class="about-text-main-el2">мы принимаем обращения ежедневно</p>
            </div>

          </div>
          <div class="col-lg-4 col-md-3 col-sm-12 d-flex justify-content-center desc-svm desc-svm-ml">

            <div class="about-block">
              <img src="src/about-img57.png" class="about-img">
              <p class="about-text-header-el3">100</p>
              <p class="about-text-main-el3">квалифицированных сотрудников</p>
            </div>

          </div>
        </div>
      </div>
    </section>




    <!--Блок с новостями-->
    <section class="d-flex justify-content-center bg-svm svm-section p-5">

      <div class="container div-block-blog-svm-shadow">

        <div class="div-block-blog">

          <div class="slider">

            <div class="div-block-blog-header">

              <div class="div-block-blog-header-el1">
                <p style="color: #003249;font-family: Roboto;font-size: 24px;font-style: normal;font-weight: 700;line-height: 140%; /* 33.6px */; margin: 0;" class="blog-header-font-p">
                  Всё для семьи</p>
              </div>



              <div class="d-flex justify-content-right div-block-blog-header-el2">

                <div class="svm-header-tabs svm-header-tabs-h svm-tabs">
                  <a>
                    <p class="svm-text-tabs">Все</p>
                  </a>
                </div>

                <div class="svm-header-tabs svm-header-tabs-h svm-tabs">
                  <a>
                    <p class="svm-text-tabs">Важное</p>
                  </a>
                </div>

                <div class="svm-header-tabs svm-header-tabs-h svm-tabs">
                  <a>
                    <p class="svm-text-tabs">Новости</p>
                  </a>
                </div>

                <div class="svm-header-tabs svm-header-tabs-h svm-tabs">
                  <a>
                    <p class="svm-text-tabs">Полезное</p>
                  </a>
                </div>

                <div class="svm-header-tabs">

                  <div>
                    <!-- <button class="slider-button sl-btn-l prev">&lt;</button> -->
                    <a class="accordion-l-btn prev"><img src="src/left-sl-blue.svg" id="img-btn-prev"></a>
                  </div>

                  <div>
                    <!--<button class="slider-button sl-btn-r next">&gt;</button>-->
                    <a class="accordion-l-btn next"><img src="src/right-sl-blue.svg" id="img-btn-next"></a>
                  </div>

                </div>

              </div>

              <div>

              </div>



            </div>


            <div class="svm-dropdown-block">

              <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  Всё
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item">Всё</a></li>
                  <li><a class="dropdown-item">Новости</a></li>
                  <li><a class="dropdown-item">Полезное</a></li>
                  <li><a class="dropdown-item">Важное</a></li>
                </ul>

              </div>

            </div>

            <div class="card-block-svm row">

              <div>
                <div class="card-slide div-block-blog-main-card p-0">
                  <img src="src/blog_img1.png" class="blog-card-img">

                  <div class="card-header" style="background-color: #5E727C;">
                    <div>
                      <p class="svm-font-size-card-header">Семейные ценности и меры поддержки семьи</p>
                    </div>
                  </div>

                  <div class="card-main">
                    <div class="card-main-p">
                      <p>Постоянный количественный рост определил дальнейшее развитие!</p>
                    </div>
                  </div>


                  <div class="card-footer">

                    <div class="card-footer-el1">
                      <p class="card-footer-el1-p">23.12.2019</p>
                    </div>

                    <div class="card-footer-el2">
                      <div>
                        <a><img src="src/vk-14x14.svg"></a>
                      </div>
                      <div class="card-footer-el2-ico">
                        <a><img src="src/twit-14x14.svg"></a>
                      </div>
                      <div class="card-footer-el2-ico">
                        <a><img src="src/facebook-14x14.svg"></a>
                      </div>
                      <div class="card-footer-el2-ico">
                        <a><img src="src/inst-14x14.svg"></a>
                      </div>
                      <div class="card-footer-el2-ico">
                        <a><img src="src/ok-14x14.svg"></a>
                      </div>
                    </div>

                  </div>

                </div>
              </div>


              <div>
                <div class="card-slide div-block-blog-main-card p-0 div-block-card-m">
                  <img src="src/blog_img2.png" class="blog-card-img">

                  <div class="card-header" style="background-color: #ED564A;">
                    <div>
                      <p class="svm-font-size-card-header">Защита прав и законных интересов детей</p>
                    </div>
                  </div>

                  <div class="card-main">
                    <div class="card-main-p">
                      <p>Чистый разум не скован границами</p>
                    </div>
                  </div>

                  <div class="card-footer">

                    <div class="card-footer-el1">
                      <p class="card-footer-el1-p">23.12.2019</p>
                    </div>

                    <div class="card-footer-el2">
                      <div>
                        <a><img src="src/vk-14x14.svg"></a>
                      </div>
                      <div class="card-footer-el2-ico">
                        <a><img src="src/twit-14x14.svg"></a>
                      </div>
                      <div class="card-footer-el2-ico">
                        <a><img src="src/facebook-14x14.svg"></a>
                      </div>
                      <div class="card-footer-el2-ico">
                        <a><img src="src/inst-14x14.svg"></a>
                      </div>
                      <div class="card-footer-el2-ico">
                        <a><img src="src/ok-14x14.svg"></a>
                      </div>
                    </div>

                  </div>
                </div>

              </div>


              <div>
                <div class="card-slide div-block-blog-main-card p-0">
                  <img src="src/blog_img3.png" class="blog-card-img">

                  <div class="card-header" style="background-color: #B5AC3A;">
                    <div>
                      <p class="svm-font-size-card-header">Семья и здоровье</p>
                    </div>
                  </div>

                  <div class="card-main">
                    <div class="card-main-p">
                      <p>Экономическая повестка сегодняшнего дня станет частью наших традиций</p>
                    </div>
                  </div>

                  <div class="card-footer">

                    <div class="card-footer-el1">
                      <p class="card-footer-el1-p">23.12.2019</p>
                    </div>

                    <div class="card-footer-el2">
                      <div>
                        <a><img src="src/vk-14x14.svg"></a>
                      </div>
                      <div class="card-footer-el2-ico">
                        <a><img src="src/twit-14x14.svg"></a>
                      </div>
                      <div class="card-footer-el2-ico">
                        <a><img src="src/facebook-14x14.svg"></a>
                      </div>
                      <div class="card-footer-el2-ico">
                        <a><img src="src/inst-14x14.svg"></a>
                      </div>
                      <div class="card-footer-el2-ico">
                        <a><img src="src/ok-14x14.svg"></a>
                      </div>
                    </div>

                  </div>
                </div>
              </div>



              <div>
                <div class="card-slide div-block-blog-main-card p-0 div-block-card-m">
                  <img src="src/blog_img4.png" class="blog-card-img">

                  <div class="card-header" style="background-color: #D68F32;">
                    <div>
                      <p class="svm-font-size-card-header">Семейный досуг и спорт</p>
                    </div>
                  </div>

                  <div class="card-main">
                    <div class="card-main-p">
                      <p>Инцидент не исчерпан: героям были возданы соответствующие почести!</p>
                    </div>
                  </div>

                  <div class="card-footer">

                    <div class="card-footer-el1">
                      <p class="card-footer-el1-p">23.12.2019</p>
                    </div>

                    <div class="card-footer-el2">
                      <div>
                        <a><img src="src/vk-14x14.svg"></a>
                      </div>
                      <div class="card-footer-el2-ico">
                        <a><img src="src/twit-14x14.svg"></a>
                      </div>
                      <div class="card-footer-el2-ico">
                        <a><img src="src/facebook-14x14.svg"></a>
                      </div>
                      <div class="card-footer-el2-ico">
                        <a><img src="src/inst-14x14.svg"></a>
                      </div>
                      <div class="card-footer-el2-ico">
                        <a><img src="src/ok-14x14.svg"></a>
                      </div>
                    </div>

                  </div>

                </div>
              </div>

              <div>
                <div class="card-slide div-block-blog-main-card p-0 div-block-card-m">
                  <img src="src/blog_img4.png" class="blog-card-img">

                  <div class="card-header" style="background-color: #D68F32;">
                    <div>
                      <p class="svm-font-size-card-header">Семейный досуг и спорт</p>
                    </div>
                  </div>

                  <div class="card-main">
                    <div class="card-main-p">
                      <p>Инцидент не исчерпан: героям были возданы соответствующие почести!</p>
                    </div>
                  </div>

                  <div class="card-footer">

                    <div class="card-footer-el1">
                      <p class="card-footer-el1-p">23.12.2019</p>
                    </div>

                    <div class="card-footer-el2">
                      <div>
                        <a><img src="src/vk-14x14.svg"></a>
                      </div>
                      <div class="card-footer-el2-ico">
                        <a><img src="src/twit-14x14.svg"></a>
                      </div>
                      <div class="card-footer-el2-ico">
                        <a><img src="src/facebook-14x14.svg"></a>
                      </div>
                      <div class="card-footer-el2-ico">
                        <a><img src="src/inst-14x14.svg"></a>
                      </div>
                      <div class="card-footer-el2-ico">
                        <a><img src="src/ok-14x14.svg"></a>
                      </div>
                    </div>

                  </div>

                </div>
              </div>

              <div>
                <div class="card-slide div-block-blog-main-card p-0 div-block-card-m">
                  <img src="src/blog_img4.png" class="blog-card-img">

                  <div class="card-header" style="background-color: #D68F32;">
                    <div>
                      <p class="svm-font-size-card-header">Семейный досуг и спорт</p>
                    </div>
                  </div>

                  <div class="card-main">
                    <div class="card-main-p">
                      <p>Инцидент не исчерпан: героям были возданы соответствующие почести!</p>
                    </div>
                  </div>

                  <div class="card-footer">

                    <div class="card-footer-el1">
                      <p class="card-footer-el1-p">23.12.2019</p>
                    </div>

                    <div class="card-footer-el2">
                      <div>
                        <a><img src="src/vk-14x14.svg"></a>
                      </div>
                      <div class="card-footer-el2-ico">
                        <a><img src="src/twit-14x14.svg"></a>
                      </div>
                      <div class="card-footer-el2-ico">
                        <a><img src="src/facebook-14x14.svg"></a>
                      </div>
                      <div class="card-footer-el2-ico">
                        <a><img src="src/inst-14x14.svg"></a>
                      </div>
                      <div class="card-footer-el2-ico">
                        <a><img src="src/ok-14x14.svg"></a>
                      </div>
                    </div>

                  </div>

                </div>
              </div>

              <div>
                <div class="card-slide div-block-blog-main-card p-0 div-block-card-m">
                  <img src="src/blog_img4.png" class="blog-card-img">

                  <div class="card-header" style="background-color: #D68F32;">
                    <div>
                      <p class="svm-font-size-card-header">Семейный досуг и спорт</p>
                    </div>
                  </div>

                  <div class="card-main">
                    <div class="card-main-p">
                      <p>Инцидент не исчерпан: героям были возданы соответствующие почести!</p>
                    </div>
                  </div>

                  <div class="card-footer">

                    <div class="card-footer-el1">
                      <p class="card-footer-el1-p">23.12.2019</p>
                    </div>

                    <div class="card-footer-el2">
                      <div>
                        <a><img src="src/vk-14x14.svg"></a>
                      </div>
                      <div class="card-footer-el2-ico">
                        <a><img src="src/twit-14x14.svg"></a>
                      </div>
                      <div class="card-footer-el2-ico">
                        <a><img src="src/facebook-14x14.svg"></a>
                      </div>
                      <div class="card-footer-el2-ico">
                        <a><img src="src/inst-14x14.svg"></a>
                      </div>
                      <div class="card-footer-el2-ico">
                        <a><img src="src/ok-14x14.svg"></a>
                      </div>
                    </div>

                  </div>

                </div>
              </div>

              <div>
                <div class="card-slide div-block-blog-main-card p-0 div-block-card-m">
                  <img src="src/blog_img4.png" class="blog-card-img">

                  <div class="card-header" style="background-color: #D68F32;">
                    <div>
                      <p class="svm-font-size-card-header">Семейный досуг и спорт</p>
                    </div>
                  </div>

                  <div class="card-main">
                    <div class="card-main-p">
                      <p>Инцидент не исчерпан: героям были возданы соответствующие почести!</p>
                    </div>
                  </div>

                  <div class="card-footer">

                    <div class="card-footer-el1">
                      <p class="card-footer-el1-p">23.12.2019</p>
                    </div>

                    <div class="card-footer-el2">
                      <div>
                        <a><img src="src/vk-14x14.svg"></a>
                      </div>
                      <div class="card-footer-el2-ico">
                        <a><img src="src/twit-14x14.svg"></a>
                      </div>
                      <div class="card-footer-el2-ico">
                        <a><img src="src/facebook-14x14.svg"></a>
                      </div>
                      <div class="card-footer-el2-ico">
                        <a><img src="src/inst-14x14.svg"></a>
                      </div>
                      <div class="card-footer-el2-ico">
                        <a><img src="src/ok-14x14.svg"></a>
                      </div>
                    </div>

                  </div>

                </div>
              </div>
            </div>
          </div>

          <div class="d-flex justify-content-center mt-3 btn-see-all">
            <a type="button" class="btn btn-text-color btn-animation btn-svm-3">Посмотреть все</a>
          </div>

        </div>
      </div>
    </section>

    <section class="p-5">

      <div class="container">

        <div class="svm-question-block-header">

          <div class="svm-question-block-header-el1">
            <p class="svm-question-block-header-text">Вопрос - ответ</p>
          </div>

          <div class="svm-question-block-header-el2">

            <div class="d-flex justify-content-center">

              <form class="form-search-h">
                <input type="text" name="q" placeholder="Введите сюда ключевое слово вашего вопроса" class="svm-question-block-header-el2-form">
              </form>


              <a><img src="src/search-ico-black.svg" class="ico-push-anim"></a>

            </div>

          </div>
        </div>


        <div class="container svm-question-block-main">

          <div class="row svm-question-block-main-els">

            <div class="col-lg-6 svm-question-block-main-el1">

              <div>
                <p class="svm-question-block-main-text">Часто задаваемые вопросы</p>
              </div>


              <div class="accordion" id="accordionExample">

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      <p class="svm-accordion-text">Являясь всего лишь частью общей картины, сторонники
                        тоталитаризма в науке формируют глобальную экономическую сеть и при этом - функционально разнесены на независимые элементы?
                      <p>
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p class="svm-accordion-text">Являясь всего лишь частью общей картины, сторонники
                        тоталитаризма в науке формируют глобальную экономическую сеть и при этом - функционально разнесены на независимые элементы?
                      <p>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      <p class="svm-accordion-text">Не следует, однако, забывать, что реализация намеченных плановых заданий требует анализа глубокомысленных рассуждений?
                      <p>
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p class="svm-accordion-text">Являясь всего лишь частью общей картины, сторонники
                        тоталитаризма в науке формируют глобальную экономическую сеть и при этом - функционально разнесены на независимые элементы?
                      <p>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      <p class="svm-accordion-text">Внезапно, предприниматели в сети интернет лишь добавляют фракционных разногласий и своевременно верифицированы?
                      <p>
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p class="svm-accordion-text">Являясь всего лишь частью общей картины, сторонники
                        тоталитаризма в науке формируют глобальную экономическую сеть и при этом - функционально разнесены на независимые элементы?
                      <p>
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      <p class="svm-accordion-text">С другой стороны, выбранный нами инновационный путь позволяет оценить значение приоритизации разума над эмоциями.
                        С другой стороны, дальнейшее развитие различных форм деятельности требует определения и уточнения прогресса профессионального сообщества?
                      <p>
                    </button>
                  </h2>
                  <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p class="svm-accordion-text">Являясь всего лишь частью общей картины, сторонники
                        тоталитаризма в науке формируют глобальную экономическую сеть и при этом - функционально разнесены на независимые элементы?
                      <p>
                    </div>
                  </div>
                </div>

              </div>

              <div class="d-flex svm-question-block-main-text-el2">

                <div>
                  <a>
                    <p>Смотреть все вопросы и ответы</p>
                  </a>
                </div>

                <div class="mx-1">
                  <img src="src/arrow-text-accordion.svg">
                </div>

              </div>


            </div>

            <div class="col-lg-6 col-sm-12 svm-question-block-main-el2">
              <img src="src/do-question.png">
            </div>

          </div>



        </div>

      </div>

    </section>


    <section class="d-flex justify-content-center bg-svm-2 svm-section p-5">

      <div class="container div-block-blog-svm-shadow">

        <div class="div-block-blog">

          <div class="slider">

            <div class="div-block-blog-header-2">

              <div class="div-block-blog-header-el1">
                <p style="color: #fff;font-family: Roboto;font-size: 24px;font-style: normal;font-weight: 700;line-height: 140%; /* 33.6px */; margin: 0;" class="blog-header-font-p">
                  События</p>
              </div>



              <div class="d-flex justify-content-right div-block-blog-header-el2">

                <div class="svm-header-tabs svm-header-tabs-h svm-tabs">
                  <a>
                    <p class="svm-text-tabs-2">Все</p>
                  </a>
                </div>

                <div class="svm-header-tabs svm-header-tabs-h svm-tabs">
                  <a>
                    <p class="svm-text-tabs-2">Важное</p>
                  </a>
                </div>

                <div class="svm-header-tabs svm-header-tabs-h svm-tabs">
                  <a>
                    <p class="svm-text-tabs-2">Новости</p>
                  </a>
                </div>

                <div class="svm-header-tabs svm-header-tabs-h svm-tabs">
                  <a>
                    <p class="svm-text-tabs-2">Полезное</p>
                  </a>
                </div>

                <div class="svm-header-tabs">

                  <div>
                    <!-- <button class="slider-button sl-btn-l prev">&lt;</button> -->
                    <a class="accordion-l-btn prev-2"><img src="src/left-sl-white.svg" id="img-btn-prev-2"></a>
                  </div>

                  <div>
                    <!--<button class="slider-button sl-btn-r next">&gt;</button>-->
                    <a class="accordion-l-btn next-2"><img src="src/right-sl-white.svg" id="img-btn-next-2"></a>
                  </div>

                </div>

              </div>

              <div>

              </div>



            </div>


            <div class="svm-dropdown-block">

              <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  Всё
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item">Всё</a></li>
                  <li><a class="dropdown-item">Новости</a></li>
                  <li><a class="dropdown-item">Полезное</a></li>
                  <li><a class="dropdown-item">Важное</a></li>
                </ul>

              </div>

            </div>


            <div class="card-block-svm-2 row">

              <div>

                <div class="card-slide-1 div-block-blog-main-card p-0">

                  <img src="src/banner-1.png" class="blog-card-img">

                  <div>
                    <div class="card-block-svm-2-el card-block-svm-2-main">
                      <p class="card-block-svm-2-el-p">Известный инсайдер, в преддверии важного события, бодрит</p>
                    </div>


                    <div class="card-block-svm-2-footer card-footer">


                      <div class="card-footer-el1">
                        <p class="card-footer-el1-p-2">23.12.2019</p>
                      </div>

                      <div class="card-footer-el2">
                        <div>
                          <a><img src="src/vk-14x14-white.svg"></a>
                        </div>
                        <div class="card-footer-el2-ico">
                          <a><img src="src/twit-14x14-white.svg"></a>
                        </div>
                        <div class="card-footer-el2-ico">
                          <a><img src="src/facebook-14x14-white.svg"></a>
                        </div>
                        <div class="card-footer-el2-ico">
                          <a><img src="src/inst-14x14-white.svg"></a>
                        </div>
                        <div class="card-footer-el2-ico">
                          <a><img src="src/ok-14x14-white.svg"></a>
                        </div>
                      </div>


                    </div>


                  </div>

                </div>

              </div>

              <div>

                <div class="card-slide-1 div-block-blog-main-card p-0">

                  <img src="src/banner-2.png" class="blog-card-img">

                  <div>
                    <div class="card-block-svm-2-el card-block-svm-2-main">
                      <p class="card-block-svm-2-el-p">Британские ученые заявили, что объемы выросли</p>
                    </div>


                    <div class="card-block-svm-2-footer card-footer">


                      <div class="card-footer-el1">
                        <p class="card-footer-el1-p-2">23.12.2019</p>
                      </div>

                      <div class="card-footer-el2">
                        <div>
                          <a><img src="src/vk-14x14-white.svg"></a>
                        </div>
                        <div class="card-footer-el2-ico">
                          <a><img src="src/twit-14x14-white.svg"></a>
                        </div>
                        <div class="card-footer-el2-ico">
                          <a><img src="src/facebook-14x14-white.svg"></a>
                        </div>
                        <div class="card-footer-el2-ico">
                          <a><img src="src/inst-14x14-white.svg"></a>
                        </div>
                        <div class="card-footer-el2-ico">
                          <a><img src="src/ok-14x14-white.svg"></a>
                        </div>
                      </div>


                    </div>


                  </div>

                </div>

              </div>

              <div>

                <div class="card-slide-1 div-block-blog-main-card p-0">

                  <img src="src/banner-3.png" class="blog-card-img">

                  <div>
                    <div class="card-block-svm-2-el card-block-svm-2-main">
                      <p class="card-block-svm-2-el-p">Очевидцы сообщают, что слышали звон колоколов</p>
                    </div>


                    <div class="card-block-svm-2-footer card-footer">


                      <div class="card-footer-el1">
                        <p class="card-footer-el1-p-2">23.12.2019</p>
                      </div>

                      <div class="card-footer-el2">
                        <div>
                          <a><img src="src/vk-14x14-white.svg"></a>
                        </div>
                        <div class="card-footer-el2-ico">
                          <a><img src="src/twit-14x14-white.svg"></a>
                        </div>
                        <div class="card-footer-el2-ico">
                          <a><img src="src/facebook-14x14-white.svg"></a>
                        </div>
                        <div class="card-footer-el2-ico">
                          <a><img src="src/inst-14x14-white.svg"></a>
                        </div>
                        <div class="card-footer-el2-ico">
                          <a><img src="src/ok-14x14-white.svg"></a>
                        </div>
                      </div>


                    </div>


                  </div>

                </div>

              </div>

              <div>

                <div class="card-slide-1 div-block-blog-main-card p-0">

                  <img src="src/banner-4.png" class="blog-card-img">

                  <div>
                    <div class="card-block-svm-2-el card-block-svm-2-main">
                      <p class="card-block-svm-2-el-p">Доблесть наших правозащитников оказалась чрезвычайно полезной!</p>
                    </div>


                    <div class="card-block-svm-2-footer card-footer">


                      <div class="card-footer-el1">
                        <p class="card-footer-el1-p-2">23.12.2019</p>
                      </div>

                      <div class="card-footer-el2">
                        <div>
                          <a><img src="src/vk-14x14-white.svg"></a>
                        </div>
                        <div class="card-footer-el2-ico">
                          <a><img src="src/twit-14x14-white.svg"></a>
                        </div>
                        <div class="card-footer-el2-ico">
                          <a><img src="src/facebook-14x14-white.svg"></a>
                        </div>
                        <div class="card-footer-el2-ico">
                          <a><img src="src/inst-14x14-white.svg"></a>
                        </div>
                        <div class="card-footer-el2-ico">
                          <a><img src="src/ok-14x14-white.svg"></a>
                        </div>
                      </div>


                    </div>


                  </div>

                </div>


                <!------------------------------------------------------->

              </div>


              <div>

                <div class="card-slide-1 div-block-blog-main-card p-0">

                  <img src="src/banner-1.png" class="blog-card-img">

                  <div>
                    <div class="card-block-svm-2-el card-block-svm-2-main">
                      <p class="card-block-svm-2-el-p">Известный инсайдер, в преддверии важного события, бодрит</p>
                    </div>


                    <div class="card-block-svm-2-footer card-footer">


                      <div class="card-footer-el1">
                        <p class="card-footer-el1-p-2">23.12.2019</p>
                      </div>

                      <div class="card-footer-el2">
                        <div>
                          <a><img src="src/vk-14x14-white.svg"></a>
                        </div>
                        <div class="card-footer-el2-ico">
                          <a><img src="src/twit-14x14-white.svg"></a>
                        </div>
                        <div class="card-footer-el2-ico">
                          <a><img src="src/facebook-14x14-white.svg"></a>
                        </div>
                        <div class="card-footer-el2-ico">
                          <a><img src="src/inst-14x14-white.svg"></a>
                        </div>
                        <div class="card-footer-el2-ico">
                          <a><img src="src/ok-14x14-white.svg"></a>
                        </div>
                      </div>


                    </div>


                  </div>

                </div>

              </div>


              <div>

                <div class="card-slide-1 div-block-blog-main-card p-0">

                  <img src="src/banner-1.png" class="blog-card-img">

                  <div>
                    <div class="card-block-svm-2-el card-block-svm-2-main">
                      <p class="card-block-svm-2-el-p">Известный инсайдер, в преддверии важного события, бодрит</p>
                    </div>


                    <div class="card-block-svm-2-footer card-footer">


                      <div class="card-footer-el1">
                        <p class="card-footer-el1-p-2">23.12.2019</p>
                      </div>

                      <div class="card-footer-el2">
                        <div>
                          <a><img src="src/vk-14x14-white.svg"></a>
                        </div>
                        <div class="card-footer-el2-ico">
                          <a><img src="src/twit-14x14-white.svg"></a>
                        </div>
                        <div class="card-footer-el2-ico">
                          <a><img src="src/facebook-14x14-white.svg"></a>
                        </div>
                        <div class="card-footer-el2-ico">
                          <a><img src="src/inst-14x14-white.svg"></a>
                        </div>
                        <div class="card-footer-el2-ico">
                          <a><img src="src/ok-14x14-white.svg"></a>
                        </div>
                      </div>


                    </div>


                  </div>

                </div>

              </div>


              <div>

                <div class="card-slide-1 div-block-blog-main-card p-0">

                  <img src="src/banner-1.png" class="blog-card-img">

                  <div>
                    <div class="card-block-svm-2-el card-block-svm-2-main">
                      <p class="card-block-svm-2-el-p">Известный инсайдер, в преддверии важного события, бодрит</p>
                    </div>


                    <div class="card-block-svm-2-footer card-footer">


                      <div class="card-footer-el1">
                        <p class="card-footer-el1-p-2">23.12.2019</p>
                      </div>

                      <div class="card-footer-el2">
                        <div>
                          <a><img src="src/vk-14x14-white.svg"></a>
                        </div>
                        <div class="card-footer-el2-ico">
                          <a><img src="src/twit-14x14-white.svg"></a>
                        </div>
                        <div class="card-footer-el2-ico">
                          <a><img src="src/facebook-14x14-white.svg"></a>
                        </div>
                        <div class="card-footer-el2-ico">
                          <a><img src="src/inst-14x14-white.svg"></a>
                        </div>
                        <div class="card-footer-el2-ico">
                          <a><img src="src/ok-14x14-white.svg"></a>
                        </div>
                      </div>


                    </div>


                  </div>

                </div>

              </div>


              <div>

                <div class="card-slide-1 div-block-blog-main-card p-0">

                  <img src="src/banner-1.png" class="blog-card-img">

                  <div>
                    <div class="card-block-svm-2-el card-block-svm-2-main">
                      <p class="card-block-svm-2-el-p">Известный инсайдер, в преддверии важного события, бодрит</p>
                    </div>


                    <div class="card-block-svm-2-footer card-footer">


                      <div class="card-footer-el1">
                        <p class="card-footer-el1-p-2">23.12.2019</p>
                      </div>

                      <div class="card-footer-el2">
                        <div>
                          <a><img src="src/vk-14x14-white.svg"></a>
                        </div>
                        <div class="card-footer-el2-ico">
                          <a><img src="src/twit-14x14-white.svg"></a>
                        </div>
                        <div class="card-footer-el2-ico">
                          <a><img src="src/facebook-14x14-white.svg"></a>
                        </div>
                        <div class="card-footer-el2-ico">
                          <a><img src="src/inst-14x14-white.svg"></a>
                        </div>
                        <div class="card-footer-el2-ico">
                          <a><img src="src/ok-14x14-white.svg"></a>
                        </div>
                      </div>


                    </div>


                  </div>

                </div>

              </div>

            </div>
          </div>
        </div>

        <div class="d-flex justify-content-center mt-3 btn-see-all">
          <a type="button" class="btn btn-text-color btn-animation btn2-svm">Посмотреть все</a>
        </div>

      </div>
      </div>
    </section>



  </main>

  <footer>

    <div class="block-svm-footer">
      © 2001-2019, Управление ЗАГС Амурской области
    </div>

  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>


  <script type="text/javascript" src="slick-1.8.0/slick/slick.min.js"></script>
  <script type="text/javascript" src="js/slider.js"></script>
  <script type="text/javascript" src="js/modal_window.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



</body>

</html>