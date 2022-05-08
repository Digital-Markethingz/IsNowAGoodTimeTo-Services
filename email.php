<?php
/**
 * Various Settings for the Service
 */
namespace IsNowAGoodTimeTo\Model;

/**
 * Service Model
 */
class email
{
	/**
	 * @var string $serviceId
	 * @var string $displayName
	 * @var string $actionTag Prefix-text to show before the Service
	 * @var string $actionName (Optional) Alternate name to show with $actionTag. Default: $displayName.
	 * @var bool $showIcon true/false
	 * @var string $shoelaceIconID Required if $showIcon is true. Source: https://shoelace.style/components/icon
	 * @var string $emojiIcon (Optional) Unicode Emoji for the Service
	 * @var string $primaryColor (Optional) Hex-Colorvalue ('#ffffff') used as service color
	 * @var array $dataSource
	 * @var array $goodDaytimes A list by Day of Week (1-7 where 1=Monday) and Hours (1=01:00 am), which are considered GOOD
	 * @var array $neutralDaytimes A list by Day of Week (1-7 where 1=Monday) and Hours (1=01:00 am), which are considered OK-ish
	 */
	public string $serviceId = 'email';
	public string $displayName = 'Email';
	public string $actionTag = 'Send an';
	public ?string $actionName = null;
	public bool $showIcon = true;
	public ?string $shoelaceIconID = null; // 'envelope-heart'
	public ?string $emojiIcon = '💌';
	public ?string $primaryColor = null;
	public array $dataSource = [
		 'url' => 'https://boostyour.email'
		,'text' => 'Best day and time for sending B2B and B2C emails'
		,'creator' => 'Boost Your Email'
	];
	public ?array $goodDaytimes = [
		 2 => [ 4, 5, 6, 14, 15, 16 ]
		,3 => [ 14, 15, 16 ]
		,4 => [ 14, 15, 16 ]
		,6 => [ 4, 5, 6 ]
	];
	public ?array $neutralDaytimes = [
		 1 => [ 11, 12, 13]
		,2 => [ 11, 12, 13]
		,3 => [ 7, 8, 9, 10, 11, 12, 13]
		,4 => [ 7, 8, 9, 10, 11, 12, 13]
		,6 => [ 7, 8, 9, 10, 11, 12, 13]
	];
}
