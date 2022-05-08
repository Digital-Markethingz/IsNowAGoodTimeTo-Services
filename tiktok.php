<?php
/**
 * Various Settings for the Service
 */
namespace IsNowAGoodTimeTo\Model;

/**
 * Service Model
 */
class tiktok
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
	public string $serviceId = 'tiktok';
	public string $displayName = 'TikTok';
	public string $actionTag = 'Post on';
	public ?string $actionName = null;
	public bool $showIcon = true;
	public ?string $shoelaceIconID = 'camera-video';
	public ?string $emojiIcon = '🎥';
	public ?string $primaryColor = '#69c9d0';
	public array $dataSource = [
		 'url' => 'https://mike.schwede.ch/home/de/live/welche-zeit-ist-am-besten-fur-tiktok-posts-und-werbung'
		,'text' => 'Welche Zeit ist am besten für TikTok Posts und Werbung?'
		,'creator' => 'Mike Schwede GmbH'
	];
	public ?array $goodDaytimes = [
		 1 => [ 20, 21 ]
		,2 => [ 20, 21 ]
		,3 => [ 20, 21 ]
		,4 => [ 20, 21, 22, 23 ]
		,5 => [ 20, 21, 22, 23 ]
	];
	public ?array $neutralDaytimes = [
		 1 => [ 16, 17, 18, 19 ]
		,2 => [ 16, 17, 18, 19 ]
		,3 => [ 16, 17, 18, 19 ]
		,4 => [ 16, 17, 18, 19 ]
		,5 => [ 16, 17, 18, 19 ]
		,6 => [ 12, 13, 14, 15, 16, 17, 18, 19, 20, 21 ]
		,7 => [ 12, 13, 14, 17, 18, 19, 20, 20, 21 ]
	];
}
