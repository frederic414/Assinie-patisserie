      @include('include.header')
          
          {{--debut contenu--}}

      @yield('contenu')

          {{--fin contenu--}}
        
      @include('include.footer')
            
        <!-- loader -->
        <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
      
      
        <script src="{{asset('frontend/js/jquery.min.js')}}"></script>
        <script src="{{asset('frontend/js/jquery-migrate-3.0.1.min.js')}}"></script>
        <script src="{{asset('frontend/js/popper.min.js')}}"></script>
        <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('frontend/js/jquery.easing.1.3.js')}}"></script>
        <script src="{{asset('frontend/js/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('frontend/js/jquery.stellar.min.js')}}"></script>
        <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('frontend/js/aos.js')}}"></script>
        <script src="{{asset('frontend/js/jquery.animateNumber.min.js')}}"></script>
        <script src="{{asset('frontend/js/bootstrap-datepicker.js')}}"></script>
        <script src="{{asset('frontend/js/scrollax.min.js')}}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
        <script src="{{asset('frontend/js/google-map.js')}}"></script>
        <script src="{{asset('frontend/js/main.js')}}"></script>
        @livewireScripts
          
    </body>
</html>