<!-- itt vannak .html-ek, de még nem kell javítani -->
<!DOCTYPE html>
<html lang="hu">
<?php require_once('head.php'); ?>
<body>
      <?php require_once('header.php'); ?>
      <main class="main">
        <section class="section banner-mode-4 bg-900">
          <div class="banner-homepage4">
            <!-- <div class="banner-icon-1 shape-1"></div> -->
            <div class="banner-icon-2 shape-3"></div>
            <div class="container">
              <div class="text-center">
                <h3 class="color-brand-1 mb-25 text-up fadeInUp"> Lorem ipsum dolor, sit amet consectetur adipisicing elit. At laudantium nemo iusto tempora?</h3>
                <h2 class="display-5 color-white mb-55 fadeInUp">Kaposvári Informatika<br class="d-none d-lg-block">Ágazati Képzőközpont</h2>
                <div class="d-flex justify-content-center fadeInUp get-quote"><a class="d-inline-block align-middle mr-50" href="contact.php">
                    <div class="box-get-quote parallax-item">
                      <div class="img-quote img-zoom-in"><img src="assets/imgs/page/homepage1/img-get-quote.png" alt="neuron"></div>
                      <div class="info-quote"><span class="font-xl mr-15">Lépj Kapcsolatba <i class="fa-solid fa-share-from-square"></i></span></div>
                    </div></a>
                  <div class="d-flex align-items-center"><a class="play-btn popup-youtube" href="https://www.youtube.com/watch?v=sVPYIRF9RCQ"></a>
                    <h5 class="ml-30 color-white play-text">Mit csinálunk?</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
<!-- Hírfolyam -->
        <section class="section is-mode">
          <div class="box-blogs bg-100">
            <div class="container">
              <h1 class="color-900 mb-95 text-center">Hírfolyam</h1>
              <div class="text-blog-big stroke-900 no-stroke scroll-move-left">Hírfolyam</div>
            </div>
            <div class="box-blog-slider">
              <div class="box-swiper">
                <div class="swiper-container swiper-group-3-customer blogs-slider">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="cardBlog">
                        <div class="cardImage"><a href="blog-single.html"><img class="parallax-image" src="assets/imgs/page/homepage1/blog1.png" alt="neuron"></a></div>
                        <div class="cardInfo scroll-move-up-2"><a class="tag-link" href="blog-2.html">#<span>NEWS1</span></a><a class="link-blog" href="blog-single.html">
                            <h4 class="color-light-900 text-opacity">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias dolorem, ipsa eius ad voluptas molestiae ut repellendus, minima aspernatur animi magni dolores recusandae in magnam</h4></a></div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="cardBlog">
                        <div class="cardImage"><a href="blog-single.html"><img class="parallax-image" src="assets/imgs/page/homepage1/blog2.png" alt="neuron"></a></div>
                        <div class="cardInfo scroll-move-up-2"><a class="tag-link" href="blog-2.html">#<span>NEWS2</span></a><a class="link-blog" href="blog-single.html">
                            <h4 class="color-light-900 text-opacity">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit dolorum nesciunt, est commodi aliquam ea reprehenderit, maxime, eveniet ad incidunt vero dolores non ipsam! Maiores quos ducimus error suscipit laborum?</h4></a></div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="cardBlog">
                        <div class="cardImage"><a href="blog-single.html"><img class="parallax-image" src="assets/imgs/page/homepage1/blog3.png" alt="neuron"></a></div>
                        <div class="cardInfo scroll-move-up-2"><a class="tag-link" href="blog-2.html">#<span>NEWS3</span></a><a class="link-blog" href="blog-single.html">
                            <h4 class="color-light-900 text-opacity">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, reiciendis molestiae esse vero et dolorem corrupti quasi error aliquid enim ad sed cum quos aut provident magnam quas tempore delectus.</h4></a></div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="cardBlog">
                        <div class="cardImage"><a href="blog-single.html"><img class="parallax-image" src="assets/imgs/page/homepage1/blog2.png" alt="neuron"></a></div>
                        <div class="cardInfo scroll-move-up-2"><a class="tag-link" href="blog-2.html">#<span>NEWS4</span></a><a class="link-blog" href="blog-single.html">
                            <h4 class="color-light-900 text-opacity">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod inventore temporibus iusto. Rerum, quaerat culpa quos tempora quod soluta vel dolores nam illo quo necessitatibus cupiditate, facilis temporibus dolor illum!</h4></a></div>
                      </div>
                    </div>
                  </div>
                  <div class="box-button-slider-bottom">
                    <div class="swiper-button-prev swiper-button-prev-group-4 swiper-button-prev-style1">
                      <svg class="icon-16" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75"></path>
                      </svg>
                    </div>
                    <div class="swiper-button-next swiper-button-next-group-4 swiper-button-next-style1">
                      <svg class="icon-16" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"></path>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
<!-- Képzések -->
        <section class="section block-section-2 is-mode bg-0" id="kepzesek">
          <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <div class="card-feature-3 parallax-item">
                  <h2 class="card-steps heading-1 stroke stroke-900 grow-up">01.</h2>
                  <h3 class="card-title color-900 text-up">Képzés 1</h3>
                  <h5 class="card-desc color-900 text-opacity">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis cum eius praesentium quibusdam, expedita molestiae impedit ad ex ratione amet id perspiciatis repellendus ut eum vero accusamus reiciendis architecto rerum!</h5>
                  <div class="card-link d-flex"><a class="font-xl-bold color-900 link-text link-effect">TOVÁBBI INFORMÁCIÓK</a><img class="ml-15" src="assets/imgs/template/icons/arrow.svg" alt="neuron"></div>        
                </div>
              </div>
              <div class="col-lg-6">
              <div class="card-feature-3 parallax-item">
                  <h2 class="card-steps heading-1 stroke stroke-900 grow-up">02.</h2>
                  <h3 class="card-title color-900 text-up">Képzés 2</h3>
                  <h5 class="card-desc color-900 text-opacity">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem ea dignissimos sequi quisquam quam error! Ex voluptas quas totam beatae eligendi! Aperiam mollitia reprehenderit aliquam. Ad, earum! Esse, obcaecati pariatur.</h5>

                  <div class="popup-button tobb" id="oktato1" open="oktato1.php">
                  <span><a></a></span>
                  </div>
              </div>
          </div>
        </section>
<!-- Oktatók -->
        <section class="section is-mode" id="oktatok">
          <div class="box-services box-about bg-100">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-lg-6">
                  <h1 class="title-left text-up"><span class="stroke-900 no-stroke">Az</span><img class="d-inline-block align-middle" src="assets/imgs/page/homepage1/icon-project.png" alt="neuron"></h1>
                  <h1 class="title-left text-up"><span class="color-900">Oktatóinkról</span></h1>
                </div>
                <div class="col-lg-6">
                  <p class="font-2xl-bold color-900 text-opacity">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia in tenetur, eaque eveniet quis illo corporis ea ut id tempore doloremque, voluptatum sed vero minus! Aliquam, optio. Corrupti, quasi natus.</p>
                </div>
              </div>
            </div>
            <div class="box-services-slider box-about-slider box-slide-padding-left">
              <div class="box-swiper">
                <div class="swiper-container swiper-group-4-center features-slider">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="card-feature card-feature-2">
                        <div class="card-image"><img class="parallax-image popup-button" id="oktatokep1" open="oktato1.php" src="assets/imgs/page/homepage2/img1.png" alt="neuron"></div>
                        <div class="card-info">
                          <h4 class="color-900 card-title">Bloch Tamás</h4>
                          <p class="card-desc font-xl color-600">A legjobb oktató, nyugdíjas váltóőr!!</p>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="card-feature">
                        <div class="card-info">
                          <h4 class="color-900 card-title">Szabó Richárd</h4>
                          <p class="card-desc font-xl color-600">You are always welcome to visit our little den. Professional in teir craft!</p>
                        </div>
                        <div class="card-image"><img class="parallax-image" src="assets/imgs/page/homepage2/img2.png" alt="neuron"></div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="card-feature card-feature-2">
                        <div class="card-image"><img class="parallax-image" src="assets/imgs/page/homepage2/img3.png" alt="neuron"></div>
                        <div class="card-info">
                          <h4 class="color-900 card-title">3. oktató</h4>
                          <p class="card-desc font-xl color-600">You are always welcome to visit our little den. Professional in teir craft!</p>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="card-feature">
                        <div class="card-info">
                          <h4 class="color-900 card-title">4. oktató</h4>
                          <p class="card-desc font-xl color-600">You are always welcome to visit our little den. Professional in teir craft!</p>
                        </div>
                        <div class="card-image"><img class="parallax-image" src="assets/imgs/page/homepage2/img4.png" alt="neuron"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
<!-- Infrastruktura -->
        <section class="section is-mode" id="infrastruktura">
          <div class="box-services bg-0">
            <div class="container">
              <div class="row align-items-end">
                <div class="col-md-9">
                  <h1 class="text-up"><span class="stroke-900 no-stroke">Infrastruktúra</span></h1>
                  <h1 class="text-up"><span class="color-900">Hol dolgozunk?</span></h1>
                </div>
                <div class="col-md-3">
                  <div class="box-button-slider-bottom box-button-slider-top">
                    <div class="swiper-button-prev swiper-button-prev-group-3 swiper-button-prev-style1">
                      <svg class="icon-16" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75"></path>
                      </svg>
                    </div>
                    <div class="swiper-button-next swiper-button-next-group-3 swiper-button-next-style1">
                      <svg class="icon-16" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"></path>
                      </svg>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="box-services-slider">
              <div class="box-swiper">
                <div class="swiper-container swiper-group-3-center services-slider">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="cardService">
                        <div class="cardImage parallax-item"><a href="service-1.html"><img class="parallax-image" src="assets/imgs/page/homepage1/service1.png" alt="neuron"></a></div>
                        <div class="cardInfo">
                          <h3 class="color-900">1. hely</h3>
                          <h5 class="color-700 text-opacity">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio exercitationem maiores laborum. Molestiae consequuntur fugiat voluptatem laboriosam voluptas veritatis provident cumque recusandae architecto, iure, maxime repudiandae natus enim, impedit nostrum.</h5>
                          <div class="d-flex"><a class="font-xl-bold color-900 link-effect" href="service-1.html">Megtekintés</a><img class="ml-15" src="assets/imgs/template/icons/arrow.svg" alt="neuron"></div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="cardService">
                        <div class="cardImage parallax-item"><a href="service-1.html"><img class="parallax-image" src="assets/imgs/page/homepage1/service2.png" alt="neuron"></a></div>
                        <div class="cardInfo">
                          <h3 class="color-900">2. hely</h3>
                          <h5 class="color-700 text-opacity">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias adipisci officia ipsa optio, iure magni error autem, commodi saepe delectus iusto ipsum, ab dolores. Doloremque doloribus tempore iste sunt eos.</h5>
                          <div class="d-flex"><a class="font-xl-bold color-900 link-effect" href="service-1.html">Megtekintés</a><img class="ml-15" src="assets/imgs/template/icons/arrow.svg" alt="neuron"></div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="cardService">
                        <div class="cardImage parallax-item"><a href="service-1.html"><img class="parallax-image" src="assets/imgs/page/homepage1/service3.png" alt="neuron"></a></div>
                        <div class="cardInfo">
                          <h3 class="color-900">3. hely</h3>
                          <h5 class="color-700 text-opacity">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta obcaecati dolores nesciunt tenetur, rerum aliquid minima amet ea officia impedit? Accusamus, distinctio facere. A quidem, repudiandae nam velit doloribus error.</h5>
                          <div class="d-flex"><a class="font-xl-bold color-900 link-effect" href="service-1.html">Megtekintés</a><img class="ml-15" src="assets/imgs/template/icons/arrow.svg" alt="neuron"></div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="cardService">
                        <div class="cardImage parallax-item"><a href="service-1.html"><img class="parallax-image" src="assets/imgs/page/homepage1/service4.png" alt="neuron"></a></div>
                        <div class="cardInfo">
                          <h3 class="color-900">4. hely</h3>
                          <h5 class="color-700 text-opacity">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, quibusdam magni suscipit necessitatibus incidunt voluptate quaerat officiis! Similique exercitationem, molestias ipsam et iure voluptates recusandae quae fugit dolores ab ullam.</h5>
                          <div class="d-flex"><a class="font-xl-bold color-900 link-effect" href="service-1.html">Megtekintés</a><img class="ml-15" src="assets/imgs/template/icons/arrow.svg" alt="neuron"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
<!-- Galéria -->
        <section class="section is-mode">
          <div class="box-recent-work block-recent-work-4 bg-0">
            <div class="container">
              <div class="head-recent-work">
                <h1 class="color-900 text-up">Gal<span class="stroke-900 no-stroke">éria</span></h1><a class="btn btn-default parallax-item" href="#">Több kép<img class="ml-15" src="assets/imgs/template/icons/arrow.svg" alt="neuron"></a>
              </div>
              <h4 class="color-900 text-opacity">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam ab minima iusto corporis magnam ad dolorum dolor hic nulla voluptatum nemo aperiam quae, ipsum ullam, eius eveniet! Officia, quae vitae.</h4>
            </div>
            <div class="container-fluid">
              <div class="mt-100 position-relative box-recent-work-4">
                <div class="cardRecentBoxLists">
                  <div class="cardRecentStyle3 cursor-view">
                    <div class="cardImage"><a href="portfolio-detail-2.html"><img class="parallax-image scoll-reduce-border-radius" src="assets/imgs/page/homepage4/work.png" alt="neuron"></a></div>
                  </div>
                  <div class="cardRecentStyle3 cursor-view">
                    <div class="cardImage"><a href="portfolio-detail-2.html"><img class="parallax-image scoll-reduce-border-radius" src="assets/imgs/page/homepage4/work2.png" alt="neuron"></a></div>
                  </div>
                  <div class="cardRecentStyle3 cursor-view">
                    <div class="cardImage"><a href="portfolio-detail-2.html"><img class="parallax-image scoll-reduce-border-radius" src="assets/imgs/page/homepage4/work3.png" alt="neuron"></a></div>
                  </div>
                </div>
                <div class="cardRecentBoxLists">
                  <div class="cardRecentStyle3 cursor-view">
                    <div class="cardImage"><a href="portfolio-detail-2.html"><img class="parallax-image scoll-reduce-border-radius" src="assets/imgs/page/homepage4/work4.png" alt="neuron"></a></div>
                  </div>
                  <div class="cardRecentStyle3 cursor-view">
                    <div class="cardImage"><a href="portfolio-detail-2.html"><img class="parallax-image scoll-reduce-border-radius" src="assets/imgs/page/homepage4/work5.png" alt="neuron"></a></div>
                  </div>
                  <div class="cardRecentStyle3 cursor-view">
                    <div class="cardImage"><a href="portfolio-detail-2.html"><img class="parallax-image scoll-reduce-border-radius" src="assets/imgs/page/homepage4/work6.png" alt="neuron"></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
<!-- Gyakori kérdések -->
        <section class="section is-mode">
          <div class="box-faqs bg-100">
            <div class="container">
              <div class="row">
                <div class="col-lg-3">
                  <h2 class="color-900 mb-75 text-up">FAQs</h2>
                  <div class="parallax-item"><img class="parallax-image" src="assets/imgs/page/homepage1/faq1.png" alt="neuron"></div>
                  <div class="mt-105">
                    <h6 class="color-900 mb-15">Still no luck? We can help!</h6>
                    <p class="font-md color-600">Contact us and we’ll get back to youas soon as possible.</p>
                  </div>
                  <div class="mt-40">
                    <div class="grow-up"><a class="btn btn-default btn-default-sm" href="contact.php">Contact Us<img class="ml-15" src="assets/imgs/template/icons/arrow.svg" alt="neuron"></a></div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="accordion" id="accordionFAQ">
                    <div class="accordion-item scroll-move-up-2">
                      <h5 class="accordion-header" id="headingOne">
                      <button class="accordion-button heading-5 color-900 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Where is my order? Quisque molestie</button>
                      </h5>
                      <div class="accordion-collapse collapse" id="collapseOne" aria-labelledby="headingOne" data-bs-parent="#accordionFAQ">
                        <div class="accordion-body font-lg color-600">Vel tenetur officiis ab reiciendis dolor aut quae doloremque est ipsum natus et consequatur animi aut sunt dolores ut quasi rerum. Aut velit velit id quasi velit eum reiciendis laudantium quo galisum incidunt aut velit animi hic temporibus blanditiis sit odit iure. Eum laborum dolores ea molestias fuga qui temporibus accusantium qui soluta aliquid ab vero soluta.</div>
                      </div>
                    </div>
                    <div class="accordion-item scroll-move-up-2">
                      <h5 class="accordion-header" id="headingTwo">
                        <button class="accordion-button heading-5 color-900 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Can I cancel or change my order?</button>
                      </h5>
                      <div class="accordion-collapse collapse" id="collapseTwo" aria-labelledby="headingTwo" data-bs-parent="#accordionFAQ">
                        <div class="accordion-body font-lg color-600">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature Id pro doctus mediocrem erroribus, diam nostro sed cu. Ea pri graeco tritani partiendo. Omittantur No tale choro fastidii his, pri cu epicuri perpetua. Enim dictas omittantur et duo, vocent lucilius quaestio mea ex. Ex illum officiis id.</div>
                      </div>
                    </div>
                    <div class="accordion-item scroll-move-up-2">
                      <h5 class="accordion-header" id="headingThree">
                        <button class="accordion-button heading-5 color-900 collapsed type=" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Can I cancel or change my order?</button>
                      </h5>
                      <div class="accordion-collapse collapse" id="collapseThree" aria-labelledby="headingThree" data-bs-parent="#accordionFAQ">
                        <div class="accordion-body font-lg color-600">Aut architecto consequatur sit error nemo sed dolorum suscipit 33 impedit dignissimos ut velit blanditiis qui quos magni id dolore dignissimos. Sit ipsa consectetur et sint harum et dicta consequuntur id cupiditate perferendis qui quisquam enim. Vel autem illo id error excepturi est dolorum voluptas qui maxime consequatur et culpa quibusdam in iusto vero sit amet Quis.</div>
                      </div>
                    </div>
                    <div class="accordion-item scroll-move-up-2">
                      <h5 class="accordion-header" id="headingFour">
                        <button class="accordion-button heading-5 color-900 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">I have promotional or discount code?</button>
                      </h5>
                      <div class="accordion-collapse collapse" id="collapseFour" aria-labelledby="headingFour" data-bs-parent="#accordionFAQ">
                        <div class="accordion-body font-lg color-600">Eos nostrum aperiam ab enim quas sit voluptate fuga. Ea aperiam voluptas a accusantium similique 33 alias sapiente non vitae repellat et dolorum omnis eos beatae praesentium id sunt corporis. Aut nisi blanditiis aut corrupti quae et accusantium doloribus sed tempore libero a dolorum beatae.</div>
                      </div>
                    </div>
                    <div class="accordion-item scroll-move-up-2">
                      <h5 class="accordion-header" id="headingFive">
                        <button class="accordion-button heading-5 color-900 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">What are the delivery types you use?</button>
                      </h5>
                      <div class="accordion-collapse collapse" id="collapseFive" aria-labelledby="headingFive" data-bs-parent="#accordionFAQ">
                        <div class="accordion-body font-lg color-600">Et beatae quae ex minima porro aut nihil quia sed optio dignissimos et voluptates deleniti et nesciunt veritatis et suscipit quod. Est sint voluptate id unde nesciunt non deleniti debitis. Ut dolores tempore vel placeat nemo quo enim reprehenderit eos corrupti maiores et minima quaerat. Quo sequi eaque eum similique sint et autem perspiciatis cum Quis exercitationem quo quos excepturi non ducimus ducimus eos natus velit.</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="box-image-faqs"><img class="parallax-image" src="assets/imgs/page/homepage1/faq2.png" alt="neuron"><img class="img-sub parallax-image" src="assets/imgs/page/homepage1/faq3.png" alt="neuron"></div>
                </div>
              </div>
            </div>
          </div>
        </section>
<!-- Dokumentumok -->
<section class="section is-mode">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="color-900 mb-75 text-up">Dokumentumok</h2>
        <div class="accordion" id="accordionDocs">
          <!-- Dokumentum 1 -->
          <div class="accordion-item scroll-move-up-2">
            <h5 class="accordion-header" id="docHeadingOne">
              <button class="accordion-button heading-5 color-900 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#docCollapseOne" aria-expanded="false" aria-controls="docCollapseOne">Dokumentum 1 címe</button>
            </h5>
            <div class="accordion-collapse collapse" id="docCollapseOne" aria-labelledby="docHeadingOne" data-bs-parent="#accordionDocs">
              <div class="row">
                <!-- Tartalom bal oldalra -->
                <div class="col-lg-8">
                  <div class="accordion-body font-lg color-600">
                    Dokumentum 1 tartalma...
                  </div>
                </div>
                
                <!-- Letölthető rész jobb oldalra -->
                <div class="col-lg-4 mt-2">
                  <p>A hosszabb változatért kérem töltse le "Letöltés" vagy nyissa meg a "Több" gombra kattintva</p><br>
                  <p class="color-900 mb-15">Letöltés</p>
                  <p class="font-md color-600">Több</p>

                  <!-- vagy:
                <div class="col-lg-4 mt-2">
                  <p>A hosszabb változatért kérem töltse le "Letöltés és Több információ" vagy nyissa meg a "Több" gombra kattintva</p><br>
                  <p class="color-900 mb-15"><a href="download_doc1.php">Letöltés és Több információ</a></p>
                </div>
                -->
                </div>
              </div>
            </div>
          </div>
          
          <!-- Dokumentum 2 -->
          <div class="accordion-item scroll-move-up-2">
            <h5 class="accordion-header" id="docHeadingTwo">
              <button class="accordion-button heading-5 color-900 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#docCollapseTwo" aria-expanded="false" aria-controls="docCollapseTwo">Dokumentum 2 címe</button>
            </h5>
            <div class="accordion-collapse collapse" id="docCollapseTwo" aria-labelledby="docHeadingTwo" data-bs-parent="#accordionDocs">
              <div class="row">
                <!-- Tartalom bal oldalra -->
                <div class="col-lg-6">
                  <div class="accordion-body font-lg color-600">
                    Dokumentum 2 tartalma...
                  </div>
                </div>
                
                <!-- Letölthető rész jobb oldalra -->
                <div class="col-lg-4 mt-2">
                  <h6 class="color-900 mb-15">Letöltés</h6>
                  <p class="font-md color-600">Töltse le a Dokumentumot.</p>
                  <div class="grow-up"><a class="btn btn-default btn-default-sm" href="download_doc2.php">Letöltés<img class="ml-15" src="assets/imgs/template/icons/arrow.svg" alt="nyíl"></a></div>
                </div>
              </div>
            </div>
          </div>
          
          <!-- További dokumentumok... -->
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Támogatók -->
        <section class="section is-mode">
          <div class="box-loved bg-0">
            <div class="container">
              <div class="row align-items-end">
                <div class="col-lg-7 mb-30">
                  <div class="box-head-loved">
                    <h3 class="color-900 text-opacity">Támogatóink</h3>
                  </div>
                </div>
                <div class="col-lg-5 mb-30">
                  <p class="font-xl color-900 text-up">Köszönjük szépen szíves támogatásukat!</p>
                </div>
              </div>
              <div class="box-why-us-bottom">
              <div class="box-logo-slider">
                <div class="box-swiper">
                  <div class="swiper-container swiper-group-5">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide"><img src="assets/imgs/támogatók/kometa.png" alt="Kométa 99 Élelmiszeripari Zrt." title="KOMETA 99 Élelmiszeripari Zrt."></div>
                      <div class="swiper-slide"><img src="assets/imgs/támogatók/kszc.png" alt="Kaposvári Szakképzési Centrum" title="Kaposvári Szakképzési Centrum"></div>
                      <div class="swiper-slide"><img src="assets/imgs/támogatók/kaposvar.png" alt="Kaposvár Megyei Jogú Város" title="Kaposvár Megyei Jogú Város"></div>
                      <div class="swiper-slide"><img src="assets/imgs/támogatók/bazisinfo.png" alt= "Bázis Informatika Kft" title="Bázis Informatika Kf"></div>
                      <div class="swiper-slide"><img src="assets/imgs/támogatók/precognox.png"  alt="Precognox Informatikai Kft" title="Precognox Informatikai Kft"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>      
          </div>
        </section>

        <button class="popup-button" id="oktato1" open="oktato1.php">Oktató 1</button>

        

  <?php require_once("footer.php"); ?>
  </div>
  <div class="scroll-to-top" id="scroll-to-top"><i class="fa-solid fa-angles-up"></i></div>
  <?php require_once("scripts.php"); ?>
  </body>
</html>