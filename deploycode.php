<?php
/**
 * Various Settings for the Service
 */
namespace IsNowAGoodTimeTo\Model;

/**
 * Service Model
 */
class deploycode
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
	public string $serviceId = 'deploycode';
	public string $displayName = 'Code deployment';
	public string $actionTag = 'Deploy';
	public ?string $actionName = 'Code';
	public bool $showIcon = true;
	public ?string $shoelaceIconID = null;
	public ?string $emojiIcon = '🧑‍💻';
	public ?string $primaryColor = null;
	public array $dataSource = [
		 'url' => 'https://www.mkwd.net/weekly-releases-when-is-the-best-time-to-deploy-code/'
		,'text' => 'Weekly Releases: When is the Best Time to Deploy Code'
		,'creator' => 'MKWD'
	];
	public ?array $goodDaytimes = [
		 1 => [13, 14, 15]
		,2 => [8, 9, 10, 11, 13, 14, 15]
		,3 => [8, 9, 10, 11, 13, 14, 15]
		,4 => [8, 9, 10, 11, 13, 14, 15]
	];
	public ?array $neutralDaytimes = [
		 1 => [12, 16]
		,2 => [7, 12, 16]
		,3 => [7, 12, 16]
		,4 => [7, 12, 16]
	];
}
