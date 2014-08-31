<?php
$meta_title="CSS Cement - Forms";
$slug="Forms";
?>
<?php include("header.php"); ?>
				<div class="parent dt-1-1 tb-1-1 mb-1-1 collapse-top">
					<div>
						<h3>Primary Buttons</h3>

						<button class="button">Button</button>
						<button class="button sml arrow">Button</button>
						<button class="button std">Button</button>
						<button class="button std arrow">Button</button>
						<button class="button lrg">Button</button>
						<button class="button lrg arrow">Button</button>

						<h3>Secondary Buttons</h3>

						<button class="button sml secondary">Button</button>
						<button class="button sml arrow secondary">Button</button>
						<button class="button std secondary">Button</button>
						<button class="button std arrow secondary">Button</button>
						<button class="button lrg secondary">Button</button>
						<button class="button lrg arrow secondary">Button</button>

						<h3>Disabled Buttons</h3>

						<button disabled="disabled" class="button sml">Button</button>
						<button disabled="disabled" class="button sml arrow">Button</button>
						<button disabled="disabled" class="button std">Button</button>
						<button disabled="disabled" class="button std arrow">Button</button>
						<button disabled="disabled" class="button lrg">Button</button>
						<button disabled="disabled" class="button lrg arrow">Button</button>

						<h3>Links that look like buttons</h3>

						<a href="" class="button">Button</a>
						<a href="" class="button sml arrow">Button</a>
						<a href="" class="button std">Button</a>
						<a href="" class="button std arrow">Button</a>
						<a href="" class="button lrg">Button</a>
						<a href="" class="button lrg arrow">Button</a>

						<h3>Double decker buttons</h3>

						<button type="submit" class="button std-arrow double-decker">
							<span class="top-deck">Main text</span>
							<span class="bottom-deck">sub text</span>
						</button>
						<button type="submit" class="button std-arrow double-decker secondary">
							<span class="top-deck">Main text</span>
							<span class="bottom-deck">sub text</span>
						</button>
						<button type="submit" class="button std-arrow double-decker" disabled="disabled">
							<span class="top-deck">Main text</span>
							<span class="bottom-deck">sub text</span>
						</button>

						<h3>Button group</h3>
						<buttongroup>
							<button class="button std">Button</button>
							<button class="button std secondary">Button</button>
							<button class="button std secondary">Button</button>
							<button disabled=" disabled" class="button std">Button</button>
						</buttongroup>
						<buttongroup>
							<button class="button lrg">Button</button>
							<button class="button std">Button</button>
							<button class="button sml">Button</button>
						</buttongroup>

					<form class="form" action="test">
						<fieldset>
							<legend>Basic form</legend>
							<ol>
								<li>
									<label for="">Generic text:</label>
									<input id="" type="text">
								</li>
								<li>
									<label for="">Text Area:</label>
									<textarea></textarea>
								</li>
								<li>
									<label for="">Email:</label>
									<input id="" type="email">
								</li>
								<li>
									<label for="">Password:</label>
									<input id="" type="password">
								</li>
								<li>
									<label for="">Readonly:</label>
									<input id="" type="text" readonly="readonly">
								</li>
								<li>
									<label for="">File:</label>
									<input id="" type="file">
								</li>
								<li>
									<label for="">Number:</label>
									<input id="" type="number">
								</li>
								<li>
									<label for="">Range:</label>
									<input id="" type="range">
								</li>
								<li>
									<legend class="label">Legend pretending to be a label</legend>
								</li>
								<li>
									<label for="">Select menu:</label>
									<select id="">
										<optgroup label="Option heading">
										<option>Option 1</option>
										<option>Option 2</option>
										</optgroup>
										<optgroup label="Option heading 2">
										<option>Option 3</option>
										<option>Option 4</option>
										</optgroup>
										<option>Option 5</option>
										<option>Option 6</option>
										<option>Option 7</option>
										<option>Option 8</option>
									</select>
								</li>
								<li>
									<label for="">Select menu:</label>
									<select id="" multiple="multiple">
										<optgroup label="Option heading">
										<option>Option 1</option>
										<option>Option 2</option>
										</optgroup>
										<optgroup label="Option heading 2">
										<option>Option 3</option>
										<option>Option 4</option>
										</optgroup>
										<option>Option 5</option>
										<option>Option 6</option>
										<option>Option 7</option>
										<option>Option 8</option>
									</select>
								</li>
								<li>
									<fieldset>
										<input id="" type="checkbox">
										<label for="">Checkbox:</label>
										<input id="" type="checkbox">
										<label for="">Checkbox:</label>
										<input id="" type="checkbox">
										<label for="">Checkbox:</label>
										<input id="" type="checkbox">
										<label for="">Checkbox:</label>
										<input id="" type="checkbox">
										<label for="">Checkbox:</label>
									</fieldset>
								</li>
								<li>
									<fieldset>
										<input id="" type="radio">
										<label for="">Radio:</label>
										<input id="" type="radio">
										<label for="">Radio:</label>
										<input id="" type="radio">
										<label for="">Radio:</label>
										<input id="" type="radio">
										<label for="">Radio:</label>
										<input id="" type="radio">
										<label for="">Radio:</label>
										<input id="" type="radio">
										<label for="">Radio:</label>
									</fieldset>
								</li>
							</ol>
						</fieldset>
						<fieldset>
							<legend>Notes and error messages</legend>
							<ol>
								<li>
									<label for="">Short note:</label>
									<input id="" type="text">
									<span class="note">A short note about this field.</span>
								</li>
								<li>
									<label for="">Slightly longer:</label>
									<input id="" type="text">
									<span class="note">This note will wrap sooner than one above.</span>
								</li>
								<li>
									<label for="">Field with help:</label>
									<input id="" type="text">
									<span class="note"><a href="">Help</a></span>
								</li>
								<li>
									<label for="">Long note:</label>
									<input id="" type="text">
									<span class="note">When an error message or input note is too long to fit next to the input it belongs to, it automatically wraps and indents itself. It's amazing.</span>
								</li>
								<li>
									<label for="">Long note in a P tag:</label>
									<input id="" type="text">
									<p><span class="note">When an error message or input note is too long to fit next to the input it belongs to, it automatically wraps and indents itself. It's amazing.</span></p>
								</li>
							</ol>
						</fieldset>
						<fieldset>
							<legend>Errors</legend>
							<ol>
								<li>
									<label for="" class="required">Name:</label>
									<input id="" type="text" class="required error">
									<label class="error">Error message</label>
								</li>
								<li>
									<label for="">Name:</label>
									<input id="" type="text" class="error">
									<label class="error">This is a long error message because you must have really done something very seriously wrong</label>
								</li>
							</ol>
						</fieldset>
						<fieldset>
							<legend>Required fields</legend>
							<ol>
								<li>
									<label for="" class="required">Name:</label>
									<input id="" type="text">
									<span class="note">This field is required</span>
								</li>
								<li>
									<label for="">Name:</label>
									<input id="" type="text">
									<span class="note">This field is NOT required</span>
								</li>
							</ol>
						</fieldset>
						<fieldset class="inline">
							<legend>Directly set field widths.</legend>
							<ol>
								<li>
									<input id="" type="text" class="gs40">
									<input id="" type="text" class="gs100">
									<input id="" type="text" class="gs160">
									<input id="" type="text" class="gs220">
									<input id="" type="text" class="gs280">
									<input id="" type="text" class="gs340">
									<input id="" type="text" class="gs400">
									<input id="" type="text" class="gs460">
									<input id="" type="text" class="gs520">
									<input id="" type="text" class="gs580">
									<input id="" type="text" class="gs640">
									<input id="" type="text" class="gs700">
								</li>
							</ol>
						</fieldset>
						<fieldset>
							<legend>Prefixes and separators</legend>
							<ol>
								<li>
									<label for="">Prefix:</label>
									<span class="prefix">AU$</span>
									<input id="" type="text">
								</li>
								<li>
									<label for="">Suffix:</label>
									<input id="" type="text">
									<span class="suffix">AU$</span>
								</li>
								<li>
									<label for="">Date:</label>
									<input id="" type="text" class="gs40">
									<span class="separator">/</span>
									<input id="" type="text" class="gs40">
									<span class="separator">/</span>
									<input id="" type="text" class="gs40">
								</li>
							</ol>
						</fieldset>
						<fieldset>
							<legend>Labels</legend>
							<ol>
								<li>
									<label for="">Standard label:</label>
									<input id="" type="text">
								 </li>
								<li>
									<label for="">Long labels auto-wrap, so that inputs still line up:</label>
									<input id="" type="text">
								</li>
							</ol>
						</fieldset>
						<fieldset>
							<legend>Labelling a whole paragraph</legend>
							<ol>
								<li>
									<p>
										<label for="">Sometimes you want a text area with a paragraph of information relating to it. It can still be a label. Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</label>
									</p>
									<textarea class="gs700"></textarea>
								</li>
							</ol>
						</fieldset>
						<fieldset class="vertical">
							<legend>Labelling a whole paragraph</legend>
							<ol>
								<li>
									<p>
										<label for="">Sometimes you want a text area with a paragraph of information relating to it. It can still be a label. Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</label>
									</p>
									<textarea class="gs700"></textarea>
								</li>
							</ol>
						</fieldset>
						<fieldset class="vertical">
							<legend>Vertical</legend>
							<ol>
								<li>
									<label for="">Name:</label>
									<input id="" type="text">
									<span class="note">This is a note relating to this field</span> </li>
								<li>
									<label for="">Name:</label>
									<input id="" type="text">
									<span class="note">This is a note relating to this field</span> </li>
								<li>
									<label for="">This layout has more space for longer labels as the input field is on the next row though you might consider putting a paragraph tag around the label instead see below:</label>
									<input id="" type="text">
									<span class="note">This is a note relating to this field</span> </li>
							</ol>
						</fieldset>
						<fieldset class="inline">
							<legend>Inline forms</legend>
							<ol>
								<li>
									<label for="">Name:</label>
									<input id="" type="text">
								</li>
								<li>
									<label for="">Name:</label>
									<input id="" type="text">
								</li>
								<li>
									<label for="">Longer labels have more space automatically:</label>
									<input id="" type="text">
								</li>
								<li>
									<fieldset>
										<input id="" type="checkbox">
										<label for="">Checkbox:</label>
										<input id="" type="checkbox">
										<label for="">Checkbox:</label>
										<input id="" type="checkbox">
										<label for="">Checkbox:</label>
										<input id="" type="checkbox">
										<label for="">Checkbox:</label>
										<input id="" type="checkbox">
										<label for="">Checkbox:</label>
									</fieldset>
								</li>
								<li>
									<fieldset>
										<input id="" type="radio">
										<label for="">Checkbox:</label>
										<input id="" type="radio">
										<label for="">Checkbox:</label>
										<input id="" type="radio">
										<label for="">Checkbox:</label>
										<input id="" type="radio">
										<label for="">Checkbox:</label>
										<input id="" type="radio">
										<label for="">Checkbox:</label>
										<input id="" type="radio">
										<label for="">Checkbox:</label>
									</fieldset>
								</li>
							</ol>
						</fieldset>
						<fieldset class="vertical">
							<legend>Vertical forms</legend>
							<ol>
								<li>
									<label for="">Name:</label>
									<input id="" type="text">
								</li>
								<li>
									<label for="">Name:</label>
									<input id="" type="text">
								</li>
								<li>
									<label for="">Longer labels have more space automatically:</label>
									<input id="" type="text">
								</li>
								<li>
									<fieldset>
										<input id="" type="checkbox">
										<label for="">Checkbox:</label>
										<input id="" type="checkbox">
										<label for="">Checkbox:</label>
										<input id="" type="checkbox">
										<label for="">Checkbox:</label>
										<input id="" type="checkbox">
										<label for="">Checkbox:</label>
										<input id="" type="checkbox">
										<label for="">Checkbox:</label>
									</fieldset>
								</li>
								<li>
									<fieldset>
										<input id="" type="radio">
										<label for="">Checkbox:</label>
										<input id="" type="radio">
										<label for="">Checkbox:</label>
										<input id="" type="radio">
										<label for="">Checkbox:</label>
										<input id="" type="radio">
										<label for="">Checkbox:</label>
										<input id="" type="radio">
										<label for="">Checkbox:</label>
										<input id="" type="radio">
										<label for="">Checkbox:</label>
									</fieldset>
								</li>
							</ol>
						</fieldset>
						
						<fieldset class="inline-vertical">
							<legend>Inline-vertical forms</legend>
							<ol>
								<li>
									<label for="">Name:</label>
									<input id="" type="text">
								</li>
								<li>
									<label for="">Name:</label>
									<input id="" type="text">
								</li>
								<li>
									<label for="">Longer labels have more space automatically:</label>
									<input id="" type="text">
								</li>
											<li>
												<input id="" type="checkbox">
												<label for="">Checkbox:</label>
											</li>
											<li>
												<input id="" type="checkbox">
												<label for="">Checkbox:</label>
											</li>
											<li>
												<input id="" type="checkbox">
												<label for="">Checkbox:</label>
											</li>
											<li>
												<input id="" type="checkbox">
												<label for="">Checkbox:</label>
											</li>
											<li>
												<input id="" type="checkbox">
												<label for="">Checkbox:</label>
											</li>
											<li>
												<input id="" type="radio">
												<label for="">Checkbox:</label>
											</li>
											<li>
												<input id="" type="radio">
												<label for="">Checkbox:</label>
											</li>
											<li>
												<input id="" type="radio">
												<label for="">Checkbox:</label>
											</li>
											<li>
												<input id="" type="radio">
												<label for="">Checkbox:</label>
											</li>
											<li>
												<input id="" type="radio">
												<label for="">Checkbox:</label>
											</li>
											<li>
												<input id="" type="radio">
												<label for="">Checkbox:</label>
											</li>
							</ol>
						</fieldset>
					</form>
					<form class="form" action="test">
						<fieldset class="bordered">
							<legend>Bordered form</legend>
							<ol>
								<li>
									<label for="">Generic text:</label>
									<input id="" type="text">
								</li>
								<li>
									<label for="">Text Area:</label>
									<textarea></textarea>
								</li>
								<li class="buttongroup">
									<input id="" type="button" value="button" class="button">
									<input id="" type="button" value="button" class="button secondary">
									<input id="" type="button" value="button" class="button secondary">
									<span class="note">A Gaggle of buttons</span>
								</li>
							</ol>
						</fieldset>
					</form>
					<form class="form" action="test">
						<fieldset class="hover">
							<legend>Hoverable form</legend>
							<ol>
								<li>
									<label for="">Generic text:</label>
									<input id="" type="text">
								</li>
								<li>
									<label for="">Text Area:</label>
									<textarea></textarea>
								</li>
								<li class="buttongroup">
									<input id="" type="button" value="button" class="button">
									<input id="" type="button" value="button" class="button secondary">
									<input id="" type="button" value="button" class="button secondary">
									<span class="note">A Gaggle of buttons</span>
								</li>
							</ol>
						</fieldset>
					</form>
					<form class="form" action="test">
						<fieldset class="dividers">
							<legend>Form with Dividers</legend>
							<ol>
								<li>
									<label for="">Generic text:</label>
									<input id="" type="text">
								</li>
								<li>
									<label for="">Text Area:</label>
									<textarea></textarea>
								</li>
								<li class="buttongroup">
									<input id="" type="button" value="button" class="button">
									<input id="" type="button" value="button" class="button secondary">
									<input id="" type="button" value="button" class="button secondary">
									<span class="note">A Gaggle of buttons</span>
								</li>
							</ol>
						</fieldset>
					</form>
					<form class="form" action="test">
						<fieldset class="inline hidden-labels">
							<legend>labels inside fields</legend>
							<ol>
								<li>
									<label for="">Title:</label>
									<input id="" type="text" class="gs40" placeholder="Title:">
								</li>
								<li>
									<label for="">First Name:</label>
									<input id="" type="text" class="gs160" placeholder="First Name:">
								</li>
								<li>
									<label for="">Last Name:</label>
									<input id="" type="text" class="gs160" placeholder="Last Name:">
								</li>
								<li>
									<label for="">Message:</label>
									<textarea class="gs400" placeholder="Message:"></textarea>
								</li>
								<li class="buttongroup">
									<input id="" type="button" value="button" class="button">
									<input id="" type="button" value="button" class="button secondary">
									<input id="" type="button" value="button" class="button secondary">
									<span class="note">A Gaggle of buttons</span>
								</li>
							</ol>
						</fieldset>
					</form>
					</div>
				</div>
<?php include("footer.php"); ?>