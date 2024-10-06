<?php
require __DIR__ . '/../vendor/autoload.php';
use Symfony\Component\Yaml\Yaml;


function renderMealSchedule($mdFilePath) {
    // Parse the YAML file
    $mealData = Yaml::parseFile($mdFilePath);

    // HTML output
    return <<<HTML
        <style>
        .tooltip-icon {
            display: inline-block;
            position: relative;
            cursor: pointer;
        }

        .tooltip-text {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            width: 100%; /* Adjust width appropriately */
            background-color: #333;
            color: #fff;
            padding: 5px;
            border-radius: 3px;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.2s;
            z-index: 10;
            word-break: break-word;
        }

        /* By default, place above the icon */
        .tooltip-icon[data-tooltip-position="above"] .tooltip-text {
            bottom: 100%; /* Position above */
            top: auto;
            margin-bottom: 5px;
        }

        /* Fallback to below, if specified */
        .tooltip-icon[data-tooltip-position="below"] .tooltip-text {
            top: 100%; /* Position below */
            bottom: auto;
            margin-top: 5px;
        }

        .tooltip-icon:hover .tooltip-text {
            opacity: 1;
            visibility: visible;
        }
        </style>

        <div class="bd-routine-2">
            <div class="table-responsive d-none d-md-block">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" class="clr-5">Ponedjeljak</th>
                            <th scope="col" class="clr-4">Utorak</th>
                            <th scope="col" class="clr-5">Srijeda</th>
                            <th scope="col" class="clr-4">Četvrtak</th>
                            <th scope="col" class="clr-5">Petak</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="clr-5">
                                doručak
                                <span>{$mealData['ponedjeljak']['dorucak']['objed']}</span>
                                <span class="tooltip-icon">
                                    &#9432;
                                    <span class="tooltip-text">Alergeni: <br>{$mealData['ponedjeljak']['dorucak']['alergeni']}</span>
                                </span>
                            </td>
                            <td class="clr-4">
                                doručak
                                <span>{$mealData['utorak']['dorucak']['objed']}</span>
                                <span class="tooltip-icon">
                                    &#9432;
                                    <span class="tooltip-text">Alergeni: <br>{$mealData['utorak']['dorucak']['alergeni']}</span>
                                </span>
                            </td>
                            <td class="clr-5">
                                doručak
                                <span>{$mealData['srijeda']['dorucak']['objed']}</span>
                                <span class="tooltip-icon">
                                    &#9432;
                                    <span class="tooltip-text">Alergeni: <br>{$mealData['srijeda']['dorucak']['alergeni']}</span>
                                </span>
                            </td>
                            <td class="clr-4">
                                doručak
                                <span>{$mealData['cetvrtak']['dorucak']['objed']}</span>
                                <span class="tooltip-icon">
                                    &#9432;
                                    <span class="tooltip-text">Alergeni: <br>{$mealData['cetvrtak']['dorucak']['alergeni']}</span>
                                </span>
                            </td>
                            <td class="clr-5">
                                doručak
                                <span>{$mealData['petak']['dorucak']['objed']}</span>
                                <span class="tooltip-icon">
                                    &#9432;
                                    <span class="tooltip-text">Alergeni: <br>{$mealData['petak']['dorucak']['alergeni']}</span>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="clr-5">
                                jutarnja užina
                                <span>{$mealData['ponedjeljak']['jutarnjaUzina']['objed']}</span>
                                <span class="tooltip-icon">
                                    &#9432;
                                    <span class="tooltip-text">Alergeni: <br>{$mealData['ponedjeljak']['jutarnjaUzina']['alergeni']}</span>
                                </span>
                            </td>
                            <td class="clr-4">
                                jutarnja užina
                                <span>{$mealData['utorak']['jutarnjaUzina']['objed']}</span>
                                <span class="tooltip-icon">
                                    &#9432;
                                    <span class="tooltip-text">Alergeni: <br>{$mealData['utorak']['jutarnjaUzina']['alergeni']}</span>
                                </span>
                            </td>
                            <td class="clr-5">
                                jutarnja užina
                                <span>{$mealData['srijeda']['jutarnjaUzina']['objed']}</span>
                                <span class="tooltip-icon">
                                    &#9432;
                                    <span class="tooltip-text">Alergeni: <br>{$mealData['srijeda']['jutarnjaUzina']['alergeni']}</span>
                                </span>
                            </td>
                            <td class="clr-4">
                                jutarnja užina
                                <span>{$mealData['cetvrtak']['jutarnjaUzina']['objed']}</span>
                                <span class="tooltip-icon">
                                    &#9432;
                                    <span class="tooltip-text">Alergeni: <br>{$mealData['cetvrtak']['jutarnjaUzina']['alergeni']}</span>
                                </span>
                            </td>
                            <td class="clr-5">
                                jutarnja užina
                                <span>{$mealData['petak']['jutarnjaUzina']['objed']}</span>
                                <span class="tooltip-icon">
                                    &#9432;
                                    <span class="tooltip-text">Alergeni: <br>{$mealData['petak']['jutarnjaUzina']['alergeni']}</span>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="clr-5">
                                ručak
                                <span>{$mealData['ponedjeljak']['rucak']['objed']}</span>
                                <span class="tooltip-icon">
                                    &#9432;
                                    <span class="tooltip-text">Alergeni: <br>{$mealData['ponedjeljak']['rucak']['alergeni']}</span>
                                </span>
                            </td>
                            <td class="clr-4">
                                ručak
                                <span>{$mealData['utorak']['rucak']['objed']}</span>
                                <span class="tooltip-icon">
                                    &#9432;
                                    <span class="tooltip-text">Alergeni: <br>{$mealData['utorak']['rucak']['alergeni']}</span>
                                </span>
                            </td>
                            <td class="clr-5">
                                ručak
                                <span>{$mealData['srijeda']['rucak']['objed']}</span>
                                <span class="tooltip-icon">
                                    &#9432;
                                    <span class="tooltip-text">Alergeni: <br>{$mealData['srijeda']['rucak']['alergeni']}</span>
                                </span>
                            </td>
                            <td class="clr-4">
                                ručak
                                <span>{$mealData['cetvrtak']['rucak']['objed']}</span>
                                <span class="tooltip-icon">
                                    &#9432;
                                    <span class="tooltip-text">Alergeni: <br>{$mealData['cetvrtak']['rucak']['alergeni']}</span>
                                </span>
                            </td>
                            <td class="clr-5">
                                ručak
                                <span>{$mealData['petak']['rucak']['objed']}</span>
                                <span class="tooltip-icon">
                                    &#9432;
                                    <span class="tooltip-text">Alergeni: <br>{$mealData['petak']['rucak']['alergeni']}</span>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="clr-5">
                                popodnevna užina
                                <span>{$mealData['ponedjeljak']['popodnevnaUzina']['objed']}</span>
                                <span class="tooltip-icon "data-tooltip-position="above">
                                    &#9432;
                                    <span class="tooltip-text">Alergeni: <br>{$mealData['ponedjeljak']['popodnevnaUzina']['alergeni']}</span>
                                </span>
                            </td>
                            <td class="clr-4">
                                popodnevna užina
                                <span>{$mealData['utorak']['popodnevnaUzina']['objed']}</span>
                                <span class="tooltip-icon "data-tooltip-position="above">
                                    &#9432;
                                    <span class="tooltip-text">Alergeni: <br>{$mealData['utorak']['popodnevnaUzina']['alergeni']}</span>
                                </span>
                            </td>
                            <td class="clr-5">
                                popodnevna užina
                                <span>{$mealData['srijeda']['popodnevnaUzina']['objed']}</span>
                                <span class="tooltip-icon "data-tooltip-position="above">
                                    &#9432;
                                    <span class="tooltip-text">Alergeni: <br>{$mealData['srijeda']['popodnevnaUzina']['alergeni']}</span>
                                </span>
                            </td>
                            <td class="clr-4">
                                popodnevna užina
                                <span>{$mealData['cetvrtak']['popodnevnaUzina']['objed']}</span>
                                <span class="tooltip-icon "data-tooltip-position="above">
                                    &#9432;
                                    <span class="tooltip-text">Alergeni: <br>{$mealData['cetvrtak']['popodnevnaUzina']['alergeni']}</span>
                                </span>
                            </td>
                            <td class="clr-5">
                                popodnevna užina
                                <span>{$mealData['petak']['popodnevnaUzina']['objed']}</span>
                                <span class="tooltip-icon "data-tooltip-position="above">
                                    &#9432;
                                    <span class="tooltip-text">Alergeni: <br>{$mealData['petak']['popodnevnaUzina']['alergeni']}</span>
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
   
    HTML;
    }

    // Example usage
    // include 'components/meal-schedule.php';
    // echo renderMealSchedule('menu/01122024.md');
    ?>
