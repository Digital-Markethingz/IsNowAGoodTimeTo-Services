<?php
/**
 * Various Settings for the Service
 */
namespace IsNowAGoodTimeTo\Model;

/**
 * Service Model
 */
class bookflight
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
	public string $serviceId = 'bookflight';
	public string $displayName = 'Flight booking';
	public string $actionTag = 'Book a';
	public ?string $actionName = 'Flight';
	public bool $showIcon = true;
	public ?string $shoelaceIconID = null;
	public ?string $emojiIcon = '✈️';
	public ?string $primaryColor = null;
	public array $dataSource = [
		 'url' => 'https://thevacationer.com/best-days-to-book-flights/'
		,'text' => 'Best Days & Times to Book Flights & Airline Tickets'
		,'creator' => 'The Vacationer'
	];
	public ?array $goodDaytimes = [
		 2 => [6, 7, 8, 9, 10, 11, 12]
		,3 => [6, 7, 8, 9, 10, 11, 12]
	];
	public ?array $neutralDaytimes = [
		 1 => ['allday']
		,2 => [1, 2, 3, 4, 5, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24]
		,3 => [1, 2, 3, 4, 5, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24]
		,4 => ['allday']
		,5 => ['allday']
		,6 => ['allday']
		,7 => ['allday']
	];
}
