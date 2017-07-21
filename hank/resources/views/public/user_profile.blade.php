@extends('layouts.main')

@section('content')
	

<section>
    <div class="container">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10 profile-section">
				<!-- start of content -->
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-2">
								<div class="account-profile">
									<div class="dropdown public-profile top-margin-20">
										@if ($user->photo)
											@php ($profile_photo = $user->photo->url)
											<img src="{{ $profile_photo }}" class="img-responsive">
										@else
											<img src="{{ URL::asset('images/no-image-profile.jpg') }}" class="img-responsive">
										@endif
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="top-margin-30 bottom-margin-30">
									<input type="hidden" name="search-csrf" value="{{ csrf_token() }}">
									<h3 class="profile-name">{{ ucwords($user->first_name) }} {{ ucwords($user->last_name) }}</h3>
									<small class="member">{{ CustomHelper::lang('lang-member-since') }} {{ CustomHelper::show_elapsed_time($user->created_at) }}</small><br/>									
									<small class="address">
									@if (! empty($user->city)){{ $user->city }}@endif
									@if (! empty($user->state)){{ ', '.$user->state }}@endif
									@if (! empty($user->zip)){{ ' '.$user->zip }}@endif
									@if (! empty($user->country)){{ ', '.$user->country }}@endif
									</small>
									<br/>@if (! empty($user->city))<br/>@endif
									@if (! Auth::guest())
										@if (! CustomHelper::isFriendWith( $user->id, Auth::user()->id ))
											@if ($user->id !== Auth::user()->id)
											<small>
												@if ($user->pendingRequest)
													<span class="pending-request"> - {{ CustomHelper::lang('lang-pending-friend-request') }} - </span>
												@else
													<button class="btn btn-primary btn-xs" data-url="{{ url('/friends/add/request') }}" data-id="{{ $user->id }}" onclick="addFriend(this)"><i class="fa fa-user-plus"></i> &nbsp;Add as Friend</button><span class="loader"></span><span class="pending-request noshow"> - Pending Friend Request - </span>
												@endif
											</small>
											@endif
										@else
											<small>
												<input type="hidden" name="source_id" value="{{ Auth::user()->id }}" />
												<input type="hidden" name="target_id" value="{{ $user->id }}" />
												<button type="button" onclick="sendMessage(this)" class="btn btn-primary btn-xs"><i class="fa fa-envelope-o"></i> &nbsp;{{ CustomHelper::lang('lang-send-a-message') }}</button>
											</small>
										@endif
									@else
										<span class="login-note"><i>- {{ CustomHelper::lang('lang-login-to-interact') }} -</i></span>
									@endif
								</div>
							</div>
							<div class="col-md-6">
								<div class="top-margin-30">
									<div class="col-md-3 text-center">{{ CustomHelper::lang('lang-posts') }} <br/><span class="stat-count">{{ $user->posts->count() }}</span></div>
									<div class="col-md-3 text-center">{{ CustomHelper::lang('lang-comments') }} <br/><span class="stat-count">{{ $user->comments->count() }}</span></div>
									<div class="col-md-3 text-center">{{ CustomHelper::lang('lang-down-voted') }} <br/><span class="stat-count">{{ $user->downVotes() }}</span></div>
									<div class="col-md-3 text-center">{{ CustomHelper::lang('lang-up-voted') }} <br/><span class="stat-count">{{ $user->upVotes() }}</span></div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 padding-on-side">
						
								<div class="row top-margin-40">
									<a name="artworks"></a>
									<div class="col-md-12">
										<div class="sub-topic-label">
											<h4>{{ CustomHelper::lang('lang-art-works') }}</h4>
										</div>
									</div>
								</div>
								<div class="row works-container">
									<div class="col-md-12">
										<div class="row works">
										@if ($works->count() && ($user->freelancer || Auth::guard('admins')->check()))
											@foreach($works as $artwork)
											<div class="col-md-4 text-center">
												<div class="work-item bg-primary">
													<a href="{{ $artwork->url }}"><img class="img-responsive" src="{{ $artwork->url }}" border="0" /></a>
												</div>
												<div class="clear"></div>
												<span class="posted-hour posted-date">{{ CustomHelper::lang('lang-posted-on') }} {{ date('m/d/Y', strtotime($artwork->created_dt)) }}</span>
												<i class="fa fa-trash-o delete-photo" onclick="confirmDeleteArtwork({{ $artwork->id }})" title="Delete Artwork"></i>
											</div>
											@endforeach
										@else
											<div class="col-md-12 text-center top-margin-30">
												{{ CustomHelper::lang('lang-no-items-found') }}
											</div>
										@endif
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										@if ($works->count() && ($user->freelancer || Auth::guard('admins')->check()))
										{{ $works->fragment('artworks')->links() }}
										@endif
									</div>
								</div>						
								
								<div class="clear"></div>
								<div class="row">
									<div class="col-md-12 bottom-margin-15">&nbsp;</div>
								</div>
								<div class="row">
									<a name="writings"></a>
									<div class="col-md-12">
										<div class="sub-topic-label">
											<h4>{{ CustomHelper::lang('lang-writings') }}</h4>
										</div>
									</div>
								</div>
								@if ($articles->count() && ($user->writer || Auth::guard('admins')->check()))
									@foreach($articles as $article)
									<div class="row pad-bottom-bold bottom-margin-20 top-margin-20">
										<div class="col-md-2 text-center">
											<div class="article-thumbnail bg-primary">
												<a href="{{ url('/articles/view') }}/{{ $article->id }}" class="readmore">
													@php ( $doc = new DOMDocument() )
													@php ( $doc->loadHTML($article->content) )
													@php ( $img = $doc->getElementsByTagName('img')->item(0) )	
													
													@if (! empty($img))
														@php ($src = $img->getAttribute('src'))
														<img class="img-responsive latest-post-item" src="{{ $src }}" border="0" />
													@else
														<img class="img-responsive latest-post-item" src="{{ URL::asset('images/no-image.png') }}" border="0" />
													@endif		
												</a>
											</div>
										</div>
										<div class="col-md-10 no-pad-left adjust-bottom">
											<div class="topic-title item-title"><a href="{{ url('/articles/view') }}/{{ $article->id }}" class="readmore">{{ strtoupper($article->title) }}</a><span class="topic-hour">{{ CustomHelper::lang('lang-posted-on') }} {{ date('m/d/Y', strtotime($article->created_dt)) }}</span></div>
											<p>
												@php ($content = strip_tags($article->content))
												@if (strlen($content) > 280)
													@php ($content = substr($content, 0, 280) . '...')
												@endif
												
												{!! nl2br(e($content)) !!} <a href="{{ url('/articles/view') }}/{{ $article->id }}" class="readmore"><small>{{ CustomHelper::lang('lang-read-more') }}</small></a>
											</p>
											<div class="col-md-12 text-right">
												<div class="social-media-buttons text-primary">
													@include('pages.partials._social_media_buttons', ['article' => $article])
												</div>
											</div>
										</div>
									</div>
									@endforeach
								@else
									<div class="row pad-bottom-bold min-height-200">
										<div class="col-md-12 text-center top-margin-40">
											{{ CustomHelper::lang('lang-no-items-found') }}
										</div>
									</div>
								@endif
								<div class="row">
									<div class="col-md-12">
										@if ($articles->count() && ($user->writer || Auth::guard('admins')->check()))
										{{ $articles->fragment('writings')->links() }}
										@endif
									</div>
								</div>
						
							</div>
						</div>	
							
					</div>

				</div>
				<!-- end of content -->
			</div>
			<div class="col-md-1"></div>
		</div>
    </div>
</section>								
	
	
@endsection

