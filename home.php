<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Material Design with Bootstrap</title>
  
  <!-- Bootstrap CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- MDB CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.20.0/css/mdb.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <!-- jQuery (required by Owl Carousel) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  
</head>
<body>
  <div class="bg-dark top_header py-3 d-none d-lg-block">
        <div class="container">
            <div class="d-flex justify-content-between">
                <div>
                    <ul class="d-flex mb-0 list-unstyled">
                        <li><i class="text-danger fa fa-phone"></i><span class="text-white ml-2">+91 9087654321</span></li>
                        <li class="ml-5"><i class="text-danger fa fa-envelope"></i><span class="text-white ml-2">info@analystip.com</span></li>
                    </ul>
                </div>
                <div>
                    <ul class="d-flex mb-0 list-unstyled">
                        <li class="ml-3"><a class="text_white hvr_red" href=""><i class="fa fa-twitter"></i></a></li>
                        <li class="ml-3"><a class="text_white hvr_red" href=""><i class="fa fa-facebook"></i></a></li>
                        <li class="ml-3"><a class="text_white hvr_red" href=""><i class="fa fa-linkedin-square"></i></a></li>
                        <li class="ml-3"><a class="text_white hvr_red" href=""><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
  </div>
 
  <header>
    <nav class="navbar navbar-expand-lg p-0" style="box-shadow: none;">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="assets/images/transparent-logo.webp" alt="Logo" style="height: auto; width: 120px; margin-right: 10px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav"> 
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About AnalystIP
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">About Us</a>
                  <a class="dropdown-item" href="#">Contact</a>
                </div>
              </li> 
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">IP Services
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">About Us</a>
                  <a class="dropdown-item" href="#">Contact</a>
                </div>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="#">National Phase</a>
            </li> 
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Merger & Acquisition
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">About Us</a>
                <a class="dropdown-item" href="#">Contact</a>
              </div>
            </li>
            
             <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Insights
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">About Us</a>
                  <a class="dropdown-item" href="#">Contact</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Career</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <section class="tabs_bar">
  <div class="container">
   <div class="row">
    <div class="col-lg-4 col-1 d-none d-lg-flex align-items-center">
        <h5 class="mb-0">Trademark Registration</h5>
    </div>
    <div class="col-lg-8 col-12">
        <div class="nav nav-tabs nav-tabs-scrollable" id="scrollableTabs" role="tablist" style="flex-wrap:unset!important">
            <a class="nav-item nav-link active" id="tab-1" data-toggle="tab" href="#content-1" role="tab" aria-controls="content-1" aria-selected="true">Trademark Registration</a>
            <a class="nav-item nav-link" id="tab-2" data-toggle="tab" href="#content-2" role="tab" aria-controls="content-2" aria-selected="false">Trademark Refusal</a>
            <a class="nav-item nav-link" id="tab-3" data-toggle="tab" href="#content-3" role="tab" aria-controls="content-3" aria-selected="false">Opposition</a>
            <a class="nav-item nav-link" id="tab-4" data-toggle="tab" href="#content-4" role="tab" aria-controls="content-4" aria-selected="false">Trademark Renewal</a>
            <a class="nav-item nav-link" id="tab-5" data-toggle="tab" href="#content-5" role="tab" aria-controls="content-5" aria-selected="false">Other</a>
          </div>
    </div>
   </div>
  </div>
  
</section>
    <div class="tab-content mt-3">
        <div class="tab-pane fade show active" id="content-1" role="tabpanel" aria-labelledby="tab-1">
          <div class="container">
          <div class="row">
                <!-- Content section (will come below the image on mobile) -->
                <div class="col-lg-6 col-12 d-flex align-items-center order-lg-1 order-2">
                    <div>
                        <h3>Register your trademark worldwide in 3 simple steps</h3>
                        <p>Free verification. Fast process. Unbeatable price.</p>
                        <button type="button" class="btn btt-red btn-shape m-0 mr-lg-3 media100">Start with free lawyer’s check</button>
                        <button type="button" class="btn btn-shape brd-red m-0 mt-3 mt-lg-0 media100">Lorem ipsun</button>
                    </div>
                </div>

                <!-- Image section (will come first on mobile) -->
                <div class="col-lg-6 col-12 text-right order-lg-2 order-1">
                    <img class="img-fluid" src="assets/images/world.png">
                </div>
            </div>
          </div>

          <div class="bg_pink mt-4 py-4">
                <div class="container">
                    <p class="text-center">23550 trademarks registered </p>
                    <div class="mt-5">
                        <div class="owl-carousel owl-theme">
                          <div class="item clintbox">
                            <img src="assets/images/google.png">
                          </div>
                          <div class="item clintbox">
                            <img src="assets/images/Vector.png">
                          </div>
                          <div class="item clintbox">
                            <img src="assets/images/Vector.png">
                          </div>
                          <div class="item clintbox">
                            <img src="assets/images/amazon.png">
                          </div>
                          <div class="item clintbox">
                            <img src="assets/images/amazon.png">
                          </div>
                          <div class="item clintbox">
                            <img src="assets/images/mircosoft.png">
                          </div>
                          <div class="item clintbox">
                            <img src="assets/images/mircosoft.png">
                          </div>
                          <div class="item clintbox">
                            <img src="assets/images/amazon.png">
                          </div>
                        </div>
                      </div>
                      
                </div>
          </div>
          <!-- country part -->
            <?php 
                $countries = include('data/countries.php');
                $popularCountries = [];
                $nonPopularCountries = [];

                foreach ($countries as $country) {
                    if ($country['popular'] == 1) {
                        $popularCountries[] = $country;
                    } else {
                        $nonPopularCountries[] = $country;
                    }
                }
            ?>
           <div class="container">
            <div class="row px-3 py-5">
                <div class="col-lg-8 col-12 order-lg-1 order-2 mt-3 mt-lg-0">
                    <h5>Countries List</h5>
                    <div class="form-group has-search mt-3">
                        <span class="fa fa-search form-control-feedback"></span>
                        <input type="text" class="form-control" id="countrySearch" placeholder="Search here" onkeyup="filterCountries()">
                    </div>
                    <span id="error_show"></span>
                    <div id="mst_country">
                        <h6 class=""><img src="assets/images/campfire.png"> <span class="ml-2">Most Popular</span></h6>
                    </div>
                    <div class="row">
                    <?php foreach ($popularCountries as $country): ?>
                        <div class="col-lg-4 mt-4 country" data-toggle="modal" data-target="#countryModal" onclick="setCountryName('<?= $country['country_logo']; ?>','<?= $country['country_name']; ?>', this)">
                            <a href="javascript:void(0)">
                                <div class="country_box d-flex align-items-center">
                                    <div class="img">
                                        <img src="assets/images/<?php echo $country['country_logo']; ?>">
                                    </div>
                                    <div class="ml-3">
                                        <h6 class="mb-0"><?php echo $country['country_name']; ?></h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>

                    </div>
                    <div id="all_country" class="mt-4">
                        <h6 class=""><img src="assets/images/globe.png"> <span class="ml-2">All Countries</span></h6>
                    </div>
                    <!-- All country start -->
    
                    <div class="row">
                    <?php foreach ($nonPopularCountries as $country): ?>
                        <div class="col-lg-4 mt-4 country" data-toggle="modal" data-target="#countryModal" onclick="setCountryName('<?= $country['country_logo']; ?>','<?= $country['country_name']; ?>', this)">
                            <a href="javascript:void(0)">
                                <div class="country_box d-flex align-items-center">
                                    <div class="img">
                                        <img src="assets/images/<?php echo $country['country_logo']; ?>">
                                    </div>
                                    <div class="ml-3">
                                        <h6 class="mb-0"><?php echo $country['country_name']; ?></h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                    <!-- All country end -->
                </div>
                </div>
                <div class="col-lg-4 col-12 order-lg-2 order-1">
                    <h5>Price Estimate</h5>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <div>
                            <h6>Total Price</h6>
                        </div>
                        <div>
                            <h6>$0</h6>
                        </div>
                    </div>
                    <p>VAT applies to the service fee and is not included</p>
                    <button type="button" class="btn btt-red btn-shape m-0 w-100">Start with free lawyer’s check</button>
                    <div class="lightblue mt-3 rounded-custm p-3">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="assets/images/Asset5.png">
                            </div>
                            <div class="col-lg-8">
                                <h5 class="headingMedim">Multi-country discount available</h5>
                                <p>Choose 2 or more countries and get a 15% discount on service fees for additional trademarks</p>
                            </div>
                        </div>
                    </div>

                    <div class="border rounded-custm p-3 mt-3">
                        <h6 class="headingMedim"><img src="assets/images/64.telephone.png"> <span class="ml-2">Contact Us</span></h6>
                        <hr>
                        <form>
                            <div class="form-group">
                              <label for="exampleInputEmail1">Name</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Add">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">Email Id</label>
                              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Add">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Inquiry Details</label>
                              <textarea class="form-control" rows="3" placeholder="Write a brief description of your query"></textarea>
                            </div>
                            <button type="submit" class="btn btt-red btn-shape w-100">Submit</button>
                          </form>
                          
                    </div>
                </div>
              </div>
          </div>
<?php $countries = include('footer.php'); ?>

<div class="modal fade" id="countryModal" tabindex="-1" role="dialog" aria-labelledby="countryModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                    <div>
                        <img id="country_logo" style="width:40px; height:40px;border-radius: 50%;" src="">
                    </div>
                    <div>
                        <h5 id="countryName" class="modal_heading ml-2 mb-0"></h5>
                    </div>
                </div>
                <div>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <img src="assets/images/cancel.png">
                    </button>
                </div>
              </div>
          <div class="border rounded pl-3 mt-3">
                <div class="form-check py-2">
                    <input class="form-check-input" type="checkbox" name="applicationType" value="individual" id="individualApplication">
                    <label class="form-check-label" for="individualApplication">
                    Individual Application | $50
                    </label>
                </div>
                <hr class="my-0">
                <div class="form-check py-2">
                    <input class="form-check-input" type="checkbox" name="applicationType" value="corporate" id="corporateApplication">
                    <label class="form-check-label" for="corporateApplication">
                    Corporate Application | $100
                    </label>
                </div>
              
          </div>

          <div class="form-group mt-3">
                    <label for="numberSelect">Choose total class</label>
                    <div class="dropdown-with-summary">
                        <select name="classes" class="form-control selectpicker" multiple data-live-search="true" id="numberSelect">
                        <option value="1">Class 1</option>
                        <option value="2">Class 2</option>
                        <option value="3">Class 3</option>
                        <option value="4">Class 4</option>
                        <option value="5">Class 5</option>
                        <option value="6">Class 6</option>
                        <option value="7">Class 7</option>
                        <option value="8">Class 8</option>
                        <option value="9">Class 9</option>
                    </select>
                    </div>
                </div>
                    <div class="form-group mt-3">
                        <label>Add class details </label>
                        <textarea class="form-control" rows="2" placeholder="Add description for your class "></textarea>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-shape brd-red col-6 col-md-3" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btt-red btn-shape col-6 col-md-3 mr-0">Submit</button>
                    </div>
                </div>
            </div>
            </div>
        </div>
    

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.20.0/js/mdb.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- Add this to your <head> -->
    
    <!-- Add this before your closing </body> tag -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.min.js"></script>
    


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>


</body>
</html>
<script>
    function filterCountries() {
        var input, filter, countryBoxes, countryNames, i, txtValue;
        input = document.getElementById('countrySearch');
        mst_country = document.getElementById('mst_country');
        all_country = document.getElementById('all_country');
        filter = input.value.toUpperCase(); // Convert to uppercase for case-insensitive search
        countryBoxes = document.getElementsByClassName('country');
        error_show = document.getElementById('error_show');
        
        
        let foundCountry = false; // Flag to check if any country matches the filter

        for (i = 0; i < countryBoxes.length; i++) {
            countryNames = countryBoxes[i].getElementsByTagName("h6");
            if (countryNames.length > 0) {
                txtValue = countryNames[0].textContent || countryNames[0].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    countryBoxes[i].style.display = ""; // Show country
                    mst_country.style.display = "";
                    all_country.style.display = "";
                    foundCountry = true; 
                    error_show.style.display = "none";
                } else {
                    countryBoxes[i].style.display = "none"; // Hide country
                    mst_country.style.display = "none";
                    all_country.style.display = "none";
                    error_show.style.display = "none";
                }
            }
        }

        // If no country is found, print a message to the console
        if (!foundCountry) {
            error_show.style.display = "block";
            error_show.innerHTML ='No country found for the search term: ' + filter;
        }
    }


    $(document).ready(function () {
      const maxVisibleSelections = 3;

      $('#numberSelect').on('changed.bs.select', function () {
        const selectedOptions = $(this).val();
        const summaryElement = document.getElementById("selectionSummary");

        if (!summaryElement) {
          console.error("selectionSummary element not found!");
          return;
        }

        if (selectedOptions && selectedOptions.length > maxVisibleSelections) {
          const visibleSelections = selectedOptions.slice(0, maxVisibleSelections).join(', ');
          const moreCount = selectedOptions.length - maxVisibleSelections;
          summaryElement.innerHTML = `${visibleSelections} +${moreCount} more`;
        } else if (selectedOptions && selectedOptions.length > 0) {
          summaryElement.innerHTML = selectedOptions.join(', ');
        } else {
          summaryElement.innerHTML = 'Select options';
        }
      });

      // Initialize the Bootstrap Select plugin
      $('.selectpicker').selectpicker();


      document.querySelectorAll('.form-check-input').forEach(checkbox => {
        checkbox.addEventListener('change', function () {
            if (this.checked) {
            document.querySelectorAll('.form-check-input').forEach(otherCheckbox => {
                if (otherCheckbox !== this) {
                otherCheckbox.checked = false;
                }
            });
            }
        });
        });

    });
  </script>
  
<script>
    function setCountryName(countryIcon, countryName, element) {
        
        var countryBoxes = document.querySelectorAll('.country_box');
        countryBoxes.forEach(function(box) {
            box.classList.remove('selected');
        });

        // Add 'selected' class to the clicked country box
        var clickedBox = element.querySelector('.country_box');
        clickedBox.classList.add('selected');
        document.getElementById('countryName').innerText = countryName;
        country_logo = document.getElementById('country_logo');
        
        var imageSrc = 'assets/images/'+countryIcon; 
        country_logo.src = imageSrc;
    }


    $(document).ready(function () {
      $('.owl-carousel').owlCarousel({
        loop: true,                // Infinite loop
        margin: 10,                // Space between slides
        nav: false,                // No next/prev buttons
        autoplay: true,            // Enable autoplay
        autoplayTimeout: 2000,     // Time between slides
        autoplayHoverPause: true,  // Pause on hover
        smartSpeed: 800,           // Smooth transition speed
        autoplaySpeed: 800,        // Adjust scroll speed
        items: 1,                  // Show 1 item at a time
        dots: false,                 
        responsive: {
          0: {
            items: 1               // Show 1 item for small screens
          },
          600: {
            items: 3              // Show 2 items for medium screens
          },
          1000: {
            items: 7       
          }
        }
      });
    });
  </script>
  
