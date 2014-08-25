<?php include("header.php"); ?>
<style type="text/css">
	.outer-panel {background-color: #f1f1f1;}
	.panel {background-color: #ddd;}
	.inner-panel {background-color: #bbb;}
</style>
					<div class="parent dt-1-1 tb-1-1 mb-1-1">
						<div class="highlight">
							<h1>The grid system</h1>
							<p>The grid system is based on fractions and allows from 1 to 20 columns of regular or irregular sizes.</p>
							<p>The number of columns can be changed at any time, by setting the class name.</p>
							<p>The grid has 3 break point sizes, these are roughly desktop, tablet and mobile.</p>
							<p>The grid's margins and padding are configurable at the same 3 brakpoints s above.</p>
							<p>The grid elements in this page have an additional set of classes called, panel, inner-panel and outer-panel. The are to set the background colours of the panels. You can skip these if you are creating a simple layout or one that doesn't involve recolouring grid elements.</p> 
						</div>
					</div>
					<div class="parent dt-1-1 tb-1-1 mb-1-1">
						<div>
							<h2>Examples</h2>
							<h3>Set the size for all of the columns within the parent element.</h3>
							<p>This works well for ecommerce sites as yu only have to set the size of the grid once rather than for every child element.</p>
							<p>You can have as many rows as you want within each grid container so there's no need for counting in order to add wrappers around each row.</p>
<code><xmp><div class="parent dt-1-4 tb-1-10 mb-1-1">
	<div>&nbsp;</div>
	<div>&nbsp;</div>
	<div>&nbsp;</div>
	<div>&nbsp;</div>
</div>
</xmp></code>
						</div>
					</div>
					<div class="parent dt-1-1 tb-1-20 mb-1-1">
						<div class="panel">&nbsp;</div>
					</div>
					<div class="parent dt-1-2 tb-1-16 mb-1-2">
						<div class="panel">&nbsp;</div>
						<div class="panel">&nbsp;</div>
					</div>
					<div class="parent dt-1-3 tb-1-12 mb-1-3">
						<div class="panel">&nbsp;</div>
						<div class="panel">&nbsp;</div>
						<div class="panel">&nbsp;</div>
					</div>
					<div class="parent dt-1-4 tb-1-10 mb-1-1">
						<div class="panel">&nbsp;</div>
						<div class="panel">&nbsp;</div>
						<div class="panel">&nbsp;</div>
					</div>
					<div class="parent dt-1-5 tb-1-8 mb-1-3">
						<div class="panel">&nbsp;</div>
						<div class="panel">&nbsp;</div>
						<div class="panel">&nbsp;</div>
					</div>
					<div class="parent dt-1-6 tb-1-6 mb-1-1">
						<div class="panel">&nbsp;</div>
						<div class="panel">&nbsp;</div>
						<div class="panel">&nbsp;</div>
					</div>
					<div class="parent dt-1-8 tb-1-5 mb-1-3">
						<div class="panel">&nbsp;</div>
						<div class="panel">&nbsp;</div>
						<div class="panel">&nbsp;</div>
					</div>
					<div class="parent dt-1-10 tb-1-4 mb-1-1">
						<div class="panel">&nbsp;</div>
						<div class="panel">&nbsp;</div>
						<div class="panel">&nbsp;</div>
					</div>
					<div class="parent dt-1-12 tb-1-3 mb-1-3">
						<div class="panel">&nbsp;</div>
						<div class="panel">&nbsp;</div>
						<div class="panel">&nbsp;</div>
					</div>
					<div class="parent dt-1-16 tb-1-2 mb-1-1">
						<div class="panel">&nbsp;</div>
						<div class="panel">&nbsp;</div>
					</div>
					<div class="parent dt-1-20 tb-1-1 mb-1-3">
						<div class="panel">&nbsp;</div>
					</div>

					<div class="parent dt-1-1 tb-1-1 mb-1-1">
						<div>
						<h3>Overide the grid size for an individual element.</h3>
						<p>Whether or not you set the grid size at the parent level, you can also set it individually for each child.</p>
<code><xmp><div class="parent dt-1-2 tb-1-2 mb-1-2">
	<div class="panel">&nbsp;</div>
	<div class="panel">
		<div class="parent dt-1-2 tb-1-2 mb-1-2">
			<div class="inner-panel">&nbsp;</div>
			<div class="inner-panel">&nbsp;</div>
		</div>
	</div>
</div>
</xmp></code>
						</div>
					</div>
					<div class="parent dt-1-2 tb-1-1 mb-1-1">
						<div class="dt-1-4 tb-1-4 mb-1-4 panel">&nbsp;</div>
						<div class="dt-1-4 tb-1-4 mb-1-4 panel">&nbsp;</div>
						<div class="dt-1-2 tb-1-2 mb-1-2 panel ">&nbsp;</div>
					</div>
					<div class="parent dt-1-9 tb-1-1 mb-1-1">
						<div class="dt-1-3 tb-1-3 mb-1-3 panel">&nbsp;</div>
						<div class="dt-2-3 tb-2-3 mb-2-3 panel">&nbsp;</div>
					</div>
					<div class="parent">
						<div class="dt-1-4 tb-1-4 mb-1-4 panel">&nbsp;</div>
						<div class="dt-1-2 tb-1-2 mb-1-2 panel">&nbsp;</div>
						<div class="dt-1-4 tb-1-4 mb-1-4 panel">&nbsp;</div>
					</div>
					<div class="parent">
						<div class="dt-1-3 tb-1-3 mb-1-3 panel">&nbsp;</div>
						<div class="dt-1-3 tb-1-3 mb-1-3 panel">&nbsp;</div>
						<div class="dt-1-6 tb-1-6 mb-1-6 panel">&nbsp;</div>
						<div class="dt-1-6 tb-1-6 mb-1-6 panel">&nbsp;</div>
					</div>
					<div class="parent">
						<div class="dt-1-2 tb-1-2 mb-1-2 panel">&nbsp;</div>
						<div class="dt-1-3 tb-1-3 mb-1-3 panel">&nbsp;</div>
						<div class="dt-1-6 tb-1-6 mb-1-6 panel">&nbsp;</div>
					</div>
					<div class="parent">
						<div class="dt-1-10 tb-1-10 mb-1-10 panel">&nbsp;</div>
						<div class="dt-9-10 tb-9-10 mb-9-10 panel">&nbsp;</div>
					</div>


					<div class="parent dt-1-1 tb-1-1 mb-1-1">
						<div>
							<h2> Nesting grids</h2>
							<p>It can be very useful to hae grids nested within grids. It also helps if you can choose whether these should line up with their parent containers or if they should create their own level.</p>
							<h3>Invisibly nested grid, when you want your inner grid to line up with the outer grid.</h3>
<code><xmp><div class="parent dt-1-2 tb-1-2 mb-1-2 nested">
	<div>&nbsp;</div>
	<div>
		<div class="parent dt-1-2 tb-1-2 mb-1-2">
			<div>&nbsp;</div>
			<div>&nbsp;</div>
		</div>
	</div>
</div>
</xmp></code>

						</div>
					</div>

					<div class="parent dt-1-1 tb-1-1 mb-1-1">
						<div class="panel">&nbsp;</div>
					</div>
					<div class="parent dt-1-2 tb-1-2 mb-1-2">
						<div class="panel">&nbsp;</div>
						<div class="panel">&nbsp;</div>
					</div>
					<div class="parent dt-1-2 tb-1-2 mb-1-2 nested">
						<div class="panel">&nbsp;</div>
						<div>
							<div class="parent dt-1-2 tb-1-2 mb-1-2 nested">
								<div class="panel">&nbsp;</div>
								<div class="panel">&nbsp;</div>
							</div>
						</div>
					</div>


					<div class="parent dt-1-1 tb-1-1 mb-1-1">
						<div>
							<h3>Visibly nested grid, when you want your inner grid to be wrapped with a margin.</h3>
<code><xmp><div class="parent dt-1-2 tb-1-2 mb-1-2">
	<div>&nbsp;</div>
	<div>
		<div class="parent dt-1-2 tb-1-2 mb-1-2">
			<div>&nbsp;</div>
			<div>&nbsp;</div>
		</div>
	</div>
</div>
</xmp></code>

						</div>
					</div>
					<div class="parent dt-1-1 tb-1-1 mb-1-1">
						<div class="outer-panel">
							<div class="parent dt-1-1 tb-1-1 mb-1-1">
								<div class="panel">&nbsp;</div>
							</div>
							<div class="parent dt-1-2 tb-1-2 mb-1-2">
								<div class="panel">&nbsp;</div>
								<div class="panel">&nbsp;</div>
							</div>
							<div class="parent dt-1-2 tb-1-2 mb-1-2">
								<div class="panel">&nbsp;</div>
								<div class="panel">
									<div class="parent dt-1-2 tb-1-2 mb-1-2">
										<div class="inner-panel">&nbsp;</div>
										<div class="inner-panel">&nbsp;</div>
									</div>
								</div>
							</div>
						</div>
					</div>


				</div>
			</div>



<?php include("footer.php"); ?>