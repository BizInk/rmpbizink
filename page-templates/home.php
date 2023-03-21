<?php
/**
 * Template Name: Front Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
$path = get_template_directory_uri();

?>

<!-- hero-section-start -->
<section class="banner-section light-blue-bg">
  <div class="container">
    <div class="row align-item-center flex-md-row flex-column-reverse">
      <div class="col-md-6 banner-left mb-5 mb-md-0">
        <div class="banner-content-wrap">
          <h2>Headline is awesome</h2>
          <div class="editor-design"><p>Realm of the galaxies across the centuries the carbon in our apple pies vanquish the impossible another world venture.</p></div>
          <button class="btn navyblue-btn mt-3">Button</button>
        </div>
      </div>
      <div class="col-md-6 banner-img mb-5 mb-md-0">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner-image.png" class="img-fluid" alt="">
      </div>
    </div>
  </div>
</section>
<section class="banner-section light-blue-bg">
  <div class="container">
    <div class="row align-item-center flex-md-row-reverse flex-column-reverse">
      <div class="col-md-6 banner-left mb-5 mb-md-0">
        <div class="banner-content-wrap ms-auto">
          <h2>Headline is awesome</h2>
          <div class="editor-design"><p>Realm of the galaxies across the centuries the carbon in our apple pies vanquish the impossible another world venture.</p></div>
          <button class="btn navyblue-btn mt-3">Button</button>
        </div>
      </div>
      <div class="col-md-6 banner-img mb-5 mb-md-0">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner-image.png" class="img-fluid" alt="">
      </div>
    </div>
  </div>
</section>
<!-- hero-section-end -->

<!-- two-col-section -->
<section class="two-col-section">
  <div class="container">
    <div class="row align-item-center flex-md-row flex-column-reverse">
      <div class="col-md-6 col-left mb-5 mb-md-0">
        <div class="col-content">
          <h4 class="dark">Short headline</h4>
          <h2>Awesome headline</h2>
          <div class="editor-design"><p>Realm of the galaxies across the centuries the carbon in our apple pies vanquish the impossible another world venture.</p></div>
          <button class="btn navyblue-btn mt-3">Button</button>
        </div>
      </div>
      <div class="col-md-6 col-right mb-5 mb-md-0">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/two-col-img.jpg" class="img-fluid" alt="">
      </div>
    </div>
  </div>
</section>
<section class="two-col-section">
  <div class="container">
    <div class="row align-item-center flex-md-row-reverse flex-column-reverse">
      <div class="col-md-6 col-left mb-5 mb-md-0">
        <div class="col-content">
          <h4 class="dark">Short headline</h4>
          <h2>Awesome headline</h2>
          <div class="editor-design"><p>Realm of the galaxies across the centuries the carbon in our apple pies vanquish the impossible another world venture.</p></div>
          <button class="btn navyblue-btn mt-3">Button</button>
          <a href="" class="link-button"></a>
        </div>
      </div>
      <div class="col-md-6 banner-img mb-5 mb-md-0">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/two-col-img.jpg" class="img-fluid" alt="">
      </div>
    </div>
  </div>
</section>
<!-- two-col-section-end-->

<!-- tab-section-start -->
<section class="tab-section">
  <div class="container">
    <div class="tab-wrap">
      <div class="row align-item-center flex-md-row flex-column-reverse">
        <div class="col-md-6">
          <div class="container responsive-tabs">
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item">
                <a id="tab-A" href="#pane-A" class="nav-link active" data-bs-toggle="tab" role="tab">Active</a>
              </li>
              <li class="nav-item">
                <a id="tab-B" href="#pane-B" class="nav-link" data-bs-toggle="tab" role="tab">Inactive</a>
              </li>
              <li class="nav-item">
                <a id="tab-C" href="#pane-C" class="nav-link" data-bs-toggle="tab" role="tab">Inactive</a>
              </li>
              <li class="nav-item">
                <a id="tab-D" href="#pane-D" class="nav-link" data-bs-toggle="tab" role="tab">Inactive</a>
              </li>
            </ul>
            <div id="content" class="tab-content" role="tablist">
              <div id="pane-A" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="tab-A">
                <div class="card-header" role="tab" id="heading-A">
                  <h5 class="mb-0">
                    <a data-bs-toggle="collapse" href="#collapse-A" aria-expanded="true" aria-controls="collapse-A">
                      Active
                      <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </a>
                  </h5>
                </div>
                <div id="collapse-A" class="collapse show" data-bs-parent="#content" role="tabpanel" aria-labelledby="heading-A">
                  <div class="card-body editor-design">
                    Realm of the galaxies across the centuries the carbon in our apple pies vanquish the impossible
                    another world venture. Dream of the mind's eye muse about the only home we've ever known the only home
                    we've ever known concept of the number one gathered by gravity? Stirred by starlight the sky calls to
                    us rich in mystery paroxysm of global death with pretty stories for which there's little good evidence.
                  </div>
                </div>
              </div>
              <div id="pane-B" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
                <div class="card-header" role="tab" id="heading-B">
                  <h5 class="mb-0">
                    <a class="collapsed" data-bs-toggle="collapse" href="#collapse-B" aria-expanded="false" aria-controls="collapse-B">
                      Inactive
                      <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </a>
                  </h5>
                </div>
                <div id="collapse-B" class="collapse" data-bs-parent="#content" role="tabpanel" aria-labelledby="heading-B">
                  <div class="card-body editor-design">
                    Realm of the galaxies across the centuries the carbon in our apple pies vanquish the impossible
                    another world venture. Dream of the mind's eye muse about the only home we've ever known the only home
                    we've ever known
                  </div>
                </div>
              </div>

              <div id="pane-C" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-C">
                <div class="card-header" role="tab" id="heading-C">
                  <h5 class="mb-0">
                    <a data-bs-toggle="collapse" href="#collapse-C" aria-expanded="false" aria-controls="collapse-C">
                      Inactive
                      <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </a>
                  </h5>
                </div>
                <div id="collapse-C" class="collapse" data-bs-parent="#content" role="tabpanel" aria-labelledby="heading-C">
                  <div class="card-body editor-design">
                    concept of the number one gathered by gravity? Stirred by starlight the sky calls to
                    us rich in mystery paroxysm of global death with pretty stories for which there's little good evidence.
                  </div>
                </div>
              </div>
              <div id="pane-D" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-D">
                <div class="card-header" role="tab" id="heading-D">
                  <h5 class="mb-0">
                    <a data-bs-toggle="collapse" href="#collapse-D" aria-expanded="false" aria-controls="collapse-D">
                      Active
                      <i class="fa fa-angle-down" aria-hidden="true"></i>
                    </a>
                  </h5>
                </div>
                <div id="collapse-D" class="collapse" data-bs-parent="#content" role="tabpanel" aria-labelledby="heading-D">
                  <div class="card-body editor-design">
                    Realm of the galaxies across the centuries the carbon in our apple pies vanquish the impossible
                    another world venture. Dream of the mind's eye muse about the only home we've ever known the only home
                    we've ever known concept of the number one gathered by gravity? Stirred by starlight the sky calls to
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 text-end mb-5 mb-md-0">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bouquet.jpg" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </div>
</section>
<!-- tab-section-end -->

<!-- infobox-section-start -->
<section class="infobox-section">
  <div class="container">
    <div class="infobox-warp">
      <div class="row gy-5 g-md-5">
        <div class="col-md-6 col-lg-4">
          <div class="info-box text-center h-100">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/feature-icon.svg" class="img-fluid" alt="">
            <h4 class="dark">Feature Headline</h4>
            <div class="info-description">Ship of the imagination star stuff harvesting star light descended from astronomers finite but</div>
            <a href="#" class="btn btn-sm navyblue-btn mt-2">Learn more</a>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="info-box text-center h-100">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/feature-icon.svg" class="img-fluid" alt="">
            <h4 class="dark">Feature Headline</h4>
            <div class="info-description">Ship of the imagination star stuff harvesting star light descended from astronomers finite but</div>
            <a href="#" class="btn btn-sm navyblue-btn mt-2">Learn more</a>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="info-box text-center h-100">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/feature-icon.svg" class="img-fluid" alt="">
            <h4 class="dark">Feature Headline</h4>
            <div class="info-description">Ship of the imagination star stuff harvesting star light descended from astronomers finite but</div>
            <a href="#" class="btn btn-sm navyblue-btn mt-2">Learn more</a>            
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="info-box text-center h-100">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/feature-icon.svg" class="img-fluid" alt="">
            <h4 class="dark">Feature Headline</h4>
            <div class="info-description">Ship of the imagination star stuff harvesting star light descended from astronomers finite but</div>
            <button class="btn btn-sm navyblue-btn mt-2">Learn more</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- infobox-section-end -->

<!-- logo-section-start -->
<section class="logo-section text-center">
  <div class="container">
    <div class="logo-slider">
      <div class="logo">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo1.png" class="img-fluid" alt="">
      </div>
      <div class="logo">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo2.png" class="img-fluid" alt="">
      </div>
      <div class="logo">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo3.png" class="img-fluid" alt="">
      </div>
      <div class="logo">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo4.png" class="img-fluid" alt="">
      </div>
      <div class="logo">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo5.png" class="img-fluid" alt="">
      </div>
      <div class="logo">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo6.png" class="img-fluid" alt="">
      </div>
    </div>
  </div>
</section>
<!-- logo-section-end -->

<!-- counter-section-start -->
<section class="counter-section">
  <div class="container">
    <div class="row text-center gy-5 g-md-0">
      <div class="col-md-4">
        <div id="counter-box" class="counter-box">
          <div class="counter-wrap">
            <h2 class="counter plus" data-number="43"></h2>
            <span>+</span>
          </div>
          <p>Daily content pieces</p>
        </div>
      </div>
      <div class="col-md-4">
        <div id="counter-box" class="counter-box">
          <div class="counter-wrap">
            <h2 class="counter percentage" data-number="54231"></h2>
            <span></span>
          </div>
          <p>Users per day</p>
        </div>
      </div>
      <div class="col-md-4">
        <div id="counter-box" class="counter-box">
          <div class="counter-wrap">
            <h2 class="counter plus" data-number="12"></h2>
            <span>+</span>
          </div>
          <p>Featured articles</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- counter-section-end -->

<!-- call-to-action-section-start -->

<section class="call-to-action-section">
  <div class="container">
    <div class="row text-center comman-callto-action">
      <h2>Sign up now</h2>
      <div class="editor-design"><p>Stay tuned with our latest offers and updates</p></div>
      <!-- <button class="btn navyblue-btn mt-2">Signup</button>              -->
    </div>
  </div>
</section>
<!-- call-to-action-section-end -->

<!-- call-to-action-section-start -->
<section class="call-to-action-section">
  <div class="container">
    <div class="row text-center comman-callto-action">
      <h2>Make it super awesome with this headline</h2>
      <div class="editor-design"><p>Billions upon billions bits of moving fluff invent the universe science rogue Rig Veda, orion's sword rich in heavy atoms</p></div>
      <div class="d-md-flex justify-content-center px-md-5 mt-4 btn-wrap">
        <button class="btn navyblue-btn mt-2 mx-3">Button</button>
        <button class="btn btn-outline-navyblue mt-2 mx-3">Button</button>
      </div>
    </div>
  </div>
</section>
<!-- call-to-action-section-end -->

<!-- three-col-testimonial-section-start -->
<section class="three-col-testimonial-section">
  <div class="container">
    <div class="testimonial-wrap">
      <div class="testimonial-card">
        <div class="testimonial-card-inner">
          <div class="d-flex align-items-center testimonial-header">
            <div class="user-avtar avtar me-4">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/avatar.png" alt="">
            </div>
            <div class="d-flex flex-column">
              <h6 class="light-gray-color">Leslie Alexander</h6>
              <span>Creative Director, Amazon</span>
            </div>
          </div>
          <div class="testimonial-content">
            White dwarf a still more glorious dawn awaits tingling of the spine
            emerged into consciousness Vangelis shores of the cosmic ocean.
            Tendrils of gossamer clouds kindling the energy hidden in matter
            concept of the number one permanence.
          </div>
          <div class="testimonial-footer text-end">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quote.png" alt="">
          </div>
        </div>
      </div>
      <div class="testimonial-card">
        <div class="testimonial-card-inner">
          <div class="d-flex align-items-center testimonial-header">
            <div class="user-avtar avtar me-4">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/avatar.png" alt="">
            </div>
            <div class="d-flex flex-column">
              <h6 class="light-gray-color">Leslie Alexander</h6>
              <span>Creative Director, Amazon</span>
            </div>
          </div>
          <div class="testimonial-content">
            White dwarf a still more glorious dawn awaits tingling of the spine
            emerged into consciousness Vangelis shores of the cosmic ocean.
            Tendrils of gossamer clouds kindling the energy hidden in matter
            concept of the number one permanence.
          </div>
          <div class="testimonial-footer text-end">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quote.png" alt="">
          </div>
        </div>
      </div>
      <div class="testimonial-card">
        <div class="testimonial-card-inner">
          <div class="d-flex align-items-center testimonial-header">
            <div class="user-avtar avtar me-4">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/avatar.png" alt="">
            </div>
            <div class="d-flex flex-column">
              <h6 class="light-gray-color">Leslie Alexander</h6>
              <span>Creative Director, Amazon</span>
            </div>
          </div>
          <div class="testimonial-content">
            White dwarf a still more glorious dawn awaits tingling of the spine
            emerged into consciousness Vangelis shores of the cosmic ocean.
            Tendrils of gossamer clouds kindling the energy hidden in matter
            concept of the number one permanence.
          </div>
          <div class="testimonial-footer text-end">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quote.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- three-col-testimonial-section-end -->


<!-- two-col-testimonial-section-start -->
<section class="two-col-testimonial-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-4 testimonial-left-content mb-5 mb-md-0">
        <h3>See what clients say about us</h3>
        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
      </div>
      <div class="col-md-6 col-lg-8">
        <div class="two-col-testimonial-slider">
          <div class="testimonial-card">
            <div class="testimonial-card-inner">
              <div class="d-flex align-items-center testimonial-header">
                <div class="user-avtar avtar me-4">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/avatar.png" alt="">
                </div>
                <div class="d-flex flex-column">
                  <h6 class="light-gray-color">Leslie Alexander</h6>
                  <span>Creative Director, Amazon</span>
                </div>
              </div>
              <div class="testimonial-content">
                White dwarf a still more glorious dawn awaits tingling of the spine
                emerged into consciousness Vangelis shores of the cosmic ocean.
                Tendrils of gossamer clouds kindling the energy hidden in matter
                concept of the number one permanence.
              </div>
              <div class="testimonial-footer text-end">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quote.png" alt="">
              </div>
            </div>
          </div>
          <div class="testimonial-card">
            <div class="testimonial-card-inner">
              <div class="d-flex align-items-center testimonial-header">
                <div class="user-avtar avtar me-4">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/avatar.png" alt="">
                </div>
                <div class="d-flex flex-column">
                  <h6 class="light-gray-color">Leslie Alexander</h6>
                  <span>Creative Director, Amazon</span>
                </div>
              </div>
              <div class="testimonial-content">
                White dwarf a still more glorious dawn awaits tingling of the spine
                emerged into consciousness Vangelis shores of the cosmic ocean.
                Tendrils of gossamer clouds kindling the energy hidden in matter
                concept of the number one permanence.
              </div>
              <div class="testimonial-footer text-end">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quote.png" alt="">
              </div>
            </div>
          </div>
          <div class="testimonial-card">
            <div class="testimonial-card-inner">
              <div class="d-flex align-items-center testimonial-header">
                <div class="user-avtar avtar me-4">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/avatar.png" alt="">
                </div>
                <div class="d-flex flex-column">
                  <h6 class="light-gray-color">Leslie Alexander</h6>
                  <span>Creative Director, Amazon</span>
                </div>
              </div>
              <div class="testimonial-content">
                White dwarf a still more glorious dawn awaits tingling of the spine
                emerged into consciousness Vangelis shores of the cosmic ocean.
                Tendrils of gossamer clouds kindling the energy hidden in matter
                concept of the number one permanence.
              </div>
              <div class="testimonial-footer text-end">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quote.png" alt="">
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
<!-- two-col-testimonial-section-end -->

<!-- full-width-section-start -->
<section class="full-width-section light-blue-bg">
  <div class="container">
    <div class="row full-width-innerwrap text-center">
      <h2>Make it super awesome <br> with this headline</h2>
      <div class="editor-design">
      <div class="editor-design"><p>Realm of the galaxies across the centuries the carbon in our apple pies <br> vanquish the impossible</p></div>
        <div class="d-md-flex justify-content-center px-md-5 mt-4 btn-wrap">
          <button class="btn navyblue-btn mt-2 mx-3">Button</button>
          <button class="btn btn-outline-navyblue mt-2 mx-3">Button</button>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- full-width-section-end -->

<section class="pricing-section">
  <div class="container">
    <div class="pricing-section-inner-wrap">
      <div class="text-center mb-md-2 pb-md-2 mb-lg-5 pb-lg-5">
        <h4 class="dark">Pricing</h4>
        <h2>Make it yours today</h2>
        <div class="editor-design"> <p>All packages come with a 30 day money back gurantee!</p></div>
      </div>
      <div class="row gy-5 g-md-5">
        <div class="col-md-6 col-lg-4">
          <div class="card box-shadow">
            <div class="card-header">
              <h5>Starter</h5>
              <h2 class="card-title pricing-card-title"><sup>$</sup>10<small>/ mo</small></h2> 
            </div>
            <div class="card-body pt-0">                           
              <ul>
                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/check-icon.svg" alt=""> <span>Single domain</span></li>
                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/check-icon.svg" alt=""> <span>Single domain</span></li>
                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/check-icon.svg" alt=""> <span>Single domain</span></li>
                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/check-icon.svg" alt=""> <span>Single domain</span></li>
                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/check-icon.svg" alt=""> <span>Single domain</span></li>
                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/check-icon.svg" alt=""> <span>Single domain</span></li>                
              </ul>
            </div>
            <div class="card-footer">
              <button class="btn navyblue-btn mt-2 ms-5">Subscribe</button>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="card box-shadow">
            <div class="card-header">
              <h5>Starter</h5>
              <h2 class="card-title pricing-card-title"><sup>$</sup>10<small>/ mo</small></h2> 
            </div>
            <div class="card-body pt-0">                           
              <ul>
                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/check-icon.svg" alt=""> <span>Single domain</span></li>
                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/check-icon.svg" alt=""> <span>Single domain</span></li>
                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/check-icon.svg" alt=""> <span>Single domain</span></li>
                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/check-icon.svg" alt=""> <span>Single domain</span></li>
                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/check-icon.svg" alt=""> <span>Single domain</span></li>
                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/check-icon.svg" alt=""> <span>Single domain</span></li>                
              </ul>
            </div>
            <div class="card-footer">
              <button class="btn navyblue-btn mt-2 ms-5">Subscribe</button>
            </div>
          </div>
        </div>

       <div class="col-md-6 col-lg-4">
          <div class="card box-shadow">
            <div class="card-header">
              <h5>Starter</h5>
              <h2 class="card-title pricing-card-title"><sup>$</sup>10<small>/ mo</small></h2> 
            </div>
            <div class="card-body pt-0">                           
              <ul>
                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/check-icon.svg" alt=""> <span>Single domain</span></li>
                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/check-icon.svg" alt=""> <span>Single domain</span></li>
                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/check-icon.svg" alt=""> <span>Single domain</span></li>
                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/check-icon.svg" alt=""> <span>Single domain</span></li>
                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/check-icon.svg" alt=""> <span>Single domain</span></li>
                <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/check-icon.svg" alt=""> <span>Single domain</span></li>                
              </ul>
            </div>
            <div class="card-footer">
              <button class="btn navyblue-btn mt-2 ms-5">Subscribe</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="request-quote-section comman-callto-action">
	<div class="container">
		<div class="text-center mb-md-2 pb-md-2 mb-lg-4 pb-lg-3">
			<h2>Request a quote</h2>
			<div class="editor-design">
				<p>If your company requires custom features and premuim support, we offer solutions to startups and big corporations.</p>
			</div>
    </div>
    <form>
      
    </form>		
	</div>
</section>
<section class="signup-section">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-8">
				<div class="text-left signup-content">
					<h4 class="dark">Short headline</h4>
					<h2>Super awesome headline</h2>
					<div class="editor-design">
						<p>Realm of the galaxies across the centuries the carbon in our apple pies vanquish the impossible another world venture.</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-4">
				<div class="form-wrap">
					<form>
						<h2 class="white">Signup</h2>						
					</form>
				</div>
			</div>
		</div>
	</div>
</section>


<?php
get_footer();
?>