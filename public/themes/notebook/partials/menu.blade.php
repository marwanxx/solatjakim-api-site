        <aside class="bg-light lter b-r aside-md hidden-print" id="nav">          
          <section class="vbox">

            <section class="w-f scrollable">
              <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333">
                
                <!-- nav -->
                <nav class="nav-primary hidden-xs">
                  <ul class="nav">
                    <li class="{{ set_active('home.index') }}">
                      <a href="{{ action('HomeController@getIndex') }}" class="{{ set_active('home.index') }}">
                        <i class="fa fa-home icon">
                          <b class="bg-primary"></b>
                        </i>
                        <span>Overview</span>
                      </a>
                    </li>

                    <li class="{{ set_active('reference') }}">
                      <a href="#reference"  >
                        <i class="fa fa-puzzle-piece icon">
                          <b class="bg-primary"></b>
                        </i>
                        <span class="pull-right">
                          <i class="fa fa-angle-down text"></i>
                          <i class="fa fa-angle-up text-active"></i>
                        </span>
                        <span>Public API</span>
                      </a>
                      <ul class="nav lt">
                        <li class="{{ set_active('static.index') }}">
                          <a href="{{ action('ReferenceController@getIndex') }}">
                            <i class="fa fa-angle-right"></i>
                            <span>GET static/today</span>
                          </a>
                        </li>
                        <li >
                          <a href="layout-r.html" >
                            <i class="fa fa-angle-right"></i>
                            <span>GET static/tomorrow</span>
                          </a>
                        </li>
                        <li >
                          <a href="layout-r.html" >
                            <i class="fa fa-angle-right"></i>
                            <span>GET static/this_week</span>
                          </a>
                        </li>
                        <li >
                          <a href="layout-r.html" >
                            <i class="fa fa-angle-right"></i>
                            <span>GET static/this_month</span>
                          </a>
                        </li>
                      
                        <li >
                          <a href="layout-r.html" >
                            <i class="fa fa-angle-right"></i>
                            <span>GET dynamic/date</span>
                          </a>
                        </li>
                        <li >
                          <a href="layout-r.html" >
                            <i class="fa fa-angle-right"></i>
                            <span>GET dynamic/month</span>
                          </a>
                        </li>
                        <li >
                          <a href="layout-r.html" >
                            <i class="fa fa-angle-right"></i>
                            <span>GET dynamic/year</span>
                          </a>
                        </li>
                      </ul>
                    </li>

                    <li class="{{ set_active('home.location') }}">
                      <a href="{{ action('HomeController@getVersion') }}" class="{{ set_active('home.version') }}">
                        <i class="fa fa-map-marker icon">
                          <b class="bg-primary"></b>
                        </i>
                        <span>Location Codes</span>
                      </a>
                    </li>

                    <li class="{{ set_active('home.vision') }}">
                      <a href="{{ action('HomeController@getVersion') }}" class="{{ set_active('home.version') }}">
                        <i class="fa fa-tasks icon">
                          <b class="bg-primary"></b>
                        </i>
                        <span>Versions</span>
                      </a>
                    </li>

                    <li class="{{ set_active('home.disclaimer') }}">
                      <a href="{{ action('HomeController@getDisclaimer') }}" class="{{ set_active('home.disclaimer') }}">
                        <i class="fa fa-warning icon">
                          <b class="bg-primary"></b>
                        </i>
                        <span>Disclaimer</span>
                      </a>
                    </li>

                  </ul>
                </nav>
                <!-- / nav -->
              </div>
            </section>
            
            <footer class="footer lt hidden-xs b-t">
              <div id="chat" class="dropup">
                <section class="dropdown-menu on aside-md m-l-n">
                  <section class="panel bg-white">
                    <header class="panel-heading b-b b-light">Active chats</header>
                    <div class="panel-body animated fadeInRight">
                      <p class="text-sm">No active chats.</p>
                      <p><a href="#" class="btn btn-sm btn-default">Start a chat</a></p>
                    </div>
                  </section>
                </section>
              </div>
              <div id="invite" class="dropup">                
                <section class="dropdown-menu on aside-md m-l-n">
                  <section class="panel bg-white">
                    <header class="panel-heading b-b b-light">
                      John <i class="fa fa-circle text-success"></i>
                    </header>
                    <div class="panel-body animated fadeInRight">
                      <p class="text-sm">No contacts in your lists.</p>
                      <p><a href="#" class="btn btn-sm btn-facebook"><i class="fa fa-fw fa-facebook"></i> Invite from Facebook</a></p>
                    </div>
                  </section>
                </section>
              </div>
              <div class="btn-group hidden-nav-xs">
                <button type="button" title="Contacts" class="btn btn-icon btn-sm btn-default" data-toggle="dropdown" data-target="#invite"><i class="fa fa-facebook"></i></button>
                <button type="button" title="Chats" class="btn btn-sm btn-default" data-toggle="dropdown" data-target="#chat">Get Azan Pro for iPhone</button>
                

              </div>
            </footer>
          </section>
        </aside>