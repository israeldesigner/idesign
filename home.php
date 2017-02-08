
  <div class="container-fluid main-principal" role="main">
      <div class="row">
            <section class="navigation">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
                            <nav class="pull">
                                <ul class="top-nav">
                                    <li><a href="<?php echo ROOT;?>">Sobre meu Trabalho <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                                    <li><a href="" download>Curriculum Download<span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                                    <li><a href="<?php echo ROOT;?>/portfolio">Portfólio <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                                    <li class="nav-last"><a href="#myModal" data-toggle="modal">Curriculum on-line<span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
            <section class="hero" id="hero">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <a href="#"><i class="fa fa-navicon fa-2x nav_slide_button"></i></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <h1 class="animated bounceInDown">iDesign</h1>
                            <p class="animated fadeInUpDelay">Inovação, Design e Desenvolvimento web</p>
                            <p class="animated fadeInUpDelay">em Breve o lançamento</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 col-md-offset-5 text-center">
                            <a href="http://player.vimeo.com/video/87701971?title=0&amp;byline=0&amp;portrait=0&amp;color=1883ad&amp;autoplay=1" class="hero-play-btn various fancybox.iframe">Play Button</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center">
                            <a href=""  style="visibility:hidden" class="get-started-btn">Começe aqui</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog mod modal-curriculum" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
          </div>
          <div class="modal-body">
            <?php include('curriculum.php')?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">sair</button>
          </div>
        </div>
      </div>
    </div>
</body>
</html>
