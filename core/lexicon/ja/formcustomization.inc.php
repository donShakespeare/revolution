<?php
/**
 * Form Customization English lexicon topic
 *
 * @language en
 * @package modx
 * @subpackage lexicon
 */
$_lang['action'] = 'アクション';
$_lang['action_desc'] = '指定したアクションにこのルールが適用されます。';
$_lang['activate'] = '有効化';
$_lang['constraint'] = '制約の条件';
$_lang['constraint_class'] = 'このルールの対象';
$_lang['constraint_class_desc'] = '任意。「テンプレートIDが4の場合にこのルールを有効にする」などの条件をここでセットします。投稿画面の場合「modResource」でよいみたいです（※注・日本チーム） Optional. If set, along with the Constraint Field and Constraint options, will restrict this rule to the constraints applied.';
$_lang['constraint_desc'] = '任意。有効条件と見なす値をセットします。たとえば「テンプレートIDが4の場合にこのルールを有効にする」の場合「4」をここにセットします。Optional. The value of the Constraint Field that should be checked against.';
$_lang['constraint_field'] = '制約フィールド';
$_lang['constraint_field_desc'] = '任意。制約条件としたいフィールドの名前を記述します。たとえば「template」など。';
$_lang['containing_panel'] = 'これを含む領域';
$_lang['containing_panel_desc'] = '対象オブジェクト（フィールドやタブ）を含むDIV領域のID名。modx-panel-resource・modx-page-settings・modx-resource-tabsのうちのいずれか。This is sometimes necessary for certain rules, so that the system can know what form or panel the field is in.';
$_lang['deactivate'] = '無効化';
$_lang['default_value'] = '既定値';
$_lang['export'] = 'エクスポート';
$_lang['fc.action_create'] = 'リソースを新規作成';
$_lang['fc.action_update'] = 'Update Resource';
$_lang['field'] = 'フィールド';
$_lang['field_desc'] = '影響を受けるフィールドです。それはタブ、またはテンプレート変数の場合もあります。テンプレート変数の場合は、次の書式で指定してください。"tv#"（#にはテンプレート変数のIDを入力）';
$_lang['field_default'] = 'フィールドのデフォルト値';
$_lang['field_label'] = 'フィールドのラベル';
$_lang['field_visible'] = 'フィールドの表示／非表示';
$_lang['fields'] = 'フィールド';
$_lang['file'] = 'ファイル';
$_lang['filter_by_action'] = 'アクションで絞込み...';
$_lang['filter_by_rule_type'] = 'ルールで絞込み...';
$_lang['filter_by_search'] = '検索...';
$_lang['for_parent'] = 'For Parent';
$_lang['for_parent_desc'] = 'このルールを親リソースに適用させたい場合はチェックしてください。Only use with Resources or objects with a `parent` field. Useful for the "create" page of Resources.';
$_lang['form_customization_msg'] = 'フォームカスタマイズのプロファイルは、カスタマイズルールのセットと対象グループをまとめたものです。不適切なルールはMODXに問題を起こす場合もあるので、注意して利用してください。<br />無効化されているプロファイルは、グレーアウトして表示されます。';
$_lang['form_rules'] = 'フォームのルール';
$_lang['import'] = 'インポート';
$_lang['import_from_xml'] = 'XMLファイルからセットをインポート';
$_lang['label'] = 'ラベル';
$_lang['original_value'] = 'オリジナル値';
$_lang['profile'] = 'プロファイル';
$_lang['profile_create'] = 'プロファイル新規作成';
$_lang['profile_err_nfs'] = 'ID [[+id]]のカスタマイズプロファイルは見つかりませんでした。';
$_lang['profile_err_ns'] = 'カスタマイズのプロファイルが選択されていません。';
$_lang['profile_err_remove'] = 'プロファイルの削除時、エラーが発生しました。';
$_lang['profile_err_save'] = 'プロファイルの保存時、エラーが発生しました。';
$_lang['profile_msg'] = 'ここでは、このプロファイルの詳細と、それに属する「セット」を管理します。セットとは、指定したページ（リソースの作成または更新ページ）に適用される、カスタマイズの規則をひとまとめにしたものです。<br />セットが適用される対象は、リソースが使用するテンプレートやフィールドの値によって制限可能です。リソースの新規作成時は、親リソースの値によって制限が判断されます。';
$_lang['profile_new'] = '新しいプロファイル';
$_lang['profile_remove'] = 'プロファイルを削除';
$_lang['profile_remove_confirm'] = 'このプロファイルを完全に削除してもよろしいですか？　この操作は取り消しできません。';
$_lang['profile_remove_multiple'] = '複数のプロファイルを削除';
$_lang['profile_remove_multiple_confirm'] = 'これらのプロファイルを完全に削除してもよろしいですか？　この操作は取り消しできません。';
$_lang['profile_usergroup_err_ae'] = 'ユーザーグループはすでにこのプロファイルに割り当てられています。';
$_lang['profile_usergroups_msg'] = 'このプロファイルが適用されるユーザーグループを指定します。<br />指定しない場合、プロファイルは全てのユーザーに適用されます。';
$_lang['profiles'] = 'カスタマイズプロファイル';
$_lang['profiles_msg'] = 'フォームのカスタマイズプロファイルのリストです。プロファイルは様々なカスタマイズの規則を保持でき、一括して有効無効を切り替えられます。また、任意のユーザーグループにだけ適用させることも可能です。';
$_lang['rank'] = 'ランク';
$_lang['rank_desc'] = 'ルールが適用される順番を数値で指定します。数値が小さいほど、ルールは先に適用されます。';
$_lang['region'] = 'リージョン';
$_lang['regions'] = 'リージョン';
$_lang['rule'] = 'ルール';
$_lang['rule_create'] = 'ルールを作成';
$_lang['rule_desc'] = 'このフィールドに適用されるルールの種類';
$_lang['rule_description_desc'] = 'オプション。ルールの詳細';
$_lang['rule_err_ae'] = 'そのフィールドにはすでにルールが設定されています。';
$_lang['rule_err_duplicate'] = 'ルールの複製中にエラーが発生しました。';
$_lang['rule_err_nf'] = 'ルールが見つかりません。';
$_lang['rule_err_ns'] = 'ルールが指定されていません。';
$_lang['rule_err_remove'] = 'ルールの削除中にエラーが発生しました。';
$_lang['rule_err_save'] = 'ルールの保存中にエラーが発生しました。';
$_lang['rule_remove'] = 'ルールを削除';
$_lang['rule_remove_confirm'] = '本当にこのルールを削除しますか？';
$_lang['rule_remove_multiple'] = '複数のルールを削除';
$_lang['rule_remove_multiple_confirm'] = '本当にこれらのルールを削除しますか？　元には戻せません。';
$_lang['rule_update'] = 'ルールを編集';
$_lang['rule_value_desc'] = 'ルールに値を設定します。';
$_lang['rules'] = 'ルール';
$_lang['set'] = '更新';
$_lang['set_and_fields'] = '基本設定とフィールド構成';
$_lang['set_change_template'] = '適用するテンプレートの変更';
$_lang['set_change_template_confirm'] = 'テンプレートを変更してもよろしいですか？<br />ルールを適用するテンプレートを変更すると、まず現在の変更内容が保存されてから、新しいテンプレートとテンプレート変数がリフレッシュされます。';
$_lang['set_constraint_field_desc'] = 'カスタマイズ適用の条件に使用したいフィールド名を指定します。指定した場合、リソースの持つ指定フィールドの値が「制約条件」と一致した場合にのみ、このカスタマイズが適用されます。';
$_lang['set_constraint_desc'] = 'ここに指定した値と、リソース上の「制約フィールド」の値が一致した場合のみ、このセットが適用されます。';
$_lang['set_create'] = 'セットを新規作成';
$_lang['set_err_nfs'] = 'ID [[+id]]のセットは見つかりません。';
$_lang['set_err_ns'] = 'セットが指定されていません。';
$_lang['set_fields_msg'] = 'フィールドの表示非表示、ラベルやデフォルト値を指定できます。ラベルやデフォルト値の変更は、該当の箇所をダブルクリックして行います。<br />注：フィールドは、表示されるタブごとにグルーピングされています。';
$_lang['set_import_err_upload'] = 'XMLファイルの検出時、エラーが発生しました。有効なファイルを指定してください。';
$_lang['set_import_err_xml'] = 'XMLファイルのインポート時、エラーが発生しました。有効なフォームカスタマイズセット用のXMLファイルを指定してください。';
$_lang['set_import_msg'] = 'フォームのカスタマイズセットをインポートするXMLファイルを選択します。カスタマイズセットの正しい文法を持ったXMLファイルが必要です。';
$_lang['set_msg'] = 'カスタマイズの対象となる操作（リソースの作成 or 更新）や、適用するテンプレートなど、このセットの基本条件を指定してください。';
$_lang['set_new'] = 'セットを新規作成';
$_lang['set_remove'] = 'セットを削除';
$_lang['set_remove_confirm'] = 'このセットを完全に削除してもよろしいですか？　この処理は取り消しできません。';
$_lang['set_remove_multiple'] = '複数のセットを削除';
$_lang['set_remove_multiple_confirm'] = 'これらのセットをA級に削除してもよろしいですか？　この処理は取り消しできません。';
$_lang['set_tab_err_ae'] = '同じIDを持つタブがすでに存在します。異なるIDを指定してください。';
$_lang['set_tabs_msg'] = 'タブの表示やラベルを設定します。<br />ラベルを変更する場合、目的の行の「タブのタイトル」列をダブルクリックしてください。値が空の場合、デフォルト値が使用されます。';
$_lang['set_template_desc'] = 'テンプレートを指定すると、カスタマイズはそのテンプレートを持ったリソースにのみ適用されます。';
$_lang['set_tvs_msg'] = 'テンプレート変数のラベル、デフォルト値、表示の有無や表示するタブなどを設定します。<br />注：別のタブにテンプレート変数を移動する場合、「順序」フィールドで並び順を指定できます。このフィールドが空の場合、デフォルトの並び順が使用されます。';
$_lang['sets'] = 'フォームカスタマイズセット';
$_lang['simplexml_err_nf'] = 'この機能を使用するには、PHPのSimpleXMLエクステンションが必要です。続行前に、エクステンションがインストールされている事を確認してください。';
$_lang['tab'] = 'タブ';
$_lang['tab_create'] = '新しいタブを作成';
$_lang['tab_id'] = 'ID';
$_lang['tab_name'] = 'タブ名';
$_lang['tab_title'] = 'タイトル';
$_lang['tab_new'] = '新しいタブ';
$_lang['tab_rank'] = '順序';
$_lang['tab_remove'] = 'タブを外す';
$_lang['tab_remove_confirm'] = 'このタブを削除します。';
$_lang['tab_visible'] = 'タブの表示／非表示';
$_lang['tabs'] = 'タブの構成';
$_lang['tv'] = 'テンプレート変数';
$_lang['tv_default'] = '既定値';
$_lang['tv_label'] = 'テンプレート変数のラベル';
$_lang['tv_name'] = '名前';
$_lang['tv_move'] = 'テンプレート変数をタブに移動';
$_lang['tv_visible'] = 'テンプレート変数の表示／非表示';
$_lang['tvs'] = 'テンプレート変数';
$_lang['usergroup'] = 'ユーザーグループ';
$_lang['usergroup_create'] = 'ユーザーグループを追加';
$_lang['usergroup_desc'] = 'オプション。設定すると、このルールをユーザーグループで指定されたユーザーのみに制限します。';
$_lang['usergroup_remove'] = '適用ユーザーグループを削除';
$_lang['usergroup_remove_confirm'] = '削除すると、プロファイルがこのユーザーグループに適用されなくなります。<br />削除してよろしいですか？';
$_lang['usergroups'] = 'ユーザーグループ';
$_lang['visible'] = '表示';
$_lang['xmlwriter_err_nf'] = 'この機能を使用するには、PHPのXMLWriterエクステンションが必要です。続行前に、エクステンションがインストールされている事を確認してください。';
