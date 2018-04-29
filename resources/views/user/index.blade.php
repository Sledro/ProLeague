@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-4">
			<!-- code start -->
			<div class="twPc-div">
				<a class="twPc-bg twPc-block"></a>

				<div>
					<div class="twPc-button">
						<!-- Twitter Button | you can get from: https://about.twitter.com/tr/resources/buttons#follow 
						<a href="https://twitter.com/mertskaplan" class="twitter-follow-button" data-show-count="false" data-size="large" data-show-screen-name="false" data-dnt="true">Follow @mertskaplan</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
						Twitter Button -->  
						<a href="/user/{username}/follow" class="btn btn-info" style="width:40%;margin:10px;">
							<span class="fa fa-twitter"></span> Follow 
						</a> 
					</div>

					<a title="Mert S. Kaplan" href="https://twitter.com/mertskaplan" class="twPc-avatarLink">
						<img alt="Mert S. Kaplan" src="https://mertskaplan.com/wp-content/plugins/msk-twprofilecard/img/mertskaplan.jpg" class="twPc-avatarImg">
					</a>

					<div class="twPc-divUser">
						<div class="twPc-divName">
							<a href="/user/{{$user->username}}">{{$user->username}}</a>
						</div>
						<span>
							<a href="/user/{{$user->username}}">@<span>{{$user->username}}</span></a>
						</span>
					</div>

					<div class="twPc-divStats">
						<ul class="twPc-Arrange">
							<li class="twPc-ArrangeSizeFit">
								<a href="https://twitter.com/mertskaplan" title="9.840 Tweet">
									<span class="twPc-StatLabel twPc-block">Tweets</span>
									<span class="twPc-StatValue">9.840</span>
								</a>
							</li>
							<li class="twPc-ArrangeSizeFit">
								<a href="https://twitter.com/mertskaplan/following" title="885 Following">
									<span class="twPc-StatLabel twPc-block">Following</span>
									<span class="twPc-StatValue">885</span>
								</a>
							</li>
							<li class="twPc-ArrangeSizeFit">
								<a href="https://twitter.com/mertskaplan/followers" title="1.810 Followers">
									<span class="twPc-StatLabel twPc-block">Followers</span>
									<span class="twPc-StatValue">1.810</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="col-8" style="padding-left:0px;">
			<div class="card" style="padding:20px;">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					 </div>
			</div>
			<!-- code end -->
		</div>
	</div>
</div>
@endsection