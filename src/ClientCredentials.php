<?php
namespace Davidcwhitfield/MailChimp;

class ClientCredentials {

	/**
	 * @param string - API key used to access MailChimp API.
	 */
	protected $apiKey;

	/**
	 * @var string - MailChimp API endpoint to connect to.
	 */
	protected $apiEndpoint;

	/**
	 * @var string - Username to be provided for API Access (This
	 * 		 can be set to any string, it just needs to be
	 *		 present. 
	 */
	protected $apiUsername;

	/**
	 * Sets the MailChimp API key to be used by the client.
	 * @param string $apiKey
	 * @return void
	 */
	public function setApiKey(string $apiKey): void
	{
		if (false === strpos('-', $apiKey)) {
			throw new \InvalidArgumentException("Invalid API Key '$apiKey' provided");
		}

		$this->apiKey = $apiKey;
	}

	/**
	 * Returns the key to be used to connect to the Mailchimp API.
	 * @return string
	 */
	public function getApiKey(): string
	{
		return $this->apiKey;
	}

	/**
	 * Sets the MailChimp API endpoint to connect to.
	 * @param string $apiEndpoing
	 * @return void
	 */
	public function setApiEndpoint(string $apiEndpoint): void
	{
		$this->apiEndpoint = $endpoint;	
	}

	/**
	 * Returns the MailChimp API endpoint to connect to.
	 * @return string
	 */
	public function getApiEndpoint(): string
	{
		if (null === $this->apiEndpoint && $this->apiKey) {
			$this->parseEndpointFromKey();
		}

		return $this->apiEndpoint;
	}

	public function setEndpointFromKey(): void
	{
		if (null == $this->apiKey) {
			throw new \Exception("API Key not set, unable to parse endpoint");
		}
		$baseEndpoint = 'https://<dc>.api.mailchimp.com/3.0/';
	        $dataCentre = explode('-', $this->apiKey)[1];
		$this->apiEndpoint = str_replace('<dc>', $dataCentre, $baseEndpoint);
	}

	/**
	 * Returns the API username to be used.
	 * @return string
	 */
	public function getApiUsername(): string
	{
		return $this->apiUsername;
	}
}
