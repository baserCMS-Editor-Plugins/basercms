<?php
/**
 * ThemeConfigFixture
 *
 */
class ThemeConfigFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('connection' => 'baser');

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 8, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'value' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'name' => 'logo',
			'value' => 'logo.png',
			'created' => '2015-01-27 12:56:53',
			'modified' => null
		),
		array(
			'id' => '2',
			'name' => 'logo_alt',
			'value' => 'baserCMS',
			'created' => '2015-01-27 12:56:53',
			'modified' => null
		),
		array(
			'id' => '3',
			'name' => 'logo_link',
			'value' => '/',
			'created' => '2015-01-27 12:56:53',
			'modified' => null
		),
		array(
			'id' => '4',
			'name' => 'main_image_1',
			'value' => 'main_image_1.jpg',
			'created' => '2015-01-27 12:56:53',
			'modified' => null
		),
		array(
			'id' => '5',
			'name' => 'main_image_alt_1',
			'value' => 'コーポレートサイトにちょうどいい国産CMS',
			'created' => '2015-01-27 12:56:53',
			'modified' => null
		),
		array(
			'id' => '6',
			'name' => 'main_image_link_1',
			'value' => '/',
			'created' => '2015-01-27 12:56:53',
			'modified' => null
		),
		array(
			'id' => '7',
			'name' => 'main_image_2',
			'value' => 'main_image_2.jpg',
			'created' => '2015-01-27 12:56:53',
			'modified' => null
		),
		array(
			'id' => '8',
			'name' => 'main_image_alt_2',
			'value' => '全て日本語の国産CMSだから、設置も更新も簡単、わかりやすい。',
			'created' => '2015-01-27 12:56:53',
			'modified' => null
		),
		array(
			'id' => '9',
			'name' => 'main_image_link_2',
			'value' => '/',
			'created' => '2015-01-27 12:56:53',
			'modified' => null
		),
		array(
			'id' => '10',
			'name' => 'main_image_3',
			'value' => 'main_image_3.jpg',
			'created' => '2015-01-27 12:56:53',
			'modified' => null
		),
		array(
			'id' => '11',
			'name' => 'main_image_alt_3',
			'value' => '標準的なWebサイトに必要な基本機能を全て装備',
			'created' => '2015-01-27 12:56:53',
			'modified' => null
		),
		array(
			'id' => '12',
			'name' => 'main_image_link_3',
			'value' => '/',
			'created' => '2015-01-27 12:56:53',
			'modified' => null
		),
		array(
			'id' => '13',
			'name' => 'main_image_4',
			'value' => 'main_image_4.jpg',
			'created' => '2015-01-27 12:56:53',
			'modified' => null
		),
		array(
			'id' => '14',
			'name' => 'main_image_alt_4',
			'value' => 'デザインも自由自在にカスタマイズ可能！',
			'created' => '2015-01-27 12:56:53',
			'modified' => null
		),
		array(
			'id' => '15',
			'name' => 'main_image_link_4',
			'value' => '/',
			'created' => '2015-01-27 12:56:53',
			'modified' => null
		),
		array(
			'id' => '16',
			'name' => 'main_image_5',
			'value' => '',
			'created' => '2015-01-27 12:56:53',
			'modified' => null
		),
		array(
			'id' => '17',
			'name' => 'main_image_alt_5',
			'value' => '質問・ご相談はユーザーズフォーラムへ',
			'created' => '2015-01-27 12:56:53',
			'modified' => null
		),
		array(
			'id' => '18',
			'name' => 'main_image_link_5',
			'value' => '/',
			'created' => '2015-01-27 12:56:53',
			'modified' => null
		),
		array(
			'id' => '19',
			'name' => 'color_main',
			'value' => '',
			'created' => '2015-01-27 12:56:53',
			'modified' => null
		),
		array(
			'id' => '20',
			'name' => 'color_sub',
			'value' => '',
			'created' => '2015-01-27 12:56:53',
			'modified' => null
		),
		array(
			'id' => '21',
			'name' => 'color_link',
			'value' => '',
			'created' => '2015-01-27 12:56:53',
			'modified' => null
		),
		array(
			'id' => '22',
			'name' => 'color_hover',
			'value' => '',
			'created' => '2015-01-27 12:56:53',
			'modified' => null
		),
	);

}
