
/**
 * GENERAL STYLING
 */

/* Body Text */
.minigo {
    color: rgba(57,65,77,1);
/*
    font-family: Source Sans Pro;
*/
    font-size: 18px;
}

/* Text Links */
.minigo a,
.minigo .contact-info a {
    color: rgba(41,47,54,1);
}

/* Text Links Hover */
.minigo a:hover, .minigo .contact-info a:hover {
    color: rgba(211,188,132,1);
}

/* Text Link Underlines */

.minigo .site-page a::before {
    background-color: rgba(211,188,132,0.25);
}

.minigo .site-page a:hover::before {
    background-color: rgba(211,188,132,0.5);
}

/* Paragraphs */
.minigo p,
.minigo .contact-info {
    font-family: Source Sans Pro;
    font-size: 18px;
    font-weight: 400;
    color: #485760;
    line-height: 26px;
}

/* Heading H1 */
.minigo h1 {
    font-family: Source Sans Pro;
    font-size: 60px;
    font-weight: 700;
    color: #485760;
}

/* Heading H2 */
.minigo h2 {
    font-family: Source Sans Pro;
    font-size: 36px;
    font-weight: 300;
    color: #5a6a7a;
}

/* Heading H3 */
.minigo h3 {
    font-family: Source Sans Pro;
    font-size: 30px;
    font-weight: 700;
    color: #485760;
    line-height: 30px;
}

/* Heading H4 */
.minigo h4 {
    font-family: Source Sans Pro;
    font-size: 24px;
    font-weight: 300;
    color: #485760;
    line-height: 24px;
}

/* Heading H5 */
.minigo h5 {
    font-family: Source Sans Pro;
    font-size: 20px;
    font-weight: 300;
    color: #485760;
    line-height: 20px;
}

/* Heading H6 */
.minigo h6 {
    font-family: Source Sans Pro;
    font-size: 18px;
    font-weight: 300;
    color: #485760;
    line-height: 18px;
}

/* Content Buttons */
.minigo .btn {
    font-family: Open Sans;
    font-weight: 800;
    font-size: 22px;
    border-top-width: 2px;
    border-left-width: 2px;
    border-right-width: 2px;
    border-bottom-width: 2px;
    border-style: solid;
    border-color: rgba(211,188,132,1);
    background: rgba(211,188,132,1);
    color: rgba(255,255,255,0.9);
}

/* Content Buttons - Hover */
.minigo .btn:hover {
    border-top-width: 2px;
    border-left-width: 2px;
    border-right-width: 2px;
    border-bottom-width: 2px;
    border-style: solid;
    border-color: rgba(211,188,132,1);
    background: rgba(211,188,132,0);
    color: rgba(57,65,77,1);
}

/* [Main Navigation] */

/* Main Navigation - Label */
.minigo .nav-left .site-page__trigger span,
.minigo .nav-right .site-page__trigger span,
.minigo .site-to__top span,
.minigo .nav-close .site-page__close span,
.minigo .nav-menu a span {
    font-family: Open Sans;
    font-weight: 800;
    font-size: 16px;
    color: rgba(255,255,255,0.75);
}

/* Main Navigation - Icon */
.minigo .nav-left .site-page__trigger i,
.minigo .nav-right .site-page__trigger i,
.minigo .site-to__top i,
.minigo .nav-close .site-page__close i,
.minigo .nav-menu a i {
    border-top-width: 1px;
    border-left-width: 1px;
    border-right-width: 1px;
    border-bottom-width: 1px;
    border-style: solid;
    border-color: rgba(57,65,77,0);
    background-color: rgba(255,255,255,0);
    color: rgba(255,255,255,0.25);
 
}

/* Main Navigation - Label - Hover */
.minigo .nav-left .site-page__trigger:hover span,
.minigo .nav-left .site-page__trigger.active:hover span,
.minigo .nav-right .site-page__trigger:hover span,
.minigo .nav-right .site-page__trigger.active:hover span,
.minigo .site-to__top:hover span,
.minigo .nav-close .site-page__close:hover span,
.minigo .nav-menu a:hover span {
    color: rgba(211,188,132,1);
}

/* Main Navigation - Icon - Hover */
.minigo .nav-left .site-page__trigger:hover i,
.minigo .nav-left .site-page__trigger.active:hover i,
.minigo .nav-right .site-page__trigger:hover i,
.minigo .nav-right .site-page__trigger.active:hover i,
.minigo .site-to__top:hover i,
.minigo .nav-close .site-page__close:hover i,
.minigo .nav-menu a:hover i {
    border-top-width: 1px;
    border-left-width: 1px;
    border-right-width: 1px;
    border-bottom-width: 1px;
    border-style: solid;
    border-color: rgba(211,188,132,1);
    background-color: rgba(0,0,0,0.15);
    color: rgba(255,255,255,1) !important;
 
}

/* Main Navigation - Label - Selected */
.minigo .nav-left .site-page__trigger.active span,
.minigo .nav-right .site-page__trigger.active span,
.minigo .site-to__top:focus span,
.minigo .nav-close  .site-page__close:focus span,
.minigo .nav-menu a:focus span {
    color: rgba(255,255,255,1);
}

/* Main Navigation - Icon - Selected */
.minigo .nav-left .site-page__trigger.active i,
.minigo .nav-right .site-page__trigger.active i,
.minigo .site-to__top:focus i,
.minigo .nav-close  .site-page__close:focus i,
.minigo .nav-menu a:focus i {
    border-top-width: 1px;
    border-left-width: 1px;
    border-right-width: 1px;
    border-bottom-width: 1px;
    border-style: solid;
    border-color: rgba(57,65,77,0.15);
    background-color: rgba(211,188,132,1);
    color: rgba(255,255,255,1) !important;
 
}

/* Icon Menu Navigation */
.minigo .nav-social a,
.minigo .icon-menu a,
.minigo .team-holder .grid__item .team-links a,
.minigo .setup-audio {
    border-top-width: 1px;
    border-left-width: 1px;
    border-right-width: 1px;
    border-bottom-width: 1px;
    color: rgba(72,87,96,0.75);
    border-style: solid;
    border-color: rgba(57,65,77,0);
    background: rgba(255,255,255,0.5);
}

/* Icon Menu Nav - Hover */
.minigo .nav-social a:hover,
.minigo .icon-menu a:hover,
.minigo .team-holder .grid__item .team-links a:hover,
.minigo .setup-audio:hover  {
    border-top-width: 1px;
    border-left-width: 1px;
    border-right-width: 1px;
    border-bottom-width: 1px;
    border-style: solid;
    border-color: rgba(57,65,77,0.15);
    background: rgba(255,255,255,0.5);
    color: rgba(8,146,204,1);
}

.minigo .setup-audio .audio-icons i {
    color: rgba(72,87,96,0.75);
}

.minigo .setup-audio .audio-icons:hover i {
    color: rgba(8,146,204,1);
}

/* Icon Menu Nav - Label */
.minigo .nav-social a::after,
.minigo .nav-social a:hover::after,
.minigo .icon-menu a::after,
.minigo .icon-menu a:hover::after {
    font-family: Open Sans;
    font-size: 16px;
    font-weight: 700;
    line-height: 24px;
  
}

/* Icon Menu Nav - Label - Hover */
.minigo .nav-social a:hover::after,
.minigo .icon-menu a:hover::after {
    color: rgba(57,65,77,1);
}

/* [Forms] */

/* Input - Typography */
.minigo .text-input,
.minigo textarea,
.minigo select,
.minigo .contact-info,
.minigo .contact-info a {
    font-family: Open Sans;
    font-weight: 300;
    font-size: 22px;
}

/* Inputs */
.minigo .text-input,
.minigo textarea,
.minigo select {
    border-top-width: 1px;
    border-left-width: 1px;
    border-right-width: 1px;
    border-bottom-width: 1px;
    border-style: dotted;
    border-color: rgba(57,65,77,0.5);
    color: rgba(57,65,77,0.75);
    background: rgba(255,255,255,0.1);
}

/* Inputs - Hover */
.minigo .text-input:hover,
.minigo textarea:hover,
.minigo select:hover {
    border-top-width: 1px;
    border-left-width: 1px;
    border-right-width: 1px;
    border-bottom-width: 1px;
    border-style: dashed;
    border-color: rgba(211,188,132,1);
    color: rgba(57,65,77,1);
    background: rgba(255,255,255,0.5);
            box-shadow: 0 0 6px 0 rgba(211,188,132,0.1);
       -moz-box-shadow: 0 0 6px 0 rgba(211,188,132,0.1);
    -webkit-box-shadow: 0 0 6px 0 rgba(211,188,132,0.1);
}

/* Inputs - Focus */
.minigo .text-input:focus,
.minigo textarea:focus,
.minigo select:focus {
    border-top-width: 1px;
    border-left-width: 1px;
    border-right-width: 1px;
    border-bottom-width: 1px;
    border-style: dashed;
    border-color: rgba(57,65,77,0.5);
    color: rgba(0,0,0,1);
    background: rgba(255,255,255,0.75);
            box-shadow: 0 0 8px 0 rgba(57,65,77,0.15);
       -moz-box-shadow: 0 0 8px 0 rgba(57,65,77,0.15);
    -webkit-box-shadow: 0 0 8px 0 rgba(57,65,77,0.15);
}

/* Inputs - Labels */
.minigo form label {
    font-family: Open Sans;
    font-size: 16px;
    font-weight: 400;
    color: #485760;
}

/* Inputs - Notifications */
.minigo #contactForm.form--success::after {
    color: #485760;
}

/* Inputs - Placeholder Text */
.minigo input:-moz-placeholder,
.minigo textarea:-moz-placeholder {
    color: rgba(57,65,77,0.65);
}
.minigo input::-moz-placeholder,
.minigo textarea::-moz-placeholder {
    color: rgba(57,65,77,0.65);
}
.minigo input:-ms-input-placeholder,
.minigo textarea:-ms-input-placeholder {
    color: rgba(57,65,77,0.65);
}
.minigo input::-webkit-input-placeholder,
.minigo textarea::-webkit-input-placeholder {
    color: rgba(57,65,77,0.65);
}
.minigo input:hover:-moz-placeholder,
.minigo textarea:hover:-moz-placeholder {
    color: rgba(57,65,77,0.85);
}
.minigo input:hover::-moz-placeholder,
.minigo textarea:hover::-moz-placeholder {
    color: rgba(57,65,77,0.85);
}
.minigo input:hover:-ms-input-placeholder,
.minigo textarea:hover:-ms-input-placeholder {
    color: rgba(57,65,77,0.85);
}
.minigo input:hover::-webkit-input-placeholder,
.minigo textarea:hover::-webkit-input-placeholder {
    color: rgba(57,65,77,0.85);
}
.minigo input:focus:-moz-placeholder,
.minigo textarea:focus:-moz-placeholder {
    color: rgba(57,65,77,0.5);
}
.minigo input:focus::-moz-placeholder,
.minigo textarea:focus::-moz-placeholder {
    color: rgba(57,65,77,0.5);
}
.minigo input:focus:-ms-input-placeholder,
.minigo textarea:focus:-ms-input-placeholder {
    color: rgba(57,65,77,0.5);
}
.minigo input:focus::-webkit-input-placeholder,
.minigo textarea:focus::-webkit-input-placeholder {
    color: rgba(57,65,77,0.5);
}


/**
 * BLOCKS STYLING
 */

/* [Title] */

/* Title - Color */
.minigo .minigo-title.small-divider h1,
.minigo .minigo-title.med-divider h1,
.minigo .minigo-title.big-divider h1 {
    color: rgba(57,65,77,1);
 
}

/* Subtitle - Color */
.minigo .minigo-title.small-divider h3,
.minigo .minigo-title.med-divider h3,
.minigo .minigo-title.big-divider h3 {
    color: rgba(57,65,77,1);
 
}

/* Title Divider Color */
.minigo .minigo-title.small-divider h1::after,
.minigo .minigo-title.med-divider h1::after,
.minigo .minigo-title.big-divider h1::after {
    background-color: rgba(211,188,132,0.5);
 
}

/* Divider */

.minigo .minigo-divider {
    border-color: rgba(57,65,77,0.25);
   
}

/* Contact Info - Icons */

.minigo .contact-info i {
    color: rgba(57,65,77,0.5);
}
  
.minigo .contact-info:hover i {
    color: rgba(8,146,204,1);
}
  

/* Slider */

.minigo .slick-dots li button:before {
    color: rgba(57,65,77,0.3);
}

.minigo .slick-dots li button:hover:before {
    color: rgba(211,188,132,1);
}

.minigo .slick-dots li.slick-active button:before {
    color: rgba(57,65,77,0.75);
}

.minigo .slick-arrow:before {
    color: rgba(57,65,77,0.3);
}

.minigo .slick-arrow:hover:before {
    color: rgba(211,188,132,1);
}

.minigo .slick-holder {
    border: 1px solid rgba(211,188,132,0.5);
}

.minigo .slick-holder:hover {
    border: 1px solid rgba(211,188,132,1);
}

.minigo .slick-holder::after {
    background: rgba(255,255,255,0.1);
    z-index: -1;
}

.minigo .slick-holder:hover::after {
    background: rgba(57,65,77,0.1);
    opacity: 1;
    visibility: visible;
}

/* Team */

.minigo .team-holder .grid__item .profile-img {
    border-color: rgba(57,65,77,0.25);
  
    background-color: rgba(255,255,255,0);
 
}

.minigo .team-holder .grid__item:hover .profile-img {
      border-color: rgba(211,188,132,0.75);
 
    background-color: rgba(57,65,77,0.1);
  
}

/* Progress Bars */

.minigo .progress-bars-holder .progress-bar-value {
    color: rgba(57,65,77,0.5);
   
}

.minigo .progress-bars-holder .progress-bars-progress .progress-bar {
    background: rgba(211,188,132,1);
   
}

.minigo .progress-bars-holder .progress-bars-progress {
    border-color: rgba(57,65,77,0.25);
 
    background-color: rgba(255,255,255,0);
}

/* Testimonials */

.minigo .testimonials-holder .testimonials-container .testimonial-wrapper .testimonial-icon {
    color: rgba(211,188,132,0.25);
 
}

.minigo .testimonials-holder .testimonials-container .testimonial-wrapper:hover .testimonial-icon {
    color: rgba(8,146,204,1);
 
}

.minigo .testimonials-holder .testimonials-container .testimonial-wrapper .testimonial-quote::after {
    background-color: rgba(211,188,132,0.25);
 
}

.minigo .testimonials-holder .testimonials-container .testimonial-wrapper:hover .testimonial-quote::after {
    background-color: rgba(211,188,132,0.75);
 
}

.minigo .testimonials-holder .testimonials-container .testimonial-wrapper .testimonial-image {
    border-color: rgba(57,65,77,0.25);
 
    background-color: rgba(255,255,255,0);
 
}

.minigo .testimonials-holder .testimonials-container .testimonial-wrapper a:hover .testimonial-image {
    border-color: rgba(211,188,132,0.5);
    background-color: rgba(57,65,77,0.1);
 
}

/*  Map */

.minigo .map-container {
    border-color: rgba(211,188,132,0.5);
 
    background-color: rgba(255,255,255,0);
 
}

.minigo .map-container:hover {
    border-color: rgba(211,188,132,0.75);
 
    background-color: rgba(57,65,77,0.1);
 
}

/*  Icon Features */

.minigo .icon-features-holder .feature-item .feature-wrapper .feature-icon {
    color: rgba(57,65,77,0.5);
 
    border-color: rgba(211,188,132,0.5);
 
    background-color: rgba(255,255,255,0);
 
}

/*  Icon Features - Hover */

.minigo .icon-features-holder .feature-item .feature-wrapper:hover .feature-icon {
    color: rgba(255,255,255,1);
 
    border-color: rgba(57,65,77,0.15);
 
    background-color: rgba(211,188,132,1);
 
}

/*  Icon List */

.minigo .icon-list-holder .list-item .list-wrapper .list-icon {
    color: rgba(57,65,77,0.5);
 
    border-color: rgba(211,188,132,0.5);
 
    background-color: rgba(255,255,255,0);
 
}

/*  Icon List - Hover */

.minigo .icon-list-holder .list-item .list-wrapper:hover .list-icon {
    color: rgba(255,255,255,1);
 
    border-color: rgba(57,65,77,0.25);
 
    background-color: rgba(211,188,132,1);
 
}

/*  Counter Features - Icon */ 

.minigo .counter-features-holder .counter-feature-item .counter-feature-wrapper .counter-feature-icon {
    color: rgba(57,65,77,0.5);
 
    border-color: rgba(211,188,132,0.5);
 
    background-color: rgba(255,255,255,0);
 
}

/* Counter Features - Icon - Hover*/
.minigo .counter-features-holder .counter-feature-item .counter-feature-wrapper:hover .counter-feature-icon {
    color: rgba(255,255,255,1);
 
    border-color: rgba(57,65,77,0.15);
 
    background-color: rgba(211,188,132,1);
 
}

/* Counter Features - Labels */
.minigo .counter-features-holder .counter-feature-item .counter-feature-wrapper .counter-features-number {
    color: rgba(57,65,77,0.5);
 
    font-family: Source Sans Pro;
}

/* Counter Features - Numbers */
.minigo .counter-features-holder .counter-feature-item .counter-feature-wrapper .counter-features-number {
    color: rgba(57,65,77,0.5);
 
}

/* Counter Features - Numbers - Hover */
.minigo .counter-features-holder .counter-feature-item .counter-feature-wrapper:hover .counter-features-number {
    color: rgba(211,188,132,1);
 
}

/* Countdown */

/* Countdown - Flip Clock Numbers*/
.minigo .clock ul li a {
    font-family: Open Sans;
    font-weight: 400;
    color: rgba(57,65,77,1);
    background: rgba(0,0,0,0) ;
}

/* Countdown - Flip Clock Label BG*/
.minigo .flip-clock-wrapper ul li a div.up {
    border-top-width: 1px;
    border-left-width: 1px;
    border-right-width: 1px;
    border-bottom-width: 1px;
    border-style: solid;
    border-color: rgba(57,65,77,1);
}

/* Countdown - Flip Clock Label */
.minigo .clock .flip-clock-label {
    font-family: Open Sans ;
    font-weight: 300 ;
    color: rgba(57,65,77,1) ;
}

/* Progress Bar Color */
.minigo .clock-progress::after {
    background: rgba(211,188,132,1);
}

/* Progress Bar Border Color */
.minigo .clock-progress {
    border-top-width: 1px;
    border-left-width: 1px;
    border-right-width: 1px;
    border-bottom-width: 1px;
    border-style: solid;
    border-color: rgba(57,65,77,0.5);
}

/*  Video */

.minigo .video-player {
    border-color: rgba(211,188,132,0.5);
 
    background-color: rgba(255,255,255,0);
 
}

.minigo .video-player:hover {
    border-color: rgba(211,188,132,0.75);
 
    background-color: rgba(57,65,77,0.1);
 
}

/* [Shop] */

/* General */

.minigo .ecwid {
    font-family: Source Sans Pro !important;
    color: #485760 !important;
}

.minigo .ecwid .ecwid-btn {
    font-family: Source Sans Pro !important;
}


/* Color */

.minigo .ecwid .ecwid-note,
.minigo #cart-id .ecwid-minicart-label-text,
.minigo .ecwid .ecwid-productBrowser-cart-hint,
.minigo .ecwid .ecwid-productBrowser-details-rightPanel .ecwid-productBrowser-backgroundedPanel .ecwid-productBrowser-nav-left,
.minigo .ecwid .ecwid-productBrowser-details-rightPanel .ecwid-productBrowser-backgroundedPanel .ecwid-productBrowser-nav-right {
    color: #485760, 0.5 !important;
}

.minigo .ecwid .ecwid-Checkout-BreadCrumbs-link.ecwid-Checkout-BreadCrumbs-link-visited {
    color: rgba(72,87,96, 0.75) !important;
}

.minigo .ecwid-popup .ecwid-popup-headLabel,
.minigo #cart-id .gwt-InlineLabel,
.minigo #cart-id .ecwid-minicart-caption,
.minigo .ecwid .ecwid-OrdersList-OrderBox .ecwid-OrdersList-OrderBox-header,
.minigo .ecwid .ecwid-OrdersList-OrderBox .ecwid-OrdersList-OrderBox-header span,
.minigo .ecwid .ecwid-Checkout-BreadCrumbs-link,
.minigo .ecwid .ecwid-Checkout-BreadCrumbs-link.ecwid-Checkout-BreadCrumbs-link-visited:hover,
.minigo .ecwid .ecwid-productBrowser-head,
.minigo .ecwid .ecwid-productBrowser-price-value,
.minigo .ecwid .ecwid-productBrowser-categoryPath,
.minigo .ecwid .ecwid-results-topPanel div,
.minigo .ecwid .ecwid-btn,
.minigo .ecwid .gwt-InlineLabel,
.minigo .ecwid a,
.minigo .ecwid .ecwid-productBrowser-auth-mini .ecwid-ProductBrowser-auth-anonim::before,
.minigo .ecwid .ecwid-productBrowser-sku,
.minigo .ecwid .ecwid-productBrowser-details-inStockLabel,
.minigo .ecwid .ecwid-productBrowser-price,
.minigo .ecwid .ecwid-fieldLabel,
.minigo .ecwid .ecwid-productBrowser-details-qtyLabel,
.minigo .ecwid .ecwid-Checkout-blockTitle,
.minigo .ecwid .ecwid-Checkout-PasswordBlock-tip,
.minigo .ecwid .ecwid-Invoice-block,
.minigo .ecwid .ecwid-Invoice-Summary-label,
.minigo .ecwid .ecwid-Invoice-Summary-value,
.minigo .ecwid .ecwid-Invoice-optionsList-name,
.minigo .ecwid .ecwid-Invoice-optionsList-value,
.minigo .ecwid .ecwid-Invoice-itemsTable-headerCell,
.minigo .ecwid .ecwid-Invoice-blockTitle,
.minigo .ecwid .ecwid-Invoice-Header-OrderStatus,
.minigo .ecwid .ecwid-Invoice-Header-OrderNumber,
.minigo .ecwid .ecwid-Invoice-Header-OrderNumber span,
.minigo .ecwid .ecwid-Invoice-Header-OrderStatus,
.minigo .ecwid .ecwid-Invoice-Header-OrderStatus-status,
.minigo .ecwid .ecwid-Invoice-Header-timestamp,
.minigo .ecwid .ecwid-Invoice-qtyLabel,
.minigo .ecwid .ecwid-Invoice-footer-orderConfirmation-text,
.minigo .ecwid .ecwid-categories-category,
.minigo .ecwid .ecwid-OrdersList-OrderBox-options-name,
.minigo .ecwid .ecwid-OrdersList-OrderBox-options-value,
.minigo .ecwid .ecwid-OrdersList-OrderBox-itemprice,
.minigo .ecwid .ecwid-OrdersList-OrderBox-itemsubtotal,
.minigo .ecwid .ecwid-OrdersList-OrderBox-status span,
.minigo .ecwid .ecwid-OrdersList-OrderBox-status,
.minigo .ecwid .ecwid-OrdersList-OrderBox-totals-price,
.minigo .ecwid .ecwid-OrdersList-OrderBox-totals-title,
.minigo .ecwid .ecwid-AddressBook-itemDescription,
.minigo .ecwid .ecwid-productBrowser-cart-itemsTable-headerCell,
.minigo .ecwid .ecwid-productBrowser-cart .ecwid-productBrowser-cart-totalLabel,
.minigo .ecwid .ecwid-productBrowser-cart .ecwid-productBrowser-cart-totalAmount,
.minigo .ecwid .ecwid-productBrowser-cart .ecwid-productBrowser-cart-subtotalLabel,
.minigo .ecwid .ecwid-productBrowser-cart .ecwid-productBrowser-cart-subtotalAmount,
.minigo .ecwid .ecwid-productBrowser-cart .ecwid-productBrowser-cart-optionsList-name,
.minigo .ecwid .ecwid-productBrowser-cart .ecwid-productBrowser-cart-optionsList-value,
.minigo .ecwid .ecwid-productBrowser-details-qtyTextField,
.minigo .ecwid .ecwid-productBrowser-cart-qtyTextField,
.minigo .ecwid .gwt-TextBox,
.minigo .ecwid .gwt-PasswordTextBox,
.minigo .ecwid .ecwid-results-topPanel div .ecwid-results-topPanel-sortByPanel .gwt-ListBox,
.minigo .ecwid .ecwid-AddressBook-block .ecwid-AddressBook-addButton,
.minigo .ecwid .ecwid-AddressBook-block,
.minigo .ecwid .ecwid-DateRangeBox .ecwid-DateRangeBox-range,
.minigo .ecwid .gwt-RadioButton,
.minigo .ecwid .ecwid-productBrowser-details-inTheBag,
.minigo .ecwid-OrdersList-OrderBox-sku,
.minigo .ecwid-OrdersList-OrderBox-cell,
.minigo .ecwid-productBrowser-cart-hint,
.minigo .ecwid-note,
.minigo .ecwid-productBrowser-productsTable-addToBagLink,
.minigo .ecwid-productBrowser-productsList-descr {
    color: #485760 !important;
}

/* Background */

.minigo #cart-id:hover,
.minigo #cart-id:active {
    background: rgba(255,255,255, 0.9) !important;
}

.minigo .ecwid .ecwid-results-topPanel div .ecwid-results-topPanel-sortByPanel .gwt-ListBox {
    background: #ffffff !important;
}
.minigo .ecwid .gwt-TextBox:hover,
.minigo .ecwid .gwt-PasswordTextBox:hover,
.minigo .ecwid .ecwid-productBrowser-cart-itemsTable-cell-selected,
.minigo .ecwid .ecwid-Invoice-cell-title,
.minigo .ecwid .ecwid-AddressBook-block {
    background: rgba(255,255,255, 0.1) !important;
}

.minigo .ecwid .gwt-TextBox:active,
.minigo .ecwid .gwt-PasswordTextBox:active,
.minigo .ecwid .ecwid-btn:hover {
    background: rgba(255,255,255, 0.15) !important;
}

.minigo .ecwid .ecwid-img::after {
    background: rgba(255,255,255, 0.25) !important;
}

.minigo #cart-id {
    background: rgba(255,255,255, 0.75) !important;
}

.minigo .ecwid-popup .popupContent {
    background: rgba(255,255,255, 0.9) !important;
}

.minigo .ecwid .ecwid-AddressBook-block .ecwid-AddressBook-addButton {
    background: rgba(72,87,96, 0.1) !important;
}


/* Background-Color */

.minigo .ecwid .ecwid-productBrowser-cart .ecwid-productBrowser-cart-removeItemButton,
.minigo .ecwid .ecwid-DateRangeBox .ecwid-DateRangeBox-icon, {
    background-color: #ffffff !important;
}

.minigo .ecwid-DateRangePopup,
.minigo .ecwid .ecwid-DateRangeBox .ecwid-DateRangeBox-range {
    background-color: rgba(255,255,255, 0.75) !important;
}


.minigo .ecwid .ecwid-Checkout-BreadCrumbs-section.ecwid-Checkout-BreadCrumbs-section-visited,
.minigo .ecwid-popup .ecwid-popup-closeButton {
    background-color: #485760 !important;
}

.minigo .ecwid-popup.ecwid-EditPersonPopup,
.minigo .ecwid-productBrowser-auth::before {
    background-color: rgba(72,87,96, 0.15) !important;
}

.minigo .ecwid .ecwid-Checkout-BreadCrumbs-section,
.minigo .ecwid a::before,
.minigo .ecwid .ecwid-results-topPanel div .ecwid-results-topPanel-viewAsPanel-link::before {
    background-color: rgba(72,87,96, 0.25) !important;
}

.minigo .ecwid .ecwid-Checkout-BreadCrumbs-point::after {
    background-color: rgba(72,87,96, 0.5) !important;
}

.minigo .ecwid .ecwid-Checkout-BreadCrumbs-point.ecwid-Checkout-BreadCrumbs-point-visited::after,
.minigo .ecwid a:hover::before,
.minigo .ecwid .ecwid-results-topPanel div .ecwid-results-topPanel-viewAsPanel-link:hover::before {
    background-color: rgba(72,87,96, 0.75) !important;
}

/* Border Color */

.minigo .ecwid .ecwid-Checkout-BreadCrumbs-point.ecwid-Checkout-BreadCrumbs-point-visited,
.minigo .ecwid .gwt-TextBox:active,
.minigo .ecwid .gwt-PasswordTextBox:active,
.minigo .ecwid .ecwid-AddressBook-block .ecwid-AddressBook-addButton:hover,
.minigo .ecwid button.ecwid-btn:hover,
.minigo .ecwid .ecwid-AddressBook-block .ecwid-AddressBook-addButton:hover {
    border-color: #485760 !important;
}

.minigo .ecwid .ecwid-productBrowser-cart-itemsTable-cell,
.minigo .ecwid .ecwid-img::after,
.minigo .ecwid .ecwid-img::after,
.minigo .ecwid-popup .popupContent  {
    border-color: rgba(72,87,96, 0.1) !important;
}

.minigo .ecwid .ecwid-Invoice-cell-title,
.minigo .ecwid-productBrowser-productsTable-cell {
    border-color: rgba(72,87,96, 0.15) !important;
}
.minigo .ecwid .ecwid-productBrowser-details-qtyTextField,
.minigo .ecwid .ecwid-productBrowser-cart-qtyTextField,
.minigo .ecwid .ecwid-productBrowser-cart .ecwid-productBrowser-cart-itemsTable-headerCell,
.minigo .ecwid .ecwid-Checkout-BreadCrumbs-link.ecwid-Checkout-BreadCrumbs-link-current,
.minigo .ecwid .ecwid-Invoice,
.minigo .ecwid .ecwid-OrdersList-OrderBox-cell,
.minigo .ecwid .ecwid-DateRangeBox,
.minigo .ecwid .ecwid-productBrowser-cart-itemsTable-cell-selected,
.minigo .ecwid .ecwid-AddressBook-block {
    border-color: rgba(72,87,96, 0.25) !important;
}

.minigo .ecwid .gwt-TextBox,
.minigo .ecwid .gwt-PasswordTextBox,
.minigo .ecwid .ecwid-AddressBook-block .ecwid-AddressBook-addButton,
.minigo .ecwid .ecwid-Checkout-BreadCrumbs-point,
.minigo .ecwid .ecwid-productBrowser-productsGrid-hover .ecwid-img::after,
.minigo .ecwid .ecwid-AddressBook-block .ecwid-AddressBook-addButton,
.minigo #cart-id,
.minigo .ecwid .ecwid-btn,
.minigo .ecwid .ecwid-btn.ecwid-btn--secondary
 {
    border-color: rgba(72,87,96, 0.5) !important;
}

.minigo .ecwid .gwt-TextBox:hover,
.minigo .ecwid .gwt-PasswordTextBox:hover {
    border-color: rgba(72,87,96, 0.75) !important;
}

.minigo #cart-id .ecwid-minicart-label-text {
    color: rgba(72,87,96, 0.75) !important;
}

.minigo #cart-id {
    border-color: rgba(72,87,96, 0.15) !important; 
}

.minigo #cart-id:hover,
.minigo #cart-id:active {
        background-color: rgba(255,255,255, 0.9) !important;
        border-color: rgba(72,87,96, 0.15) !important;
}

.minigo .ecwid .gwt-RadioButton {
    color: #485760 !important;
}

/* Buttons Hover */
.minigo .ecwid button.ecwid-btn:hover {
    border-color: #485760 !important;
}

.minigo .ecwid .ecwid-img img {
        border-color: rgba(255,255,255, 0.5) !important;
}



/**
 * VARIOUS STYLING
 */


.minigo .chart::after,
.minigo .chart::before {
    border: 1px solid rgba(0,0,0,0.5);
}

.minigo .loader {
    background: rgba(255,255,255,1);
}

.minigo .bubblingG span {
    background: rgba(211,188,132,0.5);
}

/* Icon Menu Colors */

