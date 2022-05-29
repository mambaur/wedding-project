<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> 
@include('layouts.header', ['title' => @$title ?? config('app.name', 'Wedding Project')])
<body class="app">   	
    <header class="app-header fixed-top">
        @include('layouts.navbar')
        @include('layouts.sidebar', [
            'menu' => @$menu ?? 'dashboard',
            'submenu' => @$submenu ?? ''
        ])
    </header><!--//app-header-->
    
    <div class="app-wrapper">
	    
	    @yield('content')
	    
	    <footer class="app-footer">
		    <div class="container text-center py-3">
		         <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
            <small class="copyright">Designed with <i class="fas fa-heart" style="color: #fb866a;"></i> by <a class="app-link" href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
		       
		    </div>
	    </footer><!--//app-footer-->
	    
    </div><!--//app-wrapper-->    					

 
    @include('layouts.footer')
    @yield('scripts')

</body>
</html> 

