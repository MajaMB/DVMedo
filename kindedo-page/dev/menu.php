<?php 
    #todo: when in small schrene, the table isnt displayed correctly. I want it to turn into a day by day list  
    include('components/header.php'); 
    include('components/breadcrumb-area.php');
    echo renderBreadcrumbArea('Jelovnik');

    // Function to get the start (Monday) and end (Friday) dates of a week
    function getWeekRange($weeksAhead = 0, $format = 'dmY') {
        $start = new DateTime();
        $start->setISODate($start->format('o'), $start->format('W') + $weeksAhead, 1); // Monday
        $end = clone $start;
        $end->modify('+4 days'); // Friday
        return [
            'start' => $start->format($format),
            'end' => $end->format($format)
        ];
    }

    $currentWeekRange = getWeekRange(0,'d.m.Y');     // For the current week
    $nextWeekRange = getWeekRange(1,'d.m.Y');       // For the next week
    
    $currentWeekFile = 'food-menu/' . getWeekRange(0,'dmY')['start'] . '.yml';
    $nextWeekFile = 'food-menu/' . getWeekRange(1,'dmY')['start'] . '.yml';
?>
<style>
    .centered-message {
        text-align: center; /* Center the text within its container */
        margin-top: 20px;  /* Add some top margin if needed */
    }
</style>

<main>
    <span></span>
    <div class="col-12">
        <div class="bd-routine-2-nav">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="all-class-tab-Ovaj_tjedan" data-bs-toggle="tab" data-bs-target="#all-class-Ovaj_tjedan" type="button" role="tab" aria-controls="all-class-Ovaj_tjedan" aria-selected="true">
                        <?php echo $currentWeekRange['start'] . ' - ' . $currentWeekRange['end']; ?>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="all-class-tab-Idući_tjedan" data-bs-toggle="tab" data-bs-target="#all-class-Idući_tjedan" type="button" role="tab" aria-controls="all-class-Idući_tjedan" aria-selected="false">
                        <?php echo $nextWeekRange['start'] . ' - ' . $nextWeekRange['end']; ?>
                    </button>
                </li>
            </ul>
        </div>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade active show" id="all-class-Ovaj_tjedan" role="tabpanel" aria-labelledby="all-class-tab-Ovaj_tjedan">
                <style></style>
                <?php 
                    include 'components/meal-schedule.php';
                    if (file_exists($currentWeekFile)) {
                        echo renderMealSchedule($currentWeekFile);
                    } else {
                        echo "<h4 class='centered-message'>Meni za odabrani tjedan trenutno nije dostupan</h4>";
                    }
                ?>
            </div>
            <div class="tab-pane fade" id="all-class-Idući_tjedan" role="tabpanel" aria-labelledby="all-class-tab-Idući_tjedan">
                <style></style>
                <?php 
                    if (file_exists($nextWeekFile)) {
                        echo renderMealSchedule($nextWeekFile);
                    } else {
                        echo "<h4 class='centered-message'>Meni za odabrani tjedan trenutno nije dostupan</h4>";
                    }
                ?>
            </div>
        </div>
    </div>
</main>

<?php include('components/footer.php'); ?>