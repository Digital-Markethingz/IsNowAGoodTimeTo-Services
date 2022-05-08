<?php
/**
 * Various Settings for the Service
 */
namespace IsNowAGoodTimeTo\Model;

/**
 * Service Model
 */
class beer
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
	public string $serviceId = 'beer';
	public string $displayName = 'Beer';
	public string $actionTag = 'Have a';
	public ?string $actionName = 'Beer';
	public bool $showIcon = true;
	public ?string $shoelaceIconID = null; // 'cup-straw'
	public ?string $emojiIcon = '🍻';
	public ?string $primaryColor = '#f28e1c';
	public array $dataSource = [
		 'url' => 'http://www.kannmanumdieuhrzeitschonnbierchentrinken.de'
		,'text' => 'Kann man um die Uhrzeit schon n&#039; Bierchen trinken?'
		,'creator' => 'Max Wohlleber'
	];
	public ?array $goodDaytimes = [
		 1 => [16, 17, 18, 19, 20, 21, 22, 23, 24]
		,2 => [16, 17, 18, 19, 20, 21, 22, 23, 24]
		,3 => [16, 17, 18, 19, 20, 21, 22, 23, 24]
		,4 => [16, 17, 18, 19, 20, 21, 22, 23, 24]
		,5 => [11, 12, 16, 17, 18, 19, 20, 21, 22, 23, 24]
		,6 => [1, 2, 3, 4, 5, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24]
		,7 => [1, 2, 3, 4, 5, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24]
	];
	public ?array $neutralDaytimes = [
		 1 => [11, 12]
		,2 => [11, 12]
		,3 => [11, 12]
		,4 => [11, 12]
		,5 => [13, 14, 15]
	];
}
