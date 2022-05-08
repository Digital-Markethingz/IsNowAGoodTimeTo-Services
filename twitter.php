<?php
/**
 * Various Settings for the Service
 */
namespace IsNowAGoodTimeTo\Model;

/**
 * Service Model
 */
class twitter
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
	public string $serviceId = 'twitter';
	public string $displayName = 'Twitter';
	public string $actionTag = 'Send a';
	public ?string $actionName = 'Tweet';
	public bool $showIcon = true;
	public ?string $shoelaceIconID = 'twitter';
	public ?string $emojiIcon = '🧵'; // 💭, 🕊️
	public ?string $primaryColor = '#1da1f2';
	public array $dataSource = [
		 'url' => 'https://sproutsocial.com/insights/best-times-to-post-on-social-media/#twitter-times'
		,'text' => 'Best Times to Post on Twitter'
		,'creator' => 'Sprout Social, Inc.'
	];
	public ?array $goodDaytimes = [
		 1 => [ 9 ]
		,2 => [ 9, 10, 11, 12 ]
		,3 => [ 8, 9, 10, 11, 12 ]
		,4 => [ 9, 10 ]
		,5 => [ 9 ]
		,6 => [ 9 ]
	];
	public ?array $neutralDaytimes = [
		 1 => [ 8, 10, 11, 12 ]
		,2 => [ 7, 8, 13 ]
		,3 => [ 7, 13, 14 ]
		,4 => [ 8, 11, 12 ]
		,5 => [ 7, 8, 11, 12, 13 ]
		,6 => [ 8, 10 ]
		,7 => [ 9 ]
	];
}
