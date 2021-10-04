<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
    <div class="w3-container w3-row">
        <div class="w3-col s4">
            <img src="asset/images/backend/profilePic.png" class="w3-circle w3-margin-right" style="width:46px">
        </div>
        <div class="w3-col s8 w3-bar">
            <span>Yo! <strong>{{ Auth::User()->name }}</strong>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
            </span>

            <a href="" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
            <a href="" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
            <a href="" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
        </div>
    </div>
  <hr>
  <div class="w3-container">
        <div class="input-group">
            <input id="filter" name="filter" type="text" class="form-control" placeholder="Search...">
        </div>
  </div>
  <br>
    <div class="w3-bar-block">
        <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu">
            <i class="fa fa-remove fa-fw"></i>&nbsp; Close Menu
        </a>
        @if(Auth::User()->userType=="main")
            <!--All Overview Records of all Showrooms-->
            <a href="superAdmin" role="button" class="w3-bar-item w3-button w3-padding" id="overviewBtn">
                <i class="fa fa-users fa-fw"></i>&nbsp; Overview
            </a>

            <!--All Evaluation Records of all Showrooms-->
            <a href="evaluateRecord" role="button"  class="w3-bar-item w3-button w3-padding" id="evaluateBtn">
                <i class="fa fa-motorcycle fa-fw"></i>&nbsp; Evaluate Records
            </a>

            <!--All Servicing Records of all Showrooms-->
            <a href="servicingRecord" role="button" class="w3-bar-item w3-button w3-padding" id="serviceBtn">
                <i class="fa fa-gears fa-fw"></i>&nbsp; Service Records
            </a>
            <br>

            <!--Servicing Capacity Configuration-->
            <a href="getShowroom" role="button" class="w3-bar-item w3-button w3-padding btnConfig">
                <i class="fa fa-gears fa-fw"></i>&nbsp; <b>Configure Showroom</b>
            </a>
            
            <!--Validate New Showrooms-->
            <a href="validateShowroom" role="button" class="w3-bar-item w3-button w3-padding btnValidate">
                <i class="fa fa-gears fa-fw"></i>&nbsp; <b>Validate Showroom</b>
            </a>
        @elseif(Auth::User()->userType=="business")
            <a href="businessDashboard" role="button" class="w3-bar-item w3-button w3-padding" id="overviewBtn">
                <i class="fa fa-users fa-fw"></i>&nbsp; Overview
            </a>

            <a href="evaluateRecord" role="button"  class="w3-bar-item w3-button w3-padding" id="evaluateBtn">  <!--Should be evaluateRecord route -->
                <i class="fa fa-motorcycle fa-fw"></i>&nbsp; Evaluate Records
            </a>

            <a href="servicingRecord" role="button" class="w3-bar-item w3-button w3-padding" id="serviceBtn">   <!--Should be servicingRecord route -->
                <i class="fa fa-gears fa-fw"></i>&nbsp; Service Records
            </a>
            <!--Servicing Capacity Configuration-->
            <a href="getShowroom" role="button" class="w3-bar-item w3-button w3-padding btnConfig">
                <i class="fa fa-gears fa-fw"></i>&nbsp; <b>Configure Showroom</b>
            </a>
        @elseif(Auth::User()->userType=="personal")
            <a href="dashboard" role="button" class="w3-bar-item w3-button w3-padding" id="overviewBtn">
                <i class="fa fa-users fa-fw"></i>&nbsp; Overview
            </a>

            <a href="userEvaluate" role="button"  class="w3-bar-item w3-button w3-padding" id="evaluateBtn">
                <i class="fa fa-motorcycle fa-fw"></i>&nbsp; Evaluate Records
            </a>

            <a href="userService" role="button" class="w3-bar-item w3-button w3-padding" id="serviceBtn">
                <i class="fa fa-gears fa-fw"></i>&nbsp; Service Records
            </a>
        @endif


    </div>
</nav>
<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
