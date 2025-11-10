<div class="sidebar d-flex flex-column p-3">
    <a href="dashboard.html" class="d-flex flex-column align-items-center mb-5 text-center">
        <img src="{{ asset('/themes/dashboard-theme/images/wb-logo.png') }}" class="img-fluid" alt="e-Allotment of Rental Housing Estate">
        <div class="dashboard-logo">
            <div class="fs-5 fw-semibold lh-1">e-Allotment of Rental Housing Estate</div>
            <small>Housing Department <br/> Government of West Bengal</small>
        </div>
    </a>
    <ul class="nav nav-pills flex-column mb-auto cus-dashboard">
        @role('Admin')
        <li class="nav-item">
            <a href="{{route('dashboard')}}" class="nav-link active">
                <i class="fa fa-tachometer fa-lg" aria-hidden="true"></i>
                Dashboard
            </a>
        </li>
        <li class="nav-item has-submenu">
            <a class="nav-link" href="#">
                <i class="fa fa-user fa-lg mx-1" aria-hidden="true"></i>
                Role Management
                <i class="fa fa-angle-down fa-lg float-end mt-1" aria-hidden="true"></i>
            </a>
            <ul class="submenu collapse">
                <li>
                    <a class="nav-link" href="{{ route('displayRoleList') }}">
                        <i class="fa fa-list-ul fa-lg mx-1" aria-hidden="true"></i>
                        View Role List
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item has-submenu">
            <a class="nav-link" href="#">
                <i class="fa fa-user-circle-o fa-lg mx-1" aria-hidden="true"></i>
                User Management
                <i class="fa fa-angle-down fa-lg float-end mt-1" aria-hidden="true"></i>
            </a>
            <ul class="submenu collapse">
                <li>
                    <a class="nav-link" href="{{ route('displayUserList') }}">
                        <i class="fa fa-list-ul fa-lg mx-1" aria-hidden="true"></i>
                        View User List
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="{{ route('displayUserRoleList') }}">
                        <i class="fa fa-list-alt fa-lg mx-1" aria-hidden="true"></i>
                        View User-Role Mapping
                    </a>
                </li>
            </ul>
        </li>
        @endrole
        @role('DDO')
        <li class="nav-item">
            <a href="{{route('dashboard')}}" class="nav-link active">
                <i class="fa fa-tachometer fa-lg" aria-hidden="true"></i>
                Dashboard
            </a>
        </li>
        <li class="nav-item has-submenu">
            <a class="nav-link" href="#">
                <i class="fa fa-user-circle-o fa-lg mx-1" aria-hidden="true"></i>
                New Application
                <i class="fa fa-angle-down fa-lg float-end mt-1" aria-hidden="true"></i>
            </a>
            <ul class="submenu collapse">
                <li>
                    <a class="nav-link" href="{{ route('new-application') }}">
                        <i class="fa fa-clipboard fa-lg mx-1" aria-hidden="true"></i>New Application
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="#">
                        <i class="fa fa-retweet fa-lg mx-1" aria-hidden="true"></i>Vertical Shifting
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="#">
                        <i class="fa fa-check-square-o fa-lg mx-1" aria-hidden="true"></i>Category Shifting
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item has-submenu">
            <a class="nav-link" href="#">
                <i class="fa fa-file-text-o fa-lg mx-1" aria-hidden="true"></i>
                Allotted Application
                <i class="fa fa-angle-down fa-lg float-end mt-1" aria-hidden="true"></i>
            </a>
            <ul class="submenu collapse">
                <li>
                    <a class="nav-link" href="#">
                    <i class="fa fa-clipboard fa-lg mx-1" aria-hidden="true"></i>New Application
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="#">
                        <i class="fa fa-retweet fa-lg mx-1" aria-hidden="true"></i>
                        Vertical Shifting
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="#">
                        <i class="fa fa-check-square-o fa-lg mx-1" aria-hidden="true"></i>
                        Category Shifting
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="{{route('dashboard')}}" class="nav-link">
                <i class="fa fa-list fa-lg mx-1" aria-hidden="true"></i>
                Applicant List With Flat Possession
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('dashboard')}}" class="nav-link">
                <i class="fa fa-share-square-o fa-lg mx-1" aria-hidden="true"></i>
                Applicant List With Flat Release
            </a>
        </li>
        @endrole
        @role('Housing Supervisor')
        <li class="nav-item">
            <a href="{{route('dashboard')}}" class="nav-link active">
                <i class="fa fa-tachometer fa-lg" aria-hidden="true"></i>
                Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('dashboard')}}" class="nav-link">
                <i class="fa fa-search fa-lg" aria-hidden="true"></i>
                Search Application Details
            </a>
        </li>
        <li class="nav-item has-submenu">
            <a class="nav-link" href="#">
                <i class="fa fa-user-circle-o fa-lg mx-1" aria-hidden="true"></i>
                New Application
                <i class="fa fa-angle-down fa-lg float-end mt-1" aria-hidden="true"></i>
            </a>
            <ul class="submenu collapse">
                <li>
                    <a class="nav-link" href="{{ url('view-application-list-dashboard') }}">
                        <i class="fa fa-clipboard fa-lg mx-1" aria-hidden="true"></i>New Application
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="#">
                        <i class="fa fa-retweet fa-lg mx-1" aria-hidden="true"></i>Vertical Shifting
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="#">
                        <i class="fa fa-check-square-o fa-lg mx-1" aria-hidden="true"></i>Category Shifting
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item has-submenu">
            <a class="nav-link" href="#">
                <i class="fa fa-file-text-o fa-lg mx-1" aria-hidden="true"></i>
                Allotted Application
                <i class="fa fa-angle-down fa-lg float-end mt-1" aria-hidden="true"></i>
            </a>
            <ul class="submenu collapse">
                <li>
                    <a class="nav-link" href="#">
                    <i class="fa fa-clipboard fa-lg mx-1" aria-hidden="true"></i>New Application
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="#">
                        <i class="fa fa-retweet fa-lg mx-1" aria-hidden="true"></i>
                        Vertical Shifting
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="#">
                        <i class="fa fa-check-square-o fa-lg mx-1" aria-hidden="true"></i>
                        Category Shifting
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item has-submenu">
            <a class="nav-link" href="#">
                <i class="fa fa-list fa-lg mx-1" aria-hidden="true"></i>
                Occupant & Applicant List
                <i class="fa fa-angle-down fa-lg float-end mt-1" aria-hidden="true"></i>
            </a>
            <ul class="submenu collapse">
                <li>
                    <a class="nav-link" href="#">
                    <i class="fa fa-list-alt fa-lg mx-1" aria-hidden="true"></i>Physical Applicant List
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="#">
                        <i class="fa fa-home fa-lg mx-1" aria-hidden="true"></i>
                        Existing Occupant List
                    </a>
                </li>
            </ul>
        </li>
        @endrole
        @role('Housing Approver')
        <li class="nav-item">
            <a href="{{route('dashboard')}}" class="nav-link active">
                <i class="fa fa-tachometer fa-lg" aria-hidden="true"></i>
                Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('dashboard')}}" class="nav-link active">
                <i class="fa fa-search fa-lg" aria-hidden="true"></i>
                Search Application Details
            </a>
        </li>
        <li class="nav-item has-submenu">
            <a class="nav-link" href="#">
                <i class="fa fa-user-circle-o fa-lg mx-1" aria-hidden="true"></i>
                New Application
                <i class="fa fa-angle-down fa-lg float-end mt-1" aria-hidden="true"></i>
            </a>
            <ul class="submenu collapse">
                <li>
                    <a class="nav-link" href="#">
                        <i class="fa fa-clipboard fa-lg mx-1" aria-hidden="true"></i>New Application
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="#">
                        <i class="fa fa-retweet fa-lg mx-1" aria-hidden="true"></i>Vertical Shifting
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="#">
                        <i class="fa fa-check-square-o fa-lg mx-1" aria-hidden="true"></i>Category Shifting
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item has-submenu">
            <a class="nav-link" href="#">
                <i class="fa fa-file-text-o fa-lg mx-1" aria-hidden="true"></i>
                Allotted Application
                <i class="fa fa-angle-down fa-lg float-end mt-1" aria-hidden="true"></i>
            </a>
            <ul class="submenu collapse">
                <li>
                    <a class="nav-link" href="#">
                    <i class="fa fa-clipboard fa-lg mx-1" aria-hidden="true"></i>New Application
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="#">
                        <i class="fa fa-retweet fa-lg mx-1" aria-hidden="true"></i>
                        Vertical Shifting
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="#">
                        <i class="fa fa-check-square-o fa-lg mx-1" aria-hidden="true"></i>
                        Category Shifting
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item has-submenu">
            <a class="nav-link" href="#">
                <i class="fa fa-list fa-lg mx-1" aria-hidden="true"></i>
                Occupant & Applicant List
                <i class="fa fa-angle-down fa-lg float-end mt-1" aria-hidden="true"></i>
            </a>
            <ul class="submenu collapse">
                <li>
                    <a class="nav-link" href="#">
                    <i class="fa fa-list-alt fa-lg mx-1" aria-hidden="true"></i>Physical Applicant List
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="#">
                        <i class="fa fa-home fa-lg mx-1" aria-hidden="true"></i>
                        Existing Occupant List
                    </a>
                </li>
            </ul>
        </li>
        @endrole
        
        @role('Housing Official')
        <li class="nav-item">
            <a href="{{route('dashboard')}}" class="nav-link active">
                <i class="fa fa-tachometer fa-lg mx-1" aria-hidden="true"></i>
                Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('dashboard')}}" class="nav-link active">
                <i class="fa fa-search fa-lg mx-1" aria-hidden="true"></i>
                Search Application Details
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('dashboard')}}" class="nav-link active">
                <i class="fa fa-calendar-times-o fa-lg mx-1" aria-hidden="true"></i>
                Auto-Cancellation List
            </a>
        </li>
        <li class="nav-item has-submenu">
            <a class="nav-link" href="#">
                <i class="fa fa-hand-pointer-o fa-lg mx-1" aria-hidden="true"></i>
                Special Recommendation
                <i class="fa fa-angle-down fa-lg float-end mt-1" aria-hidden="true"></i>
            </a>
            <ul class="submenu collapse">
                <li>
                    <a class="nav-link" href="#">
                        <i class="fa fa-plus fa-lg mx-1" aria-hidden="true"></i>Add to Special Recommendation List
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="#">
                        <i class="fa fa-pencil-square-o fa-lg mx-1" aria-hidden="true"></i>Edit Special Recommendation
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="#">
                        <i class="fa fa-file-text fa-lg mx-1" aria-hidden="true"></i>Final List of Special Recommendation
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item has-submenu">
            <a class="nav-link" href="#">
                <i class="fa fa-pie-chart fa-lg mx-1" aria-hidden="true"></i>
                Allottment
                <i class="fa fa-angle-down fa-lg float-end mt-1" aria-hidden="true"></i>
            </a>
            <ul class="submenu collapse">
                <li>
                    <a class="nav-link" href="#">
                    <i class="fa fa-clipboard fa-lg mx-1" aria-hidden="true"></i>Run Allotment
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="#">
                        <i class="fa fa-home fa-lg mx-1" aria-hidden="true"></i>
                        Approve Allotment
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="#">
                        <i class="fa fa-list-alt fa-lg mx-1" aria-hidden="true"></i>
                        Flat Type Wise Waiting List
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="#">
                        <i class="fa fa-building-o fa-lg mx-1" aria-hidden="true"></i>
                        Vacancy List
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="#">
                        <i class="fa fa-file-text fa-lg mx-1" aria-hidden="true"></i>
                        Allotment List
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item has-submenu">
            <a class="nav-link" href="#">
                <i class="fa fa-id-card fa-lg mx-1" aria-hidden="true"></i>
                Licenses
                <i class="fa fa-angle-down fa-lg float-end mt-1" aria-hidden="true"></i>
            </a>
            <ul class="submenu collapse">
                <li>
                    <a class="nav-link" href="#">
                    <i class="fa fa-plus-circle fa-lg mx-1" aria-hidden="true"></i>Generate License
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="#">
                        <i class="fa fa-list-alt fa-lg mx-1" aria-hidden="true"></i>
                        View Generated Licenses
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item has-submenu">
            <a class="nav-link" href="#">
                <i class="fa fa-database fa-lg mx-1" aria-hidden="true"></i>
                Legacy Data
                <i class="fa fa-angle-down fa-lg float-end mt-1" aria-hidden="true"></i>
            </a>
            <ul class="submenu collapse">
                <li>
                    <a class="nav-link" href="#">
                    <i class="fa fa-address-card-o fa-lg mx-1" aria-hidden="true"></i>Legacy Applicant Entry
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="#">
                        <i class="fa fa-list-alt fa-lg mx-1" aria-hidden="true"></i>
                        Legacy Applicant List
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="{{route('dashboard')}}" class="nav-link active">
                <i class="fa fa-building fa-lg mx-1" aria-hidden="true"></i>
                Treasury Estate Mapping
            </a>
        </li>
        <li class="nav-item has-submenu">
            <a class="nav-link" href="#">
                <i class="fa fa-list fa-lg mx-1" aria-hidden="true"></i>
                Occupant & Applicant List
                <i class="fa fa-angle-down fa-lg float-end mt-1" aria-hidden="true"></i>
            </a>
            <ul class="submenu collapse">
                <li>
                    <a class="nav-link" href="#">
                    <i class="fa fa-list-alt fa-lg mx-1" aria-hidden="true"></i>Physical Applicant List
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="#">
                        <i class="fa fa-home fa-lg mx-1" aria-hidden="true"></i>
                        Existing Occupant List
                    </a>
                </li>
            </ul>
        </li>
        @endrole
        @role('Applicant')
        <li class="nav-item">
            <a href="{{route('dashboard')}}" class="nav-link active">
                <i class="fa fa-tachometer fa-lg" aria-hidden="true"></i>
                Dashboard
            </a>
        </li>
        <li class="nav-item has-submenu">
            <a class="nav-link" href="#">
                <i class="bi bi-buildings-fill fa-lg mx-1" aria-hidden="true"></i>
                Online Application
                <i class="fa fa-angle-down fa-lg float-end mt-1" aria-hidden="true"></i>
            </a>
            <ul class="submenu collapse">
                <li>
                    <a class="nav-link" href="{{route('new-application')}}">
                        <i class="fa fa-building fa-lg mx-1" aria-hidden="true"></i>New Application
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="#">
                        <i class="fa fa-th-list fa-lg mx-1" aria-hidden="true"></i>Vertical Shifting
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="#">
                        <i class="fa fa-plus fa-lg mx-1" aria-hidden="true"></i>Category Shifting
                    </a>
                </li>
            </ul>
        </li>
        @endrole
        @role('Occupant')
        @endrole
        @role('Division')
        <li class="nav-item">
            <a href="{{route('dashboard')}}" class="nav-link active">
                <i class="fa fa-tachometer fa-lg" aria-hidden="true"></i>
                Dashboard
            </a>
        </li>
        <li class="nav-item has-submenu">
            <a class="nav-link" href="#">
                <i class="bi bi-buildings-fill fa-lg mx-1" aria-hidden="true"></i>
                RHE Data
                <i class="fa fa-angle-down fa-lg float-end mt-1" aria-hidden="true"></i>
            </a>
            <ul class="submenu collapse">
                <li>
                    <a class="nav-link" href="#">
                        <i class="fa fa-building fa-lg mx-1" aria-hidden="true"></i>RHE Wise Flat List
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="#">
                        <i class="fa fa-th-list fa-lg mx-1" aria-hidden="true"></i>RHE Flat Master
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="#">
                        <i class="fa fa-plus fa-lg mx-1" aria-hidden="true"></i>Add RHE Block
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item has-submenu">
            <a class="nav-link" href="#">
                <i class="fa fa-address-card-o fa-lg mx-1" aria-hidden="true"></i>
                Occupant Data
                <i class="fa fa-angle-down fa-lg float-end mt-1" aria-hidden="true"></i>
            </a>
            <ul class="submenu collapse">
                <li>
                    <a class="nav-link" href="#">
                    <i class="fa fa-clipboard fa-lg mx-1" aria-hidden="true"></i>Occupant Data Approve
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="#">
                        <i class="fa fa-list-alt fa-lg mx-1" aria-hidden="true"></i>
                        Occupant List
                    </a>
                </li>
            </ul>
        </li>
        @endrole
        @role('Sub-Division')
        <li class="nav-item">
            <a href="{{route('dashboard')}}" class="nav-link active">
                <i class="fa fa-tachometer fa-lg" aria-hidden="true"></i>
                Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('dashboard')}}" class="nav-link">
                <i class="fa fa-search fa-lg mx-1" aria-hidden="true"></i>
                Search Application Details
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('dashboard')}}" class="nav-link">
                <i class="fa fa-calendar-times-o fa-lg mx-1" aria-hidden="true"></i>
                Auto-Cancellation List
            </a>
        </li>
        <li class="nav-item has-submenu">
            <a class="nav-link" href="#">
                <i class="bi bi-buildings-fill fa-lg mx-1" aria-hidden="true"></i>
                RHE Data
                <i class="fa fa-angle-down fa-lg float-end mt-1" aria-hidden="true"></i>
            </a>
            <ul class="submenu collapse">
                <li>
                    <a class="nav-link" href="#">
                        <i class="fa fa-building fa-lg mx-1" aria-hidden="true"></i>RHE Wise Flat List
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="#">
                        <i class="fa fa-th-list fa-lg mx-1" aria-hidden="true"></i>RHE Flat Master
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="#">
                        <i class="fa fa-plus fa-lg mx-1" aria-hidden="true"></i>Add RHE Block
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item has-submenu">
            <a class="nav-link" href="#">
                <i class="fa fa-address-card-o fa-lg mx-1" aria-hidden="true"></i>
                Occupant Data
                <i class="fa fa-angle-down fa-lg float-end mt-1" aria-hidden="true"></i>
            </a>
            <ul class="submenu collapse">
                <li>
                    <a class="nav-link" href="{{ route('existing-occupant-add') }}">
                    <i class="fa fa-clipboard fa-lg mx-1" aria-hidden="true"></i>Occupant Data Entry
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="#">
                        <i class="fa fa-list-alt fa-lg mx-1" aria-hidden="true"></i>
                        Occupant List
                    </a>
                </li>
            </ul>
        </li>
        @endrole
    </ul>
    
    <!-- <button type="button" class="btn btn-outline-light border-dashed"><img src="./images/complaint_icon.png" /><br/>Complaint Management</button> -->
</div>
