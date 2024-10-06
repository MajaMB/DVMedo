<?php
   function addWhatWeOffer($iconClass, $title, $description, $link="", $backgroundImage = 'assets/img/bg/bg-shape.jpg') {
       return "
       <div class=\"swiper-slide\">
           <div class=\"bd-class-wrapper text-center\">
               <div class=\"bd-class-bg\">
                   <img src=\"{$backgroundImage}\" alt=\"img not found!\">
               </div>
               <div class=\"bd-class text-center\">
                   <div class=\"bd-class-icon\">
                       <i class=\"{$iconClass}\"></i>
                   </div>
                   <div class=\"bd-class-content\">
                       <h3 class=\"bd-class-title\"><a href=\"{$link}\">{$title}</a></h3>
                       <p>{$description}</p>
                       <div class=\"bd-class-btn\">
                           <a href=\"{$link}\" class=\"bd-btn bd-btn-grey\">
                               <span class=\"bd-btn-inner\">
                                   <span class=\"bd-btn-normal\">Više</span>
                                   <span class=\"bd-btn-hover\">Više</span>
                               </span>
                           </a>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       ";
   }

   /* how to use: includ this block inside HTML
   <?php include('components/we-offer-tile.php');
   echo addWhatWeOffer('flaticon-sports', 'Sports Class', 'Each day at Mother’s Pride is a cele bration! We celebrate all.');
   echo addWhatWeOffer('flaticon-drum', 'Music Class', 'Indoor and out door activities that cater to all domains development.');
   echo addWhatWeOffer('flaticon-color-palette', 'Drawing Class', 'Our special rhyme books also them to phonetic sound of the words.');

   ?>*/
   ?>

