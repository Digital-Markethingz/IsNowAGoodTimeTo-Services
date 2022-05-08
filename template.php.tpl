<?php
/**
 * Template to add a new "Is Now A Good Time"-Service with its applicable settings
 */
namespace IsNowAGoodTimeTo\Model;

/**
 * Service Model
 *
 * NOTE: Change 'servicfilename' to match the Filename
 */
class servicfilename
{
	/**
	 * @var string $serviceId
	 * @var string $displayName
	 * @var string $actionTag Prefix-text to show before the Service
	 * @var string $actionName (Optional) Alternate name to show with $actionTag. Default: $displayName.
	 * @var bool $showIcon true/false (shows $shoelaceIconID if set, or alternatively $emojiIcon)
	 * @var string $shoelaceIconID Required if $showIcon is true. Source: https://shoelace.style/components/icon
	 * @var string $emojiIcon (Optional) Unicode Emoji for the Service. Fallback for empty $shoelaceIconID
	 * @var string $primaryColor (Optional) Hex-Colorvalue ('#ffffff') used as service color
	 * @var array $dataSource
	 * @var array $goodDaytimes A list by Day of Week (1-7 where 1=Monday) and Hours (1=01:00 am), which are considered GOOD (not good+neutral = bad)
	 * @var array $neutralDaytimes A list by Day of Week (1-7 where 1=Monday) and Hours (1=01:00 am), which are considered OK-ish
	 */
	public string $serviceId = 'serviceslug';
	public string $displayName = 'Service';
	public string $actionTag = 'Template of a';
	public ?string $actionName = null;
	public bool $showIcon = false;
	public ?string $shoelaceIconID = null;
	public ?string $emojiIcon = '🕊️';
	public ?string $primaryColor = null;
	public array $dataSource = [
		 'url' => 'https://isnowagoodtime.to'
		,'text' => 'Find out if now is a good time to'
		,'creator' => 'Digital Markethingz'
	];
	public ?array $goodDaytimes = [
		1 => [ // = Monday
			'allday' // Shorthand for all hours
		]
		,2 => [ // = Tuesday
			 1 // = 01:00 am
			,2
			,3
			,4
			,5
			,6
			,7
			,8
			,9
			,10
			,11
			,12 // = 12:00 pm
			,13
			,14
			,15
			,16
			,17
			,18
			,19
			,20
			,21
			,22
			,23
			,24 // = 00:00 am
		]
		,3 => [ // = Wednesday
			'allday'
		]
		,4 => [ // = Thursday
			'allday'
		]
		,5 => [ // = Friday
			'allday'
		]
		,6 => [ // = Saturday
			'allday'
		]
		,7 => [ // = Sunday
			 8 // Remove all non-good hours...
			,9
			,10
			,11
			,12
			,14
			,15
			,16
			,17
			,18
		]
	];
	public ?array $neutralDaytimes = [
		7 => [ // Leave away any non-applicable Days and hours...
			 7 // 07:00 am
			,13 // 01:00 pm
			,19 // 09:00 pm
		]
	];
}
