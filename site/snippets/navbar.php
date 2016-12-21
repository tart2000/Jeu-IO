<!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo $site->url() ?>"><?php echo $site->title() ?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <?php foreach($pages->visible() as $p): ?>
                <li<?php e($p->isOpen(), ' class="active"') ?>>
                  <a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
                </li>
            <?php endforeach ?>     
          </ul>

          <?php if($page->template() != 'cards') : ?>
            <a class="btn btn-default navbar-btn navbar-right" href="http://rhizome-strategies.com" target="_blank">Commander un atelier</a>
          <?php endif ?>
          <?php if($page->template() == 'cards') : ?>
            <form class="navbar-form navbar-right">
              <select class="form-control" class="selectpicker" id="selectFilter">
                <option value="all">Toutes les cartes</option>
                <option value="researchx">Rechercher</option>
                <option value="capacityx">Développement</option>
                <option value="createx">Créer</option>
                <option value="explorex">Explorer</option>
                <option value="experimentx">Expérimenter</option>
                <option value="evaluatex">Évaluer</option>
              </select>
            </form>

            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Classer<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo $page->url() ?>/sort:alpha">A > Z</a></li>
                <li><a href="<?php echo $page->url() ?>/sort:value">Valeur IØ</a></li>
                <li><a href="<?php echo $page->url() ?>/sort:phases">Phases</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">CPR</li>
                <li><a href="<?php echo $page->url() ?>/sort:c">C</a></li>
                <li><a href="<?php echo $page->url() ?>/sort:p">P</a></li>
                <li><a href="<?php echo $page->url() ?>/sort:r">R</a></li>
              </ul>
            </li>
            </ul>

            
          <?php endif ?>

        </div><!--/.nav-collapse -->
      </div>
    </nav>