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
						<div class="buttongroup">
							<button class="button std">Button</button>
							<button class="button std secondary">Button</button>
							<button class="button std secondary">Button</button>
							<button disabled="disabled" class="button std">Button</button>
						</div>
						<div class="buttongroup">
							<button class="button lrg">Button</button>
							<button class="button std">Button</button>
							<button class="button sml">Button</button>
						</div>

					<form class="form" action="test">
						<fieldset>
							<legend>Basic form</legend>
							<ol>
								<li>
									<label for="id-1">Generic text:</label>
									<input id="id-1" type="text" />
								</li>
								<li>
									<label for="id-2">Text Area:</label>
									<textarea id="id-2"></textarea>
								</li>
								<li>
									<label for="id-3">Email:</label>
									<input id="id-3" type="email" />
								</li>
								<li>
									<label for="id-4">Password:</label>
									<input id="id-4" type="password" />
								</li>
								<li>
									<label for="id-5">Readonly:</label>
									<input id="id-5" type="text" readonly="readonly" />
								</li>
								<li>
									<label for="id-6">File:</label>
									<input id="id-6" type="file" />
								</li>
								<li>
									<label for="id-7">Number:</label>
									<input id="id-7" type="number" />
								</li>
								<li>
									<label for="id-8">Range:</label>
									<input id="id-8" type="range" />
								</li>
								<li>
									<legend class="label">Legend pretending to be a label</legend>
								</li>
								<li>
									<label for="id-9">Select menu:</label>
									<select id="id-9">
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
									<label for="id-10">Select menu:</label>
									<select id="id-10" multiple="multiple">
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
										<ol>
											<li><input id="id-11" type="checkbox" />
												<label for="id-11">Checkbox:</label>
											</li>
											<li><input id="id-12" type="checkbox" />
												<label for="id-12">Checkbox:</label>
											</li>
											<li><input id="id-13" type="checkbox" />
												<label for="id-13">Checkbox:</label>
											</li>
											<li><input id="id-14" type="checkbox" />
												<label for="id-14">Checkbox:</label>
											</li>
											<li><input id="id-15" type="checkbox" />
												<label for="id-15">Checkbox:</label>
											</li>
											</ol>
									</fieldset>
								</li>
								<li>
									<fieldset>
										<ol>
											<li><input id="id-16" type="radio" />
												<label for="id-16">Radio:</label>
											</li>
											<li><input id="id-17" type="radio" />
												<label for="id-17">Radio:</label>
											</li>
											<li><input id="id-18" type="radio" />
												<label for="id-18">Radio:</label>
											</li>
											<li><input id="id-19" type="radio" />
												<label for="id-19">Radio:</label>
											</li>
											<li><input id="id-20" type="radio" />
												<label for="id-20">Radio:</label>
											</li>
											<li><input id="id-21" type="radio" />
												<label for="id-21">Radio:</label>
											</li>
										</ol>
									</fieldset>
								</li>
							</ol>
						</fieldset>
						<fieldset>
							<legend>Flexible notes and error messages</legend>
							<ol>
								<li>
									<label for="id-22">Short note:</label>
									<input id="id-22" type="text" />
									<span class="note">A short note about this field.</span>
								</li>
								<li>
									<label for="id-23">Slightly longer:</label>
									<input id="id-23" type="text" />
									<span class="note">This note will wrap sooner than one above.</span>
								</li>
								<li>
									<label for="id-24">Field with help:</label>
									<input id="id-24" type="text" />
									<span class="note"><a href="">Help</a></span>
								</li>
								<li>
									<label for="id-25">Long note:</label>
									<input id="id-25" type="text" />
									<span class="note">When an error message or input note is too long to fit next to the input it belongs to, it automatically wraps and indents itself. It's amazing.</span>
								</li>
								<li>
									<label for="id-26">Long note in a P tag:</label>
									<input id="id-26" type="text" />
									<p><span class="note">When an error message or input note is too long to fit next to the input it belongs to, it automatically wraps and indents itself. It's amazing.</span></p>
								</li>
							</ol>
						</fieldset>
						<fieldset>
							<legend>Errors</legend>
							<ol>
								<li>
									<label for="id-27" class="required">Name:</label>
									<input id="id-27" type="text" class="required error" />
									<label class="error">Error message</label>
								</li>
								<li>
									<label for="id-28">Name:</label>
									<input id="id-28" type="text" class="error" />
									<label class="error">This is a long error message because you must have really done something very seriously wrong</label>
								</li>
							</ol>
						</fieldset>
						<fieldset>
							<legend>Dropped notes and error messages</legend>
							<p>If you always want your notes to drop below inputs instead of wrapping only when needed then you can add a class of .dropped.</p>
							<ol>
								<li>
									<label for="id-22">Short note:</label>
									<input id="id-22" type="text" />
									<span class="note dropped">A short note about this field.</span>
								</li>
								<li>
									<label for="id-23">Slightly longer:</label>
									<input id="id-23" type="text" />
									<span class="note dropped">TSlightly longer note.</span>
								</li>
								<li>
									<label for="id-24">Field with help:</label>
									<input id="id-24" type="text" />
									<span class="note dropped"><a href="">Help</a></span>
								</li>
								<li>
									<label for="id-25">Long note:</label>
									<input id="id-25" type="text" />
									<span class="note dropped">Really long note really long note really long note really long note really long note really long note really long note really long note.</span>
								</li>
								<li>
									<label for="id-26">Long note in a P tag:</label>
									<input id="id-26" type="text" />
									<p><span class="note dropped">Really long note really long note really long note really long note really long note really long note really long note really long note.</span></p>
								</li>
							</ol>
						</fieldset>
						<fieldset>
							<legend>Errors</legend>
							<ol>
								<li>
									<label for="id-27" class="required">Name:</label>
									<input id="id-27" type="text" class="required error" />
									<label class="error dropped">Error message</label>
								</li>
								<li>
									<label for="id-28">Name:</label>
									<input id="id-28" type="text" class="error" />
									<label class="error dropped">This is a long error message because you must have really done something very seriously wrong</label>
								</li>
							</ol>
						</fieldset>
						<fieldset>
							<legend>Required fields</legend>
							<ol>
								<li>
									<label for="id-29" class="required">Name:</label>
									<input id="id-29" type="text" />
									<span class="note">This field is required</span>
								</li>
								<li>
									<label for="id-30">Name:</label>
									<input id="id-30" type="text" />
									<span class="note">This field is NOT required</span>
								</li>
							</ol>
						</fieldset>
						<fieldset class="inline">
							<legend>Directly set field widths (in progress).</legend>
							<ol>
								<li>
									<input id="id-31" type="text" class="dt-1-1" />
									<input id="id-32" type="text" class="dt-1-2" />
									<input id="id-33" type="text" class="dt-1-3" />
									<input id="id-34" type="text" class="dt-1-4" />
									<input id="id-35" type="text" class="dt-1-5" />
									<input id="id-36" type="text" class="dt-1-6" />
									<input id="id-37" type="text" class="dt-1-8" />
									<input id="id-38" type="text" class="dt-1-10" />
									<input id="id-39" type="text" class="dt-1-12" />
									<input id="id-40" type="text" class="dt-1-16" />
									<input id="id-41" type="text" class="dt-1-20" />
								</li>
							</ol>
						</fieldset>
						<fieldset>
							<legend>Prefixes and separators</legend>
							<ol>
								<li>
									<label for="id-43">Prefix:</label>
									<span class="prefix">AU$</span>
									<input id="id-43" type="text" />
								</li>
								<li>
									<label for="id-44">Suffix:</label>
									<input id="id-44" type="text" />
									<span class="suffix">AU$</span>
								</li>
								<li>
									<label for="id-45">Date:</label>
									<input id="id-45" type="text" class="dt-1-12" />
									<span class="separator">/</span>
									<input id="id-46" type="text" class="dt-1-12" />
									<span class="separator">/</span>
									<input id="id-47" type="text" class="dt-1-12" />
								</li>
							</ol>
						</fieldset>
						<fieldset>
							<legend>Labels</legend>
							<ol>
								<li>
									<label for="id-48">Standard label:</label>
									<input id="id-48" type="text" />
								 </li>
								<li>
									<label for="id-49">Long labels auto-wrap, so that inputs still line up:</label>
									<input id="id-49" type="text" />
								</li>
							</ol>
						</fieldset>
						<fieldset>
							<legend>Labelling a whole paragraph</legend>
							<ol>
								<li>
									<p>
										<label for="id-50">Sometimes you want a text area with a paragraph of information relating to it. It can still be a label. Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</label>
									</p>
									<textarea id="id-50"></textarea>
								</li>
							</ol>
						</fieldset>
						<fieldset class="vertical">
							<legend>Labelling a whole paragraph</legend>
							<ol>
								<li>
									<p>
										<label for="id-51">Sometimes you want a text area with a paragraph of information relating to it. It can still be a label. Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</label>
									</p>
									<textarea id="id-51"></textarea>
								</li>
							</ol>
						</fieldset>
						<fieldset class="vertical">
							<legend>Vertical</legend>
							<ol>
								<li>
									<label for="id-52">Name:</label>
									<input id="id-52" type="text" />
									<span class="note">This is a note relating to this field</span> </li>
								<li>
									<label for="id-53">Name:</label>
									<input id="id-53" type="text" />
									<span class="note">This is a note relating to this field</span> </li>
								<li>
									<label for="id-54">This layout has more space for longer labels as the input field is on the next row though you might consider putting a paragraph tag around the label instead see below:</label>
									<input id="id-54" type="text" />
									<span class="note">This is a note relating to this field</span> </li>
							</ol>
						</fieldset>
						<fieldset class="inline">
							<legend>Inline forms</legend>
							<ol>
								<li>
									<label for="id-55">Name:</label>
									<input id="id-55" type="text" />
								</li>
								<li>
									<label for="id-56">Name:</label>
									<input id="id-56" type="text" />
								</li>
								<li>
									<label for="id-57">Longer labels have more space automatically:</label>
									<input id="id-57" type="text" />
								</li>
								<li>
									<fieldset>
										<input id="id-58" type="checkbox" />
										<label for="id-58">Checkbox:</label>
										<input id="id-59" type="checkbox" />
										<label for="id-59">Checkbox:</label>
										<input id="id-60" type="checkbox" />
										<label for="id-60">Checkbox:</label>
										<input id="id-61" type="checkbox" />
										<label for="id-61">Checkbox:</label>
										<input id="id-62" type="checkbox" />
										<label for="id-62">Checkbox:</label>
									</fieldset>
								</li>
								<li>
									<fieldset>
										<input id="id-63" type="radio" />
										<label for="id-63">Checkbox:</label>
										<input id="id-64" type="radio" />
										<label for="id-64">Checkbox:</label>
										<input id="id-65" type="radio" />
										<label for="id-65">Checkbox:</label>
										<input id="id-66" type="radio" />
										<label for="id-66">Checkbox:</label>
										<input id="id-67" type="radio" />
										<label for="id-67">Checkbox:</label>
										<input id="id-68" type="radio" />
										<label for="id-68">Checkbox:</label>
									</fieldset>
								</li>
							</ol>
						</fieldset>
						<fieldset class="vertical">
							<legend>Vertical forms</legend>
							<ol>
								<li>
									<label for="id-69">Name:</label>
									<input id="id-69" type="text" />
								</li>
								<li>
									<label for="id-70">Name:</label>
									<input id="id-70" type="text" />
								</li>
								<li>
									<label for="id-71">Longer labels have more space automatically:</label>
									<input id="id-71" type="text" />
								</li>
								<li>
									<fieldset>
										<input id="id-72" type="checkbox" />
										<label for="id-72">Checkbox:</label>
										<input id="id-73" type="checkbox" />
										<label for="id-73">Checkbox:</label>
										<input id="id-74" type="checkbox" />
										<label for="id-74">Checkbox:</label>
										<input id="id-75" type="checkbox" />
										<label for="id-75">Checkbox:</label>
										<input id="id-76" type="checkbox" />
										<label for="id-76">Checkbox:</label>
									</fieldset>
								</li>
								<li>
									<fieldset>
										<input id="id-77" type="radio" />
										<label for="id-77">Checkbox:</label>
										<input id="id-78" type="radio" />
										<label for="id-78">Checkbox:</label>
										<input id="id-79" type="radio" />
										<label for="id-79">Checkbox:</label>
										<input id="id-80" type="radio" />
										<label for="id-80">Checkbox:</label>
										<input id="id-81" type="radio" />
										<label for="id-81">Checkbox:</label>
										<input id="id-82" type="radio" />
										<label for="id-82">Checkbox:</label>
									</fieldset>
								</li>
							</ol>
						</fieldset>

						<fieldset class="inline-vertical">
							<legend>Inline-vertical forms</legend>
							<ol>
								<li>
									<label for="id-83">Name:</label>
									<input id="id-83" type="text" />
								</li>
								<li>
									<label for="id-84">Name:</label>
									<input id="id-84" type="text" />
								</li>
								<li>
									<label for="id-85">Longer labels have more space automatically:</label>
									<input id="id-85" type="text" />
								</li>
											<li>
												<input id="id-86" type="checkbox" />
												<label for="id-86">Checkbox:</label>
											</li>
											<li>
												<input id="id-87" type="checkbox" />
												<label for="id-87">Checkbox:</label>
											</li>
											<li>
												<input id="id-88" type="checkbox" />
												<label for="id-88">Checkbox:</label>
											</li>
											<li>
												<input id="id-89" type="checkbox" />
												<label for="id-89">Checkbox:</label>
											</li>
											<li>
												<input id="id-90" type="checkbox" />
												<label for="id-90">Checkbox:</label>
											</li>
											<li>
												<input id="id-91" type="radio" />
												<label for="id-91">Checkbox:</label>
											</li>
											<li>
												<input id="id-92" type="radio" />
												<label for="id-92">Checkbox:</label>
											</li>
											<li>
												<input id="id-93" type="radio" />
												<label for="id-93">Checkbox:</label>
											</li>
											<li>
												<input id="id-94" type="radio" />
												<label for="id-94">Checkbox:</label>
											</li>
											<li>
												<input id="id-95" type="radio" />
												<label for="id-95">Checkbox:</label>
											</li>
											<li>
												<input id="id-96" type="radio" />
												<label for="id-96">Checkbox:</label>
											</li>
							</ol>
						</fieldset>
					</form>
					<form class="form" action="test">
						<fieldset class="bordered">
							<legend>Bordered form</legend>
							<ol>
								<li>
									<label for="id-97">Generic text:</label>
									<input id="id-97" type="text" />
								</li>
								<li>
									<label for="id-98">Text Area:</label>
									<textarea id="id-98"></textarea>
								</li>
								<li class="buttongroup">
									<input type="button" value="button" class="button" />
									<input type="button" value="button" class="button secondary" />
									<input type="button" value="button" class="button secondary" />
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
									<label for="id-100">Generic text:</label>
									<input id="id-100" type="text" />
								</li>
								<li>
									<label for="id-101">Text Area:</label>
									<textarea id="id-101"></textarea>
								</li>
								<li class="buttongroup">
									<input type="button" value="button" class="button" />
									<input type="button" value="button" class="button secondary" />
									<input type="button" value="button" class="button secondary" />
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
									<label for="id-102">Generic text:</label>
									<input id="id-102" type="text" />
								</li>
								<li>
									<label for="id-1822">Text Area:</label>
									<textarea id="id-1822"></textarea>
								</li>
								<li class="buttongroup">
									<input type="button" value="button" class="button" />
									<input type="button" value="button" class="button secondary" />
									<input type="button" value="button" class="button secondary" />
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
									<label for="id-103">Title:</label>
									<input id="id-103" type="text" placeholder="Title:" />
								</li>
								<li>
									<label for="id-104">First Name:</label>
									<input id="id-104" type="text" placeholder="First Name:" />
								</li>
								<li>
									<label for="id-105">Last Name:</label>
									<input id="id-105" type="text" placeholder="Last Name:" />
								</li>
								<li>
									<label for="id-106">Message:</label>
									<textarea placeholder="Message:" id="id-106"></textarea>
								</li>
								<li class="buttongroup">
									<input type="button" value="button" class="button" />
									<input type="button" value="button" class="button secondary" />
									<input type="button" value="button" class="button secondary" />
									<span class="note">A Gaggle of buttons</span>
								</li>
							</ol>
						</fieldset>
					</form>
					</div>
				</div>
<?php include("footer.php"); ?>