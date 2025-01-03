<style>
 .Step-wrap {
                max-width: 100%;
                margin: 0 auto;
                float: left;
                width: 100%;
                margin: 0;
                background: #252525;
                position: relative;
                background: var(--wpr-bg-f3f83a70-a947-48e0-9596-463688dca9d7);
                background-size: 100%!important;
                background-repeat: no-repeat;
                background-position: center center!important
            }

            .Step-wrap:after {
                content: "";
                left: 0;
                right: 0;
                top: 0;
                bottom: 0;
                position: relative;
                background: #00000070
            }

            .Step-wrap .container {
                z-index: 9
            }

            .Step-wrap .Step-wrap-inner {
                float: left;
                width: 100%;
                color: #fff;
                padding: 40px 0
            }

            .Step-wrap .Steps {
                display: none;
                text-align: center
            }

            .Step-wrap .Steps h2 {
                text-align: center;
                font-family: mesmerize-rg;
                font-weight: 600;
                color: #fff;
                font-size: 30px;
                margin: 0 0 20px;
                float: left;
                width: 100%
            }

            .Step-wrap .Steps ul {
                display: block;
                padding: 0;
                margin: 0;
                float: left;
                width: 100%
            }

            .Step-wrap .Steps ul li {
                list-style: none
            }

            .Step-wrap .Steps ul li label {
                float: left;
                width: 100%;
                margin: 0
            }

            .Step-wrap .Steps ul li label input {
                display: none
            }

            .Step-wrap .Steps ul li label input+a,.Step-wrap .Steps ul li label input+span {
                float: left;
                width: 100%;
                border: 1px solid #666;
                background: 0 0;
                font-family: mesmerize-sb;
                color: #fff;
                font-size: 12px;
                text-transform: normal;
                padding: 10px 30px;
                cursor: pointer
            }

            .Step-wrap .Steps ul li label input:checked+a,.Step-wrap .Steps ul li label input:checked+span {
                background: #04d1c2;
                color: #000;
                border-color: #04d1c2
            }

            .Step-wrap .Steps ul li label.type-option input:checked+span {
                background: 0 0!important;
                border-color: #04d1c2!important
            }

            .Step-wrap .Steps ul li label.type-option span {
                width: 100%;
                height: 171px;
                padding: 0;
                position: relative
            }

            .Step-wrap .Steps ul li label.type-option span img {
                margin: auto;
                display: block;
                position: absolute;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                height: 80px!important;
                width: auto!important;
                max-height: inherit!important
            }

            .Step-wrap .Steps ul li label p {
                font-family: mesmerize-el;
                font-size: 12px;
                clear: both;
                width: 100%;
                margin-top: 10px;
                float: left
            }

            .Step-wrap .Steps ul li label span b {
                text-transform: none;
                color: #fff;
                font-family: mesmerize-sb;
                float: left;
                width: 100%;
                text-align: center;
                margin: 10px 0 0
            }

            .Step-wrap .Steps ul li label span p {
                text-transform: none;
                color: #fff;
                font-family: mesmerize-sb;
                float: left;
                width: 100%;
                text-align: center;
                margin: 10px 0 0;
                position: absolute;
                bottom: 10px;
                margin: 0;
                left: 0;
                right: 0
            }

            .Step-wrap .Steps button {
                background: #c8ad61;
                font-family: mesmerize-sb;
                color: #fff;
                font-size: 12px;
                text-transform: uppercase;
                padding: 10px 30px;
                outline: 0;
                border: 0;
                margin: 30px 8px 0;
                display: inline-block
            }

            .book-now {
                opacity: 1;
                cursor: pointer;
                pointer-events: all;
                background: #04d1c2;
                font-family: mesmerize-sb;
                color: #000;
                font-size: 12px;
                text-transform: uppercase;
                padding: 0 30px;
                height: 44px;
                clear: both;
                display: table;
                margin: auto;
                line-height: 44px;
                transition-duration: .4s
            }

            .book-now:hover {
                background: #c9ae62!important;
                transition-duration: .4s
            }

            .Step-wrap .Steps.active {
                display: block
            }

            .Step-wrap button {
                display: block;
                margin-top: 20px
            }

            .Step-wrap .summary {
                margin-top: 10px;
                clear: both;
                float: left;
                width: 100%
            }

            .Step-wrap .summary p {
                margin: 0;
                clear: both
            }

            .InvMent {
                margin-bottom: 30px
            }

            .InvMent .InvMentInner .nav-tabs button {
                float: left;
                width: 100%;
                clear: both;
                border-radius: 0;
                margin: 0;
                border: 0;
                outline: 0
            }

            .InvMent .InvMentInner .tab-content .tab-pane .InvMCWrap {
                position: relative;
                background: 0 0;
                border: 0;
                padding: 0
            }

            .InvMent .InvMentInner .tab-content .tab-pane .InvMCWrap label {
                position: absolute;
                right: 10px;
                top: 10px;
                cursor: pointer
            }

            .InvMent .InvMentInner .tab-content .tab-pane .InvMCWrap label input {
                display: none
            }

            .InvMent .InvMentInner .tab-content .tab-pane .InvMCWrap label input+span {
                width: 30px;
                height: 30px;
                border-radius: 3px;
                border: 1px solid #c8ad61;
                position: relative;
                float: left;
                cursor: pointer
            }

            .InvMent .InvMentInner .tab-content .tab-pane .InvMCWrap label input+span:before {
                font-family: FontAwesome;
                content: '\f00c';
                color: #c8ad61;
                position: absolute;
                left: 0;
                right: 0;
                top: 0;
                bottom: 0;
                margin: auto;
                text-align: center;
                line-height: 30px;
                opacity: 0
            }

            .InvMent .InvMentInner .tab-content .tab-pane .InvMCWrap label input:checked+span {
                background: #c8ad61
            }

            .InvMent .InvMentInner .tab-content .tab-pane .InvMCWrap label input:checked+span:before {
                opacity: 1;
                color: #fff
            }

            .Step-wrap .InvMent .InvMentInner {
                display: none
            }

            .Step-wrap .InvMent .InvMentInner.active {
                display: block
            }

            .Step-wrap .Steps ul.select-type li.hiddenClass {
                display: none
            }

            .Step-wrap .Steps ul.select-type li.showClass {
                display: inline-block
            }

            .Step-wrap .Step-wrap-left {
                position: absolute;
                left: 0;
                top: 0;
                bottom: 0;
                width: 50%
            }

            .Step-wrap .Step-wrap-left .secure-img {
                position: absolute;
                bottom: 10%;
                left: 0;
                right: 0
            }

            .Step-wrap .Step-wrap-left .secure-img img {
                width: 40%;
                height: auto;
                margin: auto;
                display: block
            }

            .Step-wrap .Step-wrap-right {
                float: right;
                width: 50%
            }

            .showtab {
                display: block
            }

            .InvMent .InvMentInner {
                padding: 0
            }

            .Steps-top {
                float: left;
                width: 100%
            }

            .Steps-top .Steps-top-left {
                float: left;
                width: 100%
            }

            .Steps-top .Steps-top-right {
                float: right;
                width: 100%
            }
</style>


<div class="Step-wrap">
<div class="Step-wrap-right">
			<div class="Step-wrap-inner">
			
				<div class="Steps step-1 active">
					<div class="Steps-top">
						<div class="Steps-top-left" id="select-size">
							<h2>Select Plot Size</h2>
							<ul class="select-size">
								<li class=""><label><input type="radio" value="small" name="size" checked="checked"> <span>125 Sq.Yds</span></label></li>
								<li class=""><label><input type="radio" value="medium" name="size"> <span>250 Sq.Yds</span></label></li>
								<li class=""><label><input type="radio" value="large" name="size"> <span>500 Sq.Yds</span></label></li>
								<li class=""><label><input type="radio" value="big" name="size"> <span>1000 Sq.Yds</span></label></li>
							</ul>
						</div>
						<div class="Steps-top-right" id="select-type">
							<h2>Select Plot Type</h2>
							<ul class="select-type">
								
								<li class="big hiddenClass">
									<label class="type-option">
										<input type="radio" value="commercial" name="type">
										<span>
											<b>Commercial</b>
											<img width="1023" height="2280" decoding="async" alt="" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201023%202280'%3E%3C/svg%3E" data-lazy-src="https://broadwaycity.co.uk/wp-content/themes/Gwadar/img/1000-C.svg"><noscript><img width="1023" height="2280" decoding="async" alt="" src="https://broadwaycity.co.uk/wp-content/themes/Gwadar/img/1000-C.svg" /></noscript>
											<p>Permitted Height 250ft</p>
										</span>
									</label>
								</li>
								<li class="big hiddenClass">
									<label class="type-option">
										<input type="radio" value="semi-commercial" name="type">
										<span>
											<b>Semi Commercial</b>
											<img width="1023" height="2280" decoding="async" alt="" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201023%202280'%3E%3C/svg%3E" data-lazy-src="https://broadwaycity.co.uk/wp-content/themes/Gwadar/img/1000-C.svg"><noscript><img width="1023" height="2280" decoding="async" alt="" src="https://broadwaycity.co.uk/wp-content/themes/Gwadar/img/1000-C.svg" /></noscript>
											<p>Permitted Height 250ft</p>
										</span>
									</label>
								</li>
								
								
								<li class="large hiddenClass">
									<label class="type-option">
										<input type="radio" value="500-R1" name="type">
										<span>
											<b>Residential</b>
											<img width="2189" height="997" decoding="async" alt="" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%202189%20997'%3E%3C/svg%3E" data-lazy-src="https://broadwaycity.co.uk/wp-content/themes/Gwadar/img/500-R1.svg"><noscript><img width="2189" height="997" decoding="async" alt="" src="https://broadwaycity.co.uk/wp-content/themes/Gwadar/img/500-R1.svg" /></noscript>
											<p>Ground + 1st floor</p>
										</span>
									</label>
								</li>
								<li class="large hiddenClass">
									<label class="type-option">
										<input type="radio" value="500-R2" name="type">
										<span>
											<b>Residential</b>
											<img width="962" height="955" decoding="async" alt="" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20962%20955'%3E%3C/svg%3E" data-lazy-src="https://broadwaycity.co.uk/wp-content/themes/Gwadar/img/500-R2.svg"><noscript><img width="962" height="955" decoding="async" alt="" src="https://broadwaycity.co.uk/wp-content/themes/Gwadar/img/500-R2.svg" /></noscript>
											<p>Permitted Height 79ft</p>
										</span>
									</label>
								</li>
								
								<li class="medium hiddenClass">
									<label class="type-option">
										<input type="radio" value="250-R1" name="type">
										<span>
											<b>Residential</b>
											<img width="1429" height="964" decoding="async" alt="" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201429%20964'%3E%3C/svg%3E" data-lazy-src="https://broadwaycity.co.uk/wp-content/themes/Gwadar/img/250-R1.svg"><noscript><img width="1429" height="964" decoding="async" alt="" src="https://broadwaycity.co.uk/wp-content/themes/Gwadar/img/250-R1.svg" /></noscript>
											<p>Ground + 1st floor</p>
										</span>
									</label>
								</li>
								<li class="medium hiddenClass">
									<label class="type-option">
										<input type="radio" value="250-R2" name="type">
										<span>
											<b>Residential</b>
											<img width="786" height="955" decoding="async" alt="" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20786%20955'%3E%3C/svg%3E" data-lazy-src="https://broadwaycity.co.uk/wp-content/themes/Gwadar/img/250-R2.svg"><noscript><img width="786" height="955" decoding="async" alt="" src="https://broadwaycity.co.uk/wp-content/themes/Gwadar/img/250-R2.svg" /></noscript>
											<p>Permitted Height 79ft</p>
										</span>
									</label>
								</li>
								
								<li class="small showClass">
									<label class="type-option">
										<input type="radio" value="125-R1" checked="" name="type">
										<span>
											<b>Residential</b>
											<img width="1215" height="995" decoding="async" alt="" src="https://broadwaycity.co.uk/wp-content/themes/Gwadar/img/125-R1.svg" data-lazy-src="https://broadwaycity.co.uk/wp-content/themes/Gwadar/img/125-R1.svg" data-ll-status="loaded" class="entered lazyloaded"><noscript><img width="1215" height="995" decoding="async" alt="" src="https://broadwaycity.co.uk/wp-content/themes/Gwadar/img/125-R1.svg" /></noscript>
											<p>Ground + 1st floor</p>
										</span>
									</label>
								</li>
								<li class="small showClass">
									<label class="type-option">
										<input type="radio" value="125-R2" name="type">
										<span>
											<b>Residential</b>
											<img width="667" height="955" decoding="async" alt="" src="https://broadwaycity.co.uk/wp-content/themes/Gwadar/img/125-R2.svg" data-lazy-src="https://broadwaycity.co.uk/wp-content/themes/Gwadar/img/125-R2.svg" data-ll-status="loaded" class="entered lazyloaded"><noscript><img width="667" height="955" decoding="async" alt="" src="https://broadwaycity.co.uk/wp-content/themes/Gwadar/img/125-R2.svg" /></noscript>
											<p>Permitted Height 79ft</p>
										</span>
									</label>
								</li>
							</ul>
						</div>
					</div>

					<h2 id="sel-payment">Select Payment Plan</h2>
					
					<div class="InvMent">
					
							<div class="InvMentInner 125-R1 active showtab" style="">
								
								<ul class="nav nav-tabs" id="125-R1" role="tablist">
									<li class="nav-item" role="presentation">
										<button class="nav-link active" id="INVESTOR-R1-125-tab" data-bs-toggle="tab" data-bs-target="#INVESTOR-R1-125" type="button" role="tab" aria-controls="INVESTOR-R1-125" aria-selected="true">Cash Buyer</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link" id="FIXED-R1-125-tab" data-bs-toggle="tab" data-bs-target="#FIXED-R1-125" type="button" role="tab" aria-controls="FIXED-R1-125" aria-selected="false" tabindex="-1">12 Months</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link" id="FLEXIBLE-R1-125-tab" data-bs-toggle="tab" data-bs-target="#FLEXIBLE-R1-125" type="button" role="tab" aria-controls="FLEXIBLE-R1-125" aria-selected="false" tabindex="-1">24 Months</button>
									</li>
								</ul>

								<div class="tab-content" id="125-R1Content">
									<div class="tab-pane  show active" id="INVESTOR-R1-125" role="tabpanel" aria-labelledby="INVESTOR-R1-125-tab">
										<div class="InvMCWrap re-InvMCWrap">
											<div class="table-data">
												<table>
													<tbody><tr class="border-b padb-5 padt-5">
														<th colspan="2">Plot Price:</th>
														<td class="r-align">£12,750</td>
													</tr>
													<tr class="">
														<th colspan="3" class="padt-5">Cost Breakdown</th>
													</tr>
													<tr class="">
														<td class="w-40">125sq. yards</td>
														<td align="center"></td>
														<td class="r-align">£9,500</td>
													</tr>
													<tr class="">
														<td class="w-40">Extras</td>
														<td align="center">-</td>
														<td class="r-align">£0</td>
													</tr>
													<tr class="">
														<td class="w-40">Discount</td>
														<td align="center">10%</td>
														<td class="r-align">-£950</td>
													</tr>
													<tr class="">
														<td class="w-40">Development Fee</td>
														<td align="center"></td>
														<td class="r-align">£3,250</td>
													</tr>
													<tr class="border-b padb-5">
														<th class="w-40">Total Plot Cost</th>
														<th align="center"></th>
														<th class="r-align">£11,800</th>
													</tr>
													<tr class="">
														<th colspan="3" class="padt-5">Payment Plan - Cash Buyer</th>
													</tr>
													<tr class="">
														<td class="w-40">Payment In Full</td>
														<td align="center">1</td>
														<td class="r-align">£11,800</td>
													</tr>
													<tr class="border-b padb-5">
														<td align="center" colspan="2" class="">&nbsp;</td>
														<td class="r-align">&nbsp;</td>
													</tr>
													<tr class="">
														<th colspan="3" class="padt-5">Cashback and Net Investment</th>
													</tr>
													<tr class="">
														<td class="w-40">Cashback Value</td>
														<td align="center">50%</td>
														<td class="r-align">£4,275</td>
													</tr>
													<tr class="border-b padb-5">
														<td colspan="2" class="">Net Investment</td>
														<td class="r-align">£7,525</td>
													</tr>
													<tr class="">
														<th colspan="3" class="padt-5">Expected Plot Value 2027</th>
													</tr>
													<tr class="border-b padb-5">
														<td class="w-40">Value Increase</td>
														<th align="center">200%</th>
														<td class="r-align">£25,500</td>
													</tr>
													<tr class="">
														<th colspan="3" class="padt-5">Return on Investment</th>
													</tr>
													<tr class="">
														<td class="w-40">ROI Day 1</td>
														<td align="center">8%</td>
														<td class="r-align">£950</td>
													</tr>
													<tr class="">
														<td class="w-40">ROI 2027</td>
														<td align="center">239%</td>
														<td class="r-align">£17,975</td>
													</tr>
													<tr class="padb-5">
														<td class="w-40">Exp. Inv. Value 2027</td>
														<th align="center">3.39X</th>
														<th class="r-align">£25,500</th>
													</tr>
												</tbody></table>
											</div>
										</div>
									</div>
									<div class="tab-pane " id="FIXED-R1-125" role="tabpanel" aria-labelledby="FIXED-R1-125-tab">
										<div class="InvMCWrap re-InvMCWrap">
											<div class="table-data">
												<table>
													<tbody><tr class="border-b padb-5 padt-5">
														<th colspan="2">Plot Price:</th>
														<td class="r-align">£12,750</td>
													</tr>
													<tr>
														<th colspan="3" class="padt-5">Cost Breakdown</th>
													</tr>
													<tr>
														<td class="w-40">125sq. yards</td>
														<td align="center"></td>
														<td class="r-align">£9,500</td>
													</tr>
													<tr>
														<td class="w-40">Extras</td>
														<td align="center">-</td>
														<td class="r-align">£0</td>
													</tr>
													<tr>
														<td class="w-40">Discount</td>
														<td align="center">-</td>
														<td class="r-align">£0</td>
													</tr>
													<tr>
														<td class="w-40">Development Fee</td>
														<td align="center"></td>
														<td class="r-align">£3,250</td>
													</tr>
													<tr class="border-b padb-5">
														<th class="w-40">Total Plot Cost</th>
														<th align="center"></th>
														<th class="r-align">£12,750</th>
													</tr>
													<tr>
														<th colspan="3" class="padt-5">Payment Plan - 12 Months</th>
													</tr>
													<tr>
														<td class="w-40">Monthly Payments</td>
														<td align="center">12</td>
														<td class="r-align">£1,063</td>
													</tr>
													<tr class="border-b padb-5">
														<td colspan="2" class="">&nbsp;</td>
														<td class="r-align">&nbsp;</td>
													</tr>
													<tr>
														<th colspan="3" class="padt-5">Cashback and Net Investment</th>
													</tr>
													<tr>
														<td class="w-40">Cashback Value</td>
														<td align="center">40%</td>
														<td class="r-align">£3,800</td>
													</tr>
													<tr class="border-b padb-5">
														<td colspan="2" class="">Net Investment</td>
														<td class="r-align">£8,950</td>
													</tr>
													<tr>
														<th colspan="3" class="padt-5">Expected Plot Value 2027</th>
													</tr>
													<tr class="border-b padb-5">
														<td class="w-40">Value Increase</td>
														<th align="center">200%</th>
														<td class="r-align">£25,500</td>
													</tr>
													<tr>
														<th colspan="3" class="padt-5">Return on Investment</th>
													</tr>
													<tr>
														<td class="w-40">&nbsp;</td>
														<td align="center">&nbsp;</td>
														<td class="r-align">&nbsp;</td>
													</tr>
													<tr>
														<td class="w-40">ROI 2027</td>
														<td align="center">185%</td>
														<td class="r-align">£16,550</td>
													</tr>
													<tr class="padb-5">
														<td class="w-40">Exp. Inv. Value 2027</td>
														<th align="center">2.85X</th>
														<th class="r-align">£25,500</th>
													</tr>
												</tbody></table>
											</div>
										</div>
									</div>
									<div class="tab-pane " id="FLEXIBLE-R1-125" role="tabpanel" aria-labelledby="FLEXIBLE-R1-125-tab">
										<div class="InvMCWrap re-InvMCWrap">
											<div class="table-data">
												<table>
													<tbody><tr class="border-b padb-5 padt-5">
														<th colspan="2">Plot Price:</th>
														<td class="r-align">£12,750</td>
													</tr>
													<tr>
														<th colspan="3" class="padt-5">Cost Breakdown</th>
													</tr>
													<tr>
														<td class="w-40">125sq. yards</td>
														<td align="center"></td>
														<td class="r-align">£9,500</td>
													</tr>
													<tr>
														<td class="w-40">Extras</td>
														<td align="center">-</td>
														<td class="r-align">£0</td>
													</tr>
													<tr>
														<td class="w-40">Discount</td>
														<td align="center">-</td>
														<td class="r-align">£0</td>
													</tr>
													<tr>
														<td class="w-40">Development Fee</td>
														<td align="center"></td>
														<td class="r-align">£3,250</td>
													</tr>
													<tr class="border-b padb-5">
														<th class="w-40">Total Plot Cost</th>
														<th align="center"></th>
														<th class="r-align">£12,750</th>
													</tr>
													<tr>
														<th colspan="3" class="padt-5">Payment Plan – 24 Months</th>
													</tr>
													<tr>
														<td class="w-40">Development Fee</td>
														<td align="center">1</td>
														<td class="r-align">£3,250</td>
													</tr>
													<tr class="border-b padb-5">
														<td class="w-40">Monthly Payments</td>
														<td align="center">23</td>
														<td class="r-align">£413</td>
													</tr>
													<tr>
														<th colspan="3" class="padt-5">Cashback and Net Investment</th>
													</tr>
													<tr>
														<td class="w-40">Cashback Value</td>
														<td align="center">30%</td>
														<td class="r-align">£2,850</td>
													</tr>
													<tr class="border-b padb-5">
														<td colspan="2" class="">Net Investment</td>
														<td class="r-align">£9,900</td>
													</tr>
													<tr>
														<th colspan="3" class="padt-5">Expected Plot Value 2027</th>
													</tr>
													<tr class="border-b padb-5">
														<td class="w-40">Value Increase</td>
														<th align="center">200%</th>
														<td class="r-align">£25,500</td>
													</tr>
													<tr>
														<th colspan="3" class="padt-5">Return on Investment</th>
													</tr>
													<tr>
														<td class="w-40">&nbsp;</td>
														<td align="center">&nbsp;</td>
														<td class="r-align">&nbsp;</td>
													</tr>
													<tr>
														<td class="w-40">ROI 2027</td>
														<td align="center">158%</td>
														<td class="r-align">£15,600</td>
													</tr>
													<tr class="padb-5">
														<td class="w-40">Exp. Inv. Value 2027</td>
														<th align="center">2.58X</th>
														<th class="r-align">£25,500</th>
													</tr>
												</tbody></table>
											</div>
										</div>
									</div>
								</div>						
							</div>
							
							<div class="InvMentInner 250-R1" style="display: none;">
								<ul class="nav nav-tabs" id="250-R1" role="tablist">
									<li class="nav-item" role="presentation">
										<button class="nav-link active" id="INVESTOR-R1-250-tab" data-bs-toggle="tab" data-bs-target="#INVESTOR-R1-250" type="button" role="tab" aria-controls="INVESTOR-R1-250" aria-selected="true">Cash Buyer</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link" id="FIXED-R1-250-tab" data-bs-toggle="tab" data-bs-target="#FIXED-R1-250" type="button" role="tab" aria-controls="FIXED-R1-250" aria-selected="false" tabindex="-1">12 Months</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link" id="FLEXIBLE-R1-250-tab" data-bs-toggle="tab" data-bs-target="#FLEXIBLE-R1-250" type="button" role="tab" aria-controls="FLEXIBLE-R1-250" aria-selected="false" tabindex="-1">24 Months</button>
									</li>
								</ul>
								
								<div class="tab-content" id="250-R1Content">
									<div class="tab-pane  show active" id="INVESTOR-R1-250" role="tabpanel" aria-labelledby="INVESTOR-R1-250-tab">
										<div class="InvMCWrap re-InvMCWrap">
											<div class="table-data">
												<table>
													<tbody><tr class="border-b padb-5 padt-5">
														<th colspan="2">Plot Price:</th>
														<td class="r-align">£23,750</td>
													</tr>
													<tr>
														<th class="padt-5" colspan="3">Cost Breakdown</th>
													</tr>
													<tr>
														<td class="w-40">250 sq. yards</td>
														<td align="center"></td>
														<td class="r-align">£17,250</td>
													</tr>
													<tr>
														<td class="w-40">Extras</td>
														<td align="center">-</td>
														<td class="r-align">£0</td>
													</tr>
													<tr>
														<td class="w-40">Discount</td>
														<td align="center">10%</td>
														<td class="r-align">-£1,725</td>
													</tr>
													<tr>
														<td class="w-40">Development Fee</td>
														<td align="center"></td>
														<td class="r-align">£6,500</td>
													</tr>
													<tr class="border-b padb-5">
														<th class="w-40">Total Plot Cost</th>
														<th align="center"></th>
														<th class="r-align">£22,025</th>
													</tr>
													<tr>
														<th class="padt-5" colspan="3">Cost Breakdown</th>
													</tr>
													<tr>
														<td class="w-40">Payment In Full</td>
														<td align="center">1</td>
														<td class="r-align">£22,025</td>
													</tr>
													<tr class="border-b padb-5">
														<td colspan="2" class=""></td>
														<td class="r-align">&nbsp;</td>
													</tr>
													<tr>
														<th class="padt-5" colspan="3">Cashback and Net Investment</th>
													</tr>
													<tr>
														<td class="w-40">Cashback Value</td>
														<td align="center">50%</td>
														<td class="r-align">£7,763</td>
													</tr>
													<tr class="border-b padb-5">
														<td colspan="2" class="">Net Investment</td>
														<td class="r-align">£14,263</td>
													</tr>
													<tr>
														<th class="padt-5" colspan="3">Expected Plot Value 2027</th>
													</tr>
													<tr class="border-b padb-5">
														<td class="w-40">Value Increase</td>
														<th align="center">200%</th>
														<td class="r-align">£47,500</td>
													</tr>
													<tr>
														<th class="padt-5" colspan="3">Return on Investment</th>
													</tr>
													<tr>
														<td class="w-40">ROI Day 1</td>
														<td align="center">8%</td>
														<td class="r-align">£1,725</td>
													</tr>
													<tr>
														<td class="w-40">ROI 2027</td>
														<td align="center">233%</td>
														<td class="r-align">£33,238</td>
													</tr>
													<tr class="padb-5">
														<td class="w-40">Exp. Inv. Value 2027</td>
														<th align="center">3.33X</th>
														<th class="r-align">£47,500</th>
													</tr>
												</tbody></table>
											</div>
										</div>
									</div>
									<div class="tab-pane " id="FIXED-R1-250" role="tabpanel" aria-labelledby="FIXED-R1-250-tab">
										<div class="InvMCWrap re-InvMCWrap">
											<div class="table-data">
												<table>
													<tbody><tr class="border-b padb-5 padt-5">
														<th colspan="2">Plot Price:</th>
														<td class="r-align">£23,750</td>
													</tr>
													<tr>
														<th class="padt-5" colspan="3">Cost Breakdown</th>
													</tr>
													<tr>
														<td class="w-40">250sq. yards</td>
														<td align="center"></td>
														<td class="r-align">£17,250</td>
													</tr>
													<tr>
														<td class="w-40">Extras</td>
														<td align="center">-</td>
														<td class="r-align">£0</td>
													</tr>
													<tr>
														<td class="w-40">Discount</td>
														<td align="center">0%</td>
														<td class="r-align">£</td>
													</tr>
													<tr>
														<td class="w-40">Development Fee</td>
														<td align="center"></td>
														<td class="r-align">£6,500</td>
													</tr>
													<tr class="border-b padb-5">
														<th class="w-40">Total Plot Cost</th>
														<th align="center"></th>
														<th class="r-align">£23,750</th>
													</tr>
													<tr>
														<th colspan="3" class="padt-5">Payment Plan - 12 Months</th>
													</tr>
													<tr>
														<td class="w-40">Monthly Payments</td>
														<td align="center">12</td>
														<td class="r-align">£1,979</td>
													</tr>
													<tr class="border-b padb-5">
														<td class="w-40">&nbsp;</td>
														<td align="center">&nbsp;</td>
														<td class="r-align">&nbsp;</td>
													</tr>
													<tr>
														<th class="padt-5" colspan="3">Cashback and Net Investment</th>
													</tr>
													<tr>
														<td class="w-40">Cashback Value</td>
														<td align="center">40%</td>
														<td class="r-align">£6,900</td>
													</tr>
													<tr class="border-b padb-5">
														<td colspan="2" class="">Net Investment</td>
														<td class="r-align">£16,850</td>
													</tr>
													<tr>
														<th class="padt-5" colspan="3">Expected Plot Value 2027</th>
													</tr>
													<tr class="border-b padb-5">
														<td class="w-40">Value Increase</td>
														<th align="center">200%</th>
														<td class="r-align">£47,500</td>
													</tr>
													<tr>
														<th class="padt-5" colspan="3">Return on Investment</th>
													</tr>
													<tr>
														<td class="w-40">&nbsp;</td>
														<td align="center">&nbsp;</td>
														<td class="r-align">&nbsp;</td>
													</tr>
													<tr>
														<td class="w-40">ROI 2027</td>
														<td align="center">182%</td>
														<td class="r-align">£30,650</td>
													</tr>
													<tr class="padb-5">
														<td class="w-40">Exp. Inv. Value 2027</td>
														<th align="center">2.82X</th>
														<th class="r-align">£47,500</th>
													</tr>
												</tbody></table>
											</div>
										</div>
									</div>
									<div class="tab-pane " id="FLEXIBLE-R1-250" role="tabpanel" aria-labelledby="FLEXIBLE-R1-250-tab">
										<div class="InvMCWrap re-InvMCWrap">
											<div class="table-data">
												<table>
													<tbody><tr class="border-b padb-5 padt-5">
														<th colspan="2">Plot Price:</th>
														<td class="r-align">£23,750</td>
													</tr>
													<tr>
														<th class="padt-5" colspan="3">Cost Breakdown</th>
													</tr>
													<tr>
														<td class="w-40">250sq. yards</td>
														<td align="center"></td>
														<td class="r-align">£17,250</td>
													</tr>
													<tr>
														<td class="w-40">Extras</td>
														<td align="center">-</td>
														<td class="r-align">£0</td>
													</tr>
													<tr>
														<td class="w-40">Discount</td>
														<td align="center">0%</td>
														<td class="r-align">£</td>
													</tr>
													<tr>
														<td class="w-40">Development Fee</td>
														<td align="center"></td>
														<td class="r-align">£6,500</td>
													</tr>
													<tr class="border-b padb-5">
														<th class="w-40">Total Plot Cost</th>
														<th align="center"></th>
														<th class="r-align">£23,750</th>
													</tr>
													<tr>
														<th class="padt-5" colspan="3">Payment Plan - 24 Months</th>
													</tr>
													<tr>
														<td class="w-40">Development Fee</td>
														<td align="center">1</td>
														<td class="r-align">£6,500</td>
													</tr>
													<tr class="border-b padb-5">
														<td class="w-40">Monthly Payments</td>
														<td align="center">23</td>
														<td class="r-align">£750</td>
													</tr>
													<tr>
														<th class="padt-5" colspan="3">Cashback and Net Investment</th>
													</tr>
													<tr>
														<td class="w-40">Cashback Value</td>
														<td align="center">30%</td>
														<td class="r-align">£5,175</td>
													</tr>
													<tr class="border-b padb-5">
														<td colspan="2" class="">Net Investment</td>
														<td class="r-align">£18,575</td>
													</tr>
													<tr>
														<th class="padt-5" colspan="3">Expected Plot Value 2027</th>
													</tr>
													<tr class="border-b padb-5">
														<td class="w-40">Value Increase</td>
														<th align="center">200%</th>
														<td class="r-align">£47,500</td>
													</tr>
													<tr>
														<th class="padt-5" colspan="3">Return on Investment</th>
													</tr>
													<tr>
														<td class="w-40">&nbsp;</td>
														<td align="center">&nbsp;</td>
														<td class="r-align">&nbsp;</td>
													</tr>
													<tr>
														<td class="w-40">ROI 2027</td>
														<td align="center">156%</td>
														<td class="r-align">£28,925</td>
													</tr>
													<tr class="padb-5">
														<td class="w-40">Exp. Inv. Value 2027</td>
														<th align="center">2.56X </th>
														<th class="r-align">£47,500</th>
													</tr>
												</tbody></table>
											</div>
										</div>
									</div>
								</div>						
							</div>
							
							<div class="InvMentInner 500-R1" style="display: none;">
								<ul class="nav nav-tabs" id="500-R1" role="tablist">
									<li class="nav-item" role="presentation">
										<button class="nav-link active" id="INVESTOR-R1-500-tab" data-bs-toggle="tab" data-bs-target="#INVESTOR-R1-500" type="button" role="tab" aria-controls="INVESTOR-R1-500" aria-selected="true">Cash Buyer</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link" id="FIXED-R1-500-tab" data-bs-toggle="tab" data-bs-target="#FIXED-R1-500" type="button" role="tab" aria-controls="FIXED-R1-500" aria-selected="false" tabindex="-1">12 Months</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link" id="FLEXIBLE-R1-500-tab" data-bs-toggle="tab" data-bs-target="#FLEXIBLE-R1-500" type="button" role="tab" aria-controls="FLEXIBLE-R1-500" aria-selected="false" tabindex="-1">24 Months</button>
									</li>
								</ul>
								<div class="tab-content" id="500-R1Content">
									<div class="tab-pane  show active" id="INVESTOR-R1-500" role="tabpanel" aria-labelledby="INVESTOR-R1-500-tab">
										<div class="InvMCWrap re-InvMCWrap">
											<div class="table-data">
												<table>
													<tbody><tr class="border-b padb-5 padt-5">
														<th colspan="2">Plot Price:</th>
														<td class="r-align">£45,500</td>
													</tr>
													<tr>
														<th class="padt-5" colspan="3">Cost Breakdown</th>
													</tr>
													<tr>
														<td class="w-40">500 sq. yards</td>
														<td align="center"></td>
														<td class="r-align">£32,500</td>
													</tr>
													<tr>
														<td class="w-40">Extras</td>
														<td align="center">-</td>
														<td class="r-align">£0</td>
													</tr>
													<tr>
														<td class="w-40">Discount</td>
														<td align="center">10%</td>
														<td class="r-align">-£3,250</td>
													</tr>
													<tr>
														<td class="w-40">Development Fee</td>
														<td align="center"></td>
														<td class="r-align">£13,000</td>
													</tr>
													<tr class="border-b padb-5">
														<th class="w-40">Total Plot Cost</th>
														<th align="center"></th>
														<th class="r-align">£42,250</th>
													</tr>
													<tr>
														<th class="padt-5" colspan="3">Cost Breakdown</th>
													</tr>
													<tr>
														<td class="w-40">Payment In Full</td>
														<td align="center">1</td>
														<td class="r-align">£42,250</td>
													</tr>
													<tr class="border-b padb-5">
														<td class="w-40">&nbsp;</td>
														<td align="center">&nbsp;</td>
														<td class="r-align">&nbsp;</td>
													</tr>
													<tr>
														<th class="padt-5" colspan="3">Cashback and Net Investment</th>
													</tr>
													<tr>
														<td class="w-40">Cashback Value</td>
														<td align="center">50%</td>
														<td class="r-align">£14,625</td>
													</tr>
													<tr class="border-b padb-5">
														<td colspan="2" class="">Net Investment</td>
														<td class="r-align">£27,625</td>
													</tr>
													<tr>
														<th class="padt-5" colspan="3">Expected Plot Value 2027</th>
													</tr>
													<tr class="border-b padb-5">
														<td class="w-40">Value Increase</td>
														<th align="center">200%</th>
														<td class="r-align">£91,000</td>
													</tr>
													<tr>
														<th class="padt-5" colspan="3">Return on Investment</th>
													</tr>
													<tr>
														<td class="w-40">ROI Day 1</td>
														<td align="center">8%</td>
														<td class="r-align">£3,250</td>
													</tr>
													<tr>
														<td class="w-40">ROI 2027</td>
														<td align="center">229%</td>
														<td class="r-align">£63,375</td>
													</tr>
													<tr class="padb-5">
														<td class="w-40">Exp. Inv. Value 2027</td>
														<th align="center">3.29X</th>
														<th class="r-align">£91,000</th>
													</tr>
												</tbody></table>
											</div>
										</div>
									</div>
									<div class="tab-pane " id="FIXED-R1-500" role="tabpanel" aria-labelledby="FIXED-R1-500-tab">
										<div class="InvMCWrap re-InvMCWrap">
											<div class="table-data">
												<table>
													<tbody><tr class="border-b padb-5 padt-5">
														<th colspan="2">Plot Price:</th>
														<td class="r-align">£45,500</td>
													</tr>
													<tr>
														<th class="padt-5" colspan="3">Cost Breakdown</th>
													</tr>
													<tr>
														<td class="w-40">500 sq. yards</td>
														<td align="center"></td>
														<td class="r-align">£32,500</td>
													</tr>
													<tr>
														<td class="w-40">Extras</td>
														<td align="center">-</td>
														<td class="r-align">£0</td>
													</tr>
													<tr>
														<td class="w-40">Discount</td>
														<td align="center">-</td>
														<td class="r-align">£0</td>
													</tr>
													<tr>
														<td class="w-40">Development Fee</td>
														<td align="center"></td>
														<td class="r-align">£13,000</td>
													</tr>
													<tr class="border-b padb-5">
														<th class="w-40">Total Plot Cost</th>
														<th align="center"></th>
														<th class="r-align">£45,500</th>
													</tr>
													<tr>
														<th class="padt-5" colspan="3">Payment Plan - 12 Months</th>
													</tr>
													<tr>
														<td class="w-40">Monthly Payments</td>
														<td align="center">12</td>
														<td class="r-align">£3,792</td>
													</tr>
													<tr class="border-b padb-5">
														<td class="w-40">&nbsp;</td>
														<td align="center">&nbsp;</td>
														<td class="r-align">&nbsp;</td>
													</tr>
													<tr>
														<th class="padt-5" colspan="3">Cashback and Net Investment</th>
													</tr>
													<tr>
														<td class="w-40">Cashback Value</td>
														<td align="center">40%</td>
														<td class="r-align">£13,000</td>
													</tr>
													<tr class="border-b padb-5">
														<td colspan="2" class="">Net Investment</td>
														<td class="r-align">£32,500</td>
													</tr>
													<tr>
														<th class="padt-5" colspan="3">Expected Plot Value 2027</th>
													</tr>
													<tr class="border-b padb-5">
														<td class="w-40">Value Increase</td>
														<th align="center">200%</th>
														<td class="r-align">£91,000</td>
													</tr>
													<tr>
														<th class="padt-5" colspan="3">Return on Investment</th>
													</tr>
													<tr>
														<td class="w-40">&nbsp;</td>
														<td align="center">&nbsp;</td>
														<td class="r-align">&nbsp;</td>
													</tr>
													<tr>
														<td class="w-40">ROI 2027</td>
														<td align="center">180%</td>
														<td class="r-align">£58,500</td>
													</tr>
													<tr class="padb-5">
														<td class="w-40">Exp. Inv. Value 2027</td>
														<th align="center">2.80X</th>
														<th class="r-align">£91.000</th>
													</tr>
												</tbody></table>
											</div>
										</div>
									</div>
									<div class="tab-pane " id="FLEXIBLE-R1-500" role="tabpanel" aria-labelledby="FLEXIBLE-R1-500-tab">
										<div class="InvMCWrap re-InvMCWrap">
											<div class="table-data">
												<table>
													<tbody><tr class="border-b padb-5 padt-5">
														<th colspan="2">Plot Price:</th>
														<td class="r-align">£45,500</td>
													</tr>
													<tr>
														<th class="padt-5" colspan="3">Cost Breakdown</th>
													</tr>
													<tr>
														<td class="w-40">500 sq. yards</td>
														<td align="center"></td>
														<td class="r-align">£32,500</td>
													</tr>
													<tr>
														<td class="w-40">Extras</td>
														<td align="center">-</td>
														<td class="r-align">£0</td>
													</tr>
													<tr>
														<td class="w-40">Discount</td>
														<td align="center">-</td>
														<td class="r-align">£0</td>
													</tr>
													<tr>
														<td class="w-40">Development Fee</td>
														<td align="center"></td>
														<td class="r-align">£13,000</td>
													</tr>
													<tr class="border-b padb-5">
														<th class="w-40">Total Plot Cost</th>
														<th align="center"></th>
														<th class="r-align">£45,500</th>
													</tr>
													<tr>
														<th class="padt-5" colspan="3">Payment Plan - 24 Months</th>
													</tr>
													<tr>
														<td class="w-40">Development Fee</td>
														<td align="center">1</td>
														<td class="r-align">£13,000</td>
													</tr>
													<tr class="border-b padb-5">
														<td class="w-40">Monthly Payments</td>
														<td align="center">23</td>
														<td class="r-align">£1,413</td>
													</tr>
													<tr>
														<th class="padt-5" colspan="3">Cashback and Net Investment</th>
													</tr>
													<tr>
														<td class="w-40">Cashback Value</td>
														<td align="center">30%</td>
														<td class="r-align">£9,750</td>
													</tr>
													<tr class="border-b padb-5">
														<td colspan="2" class="">Net Investment</td>
														<td class="r-align">£35,750</td>
													</tr>
													<tr>
														<th class="padt-5" colspan="3">Expected Plot Value 2027</th>
													</tr>
													<tr class="border-b padb-5">
														<td class="w-40">Value Increase</td>
														<th align="center">200%</th>
														<td class="r-align">£91,000</td>
													</tr>
													<tr>
														<th class="padt-5" colspan="3">Return on Investment</th>
													</tr>
													<tr>
														<td class="w-40">&nbsp;</td>
														<td align="center">&nbsp;</td>
														<td class="r-align">&nbsp;</td>
													</tr>
													<tr>
														<td class="w-40">ROI 2027</td>
														<td align="center">155%</td>
														<td class="r-align">£55,250</td>
													</tr>
													<tr class="padb-5">
														<td class="w-40">Exp. Inv. Value 2027</td>
														<th align="center">2.55X </th>
														<th class="r-align">£91,000</th>
													</tr>
												</tbody></table>
											</div>
										</div>
									</div>
								</div>						
							</div>
							<div class="InvMentInner commercial semi-commercial" style="display: none;">
								<ul class="nav nav-tabs" id="commercial" role="tablist">
									<li class="nav-item" role="presentation">
										<button class="nav-link active" id="INVESTOR-commercial-tab" data-bs-toggle="tab" data-bs-target="#INVESTOR-commercial" type="button" role="tab" aria-controls="INVESTOR-commercial" aria-selected="true">Cash Buyer</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link" id="FIXED-commercial-tab" data-bs-toggle="tab" data-bs-target="#FIXED-commercial" type="button" role="tab" aria-controls="FIXED-commercial" aria-selected="false" tabindex="-1">12 Months</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link" id="FLEXIBLE-commercial-tab" data-bs-toggle="tab" data-bs-target="#FLEXIBLE-commercial" type="button" role="tab" aria-controls="FLEXIBLE-commercial" aria-selected="false" tabindex="-1">24 Months</button>
									</li>
								</ul>
								
								<div class="tab-content" id="commercialContent">
									<div class="tab-pane  show active" id="INVESTOR-commercial" role="tabpanel" aria-labelledby="INVESTOR-commercial-tab">
										<div class="InvMCWrap re-InvMCWrap">
											<div class="table-data">
												<table>
													<tbody><tr class="border-b padb-5 padt-5">
														<th colspan="2">Plot Price:</th>
														<td class="r-align">£175,500</td>
													</tr>
													<tr>
														<th class="padt-5" colspan="3">Cost Breakdown</th>
													</tr>
													<tr>
														<td class="w-40">1000 sq. yards</td>
														<td align="center"></td>
														<td class="r-align">£149,500</td>
													</tr>
													<tr>
														<td class="w-40">Extras</td>
														<td align="center">-</td>
														<td class="r-align">£0</td>
													</tr>
													<tr>
														<td class="" w-40="">Discount</td>
														<td align="center">10%</td>
														<td class="r-align">-£14,950</td>
													</tr>
													<tr>
														<td class="w-40">Development Fee</td>
														<td align="center"></td>
														<td class="r-align">£26,000</td>
													</tr>
													<tr class="border-b padb-5">
														<th class="w-40">Total Plot Cost</th>
														<th align="center"></th>
														<th class="r-align">£160,550</th>
													</tr>
													<tr>
														<th class="padt-5" colspan="3">Cost Breakdown</th>
													</tr>
													<tr>
														<td class="w-40">Payment In Full</td>
														<td align="center">1</td>
														<td class="r-align">£160,550</td>
													</tr>
													<tr class="border-b padb-5">
														<td class="w-40">&nbsp;</td>
														<td align="center">&nbsp;</td>
														<td class="r-align">&nbsp;</td>
													</tr>
													<tr>
														<th class="padt-5" colspan="3">Cashback and Net Investment</th>
													</tr>
													<tr>
														<td class="w-40">Cashback Value</td>
														<td align="center">50%</td>
														<td class="r-align">£67,275</td>
													</tr>
													<tr class="border-b padb-5">
														<td colspan="2" class="">Net Investment</td>
														<td class="r-align">£93,275</td>
													</tr>
													<tr>
														<th class="padt-5" colspan="3">Expected Plot Value 2027</th>
													</tr>
													<tr class="border-b padb-5">
														<td class="w-40">Value Increase</td>
														<th align="center">200%</th>
														<td class="r-align">£351,000</td>
													</tr>
													<tr>
														<th class="padt-5" colspan="3">Return on Investment</th>
													</tr>
													<tr>
														<td class="w-40">ROI Day 1</td>
														<td align="center">8%</td>
														<td class="r-align">£14,950</td>
													</tr>
													<tr>
														<td class="w-40">ROI 2027</td>
														<td align="center">276%</td>
														<td class="r-align">£257,725</td>
													</tr>
													<tr class="padb-5">
														<td class="w-40">Exp. Inv. Value 2027</td>
														<th align="center">3.76X</th>
														<th class="r-align">£351,000</th>
													</tr>
												</tbody></table>
											</div>
										</div>
									</div>
									<div class="tab-pane " id="FIXED-commercial" role="tabpanel" aria-labelledby="FIXED-commercial-tab">
										<div class="InvMCWrap re-InvMCWrap">
											<div class="table-data">
												<table>
													<tbody><tr class="border-b padb-5 padt-5">
														<th colspan="2">Plot Price:</th>
														<td class="r-align">£175,500</td>
													</tr>
													<tr>
														<th class="padt-5" colspan="3">Cost Breakdown</th>
													</tr>
													<tr>
														<td class="w-40">1000 sq. yards</td>
														<td align="center"></td>
														<td class="r-align">£149,500</td>
													</tr>
													<tr>
														<td class="w-40">Extras</td>
														<td align="center">-</td>
														<td class="r-align">£0</td>
													</tr>
													<tr>
														<td class="w-40">Discount</td>
														<td align="center">-</td>
														<td class="r-align">£0</td>
													</tr>
													<tr>
														<td class="w-40">Development Fee</td>
														<td align="center"></td>
														<td class="r-align">£26,000</td>
													</tr>
													<tr class="border-b padb-5">
														<th class="w-40">Total Plot Cost</th>
														<th align="center"></th>
														<th class="r-align">£175,500</th>
													</tr>
													<tr>
														<th class="padt-5" colspan="3">Payment Plan - 12 Months</th>
													</tr>
													<tr>
														<td class="w-40">Monthly Payments</td>
														<td align="center">12</td>
														<td class="r-align">£14,625</td>
													</tr>
													<tr class="border-b padb-5">
														<td class="">&nbsp;</td>
														<td align="center">&nbsp;</td>
														<td class="r-align">&nbsp;</td>
													</tr>
													<tr>
														<th class="padt-5" colspan="3">Cashback and Net Investment</th>
													</tr>
													<tr>
														<td class="w-40">Cashback Value</td>
														<td align="center">40%</td>
														<td class="r-align">£59,800</td>
													</tr>
													<tr class="border-b padb-5">
														<td colspan="2" class="">Net Investment</td>
														<td class="r-align">£115,700</td>
													</tr>
													<tr>
														<th class="padt-5" colspan="3">Expected Plot Value 2027</th>
													</tr>
													<tr class="border-b padb-5">
														<td class="w-40">Value Increase</td>
														<th align="center">200%</th>
														<td class="r-align">£351,000</td>
													</tr>
													<tr>
														<th class="padt-5" colspan="3">Return on Investment</th>
													</tr>
													<tr>
														<td class="w-40">&nbsp;</td>
														<td align="center">&nbsp;</td>
														<td class="r-align">&nbsp;</td>
													</tr>
													<tr>
														<td class="w-40">ROI 2027</td>
														<td align="center">203%</td>
														<td class="r-align">£235,300</td>
													</tr>
													<tr class="padb-5">
														<td class="w-40">Exp. Inv. Value 2027</td>
														<th align="center">3.03X</th>
														<th class="r-align">£351,000</th>
													</tr>
												</tbody></table>
											</div>
										</div>
									</div>
									<div class="tab-pane " id="FLEXIBLE-commercial" role="tabpanel" aria-labelledby="FLEXIBLE-commercial-tab">
										<div class="InvMCWrap re-InvMCWrap">
											<div class="table-data">
												<table>
													<tbody><tr class="border-b padb-5 padt-5">
														<th colspan="2">Plot Price:</th>
														<td class="r-align">£175,500</td>
													</tr>
													<tr>
														<th class="padt-5" colspan="3">Cost Breakdown</th>
													</tr>
													<tr>
														<td class="w-40">1000 sq. yards</td>
														<td align="center"></td>
														<td class="r-align">£149,500</td>
													</tr>
													<tr>
														<td class="w-40">Extras</td>
														<td align="center">-</td>
														<td class="r-align">£0</td>
													</tr>
													<tr>
														<td class="w-40">Discount</td>
														<td align="center">-</td>
														<td class="r-align">£0</td>
													</tr>
													<tr>
														<td class="w-40">Development Fee</td>
														<td align="center"></td>
														<td class="r-align">£26,000</td>
													</tr>
													<tr class="border-b padb-5">
														<th class="w-40">Total Plot Cost</th>
														<th align="center"></th>
														<th class="r-align">£175,500</th>
													</tr>
													<tr>
														<th class="padt-5" colspan="3">Payment Plan - 24 Months</th>
													</tr>
													<tr>
														<td class="w-40">Development Fee</td>
														<td align="center">1</td>
														<td class="r-align">£26,000</td>
													</tr>
													<tr class="border-b padb-5">
														<td class="w-40">Monthly Payments</td>
														<td align="center">23</td>
														<td class="r-align">£6,500</td>
													</tr>
													<tr>
														<th class="padt-5" colspan="3">Cashback and Net Investment</th>
													</tr>
													<tr>
														<td class="w-40">Cashback Value</td>
														<td align="center">30%</td>
														<td class="r-align">£44,850</td>
													</tr>
													<tr class="border-b padb-5">
														<td colspan="2" class="">Net Investment</td>
														<td class="r-align">£130,650</td>
													</tr>
													<tr>
														<th class="padt-5" colspan="3">Expected Plot Value 2027</th>
													</tr>
													<tr class="border-b padb-5">
														<td class="w-40">Value Increase</td>
														<th align="center">200%</th>
														<td class="r-align">£351,000</td>
													</tr>
													<tr>
														<th class="padt-5" colspan="3">Return on Investment</th>
													</tr>
													<tr>
														<td class="w-40">&nbsp;</td>
														<td align="center">&nbsp;</td>
														<td class="r-align">&nbsp;</td>
													</tr>
													<tr>
														<td class="w-40">ROI 2027</td>
														<td align="center">169%</td>
														<td class="r-align">£220,350</td>
													</tr>
													<tr class="padb-5">
														<td class="w-40">Exp. Inv. Value 2027</td>
														<th align="center">2.69X</th>
														<th class="r-align">£351,000</th>
													</tr>
												</tbody></table>
											</div>
										</div>
									</div>
								</div>						
							</div>
							
					</div>
					
					<span class="book-now cb-pop-btn">BOOK YOUR PLOT NOW</span>					
					
				</div>
			</div>
		</div>
	</div>
		
		
		
		
<!-- <script type="rocketlazyloadscript"> --><script>
jQuery(document).ready(function($) {
    $("body").on("click", ".select-size span", function() {
        var target = $("#select-size");
        if(target.length) {
            $('html, body').animate({
                scrollTop: target.offset().top - 30
            }, 100);
        }
    });
	$("body").on("click", ".select-type span", function() {
        var target = $("#select-type");
        if(target.length) {
            $('html, body').animate({
                scrollTop: target.offset().top - 30
            }, 100);
        }
    });
	
	$("body").on("click", ".InvMent", function() {
        var target = $("#sel-payment");
        if(target.length) {
            $('html, body').animate({
                scrollTop: target.offset().top - 30
            }, 100);
        }
    });
});

document.querySelectorAll('input[name="size"]').forEach(function(input) {
	input.addEventListener('change', function() {
		let selectedValue = this.value;

		// Hide all items
		document.querySelectorAll('.select-type > li').forEach(function(item) {
			item.classList.add('hiddenClass');
			item.classList.remove('showClass');
		});

		// Show and highlight all selected items
		document.querySelectorAll('.select-type > li.' + selectedValue).forEach(function(item) {
			item.classList.remove('hiddenClass');
			item.classList.add('showClass');
		});
	});
});

// Trigger change event on page load for the checked input
document.querySelector('input[name="size"]:checked').dispatchEvent(new Event('change'));



document.querySelectorAll('input[name="size"]').forEach(function(sizeInput) {
	sizeInput.addEventListener('click', function() {
		let typeValue;
		switch (this.value) {
			case 'big':
				typeValue = 'commercial';
				break;
			case 'large':
				typeValue = '500-R1';
				break;
			case 'medium':
				typeValue = '250-R1';
				break;
			case 'small':
				typeValue = '125-R1';
				break;
		}

		if (typeValue) {
			document.querySelectorAll('input[name="type"]').forEach(function(typeInput) {
				typeInput.checked = (typeInput.value === typeValue);
			});
			
			// Trigger change event for the newly checked type input
			jQuery('input[name="type"]:checked').trigger('change');
		}
	});
});

jQuery(document).ready(function() {
	jQuery('input[name="type"]').on('change', function() {
		jQuery('.InvMentInner').hide().removeClass('showtab');

		const value = jQuery(this).val();
		let targetClass = '';

		if (value === 'commercial') {
			targetClass = '.InvMentInner.commercial';
		} else if (value === 'semi-commercial') {
			targetClass = '.InvMentInner.semi-commercial';
		} else if (value === '500-R1' || value === '500-R2') {
			targetClass = '.InvMentInner.500-R1';
		} else if (value === '250-R1' || value === '250-R2') {
			targetClass = '.InvMentInner.250-R1';
		} else if (value === '125-R1' || value === '125-R2') {
			targetClass = '.InvMentInner.125-R1';
		}

		if (targetClass) {
			jQuery(targetClass).addClass('showtab').show();
		}
	});

	jQuery('input[name="type"]:checked').trigger('change');
});
</script>