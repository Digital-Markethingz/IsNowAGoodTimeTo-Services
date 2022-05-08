<?php
/**
 * Various Settings for the Service
 */
namespace IsNowAGoodTimeTo\Model;

/**
 * Service Model
 */
class instagram
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
	public string $serviceId = 'instagram';
	public string $displayName = 'Instagram';
	public string $actionTag = 'Post to';
	public ?string $actionName = null;
	public bool $showIcon = true;
	public ?string $shoelaceIconID = 'instagram';
	public ?string $emojiIcon = '🤳'; // 📸, 🖼️
	public ?string $primaryColor = '#c13584';
	public array $dataSource = [
		 'url' => 'https://statusbrew.com/insights/best-time-to-post-on-instagram/'
		,'text' => 'The Best Time To Post On Instagram'
		,'creator' => 'Statusbrew'
	];
	public ?array $goodDaytimes = [
		 1 => [ 11, 12 ]
		,2 => [ 11, 12, 13, 14 ]
		,3 => [ 11, 12 ]
		,4 => [ 11 ]
		,5 => [ 11, 12 ]
	];
	public ?array $neutralDaytimes = [
		 1 => [ 9, 10, 13, 14, 15, 16, 17 ]
		,2 => [ 9, 10, 15, 16, 17 ]
		,3 => [ 9, 10, 13, 14, 15, 16, 17 ]
		,4 => [ 9, 10, 12, 13, 14, 15, 16, 17 ]
		,5 => [ 8, 9, 10, 13, 14, 15, 16 ]
		,6 => [ 10, 11, 12 ]
	];
}
