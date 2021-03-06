<?php

namespace Davidcwhitfield\MailChimp;

require __DIR__ . '/../vendor/autoload.php';

class Client
{
    /**
     * @var GuzzleHttp\Client $client
     */
    private $client;

	/**
	 * @param ClientCredentials $credentials
	 * @return void
	 */
    public function __construct(ClientCredentials $credentials)
    {
        $this->client = new \GuzzleHttp\Client([
            'base_uri' => $credentials->getApiEndpoint(),
            'auth' => [$credentials->getApiUsername(), $credentials->getApiKey()],
            'headers' => [
                'Content-Type' => 'application/json',
				'Accept' => 'application/json',
            ],
        ]);
    }

    public function getLists()
    {
		$lists = [];
		try {
        	$response = $this->client->get('lists');

			if ('200' == $response->getStatusCode()) {
				$data = json_decode($response->getBody()->getContents());
				$lists = $data->lists;		
			}
		} catch (\Exception $e) {
			// Handle error... logging?
		}

		return $lists;
    }

    public function createList(string $listName, Contact $contact = null, ListDefaults $defaults = null)
    {
	if (null === $contact) {
		$contact = $this->getDefaultContact();
	}

	if (null === $defaults) {
		$defaults = $this->getListDefaults();
	}

	$data = [
		'name' => $listName,
		'contact' => $contact,
		'campaign_defaults' => $defaults,
		'permission_reminder' => 'Test',
		'email_type_option' => false,
	];

	try {
		$response = $this->client->post('lists', [ 'body' => json_encode($data) ]);
		return $response;
	} catch (\Exception $e) {
		// Handle Exception
		print $e->getMessage();
	}
    }

    protected function getDefaultContact()
    {
	return (new Contact())
		->setCompany('Test company')
		->setAddressLine1('102 Home Orchard')
		->setCity('Bristol')
		->setState('South Gloucestershire')
		->setPostcode('BS37 5XG')
		->setCountry('United Kingdom');
    }

    protected function getListDefaults()
    {
	return (new CampaignDefaults())
		->setFromEmail('david@altrt.co.uk')
		->setFromName('David Curtis-Whitfield')
		->setSubject('Test Subject')
		->setLanguage('English');
    }
}
