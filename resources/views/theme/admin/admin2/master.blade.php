@include('theme.admin.admin2.header')   

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid">
        
        <div class="page-header navbar navbar-fixed-top">
           
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                @include('theme.admin.admin2.logo') 
               
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>               
               
                <!-- Menu top -->
                <div class="page-top">
                    <div class="top-menu">
                        @include('theme.admin.admin2.top')
                    </div>                    
                </div>
            </div>
            
        </div>
       
        <div class="clearfix"> </div>
        
        <div class="page-container">
            <div class="page-sidebar-wrapper">
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- Sidebar -->
                    @include('theme.admin.admin2.sidebar')
                </div>
            </div>
           
            <div class="page-content-wrapper">

                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">                    
                    
                    <!-- Content-->
                    <div class="note">                        
                        @yield('content')
                    </div>                   

                </div>
            </div>
           
        </div>
        
        <!-- FOOTER -->
        @include('theme.admin.admin2.footer')
       
@include('theme.admin.admin2.bottom')  