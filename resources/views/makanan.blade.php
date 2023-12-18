@extends('templates.nav')
@section('content')

        <!-- STARTINDEX -->
        <div class="mainContainer link-controller" runat="server">

            <main id="skipto-main" tabindex="-1" aria-label="Page content" class="hbso-main">
                
              <div id="cover">
                <form method="get" action="">
                  <div class="tb">
                    <div class="td"><input type="text" id= "inputs"placeholder="Search" required></div>
                    <div class="td" id="s-cover">
                      <button  id = "buttons" type="submit">
                        <div id="s-circle"></div>
                        <span></span>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
        
                    
                </div>
                <div class="cap tablet-cap mobile-cap"></div>
              >
               
                <div>
                  <div class="shim1  mobile-hidden" style="margin-top:40px;margin-bottom:100px;"></div>
                  <div class="shim1  tablet-hidden desktop-hidden" style="margin-top:23px;margin-bottom:22px;"></div>
              </div>
              <h2 class="h2-fancy kappa-uc">Kuliner umkm Madura</h2>
              <div>
                  <div class="shim1 " style="height:32px"></div>
              </div>
              <div class="course-cards container tablet-container mobile-container" data-wcm-edit-url="" style="margin-bottom:50px;">
                  <div class="single-card ">
                      <div class="card lg-horizontal card-horizontal" data-wcm-edit-url="/online/Lists/coursecards/EditForm.aspx?ID=42"><a href="/courses/climb/" class="card-link" aria-label="Credential of Leadership, Impact, and Management in Business (CLIMB)"></a>
                          <div class="image-wrap"><img loading="lazy" src="{{asset('assets/img/sinjay.jpeg')}}"class="card-img-top" alt="" width="378" height="212"></div>
                          <div class="card-content">
                              <div class="card-body">
                                  <h2 class="card-title eta">Bebek Sinjay Madura</h2>
                                <p class="card-text">
                                    Warung Bebek Sinjay berubah menjadi ikon kuliner Madura. Siapa yang tidak tahu atau sekadar mendengar namanya. Bebek Sinjay terkenal karena menyuguhkan bebek kremes dengan cocolan sambal pencit.
                                </p>
                              </div>
                              <div class="card-footer"><small class="full-width">1 year, 5-9 hrs/week<br>Apply by December 1</small><small><strong>$15,000 (four installments of $3,750)</strong></small>
                                <small class="label-slate">Detail&nbsp;
                                    <span class="icon">
                                        <img loading="lazy" src={{asset('assets/img/logo/detail.svg')}} alt="" width="25" height="22">
                                    </span>
                                </small>
                            </div>
                          </div>
                      </div>
                  </div>
              </div>

               <div class="course-cards container tablet-container mobile-container" data-wcm-edit-url="">
                  <div class="single-card ">
                      <div class="card lg-horizontal card-horizontal" data-wcm-edit-url="/online/Lists/coursecards/EditForm.aspx?ID=42"><a href="/courses/climb/" class="card-link" aria-label="Credential of Leadership, Impact, and Management in Business (CLIMB)"></a><div class="label-red mu normal">7 Courses</div>
                          <div class="image-wrap"><img loading="lazy" src="{{asset('assets/img/logo/logo-umkm.jpg')}}"class="card-img-top" alt="" width="378" height="212"></div>
                          <div class="card-content">
                              <div class="card-body">
                                  <h2 class="card-title eta">Credential of Leadership, Impact, and Management in Business (CLIMB)</h2>
                                  <p class="card-text">CLIMB enables new and experienced leaders to ignite their careers with a combination of vital and forward-looking business skills, self-reflection, and an immersive cohort-based learning experience with a diverse global network.</p>
                              </div>
                              <div class="card-footer"><small class="full-width">1 year, 5-9 hrs/week<br>Apply by December 1</small><small><strong>$15,000 (four installments of $3,750)</strong></small><small class="label-slate">Credential&nbsp;<span class="icon"><img loading="lazy" src=imgs/Credential.svg alt="" width="25" height="22"></span></small></div>
                          </div>
                      </div>
                  </div>
              </div>  
               
               
         
                <div class="request-info trapezoid-bg">
                    <div class="container">
                        <div class="white center content-wrapper">
                            <h2 class="eta">Need More Information?</h2>
                            <div class="shim6"></div>
                            <p>If you're thinking about how to prepare for the next stage in your career, we can
                                help. Request more information today.
                            </p>
                            <div class="center">
                                <div><a href="/request-more-information" class="&#xA;                btn btn-secondary-small hbsred white-bg">Request More Info</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>


        </div>
@endsection   


