<section class="mainContentSection">
	<div class="wrapper">
		<div class="asideBar">
			<h2 class="title">Featured</h2>
			{{ #include components/category-list }}
		</div>
		<div class="contentWrap">
			{{ #each entry in items }}
				<a class="contentItem" href="{{ entry.link }}">
					<span class="imgWrap">
						<img src="{{ entry.img }}" alt="{{ entry.imgAlt }}">
						<span class="priceEl">{{ entry.price }}<br> USD</span>
						<span class="shippingEl">Free<br> shipping</span>
					</span>
					<span class="textWrap">
						<span class="itemTitle">{{ entry.title }}</span>
						<span class="itemStock">{{ entry.stock }}</span>
					</span>
				</a>
			{{ /each }}
		</div>
		<div class="btnWrap">
			<button class="btn">Browse all Cameras</button>
		</div>
	</div>
</section>