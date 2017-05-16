        function audioPlayer(){
            var currentSong = 0;
            $("#audioPlayer")[0].src = $("#playlist tr td a")[0];
            //comment or uncomment below line to revent form auto-play
            //$("#audioPlayer")[0].play();
            $("#playlist tr").click(function(e){
               e.preventDefault(); 
               $("#audioPlayer")[0].src = this;
               $("#audioPlayer")[0].play();
               $("#playlist tr td").removeClass("current-song");
                currentSong = $(this).parent().index();
                $(this).parent().addClass("current-song");
            });
            
             //to add next song in playlist where is something wrong it's keep taking 2nd track
                $("#audioPlayer")[0].addEventListener("ended", function(){
               currentSong++;
                if(currentSong == $("#playlist tr td a").length)
                    currentSong = 0;
                $("#playlist tr td").removeClass("current-song");
                $("#playlist tr td:eq("+currentSong+")").addClass("current-song");
                $("#audioPlayer")[0].src = $("#playlist tr td a")[currentSong].href;
                $("#audioPlayer")[0].play();
            });
        }