class Header extends HTMLElement {
  connectedCallback() {
    this.innerHTML = `
    <nav>
    <header>
    <div class="header-logo">
        <a href="index.html"><img src="css/mainpage-other-imgs/Cancer_Support_Center.png" alt="Cancer Support Center"></a>
        <a href="https://www.classy.org/give/123486/#!/donation/checkout" target="_blank"><button class = "donate-button">Donate Here</button></a>
    </div>
    <div class="navbar">
        <div class="dropdown">
        <a href="programs-and-activities.html" target="_blank">
        <button class="dropbtn">Programs and Activities</a>
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="kickItCancer.html" target="_blank">Kick It Cancer</a>
            <a href="zoomProgramming.html" target="_blank">Zoom Programming</a>
            <a href="onDemandProgramming.html" target="_blank">On Demand Programming</a>
            <a href="CSC5.html" target="_blank">CSC 5 Point Model</a>
            <a href="education&Networking.html" target="_blank">Education and Networking</a>
            <a href="family-and-children.html" target="_blank">Family and Children</a>
            <a href="fitness-physical-wellness.html" target="_blank">Fitness and Physical Wellness</a>
            <a href="body-image.html" target="_blank">Body Image</a>
            <a href="nutrition-and-diet.html" target="_blank">Nutrition and Diet</a>
            <a href="nutrition-popup-recipes.html" target="_blank">Nutrition Pop Up Recipes</a>               
            <a href="calendar.html" target="_blank">Calendar Grid and Zoom Registration</a>
            <a href="participant-forms.html" target="_blank">Participant Forms</a>
            <a href="newsletters.html" target="_blank">Newsletters</a>
        </div>
        </div>

        <div class="dropdown">
        <a href="info-and-resources.html">  
        <button class="dropbtn">Information and Resources</a>
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
        <a href="hospitalPartnerships.html" target="_blank">Hospital Partnerships</a>
        <a href="cancerSupportLinks.html" target="_blank">Cancer Support Links</a>
        <a href="libraryResourceCenter.html" target="_blank">Library Resource Center</a>
        <a href="financial.html" target="_blank">Financial</a>
        <a href="transportation.html" target="_blank">Transportation Services</a>
        </div>
        </div>

        <div class="dropdown">
        <a href="about-center.html"> 
        <button class="dropbtn">About the Center</a>
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
        <a href="staff.html" target="_blank">Staff</a>
        <a href="board.html" target="_blank">Board of Directors</a>
        <a href="ancillary-boards.html" target="_blank">Ancillary Boards</a>
        <a href="news.html" target="_blank">In the News</a>
        <a href="annual-report.html" target="_blank">CSC Annual Report</a>
        <a href="contact.html" target="_blank">Contact Us</a>
        </div>
        </div>

        <div class="dropdown">
        <a href="support-center.html"> 
        <button class="dropbtn">Support the Center</a>
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
        <a href="volunteer.html" target="_blank">Volunteer Opportunities</a>
        <a href="http://www.villagedoor.com/" target="_blank">Consignment Shop</a>
        <a href="https://www.classy.org/give/123486/#!/donation/checkout" target="_blank">Donate</a>
        </div>
        </div>

        <div class="dropdown">
        <a href="special-events.html"> 
        <button class="dropbtn">Special Events</a>
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
        <a href="annualGolfOuting.html" target="_blank">Annual Golf Outing</a>
        <a href="2020VirtualFallWalkofHope.html" target="_blank">2020 Virtual FALL Walk of Hope</a>
        <a href="2020FallUnGala.html" target="_blank">2020 Fall Un-Gala</a>
        <a href="thirdPartyEvents.html" target="_blank">Third Party Community Events</a>
        <a href="takeABiteOutOfCancer.html" target="_blank">Take a Bite Out of Cancer</a>
        <a href="2020-Trees-Wreath-Garland-sale.html" target="_blank">2020 Trees, Wreath, and Garland Sale</a>
        <a href="givingThanks.html" target="_blank">#GivingTuesday</a>
        </div>
        </div>
    </div>
    </header>
    </nav>
    `;
  }
}

class Footer extends HTMLElement {
  connectedCallback() {
    this.innerHTML = `
    <div class = "footer">
    <div class="grid-container">
    <div class="dropdown-one">
    <p><b>Programs and Activities</b><br>
        <a href="kickItCancer.html" style="color: #f9f9f9; text-decoration:none;">Kick It Cancer</a><br>
        <a href="zoomProgramming.html" style="color: #f9f9f9; text-decoration:none;">Zoom Programming</a><br>
        <a href="onDemandProgramming.html" style="color: #f9f9f9; text-decoration:none;">On Demand Programming</a><br>
        <a href="CSC5.html" style="color: #f9f9f9; text-decoration:none;">CSC 5 Point Model</a><br>
        <a href="education&Networking.html" style="color: #f9f9f9; text-decoration:none;">Education and Networking</a><br>
        <a href="family-and-children.html" style="color: #f9f9f9; text-decoration:none;">Family and Children</a><br>
        <a href="fitness-physical-wellness.html" style="color: #f9f9f9; text-decoration:none;">Fitness and Physical Wellness</a><br>
        <a href="body-image.html" style="color: #f9f9f9; text-decoration:none;">Body Image</a><br>
        <a href="nutrition-and-diet.html" style="color: #f9f9f9; text-decoration:none;">Nutrition and Diet</a><br>
        <a href="nutrition-popup-recipes.html" style="color: #f9f9f9; text-decoration:none;">Nutrition Pop Up Recipes</a><br>       
        <a href="calendar.html" style="color: #f9f9f9; text-decoration:none;">Calendar Grid and Zoom Registration</a><br>
        <a href="participant-forms.html" style="color: #f9f9f9; text-decoration:none;">Participant Forms</a><br>
        <a href="newsletters.html" style="color: #f9f9f9; text-decoration:none;">Newsletters</a>
    </p>
    </div>
    <div class="dropdown-two">
    <p><b>Information and Resources</b><br>
        <a href="hospitalPartnerships.html" style="color: #f9f9f9; text-decoration:none;">Hospital Partnerships</a><br>
        <a href="cancerSupportLinks.html" style="color: #f9f9f9; text-decoration:none;">Cancer Support Links</a><br>
        <a href="libraryResourceCenter.html" style="color: #f9f9f9; text-decoration:none;">Library Resource Center</a><br>
        <a href="financial.html" style="color: #f9f9f9; text-decoration:none;">Financial</a><br>
        <a href="transportation.html" style="color: #f9f9f9; text-decoration:none;">Transportation Services</a>
    </p>
    </div>
    <div class="dropdown-three">
    <p><b>About the Center</b><br>
        <a href="staff.html" style="color: #f9f9f9; text-decoration:none;">Staff</a><br>
        <a href="board.html" style="color: #f9f9f9; text-decoration:none;">Board of Directors</a><br>
        <a href="ancillary-boards.html" style="color: #f9f9f9; text-decoration:none;">Ancillary Boards</a><br>
        <a href="news.html" style="color: #f9f9f9; text-decoration:none;">In the News</a><br>
        <a href="annual-report.html" style="color: #f9f9f9; text-decoration:none;">CSC Annual Report</a><br>
        <a href="contact.html" style="color: #f9f9f9; text-decoration:none;">Contact Us</a>
    </p>
    </div>
    <div class="dropdown-four">
    <p><b>Support the Center</b><br>
        <a href="volunteer.html" style="color: #f9f9f9; text-decoration:none;">Volunteer Opportunities</a><br>
        <a href="http://www.villagedoor.com/" style="color: #f9f9f9; text-decoration:none;">Consignment Shop</a><br>
        <a href="https://www.classy.org/give/123486/#!/donation/checkout" style="color: #f9f9f9; text-decoration:none;">Donate</a>
    </p>
    </div>
    <div class="dropdown-five">
    <p><b>Special Events</b><br>
        <a href="annualGolfOuting.html" style="color: #f9f9f9; text-decoration:none;">Annual Golf Outing</a><br>
        <a href="2020VirtualFallWalkofHope.html" style="color: #f9f9f9; text-decoration:none;">2020 Virtual FALL Walk of Hope</a><br>
        <a href="2020FallUnGala.html" style="color: #f9f9f9; text-decoration:none;">2020 Fall Un-Gala</a><br>
        <a href="thirdPartyEvents.html" style="color: #f9f9f9; text-decoration:none;">Third Party Community Events</a><br>
        <a href="takeABiteOutOfCancer.html" style="color: #f9f9f9; text-decoration:none;">Take a Bite Out of Cancer</a>
    </p>
    </div>
</div>
<div class = footer-container>
    <div class = footer-text>
        <p>© 2020 The Cancer Support Center</p>
    </div>
    <div class = "Facebook">
        <a href="https://www.facebook.com/pages/The-Cancer-Support-Center/113271178690597"
        target="_blank"><img src="css/mainpage-other-imgs/FB-f-Logo__white_50.png"
        width="36px" height="36px" margin: 5px
        alt="Facebook"></a>
    </div>

    <div class = "Email">
        <a href="mailto:csc@cancersupportcenter.org">
        <img src="css/mainpage-other-imgs/icon-social-email-cancersupportcenter.png"
        width="36px" height="36px" margin: 5px
        alt="Email"></a>
    </div>

    <div class = "Instagram">
        <a href="https://www.instagram.com/the_cancer_support_center/"
        target="_blank">
        <img src="css/mainpage-other-imgs/instagram-logo_white-cancersupportcenter.png"
        width="36px" height="36px" margin: 5px
        alt="Instagram"></a>
    </div>

    <div class = "Pinterest">
        <a href="https://www.pinterest.com/thecsc/" target="_blank">
        <img src="css/mainpage-other-imgs/Pinterest-badge-cancersupportcenter.png"
        width="36px" height="36px" margin: 5px
        alt="Pinterest"></a>
    </div>

    <div class = "Twitter">
        <a href="https://twitter.com/The_CSC" target="_blank">
        <img src="css/mainpage-other-imgs/Twitter_Logo_White_On_Blue.png"
        width="36px" height="36px" margin: 5px
        alt="Twitter"></a>
    </div>            

    <div class = "YouTube">
        <a href="https://youtu.be/JfWB6jOE5pw">
        <img src="css/mainpage-other-imgs/YouTube-social-square_red_48px.png"
        width="36px" height="36px" margin: 5px
        alt="YouTube"></a>
    </div>
</div>
    `;
  }
}

customElements.define('main-header', Header);
customElements.define('main-footer', Footer);