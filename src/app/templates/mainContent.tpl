<section class="mainContentSection">
	<div class="wrapper">
		<div class="asideBar">
			<h2 class="title">{{ first_title }}</h2>
			{{ #include components/category-list }}
		</div>
		<div class="contentWrap">
			{{ #each entry in items }}
				{{ #include components/productItem }}
			{{ /each }}
		</div>
		<div class="btnWrap">
			<button class="btn">Browse all Cameras</button>
		</div>
	</div>
</section>