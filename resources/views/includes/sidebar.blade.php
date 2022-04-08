<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    @if (auth()->user()->is_admin == 1)
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="{{ url('superAdmin') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <div class="sb-sidenav-menu-heading">Interface</div>

                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts"
                        aria-expanded="false" aria-controls="collapseLayouts">

                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Master Data
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                        data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">

                            <a class="nav-link" href="{{ route('creditCard.show1') }}">Basic Info (CC)</a>
                            <a class="nav-link" href="{{ route('creditCard.show') }}">Credit Card</a>
                            <a class="nav-link" href="{{ route('businessloan.show') }}">Business Loan</a>
                            <a class="nav-link" href="{{ route('personalLoan.show') }}">Personal Loan</a>
                            <a class="nav-link" href="{{ route('webSite.show') }}">Website</a>

                        </nav>
                    </div>
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                        aria-expanded="false" aria-controls="collapsePages">
                        <div class="sb-nav-link-icon"><i class="fa fa-user"></i></div>
                        Users
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>

                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                        data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            </a>
                            <a href="{{ route('executive.add_team') }}" class="nav-link">Add Team</a>
                            <a href="{{ route('executive.add_team_leader') }}" class="nav-link">Add Team
                                Leader Code</a>
                            <a href="{{ url('all_executives') }}" class="nav-link">All Registered User</a>
                            {{-- <a href="{{route('executive.show')}}" class="nav-link">Customer's details </a> --}}
                            {{-- <a href="{{route('superAdmin.registerExecutive')}}" class="dnav-link">Register User</a>
                            --}}
                            </a>
                        </nav>
                    </div>
                    <a class="nav-link" href="charts.html">
                        <div class="sb-nav-link-icon"></div>
                        <a class="nav-link" href="{{ route('executive.show') }}"><i class="fa fa-users"></i>&nbsp;
                            Customer's Details </a>
                    </a>
                    <a class="nav-link" href="charts.html">
                        <div class="sb-nav-link-icon"></div>
                        <a class="nav-link" href="{{ route('superAdmin.registerExecutive') }}"><i
                                class="fa fa-registered"></i>&nbsp; User Registration</a>
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as: Super Admin</div>
                {{ auth()->user()->name }}
            </div>
            @elseif (auth()->user()->is_admin == 2)
            <div class="sb-sidenav-menu-heading">Core</div>
            <a class="nav-link" href="{{ route('instituteadmin.dashboard') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>
            <div class="sb-sidenav-menu-heading">Interface</div>
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts"
                aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                New Creation
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{ route('itimings.index') }}">Batch Time</a>
                    <a class="nav-link" href="{{ route('coursefees.index') }}">Course Fee</a>
                    <a class="nav-link" href="{{ route('grnumbers.index') }}">Gr No</a>
                    <a class="nav-link" href="{{ route('students.index') }}">Create Student</a>
                    <a class="nav-link" href="{{ route('instructors.index') }}">New Instructor</a>
                    <a class="nav-link" href="#">Create Exam Batches</a>
                    <!-- <a class="nav-link" href="#">Generate Hall Ticket</a> -->
                    <a class="nav-link" href="{{ route('instituteNotification.index') }}">Notice</a>

                    <a class="nav-link" href="{{ route('question.index') }}"> Create MCQ</a>
                    <a class="nav-link" href="">Create Typing Test</a>


                    <!-- <a href="/download">download</a> -->

                </nav>

            </div>
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                aria-expanded="false" aria-controls="collapsePages">
                <div class="sb-nav-link-icon"><i class="fa fa-credit-card"></i></div>
                Finance
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>


            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                    </a>
                    <a class="nav-link" href="{{ route('studentinstallments.index') }}">Take Installment</a>
                    <a class="nav-link" href="{{ route('instructorpayments.index') }}">Instructor Payment</a>
                    </a>
                </nav>
            </div>
            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                    </a>

                </nav>

            </div>
            <a class="nav-link" href="{{ route('attendance.index') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Attendance
            </a>


            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsepage"
                aria-expanded="false" aria-controls="collapse">
                <div class="sb-nav-link-icon"><i class="fa fa-registered"></i></div>
                Reports
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapsepage" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">

                    <a class="nav-link" href="{{ route('noticereport.index') }}">Notice </a>
                    <a class="nav-link" href="{{ route('studentreport.index') }}">Total Student </a>
                    <a class="nav-link" href="{{ route('studentinstallments.session') }}">Installment </a>
                    <a class="nav-link" href="{{ route('studentinstallments.revenue') }}">Revenue Report </a>
                    <a class="nav-link" href="#">Instructor Payment </a>
                    <a class="nav-link" href="#">General Register </a>
                    <a class="nav-link" href="#">Institute Sessions </a>
                    <a class="nav-link" href="#">M C Q Test </a>
                    <a class="nav-link" href="#">M C Q Exam </a>
                    <a class="nav-link" href="#">Theory Test </a>
                    <a class="nav-link" href="#">Student Growth </a>
                    <a class="nav-link" href="#">SessionWise Report </a>
                    <a class="nav-link" href="#">Typing Test Report </a>
                </nav>
            </div>

            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse" aria-expanded="false"
                aria-controls="collapse">
                <div class="sb-nav-link-icon"><i class="fa fa-desktop"></i></div>
                Demo Exam
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapse" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">

                    <a class="nav-link" href="#">Hallticket </a>
                    <a class="nav-link" href="#">Report </a>
                </nav>
            </div>


            <!--   <a class="nav-link" href="">
                        <div class="sb-nav-link-icon">
                            <i class="fa fa-university"></i>
                        </div>Demo Exam
                    </a>
-->
    </div>
</div>
<div class="sb-sidenav-footer">
    <div class="small">Logged in as: Admin</div>
    {{ auth()->user()->name }}
</div>
@elseif (auth()->user()->is_admin == 3)

<div class="sb-sidenav-menu-heading">Core</div>
<a class="nav-link" href="{{route('teamleader.dashboard')}}">
    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
    Dashboard
</a>
<div class="sb-sidenav-menu-heading">Interface</div>
{{-- <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false"
    aria-controls="collapseLayouts">
    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
    New Creation
    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
</a> --}}
<div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
    {{-- <nav class="sb-sidenav-menu-nested nav">

        <a class="nav-link" href="">Create Student</a>
        <a class="nav-link" href="#">Generate Hall Ticket</a>
        <a class="nav-link" href="">Notice</a>
    </nav> --}}
</div>
{{-- <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false"
    aria-controls="collapsePages">
    <div class="sb-nav-link-icon"><i class=" fa fa-credit-card"></i></div>
    Fees
    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
</a> --}}
<div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
    {{-- <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
        </a>
        <a class="nav-link" href="">Student Fees</a>
        </a>
    </nav> --}}
</div>
<div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
        </a>
    </nav>

</div>
{{-- <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false"
    aria-controls="collapsePages">
    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
    Attendance
    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
</a> --}}


<a class="nav-link collapsed" href="{{route('teamleader.team_executives')}}"
    aria-controls="collapsePages">
    <div class="sb-nav-link-icon"><i class="fa fa-users"></i></div>
    My Team
    <!-- <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div> -->
</a>
</div>
</div>

<div class="sb-sidenav-footer">
    <div class="small">Logged in as: Team Leader</div>
    {{ auth()->user()->name }}
</div>
@elseif (auth()->user()->is_admin == 4)
<div class="sb-sidenav-menu-heading">Core</div>
<a class="nav-link" href="{{ route('backEnd.dashboard') }}">
    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
    Dashboard
</a>

<a class="nav-link" href="{{ route('backEnd.login_data') }}">
    <div class="sb-nav-link-icon"><i class="fa fa-address-book"></i></div>
    Login data
</a>

<a class="nav-link" href="{{ route('backEnd.all_executives') }}">
    <div class="sb-nav-link-icon"><i class="fa fa-address-book"></i></div>
    Team wise Login data
</a>

<a class="nav-link" href="{{ url('Wh_executives') }}">
    <div class="sb-nav-link-icon"><i class="fa fa-address-book"></i></div>
whark From home</a>

{{-- <div class="sb-sidenav-menu-heading">Interface</div> --}}
<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false"
    aria-controls="collapseLayouts">
    {{-- <div class="sb-nav-link-icon"><i class="fa fa-book"></i></div> --}}
    {{-- Cource --}}
    {{-- <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div> --}}
</a>
<div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
    <nav class="sb-sidenav-menu-nested nav">
        {{-- <a class="nav-link" href="{{route('backEnd.login_data')}}">Login data</a>
        <a class="nav-link" href="{{route('backEnd.all_executives')}}">Team wise Login data</a> --}}
        <!-- <a class="nav-link" href="#">Notice</a> -->
    </nav>
</div>
{{-- <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false"
    aria-controls="collapsePages">
    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
    Typing Test
    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
</a>
<div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
        </a>
        <a class="nav-link" href="#">PASSAGE</a>
        <a class="nav-link" href="#">LETTER</a>
        <a class="nav-link" href="#">STATEMENT</a>
        <a class="nav-link" href="#">EMAIL</a>
        <a class="nav-link" href="#">ALL TEST</a>
        </a>
    </nav>
</div> --}}
{{-- <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse" aria-expanded="false"
    aria-controls="collapse">
    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
    Theory Test
    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
</a>
<div class="collapse" id="collapse" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
    <nav class="sb-sidenav-menu-nested nav">

        <a class="nav-link" href="">MS Word</a>
        <a class="nav-link" href="#">MS Excel</a>
        <a class="nav-link" href="#">MS Power point</a>
        <a class="nav-link" href="#">PageMaker</a>
        <a class="nav-link" href="#">Operating System</a>
        <a class="nav-link" href="#">Email</a>
        <a class="nav-link" href="#">All Test</a>
    </nav>
</div> --}}
</div>
</div>

<div class="sb-sidenav-footer">
    <div class="small">Logged in as: BackEnd</div>
    {{ auth()->user()->name }}
</div>


@elseif (auth()->user()->is_admin == 5)
<div class="sb-sidenav-menu-heading">Core</div>
<a class="nav-link" href="{{route('executive.dashboard')}}">
    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
    Dashboard
</a>
<a class="nav-link" href="{{route('executive.customerData')}}">
    <div class="sb-nav-link-icon"><i class="fa fa-address-book"></i></div>
    Login data show
</a>
<a class="nav-link" href="{{route('executive.executive_datewise_data')}}">
    <div class="sb-nav-link-icon"><i class="fa fa-address-book"></i></div>
    Report data-wise 
</a>
<a class="nav-link" href="{{route('executive.wh_executive_show')}}">
    <div class="sb-nav-link-icon"><i class="fa fa-address-book"></i></div>
    Data
</a>

<div class="sb-sidenav-menu-heading">
    {{-- Interface --}}
</div>
{{-- <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false"
    aria-controls="collapseLayouts"> --}}
    {{-- <div class="sb-nav-link-icon"><i class="fa fa-book"></i></div> --}}
    {{-- Cource --}}
    {{-- <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div> --}}
    {{-- </a> --}}
<div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
    <nav class="sb-sidenav-menu-nested nav">

        {{-- <a class="nav-link" href="">Typing</a>
        <a class="nav-link" href="studenttheory.index">Theory</a> --}}
        <!-- <a class="nav-link" href="#">Notice</a> -->
    </nav>
</div>
{{-- <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false"
    aria-controls="collapsePages"> --}}
    {{-- <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
    Typing Test
    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div> --}}
    {{--
</a>
<div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
        </a>
        <a class="nav-link" href="#">PASSAGE</a>
        <a class="nav-link" href="#">LETTER</a>
        <a class="nav-link" href="#">STATEMENT</a>
        <a class="nav-link" href="#">EMAIL</a>
        <a class="nav-link" href="#">ALL TEST</a>
        </a>
    </nav>
</div> --}}
{{-- <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse" aria-expanded="false"
    aria-controls="collapse">
    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
    Theory Test
    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
</a> --}}
{{-- <div class="collapse" id="collapse" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
    <nav class="sb-sidenav-menu-nested nav">

        <a class="nav-link" href="">MS Word</a>
        <a class="nav-link" href="#">MS Excel</a>
        <a class="nav-link" href="#">MS Power point</a>
        <a class="nav-link" href="#">PageMaker</a>
        <a class="nav-link" href="#">Operating System</a>
        <a class="nav-link" href="#">Email</a>
        <a class="nav-link" href="#">All Test</a>
    </nav>
</div> --}}
</div>
</div>

<div class="sb-sidenav-footer">
    <div class="small">Logged in as: Field Executive</div>
    {{ auth()->user()->name }}
</div>
@endif
</nav>
</div>