<?php

namespace Davidcwhitfield\MailChimp;

class MailList {

	/**
	 * @var string A string that uniquely identifies this list.
	 */
	protected $id;

	/**
	 * @parma string The name of the list.
	 */
	protected $name;

	/**
	 * @var Davidcwhitfield/MailChimp/Contact Contact information displayed in 
	 * campaign footers to comply with international spam laws.
	 */
	protected $contact;

	/**
	 * @var string The permission reminder for the list.
	 */
	protected $permission_reminder;

	/**
	 * @var bool Whether campaigns for this list use the Archive Bar in archives by default.
	 */
	protected $use_archive_bar;

	/**
	 * @var Davidcwhitfield/MailChimp/CampaignDefaults Default values for campaigns created for this list.
	 */	
	protected $campaign_defaults;

	/**
	 * @var string The email address to send subscribe notifications to.
	 */	
	protected $notify_on_subscribe;

	/**
	 * @var string The email address to send unsubscribe notifications to.
	 */	
	protected $notify_on_unsubscribe;

	/**
	 * @var DateTime The date and time that this list was created.
	 */
	protected $date_created;

	/**
	 * @var int An auto-generated activity score for the list (0-5).
	 */
	protected $list_rating;

	/**
	 * @var bool Whether the list supports multiple formats for emails. When set to true, subscribers can 
	 * choose whether they want to receive HTML or plain-text emails. When set to false, subscribers will 
	 * receive HTML emails, with a plain-text alternative backup.
	 */
	protected $email_type_option;

	/**
	 * @var string Our EepURL shortened version of this list’s subscribe form.
	 */
	protected $subscribe_url_short;

	/**
	 * @var string The full version of this list’s subscribe form (host will vary).
	 */
	protected $subscribe_url_long;

	/**
	 * @var string The list’s Email Beamer address.
	 */
	protected $beamer_address;

	/**
	 * @var string Whether this list is public (pub) or private (prv)
	 */
	protected $visibility;

	/**
	 * @var array Any list-specific modules installed for this list.
	 */
	protected $modules;

	/**
	 * @var Davidcwhitfield\MailChimp\Statistics Stats for the list. Many of these are cached for at least five minutes.
	 */
	protected $stats;

	/**
	 * @var array A list of link types and descriptions for the API schema documents.
	 */
	protected $_links;

	public function toJson()
	{
	}
}
