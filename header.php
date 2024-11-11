      <!--Nav Start-->
      <header class="header-center-home header-default header-sticky">
          <nav class="nav navbar navbar-expand-xl navbar-light iq-navbar header-hover-menu py-xl-0">
              <div class="container-fluid navbar-inner">
                  <div class="d-flex align-items-center justify-content-between w-100 landing-header">
                      <div class="d-flex gap-3 gap-xl-0 align-items-center">
                     
                          <div class="logo-hotstar">
                              <a class="navbar-brand text-primary" href="./index.php">
                                  <img class="img-fluid logo" src="assets/identidade/001.png" width="30" height="30" loading="lazy" alt="streamit" />
                              </a>
                          </div>
                          

                      </div>
                      <nav id="navbar_main" class="offcanvas mobile-offcanvas nav navbar navbar-expand-xl hover-nav horizontal-nav mega-menu-content py-xl-0">

                          <!-- container-fluid.// -->
                      </nav>
                      <div class="right-panel">
                       
                          <ul class="navbar-nav align-items-center ms-auto mb-2 mb-xl-0" style="display: contents; margin-top:auto;">
                              
                              <li class="nav-item dropdown" id="itemdropdown1">
                                  <a class="nav-link d-flex align-items-center py-0 py-xl-1" href="#" id="navbarDropdown" role="button"
                                      data-bs-toggle="dropdown" aria-expanded="false">
                                      <img src="assets/identidade/MenuIcon.png" width="30" height="30"  alt="">
                                      
                                  </a>
                                  <ul class="dropdown-menu dropdown-menu-end dropdown-user border-0 px-3 m-0 rounded-4"
                                      aria-labelledby="navbarDropdown">
                                      <li class=" mb-3 justify-content-center text-center pt-2">
                                          <img src="assets/identidade/user.png" width="70" class="img-fluid rounded-circle mx-auto" alt="" loading="lazy">
                                      </li>
                                      <li>
                                        <h5 class=" SFProDisplayBold text-white text-center text-capitalize"><?php 
                                        $nome = explode('@',$_SESSION['email']);
                                        echo $nome[0];
                                        ?>
                                        </h5>
                                        <p class="text-center" style="color:#797979"><?php echo $_SESSION['email']; ?></p>
                                      </li>
                                      <li class="justify-content-center text-center py-2">
                                          <a href="/index.php" class=" align-items-center gap-3">
                                          
                                              <h5 class="mb-0 font-size-16 SFProDisplayRegular ">Academy</h5>
                                          </a>
                                      </li>
                                      <li class="justify-content-center text-center  py-2">
                                          <a href="./suporte.php" class="align-items-center gap-3">
                                           
                                              <h5 class="mb-0 font-size-16 SFProDisplayRegular">Suporte</h5>
                                          </a>
                                      </li>
                                      <li class="justify-content-center text-center py-2">
                                          <a href="./bonus.php" class="align-items-center gap-3">
                                           
                                              <h5 class="mb-0 font-size-16 SFProDisplayRegular">Grupo Exclusivo</h5>
                                          </a>
                                      </li>
                                      <li class="py-2 elemento">
                                          <a href="./login.php"
                                              class=" mt-1 d-flex justify-content-center align-content-center gap-2" style="align-items:center !important;">
                                            
                                              <h5 class="mb-0 font-size-18 SFProDisplayRegular">Sair</h5>
                                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                                  fill="none">
                                                  <path
                                                      d="M1.82209 15.9999C1.46654 15.9999 1.16283 15.874 0.910981 15.6221C0.659129 15.3703 0.533203 15.0666 0.533203 14.711V1.73322C0.533203 1.37767 0.659129 1.07397 0.910981 0.822114C1.16283 0.570262 1.46654 0.444336 1.82209 0.444336H7.95543V1.44434H1.82209C1.74802 1.44434 1.68135 1.47397 1.62209 1.53322C1.56283 1.59248 1.5332 1.65915 1.5332 1.73322V14.711C1.5332 14.7851 1.56283 14.8517 1.62209 14.911C1.68135 14.9703 1.74802 14.9999 1.82209 14.9999H7.95543V15.9999H1.82209ZM12.0888 11.5999L11.3554 10.8888L13.5332 8.73322H5.68876V7.711H13.511L11.3332 5.55545L12.0665 4.82211L15.4665 8.24434L12.0888 11.5999Z"
                                                      fill="currentColor"></path>
                                              </svg>
                                          </a>
                                      </li>
                                  </ul>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
          </nav>
      </header>
      <!--Nav End-->