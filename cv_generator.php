<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// if (!defined('WPINC')) {
//     die;
// }

// function cv_generator_shortcode()
// {
//     wp_enqueue_style('style_file', plugin_dir_url(__FILE__) . 'css/cv_generator.css');
?>
<html style="height: 100%;">

<head>
    <meta charset="utf-8" />
    <link rel="icon" href="/favicon.jpg" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
    <link rel="manifest" href="/manifest.json" />
</head>

<body style="height: 100%;">
    <form action="generate_pdf.php" id="pro-form" enctype="multipart/form-data" method="POST">
        <div style=" height: 100%;">
            <div class="wrapper" style="">
                <div class="column"
                    style="padding: 3rem 4.5rem 4.5rem 4rem;overflow-y: scroll; scroll-snap-type: y mandatory;">
                    <div class="form_head">
                        <div class="cv_title">
                            <h1>CV Generator</h1>
                        </div>
                    </div>

                    <div class="progress-wrap">
                        <p class="progress-message" id="progress-message">Fortschritt</p>
                        <progress max="100" value="0" id="progress"></progress>
                    </div>
                    <!-- <div class="progress">
                        <p>Fortschritt</p>
                    </div> -->
                    <div class="cv_content">
                        <h2>Persönliche Daten</h2>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputFirstName">Vorname</label>
                                <input type="text" name="vorname" required="required" class="form-control"
                                    id="inputFirstName" onkeyup="showFirstName()">
                                <span class="border"></span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputLastName">Nachname</label>
                                <input type="text" name="nachname" required="required" class="form-control"
                                    id="inputLastName" onkeyup="showLastName()">
                                <span class="border"></span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail">Email</label>
                                <input type="text" name="email" required="required" class="form-control" id="inputEMail"
                                    onkeyup="showEMail()">
                                <span class="border"></span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPhone">Telefon</label>
                                <input type="text" name="telefon" required="required" class="form-control"
                                    id="inputPhone" onkeyup="showPhone()">
                                <span class="border"></span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputOccupation">Besetzung</label>
                                <input type="text" name="besetzung" required="required" class="form-control"
                                    id="inputOccupation" onkeyup="showOccupation()">
                                <span class="border"></span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputWebsite">Homepage</label>
                                <input type="text" name="website" class="form-control" id="inputWebsite"
                                    onkeyup="showWebsite()">
                                <span class="border"></span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="uploadImage">Image</label>
                                <input type="file" name="image" class="fileContainer"
                                    onchange="readURL(this);return false" id="uploadImage" />
                            </div>
                        </div>
                        <!-- <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputFirstName">Geburtsdatum</label>
                                <input type="text" name="birthday" class="form-control" id="inputBirthday"
                                    onkeyup="showBirthday()">
                            </div>
                        </div> -->
                        <div id="displayLand" style="display:none">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputLand">Land</label>
                                    <input type="text" name="land" required="required" class="form-control"
                                        id="inputLand" onkeyup="showLand()">
                                    <span class="border"></span>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputCity">Stadt</label>
                                    <input type="text" name="stadt" required="required" class="form-control"
                                        id="inputCity" onkeyup="showCity()">
                                    <span class="border"></span>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputAddress">Adresse</label>
                                    <input type="text" name="adresse" required="required" class="form-control"
                                        id="inputAddress" onkeyup="showAddress()">
                                    <span class="border"></span>
                                </div>
                            </div>
                        </div>
                        <div class="additionalDetailsToggle">
                            <i class="bi bi-plus-circle"></i>
                            <span onclick="showHideTextBox(); return false" id="showHide"> Zusätzliche Details
                                anzeigen</span>
                        </div>

                        <h2>Fahrerlaubnis</h2>
                        <label>Kurze Zusammenfassung Ihrer allgemeinen Erfahrung. </label>
                        <textarea required="required" type="text" name="licence" class="form-control" id="inputLicence"
                            onkeyup="showLicence()"></textarea>

                        <h2>Berufserfahrung</h2>
                        <label>Kurze Zusammenfassung Ihrer allgemeinen Erfahrung.</label>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputExperienceTitle"></label>
                                <input type="text" name="erfahrungTitle[]" class="form-control"
                                    id="inputExperienceTitle" onkeyup="showExperienceTitle()" placeholder="Titel" />
                                <span class="border"></span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputExperienceDauer"></label>
                                <input type="text" name="erfahrungDauer[]" class="form-control"
                                    id="inputExperienceDauer" onkeyup="showExperienceDauer()" placeholder="Dauer" />
                                <span class="border"></span>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputExperience"></label>
                                <textarea type="text" name="erfahrung[]" class="form-control" id="inputExperience"
                                    onkeyup="showExperience()" placeholder="mehr Informationen"></textarea>
                            </div>
                        </div>
                        <div class="container3">

                        </div>
                        <div class="additionalDetailsToggle">
                            <button class="add_form_field_Experience">Berufserfahrung hinzufügen</button>
                        </div>

                        <h2>Bildungsweg</h2>
                        <label>Geben Sie in diesem Abschnitt Ihre relevanten Erfahrungen und Daten der letzten 10 Jahre
                            an. Listen Sie zuerst Ihre letzte Position auf.</label>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputJobTitle"></label>
                                <input type="text" name="jobTitle[]" class="form-control" id="inputJobTitle"
                                    onkeyup="showJobTitle()" placeholder="Titel" />
                                <span class="border"></span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputJobDauer"></label>
                                <input type="text" name="jobDauer[]" class="form-control" id="inputJobDauer"
                                    onkeyup="showJobDauer()" placeholder="Dauer" />
                                <span class="border"></span>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputJob"></label>
                                <textarea type="text" name="job[]" class="form-control" id="inputJob"
                                    onkeyup="showJob()" placeholder="mehr Informationen"></textarea>
                            </div>
                        </div>
                        <div class="container2">

                        </div>
                        <div class="additionalDetailsToggle">
                            <button class="add_form_field_Job">Bildungsweg hinzufügen</button>
                        </div>
                        <!--#################################### MUSTER ########################## -->
                        <h2>Weiterbildung (optional)</h2>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmploymentTitel"></label>
                                <input type="text" name="EmploymentTitel[]" class="form-control"
                                    id="inputEmploymentTitel" onkeyup="showEmploymentTitel()" placeholder="Titel" />
                                <span class="border"></span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmploymentDauer"></label>
                                <input type="text" name="employmentDauer[]" class="form-control"
                                    id="inputEmploymentDauer" onkeyup="showEmploymentDauer()" placeholder="Dauer" />
                                <span class="border"></span>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputEmployment"></label>
                                <textarea type="text" name="employment[]" class="form-control" id="inputEmployment"
                                    onkeyup="showEmployment()" placeholder="mehr Informationen"></textarea>
                            </div>
                        </div>
                        <div class="container1">
                        </div>
                        <div class="additionalDetailsToggle">
                            <button class="add_form_field_Employment">Weiterbildung hinzufügen</button>
                        </div>
                        <!--#################################### MUSTER ENDE ########################## -->

                        <h2>Sprache</h2>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputLanguage1"></label>
                                <input type="text" name="inputlanguage1[]" required="required" class="form-control"
                                    id="inputLanguage1" onkeyup="showLanguage1()">
                                <span class="border"></span>
                            </div>
                            <div class="form-group col-md-6">
                                <select name="dropdownlanguage1[]" style="" id="dropdownLanguage1"
                                    onselect="showLanguage1Star()">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </div>
                        </div>
                        <div class="container4">
                        </div>
                        <div class="additionalDetailsToggle">
                            <button class="add_form_field_Language">Sprache hinzufügen</button>
                        </div>


                        <h2>Kentnisse</h2>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputKompetenz"></label>
                                <input type="text" name="inputKentnisse[]" required="required" class="form-control"
                                    id="inputKentnisse" onkeyup="showKentnisse()">
                                <span class="border"></span>
                            </div>
                            <div class="form-group col-md-6">
                                <select name="dropdownKentnisse[]" id="dropdownKentnisse1"
                                    onselect="showKentnisse1Star()">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </div>
                        </div>
                        <div class="container5">
                        </div>
                        <div class="additionalDetailsToggle">
                            <button class="add_form_field_Skills">Kenntniss hinzufügen</button>
                        </div>



                        <!-- <h2>Hobbys (optional)</h2>
                        <label></label>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputHobby"></label>
                                <textarea type="text" name="hobby" class="form-control" id="inputHobby"
                                    onkeyup="showHobby()"></textarea>
                            </div>
                        </div> -->


                    </div>
                </div>
                <div class="column" style="	overflow-y: hidden;">
                    <div class="cv_displayContent">
                        <div class="cv_wrapper">
                            <div id="resume">
                                <div class="row" style="height: 100%;">
                                    <div class="greyBackground col-sm-4" style="left: 16px;padding: 1.5em 0 0 2.5em;">
                                        <div class="row" style="padding-top:2.5em;">
                                            <div class="cv_head_left_section">
                                                <div class="section_Image">
                                                    <div class="cv_image"
                                                        style="margin-left:0.5em; margin-bottom:0.5em;">
                                                        <img class="cv_Photo" id="cv_Image" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cv_body_left_section">
                                                <div class="section_title">
                                                    <h1 style="font-size: 13px;">Über Mich</h1>
                                                    <div class="section_title__underLine" style="width: 20%;"></div>
                                                    <div class="subItem">
                                                        <!-- <h3 style="font-size: 15px;">
                                                            Adresse</h3> -->
                                                        <div class="cv_Text" style="display:inline-flex;">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                style="color:#71C4CF" height="10" fill="currentColor"
                                                                class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                                            </svg>
                                                            <p id="cv_Address" style="font-size: 10px;"></p>
                                                            <p id="cv_City" style="font-size: 10px;"></p>
                                                            <p id="cv_Land" style="font-size: 10px;"></p>
                                                        </div>
                                                    </div>
                                                    <div class="subItem">
                                                        <!-- <h3 style="font-size: 15px;">Telefon</h3> -->
                                                        <div class="cv_Text" style="display:inline-flex;">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                style="color:#71C4CF" height="10" fill="currentColor"
                                                                class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd"
                                                                    d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                                            </svg>
                                                            <p id="cv_Phone" style="font-size: 10px;"></p>
                                                        </div>
                                                    </div>
                                                    <div class="subItem">
                                                        <!-- <h3 style="font-size: 15px;">Email</h3> -->
                                                        <div class="cv_Text" style="display:inline-flex;">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                style="color:#71C4CF" height="10" fill="currentColor"
                                                                class="bi bi-envelope" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                                            </svg>
                                                            <p id="cv_EMail" style="font-size: 10px;"></p>
                                                        </div>
                                                    </div>
                                                    <div class="subItem">
                                                        <!-- <h3 style="font-size: 15px;">Telefon</h3> -->
                                                        <div class="cv_Text" style="display:inline-flex;">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                style="color:#71C4CF" height="10" fill="currentColor"
                                                                class="bi bi-link-45deg" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z" />
                                                                <path
                                                                    d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z" />
                                                            </svg>
                                                            <p id="cv_Website" style="font-size: 10px;"></p>
                                                        </div>
                                                    </div>
                                                    <div class="subItem">
                                                        <!-- <h3 style="font-size: 15px;">Email</h3> -->
                                                        <div class="cv_Text" style="display:inline-flex;">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                style="color:#71C4CF" height="10" fill="currentColor"
                                                                class="bi bi-car-front-fill" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd"
                                                                    d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679c.033.161.049.325.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.807.807 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2Zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2ZM6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2H6ZM2.906 5.189l.956-1.913A.5.5 0 0 1 4.309 3h7.382a.5.5 0 0 1 .447.276l.956 1.913a.51.51 0 0 1-.497.731c-.91-.073-3.35-.17-4.597-.17-1.247 0-3.688.097-4.597.17a.51.51 0 0 1-.497-.731Z" />
                                                            </svg>
                                                            <p id="cv_Licence" style="font-size: 10px;"></p>
                                                        </div>
                                                    </div>
                                                    <h1 style="font-size: 13px;">Sprachen</h1>
                                                    <p id="cv_Language1" style="font-size: 10px;"></p>

                                                    <h1 style="font-size: 13px;">Kentnisse</h1>
                                                    <p id="cv_Kentnisse" style="font-size: 10px;"></p>
                                                    <h1 style="font-size: 13px;">Hobbys (optional)</h1>
                                                    <p id="cv_Hobby" style="font-size: 10px;"></p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="whiteBackground col-sm-8" style="padding: 1.5em 0 0 2.5em;">

                                        <div class="row" style="padding-top:2.5em;">
                                            <div class="cv_head_right_section"
                                                style="min-width: 209px;min-height: 130px;">
                                                <div class="cv_name ">
                                                    <h1 id="cv_FirstName" style="font-size: 20px;"> </h1>
                                                    <h1 id="cv_LastName" style="font-size: 20px;"></h1>
                                                </div>
                                                <div class="cv_Birthday" style=" margin-left: 0.7em;">
                                                    <h3 id="cv_Birthday" style="font-size: 8px;color:#B5B5B6"></h3>
                                                </div>
                                                <div class="cv_Occupation">
                                                    <h3 id="cv_Occupation" style="font-size: 13px;color:#E784B1"></h3>
                                                </div>
                                            </div>
                                            <div class="cv_body_right_section">
                                                <div class="divBorderleft"></div>
                                                <div class="section_title">
                                                    <h1 style="font-size: 13px;">BERUFSERFAHRUNG</h1>
                                                    <!-- <div style="background-color:#000000; height: 0.25em;"></div> -->
                                                    <div class="cv_Experience">
                                                        <b>
                                                            <p id="cv_ExperienceTitle" style="font-size: 10px;"></p>
                                                            <p id="cv_ExperienceDauer" style="font-size: 10px;"></p>
                                                        </b>
                                                        <br />
                                                        <p id="cv_Experience" style="font-size: 10px;"></p>
                                                    </div>
                                                </div>
                                                <div class="section_title">
                                                    <h1 style="font-size: 13px;">BILDUNGSWEG</h1>
                                                    <!-- <div style="background-color:#000000; height: 0.25em;"></div> -->
                                                    <div class="cv_Job">
                                                        <b>
                                                            <p id="cv_JobTitle" style="font-size: 10px;"></p>
                                                            <p id="cv_JobDauer" style="font-size: 10px;"></p>
                                                        </b>
                                                        <br />
                                                        <p id="cv_Job" style="font-size: 10px;"></p>

                                                    </div>

                                                </div>
                                                <div class="section_title">
                                                    <h1 style="font-size: 13px;">WEITERBILDUNGEN (optional)</h1>
                                                    <!-- <div style="background-color:#000000; height: 0.25em;"></div> -->
                                                    <div class="cv_Employment">
                                                        <b>
                                                            <p id="cv_EmploymentTitel" style="font-size: 10px;"></p>
                                                            <p id="cv_EmploymentDauer" style="font-size: 10px;"></p>
                                                        </b>
                                                        <br />
                                                        <p id="cv_Employment" style="font-size: 10px;"></p>

                                                    </div>
                                                    <p id="cv_Employment" style="font-size: 10px;"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="submit" name="SubmitButton" class="submitButton" value="Herunterladen" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script>
    //##################################
    $(document).ready(function () {
        var max_fields = 10;
        var wrapper = $(".container1");
        var add_button = $(".add_form_field_Employment");

        var x = 1;
        $(add_button).click(function (e) {
            e.preventDefault();
            if (x < max_fields) {
                x++;
                $(wrapper).append('<div class="upper_div_emp"><div class="all_btn_emp"><b>Weiterbildung</b><a href="#" class="delete_emp">entfernen</a><a href="#" class="show_details_emp">Details</a></div><div class="inner_div_emp"><div class="form-row"><div class="form-group col-md-6"><label for="inputEmploymentTitel"></label><input type="text" name="EmploymentTitel[]" class="form-control" id="inputEmploymentTitel" onkeyup="showEmploymentTitel()" placeholder="Titel"><span class="border"></span></div><div class="form-group col-md-6"><label for="inputEmploymentDauer"></label><input type="text" name="employmentDauer[]" class="form-control" id="inputEmploymentDauer" onkeyup="showEmploymentDauer()" placeholder="Dauer"><span class="border"></span></div><div class="form-group col-md-12"><label for="inputEmployment"></label><textarea type="text" name="employment[]" class="form-control" id="inputEmployment" onkeyup="showEmployment()" placeholder="mehr Informationen"></textarea></div></div></div></div>'); //add input box
            } else {
                alert('Maximale Anzahl erreicht')
            }
        });

        $(document).on("click", ".delete_emp", function (e) {
            e.preventDefault();
            $(this).parents(".upper_div_emp").remove();
            x--;
            console.log(x);
        })
        $(document).on("click", ".show_details_emp", function (e) {
            e.preventDefault();
            $(this).parents(".upper_div_emp").find(".inner_div_emp").slideToggle();
            // console.log(x);
        })
        console.log(wrapper);
    });
    //##################################
    $(document).ready(function () {
        var max_fields = 10;
        var wrapper = $(".container4");
        var add_button = $(".add_form_field_Language");

        var x = 1;
        $(add_button).click(function (e) {
            e.preventDefault();
            if (x < max_fields) {
                x++;
                $(wrapper).append('<div class="upper_div_lan"><div class="all_btn_lan"><b>Sprache</b><a href="#" class="delete_lan">entfernen</a><a href="#" class="show_details_lan">Details</a></div><div class="inner_div_lan"><div class="form-row"><div class="form-group col-md-6"><label for="inputLanguage1"></label><input type="text" name="inputlanguage1[]" required="required" class="form-control"id="inputLanguage1" onkeyup="showLanguage1()"><span class="border"></span></div><div class="form-group col-md-6"> <select name="dropdownKentnisse[]" id="dropdownKentnisse1" onselect="showKentnisse1Star()"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option></select></div></div></div></div>'); //add input box
            } else {
                alert('Maximale Anzahl erreicht')
            }
        });

        $(document).on("click", ".delete_lan", function (e) {
            e.preventDefault();
            $(this).parents(".upper_div_lan").remove();
            x--;
            console.log(x);
        })
        $(document).on("click", ".show_details_lan", function (e) {
            e.preventDefault();
            $(this).parents(".upper_div_lan").find(".inner_div_lan").slideToggle();
            // console.log(x);
        })
        console.log(wrapper);
    });
    $(document).ready(function () {
        var max_fields = 10;
        var wrapper = $(".container5");
        var add_button = $(".add_form_field_Skills");

        var x = 1;
        $(add_button).click(function (e) {
            e.preventDefault();
            if (x < max_fields) {
                x++;
                $(wrapper).append('<div class="upper_div_kom"><div class="all_btn_kom"><b>Kenntnisse</b><a href="#" class="delete_kom">entfernen</a><a href="#" class="show_details_kom">Details</a></div><div class="inner_div_kom"><div class="form-row"><div class="form-group col-md-6"><label for="inputKentnisse"></label><input type="text" name="inputKentnisse[]" required="required" class="form-control"id="inputKentnisse" onkeyup="showKompetenz1()"><span class="border"></span></div><div class="form-group col-md-6"> <select name="dropdownKentnisse[]" id="dropdownKentnisse1" onselect="showKentnisse1Star()"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option></select></div></div></div></div>'); //add input box
            } else {
                alert('Maximale Anzahl erreicht')
            }
        });

        $(document).on("click", ".delete_kom", function (e) {
            e.preventDefault();
            $(this).parents(".upper_div_kom").remove();
            x--;
            console.log(x);
        })
        $(document).on("click", ".show_details_kom", function (e) {
            e.preventDefault();
            $(this).parents(".upper_div_kom").find(".inner_div_kom").slideToggle();
            // console.log(x);
        })
        console.log(wrapper);
    });
    //##################################
    $(document).ready(function () {
        var max_fields = 10;
        var wrapper = $(".container2");
        var add_button = $(".add_form_field_Job");

        var x = 1;
        $(add_button).click(function (e) {
            e.preventDefault();
            if (x < max_fields) {
                x++;
                $(wrapper).append('<div class="upper_div_job"><div class="all_btn_job"><b>Bildungsweg</b><a href="#" class="delete_job">entfernen</a><a href="#" class="show_details_job">Details</a></div><div class="inner_div_job"><div class="form-row"><div class="form-group col-md-6"><label for="inputJobTitle"></label><input type="text" name="jobTitle[]" class="form-control" id="inputJobTitle" onkeyup="showJobTitle()" placeholder="Titel"><span class="border"></span></div><div class="form-group col-md-6"><label for="inputJobDauer"></label><input type="text" name="jobDauer[]" class="form-control" id="inputJobDauer" onkeyup="showJobDauer()" placeholder="Dauer"><span class="border"></span></div><div class="form-group col-md-12"><label for="inputJob"></label><textarea type="text" name="job[]" class="form-control" id="inputJob" onkeyup="showJob()" placeholder="mehr Informationen"></textarea></div></div></div></div>'); //add input box
            } else {
                alert('Maximale Anzahl erreicht')
            }
        });

        $(document).on("click", ".delete_job", function (e) {
            e.preventDefault();
            $(this).parents(".upper_div_job").remove();
            x--;
            console.log(x);
        })
        $(document).on("click", ".show_details_job", function (e) {
            e.preventDefault();
            $(this).parents(".upper_div_job").find(".inner_div_job").slideToggle();
            // console.log(x);
        })
        console.log(wrapper);
    });
    //##################################
    $(document).ready(function () {
        var max_fields = 10;
        var wrapper = $(".container3");
        var add_button = $(".add_form_field_Experience");

        var x = 1;
        $(add_button).click(function (e) {
            e.preventDefault();
            if (x < max_fields) {
                x++;
                $(wrapper).append('<div class="upper_div_erfahrung"><div class="all_btn_erfahrung"><b>Berufserfahrung</b><a href="#" class="delete_erfahrung">entfernen</a><a href="#" class="show_details_erfahrung">Details</a></div><div class="inner_div_erfahrung"><div class="form-row"><div class="form-group col-md-6"><label for="inputExpTitle"></label><input type="text" name="erfahrungTitle[]" class="form-control" id="inputExpTitle" onkeyup="showExpTitle()" placeholder="Titel"><span class="border"></span></div><div class="form-group col-md-6"><label for="inputExpDauer"></label><input type="text" name="erfahrungDauer[]" class="form-control" id="inputExpDauer" onkeyup="showExpDauer()" placeholder="Dauer"><span class="border"></span></div><div class="form-group col-md-12"><label for="inputExp"></label><textarea type="text" name="erfahrung[]" class="form-control" id="inputExp" onkeyup="showExp()" placeholder="mehr Informationen"></textarea></div></div></div></div>'); //add input box
            } else {
                alert('Maximale Anzahl erreicht')
            }
        });

        $(document).on("click", ".delete_erfahrung", function (e) {
            e.preventDefault();
            $(this).parents(".upper_div_erfahrung").remove();
            x--;
            console.log(x);
        })
        $(document).on("click", ".show_details_erfahrung", function (e) {
            e.preventDefault();
            $(this).parents(".upper_div_erfahrung").find(".inner_div_erfahrung").slideToggle();
            // console.log(x);
        })
    });

    $("#pro-form input").keyup(function () {

        var numValid = 0;
        $("#pro-form input[required]").each(function () {
            if (this.validity.valid) {
                numValid++;
            }
        });

        var progress = $("#progress"),
            progressMessage = '';

        if (numValid == 0) {
            progress.attr("value", "0");
            progressMessage = "0%";
        }
        if (numValid == 1) {
            progress.attr("value", "10");
            progressMessage = "10%";
        }
        if (numValid == 2) {
            progress.attr("value", "15");
            progressMessage = "15%";
        }
        if (numValid == 3) {
            progress.attr("value", "20");
            progressMessage = "20%";
        }
        if (numValid == 4) {
            progress.attr("value", "30");
            progressMessage = "30%";
        }
        if (numValid == 5) {
            progress.attr("value", "40");
            progressMessage = "40%";
        }
        if (numValid == 6) {
            progress.attr("value", "50");
            progressMessage = "50%";
        }
        if (numValid == 7) {
            progress.attr("value", "60");
            progressMessage = "60%";
        }
        if (numValid == 8) {
            progress.attr("value", "70");
            progressMessage = "70%";
        }
        if (numValid == 9) {
            progress.attr("value", "80");
            progressMessage = "80%";
        }
        if (numValid == 10) {
            progress.attr("value", "90");
            progressMessage = "90%";
        }
        if (numValid == 11) {
            progress.attr("value", "100");
            progressMessage = "100%";
        }
        document.getElementById('progress-message').innerHTML = 'Fortschritt ' + progressMessage;


    });

    function showFirstName() {
        var x = document.getElementById("inputFirstName").value;
        document.getElementById('cv_FirstName').innerHTML = x;
    }

    function showLastName() {
        var x = document.getElementById("inputLastName").value;
        document.getElementById('cv_LastName').innerHTML = x;
    }

    function showEMail() {
        var x = document.getElementById("inputEMail").value;
        document.getElementById('cv_EMail').innerHTML = x;
    }
    function showKentnisse() {
        var x = document.getElementById("inputKentnisse").value;
        document.getElementById('cv_Kentnisse').innerHTML = x;
    }
    function showHobby() {
        var x = document.getElementById("inputHobby").value;
        document.getElementById('cv_Hobby').innerHTML = x;
    }
    function showPhone() {
        var x = document.getElementById("inputPhone").value;
        document.getElementById('cv_Phone').innerHTML = x;
    }

    function showOccupation() {
        var x = document.getElementById("inputOccupation").value;
        document.getElementById('cv_Occupation').innerHTML = x;
    }

    function showExperience() {
        var x = document.getElementById("inputExperience").value;
        document.getElementById('cv_Experience').innerHTML = x;
    }

    function showExperienceTitle() {
        var x = document.getElementById("inputExperienceTitle").value;
        document.getElementById('cv_ExperienceTitle').innerHTML = x;
    }
    function showExperienceDauer() {
        var x = document.getElementById("inputExperienceDauer").value;
        document.getElementById('cv_ExperienceDauer').innerHTML = x;
    }

    function showBirthday() {
        var x = document.getElementById("inputBirthday").value;
        document.getElementById('cv_Birthday').innerHTML = x;
    }
    function showLicence() {
        var x = document.getElementById("inputLicence").value;
        document.getElementById('cv_Licence').innerHTML = x;
    }
    function showWebsite() {
        var x = document.getElementById("inputWebsite").value;
        document.getElementById('cv_Website').innerHTML = x;
    }
    function showLand() {
        var x = document.getElementById("inputLand").value;
        document.getElementById('cv_Land').innerHTML = x;
    }

    function showCity() {
        var x = document.getElementById("inputCity").value;
        document.getElementById('cv_City').innerHTML = x + ', ';
    }

    function showAddress() {
        var x = document.getElementById("inputAddress").value;
        document.getElementById('cv_Address').innerHTML = x + ', ';
    }

    function showJobName() {
        var x = document.getElementById("inputJobName").value;
        document.getElementById('cv_JobName').innerHTML = x;
    }
    function showLanguage1() {
        var x = document.getElementById("inputLanguage1").value;
        document.getElementById('cv_Language1').innerHTML = x;
    }
    function showLanguage1Star() {

        var x = document.getElementById("dropdownLanguage1").value;
        document.getElementById('cv_language1Star').innerHTML = x;
    }
    function showJob() {
        var x = document.getElementById("inputJob").value;
        document.getElementById('cv_Job').innerHTML = x;
    }
    function showJobTitle() {
        var x = document.getElementById("inputJobTitle").value;
        document.getElementById('cv_JobTitle').innerHTML = x;
    }
    function showJobDauer() {
        var x = document.getElementById("inputJobDauer").value;
        document.getElementById('cv_JobDauer').innerHTML = x;
    }
    function showJobEmployer() {
        var x = document.getElementById("inputEmployer").value;
        document.getElementById('cv_JobEmployer').innerHTML = x;
    }

    function showJobStart() {
        var x = document.getElementById("inputJobStart").value;
        document.getElementById('cv_JobStart').innerHTML = x;
    }

    function showJobEnd() {
        var x = document.getElementById("inputJobEnd").value;
        document.getElementById('cv_JobEnd').innerHTML = x;
    }

    function showJobDescription() {
        var x = document.getElementById("inputJobDescription").value;
        document.getElementById('cv_JobDescription').innerHTML = x;
    }
    function showEmployment() {
        var x = document.getElementById("inputEmployment").value;
        document.getElementById('cv_Employment').innerHTML = x;
    }
    function showEmploymentDauer() {
        var x = document.getElementById("inputEmploymentDauer").value;
        document.getElementById('cv_EmploymentDauer').innerHTML = x;
    }
    function showEmploymentTitel() {
        var x = document.getElementById("inputEmploymentTitel").value;
        document.getElementById('cv_EmploymentTitel').innerHTML = x;
    }


    function showHideTextBox() {
        var x = document.getElementById("displayLand");
        if (x.style.display === "none") {
            x.style.display = "block";
            document.getElementById('showHide').innerHTML = 'Zusätzliche Details ausblenden';

        } else {
            x.style.display = "none";
            document.getElementById('showHide').innerHTML = 'Zusätzliche Details anzeigen';

        }
    }

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#cv_Image').attr('src', e.target.result).width(150).height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }


</script>

</html>
<?php
// }

//add_shortcode('cv_generator', 'cv_generator_shortcode');

?>