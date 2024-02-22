    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>

    <!-- Sweet Alerts js -->
    <script src="{{ URL::asset('/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

    {{-- Now UI JS --}}
    <script src="{{ asset('assets/js/now-ui-kit.js?v=1.3.0') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/nouislider.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap-switch.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('/assets/js/core/jquery.min.js') }}"></script>

    {{-- Captcha --}}
    {{-- <script src="https://www.google.com/recaptcha/api.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?render={{ env('RECAPTCHA_SITE_KEY') }}"></script> --}}

    {{-- CDN Javascript --}}
    <script src="https://npmcdn.com/flickity@2/dist/flickity.pkgd.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js" integrity="sha512-0bEtK0USNd96MnO4XhH8jhv3nyRF0eK87pJke6pkYf3cM0uDIhNJy9ltuzqgypoIFXw3JSuiy04tVk4AjpZdZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Summernote js -->
    <script src="{{ asset('assets/libs/summernote/summernote-bs4.min.js') }}"></script>

    <script>
        function toTitleCase(str) {
            return str.toLowerCase().split(' ').map(function(word) {
                return (word.charAt(0).toUpperCase() + word.slice(1));
            }).join(' ');
        }
        $(document).scroll(function () {
            var $nav = $(".navbar-landing");
            $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
        });

        // Navigation Button
        $(".about-us-btn").click(function() {
            $('html,body').animate({
                scrollTop: $("#about-us").offset().top},
                'slow');
        });
        $(".service-plan-btn").click(function() {
            $('html,body').animate({
                scrollTop: $(".slider-layanan").offset().top},
                'slow');
        });
        $(".movement-btn").click(function() {
            $('html,body').animate({
                scrollTop: $("#ypt_wrapper").offset().top},
                'slow');
        });
        $(".contact-us-btn").click(function() {
            $('html,body').animate({
                scrollTop: $("#contact-us").offset().top},
                'slow');
        });

        // Slider Layanan
        class SliderClip {
            constructor(el) {
                this.el = el;
                this.Slides = Array.from(this.el.querySelectorAll('.slide'));
                this.Nav = Array.from(this.el.querySelectorAll('aside a'));
                this.totalSlides = this.Slides.length;
                this.current = 0;
                this.autoPlay = true; //true or false
                this.timeTrans = 7000; //transition time in milliseconds
                this.IndexElements = [];
                this.start = undefined;
                this.swiping = false;
                this.swipingDistance = 0;

                for (let i = 0; i < this.totalSlides; i++) {
                    this.IndexElements.push(i);
                }

                this.setCurret();
                this.initEvents();
             }
            setCurret() {
                this.Slides[this.current].classList.add('current');
                this.Nav[this.current].classList.add('current_dot');
            }
            initEvents() {
                const self = this;

                this.Nav.forEach(dot => {
                    dot.addEventListener('click', ele => {
                    ele.preventDefault();
                    this.changeSlide(this.Nav.indexOf(dot));
                    self.current = this.Nav.indexOf(dot);
                    });
                });

                this.el.addEventListener('mouseenter', () => self.autoPlay = false);
                this.el.addEventListener('mouseleave', () => self.autoPlay = true);
                this.el.addEventListener('touchstart', e => this.touchStart(e));
                this.el.addEventListener('touchmove', e => this.touchMove(e));
                this.el.addEventListener('touchend', e => this.touchEnd(e));

                setInterval(function () {
                    if (self.autoPlay) {
                        // console.log(self.current);
                    self.current = self.current < self.Slides.length - 1 ? self.current + 1 : 0;
                    self.changeSlide(self.current);
                    }
                }, this.timeTrans);

            }

            changeSlide(index) {

                this.Nav.forEach(allDot => allDot.classList.remove('current_dot'));

                this.Slides.forEach(allSlides => allSlides.classList.remove('prev', 'current'));

                const getAllPrev = value => value < index;

                const prevElements = this.IndexElements.filter(getAllPrev);

                prevElements.forEach(indexPrevEle => this.Slides[indexPrevEle].classList.add('prev'));

                this.Slides[index].classList.add('current');
                this.Nav[index].classList.add('current_dot');
            }

            touchStart (e){
                if (e.touches.length !== 1) return
                if (!e.target.matches(`#service-product, #services-product *`)) return
                this.start = e.touches[0].screenX;
                this.swiping = true;
            }
            touchMove (e){
                if (e.touches.length !== 1) return
                if (!this.swiping) return
                this.swipingDistance = e.touches[0].screenX - this.start;
            }
            touchEnd (e){
                const self = this;

                if (this.swipingDistance < 0) {
                    self.current = self.current < self.Slides.length - 1 ? self.current + 1 : 0;
                    self.changeSlide(self.current);
                }
                if (this.swipingDistance > 0) {
                    self.current = self.current - 1 !== -1 ? self.current - 1 : self.Slides.length -1;
                    self.changeSlide(self.current);
                }
                this.start = 0;
                this.swiping = false
                this.swipingDistance = 0;
            }
        }


        const slider = new SliderClip(document.querySelector('.slider-layanan'));

        function onSubmitCaptcha(token) {
            document.getElementById("form-captcha").submit();
        }

        function onClicContactUs(e) {
        e.preventDefault();
        grecaptcha.ready(function() {
          grecaptcha.execute('reCAPTCHA_site_key', {action: 'submit'}).then(function(token) {
              // Add your logic to submit to your backend server here.
          });
        });
      }

      // Video PLayer Landing Page
      
      // Load Youtube IFrame Player API code asynchronously.
        var tag = document.createElement("script"); //Add a script tag
        tag.src = "https://www.youtube.com/iframe_api"; //Set the SRC to get the API
        var firstScriptTag = document.getElementsByTagName("script")[0]; //Find the first script tag in the html
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag); //Put this script tag before the first one

        var player; //The Youtube API player
        var ypt_player = document.getElementById("player");
        var playlistID = ypt_player.getAttribute("data-pl");
        var ypt_thumbs = document.getElementById("ypt_thumbs");
        var nowPlaying = "ypt-now-playing"; //For marking the current thumb
        var nowPlayingClass = "." + nowPlaying;
        var ypt_index = 0; //Playlists begin at the first video by default

        function getPlaylistData(playlistID, video_list, page_token) {
        //Makes a single request to Youtube Data API
        var apiKey = "AIzaSyCtanJNgmk9MYg8AEXfPAIkca5zqTyASEs"; // Don't steal this! There is a limit set of 150 hits per day.
        var theUrl =
            "https://www.googleapis.com/youtube/v3/playlistItems?part=snippet,contentDetails,status" +
            "&maxResults=" +
            50 + //Can be anything from 1-50
            "&playlistId=" +
            playlistID +
            "&key=" +
            apiKey;
        if (page_token) {
            theUrl += "&pageToken=" + page_token;
        } //If there is page token, start there
        var xmlHttp = null;
        xmlHttp = new XMLHttpRequest();
        xmlHttp.open("GET", theUrl, true);
        xmlHttp.send(null);
        xmlHttp.onload = function (e) {
            //when the request comes back
            buildJSON(xmlHttp.responseText, video_list, playlistID); //send the data to buildJSON
        };
        }

        function buildJSON(response, list, playlistID) {
        //Takes the text response and adds it to any existing JSON data
        var results = JSON.parse(response); //Parse it
        if (!list) {
            list = [];
        } //If there is no list to add to, make one
        list.push.apply(list, results.items); //Add JSON data to the list
        if (results.nextPageToken) {
            //If the results included a page token
            getPlaylistData(playlistID, list, results.nextPageToken); //Create another data API request including the current list and page token
        } else {
            //If there is not a next-page token
            buildHTML(list); //Send the JSON data to buildHTML
        }
        }

        function buildHTML(data) {
        //Turns JSON data into HTML elements
        var list_data = ""; //A string container
        for (i = 0; i < data.length; i++) {
            //Do this to each item in the JSON list
            var item = data[i].snippet; //Each Youtube playlist item snippet
            //var details = data[i].contentDetails; //Playlist API does not list videos durations
            if (!item.thumbnails.medium) {
            continue;
            } //private videos do no reveal thumbs, so skip them

            // console.log(((item.title).split('Pengamat Politik Yusak Farchan - ').join('')).length);
            let title = ((((item.title).split('Pengamat Politik Yusak Farchan - ').join('')).split('Pengamat Politik Yusak Farchan dalam').join('')).length > 50) ? (((item.title).split('Pengamat Politik Yusak Farchan - ').join('')).split('Pengamat Politik Yusak Farchan dalam').join('')).substr(0,50) + '...' : (((item.title).split('Pengamat Politik Yusak Farchan - ').join('')).split('Pengamat Politik Yusak Farchan dalam').join('')); 

            list_data +=
            '<div class="yt-thumb carousel-cell" data-ypt-index="' +
            i +
            '"><div class="yt-single"><div class="yt-img"><img class="img-fluid" alt="' +
            item.title.replace(/"/g, "'") +
            '" src="' +
            item.thumbnails.medium.url +
            '"/></div><div class="yt-single-description p-3 pt-2"><div class="date font-body mb-3"><i class="fas fa-calendar-alt me-2"></i></i><span>' +
            moment(data[i].contentDetails.videoPublishedAt).format("MMMM Do YYYY") +
            '</span></div><h4 class="yt-title">' +
            title +
            "</h4></div></div></div>"; //create an element and add it to the list
            // console.log(item.title);
        }
        ypt_thumbs.innerHTML = list_data; //After the for loop, insert that list of links into the html
        }

        // function yptThumbHeight(){
        //   ypt_thumbs.style.height = document.getElementById('player').clientHeight + 'px'; //change the height of the thumb list
        //   //breaks if ypt_player.clientHeight + 'px';
        // }

        function onPlayerReady(event) {
        //Once the player is ready...
        //yptThumbHeight(); //Set the thumb containter height
        }

        getPlaylistData(playlistID);

        //Once the Youtube Iframe API is ready...
        window.onYouTubeIframeAPIReady = function () {
        // Creates an <iframe> (and YouTube player) after the API code downloads. must be globally available
        player = new YT.Player("player", {
            height: "360",
            width: "640",
            playerVars: {
            listType: "playlist",
            list: playlistID,
            autoplay: 0,
            showinfo: 0,
            modestbranding: 0,
            cc_load_policy: 0,
            rel: 0
            },
            events: {
            onReady: onPlayerReady,
            onStateChange: onPlayerStateChange
            }
        });

        // When the player does something...
        function onPlayerStateChange(event) {
            //Let's check on what video is playing
            var currentIndex = player.getPlaylistIndex();
            var the_thumbs = ypt_thumbs.getElementsByClassName("yt-thumb");
            var currentThumb = the_thumbs[currentIndex];

            if (event.data == YT.PlayerState.PLAYING) {
            //A video is playing

            for (var i = 0; i < the_thumbs.length; i++) {
                //Loop through the thumbs
                the_thumbs[i].className = "yt-thumb carousel-cell"; //Remove nowplaying from each thumb
            }

            currentThumb.className = "yt-thumb carousel-cell " + nowPlaying; //this will also erase any other class belonging to the li
            //need to do a match looking for now playing
            }

            //if a video has finished, and the current index is the last video, and that thumb already has the nowplaying class
            if (
            event.data == YT.PlayerState.ENDED &&
            currentIndex == the_thumbs.length - 1 &&
            the_thumbs[currentIndex].className == nowPlaying
            ) {
            jQuery.event.trigger("playlistEnd"); //Trigger a global event
            }
        } //function onPlayerStateChange(event)

        //When the user changes the window size...
        window.addEventListener('resize', function(event){
          yptThumbHeight(); //change the height of the thumblist
        });

        //When the user clicks an element with a playlist index...
        jQuery(document).on(
            "click",
            '[data-ypt-index]:not(".ypt-now-playing")',
            function (e) {
            //click on a thumb that is not currently playing
            ypt_index = Number(jQuery(this).attr("data-ypt-index")); //Get the ypt_index of the clicked item
            if (navigator.userAgent.match(/(iPad|iPhone|iPod)/g)) {
                //if IOS
                player.cuePlaylist({
                //cue is required for IOS 7
                listType: "playlist",
                list: playlistID,
                index: ypt_index,
                suggestedQuality: "hd720" //quality is required for cue to work, for now
                // https://code.google.com/p/gdata-issues/issues/detail?id=5411
                }); //player.cuePlaylist
            } else {
                //yay it's not IOS!
                player.playVideoAt(ypt_index); //Play the new video, does not work for IOS 7
            }
            jQuery(nowPlayingClass).removeClass(nowPlaying); //Remove "now playing" from the thumb that is no longer playing
            //When the new video starts playing, its thumb will get the now playing class
            }
        ); //jQuery(document).on('click','#ypt_thumbs...
        };


        // Set Flickity Slider once YouTube Thumbnails have loaded
        setTimeout(function () {
        var elem = document.querySelector(".youtube-carousel");
        var flkty = new Flickity(elem, {
            // options
            cellAlign: "left",
            wrapAround: true,
            draggable: false,
            pageDots: false
        });
        }, 1000);

        // Our Team Landing
        const track = document.getElementById("image-track");

            window.onmousedown = e => {
            track.dataset.mouseDownAt = e.clientX;
            }

            window.onmouseup = () => {
            track.dataset.mouseDownAt = "0";
            track.dataset.prevPercentage = track.dataset.percentage;
            }

            window.onmousemove = e => {
            if (track.dataset.mouseDownAt == "0") return;
            const mouseDelta = parseFloat(track.dataset.mouseDownAt) - e.clientX,
                    maxDelta = window.innerWidth / 2;
            
            const percentage = (mouseDelta / maxDelta) * -100,
                    nextPercentageUnconstrained = parseFloat(track.dataset.prevPercentage) + percentage,
                    nextPercentage = Math.max(Math.min(nextPercentageUnconstrained, -15), -100);
            
            track.dataset.percentage = nextPercentage;
            
            track.animate({transform: `translate(${nextPercentage}%, -50%)`},{ duration: 1200, fill: "forwards" });

            let children = document.getElementById("image-track").childElementCount;

            for(const image of track.getElementsByClassName("image")) {
                image.animate({
                objectPosition: `${nextPercentage / children + (50+50/children)}% center`}, { duration: 1200, fill: "forwards"});
            }
        }

    </script>


    <!-- App js -->
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
    @yield('script')
