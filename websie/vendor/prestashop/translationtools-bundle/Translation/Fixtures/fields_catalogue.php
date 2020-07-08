<?php

$_FIELDS['Customer_342f5c77ed008542e78094607ce1f7f3'] = 'firstname';
$_FIELDS['Customer_8ad75c5a8821cc294f189181722acb56'] = 'lastname';
$_FIELDS['Customer_cf673f7ee88828c9fb8f6acf2cb08403'] = 'birthday';
$_FIELDS['Customer_0c83f57c786a0b4a39efab23731c7ebc'] = 'email';
$_FIELDS['Customer_d1befa03c79ca0b84ecc488dea96bc68'] = 'website';
$_FIELDS['Customer_93c731f1c3a84ef05cd54d044c379eaa'] = 'company';
$_FIELDS['Customer_01b0fd027f8764f9c069506b8de8bf2e'] = 'siret';
$_FIELDS['Warehouse_b8af13ea9c8fe890c9979a1fa8dbde22'] = 'reference';
$_FIELDS['Warehouse_b068931cc450442b63f5b3d276ea4297'] = 'name';
$_FIELDS['Warehouse_23c3b4d168a45ef94635494ce42eb658'] = 'management_type';
$_FIELDS['Country_213ecf1210f43736b6d4997fcfa27954'] = 'iso_code';
$_FIELDS['Country_b068931cc450442b63f5b3d276ea4297'] = 'name';
$_FIELDS['Country_37f577d6d447ff0743d74245446223b3'] = 'zip_code_format';
$_FIELDS['State_213ecf1210f43736b6d4997fcfa27954'] = 'iso_code';
$_FIELDS['State_b068931cc450442b63f5b3d276ea4297'] = 'name';
$_FIELDS['Address_93c731f1c3a84ef05cd54d044c379eaa'] = 'company';
$_FIELDS['Address_8ad75c5a8821cc294f189181722acb56'] = 'lastname';
$_FIELDS['Address_342f5c77ed008542e78094607ce1f7f3'] = 'firstname';
$_FIELDS['Address_81e70cb16ec45f5ab19bb6638e8e6c2d'] = 'address1';
$_FIELDS['Address_f669f8e9f6599d0dfcd613bc6e2f347e'] = 'address2';
$_FIELDS['Address_e90ebd9556fa4031171f043013794b61'] = 'postcode';
$_FIELDS['Address_4ed5d2eaed1a1fadcc41ad1d58ed603e'] = 'city';
$_FIELDS['Address_795f3202b17cb6bc3d4b771d8c6c9eaf'] = 'other';
$_FIELDS['Address_f7a42fe7211f98ac7a60a285ac3a9e87'] = 'phone';
$_FIELDS['Address_2df2ca5cf808744c2977e4073f6b59c8'] = 'phone_mobile';
$_FIELDS['Address_eec0a9661213354fa7a52519eea3f827'] = 'vat_number';
$_FIELDS['Address_d56f5e97524d5d1ad77ec197ae11dad0'] = 'dni';

$catalogue = new \Symfony\Component\Translation\MessageCatalogue();

function addEntry($catalogue, $original, $translation, $domain = 'messages')
{
    $catalogue->set($original, $translation, $domain);
    $catalogue->setMetadata($original, ['line' => 0, 'file' => __FILE__], $domain);
}

foreach ($_FIELDS as $key => $value) {
    addEntry($catalogue, $value, $value, reset(explode('_', $key)));
}

return $catalogue;
