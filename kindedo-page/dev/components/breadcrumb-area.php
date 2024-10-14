<?php
require_once __DIR__ . '/../config.php';
function renderBreadcrumbArea($siteName, $subtitle = "") {
    // Ensure input is safely echoed
    $safeSiteName = htmlspecialchars($siteName, ENT_QUOTES, 'UTF-8');
    $safeSubtitle = htmlspecialchars($subtitle, ENT_QUOTES, 'UTF-8');

    $shape1 = genFilePath('assets/img/shape/curved-line-2.png');
    $shape2 = genFilePath('assets/img/shape/white-curved-line.png');


    return <<<HTML
      <section class="bd-breadcrumb-area p-relative fix theme-bg">
         <!-- breadcrumb background image -->
         <div class="bd-breadcrumb-bg" data-background="assets/img/bg/breadcrumb-bg.jpg"></div>
         <div class="bd-breadcrumb-wrapper mb-60 p-relative">
            <div class="container">
               <div class="bd-breadcrumb-shape d-none d-sm-block p-relative">
                  <div class="bd-breadcrumb-shape-1">
                     <img src="{$shape1}" alt="img not found!">
                  </div>
                  <div class="bd-breadcrumb-shape-2">
                     <img src="{$shape2}" alt="img not found!">
                  </div>
               </div>
               <div class="row justify-content-center">
                  <div class="col-xl-10">
                     <div class="bd-breadcrumb d-flex align-items-center justify-content-center">
                        <div class="bd-breadcrumb-content text-center">
                           <h1 class="bd-breadcrumb-title">{$safeSiteName}</h1>
                           <div>
                              <span>{$safeSubtitle}</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="bd-wave-wrapper bd-wave-wrapper-3">
            <div class="bd-wave bd-wave-3"></div>
            <div class="bd-wave bd-wave-3"></div>
         </div>
      </section>
    HTML;
    }

    // Example usage
    // include 'components/breadcrumb-area.php';
    // echo renderBreadcrumbArea('About us', 'Rando subtitle');
 ?>