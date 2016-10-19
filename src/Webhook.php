<?php

namespace Davidcwhitfield\MailChimp;

class Webhook implements JsonSerializable {
	protected $id;

	protected $url;

	protected $events = [
					'subscribe'		=> false,
					'unsubscribe'	=> false,
					'profile'		=> false,
					'cleaned'		=> false,
					'upemail'		=> false,
					'campaign'		=> false,
			  ];

	protected $sources = [
					'user'	=> false,
					'admin'	=> false,
					'api'	=> false,
		 	  ];

	protected $listId;

	protected $_links;

	public function setUrl(string $url): void
	{
		$this->url = $url;	
	}

	public function getUrl(): string
	{
		return $this->url;
	}

	public function setEvents(array $events): void
	{
		$this->events = $events;
	}

	public function getEvents(): string
	{
		return $this->events;
	}

	public function setEvent(string $event, bool $value): void
	{
		if (array_key_exists($event, $this->events)) {
			$this->events[$event] = $value;
		}
	}

	public function setSources(array $sources): void
	{
		$this->sources = $sources;
	}

	public function getSources(): array
	{
		return $this->sources;
	}

	public function setSource($source, $value): void
	{
		if (array_key_exists($source, $this->sources)) {
			$this->sources[$source] = $value;
		}
	}

	public function jsonSerialize()
	{
		return [
			'url' => $this->type,
			'sources' => array_filter($this->events, function($k) {
				return is_bool($k);
			}),
		];
	}
}
