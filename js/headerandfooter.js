class Header extends HTMLElement {
    connectedCallback() {
      this.innerHTML = `
      <nav>
      <div class="header-logo">
      <a href="index.html"><img src="css/Cancer_Support_Center.png" alt="Cancer Support Center"></a>
  </div>
  <div class="button-head">
      <a href="https://www.classy.org/give/123486/#!/donation/checkout" target="_blank"><button class = donate-button>Donate Here</button></a>
  </div>
  <div class="navbar">
      <div class="dropdown">
      <a href="programs-and-activities.html" target="_blank">
      <button class="dropbtn">Programs and Activities</a>
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
          <a href="#">Kick It Cancer</a>
          <a href="#">Zoom Programming</a>
          <a href="#">On Demand Programming</a>
          <a href="#" target="_blank">CSC 5 Point Model</a>
          <a href="#" target="_blank">Education and Networking</a>
          <a href="family-and-children.html" target="_blank">Family and Children</a>
          <a href="fitness-physical-wellness.html" target="_blank">Fitness and Physical Wellness</a>
          <a href="body-image.html" target="_blank">Body Image</a>
          <a href="nutrition-and-diet.html" target="_blank">Nutrition and Diet</a>
          <a href="nutrition-popup-recipes.html" target="_blank">Nutrition Pop Up Recipes</a>               
          <a href="#">Calendar Grid and Zoom Registration</a>
          <a href="participant-forms.html" target="_blank">Participant Forms</a>
          <a href="newsletters.html" target="_blank">Newsletters</a>
      </div>
      </div>

      <div class="dropdown">
      <a href="Resources.html">  
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
      </div>
      </div>
  </div>
      </nav>
      `;
    }
  }
  
  class Footer extends HTMLElement {
    connectedCallback() {
      this.innerHTML = `	   
      <div class = "footer">
      <div class = icon-container>
          <div>
              <a href="https://www.facebook.com/pages/The-Cancer-Support-Center/113271178690597"
              target="_blank"><img src="css/FB-f-Logo__white_50.png"
              width="36px" height="36px" margin: 5px
              alt="Facebook"></a>
          </div>
  
          <div>
              <a href="mailto:csc@cancersupportcenter.org">
              <img src="css/icon-social-email-cancersupportcenter.png"
              width="36px" height="36px" margin: 5px
              alt="Email"></a>
          </div>
  
          <div>
              <a href="https://www.instagram.com/the_cancer_support_center/"
              target="_blank">
              <img src="css/instagram-logo_white-cancersupportcenter.png"
              width="36px" height="36px" margin: 5px
              alt="Instagram"></a>
          </div>
  
          <div>
              <a href="https://www.pinterest.com/thecsc/" target="_blank">
              <img src="css/Pinterest-badge-cancersupportcenter.png"
              width="36px" height="36px" margin: 5px
              alt="Pinterest"></a>
          </div>
  
          <div>
              <a href="https://twitter.com/The_CSC" target="_blank">
              <img src="css/Twitter_Logo_White_On_Blue.png"
              width="36px" height="36px" margin: 5px
              alt="Twitter"></a>
          </div>            
  
          <div>
              <a href="https://youtu.be/JfWB6jOE5pw">
              <img src="css/YouTube-social-square_red_48px.png"
              width="36px" height="36px" margin: 5px
              alt="YouTube"></a>
          </div>
      </div>
  </div>
      `;
    }
  }
  
  customElements.define('main-header', Header);
  customElements.define('main-footer', Footer);