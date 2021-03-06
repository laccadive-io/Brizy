<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 4/18/18
 * Time: 10:46 AM
 */

class Brizy_Editor_Asset_CssAssetProcessor implements Brizy_Editor_Content_ProcessorInterface {
	/**
	 * @var Brizy_Editor_Asset_Storage
	 */
	private $storage;

	/**
	 * Brizy_Editor_Asset_HtmlAssetProcessor constructor.
	 *
	 * @param Brizy_Editor_Asset_Storage $storage
	 */
	public function __construct( Brizy_Editor_Asset_Storage $storage ) {
		$this->storage = $storage;
	}

	/**
	 * Find and cache all assets and replace the urls with new local ones.
	 *
	 * The css assets must be ignored as we have a special processor this.
	 *
	 * @param $content
	 */
	public function process( $content ) {

		return $content;
	}
}