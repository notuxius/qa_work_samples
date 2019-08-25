<?php
$I = new AcceptanceTester($scenario);

$I->wantTo('Test case 1 - Book a single ticket');

$I->amOnPage("/en");

$I->fillField("#search_from", "Phuket");
$I->fillField("#search_to", "Suratthani");

$I->click('Find Tickets');        

// TODO add loading spinner and loaded page assertions here

$I->click('Buy ticket');

$I->amOnPage("/en/checkout");

$I->fillField("#contact[mobile]", "12345678912");
$I->fillField("#contact[email]", "email@mail.com");

$I->fillField("#passenger[0][full_name]", "Test Person 1");
//$I->fillField("#passenger[0][id_no]", "12345678"); NOTE isn't working anymore?
//$I->selectOption("#passenger[0][gender]", "Male"); NOTE isn't working anymore?

$I->fillField("#passenger[1][full_name]", "Test Person 2");
//$I->fillField("#passenger[1][id_no]", "12345677"); NOTE isn't working anymore?
//$I->selectOption("#passenger[1][gender]", "Female"); NOTE isn't working anymore?

$I->click("div.row:nth-child(11) > div:nth-child(1) > div:nth-child(2) > label:nth-child(1) > input:nth-child(1)");
$I->click("div.row:nth-child(12) > div:nth-child(1) > div:nth-child(2) > label:nth-child(1) > input:nth-child(1)");
$I->click("div.row:nth-child(13) > div:nth-child(1) > div:nth-child(2) > label:nth-child(1) > input:nth-child(1)");
// TODO substitute later with something like these:
//$I->click("input[name=misc[terms]]");
//$I->click("input[name=misc[cancelation_policy]]");
//$I->click("input[name=misc[confirm_trip]]");

$I->fillField("input[name=number]", "4242 4242 4242 4242");
$I->fillField("input[name=name]", "Testing Personas");
$I->fillField("input[name=expiry]", "11 / 19");
$I->fillField("input[name=cvc]", "1111");

$I->click("Pay");
