<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap");
body {
  font-family: "Poppins", sans-serif;
  color: #0c0c0c;
  background-color: #ffffff;
  overflow-x: hidden;
}

.layout_padding {
  padding: 90px 0;
}

.layout_margin {
  margin: 90px 0;
}

.layout_padding2 {
  padding: 75px 0;
}

.layout_padding2-top {
  padding-top: 75px;
}

.layout_padding2-bottom {
  padding-bottom: 75px;
}

.layout_padding-top {
  padding-top: 90px;
}

.layout_padding-bottom {
  padding-bottom: 90px;
}

.heading_container {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: start;
      -ms-flex-align: start;
          align-items: flex-start;
}

.heading_container h2 {
  position: relative;
  font-weight: bold;
}

.heading_container h2 span {
  color: #1B59E2;
}

.heading_container.heading_center {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  text-align: center;
}

a,
a:hover,
a:focus {
  text-decoration: none;
}

a:hover,
a:focus {
  color: initial;
}

.btn,
.btn:focus {
  outline: none !important;
  -webkit-box-shadow: none;
          box-shadow: none;
}

/*header section*/
.hero_area {
  position: relative;
  min-height: 100vh;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  background-color: #1B59E2;
  border-radius: 0 0 350px 0;
}

.sub_page .hero_area {
  min-height: auto;
  border-radius: 0 0 45px 0;
}

.header_section {
  padding: 15px 0;
}

.header_section .container-fluid {
  padding-right: 25px;
  padding-left: 25px;
}

nav.navbar.navbar-expand-lg.navbar-light.bg-light {
  border-radius: 0px 0px 0px 46px;
}
.quote_btn-container {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.quote_btn-container a {
  color: #000000;
  text-transform: uppercase;
}

.quote_btn-container a span {
  margin-left: 5px;
}

.quote_btn-container a:hover {
  color: #f8842b;
}

.quote_btn-container .quote_btn {
  display: inline-block;
  padding: 5px 25px;
  background-color: #f8842b;
  color: #ffffff;
  border-radius: 5px;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
  border: 1px solid #f8842b;
}

.quote_btn-container .quote_btn:hover {
  color: #ffffff;
  -webkit-transform: translateY(-3px);
          transform: translateY(-3px);
}

/*end header section*/
/* slider section */
.slider_section {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  padding: 45px 0;
}

.slider_section .row {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
.navbar-light .navbar-brand {
  color: #1B59E2;
  font-weight: 400;
}

a.nav-link {
  color: #1B59E2 !important;
}
.slider_section #customCarousel1 {
  width: 100%;
  position: unset;
}

.slider_section .detail-box {
  text-align: center;
  color: #ffffff;
}

.slider_section .detail-box h1 {
  font-weight: bold;
  margin-bottom: 20px;
}

.slider_section .detail-box .btn-box {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  margin: 0 -5px;
  margin-top: 45px;
}

.slider_section .detail-box .btn-box a {
  margin: 5px;
  text-align: center;
  width: 185px;
}

.slider_section .detail-box .btn-box .btn1 {
  display: inline-block;
  padding: 12px 15px;
  background-color: #1B59E2;
  color: #ffffff;
  border-radius: 5px;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
  border: 1px solid #1B59E2;
}

.slider_section .detail-box .btn-box .btn1:hover {
  color: #ffffff;
  -webkit-transform: translateY(-3px);
          transform: translateY(-3px);
}

.slider_section .img-box img {
  width: 100%;
}

.slider_section .carousel-indicators {
  position: unset;
  margin: 0;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  margin-top: 45px;
}

.slider_section .carousel-indicators li {
  background-color: #ffffff;
  width: 15px;
  height: 15px;
  border-radius: 100%;
  opacity: 1;
}

.slider_section .carousel-indicators li.active {
  width: 23px;
  height: 23px;
  background-color: #f8842b;
}

.service_section {
  text-align: center;
}

.service_section .heading_container {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.service_section .box {
  margin-top: 25px;
  padding: 15px;
  border-radius: 10px;
  -webkit-box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.25);
          box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.25);
  position: relative;
  overflow: hidden;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}

.service_section .box::before {
  content: "";
  width: 275px;
  height: 275px;
  position: absolute;
  right: -137.5px;
  bottom: -137.5px;
  background-color: #faf8fd;
  z-index: -1;
  border-radius: 100%;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}

.service_section .box .img-box {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  height: 125px;
  border-radius: 15px;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}

.service_section .box .img-box img {
  width: 75px;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}

.service_section .box .detail-box {
  margin-top: 15px;
}

.service_section .box .detail-box h5 {
  font-weight: bold;
  position: relative;
}

.service_section .box .detail-box a {
  color: inherit;
}

.service_section .box:hover {
  color: #ffffff;
}

.service_section .box:hover::before {
  -webkit-transform: scale(5);
          transform: scale(5);
  background-color: #1B59E2;
}

.service_section .box:hover img {
  -webkit-filter: invert(1);
          filter: invert(1);
}

.service_section .btn-box {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  margin-top: 45px;
}

.service_section .btn-box a {
  display: inline-block;
  padding: 10px 45px;
  background-color: #1B59E2;
  color: #ffffff;
  border-radius: 5px;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
  border: 1px solid #1B59E2;
}

.service_section .btn-box a:hover {
  color: #ffffff;
  -webkit-transform: translateY(-3px);
          transform: translateY(-3px);
}

.about_section {
  background-color: #1B59E2;
  color: #ffffff;
  border-radius: 250px 0 250px 0;
}

.about_section .row {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.about_section .img-box {
  position: relative;
}

.about_section .img-box img {
  width: 100%;
}

.about_section .detail-box p {
  margin-top: 15px;
}

.about_section .detail-box a {
  display: inline-block;
  padding: 10px 45px;
  background-color: #f8842b;
  color: #ffffff;
  border-radius: 5px;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
  border: 1px solid #f8842b;
  margin-top: 15px;
}

.about_section .detail-box a:hover {
  color: #ffffff;
  -webkit-transform: translateY(-3px);
          transform: translateY(-3px);
}

.case_section .heading_container {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.case_section .heading_container h2::before {
  left: 50%;
  -webkit-transform: translateX(-50%);
          transform: translateX(-50%);
}

.case_section .box {
  margin-top: 45px;
  background-color: #ffffff;
  -webkit-box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.15);
          box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.15);
  text-align: center;
}

.case_section .box .img-box {
  position: relative;
}

.case_section .box .img-box img {
  width: 100%;
}

.case_section .box .detail-box {
  padding: 25px;
}

.case_section .box .detail-box h5 {
  font-weight: bold;
}

.case_section .box .detail-box p {
  font-size: 15px;
}

.case_section .box .detail-box a {
  color: #1B59E2;
}

.client_section .box {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  margin: 45px 0;
  text-align: center;
}

.client_section .box .img-box {
  width: 125px;
  height: 125px;
  min-width: 125px;
  position: relative;
  margin-bottom: -62.5px;
}

.client_section .box .img-box img {
  width: 100%;
  border-radius: 100%;
}

.client_section .box .client_info .client_name h5 {
  font-weight: bold;
  margin-bottom: 0;
  text-transform: uppercase;
}

.client_section .box .client_info .client_name h6 {
  margin-bottom: 0;
  color: #1B59E2;
  font-weight: normal;
  font-size: 15px;
  text-transform: uppercase;
}

.client_section .box .client_info i {
  font-size: 24px;
}

.client_section .box p {
  margin-top: 15px;
}

.client_section .box .detail-box {
  background-color: #ffffff;
  background-color: #1B59E2;
  color: #ffffff;
  border-radius: 15px;
  padding: 85px 45px 15px 45px;
}

.client_section .carousel-indicators {
  position: unset;
  margin: 0;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.client_section .carousel-indicators li {
  background-color: #1B59E2;
  width: 10px;
  height: 10px;
  border-radius: 100%;
  opacity: 1;
}

.client_section .carousel-indicators li.active {
  width: 20px;
  height: 20px;
  background-color: #f8842b;
}

.contact_section {
  position: relative;
}

.contact_section form {
  margin-top: 45px;
}

.contact_section input {
  width: 100%;
  border: none;
  height: 50px;
  margin-bottom: 25px;
  padding-left: 15px;
  background-color: transparent;
  outline: none;
  color: #000000;
  border: 1px solid #a5a5a5;
}

.contact_section input::-webkit-input-placeholder {
  color: #1c1b1b;
}

.contact_section input:-ms-input-placeholder {
  color: #1c1b1b;
}

.contact_section input::-ms-input-placeholder {
  color: #1c1b1b;
}

.contact_section input::placeholder {
  color: #1c1b1b;
}

.contact_section input.message-box {
  height: 120px;
}

.contact_section button {
  font-family: "Poppins", sans-serif;
  display: inline-block;
  padding: 10px 65px;
  background-color: #1B59E2;
  color: #ffffff;
  border-radius: 3px;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
  border: 1px solid #1B59E2;
  color: #fff;
  margin-top: 10px;
}

.contact_section button:hover {
  color: #ffffff;
  -webkit-transform: translateY(-3px);
          transform: translateY(-3px);
}

.contact_section .map_container {
  height: 100%;
  min-height: 325px;
  overflow: hidden;
  margin-left: 45px;
}

.contact_section .map_container .map {
  height: 100%;
}

.contact_section .map_container .map #googleMap {
  height: 100%;
}

.footer_container {
  background-color: #1B59E2;
  color: #ffffff;
  border-radius: 350px 0 0 0;
  padding-top: 145px;
}

/* info section */
.info_section h4 {
  font-weight: 600;
  margin-bottom: 20px;
}

.info_section .info_contact .contact_link_box {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
}

.info_section .info_contact .contact_link_box a {
  margin: 5px 0;
  color: #ffffff;
}

.info_section .info_contact .contact_link_box a i {
  margin-right: 5px;
}

.info_section .info_contact .contact_link_box a:hover {
  color: #f8842b;
}

.info_section .info_social {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  margin-top: 20px;
}

.info_section .info_social a {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  color: #ffffff;
  border-radius: 100%;
  margin-right: 10px;
  font-size: 24px;
}

.info_section .info_social a:hover {
  color: #f8842b;
}

.info_section .info_links {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
}

.info_section .info_links a {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  margin-bottom: 15px;
  color: #ffffff;
}

.info_section .info_links a:hover {
  color: #f8842b;
}

.info_section form input {
  border: none;
  border-bottom: 1px solid #ffffff;
  background-color: transparent;
  width: 100%;
  height: 45px;
  color: #ffffff;
  outline: none;
}

.info_section form input::-webkit-input-placeholder {
  color: #ffffff;
}

.info_section form input:-ms-input-placeholder {
  color: #ffffff;
}

.info_section form input::-ms-input-placeholder {
  color: #ffffff;
}

.info_section form input::placeholder {
  color: #ffffff;
}

.info_section form button {
  width: 100%;
  text-align: center;
  display: inline-block;
  padding: 10px 55px;
  background-color: #f8842b;
  color: #ffffff;
  border-radius: 0;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
  border: 1px solid #f8842b;
  margin-top: 15px;
}

.info_section form button:hover {
  color: #ffffff;
  -webkit-transform: translateY(-3px);
          transform: translateY(-3px);
}

/* end info section */
/* footer section*/
.footer_section {
  position: relative;
  text-align: center;
}

.footer_section p {
  padding: 25px 0;
  margin: 0;
}

.footer_section p a {
  color: inherit;
}


/*# sourceMappingURL=style.css.map */
</style>