<div class="partnersSection">
	<div class="wrapper">
		{{ #each item in partners }}
			<div class="imgWrap">
				<img src="{{ item.image }}" alt="{{ item.imgalt }}">
			</div>
		{{ /each }}
	</div>
</div>