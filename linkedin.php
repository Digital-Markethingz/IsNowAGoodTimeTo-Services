<?php
/**
 * Various Settings for the Service
 */
namespace IsNowAGoodTimeTo\Model;

/**
 * Service Model
 */
class linkedin
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
	public string $serviceId = 'linkedin';
	public string $displayName = 'LinkedIn';
	public string $actionTag = 'Post on';
	public ?string $actionName = 'LinkedIN';
	public bool $showIcon = true;
	public ?string $shoelaceIconID = 'linkedin';
	public ?string $emojiIcon = '💬';
	public ?string $primaryColor = '#0077b5';
	public array $dataSource = [
		 'url' => 'https://www.cooala.com/home/en/insights/129128'
		,'text' => 'Best posting hours and days on LinkedIn'
		,'creator' => 'cooala - the content marketing magnet'
	];
	public ?array $goodDaytimes = [
		 2 => [ 6, 7, 8, 9 ]
		,3 => [ 6, 7, 10, 11 ]
		,4 => [ 6, 7, 8, 9, 10, 11, 12, 13, 18, 19 ]
		,5 => [ 18, 19 ]
		,6 => [ 10, 11, 14, 15 ]
	];
	public ?array $neutralDaytimes = [
		 1 => [ 14, 15 ]
		,2 => [ 10, 11, 12, 13, 14, 15 ]
		,3 => [ 12, 13, 16, 17 ]
		,4 => [ 16, 17 ]
		,5 => [ 6, 7, 16, 17 ]
		,6 => [ 18, 19 ]
		,7 => [ 14, 15, 16, 17 ]
	];
}
