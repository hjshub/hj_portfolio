	<?php
		include_once "header.php";
	?>
	<div id="layout">
		<div id="wrapper">
			<section class="section01">
				<h2 class="intro">
					<img src="/image/logo.png" alt="로고" class="animated fadeInDown ani-delay04">
					<span id="typing" class="animated fadeInUp ani-delay09"><i class="fas fa-sign-in-alt fa-sm"></i>&nbsp;Welcome To Visiting My Web</span>
				</h2>
				<span class="validator animated fadeInRight ani-delay12">
					<a href="http://validator.kldp.org/check?uri=referer" onclick="this.href=this.href.replace(/referer$/,encodeURIComponent(document.URL))">
						<img src="//validator.kldp.org/w3cimgs/validate/html5-blue.png" alt="Valid HTML 5" height="15" width="80">
					</a>
				</span>
			</section>
			<section class="section02">
				<h2>
					<span class="title">ABOUT ME</span>
					<span class="summary animated fadeInUp ani-stop ani-delay03">- Who Am I ? -</span>
					<span class="line"></span>
					<span class="circle"></span>
				</h2>
				<div class="content blue_gradient">
					<div class="left">
						<div class="profile animated fadeInUp ani-stop ani-delay05"><img src="/image/profile.png" alt="프로필"></div>
					</div>
					<div class="right">
						<ul>
							<li class="animated fadeInRight ani-stop ani-delay04"><p>시시각각 변화하는 웹 트렌드에 민감하게 대응하고,</p></li>
							<li class="animated fadeInRight ani-stop ani-delay05"><p>도전하기를 즐기는 웹 퍼블리셔 김효주 입니다.</p><br></li>
							<li class="animated fadeInRight ani-stop ani-delay06"><p>최신 기술을 끊임없이 연구해,</p></li>
							<li class="animated fadeInRight ani-stop ani-delay07"><p>사용 유저들에게 보이지 않는 작은 부분까지도</p></li>
							<li class="animated fadeInRight ani-stop ani-delay08"><p>가장 효율적인 방법으로 구현하는 것이 저의 목표입니다.</p></li>
						</ul>
					</div>
				</div>
			</section>
			<section class="section03">
				<h2>
					<span class="title">PORTFOLIO</span>
					<span class="summary animated fadeInUp ani-stop ani-delay03">- See My Works -</span>
					<span class="line"></span>
					<span class="circle"></span>
				</h2>			
				<div class="content">
					<ul class="list">
						<li class="animated fadeInUp ani-stop ani-delay04">
							<a href="javascript:;" onclick="detail_view(0);">
								<img src="/image/list01.jpg" alt="리스트1">
								<div class="info">
									<p>(주)프로라이팅</p>
									<p>PC 홈페이지 구축 / 1,2차 리뉴얼<br> / 유지,보수</p><br>
									<p>&lt;작업영역&gt;</p> 
									<p>html / css / javascript 코딩</p>
								</div>
							</a>
						</li>
						<li class="animated fadeInUp ani-stop ani-delay05">
							<a href="javascript:;" onclick="detail_view(1);">
								<img src="/image/list02.jpg" alt="리스트2">
								<div class="info">
									<p>(주)프로라이팅</p>
									<p>mobile 홈페이지 구축<br>/ 1~3차 리뉴얼 / 유지,보수</p><br>
									<p>&lt;작업영역&gt;</p> 
									<p>html / css / javascript 코딩</p>
								</div>
							</a>
						</li>
						<li class="animated fadeInUp ani-stop ani-delay06">
							<a href="javascript:;" onclick="detail_view(2);">
								<img src="/image/list03.jpg" alt="리스트3">
								<div class="info">
									<p>에임트레이닝랩</p>
									<p>홈페이지 구축(반응형)</p><br>
									<p>&lt;작업영역&gt;</p> 
									<p>html / css / javascript 코딩<br> (워드프레스 - 아바다 테마 사용)</p>
								</div>						
							</a>
						</li>
					</ul>
					<div class="detail">
						<ul class="detail_info">
							<li class="animated fadeInRight ani-stop ani-delay04"><img src="/sub/image/detail01_01.jpg" alt="리스트1_리뉴얼전"></li>
							<li class="small animated fadeInUp ani-stop ani-delay06"><img src="/sub/image/arr_next.png" alt="화살표"></li>
							<li class="animated fadeInLeft ani-stop ani-delay08"><img src="/sub/image/detail01_02.jpg" alt="리스트1_1차리뉴얼"></li>
							<li class="small animated fadeInUp ani-stop ani-delay09"><img src="/sub/image/arr_next.png" alt="화살표"></li>
							<li class="animated fadeInRight ani-stop ani-delay09"><img src="/sub/image/detail01_03.jpg" alt="리스트1_2차리뉴얼"></li>		
							<li class="link"><a href="http://www.prolighting.co.kr/?browser_type=pc">홈페이지 바로가기 →</a></li>
						</ul>
						<ul class="detail_info">
							<li class="animated fadeInRight ani-stop ani-delay03"><img src="/sub/image/detail02_renewal01.jpg" alt="타이틀"></li>
							<li class="animated fadeInLeft ani-stop ani-delay05"><img src="/sub/image/detail02_01.jpg" alt="리스트2_1차리뉴얼"></li>					
							<li class="small animated fadeInUp ani-stop ani-delay07"><img src="/sub/image/arr_next.png" alt="화살표"></li>
							<li class="animated fadeInRight ani-stop ani-delay09"><img src="/sub/image/detail02_renewal02.jpg" alt="타이틀"></li>
							<li class="animated fadeInLeft ani-stop ani-delay09"><img src="/sub/image/detail02_02.jpg" alt="리스트2_2차리뉴얼"></li>						
							<li class="small animated fadeInUp ani-stop ani-delay09"><img src="/sub/image/arr_next.png" alt="화살표"></li>
							<li class="animated fadeInRight ani-stop ani-delay09"><img src="/sub/image/detail02_renewal03.jpg" alt="타이틀"></li>
							<li class="animated fadeInLeft ani-stop ani-delay09"><img src="/sub/image/detail02_03.jpg" alt="리스트2_3차리뉴얼"></li>	
							<li class="link"><a href="http://m.prolighting.co.kr">홈페이지 바로가기 →</a></li>
						</ul>
						<ul class="detail_info">
							<li class="animated fadeInRight ani-stop ani-delay04"><img src="/sub/image/detail03_01.jpg" alt="리스트3"></li>
							<li class="link"><a href="http://aimfit.co.kr">홈페이지 바로가기 →</a></li>
						</ul>	
						<div class="btn_close" onclick="detail_close();">
							<span></span>
							<span></span>					
						</div>
					</div>	
				</div>
			</section>
			<section class="section04">
				<h2>
					<span class="title">SKILL</span>
					<span class="summary animated fadeInUp ani-stop ani-delay03">- What I Can Do -</span>
					<span class="line"></span>
					<span class="circle"></span>
				</h2>		
				<div class="content blue_gradient">
					<ul class="per">
						<li class="animated fadeInUp ani-stop ani-delay05"><div class="name"><i class="fas fa-check-square fa-sm"></i>&nbsp;HTML5</div><div class="percent"><span><b>80%</b></span></div></li>
						<li class="animated fadeInUp ani-stop ani-delay06"><div class="name"><i class="fas fa-check-square fa-sm"></i>&nbsp;CSS3</div><div class="percent"><span><b>80%</b></span></div></li>
						<li class="animated fadeInUp ani-stop ani-delay07"><div class="name"><i class="fas fa-check-square fa-sm"></i>&nbsp;JAVASCRIPT</div><div class="percent"><span><b>70%</b></span></div></li>
						<li class="animated fadeInUp ani-stop ani-delay08"><div class="name"><i class="fas fa-check-square fa-sm"></i>&nbsp;J-QUERY</div><div class="percent"><span><b>70%</b></span></div></li>
						<li class="animated fadeInUp ani-stop ani-delay09"><div class="name"><i class="fas fa-check-square fa-sm"></i>&nbsp;AJAX</div><div class="percent"><span><b>50%</b></span></div></li>
					</ul>
				</div>
			</section>
			<section class="section05">
				<h2>
					<span class="title">CONTACT ME</span>
					<span class="summary animated fadeInUp ani-stop ani-delay03">- Have A Nice Day -</span>
					<span class="line"></span>
					<span class="circle"></span>
				</h2>		
				<div class="content blue_gradient">
					<ul>
						<li class="animated fadeInUp ani-stop ani-delay04">
							<div class="icon"></div>
							<dl>
								<dt>Address</dt>
								<dd>yukmalo, hanam, kyungido</dd>
								<dd>Rep. of KOREA</dd>
							</dl>
						</li>
						<li class="animated fadeInUp ani-stop ani-delay05">
							<div class="icon"></div>
							<dl>
								<dt>E-mail</dt>
								<dd>craz13@naver.com</dd>
							</dl>
						</li>
						<li class="animated fadeInUp ani-stop ani-delay06">
							<div class="icon"></div>
							<dl>
								<dt>Phone</dt>
								<dd>+82 10 3111 5188</dd>
							</dl>
						</li>
					</ul>
				</div>
			</section>
		</div>
	</div>

	<?php
		include_once "footer.php";
	?>