<?php
/**
 * This file is part of the SevenShores/NetSuite library
 * AND originally from the NetSuite PHP Toolkit.
 *
 * New content:
 * @package    ryanwinchester/netsuite-php
 * @copyright  Copyright (c) Ryan Winchester
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * @link       https://github.com/ryanwinchester/netsuite-php
 *
 * Original content:
 * @copyright  Copyright (c) NetSuite Inc.
 * @license    https://raw.githubusercontent.com/ryanwinchester/netsuite-php/master/original/NetSuite%20Application%20Developer%20License%20Agreement.txt
 * @link       http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml
 *
 * generated:  2021-03-03 09:44:33 AM CST
 */

namespace NetSuite\Classes;

class VendorCreditItem {
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $item;
    /**
     * @var string
     */
    public $vendorName;
    /**
     * @var integer
     */
    public $line;
    /**
     * @var integer
     */
    public $orderLine;
    /**
     * @var float
     */
    public $quantity;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $units;
    /**
     * @var \NetSuite\Classes\InventoryDetail
     */
    public $inventoryDetail;
    /**
     * @var \NetSuite\Classes\RecordRefList
     */
    public $serialNumbersList;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $rate;
    /**
     * @var float
     */
    public $amount;
    /**
     * @var string
     */
    public $binNumbers;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $taxCode;
    /**
     * @var float
     */
    public $taxRate1;
    /**
     * @var float
     */
    public $taxRate2;
    /**
     * @var float
     */
    public $grossAmt;
    /**
     * @var float
     */
    public $tax1Amt;
    /**
     * @var \NetSuite\Classes\CustomFieldList
     */
    public $options;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $department;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $class;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $location;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $customer;
    /**
     * @var boolean
     */
    public $isBillable;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $amortizationSched;
    /**
     * @var string
     */
    public $amortizStartDate;
    /**
     * @var string
     */
    public $amortizationEndDate;
    /**
     * @var string
     */
    public $amortizationResidual;
    /**
     * @var float
     */
    public $taxAmount;
    /**
     * @var string
     */
    public $taxDetailsReference;
    /**
     * @var \NetSuite\Classes\CustomFieldList
     */
    public $customFieldList;
    static $paramtypesmap = array(
        "item" => "RecordRef",
        "vendorName" => "string",
        "line" => "integer",
        "orderLine" => "integer",
        "quantity" => "float",
        "units" => "RecordRef",
        "inventoryDetail" => "InventoryDetail",
        "serialNumbersList" => "RecordRefList",
        "description" => "string",
        "rate" => "string",
        "amount" => "float",
        "binNumbers" => "string",
        "taxCode" => "RecordRef",
        "taxRate1" => "float",
        "taxRate2" => "float",
        "grossAmt" => "float",
        "tax1Amt" => "float",
        "options" => "CustomFieldList",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "customer" => "RecordRef",
        "isBillable" => "boolean",
        "amortizationSched" => "RecordRef",
        "amortizStartDate" => "dateTime",
        "amortizationEndDate" => "dateTime",
        "amortizationResidual" => "string",
        "taxAmount" => "float",
        "taxDetailsReference" => "string",
        "customFieldList" => "CustomFieldList",
    );
}
