<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.17.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('asset/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap-icons.css') }}">
    <link href="https://online.hbs.edu/" rel="canonical"/>


    <meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="shortcut icon" href="https://webassets.hbs.edu/sites/home/favicon.ico">
<link rel="preload" as="style" href="https://webassets.hbs.edu/libs/framework/1.0/css/framework-async.min.css" onload="this.onload=null;this.rel='stylesheet'">
<noscript>
<link rel="stylesheet" type="text/css" href="css/framework-async.min.css">
</noscript>

<link rel="image_src" href="https://www.hbs.edu/images/site/sharelogo.jpg">
<meta name="HBSSearchUrl" content="/search">
<meta name="PageBuildDateTime" content="Sat, 11 Nov 2023 07:57:50 GMT on ">
</head>
<body>
   
  <div class="hbsred-bg" style="height: 6px"></div><a href="#skipto-main" class="hideme skipto">Skip to Main Content</a><div class="hbso-logo" style="position: absolute; z-index: 12;">
    <h1><a href="/"><img loading="eager" width="150" height="84" src="{{ asset('asset/image/bener.jpg') }}" alt="HBS Online"></a></h1>
 </div>
 <nav class="top-nav" aria-label="Main">
    <ul style="margin: 0; display: flex; justify-content: center;">
       <li class="dropdown-mega">
          <div style="display: flex;"><a href="/courses/" class="black nav-link" style="font-size: 19px; margin: 0px 15px; text-decoration: none;" data-tapped="1" aria-expanded="false" aria-haspopup="true">Courses</a><div style="position: relative;"><a href="#" class="accessible-menu" aria-expanded="false" aria-haspopup="true" role="button"><span class="visually-hidden accessible-label">Open Courses Mega Menu</span></a></div>
          </div>
          <div class="mega-menu hidden">
             <div class="white-bg">
                <div class="container tablet-container mobile-container">
                   <div class="mega-menu-wrapper">
                      <div class="mega-col">
                         <ul class="unstyled">
                            <li><a href="/subjects/business-essentials/" class="header-link bold2 skip-underline">Business Essentials</a><ul class="unstyled">
                                  <li><a href="/courses/core/" class="black skip-underline">Credential of Readiness (CORe)</a></li>
                                  <li><a href="/courses/business-analytics/" class="black skip-underline">Business Analytics</a></li>
                                  <li><a href="/courses/economics-for-managers/" class="black skip-underline">Economics for Managers</a></li>
                                  <li><a href="/courses/financial-accounting/" class="black skip-underline">Financial Accounting</a></li>
                               </ul>
                               <div class="shim40"></div>
                               <div class="shim10"></div>
                            </li>
                            <li><a href="/subjects/leadership-management/" class="header-link bold2 skip-underline">Leadership &amp; Management</a><ul class="unstyled">
                                  <li><a href="/courses/leadership-principles/" class="black skip-underline">Leadership Principles</a></li>
                                  <li><a href="/courses/management-essentials/" class="black skip-underline">Management Essentials</a></li>
                                  <li><a href="/courses/negotiation/" class="black skip-underline">Negotiation Mastery</a></li>
                                  <li><a href="/courses/organizational-leadership/" class="black skip-underline">Organizational Leadership</a></li>
                                  <li><a href="/courses/strategy-execution/" class="black skip-underline">Strategy Execution</a></li>
                                  <li><a href="/courses/power-influence-positive-impact/" class="black skip-underline">Power and Influence for Positive Impact</a></li>
                                  <li><a href="/courses/leadership-ethics-corporate-accountability/" class="black skip-underline">Leadership, Ethics, and Corporate Accountability</a></li>
                               </ul>
                               <div class="shim40"></div>
                               <div class="shim10"></div>
                            </li>
                            <li><a href="/courses/climb/" class="header-link bold2 skip-underline">Credential of Leadership, Impact, and Management in Business (CLIMB)</a></li>
                         </ul>
                      </div>
                      <div class="mega-col">
                         <ul class="unstyled">
                            <li><a href="/subjects/entrepreneurship-innovation/" class="header-link bold2 skip-underline">Entrepreneurship &amp; Innovation</a><ul class="unstyled">
                                  <li><a href="/courses/entrepreneurship-essentials/" class="black skip-underline">Entrepreneurship Essentials</a></li>
                                  <li><a href="/courses/disruptive-strategy/" class="black skip-underline">Disruptive Strategy</a></li>
                                  <li><a href="/courses/negotiation/" class="black skip-underline">Negotiation Mastery</a></li>
                                  <li><a href="/courses/design-thinking-innovation/" class="black skip-underline">Design Thinking and Innovation</a></li>
                                  <li><a href="/courses/launching-tech-ventures/" class="black skip-underline">Launching Tech Ventures</a></li>
                               </ul>
                               <div class="shim40"></div>
                               <div class="shim10"></div>
                            </li>
                            <li><a href="/subjects/strategy/" class="header-link bold2 skip-underline">Strategy</a><ul class="unstyled">
                                  <li><a href="/courses/strategy-execution/" class="black skip-underline">Strategy Execution</a></li>
                                  <li><a href="/courses/business-strategy/" class="black skip-underline">Business Strategy</a></li>
                                  <li><a href="/courses/economics-for-managers/" class="black skip-underline">Economics for Managers</a></li>
                                  <li><a href="/courses/disruptive-strategy/" class="black skip-underline">Disruptive Strategy</a></li>
                                  <li><a href="/courses/global-business/" class="black skip-underline">Global Business</a></li>
                                  <li><a href="/courses/sustainable-business-strategy/" class="black skip-underline">Sustainable Business Strategy</a></li>
                               </ul>
                               <div class="shim40"></div>
                               <div class="shim10"></div>
                            </li>
                            <li><a href="/subjects/marketing/" class="header-link bold2 skip-underline">*New* Marketing</a><ul class="unstyled">
                                  <li><a href="/courses/digital-marketing-strategy/" class="black skip-underline">Digital Marketing Strategy</a></li>
                               </ul>
                            </li>
                         </ul>
                      </div>
                      <div class="mega-col">
                         <ul class="unstyled">
                            <li><a href="/subjects/finance-accounting/" class="header-link bold2 skip-underline">Finance &amp; Accounting</a><ul class="unstyled">
                                  <li><a href="/courses/financial-accounting/" class="black skip-underline">Financial Accounting</a></li>
                                  <li><a href="/courses/leading-with-finance/" class="black skip-underline">Leading with Finance</a></li>
                                  <li><a href="/courses/alternative-investments/" class="black skip-underline">Alternative Investments</a></li>
                                  <li><a href="/courses/sustainable-investing/" class="black skip-underline">Sustainable Investing</a></li>
                               </ul>
                               <div class="shim40"></div>
                               <div class="shim10"></div>
                            </li>
                            <li><a href="/subjects/business-society/" class="header-link bold2 skip-underline">Business in Society</a><ul class="unstyled">
                                  <li><a href="/courses/sustainable-business-strategy/" class="black skip-underline">Sustainable Business Strategy</a></li>
                                  <li><a href="/courses/global-business/" class="black skip-underline">Global Business</a></li>
                                  <li><a href="/courses/sustainable-investing/" class="black skip-underline">Sustainable Investing</a></li>
                                  <li><a href="/courses/power-influence-positive-impact/" class="black skip-underline">Power and Influence for Positive Impact</a></li>
                                  <li><a href="/courses/leadership-ethics-corporate-accountability/" class="black skip-underline">Leadership, Ethics, and Corporate Accountability</a></li>
                               </ul>
                               <div class="shim40"></div>
                               <div class="shim10"></div>
                            </li>
                            <li><a href="/courses/" class="header-link bold2 skip-underline">All Courses</a></li>
                         </ul>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </li>
       <li class="dropdown-mega">
          <div style="display: flex;"><a href="/organizations/" class="black nav-link" style="font-size: 19px; margin: 0px 15px; text-decoration: none;" data-tapped="2" aria-expanded="false" aria-haspopup="true">For Organizations</a><div style="position: relative;"><a href="#" class="accessible-menu" aria-expanded="false" aria-haspopup="true" role="button"><span class="visually-hidden accessible-label">Open For Organizations Mega Menu</span></a></div>
          </div>
          <div class="mega-menu hidden">
             <div class="white-bg">
                <div class="container tablet-container mobile-container">
                   <div class="mega-menu-wrapper">
                      <div class="mega-col">
                         <ul class="unstyled">
                            <li><a href="/organizations/corporate-training" class="header-link bold2 skip-underline">Corporate Learning</a><div style="padding-right: 20px;">Help your employees master essential business concepts, improve effectiveness, and
                                  expand leadership capabilities.
                               </div>
                            </li>
                         </ul>
                      </div>
                      <div class="mega-col">
                         <ul class="unstyled">
                            <li><a href="/organizations/academic-solutions" class="header-link bold2 skip-underline">Academic Solutions</a><div style="padding-right: 20px;">Integrate HBS Online courses into your curriculum to support programs and create unique
                                  educational opportunities.
                               </div>
                               <div class="shim40"></div>
                               <div class="shim10"></div>
                            </li>
                            <li><span class="header-link bold2 skip-underline">Need Help?</span><ul class="unstyled">
                                  <li><a href="/more-info/faqs" class="black skip-underline">Frequently Asked Questions</a></li>
                                  <li><a href="/contact" class="black skip-underline">Contact Us</a></li>
                               </ul>
                            </li>
                         </ul>
                      </div>
                      <div class="mega-col">
                         <ul class="unstyled">
                            <li>
                               <div class="photo-teaser"><img loading="lazy" src=imgs/DEF720596335D844D0D6B8B965D66668.jpg class="fluid" alt="Black, Latinx, and underrepresented minority professionals" width="380" height="213"><div class="shim8"></div>
                                  <div class="bold2"><a href="/organizations/pathways-business">Pathways to Business</a></div>
                                  <p style="margin-bottom: 10px;">Stories designed to inspire future business leaders.</p>
                               </div>
                            </li>
                         </ul>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </li>
       <li class="dropdown-mega">
          <div style="display: flex;"><a href="/blog/" class="black nav-link" style="font-size: 19px; margin: 0px 15px; text-decoration: none;" data-tapped="3" aria-expanded="false" aria-haspopup="true">Insights</a><div style="position: relative;"><a href="#" class="accessible-menu" aria-expanded="false" aria-haspopup="true" role="button"><span class="visually-hidden accessible-label">Open Insights Mega Menu</span></a></div>
          </div>
          <div class="mega-menu hidden">
             <div class="white-bg">
                <div class="container tablet-container mobile-container">
                   <div class="mega-menu-wrapper">
                      <div class="mega-col">
                         <ul class="unstyled">
                            <li><a href="/blog/" class="header-link bold2 skip-underline">Business Insights Blog</a><ul class="unstyled">
                                  <li><a href="/blog/?topic=Career+Development" class="black skip-underline">Career Development</a></li>
                                  <li><a href="/blog/?topic=Communication" class="black skip-underline">Communication</a></li>
                                  <li><a href="/blog/?topic=Decision-Making" class="black skip-underline">Decision-Making</a></li>
                                  <li><a href="/blog/?topic=Earning+Your+MBA" class="black skip-underline">Earning Your MBA</a></li>
                                  <li><a href="/blog/?topic=Entrepreneurship+%26+Innovation" class="black skip-underline">Entrepreneurship &amp; Innovation</a></li>
                                  <li><a href="/blog/?topic=Finance" class="black skip-underline">Finance</a></li>
                                  <li><a href="/blog/?topic=Leadership" class="black skip-underline">Leadership</a></li>
                                  <li><a href="/blog/?topic=Management" class="black skip-underline">Management</a></li>
                                  <li><a href="/blog/?topic=Negotiation" class="black skip-underline">Negotiation</a></li>
                                  <li><a href="/blog/?topic=Strategy" class="black skip-underline">Strategy</a></li>
                               </ul>
                               <div class="shim40"></div>
                               <div class="shim10"></div>
                            </li>
                            <li><a href="/blog/" class="header-link bold2 skip-underline">All Topics</a></li>
                         </ul>
                      </div>
                      <div class="mega-col">
                         <ul class="unstyled">
                            <li>
                               <div class="photo-teaser"><img loading="lazy" src=imgs/96C091115A1E47EE5398B0232FBF8D3F.jpg class="fluid" alt="" width="380" height="213"><div class="shim8"></div>
                                  <div class="bold2"><a href="/free-online-business-courses/">Sample Business Lessons and E-Books</a></div>
                                  <p style="margin-bottom: 10px;">Gain new insights and knowledge from leading faculty and industry experts.</p>
                               </div>
                            </li>
                         </ul>
                      </div>
                      <div class="mega-col">
                         <ul class="unstyled">
                            <li>
                               <div class="photo-teaser"><img loading="lazy" src=imgs/4DE35B5C45AC4C2D5896971F169CF03C.jpg class="fluid" alt="" width="380" height="213"><div class="shim8"></div>
                                  <div class="bold2"><a href="/podcast/" target="_blank">Podcast</a></div>
                                  <p style="margin-bottom: 10px;"><em>The Parlor Room</em>: Where business concepts come to life. Listen now on your favorite podcast platform.
                                  </p>
                               </div>
                            </li>
                         </ul>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </li>
       <li class="dropdown-mega">
          <div style="display: flex;"><a href="/more-info/" class="black nav-link" style="font-size: 19px; margin: 0px 15px; text-decoration: none;" data-tapped="4" aria-expanded="false" aria-haspopup="true">More Info</a><div style="position: relative;"><a href="#" class="accessible-menu" aria-expanded="false" aria-haspopup="true" role="button"><span class="visually-hidden accessible-label">Open More Info Mega Menu</span></a></div>
          </div>
          <div class="mega-menu hidden">
             <div class="white-bg">
                <div class="container tablet-container mobile-container">
                   <div class="mega-menu-wrapper">
                      <div class="mega-col">
                         <ul class="unstyled">
                            <li><a href="/more-info/learning-model/" class="header-link bold2 skip-underline">Learning Experience</a><div style="padding-right: 20px;">Master real-world business skills with our immersive platform and engaged community.</div>
                               <div class="shim40"></div>
                               <div class="shim10"></div>
                            </li>
                            <li><a href="/more-info/certificates-credentials-credits" class="header-link bold2 skip-underline">Certificates, Credentials, &amp; Credits</a><div style="padding-right: 20px;">Learn how completing courses can boost your resume and move your career forward.</div>
                            </li>
                         </ul>
                      </div>
                      <div class="mega-col">
                         <ul class="unstyled">
                            <li><a href="/more-info/learning-tracks" class="header-link bold2 skip-underline">Learning Tracks</a><div style="padding-right: 20px;">Take your career to the next level with this specialization.</div>
                               <div class="shim40"></div>
                               <div class="shim10"></div>
                            </li>
                            <li><span class="header-link bold2 skip-underline">Financing &amp; Policies</span><ul class="unstyled">
                                  <li><a href="/more-info/employer-reimbursement" class="black skip-underline">Employer Reimbursement</a></li>
                                  <li><a href="/more-info/payment-financial-aid/" class="black skip-underline">Payment &amp; Financial Aid</a></li>
                                  <li><a href="/more-info/policies/" class="black skip-underline">Policies</a></li>
                               </ul>
                            </li>
                         </ul>
                      </div>
                      <div class="mega-col">
                         <ul class="unstyled">
                            <li><span class="header-link bold2 skip-underline">Connect</span><ul class="unstyled">
                                  <li><a href="/more-info/student-stories/" class="black skip-underline">Student Stories</a></li>
                                  <li><a href="/more-info/community" class="black skip-underline">Community</a></li>
                               </ul>
                               <div class="shim40"></div>
                               <div class="shim10"></div>
                            </li>
                            <li><span class="header-link bold2 skip-underline">Need Help?</span><ul class="unstyled">
                                  <li><a href="/more-info/faqs" class="black skip-underline">Frequently Asked Questions</a></li>
                                  <li><a href="/request-more-information" class="black skip-underline">Request Information</a></li>
                                  <li><a href="https://account.myhbx.org/onlinesupport/s/contactsupport" class="black skip-underline">Support Portal</a></li>
                               </ul>
                               <div class="shim40"></div>
                               <div class="shim10"></div>
                            </li>
                            <li><a href="https://login.myhbx.org/login?service=https%3A%2F%2Fadmin3.myhbx.org%2Fsso" class="header-link bold2 skip-underline">Apply Now</a></li>
                         </ul>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </li>
    </ul>
 </nav>
        <main >
            @yield('content')
        </main>
        <script src="{{ asset('asset/js/jquery.min.js')}}"></script>
        <script src="{{ asset('asset/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('asset/js/jquery.sticky.js')}}"></script>
        <script src="{{ asset('asset/js/click-scroll.js')}}"></script>
        <script src="{{ asset('asset/js/custom.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
