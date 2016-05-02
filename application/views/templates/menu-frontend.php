    <!-- Static navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url();?>">Peak</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">

             <!-- Client Management -->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Lessons <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url();?>clients/search">Search</a></li>
                <li><a href="<?php echo base_url();?>clients/create">Create</a></li>
              </ul>
            </li>

            <!-- Grammar section -->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Grammar <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url();?>grammar/consonants">Consonants</a></li>
                <li><a href="<?php echo base_url();?>grammar/sketch">Draw letters</a></li>
              </ul>
            </li>

          </ul>
          <ul class="nav navbar-nav navbar-right">
          <form class="navbar-form navbar-right" action="<?php echo base_url();?>clients/search/any">
            <div class="form-group">
              <input type="text" name="criterion" placeholder="Search a word" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Search</button>
            <a href="<?php echo base_url();?>connection/login" class="btn btn-warning" title="Login to backend (access limited)"><span class="glyphicon glyphicon-wrench"></span></a>
          </form>

          </ul>
        </div>
      </div>
    </nav>
