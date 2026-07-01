<?php
$current_page   = 'home';
$page_title     = 'Adhiran Infotech';
$page_desc      = 'Website design and development company in chennai, web application development company in chennai | mobile app development company | offshoring company in chennai | hire software developer in chennai';
$page_keywords  = 'website design and development company in chennai, corporate branding development company in chennai, mobile app development company in chennai, e-commerce website development company in chennai, digital marketing company in Chennai, offshoring company in chennai, Seo company in chennai, hire software developers from chennai, hire software developers in  chennai, adhiran infotech, adhiran infotech in chennai, adhiran, adhiran software company, hire software developers';
$page_canonical = 'https://adhiraninfotech.com/';
include 'includes/header.php';
?>

  <!-- HERO -->
  <section class="hero">
    <div class="wrap hero-grid">
      <div>
        <div class="eyebrow">Global Talent &amp; Technology Solutions</div>
        <h1>Empowering Growth Through <em>Talent & Innovation.</em></h1>
        <p class="lead">From specialized IT staffing to AI-powered workforce solutions, Adhiran Infotech helps organizations scale faster with top talent and technology expertise across globe.</p>
        <div class="hero-actions">
          <a href="<?= $base ?>contact" class="btn btn-primary">Find Talent →</a>
          <a href="<?= $base ?>#jobs" class="btn btn-outline">Explore Opportunities</a>
        </div>
        <div class="hero-stats">
          <div><b>24-48 hrs</b><span>Qualified candidate <br>profiles delivered</span></div>
          <div><b class="count-up" data-target="5" data-suffix=" Regions">5 Regions</b><span>Global talent reach <br> with local expertise</span></div>
          <div><b class="count-up" data-target="40" data-suffix="% +">40% +</b><span>Reduction in hiring time <br>through smart sourcing</span></div>
        </div>
      </div>
      <div class="hero-visual">
        <div class="hero-photo">
          <img src="assets/images/index/hero.jpg"
            alt="Tech consultant working on laptop">
        </div>
        <!-- <div class="floating-card fc-1">
          <div class="ico">⚡</div>
          <div ><b>24 hrs</b>
            <div class="sub">to shortlist match</div>
          </div>
        </div>
        <div class="floating-card fc-2">
          <div class="ico">✓</div>
          <div><b>Trial-based hire</b>
            <div class="sub">pay only if satisfied</div>
          </div>
        </div> -->
      </div>
    </div>
  </section>

  <!-- TECH SKILLS -->
  <section class="skills">
    <div class="wrap">
      <div class="section-head center">
        <div class="eyebrow" style="justify-content:center;">Our Capabilities</div>
        <h2>Our tech skills</h2>
        <p>The technologies our consultants and talent network specialize in — ready to plug into your team or project,
          anywhere in the world.</p>
      </div>
      <div class="skill-flat-grid">
        <a href="<?= $base ?>hire-java-developer" class="skill-item">
          <div class="circle">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><title xmlns="">java-fill</title><path fill="currentColor" d="m15.638 4.566l.056.032c-.758.4-2.924 1.689-2.924 3.332c0 .554.317 1.088.614 1.59c.262.442.509.857.509 1.238c0 .957-.933 1.7-1.46 2.042l-.1-.058c.199-.243.444-.65.444-1.084c0-.598-.307-1.076-.618-1.561c-.322-.501-.648-1.01-.648-1.67c0-2.292 3.115-3.522 4.127-3.861m-4.095 1.212c1.253-1.12 2.622-2.344 2.622-4.185c0-.833-.341-1.365-.51-1.578L13.6.046c.04.166.1.472.1.872c0 1.676-1.422 2.85-2.798 3.988C9.611 5.974 8.36 7.008 8.36 8.392c0 1.985 1.958 3.206 2.785 3.722l.063.04l.05-.03q-.067-.074-.142-.152c-.636-.677-1.602-1.704-1.602-3.275c0-1.103.974-1.974 2.03-2.919m-.452 9.908c1.764 0 2.998-.253 3.546-.408l.832.48c-.793.403-2.551.71-4.382.71c-2.153 0-4.507-.462-4.514-1.078c-.005-.34.765-.566 1.595-.712l.05.029s-.281.101-.278.333c.004.35 1.42.646 3.15.646m-3.529 2.171c0-.408.839-.6 1.223-.677l.05.03c-.066.049-.102.116-.102.173c0 .267.93.511 2.356.511c1.278 0 1.988-.157 2.41-.258l.99.573c-.045.032-1.02.645-3.402.645c-1.731 0-3.525-.432-3.525-.997m8.529-1.728c1.18-.673 2.361-1.469 2.428-2.747c.044-.839-.727-1.454-1.57-1.29l.045-.112v-.002c.212-.064.474-.116.767-.116c.943 0 1.666.565 1.758 1.356c.186 1.586-2.062 2.618-3.321 2.973zm1.975 2.988c.01 1.09-3.698 1.738-7.012 1.767c-2.861.025-7.474-.516-7.484-1.605c-.006-.753 2-1.275 3.09-1.425l.115.066s-1.625.377-1.62 1.062c.006.683 3.425 1.274 5.894 1.253c3.825-.034 6.414-.657 6.72-1.502l.054-.031c.112.082.24.217.243.415M6.43 21.337a26 26 0 0 0 4.279.325c6.208-.054 7.96-1.58 8.23-1.912l.047.028c-.064 1.208-3.347 2.212-7.396 2.247c-2.061.018-3.937-.22-5.285-.615zm2.602-9.283c-1.079.083-3.396.426-3.396 1.036c0 .462 2.124 1.113 5.452 1.113c2.994 0 4.884-.565 5.325-.78l-.643-.375c-.46.125-2.169.506-4.682.506c-1.48 0-4.03-.273-4.03-.69c0-.374 1.591-.663 2.048-.745l.029-.005z"/></svg>
          </div>
          <span>Java</span>
        </a>
        <a href="<?= $base ?>hire-dotnet-developer" class="skill-item">
          <div class="circle">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><title xmlns="">dotnet</title><path fill="currentColor" d="M24 8.77h-2.468v7.565h-1.425V8.77h-2.462V7.53H24zm-6.852 7.565h-4.821V7.53h4.63v1.24h-3.205v2.494h2.953v1.234h-2.953v2.604h3.396zm-6.708 0H8.882L4.78 9.863a3 3 0 0 1-.258-.51h-.036q.048.283.048 1.21v5.772H3.157V7.53h1.659l3.965 6.32q.25.392.323.54h.024q-.06-.35-.06-1.185V7.529h1.372zm-8.703-.693a.868.829 0 0 1-.869.829a.868.829 0 0 1-.868-.83a.868.829 0 0 1 .868-.828a.868.829 0 0 1 .869.829"/></svg>
          </div>
          <span>.NET</span>
        </a>
        <a href="<?= $base ?>hire-python-developer" class="skill-item">
          <div class="circle">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><title xmlns="">python-fill</title><g fill="none"><g fill="currentColor" clip-path="url(#SVGXv8lpc2Y)"><path d="M11.914 0C5.82 0 6.2 2.656 6.2 2.656l.007 2.752h5.814v.826H3.9S0 5.789 0 11.969s3.403 5.96 3.403 5.96h2.03v-2.867s-.109-3.42 3.35-3.42h5.766s3.24.052 3.24-3.148V3.202S18.28 0 11.913 0M8.708 1.85c.578 0 1.046.47 1.046 1.052c0 .581-.468 1.051-1.046 1.051s-1.046-.47-1.046-1.051c0-.582.467-1.052 1.046-1.052"/><path d="M12.087 24c6.092 0 5.712-2.656 5.712-2.656l-.007-2.752h-5.814v-.826h8.123s3.9.445 3.9-5.735s-3.404-5.96-3.404-5.96h-2.03v2.867s.109 3.42-3.35 3.42H9.452s-3.24-.052-3.24 3.148v5.292S5.72 24 12.087 24m3.206-1.85c-.579 0-1.046-.47-1.046-1.052c0-.581.467-1.051 1.046-1.051c.578 0 1.046.47 1.046 1.051c0 .582-.468 1.052-1.046 1.052"/></g><defs><clipPath id="SVGXv8lpc2Y"><path fill="#fff" d="M0 0h24v24H0z"/></clipPath></defs></g></svg>
          </div>
          <span>Python</span>
        </a>
        <a href="<?= $base ?>hire-react-developer" class="skill-item">
          <div class="circle">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><title xmlns="">react-fill</title><g fill="none"><g fill="currentColor" clip-path="url(#SVGXv8lpc2Y)"><path d="M24 11.689c0-1.59-1.991-3.097-5.044-4.031c.705-3.111.392-5.587-.988-6.38a2.15 2.15 0 0 0-1.096-.273v1.09c.225 0 .406.045.558.128c.665.382.954 1.834.729 3.703c-.054.46-.142.944-.25 1.438a24 24 0 0 0-3.106-.533a24 24 0 0 0-2.035-2.446c1.595-1.482 3.092-2.294 4.11-2.294V1c-1.346 0-3.107.959-4.888 2.622C10.21 1.97 8.448 1.02 7.103 1.02v1.09c1.013 0 2.515.808 4.11 2.28c-.685.72-1.37 1.536-2.021 2.441a23 23 0 0 0-3.111.538q-.168-.734-.255-1.418c-.23-1.87.054-3.322.715-3.708c.146-.088.337-.128.562-.128v-1.09c-.41 0-.783.088-1.105.273c-1.375.793-1.683 3.263-.974 6.365C1.981 8.603 0 10.104 0 11.689c0 1.59 1.991 3.097 5.044 4.03c-.705 3.112-.392 5.588.988 6.38c.318.186.69.274 1.1.274c1.346 0 3.107-.959 4.888-2.622c1.78 1.653 3.541 2.602 4.887 2.602a2.2 2.2 0 0 0 1.105-.274c1.375-.792 1.683-3.262.974-6.364C22.019 14.781 24 13.274 24 11.689m-6.37-3.263a22 22 0 0 1-.66 1.932a26 26 0 0 0-1.345-2.319q1.044.153 2.006.387m-2.24 5.21a26 26 0 0 1-1.179 1.869a25.5 25.5 0 0 1-4.412.005a25.5 25.5 0 0 1-2.201-3.806a26 26 0 0 1 2.192-3.82a25.5 25.5 0 0 1 4.411-.006q.61.875 1.184 1.86q.557.961 1.018 1.946a27 27 0 0 1-1.013 1.952M16.97 13c.264.656.49 1.311.675 1.947c-.64.157-1.316.289-2.015.391A27 27 0 0 0 16.97 13m-4.96 5.22q-.684-.706-1.36-1.566c.44.02.89.035 1.345.035q.691.001 1.36-.035c-.44.573-.895 1.096-1.345 1.566m-3.64-2.882a22 22 0 0 1-2.006-.386c.181-.631.406-1.282.66-1.932c.201.39.412.782.642 1.174q.345.587.704 1.144m3.615-10.18q.684.706 1.36 1.566c-.44-.02-.89-.035-1.345-.035q-.691-.001-1.36.035c.44-.573.895-1.096 1.345-1.566M8.365 8.04a27 27 0 0 0-1.34 2.333a21 21 0 0 1-.675-1.947c.64-.152 1.316-.284 2.015-.386m-4.427 6.124c-1.732-.738-2.852-1.707-2.852-2.475s1.12-1.742 2.852-2.475c.42-.181.88-.343 1.355-.494c.279.958.646 1.956 1.1 2.979a23 23 0 0 0-1.085 2.964a15 15 0 0 1-1.37-.499m2.632 6.99c-.665-.38-.954-1.834-.729-3.702c.054-.46.142-.945.25-1.439c.958.235 2.005.416 3.106.534a24 24 0 0 0 2.035 2.446c-1.595 1.482-3.092 2.294-4.11 2.294a1.2 1.2 0 0 1-.552-.132m11.604-3.727c.23 1.869-.054 3.322-.715 3.708c-.146.088-.337.127-.562.127c-1.013 0-2.515-.807-4.11-2.28a23 23 0 0 0 2.021-2.44a23 23 0 0 0 3.111-.538q.171.74.255 1.423m1.883-3.263c-.42.181-.88.343-1.355.494a23.5 23.5 0 0 0-1.1-2.979c.45-1.017.811-2.01 1.085-2.964q.728.227 1.375.499c1.732.738 2.852 1.707 2.852 2.475c-.005.768-1.125 1.742-2.857 2.475"/><path d="M11.995 13.925a2.236 2.236 0 1 0 0-4.472a2.236 2.236 0 0 0 0 4.472"/></g><defs><clipPath id="SVGXv8lpc2Y"><path fill="#fff" d="M0 0h24v24H0z"/></clipPath></defs></g></svg>
          </div>
          <span>React</span>
        </a>
        <a href="<?= $base ?>hire-angular-developer" class="skill-item">
          <div class="circle">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 15 15"><title xmlns="">angular-outline</title><path fill="currentColor" d="m7.5.5l.137-.48a.5.5 0 0 0-.274 0zm-7 2l-.137-.48a.5.5 0 0 0-.36.535zm1 9l-.497.055a.5.5 0 0 0 .273.392zm6 3l-.224.447a.5.5 0 0 0 .448 0zm6-3l.224.447a.5.5 0 0 0 .273-.392zm1-9l.497.055a.5.5 0 0 0-.36-.536zm-7 .5l.458-.2L7.5 1.753L7.042 2.8zM7.363.02l-7 2l.274.96l7-2zM.003 2.554l1 9l.994-.11l-1-9zm1.273 9.392l6 3l.448-.894l-6-3zm6.448 3l6-3l-.448-.894l-6 3zm6.273-3.392l1-9l-.994-.11l-1 9zm.64-9.536l-7-2l-.274.962l7 2zM4.458 11.2l3.5-8l-.916-.4l-3.5 8zm2.584-8l3.5 8l.916-.4l-3.5-8zM5 9h5V8H5z"/></svg>          </div>
          <span>Angular</span>
        </a>
        <a href="<?= $base ?>hire-react-native-developer" class="skill-item">
          <div class="circle">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 128 128"><title xmlns="">reactnative-wordmark</title><path fill="currentColor" d="M87.043 0c-6.49 0-14.985 4.626-23.574 12.649C54.879 4.673 46.385.094 39.896.094v.023c-1.982 0-3.776.426-5.334 1.323c-6.63 3.822-8.116 15.739-4.695 30.699c-14.677 4.53-24.234 11.775-24.234 19.42c0 7.67 9.604 14.936 24.328 19.442c-3.398 15.008-1.887 26.947 4.768 30.77c1.533.896 3.326 1.322 5.308 1.322c6.49 0 14.985-4.626 23.574-12.648C72.201 98.42 80.695 103 87.184 103c1.98 0 3.774-.425 5.332-1.322c6.63-3.823 8.117-15.74 4.695-30.7c14.63-4.506 24.187-11.773 24.187-19.42c0-7.667-9.603-14.935-24.328-19.442c3.398-15.007 1.887-26.946-4.767-30.769C90.776.453 88.99.029 87.043.026Zm-.025 5.264v.021c1.085 0 1.96.213 2.69.614c3.21 1.84 4.602 8.85 3.517 17.863c-.26 2.218-.684 4.554-1.204 6.937c-4.625-1.132-9.675-2.005-14.984-2.572c-3.185-4.365-6.49-8.33-9.816-11.8C74.901 9.192 82.11 5.279 87.018 5.265Zm-47.122.092c4.885 0 12.128 3.893 19.82 10.996a111.5 111.5 0 0 0-9.745 11.775c-5.333.567-10.38 1.44-15.006 2.596a71 71 0 0 1-1.229-6.844c-1.108-9.014.26-16.02 3.446-17.885c.707-.424 1.63-.613 2.714-.613Zm23.55 14.7a97 97 0 0 1 6.56 7.552a146 146 0 0 0-6.49-.164c-2.219 0-4.412.046-6.559.164a92 92 0 0 1 6.488-7.551zm.07 12.673c3.563 0 7.127.166 10.619.449a130 130 0 0 1 5.71 8.967a123 123 0 0 1 4.909 9.39a132 132 0 0 1-4.885 9.414c-1.84 3.185-3.73 6.207-5.687 9.015c-3.517.307-7.08.47-10.666.47c-3.564 0-7.126-.163-10.618-.446a130 130 0 0 1-5.71-8.966a123 123 0 0 1-4.909-9.393a123 123 0 0 1 4.885-9.414c1.84-3.185 3.727-6.206 5.686-9.014a123 123 0 0 1 10.666-.472m-17.534 1.226c-1.156 1.817-2.31 3.68-3.396 5.592a134 134 0 0 0-3.068 5.664a101 101 0 0 1-3.256-9.39c3.09-.732 6.346-1.37 9.72-1.866m35.02 0c3.35.496 6.582 1.11 9.674 1.866c-.874 3.044-1.96 6.18-3.186 9.32a112 112 0 0 0-3.092-5.664c-1.085-1.888-2.24-3.728-3.396-5.522m14.77 3.258a75 75 0 0 1 6.632 2.406c8.353 3.563 13.756 8.235 13.756 11.94c-.024 3.705-5.428 8.4-13.781 11.94c-2.03.872-4.246 1.652-6.535 2.383c-1.345-4.624-3.116-9.44-5.31-14.37c2.17-4.908 3.916-9.697 5.237-14.3zm-64.608.024c1.345 4.624 3.116 9.437 5.31 14.369c-2.17 4.908-3.917 9.699-5.238 14.3a72 72 0 0 1-6.607-2.408c-8.353-3.563-13.758-8.234-13.758-11.94c0-3.704 5.405-8.4 13.758-11.94c2.03-.872 4.246-1.65 6.535-2.381m32.328 3.539c-5.955 0-10.783 4.827-10.783 10.783s4.828 10.783 10.783 10.783c5.956 0 10.783-4.827 10.783-10.783s-4.827-10.783-10.783-10.783M87.49 57.883a101 101 0 0 1 3.256 9.39a106 106 0 0 1-9.72 1.89a131 131 0 0 0 3.396-5.594a134 134 0 0 0 3.068-5.686m-47.972.094a112 112 0 0 0 3.091 5.664a157 157 0 0 0 3.4 5.52c-3.35-.495-6.586-1.11-9.677-1.865c.873-3.044 1.96-6.181 3.186-9.32zm52.55 14.393c.543 2.384.967 4.673 1.227 6.868c1.108 9.013-.26 16.02-3.445 17.884c-.708.425-1.627.616-2.713.616c-4.885 0-12.13-3.894-19.823-10.997a111 111 0 0 0 9.747-11.775c5.332-.566 10.383-1.44 15.007-2.596m-57.056.047c4.625 1.133 9.673 2.006 14.982 2.572c3.185 4.366 6.49 8.33 9.817 11.8c-7.693 7.15-14.913 11.066-19.82 11.066c-1.062-.024-1.959-.236-2.667-.637c-3.209-1.84-4.6-8.849-3.515-17.863c.26-2.218.683-4.554 1.203-6.938m21.992 3.092c2.124.094 4.294.164 6.488.164c2.218 0 4.413-.046 6.56-.164a92 92 0 0 1-6.49 7.55c-2.194-2.265-4.387-4.79-6.558-7.55m42.39 36.918q-.562.001-.853.324q-.28.324-.281.791q0 .468.28.78q.292.311.855.312c.563.001.659-.105.853-.312a1.1 1.1 0 0 0 .29-.78q0-.468-.29-.79q-.292-.325-.853-.325zm-94.072.21v15.153H7.33v-6.13h3.56l3.29 6.13h2.144v-.125l-3.56-6.431q1.364-.521 2.123-1.573q.77-1.05.77-2.466q.001-2.228-1.384-3.393q-1.373-1.166-3.935-1.166zm59.463 0v15.153h2.01v-11.677l7.629 11.677h2.01v-15.153h-1.99v11.73l-7.649-11.73zm-11.875 1.165v2.727h-2.05v1.488h2.05v6.984q0 1.437.654 2.217q.658.78 1.948.781q.72 0 1.478-.209v-1.56q-.583.125-.916.125q-.676 0-.957-.334q-.28-.344-.28-1.02v-6.984h2.1v-1.488h-2.1v-2.727zm39.053 0v2.727h-2.051v1.488h2.05v6.984q.001 1.437.656 2.217q.656.78 1.945.781q.72 0 1.479-.209v-1.56q-.584.125-.916.125q-.676 0-.957-.334q-.28-.344-.281-1.02v-6.984h2.1v-1.488h-2.1v-2.727zm-84.633.48h3.06q1.582.009 2.415.76q.843.747.843 2.153q0 1.29-.884 2.06q-.874.771-2.364.772H7.33Zm15.27 2.038q-1.344 0-2.498.75q-1.145.739-1.79 2.062q-.637 1.311-.636 2.986v.354q0 2.518 1.437 4.027q1.437 1.5 3.727 1.5q2.83 0 4.246-2.176l-1.176-.916a4.4 4.4 0 0 1-1.24 1.104q-.708.416-1.727.416q-1.436 0-2.373-1.02q-.926-1.03-.968-2.695h7.628v-.803q.001-2.696-1.216-4.142q-1.218-1.447-3.414-1.447m11.252 0a5.5 5.5 0 0 0-2.258.46q-1.021.456-1.625 1.247q-.593.781-.594 1.625h1.937q0-.74.698-1.26q.697-.52 1.726-.52q1.178 0 1.782.604q.603.592.603 1.601v.885h-1.875q-2.425 0-3.768.979q-1.332.969-1.332 2.728q0 1.446 1.063 2.393q1.072.937 2.736.937q1.864 0 3.207-1.394q.105.853.27 1.185h2.02v-.166q-.395-.915-.395-2.467v-5.183q-.042-1.707-1.147-2.674q-1.102-.98-3.048-.98m11.718 0q-1.539 0-2.674.71q-1.124.705-1.728 1.987q-.604 1.279-.604 2.924v.322q0 2.666 1.354 4.207q1.364 1.53 3.664 1.53q1.145 0 2.164-.522a4.4 4.4 0 0 0 1.645-1.395q.615-.874.668-1.842h-1.823q-.083.937-.853 1.561a2.77 2.77 0 0 1-1.8.625q-1.49 0-2.292-1.05q-.8-1.052-.8-2.999v-.363q0-1.999.8-3.05q.812-1.062 2.28-1.06q1.093-.001 1.831.706q.752.697.834 1.79h1.823q-.085-1.81-1.344-2.945q-1.25-1.135-3.145-1.136m38.492 0a5.5 5.5 0 0 0-2.257.46q-1.021.456-1.625 1.247q-.593.781-.592 1.625h1.935q0-.74.698-1.26q.697-.52 1.726-.52q1.178 0 1.782.604q.603.592.603 1.601v.885h-1.873q-2.427 0-3.77.979q-1.332.969-1.332 2.728q0 1.446 1.063 2.393q1.071.937 2.736.937q1.864 0 3.207-1.394q.103.853.27 1.185h2.02v-.166q-.395-.915-.395-2.467v-5.183q-.043-1.707-1.147-2.674q-1.102-.98-3.05-.98zm33.985 0a4.5 4.5 0 0 0-2.498.75q-1.146.739-1.791 2.062q-.635 1.311-.635 2.986v.354q0 2.518 1.438 4.027q1.435 1.5 3.724 1.5q2.832 0 4.248-2.176l-1.176-.916a4.4 4.4 0 0 1-1.24 1.104q-.707.416-1.726.416q-1.438 0-2.373-1.02q-.927-1.03-.97-2.695h7.63v-.803q0-2.696-1.217-4.142t-3.414-1.447m-19.631.21v11.26h1.926v-11.26zm3.904 0l4.078 11.26h1.47l4.038-11.26h-1.97l-2.788 8.649l-2.86-8.65zm-79.72 1.374q1.206 0 1.916.81q.707.802.79 2.27v.146h-5.642q.187-1.53.98-2.375a2.56 2.56 0 0 1 1.956-.85zm95.447 0q1.207 0 1.914.81q.708.802.79 2.27v.146h-5.64q.187-1.53.979-2.375a2.56 2.56 0 0 1 1.957-.85zm-83.436 4.423h1.51v2.31q-.364.75-1.176 1.218a3.4 3.4 0 0 1-1.718.468q-.948 0-1.55-.51q-.605-.51-.605-1.415q0-2.07 3.54-2.07zm50.21 0h1.51v2.31q-.363.75-1.175 1.218a3.4 3.4 0 0 1-1.72.468q-.945 0-1.55-.51q-.602-.51-.603-1.415q0-2.07 3.54-2.07z"/></svg>
          </div>
          <span>React Native</span>
        </a>
        <a href="<?= $base ?>hire-vuejs-developer" class="skill-item">
          <div class="circle">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><title xmlns="">vue-fill</title><path fill="currentColor" d="M19.114 2H15l-3 4.9L9.429 2H0l12 21L24 2zM3 3.75h2.914L12 14.6l6.086-10.85H21L12 19.5z"/></svg>
          </div>
          <span>Vue</span>
        </a>
        <a href="<?= $base ?>hire-flutter-developer" class="skill-item">
          <div class="circle">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><title xmlns="">flutter</title><path fill="currentColor" d="M5.9 15.375L2.5 12l11-11h6.775zM13.5 23l-5.925-5.925L13.5 11.15h6.775l-5.925 5.925L20.275 23z"/></svg>
          </div>
          <span>Flutter</span>
        </a>
        <a href="<?= $base ?>hire-php-developer" class="skill-item">
          <div class="circle">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 128 128"><title xmlns="">php</title><path fill="currentColor" d="M64 30.332C28.654 30.332 0 45.407 0 64s28.654 33.668 64 33.668c35.345 0 64-15.075 64-33.668S99.346 30.332 64 30.332m-5.982 9.81h7.293v.003l-1.745 8.968h6.496q6.132 0 8.458 2.139q2.328 2.14 1.398 6.93l-3.053 15.7h-7.408l2.902-14.929q.495-2.546-.365-3.473q-.86-.925-3.658-.925h-5.828L58.752 73.88h-7.291zM26.73 49.114h14.133q6.379 0 9.305 3.348q2.925 3.347 1.758 9.346q-.481 2.472-1.625 4.52t-2.99 3.745q-2.202 2.06-4.891 2.936q-2.691.876-6.858.875h-6.294l-1.745 8.97h-7.35zm57.366 0h14.13q6.378 0 9.303 3.348h.002q2.926 3.347 1.76 9.346q-.48 2.472-1.623 4.52t-2.992 3.745q-2.2 2.06-4.893 2.936q-2.69.876-6.855.875h-6.295l-1.744 8.97h-7.35zm-51.051 5.325l-2.742 14.12h4.468q4.446.001 6.622-1.673q2.174-1.675 2.937-5.592q.728-3.762-.666-5.309t-5.584-1.547zm57.363 0l-2.744 14.12h4.47q4.446.001 6.622-1.673q2.173-1.675 2.935-5.592q.73-3.762-.664-5.309t-5.584-1.547z"/></svg>
          </div>
          <span>PHP</span>
        </a>
        <a href="<?= $base ?>hire-cloud-engineer" class="skill-item">
          <div class="circle">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 640 640"><title xmlns="">aws</title><path fill="currentColor" d="M180.4 267c-.7 22.6 10.6 32.7 10.9 39c-.1 1.3-.6 2.5-1.3 3.6s-1.7 2-2.8 2.6l-12.8 9c-1.7 1.2-3.6 1.8-5.6 1.9c-.4 0-8.2 1.8-20.5-25.6c-7.5 9.4-17 16.9-27.9 22s-22.7 7.7-34.7 7.5c-16.3.9-60.4-9.2-58.1-56.2c-1.6-38.3 34.1-62.1 70.9-60c7.1 0 21.6.4 47 6.3v-15.6c2.7-26.5-14.7-47-44.8-43.9c-2.4 0-19.4-.5-45.8 10.1c-7.4 3.4-8.3 2.8-10.8 2.8c-7.4 0-4.4-21.5-2.9-24.2c5.2-6.4 35.9-18.4 65.9-18.2c20.1-1.8 40.1 4.4 55.7 17.3c6.3 7.1 11.2 15.4 14.2 24.4s4.2 18.5 3.5 28v69.3zM94 299.4c32.4-.5 46.2-20 49.3-30.5c2.5-10.1 2.1-16.4 2.1-27.4c-9.7-2.3-23.6-4.9-39.6-4.9c-15.2-1.1-42.8 5.6-41.7 32.3c-1.2 16.8 11.1 31.4 30 30.5zm170.9 23.1c-7.9.7-11.5-4.9-12.7-10.4l-49.8-164.7c-1-2.8-1.6-5.6-1.9-8.6c-.2-1.2.1-2.4.8-3.4s1.8-1.6 3-1.8h22.2c8.8-.9 11.6 6 12.6 10.4l35.8 140.8L308.1 144c.5-3.2 2.9-11.1 12.8-10.2h17.2c2.2-.2 11.1-.5 12.7 10.4l33.3 142.5L421 144.1c.5-2.2 2.7-11.4 12.7-10.4h19.7c.9-.1 6.2-.8 5.3 8.6c-.4 1.8 3.4-10.7-52.8 169.9c-1.1 5.5-4.8 11.1-12.7 10.4h-18.7c-10.9 1.2-12.5-9.7-12.7-10.7l-33.2-137.1l-32.8 137c-.2 1.1-1.7 11.9-12.7 10.7h-18.3zm273.5 5.6c-5.9 0-33.9-.3-57.4-12.3c-2.3-1-4.3-2.6-5.7-4.8s-2.1-4.6-2.1-7.1v-10.7c0-8.5 6.2-6.9 8.8-5.9c10 4.1 16.5 7.1 28.8 9.6c36.7 7.5 52.8-2.3 56.7-4.5c13.2-7.8 14.2-25.7 5.3-34.9c-10.5-8.8-15.5-9.1-53.1-21c-4.6-1.3-43.7-13.6-43.8-52.4c-.6-28.2 25-56.2 69.5-56c12.7 0 46.4 4.1 55.6 15.6c1.4 2.1 2 4.6 1.9 7v10.1c0 4.4-1.6 6.7-4.9 6.7c-7.7-.9-21.4-11.2-49.2-10.8c-6.9-.4-39.9.9-38.4 25c-.4 19 26.6 26.1 29.7 26.9c36.5 11 48.6 12.8 63.1 29.6c17.1 22.2 7.9 48.3 4.3 55.4c-19.1 37.5-68.4 34.4-69.3 34.4zM578.6 433c-70 51.7-171.7 79.2-258.5 79.2C203 513 89.8 469.9 2.8 391.5c-6.5-5.9-.8-14 7.2-9.5c96.5 55.2 205.7 84.2 316.9 84.1c83-.4 165.1-17.3 241.6-49.5c11.8-5 21.8 7.8 10.1 16.4m29.2-33.3c-9-11.5-59.3-5.4-81.8-2.7c-6.8.8-7.9-5.1-1.8-9.5c40.1-28.2 105.9-20.1 113.4-10.6s-2.1 75.4-39.6 106.9c-5.8 4.9-11.3 2.3-8.7-4.1c8.4-21.3 27.4-68.5 18.4-80z"/></svg>
          </div>
          <span>AWS</span>
        </a>
        <a href="<?= $base ?>hire-cloud-engineer" class="skill-item">
          <div class="circle">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 128 128"><title xmlns="">azure</title><path fill="currentColor" d="M43.983 4.653a5.91 5.91 0 0 1 5.6 4.022l35.91 106.396a5.91 5.91 0 0 1-5.603 7.802h41.38a5.92 5.92 0 0 0 4.8-2.465a5.91 5.91 0 0 0 .798-5.34L90.961 8.672a5.91 5.91 0 0 0-5.602-4.022zm-1.336.478a5.92 5.92 0 0 0-5.61 4.029L1.132 115.55a5.91 5.91 0 0 0 5.6 7.8h28.893c1.239 0 2.446-.41 3.452-1.113a5.92 5.92 0 0 0 2.157-2.916l7.019-20.71l-13.411-12.857c-.246-.273-1.353-2.274-.369-4.002c1.108-1.659 2.955-1.659 2.955-1.659h17.285l9.074-26.145L48.274 8.321c-.042-.205-.914-1.365-2.281-2.28c-1.37-.915-3.345-.909-3.345-.909zm-4.88 75.74a2.724 2.724 0 0 0-1.86 4.718l37.83 35.31c1.101 1.03 2.502 1.631 4.007 1.631c0 0 1.282.068 2.055-.033c1.817-.273 3.525-1.768 4.09-2.39c1.457-1.939.794-4.95.794-4.95l-11.45-34.28z"/></svg>
          </div>
          <span>Microsoft Azure</span>
        </a>
        <a href="<?= $base ?>hire-devops-engineer" class="skill-item">
          <div class="circle">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 32 32"><title xmlns="">azure-devops</title><path fill="currentColor" d="m0 11.865l2.995-3.953l11.208-4.557V.063l9.828 7.188l-20.078 3.896v10.969L0 20.975zm32-5.933v19.536l-7.672 6.531l-12.401-4.073v4.073l-7.974-9.885l20.078 2.396V7.25z"/></svg>
          </div>
          <span>DevOps</span>
        </a>
        <a href="<?= $base ?>sap-it-solutions" class="skill-item">
          <div class="circle">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><title xmlns="">sap</title><path fill="currentColor" d="M0 6.064v11.872h12.13L24 6.064zm3.264 2.208h.005c.863.001 1.915.245 2.676.633l-.82 1.43c-.835-.404-1.255-.442-1.73-.467c-.708-.038-1.064.215-1.069.488c-.007.332.669.633 1.305.838c.964.306 2.19.715 2.377 1.9L7.77 8.437h2.046l2.064 5.576l-.007-5.575h2.37c2.257 0 3.318.764 3.318 2.519c0 1.575-1.09 2.514-2.936 2.514h-.763l-.01 2.094l-3.588-.003l-.25-.908c-.37.122-.787.189-1.23.189c-.456 0-.885-.071-1.263-.2l-.358.919l-2 .006l.09-.462q-.043.038-.087.074c-.535.43-1.208.629-2.037.644l-.213.002a5.1 5.1 0 0 1-2.581-.675l.73-1.448c.79.467 1.286.572 1.956.558c.347-.007.598-.07.761-.239a.56.56 0 0 0 .156-.369c.007-.376-.53-.553-1.185-.756c-.531-.164-1.135-.389-1.606-.735c-.559-.41-.825-.924-.812-1.65a2 2 0 0 1 .566-1.377c.519-.537 1.357-.863 2.363-.863m10.597 1.67v1.904h.521c.694 0 1.247-.23 1.248-.964c0-.709-.554-.94-1.248-.94zm-5.087.767l-.748 2.362c.223.085.481.133.757.133c.268 0 .52-.047.742-.126l-.736-2.37z"/></svg>
          </div>
          <span>SAP</span>
        </a>
        <a href="<?= $base ?>servicenow" class="skill-item">
          <div class="circle"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="10" />
              <path d="M12 6v6l4 2" />
            </svg></div>
          <span>ServiceNow</span>
        </a>
        <a href="<?= $base ?>#" class="skill-item">
          <div class="circle"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M3 3v18h18" />
              <path d="M18.4 8.6 13 14l-3-3-4.5 4.5" />
            </svg></div>
          <span>Data Analytics</span>
        </a>
        <a href="<?= $base ?>aiml-solutions" class="skill-item">
          <div class="circle">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><title xmlns="">machine-learning-outlined</title><path fill="currentColor" d="M21 10a16.84 16.84 0 0 0-9 3.244A16.84 16.84 0 0 0 3 10v2.96a2.004 2.004 0 0 0-2 2.007v1.004c0 1.109 2 2.208 2 2.208v2.007a14.87 14.87 0 0 1 7.417 2.55A15 15 0 0 1 12 24a15 15 0 0 1 1.583-1.264A14.87 14.87 0 0 1 21 20.186v-2.208a2.004 2.004 0 0 0 2-2.007v-1.004a2.004 2.004 0 0 0-2-2.007Zm-9 11.422a16.84 16.84 0 0 0-7-2.996v-6.15a14.8 14.8 0 0 1 5.417 2.282A15 15 0 0 1 12 15.822a15 15 0 0 1 1.583-1.264A14.8 14.8 0 0 1 19 12.275v6.151a16.84 16.84 0 0 0-7 2.996M11 8h2v1h-2zm0-4h2v1h-2z"/><path fill="currentColor" d="M11 10h2v1h-2zM9 5a1 1 0 0 0 1-1a.983.983 0 0 0-.99-.99A.995.995 0 1 0 9 5"/><circle cx="15" cy="4" r="1" fill="currentColor"/><path fill="currentColor" d="M16 8H8a3.003 3.003 0 0 1-3-3V3a3.003 3.003 0 0 1 3-3h8a3.003 3.003 0 0 1 3 3v2a3.003 3.003 0 0 1-3 3M8 2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1Z"/></svg>
          </div>
          <span>AI &amp; Machine Learning</span>
        </a>
        
        <a href="<?= $base ?>hire-qa-developer" class="skill-item">
          <div class="circle"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M12 2 4 5v6c0 5 3.5 9 8 11 4.5-2 8-6 8-11V5z" />
              <path d="m9 12 2 2 4-4" />
            </svg></div>
          <span>QA &amp; Cybersecurity</span>
        </a>
      </div>
    </div>
  </section>

  <!-- CLIENTS -->
  <section class="clients" id="clients">
    <div class="wrap">
      <div class="section-head center">
        <div class="eyebrow" style="justify-content:center;">Trusted By</div>
        <h2>Our Clients</h2>
        <p>Proud to have worked with some of the world's most recognized brands across technology, healthcare, energy
          and manufacturing.</p>
      </div>
      <div class="clients-grid">
        <div class="client-logo"><img src="assets/logos/google.svg" alt=""></div>
        <div class="client-logo"><img src="assets/logos/meta.svg" alt=""></div>
        <div class="client-logo"><img src="assets/logos/johnson&johnson.svg" alt=""></div>
        <div class="client-logo"><img src="assets/logos/tata.svg" alt=""></div>
        <div class="client-logo"><img src="assets/logos/shell.svg" alt=""></div>
        <div class="client-logo"><img src="assets/logos/hcltech.svg" alt=""></div>
        <!-- duplicate -->
        <div class="client-logo"><img src="assets/logos/google.svg" alt=""></div>
        <div class="client-logo"><img src="assets/logos/meta.svg" alt=""></div>
        <div class="client-logo"><img src="assets/logos/johnson&johnson.svg" alt=""></div>
        <div class="client-logo"><img src="assets/logos/tata.svg" alt=""></div>
        <div class="client-logo"><img src="assets/logos/shell.svg" alt=""></div>
        <div class="client-logo"><img src="assets/logos/hcltech.svg" alt=""></div>
      </div>
    </div>
  </section>

  <!-- SOLUTIONS -->
  <section class="solutions" id="solutions">
    <div class="wrap">
      <div class="section-head">
        <div class="eyebrow">Spectrum of Solutions</div>
        <h2>One trusted partner, multiple ways to scale your workforce</h2>
        <p>Whether you're looking for an individual expert, a dedicated team, or complete project execution, we provide flexible engagement models tailored to your business needs.</p>
      </div>

      <div class="solutions-grid">
        <div class="sol-tabs">
          <div class="sol-tab active" data-tab="talent">Talent Solutions <span class="arrow">→</span></div>
          <div class="sol-tab" data-tab="team">Team Solutions <span class="arrow">→</span></div>
          <div class="sol-tab" data-tab="project">Project Solutions <span class="arrow">→</span></div>
        </div>

        <div>
          <div class="sol-panel" data-panel="talent" data-title="Talent Solutions">
            <div class="sol-panel-text">
              <h3>Talent Solutions</h3>
              <p>Accelerate your hiring process with access to highly qualified professionals. We identify and deliver top talent through a combination of intelligent AI-driven matching and expert human evaluation, ensuring the right fit for your requirements.</p>
              <a href="<?= $base ?>talent-solutions">Learn More →</a>
            </div>
            <div class="sol-panel-img">
              <img src="assets/images/index/talent.jpg"
                alt="Professional reviewing candidate profiles">
            </div>
          </div>

          <div class="sol-panel" data-panel="team" data-title="Team Solutions" style="display:none;">
            <div class="sol-panel-text">
              <h3>Team Solutions</h3>
              <p>Build a high-performing team of skilled professionals that integrates seamlessly with your existing operations. Easily scale resources up or down to align with changing project demands and business priorities.</p>
              <a href="<?= $base ?>team-solutions">Learn More →</a>
            </div>
            <div class="sol-panel-img">
              <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=700&q=80"
                alt="Team collaborating around a table">
            </div>
          </div>

          <div class="sol-panel" data-panel="project" data-title="Project Solutions" style="display:none;">
            <div class="sol-panel-text">
              <h3>Project Solutions</h3>
              <p>Focus on your business goals while we take ownership of project delivery. From AI adoption and cloud transformation to application development and modernization, our experts manage the entire lifecycle—ensuring quality outcomes, timely execution, and cost efficiency.</p>
              <a href="<?= $base ?>project-solutions">Learn More →</a>
            </div>
            <div class="sol-panel-img">
              <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&w=700&q=80"
                alt="Engineers working on a project together">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- HIRING MADE EASY -->
  <section class="steps">
    <div class="wrap">
      <div class="section-head center">
        <div class="eyebrow" style="justify-content:center;">How It Works</div>
        <h2>Hiring Made Simple</h2>
        <p>A streamlined three-step process designed to connect you with the right talent quickly and efficiently.</p>
      </div>
      <div class="steps-row">
        <div class="step">
          <div class="step-num">1</div>
          <h3>Connect with a Domain Expert</h3>
          <p>Our specialists take the time to understand your business goals, technical requirements, and team culture to ensure the best possible fit.</p>
        </div>
        <div class="step">
          <div class="step-num">2</div>
          <h3>Review Curated Talent</h3>
          <p>We carefully shortlist and present qualified professionals tailored to your needs, helping you find the right match faster.</p>
        </div>
        <div class="step">
          <div class="step-num">3</div>
          <h3>Hire with Confidence</h3>
          <p>Start with a flexible engagement period to evaluate performance and fit. We remain committed to ensuring your satisfaction and long-term success.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SERVICES -->
  <section class="services" id="services">
    <div class="wrap">
      <div class="section-head center">
        <div class="eyebrow" style="justify-content:center;">What We Offer</div>
        <h2>Explore Our Consulting & Technology Services</h2>
        <p>A comprehensive range of consulting, talent, and technology solutions designed to help organizations overcome challenges, drive innovation, and achieve their strategic objectives with confidence.</p>
      </div>

      <div class="svc-tabs">
        <div class="svc-tab active" data-svc="tech">
          <div class="ico">◧</div>
          <b>Technology Services</b>
        </div>
        <div class="svc-tab" data-svc="marketing">
          <div class="ico">◔</div>
          <b>Marketing Agency</b>
        </div>
        <div class="svc-tab" data-svc="mgmt">
          <div class="ico">◐</div>
          <b>Management Consulting</b>
        </div>
      </div>

      <div class="svc-panels" data-title="Technology Services" data-svcpanel="tech">
        <div class="svc-card">
          <span class="tag">AI</span>
          <h4>Artificial Intelligence</h4>
          <p>Accelerate growth with scalable AI solutions that spark innovation and transform business operations.</p>
        </div>
        <div class="svc-card">
          <span class="tag">Data</span>
          <h4>Data Analytics</h4>
          <p>Transform data into real-time insights that streamline operations and enable smarter decision-making.</p>
        </div>
        <div class="svc-card">
          <span class="tag">Cloud</span>
          <h4>Cloud Services</h4>
          <p>Optimize performance and scalability with secure, cost-effective cloud solutions built for growth.</p>
        </div>
      </div>

      <div class="svc-panels" data-svcpanel="marketing" data-title="Marketing Agency" style="display:none;">
        <div class="svc-card">
          <span class="tag">Brand</span>
          <h4>Brand Strategy</h4>
          <p>Sharpen your positioning and message so every campaign lands with the right audience.</p>
        </div>
        <div class="svc-card">
          <span class="tag">Growth</span>
          <h4>Performance Marketing</h4>
          <p>Data-driven campaigns across paid, search and social that turn budget into pipeline.</p>
        </div>
        <div class="svc-card">
          <span class="tag">Content</span>
          <h4>Content &amp; Design</h4>
          <p>Creative and content production that keeps your brand consistent across every market.</p>
        </div>
      </div>

      <div class="svc-panels" data-svcpanel="mgmt" data-title="Management Consulting" style="display:none;">
        <div class="svc-card">
          <span class="tag">Strategy</span>
          <h4>Operating Model Design</h4>
          <p>Restructure teams and workflows for clarity, speed and accountability at scale.</p>
        </div>
        <div class="svc-card">
          <span class="tag">Change</span>
          <h4>Change Management</h4>
          <p>Move people, process and technology together through major transformation programs.</p>
        </div>
        <div class="svc-card">
          <span class="tag">Advisory</span>
          <h4>Executive Advisory</h4>
          <p>Direct access to senior consultants who've led transformation at global scale.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- TECH EXPERTS -->
  <section class="experts">
    <div class="wrap">
      <div class="section-head center">
        <div class="eyebrow" style="justify-content:center;">Our People</div>
        <h2>Meet our tech experts</h2>
        <p>A glimpse of the specialists behind our talent network — proven experience across the domains that matter to
          you.</p>
      </div>
    </div>
    <div class="experts-track">
      <div class="expert-card">
        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=500&q=80"
          alt="Prem Kumar">
        <div class="info">
          <span class="exp">15+ yrs</span>
          <h3>Prem Kumar</h3>
          <div class="domain">Life Sciences</div>
        </div>
      </div>
      <div class="expert-card">
        <img src="https://images.unsplash.com/photo-1500648767791-00d5a4ee9baa?auto=format&fit=crop&w=500&q=80"
          alt="Dhinesh Kumar">
        <div class="info">
          <span class="exp">15+ yrs</span>
          <h3>Dhinesh Kumar</h3>
          <div class="domain">EdTech</div>
        </div>
      </div>
      <div class="expert-card">
        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=500&q=80"
          alt="Arjun Mehta">
        <div class="info">
          <span class="exp">12+ yrs</span>
          <h3>Arjun Mehta</h3>
          <div class="domain">Fintech &amp; Banking</div>
        </div>
      </div>
      <div class="expert-card">
        <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?auto=format&fit=crop&w=500&q=80"
          alt="Sarah Lin">
        <div class="info">
          <span class="exp">10+ yrs</span>
          <h3>Sarah Lin</h3>
          <div class="domain">Healthcare AI</div>
        </div>
      </div>
      <div class="expert-card">
        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=500&q=80"
          alt="Rajesh Iyer">
        <div class="info">
          <span class="exp">18+ yrs</span>
          <h3>Rajesh Iyer</h3>
          <div class="domain">Cloud &amp; DevOps</div>
        </div>
      </div>
      <div class="expert-card">
        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?auto=format&fit=crop&w=500&q=80"
          alt="Fatima Al Sayed">
        <div class="info">
          <span class="exp">9+ yrs</span>
          <h3>Fatima Al Sayed</h3>
          <div class="domain">Retail &amp; E-commerce</div>
        </div>
      </div>
      <!-- duplicate set for seamless loop -->
      <div class="expert-card">
        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=500&q=80"
          alt="Prem Kumar">
        <div class="info">
          <span class="exp">15+ yrs</span>
          <h3>Prem Kumar</h3>
          <div class="domain">Life Sciences</div>
        </div>
      </div>
      <div class="expert-card">
        <img src="https://images.unsplash.com/photo-1500648767791-00d5a4ee9baa?auto=format&fit=crop&w=500&q=80"
          alt="Dhinesh Kumar">
        <div class="info">
          <span class="exp">15+ yrs</span>
          <h3>Dhinesh Kumar</h3>
          <div class="domain">EdTech</div>
        </div>
      </div>
      <div class="expert-card">
        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=500&q=80"
          alt="Arjun Mehta">
        <div class="info">
          <span class="exp">12+ yrs</span>
          <h3>Arjun Mehta</h3>
          <div class="domain">Fintech &amp; Banking</div>
        </div>
      </div>
      <div class="expert-card">
        <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?auto=format&fit=crop&w=500&q=80"
          alt="Sarah Lin">
        <div class="info">
          <span class="exp">10+ yrs</span>
          <h3>Sarah Lin</h3>
          <div class="domain">Healthcare AI</div>
        </div>
      </div>
      <div class="expert-card">
        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=500&q=80"
          alt="Rajesh Iyer">
        <div class="info">
          <span class="exp">18+ yrs</span>
          <h3>Rajesh Iyer</h3>
          <div class="domain">Cloud &amp; DevOps</div>
        </div>
      </div>
      <div class="expert-card">
        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?auto=format&fit=crop&w=500&q=80"
          alt="Fatima Al Sayed">
        <div class="info">
          <span class="exp">9+ yrs</span>
          <h3>Fatima Al Sayed</h3>
          <div class="domain">Retail &amp; E-commerce</div>
        </div>
      </div>
    </div>
  </section>

  <!-- GLOBAL REACH -->
  <section id="reach">
    <div class="wrap">
      <div class="reach-head">
        <h2>Global Reach,</h2>
        <div class="line"></div>
      </div>
      <div class="reach-grid" id="reachGrid">
        <div class="reach-card">
          <img src="assets/images/index/india.jpeg"
            alt="Mumbai sea-link bridge at dusk, India">
          <div class="label"><small>South Asia</small>India</div>
        </div>
        <div class="reach-card">
          <img src="assets/images/index/usa.jpeg"
            alt="City skyline at sunrise, USA">
          <div class="label"><small>Americas</small>USA</div>
        </div>
        <div class="reach-card">
          <img src="assets/images/index/singapore.jpeg"
            alt="Singapore skyline at dusk">
          <div class="label"><small>Southeast Asia</small>Singapore</div>
        </div>
        <div class="reach-card">
          <img src="assets/images/index/dubai.jpeg"
            alt="Dubai skyline with skyscrapers, Middle East">
          <div class="label"><small>MENA</small>Dubai</div>
        </div>
        <div class="reach-card">
          <img src="assets/images/index/japan.jpeg"
            alt="Tokyo skyline at night, Japan">
          <div class="label"><small>East Asia</small>Japan</div>
        </div>
        <div class="reach-card">
          <img
            src="assets/images/index/australia.jpeg"
            alt="Sydney Opera House, Australia">
          <div class="label"><small>Sydney</small>Australia</div>
        </div>
      </div>
    </div>
  </section>

  <!-- HIRE TALENT SPLIT -->
  <section>
    <div class="wrap split">
      <div class="split-img">
        <img src="https://images.unsplash.com/photo-1556157382-97eda2d62296?auto=format&fit=crop&w=800&q=80"
          alt="IT professional working remotely on laptop">
      </div>
      <div>
        <div class="eyebrow">For Employers</div>
        <h2>Find Top IT & Technology Talent Faster</h2>
        <p>Whether you're a growing startup or a global enterprise, we help you connect with skilled professionals quickly and efficiently. Our recruitment specialists leverage industry expertise and intelligent talent-matching technology to identify the right candidates for your business needs.</p>
        <p>Gain access to a vast network of qualified professionals, deep market insights, and personalized hiring support. From understanding your requirements to successful onboarding, our dedicated team ensures a seamless hiring experience every step of the way.</p>
        <div class="split-actions">
          <a href="<?= $base ?>contact" class="btn btn-primary">Start Hiring →</a>
          <a href="<?= $base ?>#" class="btn btn-outline">See How It Works</a>
        </div>
      </div>
    </div>
  </section>

  <!-- FEATURED JOBS -->
  <section class="jobs" id="jobs">
    <div class="wrap">
      <div class="section-head">
        <div class="eyebrow" style="color:var(--lime);">For Candidates</div>
        <h2>Featured jobs</h2>
        <p>A snapshot of live roles our consultants are recruiting for right now.</p>
      </div>
      <div class="jobs-grid">
        <div class="job-card">
          <div>
            <h3>SaaS Implementation &amp; Support Lead</h3>
            <div class="meta">Sydney</div>
            <div class="role">Team Leaders &amp; Management · Permanent</div>
          </div>
          <div class="date">Posted 12-Jun-2026</div>
          <a href="<?= $base ?>career" class="btn btn-outline-light">Learn More</a>
        </div>
        <div class="job-card">
          <div>
            <h3>Senior Network Engineer — Data Centre</h3>
            <div class="meta">Sydney</div>
            <div class="role">Infrastructure / Networks · Contract</div>
          </div>
          <div class="date">Posted 12-Jun-2026</div>
          <a href="<?= $base ?>career" class="btn btn-outline-light">Learn More</a>
        </div>
        <div class="job-card">
          <div>
            <h3>Senior Network Engineer</h3>
            <div class="meta">Burwood East</div>
            <div class="role">Infrastructure / Systems · Contract, 12 months</div>
          </div>
          <div class="date">Posted 12-Jun-2026</div>
          <a href="<?= $base ?>career" class="btn btn-outline-light">Learn More</a>
        </div>
        <div class="job-card">
          <div>
            <h3>Application Support Administrator</h3>
            <div class="meta">Perth</div>
            <div class="role">Helpdesk &amp; IT Support · Contract</div>
          </div>
          <div class="date">Posted 12-Jun-2026</div>
          <a href="<?= $base ?>career" class="btn btn-outline-light">Learn More</a>
        </div>
      </div>
    </div>
  </section>

  <!-- WHY US -->
  <section class="why">
    <div class="wrap why-grid">
      <div class="why-img">
        <img src="assets/images/index/why-choose.jpg"
          alt="International team of consultants collaborating in a meeting">
        <!-- <div class="badge"><b class="count-up" data-target="28" data-suffix="+">28+</b><span>Years of combined expertise</span></div> -->
      </div>
      <div class="why-content">
        <div class="eyebrow">Why Choose Adhiran Infotech?</div>
        <h2>Transforming Talent, Technology, and Business Outcomes</h2>
        <p>Adhiran Infotech empowers organizations with world-class talent solutions, technology consulting, and digital transformation services. By blending deep industry expertise, AI-driven innovation, and a global delivery model, we help businesses build future-ready teams, accelerate growth, and stay ahead in an evolving digital landscape.</p>
        <p>From enterprise staffing and managed teams to cloud, data, and AI initiatives, we deliver scalable solutions tailored to your business objectives.</p>
        <p class="highlight">Trusted by Businesses Across the Globe</p>
        <div class="why-points">
          <div class="why-point"><b class="count-up" data-target="500" data-suffix="+">500+</b><span>Successful placements</span></div>
          <div class="why-point"><b class="count-up" data-target="4">3</b><span>Global delivery hubs</span></div>
          <div class="why-point"><b class="count-up" data-target="48" data-suffix=" hrs">48 hrs</b><span>Average time to first match</span></div>
          <div class="why-point"><b>30–50%</b><span>Reduced Time-to-Hire</span></div>
        </div>
      </div>
    </div>
  </section>

  <!-- INDUSTRIES -->
  <section class="industries bg-white" id="industries">
    <div class="wrap">
      <div class="section-head">
        <div class="eyebrow">Industries We Serve</div>
        <h2>Specialized Expertise Across Key Industries</h2>
        <p>With deep domain knowledge and access to industry-specific talent, we help organizations navigate complex challenges, accelerate innovation, and achieve business success. Our consultants and professionals understand the unique demands of your sector, ensuring faster impact and better outcomes.</p>
      </div>
      <div class="industries-layout">
        <div class="ind-list">
          <div class="ind-row active" data-ind="0">
            <span class="name"><span class="num">01</span>Banking &amp; Financial Services</span>
            <span class="arrow">→</span>
          </div>
          <div class="ind-row" data-ind="1">
            <span class="name"><span class="num">02</span>Consumer Products</span>
            <span class="arrow">→</span>
          </div>
          <div class="ind-row" data-ind="2">
            <span class="name"><span class="num">03</span>Healthcare &amp; Life Sciences</span>
            <span class="arrow">→</span>
          </div>
          <div class="ind-row" data-ind="3">
            <span class="name"><span class="num">04</span>Hospitality</span>
            <span class="arrow">→</span>
          </div>
          <div class="ind-row" data-ind="4">
            <span class="name"><span class="num">05</span>Manufacturing</span>
            <span class="arrow">→</span>
          </div>
          <div class="ind-row" data-ind="5">
            <span class="name"><span class="num">06</span>Professional Services</span>
            <span class="arrow">→</span>
          </div>
        </div>
        <div class="ind-visual">
          <div class="pane active" data-pane="0" data-title="Banking & Financial Services">
            <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=900&q=80"
              alt="Modern bank trading floor">
            <div class="info">
              <span class="tag">Banking &amp; Finance</span>
              <h3>Banking &amp; Financial Services</h3>
              <p>Compliance-ready talent and consulting for banks, insurers and fintechs across global markets.</p>
            </div>
          </div>
          <div class="pane" data-pane="1" data-title="Consumer Products">
            <img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?auto=format&fit=crop&w=900&q=80"
              alt="Retail store with consumer products">
            <div class="info">
              <span class="tag">Retail &amp; CPG</span>
              <h3>Consumer Products</h3>
              <p>Digital and supply-chain expertise to help retail and CPG brands move faster across regions.</p>
            </div>
          </div>
          <div class="pane" data-pane="2" data-title="Healthcare & Life Sciences">
            <img src="https://images.unsplash.com/photo-1538108149393-fbbd81895907?auto=format&fit=crop&w=900&q=80"
              alt="Healthcare professionals in a hospital">
            <div class="info">
              <span class="tag">Healthcare</span>
              <h3>Healthcare &amp; Life Sciences</h3>
              <p>Specialist IT and clinical-systems talent for providers, payers and life sciences organizations.</p>
            </div>
          </div>
          <div class="pane" data-pane="3" data-title="Hospitality">
            <img src="https://images.unsplash.com/photo-1568084680786-a84f91d1153c?auto=format&fit=crop&w=900&q=80"
              alt="Modern hotel lobby">
            <div class="info">
              <span class="tag">Hospitality</span>
              <h3>Hospitality</h3>
              <p>Technology talent for guest-experience platforms, booking systems and global hotel groups.</p>
            </div>
          </div>
          <div class="pane" data-pane="4" data-title="Manufacturing">
            <img src="https://images.unsplash.com/photo-1565793298595-6a879b1d9492?auto=format&fit=crop&w=900&q=80"
              alt="Modern manufacturing plant">
            <div class="info">
              <span class="tag">Manufacturing</span>
              <h3>Manufacturing</h3>
              <p>Automation, ERP and IoT specialists to modernize plants and global supply chains.</p>
            </div>
          </div>
          <div class="pane" data-pane="5" data-title="Professional Services">
            <img src="https://images.unsplash.com/photo-1556761175-4b46a572b786?auto=format&fit=crop&w=900&q=80"
              alt="Professionals in a consulting meeting">
            <div class="info">
              <span class="tag">Consulting</span>
              <h3>Professional Services</h3>
              <p>Flexible consulting and project teams for firms scaling delivery across multiple geographies.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- NEWS / BLOG -->
  <section class="news" id="news">
    <div class="wrap">
      <div class="section-head">
        <div class="eyebrow" style="justify-content:center;">Insights</div>
        <h2>Stories of <em>transformation</em></h2>
        <p>Real outcomes from our talent and consulting engagements — across fintech, healthcare, retail, manufacturing
          and logistics.</p>
      </div>
      <div class="stories-grid">
        <a href="<?= $base ?>#" class="story-card big">
          <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&w=900&q=80"
            alt="Team presenting in a modern office">
          <div class="inner">
            <span class="pill">Fintech</span>
            <h3>Re-engineered a digital bank's core platform — cut transaction latency by 73%</h3>
          </div>
        </a>
        <a href="<?= $base ?>#" class="story-card">
          <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&w=700&q=80"
            alt="Healthcare team working at desks">
          <div class="inner">
            <span class="pill">Healthcare</span>
            <h3>AI diagnostic platform for 200+ hospitals</h3>
          </div>
        </a>
        <a href="<?= $base ?>#" class="story-card">
          <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?auto=format&fit=crop&w=700&q=80"
            alt="Analytics dashboard on screen">
          <div class="inner">
            <span class="pill">Retail</span>
            <h3>40% lift in conversions for global e-commerce</h3>
          </div>
        </a>
        <a href="<?= $base ?>#" class="story-card">
          <img src="https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=700&q=80"
            alt="Engineer working on circuit board">
          <div class="inner">
            <span class="pill">Manufacturing</span>
            <h3>IoT reducing downtime by 60%</h3>
          </div>
        </a>
        <a href="<?= $base ?>#" class="story-card">
          <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?auto=format&fit=crop&w=700&q=80"
            alt="Person using laptop and card for logistics tracking">
          <div class="inner">
            <span class="pill">Logistics</span>
            <h3>Real-time tracking for 15K vehicles</h3>
          </div>
        </a>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="cta" id="contact">
    <h2>Ready to build your next great team?</h2>
    <p>Tell us what you're trying to solve — we'll connect you with the right people, technology and consulting
      expertise to get there.</p>
    <div class="actions">
      <a href="<?= $base ?>contact" class="btn btn-lime">Talk to an Expert</a>
      <a href="<?= $base ?>#jobs" class="btn btn-outline-light">View Open Roles</a>
    </div>
  </section>

  <!-- CASE STUDIES -->
  <section class="case-studies" id="case-studies">
    <div class="wrap">
      <div class="section-head center">
        <div class="eyebrow" style="justify-content:center;">Case Studies</div>
        <h2>Proven results, real impact</h2>
        <p>A sample of how our talent and consulting teams have helped clients modernize, automate and scale.</p>
      </div>
      <div class="case-grid">
        <a href="<?= $base ?>#" class="case-card">
          <div class="case-card-img">
            <div class="ico"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path
                  d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
              </svg></div>
            <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?auto=format&fit=crop&w=700&q=80"
              alt="AI diagnostics in a hospital setting">
          </div>
          <div class="case-card-body">
            <span class="tag">Healthcare AI</span>
            <h3>AI-powered diagnostics platform for a hospital network</h3>
            <p>Built and staffed an AI/ML team that delivered a diagnostic-assist platform now used across 200+
              hospitals.</p>
            <span>Read Case Study <span class="arrow">→</span></span>
          </div>
        </a>
        <a href="<?= $base ?>#" class="case-card">
          <div class="case-card-img">
            <div class="ico"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect x="3" y="3" width="7" height="7" rx="1" />
                <rect x="14" y="3" width="7" height="7" rx="1" />
                <rect x="14" y="14" width="7" height="7" rx="1" />
                <rect x="3" y="14" width="7" height="7" rx="1" />
              </svg></div>
            <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=700&q=80"
              alt="Automation workflow on screen">
          </div>
          <div class="case-card-body">
            <span class="tag">UiPath Automation</span>
            <h3>RPA rollout that automated 30+ back-office workflows</h3>
            <p>Deployed certified UiPath developers to design and scale bots, cutting manual processing time by over
              60%.</p>
            <span>Read Case Study <span class="arrow">→</span></span>
          </div>
        </a>
        <a href="<?= $base ?>#" class="case-card">
          <div class="case-card-img">
            <div class="ico"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                <circle cx="9" cy="7" r="4" />
                <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
              </svg></div>
            <img src="https://images.unsplash.com/photo-1581093588401-fbb62a02f120?auto=format&fit=crop&w=700&q=80"
              alt="Sales team reviewing CRM dashboard">
          </div>
          <div class="case-card-body">
            <span class="tag">Veeva CRM</span>
            <h3>Veeva CRM implementation for a life sciences leader</h3>
            <p>Configured and integrated Veeva CRM across global sales teams, improving rep productivity and compliance
              tracking.</p>
            <span>Read Case Study <span class="arrow">→</span></span>
          </div>
        </a>
        <a href="<?= $base ?>#" class="case-card">
          <div class="case-card-img">
            <div class="ico"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M22 10v6M2 10l10-5 10 5-10 5z" />
                <path d="M6 12v5c3 3 9 3 12 0v-5" />
              </svg></div>
            <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?auto=format&fit=crop&w=700&q=80"
              alt="Student learning online with laptop">
          </div>
          <div class="case-card-body">
            <span class="tag">EdTech AI</span>
            <h3>AI-based personalized learning platform</h3>
            <p>Engineered an adaptive learning engine that tailors content paths for students, boosting completion
              rates.</p>
            <span>Read Case Study <span class="arrow">→</span></span>
          </div>
        </a>
      </div>
    </div>
  </section>

  <?php include 'includes/footer.php'; ?>