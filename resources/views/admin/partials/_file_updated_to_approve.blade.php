@component('files.partials._file', compact('file'))

	@slot('links')
				<!-- AZIMKHON CUSTOMISE FILES HERE -->
		<div class="level">
			
			<div class="level-left">
						
				<p class="level-item">
					<a href="#">Preview File</a>
				</p>

				<p class="level-item">
					<a href="#" >Approve</a>
				</p>

				<p class="level-item">
					<a href="#">Reject</a>
				</p>
			</div>
			</div>

	@endslot

@endcomponent