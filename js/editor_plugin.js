(function($, document, window) {

	var root = window.localStorage.getItem("rootpath");
	
    tinymce.create(
		'tinymce.plugins.RankingButtons',
		{//プラグイン関数名

			init : function(ed, url){
				
				var t = this;
				t.editor = ed;
				
				ed.addButton('Columnbutton', {
					type: 'menubutton',
					title : 'ショートコード',
					text : 'ショートコード',
					menu: [
						{
						text: 'ボックス',
							menu: [
								{
								text: 'ボックス１６',
									onclick: function() {
										ed.insertContent('[box01 title="ここにタイトルを入力"]ここに本文を入力[/box01]');
									}
								},{
								text: 'ボックス１７',
									onclick: function() {
										ed.insertContent('[box02 title="ここにタイトルを入力"]ここに本文を入力[/box02]');
									}
								},{
								text: 'ボックス１８',
									onclick: function() {
										ed.insertContent('[box03 title="ここにタイトルを入力"]ここに本文を入力[/box03]');
									}
								},{
								text: 'ボックス１９',
									onclick: function() {
										ed.insertContent('[box04 title="ここにタイトルを入力"]ここに本文を入力[/box04]');
									}
								},{
								text: 'ボックス２０',
									onclick: function() {
										ed.insertContent('[box05 title="ここにタイトルを入力"]ここに本文を入力[/box05]');
									}
								},{
								text: 'ボックス２１',
									onclick: function() {
										ed.insertContent('[box06 title="あわせて読みたい"]ここに本文を入力[/box06]');
									}
								}
							],
						},{
						text: 'アイコンボックス',
							menu: [
								{
								text: '注意',
									onclick: function() {
										ed.insertContent('[jin-iconbox01]ここに本文を入力[/jin-iconbox01]');
									}
								},{
								text: '星',
									onclick: function() {
										ed.insertContent('[jin-iconbox02]ここに本文を入力[/jin-iconbox02]');
									}
								},{
								text: '電球',
									onclick: function() {
										ed.insertContent('[jin-iconbox03]ここに本文を入力[/jin-iconbox03]');
									}
								},{
								text: 'カート',
									onclick: function() {
										ed.insertContent('[jin-iconbox04]ここに本文を入力[/jin-iconbox04]');
									}
								},{
								text: 'お知らせ',
									onclick: function() {
										ed.insertContent('[jin-iconbox05]ここに本文を入力[/jin-iconbox05]');
									}
								},{
								text: '吹き出し',
									onclick: function() {
										ed.insertContent('[jin-iconbox06]ここに本文を入力[/jin-iconbox06]');
									}
								},{
								text: 'チェック',
									onclick: function() {
										ed.insertContent('[jin-iconbox07]ここに本文を入力[/jin-iconbox07]');
									}
								},{
								text: '鉛筆',
									onclick: function() {
										ed.insertContent('[jin-iconbox08]ここに本文を入力[/jin-iconbox08]');
									}
								},{
								text: '情報',
									onclick: function() {
										ed.insertContent('[jin-iconbox10]ここに本文を入力[/jin-iconbox10]');
									}
								},{
								text: '歯車',
									onclick: function() {
										ed.insertContent('[jin-iconbox11]ここに本文を入力[/jin-iconbox11]');
									}
								},{
								text: 'クリップボード',
									onclick: function() {
										ed.insertContent('[jin-iconbox12]ここに本文を入力[/jin-iconbox12]');
									}
								},{
								text: 'いいね！',
									onclick: function() {
										ed.insertContent('[jin-iconbox09]ここに本文を入力[/jin-iconbox09]');
									}
								},{
								text: 'よくない',
									onclick: function() {
										ed.insertContent('[jin-iconbox14]ここに本文を入力[/jin-iconbox14]');
									}
								},{
								text: 'ハート',
									onclick: function() {
										ed.insertContent('[jin-iconbox13]ここに本文を入力[/jin-iconbox13]');
									}
								},{
								text: 'はてなマーク',
									onclick: function() {
										ed.insertContent('[jin-iconbox15]ここに本文を入力[/jin-iconbox15]');
									}
								},{
								text: '旗',
									onclick: function() {
										ed.insertContent('[jin-iconbox16]ここに本文を入力[/jin-iconbox16]');
									}
								}
							],
						},{
						text: '余白',
							menu: [
								{
								text: '10px',
									onclick: function() {
										ed.insertContent('[jin-yohaku10]');
									}
								},{
								text: '15px',
									onclick: function() {
										ed.insertContent('[jin-yohaku15]');
									}
								},{
								text: '20px',
									onclick: function() {
										ed.insertContent('[jin-yohaku20]');
									}
								},{
								text: '25px',
									onclick: function() {
										ed.insertContent('[jin-yohaku25]');
									}
								},{
								text: '30px',
									onclick: function() {
										ed.insertContent('[jin-yohaku30]');
									}
								},{
								text: '35px',
									onclick: function() {
										ed.insertContent('[jin-yohaku35]');
									}
								},{
								text: '40px',
									onclick: function() {
										ed.insertContent('[jin-yohaku40]');
									}
								},{
								text: '45px',
									onclick: function() {
										ed.insertContent('[jin-yohaku45]');
									}
								},{
								text: '50px',
									onclick: function() {
										ed.insertContent('[jin-yohaku50]');
									}
								}
							],
						},{
						text: '付箋',
							menu: [
								{
								text: 'シンプルな付箋',
									menu: [
										{
										text: '右肩下がり',
											onclick: function() {
												ed.insertContent('[jin-fusen1-down text="ここに文字を入力してください"]');
											}
										},{
										text: '平行',
											onclick: function() {
												ed.insertContent('[jin-fusen1-even text="ここに文字を入力してください"]');
											}
										},{
										text: '右肩上がり',
											onclick: function() {
												ed.insertContent('[jin-fusen1-up text="ここに文字を入力してください"]');
											}
										}
									],
								},{
								text: '吹き出し付箋',
									onclick: function() {
										ed.insertContent('[jin-fusen2 text="ここに文字を入力してください"]');
									}
								},{
								text: '吹き出し付箋（角丸）',
									onclick: function() {
										ed.insertContent('[jin-fusen3 text="ここに文字を入力してください"]');
									}
								}
							],
						},{
						text: '画像加工',
							menu: [
								{
								text: '影だけをつける',
									onclick: function() {
										ed.insertContent('[jin-img-shadow]<p>ここに画像を貼り付けてください</p>[/jin-img-shadow]');
									}
								},{
								text: '角丸デザインにする',
									onclick: function() {
										ed.insertContent('[jin-img-kadomaru]<p>ここに画像を貼り付けてください</p>[/jin-img-kadomaru]');
									}
								},{
								text: '枠ありデザインにする',
									onclick: function() {
										ed.insertContent('[jin-img-waku]<p>ここに画像を貼り付けてください</p>[/jin-img-waku]');
									}
								},{
								text: '丸枠デザインにする',
									onclick: function() {
										ed.insertContent('[jin-img-maruwaku]<p>ここに画像を貼り付けてください</p>[/jin-img-maruwaku]');
									}
								}
							],
						},{
						text: '区切り線',
							menu: [
								{
								text: 'ノーマル',
									onclick: function() {
										ed.insertContent('[jin-sen color="#f7f7f7" size="3px"]');
									}
								},{
								text: '点線',
									onclick: function() {
										ed.insertContent('[jin-tensen color="#f7f7f7" size="3px"]');
									}
								},{
								text: '２重線',
									onclick: function() {
										ed.insertContent('[jin-w-sen color="#eeeeee" size="10px"]');
									}
								}
							],
						},{
						text: '２カラム',
							menu: [
								{
								text: '２カラム',
									onclick: function() {
										ed.insertContent('[2col-box]<br>[2-left]<p>左のコンテンツはここに入力</p>[/2-left]<br>[2-right]<p>右のコンテンツはここに入力</p>[/2-right]<br>[/2col-box]');
									}
								},{
								text: '２カラム【背景色あり】',
									onclick: function() {
										ed.insertContent('[2col-box]<br>[2-left bg_color="#f7f7f7"]<p>左のコンテンツはここに入力</p>[/2-left]<br>[2-right bg_color="#f7f7f7"]<p>右のコンテンツはここに入力</p>[/2-right]<br>[/2col-box]');
									}
								},{
								text: '２カラム【タイトルあり】',
									onclick: function() {
										ed.insertContent('[2col-box]<br>[2-left title="ここにタイトルを入力" style="1"]<p>左のコンテンツはここに入力</p>[/2-left]<br>[2-right title="ここにタイトルを入力" style="1"]<p>右のコンテンツはここに入力</p>[/2-right]<br>[/2col-box]');
									}
								},{
								text: '２カラム【タイトル＆背景色あり】',
									onclick: function() {
										ed.insertContent('[2col-box]<br>[2-left bg_color="#f7f7f7" title="ここにタイトルを入力" style="1"]<p>左のコンテンツはここに入力</p>[/2-left]<br>[2-right bg_color="#f7f7f7" title="ここにタイトルを入力" style="1"]<p>右のコンテンツはここに入力</p>[/2-right]<br>[/2col-box]');
									}
								}
							],
						}, {
						text: '３カラム',
							menu: [
								{
								text: '３カラム',
									onclick: function() {
										ed.insertContent('[3col-box]<br>[3-left]<p>左のコンテンツはここに入力</p>[/3-left]<br>[3-center]<p>中央のコンテンツはここに入力</p>[/3-center]<br>[3-right]<p>右のコンテンツはここに入力</p>[/3-right]<br>[/3col-box]');
									}
								},{
								text: '３カラム【背景色あり】',
									onclick: function() {
										ed.insertContent('[3col-box]<br>[3-left bg_color="#f7f7f7"]<p>左のコンテンツはここに入力</p>[/3-left]<br>[3-center bg_color="#f7f7f7"]<p>中央のコンテンツはここに入力</p>[/3-center]<br>[3-right bg_color="#f7f7f7"]<p>右のコンテンツはここに入力</p>[/3-right]<br>[/3col-box]');
									}
								},{
								text: '３カラム【タイトルあり】',
									onclick: function() {
										ed.insertContent('[3col-box]<br>[3-left title="ここにタイトルを入力" style="1"]<p>左のコンテンツはここに入力</p>[/3-left]<br>[3-center title="ここにタイトルを入力" style="1"]<p>中央のコンテンツはここに入力</p>[/3-center]<br>[3-right title="ここにタイトルを入力" style="1"]<p>右のコンテンツはここに入力</p>[/3-right]<br>[/3col-box]');
									}
								},{
								text: '３カラム【タイトル＆背景色あり】',
									onclick: function() {
										ed.insertContent('[3col-box]<br>[3-left bg_color="#f7f7f7" title="ここにタイトルを入力" style="1"]<p>左のコンテンツはここに入力</p>[/3-left]<br>[3-center bg_color="#f7f7f7" title="ここにタイトルを入力" style="1"]<p>中央のコンテンツはここに入力</p>[/3-center]<br>[3-right bg_color="#f7f7f7" title="ここにタイトルを入力" style="1"]<p>右のコンテンツはここに入力</p>[/3-right]<br>[/3col-box]');
									}
								}
							],
						},{
						text: '見出し（LP用）',
							menu: [
								{
								text: '見出し２（H2）',
									onclick: function() {
										ed.insertContent('[lp-h2 style="1"]ここにテキストを入力[/lp-h2]');
									}
								}
							],
						},{
						text: '星（レビュー用）',
							menu: [
								{
								text: '星1',
									onclick: function() {
										ed.insertContent('[jinstar1.0 color="#ffc32c" size="16px"]');
									}
								},{
								text: '星1.5',
									onclick: function() {
										ed.insertContent('[jinstar1.5 color="#ffc32c" size="16px"]');
									}
								},{
								text: '星2',
									onclick: function() {
										ed.insertContent('[jinstar2.0 color="#ffc32c" size="16px"]');
									}
								},{
								text: '星2.5',
									onclick: function() {
										ed.insertContent('[jinstar2.5 color="#ffc32c" size="16px"]');
									}
								},{
								text: '星3',
									onclick: function() {
										ed.insertContent('[jinstar3.0 color="#ffc32c" size="16px"]');
									}
								},{
								text: '星3.5',
									onclick: function() {
										ed.insertContent('[jinstar3.5 color="#ffc32c" size="16px"]');
									}
								},{
								text: '星4',
									onclick: function() {
										ed.insertContent('[jinstar4.0 color="#ffc32c" size="16px"]');
									}
								},{
								text: '星4.5',
									onclick: function() {
										ed.insertContent('[jinstar4.5 color="#ffc32c" size="16px"]');
									}
								},{
								text: '星5',
									onclick: function() {
										ed.insertContent('[jinstar5.0 color="#ffc32c" size="16px"]');
									}
								}
							],
						}
					]
				});
				
				ed.addCommand('Ranking01',//コマンドID
					function(){
						var str = t._Ranking01Table();
						ed.execCommand('mceInsertContent', false, str);
				});
				ed.addButton('Ranking01', {//ボタンの名前
					title : 'ランキング表', //tileのテキスト
					cmd : 'Ranking01', //コマンドID
					image : root + '/img/ranking01.png'}); //ボタン画像

				ed.addCommand('Twobutton',//コマンドID
					function(){
						var str = t._TwobuttonTable();
						ed.execCommand('mceInsertContent', false, str);
				});
				ed.addButton('Twobutton', {//ボタンの名前
					title : '横並びボタン', //tileのテキスト
					cmd : 'Twobutton', //コマンドID
					image : root + '/img/ranking02.png'}); //ボタン画像

				ed.addCommand('Table03',//コマンドID
					function(){
						var str = t._Table03Table();
						ed.execCommand('mceInsertContent', false, str);
				});
				ed.addButton('Table03', {//ボタンの名前
					title : 'シンプルな表', //tileのテキスト
					cmd : 'Table03', //コマンドID
					image : root + '/img/table03.png'}); //ボタン画像

				ed.addCommand('ChatCode',//コマンドID
					function(){
						var str = t._ChatCode();
						ed.execCommand('mceInsertContent', false, str);
				});
				ed.addButton('ChatCode', {//ボタンの名前
					title : 'チャットコード', //tileのテキスト
					cmd : 'ChatCode', //コマンドID
					image : root + '/img/chatcode.png'}); //ボタン画像



			},
			_Ranking01Table : function(d, fmt) {//挿入するテキスト
				str = '<div class="ranking01"><div class="ranking-title01">[1]ランキング１位</div><div class="ranking-img01">ここに広告タグ（300 x 250）をコピペ</div><div class="ranking-info01">ここに説明文を入力してください。ここに説明文を入力してください。</div><div class="clearfix"></div></div><table class="cps-table03"><tbody><tr><th>項目名</th><td class="rankinginfo">[star5.0]</td></tr><tr><th>項目名</th><td class="rankinginfo">ここに説明文を入力してください。</td></tr><tr><th>項目名</th><td class="rankinginfo">ここに説明文を入力してください。</td></tr><tr><th>項目名</th><td class="rankinginfo">ここに説明文を入力してください。</td></tr></tbody></table><span class="twobutton"><span class="color-button01"><a href="#">詳細ページ</a></span><span class="color-button02"><a href="#">公式ページ</a></span></span><div class="ranking02"><div class="ranking-title02">[2]ランキング２位</div><div class="ranking-img02">ここに広告タグ（300 x 250）をコピペ</div><div class="ranking-info02">ここに説明文を入力してください。ここに説明文を入力してください。</div><div class="clearfix"></div></div><table class="cps-table03"><tbody><tr><th>項目名</th><td class="rankinginfo">[star5.0]</td></tr><tr><th>項目名</th><td class="rankinginfo">ここに説明文を入力してください。</td></tr><tr><th>項目名</th><td class="rankinginfo">ここに説明文を入力してください。</td></tr><tr><th>項目名</th><td class="rankinginfo">ここに説明文を入力してください。</td></tr></tbody></table><span class="twobutton"><span class="color-button01"><a href="#">詳細ページ</a></span><span class="color-button02"><a href="#">公式ページ</a></span></span><div class="ranking03"><div class="ranking-title03">[3]ランキング３位</div><div class="ranking-img03">ここに広告タグ（300 x 250）をコピペ</div><div class="ranking-info03">ここに説明文を入力してください。ここに説明文を入力してください。</div><div class="clearfix"></div></div><table class="cps-table03"><tbody><tr><th>項目名</th><td class="rankinginfo">[star5.0]</td></tr><tr><th>項目名</th><td class="rankinginfo">ここに説明文を入力してください。</td></tr><tr><th>項目名</th><td class="rankinginfo">ここに説明文を入力してください。</td></tr><tr><th>項目名</th><td class="rankinginfo">ここに説明文を入力してください。</td></tr></tbody></table><span class="twobutton"><span class="color-button01"><a href="#">詳細ページ</a></span><span class="color-button02"><a href="#">公式ページ</a></span></span>';
				return str;
			},
			_TwobuttonTable : function(d, fmt) {//挿入するテキスト
				str = '<span class="twobutton"><span class="color-button01"><a href="#">詳細ページ</a></span><span class="color-button02"><a href="#">公式ページ</a></span></span>';
				return str;
			},
			_Table03Table : function(d, fmt) {//挿入するテキスト
				str = '<table class="cps-table03"><tbody><tr><th>項目名</th><td class="rankinginfo" >ここに説明文を入力してください。</td></tr><tr><th>項目名</th><td class="rankinginfo" >ここに説明文を入力してください。</td></tr><tr><th>項目名</th><td class="rankinginfo" >ここに説明文を入力してください。</td></tr><tr><th>項目名</th><td class="rankinginfo" >ここに説明文を入力してください。</td></tr><tr><th>項目名</th><td class="rankinginfo" >ここに説明文を入力してください。</td></tr></tbody></table><p></p>';
				return str;
			},
			_ChatCode : function(d, fmt) {//挿入するテキスト
				str = '[chat face="man1" name="" align="left" border="gray" bg="none" style=""]ここに文字を入力してください[/chat]';
				return str;
			},
        });
    tinymce.PluginManager.add('RankingButtons', tinymce.plugins.RankingButtons);//プラグインID,プラグイン関数名
})(jQuery, document, window);


