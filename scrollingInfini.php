      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script>
            $(window).scroll(function(){
                console.log($(document).scrollTop());
                console.log($('.post:last').offset().top);
               if($(document).scrollTop() <= $(window).height() - $(window).height())
                {
                    $.ajax({
                        url:"load.php?lastid="+$(".post:last").attr("id"),
                        success:function(html){
                            
                            $('.container').append(html);
                                    
                        }
                    });       
                }
            });
        </script>
        </div>
    </body>