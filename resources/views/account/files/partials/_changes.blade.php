<article class="message is-primary">
	<div class="message-header">
		<p>We are currentrly reviewing the following changes</p>
	</div>	

	<div class="message-body">
		<div class="content">

			@if($approval->title !== $file->title)
				<strong>Title</strong>
				<p>{{$approval->title}}</p>
			@endif


			@if($approval->overview_short !== $file->overview_short)
				<strong>Short description</strong>
				<p>{{$approval->overview_short}}</p>
			@endif

			@if($approval->overview !== $file->overview)
				<strong>Description</strong>
				<p>{{$approval->overview}}</p>
			@endif
		</div>
	</div>
</article>

