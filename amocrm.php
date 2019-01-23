<?php

use AmoCRM\Contact;
use AmoCRM\Handler;
use AmoCRM\Lead;
use AmoCRM\Request;

require_once(__DIR__ . '/vendor/autoload.php');

try {
	$name = $_POST['user_name'];
	$email = $_POST['user_email'];
	$phone = $_POST['user_phone'];
	$subject = 'Заявка с лендинга Prozorro';

	$api = new Handler('cpborgua', 'cpb.org.ua@gmail.com');

	$lead = new Lead();
	$lead
		->setName($subject)
		->setResponsibleUserId($api->config['ResponsibleUserId'])
		->setStatusId($api->config['LeadStatusId'])
		->setTags([$name, $email, $phone]);

	$api->request(new Request(Request::SET, $lead));

	$lead = $api->last_insert_id;

	$contact = new Contact();
	$contact
		->setName($name)
		->setResponsibleUserId($api->config['ResponsibleUserId'])
		->setLinkedLeadsId($lead)
		->setCustomField($api->config['ContactFieldPhone'], $phone, 'MOB')
		->setCustomField($api->config['ContactFieldEmail'], $email, 'PRIV');

	$api->request(new Request(Request::GET, ['query' => $email], ['contacts', 'list']));

	$contact_exists = ($api->result) ? $api->result->contacts[0] : false;

	if ($contact_exists) {
		$contact
			->setUpdate($contact_exists->id, $contact_exists->last_modified + 1)
			->setResponsibleUserId($contact_exists->responsible_user_id)
			->setLinkedLeadsId($contact_exists->linked_leads_id);
	}

	$api->request(new Request(Request::SET, $contact));
} catch (\Exception $e) {
}

