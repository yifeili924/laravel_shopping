@extends('layouts.header')
@section('content')
	
	<!-- PAGE HEADER -->
	<section id="page-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h1>Blog</h1>
						<span class="st-border"></span>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /PAGE HEADER -->


	<!-- BLOG -->
	<section id="blog">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="single-blog">
						<article>
							<div class="post-thumb"><img class="img-responsive" src="{{URL:: asset('images/blog/01.jpg')}}" alt=""></div>
							<h4 class="post-title"><a href="">Kpsum dolor sit amet, consectetur adipisicing elit.</a></h4>
							<div class="post-meta text-uppercase">
								<span>Appril 3, 2014</span>
								<span>In <a href="">Design</a></span>
								<span>By <a href="">Admin</a></span>
							</div>
							<div class="post-article">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error accusamus, repudiandae tenetur itaque rem sapiente inventore vel deserunt officiis, facilis veritatis doloremque debitis id perferendis, eveniet esse molestiae eum minus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error accusamus, repudiandae tenetur itaque rem sapiente inventore vel deserunt officiis, facilis veritatis doloremque debitis id perferendis, eveniet esse molestiae
							</div>
							<a href="" class="btn btn-readmore">Read More</a>
						</article>
					</div>
					<hr>
					<div class="single-blog">
						<article>
							<div class="post-link"><a href="">www.yourdomain.com</a></div>
							<h4 class="post-title"><a href="">Kpsum dolor sit amet, consectetur adipisicing elit.</a></h4>
							<div class="post-meta text-uppercase">
								<span>Appril 3, 2014</span>
								<span>In <a href="">Design</a></span>
								<span>By <a href="">Admin</a></span>
							</div>
							<div class="post-article">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error accusamus, repudiandae tenetur itaque rem sapiente inventore vel deserunt officiis, facilis veritatis doloremque debitis id perferendis, eveniet esse molestiae eum minus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error accusamus, repudiandae tenetur itaque rem sapiente inventore vel deserunt officiis, facilis veritatis doloremque debitis id perferendis, eveniet esse molestiae
							</div>
							<a href="" class="btn btn-readmore">Read More</a>
						</article>
					</div>
					<hr>
					<div class="single-blog">
						<article>
							<div class="post-slider">
								<div id="post-carousel" class="carousel slide" data-ride="carousel">			
									<div class="carousel-inner">
										<div class="item active">
											<img src="{{URL:: asset('images/blog/01.jpg')}}" alt="">
										</div>
										<div class="item">
											<img src="{{URL:: asset('images/blog/02.jpg')}}" alt="">			
										</div>
										<div class="item">
											<img src="{{URL:: asset('images/blog/03.jpg')}}" alt="">			
										</div>
										
										<a class="post-carousel-left" href="#post-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
										<a class="post-carousel-right" href="#post-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
									</div>		
								</div> 
							</div>
							<h4 class="post-title"><a href="">Kpsum dolor sit amet, consectetur adipisicing elit.</a></h4>
							<div class="post-meta text-uppercase">
								<span>Appril 3, 2014</span>
								<span>In <a href="">Design</a></span>
								<span>By <a href="">Admin</a></span>
							</div>
							<div class="post-article">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error accusamus, repudiandae tenetur itaque rem sapiente inventore vel deserunt officiis, facilis veritatis doloremque debitis id perferendis, eveniet esse molestiae eum minus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error accusamus, repudiandae tenetur itaque rem sapiente inventore vel deserunt officiis, facilis veritatis doloremque debitis id perferendis, eveniet esse molestiae
							</div>
							<a href="" class="btn btn-readmore">Read More</a>
						</article>
					</div>
					<hr>
					<div class="single-blog">
						<article>
							<div class="post-quote">“Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti minus quasi temporibus reiciendis veniam reprehenderit, consequuntur. At blanditiis”</div>
							<h4 class="post-title"><a href="">Kpsum dolor sit amet, consectetur adipisicing elit.</a></h4>
							<div class="post-meta text-uppercase">
								<span>Appril 3, 2014</span>
								<span>In <a href="">Design</a></span>
								<span>By <a href="">Admin</a></span>
							</div>
							<div class="post-article">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error accusamus, repudiandae tenetur itaque rem sapiente inventore vel deserunt officiis, facilis veritatis doloremque debitis id perferendis, eveniet esse molestiae eum minus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error accusamus, repudiandae tenetur itaque rem sapiente inventore vel deserunt officiis, facilis veritatis doloremque debitis id perferendis, eveniet esse molestiae
							</div>
							<a href="" class="btn btn-readmore">Read More</a>
						</article>
					</div>
					<hr>
					<div class="single-blog">
						<article>
							<div class="post-video"><iframe width="560" height="315" src="https://www.youtube.com/embed/uQBL7pSAXR8" frameborder="0" allowfullscreen></iframe></div>
							<h4 class="post-title"><a href="">Kpsum dolor sit amet, consectetur adipisicing elit.</a></h4>
							<div class="post-meta text-uppercase">
								<span>Appril 3, 2014</span>
								<span>In <a href="">Design</a></span>
								<span>By <a href="">Admin</a></span>
							</div>
							<div class="post-article">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error accusamus, repudiandae tenetur itaque rem sapiente inventore vel deserunt officiis, facilis veritatis doloremque debitis id perferendis, eveniet esse molestiae eum minus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error accusamus, repudiandae tenetur itaque rem sapiente inventore vel deserunt officiis, facilis veritatis doloremque debitis id perferendis, eveniet esse molestiae
							</div>
							<a href="" class="btn btn-readmore">Read More</a>
						</article>
					</div>
					<hr>
					<ul class="pagination">
						<li><a href="#"><i class="fa fa-angle-left"></i></a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
					</ul>
				</div>
				<div class="col-md-3">
					<div class="sidebar-widget">
						<div class="blog-search">
                            <form>
                                <input type="text" name="search">
                                <span>
                                	<button id="submit_btn" class="search-submit" type="submit">
                                    <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </form>
                        </div>
					</div>
					<div class="sidebar-widget">
						<h4 class="sidebar-title">Categories</h4>
						<ul>
							<li><a href="">Web Design</a></li>
							<li><a href="">Web Development</a></li>
							<li><a href="">Video</a></li>
							<li><a href="">HTML</a></li>
							<li><a href="">CSS</a></li>
						</ul>
					</div>
					<div class="sidebar-widget">
						<h4 class="sidebar-title">Flickr</h4>
						<ul class="content-flickr">
							<li>
                                <a href="#" title="">
                                    <img class="img-responsive" src="{{URL:: asset('images/img1.png')}}" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="img-responsive" src="{{URL:: asset('images/img2.png')}}" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="img-responsive" src="{{URL:: asset('images/img3.png')}}" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="img-responsive" src="{{URL:: asset('images/img4.png')}}" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="img-responsive" src="{{URL:: asset('images/img5.png')}}" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="img-responsive" src="{{URL:: asset('images/img6.png')}}" alt="">
                                </a>
                            </li>
						</ul>
					</div>
					<div class="sidebar-widget">
						<h4 class="sidebar-title">Tags</h4>
						<div class="tagcloud">
							<a href="">design</a>
							<a href="">html</a>
							<a href="">php</a>
							<a href="">wordpress</a>
							<a href="">css</a>
							<a href="">development</a>
							<a href="">theme</a>
							<a href="">plugin</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /BLOG -->

	<!-- FOOTER -->
	<footer id="footer">
		<div class="container">
			<div class="row">
				<!-- SOCIAL ICONS -->
				<div class="col-sm-6 col-sm-push-6 footer-social-icons">
					<span>Follow us:</span>
					<a href=""><i class="fa fa-facebook"></i></a>
					<a href=""><i class="fa fa-twitter"></i></a>
					<a href=""><i class="fa fa-google-plus"></i></a>
					<a href=""><i class="fa fa-pinterest-p"></i></a>
				</div>
				<!-- /SOCIAL ICONS -->
				<div class="col-sm-6 col-sm-pull-6 copyright">
					<p>&copy; 2015 <a href="">ShapedTheme</a>. All Rights Reserved.More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
				</div>
			</div>
		</div>
	</footer>
	<!-- /FOOTER -->

	<!-- Scroll-up -->
	<div class="scroll-up">
		<ul><li><a href="#header"><i class="fa fa-angle-up"></i></a></li></ul>
	</div>
	
@endsection