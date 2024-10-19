<?php
include(__DIR__ . '/components/header.php');
include(__DIR__ . '/components/breadcrumb-area.php');
echo renderBreadcrumbArea('Kontaktirajte nas', "Radno vrijeme: ".OFFICE_HOURS_START." - ".OFFICE_HOURS_END);
?>

    <!-- contact info area start here -->
      <section class="bd-contact-info-area pt-120 pb-95">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="bd-contact-info-wrap mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                     <div class="bd-contact-info">
                        <div class="bd-contact-info-content">
                           <div class="bd-contact-info-icon cat-1">
                              <a href="tel:<?php echo MOBILE; ?>"><i class="flaticon-phone-call"></i></a>
                           </div>
                           <h6><a href="tel:<?php echo MOBILE; ?>"><?php echo MOBILE; ?></a></h6>
                           <h6><a href="tel:<?php echo PHONE; ?>"><?php echo PHONE; ?></a></h6>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="bd-contact-info-wrap mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                     <div class="bd-contact-info">
                        <div class="bd-contact-info-content">
                           <div class="bd-contact-info-icon cat-2">
                              <a href="https://www.google.com/maps/search/?api=1&query=Varaždinska+ulica+12,+Otok+Virje,+42208+Cestica" target="_blank"><i class="flaticon-location-pin"></i></a>
                           </div>
                           <h6><a href="https://www.google.com/maps/search/?api=1&query=Varaždinska+ulica+12,+Otok+Virje,+42208+Cestica" target="_blank">Vrtić Medo </br><?php echo ADDRESS; ?></br><?php echo POSTAL_INFO; ?></a></h6>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-12">
                  <div class="bd-contact-info-wrap mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                     <div class="bd-contact-info">
                        <div class="bd-contact-info-content">
                           <div class="bd-contact-info-icon cat-3">
                              <a href="mailto:<?php echo INFO_MAIL; ?>"><i class="flaticon-email"></i></a>
                           </div>
                           <h6><a href="mailto:<?php echo INFO_MAIL; ?>"><?php echo INFO_MAIL; ?></a></h6>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- contact info area end here-->

      <!-- contact form area start here  -->
      <section class="bd-contact-area pb-60">
         <div class="container">
            <div class="row">
               <div class="col-xl-6 mb-60">
                  <div class="bd-contact-form wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">
                     <h3 class="bd-contact-form-title mb-25">Pošaljite nam poruku</h3>
                     <form id="contact-form">
                        <div class="row">
                           <div class="col-md-6">
                                 <div class="bd-contact-input mb-30">
                                    <label for="name">Ime <sup><i class="fa-solid fa-star-of-life"></i></sup></label>
                                    <input id="name" name="name" type="text" required>
                                 </div>
                           </div>
                           <div class="col-md-6">
                                 <div class="bd-contact-input mb-30">
                                    <label for="email">E-mail <sup><i class="fa-solid fa-star-of-life"></i></sup></label>
                                    <input id="email" name="email" type="email" required>
                                 </div>
                           </div>
                           <div class="col-md-6">
                                 <div class="bd-contact-input mb-30">
                                    <label for="phone">Telefon <sup><i class="fa-solid fa-star-of-life"></i></sup></label>
                                    <input id="phone" name="phone" type="text">
                                 </div>
                           </div>
                           <div class="col-md-6">
                                 <div class="bd-contact-input mb-30">
                                    <label for="subject">Predmet <sup><i class="fa-solid fa-star-of-life"></i></sup></label>
                                    <select name="subject" id="subject" class="bd-nice-select" required>
                                       <option value="" disabled selected>Odaberite predmet</option>
                                       <option>Upisi</option>
                                       <option>Jaslice</option>
                                       <option>Vrtić</option>
                                       <option>Ostalo</option>
                                    </select>
                                 </div>
                           </div>
                           <div class="col-md-12">
                                 <div class="bd-contact-input mb-20">
                                    <label for="textarea">Poruka <sup><i class="fa-solid fa-star-of-life"></i></sup></label>
                                    <textarea name="textarea" id="textarea" required></textarea>
                                 </div>
                           </div>
                           <div class="col-md-12">
                              <div class="bd-contact-agree-btn">
                                 <button type="submit" class="bd-btn">
                                       <span class="bd-btn-inner">
                                          <span class="bd-btn-normal">Pošalji</span>
                                          <span class="bd-btn-hover">Pošalji</span>
                                       </span>
                                 </button>
                                 <span id="form-message"></span> <!-- Element to display messages -->
                              </div>
                           </div>
                        </div>
                     </form>
                     <script>
                        $(document).ready(function() {
                              $('#contact-form').on('submit', function(event) {
                                 console.log("Form submitted via AJAX");
                                 event.preventDefault();
                                 var formData = $(this).serialize();

                                 $.ajax({
                                    type: 'POST',
                                    url: 'assets/mail.php',
                                    data: formData,
                                    success: function(response) {
                                          $('#form-message').text(response).css('color', 'green');
                                    },
                                    error: function(xhr, status, error) {
                                       var errorMsg = xhr.responseText || 'Greška prilikom slanja poruke. Pokušajte ponovo.'; 
                                       $('#form-message').text(errorMsg).css('color', 'red');                                    }
                                 });
                              });
                        });
                     </script>
                  </div>
               </div>
               <div class="col-xl-6 mb-60">
                  <div class="bd-contact-map wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                     <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14596.899807208923!2d90.3654215!3d23.8461445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1673765392297!5m2!1sen!2sbd"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                     </iframe>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- contact form area end here  -->

      <?php include(__DIR__ . '/components/newsletter-subscribe.php'); ?>

   </main>
<?php include(__DIR__ . '/components/footer.php'); ?>