<ul class="uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l uk-margin-large-top" uk-grid> 
				<?php
				    $html = array(
				        '<div class="uk-card uk-card-default uk-border-rounded"><div class="uk-card-body">Комментарий 1</div></div>',
				        '<div class="uk-card uk-card-default uk-border-rounded"><div class="uk-card-body">Комментарий 2</div></div>',
				        '<div class="uk-card uk-card-default uk-border-rounded"><div class="uk-card-body">Комментарий 3</div></div>',
				        '<div class="uk-card uk-card-default uk-border-rounded"><div class="uk-card-body">Комментарий 4</div></div>',
				    );
				    $card  = $html[array_rand($html)];
				    $output = '<li>' . $card . '</li>';
				    echo $output;
				?>
				<?php
				    $html = array(
				        '<div class="uk-card uk-card-default uk-card-body uk-border-rounded">Комментарий 5</div>',
				        '<div class="uk-card uk-card-default uk-card-body uk-border-rounded">Комментарий 6</div>',
				        '<div class="uk-card uk-card-default uk-card-body uk-border-rounded">Комментарий 7</div>',
				        '<div class="uk-card uk-card-default uk-card-body uk-border-rounded">Комментарий 8</div>',
				    );
				    $card  = $html[array_rand($html)];
				    $output = '<li>' . $card . '</li>';
				    echo $output;
				?>
				<?php
				    $html = array(
				        '<div class="uk-card uk-card-default uk-card-body uk-border-rounded">Комментарий 9</div>',
				        '<div class="uk-card uk-card-default uk-card-body uk-border-rounded">Комментарий 10</div>',
				        '<div class="uk-card uk-card-default uk-card-body uk-border-rounded">Комментарий 11</div>',
				        '<div class="uk-card uk-card-default uk-card-body uk-border-rounded">Комментарий 12</div>',
				    );
				    $card  = $html[array_rand($html)];
				    $output = '<li>' . $card . '</li>';
				    echo $output;
				?>
				<?php
				    $html = array(
				        '<div class="uk-card uk-card-default uk-card-body uk-border-rounded">Комментарий 12</div>',
				        '<div class="uk-card uk-card-default uk-card-body uk-border-rounded">Комментарий 13</div>',
				        '<div class="uk-card uk-card-default uk-card-body uk-border-rounded">Комментарий 14</div>',
				        '<div class="uk-card uk-card-default uk-card-body uk-border-rounded">Комментарий 15</div>',
				    );
				    $card  = $html[array_rand($html)];
				    $output = '<li>' . $card . '</li>';
				    echo $output;
				?>
			</ul>
