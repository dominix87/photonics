<section class="newItemsSection">
	<div class="wrapper">
		<h2 class="title">{{ second_title }}</h2>
		<div class="contentWrap">
      {{ #each entry in newItems }}
        {{ #include components/productItem2 }}
      {{ /each }}
		</div>
	</div>
</section>