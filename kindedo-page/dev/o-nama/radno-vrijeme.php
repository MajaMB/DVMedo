<?php 
    include(__DIR__ . '/../components/header.php'); 
    include(__DIR__ . '/../components/breadcrumb-area.php');
    echo renderBreadcrumbArea('Radno vrijeme', OFFICE_HOURS_START . " - " . OFFICE_HOURS_END);
?>

<main>
    <section class="bd-program-details-widget pb-30">
        <div class="container">
            <div class="row">
                <div class="col mb-20">
                    <div class="bd-program-details-widget-content theme-bg-6 wow fadeInRight" data-wow-duration="1s"
                         data-wow-delay=".3s">
                        <h3 class="bd-program-details-widget-title mb-20">Radno Vrijeme</h3>
                        <p>
                            <strong>Redovno Radno Vrijeme:</strong><br>
                            Naš vrtić otvoren je svakog radnog dana od ponedjeljka do petka. Radno vrijeme je od <?php echo OFFICE_HOURS_START?> do <?php echo OFFICE_HOURS_END?> sati.
                        </p>
                        <p>
                            <strong>Vikendi i Praznici:</strong><br>
                            Tijekom vikenda i državnih praznika, vrtić je zatvoren. Molimo vas da planirate unaprijed uzimajući ovo u obzir.
                        </p>
                        <p>
                            <strong>Vrijeme dovođenje i odvođenja:</strong><br>
                            <ul>
                                <li class="ml-30"> Vrijeme dovođenje djece: Od <?php echo DROPOF_HOURS_START?> do <?php echo DROPOF_HOURS_END?> sati</li>
                                <li class="ml-30"> Vrijeme odvođenja djece: Od <?php echo PICKUP_HOURS_START?> do <?php echo PICKUP_HOURS_END?> sati</li>
                            </ul>
                        </p>
                        <p>
                            <strong>Kontakt Informacije:</strong><br>
                            Za dodatne informacije o radnom vremenu ili posebnim dogovorima, slobodno kontaktirajte naš ured:<br>
                            <ul>
                                <li class="ml-30"> Telefon: <?php echo PHONE?> ili <?php echo MOBILE?></li>
                                <li class="ml-30"> E-pošta: <?php echo INFO_MAIL?></li>
                            </ul>
                        </p>
                        <p>
                            <strong>Napomene:</strong><br>
                            Roditelji će biti pravovremeno obaviješteni o bilo kakvim izvanrednim promjenama radnog vremena putem e-pošte ili obavijesti na našoj web stranici.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>





</main>


<?php include(__DIR__ . '/../components/newsletter-subscribe.php'); ?>
<?php include(__DIR__ . '/../components/footer.php'); ?>