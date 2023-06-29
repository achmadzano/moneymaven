<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="image/moneymaven2.png">
    <link rel="manifest" href="/site.webmanifest">
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="css/settings.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <title>MoneyMaven</title> 
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="image/moneymaven2.png" alt="">
                </span>
                <div class="text logo-text">
                    <span class="name"><?php echo $_COOKIE['name'];?></span>
                    <span class="profession">$<?php echo $_COOKIE['amount'];?></span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="dashboard.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Overview</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="transaction.php">
                            <i class='bx bx-bar-chart-alt-2 icon' ></i>
                            <span class="text nav-text">Transactions</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="insights.php">
                            <i class='bx bx-pie-chart-alt icon' ></i>
                            <span class="text nav-text">Insights</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="function/logout.php">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="">
                    <a href="settings.php">
                        <i class='bx bx-cog icon' ></i>
                        <span class="text nav-text">Settings</span>
                    </a>
                </li>
                
            </div>
        </div>

    </nav>

    <section class="home">
        <div class="text">Settings</div>
        <div class="flex align-center column" style="width: 100%; padding-bottom: 20px;">
            <div class="flex align-center" style="width: 90%; height: 150px; margin: 0px 64px; background-color: white; border-top-left-radius: 20px; border-top-right-radius: 20px;">
                <!-- CODING NYA MULAI DISINI BUAT BIKIN FITUR2 NYA -->
                <!-- <h1>Profile</h1> -->
            </div>
            <div class="home-container flex p20 column" style="border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">
                <div class="info-top flex px20">
                    <div class="left-info flex">
                        <div class="percentage-bar m20" style=""></div>
                        <div class="info-acc flex column my20">
                            <h1><?php echo $_COOKIE['name'];?></h1>
                            <div class="profile-type flex">
                                <button style="border: none; background-color: transparent; cursor: pointer;">
                                </button>
                                <p>
                                    profile-type :  
                                </p>
                                <p style="font-weight: bold;">
                                    BASIC  
                                </p>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="inputs">
                    <p class="m20" style="font-weight: bold;">
                      Contact Details
                    </p>
                    <div class="form-inputs flex" style="flex-wrap: wrap; gap: 20px;">
                      <div class="form-input-2 mx-auto p10 flex">
                        <div class="mx20">
                          <p>Name</p>
                          <p style="font-weight: bold;"><?php echo $_COOKIE['name'];?></p>
                        </div>
                        <div class="flex align-center" style="height: inherit;">
                          <button class="popupButton" data-popup="popup1" style="border: none; background-color: transparent; cursor: pointer; margin-top: 10px;"><svg width="24" height="24" viewBox="0 0 24 24" id="keyboard-arrow-right"><path fill="none" d="M0 0h24v24H0V0z"></path><path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"></path></svg></button>
                        </div>
                      </div>
                  
                      <div class="form-input-2 mx-auto p10 flex">
                        <div class="mx20">
                          <p>Email</p>
                          <p style="font-weight: bold;"><?php echo $_COOKIE['email'];?></p>
                        </div>
                        <div class="flex align-center" style="height: inherit;">
                          <button class="popupButton" data-popup="popup2" style="border: none; background-color: transparent; cursor: pointer; margin-top: 10px;"><svg width="24" height="24" viewBox="0 0 24 24" id="keyboard-arrow-right"><path fill="none" d="M0 0h24v24H0V0z"></path><path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"></path></svg></button>
                        </div>
                      </div>
                  
                      <div class="form-input-2 mx-auto p10 flex">
                        <div class="mx20">
                          <p>Phone Number</p>
                          <p style="font-weight: bold;">...</p>
                        </div>
                        <div class="flex align-center" style="height: inherit;">
                          <button class="popupButton" data-popup="popup3" style="border: none; background-color: transparent; cursor: pointer; margin-top: 10px;"><svg width="24" height="24" viewBox="0 0 24 24" id="keyboard-arrow-right"><path fill="none" d="M0 0h24v24H0V0z"></path><path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"></path></svg></button>
                        </div>
                      </div>
                  
                      <div class="form-input-2 mx-auto p10 flex">
                        <div class="mx20">
                          <p>Home Address (ZIP code)</p>
                          <p style="font-weight: bold;">...</p>
                        </div>
                        <div class="flex align-center" style="height: inherit;">
                          <button class="popupButton" data-popup="popup4" style="border: none; background-color: transparent; cursor: pointer; margin-top: 10px;"><svg width="24" height="24" viewBox="0 0 24 24" id="keyboard-arrow-right"><path fill="none" d="M0 0h24v24H0V0z"></path><path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"></path></svg></button>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="inputs">
                    <p class="m20" style="font-weight: bold;">
                      About Me
                    </p>
                    <div class="form-inputs flex" style="flex-wrap: wrap; gap: 20px;">
                      <div class="form-input-2 mx-auto p10 flex">
                        <div class="mx20">
                          <p>Gender</p>
                          <p style="font-weight: bold;">...</p>
                        </div>
                        <div class="flex align-center" style="height: inherit;">
                          <button class="popupButton" data-popup="popup5" style="border: none; background-color: transparent; cursor: pointer; margin-top: 10px;"><svg width="24" height="24" viewBox="0 0 24 24" id="keyboard-arrow-right"><path fill="none" d="M0 0h24v24H0V0z"></path><path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"></path></svg></button>
                        </div>
                      </div>
                  
                      <div class="form-input-2 mx-auto p10 flex">
                        <div class="mx20">
                          <p>Date of Birth</p>
                          <p style="font-weight: bold;">...</p>
                        </div>
                        <div class="flex align-center" style="height: inherit;">
                          <button class="popupButton" data-popup="popup6" style="border: none; background-color: transparent; cursor: pointer; margin-top: 10px;"><svg width="24" height="24" viewBox="0 0 24 24" id="keyboard-arrow-right"><path fill="none" d="M0 0h24v24H0V0z"></path><path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"></path></svg></button>
                        </div>
                      </div>
                  
                      <div class="form-input-2 mx-auto p10 flex">
                        <div class="mx20">
                          <p>Number of Children</p>
                          <p style="font-weight: bold;">...</p>
                        </div>
                        <div class="flex align-center" style="height: inherit;">
                          <button class="popupButton" data-popup="popup7" style="border: none; background-color: transparent; cursor: pointer; margin-top: 10px;"><svg width="24" height="24" viewBox="0 0 24 24" id="keyboard-arrow-right"><path fill="none" d="M0 0h24v24H0V0z"></path><path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"></path></svg></button>
                        </div>
                      </div>
                  
                      <div class="form-input-2 mx-auto p10 flex">
                        <div class="mx20">
                          <p>Married</p>
                          <p style="font-weight: bold;">No</p>
                        </div>
                        <div class="flex align-center" style="height: inherit;">
                          <button class="popupButton" data-popup="popup8" style="border: none; background-color: transparent; cursor: pointer; margin-top: 10px;"><svg width="24" height="24" viewBox="0 0 24 24" id="keyboard-arrow-right"><path fill="none" d="M0 0h24v24H0V0z"></path><path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"></path></svg></button>
                        </div>
                      </div>
                  
                      <div class="form-input-2 mx20 p10 flex">
                        <div class="mx20">
                          <p>Education</p>
                          <p style="font-weight: bold;">...</p>
                        </div>
                        <div class="flex align-center" style="height: inherit;">
                          <button class="popupButton" data-popup="popup9" style="border: none; background-color: transparent; cursor: pointer; margin-top: 10px;"><svg width="24" height="24" viewBox="0 0 24 24" id="keyboard-arrow-right"><path fill="none" d="M0 0h24v24H0V0z"></path><path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"></path></svg></button>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="inputs">
                    <p class="m20" style="font-weight: bold;">
                      Financial Profiles
                    </p>
                    <div class="form-inputs flex" style="flex-wrap: wrap; gap: 20px;">
                      <div class="form-input-2 mx-auto p10 flex">
                        <div class="mx20">
                          <p>Employment status</p>
                          <p style="font-weight: bold;">...</p>
                        </div>
                        <div class="flex align-center" style="height: inherit;">
                          <button class="popupButton" data-popup="popup10" style="border: none; background-color: transparent; cursor: pointer; margin-top: 10px;"><svg width="24" height="24" viewBox="0 0 24 24" id="keyboard-arrow-right"><path fill="none" d="M0 0h24v24H0V0z"></path><path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"></path></svg></button>
                        </div>
                      </div>
                  
                      <div class="form-input-2 mx-auto p10 flex">
                        <div class="mx20">
                          <p>Annual income</p>
                          <p style="font-weight: bold;">...</p>
                        </div>
                        <div class="flex align-center" style="height: inherit;">
                          <button class="popupButton" data-popup="popup11" style="border: none; background-color: transparent; cursor: pointer; margin-top: 10px;"><svg width="24" height="24" viewBox="0 0 24 24" id="keyboard-arrow-right"><path fill="none" d="M0 0h24v24H0V0z"></path><path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"></path></svg></button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="popup" id="popup1">
                    <div class="popup-content">
                      <p class="bold">What's your name?</p><br>
                      <p style="font-size: 14px; color: #737373;">It's not fun to call you user_1</p><br>
                      <form action="" style="position: relative;">
                        <div class="flex column">
                            <label for="firstName" style="font-size: 12px;">First Name</label>
                            <div class="input-container" style="position: relative;">
                                <input class="input-popup" type="text" placeholder="Field" name="firstName" id="firstName">
                                <button class="clear-button" onclick="return clearInput('firstName')" style="position: absolute; top: 18%; right: 2%; border: none; background-color: transparent; font-size: 15px;"><svg width="24" height="24" fill="none" id="close"><path fill="#000" d="M7.05 7.05a1 1 0 0 0 0 1.414L10.586 12 7.05 15.536a1 1 0 1 0 1.414 1.414L12 13.414l3.536 3.536a1 1 0 0 0 1.414-1.414L13.414 12l3.536-3.536a1 1 0 0 0-1.414-1.414L12 10.586 8.464 7.05a1 1 0 0 0-1.414 0Z"></path></svg></button>
                                <p style="font-size: 10px; color: #737373;">John</p>
                            </div><br>
                            <label for="lastName" style="font-size: 12px;">Last Name</label>
                            <div class="input-container">
                                <input class="input-popup" type="text" placeholder="Field" name="lastName" id="lastName">
                                <button class="clear-button" onclick="return clearInput('lastName')" style="position: absolute; top: 53%; right: 2%; border: none; background-color: transparent; font-size: 15px;"><svg width="24" height="24" fill="none" id="close"><path fill="#000" d="M7.05 7.05a1 1 0 0 0 0 1.414L10.586 12 7.05 15.536a1 1 0 1 0 1.414 1.414L12 13.414l3.536 3.536a1 1 0 0 0 1.414-1.414L13.414 12l3.536-3.536a1 1 0 0 0-1.414-1.414L12 10.586 8.464 7.05a1 1 0 0 0-1.414 0Z"></path></svg></button>
                                <p style="font-size: 10px; color: #737373;">Doe</p>
                          </div><br>
                          <input type="submit" value="Submit" style="width: 100%; height: 40px; background-color: #52dc66; border: none; border-radius: 5px; cursor: pointer;">
                        </div>
                    </form>
                    </div>
                  </div>
                  
                  </div>

                  <div class="popup" id="popup2">
                    <div class="popup-content">
                      <p>Email</p>
                    </div>
                </div>
                <div class="popup" id="popup3">
                    <div class="popup-content">
                      <p class="bold">Phone Number</p><br>
                      <p style="font-size: 14px; color: #737373;">Please enter your mobile phone number to secure your account</p><br>
                      <form action="" style="position: relative;">
                        <div class="flex column">
                          <label for="phoneNumber" style="font-size: 12px;">Phone Number</label>
                          <div class="input-container" style="position: relative;">
                            <div style="display: flex; align-items: center;">
                                <span id="countryName" style="margin-left: 10px;"></span>
                                <select class="country-code" style="width: 80px; padding: 10px 0;" onchange="updateCountryName(this.value)">
                                    <option value="" selected disabled></option>
                                    <option value="+62">+62</option>
                                    <option value="+1">+1</option>
                                  </select>                                  
                              <input class="input-popup" type="text" placeholder="Phone Number" name="phoneNumber" id="phoneNumber">
                            </div>
                            <button class="clear-button" onclick="clearInput('phoneNumber')" style="position: absolute; top: 18%; right: 2%; border: none; background-color: transparent; font-size: 15px;">
                                <svg width="24" height="24" fill="none" id="close">
                                    <path fill="#000" d="M7.05 7.05a1 1 0 0 0 0 1.414L10.586 12 7.05 15.536a1 1 0 1 0 1.414 1.414L12 13.414l3.536 3.536a1 1 0 0 0 1.414-1.414L13.414 12l3.536-3.536a1 1 0 0 0-1.414-1.414L12 10.586 8.464 7.05a1 1 0 0 0-1.414 0Z"></path>
                                </svg>
                            </button>
                        </div><br>
                        <input type="submit" value="Submit" style="width: 100%; height: 40px; background-color: #52dc66; border: none; border-radius: 5px; cursor: pointer;">
                      </div>
                    </form>                    
                    </div>
                  </div>
                  
                  
                  
                  <div class="popup" id="popup4">
                    <div class="popup-content">
                      <p>Home Address</p>
                    </div>
                </div>
                <div class="popup" id="popup5">
                    <div class="popup-content">
                      <p class="bold">Gender</p>
                      <p style="font-size: 14px; color: #737373;">Financial needs and goals are different ages.</p><br>
                      <form>
                        <div class="gender-type">
                          <input type="radio" id="male" name="gender" value="male">
                          <label class="px20" for="male">Male</label>
                        </div>
                        <div class="gender-type">
                          <input type="radio" id="female" name="gender" value="female">
                          <label class="px20" for="female">Female</label>
                        </div>
                        <div class="gender-type">
                          <input type="radio" id="other" name="gender" value="other">
                          <label class="px20" for="other">Other</label>
                        </div><br>
                        <input type="submit" value="Submit" style="width: 100%; height: 40px; background-color: #52dc66; border: none; border-radius: 5px; cursor: pointer;">
                      </form>
                    </div>
                  </div>
                  
                  
                  <div class="popup" id="popup6">
                    <div class="popup-content">
                      <p>Date of birth</p><br>
                      <form>
                        <input class="input-popup" type="date" id="dob" name="dob" placeholder="Select a date"><br><br>
                        <input type="submit" value="Submit" style="width: 100%; height: 40px; background-color: #52dc66; border: none; border-radius: 5px; cursor: pointer;">
                      </form>
                    </div>
                  </div>
                  
                  
                </div>
                <div class="popup" id="popup7">
                  <div class="popup-content">
                    <p class="bold">Number of children</p><br>
                    <p style="font-size: 14px; color: #737373;">Your financial goals are different whe you have kids.</p><br>
                    <form>
                      <div class="gender-type">
                        <input class="gender-type" type="radio" id="none" name="children" value="none">
                        <label class="px20" for="none">I don't have a kids</label><br>
                      </div>
                      <div class="gender-type">
                        <input class="gender-type" type="radio" id="one" name="children" value="one">
                        <label class="px20" for="one">One</label><br>
                      </div>
                      <div class="gender-type">
                        <input class="gender-type" type="radio" id="two" name="children" value="two">
                        <label class="px20" for="two">Two</label><br>
                      </div>
                      <div class="gender-type">
                        <input class="gender-type" type="radio" id="two" name="children" value="two or more">
                        <label class="px20" for="two">Two or more</label><br>
                      </div><br>
                      <input type="submit" value="Submit" style="width: 100%; height: 40px; background-color: #52dc66; border: none; border-radius: 5px; cursor: pointer;">
                    </form>
                  </div>
                </div>
                
                  
                <div class="popup" id="popup8">
                  <div class="popup-content">
                    <p class="bold">Are you married?</p><br>
                    <p style="font-size: 14px; color: #737373;">The way you manage your finances is different when you have a spouse.</p><br>
                    <form>
                      <div class="gender-type">
                        <input type="radio" id="noMarried" name="gender" value="noMarried">
                        <label class="px20" for="noMarried">No</label>
                      </div>
                      <div class="gender-type">
                        <input type="radio" id="yesMarried" name="gender" value="yesMarried">
                        <label class="px20" for="yesMarried">Yes</label>
                      </div><br>
                      <input type="submit" value="Submit" style="width: 100%; height: 40px; background-color: #52dc66; border: none; border-radius: 5px; cursor: pointer;">
                    </form>
                  </div>
                </div>
                <div class="popup" id="popup9">
                  <div class="popup-content">
                    <p>What the highest level of education</p><br>
                    <form>
                      <div class="gender-type">
                        <input type="radio" id="doctorate" name="education" value="doctorate">
                        <label class="px20" for="doctorate">Doctorate Degree</label><br>
                      </div>
                      <div class="gender-type">
                        <input type="radio" id="master" name="education" value="master">
                        <label class="px20" for="master">Master's Degree</label><br>
                      </div>
                      <div class="gender-type">
                        <input type="radio" id="bachelor" name="education" value="bachelor">
                        <label class="px20" for="bachelor">Bachelor's Degree</label><br>
                      </div>
                      <div class="gender-type">
                        <input type="radio" id="associate" name="education" value="associate">
                        <label class="px20" for="associate">Associate Degree</label><br>
                      </div>
                      <div class="gender-type">
                        <input type="radio" id="someCollege" name="education" value="someCollege">
                        <label class="px20" for="someCollege">Some College</label><br>
                      </div>
                      <div class="gender-type">
                        <input type="radio" id="highschool" name="education" value="highschool">
                        <label class="px20" for="highschool">High school graduate</label><br>
                      </div>
                      <div class="gender-type">
                        <input type="radio" id="someHighschool" name="education" value="someHighschool">
                        <label class="px20" for="someHighschool">Some high school</label><br>
                      </div>
                      <div class="gender-type">
                        <input type="radio" id="gradeSchool" name="education" value="gradeSchool">
                        <label class="px20" for="gradeSchool">Grade school</label><br>
                      </div><br>
                      <input type="submit" value="Submit" style="width: 100%; height: 40px; background-color: #52dc66; border: none; border-radius: 5px; cursor: pointer;">
                      
                    </form>
                  </div>
                </div>
                  
                <div class="popup" id="popup10">
                  <div class="popup-content">
                    <p>Employment status</p><br>
                    <p style="font-size: 14px; color: #737373;">Your employment status means a lot in terms of taxes, investments, etc.</p><br>
                    <form>
                      <div class="gender-type">
                        <input type="radio" id="employed" name="employment" value="employed">
                        <label class="px20" for="employed">Employed</label><br>
                      </div>
                      <div class="gender-type">
                        <input type="radio" id="self-employed" name="employment" value="self-employed">
                        <label class="px20" for="self-employed">Self-employed</label><br>
                      </div>
                      <div class="gender-type">
                        <input type="radio" id="student" name="employment" value="student">
                        <label class="px20" for="student">Student</label><br>
                      </div>
                      <div class="gender-type">
                        <input type="radio" id="unemployed" name="employment" value="unemployed">
                        <label class="px20" for="unemployed">Unemployed</label><br>
                      </div>
                      <div class="gender-type">
                        <input type="radio" id="retired" name="employment" value="retired">
                        <label class="px20" for="retired">Retired</label><br>
                      </div><br>
                      <input type="submit" value="Submit" style="width: 100%; height: 40px; background-color: #52dc66; border: none; border-radius: 5px; cursor: pointer;">
                    </form>
                  </div>
                </div>
                
                </div>

                <div class="popup" id="popup11">
                  <div class="popup-content">
                    <p class="bold">Annual income</p><br>
                    <p style="font-size: 14px; color: #737373;">This will help us estimate your savings goals and spending habits.</p><br>
                    <form action="" style="position: relative;">
                      <div class="flex column">
                          <label for="annualIncome" style="font-size: 12px; color: #737373;">Annual income (before tax)</label>
                          <div class="input-container" style="position: relative;">
                              <input class="input-popup" type="text" placeholder="Please, keep it round up to $1" name="annualIncome" id="annualIncome">
                              <button class="clear-button" onclick="return clearInput('annualIncome')" style="position: absolute; top: 18%; right: 2%; border: none; background-color: transparent; font-size: 15px;"><svg width="24" height="24" fill="none" id="close"><path fill="#000" d="M7.05 7.05a1 1 0 0 0 0 1.414L10.586 12 7.05 15.536a1 1 0 1 0 1.414 1.414L12 13.414l3.536 3.536a1 1 0 0 0 1.414-1.414L13.414 12l3.536-3.536a1 1 0 0 0-1.414-1.414L12 10.586 8.464 7.05a1 1 0 0 0-1.414 0Z"></path></svg></button>
                          </div><br>
                        <input type="submit" value="Submit" style="width: 100%; height: 40px; background-color: #52dc66; border: none; border-radius: 5px; cursor: pointer;">
                      </div>
                  </form>
                  </div>
                </div>
                  
                  <div class="popup" id="popup12">
                    <div class="popup-content">
                      <p>Credit Score</p>
                    </div>
                </div>
            </div>
        </div>
        

    </section>

    
    

    <script src="js/settings.js"></script>
    <script>
        const popupButtons = document.querySelectorAll('.popupButton');

        popupButtons.forEach((button) => {
        button.addEventListener('click', () => {
            const popupId = button.getAttribute('data-popup');
            const popup = document.getElementById(popupId);
            popup.style.display = 'flex';
        });
        });

        const popups = document.querySelectorAll('.popup');

        popups.forEach((popup) => {
        popup.addEventListener('click', (event) => {
            if (event.target === popup) {
            popup.style.display = 'none';
            }
        });
        });


    </script>
    <script>
    function clearInput(inputId) {
        document.getElementById(inputId).value = '';
        return false;
    }
    </script>
    <script>
        function updateCountryName(countryCode) {
        var countryNameElement = document.getElementById('countryName');
        var countryName = '';

        if (countryCode === '+62') {
            countryName = 'IDN';
        } else if (countryCode === '+1') {
            countryName = 'USA';
        }
        // Add more country code to country name mappings as needed

        countryNameElement.textContent = '(' + countryName + ')';
        }

    </script>


</body>
</html>